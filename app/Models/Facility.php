<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'capacity', 'wifi', 'ac', 'heater', 'other_facilities', 'floor',
    ];
}
