@extends('admin.layout.app')

@section('heading', 'View Festival')

@section('right_top_button')
<a href="{{ route('festival_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
                                    <th>First Festival Image</th>
                                    <th>Second Festival Image</th>
                                    <th>Third Festival Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->photo1) }}" class="w_200" />
                                    </td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->photo2) }}" class="w_200" />
                                    </td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->photo3) }}" class="w_200" />
                                    </td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{route('festival_edit',$row->id)}}" class="btn btn-primary">Edit</a>
                                        <!-- <a href="{{route('festival_delete',$row->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a> -->
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