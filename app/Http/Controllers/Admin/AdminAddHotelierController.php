<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotelier;
use Hash;
use Auth;



class AdminAddHotelierController extends Controller
{
    public function index()
    {
        $addhotelier = Hotelier::get();
        return view('admin.addhotelier_view', compact('addhotelier'));
    }

    public function add()
    {
        return view('admin.addhotelier_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'image|mimes:jpg,svg,jpeg,png,gif'
        ]);

        $ext = $request->file('photo')->extension();
        $finalname = time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$finalname);

        

        $obj = new Hotelier();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->password = Hash::make($request->password);
        $obj->photo = $finalname;
        $obj->save();

        return redirect()->back()->with('success', 'Hotelier is added successfully.');

    }

    public function edit($id)
    {
        $addhotelier_data = Hotelier::where('id',$id)->first();
        return view('admin.addhotelier_edit', compact('addhotelier_data'));
    }

    public function update(Request $request,$id) 
    {        
        $obj = Hotelier::where('id',$id)->first();
        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,svg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->photo));
            $ext = $request->file('photo')->extension();
            $final_name = time().'.'.$ext;
            $request->file('photo')->move(public_path('uploads/'),$final_name);
            $obj->photo = $final_name;
        }


        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->password = Hash::make($request->password);
        $obj->update();

        return redirect()->back()->with('success', 'Hotelier is updated successfully.');
    }

    public function delete($id)
    {
        $single_data = Hotelier::where('id',$id)->first();
        unlink(public_path('uploads/'.$single_data->photo));
        $single_data->delete();

        return redirect()->back()->with('success', 'Hotelier is deleted successfully.');
    }

}
