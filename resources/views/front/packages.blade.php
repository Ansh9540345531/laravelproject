@extends('front.layout.app')

@section('content')



<div class="container-fluid bg-registrationbanner py-5 mb-5" style="background-image:url({{asset('/dis/img/events/packageinner_banner.jpg')}}); background-repeat:no-repeat center center; background-size: cover;">
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
                On Packages
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

    <!-- journey begins -->
    <div class="py-5 mb-3">
      <div class="container-fluid events">
        <div class="container pt- pb-3">
          <div class="text-center mb-3 pb-3">
            <p class="text-primary">TRAVEL PACKAGES</p>
            <h1>Where the journey begins!</h1>
          </div>
          
          <div class="packages_category">
          @foreach($package as $item)
          
            <div class="honeymoonpackage_detail" onclick="packages({{$item->id}})" style="background-image: url({{asset('uploads/'.$item->image)}})"  checked>
              <div class="bg-overflow">
                <p class="package_desc">
                {{ $item->name }}
                </p>
              </div>
            </div>
          @endforeach
            
          </div>
        </div>
      </div>
    </div>
    <!-- journey ends -->
    <div id="honeymoonpackage" style="display: block;">
      <div class="container-fluid events">
        <div class="container">
          <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;" >
              Couple Packages
            </h6>
            <h1 class="mb-3">Perfect Tour Packages</h1>
          </div>

          <!-- tabs -->
          <div class="text-center">
            <div class="mb-5">
              <button
                class="tablink booking_tabs change_border p-2"
                onclick="openCity(event,'International_honeymoonpackage')"
              >
                International
              </button>
              <button
                class="tablink booking_tabs p-2 border-none"
                onclick="openCity(event,'Domestic_honeymoonpackage')"
              >
                Domestic
              </button>
            </div>
          </div>

          <!-- filters start -->
          <!-- <div class="container">
            <div class="search-hotels room-search pattern">
              <div class="search-room-title">
                <h5>Choose your room</h5>
              </div>

              <div class="container">
                <div class="row">
                  <form method="post">
                    <div class="icon_input mt-3">
                      <i
                        class="fas fa-1x fas fas fa-location-arrow"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <input
                        type="text"
                        placeholder="Destination"
                        class="form_control"
                      />
                    </div>
                  </form>
                </div>
                <div class="row my-4">
                  <div class="d-flex">
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-calendar-alt"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <input
                        class="form_control"
                        name="date"
                        type="text"
                        onfocus="(this.type='date')"
                        onblur="if(!this.value)this.type='text'"
                        placeholder="Arival Date"
                      />
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-calendar-alt"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <input
                        class="form_control"
                        name="date"
                        type="text"
                        onfocus="(this.type='date')"
                        onblur="if(!this.value)this.type='text'"
                        placeholder="Departure Date"
                      />
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-user"
                        style="
                          margin-left: 4px;
                          margin-bottom: 2px;
                          background-color: transparent;
                        "
                      ></i>
                      <select
                        class="form_control"
                        name="cars"
                        id="cars"
                        style="width: 120px;"
                      >
                        <option value="volvo">Adult</option>
                        <option value="saab">1</option>
                        <option value="opel">2</option>
                        <option value="audi">3</option>
                        <option value="audi">4</option>
                        <option value="audi">5</option>
                      </select>
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-user"
                        style="
                          margin-left: 4px;
                          margin-bottom: 2px;
                          background-color: transparent;
                        "
                      ></i>
                      <select
                        class="form_control"
                        name="cars"
                        id="cars"
                        style="width: 120px;"
                      >
                        <option value="volvo">Child</option>
                        <option value="saab">1</option>
                        <option value="opel">2</option>
                        <option value="audi">3</option>
                        <option value="audi">4</option>
                        <option value="audi">5</option>
                      </select>
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-home"
                        style="
                          margin-left: 4px;
                          margin-bottom: 2px;
                          background-color: transparent;
                        "
                      ></i>
                      <select
                        class="form_control"
                        name="cars"
                        id="cars"
                        style="width: 120px;"
                        prefix=""
                      >
                        <option value="volvo">Rooms</option>
                        <option value="saab">1</option>
                        <option value="opel">2</option>
                        <option value="audi">3</option>
                        <option value="audi">4</option>
                        <option value="audi">5</option>
                      </select>
                    </div>

                    <div>
                      <button
                        class="btn-primary list_bookbutton"
                        href=""
                        data-toggle="modal"
                        data-target=".modal-signup "
                      >
                        Book Now
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- filters ends -->
          <div class="city" id="International_honeymoonpackage">
            <div class="row">
              @foreach($inter1 as $item)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                <?php
                    $id = Crypt::encrypt($item->id); 
                ?>
                  <a href="{{route('package_details',['id' => $id])}}">
                    <img class="img-fluid" src="{{asset('uploads/'.$item->image)}}" alt="" />
                  </a>
                  <div class="p-4">
                    <div class="d-flex justify-content-between mb-3">
                      <small class="m-0">
                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                        {{$item->city}}
                      </small>
                      <small class="m-0">
                        <i class="fa fa-calendar-alt text-primary mr-2"></i>
                        {{$item->package_day}} days
                      </small>
                      <small class="m-0">
                        <i class="fa fa-user text-primary mr-2"></i>
                        {{$item->package_no_of_person}} Person
                      </small>
                    </div>
                    <div>
                      <div>
                        <a
                          class="h5 text-decoration-none"
                          href="{{route('package_details',['id' => $id])}}"
                        >
                        {{$item->package_name}}
                        </a>
                      </div>
                      <div>
                        <h5 class="mt-2 package_price">${{$item->selling_price}}</h5>
                      </div>
                      
                    </div>
                    <div class="border-top mt-4 pt-4">
                      <div class="d-flex justify-content-between">
                        <h6 class="m-0">
                         
                          <a
                            href="{{route('package_details',['id' => $id])}}"
                            class="package_element"
                          >
                            View More
                          </a>
                        </h6>
                        <div class="m-0">
                          <?php  $id = Session::get('userid');  ?>
                          <?php if(Auth::guard('customer')->user()=='' && empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customized" onclick="custom({{$item->id}})" > Customize  </button> 
                          <?php } else if(Auth::guard('customer')->user() !=''){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                          <?php }else if(Auth::guard('customer')->user()=='' && !empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php } ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
<?php
$category_id = $inter1[0]->category_id;
$category_id = Crypt::encrypt($category_id);
$package_destination = $inter1[0]->package_destination;
$package_destination = Crypt::encrypt($package_destination);

?>

            <div class="text-center">
               <a class="btn btn-primary" href="{{ route('packagelisting',['category_id'=>$category_id,'package_destination'=>$package_destination])}}">View More</a>
            </div>
          </div>

          <div class="city"  id="Domestic_honeymoonpackage" style="display: none;" >
            <div class="row">
              @foreach($domestic1 as $item)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                <?php
                    $id = Crypt::encrypt($item->id); 
                ?>
                  <a href="{{route('package_details',['id' => $id])}}">
                    <img class="img-fluid" src="{{asset('uploads/'.$item->image)}}" alt="" />
                  </a>
                  <div class="p-4">
                    <div class="d-flex justify-content-between mb-3">
                      <small class="m-0">
                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                        {{$item->city}}
                      </small>
                      <small class="m-0">
                        <i class="fa fa-calendar-alt text-primary mr-2"></i>
                        {{$item->package_day}} days
                      </small>
                      <small class="m-0">
                        <i class="fa fa-user text-primary mr-2"></i>
                        {{$item->package_no_of_person}} Person
                      </small>
                    </div>
                    <div>
                      <div>
                        <a
                          class="h5 text-decoration-none"
                          href="{{route('package_details',['id' => $id])}}"
                        >
                        {{$item->package_name}}
                        </a>
                      </div>
                      <div>
                        <h5 class="mt-2 package_price">${{$item->selling_price}}</h5>
                      </div>
                      
                    </div>
                    <div class="border-top mt-4 pt-4">
                      <div class="d-flex justify-content-between">
                        <h6 class="m-0">
                         
                          <a
                            href="{{route('package_details',['id' => $id])}}"
                            class="package_element"
                          >
                            View More
                          </a>
                        </h6>
                        <div class="m-0">
                        <?php  $id = Session::get('userid');  ?>
                        <?php if(Auth::guard('customer')->user()=='' && empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customized" onclick="custom({{$item->id}})" > Customize  </button> 
                          <?php } else if(Auth::guard('customer')->user() !=''){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php }else if(Auth::guard('customer')->user()=='' && !empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

<?php
$category_id = $domestic1[0]->category_id;
$category_id = Crypt::encrypt($category_id);
$package_destination = $domestic1[0]->package_destination;
$package_destination = Crypt::encrypt($package_destination);
?>

              <div class="text-center">
                <a class="btn btn-primary" href="{{ route('packagelisting',['category_id'=>$category_id,'package_destination'=>$package_destination])}}">View More</a>
              </div>
          </div>


        </div>
      </div>
    </div>

    <div id="solopackage" style="display: none;">
      <div class="container-fluid events">
        <div class="container">
          <div class="text-center mb-3 pb-3">
            <h6
              class="text-primary text-uppercase"
              style="letter-spacing: 5px;"
            >
              Solo Packages
            </h6>
            <h1>Perfect Tour Packages</h1>
          </div>

          <!-- Domestic and International button  -->
          <div class="text-center">
            <div class="mb-5">
              <button
                class="tablink internationalsolo_package booking_tabs change_border py-2 p-2"
                onclick="soloCity(event,'International_solopackage')"
                style="border: none;"
              >
                International
              </button>
              <button
                class="tablink internationalsolo_package booking_tabs p-2 border-none"
                onclick="soloCity(event,'Domestic_solopackage')"
                style="border: none;"
              >
                Domestic
              </button>
            </div>
          </div>

          <!-- filters start -->
          <!-- <div class="container">
            <div class="search-hotels room-search pattern">
              <div class="search-room-title">
                <h5>Choose your room</h5>
              </div>

              <div class="container">
                <div class="row">
                  <form method="post">
                    <div class="icon_input mt-3">
                      <i
                        class="fas fa-1x fas fas fa-location-arrow"
                        style="margin-left: 4px;"
                      ></i>
                      <input
                        type="text"
                        placeholder="Destination"
                        class="form_control"
                      />
                    </div>
                  </form>
                </div>
                <div class="row my-4">
                  <div class="d-flex">
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-calendar-alt"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <input
                        class="form_control"
                        name="date"
                        type="text"
                        onfocus="(this.type='date')"
                        onblur="if(!this.value)this.type='text'"
                        placeholder="Arival Date"
                      />
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-calendar-alt"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <input
                        class="form_control"
                        name="date"
                        type="text"
                        onfocus="(this.type='date')"
                        onblur="if(!this.value)this.type='text'"
                        placeholder="Departure Date"
                      />
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-user"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <select
                        class="form_control"
                        name="cars"
                        id="cars"
                        style="width: 120px;"
                      >
                        <option value="volvo">Adult</option>
                        <option value="saab">1</option>
                        <option value="opel">2</option>
                        <option value="audi">3</option>
                        <option value="audi">4</option>
                        <option value="audi">5</option>
                      </select>
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-user"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <select
                        class="form_control"
                        name="cars"
                        id="cars"
                        style="width: 120px;"
                      >
                        <option value="volvo">Child</option>
                        <option value="saab">1</option>
                        <option value="opel">2</option>
                        <option value="audi">3</option>
                        <option value="audi">4</option>
                        <option value="audi">5</option>
                      </select>
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-home"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <select
                        class="form_control"
                        name="cars"
                        id="cars"
                        style="width: 120px;"
                      >
                        <option value="volvo">Rooms</option>
                        <option value="saab">1</option>
                        <option value="opel">2</option>
                        <option value="audi">3</option>
                        <option value="audi">4</option>
                        <option value="audi">5</option>
                      </select>
                    </div>

                    <div>
                      <button
                        class="btn-primary list_bookbutton"
                        href=""
                        data-toggle="modal"
                        data-target=".modal-signup "
                      >
                        Book Now
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- filters ends -->
          <div class="towns" id="International_solopackage">
            <div class="row">
              @foreach($inter2 as $item)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                <?php
                    $id = Crypt::encrypt($item->id); 
                ?>
                  <a href="{{route('package_details',['id' => $id])}}">
                    <img class="img-fluid" src="{{asset('uploads/'.$item->image)}}" alt="" />
                  </a>
                  <div class="p-4">
                    <div class="d-flex justify-content-between mb-3">
                      <small class="m-0">
                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                        {{$item->city}}
                      </small>
                      <small class="m-0">
                        <i class="fa fa-calendar-alt text-primary mr-2"></i>
                        {{$item->package_day}} days
                      </small>
                      <small class="m-0">
                        <i class="fa fa-user text-primary mr-2"></i>
                        {{$item->package_no_of_person}} Person
                      </small>
                    </div>
                    <div>
                      <div>
                        <a
                          class="h5 text-decoration-none"
                          href="{{route('package_details',['id' => $id])}}"
                        >
                        {{$item->package_name}}
                        </a>
                      </div>
                      <div>
                        <h5 class="mt-2 package_price">${{$item->selling_price}}</h5>
                      </div>
                      
                    </div>
                    <div class="border-top mt-4 pt-4">
                      <div class="d-flex justify-content-between">
                        <h6 class="m-0">
                          
                          <a
                            href="{{route('package_details',['id' => $id])}}"
                            class="package_element"
                          >
                            View More
                          </a>
                        </h6>
                        <div class="m-0">
                        <?php  $id = Session::get('userid');  ?>
                        <?php if(Auth::guard('customer')->user()=='' && empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customized" onclick="custom({{$item->id}})" > Customize  </button> 
                          <?php } else if(Auth::guard('customer')->user() !=''){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php }else if(Auth::guard('customer')->user()=='' && !empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

<?php
$category_id = $inter2[0]->category_id;
$category_id = Crypt::encrypt($category_id);
$package_destination = $inter2[0]->package_destination;
$package_destination = Crypt::encrypt($package_destination);
?>

                <div class="text-center">
                  <a class="btn btn-primary" href="{{ route('packagelisting',['category_id'=>$category_id,'package_destination'=>$package_destination])}}">View More</a>
                </div>
          </div>
          <div class="towns" id="Domestic_solopackage" style="display: none;">
            <div class="row">
            @foreach($domestic2 as $item)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                <?php
                    $id = Crypt::encrypt($item->id); 
                ?>
                  <a href="{{route('package_details',['id' => $id])}}">
                    <img class="img-fluid" src="{{asset('uploads/'.$item->image)}}" alt="" />
                  </a>
                  <div class="p-4">
                    <div class="d-flex justify-content-between mb-3">
                      <small class="m-0">
                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                        {{$item->city}}
                      </small>
                      <small class="m-0">
                        <i class="fa fa-calendar-alt text-primary mr-2"></i>
                        {{$item->package_day}} days
                      </small>
                      <small class="m-0">
                        <i class="fa fa-user text-primary mr-2"></i>
                        {{$item->package_no_of_person}} Person
                      </small>
                    </div>
                    <div>
                      <div>
                        <a
                          class="h5 text-decoration-none"
                          href="{{route('package_details',['id' => $id])}}"
                        >
                        {{$item->package_name}}
                        </a>
                      </div>
                      <div>
                        <h5 class="mt-2 package_price">${{$item->selling_price}}</h5>
                      </div>
                      
                    </div>
                    <div class="border-top mt-4 pt-4">
                      <div class="d-flex justify-content-between">
                        <h6 class="m-0">
                          
                          <a
                            href="{{route('package_details',['id' => $id])}}"
                            class="package_element"
                          >
                            View More
                          </a>
                        </h6>
                        <div class="m-0">
                        <?php  $id = Session::get('userid');  ?>
                        <?php if(Auth::guard('customer')->user()=='' && empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customized" onclick="custom({{$item->id}})" > Customize  </button> 
                          <?php } else if(Auth::guard('customer')->user() !=''){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php }else if(Auth::guard('customer')->user()=='' && !empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>

<?php
  $category_id = $domestic2[0]->category_id;
  $category_id = Crypt::encrypt($category_id);
  $package_destination = $domestic2[0]->package_destination;
  $package_destination = Crypt::encrypt($package_destination);
?>

            <div class="text-center">
              <a class="btn btn-primary" href="{{ route('packagelisting',['category_id'=>$category_id,'package_destination'=>$package_destination])}}">View More</a>
            </div>
          </div>
        </div>
      </div>
            
    </div>

    <div id="familypackage" style="display: none;">
      <div class="container-fluid events">
        <div class="container">
          <div class="text-center mb-3 pb-3">
            <h6
              class="text-primary text-uppercase"
              style="letter-spacing: 5px;"
            >
              Family Packages
            </h6>
            <h1>Perfect Tour Packages</h1>
          </div>
          <div class="text-center">
            <div class="mb-5">
              <button
                class="tablink internationalfamily_package booking_tabs change_border py-2 p-2"
                onclick="familyCity(event,'International_familypackage')"
                style="border: none;"
              >
                International
              </button>
              <button
                class="tablink internationalfamily_package booking_tabs p-2 border-none"
                onclick="familyCity(event,'Domestic_familypackage')"
                style="border: none;"
              >
                Domestic
              </button>
            </div>
          </div>

          <!-- filters start -->
          <!-- <div class="container">
            <div class="search-hotels room-search pattern">
              <div class="search-room-title">
                <h5>Choose your room</h5>
              </div>

              <div class="container">
                <div class="row">
                  <form method="post">
                    <div class="icon_input mt-3">
                      <i
                        class="fas fa-1x fas fas fa-location-arrow"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <input
                        type="text"
                        placeholder="Destination"
                        class="form_control"
                      />
                    </div>
                  </form>
                </div>
                <div class="row my-4">
                  <div class="d-flex">
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-calendar-alt"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <input
                        class="form_control"
                        name="date"
                        type="text"
                        onfocus="(this.type='date')"
                        onblur="if(!this.value)this.type='text'"
                        placeholder="Arival Date"
                      />
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-calendar-alt"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <input
                        class="form_control"
                        name="date"
                        type="text"
                        onfocus="(this.type='date')"
                        onblur="if(!this.value)this.type='text'"
                        placeholder="Departure Date"
                      />
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-user"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <select
                        class="form_control"
                        name="cars"
                        id="cars"
                        style="width: 120px;"
                      >
                        <option value="volvo">Adult</option>
                        <option value="saab">1</option>
                        <option value="opel">2</option>
                        <option value="audi">3</option>
                        <option value="audi">4</option>
                        <option value="audi">5</option>
                      </select>
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-user"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <select
                        class="form_control"
                        name="cars"
                        id="cars"
                        style="width: 120px;"
                      >
                        <option value="volvo">Child</option>
                        <option value="saab">1</option>
                        <option value="opel">2</option>
                        <option value="audi">3</option>
                        <option value="audi">4</option>
                        <option value="audi">5</option>
                      </select>
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-home"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <select
                        class="form_control"
                        name="cars"
                        id="cars"
                        style="width: 120px;"
                      >
                        <option value="volvo">Rooms</option>
                        <option value="saab">1</option>
                        <option value="opel">2</option>
                        <option value="audi">3</option>
                        <option value="audi">4</option>
                        <option value="audi">5</option>
                      </select>
                    </div>

                    <div>
                      <button
                        class="btn-primary list_bookbutton"
                        href=""
                        data-toggle="modal"
                        data-target=".modal-signup "
                      >
                        Book Now
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- filters ends -->
          <div class="towns-city" id="International_familypackage">
            <div class="row">
              @foreach($inter3 as $item)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                <?php
                    $id = Crypt::encrypt($item->id); 
                ?>
                  <a href="{{route('package_details',['id' => $id])}}">
                    <img class="img-fluid" src="{{asset('uploads/'.$item->image)}}" alt="" />
                  </a>
                  <div class="p-4">
                    <div class="d-flex justify-content-between mb-3">
                      <small class="m-0">
                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                        {{$item->city}}
                      </small>
                      <small class="m-0">
                        <i class="fa fa-calendar-alt text-primary mr-2"></i>
                        {{$item->package_day}} days
                      </small>
                      <small class="m-0">
                        <i class="fa fa-user text-primary mr-2"></i>
                        {{$item->package_no_of_person}} Person
                      </small>
                    </div>
                    <div>
                      <div>
                        <a
                          class="h5 text-decoration-none"
                          href="{{route('package_details',['id' => $id])}}"
                        >
                        {{$item->package_name}}
                        </a>
                      </div>
                      <div>
                        <h5 class="mt-2 package_price">${{$item->selling_price}}</h5>
                      </div>
                    
                    </div>
                    <div class="border-top mt-4 pt-4">
                      <div class="d-flex justify-content-between">
                        <h6 class="m-0">
                         
                          <a
                            href="{{route('package_details',['id' => $id])}}"
                            class="package_element"
                          >
                            View More
                          </a>
                        </h6>
                        <div class="m-0">
                        <?php  $id = Session::get('userid');  ?>
                        <?php if(Auth::guard('customer')->user()=='' && empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customized" onclick="custom({{$item->id}})" > Customize  </button> 
                          <?php } else if(Auth::guard('customer')->user() !=''){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php }else if(Auth::guard('customer')->user()=='' && !empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
<?php
  $category_id = $inter3[0]->category_id;
  $category_id = Crypt::encrypt($category_id);
  $package_destination = $inter3[0]->package_destination;
  $package_destination = Crypt::encrypt($package_destination);
?>
                  <div class="text-center">
                    <a class="btn btn-primary" href="{{ route('packagelisting',['category_id'=>$category_id,'package_destination'=>$package_destination])}}">View More</a>
                  </div>
          </div>
          <div
            class="towns-city"
            id="Domestic_familypackage"
            style="display: none;"
          >
            <div class="row">
            @foreach($domestic3 as $item)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                <?php
                    $id = Crypt::encrypt($item->id); 
                ?>
                  <a href="{{route('package_details',['id' => $id])}}">
                    <img class="img-fluid" src="{{asset('uploads/'.$item->image)}}" alt="" />
                  </a>
                  <div class="p-4">
                    <div class="d-flex justify-content-between mb-3">
                      <small class="m-0">
                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                        {{$item->city}}
                      </small>
                      <small class="m-0">
                        <i class="fa fa-calendar-alt text-primary mr-2"></i>
                        {{$item->package_day}} days
                      </small>
                      <small class="m-0">
                        <i class="fa fa-user text-primary mr-2"></i>
                        {{$item->package_no_of_person}} Person
                      </small>
                    </div>
                    <div>
                      <div>
                        <a
                          class="h5 text-decoration-none"
                          href="{{route('package_details',['id' => $id])}}"
                        >
                        {{$item->package_name}}
                        </a>
                      </div>
                      <div>
                        <h5 class="mt-2 package_price">${{$item->selling_price}}</h5>
                      </div>
                      
                    </div>
                    <div class="border-top mt-4 pt-4">
                      <div class="d-flex justify-content-between">
                        <h6 class="m-0">
                         
                          <a
                            href="{{route('package_details',['id' => $id])}}"
                            class="package_element"
                          >
                            View More
                          </a>
                        </h6>
                        <div class="m-0">
                        <?php  $id = Session::get('userid');  ?>
                        <?php if(Auth::guard('customer')->user()=='' && empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customized" onclick="custom({{$item->id}})" > Customize  </button> 
                          <?php } else if(Auth::guard('customer')->user() !=''){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php }else if(Auth::guard('customer')->user()=='' && !empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
<?php
  $category_id = $domestic3[0]->category_id;
  $category_id = Crypt::encrypt($category_id);
  $package_destination = $domestic3[0]->package_destination;
  $package_destination = Crypt::encrypt($package_destination);
?>
                  <div class="text-center">
                    <a class="btn btn-primary" href="{{ route('packagelisting',['category_id'=>$category_id,'package_destination'=>$package_destination])}}">View More</a>
                  </div>
          </div>
        </div>
      </div>
    </div>

    <div id="friendspackage" style="display: none;">
      <div class="container-fluid events">
        <div class="container">
          <div class="text-center mb-3 pb-3">
            <h6
              class="text-primary text-uppercase"
              style="letter-spacing: 5px;"
            >
              Friends Packages
            </h6>
            <h1>Perfect Tour Packages</h1>
          </div>
          <div class="text-center">
            <div class="mb-5">
              <button
                class="tablink internationalfriend_package booking_tabs change_border py-2 p-2"
                onclick="FriendsCity(event,'International_Friendspackage')"
                style="border: none;"
              >
                International
              </button>
              <button
                class="tablink internationalfriend_package booking_tabs p-2 border-none"
                onclick="FriendsCity(event,'Domestic_Friendspackage')"
                style="border: none;"
              >
                Domestic
              </button>
            </div>
          </div>

          <!-- filters start -->
          <!-- <div class="container">
            <div class="search-hotels room-search pattern">
              <div class="search-room-title">
                <h5>Choose your room</h5>
              </div>

              <div class="container">
                <div class="row">
                  <form method="post">
                    <div class="icon_input mt-3">
                      <i
                        class="fas fa-1x fas fas fa-location-arrow"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <input
                        type="text"
                        placeholder="Destination"
                        class="form_control"
                      />
                    </div>
                  </form>
                </div>
                <div class="row my-4">
                  <div class="d-flex">
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-calendar-alt"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <input
                        class="form_control"
                        name="date"
                        type="text"
                        onfocus="(this.type='date')"
                        onblur="if(!this.value)this.type='text'"
                        placeholder="Arival Date"
                      />
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-calendar-alt"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <input
                        class="form_control"
                        name="date"
                        type="text"
                        onfocus="(this.type='date')"
                        onblur="if(!this.value)this.type='text'"
                        placeholder="Departure Date"
                      />
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-user"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <select
                        class="form_control"
                        name="cars"
                        id="cars"
                        style="width: 120px;"
                      >
                        <option value="volvo">Adult</option>
                        <option value="saab">1</option>
                        <option value="opel">2</option>
                        <option value="audi">3</option>
                        <option value="audi">4</option>
                        <option value="audi">5</option>
                      </select>
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-user"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <select
                        class="form_control"
                        name="cars"
                        id="cars"
                        style="width: 120px;"
                      >
                        <option value="volvo">Child</option>
                        <option value="saab">1</option>
                        <option value="opel">2</option>
                        <option value="audi">3</option>
                        <option value="audi">4</option>
                        <option value="audi">5</option>
                      </select>
                    </div>
                    <div class="icon_input mr-2">
                      <i
                        class="fas fa-1x fas fas fa-home"
                        style="margin-left: 4px; margin-bottom: 2px;"
                      ></i>
                      <select
                        class="form_control"
                        name="cars"
                        id="cars"
                        style="width: 120px;"
                      >
                        <option value="volvo">Rooms</option>
                        <option value="saab">1</option>
                        <option value="opel">2</option>
                        <option value="audi">3</option>
                        <option value="audi">4</option>
                        <option value="audi">5</option>
                      </select>
                    </div>

                    <div>
                      <button
                        class="btn-primary list_bookbutton"
                        href=""
                        data-toggle="modal"
                        data-target=".modal-signup "
                      >
                        Book Now
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- filters ends -->
          <div class="Cities" id="International_Friendspackage">
            <div class="row">
              @foreach($inter4 as $item)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                <?php
                    $id = Crypt::encrypt($item->id); 
                ?>
                  <a href="{{route('package_details',['id' => $id])}}">
                    <img class="img-fluid" src="{{asset('uploads/'.$item->image)}}" alt="" />
                  </a>
                  <div class="p-4">
                    <div class="d-flex justify-content-between mb-3">
                      <small class="m-0">
                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                        {{$item->city}}
                      </small>
                      <small class="m-0">
                        <i class="fa fa-calendar-alt text-primary mr-2"></i>
                        {{$item->package_day}} days
                      </small>
                      <small class="m-0">
                        <i class="fa fa-user text-primary mr-2"></i>
                        {{$item->package_no_of_person}} Person
                      </small>
                    </div>
                    <div>
                      <div>
                        <a class="h5 text-decoration-none" href="{{route('package_details',['id' => $id])}}"
                        >
                        {{$item->package_name}}
                        </a>
                      </div>
                      <div>
                        <h5 class="mt-2 package_price">${{$item->selling_price}}</h5>
                      </div>
                      
                    </div>
                    <div class="border-top mt-4 pt-4">
                      <div class="d-flex justify-content-between">
                        <h6 class="m-0">
                         
                          <a
                            href="{{route('package_details',['id' => $id])}}"
                            class="package_element"
                          >
                            View More
                          </a>
                        </h6>
                        <div class="m-0">
                        <?php  $id = Session::get('userid');  ?>
                        <?php if(Auth::guard('customer')->user()=='' && empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customized" onclick="custom({{$item->id}})" > Customize  </button> 
                          <?php } else if(Auth::guard('customer')->user() !=''){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php }else if(Auth::guard('customer')->user()=='' && !empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
<?php
  $category_id = $inter4[0]->category_id;
  $category_id = Crypt::encrypt($category_id);
  $package_destination = $inter4[0]->package_destination;
  $package_destination = Crypt::encrypt($package_destination);
?>
                  <div class="text-center">
                    <a class="btn btn-primary" href="{{ route('packagelisting',['category_id'=>$category_id,'package_destination'=>$package_destination])}}">View More</a>
                  </div>
          </div>
          <div
            class="Cities"
            id="Domestic_Friendspackage"
            style="display: none;"
          >
            <div class="row">
            @foreach($domestic4 as $item)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                <?php
                    $id = Crypt::encrypt($item->id); 
                ?>
                  <a href="{{route('package_details',['id' => $id])}}">
                    <img class="img-fluid" src="{{asset('uploads/'.$item->image)}}" alt="" />
                  </a>
                  <div class="p-4">
                    <div class="d-flex justify-content-between mb-3">
                      <small class="m-0">
                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                        {{$item->city}}
                      </small>
                      <small class="m-0">
                        <i class="fa fa-calendar-alt text-primary mr-2"></i>
                        {{$item->package_day}} days
                      </small>
                      <small class="m-0">
                        <i class="fa fa-user text-primary mr-2"></i>
                        {{$item->package_no_of_person}} Person
                      </small>
                    </div>
                    <div>
                      <div>
                        <a
                          class="h5 text-decoration-none"
                          href="{{route('package_details',['id' => $id])}}"
                        >
                        {{$item->package_name}}
                        </a>
                      </div>
                      <div>
                        <h5 class="mt-2 package_price">${{$item->selling_price}}</h5>
                      </div>
                  
                    </div>
                    <div class="border-top mt-4 pt-4">
                      <div class="d-flex justify-content-between">
                        <h6 class="m-0">
                        
                          <a
                            href="{{route('package_details',['id' => $id])}}"
                            class="package_element"
                          >
                            View More
                          </a>
                        </h6>
                        <div class="m-0">
                        <?php  $id = Session::get('userid');  ?>
                        <?php if(Auth::guard('customer')->user()=='' && empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customized" onclick="custom({{$item->id}})" > Customize  </button> 
                          <?php } else if(Auth::guard('customer')->user() !=''){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php }else if(Auth::guard('customer')->user()=='' && !empty($id)){ ?>
                            <button  id="{{$item->id}}"  class="btn btn-primary aclick"  data-toggle="modal" data-target=".package_customize" onclick="custom({{$item->id}})"> Customize  </button> 
                            <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
<?php
  $category_id = $domestic4[0]->category_id;
  $category_id = Crypt::encrypt($category_id);
  $package_destination = $domestic4[0]->package_destination;
  $package_destination = Crypt::encrypt($package_destination);
?>
                <div class="text-center">
                  <a class="btn btn-primary" href="{{ route('packagelisting',['category_id'=>$category_id,'package_destination'=>$package_destination])}}">View More</a>
                </div>
          </div>
        </div>
      </div>
    </div>

 
 <!-- new popup for Login user -->
 <div class="modal fade package_customize" id="exampleModalCenter" tabindex="-1" role="dialog"  aria-labelledby="mysmallmodal" aria-hidden="true" >
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

<!-- customized button popup start -->
 <div class="modal fade package_customized"
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
              <div class="customize_packages_form" id="first_modalform">
                <img
                  src="{{asset('dis/img/events/Page 1 Travel Location Icon (1).svg')}}"
                  width="100px"
                  alt=""
                />
                <h3 class="text-primary">Where do you want to go?</h3>
                <form id="form_place" onclick="mycustom()">
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
               <div class="customize_packages_form" id="second_modalform" style="display: none;">
                <img src="./img/events/phoneimg121.jpg" width="100px" alt="" />
              <h3 class="text-primary">How do we contact you?</h3>
              <form action="" id="form_place1">
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

    <!-- customized button popup ends -->    
    <script>
          function modalform() {
            document.getElementById('first_modalform').style.display = 'none'
            document.getElementById('second_modalform').style.display = 'block'
          }
          const modalform_hide=()=>{
            document.getElementById("second_modalform").style.display="none"
          } 
          const form=document.getElementById("form_place");
          const submitform=(e)=>{
              e.preventDefault()
            }
            form.addEventListener("submit",submitform)
            const redirect=()=>{
              window.location="http://127.0.0.1:5502/packagedetails.html"
            }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
               
        function custom($id){
                var data = $id;
                var  url = `customid/${data}`;
            $(document).ready(function() {    
                  $.ajax({
                    type : 'GET',
                    url : url,
                    data : data,
                    success: function(data) {   
                      //console.log(data.package_day);
                      //console.log(data.package_no_of_person);
                      //alert(data); 
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
              $('#form_place').on('submit', function(e){
                e.preventDefault();
                var form = $("#form_place").serializeArray();
                //alert(form);
                $.ajax({
                  type : 'POST',
                  url : '/customdata',
                  data: form,
                  success : function(data){
                    document.getElementById("second_modalform").style.display="block";
                    document.getElementById("first_modalform").style.display="none";
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
              $('#form_place1').on('submit' , function(e){
                e.preventDefault();
                var form = $("#form_place1").serializeArray();
                $.ajax({
                  type : 'POST',
                  url : '/customajax',
                  data: form,
                  success : function(data){
                    //console.log(data);
                     //alert(data);

                     //var a = '/package_details/'+data;
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
              var form = $("#form_login").serializeArray();
              $.ajax({
                type : 'POST',
                url : '/logincustomize',
                data : form,
                success :function(data){
                  window.location.href=data;
                },
                error:function (response){
                    //alert(data);
                      $.each(response.responseJSON.errors,function(email,error){
                          $(document).find('[name='+email+']').after('<p class="text-strong text-danger">' +error+ '</p>')
                      });
                    }
              });
            });

          });
      
          $(document).ready(function() {
              var today = new Date().toISOString().split('T')[0];
              $("#minDate").attr('min', today);

              var today = new Date().toISOString().split('T')[0];
              $("#maxDate").attr('min', today);
            });
    </script>


@endsection