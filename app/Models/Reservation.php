<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'guest_count', 'check_in', 'check_out', 'reservation_number', 'user_id', 
        'balance_amount', 'status', 'paid_amount', 'discount_percent', 
        'room_name', 'cancelled_at', 'number_of_days_booked',
    ];

    /* public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
    */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /* public function roomType() {
        return $this->belongsTo(RoomType::class);
    } */

    public function invoice() {
        return $this->hasOne(Invoice::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function sendEmailOnReservation() {
        return $this->hasOne(SendEmailOnReservation::class);
    }

}
