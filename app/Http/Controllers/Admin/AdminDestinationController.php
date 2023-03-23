<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;

class AdminDestinationController extends Controller
{
    public function destination()
    {
       $page_data = Destination::Where('id',1)->first();
       return view('admin.page_destination',compact('page_data'));
    }

    public function destination_update(Request $request)
    {
        $obj = Destination::where('id',1)->first();
        $obj->destination_heading = $request->destination_heading;
        $obj->destination_content = $request->destination_content;
        $obj->update();

        return redirect()->back()->with('success','Data is Updated Successfully.');
    }
}
