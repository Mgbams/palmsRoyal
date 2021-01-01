<?php

namespace App\Repositories;

use App\Models\Reservation;
use App\User;
use Illuminate\Support\Facades\DB;

class ReservationRepository
{

    /**
     * Get's all rooms.
     *
     * @return mixed
     */

    /* public function getAllRooms()
    {
        $rooms = DB::table('room_type_rooms')
            ->join('rooms', 'rooms.id', '=', 'room_type_rooms.room_id')
            ->join('room_types', 'room_types.id', '=', 'room_type_rooms.room_type_id')
            ->join('photos', 'photos.id', '=', 'rooms.photo_id')
            ->get();

        return $rooms;

         $reservation = DB::table('room_type_rooms')
                        ->whereColumn([
                            ['first_name', '=', $email],
                            ['reservation_number', '=', $reservationNumber]
                        ])->first();
        return $reservation;
    } */

    /**
     * Get's a reservation by email and reservation number
     *
     * @param int
     * @return collection
     */

    public function getByreservationNumber($reservationNumber, $userId)
    {
        
        $reservation = DB::table('reservations')
                        ->where('reservation_number', '=', $reservationNumber)
                        ->where('user_id', '=', $userId)->first();
        return $reservation;
    }

    //Get reservation details by email and password
      public function getByEmail($email)
    {
        
        $user = DB::table('users')
                ->where('email', '=', $email)->first();
        return $user;
    }

    //Get reservation by user Id after getting the id from the function getByEmail()
      public function getByUserId($userId)
    {
        
        $user = DB::table('reservations')
                ->where('user_id', '=', $userId)->first();
        return $user;
    }

    
}
