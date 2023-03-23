@extends('admin.layout.app')

@section('heading', 'Add Tab Section')

@section('right_top_button')
<a href="{{ route('tab_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('tab_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label"> Name *</label>
                                    <input type="text" class="form-control" name="tab_name" value="{{ old('tab_name') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"> Url *</label>
                                    <input type="text" class="form-control" name="tab_link" value="{{ old('tab_link') }}">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label"> Image *</label>
                                    <input type="file" class="form-control" name="tab_image" value="{{ old('tab_image') }}">
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