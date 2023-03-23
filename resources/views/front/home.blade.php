@extends('front.layout.app')

@section('content')

 <!-- Carousel Start -->
 <div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      @foreach($slide_all as $item)
        <div class="carousel-item  <?php if($item->id === 1){echo "active";}?> animateOut:fadeOut">
          <img class="w-100" src="{{asset('uploads/'.$item->photo)}}" alt="Image" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px;">
              <h4 class="text-white text-uppercase mb-md-3">
                {{$item->heading}}
              </h4>
              <h1 class="display-3 text-white mb-md-4">
              {{$item->text}}
              </h1>
              <div>
                <a href="#" class="btn btn-primary py-md-3 px-md-5 mt-2" >
                  {{$item->button_text}}
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
          <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
      </a>
      <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
          <span class="carousel-control-next-icon mb-n2"></span>
        </div>
      </a>
    </div>
  </div>
  <!-- tabs start -->

  <div class="container-fluid bg-dark">
    <div class="tab-menu">
    @foreach($tab_all as $item)
      <div class="item"><a href="{{$item->tab_link}}" class="text-decoration-none">
          <img src="{{asset('uploads/'.$item->tab_image)}}" class="changes_width" />
          <p class="tabs_dis mb-0">{{$item->tab_name}}</p>
        </a>
      </div>
    @endforeach
    </div>
  </div>
  <!-- 12 tabs close -->

  <!-- visa services tab's start-->

  <div class="container topicon_margine">
    <div class="icon_alignment">
      <div class="imageright_border">
        <a href="{{route('visacard')}}">
          <img src="{{asset('dis/img/two.png')}}" alt="" class="icon_styling icon_response">
        </a>
      </div>
      <div>
        <a href="{{route('visacard')}}">
          <img src="{{asset('dis/img/one.png')}}" alt="" class="icon_styling">
        </a>
      </div>
    </div>
  </div>
  <!-- visa services tab's ends -->


  <!-- Booking End -->

  <!-- Events and festivals -->
  @foreach($festival_all as $item)
  <section class="tg-sectionspace tg-haslayout events">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h6 class="text-primary" style="letter-spacing: 5px;">FESTIVALS</h6>
          <h1 class="mb-3">Events And Festivals</h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="tg-toursdestinations">
            <div class="tg-tourdestination tg-tourdestinationbigbox">
              <figure>
                <a href="{{route('package')}}" > 
                  <img src="{{asset('uploads/'.$item->photo1)}}" alt="image destinations" />
                  <div class="tg-hoverbox">
                    <div class="tg-adventuretitle">
                      <h2>{{$item->first_festival_name}}</h2>
                    </div>
                    <span>{{ $item->first_festival_url }}</span>
                  </div>
                </a>
              </figure>
            </div>
            <div class="tg-tourdestination">
              <figure>
                <a href="{{route('package')}}" > 
                  <img src="{{asset('uploads/'.$item->photo2)}}" alt="image destinations" />
                  <div class="tg-hoverbox">
                    <div class="tg-adventuretitle">
                      <h2 class="events_desc">{{$item->second_festival_name}}</h2>
                    </div>
                    <span>{{ $item->second_festival_url }}</span>
                  </div>
                </a>
              </figure>
            </div>
            <div class="tg-tourdestination">
              <figure>
                <a href="{{route('package')}}" > 
                  <img src="{{asset('uploads/'.$item->photo3)}}" alt="image destinations" />
                  <div class="tg-hoverbox">
                    <div class="tg-adventuretitle">
                      <h2>{{$item->third_festival_name}}</h2>
                    </div>
                    <span>{{ $item->third_festival_url }}</span>
                  </div>
                </a>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endforeach
  <!-- Events and festivals -->

  <!-- Destination Start -->
  <div class="container-fluid events">
    <div class="container">
      <div class="text-center mb-3 pb-3">
        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
          DESTINATIONS
        </h6>
        <h1>Explore the World</h1>
      </div>
      <div class="row">
      @foreach($home_destination_all as $item)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-item position-relative overflow-hidden mb-2">
            <img class="img-fluid" src="{{asset('uploads/'.$item->destination_image)}}" alt="" />
            <a class="destination-overlay text-white text-decoration-none" href="">
              <h5 class="text-white">{{$item->destination_name}}</h5>
              <span>{{$item->destination_cities}}</span>
            </a>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>
  <!-- Destination Start -->

  <!-- Registration Start -->
   <div class="container-fluid bg-registration py-5 mt-3" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))  ,url({{asset('/dis/img/banner/carousel-1.jpg')}});  background-repeat:no-repeat center center; background-size: cover; ">
    <div class="container py-5">
      @foreach($mega_all as $item)
      <div class="row align-items-center">
        <div class="col-lg-7 mb-5 mb-lg-0">
          <div class="mb-4">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
              {{$item->title}}
            </h6>
            <h1 class="text-white">
              <span class="text-primary">{{$item->offer}}</span>
              {{$item->heading}}
            </h1>
          </div>
          <p class="text-white">
          {{$item->description}}
          </p>
          <div>

            <ul class="list-inline text-white m-0">
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i>
                {{$item->list1}}
            </li>
            <li class="py-2">
              <i class="fa fa-check text-primary mr-3"></i>
              {{$item->list2}}
            </li>
            <li class="py-2">
              <i class="fa fa-check text-primary mr-3"></i>
              {{$item->list3}}
            </li>
          </ul>
        </div>
        <div class="mt-4">
          <a class="btn btn-primary">{{$item->button_name}}</a>
        </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Registration End -->

  
  <!-- Team Start -->
  <div class="container-fluid events clearfix">
    <div class="container pt-5 pb-3">
      <div class="text-center mb-3 pb-3">
        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
          Hotels
        </h6>
        <h1>Our exquisite Hotels</h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
           @foreach($hoteldesc as $item)
        <div class="col-sm-4">
          <div class="card pb-2">
          <img src="{{asset('uploads/'.$item->photo)}}"/>
            <div class=" p-4 text-center">
              <div class="d-flex justify-content-between">
                <div class="">
                  <a href="{{route('hoteldetails',['id' => $item->id])}}" class="text-decoration-none">
                    <h5 class="fw-bold text-left links">{{$item->hotel_name}}</h5>
                  </a>
                  <p class=" text-left hotel_text">{{$item->hotel_location}}</p>
                </div>
              </div>
              <div class="text-left"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <hr>
              <div class="d-flex justify-content-between mt-4">
              <div class="">
                <h5 class="mt-2 package_price">${{$item->today_price}}</h5>
              </div>

                <div class=""><a href="{{route('hoteldetails',['id' => $item->id])}}"><button class="btn btn-primary"  >Book Now</button></a></div>

              </div>
            </div>
          </div>
        </div>
           @endforeach
      </div>
    </div>
  </div>
  <!-- Team End -->
  

  <!-- Testimonial Start -->
  <div class="container-fluid events">
    <div class="container py-5">
      <div class="text-center mb-3 pb-3">
        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
        TESTIMONIALS
        </h6>
        <h1>STORIES BY TRAVELLERS</h1>
      </div>
      <div class="owl-carousel testimonial-carousel">
      @foreach($testimonial_all as $item)
        <div class="text-center pb-4">
          <img class="img-fluid mx-auto" src="{{asset('uploads/'.$item->photo)}}" style="width: 100px; height: 100px;" />
          <div class="testimonial-text bg-white p-4 mt-n5">
            <p class="mt-5 text-left">
              {{$item->comment}}
            </p>
            <h5 class="text-truncate">{{$item->name}}</h5>
            <span>{{$item->designation}}</span>
          </div>
        </div>
      @endforeach
       
      </div>
    </div>
  </div>
  <!-- Testimonial End -->
  <!-- About Start -->

  <div class="container-fluid">
    <div class="container pt-0">
      <div class="row">
        <div class="col-10 m-auto pb-lg-5">
        @foreach($about_all as $item)
          <div class=" bg-white p-4 p-lg-5 my-lg-5">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
              {{$item->title}}
            </h6>
            <h1 class="mb-3">{{$item->heading}}</h1>
            <p>
            {{$item->description}}
            </p>
            <div class="row mb-4">
              <div class="col-6">
                <img class="img-fluid" src="{{asset('uploads/'.$item->photo1)}}" alt="" />
              </div>
              <div class="col-6">
                <img class="img-fluid" src="{{asset('uploads/'.$item->photo2)}}" alt="" />
              </div>
            </div>
            <div class="text-center">
              <a class="btn btn-primary mt-1 " href="{{route('about')}}">Read More</a>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->


  <!-- FAQs start -->
  <div class="container bg-light my-3">
    <div class="row">
      <div class="col-sm-12 m-auto">
        <div class="text-center py-5">
          <h2 class="f-40">Frequently Asked Questions</h2>
        </div>
        @foreach($faq_all as $item)
        <div class="accordion" id="accordionExample">
        
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse{{$item->question_number}}" aria-expanded="false" aria-controls="collapse{{$item->question_number}}">
                {{$item->question}}
              </button>
            </h2>
            <div id="collapse{{$item->question_number}}" class="accordion-collapse collapse" aria-labelledby="heading{{$item->question_number}}"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                {{$item->answer}}
                </p>
              </div>
            </div>
          </div>
        
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- FAQs End -->

@endsection