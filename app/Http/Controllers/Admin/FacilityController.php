<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Photo;

use Illuminate\Http\Request;
use DataTables; //imports datatables code into this file
use Validator;

class FacilityController extends Controller
{
    public function index()
    {
        //$data = Hotel::get();
        $data = Facility::get();
        return view('admin.show.facility')->with('data', $data);
    }

    public function getFacilities(Request $request)
    {
        //dd($request);
        if ($request->ajax()) {
            $data = Facility::get();
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
        $wifi = 0;
        $ac = 0;
        $heater = 0;
        $rules = array(
            'wifi'         =>  'required',
            'ac'           =>  'required',
            'heater'       =>  'required'
        );

        $comma_separated = implode(",", $request->other_facilities);
        $floor_lists = implode(",", $request->floor);
        $capacity_lists = implode(",", $request->capacity);
        
    
        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        } else {

            if ($request->wifi == 'on') {
                $wifi  = 1;
            } else {
                $wifi  = 0;
            };

            if ($request->ac == 'on') {
                $ac   = 1;
            } else {
                $ac   = 0;
            };

            if ($request->heater == 'on') {
                $heater  = 1;
            } else {
                $heater   = 0;
            };

            $form_data = array(
                'wifi'              =>   $wifi,
                'ac'                =>   $ac,
                'heater'            =>   $heater,
                'other_facilities'  =>   $comma_separated,
                'floor'             =>   $floor_lists,
                'capacity'          =>   $capacity_lists
            );
            Facility::create($form_data);

            return response()->json(['success' => 'Data is successfully updated']);
        }
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
            $data = Facility::findOrFail($id);
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
        $wifi = 0;
        $ac = 0;
        $heater = 0;
        $rules = array(
            'wifi'         =>  'required',
            'ac'           =>  'required',
            'heater'       =>  'required'
        );

        $comma_separated = implode(",", $request->other_facilities);
        $floor_lists = implode(",", $request->floor);
        $capacity_lists = implode(",", $request->capacity);
        //dd($floor_lists);
        //dd( explode( ',', $floor_lists) );
        
        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        } else {

            if ($request->wifi == 'on') {
                $wifi  = 1;
            } else {
                $wifi  = 0;
            };

            if ($request->ac == 'on') {
                $ac   = 1;
            } else {
                $ac   = 0;
            };

            if ($request->heater == 'on') {
                $heater  = 1;
            } else {
                $heater   = 0;
            };

            $form_data = array(
                'wifi'              =>   $wifi,
                'ac'                =>   $ac,
                'heater'            =>   $heater,
                'other_facilities'  =>   $comma_separated,
                'floor'             =>   $floor_lists,
                'capacity'          =>   $capacity_lists
            );
            Facility::whereId($request->hidden_id)->update($form_data);

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
        $data = Facility::findOrFail($id);
        $data->delete();
    }
}
