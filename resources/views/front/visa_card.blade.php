
@extends('front.layout.app')
@section('content')

<!-- banner start -->
<div class="container-fluid bg-visaservicesbanner p-0 mb-5" style="background-image:url({{asset('/dis/img/events/visabannerstrip.jpg')}}); background-repeat:no-repeat center center; background-size: cover;">
      <div class="visa_overlay">
        <div class="container py-5">
          <div class="row align-items-center">
            <div class="col-sm-9">
              <h3 class="text-primary text-uppercase">
                International Visa Services
              </h3>
              <h3 class="text-white text-uppercase">
                Exclusive offers for Bangladesh
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    

    <!-- body content start -->
   
    {!! html_entity_decode($data->description) !!}
    <!-- body content ends -->
@endsection