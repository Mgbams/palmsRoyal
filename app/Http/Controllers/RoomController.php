<?php

namespace App\Http\Controllers;

use App\Repositories\RoomRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Capacity;

class RoomController extends Controller
{
    private $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    //
    public function show(Request $request)
    {
        $room_links = array(); //Declare an array to hold room names that are appended with hyphens
        // $rooms = $this->roomRepository->getAllRooms(); // Get all the rooms
        
        $capacity = Capacity::all();
        
        $rooms =  DB::table('rooms')
                    ->join('photos', 'photos.id', '=', 'rooms.photo_id')
                    ->join('rooms_facilities', 'rooms.id', '=', 'rooms_facilities.id_room')->paginate(4);

      
        foreach ($rooms as $room) {
            $name = $room->name;
            $url = str_replace(' ', '-', $name); //Replace spaces in room names with hyphen
            $link = strtolower($url); //Change the hyphenated names to lower case
            $room_links[$room->id] = $link;
        }

        if ($request->has('filter_button')) {
            //dd($request);

            if ($request->has('price')) {
                $rooms =  DB::table('rooms')
                    ->join('photos', 'photos.id', '=', 'rooms.photo_id')
                    ->join('rooms_facilities', 'rooms.id', '=', 'rooms_facilities.id_room')
                    ->where('price', '<=', $request->price)
                    ->paginate(4);
                
                foreach ($rooms as $room) {
                    $name = $room->name;
                    $url = str_replace(' ', '-', $name); //Replace spaces in room names with hyphen
                    $link = strtolower($url); //Change the hyphenated names to lower case
                    $room_links[$room->id] = $link;
                }
                            
            }

            if ($request->has('capacity')) {
                $rooms =  DB::table('rooms')
                    ->join('photos', 'photos.id', '=', 'rooms.photo_id')
                    ->join('rooms_facilities', 'rooms.id', '=', 'rooms_facilities.id_room')
                    ->where('capacity', '<=', $request->capacity)
                    ->paginate(4);
                //dd($rooms);
                foreach ($rooms as $room) {
                    $name = $room->name;
                    $url = str_replace(' ', '-', $name); //Replace spaces in room names with hyphen
                    $link = strtolower($url); //Change the hyphenated names to lower case
                    $room_links[$room->id] = $link;
                }
            }

            return view('rooms', compact(['rooms', 'room_links', 'capacity']))->with('i', (request()->input('page', 1) - 1) * 5);
        }
      
        return view('rooms', compact(['rooms', 'room_links', 'capacity']))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
