<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class AdminServicesController extends Controller
{
    public function services()
    {
       $page_data = Services::Where('id',1)->first();
       return view('admin.page_services',compact('page_data'));
    }

    public function services_update(Request $request)
    {
        $obj = Services::where('id',1)->first();
        $obj->services_heading = $request->services_heading;
        $obj->services_content = $request->services_content;
        $obj->update();

        return redirect()->back()->with('success','Data is Updated Successfully.');
    }
}
