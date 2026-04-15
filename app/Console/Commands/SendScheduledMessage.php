<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ScheduleCalendar;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class SendScheduledMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-scheduled-message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Kirim pesan scheduled dari tabel ScheduleCalendar menggunakan Fonnte';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Get data with 'pending' status where start_event is today or past
        $schedules = ScheduleCalendar::where('status', 'pending')
                    ->whereDate('start_event', '<=', Carbon::today())
                    ->get();
        
        if ($schedules->isEmpty()) {
            $this->info('Tidak ada pesan jadwal yang pending.');
            return;
        }

        foreach ($schedules as $schedule) {
            $this->info("Memasukkan ID Jadwal {$schedule->id} ke antrian (Queue)...");
            
            // Ubah status ke sent di awal untuk menghindari job dipanggil berulang kali 
            // oleh scheduler berikutnya, jika ada antrian yang numpuk.
            $schedule->update([
                'status' => 'sent'
            ]);

            // Dispatch jobnya ke Queue
            \App\Jobs\SendFonnteMessage::dispatch($schedule);
        }
        
        $this->info('Selesai memproses pemanggilan antrian pesan jadwal.');
    }
}
