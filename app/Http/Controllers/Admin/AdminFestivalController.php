<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Festival;


class AdminFestivalController extends Controller
{
    public function index(){
        $user = Festival::get();
       // dd($user);
        return view('admin.festival_view', compact('user'));
    }

    public function add()
    {
        return view('admin.festival_add');
    }

    public function store(Request $request)
    { 
        $request->validate([
            'photo1' => 'required|image|mimes:jpg,jpeg,png,gif',
            'photo2' => 'required|image|mimes:jpg,jpeg,png,gif',
            'photo3' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $ext1 = $request->file('photo1')->extension();
        $final_name1 = rand().'.'.$ext1;
        $request->file('photo1')->move(public_path('uploads/'),$final_name1);

        $ext2 = $request->file('photo2')->extension();
        $final_name2 = rand().'.'.$ext2;
        $request->file('photo2')->move(public_path('uploads/'),$final_name2);

        $ext3 = $request->file('photo3')->extension();
        $final_name3 = rand().'.'.$ext3;
        $request->file('photo3')->move(public_path('uploads/'),$final_name3);

        $obj = new Festival();
        $obj->first_festival_name = $request->first_festival_name;
        $obj->first_festival_url = $request->first_festival_url;
        $obj->photo1 = $final_name1;

        $obj->second_festival_name = $request->second_festival_name;
        $obj->second_festival_url = $request->second_festival_url;
        $obj->photo2 = $final_name2;

        $obj->third_festival_name = $request->third_festival_name;
        $obj->third_festival_url = $request->third_festival_url;
        $obj->photo3 = $final_name3;
        $obj->save();

        return redirect()->back()->with('success', 'Festival is added successfully.');

    }
    
    public function edit($id){
        $festival_data = Festival::where('id',$id)->first();
        return view('admin.festival_edit',compact('festival_data'));
    }

    

    public function update(Request $request,$id){
        $obj = Festival::where('id',$id)->first();
        if($request->hasFile('photo1')) {
            $request->validate([
                'photo1' => 'image|mimes:jpg,svg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->photo1));
            $ext = $request->file('photo1')->extension();
            $final_name = rand().'.'.$ext;
            $request->file('photo1')->move(public_path('uploads/'),$final_name);
            $obj->photo1 = $final_name;
        }

        if($request->hasFile('photo2')) {
            $request->validate([
                'photo2' => 'image|mimes:jpg,svg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->photo2));
            $ext2 = $request->file('photo2')->extension();
            $final_photo2 = rand().'.'.$ext2;
            $request->file('photo2')->move(public_path('uploads/'),$final_photo2);
            $obj->photo2 = $final_photo2;
        }

        if($request->hasFile('photo3')) {
            $request->validate([
                'photo3' => 'image|mimes:jpg,svg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->photo3));
            $ext3 = $request->file('photo3')->extension();
            $final_photo3 = rand().'.'.$ext3;
            $request->file('photo3')->move(public_path('uploads/'),$final_photo3);
            $obj->photo3 = $final_photo3;
        }

        $obj->first_festival_name = $request->first_festival_name;
        $obj->first_festival_url = $request->first_festival_url;
        $obj->second_festival_name = $request->second_festival_name;
        $obj->second_festival_url = $request->second_festival_url;
        $obj->third_festival_name = $request->third_festival_name;
        $obj->third_festival_url = $request->third_festival_url;

        $obj->update();
        return redirect()->back()->with('success','Festival is updated Successfully.');
    }
    
    public function delete($id)
    {
        $data = Festival::where('id',$id)->first();
        unlink(public_path('uploads/'.$data->photo1));
        unlink(public_path('uploads/'.$data->photo2));
        unlink(public_path('uploads/'.$data->photo3));
        $data->delete();

        return redirect()->back()->with('success', 'Festival is deleted successfully.');
    }
}
