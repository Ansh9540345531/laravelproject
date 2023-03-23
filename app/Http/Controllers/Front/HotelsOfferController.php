<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelHomeSection;
use DB;

class HotelsOfferController extends Controller
{
    public function index(){
       $hotelsoffer_data = HotelHomeSection::get();
    //    dd($hotelsoffer_data);



    $hoteldesc = DB::table('hotel_home_sections as o')
               ->leftjoin('room_types','room_types.id','=','o.hotel_roomtypes')
               ->select('o.*', 'room_types.today_price')
               ->orderby('o.id','desc')
               ->limit(13)
               ->get();





       return view('front.hotelsoffer',compact('hoteldesc'));
    }
}

?>

