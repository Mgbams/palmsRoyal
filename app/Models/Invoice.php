<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reservation_id', 'ratings', 'amount', 'user_id', 'issued_date', 
        'paid_date', 'cancelled_date',
    ];

    public function reservation() {
        return $this->belongsTo(Reservation::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
