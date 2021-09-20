@extends('front/layouts')
@section('page_title','Order Detail')
@section('container')




<div class="page-content">
    <div class="container">
             <div class="row">
                <div class="col-md-6">
                    <h1>Details Address</h1>
                    <ul style="list-style: none;" class="ml-5" >
                        <li>Name: {{$orders_details[0]->name}}</li>
                        <li>Phone: +{{$orders_details[0]->mobile}} </li>               
                        <li>Address: {{$orders_details[0]->address}}</li>
                        {{-- <li>{{$orders_details[0]->country}}</li> --}}
                        <li>State: {{$orders_details[0]->state}}</li>
                        <li>City: {{$orders_details[0]->city}}</li> 
                    </ul>
                </div>
                <div class="col-md-6">
                   
                      <h1>Order Details</h1>
                       Order Status: {{$orders_details[0]->orders_status}}<br/>
                       Payment Status: {{$orders_details[0]->payment_status}}<br/>
                       Payment Type: {{$orders_details[0]->payment_type}}<br/>
                       {{-- Payment ID: {{$orders_details[0]->payment_id}}<br/> --}}
                       <?php
                        if($orders_details[0]->payment_id!=''){
                            echo 'Payment ID: '.$orders_details[0]->payment_id;
                        }
                       ?>
                     <b>Track Detail: </b>  
                       {{$orders_details[0]->track_detail}}
                     
                </div>
                
                    
            </div>
    </div>
</div>

<div class="holder mt-5">
    <div class="container " >
        <h1 class="text-center">Shopping Details</h1>
        <div class="cart-table ">

            @php 
            $totalAmt=0;
            $num=0;
            @endphp
            @foreach($orders_details as $list)
            @php 
            $totalAmt=$totalAmt+($list->price*$list->qty);
            $num=$num+1;
            @endphp

            <div class="cart-table-prd bg-info bg-gradient pl-5 mb-1 border border-primary">
                <div class="cart-table-prd-qty"><span>#:</span> <b>{{$num}}</b></div>
                <div class="cart-table-prd-name">
                    <h2><a href="#">{{$list->pname}}</a></h2>
                </div>
                
                <div class="cart-table-prd-image"><a href="#"><img src="{{asset('storage/media/'.$list->image_attr)}}" alt=""></a></div>

                <div class="cart-table-prd-qty"><span>Size:</span> <b>{{$list->size}}</b></div>
                <div class="cart-table-prd-qty"><span>Color:</span> <b>{{$list->color}}</b></div>
                <div class="cart-table-prd-qty"><span>qty:</span> <b>{{$list->qty}}</b></div>
                <div class="cart-table-prd-price"><span>price:</span> <b>$ {{$list->price*$list->qty}}</b></div>
                {{-- <div class="cart-table-prd-action"><a href="#" class="icon-heart"></a> <a href="#" class="icon-pencil"></a> <a href="#" class="icon-cross"></a></div> --}}
            </div>
            @endforeach

           
            <div class="cart-table-prd  pl-5 mb-1 d-flex justify-content-end   "> 

                <div class="cart-table-prd-qty  mr-3  " >
                    <span>Total:</span><b>{{$totalAmt}}</b><br>
                    <?php
                    if($orders_details[0]->coupon_value>0){
                       
                      echo '
                        <span>Coupon:</span><b>('.$orders_details[0]->coupon_code.')</b>
                       
                        <b>'.$orders_details[0]->coupon_value.'</b></br> ';
                      $totalAmt=$totalAmt-$orders_details[0]->coupon_value;
                      echo '<tr>
                        <span>Final Total:</span><b>'.$totalAmt.'</b><br> ';
                    }
                    ?>
                
                
                </div>
               
                
           </div>

        </div>
       
    </div>
</div>









@endsection  