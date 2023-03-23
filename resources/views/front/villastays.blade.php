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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('content')


<!-- banner start -->
<div class="container-fluid bg-villaregistrationbanner py-5 mb-5" style="background-image:url({{asset('/dis/img/events/villabannerimage.jpg.crdownload')}}); cbakground-repeat:no-repeat center center; background-size: cover;">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="mb-4">
          <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
            Mega Offer
          </h6>
          <h1 class="text-white">
            <span class="text-primary">Discount's</span>
            On Villa's
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
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="" draggable="false">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
              </div>


              <div id="sync2" class="owl-carousel owl-theme">
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="" draggable="false">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
                <div class="item">
                  <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
    <div class="container mt-30">
      <h4 class="mb-20">Morbi facilisis nisi et leo egestas gravida</h4>
      <div class="row">
        <div class="col-md-8">
          <p class="mb-15">Barcelo Eresin Topkapi offers a modern setting in Istanbul and features a swimming pool,
            free Wi-Fi and complimentary private parking on-site. It also has a sauna, a Jacuzzi and a Turkish steam
            bath. </p>
          <p class="mb-15">Guests can enjoy a range of massage treatments and beauty therapy at the on-site spa, U
            Spa. It offers child-minding services, a currency exchange and a reception that is available 24/7. It also
            has superb facilities for meetings and events. </p>
          <p class="mb-15">Rooms offer premium amenities, including mini bars, pillow menus and rain showers. All have
            a sofa bed, slippers and tea and coffee making facilities. </p>
          <p class="mb-15">The hotel's restaurant, Picasso, serves Turkish and international cuisine. In the evening,
            guests are able to relax in the cosy lounge bar.</p>
          <p>The area surrounding <ins class="alt-4">Barcelo Eresin</ins> is popular for its shopping. The helpful
            staff at the tour desk are available to book tours and sightseeing trips in Istanbul.</p>
        </div>
        <div class="col-md-4">
          <div class="bg-gray-3 p-30-40">
            <ul class="style-1 mb-0">
              <li>Parking</li>
              <li>Concierge service</li>
              <li>Gift shop</li>
              <li>Meeting/Banquet facilities</li>
              <li>Wheelchair accessible</li>
              <li>Restaurant</li>
              <li>Express check out</li>
              <li>Air-conditioned</li>
              <li>Babysitting/child services (surcharge)</li>
            </ul><a href="#"><ins class="alt-5 mx-5">More amenties</ins></a>
          </div>
        </div>
      </div>
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
                  <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                </div>
              </form>
              <div class="tours-calendar divider-skew">
                <input placeholder="Depart date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n "><i class="flaticon-suntour-calendar calendar-icon"></i>
              </div>
              <div class="tours-calendar divider-skew">
                <input placeholder="Return date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n "><i class="flaticon-suntour-calendar calendar-icon"></i>
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
              <div class="  btn-primary">
                <td> <a href="#" class="cws-button btn-primary" style="border: none;  text-decoration: none;">Go</a></td>
              </div>
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
            <tr>
              <td> <img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" data-at2x="pic/190x130@2x.jpg" alt>
                <h6>Grand Hotel Wien</h6>
                <p class="mb-0">(Extra beds available: Crib, <br> Rollaway bed) Room sleeps <br> 4 guests (up to 3
                  children)</p>
              </td>
              <td>
                <div class="table-icon"><i class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people alt"></i>
                </div>
                <p>4 guest</p>
              </td>
              <td>
                <ul class="style-1">
                  <li>Special conditions, pay when you stay</li>
                  <li>Breakfast included</li>
                  <li>Free Parking</li>
                </ul>
              </td>
              <td class="room-price">$120</td>
              <td> <a href="#" class="cws-button btn-primary" style="border: none; text-decoration: none;" data-toggle="modal" data-target=".package_customized ">Book now</a></td>
            </tr>
            <tr>
              <td> <img src="{{asset('dis/img/events/villasliderimage.jpg')}}" data-at2x="pic/190x130@2x.jpg" alt>
                <h6>Deluxe Room, Sea View</h6>
                <p class="mb-0">(Extra beds available: Crib, <br> Rollaway bed)</p>
              </td>
              <td>
                <div class="table-icon"><i class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people alt"></i><i class="flaticon-people alt"></i><i class="flaticon-people alt"></i></div>
                <p>2 guest</p>
              </td>
              <td>
                <ul class="style-1">
                  <li>Special conditions, pay when you stay</li>
                  <li>Breakfast included</li>
                  <li>Free Parking</li>
                  <li>Free Internet</li>
                </ul>
              </td>
              <td class="room-price">Sold out</td>
              <td> <a href="#" class="cws-button btn-primary" style="border: none;  text-decoration: none;" data-toggle="modal" data-target=".package_customized ">Book now</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- section location-->
    <div id="location" class="container mb-50">
      <div class="row">
        <div class="col-md-12">
          <h4 class="trans-uppercase mb-10">Location</h4>
          <div class="cws_divider mb-30"></div>
          <!-- google map-->
          <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25295.930156304785!2d16.371063311644324!3d48.208404844730474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d07986fcad78b%3A0x73f5a4d267cc4174!2zTmFnbGVyZ2Fzc2UgMTAsIDEwMTAgV2llbiwg0JDQstGB0YLRgNC40Y8!5e0!3m2!1sru!2sua!4v1453294615596" allowfullscreen=""></iframe>
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
          <ul class="style-1">
            <li>Room Service</li>
            <li>Newspapers</li>
            <li>Non-smoking Rooms</li>
            <li>Family Rooms</li>
            <li>Elevator</li>
            <li>Safe</li>
          </ul>

        </div>
        <div class="col-md-3 col-sm-6">
          <h6 class="trans-uppercase  ml-4">Media & Technology</h6>
          <ul class="style-1">
            <li>Telephone</li>
            <li>Radio</li>
            <li>Cable channels</li>
            <li>Flat-screen TV</li>
          </ul>

        </div>
        <div class="col-md-3 col-sm-6">
          <h6 class="trans-uppercase  ml-4">Food & Drink</h6>
          <ul class="style-1">
            <li>Bar</li>
            <li>Breakfast in the Room</li>
            <li>Restaurant with Dining Menu</li>
            <li>FSpecial Diet Meals (upon request)</li>
            <li>Minibar</li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6 class="trans-uppercase  ml-4">Front Desk Services</h6>
          <ul class="style-1">
            <li>24-Hour Front Desk</li>
            <li>Currency Exchange</li>
            <li>Tour Desk</li>
            <li>Ticket Service</li>
            <li>Baggage Storage</li>
            <li>Concierge Service</li>
          </ul>
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
            <div class="review-total"><img src="{{asset('dis/img/events/villabannerimage.jpg.crdownload')}}" data-at2x="pic/blog/120x120@2x.jpg" alt>
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
        <form class="form clearfix">
          <div class="row">
            <div class="col-md-4">
              <input type="text" name="email" value="" size="40" placeholder="First Name" aria-required="true" class="form-row form-row-first">
            </div>
            <div class="col-md-4">
              <input type="text" name="email" value="" size="40" placeholder="Last Name" aria-required="true" class="form-row form-row-first">
            </div>
            <div class="col-md-4">
              <input type="text" name="email" value="" size="40" placeholder="Booking Number" aria-required="true" class="form-row form-row-first">
            </div>
            <div class="col-md-12">
              <input type="text" name="password" value="" size="40" placeholder="Title of your review" aria-required="true" class="form-row form-row-last">
            </div>
            <div class="col-md-12">
              <textarea name="message" cols="40" rows="4" placeholder="Message of your review" aria-invalid="false" aria-required="true" class="mb-20"></textarea>
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
<script>
  $(document).ready(function() {
    var owl = $('.owl-carousel');
  })
</script>

<script>
  $(document).ready(function() {

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
      .on('initialized.owl.carousel', function() {
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

    sync2.on("click", ".owl-item", function(e) {
      e.preventDefault();
      var number = $(this).index();
      sync1.data('owl.carousel').to(number, 300, true);
    });
  });
</script>
<!-- owl-carosel END -->

<!-- customized button popup start -->
<div class="modal fade package_customized" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="mysmallmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="exampleModalLongTitle">
          Booking Form
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{route('villa')}}" method="post" class="p-4">
          @csrf
          @if(Session::has('message'))
           <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
          @endif
          <div class="input_modallogin mb-3">
            <i class="fas fa-1x fas fa-user icon_rotate m-3"></i>
            <input type="text" name="name" placeholder="Name*" class="input_login" required/>
          </div>
          <div class="input_modallogin mb-3">
            <i class="fas fa-1x fas fa-envelope icon_rotate m-3"></i>
            <input type="email" name="email" placeholder="E-mail*" class="input_login" required/>
          </div>
          <div class="input_modallogin mb-3">
            <i class="fas fa-1x fas fa-phone icon_rotate m-3"></i>
            <input type="phone" name="mobile" placeholder="Phone Number*" class="input_login" required/>
          </div>
          <div class="input_modallogin mb-3">
            <i class="fas fa-1x fas fa-user m-3"></i>
            <input type="phone" name="person" placeholder="No of person*" class="input_login" required/>
          </div>
          <div class="input_modallogin mb-3">
            <i class="fas fa-1x fas fa-calendar m-3"></i>
            <input type="text" name="checkin_date" placeholder="Checkin date" class="input_login" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" required />
          </div>
          <div class="input_modallogin mb-3">
            <i class="fas fa-1x fas fa-calendar m-3"></i>
            <input type="text" name="checkout_date" placeholder="Checkout date" class="input_login" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" required />
          </div>
          <div class="input_modallogin mb-3">
            <i class="fas fa-1x fas fa-envelope-open-text m-3"></i>
            <textarea name="message" id="" cols="2" rows="2" placeholder="Message*" class="input_login" required></textarea>
          </div>
          <div class="text-center">
            <button class="btn btn-primary w-100">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection