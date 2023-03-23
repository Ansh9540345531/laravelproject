@extends('customer.layout.app')

@section('heading', 'My Orders')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Order No</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                               @foreach($orders as $key =>  $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$row->order_id}}</td>
                                   
                                    <td>{{$details[0]->customer_name}}</td>
                                    <td>{{$details[0]->customer_email}}</td>    
                                    
                                    <td>{{$row->created_at}}</td>
                                    
                                    <td>
                                        <?php 
                                            if($row->payment_status = ''){
                                                 echo 'Fail';
                                            }else{
                                                echo 'success';
                                            } 
                                        ?>
                                    </td>
                                    
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('customer_order_detail',$row->order_id) }}" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection