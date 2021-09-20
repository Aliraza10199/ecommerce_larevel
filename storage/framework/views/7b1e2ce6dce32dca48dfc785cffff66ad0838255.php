
<?php $__env->startSection('page_title','Card Page'); ?>
<?php $__env->startSection('container'); ?>


<div class="page-content">
    <div class="holder mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li><span>Cart</span></li>
            </ul>
        </div>
    </div>
    <div class="holder mt-0">
        <div class="container">
            <h1 class="text-center">Shopping Cart</h1>
            <div class="row">
                <div class="col-md-8">
                    <div class="cart-table">
                        <?php
                        $sum = 0;
                         ?>

                        <?php if(isset($card_list[0])): ?>
                      
                       
                        <?php $__currentLoopData = $card_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div id="card_box<?php echo e($data->attr_id); ?>" class="cart-table-prd">
                            <div class="cart-table-prd-image"><a href="<?php echo e(url('product/'.$data->slug)); ?>"><img src="<?php echo e(asset('storage/media/'.$data->image)); ?>" alt="<?php echo e($data->name); ?>"></a></div>                
                            <div class="cart-table-prd-name">
                                <h2><a href="<?php echo e(url('product/'.$data->slug)); ?>"><?php echo e($data->name); ?></a></h2>
                              
                                <?php if($data->color!=''): ?>
                                <h5>color: <?php echo e($data->color); ?></h5>
                                <?php endif; ?>
                                <?php if($data->size!=''): ?>
                                <h5>size: <?php echo e($data->size); ?></h5>
                                <?php endif; ?>
                              
                               
                            </div>
                          
                            <div class="cart-table-prd-qty"><span>qty: </span> <b><?php echo e($data->qty); ?></b></div>
                            <div class="cart-table-prd-price"><span>price:</span> <b>$ <?php echo e($data->price*$data->qty); ?></b></div>
                            <div class="cart-table-prd-action"><a href="#" class="icon-heart"></a> <a href="<?php echo e(url('product/'.$data->slug)); ?>" class="icon-pencil"></a> <a href="javascript:void(0)"  onclick="deleteCardProduct('<?php echo e($data->pid); ?>','<?php echo e($data->color); ?>','<?php echo e($data->size); ?>','<?php echo e($data->attr_id); ?>')" class="icon-cross"></a></div>
                           
                        </div>
                       
                        <?php
                        $sum+=$data->price*$data->qty;
                       
                   ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <h3>Data not Found</h3>
                        <?php endif; ?>
                       
                      
                       
                        
                        <div class="cart-table-total">
                            <div class="row">
                                <div class="col-sm"><a href="#" class="btn btn--alt"><i class="icon-cross"></i><span>clear shopping cart</span></a> <a href="<?php echo e(url('/view_card')); ?>" class="btn btn--grey"><i class="icon-repeat"></i><span>update cart</span></a></div>
                                <div class="col-sm-auto"><a href="<?php echo e(url('/')); ?>" class="btn"><i class="icon-angle-left"></i><span>continue shopping</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-block">
                        <div class="card-total text-uppercase">Subtotal <span class="card-total-price">$ <?php echo e($sum); ?></span></div><a href="<?php echo e(url('/checkout')); ?>" class="btn btn--full btn--lg">proceed to checkout</a>
                    </div>
                    
                    <div class="sidebar-block collapsed">
                        <div class="sidebar-block_title"><span>SHIPPING ESTIMATES</span>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="sidebar-block_content"><label class="text-uppercase">Country:</label>
                            <div class="form-group select-wrapper"><select class="form-control">
                                    <option value="United States">United States</option>
                                    <option value="Canada">Canada</option>
                                    <option value="China">China</option>
                                    <option value="India">India</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Mexico">Mexico</option>
                                </select></div><label class="text-uppercase">State:</label>
                            <div class="form-group select-wrapper"><select class="form-control">
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                </select></div><label class="text-uppercase">zip/postal code:</label>
                            <div class="form-group"><input type="text" class="form-control"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<form id="frmAddTocard" >
    <input type="hidden" id="color_id" name="color_id" >
    <input type="hidden" id="size_id" name="size_id">
    <input type="hidden" id="pqty" name="pqty">
    <input type="hidden" id="product_id" name="product_id">
    <?php echo csrf_field(); ?> 
</form>


<?php $__env->stopSection(); ?> 

<?php echo $__env->make('front/layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/front/view_card.blade.php ENDPATH**/ ?>