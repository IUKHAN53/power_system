<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Revolution\Google\Sheets\Facades\Sheets;
use Yajra\DataTables\DataTables;

class UploadController extends Controller
{
    public function index(Request $request){

        if ($request->ajax()) {
            $data = Upload::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return date('d-m-Y H:i:s', strtotime($row->created_at));
                })
                ->addColumn('actions', function ($row) use ($request) {
                    $btn =  "";
                    if(($row->completed == 'No')){
                        $btn = $btn." <a href='" . url('/upload/delete/'.$row->id) . "' class='btn btn-danger btn-sm deleteBtn'><i class='fas fa-trash-alt'></i></a>";
                    }
                    return $btn;
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('upload.index');
    }


    public function create(Request $request){
        //dd($request->all());
        $validator = \Validator::make($request->all(), [
            'file' => 'required|max:10000|mimes:xlsx,csv,xls',
            'sheet' => 'required'
        ]);
        if (!$validator->fails()){
            if($request->hasFile('file'))
            {
                $name = time().'_'.$request->file('file')->getClientOriginalName();
                $request->file('file')->storeAs('public/sheet', $name);
                $file = new Upload();
                $file->file_path = "public/sheet/".$name;
                $file->sheet = $request->sheet;
                $file->save();
                if ($file->save()){
                    return back();
                }

            }
        }
        else{
            //echo "error"; exit;
            return back()->withInput()
                ->withErrors($validator);
        }
    }

}
