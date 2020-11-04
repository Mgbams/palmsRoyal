<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'room_id', 'comments', 'ratings',
    ];

    public function rooms() {
        return $this->belongsToMany(Room::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
