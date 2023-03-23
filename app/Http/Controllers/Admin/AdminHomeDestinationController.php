<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeDestination;

class AdminHomeDestinationController extends Controller
{
    public function index(){
        $user = HomeDestination::get();
       // dd($user);
        return view('admin.home_destination_view', compact('user'));
    }

    public function add()
    {
        return view('admin.home_destination_add');
    }

    public function store(Request $request)
    { 
        $request->validate([
            'destination_image' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $ext = $request->file('destination_image')->extension();
        $final_name = time().'.'.$ext;
        $request->file('destination_image')->move(public_path('uploads/'),$final_name);

        $obj = new HomeDestination();
        $obj->destination_name = $request->destination_name;
        $obj->destination_cities = $request->destination_cities;
        $obj->destination_url = $request->destination_url;
        $obj->destination_image = $final_name;
        $obj->save();

        return redirect()->back()->with('success', 'Destination is added successfully.');

    }
    
    public function edit($id){
        $destination_data = HomeDestination::where('id',$id)->first();
        return view('admin.home_destination_edit',compact('destination_data'));
    }

    public function update(Request $request,$id){
        $data = HomeDestination::where('id',$id)->first();
        //dd($data);
        $data->destination_name = $request->destination_name;
        $data->destination_cities = $request->destination_cities;
        $data->destination_url = $request->destination_url;

        if($request->hasFile('destination_image')){
            $request->validate([
                'destination_image' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$data->destination_image));
            $ext = $request->file('destination_image')->extension();
            $final_name = time().'.'.$ext;
            $request = $request->file('destination_image')->move(public_path('uploads/'),$final_name);
            $data->destination_image = $final_name;
        }

        $data->update();
        return redirect()->back()->with('success','Destination is updated Successfully.');
    }
    
    public function delete($id)
    {
        $data = HomeDestination::where('id',$id)->first();
        unlink(public_path('uploads/'.$data->destination_image));
        $data->delete();

        return redirect()->back()->with('success', 'Destination is deleted successfully.');
    }
}
