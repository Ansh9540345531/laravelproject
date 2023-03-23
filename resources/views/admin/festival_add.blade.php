@extends('admin.layout.app')

@section('heading', 'Add Festival')

@section('right_top_button')
<a href="{{ route('festival_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('festival_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">First Festival Name </label>
                                    <input type="text" class="form-control" name="first_festival_name" value="{{ old('first_festival_name') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">First Festival Offer * </label>
                                    <input type="text" class="form-control" name="first_festival_url" value="{{ old('first_festival_url') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">First Festival Image </label>
                                    <input type="file" class="form-control" name="photo1" value="{{ old('photo1') }}">
                                </div>


                                <div class="mb-4">
                                    <label class="form-label">Second Festival Name </label>
                                    <input type="text" class="form-control" name="second_festival_name" value="{{ old('second_festival_name') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Second Festival Offer * </label>
                                    <input type="text" class="form-control" name="second_festival_url" value="{{ old('second_festival_url') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Second Festival Image </label>
                                    <input type="file" class="form-control" name="photo2" value="{{ old('photo2') }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Third Festival Name </label>
                                    <input type="text" class="form-control" name="third_festival_name" value="{{ old('third_festival_name') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Third Festival Offer * </label>
                                    <input type="text" class="form-control" name="third_festival_url" value="{{ old('third_festival_url') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Third Festival Image </label>
                                    <input type="file" class="form-control" name="photo3" value="{{ old('photo3') }}">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>3
        </div>
    </div>
</div>
@endsection