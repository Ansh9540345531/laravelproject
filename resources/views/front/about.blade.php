@extends('front.layout.app')

@section('content')

<div class="container-fluid bg-aboutservicesbanner p-0 mb-5" style="background-image:url({{asset('/dis/img/events/About-Us-Banner22.jpg')}}); background-repeat:no-repeat center center; background-size: cover;">
      <div class="aboutus_overlay">
        <div class="container py-5">
          <div class="row align-items-center"></div>
        </div>
      </div>
    </div>

    
<div class="container">
    {!! html_entity_decode($data->description) !!}

</div>


@endsection