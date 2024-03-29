<?php

namespace App\Http\Controllers\Hotelier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomTypes;
use App\Models\HotelHomeSection;
use App\Models\Hotelier;
use Hash;
use Auth;
use File;
use DB;



class HotelierRoomTypesController extends Controller
{
    public function index(){
        $user = RoomTypes::where('hotelier_id',Auth::guard('hotelier')->user()->id)->get();
       // dd($user);
        return view('hotelier.hotel_roomtypes_view', compact('user'));
    }

    public function add()
    {
        $hotel_home_section = HotelHomeSection::get();
        return view('hotelier.hotel_roomtypes_add',compact('hotel_home_section'));
    }

    public function store(Request $request)
    { 

        


        $request->validate([
            'room_photo' => 'required|image|mimes:jpg,jpeg,png,gif',
            'room_name' => 'required',
            'extra_facility' => 'required',
            'guest' => 'required',
            'hotel_offer' => 'required',
            'today_price' => 'required'
        ]);

        $ext = $request->file('room_photo')->extension();
        $final_name = time().'.'.$ext;
        $request->file('room_photo')->move(public_path('uploads/'),$final_name);

        $obj = new RoomTypes();
        $obj->hotelier_id = Auth::guard('hotelier')->user()->id;
        $obj->user_role = "hotelier";
        $obj->room_photo = $final_name;
        $obj->room_name = $request->room_name;
        $obj->extra_facility = $request->extra_facility;
        $obj->guest = $request->guest;
        $obj->hotel_offer = $request->hotel_offer;
        $obj->today_price = $request->today_price;
        $obj->save();

        return redirect()->back()->with('success', 'Hotel Room Type is added successfully.');

    }
    
    public function edit($id){
        $roomtypes_data = RoomTypes::where('id',$id)->first();
        return view('hotelier.hotel_roomtypes_edit',compact('roomtypes_data'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'room_name' => 'required',
            'extra_facility' => 'required',
            'guest' => 'required',
            'hotel_offer' => 'required',
            'today_price' => 'required'
        ]);
        
        $data = RoomTypes::where('id',$id)->first();
        
        //dd($data);
        $data->hotelier_id = Auth::guard('hotelier')->user()->id;
        $data->user_role = "admin";
        $data->room_name = $request->room_name;
        $data->extra_facility = $request->extra_facility;
        $data->guest = $request->guest;
        $data->hotel_offer = $request->hotel_offer;
        $data->today_price = $request->today_price;

        if($request->hasFile('room_photo')){
            $request->validate([
                'room_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$data->room_photo));
            $ext = $request->file('room_photo')->extension();
            $final_name = time().'.'.$ext;
            $request = $request->file('room_photo')->move(public_path('uploads/'),$final_name);
            $data->room_photo = $final_name;
        }

        $data->update();
        return redirect()->back()->with('success','Hotel Room Type is updated Successfully.');
    }
    
    public function delete($id)
    {
        $data = RoomTypes::where('id',$id)->first();
        $data->delete();

        return redirect()->back()->with('success', 'Hotel Room Type is deleted successfully.');
    }
}
