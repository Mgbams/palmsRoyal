<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'alpha2', 'alpha3', 'nom_en_gb', 'nom_fr_fr'];

    protected $hidden = ['created_at', 'updated_at'];
    public $timestamps = false;
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
