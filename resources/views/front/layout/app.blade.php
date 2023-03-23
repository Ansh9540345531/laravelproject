<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>PAGE1TRAVELS</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="{{ asset('uploads/'.$global_setting_data->favicon) }}"
    />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <!-- Google Web Fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Bootstrap Css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- Bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"/>
    <!-- Libraries Stylesheet -->
    <link href="{{asset('dis/js/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dis/js/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('dis/css/style.css')}}" rel="stylesheet" />
    <script src="{{asset('dis/js/Disable.js')}}"></script>
    <scrip src="{{asset('dis/js/logincontainer.js')}}"></script>
    
    
  </head>
  
  <body onload="login()">
    <!-- Navbar Start -->

    <div class="container-fluid p-0 position-relative bg-light" style="z-index: 9">
      <div class="position-relative p-0" style="z-index: 9">
        <div class="container">
          <nav class="navbar navbar-expand-lg bg-light navbar-light">
            <button
              type="button"
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbarCollapse"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <a href="{{route('home')}}" class="navbar-brand">
              <img
                src="{{ asset('uploads/'.$global_setting_data->logo) }}"
                width="130px" />
            </a>
              <?php
                $uri = $_SERVER['REQUEST_URI'];
                //dd(Auth::guard('customer')->user()); 
              ?>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse" >  
              <div class="navbar-nav hello ml-auto py-0">
              <a href="{{route('home')}}" class="nav-item nav-link <?php if($uri =='/'){echo 'active';}?>">HOME</a>
              <a href="{{route('cabs')}}" class="nav-item nav-link <?php if($uri =='/cabs'){echo 'active';}?> ">CABS</a>
              <!-- <a href="listing.html" class="nav-item nav-link">LISTINGS</a>
              <a href="tours.html" class="nav-item nav-link">TOUR</a> -->
              <a href="{{route('package')}}" class="nav-item nav-link <?php if($uri =='/package'){echo 'active';}?>">PACKAGES</a>
              <a href="{{route('contac')}}" class="nav-item nav-link <?php if($uri =='/contact'){echo 'active';}?>">CONTACT</a>
              <a href="{{route('cart')}}" class="nav-item nav-link <?php if($uri =='/cart'){echo 'active';}?>"><i class="fab fa-1x fas fa-cart-plus me-3"></i></a>
            </div>
              </div>
              
              <div onmouseover="logincontainer()" onmouseleave="login()">
                <a class="login_btn">
                  <i class="fas fa-1x fas fa-user"></i>
                  <span class="mx-3">LOGIN/SIGNUP</span>
                  <i class="fab fa-1x fas fa-caret-down"></i>
                </a>
                
                <!-- @foreach (['error', 'success'] as $status)
                    @if(Session::has($status))
                        <p class="alert alert-{{$status}}"  >{{ Session::get($status) }}</p>
                    @endif
                @endforeach -->
                
                <div id="login_container">
                      <?php  
                     
                        if(Auth::guard('customer')->user()==''){ ?>
                        <div class="login_items" data-toggle="modal" data-target=".modal-signup">
                          <i class="fab fa-1x fas fa-user mx-1"></i> Login/Signup
                        </div>
                          
                        <?php } else if(Auth::guard('customer')->user() !=''){ ?>
                          <div class="login_items"  >
                          <i class="fab fa-1x fas fa-user mx-1"></i>   {{Auth::guard('customer')->user()->name}}    
                          </div>
                          <div class="login_items"  >
                          <i class="fab fa-1x fas fa-user mx-1"></i>  <a href="{{route('customer_home')}}" class="text-dark text-decoration-none">Dashboard</a>
                          </div>
                          <div class="login_items"  >
                          <i class="fab fa-1x fas fa-user mx-1"></i>  <a href="{{route('logout')}}" class="text-dark text-decoration-none">Logout</a>
                          </div>
                      <?php }
                      ?>
                  <div class="login_items">
                    <i class="fab fa-1x fas fas fas fa-percentage mx-1"></i
                    ><a href="/giftcard" class="text-dark text-decoration-none">Travel Offers</a>
                  </div>
                  <div
                    class="login_items"
                    data-toggle="modal"
                    data-target=".modal-refer"
                  >
                    <i class="fab fa-1x fas fas fas fa-award mx-1"></i>Refer &
                    Earn
                  </div>
                </div>
              </div>

              
              @if(Session::has('success'))

                <div class="alert alert-success" setTimeout() id="alert">
                <strong>Success:</strong> {{Session::get('success')}}
                </div>

                @elseif(session('error'))
                <div class="alert alert-danger" id="alert">

                <strong>Error:</strong>{{Session::get('error')}}
                </div>
                @endif
                    
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script type="text/javascript">
                    setTimeout(function() {
                        $('#alert').fadeOut('fast');
                    }, 1000);
                </script>

            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- </div> -->
    <!-- Navbar End -->
    
    @yield('content')

    <!-- Footer Start -->
     
   <div
      class="container-fluid bg-dark text-white-50 events px-sm-3 px-lg-5"
      style="margin-top: 70px"
    >
    <div class="container">
      <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
          <a href="{{route('home')}}" class="navbar-brand mb-3">
            <img src="{{ asset('uploads/'.$global_setting_data->logo) }}" width="150px" />
          </a>
          <p>
          {!! $global_setting_data->description !!}
          </p>
          <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">
            Follow Us
          </h6>
          <div class="d-flex justify-content-start">
            <a class="btn btn-outline-primary btn-square mr-2" href="{!! $global_setting_data->twitter !!}">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="btn btn-outline-primary btn-square mr-2" href="{!! $global_setting_data->facebook !!}">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="btn btn-outline-primary btn-square mr-2" href="{!! $global_setting_data->linkedin !!}">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="btn btn-outline-primary btn-square" href="{!! $global_setting_data->pinterest !!}">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">
            Our Services
          </h5>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white-50 mb-2" href="/hotel">
              <i class="fa fa-angle-right mr-2"></i>
              Hotels
            </a>
            <a class="text-white-50 mb-2" href="/flight">
              <i class="fa fa-angle-right mr-2"></i>
              Flight
            </a>
            <a class="text-white-50 mb-2" href="{{route('cabs')}}">
              <i class="fa fa-angle-right mr-2"></i>
              Cabs
            </a>
            <a class="text-white-50 mb-2" href="{{route('helicopter')}}">
              <i class="fa fa-angle-right mr-2"></i>
              Helicopter
            </a>
            <a class="text-white-50 mb-2" href="{{route('package')}}">
              <i class="fa fa-angle-right mr-2"></i>
              Holiday Packages
            </a>
            <a class="text-white-50 mb-2" href="{{route('forex')}}">
              <i class="fa fa-angle-right mr-2"></i>
              Forex
            </a>
            <a class="text-white-50" href="/activities">
              <i class="fa fa-angle-right mr-2"></i>
              Activities
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">
            Usefull Links
          </h5>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white-50 mb-2" href="{{route('home')}}">
              <i class="fa fa-angle-right mr-2"></i>
              Home
            </a>
            <a class="text-white-50 mb-2" href="{{route('about')}}">
              <i class="fa fa-angle-right mr-2"></i>
              About Us
            </a>
            <a class="text-white-50 mb-2" href="{{route('contac')}}">
              <i class="fa fa-angle-right mr-2"></i>
              Contact Us
            </a>
            <a class="text-white-50 mb-2" href="">
              <i class="fa fa-angle-right mr-2"></i>
              Destinations
            </a>
            <a class="text-white-50 mb-2" href="">
              <i class="fa fa-angle-right mr-2"></i>
              Blogs
            </a>
            <a class="text-white-50 mb-2" href="{{route('privacy-policy')}}">
              <i class="fa fa-angle-right mr-2"></i>
              Privacy Policy
            </a>
            <a class="text-white-50" href="{{route('term-conditions')}}">
              <i class="fa fa-angle-right mr-2"></i>
              Terms of Use
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">
            Contact Us
          </h5>
          <p>
            <i class="fa fa-map-marker-alt mr-2"></i>
             {!! $global_setting_data->footer_address !!}
          </p>
          <p>
            <i class="fa fa-phone-alt mr-2"></i>
            <a href="tel:{!! $global_setting_data->footer_phone !!}">{!! $global_setting_data->footer_phone !!}</a>
          </p>
          <p>
            <i class="fa fa-envelope mr-2"></i>
            
            <a href="mailto:{!! $global_setting_data->footer_email !!}">{!! $global_setting_data->footer_email !!}</a>
          </p>
          <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">
            Newsletter
          </h6>
          <div class="w-100">
          <form method="post" action="{{route('newsletter_store')}}">
              @csrf
            <div class="input-group">
              <input type="text" name="email" class="form-control border-light" style="padding: 25px;" placeholder="Your Email" />
              <div class="input-group-append">
                <button class="btn btn-primary king px-3">Subscription</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    
    <!-- Footer End -->
    <!-- Modal -->
    <div
      class="modal fade modal-refer"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <!-- <h5 class="modal-title text-white" id="exampleModalLongTitle">
              Refer And Earn
            </h5> -->
            <h3 class="refer-desc">Refer & Earn</h3>
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
            <!-- Refer and earn start -->
            <div class="container-fluid">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-sm-6 m-auto text-center">
                    <p class="refer_desc lh-base">
                      Share your Referal code and earn 100% of loyalty test and
                      get 20% off on next booking.
                    </p>
                    <input
                      disabled
                      value="Page1Travels"
                      class="p-3 text-center"
                      id="myInput"
                    />
                    <i
                      class="fa fa-1x far fa-copy copy_text"
                      onclick="copytext()"
                    ></i>
                    <div class="py-3">
                      <h6 class="text-dark text-center">Or Share Using</h6>
                    </div>
                    <div class="container py-2">
                      <div class="social_icons">
                        <div class="mx-2">
                          <a href="#"
                            ><i class="fab fa-1x fa-twitter text-dark"></i
                          ></a>
                        </div>
                        <div class="mx-2">
                          <a href="#"
                            ><i
                              class="fab fa-1x fab fa-facebook-f text-dark"
                            ></i
                          ></a>
                        </div>
                        <div class="mx-2">
                          <a href="#"
                            ><i class="fab fa-1x fab fa-instagram text-dark"></i
                          ></a>
                        </div>
                        <div class="mx-2">
                          <a href="#"
                            ><i
                              class="fab fa-1x fab fa-linkedin-in text-dark"
                            ></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
          
        </div>
      </div>
    </div>
    <!-- signup modal  fdgsfdgfdg start-->
    <div
      class="modal fade modal-signup"
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
              Create Account
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
              Signup to keep exploring amazing destinations around the World.
            </p>
            <form action="{{route('registration_submit')}}" method="post" onsubmit="submithandler()">
                  @csrf
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input name="name"
                  type="text"
                  class="input_login"
                  placeholder="Full Name*"
                  id="name"
                  required
                />
                
              </div>
              
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas far fa-envelope m-3"></i>
                <input name="email"
                  type="email"
                  class="input_login"
                  placeholder="Email*"
               
                  required
                />
                
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fas fa-mobile m-3"></i>
                <input name="mobile"
                  type="phone"
                  class="input_login"
                  placeholder="Mobile Number*"
                  id="phone_number"
                  maxlength="10" 
                  required
                />
                
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fas fa-lock m-3"></i>
                <input name = "password"
                  type="password"
                  class="input_login"
                  placeholder="Password*"
                  id="password"
                  required
                />
                
              </div>
              <input
                type="checkbox"
                class="mx-1"
                onclick="togglepassword()"
              />Show Password
              <div class="text-center my-2">
                <button type="submit" name="submit" class="btn btn-primary">
                  Create Account
                </button>
                <img src="{{asset('dis/img/whatsapp.svg')}}" class="image_icon" />
              </div>
              <small
                >Already a member ? <a
                  href="#"
                  class="text-decoration-none"
                  data-toggle="modal"
                  data-target=".modal-login"
                  data-dismiss="modal"
                  >Log in</a
                >
              </small>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Signup modal  end-->





    <!-- Login modal start -->
    <div
      class="modal fade modal-login"
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
              Sign in into Your Account
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
            <p class="text-center">Please enter below details to login.</p>
            <form action="{{route('login_submit')}}" method="post" onsubmit="submithandler()">
                  @csrf 
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas far fa-envelope m-3"></i>
                <input 
                  name = "email"
                  type="text"
                  class="input_login"
                  placeholder="Email Id"
                 
                  required
                />
               
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fas fa-lock m-3"></i>
                <input 
                  name="password"
                  type="password"
                  class="input_login"
                  placeholder="Password*"
                  id="mypassword"
                  required
                />
                
              </div>

              <input
                type="checkbox"
                class="mx-1"
                onclick="loginpassword()"
              />Show Password
              <div class="text-center my-2">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
              <div class="text-right">
                <a
                  class="text-decoration-none pointer"
                  data-toggle="modal"
                  data-target=".modal-forgot"
                  data-dismiss="modal"
                  >Forgot Password ?</a
                >
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
    <div
      class="modal fade modal-forgot"
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
              Forgot Password
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
            <p class="text-center">Enter Details to Reset Your password.</p>
            <form action="{{route('forget_password_submit')}}" method="post" onsubmit="submithandler()">
            @csrf
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas far fa-envelope m-3"></i>
                <input name="email"
                  type="text"
                  name="email"
                  class="input_login"
                  placeholder="Email Id"
                 
                  required
                />
              </div>

              <div class="text-center my-2">
                <button type="submit" class="btn btn-primary">Send Email</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Forgot password end  -->
    <!-- Back to Top -->
    <div>
        <a href="https://api.whatsapp.com/send/?phone=%2B916006727854&text&type=phone_number&app_absent=0" class="btn btn-lg btn-primary btn-lg-square sticky_img">
          <i class="fab fa-1x fab fa-whatsapp text-white fs-25"></i>
        </a>
      </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('dis/js/easing.min.js')}}"></script>
    <script src="{{asset('dis/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('dis/js/moment.min.js')}}"></script>
    <script src="{{asset('dis/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('dis/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Contact Javascript File -->
    <script src="{{asset('dis/js/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('dis/js/contact.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('dis/js/main.js')}}"></script>
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
    <!-- login-container -->
    <script>
     
      // toggle password
      function togglepassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }

      // login tooglepassword
      function loginpassword() {
        const y = document.getElementById("mypassword");
        if (y.type === "password") {
          y.type = "text";
        } else {
          y.type = "password";
        }
      }

      function submithandler(e) {
        e.preventDefault();
      }
    </script>
    <script></script>
    <script type="text/javascript">
        const tabs = document.querySelectorAll('[data-tab-value]')
        const tabInfos = document.querySelectorAll('[data-tab-info]')

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = document
                    .querySelector(tab.dataset.tabValue);

                tabInfos.forEach(tabInfo => {
                    tabInfo.classList.remove('active')
                })
                target.classList.add('active');
            })
        })
    </script>
    <script>
        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace("change_border", "border-none");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " change_border";
        }
        function FriendsCity(evt, FriendsName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("Cities");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("internationalfriend_package");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" change_border", "border-none");
            }
            document.getElementById(FriendsName).style.display = "block";
            evt.currentTarget.className += " change_border";
        }
        function soloCity(evt, soloName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("towns");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("internationalsolo_package");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" change_border", "border-none");
            }
            document.getElementById(soloName).style.display = "block";
            evt.currentTarget.className += " change_border";
        }
        function familyCity(evt, familyName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("towns-city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("internationalfamily_package");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" change_border", "border-none");
            }
            document.getElementById(familyName).style.display = "block";
            evt.currentTarget.className += " change_border";
        }

    </script>
    <script>
        function copytext() {
            var copyText = document.getElementById('myInput')

            copyText.select()
            copyText.setSelectionRange(0, 99999)

            navigator.clipboard.writeText(copyText.value)

            alert('Copied the text: ' + copyText.value)
        }
    </script>

 <script>
    // onload script   
    function login() {
      document.getElementById("login_container").style.display = "none";
    }
    function logincontainer() {
      document.getElementById("login_container").style.display = "block";
    }
  </script>
    <script>
        function packages(x) {
            if (x == 1) {
                document.getElementById("honeymoonpackage").style.display = "block";
                document.getElementById("solopackage").style.display = "none";
                document.getElementById("familypackage").style.display = "none";
                document.getElementById("friendspackage").style.display = "none";
            } else if (x == 2) {
                document.getElementById("honeymoonpackage").style.display = "none";
                document.getElementById("solopackage").style.display = "block";
                document.getElementById("familypackage").style.display = "none";
                document.getElementById("friendspackage").style.display = "none";

            } else if (x == 3) {
                document.getElementById("honeymoonpackage").style.display = "none";
                document.getElementById("solopackage").style.display = "none";
                document.getElementById("familypackage").style.display = "block";
                document.getElementById("friendspackage").style.display = "none";
            }
            else if (x == 4) {
                document.getElementById("honeymoonpackage").style.display = "none";
                document.getElementById("solopackage").style.display = "none";
                document.getElementById("familypackage").style.display = "none";
                document.getElementById("friendspackage").style.display = "block";
            }
            else {
                document.getElementById("honeymoonpackage").style.display = "none";
                document.getElementById("solopackage").style.display = "none";
                document.getElementById("familypackage").style.display = "none";
                document.getElementById("friendspackage").style.display = "block";
            }
        }


        function countryselection_package(x) {
            if (x == 0) {
                document.getElementById("International_honeymoonpackage").style.display = "block"
                document.getElementById("Domestic_honeymoonpackage").style.display = "none"
                document.getElementById("International_tabs").style.backgroundColor = "#f2940c"

            }
            else {
                document.getElementById("International_honeymoonpackage").style.display = "none"
                document.getElementById("Domestic_honeymoonpackage").style.display = "block"
                document.getElementById("International_tabs").style.backgroundColor = "#fff"
                document.getElementById("Domestic_tabs").style.backgroundColor = "#f2940c"

            }

        }
    </script>
    <script>
        function openform() {
            document.getElementById("myForm").style.display = "block";
        }
    </script>
  </body>
</html>
