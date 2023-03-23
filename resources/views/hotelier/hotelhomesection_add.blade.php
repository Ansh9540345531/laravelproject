<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
@extends('hotelier.layout.app')

@section('heading', 'Add Hotel')

@section('right_top_button')
<a href="{{ route('hotelhomesection_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('hotelhomesection_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label"> Photo *</label>
                                    <input type="file" class="form-control" name="photo" value="{{ old('photo') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Room Image *</label>
                                    <input type="file" class="form-control" name="images[]" value="{{ old('images') }}" multiple>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Room Image Type *</label>
                                    <input type="file" class="form-control" name="image_types[]" value="{{ old('image_types') }}" multiple>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Hotel Name *</label>
                                    <input type="text" class="form-control" name="hotel_name" value="{{ old('hotel_name') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description *</label>
                                    <textarea name="description" class="form-control snote h_100" cols="30" rows="10">{{ old('description') }}</textarea>
                                   
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Hotel Room Types</label>
                                    <select name="roomtypes_id[]" id="choices-multiple-remove-button" placeholder="Select Room Types" multiple>
                                    @foreach($roomtypes as $item)
                                        <option value="{{$item->id}}">{{$item->room_name}}  </option>
                                    @endforeach
                                    </select>                                    
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Hotel Location *</label>
                                    <input type="text" class="form-control" name="hotel_location" value="{{ old('hotel_location') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Hotel Categories *</label>
                                    <select name="hotel_catagories" class="form-control">
                                    <option>International</option>
                                    <option>Domestic</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Hotel Amenities</label>
                                    <select name="aminite_id[]" id="choices-multiple-remove-button" placeholder="Select Amenities" multiple>
                                    @foreach($amenitie as $item)
                                        <option value="{{$item->id}}">{{$item->hotel_amenity_name}}  </option>
                                    @endforeach
                                    </select>                                    
                                </div> 
                                
                                <div class="mb-4">
                                    <label class="form-label">Button Text  *</label>
                                    <input type="text" class="form-control" name="button_text" value="{{ old('button_text') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Button Link *</label>
                                    <input type="text" class="form-control" name="button_url" value="{{ old('button_url') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Featured *</label>
                                    <input type="checkbox" name="featured" value="1">
                                    <span>(Show this on hotel offers landing page)</span>
                                    
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
@endsection