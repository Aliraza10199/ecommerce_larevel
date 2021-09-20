<?php $__env->startSection('page_title','Order Placed'); ?>
<?php $__env->startSection('container'); ?>
                 

                                 
         <div class="container">
            <div class="row d-flex justify-content-center mt-5"   >

                      <div class="status">

                        <?php if($response['pp_ResponseCode'] == '000'): ?>
                        <!-- --------------------------------------------------------------------------- -->
                        <!-- Payment successful -->
                            <h1 class="success text-primary">Your Payment has been Successful</h1>
                            <div class="align-bottom text-success">
                            <h4>Payment Information</h4>
                            <p><b>Reference Number:</b> <?php echo e($response['pp_RetreivalReferenceNo']); ?></p>
                            <p><b>Transaction ID:</b> <?php echo e($response['pp_TxnRefNo']); ?></p>
                            <p><b>Paid Amount:</b> <?php echo e($response['pp_Amount']); ?></p>
                            <p><b>Payment Status:</b> Success</p>
                        </div>
                        <!-- --------------------------------------------------------------------------- -->
                        

                        <!-- --------------------------------------------------------------------------- -->
                        <!-- Payment not successful -->
                        <?php elseif($response['pp_ResponseCode'] == '124'): ?>
                            <h1 class="error">Your Payment has been on Waiting satate</h1>
                        <p><b>Message: </b><?php echo e($response['pp_ResponseMessage']); ?></p>
                        <p><b>Voucher Number: </b><?php echo e($response['pp_RetreivalReferenceNo']); ?></p>
                        <!-- --------------------------------------------------------------------------- -->
                        

                        <!-- --------------------------------------------------------------------------- -->
                        <!-- Payment not successful -->
                        <?php else: ?>
                            <h1 class="error">Your Payment has Failed</h1>
                        <p><b>Message: </b><?php echo e($response['pp_ResponseMessage']); ?></p>
                        <?php endif; ?>
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
      

    
       <?php $__env->stopSection(); ?> 
<?php echo $__env->make('front/layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/front/payment-status.blade.php ENDPATH**/ ?>