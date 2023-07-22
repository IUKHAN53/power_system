<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
        return view('power_system.dashboard', compact('checklist', 'data'));
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
        $columns = Schema::getColumnListing('ra_dates');
        $tables_count = count($columns) - 3;
        $tables = [];
        $date_ra = [];
        for ($i = 0; $i < $tables_count; $i++) {
            $date_from_ra = DB::table('ra_dates')->where('stockno', $stockno)->pluck($columns[$i + 3])->first();
            $date_ra[$i] = $date_from_ra;
            if ($date_from_ra != '0000-00-00') {
                $previous_dates = DB::table($number)->whereDate('date', '<', $date_from_ra)
                    ->orderBy('date', 'desc')->limit(5)->get();
                $current_date = DB::table($number)->whereDate('date', $date_from_ra)
                    ->orderBy('date', 'desc')->limit(1)->get();
                $next_dates = DB::table($number)->whereDate('date', '>', $date_from_ra)
                    ->orderBy('date')->limit(2)->get();
                $data = collect()
                    ->concat($previous_dates)
                    ->concat($current_date)
                    ->concat($next_dates);
                $tables[$i] = $data->sortBy('date');
            }
        }
        $transactions = Transaction::query()->where('stockno', convertToStockFormat($number))->get();
        $favourites = auth()->user()->favourites()->where('stockno', $number)->exists();
        return view('power_system.number-details', compact('tables', 'number', 'date_ra', 'transactions', 'favourites'));
    }

    public function raDates()
    {

        return view('power_system.ra_dates');
    }

    public function transactions($user_id = null)
    {
        if($user_id != null){
            $user = User::find($user_id);
            $transactions = $user->transactions;
        }else{
            $user = null;
            $transactions = Transaction::query()->get();
        }
        return view('power_system.transactions', compact('transactions','user'));
    }

    public function users()
    {
        $users = User::query()->get();
        return view('power_system.users', compact('users'));
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
        $checklist = $request->checklist;
        $v1 = 50 - ($checklist[0] ?? 0);
        $v2 = 50 - ($checklist[1] ?? 0);
        $v3 = 10 * ($checklist[2] ?? 0);
        $v4 = 10 * ($checklist[3] ?? 0);
        $result = ($v1 + $v2 + $v3 + $v4) * 1.5;
        $checklist[] = $result;
        Cookie::queue('checklist', json_encode($checklist), 60 * 24);
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

    public function saveTransaction(Request $request)
    {
        $request->validate([
            'stockno' => 'required',
            'buy_date' => 'required',
            'buy_price' => 'required',
            'buy_volume' => 'required',
            'sell_date' => 'required',
            'sell_price' => 'required',
            'sell_volume' => 'required',
            'difference' => 'required',
            'remarks' => 'required',
        ]);
        $transaction = new Transaction();
        $transaction->stockno = convertToStockFormat($request->stockno);
        $transaction->buy_date = $request->buy_date;
        $transaction->buy_price = $request->buy_price;
        $transaction->buy_volume = $request->buy_volume;
        $transaction->sell_date = $request->sell_date;
        $transaction->sell_price = $request->sell_price;
        $transaction->sell_volume = $request->sell_volume;
        $transaction->difference = $request->difference;
        $transaction->remarks = $request->remarks;
        $transaction->user_id = auth()->id();
        $transaction->save();
        flashSuccess('Transaction saved successfully.');
        return redirect()->back();
    }
}
