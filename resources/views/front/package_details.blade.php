@extends('front.layout.app')

@section('content')

<div class="space_between">   
        <div class="container-fluid  bg-registrationbannerimg  mb-5" style="background-image:url({{asset('uploads/'.$newdata->state)}}); background-repeat:no-repeat center center; background-size: cover;"" >
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <div class="mb-4">
                            <h1 class="text-primary text-uppercase" style="letter-spacing: 5px;">
                            <b>{!!html_entity_decode($newdata->address1) !!}</b>
                             <!-- Mega Offer -->
                            </h1>
                            <h3 class="text-white">
                            {!!html_entity_decode($newdata->address2) !!}
                                <!-- <span class="text-primary">30% OFF</span>
                                
                                On Holiday Packages -->
                            </h3>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- slider and aminities start -->
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row" style="height: 100%;">
                <div class=" col-sm-6 mt-1"> 
                @foreach($image as $item)
                    <div class="mySlides1 h-100">
                        <img src="{{asset('images/'.$item->photos)}}" style="width:100%; height: 100%;">
                    </div>
                    @endforeach
    
                    <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
                </div>
    
                <div class="col-sm-6 ">
                    <div>
                        <div>
                            <h1 class=" ">{{$newdata->package_name}}</h1>
                        </div>
                        <!-- <div class="d-flex mt-2">
                            <h5 class="mt-1">Cities:</h5>
                            <div class="d-flex mt-1">
                                <p class="ml-2">{{$newdata->city}} </p>
                            </div>
                        </div> -->
                        <hr>
                        <div class="d-flex justify-content-around mt-1">
                        @foreach($amenitie_data as $item)    
                        <div>
                            <div><img src="{{asset('uploads/'.$item->aminite_image)}}" alt="" width="70px" height="50px"></div>
                            <div>{{$item->aminite_name}}</div>
                        </div>
                        @endforeach
                        </div>
                        <hr>
                        <div>
                            <div class="container-fluid mt-1">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div>
                                            <p>Starting from:</p>
                                        </div>
                                        <div>
                                          
                                       @if(!empty($customizedata))
                                       <h4>${{$customizedata->package_custom_price}}/-</h4>
                                        
                                        @else
                                        <h4>${{$newdata->selling_price}}/-</h4>
                                       @endif
                                        
                                    </div>
                                        <div>
                                            <p>Per Person on twin sharing</p>
                                        </div>
                                    </div>
    
                                    <div class="col-sm-6 mt-3">
                                        <div class="text-end"><label for="">Price For The Month</label></div>
                                        <div class=" text-end"> <input type="month" id="start" name="start" min="2022-04"
                                                value="2022-12" class="month_date"></div>
                                    </div>
                                    <hr>
                                  <?php // dd(Auth::guard('customer')->user()); ?>
                                    <div class="d-flex justify-content-around">
                                        <div>
                                          
                                          <?php if(Auth::guard('customer')->user()==''){ ?>
                                            <button class="btn-primary custom_secbtn" data-toggle="modal" data-target=".package_customized" onclick="book({{$newdata->id}})">Book now</button>
                                            <?php } else if(Auth::guard('customer')->user() !=''){ ?>
                                              <button class="btn-primary custom_secbtn" data-toggle="modal"
                                        data-target=".modal-booknow" onclick="booking({{$newdata->id}})">Book now</button>
                                              <?php } ?>

                                        </div>
                                        <div>
                                          <!-- <button class="btn-primary custom_secbtn" data-toggle="modal"  data-target=".package_customiz" >Customize</button> -->
                                          <?php if(Auth::guard('customer')->user()==''){ ?>
                                          <button  id="{{$newdata->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_custom" onclick="custom({{$newdata->id}})" > Customize  </button> 
                                        <?php } else if(Auth::guard('customer')->user() !=''){ ?>
                                          <button  id="{{$newdata->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_cust" onclick="custom({{$newdata->id}})"> Customize  </button> 
                                          <?php } ?>
                    
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
    <!-- slider and aminities end -->

    <!-- banner end -->
    <div class="container space_between">
        <div class="row mt-5">
            <div class="col-sm-10"> 
                
                                      
                {!!html_entity_decode($newdata->description) !!}
            </div>
        </div>
    </div>

    <!-- body Ends -->

    <!-- highlights start -->
    <div class="container space_between border-top my-3 p-3">
        <div class="row">
            <!-- <div>
                <h1 class="pappu my-4">Highlight</h1>
            </div> -->
            <div class="row d-flex inclusion ">
            {!!html_entity_decode($newdata->highlight) !!}
            </div>
        </div>
    </div>
    <!-- highlights ends -->


    <!-- Testimonial Start -->
    <div class="container-fluid events">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h1>More Packages To Visit :</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach($morepackage as $value)
                <div class="text-center pb-4">
                    <img class="img-fluid" src="{{asset('uploads/'.$value->image)}}" alt=""
                        style="width:800px; height: 200px;" />
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <h4 class="mt-5 text-left">
                            {{$value->package_name}}
                        </h4>
                        <p class="text-start">{!!html_entity_decode($newdata->sort_description) !!}</p>

                        <div class="d-flex ">
                            <h3>Price :</h3>
                            <h3 class="ml-3 "> ${{$newdata->selling_price}}</h3>
                        </div>
                        <div class="text-start">
                            <div><span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- faq start -->
    <div class="container bg-light my-3">
    <div class="row">
      <div class="col-sm-12 m-auto">
        <div class="text-center py-5">
          <h2 class="f-40">Frequently Asked Question ?</h2>
        </div>
        @foreach($faq_all as $item)
        <div class="accordion" id="accordionExample">
        
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse{{$item->question_number}}" aria-expanded="false" aria-controls="collapse{{$item->question_number}}">
                {{$item->question}}
              </button>
            </h2>
            <div id="collapse{{$item->question_number}}" class="accordion-collapse collapse" aria-labelledby="heading{{$item->question_number}}"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                {{$item->answer}}
                </p>
              </div>
            </div>
          </div>
        
        </div>
        @endforeach
      </div>
    </div>
  </div>
    <!-- faq end -->

    <!-- for safe holidays  -->
    <div class="container-fluid events">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h1>Our Commitment to Safe Holidays :</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid" src="{{asset('dis/img/events/protectgear.jpg')}}" alt=""
                        style="width:800px; height: 200px;" />
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <h4 class="mt-5 text-left">
                            Availability of Protection Gear 
                        </h4>
                        <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, tempora
                            aliquam possimus
                            provident ipsa ipsam fugiat at nisi. Quae, iste. Lorem ipsum dolor sit. Lorem, ipsum.</p>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid" src="{{asset('dis/img/events/Sanitized_Premises.avif')}}" alt=""
                        style="width:800px; height: 200px;" />
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <h4 class="mt-5 text-left">
                            Sanitized Premises
                        </h4>
                        <p class="text-start mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt,
                            tempora
                            aliquam possimus
                            provident ipsa ipsam fugiat at nisi. Quae, iste. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Reiciendis, sed!</p>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid" src="{{asset('dis/img/events/Social_Distancing_Measures.jpg')}}" alt=""
                        style="width:800px; height: 200px;" />
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <h4 class="mt-5 text-left">
                            Social Distancing Measures
                        </h4>
                        <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, tempora
                            aliquam possimus
                            provident ipsa ipsam fugiat at nisi. Quae, iste.</p>


                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid" src="{{asset('dis/img/events/Regular_Temperature_Checks.jpg')}}" alt=""
                        style="width:800px; height: 200px;" />
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <h4 class="mt-5 text-left">
                            Regular Temperature Checks
                        </h4>
                        <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, tempora
                            aliquam possimus
                            provident ipsa ipsam fugiat at nisi. Quae, iste.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- for safe holidays  -->
    <script>let slideIndex = [1, 1];
        let slideId = ["mySlides1", "mySlides2"]
        showSlides(1, 0);
        showSlides(1, 1);

        function plusSlides(n, no) {
            showSlides(slideIndex[no] += n, no);
        }

        function showSlides(n, no) {
            let i;
            let x = document.getElementsByClassName(slideId[no]);
            if (n > x.length) { slideIndex[no] = 1 }
            if (n < 1) { slideIndex[no] = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex[no] - 1].style.display = "block";
        }</script>




<!-- Booking  modal  start -->
<div class="modal fade modalsignin"
      id="signinModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mysmallmodal"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white" id="exampleModalLongTitle">
              Create Account
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
            <p>
              Signup to keep exploring amazing destinations around the World.
            </p>
            <form  id="signin" onsubmit="submithandler()">
                  @csrf
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input name="name"
                  type="text"
                  class="input_login"
                  placeholder="Full Name*"
                  id="name"
                  required
                />
                
              </div>
              
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas far fa-envelope m-3"></i>
                <input name="email"
                  type="email"
                  class="input_login"
                  placeholder="Email*"
                  id="email"
                  required
                />
                
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fas fa-mobile m-3"></i>
                <input name="mobile"
                  type="phone"
                  class="input_login"
                  placeholder="Mobile Number*"
                  id="phone_number"
                  maxlength="10" 
                  required
                />
                
              </div>
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fas fa-lock m-3"></i>
                <input name = "password"
                  type="password"
                  class="input_login"
                  placeholder="Password*"
                  id="password"
                  required
                />
                
              </div>
              <input
                type="checkbox"
                class="mx-1"
                onclick="togglepassword()"
              />Show Password
              <div class="text-center my-2">
                <!-- <button type="submit" id="submit" name="submit" class="btn btn-primary">
                  Create Account
                </button> -->
                <input type="submit" id="submit" name="submit" class="btn btn-primary" value="submit">
                
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Signup modal  end-->

    <!-- Booking  modal  start -->
<div class="modal fade modal-booknow" id="bookModalCenter" tabindex="-1" role="dialog"              aria-labelledby="mysmallmodal" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white" id="exampleModalLongTitle">
              Book Now
            </h5>
            <button  type="button" class="close" data-dismiss="modal" aria-label="Close" >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('booking')}}" method="post" onsubmit="submithandler()">
                  @csrf              
                <input name="packageid" type="hidden" class="input_login" placeholder="id" id="package_id" required />
              
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input name="checkindate" type="date" class="input_login" placeholder="Checkin date*" id="name" required />
              </div>
              
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input name="checkoutdate" type="date" class="input_login" placeholder="Checkout date*" id="email" required />
              </div>
              
              
              <div class="text-center my-2">
                <button type="submit" name="submit" class="btn btn-primary">
                Proceed to Cart
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Signup modal  end-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
          function booking($id){
            var data = $id;
            //alert(data);
            $('input[name="packageid"]').val(data);
          }
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('#signin').on('submit', function(event ){
  event.preventDefault();
  var form = $("#signin").serializeArray();
  //alert(form);
  $.ajax({
    type : 'POST',
    url : '/signin',
    data: form,
    success: function(data) {
        //alert(data);
        $(".modalsignin").modal().hide();
        $(".modal-booknow").modal("show");
       
        //$('#bookModalCenter').html(data);
       // $("#bookModalCenter").modal-booknow("show");
//$("#signinModalCenter").modal-signin("hide");
        
    },
    error: function(data){
        alert("fail");
    }
  });
});
</script>




<!-- testing two step pop up -->

   <!-- customized button popup start -->

   <div  class="modal fade package_customized"  id="exampleModalCenter" tabindex="-1"
      role="dialog"  aria-labelledby="mysmallmodal" aria-hidden="true" >
      <div class="">
        <div class="modal-dialog poopupwidth modal-dialog-centered modal-md"  role="document">
          <div class="modal-content text-center">
            <div class="modal-header bg-primary">
              <h5 class="modal-title text-white" id="exampleModalLongTitle">
                Booking Form
              </h5>
              <button type="button"  class="close"  data-dismiss="modal"  aria-label="Close" >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="customize_packages p-3"> 
              <div class="customize_packages_form" id="first_modalform">
                <h3 class="text-primary my-4">Guest User Login Form</h3>
                <form action="" method="POST" id="form_place">
                @csrf
                <input  type="hidden" name="package_id" class="customizepackages_input" />
                <div class="mb-2">
                    <input  type="text" name="name" placeholder="Name" class="customizepackages_input" />
                  </div>
                <div class="mb-2">
                    <input  type="email" name="email" placeholder="Email id" class="customizepackages_input" />
                  </div>
                  <div class="mb-2">
                    <input  type="phone" name="mobile"  placeholder="Phone  number" class="customizepackages_input"
                    />
                  </div>

                  <button type="submit"  class="btn-primary w-80 p-2 mt-2"  onclick="modalform()" >
                    Next
                    <i class="fas fa-1x fas fas fa-angle-right"></i>
                  </button>
                </form>
              </div>
              <div class="customize_packages_form"  id="second_modalform" style="display: none" >
               
                <h3 class="text-primary mb-3">Booking Form</h3>
                <form action="" id="form_place1">
                  @csrf
                  <input  type="hidden" name="package_id" class="customizepackages_input" />
                <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input name="checkindate" type="date" class="input_login" placeholder="Checkin date*"  required />
              </div>
              
              <div class="input_modallogin mb-3">
                <i class="fas fa-1x fas fa-user m-3"></i>
                <input name="checkoutdate" type="date" class="input_login" placeholder="Checkout date*" required />
              </div>
              <button
                  type="submit"
                  class="btn-primary w-80 p-2"
                  onclick="redirect()"
                >
                  Book Now
                </button>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->

    <script>
      function modalform() {
        document.getElementById("first_modalform").style.display = "none";
        document.getElementById("second_modalform").style.display = "block";
      }
      const modalform_hide = () => {
        document.getElementById("second_modalform").style.display = "none";
      };
      const form = document.getElementById("form_place");
      const submitform = (e) => {
        e.preventDefault();
      };
      form.addEventListener("submit", submitform);
      
    </script>

    <!-- customized button popup ends -->


<!-- testing two step pop up -->

<script>
  function book($id){
    var id = $id;
    //alert(id);
    $('input[name="package_id"]').val(id);
    $('input[name="package_id"]').val(id);
  } 


 $(document).ready(function() {
  $('#form_place').on('submit', function(event){
    event.preventDefault();
    var form = $("#form_place").serializeArray();
    // alert(form);
    $.ajax({
      type : 'POST',
      url : '/signin',
      data : form,
      success : function(data){
        //alert(data);
        document.getElementById("second_modalform").style.display="block";
        document.getElementById("first_modalform").style.display="none";
      },
      error:function (response){
            //alert(data);
            $.each(response.responseJSON.errors,function(name,error){
                $(document).find('[name='+name+']').after('<p class="text-strong text-danger">' +error+ '</p>')
            })
        }
    })
  });
 });


 $(document).ready(function() {
    $('#form_place1').on('submit', function(event){
      event.preventDefault();
      var form = $("#form_place1").serializeArray();
      $.ajax({
        type : 'POST',
        url : '/booksubmit',
        data : form,
        success : function(data){
          window.location.href=data;
          console.log(data);
          //alert(data);
        },
        error:function (response){
            //alert(data);
            $.each(response.responseJSON.errors,function(checkindate,error){
                $(document).find('[name='+checkindate+']').after('<p class="text-strong text-danger">' +error+ '</p>')
            })
        }
      });
    });
 });
</script>



<!-- package details customize -->
<!-- package details customize -->
<!-- package details customize -->
<!-- package details customize -->
<!-- customized button popup start -->
<div class="modal fade package_custom"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="mysmallmodal"
      aria-hidden="true"
    >
      <div class="">
        <div
          class="modal-dialog poopupwidth modal-dialog-centered modal-md"
          role="document"
        >
          <div class="modal-content text-center">
            <div class="modal-header bg-primary">
              <h5 class="modal-title text-white" id="exampleModalLongTitle">
                Booking Form
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
            <div class="customize_packages">
              <div class="customize_packages_list">
                <div class="works_title">
                  <h3 class="text-primary">How it Works ?</h3>
                  <ol type="1">
                    <li class="text-left list_item">
                      Tell us details of your holidays plan
                    </li>
                    <li class="text-left list_item">
                      Get multiple quotes from expert agents, compare &
                      customize further.
                    </li>
                    <li class="text-left list_item">
                      Select & book best deal.
                    </li>
                    <div class="list-box">
                      <div class="select_box_list">
                        <img
                          src="{{asset('dis/img/events/personimg.jpg')}}"
                          width="60px"
                          alt=""
                        />
                        <p class="ml-1 mt-1 hover_color">
                          650+ Verified Agents
                        </p>
                      </div>
                      <div class="select_box_list">
                        <img
                          src="{{asset('dis/img/events/notebookimg.png')}}"
                          width="60px"
                          alt=""
                        />
                        <p class="ml-1 mt-1 hover_color">
                          Traveltriangle Verified
                        </p>
                      </div>
                      <div class="select_box_list">
                        <img
                          src="{{asset('dis/img/events/notebookimg.png')}}"
                          width="60px"
                          alt=""
                        />
                        <p class="ml-1 mt-1 hover_color">
                          Stringent Quality Control
                        </p>
                      </div>
                    </div>
                  </ol>
                </div>

                <span class="d-flex justify-content-center align-items-center">
                  <i class="fas fa-1x fas fas fa-mobile m-3"></i>
                  <p class="mb-0">Call us for details</p>
                </span>
                <h3 class="text-primary">1800-123-5555</h3>
                <span class="mb-3">650+ Agents | 65+ Destinations</span>
              </div>
              <div class="customize_packages_form" id="third_modalform">
                <img
                  src="{{asset('dis/img/events/Page 1 Travel Location Icon (1).svg')}}"
                  width="100px"
                  alt=""
                />
                <h3 class="text-primary">Where do you want to go?</h3>
                <form id="form_place11" onclick="mycustom()">
                @csrf
                  <div class="mb-2">
                    <input type="text" name="to"  placeholder="To" class="customizepackages_input" />
                  </div>
                  <div class="mb-2">
                    <input type="text" name="from" placeholder="From" class="customizepackages_input" />
                  </div>
                  <div class="mb-2">
                    <input type="text" name="startdate" placeholder="Start Date" id="minDate" class="customizepackages_input" onfocus="(this.type='date')"
                      onblur="if(!this.value)this.type='text'" />
                  </div>
                  <div class="mb-2">
                    <input type="text" name="enddate" placeholder="End Date" id="maxDate" class="customizepackages_input" onfocus="(this.type='date')"
                      onblur="if(!this.value)this.type='text'" />
                  </div>
                  <div class="mb-2">
                    <input type="hidden" name="packageid" class="customize_person_input" />
                    <input type="hidden" name="oldperson" class="customize_person_input" />
                    <input type="hidden" name="oldday" class="customize_person_input" />
                    <input type="hidden" name="customday" class="customize_person_input" />
                    <input type="hidden" name="customperson" class="customize_person_input" />
                    <input type="hidden" name="price" class="customize_person_input" />
                    <input type="number" name="person"  placeholder="Person" min="1" max="100"  class="customize_person_input"/>
                    <input type="number" name="day" placeholder="Days" min="1" max="100" class="customize_person_input" />
                  </div>
                  <input type="submit" id="submit" class="btn-primary w-80 p-2" value="Next"   >
                  <!-- <button class="btn-primary w-80 p-2" onclick="modalform()"  >
                    Next
                    <i class="fas fa-1x fas fas fa-angle-right"></i>
                  </button> -->
                </form>
                </div>
               <div class="customize_packages_form" id="fourth_modalform" style="display: none;">
                <img src="./img/events/phoneimg121.jpg" width="100px" alt="" />
              <h3 class="text-primary">How do we contact you?</h3>
              <form action="" id="form_place12">
                @csrf
                <div class="mb-2">
                  <input type="email" name="email" placeholder="Email id" class="customizepackages_input" />
                </div>
                <div class="mb-2">
                  <input type="tel" name="phone" placeholder="Phone  number" class="customizepackages_input" />
                </div>
                <input type="submit" name="submit" id="submit" class="btn-primary w-80 p-2" value="Plan Your Holidays"   >
              </form>
              <!-- <button type="submit" name="submit" class="btn-primary w-80 p-2" >
                Plan Your Holidays
              </button> -->
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
               
          function custom($id){
                var data = $id;
               var  url = `/customid/${data}`;
            $(document).ready(function() {    
                  $.ajax({
                    type : 'GET',
                    url : url,
                    data : data,
                    success: function(data) {   
                      newActivityNo = data.package_no_of_person;
                      newPerson = data.package_no_of_person;
                      newActivity = data.package_day;
                      newDay = data.package_day;
                      newA = data.selling_price;
                      newCustomday = data.customize_day_price;
                      newCustomperson = data.customize_person_price;
                      id = data.id;
                      $('input[name="person"]').val(newActivityNo);
                      $('input[name="day"]').val(newActivity);
                      $('input[name="price"]').val(newA);
                      $('input[name="customday"]').val(newCustomday);
                      $('input[name="customperson"]').val(newCustomperson);
                      $('input[name="oldperson"]').val(newPerson);
                      $('input[name="oldday"]').val(newDay);
                      $('input[name="packageid"]').val(id);
                      }
                  });
                });   
            }

            
            $(document).ready(function() {
              $('#form_place11').on('submit', function(e){
                e.preventDefault();
                var form = $("#form_place11").serializeArray();
                //alert(form);
                $.ajax({
                  type : 'POST',
                  url : '/customdata',
                  data: form,
                  success : function(data){
                    document.getElementById("fourth_modalform").style.display="block";
                    document.getElementById("third_modalform").style.display="none";
                   // modalform()
                    //$("#submit").modal('show');
                  },
                  error:function (response){
                    //alert(data);
                      $.each(response.responseJSON.errors,function(to,error){
                          $(document).find('[name='+to+']').after('<p class="text-strong text-danger">' +error+ '</p>')
                      })
                  }
                });
              });
            });

            $(document).ready(function() {
              $('#form_place12').on('submit' , function(e){
                e.preventDefault();
                //alert('hello');
                var form = $("#form_place12").serializeArray();
                //alert(form);
                $.ajax({
                  type : 'POST',
                  url : '/customajax',
                  data: form,
                  success : function(data){
                      window.location.href=data;
                  },
                  error:function (response){
                    //alert(data);
                      $.each(response.responseJSON.errors,function(email,error){
                          $(document).find('[name='+email+']').after('<p class="text-strong text-danger">' +error+ '</p>')
                      })
                  }
                });
              });
            });

          $(document).ready(function(){
            $("#form_login").on("submit",function(e){
              e.preventDefault();
              //alert('hello');
              var form = $("#form_login").serializeArray();
              //alert(form);
              $.ajax({
                type : 'POST',
                url : '/logincustomize',
                data : form,
                success :function(data){
                  //alert(data);
                  window.location.href=data;
                },
                error:function (response){
                    //alert(response);
                      $.each(response.responseJSON.errors,function(email,error){
                          $(document).find('[name='+email+']').after('<p class="text-strong text-danger">' +error+ '</p>')
                      });
                    }
              });
            });

          });
</script>

<script>
      function modalform() {
        document.getElementById("third_modalform").style.display = "none";
        document.getElementById("fourth_modalform").style.display = "block";
      }
      const modalfor_hide = () => {
        document.getElementById("third_modalform").style.display = "none";
      };
      const form1 = document.getElementById("form_place11");
      const submitform1 = (e) => {
        e.preventDefault();
      };
      form.addEventListener("submit", submitform);
      
    </script>

    <!-- new popup for Login user -->
<div class="modal fade package_cust" id="exampleModalCenter" tabindex="-1" role="dialog"  aria-labelledby="mysmallmodal" aria-hidden="true" >
      <div class="">
        <div class="modal-dialog poopupwidth modal-dialog-centered modal-md"
          role="document" >
          <div class="modal-content text-center">
            <div class="modal-header bg-primary">
              <h5 class="modal-title text-white" id="exampleModalLongTitle">
                Booking Form
              </h5>
              <button type="button"  class="close" data-dismiss="modal" aria-label="Close" >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="customize_packages">
              <div class="customize_packages_list">
                <div class="works_title">
                  <h3 class="text-primary">How it Works ?</h3>
                  <ol type="1">
                    <li class="text-left list_item">
                      Tell us details of your holidays plan
                    </li>
                    <li class="text-left list_item">
                      Get multiple quotes from expert agents, compare &
                      customize further.
                    </li>
                    <li class="text-left list_item">
                      Select & book best deal.
                    </li>
                    <div class="list-box">
                      <div class="select_box_list">
                        <img
                          src="{{asset('dis/img/events/personimg.jpg')}}"
                          width="60px"
                          alt=""
                        />
                        <p class="ml-1 mt-1 hover_color">
                          650+ Verified Agents
                        </p>
                      </div>
                      <div class="select_box_list">
                        <img
                          src="{{asset('dis/img/events/notebookimg.png')}}"
                          width="60px"
                          alt=""
                        />
                        <p class="ml-1 mt-1 hover_color">
                          Traveltriangle Verified
                        </p>
                      </div>
                      <div class="select_box_list">
                        <img
                          src="{{asset('dis/img/events/notebookimg.png')}}"
                          width="60px"
                          alt=""
                        />
                        <p class="ml-1 mt-1 hover_color">
                          Stringent Quality Control
                        </p>
                      </div>
                    </div>
                  </ol>
                </div>

                <span class="d-flex justify-content-center align-items-center">
                  <i class="fas fa-1x fas fas fa-mobile m-3"></i>
                  <p class="mb-0">Call us for details</p>
                </span>
                <h3 class="text-primary">1800-123-5555</h3>
                <span class="mb-3">650+ Agents | 65+ Destinations</span>
              </div>
              <div class="customize_packages_form" >
                <img
                  src="{{asset('dis/img/events/Page 1 Travel Location Icon (1).svg')}}"
                  width="100px"
                  alt=""
                />
                <h3 class="text-primary">Where do you want to go?</h3>
                <form id="form_login" onclick="mycusto()">
                @csrf
                  <div class="mb-2">
                    <input type="text" name="to"  placeholder="To" class="customizepackages_input" />
                  </div>
                  <div class="mb-2">
                    <input type="text" name="from" placeholder="From" class="customizepackages_input" />
                  </div>
                  <div class="mb-2">
                    <input type="text" name="startdate" placeholder="Start Date" id="minDate" class="customizepackages_input" onfocus="(this.type='date')"
                      onblur="if(!this.value)this.type='text'" />
                  </div>
                  <div class="mb-2">
                    <input type="text" name="enddate" placeholder="End Date" id="maxDate" class="customizepackages_input" onfocus="(this.type='date')"
                      onblur="if(!this.value)this.type='text'" />
                  </div>
                  <div class="mb-2">
                    <input type="hidden" name="packageid" class="customize_person_input" />
                    <input type="hidden" name="oldperson" class="customize_person_input" />
                    <input type="hidden" name="oldday" class="customize_person_input" />
                    <input type="hidden" name="customday" class="customize_person_input" />
                    <input type="hidden" name="customperson" class="customize_person_input" />
                    <input type="hidden" name="price" class="customize_person_input" />
                    <input type="number" name="person"  placeholder="Person" min="1" max="100"  class="customize_person_input"/>
                    <input type="number" name="day" placeholder="Days" min="1" max="100" class="customize_person_input" />
                  </div>
                  <input type="submit" id="submit" class="btn-primary w-80 p-2" value="Submit" />
                </form>
                </div>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 <!-- new popup for guest user -->

@endsection


    