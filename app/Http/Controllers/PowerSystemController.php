<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class PowerSystemController extends Controller
{
    public function dashboard()
    {
        $checklist = Cookie::get('checklist');
        if ($checklist) {
            $checklist = json_decode($checklist, true);
        } else {
            $checklist = [];
        }
        $ra_dates = DB::table('ra_dates')->where('next', '!=', '0000-00-00')->get();
        $data = [];
        foreach ($ra_dates as $item) {
            $number = extractValueFromStockFormat($item->stockno);
            $to_go = Carbon::parse($item->next)->diffInDays(Carbon::now());
            $is_fav = auth()->user()->favourites()->where('stockno', convertToStockFormat($number))->exists();
            $data[$number] = [
                'next' => $item->next,
                'to_go' => $to_go,
                'fav' => $is_fav,
            ];
        }
        return view('power_system.dashboard', compact('checklist','data'));
    }

    public function numbers()
    {
        $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();

        $tablesStartingWithHKG = array_filter($tables, function ($tableName) {
            return str_starts_with($tableName, 'hkg');
        });
        $data = [];
        foreach ($tablesStartingWithHKG as $table) {
            $next = DB::table('ra_dates')->where('stockno', convertToStockFormat($table))->pluck('next')->toArray();
            $to_go = 0;
            if (isset($next[0]) && $next[0] != '0000-00-00') {
                $to_go = Carbon::parse($next[0])->diffInDays(Carbon::now());
            }
            $is_fav = auth()->user()->favourites()->where('stockno', convertToStockFormat($table))->exists();
            $data[$table] = [
                'next' => $next[0] ?? '0000-00-00',
                'to_go' => $to_go,
                'fav' => $is_fav,
            ];
        }
        return view('power_system.numbers', compact('data'));
    }

    public function numberDetails(Request $request, $number)
    {
        $stockno = convertToStockFormat($number);
        $next_value = DB::table('ra_dates')->where('stockno', $stockno)->pluck('next');
        isset($next_value[0]) ? $ra_date = $next_value[0] : $ra_date = '0000-00-00';
        if($ra_date != '0000-00-00'){
            $ra_date = Carbon::parse($ra_date)->toDateTimeString();
        }
        $previous_dates = DB::table($number)->whereDate('date','<', $ra_date)
            ->orderBy('date','desc')->limit(5)->get();
        $current_date = DB::table($number)->whereDate('date', $ra_date)
            ->orderBy('date','desc')->limit(1)->get();
        $next_dates = DB::table($number)->whereDate('date','>', $ra_date)
            ->orderBy('date')->limit(2)->get();
        $data = collect()
            ->concat($previous_dates)
            ->concat($current_date)
            ->concat($next_dates);
        $transactions = DB::table('transactions')->where('stockno', $number)->get();
        $favourites = auth()->user()->favourites()->where('stockno', $number)->exists();
        return view('power_system.number-details', compact('data', 'number','ra_date', 'transactions', 'favourites'));
    }

    public function raDates()
    {

        return view('power_system.ra_dates');
    }

    public function transactions()
    {
        return view('power_system.transactions');
    }

    public function users()
    {
        return view('power_system.users');
    }

    public function markAsFavourite(Request $request)
    {
        $user = auth()->user();
        if ($request->fav == 'false') {
            $user->favourites()->where('stockno', convertToStockFormat($request->number))->delete();
            return response()->json(['success' => true]);
        } else {
            $user->favourites()->updateOrCreate([
                'stockno' => convertToStockFormat($request->number),
            ], [
                'stockno' => convertToStockFormat($request->number),
            ]);
            return response()->json(['success' => true]);
        }
    }

    public function calculateChecklist(Request $request)
    {
        $request->validate([
            'checklist' => 'required|array',
            'checklist.*' => 'required',
        ], [
            'checklist.*.required' => 'This field is required.',
        ]);
        Cookie::queue('checklist', json_encode($request->checklist), 60 * 24);
        flashSuccess('Checklist saved successfully.');
        return redirect()->back();
    }

    public function saveNotes(Request $request)
    {
        $request->validate([
            'notes' => 'required|string',
        ]);
        $user = auth()->user();
        $user->notes = $request->notes;
        $user->save();
        return response()->json(['success' => true]);
    }
}
