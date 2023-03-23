@extends('admin.layout.app')

@section('heading', 'Edit Hotelier')

@section('right_top_button')
<a href="{{ route('admin_addhotelier_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin_addhotelier_update',$addhotelier_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label"> Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $addhotelier_data->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Email *</label>
                                    <input type="text" class="form-control" name="email" value="{{ $addhotelier_data->email }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Password *</label>
                                    <input type="text" class="form-control" name="password" value="{{ $addhotelier_data->password }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$addhotelier_data->photo) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Photo *</label>
                                    <input type="file" class="form-control" name="photo" >
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