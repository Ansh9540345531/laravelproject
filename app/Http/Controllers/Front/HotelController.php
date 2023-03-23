<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelHomeSection;
use Session;
use Exception;
use App\Models\Hotelier;
use App\Models\HotelGallery;
use App\Models\HotelAmenities;
use App\Models\RoomTypes;
use App\Models\MapLocation;
use App\Models\OrderDetails;
use App\Models\HotelImageType;
use Hash;
use Auth;
use File;
use DB;

class HotelController extends Controller
{
    
    public function index(){
        
        
        $hotels_amenities = HotelAmenities::get();

        $hotels_imagetypes = HotelImageType::get();
        // $hotels_imagetypes = DB::table('hotel_image_types as t')->select('t.*')->where('hotel_home_section_id')->get();
        // dd($hotels_imagetypes);

        $hotels_roomtypes = RoomTypes::get();
        $hotelsdetails_data = HotelHomeSection::get();
       
        


        $hotelsdetails_data = DB::table('hotel_home_sections as o')
                    ->leftjoin('hotel_amenities','hotel_amenities.id', '=','o.hotel_amenities')
                    ->leftjoin('room_types','room_types.id','=','o.hotel_roomtypes')
                    ->leftjoin('hotel_image_types','hotel_image_types.hotel_home_section_id','=','o.id')
                    ->select('o.*','hotel_amenities.hotel_amenity_icons','hotel_image_types.image_type', 'hotel_image_types.hotel_home_section_id')
                    ->where('o.featured','1')
                    // ->where('hotel_image_types.hotel_home_section_id',23)
                    // ->where('o.id = hotel_image_types.hotel_home_section_id')
                    ->get();
                   
                
        

        // $hotelsdetails_data = DB::table('hotel_home_sections as o')
        //             ->where('o.featured','1')
        //             ->get();
                     

        // foreach($hotelsdetails_data as $key => $value )
        // {
        //     $hotelsdetails_data = DB::table('hotel_home_sections as o')
        //             ->where('o.featured','1')
        //             ->get();
        // }

        return view('front.hotel', compact('hotelsdetails_data','hotels_amenities','hotels_imagetypes','hotels_roomtypes'));
     }


}

?>