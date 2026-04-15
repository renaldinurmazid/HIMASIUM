<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleCalendar extends Model
{
    protected $fillable = [
        'title_event',
        'message',
        'koordinator',
        'start_event',
        'status',
    ];

    protected $casts = [
        'start_event' => 'date',
    ];

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeSent($query)
    {
        return $query->where('status', 'sent');
    }
}
