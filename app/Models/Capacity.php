<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    protected $table = 'capacities';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'capacity'
    ];
}
