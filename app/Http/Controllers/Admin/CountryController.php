<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DataTables; //imports datatables code into this file
use Validator;

class CountryController extends Controller
{
    public function index()
    {
        return view('admin.show.country');
    }


    public function getCountries(Request $request)
    {
        if ($request->ajax()) {
            $data = Country::select('id', 'nom_en_gb', 'nom_fr_fr')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $actionBtn = '<button type="button" name="edit" class="edit btn btn-primary btn-sm" id="' . $data->id . '"><i class="fa fa-edit"></i>&nbsp;Edit</button>';
                    $actionBtn .=  '
                                &nbsp; &nbsp; &nbsp;<button 
                                type="button" name="delete" class="delete btn btn-danger btn-sm" id="' . $data->id . '"><i class="fa fa-trash-alt"></i>&nbsp;Delete</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'english_name'    =>  'required',
            'french_name'     =>  'required',
            'code'    =>  'required',
            'alpha2'     =>  'required|min:2|max:2',
            'alpha3'     =>  'required|min:3|max:3',
            //'image'         =>  'required|image|max:2048'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        //$image = $request->file('image');

        //$new_name = rand() . '.' . $image->getClientOriginalExtension();

        //$image->move(public_path('images'), $new_name);

        $form_data = array(
            'nom_en_gb'       =>   $request->english_name,
            'nom_fr_fr'        =>   $request->french_name,
            'code'             =>   $request->code,
            'alpha2'           =>   $request->alpha2,
            'alpha3'           =>   $request->alpha3
            //'image'             =>  $new_name
        );

        Country::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (request()->ajax()) {
            $data = Country::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request);

        $english_name = $request->english_name;
        $french_name = $request->french_name;
        //$image = $request->file('image');
        if ($french_name  != '' &&  $english_name != '') {
            $rules = array(
                'english_name'    =>  'required',
                'french_name'     =>  'required',
                'code'    =>  'required',
                'alpha2'     =>  'required|min:2|max:2',
                'alpha3'     =>  'required|min:3|max:3',
                //'image'         =>  'image|max:2048'
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            //$image_name = rand() . '.' . $image->getClientOriginalExtension();
            //$image->move(public_path('images'), $image_name);
        } else {
            $rules = array(
                'english_name'    =>  'required',
                'french_name'     =>  'required',
                'code'    =>  'required',
                'alpha2'     =>  'required|min:2|max:2',
                'alpha3'     =>  'required|min:3|max:3',
            );

            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }

        $form_data = array(
            'nom_en_gb'       =>   $request->english_name,
            'nom_fr_fr'        =>   $request->french_name,
            'code'             =>   $request->code,
            'alpha2'           =>   $request->alpha2,
            'alpha3'           =>   $request->alpha3
            //'image'            =>   $image_name
        );
        Country::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Country::findOrFail($id);
        $data->delete();
    }
}

/*
$action = '<a class="btn btn-info" id="show-user" data-toggle="modal" data-id='.$row->id.'>Show</a>
<a class="btn btn-success" id="edit-user" data-toggle="modal" data-id='.$row->id.'>Edit </a>
<meta name="csrf-token" content="{{ csrf_token() }}">
<a id="delete-user" data-id='.$row->id.' class="btn btn-danger delete-user">Delete</a>';
*/
