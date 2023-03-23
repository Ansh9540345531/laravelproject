<?php

namespace App\Http\Controllers\Hotelier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelHomeSection;
use App\Models\Hotelier;
use App\Models\HotelGallery;
use App\Models\HotelAmenities;
use App\Models\RoomTypes;
use App\Models\HotelImageType;
use App\Models\MapLocation;
use Hash;
use Auth;
use File;
use DB;




class HotelierHotelHomeSectionController extends Controller
{
    public function index()
    {
        $hotelhomesection = HotelHomeSection::where('hotelier_id',Auth::guard('hotelier')->user()->id)->get();
        $amenitie = HotelHomeSection::where('hotelier_id',Auth::guard('hotelier')->user()->id)->get();
        
        return view('hotelier.hotelhomesection_view', compact('hotelhomesection','amenitie'));
    }

    public function add()
    {
        $amenitie = HotelAmenities::get();
        $roomtypes = RoomTypes::get();
        
        return view('hotelier.hotelhomesection_add',compact('amenitie','roomtypes'));
    }

    public function store(Request $request)
    {
        $aminitie = $request->input('aminite_id');
        $aminitie = implode(',', $aminitie);

        $roomtypes = $request->input('roomtypes_id');
        $roomtypes = implode(',', $roomtypes);


        $request->validate([
            'photo' => 'image|mimes:jpg,svg,jpeg,png,gif',
            'hotel_name' => 'required',
            'description' => 'required',
            'roomtypes_id' => 'required',
            'hotel_location' => 'required',
            'hotel_catagories' => 'required',
            'aminite_id' => 'required',
            'button_text' => 'required',
            'button_url' => 'required',
            'featured' => 'required'
        ]);

        $ext = $request->file('photo')->extension();
        $finalname = time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$finalname);
 

        $obj = new HotelHomeSection();
        $obj->hotelier_id = Auth::guard('hotelier')->user()->id;
        $obj->user_role = "hotelier";
        $obj->photo = $finalname;
        $obj->hotel_name = $request->hotel_name;
        $obj->description = $request->description;
        $obj->hotel_roomtypes = $roomtypes;
        $obj->hotel_location = $request->hotel_location;
        $obj->hotel_catagories = $request->hotel_catagories;
        $obj->hotel_amenities = $aminitie;
        $obj->button_text = $request->button_text;
        $obj->button_url = $request->button_url;
        $obj->featured = $request->has('featured');
        $obj->save();


        if($request->hasFile("images"))
        {
                $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['hotel_home_section_id'] = $obj->id;
                    $request['image']=$imageName;
                    $file->move(\public_path("/images"),$imageName);
                    HotelGallery::create($request->all());

                }
            }

            if($request->hasFile("image_types"))
            {
                    $files_images=$request->file("image_types");
                    foreach($files_images as $file_image){
                        $imageNamey=time().'_'.$file->getClientOriginalName();
                        $request['hotel_home_section_id'] = $obj->id;
                        $request['image_type']=$imageNamey;
                        $file_image->move(\public_path("/image_types"),$imageNamey);
                        HotelImageType::create($request->all());
    
                    }
                }




        return redirect()->back()->with('success', 'Hotel is added successfully.');

    }

    public function edit($id)
    {
        $hotelhomesection_data = HotelHomeSection::where('id',$id)->first();
        $image = HotelGallery::where("hotel_home_section_id",$hotelhomesection_data->id)->get();
        $image_type = HotelImageType::where("hotel_home_section_id",$hotelhomesection_data->id)->get();
        $aminitie = HotelAmenities::get();
        $roomtypes = RoomTypes::get();
        return view('hotelier.hotelhomesection_edit', compact('hotelhomesection_data','image','aminitie','roomtypes','image_type'));
    }

    public function update(Request $request,$id)
    {        

        $request->validate([
            'hotel_name' => 'required',
            'description' => 'required',
            'roomtypes_id' => 'required',
            'hotel_location' => 'required',
            'hotel_catagories' => 'required',
            'aminite_id' => 'required',
            'button_text' => 'required',
            'button_url' => 'required',
            'featured' => 'required'
        ]);

        $obj = HotelHomeSection::where('id',$id)->first();
        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,svg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->photo));
            $ext = $request->file('photo')->extension();
            $final_name = time().'.'.$ext;
            $request->file('photo')->move(public_path('uploads/'),$final_name);
            $obj->photo = $final_name;
        }


        $aminitie = $request->input('aminite_id');
        $aminitie = implode(',', $aminitie);

        $roomtypes = $request->input('roomtypes_id');
        $roomtypes = implode(',', $roomtypes);


        
        $obj->hotelier_id = Auth::guard('hotelier')->user()->id;
        $obj->user_role = "hotelier";
        $obj->hotel_name = $request->hotel_name;
        $obj->description = $request->description;
        $obj->hotel_roomtypes = $roomtypes;
        $obj->hotel_location = $request->hotel_location;
        $obj->hotel_catagories = $request->hotel_catagories;
        $obj->hotel_amenities = $aminitie;
        $obj->button_text = $request->button_text;
        $obj->button_url = $request->button_url;
        $obj->featured = $request->has('featured');
        $obj->update();


        if($request->hasFile("images")){
            $images = HotelGallery::where("hotel_home_section_id",$obj->id)->get();

            foreach($images as $image){
                if(File::exists("images/".$image->images)){
                    File::delete("images/".$image->image);
                }
            }

            HotelGallery::where('hotel_home_section_id',$obj->id)->delete(); 

            if($request->hasFile("images"))
            {
                    $files=$request->file("images");
                    foreach($files as $file){
                        $imageName=time().'_'.$file->getClientOriginalName();
                        $request['hotel_home_section_id'] = $obj->id;
                        $request['image']=$imageName;
                        $file->move(\public_path("/images"),$imageName);
                        HotelGallery::create($request->all());
    
                    }
                }
        }
        


        if($request->hasFile("image_types")){
            $image_types = HotelImageType::where("hotel_home_section_id",$obj->id)->get();

            foreach($image_types as $image_types){
                if(File::exists("image_types/".$image_types->image_type)){
                    File::delete("image_types/".$image_types->image_type);
                }
            }

            HotelImageType::where('hotel_home_section_id',$obj->id)->delete(); 

            if($request->hasFile("image_types"))
            {
                    $files_images=$request->file("image_types");
                    foreach($files_images as $files_image){
                        $imageNamey=time().'_'.$files_image->getClientOriginalName();
                        $request['hotel_home_section_id'] = $obj->id;
                        $request['image_type']=$imageNamey;
                        $files_image->move(\public_path("/image_types"),$imageNamey);
                        //$file->move(public_path('/uploads'), end($filename));
                        HotelImageType::create($request->all());
    
                    }
                }
        }



        return redirect()->back()->with('success', 'Hotel is updated successfully.');
    }

    public function delete($id)
    {
    

    $single_data = HotelHomeSection::where('id',$id)->first();
    //dd($single_data);
    // unlink(public_path('uploads/'.$single_data->photo));
    $images = HotelGallery::where("hotel_home_section_id",$single_data->id)->get();
    $image_types = HotelImageType::where("hotel_home_section_id",$single_data->id)->get();
   
    //dd($images);
     if(File::exists('uploads/'.$single_data->photo)){
         File::delete('uploads/'.$single_data->photo);
     }
 
     foreach($images as $image){
      
         if(File::exists("images/".$image->image)){
             File::delete("images/".$image->image);
         }
     }


     foreach($image_types as $image_type){
        if(File::exists("image_types/".$image_types->image_type)){
            File::delete("image_types/".$image_types->image_type);
        }
    }

    
     $single_data->delete();
     HotelGallery::where('hotel_home_section_id',$single_data->id)->delete();  
     return redirect()->back()->with('success', 'Hotel is deleted successfully.');
    }
}
