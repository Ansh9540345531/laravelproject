@extends('admin.layout.app')

@section('heading', 'View Hotelier')

@section('right_top_button')
<a href="{{ route('admin_addhotelier_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($addhotelier as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $row->name }}
                                    </td>
                                    <td>
                                        {{ $row->email }}
                                    </td>
                                    <td>
                                        {{ $row->password }}
                                    </td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->photo) }}" class="w_200" />
                                    </td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{route('admin_addhotelier_edit',$row->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('admin_addhotelier_delete',$row->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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