@extends('front.layout.app')

@section('content')

<body onload="login()">
    <!-- Navbar Start -->
    <div id="header"></div>
    <!-- Navbar End -->

    <!-- banner start  -->

    <div class="container-fluid bg-contactservicesbanner p-0 mb-5" style="background-image:url({{asset('/dis/img/events/banner-contact-us_1600.webp')}}); background-repeat:no-repeat center center; background-size: cover;">
      <div class="aboutus_overlay">
        <div class="container py-5">
          <div class="row align-items-center"></div>
        </div>
      </div>
    </div>
    <!-- banner ends  -->

    <!-- contact map and form start -->

    <div class="container mt-5">
      <div class="row my-5 py-5">
        <div class="col-sm-7">
          <div class="map_iframe mb-4">
            <iframe
              width="100%"
              height="500"
              loading="lazy"
              allowfullscreen
              referrerpolicy="no-referrer-when-downgrade"
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBpsWJgsLXzS9GaF3O39Q57tpZ5dOx0Hl4
&q=India"
            ></iframe>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="Contact_formborder">
            <div class="text-center">
              <h4 class="contact_formheading">CONTACT US</h4>
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
            <form action="{{route('contactus')}}" method="POST" class="p-4">
              @csrf
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input type="text" name="name" placeholder="Name*" class="input_login" required />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-envelope m-3"></i>
                <input type="email" name="email" placeholder="Email*" class="input_login" required/>
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-phone icon_rotate m-3"></i>
                <input
                  type="phone" name="mobile"
                  placeholder="Phone Number*"
                  class="input_login" required
                />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-envelope-open-text m-3"></i>
                <textarea
                  name="message"
                  id=""
                  cols="2"
                  rows="2"
                  placeholder="Message*"
                  class="input_login"
                ></textarea>
              </div>
              <div class="text-center">
                <button class="btn btn-primary w-100">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- contact map and form ends -->

    <!-- contact page start -->
    <div id="modal-contacts">
      <a href="#" class="modal-close"><i class="bi bi-x"></i></a>
      <div class="container">
        <!-- End row -->
        <div class="row">
          <div class="col-md-4">
            <h4>
              From the airport
              <i class="icon-hotel-airplane float-end"></i>
            </h4>
            <ul class="list">
              <li>
                Vix in error iuvaret, at omnium prompta aliquam vel. Sea an
                purto vide posidonium, eos modus dicit ne.
              </li>
              <li>
                Appetere dignissim vis et. Te per dolore expetenda voluptaria,
                an eam autem perfecto patrioque.
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>
              From the station
              <i class="icon-hotel-train float-end"></i>
            </h4>
            <ul class="list">
              <li>
                Vix in error iuvaret, at omnium prompta aliquam vel. Sea an
                purto vide posidonium, eos modus dicit ne.
              </li>
              <li>
                Appetere dignissim vis et. Te per dolore expetenda voluptaria,
                an eam autem perfecto patrioque.
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>
              By car
              <i class="icon-hotel-car float-end"></i>
            </h4>
            <ul class="list">
              <li>
                Vix in error iuvaret, at omnium prompta aliquam vel. Sea an
                purto vide posidonium, eos modus dicit ne.
              </li>
              <li>
                Appetere dignissim vis et. Te per dolore expetenda voluptaria,
                an eam autem perfecto patrioque.
              </li>
            </ul>
          </div>
        </div>
        <!-- End row -->
        <div class="row">
          <div class="col-md-12">
            <ul id="contact_info">
              <li>Covent Garden 56 - 2034 London UK</li>
              <li>+353 1 234 566 78</li>
              <li>
                <a href="#">info@page1travels.com</a>
                -
                <a href="https://page1travelsclone.netlify.app/">
                  page1travelsclone.netlify.app
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End conainer -->

    <!-- contact extra design start  -->

    <div class="container my-5 border">
      <div class="text-center">
        <h1 class="my-4">CONTACT US</h1>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis animi
          ducimus officiis eos delectus, laborum dolorum fugit at facere impedit
          reprehenderit odit reiciendis placeat velit inventore neque,
          recusandae, quidem doloremque.
        </p>
      </div>

      <div class="row">
        <div class="col-sm-4 text-center">
          <img src="{{asset('dis/img/events/office.svg')}}" />
          <h3 class="my-2">ADDRESS</h3>
          <p>93 Krishna Enclave, First Floor, Raj Nagar Extension, Ghaziabad, 201002, Uttar Pradesh </p>
        </div>
        <div class="col-sm-4 text-center">
          <img src="{{asset('dis/img/events/phone.svg')}}" />
          <h3 class="my-2">PHONE</h3>
          <p>+91 70066 80891</p>
        </div>
        <div class="col-sm-4 text-center">
          <img src="{{asset('dis/img/events/phone.svg')}}" />
          <h3 class="my-2">E-MAIL</h3>
          <p>info@page1travels.com</p>
        </div>
      </div>
    </div>
    <!-- contact extra design ends  -->



@endsection