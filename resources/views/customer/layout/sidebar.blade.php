<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('customer_home')}}">Customer Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('customer_home')}}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{Request::is('customer/home')? 'active': ''}}"><a class="nav-link" href="{{route('customer_home')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

            <li class="{{Request::is('customer/order')? 'active': ''}}"><a class="nav-link" href="{{route('customer_order_view')}}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Order"><i class="fa fa-home"></i> <span>Order</span></a></li>

        </ul>
    </aside>
</div>