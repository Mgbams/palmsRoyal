<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

use DataTables; //imports datatables code into this file
use Validator;

class RoomController extends Controller
{
    public function index()
    {
        $data = Hotel::get();
        return view('admin.show.room')->with('data', $data);
    }

    public function getRooms(Request $request)
    {
        if ($request->ajax()) {
            $data = Room::get();
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
            'price'             =>  'required',
            'name'              =>  'required',
            'description'       =>  'required',
            'available_date'    =>  'required',
            'hotel_id'          =>  'required'
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
            'price'             =>   $request->price,
            'name'              =>   $request->name,
            'description'       =>   $request->description,
            'available_date'    =>   $request->available_date,
            'auto_approve'      =>   $request->auto_approve,
            'published'         =>   $request->published,
            'is_available'      =>   $request->is_available,
            'hotel_id'          =>   $request->hotel_id
            //'image'             =>  $new_name
        );

        Room::create($form_data);

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
            $data = Room::findOrFail($id);
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
        dd($request);

        $rules = array(
            'price'             =>  'required',
            'name'              =>  'required',
            'description'       =>  'required',
            'available_date'    =>  'required',
            'hotel_id'          =>  'required'
            //'image'         =>  'image|max:2048'
        );
        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        } else {

            if($request->auto_approve == 'on') {
                $auto_approve  = 1;
            } else {
                $auto_approve  = 0;
            };

            if($request->published == 'on') {
                $published   = 1;
            } else {
                $published   = 0;
            };

            if($request->is_available == 'on') {
                $is_available   = 1;
            } else {
                $is_available   = 0;
            };

            $form_data = array(
                'price'             =>   $request->price,
                'name'              =>   $request->name,
                'description'       =>   $request->description,
                'available_date'    =>   $request->available_date,
                'auto_approve'      =>   $auto_approve,
                'published'         =>   $published,
                'is_available'      =>   $is_available,
                'hotel_id'          =>   $request->hotel_id
                //'image'            =>   $image_name
            );
            Room::whereId($request->hidden_id)->update($form_data);

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
        $data = Room::findOrFail($id);
        $data->delete();
    }
}
