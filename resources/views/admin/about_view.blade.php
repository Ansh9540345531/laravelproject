@extends('admin.layout.app')

@section('heading', 'View About')

@section('right_top_button')
<a href="{{ route('about_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Heading</th>
                                    <th>Description</th>
                                    <th>Photo 1</th>
                                    <th>Photo 2</th>
                                    <th>Button Name</th>
                                    <th>Button Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($about as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $row->title }}
                                    </td>
                                    <td>
                                        {{ $row->heading }}
                                    </td>
                                    <td>
                                        {{ $row->description }}
                                    </td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->photo1) }}" class="w_200" />
                                    </td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->photo2) }}" class="w_200" />
                                    </td>
                                    <td>
                                        {{ $row->button_name }}
                                    </td>
                                    <td>
                                        {{ $row->button_url }}
                                    </td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{route('about_edit',$row->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('about_delete',$row->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection