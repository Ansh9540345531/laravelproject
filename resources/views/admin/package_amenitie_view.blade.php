@extends('admin.layout.app')

@section('heading', 'View Package Amenitie')

@section('right_top_button')
<a href="{{ route('amenitie_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
                                    <th>Aminite Name</th>
                                    <th>Aminite Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $row->aminite_name }}
                                    </td>
                                    
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->aminite_image) }}" class="w_200" />
                                    </td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{route('amenitie_edit',$row->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('amenitie_delete',$row->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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