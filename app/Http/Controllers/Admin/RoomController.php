<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Photo;
use App\Models\Facility;
use App\Models\Capacity;
use App\Models\Floor;
use App\Models\RoomsFacilities;
use Illuminate\Http\Request;

use DataTables; //imports datatables code into this file
use Validator;
use Session;

class RoomController extends Controller
{
    public function index()
    {
       $facilities  = Facility::get(); // get facilities info
       $capacities  = Capacity::get(); // get capacities info
       $floors      = Floor::get(); // get floors info
       return view('admin.show.room', compact(['facilities', 'floors', 'capacities']));
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
         //dd($request);
         $roomAvailable;
         $roomPublished;
         $roomAutoApprove;
         $lastImageId; //last inserted image id
         $lastRoomId; //last inserted room id

         // covert checkboxes values to 0 or 1 before adding them to database
        if ($request->is_available) {
            $this->roomAvailable = 1;
        } else {
            $this->roomAvailable = 0;
        }

        if ($request->published) {
            $this->roomPublished = 1;
        } else {
           $this->roomPublished = 0;
        }

        if ($request->auto_approve) {
            $this->roomAutoApprove = 1;
        } else {
             $this->roomAutoApprove = 0;
        }
        
        $data = Hotel::get(); // get hotel info

        $rules = array(
            'price'             =>  'required',
            'name'              =>  'required',
            'description'       =>  'required',
            'available_date'    =>  'required',
            'images.*'          =>  'required|image|mimes:jpeg,png,jpg,gif,svg'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        
        $imageUpload = new Photo;
        $imageUpload->url = json_encode($request['files']);
        $imageUpload->save();

        if ( $imageUpload->save()) {
            $this->lastImageId =  $imageUpload->id;
            //var_dump($imageUpload->id);
            
            $form_data = array(
            'price'             =>   $request->price,
            'name'              =>   $request->name,
            'description'       =>   $request->description,
            'available_date'    =>   $request->available_date,
            'auto_approve'      =>   $this->roomAutoApprove,
            'published'         =>   $this->roomPublished,
            'is_available'      =>   $this->roomAvailable,
            'vat'               =>   $request->vat,
            'discount'          =>   $request->discount,
            'hotel_id'          =>   $data[0]['id'],
            'photo_id'          =>   $this->lastImageId
            );

            $roomInsert = Room::create($form_data);
            $this->lastRoomId = $roomInsert->id; //Last inserted room id

            // Save data to RoomsFacilities table
            if ($this->lastRoomId) {
                 $facilities_data = array(
                'capacity'                =>   $request->capacity,
                'facilities'              =>   json_encode($request->facilities),
                'floor'                   =>   $request->floor,
                'id_room'                 =>   $this->lastRoomId
        
                );

                RoomsFacilities::create($facilities_data);
            }
        }
    
        //Room::create($form_data);
        //if(Room::create($form_data)) {
            //$imageUpload->room_id = Room::create($form_data)->id;
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
        //dd($request);
        $auto_approve;
        $published;
        $is_available;

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

            if ($request->auto_approve) {
                $this->auto_approve  = 1;
            } else {
                $this->auto_approve  = 0;
            };

            if ($request->published) {
                $this->published   = 1;
            } else {
                $this->published   = 0;
            };

            if ($request->is_available) {
                $this->is_available   = 1;
            } else {
                $this->is_available   = 0;
            };

            $form_data = array(
                'price'             =>   $request->price,
                'name'              =>   $request->name,
                'description'       =>   $request->description,
                'available_date'    =>   $request->available_date,
                'auto_approve'      =>   $this->auto_approve,
                'published'         =>   $this->published,
                'is_available'      =>   $this->is_available,
                'vat'               =>   $request->vat,
                'discount'          =>   $request->discount
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
