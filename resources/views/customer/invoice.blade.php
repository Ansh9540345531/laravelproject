@extends('customer.layout.app')

@section('heading', 'Order Invoice')

@section('main_content')
<div class="section-body">
    <div class="invoice">
        <div class="invoice-print">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-title">
                        <h2>Invoice</h2>
                        <div class="invoice-number">Order #  @foreach($order_detail as $row){{ $row->order_no }} @endforeach</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <strong>Invoice To</strong><br>
                                {{ Auth::guard('customer')->user()->name }}
                            </address>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <address>
                                <strong>Invoice Date</strong><br>
                                @foreach($order_detail as $row){{ $row->customer_checkin_date }} @endforeach
                            </address>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="section-title">Order Summary</div>
                    <p class="section-lead">Your Order information are given below in detail:</p>
                    <hr class="invoice-above-table">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-md">
                            <tr>
                                <th>SL</th>
                                <th>Customer Name</th>
                                <th class="text-center">Customer Checkin Date</th>
                                <th class="text-center">Customer Checkout Date</th>
                                <th class="text-center">Number of Persons</th>
                                <th class="text-center">Payment Recived</th>
                                <th class="text-right">Subtotal</th>
                            </tr>
                           @foreach($order_detail as $key => $row)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{$row->customer_name}}</td>
 <?php //dd($customize_Data); ?>
                                

                                <td class="text-center">{{$customize_Data[0]->package_start_date}}</td>
                               

                                <td class="text-center">{{$customize_Data[0]->package_end_date}}</td>
                                <td class="text-center">{{$customize_Data[0]->package_custom_person}}</td>
                                <td class="text-center"><?php 
                                            if($row->payment_status = ''){
                                                 echo 'Fail';
                                            }else{
                                                echo 'success';
                                            } 
                                        ?></td>
                                <td class="text-right">
                                {{$row->payment_paid_amount}}₹
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 text-right">
                            <div class="invoice-detail-item">
                                <div class="invoice-detail-name">Total</div>
                                <div class="invoice-detail-value invoice-detail-value-lg">$@foreach($order_detail as $row){{ $row->payment_paid_amount }} @endforeach</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="about-print-button">
        <div class="text-md-right">
            <a href="javascript:window.print();" class="btn btn-warning btn-icon icon-left text-white print-invoice-button"><i class="fa fa-print"></i> Print</a>
        </div>
    </div>
</div>
@endsection