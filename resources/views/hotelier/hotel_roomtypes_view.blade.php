@extends('hotelier.layout.app')

@section('heading', 'View Hotel Room Types')

@section('right_top_button')
<a href="{{ route('roomtypes_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
                                    <th>Room Photo</th>
                                    <th>Room Types</th>
                                    <th>Guest</th>
                                    <th>Today Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->room_photo) }}" class="w_200" />
                                    </td>
                                    <td>
                                        {{ $row->room_name }}
                                    </td>
                                    <td>
                                        {{ $row->guest }}
                                    </td>
                                    <td>
                                        {{ $row->today_price }}
                                    </td>
            
                                    <td class="pt_10 pb_10">
                                        <a href="{{route('roomtypes_edit',$row->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('roomtypes_delete',$row->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
