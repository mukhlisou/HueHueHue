<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\MonitorModel;
use Mail;
use DateTime;

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
            $monitor = MonitorModel::all();
            // Send some e-mail
            foreach($monitor as $field){
                if($field->sla == 5 && $field->tanggalbayarbp == ((new DateTime('today'))->modify('-2 day')->format('Y-m-d'))){
                    Mail::raw('SLA 5 overdue', function($message)
                    {
                        $message->to('vincendadiaz7@gmail.com')->subject('peringatan pembayaran');;
                    });
                    
                }else if($field->sla == 15 && $field->tanggalbayarbp == ((new DateTime('today'))->modify('-9 day')->format('Y-m-d'))){
                    Mail::raw('SLA 15 overdue', function($message)
                    {
                        $message->to('vincendadiaz7@gmail.com')->subject('peringatan pembayaran');;
                    });
                }else if($field->sla == 40 && $field->tanggalbayarbp == ((new DateTime('today'))->modify('-29 day')->format('Y-m-d'))){
                    Mail::raw('SLA 40 overdue', function($message)
                    {
                        $message->to('vincendadiaz7@gmail.com')->subject('peringatan pembayaran');;
                    });
                }else if($field->sla == 75 && $field->tanggalbayarbp == ((new DateTime('today'))->modify('-64 day')->format('Y-m-d'))){
                    Mail::raw('SLA 75 overdue', function($message)
                    {
                        $message->to('vincendadiaz7@gmail.com')->subject('peringatan pembayaran');;
                    });
                }
            }

        })->dailyAt('09:00');
    }
}
