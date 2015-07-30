<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\MonitorModel;
use Mail;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function()
        {
            Mail::raw('peringatan: waktu pembayaran telah lewat', function($message)
            {
                $message->to('b3r5erk3r@yahoo.com')->subject('peringatan pembayaran');;
            });

            $today = (new DateTime('today'))->format('Y-m-d');
            $monitor = MonitorModel::all();
            // Send some e-mail
            foreach($monitor as $field){
                if($field->sla == 5){
                    if(($today->modify('-2 day')).equals($field->tanggalbayarbp)){
                        Mail::raw('peringatan: sisa waktu pembayaran tinggal dua hari lagi', function($message)
                        {
                            $message->to('b3r5erk3r@yahoo.com')->subject('peringatan pembayaran');;
                        });
                    }
                }else if($field->sla == 15){
                    if(($today->modify('-9 day')).equals($field->tanggalbayarbp)){
                        Mail::raw('peringatan: waktu pembayaran telah lewat', function($message)
                        {
                            $message->to('b3r5erk3r@yahoo.com')->subject('peringatan pembayaran');;
                        });
                    }
                }else if($field->sla == 40){
                    if(($today->modify('-29 day')).equals($field->tanggalbayarbp)){
                        Mail::raw('peringatan: waktu pembayaran telah lewat', function($message)
                        {
                            $message->to('b3r5erk3r@yahoo.com')->subject('peringatan pembayaran');;
                        });
                    }
                }else if($field->sla == 75){
                    if(($today->modify('-64 day')).equals($field->tanggalbayarbp)){
                        Mail::raw('peringatan: waktu pembayaran telah lewat', function($message)
                        {
                            $message->to('b3r5erk3r@yahoo.com')->subject('peringatan pembayaran');;
                        });
                    }
                }
            }

        })->dailyAt('21:55');
    }
}
