@extends('front.layout.app')
@section('content')

 
  <body onload="login()">
    <!-- Navbar Start -->
    <div id="header"></div>
    <!-- Navbar End -->

  <!-- banner start -->
  <div class="container-fluid bg_giftcard py-5 mb-5"  style="background-image:url({{asset('/dis/img/events/giftvoucherbanner.jpg')}}); background-repeat:no-repeat center center; background-size: cover;">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-lg-7 mb-5 mb-lg-0">
          <div class="mb-4">
            
            <h1 class="text-white">
              </span>
               GIFT CARDS
            </h1>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->



    <div class="container my-5">
      <div class="row">
        <div class="col-sm-12 mb-2">
          <h2 class="text-dark">FESTIVAL GIFT CARDS</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/festival.jpeg')}}"
                width="100%"
                height="200px"
                alt=""
              />
             
              <div class="d-flex justify-content-between my-2">
                <span>
                  Festival Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/festival.jpeg')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Festival Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/festival.jpeg')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Festival Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <div class="row">
        <div class="col-sm-12 mb-2">
          <h2 class="text-dark">BIRTHDAY GIFT CARDS</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/birthday.webp')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Birthday Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/birthday.webp')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Birthday Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/birthday.webp')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Birthday Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <div class="row">
        <div class="col-sm-12 mb-2">
          <h2 class="text-dark">WEDDING GIFT CARDS
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/weedinggiftcard.webp')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Wedding Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/weedinggiftcard.webp')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Wedding Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/weedinggiftcard.webp')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Wedding Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <div class="row">
        <div class="col-sm-12 mb-2">
          <h2 class="text-dark">ANNIVERSARY GIFT CARDS</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/anniversary.jpeg')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Anniversary Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/anniversary.jpeg')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Anniversary Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/anniversary.jpeg')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Anniversary Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <div class="row">
        <div class="col-sm-12 mb-2">
          <h2 class="text-dark">THANK YOU GIFT CARDS</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/thankyou.webp')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Thank You Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/thankyou.webp')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Thank You Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/thankyou.webp')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Thank You Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <div class="row">
        <div class="col-sm-12 mb-2">
          <h2 class="text-dark">CONGRATULATIONS GIFT CARDS</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/congrats.jpeg')}}"
                width="100%"
                height="200px"
                alt=""
              />
             
              <div class="d-flex justify-content-between my-2">
                <span>
                  Congratulations Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/congrats.jpeg')}}"
                width="100%"
                height="200px"
                alt=""
              />
              
              <div class="d-flex justify-content-between my-2">
                <span>
                  Congratulations Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="giftcard">
            <div>
              <img
                src="{{asset('dis/img/events/congrats.jpeg')}}"
                width="100%"
                height="200px"
                alt=""
              />
             
              <div class="d-flex justify-content-between my-2">
                <span>
                  Congratulations Gift Card
                  <br />
                  (1 X ₹ 1000)
                </span>
                <span>₹ 1000</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="fw-bold">Total Price</span>
                <span>₹ 1000</span>
              </div>
              <div class="text-center mt-3">
                <button class="btn btn-primary" data-toggle="modal" data-target=".gift_card_modal ">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





    <!-- customized button popup start -->
<div
      class="modal fade gift_card_modal"
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
              Gift Form
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

            <form action="{{route('gift_store')}}" method="post" class="p-4">
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
                <input
                  type="number" name="number" placeholder="Phone Number*"
                  class="input_login"
                />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-flag m-3"></i>
                <input
                  type="text" name="quantity" placeholder="Enter Quantity*"
                  class="input_login"
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

    <!-- customized button popup ends -->
    
@endsection