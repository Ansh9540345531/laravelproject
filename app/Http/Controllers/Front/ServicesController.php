<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    public function index(){
       $services_data = Services::where('id',1)->first();
       return view('front.services',compact('services_data'));
    }
}

?>