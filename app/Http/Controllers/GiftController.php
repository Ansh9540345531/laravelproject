<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gift;
use App\Mail\Websitemail;
use App\Models\Setting;
use Hash;
use Auth;
use Validator;


class GiftController extends Controller
{
    public function index()
    {
        $gift = Gift::get();
        return view('admin.gift_view', compact('gift'));
    }




    public function store(Request $request)
    {
    
        $token = hash('sha256',time());
        $obj = new Gift();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->number = $request->number;
        $obj->quantity = $request->quantity;
        $obj->message = $request->message;
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
