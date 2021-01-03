<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LocalizationController extends Controller
{
     public function languageChange($locale)
    {
        /* App::setLocale($request->lang);
        session()->put('locale', $request->lang);  
        return view('welcome'); */
    
        Session::put('locale', $locale);
        return redirect()->back();
    }
}
