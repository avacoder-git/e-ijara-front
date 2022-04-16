<?php

namespace App\Console\Commands;

use App\Exports\LandMultipleExport;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class SaveReportExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:store';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {

            Excel::store(new LandMultipleExport(), 'lots.xlsx');


            $bot_url = "https://api.telegram.org/bot5262855816:AAFDzyOvxzmxTkTbgB6JPimG06hAAv8JF4I";
            $url = $bot_url . "/sendDocument?chat_id=@eijarahisobot";

            $post_fields = ['chat_id' => '@eijarahisobot',
                'document' => new \CURLFile(storage_path('app/lots.xlsx'), 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'lots_'.Carbon::now()->format('d.m.Y H:i').'.xlsx'),
                'caption' => '<b>'.Carbon::now()->format('d.m.Y H:i').' ҳолатига</b>',
                'parse_mode' => "HTML",
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type:multipart/form-data"
            ));
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
            $output = curl_exec($ch);

            return $output;
        } catch (\Exception $exception) {

            return $exception->getMessage();

        }

    }
}
