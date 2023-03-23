@extends('front.layout.app')
<link rel="stylesheet" href="{{asset('Newhoteldetails/css/reset.css')}}">
<link rel="stylesheet" href="{{asset('Newhoteldetails/css/owl.carousel.css')}}">

<link rel="stylesheet" href="{{asset('Newhoteldetails/css/jquery.fancybox.css')}}">
<link rel="stylesheet" href="{{asset('Newhoteldetails/fonts/fi/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('Newhoteldetails/css/flexslider.css')}}">
<link rel="stylesheet" href="{{asset('Newhoteldetails/css/main.css')}}">
<link rel="stylesheet" href="{{asset('Newhoteldetails/css/indent.css')}}">
<link rel="stylesheet" href="{{asset('Newhoteldetails/rs-plugin/css/settings.css')}}">
<link rel="stylesheet" href="{{asset('Newhoteldetails/rs-plugin/css/layers.css')}}">
<link rel="stylesheet" href="{{asset('Newhoteldetails/rs-plugin/css/navigation.css')}}">
<link rel="stylesheet" href="{{asset('Newhoteldetails/tuner/css/colorpicker.css')}}">
<link rel="stylesheet" href="{{asset('Newhoteldetails/tuner/css/styles.css')}}">
<link rel="stylesheet" href="{{asset('assets/owlcarousel/assets/owl.carousel.min.css')}}">
<!-- <link rel="stylesheet" href="{{asset('assets/owlcarousel/assets/owl.carousel.min.css')}}"> -->
<link rel="stylesheet" href="{{asset('assets/owlcarousel/assets/owl.theme.default.min.css')}}">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
<script src="{{asset('assets/owlcarousel/owl.carousel.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/css/docs.theme.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <!-- Import jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity=
"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
      
    <script src=
"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity=
"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous">
    </script>
@section('content')



  <!-- banner start -->
    <div class="container-fluid bg-registrationbanner py-5 mb-5">
      <div class="container py-5">
          <div class="row align-items-center">
              <div class="col-lg-7 mb-5 mb-lg-0">
                  <div class="mb-4">
                      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
                          Mega Offer
                      </h6>
                      <h1 class="text-white">
                          <span class="text-primary">Discount's</span>
                          On Hotel's
                      </h1>

                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- banner end -->


  <!-- ! header page-->
  <div class="content-body">
    <section class="page-section pt-0 pb-50">
      <div class="container">
        <div class="menu-widget with-switch mt-30 mb-30">
          <ul class="magic-line">
            <li class="current_item"><a href="#overview" class="scrollto">Overview</a></li>
            <li><a href="#prices" class="scrollto">Prices</a></li>
            <li><a href="#location" class="scrollto">Location</a></li>
            <li><a href="#amenties" class="scrollto">Amenties</a></li>
            <li><a href="#reviews" class="scrollto">Reviews (28) <span class="stars stars-5"></span></a></li>
          </ul>
        </div>
      </div>
      <div>
        <div class="container">
          <section id="hotel-deatil-owl-carousel">
            <div class="row">
              <div class="large-12 columns">
              
                <div id="sync1" class="owl-carousel owl-theme">
                @foreach($hotel_details1 as $img)
                  <div class="item">
                    <img src="{{ asset('images/'.$img->image) }}" alt="">
                  </div>
                  @endforeach
                </div>
                
  
                <div id="sync2" class="owl-carousel owl-theme">
                @foreach($hotel_details1 as $img)
                  <div class="item">
                    <img src="{{ asset('images/'.$img->image) }}" alt="">
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>

      <div class="container mt-30">
            @foreach($hoteldata as $item)
        <h4 class="mb-20">{{$item->hotel_name}}</h4>
        <div class="row">
          <div class="col-md-8">
            {!! $item->description !!}
          </div>
          <div class="col-md-4">
            <div class="bg-gray-3 p-30-40">
              <ul class="style-1 mb-0">
              @foreach($amenitie_data as $item)
                <li>{{$item->hotel_amenity_name}}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
             @endforeach
      </div>



      <!-- section prices-->
       <div id="prices" class="container mb-50 mt-40">
        <div class="search-hotels room-search pattern">
          <div class="search-room-title">
            <h5>Choose your room</h5>
          </div>
          <div class="tours-container">
            <div class="tours-box">
              <div class="tours-search mb-20">
                <form method="post" class="form search divider-skew">
                  <div class="search-wrap mb-2">
                    <input type="text" placeholder="Destination" class="form-control search-field"><i
                      class="flaticon-suntour-map search-icon"></i>
                  </div>
                </form>
                <div class="tours-calendar divider-skew">
                  <input placeholder="Depart date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')"
                    class="calendar-default textbox-n "><i class="flaticon-suntour-calendar calendar-icon"></i>
                </div>
                <div class="tours-calendar divider-skew">
                  <input placeholder="Return date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')"
                    class="calendar-default textbox-n "><i class="flaticon-suntour-calendar calendar-icon"></i>
                </div>
                <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                  <select class="">
                    <option>Adult</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="selection-box divider-skew"><i class="flaticon-suntour-children box-icon"></i>
                  <select class="">
                    <option>Child</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="selection-box"><i class="flaticon-suntour-bed box-icon"></i>
                  <select class="">
                    <option>Room</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <div class="  btn-primary"><td> <a href="#" class="cws-button btn-primary" style="border: none;  text-decoration: none;">Go</a></td></div>
              </div>
            </div>
          </div>
        </div>
        <div class="room-table">
          <table class="table alt-2">
            <thead>
              <tr>
                <th>Room Type</th>
                <th>Max.</th>
                <th>Hotel Offer</th>
                <th>Today's price</th>
                <th>Booking</th>
              </tr>
            </thead>
            <tbody>
            @foreach($roomtypes_data as $item)
              <tr>
                <td> 
                <img src="{{asset('uploads/'.$item->room_photo)}}"/>
                  <h6>{!! $item->room_name !!}</h6>
                  <h6 class="mb-0">{!! $item->extra_facility !!}</h6>
                </td>
                <td>
                  <div class="table-icon"><i class="flaticon-people"></i><i class="flaticon-people"></i><i
                      class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people alt"></i>
                  </div>
                  <h6 class="mb-0">{!! $item->guest !!}</h6>
                </td>
                <td>
                  <ul class="style-1">
                    {!! $item->hotel_offer !!}
                  </ul>
                </td>
                <td class="room-price">{!! $item->today_price !!}</td>
                <!-- <?php //dd($hoteldata[0]->id );  ?> -->
                <td> 
                
                <?php // dd(Auth::guard('customer')->user()); ?>
                <?php if(Auth::guard('customer')->user()==''){ ?>
                  <a href="{!! $item->id !!}"  onclick = "bookingform({{$item->id}},{{$hoteldata[0]->id}})" class="cws-button btn-primary" style="border: none; text-decoration: none;" data-toggle="modal" data-target=".package_customized">Book now</a>
                 
                <?php } else if(Auth::guard('customer')->user() !=''){ ?>
                  <a href="{!! $item->id !!}"  onclick = "bookingform({{$item->id}},{{$hoteldata[0]->id}})" class="cws-button btn-primary" style="border: none; text-decoration: none;" data-toggle="modal" data-target=".modal-hotelbooking ">Book now</a>
                <?php } ?>
                </td>
              </tr>
              @endforeach
            </tbody>  
          </table>
        </div>
      </div>

     <!--  section location -->
      <div id="location" class="container mb-50">
        <div class="row">
          <div class="col-md-12">
            <h4 class="trans-uppercase mb-10">Location</h4>
            <div class="cws_divider mb-30"></div>
           <!-- google map-->
            <div class="map-wrapper">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25295.930156304785!2d16.371063311644324!3d48.208404844730474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07986fcad78b%3A0x73f5a4d267cc4174!2zTmFnbGVyZ2Fzc2UgMTAsIDEwMTAgV2llbiwg0JDQstGB0YLRgNC40Y8!5e0!3m2!1sru!2sua!4v1453294615596"
                allowfullscreen=""></iframe>
            </div>
            <ul class="icon inline mt-20">
              <li> <a href="#">9300 Meadow Lane, Kalamazoo, MI 49009<i class="flaticon-suntour-map"></i></a></li>
              <li> <a href="#">00 1 877-859-5095<i class="flaticon-suntour-phone"></i></a></li>
            </ul>
          </div>
        </div>
      </div>


      <!-- section amenties-->
      <div id="amenties" class="container mb-50">
        <div class="row ">
          <div class="col-md-12">
            <h4 class="trans-uppercase mb-10">Amenties</h4>
            <div class="cws_divider mb-10"></div>
          </div>
        </div>
        <div class="row mt-0 masonry mt-3">
          <div class="col-md-3 col-sm-6">
          <h6 class="trans-uppercase ml-4">General</h6>
          @foreach($amenitie_data as $item)
            <?php
          if($item->amenitie_catagories == "General"){ ?>
            <ul class="style-1">
              <li>{{$item->hotel_amenity_name}}</li>
            </ul>
            <?php }
             ?>
            @endforeach
          </div>

          <div class="col-md-3 col-sm-6">
          <h6 class="trans-uppercase  ml-4">Media & Technology</h6>
          @foreach($amenitie_data as $item)
            <?php
          if($item->amenitie_catagories == "Media & Technology"){ ?>
            <ul class="style-1">
            <li>{{$item->hotel_amenity_name}}</li>
            </ul>
            <?php }
             ?>
            @endforeach
          </div>
          <div class="col-md-3 col-sm-6">
            <h6 class="trans-uppercase  ml-4">Food & Drink</h6>
            @foreach($amenitie_data as $item)
            <?php
          if($item->amenitie_catagories == "Food & Drink"){ ?>
            <ul class="style-1">
            <li>{{$item->hotel_amenity_name}}</li>
            </ul>
            <?php }
             ?>
            @endforeach
          </div>
          <div class="col-md-3 col-sm-6">
            <h6 class="trans-uppercase  ml-4">Front Desk Services</h6>
            @foreach($amenitie_data as $item)
            <?php
          if($item->amenitie_catagories == "Front Desk Services"){ ?>
            <ul class="style-1">
            <li>{{$item->hotel_amenity_name}}</li>
            </ul>
            <?php }
             ?>
            @endforeach
          </div>
        </div>
      </div>
     
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4 class="trans-uppercase mb-10">Write a review</h4>
            <div class="cws_divider mb-30"></div>
          </div>
        </div>
        <div class="review-content pattern relative">
          <div class="row">
            <div class="col-md-5 mb-md-30 mb-xs-0"> 
              <div class="review-total"><img src="{{asset('dis/img/events/hotelimg.102.avif')}}" data-at2x="pic/blog/120x120@2x.jpg"
                  alt>
                <div class="review-total-content">
                  <h6>Hotel Bohemians</h6>
                  <div class="stars stars-4"></div>
                  <ul class="icon">
                    <li>Istanbul, Turkey<i class="flaticon-suntour-map"></i></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="review-marks clearfix mb-30">
                <ul>
                  <li>Cleanliness
                    <div class="stars stars-5"></div>
                  </li>
                  <li>Location
                    <div class="stars stars-5"></div>
                  </li>
                  <li>Staff
                    <div class="stars stars-5"></div>
                  </li>
                  <li>Free Wi-Fi
                    <div class="stars stars-5"></div>
                  </li>
                </ul>
                <ul>
                  <li>Comfort
                    <div class="stars stars-5"></div>
                  </li>
                  <li>Facilities
                    <div class="stars stars-5"></div>
                  </li>
                  <li>Value for money
                    <div class="stars stars-5"></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <form class="form clearfix" action="{{route('hoteldetails_store')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-4">
                <input type="text" name="first_name" value="" size="40" placeholder="First Name" aria-required="true"
                  class="form-row form-row-first">
              </div>
              <div class="col-md-4">
                <input type="text" name="last_name" value="" size="40" placeholder="Last Name" aria-required="true"
                  class="form-row form-row-first">
              </div>
              <div class="col-md-4">
                <input type="text" name="booking_number" value="" size="40" placeholder="Booking Number" aria-required="true"
                  class="form-row form-row-first">
              </div>
              <div class="col-md-12">
                <input type="text" name="title_review" value="" size="40" placeholder="Title of your review"
                  aria-required="true" class="form-row form-row-last">
              </div>
              <div class="col-md-12">
                <textarea name="message_review" cols="40" rows="4" placeholder="Message of your review" aria-invalid="false"
                  aria-required="true" class="mb-20"></textarea>
                <input type="submit" value="Add a review" class="cws-button alt float-right">
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- ! review -->
    </section>
  </div>
  <!-- footer-->
  <!-- <div id="scroll-top"><i class="fa fa-angle-up"></i></div> -->
  <!-- ! footer-->
  <script src="{{asset('assets/vendors/jquery.min.js')}}"></script>
  <script src="{{asset('assets/owlcarousel/owl.carousel.js')}}"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<!-- owl-carosel start -->




<!-- hotel booking modal  start-->
<div
      class="modal fade modal-hotelbooking"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mysmallmodal"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white" id="exampleModalLongTitle">
              Hotel Booking 
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              Book to keep exploring amazing destinations around the World.
            </p>
            <form action="{{route('hotelbooking')}}" method="post" onsubmit="submithandler()">
                  @csrf
              <input type="hidden" name="room_types_id">
              <input type="hidden" name="hotel_home_section_id">
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input name="checkin"
                  type="date"
                  class="input_login"
                  name="checkin" placeholder="Check in" />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input name="checkout"
                  type="date"
                  class="input_login"
                  name="checkout" placeholder="Check out" />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input name="guest"
                  type="text"
                  class="input_login"
                  placeholder="Guest*"
                  id="name"
                  required
                />
              </div>
              
              <div class="text-center my-2">
                <button type="submit" name="submit" class="btn btn-primary">
                  Book Now
                </button>
                
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- hotel booking modal  end-->


<script>
    $(document).ready(function () {
      var owl = $('.owl-carousel');
    })
  </script>

  <script>

    $(document).ready(function () {

      var sync1 = $("#sync1");
      var sync2 = $("#sync2");
      var slidesPerPage = 8; //globaly define number of elements per page
      var syncedSecondary = true;

      sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: true,
        autoplay: true,
        dots: false,
        loop: true,
        responsiveRefreshRate: 200,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
      }).on('changed.owl.carousel', syncPosition);

      sync2
        .on('initialized.owl.carousel', function () {
          sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
          items: slidesPerPage,
          dots: false,
          nav: false,
            margin: 5,
          smartSpeed: 200,
          slideSpeed: 500,
          slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
          responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

      function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
          current = count;
        }
        if (current > count) {
          current = 0;
        }

        //end block

        sync2
          .find(".owl-item")
          .removeClass("current")
          .eq(current)
          .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
          sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
          sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
      }

      function syncPosition2(el) {
        if (syncedSecondary) {
          var number = el.item.index;
          sync1.data('owl.carousel').to(number, 100, true);
        }
      }

      sync2.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
      });
    });
  </script>
  <!-- owl-carosel END -->


  <!-- for booking modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  
        function bookingform($id,$b){
          var data = $id;
          var data1 = $b;
          $("input[name=room_types_id]").val(data);
          $("input[name=hotel_home_section_id]").val(data1);
        }  
    
        
  </script>

<!-- testing -->
<!-- testing -->
<!-- testing -->
<!-- testing -->
   <!-- customized button popup start -->

   <div  class="modal fade package_customized"  id="exampleModalCenter" tabindex="-1"
      role="dialog"  aria-labelledby="mysmallmodal" aria-hidden="true" >
      <div class="">
        <div class="modal-dialog poopupwidth modal-dialog-centered modal-sm"  role="document">
          <div class="modal-content text-center">
            <div class="modal-header bg-primary">
              <h5 class="modal-title text-white" id="exampleModalLongTitle">
                Booking Form
              </h5>
              <button type="button"  class="close"  data-dismiss="modal"  aria-label="Close" >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="customize_packages p-3"> 
              <div class="customize_packages_form" id="first_modalform">
                <h3 class="text-primary my-4">Guest User Login Form</h3>
                <form action="" method="POST" id="form_place">
                @csrf
                <input type="hidden" name="room_types_id">
                <input type="hidden" name="hotel_home_section_id">
                  <div class="mb-2">
                    <input  type="text" name="name"  placeholder="Name" class="customizepackages_input" />
                  </div>
                <div class="mb-2">
                    <input  type="email" name="email" placeholder="Email id" class="customizepackages_input" />
                  </div>
                  <div class="mb-2">
                    <input  type="phone" name="mobile"  placeholder="Phone  number" class="customizepackages_input"
                    />
                  </div>
                  
                  <button type="submit"  class="btn-primary w-80 p-2 mt-2"   >
                    Next
                    <i class="fas fa-1x fas fas fa-angle-right"></i>
                  </button>
                </form>
              </div>
              <div class="customize_packages_form"  id="second_modalform" style="display: none" >
               
                <h3 class="text-primary mb-3">Booking Form</h3>
                <form action="" id="form_place1">
                  @csrf
                  
                <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input name="checkindate" type="date" class="input_login" placeholder="Checkin date*"   />
              </div>
              
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input name="checkoutdate" type="date" class="input_login" placeholder="Checkout date*"  />
              </div>

              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input name="guest" type="text" class="input_login" placeholder="Guest*" id="name"
                   />
              </div>

              <input type="submit" name="submit" class="btn-primary w-80 p-2" value="Book Now" />

              <!-- <button
                  type="submit"
                  class="btn-primary w-80 p-2"
                 
                >
                  Book Now
                </button> -->
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#form_place').on('submit',function(event){
          event.preventDefault();
          var form = $("#form_place").serializeArray();
          //alert(form);
          $.ajax({
            type : 'POST',
            url : '/hotelsubmit',
            data : form,
            success : function(response){
              //alert(response);
              document.getElementById("second_modalform").style.display="block";
              document.getElementById("first_modalform").style.display="none";
            },error:function (response){
                    alert(response);
                    console.log(response);
                      $.each(response.responseJSON.errors,function(name,error){
                          $(document).find('[name='+name+']').after('<p class="text-strong text-danger">' +error+ '</p>')
                      })
                  }
           });
        });
      })
    </script>
    <script>
        $(document).ready(function(){
          $('#form_place1').on('submit',function(e){
            e.preventDefault();
            var form = $("#form_place1").serializeArray();
            //alert(form);
            $.ajax({
              type : 'POST',
              url : '/hotelsub',
              data : form,
              success : function(response){
                //console.log(response);
                //alert(response);
                window.location.href='/cart';
              },error:function (response){
                    alert(response);
                    console.log(response);
                      $.each(response.responseJSON.errors,function(checkindate,error){
                          $(document).find('[name='+checkindate+']').after('<p class="text-strong text-danger">' +error+ '</p>')
                      })
                  }
            });
          });
        })
    </script>

    <script>
          function modalform() {
            document.getElementById('first_modalform').style.display = 'none'
            document.getElementById('second_modalform').style.display = 'block'
          }
          const modalform_hide=()=>{
            document.getElementById("second_modalform").style.display="none"
          } 
          const form=document.getElementById("form_place");
          const submitform=(e)=>{
              e.preventDefault()
            }
            form.addEventListener("submit",submitform)

    </script>


@endsection