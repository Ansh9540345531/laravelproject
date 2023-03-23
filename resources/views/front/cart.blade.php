@extends('front.layout.app')

@section('content')

<?php
// echo "<pre>";
// print_r($orderdata);
// exit(123);
?>


<body onload="login()">
  <div id="header"></div>
  <div class="container mt-5">
    <div class="text-center mb-3 pb-3">
      <h1 class="mb-3">SHOPPING CART</h1>
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

  <?php if ($orderdata != '') { ?>
    <div class="container my-5">
      <div class="row display_screen">
        <div class="col-sm-8 col-width">
          <div class="heading_display">
            <div class="row my-4">
              <div class="col-sm-6">
                <h4 class="headings_font text-uppercase">product details</h4>
              </div>
              <div class="col-sm-6">
                <div class="row text-center">
                  <div class="col-sm-4">
                    <h4 class="headings_font text-uppercase">price</h4>
                  </div>
                  <div class="col-sm-4">
                    <h4 class="headings_font text-uppercase">quantity</h4>
                  </div>
                  <div class="col-sm-4">
                    <h4 class="headings_font text-uppercase">total</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <form method="POST" action="{{route('cartdata',$total)}}">
            @csrf
            <?php
            $i = 0;
            ?>
            @foreach($orderdata as $row)
            <div class="d-flex my-4">
              <div class="">
                <img src="{{asset('dis/img/package-1.jpg')}}" class="cartimagess" />
              </div>
              <div class="">
                <div class="row ms-1">
                  <div class="col-sm-5">
                    <div>
                      <div>
                        <h4 class="heading_font">{{$row->product_name}}</h4>
                      </div>
                      <p class="heading_data">{{$row->room_name}}</p>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div>
                      <h5 class="cart-price">${{$row->product_price}}</h5>
                    </div>
                    <input type="hidden" name="product_{{$i}}" value="{{$row->product_price}}">
                    <input type="hidden" name="productid_{{$i}}" value="{{$row->order_details_id}}">
                  </div>
                  <div class="col-sm-3 center">

                    <div class="d-flex input_place">
                      <div class="fullinput_border">
                        <button type="button" onclick="minus(counter_{{$i}})" class="quantity-border minus">
                          -
                        </button>
                        <input type="text" name="counter_{{$i}}" id="counter_{{$i}}" value="{{$row->product_quantity}}" class="quantity-input" />
                        <button type="button" onclick="plus(counter_{{$i}})" class="quantity-border plus">
                          +
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <?php $a = $row->product_quantity;
                    $b = (int)$row->product_price;
                    $c = $a * $b;  ?>
                    <?php if ($a === 1) { ?>
                      <div>
                        <h5 class="cart-price" id="price">${{$row->product_price}}</h5>
                      </div>
                    <?php } else if ($a > 1) {   ?>
                      <div>
                        <h5 class="">$<?php echo $c ?></h5>
                      </div>
                    <?php } ?>

                  </div>
                  <div class="col-sm-3">
                    <a href="{{route('cartdelete',$row->order_details_id)}}"><span class="text-grey deleat_size pointer" onclick="return confirm('Are you sure you want to delete this Product ?');">Remove</span></a>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <?php
            $i++;
            ?>
            @endforeach
            <input type="submit" name="submit" value="Update" class="btn btn-warning float-right">
          </form>

        </div>
        <div class="col-sm-4">
          <div class="p-4" style="box-shadow: azure; background-color: #f3f3f3">
            <div>
              <div class="mb-5">
                <h3 class="text-start">Order Summary</h3>
                <hr />
              </div>
            </div>
            <div>
              <div class="d-flex justify-content-between my-5">
                <div>
                  <h4 class="heading_font">SUB-TOTAL : </h4>
                </div>
                <div>
                  <h5 class="">${{$orderd}}</h5>
                </div>

              </div>
              <div class="mb-4">
                <h4 class="heading_font">PROMO CODE:</h4>
                <div class="my-3">
                  <input type="text" class="w-100 promo_input" placeholder="ENTER YOUR CODE" style="height: 42px; padding: 4px" />
                </div>
                <div>
                  <button class="btn btn-primary w-50">
                    <span>Apply</span>
                  </button>
                </div>
              </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between my-3">
              <div>
                <h4 class="heading_font">TOTAL:</h4>
              </div>

              <div>
                <h5 class="">${{($orderd)}}</h5>
              </div>

            </div>
            <div class="text-center my-3">
              <?php $a = $orderdata[0]->order_no; ?>
              <a href="{{route('checkout',$a)}}">
                <button class="btn btn-primary w-100">
                  <span>Go to checkout</span>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } else {  ?>
    <!-- echo "Cart is empty."; -->
    <!-- <h5 class="text-center">Cart is Empty</h5> -->
    <div class="cartpageimage" style="">
      <img src="{{asset('dis/img/events/emptycartimg .png')}}" />
    </div>
    <h5 class="text-center">Cart is Empty !</h5>
  <?php } ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function minus(id) {
      var input = $('#' + id.id);
      value = input.val();
      if (value > 1) {
        console.log(input.val(--value));
      }
    }

    function plus(id) {
      var data = id.id;
      console.log(id.id);
      var input = $('#' + id.id);
      value = input.val();
      console.log(input.val(++value));
    }
  </script>
  @endsection