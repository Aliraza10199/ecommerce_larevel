
@extends('front/layouts')
@section('page_title','My Account')
@section('container')



<div class="page-content">
    <div class="holder mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><span>My account</span></li>
            </ul>
        </div>
    </div>
    <div class="holder mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3 aside aside--left">
                    {{-- <a href="{{url('/reviews')}}" class="list-group-item">My Reviews</a> --}}
                    <div class="list-group"><a href="{{url('/account_detail')}}" class="list-group-item @yield('account_select')">Account Details</a>  <a href="{{url('/my_wishlist')}}" class="list-group-item @yield('wishlist_select')">My Wishlist</a> <a href="{{url('/order_history')}}" class="list-group-item @yield('history_select')">My Order History</a>  <a href="javascript:void(0)" class="list-group-item @yield('mysavetag_select')">My Saved Tags</a> <a href="javascript:void(0)" class="list-group-item @yield('compare_select')">Compare Products</a></div>
                </div>
             
                @section('sidebar')

                @show
             
            </div>
        </div>
    </div>
</div>












@endsection  