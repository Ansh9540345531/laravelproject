@extends('hotelier.layout.app')

@section('heading', 'View Hotel Amenities')

@section('right_top_button')
<a href="{{ route('amenities_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
                                    <th>Aminitie Categories</th>
                                    <th>Aminitie Image</th>
                                    <th>Aminitie Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $row->hotel_amenity_name }}
                                    </td>
                                    <td>
                                        {{ $row->amenitie_catagories }}
                                    </td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->hotel_amenity_image) }}" class="w_200" />
                                    </td>
                                    <td>
                                    {{ $row->hotel_amenity_icons }}
                                    </td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{route('amenities_edit',$row->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('amenities_delete',$row->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
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