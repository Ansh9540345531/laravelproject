<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\PackageCustomize;
use App\Models\PackageProduct;
use App\Mail\Websitemail;
use App\Models\HotelHomeSection;
use App\Models\RoomTypes;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Auth;
use Session;
use Hash;
use DB;

class CustomerOrderController extends Controller
{
    public function index(){
        $orders = Order::Where('customer_id',Auth::guard('customer')->user()->id)->get();
        
        $details = OrderDetail::where('customer_id',Auth::guard('customer')->user()->id)->get();
        //dd($orders[0]->created_at->toDateString());
        //dd($orders[0]->created_at);
        return view('customer.orders',compact('orders','details'));
    }

    public function detail($id){
       
        $order_detail = OrderDetail::where('order_no',$id)->get();OrderDetail::where('order_no',$id)->get();
        
        //dd($order_detail[0]->customer_id);
        $customize_Data = PackageCustomize::where('user_id',$order_detail[0]->customer_id)->get(); 
        //dd($customize_Data); 
        return view('customer.invoice',compact('order_detail','customize_Data'));
    }

    public function booking(Request $request){
        //dd($request->all());
        $customize_Data = PackageProduct::where('id',$request->packageid)->limit(1)->get();
        
        $product_id = $customize_Data[0]->id;
        $product_name = $customize_Data[0]->package_name;
        $product_price = $customize_Data[0]->package_price;
      

        $user = auth('customer')->user();
        $customer_id = $user->id;
        //dd($customer_id);
        $customer_name = $user->name;
        $customer_email = $user->email;
        $customer_mobile = $user->mobile;
        $checkin_date = $request->checkindate;
        $checkout_date = $request->checkoutdate;
        
        if(empty($user)){
            //$id = Session::get('userid');
            $user = Customer::where('id',$id)->limit(1)->get();
            $customerid = $user[0]->id;
            $customername = $user[0]->name;
            $customeremail = $user[0]->email;
            $customermobile = $user[0]->mobile;

            $obj = new Order();
            $obj->customer_id = $customerid;
            $obj->sub_total = $product_price;
            $obj->save();

            $order = new OrderDetail();
            $order->customer_id = $customerid;
            $order->order_no = $obj->order_id;
            $order->product_id = $product_id;       
            $order->product_name = $product_name;   
            $order->product_price = $product_price;    
            $order->customer_name = $customername;
            $order->customer_email = $customeremail;
            $order->customer_mobile = $customermobile;
            $order->checkin_date = $checkin_date;
            $order->checkout_date = $checkout_date;
            $order->order_type_id = 2;
            $order->product_quantity = 1;
            $order->save();

            //dd(123);
        }else if(!empty($user)){
            
            $data = DB::table('orders')
                    ->where('customer_id',$customer_id)
                    ->where('razorpay_order_status',1)
                    ->get();
                    //dd($data->all());
                $data = $data->all();
            
            if(empty($data)){
               // $orderid = $data->order_id;

                $obj = new Order();
                $obj->customer_id = $customer_id;
                $obj->sub_total = $product_price;
                $obj->razorpay_order_status = 1;
                $obj->save();

                $order = new OrderDetail();
                $order->customer_id = $customer_id;
                $order->order_no = $obj->id;
                $order->product_id = $product_id;       
                $order->product_name = $product_name;   
                $order->product_price = $product_price;    
                $order->customer_name = $customer_name;
                $order->customer_email = $customer_email;
                $order->customer_mobile = $customer_mobile;
                $order->checkin_date = $checkin_date;
                $order->checkout_date = $checkout_date;
                $order->order_type_id = 2;
                $order->product_quantity = 1;
                $order->order_details_status = 1;
                $order->save();
                return redirect('/cart')->with('success', 'Order is save in database.');

                
            }else if(!empty($data)){
                $oldprice = $data[0]->sub_total;
                $newprice = $oldprice + $product_price;
                $orderid = $data[0]->order_id;
                Order::where('order_id',$orderid)
                    ->where('razorpay_order_status',1)
                    ->update([
                        'sub_total'  => $newprice
                     ]);

                $order = new OrderDetail();
                $order->customer_id = $customer_id;
                $order->order_no = $orderid;
                $order->product_id = $product_id;       
                $order->product_name = $product_name;   
                $order->product_price = $product_price;    
                $order->customer_name = $customer_name;
                $order->customer_email = $customer_email;
                $order->customer_mobile = $customer_mobile;
                $order->checkin_date = $checkin_date;
                $order->checkout_date = $checkout_date;
                $order->order_type_id = 2;
                $order->product_quantity = 1;
                $order->order_details_status = 1;
                $order->save();
                return redirect('/cart')->with('success', 'Order is save in database.');
            }
           
        }
        

    }

    public function signin(Request $request){

        
        $validatedData = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:customers',
            'mobile' => 'required'
        ]);

        $token = hash('sha256',time());
        $user = new Customer();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->mobile);
        $user->mobile = $request->mobile;
        $user->status = 'Active';
        $user->token = '';
        $user->save();

        $credentials = [
            'email' =>  $request->email,
            'password' => $request->mobile,
            'status' => 'Active'
        ];

        if(Auth::guard('customer')->attempt($credentials)){
        $customer_id = $user->id;
        //Session::put('customer_id', $customer_id);     

        $verification_link = url('/registration/verify/'.$token.'/'.$request->email);
        $subject = 'Registration Confirmation';
        $message = 'You are login as a guest Login';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));

        $data = True;
        return response($data);

        }else{
            dd("Login details wrong");
        }

    }

    public function booksubmit(Request $request){
        $validatedData = request()->validate([
            'checkindate' => 'required',
            'checkoutdate' => 'required'
        ]);
            //dd($request->all());
            //$data = Session::get('customer_id');
            $userdata = auth('customer')->user();
            
            $package_id = $request->package_id;
            $checkindate = $request->checkindate;
            $checkoutdate = $request->checkoutdate;
            $packagedata = PackageProduct::where('id',$package_id)->limit(1)->get();
            $product_id = $packagedata[0]->id;
            $product_name = $packagedata[0]->package_name;
            $product_price = $packagedata[0]->package_price;
           // dd($product_price);
           // $userdata = Customer::where('id',$data)->limit(1)->get();
            
          
            $customer_id = $userdata->id;
            $customer_name = $userdata->name;
            $customer_email = $userdata->email;
            $customer_mobile = $userdata->mobile;

            // first Save data into order table here we have  to do code. 
            $one = new Order();
            $one->customer_id = $customer_id;
            $one->sub_total = $product_price;
            $one->save();
        
            $obj = new OrderDetail();
            $obj->customer_id = $customer_id;
            $obj->order_no = $one->id;
            $obj->customer_name = $customer_name;
            $obj->customer_email = $customer_email;
            $obj->customer_mobile = $customer_mobile;
            $obj->checkin_date = $checkindate;
            $obj->checkout_date = $checkoutdate;
            $obj->product_id = $product_id;
            $obj->product_name = $product_name;
            $obj->product_price = $product_price;
            $obj->product_quantity = 1;
            $obj->order_type_id = 2;
            $obj->order_details_status = 1;
            $obj->save();
            
            $packageid = Crypt::encrypt($product_id);
           
            return route('cart');
    }




    public function hotelbooking(Request $request){
        //dd($request->all());
        $hotelData = HotelHomeSection::where('id',$request->hotel_home_section_id)->limit(1)->get();
        $product_name = $hotelData[0]->hotel_name;
        $roomdata = RoomTypes::where('id',$request->room_types_id)->limit(1)->get(); 
        $price = $roomdata[0]->today_price;
        $roomname = $roomdata[0]->room_name;
        //dd($roomname);
        $user = auth('customer')->user();
        $customer_id = $user->id;
        $customer_name = $user->name;
        $customer_email = $user->email;
        $customer_mobile = $user->mobile;
        
        if(!empty($user)){

            $data = DB::table('orders')->where('customer_id',$customer_id)->first();
            //dd($data);
            
            if(empty($data)){
                $obj = new Order();
                $obj->customer_id = $customer_id;
                $obj->sub_total = $price;
                $obj->save();

                $order = new OrderDetail();
                $order->customer_id = $customer_id;
                $order->order_no = $obj->order_id;
                $order->hotel_home_section_id = $request->hotel_home_section_id;
                $order->product_id = $request->room_types_id;       
                $order->product_name = $product_name;   
                $order->product_price = $price;    
                $order->customer_name = $customer_name;
                $order->customer_email = $customer_email;
                $order->customer_mobile = $customer_mobile;
                $order->room_name = $roomname;
                $order->room_types_id = $request->room_types_id;
                $order->checkin_date = $request->checkin;
                $order->checkout_date = $request->checkout;
                $order->order_type_id = 1;
                $order->product_quantity = 1;
                $order->guest = $request->guest;
                $order->save();
                return redirect('/')->with('success', 'Order is save in database.');
                
            }else if(!empty($data)){
                $oldprice = $data->sub_total;
                $newprice = $oldprice + $price;
                $orderid = $data->order_id;
                Order::where('order_id',$orderid)
                    ->update([
                        'sub_total'  => $newprice
                     ]);
                
                $order = new OrderDetail();
                $order->customer_id = $customer_id;
                $order->order_no = $orderid;
                $order->hotel_home_section_id = $request->hotel_home_section_id;
                $order->product_id = $request->room_types_id;       
                $order->product_name = $product_name;   
                $order->product_price = $price;    
                $order->customer_name = $customer_name;
                $order->customer_email = $customer_email;
                $order->customer_mobile = $customer_mobile;
                $order->room_name = $roomname;
                $order->room_types_id = $request->room_types_id;
                $order->checkin_date = $request->checkin;
                $order->checkout_date = $request->checkout;
                $order->order_type_id = 1;
                $order->product_quantity = 1;
                $order->guest = $request->guest;
                $order->save();
                

                return redirect('/cart')->with('success', 'Order is save in database.');
                
            }

            // if($data == '' ){
            //     $obj = new Order();
            //     $obj->customer_id = $customer_id;
            //     $obj->sub_total = $price;
            //     $obj->save();
            // }
            //dd($data);

            //  $data = new Order();
            //  $data->customer_id = $customer_id;
            //  $data->sub_total = $price;
            //  $data->save();

            // $obj = new OrderDetail();
            // $obj->customer_id = $customer_id;
            // $obj->order_no = $data->order_id;
            // $obj->hotel_home_section_id = $request->hotel_home_section_id;
            // $obj->product_id = $request->room_types_id;       
            // $obj->product_name = $product_name;   
            // $obj->product_price = $price;    
            // $obj->customer_name = $customer_name;
            // $obj->customer_email = $customer_email;
            // $obj->customer_mobile = $customer_mobile;
            // $obj->room_name = $roomname;
            // $obj->room_types_id = $request->room_types_id;
            // $obj->checkin_date = $request->checkin;
            // $obj->checkout_date = $request->checkout;
            // $obj->order_type_id = 1;
            // $obj->product_quantity = 1;
            // $obj->guest = $request->guest;
            // $obj->save();
            // return redirect('/')->with('success', 'Order is save in database.');
        } 
    }

}
