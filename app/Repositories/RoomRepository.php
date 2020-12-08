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
        
        $room = DB::table('room_type_rooms')
            ->join('rooms', 'rooms.id', '=', 'room_type_rooms.room_id')
            ->join('room_types', 'room_types.id', '=', 'room_type_rooms.room_type_id')
            ->join('photos', 'photos.id', '=', 'rooms.photo_id')
            ->where('rooms.name', '=', $room_name)
            ->first();
        return $room;
    }
}
