@extends('admin.layout.app')

@section('heading', 'Edit Tab Section')

@section('right_top_button')
<a href="{{ route('tab_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('tab_update',$tab_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label"> Name *</label>
                                    <input type="text" class="form-control" name="tab_name" value="{{ $tab_data->tab_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Url *</label>
                                    <input type="text" class="form-control" name="tab_link" value="{{ $tab_data->tab_link }}">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$tab_data->tab_image) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Image *</label>
                                    <input type="file" class="form-control" name="tab_image" >
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