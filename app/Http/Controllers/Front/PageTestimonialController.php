<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageTestimonial;

class PageTestimonialController extends Controller
{
    public function index()
    {
       $pagetestimonial_data = PageTestimonial::where('id',1)->first();
       return view('front.testimonial',compact('pagetestimonial_data'));
    }
}

?>