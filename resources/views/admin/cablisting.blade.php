@extends('admin.layout.app')

@section('heading', 'Cab Listing')

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
                                    <th>To</th>
                                    <th>From</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Person</th>
                                    <th>Pickup Date</th>
                                    <th>Time</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$row->to}}</td>
                                    <td>{{$row->from}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->mobile}}</td>
                                    <td>{{$row->person}}</td>
                                    <td>{{$row->pickup_date}}</td>
                                    <td>{{$row->time}}</td>
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