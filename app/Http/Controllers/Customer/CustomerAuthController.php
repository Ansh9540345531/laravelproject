<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Mail\Websitemail;
use Hash;
use Auth;
use Redirect;

class CustomerAuthController extends Controller
{
    public function logout(){
        Auth::guard('customer')->logout();
        return redirect()->route('home');
    }

    public function registration_submit(Request $request){
        
        $request->validate([
            'email' =>  'email|unique:customers',
        ]);
        
        //dd($request->all());
        $token = hash('sha256',time());
        $user = new Customer();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->password = Hash::make($request->password);
        $user->status = 'Pending';
        $user->token = $token;
        $user->save();

        $verification_link = url('/registration/verify/'.$token.'/'.$request->email);
        $subject = 'Registration Confirmation';
        $message = 'Please Click on this link : <br><a href="'.$verification_link.'">Click here</a>';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));

        //echo 'Email is sent';
        return redirect('/')->with('success', 'Email is sent');
}

public function registration_verify($token,$email){
    //echo $email;
    $user = Customer::where('token',$token)->where('email',$email)->first();
    if(!$user){
        return redirect()->route('home');
    }
    $user->status = 'Active';
    $user->token = '';
    $user->update();
    //echo "Registration is Successful";
    return redirect('/')->with('success', 'Registration is Successful');
}


public function login_submit(Request $request){
    //dd($request->all());

    $credentials = [
        'email' =>  $request->email,
        'password' => $request->password,
        'status' => 'Active'
    ];

    if(Auth::guard('customer')->attempt($credentials)){
        return redirect()->route('customer_home');
    }else{
        //echo "Login details wrong";
        return redirect('/')->with('error', 'Login details wrong.');
    }
}



public function forget_password_submit(Request $request){
    //dd($request->all());

    $token = Hash('sha256',time());

    $user = Customer::where('email',$request->email)->first();
    if(!$user){
        //dd('Email not Found.');
        return redirect('/')->with('error', 'Email not Found.');
    }
    $user->token = $token;
    $user->update();
    $reset_link = url('reset_password/'.$token.'/'.$request->email);
    
    $subject = 'Reset Password';
    $message = 'Please click on the following link:<br><a href="'.$reset_link.'">Click Here</a>';
    \Mail::to($request->email)->send(new Websitemail($subject,$message));
    //echo 'Check Your Email.'; 
    return redirect('/')->with('success', 'Check Your Email.');

}

public function reset_password($token,$email){
     //echo $email;

    $user = Customer::where('token',$token)->where('email',$email)->first();
    if(!$user){
       // dd('No user is found.');
       return redirect('/')->with('error', 'No user is found.');
    } 
    return view('front.reset_password',compact('token','email')); 
}

public function reset_password_submit(Request $request){
    //echo $request->new_password;
    //dd($request->all());
    $user = Customer::where('token',$request->token)->where('email',$request->email)->first();
    $user->token = '';
    $user->password = Hash::make($request->new_password);
    $user->update();

    //echo "Password is Reset"; 
    return redirect('/')->with('success', 'Password is Reset.');
}

}
