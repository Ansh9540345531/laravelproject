@extends('admin.layout.app')

@section('heading', 'Edit Package Amenitie')

@section('right_top_button')
<a href="{{ route('amenitie_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('amenitie_update',$amenitie_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Amenitie Name *</label>
                                    <input type="text" class="form-control" name="aminite_name" value="{{ $amenitie_data->aminite_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$amenitie_data->aminite_image) }}" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Amenitie Image *</label>
                                    <input type="file" class="form-control" name="aminite_image" >
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