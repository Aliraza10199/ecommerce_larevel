@extends('front/layouts')
@section('page_title','Checkout')
@section('container')



<div class="page-content">
    <div class="holder mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><span>Checkout</span></li>
            </ul>
        </div>
    </div>
    <div class="holder mt-0">
        <div class="container">
            <h1 class="text-center">Checkout wizard</h1>
            <div class="clearfix"></div>
            <form id="frmPlaceOrder" >
                <div class="row">
                    <div class="col-md-8">
                        <div class="steps-progress">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#step1" data-step="1"><span>01.</span><span>Shipping Address</span></a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#step2" data-step="2"><span>02.</span><span>Billing Address</span></a></li>
                                {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#step3" data-step="3"><span>03.</span><span>Delivery Method</span></a></li> --}}
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#step4" data-step="4"><span>03.</span><span>Payment Method</span></a></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 25%;"></div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="step1">
                                <div class="tab-pane-inside">
                                    @if(session()->has('FRONT_USER_LOGIN')==null)
                                    <p><a href="{{url('/login_user')}}">Login</a> or <a href="{{url('/regestration')}}">Register</a> for faster payment.</p>
                                    @endif
                                    <div class="row mt-2">
                                        <div class="col-sm-6"><label class="text-uppercase names">Name:</label>
                                            <div class="form-group"><input type="text" id="name1" class="form-control" value="{{$customers['name']}}" name="name" required></div>
                                        </div>
                                        <div class="col-sm-6"><label class="text-uppercase"> Email:</label>
                                            <div class="form-group"><input type="email" id="email1" class="form-control" value="{{$customers['email']}}" name="email" required></div>
                                        </div> 
                                    </div>
                                    <div class="row ">
                                        <div class="col-sm-6"><label class="text-uppercase">Mobile:</label>
                                            <div class="form-group"><input type="text" id="mobile1" class="form-control" value="{{$customers['mobile']}}" name="mobile" required></div>
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="country"class="text-uppercase">Country:</label>
                                        <div class="form-group select-wrapper"  ><select name="country" class="form-control " id="country1" >
                                                @if($customers['country']!=null)
                                                <option   selected value="{{$customers['country']}}">{{$customers['country']}}</option>
                                                @else
                                                <option value="united States">United States</option>
                                                <option value="pakistan">Paksitan</option>
                                                <option value="canada">Canada</option>
                                                <option value="china">China</option>
                                                <option value="india">India</option>
                                                <option value="italy">Italy</option>
                                                <option value="mexico">Mexico</option>
                                                @endif
                                            </select>
                                        </div></div>
                                     </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="text-uppercase">State:</label>
                                            <div class="form-group"><input type="text" class="form-control" id="state1"  value="{{$customers['state']}}" name="state" required></div>
                                                  
                                               
                                        </div>
                                        <div class="col-sm-6"><label class="text-uppercase">City:</label>
                                            <div class="form-group"><input type="text" class="form-control" id="city1"  value="{{$customers['city']}}" name="city" required></div>
                                        </div>
                                    </div><label class="text-uppercase">Address:</label>
                                    <div class="form-group"><input type="text" class="form-control" id="address1" value="{{$customers['address']}}" name="address"   required></div>
                                    
                                    
                                    {{-- <div class="clearfix"><input id="formcheckoutCheckbox1" name="checkbox1" type="checkbox"> <label for="formcheckoutCheckbox1">Save address to my account</label></div> --}}
                                    <div class="text-right"><button id="btn12" type="button" class="btn btn-sm step-next btn123">Continue</button></div>
                                    <div id="name_error"></div>
                                </div>
                            </div>




                            {{-- Step 2222  --}}
                             <div class="tab-pane fade" id="step2">
                                <div class="tab-pane-inside">
                                    <div class="clearfix">
                                        <input id="formcheckoutCheckbox2" class="check_same_address" name="checkbox2" type="checkbox" value="1">
                                         <label for="formcheckoutCheckbox2">The same as shipping address</label></div>
                                  
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="text-uppercase">City</label>
                                            <div class="form-group"><input type="text" id="city2" name="city2" class="form-control"></div>
                                        </div>
                                        <div class="col-sm-6"><label class="text-uppercase">Country:</label>
                                            <div class="form-group select-wrapper" ><select class="form-control" id="country2">
                                                <option value="united States">United States</option>
                                                <option value="pakistan">Paksitan</option>
                                                <option value="canada">Canada</option>
                                                <option value="china">China</option>
                                                <option value="india">India</option>
                                                <option value="italy">Italy</option>
                                                <option value="mexico">Mexico</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12"><label class="text-uppercase">Statess:</label>
                                            
                                                <div class="form-group"><input type="text" class="form-control" id="state2"  value="" name="state2" required></div>
   
                                           
                                        </div>
                                        {{-- <div class="col-sm-6"><label class="text-uppercase">zip/postal code:</label>
                                            <div class="form-group"><input type="text" id="zip2" name="zipCode2" class="form-control" ></div>
                                        </div> --}}
                                    </div><label class="text-uppercase">Address:</label>
                                    <div class="form-group"><input type="text" id="address2" name="address2" class="form-control"></div>

                                    <div class="mt-2"></div>
                                    <div class="text-right"><button type="button" id="btn2" class="btn btn-sm step-next">Continue</button></div>
                                    <div id="name_error2"></div>
                                </div>
                            </div>

                            {{-- 3rd spte --}}
                            {{-- <div class="tab-pane fade" id="step3">
                                <div class="tab-pane-inside">
                                    <div class="clearfix"><input id="formcheckoutRadio1" value="" name="radio1" type="radio" class="radio" checked="checked"> <label for="formcheckoutRadio1">Standard Delivery $2.99 (3-5 days)</label></div>
                                    <div class="clearfix"><input id="formcheckoutRadio2" value="" name="radio1" type="radio" class="radio"> <label for="formcheckoutRadio2">Express Delivery $10.99 (1-2 days)</label></div>
                                    <div class="clearfix"><input id="formcheckoutRadio3" value="" name="radio1" type="radio" class="radio"> <label for="formcheckoutRadio3">Same-Day $20.00 (Evening Delivery)</label></div>
                                    <div class="text-right"><button type="button" class="btn btn-sm step-next">Continue</button></div>
                                </div>
                            </div> --}}


                            {{-- 4th stpe --}}
                            <div class="tab-pane fade" id="step4">
                                <div class="tab-pane-inside">
                                    <div class="clearfix"><input id="cod" value="COD" name="payment_type" type="radio" class="radio" checked > <label for="cod">Cash On Delivery</label></div>
                                    <div class="clearfix"><input id="formcheckoutRadio5" value="Gateway" name="payment_type" type="radio" class="radio"> <label for="formcheckoutRadio5">Credit Card</label></div>
                                    <div class="payment-icons"><img src="{{asset('frontend/images/placeholder.png')}}" data-srcset="{{asset('frontend/images/payment/payment-card-visa.png 1x')}}, {{asset('frontend/images/payment/payment-card-visax2.png 2x')}}" class="lazyload" alt=""> <img src="{{asset('frontend/images/placeholder.png')}}" data-srcset="{{asset('frontend/images/payment/payment-card-mastecard.png 1x')}}, {{asset('frontend/images/payment/payment-card-mastecardx2.png 2x')}}" class="lazyload" alt=""> <img src="{{asset('frontend/images/placeholder.png')}}" data-srcset="{{asset('frontend/images/payment/payment-card-discover.png 1x')}}, {{asset('frontend/images/payment/payment-card-discoverx2.png 2x')}}" class="lazyload" alt=""></div>
                                    <label class="text-uppercase">Cart Number</label>
                                    <div class="form-group"><input type="text" class="form-control"></div>
                                    <div class="row">
                                        <div class="col-sm-6"><label class="text-uppercase">Month:</label>
                                            <div class="form-group select-wrapper"><select class="form-control">
                                                    <option selected="selected" value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select></div>
                                        </div>
                                        <div class="col-sm-6"><label class="text-uppercase">Year:</label>
                                            <div class="form-group select-wrapper"><select class="form-control">
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6"><label class="text-uppercase">CVV Code</label>
                                            <div class="form-group"><input type="text" class="form-control"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix mt-1 mt-md-2">
                                    <button id="btnPlaceOrder" value="place oder" type="submit"  class="btn btn--lg w-100">Place Order</button></div>
                                    <div id="order_place_msg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2 mt-md-5">
                        <h2 class="custom-color">ORDER SUMMARY</h2>
                        <div class="cart-table cart-table--sm">
                            <div class="cart-table-prd cart-table-prd-headings d-none d-lg-table">
                                <div class="cart-table-prd-image"></div>
                                <div class="cart-table-prd-name"><b>ITEM</b></div>
                                <div class="cart-table-prd-qty"><b>QTY</b></div>
                                <div class="cart-table-prd-price"><b>PRICE</b></div>
                            </div>


                            @php
                            $totalPrice=0;
                            @endphp
    
                            @foreach ($card_datas as $item)
                            @php
                               $totalPrice= $totalPrice+($item->price*$item->qty);
                             @endphp


                            <div class="cart-table-prd">
                                <div class="cart-table-prd-image"><a href="javascript:void(0)"><img src="{{asset('storage/media/'.$item->image)}}" alt=""></a></div>
                                <div class="cart-table-prd-name">
                                    <h2><a href="javascript:void(0)">{{$item->name}}</a></h2>{{$item->color}}<br>{{$item->size}}
                                </div>
                                <div class="cart-table-prd-qty"><b>{{$item->qty}}</b></div>
                                <div class="cart-table-prd-price"><b>$ {{$item->price*$item->qty}}</b></div>
                               
                            </div>
                            @endforeach


                        </div>
                        <div class="card-total-sm">
                           
                            <div   class="float-right">Subtotal <span id="total_price" class="card-total-price">$ {{$totalPrice}}</span></div>
                           
                        </div>

                        <div > 
                            <th class="hide  show_coupon_box">Coupon Codess  <a href="javascript:void(0)" onclick="remove_coupon_code()" class="remove_coupon_code_link">Remove</a></th>
                            <h5 class="float-right" id="coupon_code_str"></h5>
                            {{-- <h1 >Coupon Code  <a href="javascript:void(0)" onclick="remove_coupon_code()" class="remove_coupon_code_link">Remove</a></h1>
                            <h2 id="coupon_code_str"></h2> --}}
                         </div>
   
                        <div class="mt-2"></div>
                        <div class="card card--grey">
                            <div class="card-body">
                                <h3>APPLY PROMOCODE</h3><label class="text-uppercase">promo/student code:</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control apply_coupon_code_box" name="coupon_code" id="coupon_code">
                                    </div><button type="button" value="Apply Coupon" onclick="applCcouponCode()" class="btn btn--form btn--alt apply_coupon_code_box">Apply</button>
                                    
                                </div>
                                <div id="coupon_code_msg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @csrf
            </form>
        </div>
    </div>

</div>
{{-- <tr class="hide show_coupon_box">
        <th>Coupon Code <a href="javascript:void(0)" onclick="remove_coupon_code()" class="remove_coupon_code_link">Remove</a></th>
        <td id="coupon_code_str"></td>
    </tr> --}}
    

   

<script>
    
</script>












@endsection 
