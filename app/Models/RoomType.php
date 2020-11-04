<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'capacity', 'wifi', 'ac', 'heater', 'other_facilities', 'floor',
    ];

    public function rooms() {
        return $this->hasMany(Room::class);
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}
