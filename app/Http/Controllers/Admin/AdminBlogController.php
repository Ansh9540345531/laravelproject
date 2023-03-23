<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class AdminBlogController extends Controller
{
    public function blogs()
    {
       $page_data = Blog::Where('id',1)->first();
       return view('admin.blog',compact('page_data'));
    }

    public function blogs_update(Request $request)
    {
        $obj = Blog::where('id',1)->first();
        $obj->blog_heading = $request->blog_heading;
        $obj->blog_content = $request->blog_content;
        $obj->update();

        return redirect()->back()->with('success','Data is Updated Successfully.');
    }
}
