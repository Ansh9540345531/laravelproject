<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class AdminPageController extends Controller
{
    public function about()
    {
       $page_data = Page::Where('id',1)->first();
       return view('admin.page_about',compact('page_data'));
    }

    public function about_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->about_heading = $request->about_heading;
        $obj->about_content = $request->about_content;
        $obj->update();

        return redirect()->back()->with('success','Data is Updated Successfully.');
    }
}
