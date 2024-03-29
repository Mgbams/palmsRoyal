<?php

namespace App\Repositories;

use App\Models\Room;
use Illuminate\Support\Facades\DB;

class RoomRepository
{

    /**
     * Get's all rooms.
     *
     * @return mixed
     */

    public function getAllRooms()
    {
        $rooms = DB::table('room_type_rooms')
            ->join('rooms', 'rooms.id', '=', 'room_type_rooms.room_id')
            ->join('room_types', 'room_types.id', '=', 'room_type_rooms.room_type_id')
            ->join('photos', 'photos.id', '=', 'rooms.photo_id')
            ->get();

        return $rooms;
    }

    /**
     * Get's a room by it's ID
     *
     * @param int
     * @return collection
     */

    public function getByName($room_name)
    {
        
        $room = DB::table('rooms')
                ->join('photos', 'photos.id', '=', 'rooms.photo_id')
                ->join('rooms_facilities', 'rooms.id', '=', 'rooms_facilities.id_room')
                ->where('rooms.name', '=', $room_name)
                ->first();
        return $room;
    }

    public function getById($roomId)
    {
        
        $room = DB::table('rooms')
            ->join('photos', 'photos.id', '=', 'rooms.photo_id')
            ->join('rooms_facilities', 'rooms.id', '=', 'rooms_facilities.id_room')
            ->where('rooms.id', '=', $roomId)
            ->first();
        return $room;
    }

    public function getSliderRooms()
    {
         return DB::table('rooms')
                    ->join('photos', 'photos.id', '=', 'rooms.photo_id')
                    ->join('rooms_facilities', 'rooms.id', '=', 'rooms_facilities.id_room')
                    ->take(6) //take first Six rows
                    ->get();
        return $room;
    }
}