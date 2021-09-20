
<?php $__env->startSection('page_title','Product'); ?>
<?php $__env->startSection('product_select','active'); ?>

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
<h1>Product</h1>
     <div class="overview-wrap">
                                  
                                    <h2 class="title-1">ITEMS</h2>


                                   <a href="<?php echo e(url('admin/product/manage_product')); ?>"> <button  type="button" class="  au-btn au-btn-icon au-btn--blue">+ Add Product</button>
                                   </a>
                                </div> 

 


                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>image</th>
                                               
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                            <tr>
                                                <td><?php echo e($list->id); ?></td>
                                                <td><?php echo e($list->name); ?></td>
                                                <td><?php echo e($list->slug); ?></td>
                                                <td>
                                                    <?php if($list->image!=''): ?>
                                                    <img  width="50px" src="<?php echo e(asset('storage/media/'.$list->image)); ?>"/></td>
                                                     <?php endif; ?>
                                                <td class="process">
                                                    
                                                    <a href="<?php echo e(url('admin/product/manage_product/')); ?>/<?php echo e($list->id); ?>">
                                                        <button type="button" class="btn btn-success">Edit</button>
                                                    </a>

                                                    <?php if($list->status==1): ?>
                                                    <a href="<?php echo e(url('admin/product/status/0')); ?>/<?php echo e($list->id); ?>">
                                                        <button type="button" class="btn btn-warning">Deactive</button>
                                                    </a>
                                                    <?php elseif($list->status==0): ?>
                                                    <a href="<?php echo e(url('admin/product/status/1')); ?>/<?php echo e($list->id); ?>">
                                                        <button type="button" class="btn btn-primary">Active</button>
                                                    </a>
                                                    <?php endif; ?>
                                                    <a href="<?php echo e(url('admin/product/delete/')); ?>/<?php echo e($list->id); ?>">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </a>
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
<?php echo $__env->make('adminpanal/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/adminpanal/product.blade.php ENDPATH**/ ?>