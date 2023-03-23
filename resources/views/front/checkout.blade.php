@extends('front.layout.app')
@section('content')


<body onload="login()">
    <!-- Navbar Start -->
    <div id="header"></div>
    <!-- Navbar End -->
    <!-- body start  -->

    <div class="container mt-5">
      <div class="text-center mb-3 pb-3">
        <h1 class="mb-3 text-uppercase">Checkout page</h1>
      </div>
    </div>

   
    <div class="container my-5">
      <div class="row text-center">
        <div class="col-sm-4">
          <div class="border border-primary p-3">
            <form>
              <h2 class="my-3 fw_semibold text-left">Check Out As Guest</h2>
              <p class="my-3 text-left">
                <span class="primary_color">
                </span>
                For Faster Checkout    
                <?php
                  $user = Auth::guard('customer')->user();
                  if(Auth::guard('customer')->user()->name != ''){
                  $name = Auth::guard('customer')->user()->name;}
                  else{
                    $name = 'Guest';
                  }
                  $email = Auth::guard('customer')->user()->email;
                  $mobile = Auth::guard('customer')->user()->mobile;
                ?>
              </p>
              <div class="input_modallogin my-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input
                  type="text"
                  class="input_login"
                  placeholder="Full Name*"
                  id="name"
                  value="{{$name}}"
                  required disabled
                />
              </div>
              <div class="input_modallogin my-3">
                <i class="fas fa-1x fas fa-phone m-3 icon_rotate"></i>
                <input
                  type="phone"
                  class="input_login"
                  placeholder="Mobile Number*"
                  id="Number"
                  value="{{$mobile}}"
                  required disabled
                />
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-envelope m-3"></i>
                <input
                  type="email"
                  class="input_login"
                  placeholder="Email Id*"
                  id="email"
                  value="{{$email}}"
                  required disabled
                />
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-8 col-upspace">
        <div class="mt-3" >
          <form method="post" action="{{route('payment')}}">
            @csrf
            <input type="hidden" name="name" value="{{$name}}" > 
            <input type="hidden" name="email" value="{{$email}}" > 
            <input type="hidden" name="mobile" value="{{$mobile}}" > 
            <input type="hidden" name="orderid" value="{{ request()->id }} " > 
            <input type="hidden" name="amount" value="<?php echo $data[0]->sub_total; ?>" > 
            <h5 class="text-uppercase total_cost">Totalcost :  $<?php echo $data[0]->sub_total; ?></h5>
            <input type="submit" class="btn btn-primary mt-3" value="Proceed To Payment">
          </form>
        </div>
          <!-- <div class="mt-3" >
            <div class="paymentbutton">
              <div><h5 class="text-uppercase total_cost">Totalcost : $<?php //echo $data[0]->sub_total; ?> </h5></div>
            </div>
          </div>
          <div class="mt-5 text-start">
            <button class="btn btn-primary ">Proceed To Payment</button>
          </div> -->
        </div>


        
        <!-- <div class="col-sm-1"></div> -->
      </div>
    </div>


<!-- testing  Razor pay integration -->
<?php
 if(Session::get('amount') != ''){  $amount = Session::get('amount');  $order_id = Session::get('order_id'); ?>
  

<div class="container tex-center mx-auto">
    <form action="{{route('pay')}}" method="POST" class="text-center mx-auto mt-5">
      @csrf
      <script 
          src="https://checkout.razorpay.com/v1/checkout.js"
          data-key="rzp_test_n1o7szZXkacMha"
          data-amount="{{$amount}}" 
          data-currency="USD"
          data-order_id="{{$order_id}}"
          data-buttontext="Pay with Razorpay"
          data-name="Page1Travels"
          data-description="Test transaction"
          data-prefill.name="{{Session::get('name')}}"
          data-prefill.email="{{Session::get('email')}}"
          data-prefill.contact="{{Session::get('phone')}}"
          data-theme.color="#F37254"
      ></script>    
      <input type="hidden" custom="Hidden Element" name="hidden">
      </form>     
    </div>
    <?php
}   
?>
    @endsection