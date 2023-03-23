@extends('admin.layout.app')

@section('heading', 'Edit Holi')

@section('right_top_button')
<a href="{{ route('holi_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('holi_update',$holi_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Title *</label>
                                    <input type="text" class="form-control" name="title" value="{{ $holi_data->title }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description *</label>
                                    <input type="text" class="form-control" name="description" value="{{ $holi_data->description }}">
                                </div>
                               
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$holi_data->photo) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Image 1*</label>
                                    <input type="file" class="form-control" name="photo" >
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$holi_data->photo1) }}" alt="" class="w_200">
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