@extends('front.layout.app')
@section('content')


<div id="header"></div>
    <!-- Navbar End -->

    <!-- banner start -->
    <div class="container-fluid bg-registrationbanner py-5 mb-5">
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
                ON PACKAGES
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- journey begins -->
    <div class="">
      <div class="container-fluid events">
        <div class="container">
          <div class="text-center">
            <p class="text-primary">TRAVEL PACKAGES</p>
            <h2>Package Listing Page</h2>
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
              <button
                class="tablink booking_tabs change_border p-2"
                onclick="openCity(event,'International_honeymoonpackage')"
              >
                <?php
                  $data = $featchdata[0]->package_destination;
                  if($data == 1){
                      echo "International";
                  }else{
                      echo "Domestic";
                    }
                ?>
              </button>
              <!-- <button
                class="tablink booking_tabs p-2 border-none"
                onclick="openCity(event,'Domestic_honeymoonpackage')"
              >
                Domestic
              </button> -->
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
                  <?php
                     $category_id = Crypt::encrypt($category_id);
                     $package_destination = Crypt::encrypt($package_destination);  
                  ?>
                  <form method="post" action="{{ route('packagesearch',['category_id'=>$category_id,'package_destination'=>$package_destination])}}">
                    @csrf
                    <div class="icon_input mt-3">
                      <i class="fas fa-1x fas fas fa-location-arrow" style="margin-left: 4px; margin-bottom: 2px;" ></i>
                      <input  type="text"  placeholder="Package" name="package" class="form_control" />
                    </div>
                    <div class="row my-4">
                      <div class="d-flex">
                        <div class="icon_input mr-2">
                          <i class="fas fa-1x fas fas fa-calendar-alt" style="margin-left: 4px; margin-bottom: 2px;"></i>
                          <input class="form_control" name="date" type="text" onfocus="(this.type='date')"
                            onblur="if(!this.value)this.type='text'"  placeholder="Arival Date" />
                        </div>
                        <div class="icon_input mr-2">
                          <i class="fas fa-1x fas fas fa-calendar-alt" style="margin-left: 4px; margin-bottom: 2px;" ></i>
                          <input  class="form_control" name="date" type="text" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'"  placeholder="Departure Date" />
                        </div>
                        <div class="icon_input mr-2">
                          <i  class="fas fa-1x fas fas fa-user" style=" margin-left: 4px; margin-bottom: 2px;  background-color: transparent;"></i>
                          <select class="form_control"  name="cars" id="cars"  style="width: 120px;" >
                            <option value="volvo">Adult</option>
                            <option value="saab">1</option>
                            <option value="opel">2</option>
                            <option value="audi">3</option>
                            <option value="audi">4</option>
                            <option value="audi">5</option>
                          </select>
                        </div>
                        <div class="icon_input mr-2">
                          <i class="fas fa-1x fas fas fa-user" style="margin-left: 4px; margin-bottom: 2px; background-color: transparent;" ></i>
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
                          <i class="fas fa-1x fas fas fa-home" style="margin-left: 4px; margin-bottom:2px;  background-color: transparent;"></i>
                          <select class="form_control" name="cars"  id="cars"  style="width: 120px;"  prefix="">
                            <option value="volvo">Rooms</option>
                            <option value="saab">1</option>
                            <option value="opel">2</option>
                            <option value="audi">3</option>
                            <option value="audi">4</option>
                            <option value="audi">5</option>
                          </select>
                        </div>

                        <div>
                          <button class="btn-primary list_bookbutton" >
                          Search  Now
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
          <!-- filters ends -->

          <div class="city" id="International_honeymoonpackage">
            <div class="row">
                @foreach($featchdata as $data)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                <?php      
                    $id = Crypt::encrypt($data->id); 
                ?>      
                  <a href="{{route('package_details',['id' => $id])}}">
                    <img class="img-fluid" src="{{asset('uploads/'.$data->image)}}" alt="" />
                  </a>
                  <div class="p-4">
                    <div class="d-flex justify-content-between mb-3">
                      <small class="m-0">
                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                        {{$data->city}}
                      </small>
                      <small class="m-0">
                        <i class="fa fa-calendar-alt text-primary mr-2"></i>
                        {{$data->package_day}}days
                      </small>
                      <small class="m-0">
                        <i class="fa fa-user text-primary mr-2"></i>
                        {{$data->package_no_of_person}} Person
                      </small>
                    </div>
                    <div>
                      <div>
                        <a
                          class="h5 text-decoration-none"
                          href="{{route('package_details',['id' => $id])}}"
                        >
                        {{ $data->package_name }}
                        </a>
                      </div>
                      <div>
                        <h5 class="mt-2 package_price">${{ $data->selling_price }}</h5>
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
                          <button
                            class="btn btn-primary"
                            data-toggle="modal"
                            data-target=".package_customized"
                          >
                            Customize
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- <div class="text-center">
        <a class="btn btn-primary" href="./Newhoteldetails/hotels-details-new.html">View More</a>
    </div> -->

    <!-- pagination start -->

    <div class="">
    
      <nav aria-label="...">
     
        <ul class="pagination justify-content-center">
        {{$featchdata->links()}}
        </ul>
      </nav>
    </div>
    <!-- pagination ends -->

@endsection