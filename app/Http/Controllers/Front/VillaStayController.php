<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\VillaStay;
use App\Mail\Websitemail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Session;

class VillaStayController extends Controller
{
    public function index(){
        return view('front.villastays');
    }

    public function villa(Request $request){
        //dd($request->all());
        $token = hash('sha256',time());
        $obj = new VillaStay();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->mobile = $request->mobile;
        $obj->person = $request->person;
        $obj->checkin_date = $request->checkin_date;
        $obj->checkout_date = $request->checkout_date;
        $obj->message = $request->message;
        $obj->save();

        Session::flash('message', 'Thank You,We Will Contact You Soon.!!'); 
        Session::flash('alert-class', 'alert-danger'); 


        $subject = 'Page1travels';
        $message = 'Hello Testing';

        $settings_data = Setting::get();
        $admin_email = $settings_data[0]->top_bar_email;
        $message_admin = 'Hello Admin <br> Add New User';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));
        \Mail::to($admin_email)->send(new Websitemail($subject,$message_admin));

        return redirect('/villastays');

    }
}
