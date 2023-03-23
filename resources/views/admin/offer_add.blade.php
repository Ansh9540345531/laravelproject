@extends('admin.layout.app')

@section('heading', 'Add Mega Offer')

@section('right_top_button')
<a href="{{ route('mega_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('mega_store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Title </label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Offers </label>
                                    <input type="text" class="form-control" name="offer" value="{{ old('offer') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Heading </label>
                                    <input type="text" class="form-control" name="heading" value="{{ old('heading') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description </label>
                                    <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">First 1 </label>
                                    <input type="text" class="form-control" name="list1" value="{{ old('list1') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">First 2 </label>
                                    <input type="text" class="form-control" name="list2" value="{{ old('list2') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">First 3 </label>
                                    <input type="text" class="form-control" name="list3" value="{{ old('list3') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Button Name </label>
                                    <input type="text" class="form-control" name="button_name" value="{{ old('button_name') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Button Link </label>
                                    <input type="text" class="form-control" name="button_link" value="{{ old('button_link') }}">
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