<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TabSection;

class AdminTabSectionController extends Controller
{
    public function index(){
        $user = TabSection::get();
       // dd($user);
        return view('admin.tab_view', compact('user'));
    }

    public function add()
    {
        return view('admin.tab_add');
    }

    public function store(Request $request)
    { 
        $request->validate([
            'tab_image' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $ext = $request->file('tab_image')->extension();
        $final_name = time().'.'.$ext;
        $request->file('tab_image')->move(public_path('uploads/'),$final_name);

        $obj = new TabSection();
        $obj->tab_name = $request->tab_name;
        $obj->tab_link = $request->tab_link;
        $obj->tab_image = $final_name;
        $obj->save();

        return redirect()->back()->with('success', 'Data is added successfully.');

    }
    
    public function edit($id){
        $tab_data = TabSection::where('id',$id)->first();
        return view('admin.tab_edit',compact('tab_data'));
    }

    public function update(Request $request,$id){
        $data = TabSection::where('id',$id)->first();
        //dd($data);
        $data->tab_name = $request->tab_name;
        $data->tab_link = $request->tab_link;
      
        if($request->hasFile('tab_image')){
            $request->validate([
                'tab_image' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$data->tab_image));
            $ext = $request->file('tab_image')->extension();
            $final_name = time().'.'.$ext;
            $request = $request->file('tab_image')->move(public_path('uploads/'),$final_name);
            $data->tab_image = $final_name;
        }

        $data->update();
        return redirect()->back()->with('success','Data is updated Successfully.');
    }
    
    public function delete($id)
    {
        $data = TabSection::where('id',$id)->first();
        unlink(public_path('uploads/'.$data->tab_image));
        $data->delete();

        return redirect()->back()->with('success', 'Data is deleted successfully.');
    }
}
