<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            DB::statement("INSERT INTO laporans (info, jabatan_kyn, jam_msk, jam_plng, masuk, nama_kyn, nip_kyn, pulang, tanggal) SELECT info, jabatan_kyn, jam_msk, jam_plng, masuk, nama_kyn, nip_kyn, pulang, tanggal FROM absens");
            DB::table('absens')->delete();
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
