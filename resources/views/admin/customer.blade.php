@extends('admin/layout')
@section('page_title','Customer')
@section('customer_select','active')
@section('container')
    @if(session()->has('message'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        {{session('message')}}  
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> 
    @endif                           
    <h1 class="mb10">Customer</h1>
    
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3 table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>
                                <i class="fa-solid fa-user"></i> <b>{{$list->name}}</b>
                            </td>
                            <td><i class="fa-solid fa-envelope"></i> {{$list->email}}</td>
                            <td><i class="fa-solid fa-mobile-screen-button"></i> {{$list->mobile}}</td>
                            <td>@if($list->city)<i class="fa-solid fa-location-dot"></i> {{$list->city}} @else -- @endif</td>
                            <td>
                                <a href="{{url('admin/customer/show/')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-success"><i class="fa-solid fa-eye"></i> View</button></a>

                                @if($list->status==1)
                                    <a href="{{url('admin/customer/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i> Active</button></a>
                                 @elseif($list->status==0)
                                    <a href="{{url('admin/customer/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-warning"><i class="fa-solid fa-eye-slash"></i> Deactive</button></a>
                                @endif

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
                        
@endsection