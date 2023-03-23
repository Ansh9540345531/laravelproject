@extends('admin.layout.app')

@section('heading', 'Add Destination')

@section('right_top_button')
<a href="{{ route('home_destination_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('home_destination_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label"> Destination Name *</label>
                                    <input type="text" class="form-control" name="destination_name" value="{{ old('destination_name') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Destination Cities *</label>
                                    <input type="text" class="form-control" name="destination_cities" value="{{ old('destination_cities') }}">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label">Destination Image</label>
                                    <input type="file" class="form-control" name="destination_image" value="{{ old('destination_image') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Destination url</label>
                                    <input type="text" class="form-control" name="destination_url" value="{{ old('destination_url') }}">
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