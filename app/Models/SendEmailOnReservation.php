<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SendEmailOnReservation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message_sent', 'message_received', 'reservation_id', 
    ];

    public function reservation() {
        return $this->belongsTo(Reservation::class);
    }
}
