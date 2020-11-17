<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class EatAndDrinkMorningController extends Controller
{
    //
    public function show()
    {
        return view('eat-and-drink-morning');
    }

    // Generate PDF
    public function createPDF()
    {
        // retreive all records from db
        //$data = Employee::all();

        // share data to view
        //view()->share('employee', $data);
        //$pdf = PDF::loadView('pdf/main-menu', $data);

        $pdf = PDF::loadView('pdf/main-menu');

        // download PDF file with download method
        return $pdf->download('main_menu.pdf');
    }
}
