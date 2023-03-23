<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guide;

class AdminGuideController extends Controller
{
    public function guides()
    {
       $page_data = Guide::Where('id',1)->first();
       return view('admin.page_guide',compact('page_data'));
    }

    public function guides_update(Request $request)
    {
        $obj = Guide::where('id',1)->first();
        $obj->guide_heading = $request->guide_heading;
        $obj->guide_content = $request->guide_content;
        $obj->update();

        return redirect()->back()->with('success','Data is Updated Successfully.');
    }
}
