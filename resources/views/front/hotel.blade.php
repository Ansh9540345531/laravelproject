<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description"
    content="eserve - Site Launch Coming soon for Hotels and accommodations with working php mail check availability request" />
  <meta name="author" content="Ansonika" />
  <title>PAGE1TRAVELS</title>

  <script src="https://kit.fontawesome.com/37cbe759c6.js" crossorigin="anonymous"></script>


  <!-- Favicons-->
  <link rel="icon" type="image/x-icon" href="./img/logo/Page 1 Travel Logo Favicon.svg" />

  <!-- GOOGLE WEB FONT -->

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

  <!-- CSS -->
  <link href="{{asset('hotelcss/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('hotelcss/css/bs-icon-font/bootstrap-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('hotelcss/css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('hotelcss/css/vendors.min.css')}}" rel="stylesheet" />

  <link href="{{asset('hotelcss/css/vegas.css')}}" rel="stylesheet" />

  <!-- YOUR CUSTOM CSS -->
  <link href="{{asset('hotelcss/css/custom.css')}}" rel="stylesheet" />
</head>

<body class="datepicker_mobile_full">
  <!-- <div id="preloader">
      <div data-loader="circle-side"></div>
    </div> -->
  <!-- /Page Preload -->

  <div class="jarallax jarallax_element" data-jarallax-video="https://vimeo.com/360765915"></div>

  <div class="min-vh-100 d-flex flex-column" id="main">
    <div class="container">
      <div id="logo">
        <a href="{{route('home')}}" class="text-decoration-none">
          <img src="{{asset('dis/img/logo/Page 1 Travel Logo Favicon.svg')}}" alt="" width="80" height="70" />
        </a>
      </div>
    </div>

    <div class="container my-auto main_content">
      <div class="row countdown">
        <div class="col-md-12">
          <h1>We will be back Soon!</h1>
          <h2>
            Meanwhile, you can request for a reservation or view
            <strong>our offers</strong>.
          </h2>
        </div>
        <div id="countdown_wp">
          <div class="container_count">
            <div id="days">00</div>
            days
          </div>
          <div class="container_count">
            <div id="hours">00</div>
            hours
          </div>
          <div class="container_count">
            <div id="minutes">00</div>
            minutes
          </div>
          <div class="container_count last">
            <div id="seconds">00</div>
            seconds
          </div>
        </div>
      </div>
      <div id="book">
        <form method="post" action="./hotelcss/phpmailer/reservation_phpmailer.php" id="check_avail" autocomplete="off">
          <div class="row">
            <div class="col-md-4 first-nogutter position-relative">
              <input type="text" class="form-control" id="dates" name="dates" placeholder="Check in / Check out" />
              <span class="input-icon"><i class="bi bi-calendar2"></i></span>
            </div>
            <div class="col-md-3 nogutter position-relative">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
              <span class="input-icon"><i class="bi bi-people"></i></span>
            </div>
            <div class="col-md-3 nogutter position-relative">
              <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
              <span class="input-icon"><i class="bi bi-envelope"></i></span>
            </div>
            <div class="col-md-1 nogutter position-relative">
              <div class="qty-buttons">
                <input type="button" value="+" class="qtyplus" name="quantity" />
                <input type="text" name="quantity" id="quantity" value="" class="qty form-control required"
                  placeholder="Guest" />
                <input type="button" value="-" class="qtyminus" name="quantity" />
              </div>
            </div>
            <div class="col-md-1 ps-0 pe-3">
              <button class="btn_check" id="submit-check">

                <a href="{{route('check')}}">
                  Check
                </a>
              </button>
            </div>
          </div>
        </form>
        <!-- <div id="message-booking"></div> -->
      </div>
    </div>
      <!-- <div class="container mt-3"> -->

      <!-- </div> -->
      <!-- End book -->
    <!-- End main_content -->
    <div class="container-fluid p-0 mt-5">
      <nav class="clearfix">
        <ul class="menu">
          <li><a href="#" id="modal-offers-open">Offers</a></li>
          <li><a href="#" id="modal-notified-open">Get notified</a></li>
          <li><a href="#" id="modal-contacts-open">Contacts</a></li>
        </ul>
        <ul id="contact_follow">
          <li>
            <a href="#"><i class="bi bi-instagram"></i></a>
          </li>
          <li>
            <a href="#"><i class="bi bi-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="bi bi-facebook"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- End main -->

  <!-- Modal Latest Offers -->
  <div id="modal-offers">
    <a href="#" class="modal-close"><i class="bi bi-x"></i></a>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section_title">Latest offers</h2>

          @foreach($hotelsdetails_data as $item)
        
          @if($loop->iteration % 2 == 0)

          <div class="row d-flex align-items-center justify-content-between add_bottom_60">
            <div class="col-lg-6">
              <div class="owl-carousel owl-theme carousel_item_1 mb-4">
              @foreach($hotelsdetails_data as $items)
                <div class="item">
                  <a data-fslightbox="gallery_1" data-type="image"><img src="{{asset('image_types/'.$items->image_type)}}" /></a>
                </div>
               @endforeach
              </div>
              <!-- /carousel -->
            </div>
            <div class="col-lg-5">
            <a href="{{route('hoteldetails',['id' => $item->id])}}" class="text-decoration-none">
              <h3>
                
                {{$item->hotel_name}}
                
              </h3>
              
              </a>
              <p>
              {!! $item->description !!}
              </p>
              <ul class="additional_info">
                <li>
                <i class="{{$item->hotel_amenity_icons}}"></i>
                </li>
              </ul>
              <p><a href="" class="btn-2" data-toggle="modal" data-target=".modal-signup ">Book now</a></p>
            </div>
          </div>



          @else

          <!-- carousel reflect-->

          <div
              class="row d-flex align-items-center justify-content-between add_bottom_60"
            >
              <div class="col-lg-6 order-lg-2">
                <div class="owl-carousel owl-theme carousel_item_1 mb-4">
                @foreach($hotelsdetails_data as $items)
                <div class="item">
                  <a data-fslightbox="gallery_1" data-type="image"><img src="{{asset('image_types/'.$items->image_type)}}" /></a>
                </div>
                @endforeach
                </div>

              </div>
              <div class="col-lg-5 order-lg-1">
                <h3>
                  <a href="{{route('hoteldetails',['id' => $item->id])}}">
                  {{$item->hotel_name}}
                  </a>
                </h3>
                <p>
                {!! $item->description !!}
                </p>
                <ul class="additional_info">
                  <li><i class="{{$item->hotel_amenity_icons}}"></i></li>
                </ul>
                <p>
                  <a
                    href=""
                    class="btn-2"
                    data-toggle="modal"
                    data-target=".modal-signup "
                  >
                    Book now
                  </a>
                </p>
              </div>
            </div>
            <!-- /row -->
            @endif
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End conainer -->
  </div>
  <!-- End modal -->

  <!-- Modal Notified -->
  <div id="modal-notified">
    <div class="min-vh-100 d-flex flex-column">
      <a href="#" class="modal-close"><i class="bi bi-x"></i></a>
      <div class="container my-auto">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center my-auto">
            <h2 class="section_title mb-4">Get Notified</h2>
            <p class="lead">
            Leave your email and we’ll notify you.

            </p>
            <form method="post" action="{{route('newsletter_store')}}">
              @csrf
              <div class="form-group">
                <input name="email" id="email_newsletter" type="email" placeholder="Your Email"
                  class="form-control" />
              </div>
              <button id="submit-newsletter" class="btn-2">Submit</button>
            </form>
            <div id="message-newsletter"></div>
          </div>
        </div>
        <!-- End row -->
      </div>
      <!-- End conainer -->
    </div>
  </div>
  <!-- End modal -->

  <!-- Modal  Contacts -->
  <div id="modal-contacts">
    <a href="#" class="modal-close"><i class="bi bi-x"></i></a>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section_title">Contacts</h2>
          <div class="map_iframe mb-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28010.43595402655!2d77.40600161562496!3d28.650600100000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1d973fcee5d%3A0xe802f486ca285840!2sKrishna%20Enclave!5e0!3m2!1sen!2sin!4v1677238620805!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <!-- End row -->
      
      <!-- End row -->
      <div class="row">
        <div class="col-md-12">
          <ul id="contact_info">
            <li>93 Krishna Enclave, First Floor, Raj Nagar Extension, Ghaziabad, 201002, Uttar Pradesh</li>
            <li><a href="tel:{!! $global_setting_data->footer_phone !!}">tel:{!! $global_setting_data->footer_phone !!}</a></li>
            <li>
              <a href="mailto:{!! $global_setting_data->footer_email !!}">mailto:{!! $global_setting_data->footer_email !!}</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End conainer -->
  </div>

  <!-- End modal -->
  <!-- signup modal  start-->
  <div class="modal fade modal-signup" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="mysmallmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header bg-hotel">
          <h5 class="modal-title text-white" id="exampleModalLongTitle">
            Create Account
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Signup to keep exploring amazing destinations around the World.
          </p>
          <form onsubmit="submithandler()">
            <div class="input_modallogin mb-3">
              <i class="fas fa-1x fas fa-user m-3"></i>
              <input type="text" class="input_login" placeholder="Full Name*" id="name" />
            </div>
            <div class="input_modallogin mb-3">
              <i class="fas fa-1x fas far fa-envelope m-3"></i>
              <input type="email" class="input_login" placeholder="Email*" id="email" />
            </div>
            <div class="input_modallogin mb-3">
              <i class="fas fa-1x fas fas fa-mobile m-3"></i>
              <input type="number" class="input_login" placeholder="Mobile Number*" id="phone_number" maxlength="10" />
            </div>
            <div class="input_modallogin mb-3">
              <i class="fas fa-1x fas fas fa-lock m-3"></i>
              <input type="password" class="input_login" placeholder="Password*" id="password" />
            </div>
            <input type="checkbox" class="mx-1" onclick="togglepassword()" />
            Show Password
            <div class="text-center my-2">
              <button type="submit" class=" btn btn-primary">
                Create Account
              </button>
              <img src="{{asset('img/whatsapp.svg')}}" class="image_icon" />
            </div>
            <small>
              Already a member ?
              <a href="#" class="text-decoration-none bg-hotel" data-toggle="modal" data-target=".modal-login"
                data-dismiss="modal">
                Log in
              </a>
            </small>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Signup modal  end--> 

  <!-- Login modal start -->
  <div class="modal fade modal-login" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="mysmallmodal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header bg-hotel">
          <h5 class="modal-title text-white" id="exampleModalLongTitle">
            Sign in into Your Account
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-center">Please enter below details to login.</p>
          <form action="/register" method="post" onsubmit="submithandler()">
            <div class="input_modallogin mb-3">
              <i class="fas fa-1x fas far fa-envelope m-3"></i>
              <input type="text" class="input_login" placeholder="Email Id" id="email" required />
            </div>
            <div class="input_modallogin mb-3">
              <i class="fas fa-1x fas fas fa-lock m-3"></i>
              <input type="password" class="input_login" placeholder="Password*" id="mypassword" required />
            </div>

            <input type="checkbox" class="mx-1" onclick="loginpassword()" />
            Show Password
            <div class="text-center my-2">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="text-right">
              <a class="text-decoration-none pointer" data-toggle="modal" data-target=".modal-forgot"
                data-dismiss="modal">
                Forgot Password ?
              </a>
            </div>
            <!-- <small
                >Already user ?<a href="#" class="text-decoration-none"
                  >Login</a
                >
              </small> -->
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Login modal end -->

  <!-- Forgot password start -->
  <div class="modal fade modal-forgot" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="mysmallmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-white" id="exampleModalLongTitle">
            Forgot Password
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-center">Enter Details to Reset Your password.</p>
          <form action="/register" method="post" onsubmit="submithandler()">
            <div class="input_modallogin mb-3">
              <i class="fas fa-1x fas far fa-envelope m-3"></i>
              <input type="text" class="input_login" placeholder="Email Id" id="email" required />
            </div>

            <div class="text-center my-2">
              <button type="submit" class="btn btn-primary">Send OTP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Forgot password end  -->
  <!-- COMMON SCRIPTS -->
  <script src="{{asset('hotelcss/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('hotelcss/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('hotelcss/js/vegas.min.js')}}"></script>
  <script>
    $(function () {
      "use strict";
      $("body").vegas({
        slides: [
          { src: "{{asset('hotelcss/img/slide_1.jpg')}}" },
          { src: "{{asset('hotelcss/img/slide_2.jpg')}}" },
          { src: "{{asset('hotelcss/img/slide_3.jpg')}}" },
        ],
        overlay: true,
        transition: "fade2",
        animation: "kenburnsUpRight",
        transitionDuration: 1000,
        delay: 10000,
        animationDuration: 30000,
      });
    });
  </script>

  <script src="{{asset('hotelcss/js/moment.min.js')}}"></script>
  <script src="{{asset('hotelcss/js/daterangepicker.js')}}"></script>
  <script src="{{asset('hotelcss/js/owl-carousel.js')}}"></script>
  <script src="{{asset('hotelcss/js/fslightbox.js')}}"></script>
  <script src="{{asset('hotelcss/js/functions.js')}}"></script>
  <script src="{{asset('hotelcss/phpmailer/validate.js')}}"></script>
  <script>

  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
  <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
  <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Contact Javascript File -->
  <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
  <script src="{{asset('mail/contact.js')}}"></script>
  <!-- Template Javascript -->
  <script src="{{asset('js/main.js')}}"></script>
  <!-- copy text -->
  <script>
    function copytext() {
      var copyText = document.getElementById("myInput");

      copyText.select();
      copyText.setSelectionRange(0, 99999);

      navigator.clipboard.writeText(copyText.value);

      alert("Copied the text: " + copyText.value);
    }

  </script>
  </script>
  <!-- login-container -->
  <script>
    // toggle password
    function togglepassword() {
      var x = document.getElementById('password')
      if (x.type === 'password') {
        x.type = 'text'
      } else {
        x.type = 'password'
      }
    }

    // login tooglepassword
    function loginpassword() {
      const y = document.getElementById('mypassword')
      if (y.type === 'password') {
        y.type = 'text'
      } else {
        y.type = 'password'
      }
    }

    function submithandler(e) {
      e.preventDefault()
    }
  </script>
</body>

</html>


