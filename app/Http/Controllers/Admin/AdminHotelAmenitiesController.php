<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelAmenities;
use App\Models\Hotelier;
use Hash;
use Auth;
use File;
use DB;



class AdminHotelAmenitiesController extends Controller
{
    public function index(){
        $user = HotelAmenities::get();
       // dd($user);
        return view('admin.hotel_amenities_view', compact('user'));
    
    }

    public function add()
    {
        return view('admin.hotel_amenities_add');
    }

    public function store(Request $request)
    { 
        $request->validate([
            'hotel_amenity_image' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $ext = $request->file('hotel_amenity_image')->extension();
        $final_name = time().'.'.$ext;
        $request->file('hotel_amenity_image')->move(public_path('uploads/'),$final_name);

        $obj = new HotelAmenities();
        $obj->hotelier_id = Auth::guard('admin')->user()->id;
        $obj->user_role = "admin";
        $obj->hotel_amenity_name = $request->hotel_amenity_name;
        $obj->amenitie_catagories = $request->amenitie_catagories;
        $obj->hotel_amenity_image = $final_name;
        $obj->save();

        return redirect()->back()->with('success', 'Hotel Amenity is added successfully.');

    }
    
    public function edit($id){
        $amenitie_data = HotelAmenities::where('id',$id)->first();
        return view('admin.hotel_amenities_edit',compact('amenitie_data'));
    }

    public function update(Request $request,$id){
        
        $data = HotelAmenities::where('id',$id)->first();
        
        //dd($data);
        $data->hotelier_id = Auth::guard('hotelier')->user()->id;
        $data->user_role = "admin";
        $data->hotel_amenity_name = $request->hotel_amenity_name;
        $data->amenitie_catagories = $request->amenitie_catagories;
        

        if($request->hasFile('hotel_amenity_image')){
            $request->validate([
                'hotel_amenity_image' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$data->hotel_amenity_image));
            $ext = $request->file('hotel_amenity_image')->extension();
            $final_name = time().'.'.$ext;
            $request = $request->file('hotel_amenity_image')->move(public_path('uploads/'),$final_name);
            $data->hotel_amenity_image = $final_name;
        }

        $data->update();
        return redirect()->back()->with('success','Hotel Amenity is updated Successfully.');
    }
    
    public function delete($id)
    {
        $data = HotelAmenities::where('id',$id)->first();
        unlink(public_path('uploads/'.$data->hotel_amenity_image));
        $data->delete();

        return redirect()->back()->with('success', 'Hotel Amenity is deleted successfully.');
    }
}
