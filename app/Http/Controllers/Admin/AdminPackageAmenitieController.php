<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageAmenitie;

class AdminPackageAmenitieController extends Controller
{
    public function index(){
        $user = PackageAmenitie::get();
       // dd($user);
        return view('admin.package_amenitie_view', compact('user'));
    }

    public function add()
    {
        return view('admin.package_amenitie_add');
    }

    public function store(Request $request)
    { 
        $request->validate([
            'aminite_image' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $ext = $request->file('aminite_image')->extension();
        $final_name = time().'.'.$ext;
        $request->file('aminite_image')->move(public_path('uploads/'),$final_name);

        $obj = new PackageAmenitie();
        $obj->aminite_name = $request->aminite_name;
        $obj->aminite_image = $final_name;
        $obj->save();

        return redirect()->back()->with('success', 'Amenitie is added successfully.');

    }
    
    public function edit($id){
        $amenitie_data = PackageAmenitie::where('id',$id)->first();
        return view('admin.package_amenitie_edit',compact('amenitie_data'));
    }

    public function update(Request $request,$id){
        
        $data = PackageAmenitie::where('id',$id)->first();
        
        //dd($data);
        $data->aminite_name = $request->aminite_name;
        

        if($request->hasFile('aminite_image')){
            $request->validate([
                'aminite_image' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$data->aminite_image));
            $ext = $request->file('aminite_image')->extension();
            $final_name = time().'.'.$ext;
            $request = $request->file('aminite_image')->move(public_path('uploads/'),$final_name);
            $data->aminite_image = $final_name;
        }

        $data->update();
        return redirect()->back()->with('success','Amenitie is updated Successfully.');
    }
    
    public function delete($id)
    {
        $data = PackageAmenitie::where('id',$id)->first();
        unlink(public_path('uploads/'.$data->aminite_image));
        $data->delete();

        return redirect()->back()->with('success', 'Amenitie is deleted successfully.');
    }
}
