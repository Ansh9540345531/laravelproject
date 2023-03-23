@extends('front.layout.app')
@section('content')

<!-- banner start -->
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
                                <img src="{{asset('uploads/'.$item->photo)}}" />
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
    </div>
    <div class="text-center">
        <a class="btn btn-primary" href="{{route('hotelsoffer')}}">View More</a>
    </div>
    <!-- Packages End -->

   
    @endsection