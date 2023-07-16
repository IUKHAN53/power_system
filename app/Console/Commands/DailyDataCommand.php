<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Revolution\Google\Sheets\Facades\Sheets;

class DailyDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:daily-data';

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
        $rows = Sheets::spreadsheet('1tPvztUcTAyWFa5MuB5mf7lFJpp4Pt2Trgx204kAzaYU')
            ->sheet('Sheet1')
            ->get();
        $header = array_map(array( $this, 'strChange' ), $rows->pull(0));
        $values = Sheets::collection($header,  $rows);
        //dd($values);
        try{
           DB::transaction(function () use($values){
               foreach ($values as $data){
                   $table_name = $this->strChange($data['number']);
                   DB::table($table_name)->updateOrInsert([
                       'date' => \Carbon\Carbon::createFromFormat('m/d/Y H:i:s',$data['trade_time'])->format('Y-m-d H:i:s'),
                       'open' => $data['price_open'],
                       'high' => $data['high'],
                       'low' => $data['low'],
                       'close' => $data['price'],
                       'volume' => $data['volume'],
                       'market_cap' => $data['market_cap'],
                   ]);
               }
           });
        }
        catch(\Exception $e){}

    }

    function strChange($item){
        $item = Str::slug($item, '_');
        return strtolower($item);
    }
}
