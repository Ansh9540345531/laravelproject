<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMSPage;

class AdminCmsPageController extends Controller
{
    public function index()
    {
       $data = CMSPage::Where('id',1)->first();
       //dd($data);
       return view('admin.visa',compact('data'));
    }

    public function update(Request $request)
    {
        $obj = CMSPage::where('id',1)->first();
        $obj->page_name = $request->page_name;
        $obj->sort_description = $request->sort_description;
        $obj->description = $request->description;
        $obj->update();

        return redirect()->back()->with('success','Data is Updated Successfully.');
    }

    public function about()
    {
        $data = CMSPage::Where('id',2)->first();
       //dd($data);
       return view('admin.about_us',compact('data'));
    }

    public function aboutupdate(Request $request)
    {
        $obj = CMSPage::where('id',2)->first();
        $obj->page_name = $request->page_name;
        $obj->sort_description = $request->sort_description;
        $obj->description = $request->description;
        $obj->update();

        return redirect()->back()->with('success','Data is Updated Successfully.');
    }
}
 