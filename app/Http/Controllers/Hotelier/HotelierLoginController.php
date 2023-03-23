<?php

namespace App\Http\Controllers\Hotelier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotelier;
use App\Mail\Websitemail;
use Hash;
use Auth;

class HotelierLoginController extends Controller
{
    public function index()
    {
        return view('hotelier.login');
    }

    public function forget_password()
    {
        return view('hotelier.forget_password');
    }

    public function forget_password_submit(Request $request){
        $request->validate([
            'email' =>  'required|email'
        ]);

        $hotelier_data = Hotelier::where('email',$request->email)->first();
        if(!$hotelier_data){
            return redirect()->back()->with('error','Email Address Not Found.');
        }

        $token = hash('sha256',time());

        $hotelier_data->token = $token;
        $hotelier_data->update();

        $reset_link = url('hotelier/reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Password';
        $message = 'Please Click on the following link : <br>';
        $message .= '<a href="'.$reset_link.'">Click Here</a>';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));
        return redirect()->route('hotelier_login')->with('success','Please Check Your email and follow the steps there.');
    
    }

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' =>  'required|email',
            'password'  =>  'required'
        ]);

        $credential = [
            'email' =>$request->email,
            'password'  => $request->password
        ];

        if(Auth::guard('hotelier')->attempt($credential))
        {
           return redirect()->route('hotelier_home');
        }else{
            return redirect()->route('hotelier_login')->with('error','Information is not Correct.');
        }

    }

    public function logout()
    {
        Auth::guard('hotelier')->logout();
        return redirect()->route('hotelier_login');
    }

    public function reset_password($token,$email)
    {
        $hotelier_data = Hotelier::where('token',$token)->where('email',$email)->first();
        if(!$hotelier_data)
        {
            return redirect()->route('hotelier_login');
        }

        return view('hotelier.reset_password',compact('email','token'));
    }

    public function reset_password_submit(Request $request){
        $request->validate([
            'password' =>   'required',
            'retype_password' => 'required|same:password'
        ]);
        //dd($request->all());

        $hotelier_data = Hotelier::where('token',$request->token)->where('email',$request->email)->first();
        $hotelier_data->token = '';
        $hotelier_data->password = Hash::make($request->password);
        $hotelier_data->update();
        return redirect()->route('hotelier_login')->with('success','Password is Resest Successfully.');
    }
    


}
