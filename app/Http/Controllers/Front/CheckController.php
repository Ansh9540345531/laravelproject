<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelHomeSection;
use DB;

class CheckController extends Controller
{
    public function index(){
       $check_data = HotelHomeSection::get();


       $hoteldesc = DB::table('hotel_home_sections as o')
                    ->leftjoin('room_types','room_types.id','=','o.hotel_roomtypes')
                    ->select('o.*', 'room_types.today_price')
                    ->orderby('o.id','desc')
                    ->limit(13)
                    ->get();

        

       return view('front.check',compact('hoteldesc'));
    }


}

?>