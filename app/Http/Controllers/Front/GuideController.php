<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guide;

class GuideController extends Controller
{
    public function index(){
       $guide_data = Guide::where('id',1)->first();
       return view('front.guide',compact('guide_data'));
    }
}

?>