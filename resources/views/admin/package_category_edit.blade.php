@extends('admin.layout.app')

@section('heading', 'Edit Package Category')

@section('right_top_button')
<a href="{{ route('package_category_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('package_category_update',$package_category_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Category Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $package_category_data->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$package_category_data->image) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Image *</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Image Link *</label>
                                    <input type="text" class="form-control" name="image_link" value="{{ $package_category_data->image_link }}">
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