@extends('admin.layout.app')

@section('heading', 'Edit Diwali')

@section('right_top_button')
<a href="{{ route('diwali_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('diwali_update',$diwali_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Title *</label>
                                    <input type="text" class="form-control" name="title" value="{{ $diwali_data->title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description *</label>
                                    <input type="text" class="form-control" name="description" value="{{ $diwali_data->description }}">
                                </div>
                               
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$diwali_data->photo) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Image 1*</label>
                                    <input type="file" class="form-control" name="photo" >
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$diwali_data->photo1) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Image 2*</label>
                                    <input type="file" class="form-control" name="photo1" >
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