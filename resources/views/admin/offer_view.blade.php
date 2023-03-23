@extends('admin.layout.app')

@section('heading', 'View Mega Offer')

@section('right_top_button')
<a href="{{ route('mega_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
                                    <th>Title</th>
                                    <th>Offer</th>
                                    <th>Heading</th>
                                    <th>Description</th>
                                    <th>List 1</th>
                                    <th>List 2</th>
                                    <th>List 3</th>
                                    <th>Button Name</th>
                                    <th>Button Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mega as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $row->title }}
                                    </td>
                                    <td>
                                        {{ $row->offer }}
                                    </td>
                                    <td>
                                        {{ $row->heading }}
                                    </td>
                                    <td>
                                        {{ $row->description }}
                                    </td>
                                    <td>
                                        {{ $row->list1 }}
                                    </td>
                                    <td>
                                        {{ $row->list2 }}
                                    </td>
                                    <td>
                                        {{ $row->list3 }}
                                    </td>
                                    <td>
                                        {{ $row->button_name }}
                                    </td>
                                    <td>
                                        {{ $row->button_link }}
                                    </td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('mega_edit',$row->id) }}" class="btn btn-primary">Edit</a>
                                        <!-- <a href="{{ route('mega_delete',$row->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a> -->
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