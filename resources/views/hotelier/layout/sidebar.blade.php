<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('hotelier_home')}}">Hotelier Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('hotelier_home')}}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{Request::is('hotelier/home')? 'active': ''}}"><a class="nav-link" href="{{route('hotelier_home')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

            <li class="{{ Request::is('hotelier/hotelhomesection/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('hotelhomesection_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotelhomesection"><i class="fa fa-cubes"></i> <span>Hotel</span></a></li>

            <li class="{{ Request::is('hotelier/hotelamenities/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('amenities_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotelhomesection"><i class="fa fa-cubes"></i> <span>Hotel Amenities</span></a></li>

            <li class="{{ Request::is('hotelier/roomtypes/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('roomtypes_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="hotelhomesection"><i class="fa fa-cubes"></i> <span>Hotel Room Types</span></a></li>
            

        </ul>
    </aside>
</div>