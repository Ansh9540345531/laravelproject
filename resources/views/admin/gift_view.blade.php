@extends('admin.layout.app')

@section('heading', 'View Gift')


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
                                    <th>Number</th>
                                    <th>Email</th>
                                    <th>Quantity</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($gift as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $row->name }}
                                    </td>
                                    <td>
                                        {{ $row->number }}
                                    </td>
                                    <td>
                                        {{ $row->email }}
                                    </td>
                                    <td>
                                        {{ $row->quantity }}
                                    </td>
                                    <td>
                                        {{ $row->message }}
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