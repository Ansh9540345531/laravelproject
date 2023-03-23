<?php

namespace App\Http\Controllers\Hotelier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotelier;
use Hash;
use Auth;

class HotelierProfileController extends Controller
{
    public function index()
    {
        return view('hotelier.profile');
    }
    public function profile_submit(Request $request){
        $hotelier_data = Hotelier::where('email',Auth::guard('hotelier')->user()->email)->first();

        $request->validate([
            'name' =>   'required',
            'email' =>  'required|email'
        ]);

        if($request->password != ''){
            $request->validate([
                'password'  =>  'required',
                'retype_password'   => 'required|same:password'
            ]);

            $hotelier_data->password = Hash::make($request->password);

        }

        if($request->hasfile('photo')){
            $request->validate([
                'photo' =>  'image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$hotelier_data->photo));
            $ext = $request->file('photo')->extension();
            $final_name = 'hotelier' . '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'),$final_name);
            $hotelier_data->photo = $final_name;
        }

        $hotelier_data->name = $request->name;
        $hotelier_data->email = $request->email;
        $hotelier_data->update();

        return redirect()->back()->with('success','Profile information Saved Successfully.');
        echo $request->name;
    }
}
