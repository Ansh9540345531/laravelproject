<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelHomeSection;
use App\Models\Hotelier;
use App\Models\HotelGallery;
use App\Models\HotelAmenities;
use App\Models\RoomTypes;
use App\Models\OderDetails;

use DB;



class HotelsDetailsController extends Controller
{
    public function index(){
        $hotelsdetails_data = HotelHomeSection::get();
        $hotelier_data = Hotelier::get();
        
        return view('front.hoteldetails',compact('hotelsdetails_data','hotelier_data'));
     }

 



     public function hoteldetails($id){

        $data = DB::table('hotel_home_sections')
        ->select('hotel_home_sections.*')
        ->where('hotel_home_sections.id',$id)
        ->get();

        //dd($data);

        $hoteldata = DB::table('hotel_home_sections')
                    ->select('hotel_home_sections.*')
                    ->where('hotel_home_sections.id',$id)
                    ->get();
  //dd($hoteldata);
       
                $hotel_details1 = DB::table('hotel_galleries')
                    ->select('hotel_galleries.image')
                    ->where('hotel_galleries.hotel_home_section_id',$id)
                    ->get();
                    //dd($hotel_details1);

            $amenitie =   explode(',',$data[0]->hotel_amenities);   
            $amenitie_data =  DB::table('hotel_amenities as p')
                                ->select('p.hotel_amenity_name','p.amenitie_catagories','p.hotel_amenity_image')
                                ->whereIn('p.id',$amenitie)
                                ->get();
                //dd($amenitie_data);


            $roomtypes =   explode(',',$data[0]->hotel_roomtypes);
            //dd($roomtypes);
            $roomtypes_data =  DB::table('room_types as p')
                                ->select('p.id','p.hotelier_id','p.room_photo','p.room_name','p.extra_facility','p.guest','p.hotel_offer','p.today_price')
                                ->whereIn('p.id',$roomtypes)
                                ->get();
                

           


        return view('front.hoteldetails',compact('hotel_details1','hoteldata','amenitie_data','data','roomtypes_data'));
    }
}

?>