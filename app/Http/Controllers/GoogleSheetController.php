<?php

namespace App\Http\Controllers;


use App\Helpers\helpers;
use App\Models\GoogleSheet;
use App\Models\TabList;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class GoogleSheetController extends Controller
{
    public function sheetOne(Request $request)
    {
        $tabs = TabList::where("sheet", 'sheet1')->get();
        if ($request->ajax()) {
            if ($request->has('tab') && !empty($request->get('tab'))) {
                $table_name = $request->get('tab');
                $data = GoogleSheet::table($table_name);
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('date', function ($row) {
                        return date('d-m-Y H:i:s', strtotime($row->date));
                    })
                    ->make(true);
            } else {
                return [];
            }
        }

        return view('sheets.index')
            ->with([
                'route' => route('sheet.one'),
                'title' => 'Excel 1',
                'tabs' => $tabs
            ]);
    }

    public function sheetTwo(Request $request)
    {
        $tabs = TabList::where("sheet", 'sheet2')->get();
        if ($request->ajax()) {
            if ($request->has('tab') && !empty($request->get('tab'))) {
                $table_name = $request->get('tab');
                $data = GoogleSheet::table($table_name);
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('date', function ($row) {
                        return date('d-m-Y H:i:s', strtotime($row->date));
                    })
                    ->make(true);
            } else {
                return [];
            }
        }

        return view('sheets.index')
            ->with([
                'route' => route('sheet.one'),
                'title' => 'Excel 2',
                'tabs' => $tabs
            ]);
    }

    public function sheetThree(Request $request)
    {
        $tabs = TabList::where("sheet", 'sheet3')->get();
        if ($request->ajax()) {
            if ($request->has('tab') && !empty($request->get('tab'))) {
                $table_name = $request->get('tab');
                $data = GoogleSheet::table($table_name);
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->editColumn('date', function ($row) {
                        return date('d-m-Y H:i:s', strtotime($row->date));
                    })
                    ->make(true);
            } else {
                return [];
            }
        }

        return view('sheets.index')
            ->with([
                'route' => route('sheet.one'),
                'title' => 'Excel 3',
                'tabs' => $tabs
            ]);
    }
}