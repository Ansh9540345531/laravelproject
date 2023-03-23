@extends('admin.layout.app')

@section('heading', 'Add Hotel Amenities')

@section('right_top_button')
<a href="{{ route('adminamenities_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('adminamenities_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Amenitie Name *</label>
                                    <input type="text" class="form-control" name="hotel_amenity_name" value="{{ old('hotel_amenity_name') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Hotel Categories *</label>
                                    <select name="amenitie_catagories" class="form-control">
                                    <option>General</option>
                                    <option>Media & Technology</option>
                                    <option>Food & Drink</option>
                                    <option>Front Desk Services</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Amenitie Image *</label>
                                    <input type="file" class="form-control" name="hotel_amenity_image" value="{{ old('hotel_amenity_image') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Amenitie Icon *</label>
                                    <input type="text" class="form-control" name="hotel_amenity_icons" value="{{ old('hotel_amenity_icons') }}">
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
@endsection