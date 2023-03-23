<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use DB;
use Monolog\SignalHandler;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use Session;

class CheckoutController extends Controller
{
    public function index($id){
           //dd($id);
       $data = DB::table('orders')
                ->select('sub_total')
                ->where('order_id',$id)
                ->get();
                //dd($data);
        return view('front.checkout',['data'=>$data]);
    }

    public function payment(Request $request){
        //dd($request->all());
        $name = $request->input('name');
        $amount = (int)$request->input('amount');
        

        $api = new Api('rzp_test_n1o7szZXkacMha', '1REkTOeB2QecSsHLfjTCQhMA');
        $order  = $api->order->create(array('receipt' => '123', 'amount' => $amount * 100 , 'currency' => 'INR')); // Creates order
        $orderId = $order['id']; 
        
        $user_pay =  Order::where('order_id',$request->orderid)
                        ->update([
                            'razorpay_order_id' => $order->id,
                            'total_amount'   =>  $order->amount,
                            'razorpay_paid_amount' => $order->amount_paid,
                            'razorpay_order_status' => 0,
                        ]);
        $orderdata = array(
            'order_id' => $orderId,
            'amount' => $amount
        );

        //dd($order);

        Session::put('order_id', $orderId);
        Session::put('amount' , $amount);
        Session::put('name' , $request->name);
        Session::put('email' , $request->email);
        Session::put('phone' , $request->mobile);

        return redirect()->back();

    }

    public function pay(Request $request){
        //dd($request->all());
        $api = new Api('rzp_test_n1o7szZXkacMha', '1REkTOeB2QecSsHLfjTCQhMA');
       // dd($api->payment->fetch($request->razorpay_payment_id));
        $data = $request->all();

        try{
        $attributes = [
            'razorpay_signature' =>  $data['razorpay_signature'],
            'razorpay_payment_id' =>  $data['razorpay_payment_id'],
            'razorpay_order_id' =>  $data['razorpay_order_id']
        ];
        $order = $api->utility->verifyPaymentSignature($attributes);
        $success = true;

        }catch(SignatureVerificationError $e){
            $success = false;
        }

        if($success){
            $user_paid = Order::where('razorpay_order_id',Session::get('order_id'))
            ->update([
                'razorpay_payment_id' => $request->razorpay_payment_id,
                'razorpay_order_id'  => $request->razorpay_order_id,
                'razorpay_signature'  => $request->razorpay_signature,
                'razorpay_order_status' => 3,
            ]);
            $order = Order::where('razorpay_order_id',Session::get('order_id'))->get();
         //dd($order[0]->order_id);
            $updatedetails = OrderDetail::where('order_no',$order[0]->order_id)
                            ->update([
                                'order_details_status' => 3
                            ]);

            return redirect()->route('success');
        }else {
            return redirect()->route('error');
        }

    }

    public function success(Request $request){
        return view('front.success');
    }

    public function error(Request $request){
        return view('front.error');
    }


}
