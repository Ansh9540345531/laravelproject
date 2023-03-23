<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Models\Forex;
use App\Mail\Websitemail;
use App\Models\Setting;
use Hash;
use Auth;
use Validator;


class ForexController extends Controller
{
     
  public function index()
    {
        $forex = Forex::get();
        return view('admin.forex_view', compact('forex'));
    }

    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'message' => 'required'
    ]);
    
        $token = hash('sha256',time());
        $obj = new Forex();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->message = $request->message;
        $obj->save();


        $subject = 'Page1travels';
        $message = 'Hello Testing';

        $settings_data = Setting::get();
        $admin_email = $settings_data[0]->top_bar_email;
        $message_admin = 'Hello Admin <br> Add New User';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));
        \Mail::to($admin_email)->send(new Websitemail($subject,$message_admin));

        return redirect()->back()->with('success', 'Forex is submit successfully.');

    }



    //
    public function currency()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.apilayer.com/fixer/symbols",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain",
            "apikey: CrMMg143MZaQk9H3NyyCtbwixwtNY78r"
          ),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET"
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
    }

    public function currercychange(Request $request){
      $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.apilayer.com/fixer/convert?to=$request->to&from=$request->from&amount=$request->amount",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain",
            "apikey: CrMMg143MZaQk9H3NyyCtbwixwtNY78r"
          ),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    

}
