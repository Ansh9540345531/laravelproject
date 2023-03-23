@extends('front.layout.app')
@section('content')

<body onload="login()">
    <!-- Navbar Start -->
    <div id="header"></div>
    <!-- banner start -->
    <div class="container-fluid bg-selfdriveregistrationbanner py-5 mb-5" style="background-image:url({{asset('/dis/img/events/pexel-selfdrive.jpg')}}); background-repeat:no-repeat center center; background-size: cover;">
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
                ON SELFDRIVE
              </h1>
            </div>
            <!-- <div class="mt-4">
              <a class="btn btn-primary">View More</a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- main body start -->
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-6 text-left mb-3">
          <span>
            <h1>Lorem</h1>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Praesentium itaque distinctio dolorum, fuga voluptatem dolor enim
              esse asperiores excepturi assumenda molestias natus magni aut
              aliquid! Expedita animi totam earum laudantium. Lorem ipsum, dolor
              sit amet consectetur adipisicing elit. Praesentium itaque
              distinctio dolorum, fuga voluptatem dolor enim esse asperiores
              excepturi assumenda molestias natus magni aut aliquid! Expedita
              animi totam earum laudantium.
            </p>
            <button class="btn btn-primary">Read More</button>
          </span>
        </div>
        <div class="col-sm-6">
          <div class="form_border">
            <h4 class="form_heading">SELF DRIVE FORM</h4>

            <form action="{{route('selfdrive_store')}}" method="post" class="p-4">
            @csrf
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input type="text" name="name" class="input_login" placeholder="Name*" />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-envelope m-3"></i>
                <input type="email" name="email" class="input_login" placeholder="Email*" />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-phone icon_rotate m-3"></i>
                
                <input type="number" name="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="input_login" placeholder="Phone Number*" id="Number" maxlength="10" required/>
              </div>
              <div class="text-start mb-3">
                <h4>Booking Date</h4>
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-calendar m-3"></i>
                <input
                  type="text"
                  name="from"
                  class="input_login"
                  placeholder="From*"
                  onfocus="(this.type='date')"
                  onblur="if(!this.value)this.type='text'"
                />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-calendar m-3"></i>
                <input
                  type="text"
                  name="to"
                  class="input_login"
                  placeholder="To *"
                  onfocus="(this.type='date')"
                  onblur="if(!this.value)this.type='text'"
                />
              </div>
              <div>
                <button class="btn btn-primary w-100">Submit</button>
              </div>
            </form>
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
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo
        quidem deserunt numquam dolore soluta aliquam quo error recusandae quas
        architecto animi officiis, harum accusamus unde!
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt,
                tempora aliquam possimus provident ipsa ipsam fugiat ipsam
                fugiat.
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt,
                tempora aliquam possimus provident ipsa ipsam fugiat at nisi.
                Quae, iste.
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt,
                tempora aliquam possimus provident ipsa ipsam fugiat at nisi.
                Quae, iste.
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt,
                tempora aliquam possimus provident ipsa ipsam fugiat at nisi.
                Quae, iste.
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
          <h1 class="my-5">Highlight</h1>
        </div>
        <div class="row d-flex">
          <hr style="width: 110%;" />
          <div class="col-sm-4">
            <ul class="content m-auto">
              <li class="my-2">Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li class="my-2">Lorem ipsum dolor sit amet.</li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul class="content m-auto">
              <li class="my-2">Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li class="my-2">Lorem ipsum dolor sit amet.</li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul class="content m-auto">
              <li class="my-2">Lorem ipsum dolor sit amet.</li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li class="my-2">Lorem ipsum dolor sit amet.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
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
     

@endsection