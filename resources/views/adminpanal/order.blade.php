@extends('adminpanal/layout')
@section('page_title','Order')
@section('order_select','active')

@section('container')



<h1>Order</h1>
     <div class="overview-wrap">
                                  
                               
 


                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer detail</th>
                                                <th>Amt</th>
                                                <th>Order Status</th>
                                                <th>Payment Status</th>
                                                <th>Payment Type</th>
                                                <th>Order Date</th>
                                               
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        @foreach($orders as $list)
                                                
                                            <tr>
                                                <td><a href="{{url('/admin/order_detail')}}/{{$list->id}}">{{$list->id}}</a> </td>
                                                <td>
                                                    {{$list->name}}<br/>
                                                    {{$list->email}}
                                                    {{$list->mobile}}<br/>
                                                    {{$list->address}},{{$list->city}},
                                                    {{$list->state}}
                                                </td>
                                                <td>{{$list->total_amt}}</td>
                                                <td>{{$list->order_status}}</td>
                                                <td>{{$list->payment_status}}</td>
                                                <td>{{$list->payment_type}}</td>
                                                <td>{{$list->added_on}}</td>
                                                
                                                {{-- <td class="process">
                                                    
                                                    <a href="{{url('admin/tax/manage_tax/')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-success">Edit</button>
                                                    </a>

                                                    @if($list->status==1)
                                                    <a href="{{url('admin/tax/status/0')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-warning">Deactive</button>
                                                    </a>
                                                    @elseif($list->status==0)
                                                    <a href="{{url('admin/tax/status/1')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-primary">Active</button>
                                                    </a>
                                                    @endif
                                                    <a href="{{url('admin/tax/delete/')}}/{{$list->id}}">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </a>
                                                </td> --}}
                                                
                                            </tr>
                                         @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
                       
@endsection