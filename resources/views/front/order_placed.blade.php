
@extends('front/layouts')
@section('page_title','Order Placed')
@section('container')


         {{-- @if($response['pp_ResponseCode'] != '000') --}}

               <!-- product category -->
            <section id="aa-product-category">
            <div class="container">
               <div class="row d-flex justify-content-center mt-5"   >
                  
                     <h2 class="text-primary">Order has been Placed successfully</h2>
               </div>
               <div class="row d-flex justify-content-center"   >
                  
                  <h2 class="align-bottom text-success">Order Id:    {{session()->get('ORDER_ID')}}</h2>
               </div>
               <div class="row d-flex justify-content-center" >
                  <a href="{{url('/order_history')}}" class=" primary Bold">Check Your Order Detail here</a><br>
               </div>
            </div>
            </section>


      
                
 </div>



@endsection 