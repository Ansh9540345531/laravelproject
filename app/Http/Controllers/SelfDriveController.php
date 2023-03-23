<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SelfDrive;
use App\Mail\Websitemail;
use App\Models\Setting;
use Hash;
use Auth;
use Validator;


class SelfDriveController extends Controller
{


    public function index()
    {
        $selfdrive = SelfDrive::get();
        return view('admin.selfdrive_view', compact('selfdrive'));
    }



    public function store(Request $request)
    {
    
        $token = hash('sha256',time());
        $obj = new SelfDrive();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->number = $request->number;
        $obj->from = $request->from;
        $obj->to = $request->to;
        $obj->save();

        $subject = 'Page1travels';
        $message = 'Hello Testing';

        $settings_data = Setting::get();
        $admin_email = $settings_data[0]->top_bar_email;
        $message_admin = 'Hello Admin <br> Add New User';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));
        \Mail::to($admin_email)->send(new Websitemail($subject,$message_admin));
        

        return redirect()->back()->with('success', 'Self Drive is submit successfully.');

    }
}
