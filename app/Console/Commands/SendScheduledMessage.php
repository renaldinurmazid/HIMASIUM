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

        // Jangan lupa set FONNTE_TOKEN di file .env
        $token = env('FONNTE_TOKEN', 'TOKEN_ANDA_DISINI');

        foreach ($schedules as $schedule) {
            $this->info("Mengirim pesan untuk ID Jadwal: {$schedule->id}");
            
            $target = '120363423320731159@g.us'; 
            $tanggalEvent = $schedule->start_event->translatedFormat('d F Y');

            $message = "Halo {$schedule->koordinator}! 👋\n\nSekadar mengingatkan nih, jadwal untuk postingan *{$schedule->title_event}* sudah dekat (tanggal {$tanggalEvent}).\n\nPesan Catatan: \n{$schedule->message}\n\nJangan lupa disiapkan kontennya ya supaya bisa segera dipublish. Kalau ada kendala, kabari saja. Semangat! ✨";

            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://api.fonnte.com/send',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => array(
                'target' => $target,
                'message' => $message,
                // 'url' => 'https://md.fonnte.com/images/wa-logo.png', // Opsional
                // 'filename' => 'filename', // Opsional
                'schedule' => 0,
                'typing' => false,
                'delay' => '2',
                'countryCode' => '62',
                // 'file' => new \CURLFile("localfile.jpg"), // Hapus/comment jika tidak kirim file lokal
                // 'location' => '-7.983908, 112.621391', // Opsional
                'followup' => 0,
                'inboxid' => 0,
                'duration' => 1,
              ),
              CURLOPT_HTTPHEADER => array(
                'Authorization: ' . $token
              ),
            ));

            $response = curl_exec($curl);
            $error_msg = null;
            if (curl_errno($curl)) {
              $error_msg = curl_error($curl);
            }
            curl_close($curl);

            if (isset($error_msg)) {
                $this->error("Gagal mengirim ID {$schedule->id}: $error_msg");
                Log::error("Fonnte API Error (Schedule {$schedule->id}): $error_msg");
            } else {
                $this->info("Berhasil mengirim ID {$schedule->id}. Response: $response");
                Log::info("Fonnte API Success (Schedule {$schedule->id}): $response");
                
                // Ubah status ke sent setelah dikirim
                $schedule->update([
                    'status' => 'sent'
                ]);
            }
        }
        
        $this->info('Selesai memproses pesan jadwal.');
    }
}
