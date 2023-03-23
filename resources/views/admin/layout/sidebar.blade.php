<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin_home')}}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin_home')}}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{Request::is('admin/home')? 'active': ''}}"><a class="nav-link" href="{{route('admin_home')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

            <li class="{{Request::is('admin/setting')? 'active': ''}}"><a class="nav-link" href="{{route('admin_setting')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Setting"><i class="fa fa-cog"></i> <span>Setting</span></a></li>


            <!-- Hotelier Section -->
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-users"></i><span>Hotelier</span></a>
                <ul class="dropdown-menu">
                <li class="{{ Request::is('admin/addhotelier/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_addhotelier_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="addhotelier"><i class="fa fa-angle-right"></i> <span> Hotelier</span></a></li>
                <li class="{{ Request::is('admin/hotelhomesection/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('hotel_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-angle-right"></i> <span>Hotel</span></a></li>
                <li class="{{ Request::is('admin/hotelamenities/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('adminamenities_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-angle-right"></i> <span>Hotel Amenities</span></a></li>
                <li class="{{ Request::is('admin/roomtypes/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('adminroomtypes_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-angle-right"></i> <span>Hotel Room Types</span></a></li>
                </ul>
            </li>


            <!-- Home Page Design Section -->
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-users"></i><span>Home Page Design</span></a>
                <ul class="dropdown-menu">
                <li class="{{ Request::is('tab/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('tab_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="tab"><i class="fa fa-cubes"></i> <span>All Tabs</span></a></li>
                <li class="{{Request::is('admin/festival/*') ? 'active': ''}}"><a class="nav-link" href="{{route('festival_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-angle-right"></i> <span>Festival</span></a></li>
             <li class="{{ Request::is('home_destination/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home_destination_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="fa fa-angle-right"><i class="fa fa-angle-right"></i> <span>Destinatons</span></a></li>
            <li class="{{ Request::is('mega/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('mega_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="mega"><i class="fa fa-angle-right"></i> <span>Mega Offers</span></a></li>
            <li class="{{ Request::is('admin/testimonial/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_testimonial_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="testimonial"><i class="fa fa-angle-right"></i> <span>Testimonial</span></a></li>
            <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_faq_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="faq"><i class="fa fa-angle-right"></i> <span>Faq</span></a></li>
            <li class="{{Request::is('admin/slide/*') ? 'active': ''}}"><a class="nav-link" href="{{route('admin_slide_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Slide"><i class="fa fa-angle-right"></i> <span>Slide</span></a></li>
            <li class=""><a class="nav-link" href="{{route('about_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="One-Way"> <i class="fa fa-angle-right"></i> <span>About View </span></a></li>       
             </ul>
            </li>


            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-superpowers"></i><span>Activities</span></a>
                <ul class="dropdown-menu">
                   <li class=""><a class="nav-link" href="{{ route('activities_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-eercast"></i> <span>Enquiry</span></a></li>
                   <li class=""><a class="nav-link" href="{{ route('select_activities_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-eercast"></i> <span>Activities</span></a></li>
            </ul>
            </li>


            <li class=""><a class="nav-link" href="{{ route('newsletter_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-bell"></i> <span>Newsletter Subscription</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('selfdrive_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-car"></i> <span>Self Drive</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('helicopter_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-fighter-jet"></i> <span>Helicopter</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('forex_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-car"></i> <span>Forex</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('gift_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-gift"></i> <span>Gift</span></a></li>

            <li class=""><a class="nav-link" href="{{ route('contact') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-phone"></i> <span>Contact</span></a></li>

            <li class=""><a class="nav-link" href="{{ route('villastay') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-home"></i> <span>VillaStay Enquiry</span></a></li>

            <li class=""><a class="nav-link" href="{{ route('resort') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotel"><i class="fa fa-home"></i> <span>Resort Enquiry</span></a></li>


            <!-- <li class="{{Request::is('admin/home_destination/*') ? 'active': ''}}"><a class="nav-link" href="{{route('home_destination_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-calendar"></i> <span>Home Page Destination</span></a></li> -->

            

            <!-- <li class=""><a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-calendar"></i> <span>Datewise Rooms</span></a></li>

            <li class="{{Request::is('admin/tab/*') ? 'active': ''}}"><a class="nav-link" href="{{route('tab_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-calendar"></i> <span>Home Page Slider Tab Section</span></a></li> -->


            
            <!-- <li class="{{Request::is('admin/diwali/*') ? 'active': ''}}"><a class="nav-link" href="{{route('diwali_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-calendar"></i> <span>Diwali</span></a></li>

            <li class="{{Request::is('admin/holi/*') ? 'active': ''}}"><a class="nav-link" href="{{route('holi_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-calendar"></i> <span>Holi</span></a></li>

            <li class="{{Request::is('admin/janamastmi/*') ? 'active': ''}}"><a class="nav-link" href="{{route('janamastmi_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-calendar"></i> <span>Janamastmi</span></a></li> -->

            <!-- Package Section -->
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-superpowers"></i><span>Package</span></a>
                <ul class="dropdown-menu">
                <li class="{{Request::is('admin/amenitie/*') ? 'active': ''}}"><a class="nav-link" href="{{route('amenitie_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-calendar"></i> <span>Package Amenities </span></a></li>

                <li class="{{Request::is('admin/package_category/*') ? 'active': ''}}"><a class="nav-link" href="{{route('package_category_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-calendar"></i> <span>Package Category </span></a></li>

                <li class="{{Request::is('admin/package_product/*') ? 'active': ''}}"><a class="nav-link" href="{{route('package_product_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-calendar"></i> <span>Package Product </span></a></li>
                </ul>
            </li> 

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-car"></i><span>Cab</span></a>
                <ul class="dropdown-menu">
                <li class=""><a class="nav-link" href="{{route('admin_cab_list')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="One-Way"> <i class="fa fa-car"></i> <span>&nbsp;&nbsp;Cab One-Way </span></a></li>

                <li class=""><a class="nav-link" href="{{route('admin_cab_return')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Round-Trip"><i class="fa fa-car"></i> <span>&nbsp;&nbsp;Cab Round-Trip </span></a></li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-car"></i><span>OutStation Cab</span></a>
                <ul class="dropdown-menu">
                <li class=""><a class="nav-link" href="{{route('admin_outstationcab')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="One-Way"> <i class="fa fa-car"></i> <span>&nbsp;&nbsp;OutStation Cab One-Way </span></a></li>

                <li class=""><a class="nav-link" href="{{route('admin_outstationcablist')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Round-Trip"><i class="fa fa-car"></i> <span>&nbsp;&nbsp;OutStation Cab Round-Trip </span></a></li>
                </ul>
            </li>

            <!-- <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-home"></i><span>Home About</span></a>
                <ul class="dropdown-menu">


                </ul>
            </li> -->

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-superpowers"></i><span>CMS Page</span></a>
                <ul class="dropdown-menu">
                <li class="{{Request::is('admin/visa/*') ? 'active': ''}}"><a class="nav-link" href="{{route('visa')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-calendar"></i> <span>Visa Page </span></a></li>

                <li class="{{Request::is('admin/about/*') ? 'active': ''}}"><a class="nav-link" href="{{route('about_us')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-calendar"></i> <span>About Page </span></a></li>
                </ul>
            </li>


            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-arrows"></i><span>Pages</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href="{{route('admin_page_about')}}"><i class="fa fa-angle-right"></i> About</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Terms and Conditions</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Privacy Policy</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Contact</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Photo Gallery</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Video Gallery</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> FAQ</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Blog</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Room</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Cart</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Checkout</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Payment</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Sign Up</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Sign In</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Forget Password</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Reset Password</a></li>
                </ul>
            </li>

            <!-- <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-superpowers"></i><span>Room Section</span></a>
                <ul class="dropdown-menu">
                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Amenities</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Rooms</a></li>
                </ul>
            </li> -->

            <!-- <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-users"></i><span>Subscribers</span></a>
                <ul class="dropdown-menu">

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> All Subscribers</a></li>

                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Send Email</a></li>
                </ul>
            </li> -->

            <!-- <li class=""><a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Customers"><i class="fa fa-user-plus"></i> <span>Customers</span></a></li> -->

            <!-- <li class=""><a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Orders"><i class="fa fa-cart-plus"></i> <span>Orders</span></a></li> -->



            <!-- <li class="{{ Request::is('home_destination/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home_destination_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="home_destination"><i class="fa fa-plane"></i> <span>Destinatons</span></a></li>

            <li class="{{ Request::is('mega/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('mega_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="mega"><i class="fa fa-archive"></i> <span>Mega Offers</span></a></li> -->


            <!-- <li class="{{ Request::is('festival/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('festival_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="festival"><i class="fa fa-cubes"></i> <span>Festivals</span></a></li> -->

            <!-- <li class="{{ Request::is('about/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('about_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="about"><i class="fa fa-cubes"></i> <span>About Us</span></a></li> -->

<!--             
            <li class="{{ Request::is('admin/testimonial/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_testimonial_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="testimonial"><i class="fa fa-list"></i> <span>Testimonial</span></a></li>

            <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_faq_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="faq"><i class="fa fa-commenting-o"></i> <span>Faq</span></a></li>

            <li class="{{Request::is('admin/slide/*') ? 'active': ''}}"><a class="nav-link" href="{{route('admin_slide_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Slide"><i class="fa fa-sliders"></i> <span>Slide</span></a></li> -->

            <!-- <li class=""><a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Feature"><i class="fa fa-gavel"></i> <span>Feature</span></a></li> -->

            <!-- <li class=""><a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Testimonial"><i class="fa fa-briefcase"></i> <span>Testimonial</span></a></li> -->

            <!-- <li class=""><a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Post"><i class="fa fa-clipboard"></i> <span>Post</span></a></li>

            <li class=""><a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Photo Gallery"><i class="fa fa-picture-o"></i> <span>Photo Gallery</span></a></li>

            <li class=""><a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Video Gallery"><i class="fa fa-camera"></i> <span>Video Gallery</span></a></li> -->

            <!-- <li class=""><a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="FAQ"><i class="fa fa-bolt"></i> <span>FAQ</span></a></li> -->


            

        </ul>
    </aside>
</div>