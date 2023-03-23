@extends('front.layout.app')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner hello">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('uploads/'.$janamastmi_data->photo)}}" alt="Image" />
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px">

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('uploads/'.$janamastmi_data->photo1)}}" alt="Image" />

                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="./img/events/dil.jpg" alt="Image" />

            </div>
            <div class="container pt-5 pb-3">
                <div class="text-center mb-3 pb-3">

                    <h2 class="text-primary text-uppercase" style="letter-spacing: 5px">
                        {!! $janamastmi_data->title !!}
                    </h2>
                    <p>{!! $janamastmi_data->description !!}</p>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
    </div>
    </div>
    <!-- Carousel End -->
    @endsection