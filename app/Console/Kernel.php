<?php

namespace App\Console;

use DB;
use App\Console\Commands\ImportPosts;
use App\Console\Commands\InitEs;
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
        ImportPosts::class,
        InitEs::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
		
		$schedule->call(function () {
			//查询需要调价的药品code,调价状态
			$res = DB::table('b')->get();
			//if (time() >= $res[0]->date) {
				//进行调价操作
				DB::table('a')->insert(['b' => $res[0]->date]);
			//}
        })->hourly();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
