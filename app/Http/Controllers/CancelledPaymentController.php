<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancelledPaymentController extends Controller
{
    public function index()
    {
        return view('cancelled-payment');
    }
}
