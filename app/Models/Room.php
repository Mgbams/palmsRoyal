<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'price', 'name', 'description', 'available_date', 'auto_approve', 'published', 'vat', 'discount', 'is_available', 'hotel_id',
    ];

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }

    public function photos() {
        return $this->hasMany(Photo::class);
    }

    public function roomType() {
        return $this->belongsTo(RoomType::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
