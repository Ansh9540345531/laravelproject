@extends('admin.layout.app')

@section('heading', 'Resort Listing')

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
                                    <th>Phone</th>
                                    <th>Person</th>
                                    <th>Checkin Date</th>
                                    <th>Checkout Date</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($resort as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->mobile}}</td>
                                    <td>{{$row->person}}</td>
                                    <td>{{$row->checkin_date}}</td>
                                    <td>{{$row->checkout_date}}</td>
                                    <td>{{$row->message}}</td>
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