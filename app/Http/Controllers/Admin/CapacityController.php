<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Capacity;

use DataTables; //imports datatables code into this file
use Validator;


class CapacityController extends Controller
{
     public function index()
    {
        $data = Capacity::get();
        return view('admin.show.capacity')->with('data', $data);
    }

    public function getCapacities(Request $request)
    {
        //dd($request);
        if ($request->ajax()) {
            $data = Capacity::get();
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
            'capacity'         =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        } else {
            $form_data = array(
                'capacity'          =>   $request->capacity
            );
            Capacity::create($form_data);

            return response()->json(['success' => 'Data is successfully stored']);
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
            $data = Capacity::findOrFail($id);
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
            'capacity'         =>  'required'
        );
        
        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        } else {

            $form_data = array(
                'capacity'          =>   $request->capacity
            );
            Capacity::whereId($request->hidden_id)->update($form_data);

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
        $data = Capacity::findOrFail($id);
        $data->delete();
    }
}
