

<?php $__env->startSection('page_title','Search'); ?>
<?php $__env->startSection('container'); ?>



<div class="page-content">
        <div class="holder mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li><span>Products Search</span></li>
                </ul>
            </div>
        </div>
        <div class="holder mt-0">
            <div class="container">
                <!-- Two columns -->
                <!-- Page Title -->
                <div class="page-title text-center d-none d-lg-block">
                    <div class="title">
                        <h1>Search Result</h1>
                    </div>
                </div>
                <!-- /Page Title -->
      
                    <!-- /Left column -->
                    <!-- Center column -->
                    <div class="col-lg aside">
                        <div class="prd-grid-wrap">
                            <!-- Filter Row -->
                            <div class="filter-row invisible">
                                <div class="row row-1 d-lg-none align-items-center">
                                    <div class="col">
                                        <h1 class="category-title">WOMEN’S</h1>
                                    </div>
                                    <div class="col-auto ml-auto">
                                        <div class="view-in-row d-md-none"><span data-view="data-to-show-sm-1"><i class="icon icon-view-1"></i></span> <span data-view="data-to-show-sm-2"><i class="icon icon-view-2"></i></span></div>
                                        <div class="view-in-row d-none d-md-inline"><span data-view="data-to-show-md-2"><i class="icon icon-view-2"></i></span> <span data-view="data-to-show-md-3"><i class="icon icon-view-3"></i></span></div>
                                    </div>
                                </div>
                                <div class="row row-2">
                                
                                    <div class="col col-center d-none d-lg-flex align-items-center justify-content-center">
                                        <div class="view-label">View:</div>
                                        <div class="view-in-row"><span data-view="data-to-show-3"><i class="icon icon-view-3"></i></span> <span data-view="data-to-show-4"><i class="icon icon-view-4"></i></span></div>
                                    </div>
                                   
                                </div>
                            </div>
                            <!-- /Filter Row -->
                            <!-- Products Grid -->

         
                            
                            <div class="prd-grid product-listing data-to-show-3 data-to-show-md-3 data-to-show-sm-2 js-category-grid">
                            <?php if(isset($product[0])): ?>
                                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                        <div class="prd prd-has-loader prd-new prd-popular">
                                        
                                            <div class="prd-inside">
                                                <div class="prd-img-area"><a href="<?php echo e(url('product/')); ?>/<?php echo e($list->slug); ?>" class="prd-img"><img src="<?php echo e(asset('storage/media/'.$list->image)); ?>" data-srcset="<?php echo e(asset('storage/media/'.$list->image)); ?>" alt="<?php echo e($list->name); ?>" class="js-prd-img lazyload"></a>
                                                    <div class="label-new">NEW</div><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo e($list->slug); ?>','<?php echo e($list->id); ?>','<?php echo e($product_attr[$list->id][0]->id); ?>')" class="label-wishlist icon-heart js-label-wishlist"></a>
                                                    <ul class="list-options color-swatch prd-hidemobile">
                                                        
                                                    </ul>
                                                    <div class="gdw-loader"></div>
                                                </div>
                                                <div class="prd-info">
                                                    
                                                    <h2 class="prd-title"><a href="product.html"> <?php echo e($list->name); ?></a></h2>
                                                    <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                                    <div class="prd-price">
                                                        <div class="price-new">$ <?php echo e($product_attr[$list->id][0]->price); ?></div>
                                                    </div>
                                                    <div class="prd-hover">
                                                        <div class="prd-action">
                                                            <form action="javascript:void(0)"><input type="hidden"> <button class="btn" 
                                                                onclick="home_add_to_card('<?php echo e($list->id); ?>','<?php echo e($product_attr[$list->id][0]->color); ?>','<?php echo e($product_attr[$list->id][0]->size); ?>','<?php echo e($product_attr[$list->id][0]->price); ?>')" ><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                            <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                        </div>
                                                        <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                            <ul class="list-options size-swatch">
                                                                <li class="active"><span>xs</span></li>
                                                                <li><span>s</span></li>
                                                                <li><span>m</span></li>
                                                                <li><span>l</span></li>
                                                                <li><span>xl</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        <li>
                                            <figure>
                                                No data found
                                            </figure>
                                        </li>
                                        <?php endif; ?>
                                       
                                                        
                      
                            </div>
                      
             

                            <div class="loader-wrap">
                                <div class="dots">
                                    <div class="dot one"></div>
                                    <div class="dot two"></div>
                                    <div class="dot three"></div>
                                </div>
                            </div>
                            <!-- /Products Grid -->
                            <div class="show-more d-flex mt-4 mt-md-6 justify-content-center align-items-start">
                                <ul class="pagination mt-0">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Center column -->
                </div>
                <!-- /Two columns -->
            </div>
        </div>
    </div>
   














    <input type="hidden" id="qty" value="1">
  <form id="frmAddTocard">
    <input type="hidden" id="color_id" name="color_id">
    <input type="hidden" id="size_id" name="size_id">
    <input type="hidden" id="pqty" name="pqty">
    <input type="hidden" id="product_id" name="product_id">
    <?php echo csrf_field(); ?>
</form>

<form  id="wishlist_form">
    <input type="hidden" id="wishlist_slug" name="wishlist_slug" >
    <input type="hidden" id="wishlist_product_id" name="wishlist_product_id" >
    <input type="hidden" id="wishlist_product_attr_id" name="wishlist_product_attr_id" >

    <?php echo csrf_field(); ?>
</form>



<?php $__env->stopSection(); ?> 
<?php echo $__env->make('front/layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/front/search.blade.php ENDPATH**/ ?>