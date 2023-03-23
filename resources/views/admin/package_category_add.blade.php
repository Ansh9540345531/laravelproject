@extends('admin.layout.app')

@section('heading', 'Add Package Category')

@section('right_top_button')
<a href="{{ route('package_category_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('package_category_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Category Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label"> Image *</label>
                                    <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Image Link *</label>
                                    <input type="text" class="form-control" name="image_link" value="{{ old('image_link') }}">
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