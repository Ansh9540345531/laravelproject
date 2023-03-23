@extends('admin.layout.app')

@section('heading', 'View Helicopter')


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
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Adult</th>
                                    <th>Children</th>
                                    <th>Message</th>
                                    <th>Checkbox</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($helicopter as $row)
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
                                        {{ $row->from }}
                                    </td>
                                    <td>
                                        {{ $row->to }}
                                    </td>
                                    <td>
                                        {{ $row->date }}
                                    </td>
                                    <td>
                                        {{ $row->time }}
                                    </td>
                                    <td>
                                        {{ $row->adult }}
                                    </td>
                                    <td>
                                        {{ $row->children }}
                                    </td>
                                    <td>
                                        {{ $row->message }}
                                    </td>
                                    <td>
                                        {{ $row->checkbox }}
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