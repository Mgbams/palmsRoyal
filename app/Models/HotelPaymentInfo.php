<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelPaymentInfo extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'payment_method', 'payment_details', 'balance_amount', 'hotel_id',
    ];

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
}
