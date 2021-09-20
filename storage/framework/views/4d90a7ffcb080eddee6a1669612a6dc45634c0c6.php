



<?php $__env->startSection('page_title','My Wishlist'); ?>
<?php $__env->startSection('wishlist_select','active'); ?>
<?php $__env->startSection('sidebar'); ?>

<div class="col-md-9 aside">
    <h2>My Wishlist</h2>
    <div class="cart-table cart-table--wishlist">

        <?php
        $sum = 0;
         ?>

        <?php if(isset($wishlist_product[0])): ?>       
        <?php $__currentLoopData = $wishlist_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div  id="card_box_wishlist<?php echo e($data->attr_id); ?>" class="cart-table-prd">
                    <div class="cart-table-prd-image"><a href="#"><img src="<?php echo e(asset('storage/media/'.$data->image)); ?>" alt="<?php echo e($data->name); ?>"></a></div>
                    <div class="cart-table-prd-name">
                        <h2><a href="<?php echo e(url('product/'.$data->slug)); ?>"><?php echo e($data->name); ?></a></h2>
                              
                                <?php if($data->color!=''): ?>
                                <h5>color: <?php echo e($data->color); ?></h5>
                                <?php endif; ?>
                                <?php if($data->size!=''): ?>
                                <h5>size: <?php echo e($data->size); ?></h5>
                                <?php endif; ?>
                              
                    </div>
                    
                    <div class="cart-table-addtocart"><a href="javascript:void(0)"  onclick="home_add_to_card('<?php echo e($data->pid); ?>','<?php echo e($data->color); ?>','<?php echo e($data->size); ?>','<?php echo e($data->price); ?>')"  class="btn">Add To Cart</a> 
                        <a href="javascript:void(0)" onclick="deletewishlistProduct('<?php echo e($data->slug); ?>','<?php echo e($data->pid); ?>','<?php echo e($data->color); ?>','<?php echo e($data->size); ?>','<?php echo e($data->attr_id); ?>')" class="icon-cross delete-from-wishlist" title="Remove from wishlist"></a></div>
                </div>
         
        <?php
        // $sum+=$data->price*$data->qty;
        
    ?> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <h3>Data not Found</h3>
        <?php endif; ?>
               
        
    </div>
</div>

<input type="hidden" id="qty" value="1">
<form id="frmAddTocard" >
    <input type="hidden" id="color_id" name="color_id" >
    <input type="hidden" id="size_id" name="size_id">
    <input type="hidden" id="pqty" name="pqty">
    <input type="hidden" id="product_id" name="product_id">
     <!-- <input type="hidden" id="price_card" name="price_card">  -->
    <?php echo csrf_field(); ?>    
</form>
<form  id="wishlists_form">
    <input type="hidden" id="wishlist_slug" name="wishlist_slug" >
    <input type="hidden" id="wishlist_product_id" name="wishlist_product_id" >
    <input type="hidden" id="wishlist_product_attr_id" name="wishlist_product_attr_id" >

    <?php echo csrf_field(); ?>
</form>


<?php $__env->stopSection(); ?> 




<?php echo $__env->make('front/layout_account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/front/account_wishlist.blade.php ENDPATH**/ ?>