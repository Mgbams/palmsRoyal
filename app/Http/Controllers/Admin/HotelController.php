<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

use DataTables; //imports datatables code into this file
use Validator;

class HotelController extends Controller
{
    public function index()
    {
        return view('admin.show.hotel');
    }

    public function getHotel(Request $request)
    {
        if ($request->ajax()) {
            $data = Hotel::select('id', 'hotel_name', 'location', 'owner')->get();
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
            'hotel_name'    =>  'required',
            'location'     =>  'required',
            'owner'    =>  'required'
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
            'hotel_name'       =>   $request->hotel_name,
            'location'        =>   $request->location,
            'owner'             =>   $request->owner
            //'image'             =>  $new_name
        );

        Hotel::create($form_data);

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
            $data = Hotel::findOrFail($id);
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

        $rules = array(
            'hotel_name'    =>  'required',
            'location'     =>  'required',
            'owner'    =>  'required'
            //'image'         =>  'image|max:2048'
        );
        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        } else {
            $form_data = array(
                'hotel_name'       =>   $request->hotel_name,
                'location'        =>   $request->location,
                'owner'             =>   $request->owner
                //'image'            =>   $image_name
            );
            Hotel::whereId($request->hidden_id)->update($form_data);

            return response()->json(['success' => 'Data is successfully updated']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Hotel::findOrFail($id);
        $data->delete();
    }
}
