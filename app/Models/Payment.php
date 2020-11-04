<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount', 'reservation_id', 
    ];

    public function reservation() {
        return $this->belongsTo(Reservation::class);
    }
}
