@extends('admin.layout.app')

@section('heading', 'Edit Cab')

@section('right_top_button')
<a href="{{ route('home_destination_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('home_destination_update',$destination_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Destination Name</label>
                                    <input type="text" class="form-control" name="destination_name" value="{{ $destination_data->destination_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Destination Cities</label>
                                    <input type="text" class="form-control" name="destination_cities" value="{{ $destination_data->destination_cities }}">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$destination_data->destination_image) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Destination Image *</label>
                                    <input type="file" class="form-control" name="destination_image" >
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Destination Link *</label>
                                    <input type="text" class="form-control" name="destination_url" value="{{ $destination_data->destination_url }}">
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