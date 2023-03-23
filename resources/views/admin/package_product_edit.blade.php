<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
@extends('admin.layout.app')

@section('heading', 'Edit Package Product')

@section('right_top_button')
<a href="{{ route('package_product_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('package_product_update',$package_product_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                            <div class="mb-4">
                                    <label class="form-label">Package Name *</label>
                                    <input type="text" class="form-control" name="package_name" value="{{ $package_product_data->package_name }}">
                            </div>
                            <div class="mb-4">
                                    <label class="form-label">Sort Description</label>
                                    <textarea name="sort_description" class="ckeditor form-control" cols="30" rows="10">{{ $package_product_data->sort_description }}</textarea>
                            </div>
                            <div class="mb-4">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="ckeditor form-control" cols="30" rows="10">{{ $package_product_data->description }}</textarea>
                            </div>

                            <div class="mb-4">
                                    <label class="form-label">Highlight</label>
                                    <textarea name="highlight" class="ckeditor form-control" cols="30" rows="10">{{ $package_product_data->highlight }}</textarea>
                                </div>  
                                
                                <div class="mb-4">
                                    <label class="form-label">Existing Images</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$package_product_data->image) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Change Image *</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Banner Images</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$package_product_data->state) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Change Banner Image *</label>
                                    <input type="file" class="form-control" name="banner" >
                                </div>


                                
                                <div class="mb-4">
                                    <label class="form-label">Existing Gallary Photos</label>
                                    @foreach($image as $img)
                                    <div>
                                        <img src="{{ asset('images/'.$img->photos) }}" alt="" class="w_200 mt-1">
                                    </div>
                                    @endforeach
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Change Gallary Photos *</label>
                                    <input type="file" class="form-control" name="photos[]" value="{{ old('photos') }}" multiple />
                                </div>

                                
                                <div class="mb-4">
                                    <label class="form-label"> Package Destination *</label>
                                    <select name="package_destination" class="form-control">
                                        <option value="0" {{ $package_product_data->package_destination == 0 ? 'selected' : '' }} >Domestic</option>
                                        <option value="1" {{ $package_product_data->package_destination == 1 ? 'selected' : '' }}>International</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Package No of Days</label>
                                    <input type="text" class="form-control" name="package_day" value="{{ $package_product_data->package_day }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Package No of Persons</label>
                                    <input type="text" class="form-control" name="package_no_of_person" value="{{ $package_product_data->package_no_of_person }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Packages Categories </label>
                                    <select name="category_id" class="form-control">
                                       
                                    @foreach($category as $item)
                                        <option value="{{$item->id}}" {{ $package_product_data->category_id == $item->id ? 'selected' : '' }} >{{$item->name}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <?php 
                                    $selected = explode(",", $package_product_data->package_amenitie);
                                    //dd($selected);
                                ?>
                                <div class="mb-4">
                                    <label class="form-label">Packages Amenities</label>
                                    <select name="aminite_id[]" id="choices-multiple-remove-button" placeholder="Select Amenities" multiple>
                                    @foreach($aminitie as $item)
                                        <option value="{{$item->id}}" {{ (in_array($item->id, $selected)) ? 'selected' : '' }}>{{$item->aminite_name}}  </option>
                                    @endforeach
                                    </select>                                    
                                </div>  
                                

                                <div class="mb-4">
                                    <label class="form-label">Nearest Location</label>
                                    <input type="text" class="form-control" name="near_by_location" value="{{ $package_product_data->near_by_location }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Package Price</label>
                                    <input type="text" class="form-control" name="package_price" value="{{ $package_product_data->package_price }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Selling Price</label>
                                    <input type="text" class="form-control" name="selling_price" value="{{ $package_product_data->selling_price }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Customize Person Price</label>
                                    <input type="text" class="form-control" name="customize_person_price" value="{{ $package_product_data->customize_person_price }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Customize Day Price</label>
                                    <input type="text" class="form-control" name="customize_day_price" value="{{ $package_product_data->customize_day_price }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Banner Heading 1</label>
                                    <textarea name="bannerheading1" class="ckeditor form-control" cols="30" rows="10">{{ $package_product_data->address1 }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Banner Heading 2</label>
                                    <textarea name="bannerheading2" class="ckeditor form-control" cols="30" rows="10">{{ $package_product_data->address2 }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" value="{{ $package_product_data->city }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control" name="country" value="{{ $package_product_data->country }}">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label">Zip</label>
                                    <input type="text" class="form-control" name="zip" value="{{ $package_product_data->zip }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Status </label>
                                    <select name="status" class="form-control">
                                        <option value="1" {{ $package_product_data->status == '1' ? 'selected' : '' }} >Active</option>
                                        <option value="0" {{ $package_product_data->status == '0' ? 'selected' : '' }} >Hide</option>
                                    </select>
                                </div>

                                
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
    
    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
       removeItemButton: true,
       maxItemCount:5,
       searchResultLimit:5,
       renderChoiceLimit:5
     }); 
    
    
});
</script>

<script src="//cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@endsection