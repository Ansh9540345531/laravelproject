@extends('front.layout.app')
@section('content')
  
<body onload="login()">
    <!-- Navbar Start -->
    <div id="header"></div>
    <!-- Navbar End -->
    <div class="container-fluid p-0" >
      <div class="bg_flight" style="background-image:url({{asset('/dis/img/events/flights.webp')}}); background-repeat:no-repeat center center; background-size: cover; ">
        <div class="bg-overlay">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="text-white fs-40">BOOK FLIGHTS</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="flight-booking">
        <div class="selectride">
          <div
            class="mx-2 select_ride"
            id="one-way"
            style="
              color: #ffffff;
              background-color: #f2940c82;
              border-radius: 8px;
            "
          >
            <input
              type="radio"
              id="oneway"
              class="pointer"
              name="trip"
              checked
              onclick="img(0)"
            />
            <label for="oneway" class="pointer">One Way</label>
          </div>
          <div class="mx-2 select_ride" id="two-way">
            <input
              type="radio"
              id="round trip"
              name="trip"
              class="pointer"
              onclick="img(1)"
            />
            <label for="round trip" class="pointer">Round Trip</label>
          </div>
          
        </div>
        <form id="singel" style="display: block">
          <div class="row">
            <div class="col-sm-4 mb-2">
              <div class="">
                <label for="From" class="mb-2">From</label>
                <input type="text" class="forex_input p-1" id="from" />
              </div>
            </div>
            <div class="col-sm-4 mb-2">
              <div>
                <label for="To" class="mb-2">To</label>
                <input type="text" class="forex_input p-1" id="to" />
              </div>
            </div>
            <div class="col-sm-4 mb-2">
              <div>
                <label for="depart" class="mb-2">Depart on</label>
                <input type="date" class="forex_input p-1" id="depart" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 mb-2">
              <div>
                <label for="depart" class="mb-2">Passengers</label>
                <select name="" id="" class="forex_select">
                  <option value="" selected hidden>Select passenger</option>
                  <option value="">Adult</option>
                  <option value="">Child</option>
                  <option value="">Infant</option>
                </select>
              </div>
            </div>

            <div class="col-sm-4 mb-2">
              <div>
                <label for="class" class="mb-2">Class</label>
                <select class="forex_select">
                  <option value="">First Class</option>
                  <option value="">Business Class</option>
                  <option value="">Economy Class</option>
                  <option value="">Economy Premium</option>
                </select>
              </div>
            </div>
            <div
              class="col-sm-4 d-flex justify-content-start align-items-end mb-2"
            >
              <div>
                <button class="btn btn-primary">Book Now</button>
              </div>
            </div>
          </div>
        </form>


        <!-- <form id="round-trip" style="display: none">
          <div class="row">
            <div class="col-sm-4 mb-2">
              <div>
                <label for="From" class="mb-2">From</label>
                <input type="text" class="forex_input p-1" id="from" />
              </div>
            </div>
            <div class="col-sm-4 mb-2">
              <div>
                <label for="Depart" class="mb-2">Depart on</label>
                <input type="date" class="forex_input p-1" id="from" />
              </div>
            </div>
            <div class="col-sm-4 mb-2">
              <div>
                <label for="depart" class="mb-2">Passengers</label>
                <select name="" id="" class="forex_select">
                  <option value="" selected hidden>Select passenger</option>
                  <option value="">Adult</option>
                  <option value="">Child</option>
                  <option value="">Infant</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 mb-2">
              <div>
                <label for="to" class="mb-2">To</label>
                <input type="text" class="forex_input p-1" id="from" />
              </div>
            </div>
            <div class="col-sm-4 mb-2">
              <div>
                <label for="Return " class="mb-2">Return On</label>
                <input type="date" class="forex_input p-1" id="from" />
              </div>
            </div>
            <div class="col-sm-4 mb-2">
              <div>
                <label for="class" class="mb-2">Class</label>
                <select class="forex_select">
                  <option value="">First Class</option>
                  <option value="">Business Class</option>
                  <option value="">Economy Class</option>
                  <option value="">Economy Premium</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4 m-auto my-2">
              <button class="btn btn-primary">Book Now</button>
            </div>
          </div>
        </form>
        <form id="multi-trip" style="display: none">
          <div class="row">
            <div class="col-sm-4 mb-2">
              <div class="">
                <label for="From" class="mb-2">From</label>
                <input type="text" class="forex_input p-1" id="from" />
              </div>
            </div>
            <div class="col-sm-4 mb-2">
              <div>
                <label for="depart" class="mb-2">Depart on</label>
                <input type="date" class="forex_input p-1" id="depart" />
              </div>
            </div>
            <div class="col-sm-4 mb-2">
              <div>
                <label for="depart" class="mb-2">Passengers</label>
                <select name="" id="" class="forex_select">
                  <option value="" selected hidden>Select passenger</option>
                  <option value="">Adult</option>
                  <option value="">Child</option>
                  <option value="">Infant</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 mb-2">
              <div>
                <label for="To" class="mb-2">To</label>
                <input type="text" class="forex_input p-1" id="to" />
              </div>
            </div>
            <div class="col-sm-4 mb-2">
              <div>
                <label for="class" class="mb-2">Class</label>
                <select class="forex_select">
                  <option value="">First Class</option>
                  <option value="">Business Class</option>
                  <option value="">Economy Class</option>
                  <option value="">Economy Premium</option>
                </select>
              </div>
            </div>
            <div
              class="col-sm-4 d-flex justify-content-start align-items-end mb-2"
            >
              <div>
                <button class="btn btn-primary">Book Now</button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-end text-primary">
              <div class="pointer" onclick="multitrip()">
                Add another Flight(up to 5)
              </div>
            </div>
          </div>
        </form>
        <form style="display: none" id="addtrip">
          <div class="row">
            <div class="col-sm-4 mb-2">
              <div class="">
                <label for="From" class="mb-2">From</label>
                <input type="text" class="forex_input p-1" id="from" />
              </div>
            </div>
            <div class="col-sm-4 mb-2">
              <div>
                <label for="depart" class="mb-2">Depart on</label>
                <input type="date" class="forex_input p-1" id="depart" />
              </div>
            </div>
            <div class="col-sm-4 mb-2">
              <div>
                <label for="depart" class="mb-2">Passengers</label>
                <select name="" id="" class="forex_select">
                  <option value="" selected hidden>Select passenger</option>
                  <option value="">Adult</option>
                  <option value="">Child</option>
                  <option value="">Infant</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 mb-2">
              <div>
                <label for="To" class="mb-2">To</label>
                <input type="text" class="forex_input p-1" id="to" />
              </div>
            </div>
            <div class="col-sm-4 mb-2">
              <div>
                <label for="class" class="mb-2">Class</label>
                <select class="forex_select">
                  <option value="">First Class</option>
                  <option value="">Business Class</option>
                  <option value="">Economy Class</option>
                  <option value="">Economy Premium</option>
                </select>
              </div>
            </div>
            <div
              class="col-sm-4 d-flex justify-content-start align-items-end mb-2"
            >
              <div>
                <button class="btn btn-primary">Book Now</button>
              </div>
            </div>
          </div>
        </form> -->
      </div>
    </div>
    <div class="container my-5">
      <div class="row">
        <div class="col-sm-4 text-center">
          <img src="{{asset('dis/img/events/secure.svg')}}" />
          <p class="mt-2 mb-0">Best Price Guarantee</p>
          <p class="mt-1">Book flight tickets at the best prices.</p>
        </div>
        <div class="col-sm-4 text-center">
          <img src="{{asset('dis/img/events/easy&quickbooking.svg')}}" />
          <p class="mt-2 mb-0">Easy & Quick Booking</p>
          <p class="mt-1">We offer a hassle-free booking process.</p>
        </div>
        <div class="col-sm-4 text-center">
          <img src="{{asset('dis/img/events/customercare.svg')}}" />
          <p class="mt-2 mb-0">Customer Care 24/7</p>
          <p class="mt-1">We are here for you round-the-clock.</p>
        </div>
      </div>
    </div>

    <div class="container-fluid p-0 my-5">
      <div class="booking-tab mb-4">
        <div class="bestdeals">
          <img
            src="{{asset('dis/img/events/spicejet.png')}}"
            alt="spicejet"
          />
          <div class="d-block">
            <p class="mb-0">14:00</p>
            <span>SAW</span>
          </div>
          <div class="d-block mt-2">
            <div class="flightline">
              <di class="flightline-circle"></di>
              <div class="flightline_circle"></div>
            </div>
            <div class="my-2">4h 05m- Nonstop</div>
          </div>
          <div class="d-block">
            <p class="mb-0">22:00</p>
            <span>STN</span>
          </div>
        </div>
        <div class="bestdeals">
          <img  src="{{asset('dis/img/events/spicejet2.png')}}" alt="spicejet" />
          <div class="d-block">
            <p class="mb-0">14:00</p>
            <span>SAW</span>
          </div>
          <div class="d-block mt-2">
            <div class="flightline">
              <di class="flightline-circle"></di>
              <div class="flightline_circle"></div>
            </div>
            <div class="my-2">4h 05m- Nonstop</div>
          </div>
          <div class="d-block">
            <p class="mb-0">22:00</p>
            <span>STN</span>
          </div>
        </div>
        <div class="d-block">
          <span>US $934</span>
          <p class="mb-0">1 offer</p>
        </div>
        <div>
          <button class="booking-tab_btn">Book Now</button>
        </div>
      </div>

      <div class="booking-tab mb-4">
        <div class="bestdeals">
          <img
            src="{{asset('dis/img/events/spicejet.png')}}"
            alt="spicejet"
          />
          <div class="d-block">
            <p class="mb-0">14:00</p>
            <span>SAW</span>
          </div>
          <div class="d-block mt-2">
            <div class="flightline">
              <di class="flightline-circle"></di>
              <div class="flightline_circle"></div>
            </div>
            <div class="my-2">4h 05m- Nonstop</div>
          </div>
          <div class="d-block">
            <p class="mb-0">22:00</p>
            <span>STN</span>
          </div>
        </div>
        <div class="bestdeals">
          <img
            src="{{asset('dis/img/events/spicejet2.png')}}"
            alt="spicejet"
          />
          <div class="d-block">
            <p class="mb-0">14:00</p>
            <span>SAW</span>
          </div>
          <div class="d-block mt-2">
            <div class="flightline">
              <di class="flightline-circle"></di>
              <div class="flightline_circle"></div>
            </div>
            <div class="my-2">4h 05m- Nonstop</div>
          </div>
          <div class="d-block">
            <p class="mb-0">22:00</p>
            <span>STN</span>
          </div>
        </div>
        <div class="d-block">
          <span>US $934</span>
          <p class="mb-0">1 offer</p>
        </div>
        <div>
          <button class="booking-tab_btn">Book Now</button>
        </div>
      </div>
      <div class="booking-tab mb-4">
        <div class="bestdeals">
          <img
            src="{{asset('dis/img/events/spicejet.png')}}"
            alt="spicejet"
          />
          <div class="d-block">
            <p class="mb-0">14:00</p>
            <span>SAW</span>
          </div>
          <div class="d-block mt-2">
            <div class="flightline">
              <di class="flightline-circle"></di>
              <div class="flightline_circle"></div>
            </div>
            <div class="my-2">4h 05m- Nonstop</div>
          </div>
          <div class="d-block">
            <p class="mb-0">22:00</p>
            <span>STN</span>
          </div>
        </div>
        <div class="bestdeals">
          <img
            src="{{asset('dis/img/events/spicejet2.png')}}"
            alt="spicejet"
          />
          <div class="d-block">
            <p class="mb-0">14:00</p>
            <span>SAW</span>
          </div>
          <div class="d-block mt-2">
            <div class="flightline">
              <di class="flightline-circle"></di>
              <div class="flightline_circle"></div>
            </div>
            <div class="my-2">4h 05m- Nonstop</div>
          </div>
          <div class="d-block">
            <p class="mb-0">22:00</p>
            <span>STN</span>
          </div>
        </div>
        <div class="d-block">
          <span>US $934</span>
          <p class="mb-0">1 offer</p>
        </div>
        <div>
          <button class="booking-tab_btn">Book Now</button>
        </div>
      </div>
      <div class="booking-tab mb-4">
        <div class="bestdeals">
          <img
            src="{{asset('dis/img/events/spicejet.png')}}"
            alt="spicejet"
          />
          <div class="d-block">
            <p class="mb-0">14:00</p>
            <span>SAW</span>
          </div>
          <div class="d-block mt-2">
            <div class="flightline">
              <di class="flightline-circle"></di>
              <div class="flightline_circle"></div>
            </div>
            <div class="my-2">4h 05m- Nonstop</div>
          </div>
          <div class="d-block">
            <p class="mb-0">22:00</p>
            <span>STN</span>
          </div>
        </div>
        <div class="bestdeals">
          <img
            src="{{asset('dis/img/events/spicejet2.png')}}"
            alt="spicejet"
          />
          <div class="d-block">
            <p class="mb-0">14:00</p>
            <span>SAW</span>
          </div>
          <div class="d-block mt-2">
            <div class="flightline">
              <di class="flightline-circle"></di>
              <div class="flightline_circle"></div>
            </div>
            <div class="my-2">4h 05m- Nonstop</div>
          </div>
          <div class="d-block">
            <p class="mb-0">22:00</p>
            <span>STN</span>
          </div>
        </div>
        <div class="d-block">
          <span>US $934</span>
          <p class="mb-0">1 offer</p>
        </div>
        <div>
          <button class="booking-tab_btn">Book Now</button>
        </div>
      </div>
    </div>

@endsection