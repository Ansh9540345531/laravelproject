@extends('front.layout.app')
@section('content')
<script>
  const multiplication = () => {
    const dollar = document.getElementById("dollar_field").value
    // console.log("dollar",dollar)
    const result = 80.98 * dollar;
    const actualvalue = Math.round(result)
    // console.log("value",actualvalue)
    const input2 = document.getElementById("inr_field").value = actualvalue

  }
</script>

<body onload="login()">
  <!-- Navbar Start -->
  <div id="header"></div>
  <!-- Navbar End -->
  <div class="bg-forex" style="background-image:url({{asset('/dis/img/events/forexbanner.jpg')}}); background-repeat:no-repeat center center; background-size: cover; height: 40vh;">
  </div>



  <div class="container-fluid py-5">
    <div class="row">
      <div class="col-sm-8 m-auto text-justify">
        <h2>Why Page1 Travels for Currency Conversion?</h2>
        <p>
          You can't just walk into a cafe in Boston and pay with Indian Rupee. You will need foreign currency if you intend to travel abroad. Does that sound like a lot of work? With Page1 Travels, it’s not. Leave dealing with unreliable money sources behind and exchange your currency with Page1 Travels. With just a few clicks, you can get the most competitive rates and receive your forex without any hassle.
        </p>
      </div>
    </div>
    <div class="bg_step">
      <div class="row py-5">
        <div class="col-sm-12 text-center">
          <h2>Get Started</h2>
          <p class="mb-0">
            With Page1 Travels, start your currency conversion in just a few steps:
          </p>
        </div>
      </div>
      <div class="container py-5">
        <div class="row">
          <div class="col-sm-8 m-auto">
            <div class="row">
              <div class="col-sm-4 text-center">
                <div class="steps">
                  <img src="{{asset('dis/img/events/step1.png')}}" class="mb-2" />
                  <h6 class="fw_semibold">Step 1</h6>
                  <p class="mb-0 text-center">
                    Select the currency and enter the amount you want to convert.
                  </p>
                </div>
              </div>

              <div class="col-sm-4 text-center">
                <div class="steps">
                  <img src="{{asset('dis/img/events/step3.png')}}" alt="" class="mb-2" />
                  <h6 class="fw_semibold">Step 2</h6>
                  <p class="mb-0 text-center">
                    Make the payment via debit card, credit card, or net banking.
                  </p>
                </div>
              </div>
              <div class="col-sm-4 text-center">
                <div class="steps">
                  <img src="{{asset('dis/img/events/step4.png')}}" alt="" class="mb-2" />
                  <h6 class="fw_semibold">Step 3</h6>
                  <p class="mb-0 text-center">
                    Let us handle the rest. We'll ensure a hassle-free currency exchange.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="container-fluid bg_forex" style="background-image:url({{asset('/dis/img/events/forex_banner_strip.jpg')}}); background-repeat:no-repeat center center; background-size: cover; height:80vh; ">
    <div class="row align-items-center">
      <div class="col-sm-8 m-auto">
        <div class="forex-form mt-4 p-4">
          <div class="text-center bg-primary p-3 border-bottom my-2">
            <h4 class="text-white">Currency Conversion</h4>
          </div>

          <form  id="formcurrency" >
            @csrf
          <div class="row my-5">
            <div class="col-sm-6">
              <div class="d-flex align-items-center border p-1">
                <select name="from"  id="currency" class="forex_select"> 
                </select>
                <input type="number" name="amount" placeholder="Enter Amount" class="forex_input p-1" id="dollar_field" required />
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center border p-1">
                <select id="curr" name="to" class="forex_select">
                </select>
                <input type="number"  class="forex_input p-1" id="inr" step="any" />
              </div>
            </div>
          </div>
          <div class="text-center my-4">
            <input type="submit" class="btn btn-primary" name="submit" value="Convert">
            <!-- <button class="btn btn-primary" onclick="multiplication()">
              Convert
            </button> -->
          </div>
          </form>

          <div class="row justify-content-center align-items-center">
            <div class="col-sm-3 text-center">
              <div class="provider">
                <img src="{{asset('dis/img/events/fixer_money.png')}}" width="150px" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="provider">
                <img src="{{asset('dis/img/events/exchangeratesapi_logo_white.svg')}}" />
              </div>
            </div>
            <div class="col-sm-3 text-center">
              <div class="provider">
                <img src="{{asset('dis/img/events/wise.svg')}}" />
              </div>
            </div>
            <div class="col-sm-3 text-center">
              <div class="provider">
                <img src="{{asset('dis/img/events/stripe.svg')}}" />
              </div>
            </div>
          </div>
          <div class="row my-4 align-items-center">
            <div class="col-sm-12 text-end">
              <div>
                Have a question?
                <span data-toggle="modal" data-target=".modal-forexenquire" class="text-primary pointer">
                  Contact Us!
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- forex enquire form -->
  <div class="modal fade modal-forexenquire" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="mysmallmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-white" id="exampleModalLongTitle">
            Fill in the form and we'll get back to you
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('forex_store')}}" method="post" onsubmit="submithandler()">
          @csrf
            <div class="input_modallogin mb-3">
              <i class="fas fa-1x fas far fa-user m-3"></i>
              <input type="text" name="name" class="input_login" placeholder="Name*" required />
            </div>
            <div class="input_modallogin mb-3">
              <i class="fas fa-1x fas far fa-envelope m-3"></i>
              <input type="email" name="email" class="input_login" placeholder="Email*" required />
            </div>
            <div class="input_modallogin mb-3">
              <i class="fas fa-1x fas far fa-phone icon_rotate m-3"></i>
              <input type="number" name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="input_login" placeholder="Phone*" id="Number" maxlength="10" required/>
            </div>
            <div class="input_modallogin mb-3">
              <i class="fas fa-1x fas far fa-envelope-open-text m-3"></i>
              <textarea class="input_login" name="message" placeholder="Message*" required></textarea>
            </div>
            <div class="text-center my-2">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- forex enquire form -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $.ajax({
        'url': 'currency',
        'type': 'GET',
        'success': function(data) {
          var json_obj = $.parseJSON(data);

          const json_keys = json_obj.symbols
          const abcd = Object.keys(json_keys)
          console.log(abcd)
          
          $.each(abcd, function(key, value) {   
          $('#currency')
              .append($("<option></option>")
                          .attr("value", value)
                          .text(value)); 
          });

          $.each(abcd, function(key, value) {   
          $('#curr')
              .append($("<option></option>")
                          .attr("value", value)
                          .text(value)); 
          });
         
        }
      });

    });
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    //formcurrency
      $(document).ready(function(){
       // e.preventDefault();
        $(document).on('submit','#formcurrency',function(e){
          e.preventDefault();
          var form1 = $("#formcurrency").serialize();
          //alert(form1);
          $.ajax({
            url : '/currercychange',
            type : 'POST',
            data : form1,
            success : function(data){
              var json_obj = $.parseJSON(data);
              console.log(json_obj.result);
              const roundedvalue=Math.round(json_obj.result)
             // alert(data);
             document.getElementById('inr').value = json_obj.result;
            }
          });
        });
      })
  </script>


  @endsection