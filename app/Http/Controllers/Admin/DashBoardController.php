<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Hotel;
use App\Models\Room;
use App\User;

class DashBoardController extends Controller
{
    public function index()
    {   $totalPrice = 0;
        $facilitiesCount    = Facility::get()->count();
        $roomsCount         = Room::get()->count();
        $guestsCount        = User::get()->count();
        $roomsNotAvailable  = Room::where('is_available', '=', '1')->get()->count(); //Available rooms
        $roomsPriceArray   = Room::select('price')->get();
        
        for($i = 0; $i < count($roomsPriceArray); $i++)
        {
            $totalPrice = $totalPrice + $roomsPriceArray[$i]['price'];
        }
        //dd( $totalPrice);
        return view('admin.dashboard', compact(
            [
            'facilitiesCount', 
            'roomsCount', 
            'guestsCount', 
            'roomsNotAvailable',
            'totalPrice'
            ]
        ));
    }
}
