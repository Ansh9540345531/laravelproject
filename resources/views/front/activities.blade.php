@extends('front.layout.app')
@section('content')
  
<body onload="login()">
    <!-- Navbar Start -->
    <div id="header"></div>
    <!-- Navbar End -->
    <!-- body start  -->
    <!-- banner start -->
    <div class="container-fluid bg-activityregistrationbanner p-0 mb-5" style="background-image:url({{asset('/dis/img/events/pexels-trekking.jpeg')}}); background-repeat:no-repeat center center; background-size: cover;">
      <div class="visa_overlay">
        <div class="container py-5">
          <div class="row align-items-center">
            <div class="col-sm-9">
              <h3 class="text-primary">Our Activities</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- body content start -->

    <!-- adventure start  -->
    <div class="container-fluid texture_background spaceup_down">
      <div class="row text-center">
        <div class="col-sm-6">
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-bs-ride="true"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="{{asset('dis/img/events/pexels-photo-adventure3.webp')}}"
                  class="d-block w-100"
                  height="430px"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="{{asset('dis/img/events/pexels-photo-adventure4.jpeg')}}"
                  class="d-block w-100"
                  height="430px"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="{{asset('dis/img/events/pexels-photo-adventure4.jpeg')}}"
                  class="d-block w-100"
                  height="430px"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-sm-6 text-start">
          <div class="">
            <h1 class="text-primary">Adventure</h1>
            <p class="text-dark">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam
              possimus nobis rerum architecto voluptate repellat voluptatum
              expedita, sed, ratione ut dicta ullam labore nostrum! Vero, aut.
              Voluptas, animi inventore. Eligendi.
            </p>
            <div>
              <ul class="list-inline text-dark m-0">
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
              </ul>
            </div>
            <div class="mt-4">
              <a
                class="btn btn-primary"
                data-toggle="modal" data-target=".package_customized ">Enquire Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- adventure ends  -->

    <!-- trekking start  -->
    <div
      class="container-fluid bg-exploringregistration p-3 mt-3 clearfix spaceup_down"  >
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="mb-4">
              <h1 class="text-primary">TREKKING</h1>
            </div>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam
              possimus nobis rerum architecto voluptate repellat voluptatum
              expedita, sed, ratione ut dicta ullam labore nostrum! Vero, aut.
              Voluptas, animi inventore. Eligendi.
            </p>
            <div>
              <ul class="list-inline text-white m-0">
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
              </ul>
            </div>
            <div class="mt-4">
              <a
                class="btn btn-primary"
                data-toggle="modal" data-target=".package_customized ">Enquire Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- trekking ends  -->

    <!-- CAMP FIRE START -->
    <div class="container-fluid spaceup_down texture_background">
      <div class="row text-center">
        <div class="col-sm-6">
          <div
            id="carouselExampleIndicatorss"
            class="carousel slide"
            data-bs-ride="true"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicatorss"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicatorss"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicatorss"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="{{asset('dis/img/events/campfire3-pexels-photo.jpeg')}}"
                  class="d-block w-100"
                  height="430px"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="{{asset('dis/img/events/pexels-photo-adventure4.jpeg')}}"
                  class="d-block w-100"
                  height="430px"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="{{asset('dis/img/events/campfire2pexels-photo.webp')}}"
                  class="d-block w-100"
                  height="430px"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicatorss"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicatorss"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-sm-6 text-start">
          <div class="">
            <h1 class="text-primary my-2">CAMP FIRE</h1>
            <p class="text-dark">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam
              possimus nobis rerum architecto voluptate repellat voluptatum
              expedita, sed, ratione ut dicta ullam labore nostrum! Vero, aut.
              Voluptas, animi inventore. Eligendi.
            </p>
            <div>
              <ul class="list-inline text-dark m-0">
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
              </ul>
            </div>
            <div class="mt-4">
              <a
                class="btn btn-primary"
                data-toggle="modal" data-target=".package_customized ">Enquire Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CAMP FIRE ENDS -->

    <!-- off road start  -->

    <div
      class="container-fluid bg-offroadregistration p-3 mt-3 clearfix spaceup_down bg-registration">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="mb-4">
              <h1 class="text-primary">OFF ROAD</h1>
            </div>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam
              possimus nobis rerum architecto voluptate repellat voluptatum
              expedita, sed, ratione ut dicta ullam labore nostrum! Vero, aut.
              Voluptas, animi inventore. Eligendi.
            </p>
            <div>
              <ul class="list-inline text-white m-0">
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
              </ul>
            </div>
            <div class="mt-4">
              <a
                class="btn btn-primary"
                data-toggle="modal" data-target=".package_customized ">Enquire Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- off road end  -->

    <!-- CAMPING START    -->

    <div class="container-fluid spaceup_down texture_background">
      <div class="row text-center">
        <div class="col-sm-6">
          <div
            id="carouselExampleIndicator"
            class="carousel slide"
            data-bs-ride="true"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicator"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicator"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicator"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="{{asset('dis/img/events/campingimage.jpg')}}"
                  class="d-block w-100"
                  height="430px"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="{{asset('dis/img/events/pexels-photo-adventure4.jpeg')}}"
                  class="d-block w-100"
                  height="430px"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="{{asset('dis/img/events/pexels-photo-adventure4.jpeg')}}"
                  class="d-block w-100"
                  height="430px"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicator"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicator"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-sm-6 text-start">
          <div class="">
            <h1 class="text-primary">CAMPING</h1>
            <p class="text-dark">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam
              possimus nobis rerum architecto voluptate repellat voluptatum
              expedita, sed, ratione ut dicta ullam labore nostrum! Vero, aut.
              Voluptas, animi inventore. Eligendi.
            </p>
            <div>
              <ul class="list-inline text-dark m-0">
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
              </ul>
            </div>
            <div class="mt-4">
              <a
                class="btn btn-primary"
                data-toggle="modal" data-target=".package_customized ">Enquire Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CAMPING ENDS  -->

    <!-- EXPLORING START  -->
    <div
      class="container-fluid bg-exploringregistration p-3 clearfix spaceup_down " >
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="mb-4">
              <h1 class="text-primary">EXPLORING</h1>
            </div>
            <p class="text-white">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam
              possimus nobis rerum architecto voluptate repellat voluptatum
              expedita, sed, ratione ut dicta ullam labore nostrum! Vero, aut.
              Voluptas, animi inventore. Eligendi.
            </p>
            <div>
              <ul class="list-inline text-white m-0">
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li class="py-2">
                  <i class="fa fa-check text-primary mr-3"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
              </ul>
            </div>
            <div class="mt-4">
              <a
                class="btn btn-primary"
                data-toggle="modal" data-target=".package_customized ">Enquire Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- New Activity start -->
  <div class="container-fluid spaceup_down texture_background">
    <div class="row text-center">
      <div class="col-sm-6">
        <div
          id="carouselExampleIndicatorrrss"
          class="carousel slide"
          data-bs-ride="true"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleIndicatorrrss"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicatorrrss"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleIndicatorrrss"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="{{asset('dis/img/events/pexels-photo-adventure4.jpeg')}}"
                class="d-block w-100"
                height="430px"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="{{asset('dis/img/events/helli_sekking2.jpeg')}}"
                class="d-block w-100"
                height="430px"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="{{asset('dis/img/events/pexels-photo-adventure4.jpeg')}}"
                class="d-block w-100"
                height="430px"
                alt="..."
              />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicatorrrss"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon"
              aria-hidden="true"
            ></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicatorrrss"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon"
              aria-hidden="true"
            ></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-sm-6 text-start">
        <div class="">
          <h1 class="text-primary text-uppercase">heli skiing</h1>
          <p class="text-dark">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam
            possimus nobis rerum architecto voluptate repellat voluptatum
            expedita, sed, ratione ut dicta ullam labore nostrum! Vero, aut.
            Voluptas, animi inventore. Eligendi.
          </p>
          <div>
            <ul class="list-inline text-dark m-0">
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </li>
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </li>
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </li>
            </ul>
          </div>
          <div class="mt-4">
            <a
              class="btn btn-primary"
              data-toggle="modal"
              data-target=".package_customized"
              >Enquire Now</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- New Activity ends -->

<!-- customized button popup start -->
<div
      class="modal fade package_customized"
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
              Enquire Form
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

            <form action="{{route('enquiry_store')}}" method="post" class="p-4">
            @csrf
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input type="text" name="name" placeholder="Name*" class="input_login" />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-envelope m-3"></i>
                <input type="email" name="email" placeholder="Email*" class="input_login" />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-phone icon_rotate m-3"></i>
                <input type="number" name="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="input_login" placeholder="Mobile Number" id="Number" maxlength="10" required/>
                
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-flag m-3"></i>
                <input
                  type="text" name="country" placeholder="Enter Country*"
                  class="input_login"
                />
              </div>
              <div class="input_modallogin mb-3  ">
                <i class="fas fa-1x fas fa-tags m-3"></i>
                <select id="choices-multiple-remove-button" name="activities[]" placeholder="Select activities" multiple>
                      @foreach($activity as $item)
                       <option value="{{$item->activities}}">{{$item->activities}}  </option>
                      @endforeach
                </select>
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

    <!-- customized button popup ends -->











  @endsection

<!-- multiple select  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css"
    />
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script>
      $(document).ready(function () {
        var multipleCancelButton = new Choices(
          "#choices-multiple-remove-button",
          {
            removeItemButton: true,
            maxItemCount: 20,
            searchResultLimit: 20,
            renderChoiceLimit: 20,
          }
        );
      });
    </script>

    <!-- multiple select  -->