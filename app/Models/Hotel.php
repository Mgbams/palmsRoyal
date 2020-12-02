<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hotel_name', 'location', 'owner',
    ];

    protected $hidden = ['created_at', 'updated_at'];
    public $timestamps = false;

    public function rooms() {
        return $this->hasMany(Room::class);
    }

    public function hotelPaymentInfos() {
        return $this->hasMany(HotelPaymentInfo::class);
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}
