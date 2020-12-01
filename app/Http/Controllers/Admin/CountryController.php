<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CountryDataTable;
use App\Models\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DataTables; //imports datatables code into this file

class CountryController extends Controller
{
    public function index()
    {
        return view('admin.show.country');
    }


    public function getCountries(Request $request)
    {
        if ($request->ajax()) {
            $data = Country::select('nom_en_gb', 'nom_fr_fr')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $actionBtn = '<button type="button" name="edit" class="edit btn btn-success btn-sm" id="'.$data->id.'"><i class="fa fa-edit"></i>&nbsp;Edit</button>';
                    $actionBtn .=  '
                                &nbsp; &nbsp; &nbsp;<button 
                                type="button" name="delete" class="delete btn btn-danger btn-sm" id="'.$data->id.'"><i class="fa fa-trash-alt"></i>&nbsp;Delete</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
