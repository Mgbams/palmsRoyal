<?php

namespace App\Http\Controllers;

use App\Repositories\RoomRepository;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    private $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    //
    public function show()
    {
        $room_links = array(); //Declare an array to hold room names that are appended with hyphens
        $rooms = $this->roomRepository->getAllRooms(); // Get all the rooms
        foreach ($rooms as $room) {
            $name = $room->name;
            $url = str_replace(' ', '-', $name); //Replace spaces in room names with hyphen
            $link = strtolower($url); //Change the hyphenated names to lower case
            $room_links[$room->id] = $link;
        }
        
        return view('rooms')->with([
            'rooms' => $rooms,
            'room_links' => $room_links 
        ]);
    }
}
