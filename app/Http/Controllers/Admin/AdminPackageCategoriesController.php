<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package_Category;

class AdminPackageCategoriesController extends Controller
{
    public function index()
    {
        $category = Package_Category::get();
        return view('admin.package_category_view', compact('category'));
    }

    public function add()
    {
        return view('admin.package_category_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpg,svg,jpeg,png,gif,webp',
        ]);

        $ext = $request->file('image')->extension();
        $final_name = time().'.'.$ext;
        $request->file('image')->move(public_path('uploads/'),$final_name);

        $obj = new Package_Category();
        $obj->image = $final_name;
        $obj->name = $request->name;
        $obj->image_link = $request->image_link;
        $obj->save();

        return redirect()->back()->with('success', 'Package Category is added successfully.');

    }

    public function edit($id)
    {
        $package_category_data = Package_Category::where('id',$id)->first();
        return view('admin.package_category_edit', compact('package_category_data'));
    }

    public function update(Request $request,$id) 
    {        
        $obj = Package_Category::where('id',$id)->first();
        if($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpg,svg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->photo));
            $ext = $request->file('image')->extension();
            $final_name = time().'.'.$ext;
            $request->file('image')->move(public_path('uploads/'),$final_name);
            $obj->photo = $final_name;
        }

        $obj->name = $request->name;
        $obj->image_link = $request->image_link;
        $obj->update();

        return redirect()->back()->with('success', 'Product Category is updated successfully.');
    }

    public function delete($id)
    {
        $single_data = Package_Category::where('id',$id)->first();
        unlink(public_path('uploads/'.$single_data->image));
        $single_data->delete();

        return redirect()->back()->with('success', 'Package Category is deleted successfully.');
    }


}