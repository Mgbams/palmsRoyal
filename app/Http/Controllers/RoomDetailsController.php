<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomDetailsController extends Controller
{
    public function show() {
        return view('room-details');
    }
}
