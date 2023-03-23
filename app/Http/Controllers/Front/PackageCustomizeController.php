<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageCustomize;
use App\Models\User;
use App\Models\Customer;
use App\Mail\Websitemail;
use App\Models\Package_Category;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Models\PackageProduct;
use App\Models\HotelHomeSection;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\RoomTypes;
use App\Models\Faq;
use App\Models\Image;
use App\Models\PackageAmenitie;
use DB;
use Session;
use Auth;
use Hash;
use Illuminate\Contracts\Session\Session as SessionSession;

class PackageCustomizeController extends Controller
{
    public function hello($id){
        $id = PackageProduct::findorfail($id)->toarray();
        return response($id);
    }

    public function customdata(Request $request){
        
        // Validate form data
        $validatedData = request()->validate([
            'to' => 'required',
            'from' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'person' => 'required',
            'day' => 'required'
        ]);

        //$user = auth('customer')->user(); 
        // if(!empty($user->id)){
        // }

        Session::put('user', $request->all());     

        $data = True;
        return response($data);
    }

    public function customajax(Request $request){

        $data = Session::get('user');
        
        $to = $data['to'];
        $from = $data['from'];
        $startdate = $data['startdate'];
        $enddate = $data['enddate'];
        $personcustom = $data['person'];
        $daycustom = $data['day'];
        $price = $data['price'];
        $customdayprice = $data['customday'];
        $custompersonprice  = $data['customperson'];
        $oldperson = $data['oldperson'];
        $oldday = $data['oldday'];
        $packageid = $data['packageid'];
        //dd($packageid);

        if($personcustom-$oldperson == 0){
            $cperson = 0;
        }else{
            $cperson = $personcustom-$oldperson;
        }
        if($daycustom - $oldday == 0){
            $cday = 0;
        }else{
            $cday = $daycustom - $oldday;
        }
        
        $newprice = $price + $cperson*$custompersonprice + $cday*$customdayprice; 
        //dd($newprice);

        $validatedData = request()->validate([
            'email' => 'required|email|max:100|unique:customers',
            'phone' => 'required',
        ]);


        $user = Customer::where('email',$request->email)->first();
        if(!$user){
            //$token = hash('sha256',time());
            $user = new Customer();
            $user->name = '';
            $user->email = $request->email;
            $user->mobile = $request->phone;
            $user->password = Hash::make($request->phone);
            $user->status = "Active";
            $user->token = '';
            $user->save();
            //dd($user);

            $credentials = [
                'email' =>  $request->email,
                'password' => $request->phone,
                'status' => 'Active'
            ];

            if(Auth::guard('customer')->attempt($credentials)){
            $customize = new PackageCustomize();
            $customize->user_id = $user->id;
            $customize->package_id = $packageid;
            $customize->package_start_destination = $to;
            $customize->package_end_destination = $from;
            $customize->package_start_date = $startdate;
            $customize->package_end_date = $enddate;
            $customize->package_custom_person = $personcustom;
            $customize->package_custom_day = $daycustom;
            $customize->package_custom_price = $newprice;
            $customize->save();
            //dd($customize);
            
            $userid = $user->id;
            Session::put('userid', $userid);

            $subject = 'Confirmation';
            $message = 'You are Registered as a guest user. 
                        Please Update Your password and profile details';

            \Mail::to($request->email)->send(new Websitemail($subject,$message));

            $packageid = Crypt::encrypt($packageid);
           
            return route('package_details',['id'=>$packageid]);
            }else{
                dd('Email already Exists.');
            };
           
        }
    }



    public function logincustomize(Request $request){
        //dd($request->all());
        $validatedData = request()->validate([
            'to' => 'required',
            'from' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'person' => 'required',
            'day' => 'required'
        ]);

        $to = $request->to;
        $from = $request->from;
        $startdate  = $request->startdate;
        $enddate  = $request->enddate;
        $updatedperson  = $request->person;
        $updatedday  = $request->day;
        $price  = $request->price;
        $customdayprice  = $request->customday;
        $custompersonprice  = $request->customperson;
        $oldperson  = $request->oldperson;
        $oldday  = $request->oldday;
        $packageid  = $request->packageid;

        if($updatedperson-$oldperson == 0){
            $cperson = 0;
        }else{
            $cperson = $updatedperson-$oldperson;
        }
        if($updatedday - $oldday == 0){
            $cday = 0;
        }else{
            $cday = $updatedday - $oldday;
        }
        
        $newprice = $price + $cperson*$custompersonprice + $cday*$customdayprice; 
        //dd($newprice);
        $user = auth('customer')->user(); 
        //dd($user->id);
        $customize = new PackageCustomize();
        $customize->user_id = $user->id;
        $customize->package_id = $packageid;
        $customize->package_start_destination = $to;
        $customize->package_end_destination = $from;
        $customize->package_start_date = $startdate;
        $customize->package_end_date = $enddate;
        $customize->package_custom_person = $updatedperson;
        $customize->package_custom_day = $updatedday;
        $customize->package_custom_price = $newprice;
        $customize->save();
        
        $packageid = Crypt::encrypt($packageid);
        $userid = $user->id;
        $customizeid = Session::put('name', $userid);
        return route('package_details',['id'=>$packageid]);
    }



    public function hotelsubmit(Request  $request){
        //dd($request->all());
        $validatedData = request()->validate([
            'name' => 'required',
            'email' => 'email|unique:customers',
            'mobile' => 'required',
        ]);

        $hotel = $request->all();

        Session::put('hotel', $hotel);     

        $data = True;
        return response($data);
    }

    public function hotelsub(Request $request){
        //dd($request->all());
       
        $validatedData = request()->validate([
            'checkindate' => 'required',
            'checkoutdate' => 'required',
            'guest' => 'required',
        ]);

        $user_details = Session::get('hotel');
        
        $room_types_id = $user_details['room_types_id'];
        $hotel_home_section_id = $user_details['hotel_home_section_id'];
        $hotelData = HotelHomeSection::where('id',$hotel_home_section_id)->limit(1)->get();
        $product_name = $hotelData[0]->hotel_name;
        $roomdata = RoomTypes::where('id',$room_types_id)->limit(1)->get(); 
        $price = $roomdata[0]->today_price;
        $roomname = $roomdata[0]->roomname;
        $name = $user_details['name'];
        $email = $user_details['email'];
        $mobile = $user_details['mobile'];
        //dd($mobile);

        $user = new Customer();
        $user->name = $name;
        $user->email = $email;
        $user->mobile = $mobile;
        $user->password = Hash::make($mobile);
        $user->token = '';
        $user->status = 'Active';
        $user->save();

        $customer_id = $user->id;

        $credentials = [
            'email' =>  $email,
            'password' => $mobile,
            'status' => 'Active'
        ];

        if(Auth::guard('customer')->attempt($credentials)){
            $obj = new Order();
            $obj->customer_id = $customer_id;
            $obj->sub_total = $price;
            $obj->save();

            $order = new OrderDetail();
            $order->customer_id = $customer_id;
            $order->order_no = $obj->order_id;
            $order->hotel_home_section_id = $hotel_home_section_id;
            $order->product_id = $room_types_id;
            $order->product_name = $product_name;
            $order->product_price = $price; 
            $order->customer_name = $name;
            $order->customer_email = $email;
            $order->customer_mobile = $mobile;
            $order->room_name = $roomname;
            $order->room_types_id = $room_types_id;
            $order->checkin_date = $request->checkindate;
            $order->checkout_date = $request->checkoutdate;
            $order->order_type_id = 1;
            $order->product_quantity = 1;
            $order->guest = $request->guest;
            $order->save();
            return redirect('/cart')->with('success', 'Order is save in database.');


        }else{
            dd('Email is already Registerd.');
        }
       

        $data = True;
        return response($data);

    }

}