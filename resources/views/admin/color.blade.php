@extends('admin/layout')
@section('page_title','Color')
@section('color_select','active')
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
            <h1 class="mb10">Color</h1>
            <a href="{{url('admin/color/manage_color')}}">
                <button type="button" class="btn btn-sm btn-info">
                    <i class="fa-solid fa-plus"></i> Add Color
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
                            <th>Color</th>
                            <th></th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td><b>{{$list->color}}</b></td>
                            <td><div class="border" style="background-color: {{strtolower($list->color)}}; height: 20px; width: 20px; border-radius: 50%;"></div></td>
                            <td>
                                <a href="{{url('admin/color/manage_color/')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i> Edit</button></a>

                                @if($list->status==1)
                                    <a href="{{url('admin/color/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i> Active</button></a>
                                @elseif($list->status==0)
                                    <a href="{{url('admin/color/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-warning"><i class="fa-solid fa-eye-slash"></i> Deactive</button></a>
                                @endif

                                <a href="{{url('admin/color/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Delete</button></a>
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