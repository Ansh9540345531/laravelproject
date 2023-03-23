
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
@extends('admin.layout.app')
@section('heading', 'Edit Hotel')

@section('right_top_button')
<a href="{{ route('hotel_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('hotel_update',$hotel_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                            <div class="mb-4">
                                    <label class="form-label"> Photo *</label>
                                    <input type="file" class="form-control" name="photo" >
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$hotel_data->photo) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Hotel Name *</label>
                                    <input type="text" class="form-control" name="hotel_name" value="{{ $hotel_data->hotel_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Description *</label>
                                    <textarea name="description" class="form-control snote h_100" cols="30" rows="10">{{ $hotel_data->description }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Hotel Room Types</label>
                                    <select name="roomtypes_id[]" id="choices-multiple-remove-button" placeholder="Select Room Types" multiple>
                                    @foreach($roomtypes as $item)
                                        <option value="{{$item->id}}" >{{$item->room_name}}  </option>
                                    @endforeach
                                    </select>                                    
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Hotel Location *</label>
                                    <input type="text" class="form-control" name="hotel_location" value="{{ $hotel_data->hotel_location }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Hotel Categories *</label>
                                    <select name="hotel_catagories" class="form-control">
                                    <option value="{{ $hotel_data->hotel_catagories }}">International</option>
                                    <option value="{{ $hotel_data->hotel_catagories }}">Domestic</option>
                                    </select>
                                </div>
                                <?php 
                                    $selected = explode(",", $hotel_data->hotel_amenities);
                                    //dd($selected);
                                ?>
                                <div class="mb-4">
                                    <label class="form-label">Hotel Amenities</label>
                                    <select name="aminite_id[]" id="choices-multiple-remove-button" placeholder="Select Amenities" multiple>
                                    @foreach($aminitie as $item)
                                        <option value="{{$item->id}}" {{ (in_array($item->id, $selected)) ? 'selected' : '' }}>{{$item->hotel_amenity_name}}  </option>
                                    @endforeach
                                    </select>                                    
                                </div>  

                                <div class="mb-4">
                                    <label class="form-label">Existing Photos</label>
                                    @foreach($image as $img)
                                    <div>
                                        <img src="{{ asset('images/'.$img->image) }}" alt="" class="w_200 mt-1">
                                    </div>
                                    @endforeach
                                </div>

                                <div class="mb-4">
                                    <label class="form-label"> Change Room Image *</label>
                                    <input type="file" class="form-control" name="images[]" value="{{ old('images') }}" multiple>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Button Text *</label>
                                    <input type="text" class="form-control" name="button_text" value="{{ $hotel_data->button_text }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Button Link *</label>
                                    <input type="text" class="form-control" name="button_url" value="{{ $hotel_data->button_url }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Featured *</label>
                                    <input type="checkbox" name="featured" value="1" @checked("featured" || old("featured", 0) === 1)>
                                    <span>(Show this on hotel offers landing page)</span>
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
@endsection