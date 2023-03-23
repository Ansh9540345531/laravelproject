<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Activity;
use App\Mail\Websitemail;
use App\Models\Setting;
use Hash;
use Auth;
use Validator;
use DB;



class EnquiryController extends Controller
{
    public function index()
    {
        
        $activities = Enquiry::get();

        return view('admin.activities_view', compact('activities'));
    }

    public function activity_view()
    {
        
        $activities = Enquiry::get();
        $activity = Activity::get();

        $activity = DB::table('activities as o')
        ->leftjoin('activities as h','o.activities','=','h.id')
        ->select('h.*','o.*')
        ->get();


        return view('front.activities', compact('activities','activity'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'country' => 'required',
            'activities' => 'required',
            'message' => 'required'
        ]);

        $activity = $request->input('activities');
        $activity = implode(',', $activity);

    
        $token = hash('sha256',time());
        $obj = new Enquiry();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->number = $request->number;
        $obj->country = $request->country;
        $obj->activities = $activity;
        $obj->message = $request->message;
        $obj->save();


        $subject = 'Page1travels';
        $message = 'Hello Testing';

        $settings_data = Setting::get();
        $admin_email = $settings_data[0]->top_bar_email;
        $message_admin = 'Hello Admin <br> Add New User';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));
        \Mail::to($admin_email)->send(new Websitemail($subject,$message_admin));


        return redirect()->back()->with('success', 'Enquiry is submit successfully.');

    }
}
