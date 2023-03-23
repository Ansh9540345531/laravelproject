@extends('admin.layout.app')

@section('heading', 'Edit Visa Page')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('visa_update') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Page Name *</label>
                                    <input type="text" class="form-control" name="page_name" value="{{ $data->page_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Sort Description </label>
                                    <textarea name="sort_description" class="form-control snote" cols="30" rows="10">{{ $data->sort_description }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description </label>
                                    <textarea name="description" class="ckeditor form-control" cols="30" rows="10">{{ $data->description }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Status *</label>
                                    <select name="status" class="form-control">
                                        <option value="1" @if($data->status == 1) selected @endif>Show</option>
                                        <option value="0" @if($data->status == 0) selected @endif>Hide</option>
                                    </select>
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

<script src="//cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@endsection