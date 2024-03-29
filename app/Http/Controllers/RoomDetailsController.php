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
          $room_links = array(); //Declare an array to hold room names that are appended with hyphens

        // Replace spaces in hotel name with hyphen so we can use it in our link
        $roomName = str_replace("-", " ", $name); 
        $room = $this->roomRepository->getByName($roomName);
        $facility_decoded = json_decode($room->facilities);
        
        $sliderRooms = $this->roomRepository->getSliderRooms();
        foreach ($sliderRooms as $roomLinks) {
                    $name = $roomLinks->name;
                    $url = str_replace(' ', '-', $name); //Replace spaces in room names with hyphen
                    $link = strtolower($url); //Change the hyphenated names to lower case
                    $room_links[$roomLinks->id] = $link;
        }
        //dd( $this->roomRepository->getSliderRooms());
        return view('room-details', [
            'room' => $room,
            'utilities' => $facility_decoded,
            'sliderRooms' => $sliderRooms,
            'room_links' => $room_links
        ]);
    }

    public function bookNow() {
        return view('book-now');
    }

    public function cancelReservation() {
        return view('cancel-reservation');
    }
}
