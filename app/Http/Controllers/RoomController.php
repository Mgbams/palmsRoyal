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
    }

    //
    public function show(Request $request)
    {
        $room_links = array(); //Declare an array to hold room names that are appended with hyphens
       // $rooms = $this->roomRepository->getAllRooms(); // Get all the rooms

        $rooms =  DB::table('rooms')
                    ->join('photos', 'photos.id', '=', 'rooms.photo_id')
                    ->join('rooms_facilities', 'rooms.id', '=', 'rooms_facilities.id_room')->paginate(4);

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

       
        //dd($rooms);
       // dd($room_links );
        // TODO LATER
        //$data = Photo::get();
        //dd(gettype($data[0]->url));
       /*  $decodePhoto = json_decode($data[0]->url);
        $dataArray = [];
        foreach($decodePhoto as $photo) {
            var_dump($photo);
            $dataArray.push($photo);
        } */
       // dd(json_decode($rooms[0]->url));
        //dd($rooms);
        return view('rooms', compact(['rooms', 'room_links']))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}



 /*  $rooms =  DB::table('room_type_rooms')
            ->join('rooms', 'rooms.id', '=', 'room_type_rooms.room_id')
            ->join('room_types', 'room_types.id', '=', 'room_type_rooms.room_type_id')
            ->join('photos', 'photos.id', '=', 'rooms.photo_id')->paginate(5); */