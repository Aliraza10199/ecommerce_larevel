@extends('adminpanal/layout')
@section('page_title','Customer')
@section('customer_select','active')

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
<h1>Customer</h1>
                    {{-- <div class="overview-wrap">
                            <h2 class="title-1">ITEMS</h2>
                           <a href="{{url('admin/size/manage_size')}}"> <button  type="button" class="  au-btn au-btn-icon au-btn--blue">+ Add Size</button>
                               </a>
                       </div>  --}}

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
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
                                                <td>{{$list->name}}</td>
                                                <td>{{$list->email}}</td>
                                                <td>{{$list->mobile}}</td>
                                                <td>{{$list->city}}</td>
                                                
                                                <td class="process">
                                                    
                                                    <a href="{{url('admin/customer/show/')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-success">View</button>
                                                    </a>

                                                    @if($list->status==1)
                                                    <a href="{{url('admin/customer/status/0')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-warning">Deactive</button>
                                                    </a>
                                                    @elseif($list->status==0)
                                                    <a href="{{url('admin/customer/status/1')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-primary">Active</button>
                                                    </a>
                                                    @endif
                                                    {{-- <a href="{{url('admin/customer/delete/')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </a> --}}
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