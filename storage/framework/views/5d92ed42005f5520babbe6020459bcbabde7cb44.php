

<?php $__env->startSection('page_title','My Account'); ?>
<?php $__env->startSection('container'); ?>



<div class="page-content">
    <div class="holder mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li><span>My account</span></li>
            </ul>
        </div>
    </div>
    <div class="holder mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3 aside aside--left">
                    
                    <div class="list-group"><a href="<?php echo e(url('/account_detail')); ?>" class="list-group-item <?php echo $__env->yieldContent('account_select'); ?>">Account Details</a>  <a href="<?php echo e(url('/my_wishlist')); ?>" class="list-group-item <?php echo $__env->yieldContent('wishlist_select'); ?>">My Wishlist</a> <a href="<?php echo e(url('/order_history')); ?>" class="list-group-item <?php echo $__env->yieldContent('history_select'); ?>">My Order History</a>  <a href="javascript:void(0)" class="list-group-item <?php echo $__env->yieldContent('mysavetag_select'); ?>">My Saved Tags</a> <a href="javascript:void(0)" class="list-group-item <?php echo $__env->yieldContent('compare_select'); ?>">Compare Products</a></div>
                </div>
             
                <?php $__env->startSection('sidebar'); ?>

                <?php echo $__env->yieldSection(); ?>
             
            </div>
        </div>
    </div>
</div>












<?php $__env->stopSection(); ?>  
<?php echo $__env->make('front/layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/front/layout_account.blade.php ENDPATH**/ ?>