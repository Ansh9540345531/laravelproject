<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function index(){
       $destination_data = Destination::where('id',1)->first();
       return view('front.destination',compact('destination_data'));
    }
}

?>