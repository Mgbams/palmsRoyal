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
    public function createPDF($menu)
    {
        // retreive all records from db
        //$data = Employee::all();

        // share data to view
        //view()->share('employee', $data);
        //$pdf = PDF::loadView('pdf/main-menu', $data);

        //$pdf = PDF::loadView('pdf/main-menu');

        // download PDF file with download method
        //return $pdf->download('main_menu.pdf');

        switch ($menu) {
            case 'menu-principal.pdf':
                $pdf = PDF::loadView('pdf/main-menu');
                // download PDF file with download method
                return $pdf->download('main_menu.pdf');
                break;
            case 'bar-book.pdf':
                $pdf = PDF::loadView('pdf/bar-book');
                // download PDF file with download method
                return $pdf->download('bar_book.pdf');
                break;
            case 'break-fast-menu.pdf':
                $pdf = PDF::loadView('pdf/breakfast-menu');
                // download PDF file with download method
                return $pdf->download('breakfast_menu.pdf');
                break;
            case 'wine-list.pdf':
                $pdf = PDF::loadView('pdf/wine-list');
                // download PDF file with download method
                return $pdf->download('wine_list.pdf');
                break;
            case 'diner-menu.pdf':
                $pdf = PDF::loadView('pdf/diner-menu');
                // download PDF file with download method
                return $pdf->download('diner_menu.pdf');
                break;
            default:
            //Show error page
            $message = 'There was error during data fetch';
            return view('error')->with('message', $message);
        }
    }
}
