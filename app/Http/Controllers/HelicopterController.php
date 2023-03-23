<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Helicopter;
use App\Mail\Websitemail;
use App\Models\Setting;
use Hash;
use Auth;
use Validator;



class HelicopterController extends Controller
{



    public function index()
    {
        $helicopter = Helicopter::get();
        return view('admin.helicopter_view', compact('helicopter'));
    }




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            'from' => 'required',
            'to' => 'required',
            'date' => 'required',
            'time' => 'required',
            'adult' => 'required',
            'children' => 'required',
            'message' => 'required',
            'checkbox' => 'required'
        ]);
    
        $token = hash('sha256',time());
        $obj = new Helicopter();
        $obj->name = $request->name;
        $obj->number = $request->number;
        $obj->email = $request->email;
        $obj->from = $request->from;
        $obj->to = $request->to;
        $obj->date = $request->date;
        $obj->time = $request->time;
        $obj->adult = $request->adult;
        $obj->children = $request->children;
        $obj->message = $request->message;
        $obj->checkbox = $request->checkbox;
        $obj->save();

        $subject = 'Page1travels';
        $message = 'Hello Testing';

        $settings_data = Setting::get();
        $admin_email = $settings_data[0]->top_bar_email;
        $message_admin = 'Hello Admin <br> Add New User';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));
        \Mail::to($admin_email)->send(new Websitemail($subject,$message_admin));

        return redirect()->back()->with('success', 'Your data is submit successfully.');

    }
}
