



<?php $__env->startSection('page_title','My Order Details'); ?>
<?php $__env->startSection('history_select','active'); ?>
<?php $__env->startSection('sidebar'); ?>

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
                        <?php
                        $num = 0;
                         ?>
               
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <?php
                $num=$num+1;              
                ?> 

                <tr>
                    <td><?php echo e($num); ?></td>
                    <td><b><?php echo e($list->id); ?></b> <a href="<?php echo e(url('/order_detail')); ?>/<?php echo e($list->id); ?>" class="ml-1">View Details</a></td>
                  
                    <td><?php echo e($list->orders_status); ?></td>
                    <td><?php echo e($list->payment_status); ?></td>
                    <td><?php echo e($list->payment_id); ?></td>
                    <td><span class="color">$<?php echo e($list->total_amt); ?></span></td>
                    <td><?php echo e($list->added_on); ?></td>
                    <td><a href="#" class="btn">REORDER</a></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="text-right mt-2"><a href="#" class="btn btn--alt">Clear History</a></div>
</div>






<?php $__env->stopSection(); ?>  
<?php echo $__env->make('front/layout_account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/front/account_history.blade.php ENDPATH**/ ?>