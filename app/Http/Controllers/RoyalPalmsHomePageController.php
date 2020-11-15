<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoyalPalmsHomePageController extends Controller
{
    //
    public function show()
    {
        return view('welcome');
    }

    //Navigation menu TODO
    public function index()
    {
        return view('navigation-menu');
    }

    //Navigation menu TODO
    public function effects()
    {
        return view('navigation-header-effects');
    }
}
