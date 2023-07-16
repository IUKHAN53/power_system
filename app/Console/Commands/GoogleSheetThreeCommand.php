<?php

namespace App\Console\Commands;

use App\Helpers\helpers;
use App\Models\GoogleSheet;
use App\Models\TabList;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Revolution\Google\Sheets\Facades\Sheets;

class GoogleSheetThreeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:sheet-three';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tabs = TabList::where([
            'sheet' => 'sheet3',
            'update_status' => 'pending'
        ])->limit(25)->get();
        //dd($sheets);
        $getSheets = helpers::getSheetId();
        foreach ($tabs as $tab){
            try{
                DB::transaction(function () use($tab, $getSheets){
                    GoogleSheet::table($tab->table_name)->truncate();
                    $rows = Sheets::spreadsheet($getSheets['sheetThree'])
                        ->sheet($tab->name)
                        ->get();
                    $header = array_map('strtolower', $rows->pull(0));
                    $values = Sheets::collection($header,  $rows);
                    $datas = $values->map(function ($item) use($tab) {
                        $item['date'] = \Carbon\Carbon::createFromFormat('d/m/Y H:i:s',$item['date'])->format('Y-m-d H:i:s');
                        return $item;
                    });
                    DB::table($tab->table_name)->insert($datas->toArray());
                    $tab->update_status = "success";
                    $tab->save();
                });

            }
            catch (\Exception $e){}

        }
    }
}
