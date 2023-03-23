<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use App\Mail\Websitemail;
use App\Models\Slide;
use App\Models\TabSection;
use App\Models\Testimonial;
use App\Models\HomeDestination;
use App\Models\Faq;
use App\Models\HotelHomeSection;
use App\Models\About;
use App\Models\Festival;
use App\Models\MegaOffer;
use DB;





class WebsiteController extends Controller
{
    public function index(){
        $slide_all = Slide::get();
        $tab_all = TabSection::get();
        $testimonial_all = Testimonial::get();
        $home_destination_all = HomeDestination::get();
        $hoteldesc = HotelHomeSection::get();
        $faq_all = Faq::get();
        $about_all = About::get();
        $festival_all = Festival::get();
        $mega_all = MegaOffer::get();
        //dd($mega_all);

        
        $hoteldesc = DB::table('hotel_home_sections as o')
        ->leftjoin('room_types','room_types.id','=','o.hotel_roomtypes')
        ->select('o.*', 'room_types.today_price')
        ->orderby('o.id','desc')
        ->limit(3)
        ->get();



        return view('front.home',compact('slide_all','tab_all','testimonial_all','home_destination_all','faq_all','hoteldesc','about_all','festival_all','mega_all'));
    }

    // public function registration_submit(Request $request){
    //         //dd($request->all());
    //         $token = hash('sha256',time());
    //         $user = new User();
    //         $user->name = $request->name;
    //         $user->email = $request->email;
    //         $user->mobile = $request->mobile;
    //         $user->password = Hash::make($request->password);
    //         $user->status = 'Pending';
    //         $user->token = $token;
    //         $user->save();

    //         $verification_link = url('/registration/verify/'.$token.'/'.$request->email);
    //         $subject = 'Registration Confirmation';
    //         $message = 'Please Click on this link : <br><a href="'.$verification_link.'">Click here</a>';

    //         \Mail::to($request->email)->send(new Websitemail($subject,$message));

    //         echo 'Email is sent';
    // }

    // public function registration_verify($token,$email){
    //     //echo $email;
    //     $user = User::where('token',$token)->where('email',$email)->first();
    //     if(!$user){
    //         return redirect()->route('home');
    //     }
    //     $user->status = '';
    //     $user->token = '';
    //     $user->update();
    //     echo "Registration is Successful";
    // }


    // public function login_submit(Request $request){
    //     //dd($request->all());

    //     $credentials = [
    //         'email' =>  $request->email,
    //         'password' => $request->password,
    //         'status' => 'Active'
    //     ];

    //     if(Auth::attempt($credentials)){
    //         return redirect()->route('home');
    //     }else{
    //         echo "login details wrong";
    //     }
    // }

    // public function logout(){
    //     Auth::guard('web')->logout();
    //     return redirect()->route('home');
    // }

    // public function forget_password_submit(Request $request){
    //     //dd($request->all());

    //     $token = Hash('sha256',time());

    //     $user = User::where('email',$request->email)->first();
    //     if(!$user){
    //         dd('Email not Found.');
    //     }
    //     $user->token = $token;
    //     $user->update();
    //     $reset_link = url('reset_password/'.$token.'/'.$request->email);
        
    //     $subject = 'Reset Password';
    //     $message = 'Please click on the following link:<br><a href="'.$reset_link.'">Click Here</a>';
    //     \Mail::to($request->email)->send(new Websitemail($subject,$message));
    //     echo 'Check Your Email.'; 

    // }

    // public function reset_password($token,$email){
    //      //echo $email;

    //     $user = User::where('token',$token)->where('email',$email)->first();
    //     if(!$user){
    //         dd('No user is found.');
    //     } 
    //     return view('front.reset_password',compact('token','email')); 
    // }

    // public function reset_password_submit(Request $request){
    //     //echo $request->new_password;
    //     //dd($request->all());
    //     $user = User::where('token',$request->token)->where('email',$request->email)->first();
    //     $user->token = '';
    //     $user->password = Hash::make($request->new_password);
    //     $user->update();

    //     echo "Password is Reset"; 
    // }

}
