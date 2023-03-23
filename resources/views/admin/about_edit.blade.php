@extends('admin.layout.app')

@section('heading', 'Edit About')

@section('right_top_button')
<a href="{{ route('about_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('aboutupdatedata',$about_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label"> Title *</label>
                                    <input type="text" class="form-control" name="title" value="{{ $about_data->title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Heading *</label>
                                    <input type="text" class="form-control" name="heading" value="{{ $about_data->heading }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Description *</label>
                                    <input type="text" class="form-control" name="description" value="{{ $about_data->description }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo 1</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$about_data->photo1) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Image 1 *</label>
                                    <input type="file" class="form-control" name="photo1" >
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Existing Photo 2</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$about_data->photo2) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Image 2 *</label>
                                    <input type="file" class="form-control" name="photo2" >
                                </div>

                                <div class="mb-4">
                                    <label class="form-label"> Button Name *</label>
                                    <input type="text" class="form-control" name="button_name" value="{{ $about_data->button_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Button Link *</label>
                                    <input type="text" class="form-control" name="button_url" value="{{ $about_data->button_url }}">
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