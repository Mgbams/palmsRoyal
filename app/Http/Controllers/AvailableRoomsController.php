<?php

namespace App\Http\Controllers;

use App\Repositories\RoomRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class AvailableRoomsController extends Controller
{
    private $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function index($day, $checkin, $checkout)
    {
        //dd($day, $checkin, $checkout);
        Session::put('numberOfDaysBooked', $day);
        Session::put('checkInDate', $checkin);
        Session::put('checkOutDate', $checkout);

        $available_rooms =  DB::table('rooms')
            ->join('photos', 'photos.id', '=', 'rooms.photo_id')
             ->join('rooms_facilities', 'rooms_facilities.id_room', '=', 'rooms.id')
            ->where('rooms.is_available', '=', 1)
            ->paginate(5);
        //dd($available_rooms);
        return view('available-rooms', compact('available_rooms'));
    }
}
