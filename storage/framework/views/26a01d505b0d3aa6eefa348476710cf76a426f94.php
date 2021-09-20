
<?php $__env->startSection('page_title','Customer'); ?>
<?php $__env->startSection('customer_select','active'); ?>

<?php $__env->startSection('container'); ?>


<?php if(session()->has('message')): ?>
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
    <span class="badge badge-pill badge-danger">Success</span>
    <?php echo e(session('message')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<?php endif; ?>
<h1>Customer</h1>
                    

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>City</th>
                                                
                                               
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                            <tr>
                                                <td><?php echo e($list->id); ?></td>
                                                <td><?php echo e($list->name); ?></td>
                                                <td><?php echo e($list->email); ?></td>
                                                <td><?php echo e($list->mobile); ?></td>
                                                <td><?php echo e($list->city); ?></td>
                                                
                                                <td class="process">
                                                    
                                                    <a href="<?php echo e(url('admin/customer/show/')); ?>/<?php echo e($list->id); ?>">
                                                        <button type="button" class="btn btn-success">View</button>
                                                    </a>

                                                    <?php if($list->status==1): ?>
                                                    <a href="<?php echo e(url('admin/customer/status/0')); ?>/<?php echo e($list->id); ?>">
                                                        <button type="button" class="btn btn-warning">Deactive</button>
                                                    </a>
                                                    <?php elseif($list->status==0): ?>
                                                    <a href="<?php echo e(url('admin/customer/status/1')); ?>/<?php echo e($list->id); ?>">
                                                        <button type="button" class="btn btn-primary">Active</button>
                                                    </a>
                                                    <?php endif; ?>
                                                    
                                                </td>
                                                
                                            </tr>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
                       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanal/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/adminpanal/customer.blade.php ENDPATH**/ ?>