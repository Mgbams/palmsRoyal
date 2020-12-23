<?php

namespace App\Http\Controllers;

use App\Repositories\RoomRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    private $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;

        /*$this->middleware('permission:room-list|room-create|room-edit|room-delete', ['only' => ['index''show']]);
        $this->middleware('permission:room-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:room-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:room-delete', ['only' => ['destroy']]);*/
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

        /*return view('rooms')->with([
            'rooms' => $rooms,
            'room_links' => $room_links
        ]);*/

        $rooms =  DB::table('room_type_rooms')
            ->join('rooms', 'rooms.id', '=', 'room_type_rooms.room_id')
            ->join('room_types', 'room_types.id', '=', 'room_type_rooms.room_type_id')
            ->join('photos', 'photos.id', '=', 'rooms.photo_id')->paginate(5);
        return view('rooms', compact(['rooms', 'room_links']))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
