<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'photos';
     //protected $table = 'photosnew';
    
    
    public $timestamps = false;

    protected $fillable = [
        'url'
    ];

    public function room() {
        return $this->belongsTo(Room::class);
    }
}
