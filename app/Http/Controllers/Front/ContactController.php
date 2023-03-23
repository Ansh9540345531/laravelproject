<?php 

namespace App\Http\Controllers\Front;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Session;

class ContactController extends Controller
{
    public function index(){
       return view('front.contact');
    }

    public function contact(Request $request){
        //dd($request->all());

        $obj = new Contact();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->mobile = $request->mobile;
        $obj->message = $request->message;
        $obj->save();

        Session::flash('message', 'Thank You,We Will Contact You Soon.!!'); 
        Session::flash('alert-class', 'alert-success'); 

        return redirect('/contact');

    }
}

?>