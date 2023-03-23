@extends('front.layout.app')
@section('content')

<body onload="login()">
    <!-- Navbar Start -->
    <div id="header"></div>
    <!-- Navbar End -->

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
                            <span class="text-primary">30% OFF</span>
                            ON RESORT'S
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- journey begins -->
    <div class="">
        <div class=" container-fluid events">
            <div class="container">

                <div class="text-center">
                    <p class="text-primary">Resort's PACKAGES</p>
                    <h1>Resort's Listing Page</h1>
                    @if(Session::has('message'))
                      <p class="alert {{ Session::get('alert-class', 'alert-info') }}" id="successMessage">{{ Session::get('message') }}</p>
                    @endif
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <script type="text/javascript">
                    setTimeout(function() {
                        $('#successMessage').fadeOut('fast');
                    }, 3000);
                    </script>
                </div>

            </div>
        </div>
    </div>
    <!-- journey ends -->
    <div id="honeymoonpackage" style="display: block;">
        <div class="container-fluid events">
            <div class="container">

                <!-- tabs -->
                <div class="text-center">
                    <div class="mb-5">
                        <button class="tablink booking_tabs change_border p-2"
                            onclick="openCity(event,'International_honeymoonpackage')">
                            International
                        </button>
                        <button class="tablink booking_tabs p-2 border-none"
                            onclick="openCity(event,'Domestic_honeymoonpackage')">
                            Domestic
                        </button>
                    </div>
                </div>

                <!-- filters start -->
                <div class="container">
                    <div class="search-hotels room-search pattern">
                        <div class="search-room-title">
                            <h5>Choose your room</h5>
                        </div>

                        <div class="container">
                            <div class="row">
                                <form method="post">
                                    <div class="icon_input mt-3">
                                        <i class="fas fa-1x fas fas fa-location-arrow "
                                            style="margin-top: 5px;margin-left:4px"></i>
                                        <input type="text" placeholder="Destination" class="form_control">
                                    </div>

                                </form>
                            </div>
                            <div class="row my-4">
                                <div class="d-flex">
                                    <div class="icon_input mr-2">
                                        <i class="fas fa-1x fas fas fa-calendar-alt " style="margin-left:4px"></i>
                                        <input class="form_control" name="date" type="text" onfocus="(this.type='date')"
                                            onblur="if(!this.value)this.type='text'" placeholder="Arival Date">
                                    </div>
                                    <div class="icon_input mr-2">
                                        <i class="fas fa-1x fas fas fa-calendar-alt" style="margin-left:4px"></i>
                                        <input class="form_control" name="date" type="text" onfocus="(this.type='date')"
                                            onblur="if(!this.value)this.type='text'" placeholder="Departure Date">
                                    </div>
                                    <div class="icon_input mr-2">
                                        <i class="fas fa-1x fas fas fa-user " style="margin-left:4px"></i>
                                        <select class="form_control" name="cars" id="cars" style="width: 120px;">
                                            <option value="volvo">Adult</option>
                                            <option value="saab">1</option>
                                            <option value="opel">2</option>
                                            <option value="audi">3</option>
                                            <option value="audi">4</option>
                                            <option value="audi">5</option>
                                        </select>
                                    </div>
                                    <div class="icon_input mr-2">
                                        <i class="fas fa-1x fas fas fa-user " style="margin-left:4px"></i>
                                        <select class="form_control" name="cars" id="cars" style="width: 120px;">
                                            <option value="volvo">Child</option>
                                            <option value="saab">1</option>
                                            <option value="opel">2</option>
                                            <option value="audi">3</option>
                                            <option value="audi">4</option>
                                            <option value="audi">5</option>
                                        </select>
                                    </div>
                                    <div class="icon_input mr-2">
                                        <i class="fas fa-1x fas fas fa-home " style="margin-left:4px"></i>
                                        <select class="form_control" name="cars" id="cars" style="width: 120px;">
                                            <option value="volvo">Rooms</option>
                                            <option value="saab">1</option>
                                            <option value="opel">2</option>
                                            <option value="audi">3</option>
                                            <option value="audi">4</option>
                                            <option value="audi">5</option>
                                        </select>
                                    </div>


                                    <div>
                                        <button class="btn-primary list_bookbutton " href="" data-toggle="modal"
                                            data-target=".modal-booking ">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- filters ends -->

                <div class="city" id="International_honeymoonpackage">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card pb-2">
                                <img src="{{asset('dis/img/package-3.jpg')}}" />
                                <div class=" p-4 text-center">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <a href="./resort.html" class="text-decoration-none">
                                                <h5 class="fw-bold text-left links">Grand Peak Resort</h5>
                                            </a>
                                            <p class=" text-left hotel_text">D-320 sector 63, NOIDA ,india</p>
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
                                            <h5 class="mt-2 package_price">$350</h5>
                                        </div>
                                        <div class=""><button class="btn btn-primary" href="" data-toggle="modal"
                                                data-target=".modal-booking ">Book Now</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card pb-2">
                                <img src="{{asset('dis/img/package-1.jpg')}}" />
                                <div class=" p-4 text-center">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <a href="./resort.html" class="text-decoration-none">
                                                <h5 class="fw-bold text-left links">Grand Peak Resort</h5>
                                            </a>
                                            <p class=" text-left hotel_text">D-320 sector 63, NOIDA ,india</p>
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
                                            <h5 class="mt-2 package_price">$350</h5>
                                        </div>
                                        <div class=""><button class="btn btn-primary" href="" data-toggle="modal"
                                                data-target=".modal-booking ">Book Now</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card pb-2">
                                <img src="{{asset('dis/img/package-5.jpg')}}" />
                                <div class=" p-4 text-center">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <a href="./resort.html" class="text-decoration-none">
                                                <h5 class="fw-bold text-left links">Grand Peak Resort</h5>
                                            </a>
                                            <p class=" text-left hotel_text">D-320 sector 63, NOIDA ,india</p>
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
                                            <h5 class="mt-2 package_price">$350</h5>
                                        </div>
                                        <div class=""><button class="btn btn-primary" href="" data-toggle="modal"
                                                data-target=".modal-booking ">Book Now</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-sm-4">
                                    <div class="card pb-2">
                                        <img src="{{asset('dis/img/package-6.jpg')}}" />
                                        <div class=" p-4 text-center">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <a href="./resort.html" class="text-decoration-none">
                                                        <h5 class="fw-bold text-left links">Grand Peak Resort</h5>
                                                    </a>
                                                    <p class=" text-left hotel_text">D-320 sector 63, NOIDA ,india</p>
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
                                                    <h5 class="mt-2 package_price">$350</h5>
                                                </div>
                                                <div class=""><button class="btn btn-primary" href=""
                                                        data-toggle="modal" data-target=".modal-booking ">Book
                                                        Now</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card pb-2">
                                        <img src="{{asset('dis/img/package-5.jpg')}}" />
                                        <div class=" p-4 text-center">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <a href="./resort.html" class="text-decoration-none">
                                                        <h5 class="fw-bold text-left links">Grand Peak Resort</h5>
                                                    </a>
                                                    <p class=" text-left hotel_text">D-320 sector 63, NOIDA ,india
                                                    </p>
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
                                                    <h5 class="mt-2 package_price">$350</h5>
                                                </div>
                                                <div class=""><button class="btn btn-primary" href=""
                                                        data-toggle="modal" data-target=".modal-booking ">Book
                                                        Now</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card pb-2">
                                        <img src="{{asset('dis/img/package-2.jpg')}}" />
                                        <div class=" p-4 text-center">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <a href="./resort.html" class="text-decoration-none">
                                                        <h5 class="fw-bold text-left links">Grand Peak Resort</h5>
                                                    </a>
                                                    <p class=" text-left hotel_text">D-320 sector 63, NOIDA ,india
                                                    </p>
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
                                                    <h5 class="mt-2 package_price">$350</h5>
                                                </div>
                                                <div class=""><button class="btn btn-primary" href=""
                                                        data-toggle="modal" data-target=".modal-booking ">Book
                                                        Now</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="city" id="Domestic_honeymoonpackage" style="display: none;">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card pb-2">
                                <img src="{{asset('dis/img/package-4.jpg')}}" />
                                <div class=" p-4 text-center">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <a href="./resort.html" class="text-decoration-none">
                                                <h5 class="fw-bold text-left links">Grand Peak Resort</h5>
                                            </a>
                                            <p class=" text-left hotel_text">D-320 sector 63, NOIDA ,india</p>
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
                                            <h5 class="mt-2 package_price">$350</h5>
                                        </div>
                                        <div class=""><button class="btn btn-primary" href="" data-toggle="modal"
                                                data-target=".modal-booking ">Book Now</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card pb-2">
                                <img src="{{asset('dis/img/package-6.jpg')}}" />
                                <div class=" p-4 text-center">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <a href="./resort.html" class="text-decoration-none">
                                                <h5 class="fw-bold text-left links">Grand Peak Resort</h5>
                                            </a>
                                            <p class=" text-left hotel_text">D-320 sector 63, NOIDA ,india</p>
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
                                            <h5 class="mt-2 package_price">$350</h5>
                                        </div>
                                        <div class=""><button class="btn btn-primary" data-toggle="modal"
                                                data-target=".modal-booking ">Book Now</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card pb-2">
                                <img src="{{asset('dis/img/package-1.jpg')}}" />
                                <div class=" p-4 text-center">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <a href="./resort.html" class="text-decoration-none">
                                                <h5 class="fw-bold text-left links">Grand Peak Resort</h5>
                                            </a>
                                            <p class=" text-left hotel_text">D-320 sector 63, NOIDA ,india</p>
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
                                            <h5 class="mt-2 package_price">$350</h5>
                                        </div>
                                        <div class=""><button class="btn btn-primary" href="" data-toggle="modal"
                                                data-target=".modal-booking ">Book Now</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-sm-4">
                                    <div class="card pb-2">
                                        <img src="{{asset('dis/img/package-4.jpg')}}" />
                                        <div class=" p-4 text-center">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <a href="./resort.html" class="text-decoration-none">
                                                        <h5 class="fw-bold text-left links">Grand Peak Resort</h5>
                                                    </a>
                                                    <p class=" text-left hotel_text">D-320 sector 63, NOIDA ,india</p>
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
                                                    <h5 class="mt-2 package_price">$350</h5>
                                                </div>
                                                <div class=""><button class="btn btn-primary" href=""
                                                        data-toggle="modal" data-target=".modal-booking ">Book
                                                        Now</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card pb-2">
                                        <img src="{{asset('dis/img/package-5.jpg')}}" />
                                        <div class=" p-4 text-center">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <a href="./resort.html" class="text-decoration-none">
                                                        <h5 class="fw-bold text-left links">Grand Peak Resort</h5>
                                                    </a>
                                                    <p class=" text-left hotel_text">D-320 sector 63, NOIDA ,india</p>
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
                                                    <h5 class="mt-2 package_price">$350</h5>
                                                </div>
                                                <div class=""><button class="btn btn-primary" href=""
                                                        data-toggle="modal" data-target=".modal-booking ">Book
                                                        Now</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card pb-2">
                                        <img src="{{asset('dis/img/package-3.jpg')}}" />
                                        <div class=" p-4 text-center">
                                            <div class="d-flex justify-content-between">
                                                <div class="">
                                                    <a href="./resort.html" class="text-decoration-none">
                                                        <h5 class="fw-bold text-left links">Grand Peak Resort</h5>
                                                    </a>
                                                    <p class=" text-left hotel_text">D-320 sector 63, NOIDA ,india</p>
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
                                                    <h5 class="mt-2 package_price">$350</h5>
                                                </div>
                                                <div class=""><button class="btn btn-primary" href=""
                                                        data-toggle="modal" data-target=".modal-booking ">Book
                                                        Now</button></div>
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
    <div class="text-center">
        <a class="btn btn-primary" href="">View More</a>
    </div>

    <!-- booking modal -->
    <div class="modal fade modal-booking" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="mysmallmodal" aria-hidden="true">
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

        <form action="{{route('resortstays')}}" method="POST" class="p-4">
          @csrf
          
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