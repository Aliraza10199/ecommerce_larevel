
<?php $__env->startSection('page_title','Admin Order Detail'); ?>
<?php $__env->startSection('order_select','active'); ?>

<?php $__env->startSection('container'); ?>


<div class="mb-5  bg-light">
    <h1 class="text-center mb-5 mt-3 "> Order Detail:- <?php echo e($orders_details[0]->id); ?></h1>
        <div class="overview-wrap">
                                    
                                
            
                <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Details Address</h1>
                                <ul style="list-style: none;" >
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
                                Payment ID: <?php echo e($orders_details[0]->payment_id); ?><br/>
                                <?php
                                    if($orders_details[0]->payment_id!=''){
                                        echo 'Payment ID: '.$orders_details[0]->payment_id;
                                    }
                                ?>
                                
                                
                            </div>
                        </div>
                </div>
            
        </div>


        
                <div class="container">


                
                            <h1 class="text-center mb-5 mt-5">Shopping Details</h1>
            
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <!-- DATA TABLE-->
                                    <div class="table-responsive m-b-40">
                                        <table class="table table-borderless table-data3 " >
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product</th>
                                                    <th>Image</th>
                                                    <th>Size</th>
                                                    <th>Color</th>
                                                    <th>Qty</th>
                                                    <th>Price</th>
                                                
                                                
                                                
                                                
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $totalAmt=0;
                                                $num=0;
                                                ?>
                                                <?php $__currentLoopData = $orders_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php 
                                                $totalAmt=$totalAmt+($list->price*$list->qty);
                                                $num=$num+1;
                                                ?>
                                                
                                    
                                                    
                                                <tr>
                                                    <td class="bg-success fs-5 fw-bold"> <?php echo e($num); ?> </td>
                                                    <td>  <?php echo e($list->pname); ?> </td>
                                                    <td class=""><a href=""><img  src="<?php echo e(asset('storage/media/'.$list->image_attr)); ?>" alt=""></a> </td>
                                                    
                                                    <td><?php echo e($list->size); ?></td>
                                                    <td><?php echo e($list->color); ?></td>
                                                    <td><?php echo e($list->qty); ?></td>
                                                    <td>$<?php echo e($list->price); ?></td>
                                                
                                                    
                                                
                                                    
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            
                                            </tbody>
                                        </table>
                                            <div class="cart-table-prd  pl-5 mb-1 d-flex justify-content-end   "> 

                                                <div class="cart-table-prd-qty  mr-3" >
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
                                    <!-- END DATA TABLE-->
                                </div>
                            </div>
                            
                        

                    </div>                   
 </div>    
 
    <div class="order_operation bg-light p-4 ">
        <b>Update Order Status</b>
        <select class="form-control " id="order_status" onchange="update_order_status(<?php echo e($orders_details[0]->id); ?>)">
            <?php
              foreach($orders_status as $list){
                //   prx($orders_details[0]->orders_status);
                  if($orders_details[0]->order_status==$list->id){
                     echo "<option value='".$list->id."' selected>".$list->orders_status."</option>";      
                  }else{
                     echo "<option value='$list->id' >".$list->orders_status."</option>";   
                  }      
              }
              ?>
        </select>

        <b>Update Payment Status</b>
        <select id="payment_status" onchange="update_payment_status(<?php echo e($orders_details[0]->id); ?>)"  class="form-control" >
         <?php
         foreach ($payment_status as $item)
         if($orders_details[0]->payment_status==$item){
             echo "  <option value='$item' selected>$item</option> ";
         }else {
             echo "  <option value='$item'>$item</option>";
         }    
         ?>
           
           
        </select>


        <b>Track Details</b>
        <form method="post">
           <textarea name="track_detail" class="form-control  m-b-10" required><?php echo e($orders_details[0]->track_detail); ?></textarea>
           <button type="submit" class="btn btn-success">
             Update
         </button>
         <?php echo csrf_field(); ?>
        </form>

    </div>
                        
                       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanal/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/adminpanal/order_detail.blade.php ENDPATH**/ ?>