@extends('admin.layout.app')

@section('heading', 'View Self Drive')


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
                                    <th>Number</th>
                                    <th>From</th>
                                    <th>To</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($selfdrive as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $row->name }}
                                    </td>
                                    <td>
                                        {{ $row->email }}
                                    </td>
                                    <td>
                                        {{ $row->number }}
                                    </td>
                                    <td>
                                        {{ $row->from }}
                                    </td>
                                    <td>
                                        {{ $row->to }}
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