<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMSPage;

class CmsPageController extends Controller
{
    public function index(){
       $data = CMSPage::where('id',1)->first();
       return view('front.visa_card',compact('data'));
    }

    public function about(){
        $data = CMSPage::where('id',2)->first();
        return view('front.about',compact('data'));
     }
}

?>