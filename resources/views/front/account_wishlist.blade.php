

@extends('front/layout_account')

@section('page_title','My Wishlist')
@section('wishlist_select','active')
@section('sidebar')

<div class="col-md-9 aside">
    <h2>My Wishlist</h2>
    <div class="cart-table cart-table--wishlist">

        @php
        $sum = 0;
         @endphp

        @if(isset($wishlist_product[0]))       
        @foreach ($wishlist_product as $data)

                <div  id="card_box_wishlist{{$data->attr_id}}" class="cart-table-prd">
                    <div class="cart-table-prd-image"><a href="#"><img src="{{asset('storage/media/'.$data->image)}}" alt="{{$data->name}}"></a></div>
                    <div class="cart-table-prd-name">
                        <h2><a href="{{url('product/'.$data->slug)}}">{{$data->name}}</a></h2>
                              
                                @if($data->color!='')
                                <h5>color: {{$data->color}}</h5>
                                @endif
                                @if($data->size!='')
                                <h5>size: {{$data->size}}</h5>
                                @endif
                              
                    </div>
                    {{-- <div class="cart-table-prd-price"><span>price:</span> <b>$ {{$data->price}}</b></div> --}}
                    <div class="cart-table-addtocart"><a href="javascript:void(0)"  onclick="home_add_to_card('{{$data->pid}}','{{$data->color}}','{{$data->size}}','{{$data->price}}')"  class="btn">Add To Cart</a> 
                        <a href="javascript:void(0)" onclick="deletewishlistProduct('{{$data->slug}}','{{$data->pid}}','{{$data->color}}','{{$data->size}}','{{$data->attr_id}}')" class="icon-cross delete-from-wishlist" title="Remove from wishlist"></a></div>
                </div>
         
        @php
        // $sum+=$data->price*$data->qty;
        
    @endphp 
        @endforeach
        @else
        <h3>Data not Found</h3>
        @endif
               
        
    </div>
</div>

<input type="hidden" id="qty" value="1">
<form id="frmAddTocard" >
    <input type="hidden" id="color_id" name="color_id" >
    <input type="hidden" id="size_id" name="size_id">
    <input type="hidden" id="pqty" name="pqty">
    <input type="hidden" id="product_id" name="product_id">
     <!-- <input type="hidden" id="price_card" name="price_card">  -->
    @csrf    
</form>
<form  id="wishlists_form">
    <input type="hidden" id="wishlist_slug" name="wishlist_slug" >
    <input type="hidden" id="wishlist_product_id" name="wishlist_product_id" >
    <input type="hidden" id="wishlist_product_attr_id" name="wishlist_product_attr_id" >

    @csrf
</form>


@endsection 



