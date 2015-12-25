<?php

namespace App\Console;

use App\Transfer;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

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
        $schedule->call(function () {
            $transfers = Transfer::all();
            foreach ( $transfers as $transfer )
            {
                if ( !DB::table( 'usecashnow' )->where( 'userid', $transfer->userid )->where( 'zoneid', $transfer->zoneid )->take(1)->exists() )
                {
                    DB::table( 'usecashnow' )->insert([
                        'userid' => $transfer->userid,
                        'zoneid' => $transfer->zoneid,
                        'sn' => 0,
                        'aid' => 1,
                        'point' => 0,
                        'cash' => $transfer->cash,
                        'status' => 1,
                        'creatime' => Carbon::now()
                    ]);
                    $transfer->delete();
                }
            }
        })->everyMinute();
    }
}
