@extends('admin.layout.app')

@section('heading', 'Edit Festival')

@section('right_top_button')
<a href="{{ route('festival_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection
@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('festival_update',$festival_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label"> First Festival Name *</label>
                                    <input type="text" class="form-control" name="first_festival_name" value="{{ $festival_data->first_festival_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">First Festival Offer *</label>
                                    <input type="text" class="form-control" name="first_festival_url" value="{{ $festival_data->first_festival_url }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Existing First  Image</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$festival_data->photo1) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">First Festival  Image *</label>
                                    <input type="file" class="form-control" name="photo1" >
                                </div>


                                <div class="mb-4">
                                    <label class="form-label"> Second Festival Name *</label>
                                    <input type="text" class="form-control" name="second_festival_name" value="{{ $festival_data->second_festival_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Second Festival Offer *</label>
                                    <input type="text" class="form-control" name="second_festival_url" value="{{ $festival_data->second_festival_url }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Existing Second  Image</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$festival_data->photo2) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Second Festival  Image *</label>
                                    <input type="file" class="form-control" name="photo2" >
                                </div>


                                <div class="mb-4">
                                    <label class="form-label"> Third Festival Name *</label>
                                    <input type="text" class="form-control" name="third_festival_name" value="{{ $festival_data->third_festival_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Third Festival Offer *</label>
                                    <input type="text" class="form-control" name="third_festival_url" value="{{ $festival_data->third_festival_url }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Existing Third  Image</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$festival_data->photo3) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Third Festival  Image *</label>
                                    <input type="file" class="form-control" name="photo3" >
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