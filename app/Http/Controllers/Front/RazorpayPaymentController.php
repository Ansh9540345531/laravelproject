<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;
use App\Models\HotelHomeSection;
use App\Models\Hotelier;
use App\Models\HotelGallery;
use App\Models\HotelAmenities;
use App\Models\RoomTypes;
use App\Models\MapLocation;
use App\Models\OrderDetails;
use Hash;
use Auth;
use File;
use DB;



class RazorpayPaymentController extends Controller
{
    public function index(){
        $orderdetails = OrderDetails::where('customer_id',Auth::guard('customer')->user()->id)->get();
        return view('front.cart', compact('orderdetails'));
     }

    

    public function cart_submit(Request $request)
    {

    
        $obj = new OrderDetails();
        $obj->customer_id = Auth::guard('customer')->user()->id;
        $obj->room_types_id = $request->room_types_id;
        $obj->hotel_home_section_id = $request->hotel_home_section_id;
        $obj->room_types = $request->room_types;
        $obj->checkin = $request->checkin;
        $obj->checkout = $request->checkout;
        $obj->guest = $request->guest;
        $obj->quantity = $request->quantity;
        $obj->total = $request->total;
        $obj->save();




        session()->push('room_types_id',$request->room_types_id);
        session()->push('checkin',$request->checkin);
        session()->push('checkout',$request->checkout);
        session()->push('guest',$request->guest);

        return redirect('cart')->with('success', 'Order Details is added successfully.');

    }     


    public function update(Request $request,$id) 
    {       
        
        $item = OrderDetails::where('id',$id)->first();



        $obj = OrderDetails::where('id',$id)->first();
        $obj->quantity = $request->quantity;
        $obj->total = $request->total;
        $obj->update();


        return redirect()->back()->with('success', 'Cart is updated');
    }



    public function cart_view()
    {
        $orderdetails = OrderDetails::where('customer_id',Auth::guard('customer')->user()->id)->get();
        $hotelsdetails_data = HotelHomeSection::get();
        $a = Auth::guard('customer')->user()->id;
       
        $hotelsdetails_data = DB::table('order_details as o')
                    ->leftjoin('hotel_home_sections as h','o.hotel_home_section_id','=','h.id')
                    ->leftjoin('room_types as r','o.room_types_id','=','r.id')
                    ->select('h.*','r.*','o.*')
                    ->get();
                    

        return view('front.cart', compact('orderdetails','hotelsdetails_data','a'));
    }






    
}
