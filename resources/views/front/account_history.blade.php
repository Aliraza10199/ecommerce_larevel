

@extends('front/layout_account')

@section('page_title','My Order Details')
@section('history_select','active')
@section('sidebar')

<div class="col-md-9 aside">
    <h2>Order History</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-order-history">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Order Number</th>
                 
                    <th scope="col">Order Status</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Payment ID</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Order Date</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                        @php
                        $num = 0;
                         @endphp
               
                @foreach ($orders as $list)
                    
                @php
                $num=$num+1;              
                @endphp 

                <tr>
                    <td>{{$num}}</td>
                    <td><b>{{$list->id}}</b> <a href="{{url('/order_detail')}}/{{$list->id}}" class="ml-1">View Details</a></td>
                  
                    <td>{{$list->orders_status}}</td>
                    <td>{{$list->payment_status}}</td>
                    <td>{{$list->payment_id}}</td>
                    <td><span class="color">${{$list->total_amt}}</span></td>
                    <td>{{$list->added_on}}</td>
                    <td><a href="#" class="btn">REORDER</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-right mt-2"><a href="#" class="btn btn--alt">Clear History</a></div>
</div>






@endsection  