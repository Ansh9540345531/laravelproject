<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MegaOffer;

class AdminMegaOfferController extends Controller
{
    public function index()
    {
        $mega = MegaOffer::get();
        return view('admin.offer_view', compact('mega'));
    }

    public function add()
    {
        return view('admin.offer_add');
    }

    public function store(Request $request)
    {
      
        $obj = new MegaOffer();
        $obj->title = $request->title;
        $obj->offer = $request->offer;
        $obj->heading = $request->heading;
        $obj->description = $request->description;
        $obj->list1 = $request->list1;
        $obj->list2 = $request->list2;
        $obj->list3 = $request->list3;
        $obj->button_name = $request->button_name;
        $obj->button_link = $request->button_link;
        $obj->save();

        return redirect()->back()->with('success', 'Mega Offer is added successfully.');
    }


    public function edit($id)
    {
        $mega_data = MegaOffer::where('id',$id)->first();
        return view('admin.offer_edit', compact('mega_data'));
    }

    public function update(Request $request,$id) 
    {        
        $obj = MegaOffer::where('id',$id)->first();
        $obj->title = $request->title;
        $obj->offer = $request->offer;
        $obj->heading = $request->heading;
        $obj->description = $request->description;
        $obj->list1 = $request->list1;
        $obj->list2 = $request->list2;
        $obj->list3 = $request->list3;
        $obj->button_name = $request->button_name;
        $obj->button_link = $request->button_link;
        $obj->update();

        return redirect()->back()->with('success', 'Mega Offer is updated successfully.');
    }

    public function delete($id)
    {
        $single_data = MegaOffer::where('id',$id)->first();
        $single_data->delete();
        return redirect()->back()->with('success', 'FAQ is deleted successfully.');
    }
}
