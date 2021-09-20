@extends('adminpanal/layout')
@section('page_title','Home Banner')
@section('home_banner_select','active')

@section('container')

@if(session()->has('message'))
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
    <span class="badge badge-pill badge-danger">Success</span>
    {{session('message')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif
<h1>Home Banner</h1>
     <div class="overview-wrap">
                                  
                                    <h2 class="title-1">ITEMS</h2>


                                   <a href="{{url('admin/home_banner/manage_home_banner')}}"> <button  type="button" class="  au-btn au-btn-icon au-btn--blue">+ Add Home Banner</button>
                                   </a>
                                </div> 

 


                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th> Btn Text</th>
                                                <th> Btn Link</th>
                                                <th> Image</th>
                                                
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        @foreach($data as $list)
                                                
                                            <tr>
                                                <td>{{$list->id}}</td>
                                                <td>{{$list->btn_txt}}</td>
                                                <td>{{$list->btn_link}}</td>
                                                <td> <img  width="50px" src="{{asset('storage/media/banner/'.$list->image)}}"/></td>
                                                <td class="process">
                                                    
                                                    <a href="{{url('admin/home_banner/manage_home_banner/')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-success">Edit</button>
                                                    </a>

                                                    @if($list->status==1)
                                                    <a href="{{url('admin/home_banner/status/0')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-warning">Deactive</button>
                                                    </a>
                                                    @elseif($list->status==0)
                                                    <a href="{{url('admin/home_banner/status/1')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-primary">Active</button>
                                                    </a>
                                                    @endif
                                                    <a href="{{url('admin/home_banner/delete/')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </a>
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