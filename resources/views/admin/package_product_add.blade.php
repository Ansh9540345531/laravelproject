<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

@extends('admin.layout.app')

@section('heading', 'Add Package Product')

@section('right_top_button')
<a href="{{ route('package_product_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('package_product_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="mb-4">
                                    <label class="form-label">Package Name *</label>
                                    <input type="text" class="form-control" name="package_name" value="{{ old('package_name') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Sort Description</label>
                                    <textarea name="sort_description" class="ckeditor form-control" cols="30" rows="10">{{ old('sort_description') }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="ckeditor form-control" cols="30" rows="10">{{ old('description') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Highlight</label>
                                    <textarea name="highlight" class="ckeditor form-control" cols="30" rows="10">{{ old('highlight') }}</textarea>
                                </div>  
                                
                                <div class="mb-4">
                                    <label class="form-label"> Image *</label>
                                    <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Gallary Photos *</label>
                                    <input type="file" class="form-control" name="photos[]" value="{{ old('photos') }}" multiple />
                                </div>

                                <div class="mb-4">
                                    <label class="form-label"> Package Destination *</label>
                                    <select name="package_destination" class="form-control">
                                        <option value="0">Domestic</option>
                                        <option value="1">International</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Package No of Days</label>
                                    <input type="text" class="form-control" name="package_day" value="{{ old('package_day') }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Package No of Persons</label>
                                    <input type="text" class="form-control" name="package_no_of_person" value="{{ old('package_no_of_person') }}">
                                </div>

                               
                                <div class="mb-4">
                                    <label class="form-label">Packages Categories</label>
                                    <select name="category_id" class="form-control">
                                    <option value="">   -----  Select Packages Categories  ----- </option>
                                    @foreach($category as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    </select>
                                </div>      
                                
                                <div class="mb-4">
                                    <label class="form-label">Packages Amenities</label>
                                    <select name="aminite_id[]" id="choices-multiple-remove-button" placeholder="Select Amenities" multiple>
                                    @foreach($amenitie as $item)
                                        <option value="{{$item->id}}">{{$item->aminite_name}}  </option>
                                    @endforeach
                                    </select>                                    
                                </div>  

                                <div class="mb-4">
                                    <label class="form-label">Nearest Location</label>
                                    <input type="text" class="form-control" name="near_by_location" value="{{ old('near_by_location') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Package Price</label>
                                    <input type="text" class="form-control" name="package_price" value="{{ old('package_price') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Selling Price</label>
                                    <input type="text" class="form-control" name="selling_price" value="{{ old('selling_price') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Customize Person Price </label>
                                    <input type="text" class="form-control" name="customize_person_price" value="{{ old('customize_person_price') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Customize Day Price</label>
                                    <input type="text" class="form-control" name="customize_day_price" value="{{ old('customize_day_price') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Banner Heading 1 </label>
                                    <textarea name="bannerheading1" class="ckeditor form-control" cols="30" rows="10">{{ old('bannerheading1') }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Banner Heading 2</label>
                                    <textarea name="bannerheading2" class="ckeditor form-control" cols="30" rows="10">{{ old('bannerheading2') }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control" name="country" value="{{ old('country') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Banner Image</label>
                                    <input type="file" class="form-control" name="banner" >
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Zip</label>
                                    <input type="text" class="form-control" name="zip" value="{{ old('zip') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Status </label>
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Hide</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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