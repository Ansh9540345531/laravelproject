@extends('front.layout.app')
@section('content')

<div class="container-fluid bg-registrationbanner py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
                            Mega Offer
                        </h6>
                        <h1 class="text-white">
                            <span class="text-primary">30% OFF</span>
                            On Hotel's
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- journey begins -->
    <div class="">
        <div class=" container-fluid events">
            <div class="container">

                <div class="text-center">
                    <p class="text-primary">TRAVEL PACKAGES</p>
                    <h2>Hotel's Listing Page</h2>
                </div>

            </div>
        </div>
    </div>
    <!-- journey ends -->
    <div id="honeymoonpackage" style="display: block;">
        <div class="container-fluid events">
            <div class="container">

                <!-- tabs -->
                <div class="text-center">
                    <div class="mb-5">
                        <button class="tablink booking_tabs change_border p-2"
                            onclick="openCity(event,'International_honeymoonpackage')">
                            International
                        </button>
                        <button class="tablink booking_tabs p-2 border-none"
                            onclick="openCity(event,'Domestic_honeymoonpackage')">
                            Domestic
                        </button>
                    </div>
                </div>

                <!-- filters start -->
                <div class="container">
                    <div class="search-hotels room-search pattern">
                        <div class="search-room-title">
                            <h5>Choose your room</h5>
                        </div>

                        <div class="container">
                            <div class="row">
                                <form method="post">
                                    <div class="icon_input mt-3">
                                        <i class="fas fa-1x fas fas fa-location-arrow "
                                            style="margin-top: 5px;margin-left:4px"></i>
                                        <input type="text" placeholder="Destination" class="form_control">
                                    </div>

                                </form>
                            </div>
                            <div class="row my-4">
                                <div class="d-flex">
                                    <div class="icon_input mr-2">
                                        <i class="fas fa-1x fas fas fa-calendar-alt "
                                            style="margin-left:4px"></i>
                                        <input class="form_control" name="date" type="text" onfocus="(this.type='date')"
                                            onblur="if(!this.value)this.type='text'" placeholder="Arival Date">
                                    </div>
                                    <div class="icon_input mr-2">
                                        <i class="fas fa-1x fas fas fa-calendar-alt"
                                            style="margin-left:4px"></i>
                                        <input class="form_control" name="date" type="text" onfocus="(this.type='date')"
                                            onblur="if(!this.value)this.type='text'" placeholder="Departure Date">
                                    </div>
                                    <div class="icon_input mr-2">
                                        <i class="fas fa-1x fas fas fa-user "
                                            style="margin-left:4px"></i>
                                        <select class="form_control" name="cars" id="cars" style="width: 120px;">
                                            <option value="volvo">Adult</option>
                                            <option value="saab">1</option>
                                            <option value="opel">2</option>
                                            <option value="audi">3</option>
                                            <option value="audi">4</option>
                                            <option value="audi">5</option>
                                        </select>
                                    </div>
                                    <div class="icon_input mr-2">
                                        <i class="fas fa-1x fas fas fa-user "
                                            style="margin-left:4px"></i>
                                        <select class="form_control" name="cars" id="cars" style="width: 120px;">
                                            <option value="volvo">Child</option>
                                            <option value="saab">1</option>
                                            <option value="opel">2</option>
                                            <option value="audi">3</option>
                                            <option value="audi">4</option>
                                            <option value="audi">5</option>
                                        </select>
                                    </div>
                                    <div class="icon_input mr-2">
                                        <i class="fas fa-1x fas fas fa-home "
                                            style="margin-left:4px"></i>
                                        <select class="form_control" name="cars" id="cars" style="width: 120px;">
                                            <option value="volvo">Rooms</option>
                                            <option value="saab">1</option>
                                            <option value="opel">2</option>
                                            <option value="audi">3</option>
                                            <option value="audi">4</option>
                                            <option value="audi">5</option>
                                        </select>
                                    </div>


                                    <div>
                                        <button class="btn-primary list_bookbutton " href="" data-toggle="modal"
                                            data-target=".modal-signup ">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- filters ends -->


                
                <div class="city" id="International_honeymoonpackage">
                    <div class="row">
                    
                    @foreach($hoteldesc as $item)
                    <?php
                        if($item->hotel_catagories == "International"){ ?>
                        <div class="col-sm-4 mt-3">
                            <div class="card pb-2">
                                <img src="{{asset('uploads/'.$item->photo)}}"/>
                                <div class=" p-4 text-center">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <a href="{{route('hoteldetails',['id' => $item->id])}}" class="text-decoration-none">
                                                <h5 class="fw-bold text-left links">{{$item->hotel_name}}</h5>
                                            </a>
                                            <p class=" text-left hotel_text">{{$item->hotel_location}}</p>
                                        </div>
                                    </div>
                                    <div class="text-left"><span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between mt-4">
                                        <div class="">
                                            <h5 class="mt-2 package_price">${{$item->today_price}}</h5>
                                        </div>
                                        <div class=""><button class="btn btn-primary" href="" data-toggle="modal"
                                                data-target=".modal-signup ">Book Now</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }
                    ?>
                    @endforeach    
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="container">
                <div class="city" id="Domestic_honeymoonpackage" style="display: none;">
                    <div class="row">
                    @foreach($hoteldesc as $item)
                    <?php
                        if($item->hotel_catagories == "Domestic"){ ?>

                        <div class="col-sm-4 mt-3">
                            <div class="card pb-2">
                                <img src="{{asset('uploads/'.$item->photo)}}"/>
                                <div class=" p-4 text-center">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <a href="{{route('hoteldetails',['id' => $item->id])}}" class="text-decoration-none">
                                                <h5 class="fw-bold text-left links">{{$item->hotel_name}}</h5>
                                            </a>
                                            <p class=" text-left hotel_text">{{$item->hotel_location}}</p>
                                        </div>
                                    </div>
                                    <div class="text-left"><span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between mt-4">
                                        <div class="">
                                            <h5 class="mt-2 package_price">${{$item->today_price}}</h5>
                                        </div>
                                        <div class=""><button class="btn btn-primary" href="" data-toggle="modal"
                                                data-target=".modal-signup ">Book Now</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }
                    ?>
                    @endforeach   


                            </div>
                        </div>
                    </div>
                </div>
                 </div>

            </div>
        </div>
    </div>



    <!-- pagination start -->
    <!-- <div class="container mt-4">
        <div class="pagination text-center mt-4">
            <a href="#">prev</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">next</a>
        </div>
    </div> -->
    <!-- pagination ends -->
    <!-- Packages End -->
 <!-- customized button popup start -->

 <div class="modal fade  package_customized" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="mysmallmodal" aria-hidden="true">
        <div class="">
            <div class="modal-dialog poopupwidth modal-dialog-centered modal-md" role="document">
                <div class="modal-content  text-center">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="exampleModalLongTitle">
                            Booking Form
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row d-flex">
                        <div class="col-sm-6">
                            <div class="m-3">
                                <h3 class="ul_text">How it works</h3>
                            </div>
                            <div>
                                <ol type="1">
                                    <li class="my-3 text-left hover_color">Tell us details of your holidays plan</li>
                                    <li class="text-left hover_color">Get multiple quotes from expert agents, compare &
                                        customize further.
                                    </li>
                                    <li class="my-3 text-md-left hover_color">Select & book best deal.</li>
                                </ol>
                            </div>
                            <div class="d-flex">
                                <div class="ml-2">
                                    <img src="{{asset('dis/img/events/personimg.jpg')}}" width="60px" alt="">
                                    <p class="ml-1 mt-1 hover_color">650+ <br> Verified Agents</p>
                                </div>
                                <div class="ml-2">
                                    <img src="{{asset('dis/img/events/notebookimg.png')}}" width="60px" alt="">
                                    <p class="ml-1 mt-1 hover_color">Traveltriangle <br>Verified</p>
                                </div>
                                <div class="ml-2">
                                    <img src="{{asset('dis/img/events/notebookimg.png')}}" width="60px" alt="">
                                    <p class="ml-1 mt-1 hover_color ">Stringent <br>Quality Control</p>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <p class="hover_color"> <i class="fas fa-1x fas fas fa-mobile m-3"></i>Call us for
                                    details</p>
                                <h3 class="ul_text">1800-123-5555</h3>
                            </div>
                            <div class="hover_color">
                                <p>650+ Agents | 65+ Destinations</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div>
                                <div class="m-2">
                                    <img src="{{asset('dis/img/events/Page 1 Travel Location Icon (1).svg')}}" width="100px" alt="">
                                </div>
                                <div>
                                    <h4 class="ul_text">Where do you want to go?</h4>
                                </div>
                            </div>
                            <form>
                                <div class="m-3">
                                    <div>
                                        <div class="text-start">
                                            <input class="popup_pack" type="text" placeholder="To" id="to" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-3">
                                    <div>
                                        <div class="text-start">
                                            <input class="popup_pack" type="text" placeholder="From" id="from" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-3 d-flex">
                                    <div class="text-start">
                                        <input placeholder="Date" class="popup_pack" type="text"
                                            onfocus="(this.type='date')" onblur="(this.type='text')" id="date"
                                            required />
                                    </div>
                                </div>
                                <div class="d-flex ">
                                    <div><input type="number" class="popup-class" placeholder="No. of person"></div>
                                    <div><input type="number" class="popup-class text-center" placeholder="No. of days">
                                    </div>
                                </div>
                                <div class="mt-4 mb-4">
                                    <button type="submit" class="popbutton px-5" data-toggle="modal"
                                        data-target=".package_customizedsection" data-dismiss="modal">Next <i
                                            class="fas fa-1x fas fas fa-angle-right"></i></button>
                                </div>
                            </form>
                            <!-- <form action="">
              <input type="text" required>
              <button>submit</button>
            </form> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- customized button popup ends -->
    <!-- customized button popup 2 start -->
    <div class="modal fade package_customizedsection" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="mysmallmodal" aria-hidden="true">
        <div class="modal-dialog poopupwidth modal-dialog-centered modal-md" role="document">
            <div class="modal-content text-center">
                <div class="modal-header000 bg-primary">
                    <h5 class="modal-title text-white" id="exampleModalLongTitle">
                        Booking Form
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row d-flex">
                    <div class="col-sm-6">
                        <div class="m-3">
                            <h2 class="ul_text">How it works</h2>
                        </div>
                        <div>
                            <ol type="1">
                                <li class="my-3 hover_color text-md-left">Tell us details of your holidays plan</li>
                                <li class="text-md-left hover_color">Get multiple quotes from expert agents, compare &
                                    customize
                                    further.</li>
                                <li class="my-3 hover_color text-md-left">Select & book best deal.</li>
                            </ol>
                        </div>
                        <div class="d-flex my-4">
                            <div class="ml-2">
                                <img src="{{asset('dis/img/events/personimg.jpg')}}" width="60px" alt="">
                                <p class="ml-1 mt-1 hover_color">650+ <br> Verified Agents</p>
                            </div>
                            <div class="ml-2">
                                <img src="{{asset('dis/img/events/notebookimg.png')}}" width="60px" alt="">
                                <p class="ml-1 mt-1 hover_color ">Stringent <br>Quality Control</p>
                            </div>
                            <div class="ml-2">
                                <img src="{{asset('dis/img/events/notebookimg.png')}}" width="60px" alt="">
                                <p class="ml-1 mt-1  hover_color">Stringent <br>Quality Control</p>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <p class="hover_color"> <i class="fas fa-1x fas fas fa-mobile  m-3"></i>Call us for details
                            </p>
                            <h3 class="ul_text ">1800-123-5555</h3>
                        </div>
                        <div>
                            <p class="text-center hover_color">650+ Agents | 65+ Destinations</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <div class="m-2"><img src="{{asset('dis/img/events/phoneimg121.jpg')}}" width="100px" alt=""></div>
                            <div>
                                <h3 class="ul_text">How do we contact you?</h3>
                            </div>
                        </div>
                        <div class="m-3">
                            <div>
                                <div class="text-start"><label for="">Email ID*</label></div>
                                <div class="text-start">
                                    <input type="text" class="popup_pack" placeholder="To" class="contact_inp1">
                                </div>
                            </div>
                        </div>
                        <div class="m-3">
                            <div>
                                <div class="text-start"><label for="" aria-required="true">Phone No*</label></div>
                                <div class="text-start">
                                    <input type="text" class="popup_pack" placeholder="From" class="contact_inp1">
                                </div>
                            </div>
                        </div>

                        <div class="my-5">
                            <a href="./packageviewmore.html">
                                <button class="popbutton px-3">
                                    Plan Your Holidays</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- customized button popup 2 ends -->

    
    @endsection 