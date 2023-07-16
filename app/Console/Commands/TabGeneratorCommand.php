<?php

namespace App\Console\Commands;

use App\Helpers\helpers;
use App\Models\TabList;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Revolution\Google\Sheets\Facades\Sheets;

class TabGeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:tab-generator';

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
        $getSheets = helpers::getSheetId();
        $this->tabGenerator($getSheets['sheetOne'],'sheet1');
        $this->tabGenerator($getSheets['sheetTwo'],'sheet2');
        $this->tabGenerator($getSheets['sheetThree'],'sheet3');


    }
    private function tabGenerator($sheetName,$sheetNum){
        $sheetOne = Sheets::spreadsheet($sheetName)
            ->sheet('Sheet 1')
            ->get();
        foreach ($sheetOne as $sheet){
            $table_name = Str::slug($sheet[0], '_');
            $count = TabList::where('table_name',$table_name )->count();
            if($count == '0'){
                if (!Schema::hasTable($table_name)){
                    Schema::create($table_name, function ($table){
                        $table->id();
                        $table->dateTime('date');
                        $table->string('open')->nullable();
                        $table->string('high')->nullable();
                        $table->string('low')->nullable();
                        $table->string('close')->nullable();
                        $table->string('volume')->nullable();
                        $table->string('market_cap')->nullable();
                        $table->timestamps();
                    });
                }
                $data = [
                    'name' => $sheet[0],
                    'table_name' => $table_name,
                    'sheet' => $sheetNum
                ];
                TabList::create($data);
            }
            else{
                TabList::where([
                    'sheet' => $sheetNum,
                    'table_name' => $table_name
                ])->update([
                    'update_status' => 'pending'
                ]);
            }

        }
    }
}
