<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class RoomsFacilities extends Model
{
    protected $table = 'rooms_facilities';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'capacity', 'facilities', 'floor', 'id_room'
    ];
}
