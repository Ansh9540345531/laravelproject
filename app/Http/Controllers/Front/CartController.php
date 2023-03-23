<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\Order;
use Auth;
use DB;
use Session;

class CartController extends Controller
{
    public function index(){
        
        $user = auth('customer')->user(); 
       
        if(empty($user))
        {
            $orderdata = '';//compact('orderdata','orderd','total','updatedprice')
            return view('front.cart',['orderdata'=>$orderdata]);
        }
        else if(!empty($user))
        {
        $orderdata =  DB::table('order_details as o')
                        ->select('o.*')
                        ->where('customer_id',$user->id)
                        ->where('order_details_status',1)
                        ->get();
                        //dd($orderdata);
                        
                        $a = $orderdata->all();
                        //dd($a);
        if(empty($a)){
           $orderdata = '';//compact('orderdata','orderd','total','updatedprice')
           return view('front.cart',['orderdata'=>$orderdata]);
        }else if(!empty($a)){
        
        $orderbata =  DB::table('order_details as o')->select('o.*')->where('customer_id',$user->id)->count();
        //dd($orderbata);
       
        if($orderbata === 0){
            $orderdata = '';
            return view('front.cart',['orderdata'=>$orderdata]);
        }else if(!empty($orderdata)){
            
        $orderd =  DB::table('orders as o')
                    ->select('o.*')
                    ->where('o.customer_id',$user->id)
                    ->where('o.razorpay_order_status',1)
                    ->sum('sub_total');
                    //dd($orderd);

        $total  =  DB::table('order_details as o')->select('o.*')->where('customer_id',$user->id)
                    ->where('order_details_status',1)
                    ->count();
                    

        $or = Order::where('customer_id', $user->id)
                        ->where('razorpay_order_status',1)
                        ->update([
                            'sub_total' => $orderd
                        ]);
        //$orderd = DB::table('orders')->select('orders.*')->where('customer_id',$user->id)->first();
         //dd($orderd);
        
        $updatedprice = '';
        
       
        return view('front.cart',compact('orderdata','orderd','total','updatedprice'));
        }
        }
      }
    }

    public function cartdata(Request $request,$id){
        //dd($request->all());
        $total = (int)($request->id);
        $user = auth('customer')->user();
        for($i = 0; $i <= $total ; $i++){ 
            $i = $i; 
            $productprice = (int)$request->{'product_'.$i};
            $productqty = (int)$request->{'counter_'.$i};
            $id = (int)$request->{'productid_'.$i};
    
            // print_r(var_dump($productqty));
            // print_r(var_dump($productprice));
            // dd($productprice);
            $data = $productprice*$productqty; 
            $datao[] = $productprice*$productqty; 
            $quantity[] = $productqty; 
            //$q[]    =  (int)$request->{'counter_'.$i};
            // $q[]    =  array(
            //     'product_quantity'  => (int)$request->{'counter_'.$i}
            // );
            // $i[] = array(
            //     'order_details_id' => (int)$request->{'productid_'.$i}
            // );

            $dat = DB::table('order_details')
                ->where('order_details_id',$id)
                ->where('order_details_status',1)
                ->update([
                    'product_quantity'=> $productqty   
                ]);
        }
        
        //DB::table('order_details')->insert($q)->where('order_details_id',$id);
        $quantity = $quantity;
        $updatedprice = $datao;
        $orderd = array_sum($datao);
        
       
        $user = auth('customer')->user();   
        $orderdata = DB::table('order_details as o')->select('o.*')->where('customer_id',$user->id)
        ->where('order_details_status',1)
        ->get();

        $total  =  DB::table('order_details as o')->select('o.*')->where('customer_id',$user->id)
                    ->where('order_details_status',1)
                    ->count();

        $ord = Order::where('customer_id', $user->id)
                        ->where('razorpay_order_status',1)
                        ->update([
                            'sub_total' => $orderd
                        ]);
        
        //dd($orderdata);

        return view('front.cart',compact('orderdata','orderd','total','updatedprice','quantity'));
    }



    public function cartdelete(Request $request,$id){
       
        $orderData = OrderDetail::where('order_details_id',$id)
                    ->where('order_details_status',1)
                    ->get();
                     //dd($orderData);
        $orderno = $orderData[0]->order_no;
        $product_price = $orderData[0]->product_price;
        $product_quantity = $orderData[0]->product_quantity;
        $product_price = $product_price*$product_quantity;
        $ordertable = Order::where('order_id',$orderno)->get();
        $oldprice = $ordertable[0]->sub_total;
        $newprice = $oldprice-$product_price;
        //dd($orderno);

        $orderprice = Order::where('order_id', $orderno)
                        ->update([
                            'sub_total' => $newprice
                        ]);
       
        
        $orderData = OrderDetail::where('order_details_id',$id)->where('order_details_status',1)->delete();

        Session::flash('message', 'Your Product Delete Succesfully!!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('cart');
    }


}
