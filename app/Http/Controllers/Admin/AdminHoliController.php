<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Holi;

class AdminHoliController extends Controller
{
    public function index()
    {
        $user = Holi::get();
        return view('admin.holi_view', compact('user'));
    }

    public function add()
    {
        return view('admin.holi_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'image|mimes:jpg,svg,jpeg,png,gif',
            'photo1' => 'image|mimes:jpg,svg,jpeg,png,gif'
            
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = time().'.'.$ext;
        $request->file('photo')->move(public_path('uploads/'),$final_name);

        $ext2 = $request->file('photo1')->extension();
        $final_photo2 = rand().'.'.$ext2;
        $request->file('photo1')->move(public_path('uploads/'),$final_photo2);


        $obj = new Holi();
        $obj->photo = $final_name;
        $obj->photo1 = $final_photo2;
        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->save();

        return redirect()->back()->with('success', 'Holi Slider is added successfully.');

    }

    public function edit($id)
    {
        $holi_data = Holi::where('id',$id)->first();
        return view('admin.holi_edit', compact('holi_data'));
    }

    public function update(Request $request,$id) 
    {        
        $obj = Holi::where('id',$id)->first();
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

        if($request->hasFile('photo1')) {
            $request->validate([
                'photo1' => 'image|mimes:jpg,svg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->photo1));
            $ext2 = $request->file('photo1')->extension();
            $final_photo2 = rand().'.'.$ext2;
            $request->file('photo1')->move(public_path('uploads/'),$final_photo2);
            $obj->photo1 = $final_photo2;
        }

        $obj->title = $request->title;
        $obj->description = $request->description;
       
        $obj->update();

        return redirect()->back()->with('success', 'Holi Slider is updated successfully.');
    }

    public function delete($id)
    {
        $single_data = Holi::where('id',$id)->first();
        unlink(public_path('uploads/'.$single_data->photo));
        unlink(public_path('uploads/'.$single_data->photo1));
        $single_data->delete();

        return redirect()->back()->with('success', 'Holi Slider is deleted successfully.');
    }

}