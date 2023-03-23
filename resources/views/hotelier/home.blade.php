@extends('hotelier.layout.app')

@section('heading', 'Dashboard')

@section('main_content')
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fa fa-cart-plus"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Completed Orders</h4>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Pending Orders</h4>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fa fa-user-plus"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Active Customers</h4>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fa fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Pending Customers</h4>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fa fa-home"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Rooms</h4>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fa fa-users"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Subscribers</h4>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <section class="section">
            <div class="section-header">
                <h1>Recent Orders</h1>
            </div>
        </section>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Order No</th>
                                            <th>Payment Method</th>
                                            <th>Booking Date</th>
                                            <th>Paid Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="pt_10 pb_10">
                                            </td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection