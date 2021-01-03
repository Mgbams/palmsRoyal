<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App;

class RoyalPalmsHomePageController extends Controller
{
    use HasRoles;

    public function show(Request $request)
    {
       /*  App::setLocale($request->lang);
        session()->put('locale', $request->lang); */

        return view('welcome');
    }

    //Navigation menu TODO
    /* public function index()
    {
        return view('layouts.app');
    } */

}
