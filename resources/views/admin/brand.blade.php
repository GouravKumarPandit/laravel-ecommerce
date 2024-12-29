@extends('admin/layout')
@section('page_title','Brand')
@section('brand_select','active')
@section('container')
@if(session()->has('message'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        {{session('message')}}  
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> 
    @endif                         
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <h1 class="">Brand</h1>
            <a href="{{url('admin/brand/manage_brand')}}">
                <button type="button" class="btn btn-sm btn-info">
                    <i class="fa-solid fa-plus"></i> Add Brand
                </button>
            </a>
        </div>
    </div>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3 table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Brand</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td><b>{{$list->name}}</b></td>
                            <td>
                            @if($list->image!='')
                                <img width="100px" src="{{asset('storage/media/brand/'.$list->image)}}"/>
                            @endif
                            </td>
                            <td>
                                <a href="{{url('admin/brand/manage_brand/')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</button></a>

                                @if($list->status==1)
                                    <a href="{{url('admin/brand/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i> Active</button></a>
                                 @elseif($list->status==0)
                                    <a href="{{url('admin/brand/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-warning"><i class="fa-solid fa-eye-slash"></i> Deactive</button></a>
                                @endif

                                <a href="{{url('admin/brand/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Delete</button></a>
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