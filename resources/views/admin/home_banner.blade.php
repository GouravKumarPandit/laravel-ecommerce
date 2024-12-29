@extends('admin/layout')
@section('page_title','Home Banner')
@section('home_banner_select','active')
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
            <h1 class="">Home Banner</h1>
            <a href="{{url('admin/home_banner/manage_home_banner')}}">
                <button type="button" class="btn btn-sm btn-info">
                    <i class="fa-solid fa-plus"></i> Add Home Banner
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
                            <th>Btn Text</th>
                            <th>Btn Link</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->btn_txt}}</td>
                            <td>{{$list->btn_link}}</td>
                            <td>
                            <img width="100px" src="{{asset('storage/media/banner/'.$list->image)}}"/>
                            </td>
                            <td>
                                <a href="{{url('admin/home_banner/manage_home_banner/')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</button></a>

                                @if($list->status==1)
                                    <a href="{{url('admin/home_banner/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i> Active</button></a>
                                @elseif($list->status==0)
                                    <a href="{{url('admin/home_banner/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-warning"><i class="fa-solid fa-eye-slash"></i> Deactive</button></a>
                                @endif

                                <a href="{{url('admin/home_banner/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Delete</button></a>
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