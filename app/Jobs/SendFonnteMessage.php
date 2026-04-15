<?php

namespace App\Jobs;

use App\Models\ScheduleCalendar;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendFonnteMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $schedule;

    /**
     * Create a new job instance.
     */
    public function __construct(ScheduleCalendar $schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $token = env('FONNTE_TOKEN', 'TOKEN_ANDA_DISINI');
        $target = '120363423320731159@g.us'; 
        
        $tanggalEvent = $this->schedule->start_event->translatedFormat('d F Y');

        $message = "Halo {$this->schedule->koordinator}! 👋\n\nSekadar mengingatkan nih, jadwal untuk postingan *{$this->schedule->title_event}* sudah dekat (tanggal {$tanggalEvent}).\n\nJangan lupa disiapkan kontennya ya supaya bisa segera dipublish. Kalau ada kendala, kabari saja. Semangat! ✨";

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
            'schedule' => 0,
            'typing' => false,
            'delay' => '2',
            'countryCode' => '62',
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
            Log::error("Fonnte API Error (Schedule {$this->schedule->id}): $error_msg");
            // Melempar exception agar job masuk ke tabel failed_jobs
            throw new \Exception("Fonnte Request Failed: " . $error_msg); 
        } else {
            Log::info("Fonnte API Success (Schedule {$this->schedule->id}): $response");
        }
    }

    /**
     * Handle a job failure.
     */
    public function failed(\Throwable $exception): void
    {
        // Kembalikan statusnya jadi pending kalau pengiriman gagal total, 
        // sehingga bisa dicoba lagi / dicek secara manual nantinya
        $this->schedule->update([
            'status' => 'pending'
        ]);
        
        Log::error("Queue Job for Schedule {$this->schedule->id} failed completely. Status reverted to pending.");
    }
}
