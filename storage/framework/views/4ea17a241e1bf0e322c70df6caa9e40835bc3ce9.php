
<?php $__env->startSection('page_title','Order'); ?>
<?php $__env->startSection('order_select','active'); ?>

<?php $__env->startSection('container'); ?>



<h1>Order</h1>
     <div class="overview-wrap">
                                  
                               
 


                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer detail</th>
                                                <th>Amt</th>
                                                <th>Order Status</th>
                                                <th>Payment Status</th>
                                                <th>Payment Type</th>
                                                <th>Order Date</th>
                                               
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                            <tr>
                                                <td><a href="<?php echo e(url('/admin/order_detail')); ?>/<?php echo e($list->id); ?>"><?php echo e($list->id); ?></a> </td>
                                                <td>
                                                    <?php echo e($list->name); ?><br/>
                                                    <?php echo e($list->email); ?>

                                                    <?php echo e($list->mobile); ?><br/>
                                                    <?php echo e($list->address); ?>,<?php echo e($list->city); ?>,
                                                    <?php echo e($list->state); ?>

                                                </td>
                                                <td><?php echo e($list->total_amt); ?></td>
                                                <td><?php echo e($list->order_status); ?></td>
                                                <td><?php echo e($list->payment_status); ?></td>
                                                <td><?php echo e($list->payment_type); ?></td>
                                                <td><?php echo e($list->added_on); ?></td>
                                                
                                                
                                                
                                            </tr>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
                       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanal/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/adminpanal/order.blade.php ENDPATH**/ ?>