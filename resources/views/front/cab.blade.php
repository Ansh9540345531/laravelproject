@extends('front.layout.app')
@section('content')


<body onload="login()">
    <!-- Navbar Start -->
    <div id="header"></div>
    <!-- banner start -->
    <div class="container-fluid bg-cabsregistrationbanner py-5 mb-5" style="background-image:url({{asset('/dis/img/events/Banner-Strip.jpg')}}); background-repeat:no-repeat center center; background-size: cover;">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="mb-4">
              <h6
                class="text-primary text-uppercase"
                style="letter-spacing: 5px;"
              >
                Mega Offer
              </h6>
              <h1 class="text-white">
                <span class="text-primary">30% OFF</span>
                ON CABS
              </h1>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- main body start -->
    <div class="container">
      <div class="main-wrapperdiv spaceup_down">
        <div class="">
          <div>
            <h1 class="mb-5 cabs_headingfont">Online Cab Booking Made Easy</h1>
            <p class="cabs_parafont">
              <span id="more">
                When it comes to traveling, safety and comfort are the utmost
                priority for anyone. A comfortable and secure journey makes a
                trip memorable.Online cab booking can be a bit of a hassle at
                times. Choosing the right cab service makes all the difference.
                We want you to enjoy your trips without the stress of safety,
                and discomfort of driving long distances yourself. Whether you
                are planning a solo trip, a weekend retreat with friends, or a
                vacation with your family, Page1 Travels’s cab services can make
                your journey smooth. Whether you want to take a cab from the
                airport, railway station, bus station, or even for the whole
                trip, Page1 Travels offers you a seamless cab booking
                experience. We provide you with dedicated cabs based on the
                number of passengers traveling and the kind of ride you want.
                All you need to do is select your pick-up location, preferred
                destination, and the number of passengers. You must also select
                if you are booking the cab for a one-way trip or a round trip
                and voila your online cab booking is done.
              </span>
            </p>
            <div class="text-left">
              <button class="btn btn-primary">Read More</button>
            </div>
          </div>
        </div>
        <div class="form-margineup">
          <div class="container">
            <div class="text-center">
              <div class="border border-primary">
                <div
                  class="d-flex text-center justify-content-center align-items-center p-2 mt-2"
                >
                  <div
                    class="booking_tabs align-items-center"
                    id="oneway_tab"
                    style="
                      border: 1px solid #f2940c;
                      background-color: #f2940cb2;
                      color: #ffffff;
                      border-radius: 8px;
                    "
                  >
                    <label
                      for="oneway"
                      class="pointer p-2 button_cabhover"
                      onclick="toggle(0)"
                      checked
                    >
                      One-Way
                    </label>
                  </div>
                  <div class="booking_tabs text-center ms-2" id="twoway_tab">
                    <label
                      for="roundtrip"
                      class="pointer p-2 button_cabhover"
                      onclick="toggle(1)"
                    >
                      Round-Trip
                    </label>
                  </div>
                </div>
                <div class="">
                  <div>
                    <div class="" id="singel" style="display: block;">
                      <div>
                        <form action="{{route('cabsubmit')}}"  method="POST" class="p-4" style="display: grid;">
                            @csrf  
                            @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}" id="successMessage">{{ Session::get('message') }}</p>
                            @endif
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                            <script type="text/javascript">
                            setTimeout(function() {
                                $('#successMessage').fadeOut('fast');
                            }, 3000);
                            </script>
                        <div class="input_modallogin mb-3">
                            <i class="fas fa-1x fas fa-location-arrow m-3"></i>
                            <input  type="text" name="pickup_location"  placeholder="Pickup Location"  class="input_login" required/>
                          </div>
                          <div class="input_modallogin mb-3"> 
                            <i class="fas fa-1x fas fa-location-arrow m-3"></i>
                            <input   type="text" name="drop_location"  placeholder="Drop Location"   class="input_login" required/>
                          </div>
                          <div class="input_modallogin mb-3">
                            <i class="fas fa-1x fas fa-phone icon_rotate m-3"></i>
                            <input type="phone" name="mobile" placeholder="Phone Number"  class="input_login" required/>
                          </div>
                          <div class="input_modallogin mb-3">
                            <i class="fas fa-1x fas fa-user m-3"></i>
                            <input  type="number" min="1" max="50" name="person" placeholder="Number of Passengers"  class="input_login" required/>
                          </div>
                          <div class="input_modallogin mb-3">
                            <i class="fas fa-1x fas fa-calendar m-3"></i>
                            <input  type="text"  name="pickup_date" placeholder="Pickup date"
                              class="input_login"  onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" required/>
                          </div>
                          <div class="input_modallogin mb-3">
                            <i class="fas fa-1x fas fa-clock m-3"></i>
                            <input   type="text"    name="pickup_time" placeholder="Pickup Time" class="input_login" onfocus="(this.type='time')" onblur="if(!this.value)this.type='text'" required/>
                          </div>
                        
                          <input type="submit" name="submit" class="btn btn-primary p-2" value="Book Now">
                          <!-- <button type="submit" class="btn btn-primary p-2">
                            Book Here
                          </button> -->
                        </form>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div>
                      <div id="round-trip" style="display: none;">
                        <div>
                          <form action="{{route('cabformsubmit')}}"  method="post" class="p-4" style="display: grid;">
                          @csrf
                          @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                            @endif
                            <div class="input_modallogin mb-3">
                              <i
                                class="fas fa-1x fas fa-location-arrow m-3"
                              ></i>
                              <input type="text" name="pickup_location" placeholder="Pickup Location" class="input_login" required />
                            </div>
                            <div class="input_modallogin mb-3">
                              <i class="fas fa-1x fas fa-location-arrow m-3"></i>
                              <input  type="text" name="drop_location"  placeholder="Drop Location" class="input_login" required />
                            </div>
                            <div class="input_modallogin mb-3">
                              <i class="fas fa-1x fas fa-phone icon_rotate m-3" ></i>
                              <input type="phone" name="mobile" placeholder="Phone Number" class="input_login" required  />
                            </div>
                            <div class="input_modallogin mb-3">
                              <i class="fas fa-1x fas fa-user m-3"></i>
                              <input  type="number" name="person"  placeholder="Number of Passengers" class="input_login" required />
                            </div>
                            <div class="input_modallogin mb-3">
                              <i class="fas fa-1x fas fa-calendar m-3"></i>
                              <input type="text"  name="pickup_date" placeholder="Pickup date" class="input_login"  onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" required />
                            </div>
                            <div class="input_modallogin mb-3">
                              <i class="fas fa-1x fas fa-calendar m-3"></i>
                              <input type="text" name="return_date" placeholder="Return date"  class="input_login" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" required />
                            </div>
                            <div class="input_modallogin mb-3">
                              <i class="fas fa-1x fas fa-clock m-3"></i>
                              <input  type="text"  name="time" placeholder="Pickup Time" class="input_login"  onfocus="(this.type='time')" onblur="if(!this.value)this.type='text'" required />
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary p-2" value="Book Now">
                            <!-- <button type="submit" class="btn btn-primary p-2">
                              Book Here
                            </button> -->
                          </form>
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

    <!-- cabs banner start  -->
    <div class="container-fluid text-center spaceup_down">
      <div class="row border my-5 p-5" style="background-color: #f2940c;">
        <div class="col-sm-3 cab_rightborder">
          <div class="text-center mt-5 mb-3 pb-3">
            <h1 class="text-white">98+</h1>
            <h2 class="heading_cabsstyle">Experienced Drivers</h2>
          </div>
        </div>
        <div class="col-sm-3 cab_rightborder">
          <div class="text-center mt-5 mb-3 pb-3">
            <h1 class="text-white">135+</h1>
            <h2 class="heading_cabsstyle">Available Cabs</h2>
          </div>
        </div>
        <div class="col-sm-3 cab_rightborder">
          <div class="text-center mt-5 mb-3 pb-3">
            <h1 class="text-white">14+</h1>
            <h2 class="heading_cabsstyle">Years with Customers</h2>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="text-center mt-5 mb-3 pb-3">
            <h1 class="text-white">29+</h1>
            <h2 class="heading_cabsstyle">Exciting Locations</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- cabs banner end's  -->

    <!-- form open on one way start-->
    <div class="container spaceup_down">
      <div class="text-center mt-5 mb-3 pb-3">
        <p class="text-primary">WELCOME</p>
        <h2>OUR SERVICES</h2>
      </div>
      <p class="text-center">
        Discover special offers and discounts on cab booking at Page1 Travels.
        We offer an extremely user-friendly online cab booking procedure while
        ensuring your complete safety and comfort throughout the journey.
      </p>
      <div class="mt-5">
        <div class="owl-carousel testimonial-carousel">
          <div class="text-center pb-4">
            <img
              class="img-fluid"
              src="{{asset('dis/img/events/airporttransportimg.jpg')}}"
              alt=""
              style="width: 800px; height: 200px;"
            />
            <div class="testimonial-text bg-white p-4 mt-n5">
              <h4 class="mt-5 text-left">Airport Transfer</h4>
              <p class="text-start">
                Our airport transfer service ensures that you can conveniently
                travel from the airport to the city or the other way around.
              </p>
            </div>
          </div>
          <div class="text-center">
            <img
              class="img-fluid"
              src="{{asset('dis/img/events/citytransfer22.webp')}}"
              alt=""
              style="width: 800px; height: 200px;"
            />
            <div class="testimonial-text bg-white p-4 mt-n5">
              <h4 class="mt-5 text-left">City Transfer</h4>
              <p class="text-start">
                If you want to travel to different cities during your trip then
                we have got you covered with our city transfer service.
              </p>
            </div>
          </div>
          <div class="text-center">
            <img
              class="img-fluid"
              src="{{asset('dis/img/events/bookingtaxiimg.jpg')}}"
              alt=""
              style="width: 800px; height: 200px;"
            />
            <div class="testimonial-text bg-white p-4 mt-n5">
              <h4 class="mt-5 text-left">Booking Offer</h4>
              <p class="text-start">
                Be it a one-way ride or a complete round trip, Page1 Travels has
                got exclusive deals and discounts for everyone.
              </p>
            </div>
          </div>
          <div class="text-center">
            <img
              class="img-fluid"
              src="{{asset('dis/img/events/baggageimg.jpg')}}"
              alt=""
              style="width: 800px; height: 200px;"
            />
            <div class="testimonial-text bg-white p-4 mt-n5">
              <h4 class="mt-5 text-left">Baggage Transport</h4>
              <p class="text-start">
                Safely transport your baggage on your trips with our affordable
                and reliable baggage transportation service.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- form open on one way end-->

    <!-- highlights start -->
    <div class="container space_between border spaceup_down p-3">
      <div class="row">
        <div>
          <h1 class="my-5">We ensure</h1>
        </div>
        <div class="row d-flex">
          <hr style="width: 110%;" />
          <div class="col-sm-4">
            <ul class="content m-auto">
              <li class="my-2">Safety</li>
              <li>Proper Hygiene</li>
              <li class="my-2">Convenience</li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul class="content m-auto">
              <li class="my-2">Affordable Prices</li>
              <li>Professionalism</li>
              <li class="my-2">Comfort</li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul class="content m-auto">
              <li class="my-2">Luggage Security</li>
              <li>Punctuality</li>
              <li class="my-2">Enjoyment</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!-- FAQs start -->
    <div class="container bg-light clearfix spaceup_down">
      <div class="row">
        <div class="col-sm-12 m-auto">
          <div class="text-center py-5">
            <h2 class="f-40">Frequently Asked Question ?</h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="false"
                  aria-controls="collapseOne"
                >
                  On my vacation, what kind of meals can I expect to eat?
                </button>
              </h2>
              <div
                id="collapseOne"
                class="accordion-collapse collapse"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  <p>
                    Food is one of the most exciting parts of a trip. The local
                    food primarily depends on the destination you choose to
                    travel to. Moreover, your daily meals depend on the budget
                    and type of package you select.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo"
                >
                  What services does Travel1 Page provide?
                </button>
              </h2>
              <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  <p>
                    Kindly visit our Services page if you wish to know about our
                    services.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree"
                >
                  How safe is my luggage whilst on the trip?
                </button>
              </h2>
              <div
                id="collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="headingThree"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  <p>
                    We take every measure to keep your valuables safe while
                    traveling. But still, both lockable luggage and travel
                    insurance are a must to avoid any loss.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item question4">
              <h2 class="accordion-header" id="headingFour">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFour"
                  aria-expanded="false"
                  aria-controls="collapseFour"
                >
                  How can I know about the current offers?
                </button>
              </h2>
              <div
                id="collapseFour"
                class="accordion-collapse collapse"
                aria-labelledby="headingFour"
                data-bs-parent="#accordionExample"
              >
                <div class="accordion-body">
                  <p>
                    For current offers and packages kindly visit the Packages
                    section on our website. You can find all related information
                    on that page. Moreover, for further details, you can Contact
                    Us.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FAQs End -->

    <!-- main body end -->
    <script>
      function toggle(x) {
        if (x == 0) {
          document.getElementById('round-trip').style.display = 'none'
          document.getElementById('singel').style.display = 'block'
          document.getElementById('oneway_tab').style.border =
            '2px solid #f2940c'
          document.getElementById('oneway_tab').style.color = '#ffffff'
          document.getElementById('oneway_tab').style.backgroundColor =
            '#f2940cb2'
          document.getElementById('oneway_tab').style.borderRadius = '8px'
          document.getElementById('twoway_tab').style.color = ''
          document.getElementById('twoway_tab').style.backgroundColor = ''
          document.getElementById('twoway_tab').style.border = ''
        } else {
          document.getElementById('twoway_tab').style.border =
            '2px solid #f2940c'
          document.getElementById('twoway_tab').style.color = '#ffffff'
          document.getElementById('twoway_tab').style.backgroundColor =
            '#f2940cb2'
          document.getElementById('oneway_tab').style.color = ''
          document.getElementById('oneway_tab').style.backgroundColor = ''
          document.getElementById('twoway_tab').style.borderRadius = '8px'
          document.getElementById('oneway_tab').style.border = ''
          document.getElementById('round-trip').style.display = 'block'
          document.getElementById('singel').style.display = 'none'
        }
      }
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script>
    $(document).ready(function(){
        $('#form1').on('submit',function(event){
            event.preventDefault();
            var form = $("#form1").serializeArray();
            $.ajax({
                type : 'POST',
                    url : cabsubmit,
                    data : form,
                    success : function(data){
                        console.log(data);
                        alert(data);
                        },
                        error: function(data){
                            alert(data);
                        }
                    });
            });
        });
    
</script> -->

 


@endsection

