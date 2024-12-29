@extends('admin/layout')
@section('page_title','Order')
@section('order_select','active')
@section('container')
    <h1 class="mb10">Order</h1>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3 table-striped">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th style="min-width: 290px !important;">Customer Details</th>
                            <th>Amt</th>
                            <th>Order Status</th>
                            <th>Payment Status</th>
                            <th>Payment Type</th>
                            <th style="min-width: 165px !important;">Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $list)
                            <tr>
                                <td><a href="{{url('/admin/order_detail')}}/{{$list->id}}">{{$list->id}}</a></td>
                                <td>
                                    <b><a href="{{route('customer.show', $list->customers_id)}}" class="text-secondary" target="_blank">
                                        <i class="fa-solid fa-user"></i> {{$list->name}}
                                    </a></b><br/>
                                    <i class="fa-solid fa-envelope"></i> {{$list->email}}<br/>
                                    <i class="fa-solid fa-mobile-screen-button"></i> {{$list->mobile}}<br/>
                                    <i class="fa-solid fa-location-dot"></i> {{$list->address}}, {{$list->city}}, {{$list->state}}, {{$list->pincode}}
                                </td>
                                <td>{{$list->total_amt}}</td>
                                <td>{{$list->orders_status}}</td>
                                <td>
                                    @if($list->payment_status == "Success")
                                        <p class="badge badge-success p-2">{{$list->payment_status}}</p>
                                    @else
                                        <p class="badge badge-danger p-2">{{$list->payment_status}}</p>
                                    @endif
                                </td>
                                <td>{{$list->payment_type}}</td>
                                <td>{{$list->added_on}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
                        
@endsection