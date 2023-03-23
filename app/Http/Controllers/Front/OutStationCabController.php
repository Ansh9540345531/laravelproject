<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OutStationCab;
use App\Mail\Websitemail;
use App\Models\Setting;
use Session;

class OutStationCabController extends Controller
{
    public function index(){
        return view('front.outstationcabs');
    }

    public function outstationcabsubmit(Request $request){
        //dd($request->all());
        $request->validate([
            'pickup_location' => 'required',
            'drop_location' => 'required',
            'mobile' => 'required',
            'person' => 'required',
            'pickup_date' => 'required',
            'time' => 'required'
        ]);

       
        $obj = new OutStationCab();
        $obj->pickup_location = $request->pickup_location;
        $obj->drop_location = $request->drop_location;
        $obj->mobile = $request->mobile;
        $obj->person = $request->person;
        $obj->pickup_date = $request->pickup_date;
        $obj->time = $request->time;
        $obj->save();

        Session::flash('message', 'Thank You,We Will Contact You Soon.!!'); 
        Session::flash('alert-class', 'alert-danger'); 

        

        return redirect('/outstationcabs');
       
    }

    public function outstationcabformsubmit(Request $request){
        //dd($request->return_date);
        $request->validate([
            'pickup_location' => 'required',
            'drop_location' => 'required',
            'mobile' => 'required',
            'person' => 'required',
            'pickup_date' => 'required',
            'return_date' => 'required',
            'time' => 'required'
        ]);

        
        $obj = new OutStationCab();
        $obj->pickup_location = $request->pickup_location;
        $obj->drop_location = $request->drop_location;
        $obj->mobile = $request->mobile;
        $obj->person = $request->person;
        $obj->pickup_date = $request->pickup_date;
        $obj->return_date = $request->return_date;
        $obj->time = $request->time;
        $obj->save();

        Session::flash('message', 'Thank You,We Will Contact You Soon.!!'); 
        Session::flash('alert-class', 'alert-success'); 


    

        return redirect('/outstationcabs');

    }
    
}
