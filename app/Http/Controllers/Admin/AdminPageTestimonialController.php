<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageTestimonial;

class AdminPageTestimonialController extends Controller
{
    public function testimonial()
    {
       $page_data = PageTestimonial::Where('id',1)->first();
       return view('admin.page_testimonial',compact('page_data'));
    }

    public function testimonial_update(Request $request)
    {
        $obj = PageTestimonial::where('id',1)->first();
        $obj->testimonial_heading = $request->testimonial_heading;
        $obj->testimonial_content = $request->testimonial_content;
        $obj->update();

        return redirect()->back()->with('success','Data is Updated Successfully.');
    }
}
