<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Photo;
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
        return $request;
        exit();

        $rules = array(
            'price'             =>  'required',
            'name'              =>  'required',
            'description'       =>  'required',
            'available_date'    =>  'required',
            'hotel_id'          =>  'required',
            'images.*'          =>  'required|image|mimes:jpeg,png,jpg,gif,svg'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'price'             =>   $request->price,
            'name'              =>   $request->name,
            'description'       =>   $request->description,
            'available_date'    =>   $request->available_date,
            'auto_approve'      =>   $request->auto_approve,
            'published'         =>   $request->published,
            'is_available'      =>   $request->is_available,
            'hotel_id'          =>   $request->hotel_id
        );

        //Room::create($form_data);
        //if(Room::create($form_data)) {
            //$imageUpload = new Photo;
            //$imageUpload->url = $request->files[0];
            //$imageUpload->room_id = Room::create($form_data)->id;
            //$imageUpload->save();
        //}
        
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

            if ($request->auto_approve == 'on') {
                $auto_approve  = 1;
            } else {
                $auto_approve  = 0;
            };

            if ($request->published == 'on') {
                $published   = 1;
            } else {
                $published   = 0;
            };

            if ($request->is_available == 'on') {
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

    /******* Store image to database and to folder on this project *****/

    public function imageStore(Request $request)
    {
        $image = $request->file('file');
        $filename = $image->getClientOriginalName();

        $image->move(public_path('rooms/images/'), $filename);

        //$imageUpload = new Photo;
        //$imageUpload->url = $filename;
        //$imageUpload->id = Room::create($form_data)->id;
        //$imageUpload->save();
        return response()->json(['success' => $filename]);
    }

    /****Delete image from folder and from database on clicking remove file link below the image ******/

    public function deleteImage(Request $request)
    {
        $filename = $request->get('filename');
        Photo::where('url', $filename)->delete();
        $path = public_path() . '/rooms/images/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
       // return $filename;
    }
}
