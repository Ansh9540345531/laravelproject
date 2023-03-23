<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageProduct;
use App\Models\Package_Category;
use App\Models\PackageAmenitie;
use App\Models\Image;
use File;

class AdminPackageProductController extends Controller
{
    public function index()
    {
        $product = PackageProduct::get();
        //dd($product);
        return view('admin.package_product_view',compact('product'));
    }

    public function add()
    {
        $category = Package_Category::get();
        $amenitie = PackageAmenitie::get();
        //dd($amenitie);
        return view('admin.package_product_add',compact('category','amenitie'));
    }

    public function store(Request $request){
    //    $a = $request->id;
    //    dd($a);
        //dd($request->all());
        
        $aminitie = $request->input('aminite_id');
        $aminitie = implode(',', $aminitie);
    
        $obj = new PackageProduct();
        $request->validate([
            'image' => 'image|mimes:jpg,svg,jpeg,png,gif,webp',
            'banner' => 'image|mimes:jpg,svg,jpeg,png,gif,webp'
        ]);

        $ext = $request->file('image')->extension();
        $final_name = time().'.'.$ext;
        $request->file('image')->move(public_path('uploads/'),$final_name);

        $ext1 = $request->file('banner')->extension();
        $final_name1 = time().'.'.rand().'.'.$ext1; 
        $request->file('banner')->move(public_path('uploads/'),$final_name1);

        $obj->image = $final_name;
        $obj->package_name = $request->package_name;
        $obj->sort_description = $request->sort_description;
        $obj->description = $request->description;
        $obj->highlight = $request->highlight;
        $obj->package_destination = $request->package_destination;
        $obj->package_day = $request->package_day;
        $obj->package_no_of_person = $request->package_no_of_person;
        $obj->category_id = $request->category_id;
        $obj->package_amenitie = $aminitie;
        $obj->near_by_location = $request->near_by_location;
        $obj->package_price = $request->package_price;
        $obj->selling_price = $request->selling_price;
        $obj->customize_day_price = $request->customize_day_price;
        $obj->customize_person_price = $request->customize_person_price;
        $obj->address1 = $request->bannerheading1;
        $obj->address2 = $request->bannerheading1;
        $obj->city = $request->city;
        $obj->country = $request->country;
        $obj->state = $final_name1;
        $obj->zip = $request->zip;
        $obj->status = $request->status;
        $obj->save();

        // $ext = $request->file('image')->extension();
        // $final_name = time().'.'.$ext;
        // $request->file('image')->move(public_path('uploads/'),$final_name);

        if($request->hasFile('photos')){
            $files = $request->file("photos");
            foreach($files as $file){
                $ext = $file->extension();
                $imageName = rand().'.'.$ext;
               $id =  $request['package_id']=$obj->id;
              $name =   $request['photos']=$imageName;
                $file->move(\public_path('images/'),$imageName);   
                Image::create([
                    'package_id' => $id,
                    'photos' => $name
                ]);  
            }
            
        }
        return redirect()->back()->with('success', 'Package Product is added successfully.');
    }

    public function edit($id)
    {   
        $aminitie = PackageAmenitie::get();
        $category = Package_Category::get();
        $package_product_data = PackageProduct::where('id',$id)->first();
        $image = Image::where("package_id",$package_product_data->id)->get();
        //dd($package_product_data);
        return view('admin.package_product_edit', compact('package_product_data','category','aminitie','image'));
    }

    public function update(Request $request,$id) 
    {
        $obj = PackageProduct::where('id',$id)->first();
        
        
        if($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpg,svg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->image));
            $ext = $request->file('image')->extension();
            $final_name = time().'.'.$ext;
            $request->file('image')->move(public_path('uploads/'),$final_name);
            $obj->image = $final_name;
        }

        if($request->hasFile('banner')){
            $request->validate([
                'banner' => 'image|mimes:jpg,svg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/'.$obj->state));
            $ext1 = $request->file('banner')->extension();
            $final_name1 = time().'.'.rand().'.'.$ext1;
            $request->file('banner')->move(public_path('uploads/'),$final_name1);
            $obj->state = $final_name1;
        }

        $aminitie = $request->input('aminite_id');
        $aminitie = implode(',', $aminitie);

        $obj->package_name = $request->package_name;
        $obj->sort_description = $request->sort_description; 
        $obj->description = $request->description;
        $obj->highlight = $request->highlight;
        $obj->package_destination = $request->package_destination;
        $obj->package_day = $request->package_day;
        $obj->package_no_of_person = $request->package_no_of_person;
        $obj->category_id = $request->category_id;
        $obj->package_amenitie = $aminitie;
        $obj->near_by_location = $request->near_by_location;
        $obj->package_price = $request->package_price;
        $obj->selling_price = $request->selling_price;
        $obj->customize_day_price = $request->customize_day_price;
        $obj->customize_person_price = $request->customize_person_price;
        $obj->address1 = $request->bannerheading1;
        $obj->address2 = $request->bannerheading2;
        $obj->city = $request->city;
        $obj->country = $request->country;
        //$obj->state = $request->banner;
        $obj->zip = $request->zip;
        $obj->status = $request->status;
        $obj->update();

        if($request->hasFile('photos')){
            $images = Image::where("package_id",$obj->id)->get();

            foreach($images as $image){
                if(File::exists("images/".$image->photos)){
                    File::delete("images/".$image->photos);
                }
            }

            Image::where('package_id',$obj->id)->delete(); 

            $files = $request->file('photos');
            foreach($files as $file){
                $ext = $file->extension();
                $imageName = rand().'.'.$ext;
               $id =  $request['package_id']=$obj->id;
              $name =   $request['photos']=$imageName;
                $file->move(\public_path('images/'),$imageName);   
                Image::create([
                    'package_id' => $id,
                    'photos' => $name
                ]);  
            }
        }

        
        return redirect()->back()->with('success', 'Package Product is updated successfully.');

    }


    public function delete($id)
    {
        $single_data = PackageProduct::where('id',$id)->first();
       // unlink(public_path('uploads/'.$single_data->image));
       $images = Image::where("package_id",$single_data->id)->get();
       //dd($images);
        if(File::exists('uploads/'.$single_data->image)){
            File::delete('uploads/'.$single_data->image);
        }
    
        foreach($images as $image){
            if(File::exists("images/".$image->photos)){
                File::delete("images/".$image->photos);
            }
        }
        $single_data->delete();
        Image::where('package_id',$single_data->id)->delete();  
        return redirect()->back()->with('success', 'Package Product is deleted successfully.');
    }




}