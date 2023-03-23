<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\Order;

class CustomerHomeController extends Controller
{
    public function index(){
        //$total_completed_orders = Order::where('status','Completed')-count();
        return view('customer.home');
    }


}
