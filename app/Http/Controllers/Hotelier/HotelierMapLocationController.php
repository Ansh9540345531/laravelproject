<?php

namespace App\Http\Controllers\Hotelier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MapLocation;
use Hash;
use Auth;
use Validator;
use DB;


class HotelierMapLocationController extends Controller
{
    
   public function index(Request $request)
   {
       $lat = YOUR_CURRENT_LATTITUDE;
       $lon = YOUR_CURRENT_LONGITUDE;
          
       $users = User::select("users.id"
                       ,DB::raw("6371 * acos(cos(radians(" . $lat . ")) 
                       * cos(radians(users.lat)) 
                       * cos(radians(users.lon) - radians(" . $lon . ")) 
                       + sin(radians(" .$lat. ")) 
                       * sin(radians(users.lat))) AS distance"))
                       ->groupBy("users.id")
                       ->get();
       dd($users);
   }
}
