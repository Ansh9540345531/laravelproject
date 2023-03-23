@extends('front.layout.app')
@section('content')

<body onload="login()">
    <!-- Navbar Start -->
    <div id="header"></div>
    <!-- Navbar End -->
    <div class="container-fluid p-0">
      <div class="bg_helicopter"  style="background-image:url({{asset('/dis/img/events/helicopterbooking.jpg')}}); background-repeat:no-repeat center center; background-size: cover;" >
        <div class="bg-overlay">
          <h2 class="text-white py-3 mx-3">HELICOPTER BOOKING</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row my-5">
        <div class="col-sm-7">
          <h3 class="">Create memories for a lifetime</h3>
          <p class="text-justify">
          Explore the world with a new perspective with Page1 Travels’s helicopter services. A helicopter ride is one of the most exciting and unique ways of exploring a new destination. Discover the thrill of flying and explore beautiful destinations from the air as you soar over the amazing locations. With experienced pilots and amazing tour guides, Page1 Travels will ensure a memorable and fun helicopter experience for you. Simply fill in the inquiry form and get set for the travel experience for a lifetime.
          </p>

          <h4>What’s included</h4>
          <ul class="list-unstyled">
            <li class="forex_services-list">
            Meals
            </li>
            <li class="forex_services-list">
            Hotels
            </li>
            <li class="forex_services-list">
            Sightseeing
            </li>
            <li class="forex_services-list">
            Transport
            </li>
            <li class="forex_services-list">
            Guides
            </li>
          </ul>
        </div>
        <div class="col-sm-5 text-center helicopter_bookingform">
          <div>
            <form action="{{route('helicopter_store')}}" method="post">
            @csrf
              <h5 class="my-3 fw_semibold">Book Your Trip Now</h5>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input
                  type="text"
                  name="name"
                  class="input_login"
                  placeholder="Full Name*"
                  id="name"
                  required
                />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-phone m-3 icon_rotate"></i>
                <input type="number"  name="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="input_login" placeholder="Mobile Number" id="Number" maxlength="10" required/>
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-envelope m-3"></i>
                <input
                  type="email"
                  name="email"
                  class="input_login"
                  placeholder="Email Id*"
                  id="email"
                  required
                />
              </div>
             
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-location-arrow m-3"></i>
                <input
                  type="text"
                  name="from"
                  class="input_login"
                  placeholder="From*"
                  id="departure"
                  required
                />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-location-arrow m-3"></i>
                <input
                  type="text"
                  name="to"
                  class="input_login"
                  placeholder="To*"
                  id="arrival"
                  required
                />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-calendar m-3"></i>
                <input
                  type="text"
                  name="date"
                  class="input_login"
                  placeholder="Date*"
                  id="Date"
                  onfocus="(this.type='date')"
                  onblur="if(!this.value)this.type='text'"
                  required
                />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-calendar m-3"></i>
                <input
                  type="text"
                  name="time"
                  class="input_login"
                  placeholder="Time*"
                  id="Time"
                  onfocus="(this.type='time')"
                  onblur="if(!this.value)this.type='text'"
                  required
                />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input
                  type="number"
                  name="adult"
                  class="input_login border-right"
                  placeholder="Adult (above 12yrs)*"
                  id="adult"
                  required
                />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input
                  type="number"
                  name="children"
                  class="input_login border-right"
                  placeholder="Children(5-12yrs)*"
                  id="Children"
                  required
                />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-envelope-open-text m-3"></i>
                <textarea
                  name="message"
                  class="input_login"
                  id=""
                  cols="2"
                  rows="2"
                  placeholder="Message*"
                ></textarea>
              </div>
              <div class="mb-3 d-flex align-items-center">
                <input name="checkbox" type="checkbox" required class=" w-ft" />
                <p class="mb-0 text-justify ms-2">
                  I have read the
                  <span
                    class="terms_modal left pointer"
                    data-toggle="modal"
                    data-target=".terms"
                  >
                    Terms and Conditions
                  </span>
                  I agree with the
                  <span
                    class="terms_modal left pointer"
                    data-toggle="modal"
                    data-target=".terms"
                  >
                    Terms and Conditions
                  </span>
                </p>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary w-100">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    

@endsection