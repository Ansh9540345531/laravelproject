@extends('admin.layout.app')

@section('heading', 'Edit Hotel Amenities')

@section('right_top_button')
<a href="{{ route('adminamenities_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('adminamenities_update',$amenitie_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Amenitie Name *</label>
                                    <input type="text" class="form-control" name="hotel_amenity_name" value="{{ $amenitie_data->hotel_amenity_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Amenitie Categories *</label>
                                    <select name="amenitie_catagories" class="form-control">
                                    <option value="{{ $amenitie_data->amenitie_catagories }}">General</option>
                                    <option value="{{ $amenitie_data->amenitie_catagories }}">Media & Technology</option>
                                    <option value="{{ $amenitie_data->amenitie_catagories }}">Food & Drink</option>
                                    <option value="{{ $amenitie_data->amenitie_catagories }}">Front Desk Services</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$amenitie_data->hotel_amenity_image) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Amenitie Image *</label>
                                    <input type="file" class="form-control" name="hotel_amenity_image" >
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Amenitie Icon *</label>
                                    <input type="text" class="form-control" name="hotel_amenity_icons" >
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
@endsection