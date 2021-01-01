<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ReservationRepository;
use Illuminate\Support\Facades\Hash;

class ModifyOrCancelReservationController extends Controller
{   
    private $reservationRepository;

    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function cancelByEmailAndPassword(Request $request) {

        $userInfo = $this->reservationRepository->getByEmail($request->email);

        if ($userInfo && Hash::check($request->password, $userInfo->password)) {

            $userId = $userInfo->id;
            $userReservationInfo = $this->reservationRepository->getByUserId($userId);
            //dd($userReservationInfo);
            if ($userReservationInfo) {
                //write logic when the user has actually reserved a room
                return redirect()->route('reservation.update');
            } else {
                return redirect()->route('cancel-reservation')->with(['message' => 'There is no reservation by this user']);
            }

        } else {
            return redirect()->route('cancel-reservation')->with(['message' => 'There is no matching user with these email and password']);
        }
    }

    public function cancelByPasswordAndReservationNumber(Request $request) {
        $userInfo = $this->reservationRepository->getByEmail($request->email);

        if ($userInfo) {

            $userId = $userInfo->id;
            $userReservationInfo = $this->reservationRepository->getByreservationNumber($request->confirmationNumber, $userId);
            //dd($userReservationInfo);
            if ($userReservationInfo) {
                //write logic when the user has actually reserved a room
                return redirect()->route('reservation.update');
            } else {
                return redirect()->route('cancel-reservation')->with(['reservationError' => 'Invalid reservation number']);
            }

        } else {
             return redirect()->route('cancel-reservation')->with(['reservationError' => 'There is no user with this email']);
        }
    }

    public function updateReservation() {
        return view('submit-reservation-modification');
    }
}
