<?php

namespace App\Http\Controllers;
use App\Repositories\RoomRepository;

use Illuminate\Http\Request;

class RoomDetailsController extends Controller
{
    private $roomRepository;

    public function __construct(RoomRepository $roomRepository) {
        $this->roomRepository = $roomRepository;
    }


    //Get room details using the room name
    public function showSingleRoom($name)
    {
        // Replace spaces in hotel name with hyphen so we can use it in our link
        $roomName = str_replace("-", " ", $name); 
        $room = $this->roomRepository->getByName($roomName);
        $facility_decoded = json_decode($room->facilities);
        //dd(gettype(json_decode($room->facilities)));
        return view('room-details', [
            'room' => $room,
            'utilities' => $facility_decoded
        ]);
    }

    public function bookNow() {
        return view('book-now');
    }

    public function cancelReservation() {
        return view('cancel-reservation');
    }
}
