@extends('hotelier.layout.app')

@section('heading', 'View Hotel')

@section('right_top_button')
<a href="{{ route('hotelhomesection_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
                                    <th>Photo</th>
                                    <th>Hotel Name</th>
                                    <th>Hotel Categories</th>
                                    <th>Featured</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($hotelhomesection as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                    <img src="{{ asset('uploads/'.$row->photo) }}" class="w_200" />
                                    </td>
                                    <td>
                                        {{ $row->hotel_name }}
                                    </td>
                                    <td>
                                        {{ $row->hotel_catagories }}
                                    </td>
                                    <td>
                                        {{ $row->featured }}
                                    </td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{route('hotelhomesection_edit',$row->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('hotelhomesection_delete',$row->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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