@extends('admin.layout.app')

@section('heading', 'View Janamastmi')

@section('right_top_button')
<a href="{{ route('janamastmi_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
                                    <th>Description</th>
                                    <th>Image 1</th>
                                    <th>Image 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $row->title }}
                                    </td>
                                    <td>
                                        {{ $row->description }}
                                    </td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->photo) }}" class="w_200" />
                                    </td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->photo1) }}" class="w_200" />
                                    </td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{route('janamastmi_edit',$row->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('janamastmi_delete',$row->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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