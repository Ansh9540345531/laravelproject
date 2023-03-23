@extends('hotelier.layout.app')

@section('heading', 'Edit Hotel Room Types')

@section('right_top_button')
<a href="{{ route('roomtypes_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('roomtypes_update',$roomtypes_data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                            <div class="mb-4">
                                    <label class="form-label">Room Photo *</label>
                                    <input type="file" class="form-control" name="room_photo" value="{{ $roomtypes_data->room_photo }}">
                                </div>
                            <div class="mb-4">
                                    <label class="form-label">Room Name *</label>
                                    <input type="text" class="form-control" name="room_name" value="{{ $roomtypes_data->room_name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Extra Facility *</label>
                                    <textarea name="extra_facility" class="form-control snote h_100" cols="30" rows="10">{{ $roomtypes_data->extra_facility }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Guest *</label>
                                    <input type="text" class="form-control" name="guest" value="{{ $roomtypes_data->guest }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Hotel Offer *</label>
                                    <textarea class="form-control snote h_100" name="hotel_offer" cols="30" rows="10">{{ $roomtypes_data->hotel_offer }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Extra Facility *</label>
                                    <input type="text" class="form-control" name="today_price" value="{{ $roomtypes_data->today_price }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection