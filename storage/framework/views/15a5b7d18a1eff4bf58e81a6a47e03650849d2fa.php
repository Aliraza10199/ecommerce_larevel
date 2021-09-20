
<?php $__env->startSection('page_title','Order Detail'); ?>
<?php $__env->startSection('container'); ?>




<div class="page-content">
    <div class="container">
             <div class="row">
                <div class="col-md-6">
                    <h1>Details Address</h1>
                    <ul style="list-style: none;" class="ml-5" >
                        <li>Name: <?php echo e($orders_details[0]->name); ?></li>
                        <li>Phone: +<?php echo e($orders_details[0]->mobile); ?> </li>               
                        <li>Address: <?php echo e($orders_details[0]->address); ?></li>
                        
                        <li>State: <?php echo e($orders_details[0]->state); ?></li>
                        <li>City: <?php echo e($orders_details[0]->city); ?></li> 
                    </ul>
                </div>
                <div class="col-md-6">
                   
                      <h1>Order Details</h1>
                       Order Status: <?php echo e($orders_details[0]->orders_status); ?><br/>
                       Payment Status: <?php echo e($orders_details[0]->payment_status); ?><br/>
                       Payment Type: <?php echo e($orders_details[0]->payment_type); ?><br/>
                       
                       <?php
                        if($orders_details[0]->payment_id!=''){
                            echo 'Payment ID: '.$orders_details[0]->payment_id;
                        }
                       ?>
                     <b>Track Detail: </b>  
                       <?php echo e($orders_details[0]->track_detail); ?>

                     
                </div>
                
                    
            </div>
    </div>
</div>

<div class="holder mt-5">
    <div class="container " >
        <h1 class="text-center">Shopping Details</h1>
        <div class="cart-table ">

            <?php 
            $totalAmt=0;
            $num=0;
            ?>
            <?php $__currentLoopData = $orders_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php 
            $totalAmt=$totalAmt+($list->price*$list->qty);
            $num=$num+1;
            ?>

            <div class="cart-table-prd bg-info bg-gradient pl-5 mb-1 border border-primary">
                <div class="cart-table-prd-qty"><span>#:</span> <b><?php echo e($num); ?></b></div>
                <div class="cart-table-prd-name">
                    <h2><a href="#"><?php echo e($list->pname); ?></a></h2>
                </div>
                
                <div class="cart-table-prd-image"><a href="#"><img src="<?php echo e(asset('storage/media/'.$list->image_attr)); ?>" alt=""></a></div>

                <div class="cart-table-prd-qty"><span>Size:</span> <b><?php echo e($list->size); ?></b></div>
                <div class="cart-table-prd-qty"><span>Color:</span> <b><?php echo e($list->color); ?></b></div>
                <div class="cart-table-prd-qty"><span>qty:</span> <b><?php echo e($list->qty); ?></b></div>
                <div class="cart-table-prd-price"><span>price:</span> <b>$ <?php echo e($list->price*$list->qty); ?></b></div>
                
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

           
            <div class="cart-table-prd  pl-5 mb-1 d-flex justify-content-end   "> 

                <div class="cart-table-prd-qty  mr-3  " >
                    <span>Total:</span><b><?php echo e($totalAmt); ?></b><br>
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









<?php $__env->stopSection(); ?>  
<?php echo $__env->make('front/layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/front/order_detail.blade.php ENDPATH**/ ?>