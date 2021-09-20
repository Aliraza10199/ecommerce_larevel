
@extends('front/layouts')
@section('page_title','Order Placed')
@section('container')
                 

                                 
         <div class="container">
            <div class="row d-flex justify-content-center mt-5"   >

                      <div class="status">

                        @if($response['pp_ResponseCode'] == '000')
                        <!-- --------------------------------------------------------------------------- -->
                        <!-- Payment successful -->
                            <h1 class="success text-primary">Your Payment has been Successful</h1>
                            <div class="align-bottom text-success">
                            <h4>Payment Information</h4>
                            <p><b>Reference Number:</b> {{ $response['pp_RetreivalReferenceNo'] }}</p>
                            <p><b>Transaction ID:</b> {{ $response['pp_TxnRefNo'] }}</p>
                            <p><b>Paid Amount:</b> {{ $response['pp_Amount'] }}</p>
                            <p><b>Payment Status:</b> Success</p>
                        </div>
                        <!-- --------------------------------------------------------------------------- -->
                        

                        <!-- --------------------------------------------------------------------------- -->
                        <!-- Payment not successful -->
                        @elseif($response['pp_ResponseCode'] == '124')
                            <h1 class="error">Your Payment has been on Waiting satate</h1>
                        <p><b>Message: </b>{{ $response['pp_ResponseMessage'] }}</p>
                        <p><b>Voucher Number: </b>{{ $response['pp_RetreivalReferenceNo'] }}</p>
                        <!-- --------------------------------------------------------------------------- -->
                        

                        <!-- --------------------------------------------------------------------------- -->
                        <!-- Payment not successful -->
                        @else
                            <h1 class="error">Your Payment has Failed</h1>
                        <p><b>Message: </b>{{ $response['pp_ResponseMessage'] }}</p>
                        @endif
                        <!-- --------------------------------------------------------------------------- -->
                        
                        


                        </div>

                    </div>
              </div>

                    <div class="row d-flex justify-content-center" >
                        <a href="http://127.0.0.1:8000/" class=" primary Bold">Back to Products</a><br>
                    </div>
                      
                        <?php $post_data = Session::get('post_data');
                        // echo '<pre>';
                        //    print_r($response);
                        //    echo '</pre>';
                        
                        ?>
      

    
       @endsection 