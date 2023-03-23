@extends('admin.layout.app')

@section('heading', 'Add Holi')

@section('right_top_button')
<a href="{{ route('holi_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('holi_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description *</label>
                                    <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label"> Image 1*</label>
                                    <input type="file" class="form-control" name="photo" value="{{ old('photo') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Image 2*</label>
                                    <input type="file" class="form-control" name="photo1" value="{{ old('photo1') }}">
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