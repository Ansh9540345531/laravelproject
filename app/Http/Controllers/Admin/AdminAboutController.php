<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AdminAboutController extends Controller
{
    public function index()
    {
        $about = About::get();
        //dd($about);
        return view('admin.about_view', compact('about'));
    }

    public function add()
    {
        return view('admin.about_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo1' => 'image|mimes:jpg,svg,jpeg,png,gif',
            'photo2' => 'image|mimes:jpg,svg,jpeg,png,gif'
        ]);

        $ext = $request->file('photo1')->extension();
        $finalname = time().'.'.$ext;
        $request->file('photo1')->move(public_path('uploads/'),$finalname);

        $ext2 = $request->file('photo2')->extension();
        $finalphoto2 = rand().'.'.$ext2;
        $request->file('photo2')->move(public_path('uploads/'),$finalphoto2);

        

        $obj = new About();
        $obj->title = $request->title;
        $obj->heading = $request->heading;
        $obj->description = $request->description;
        $obj->button_name = $request->button_name;
        $obj->button_url = $request->button_url;
        $obj->photo1 = $finalname;
        $obj->photo2 = $finalphoto2;
        $obj->save();

        return redirect()->back()->with('success', 'About is added successfully.');

    }

    public function edit($id)
    {
        $about_data = About::where('id',$id)->first();
        return view('admin.about_edit', compact('about_data'));
    }

    public function update(Request $request,$id) 
    {        
        $obj = About::where('id',$id)->first();
        if($request->hasFile('photo1')) {
            $request->validate([
                'photo1' => 'image|mimes:jpg,svg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->photo1));
            $ext = $request->file('photo1')->extension();
            $final_name = time().'.'.$ext;
            $request->file('photo1')->move(public_path('uploads/'),$final_name);
            $obj->photo1 = $final_name;
        }

        if($request->hasFile('photo2')) {
            $request->validate([
                'photo2' => 'image|mimes:jpg,svg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->photo2));
            $ext2 = $request->file('photo2')->extension();
            $finalphoto2 = rand().'.'.$ext2;
            $request->file('photo2')->move(public_path('uploads/'),$finalphoto2);
            $obj->photo2 = $finalphoto2;
        }

        $obj->title = $request->title;
        $obj->heading = $request->heading;
        $obj->description = $request->description;
        $obj->button_name = $request->button_name;
        $obj->button_url = $request->button_url;
        $obj->update();

        return redirect()->back()->with('success', 'About is updated successfully.');
    }

    public function delete($id)
    {
        $single_data = About::where('id',$id)->first();
        unlink(public_path('uploads/'.$single_data->photo1));
        unlink(public_path('uploads/'.$single_data->photo2));
        $single_data->delete();

        return redirect()->back()->with('success', 'About is deleted successfully.');
    }

}
