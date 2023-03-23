@extends('admin.layout.app')

@section('heading', 'Add Package Aminitie')

@section('right_top_button')
<a href="{{ route('amenitie_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('amenitie_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Amenitie Name *</label>
                                    <input type="text" class="form-control" name="aminite_name" value="{{ old('aminite_name') }}">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label">Amenitie Image *</label>
                                    <input type="file" class="form-control" name="aminite_image" value="{{ old('aminite_image') }}">
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