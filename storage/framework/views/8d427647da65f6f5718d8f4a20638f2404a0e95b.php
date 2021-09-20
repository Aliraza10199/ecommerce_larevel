
<?php $__env->startSection('page_title',$home_products[0]->name); ?>
<?php $__env->startSection('container'); ?>

<div class="page-content">
    <div class="holder mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li><a href="javascript:void(0)">Recommended products</a></li>
                <li><span><?php echo e($home_products[0]->name); ?></span></li>
            </ul>
        </div>
    </div>
    <div class="holder mt-0">
        <div class="container">
            <div class="row prd-block prd-block--mobile-image-first js-prd-gallery" id="prdGallery100">
                <div class="col-md-6 col-xl-5">
                    <div class="prd-block_info js-prd-m-holder mb-2 mb-md-0"></div><!-- Product Gallery -->
                    <div class="prd-block_main-image main-image--slide js-main-image--slide">
                        <div class="prd-block_main-image-holder js-main-image-zoom" data-zoomtype="inner">
                            <div class="prd-block_main-image-video js-main-image-video"><video loop muted preload="metadata" controls="controls">
                                    <source src="#"></video>
                                <div class="gdw-loader"></div>
                            </div>
                            <div class="prd-has-loader">
                                <div class="gdw-loader">
                                    </div>
                                    <img src="<?php echo e(asset('storage/media/'.$home_products[0]->image)); ?>" class="zoom" alt="<?php echo e($home_products[0]->name); ?>" data-zoom-image="<?php echo e(asset('storage/media/'.$home_products[0]->image)); ?>">
                                </div>
                                <div class="prd-block_main-image-next slick-next js-main-image-next">NEXT</div>
                                <div class="prd-block_main-image-prev slick-prev js-main-image-prev">PREV</div>
                            </div>

                            <div class="product-previews-wrapper">
                                <div class="product-previews-carousel" id="previewsGallery100">
                                    <?php if(isset($home_products_images[$home_products[0]->id][0])): ?>
                                    <?php $__currentLoopData = $home_products_images[$home_products[0]->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="javascript:void(0)" data-value="Silver" data-image="<?php echo e(asset('storage/media/'.$item->images)); ?>" data-zoom-image="<?php echo e(asset('storage/media/'.$item->images)); ?>"><img src="<?php echo e(asset('storage/media/'.$item->images)); ?>" alt=""></a>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>              
                            <?php endif; ?>
                                </div>
                        </div>                                              
                            
                    </div>                
                    <!-- /Product Gallery -->
                </div>
                <div class="col-md">
                    <div class="prd-block_info">
                        <div class="js-prd-d-holder prd-holder">
                            <div class="prd-block_title-wrap">
                                <h1 class="prd-block_title"><?php echo e($home_products[0]->name); ?></h1>
                                <div class="prd-block__labels"><span class="prd-label--new">NEW</span></div>
                            </div>
                            <div class="prd-block_info-top">
                                <div class="product-sku">SKU:#<?php echo e($home_product_attr[$home_products[0]->id][0]->sku); ?></span></div>
                                <div class="prd-rating"><a href="javascript:void(0)" class="prd-review-link"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i> <span>1 reviews</span></a></div>
                                <div class="prd-availability">Availability: <span><?php echo e($home_product_attr[$home_products[0]->id][0]->qty); ?> ITEMS</span></div>
                                <div id="qty_left" class="bg-danger bold"></div>
                            </div>
                            <div class="prd-block_description topline">
                                <p><?php echo e($home_products[0]->shot_desc); ?>.</p>
                            </div>
                        </div>
                        <div class="prd-block_options topline">                                                         
                      
                         <?php if($home_product_attr[$home_products[0]->id][0]->color_id>0): ?>
                                                                        
                            <div class="prd-color swatches"><span class="option-label">Color:</span> <select id="optionsSelect01">
                                    <option value="Silver" selected="selected">Silver</option>
                                    <option value="Gold">Gold</option>
                                    <option value="Dark Silver">Dark Silver</option>
                                </select>

                                <?php $__currentLoopData = $home_product_attr[$home_products[0]->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($color->color!=''): ?>

                                

                                <ul class="color-list color-list--sm  " data-select-id="optionsSelect01"   >
                                    <li class="product_color  size_<?php echo e($color->size); ?>" >

                                        

                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="<?php echo e($color->color); ?>" data-value="<?php echo e($color->color); ?>" data-image="">
                                            <button class="button_color button_color_radius color_<?php echo e($color->color); ?>"   onclick=change_product_color_image("<?php echo e(asset('storage/media/'.$color->image_attr)); ?>","<?php echo e($color->color); ?>","<?php echo e($color->price); ?>","<?php echo e($color->mrp); ?>")></button>  
                                        </a>

                                        

                                    </li> 
                                     
                                   
                                </ul>
                                <?php endif; ?> 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                          
                            <?php endif; ?>
                                                      
                            <?php if($home_product_attr[$home_products[0]->id][0]->size_id>0): ?>

                            <div class="prd-size swatches"><span class="option-label">Size:</span>
                                        <?php
                                        // for unique size
                                        $arrSize=[];
                                     
                                              foreach ($home_product_attr[$home_products[0]->id] as $size1){
                                                  $arrSize[]=$size1->size;
                                              }
                                              $arrSize=array_unique($arrSize);   
                                            //   prx( $arrSize)  ;  

                                        ?>
                                <?php $__currentLoopData = $arrSize; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                         
                                <?php if($size!=''): ?>

                                <ul class="size-list js-size-list" data-select-id="optionsSelect02">
                                    
                                    <li><a href="javascript:void(0)" onclick="showcolor('<?php echo e($size); ?>')" id="size_<?php echo e($size); ?>" class="size_link_highlited" data-value=""><span class="value"><?php echo e($size); ?></span></a></li>
                                </ul>

                                <?php endif; ?> 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>
                            
                            <?php endif; ?>
                                     
                            <div class="prd-block_qty"><span class="option-label">Qty:</span>
                                <div class="qty qty-changer">
                                    <fieldset><input type="button" value="&#8210;" class="decrease"> <input id="qty"  name="qty" type="text" class="qty-input" value="1" data-min="1" data-max="<?php echo e($home_product_attr[$home_products[0]->id][0]->qty); ?>"> <input type="button" value="+" class="increase"></fieldset>
                                </div><span class="option-label"> <span class="qty-max"></span> item(s)</span>
                            </div>
                        </div>
                        <div class="prd-block_actions topline ">
                            <div class="prd-block_price price_product">
                                <span class="prd-block_price--actual">$<?php echo e($home_product_attr[$home_products[0]->id][0]->price); ?></span> <span class="prd-block_price--old">$<?php echo e($home_product_attr[$home_products[0]->id][0]->mrp); ?></span></div>
                            <div class="btn-wrap"><button class="btn btn--add-to-cart"   onclick="add_to_card('<?php echo e($home_products[0]->id); ?>','<?php echo e($home_product_attr[$home_products[0]->id][0]->color_id); ?>','<?php echo e($home_product_attr[$home_products[0]->id][0]->size_id); ?>')"  ><i class="icon icon-handbag"></i><span>Add to cart</span></button></div>
                            <div id="add_to_card_msg">  </div>
                            <div class="prd-block_link"><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo e($home_products[0]->slug); ?>','<?php echo e($home_products[0]->id); ?>','<?php echo e($home_product_attr[$home_products[0]->id][0]->id); ?>')" class="label-wishlist icon-heart js-label-wishlist icon-heart-1" ></a> <a href="javascript:void(0)" class="icon-share"></a></div>
                        </div>
                        <p id="demo"></p>
                        <div class="prd-safecheckout topline">
                            <h3 class="h2-style">guaranteed safe checkout</h3><img src="<?php echo e(asset('frontend/images/payment/safecheckout.png')); ?>" alt="" class="img-fluid">
                        </div>                                          
                    </div>
                </div>
                <div class="col-xl-3 mt-3 mt-xl-0 sidebar-product">
                    <div class="shop-features-style4"><a href="#" class="shop-feature">
                            <div class="shop-feature-icon"><i class="icon-box3"></i></div>
                            <div class="shop-feature-text">
                                <div class="text1">Free worlwide delivery</div>
                                <div class="text2">Lorem ipsum dolor sit amet conset</div>
                            </div>
                        </a><a href="#" class="shop-feature">
                            <div class="shop-feature-icon"><i class="icon-arrow-left-circle"></i></div>
                            <div class="shop-feature-text">
                                <div class="text1">100% money back guarantee</div>
                                <div class="text2">Lorem ipsum dolor sit amet conset</div>
                            </div>
                        </a><a href="#" class="shop-feature">
                            <div class="shop-feature-icon"><i class="icon-call"></i></div>
                            <div class="shop-feature-text">
                                <div class="text1">24/7 customer support</div>
                                <div class="text2">Lorem ipsum dolor sit amet conset</div>
                            </div>
                        </a></div>
                    <div class="js-countdown-wrap">
                        <div class="countdown-box">
                            <div class="countdown js-countdown" data-promoperiod="50000"></div>
                            <!--<div class="countdown js-countdown" data-countdown="2020/05/01"></div>-->
                        </div>
                        <div class="promo-text">
                            <div><span class="text2">DISCOUNT</span> <span class="text1">30% OFF</span></div>
                            <div class="text3">Have time to buy!</div>
                        </div>
                    </div>
                </div>             
            </div>
        </div>
        <div class="holder mt-5">
            <div class="container">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs product-tab">
                    <li class="nav-item"><a href="#Tab1" class="nav-link" data-toggle="tab">Description</a></li>
                    
                    <li class="nav-item"><a href="#Tab3" class="nav-link" data-toggle="tab">Technical Specification</a></li>
                    
                    <li class="nav-item"><a href="#Tab5" class="nav-link" data-toggle="tab">Warranty</a></li>
                    <li class="nav-item"><a href="#Tab6" class="nav-link" data-toggle="tab">Reviews</a></li>
                </ul><!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="Tab1">
                        <p><?php echo e($home_products[0]->desc); ?></p>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless h-font text-uppercase">
                                <tbody>                                                               
                                    <tr>
                                        <td>WRAPPING</td>
                                        <td><b>Yes</b></td>
                                    </tr>                                  
                                    <tr>
                                        <td>SHRINK WRAPPING</td>
                                        <td><b>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</b></td>
                                    </tr>
                                    <tr>
                                        <td>WEIGHT</td>
                                        <td><b>0.05, 0.06, 0.07ess cards</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                    <div role="tabpanel" class="tab-pane fade" id="Tab3">
                       
                        <div class="row vert-margin">
                            
                            <div class="col-sm-6">
                                <p><?php echo e($home_products[0]->technical_specification); ?></p>
                            </div>
                        </div>
                      
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Tab5">
                        
                        <h5><?php echo e($home_products[0]->waranty); ?></h5>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Tab6">
                        <div id="productReviews">
                            <div class="holder mt-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 text-center d-flex align-items-center justify-content-center">
                                            <div class="card-body card-body-rating border">
                                                <div class="prd-rating-value text-success">4.0</div>
                                                <div class="prd-rating justify-content-center"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                                <div>Based on 3 review</div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="card-body card-body-progress">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h6>5 Stars</h6>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" style="width:80%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <h6>(10)</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h6>4 Stars</h6>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" style="width:70%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <h6>(2)</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h6>3 Stars</h6>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" style="width:10%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <h6>(1)</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h6>2 Stars</h6>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" style="width:10%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <h6>(1)</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h6>1 Star</h6>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" style="width:10%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <h6>(1)</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center d-flex align-items-center justify-content-center">
                                            <div class="review-write"><a href="#" class="btn btn--lg js-show-form" data-form="#writeReview"><i class="icon-pencil"></i><span>Write Your Reviews</span></a><br><small>share your experience/views about this product</small></div>
                                        </div>
                                    </div>
                                    <div class="mt-3 d-none" id="writeReview">
                                        <h3>Write Review</h3>
                                    <form action="" id="frmproductreview">
                                       
                                            <div class="form-group"><label class="text-dark"><span class="required">*</span>YOUR REVIEW MESSAGE</label> <textarea class="form-control textarea--height-100" name="message" data-required-error="Please fill the field" required></textarea></div>
                                            <div class="mt-2">
                                                <button type="reset" class="btn btn--alt js-close-form" data-form="#writeReview">Cancel</button>
                                                <button type="submit" class="btn ml-1">Send</button>
                                                <div class="field_error"></div>
                                            </div>
                                            <input type="hidden" name="product_id" id="" value="<?php echo e($home_products[0]->id); ?>">
                                            <?php echo csrf_field(); ?>
                                    </form>                                   
                                    </div>
                        
                                    <?php if(isset($product_review[0])): ?>
                                    <?php $__currentLoopData = $product_review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            
                                    <div class="review-item">
                                        <div class="row">
                                            <div class="col-md">
                                                <h4 class="review-item_author"><?php echo e($item->name); ?></h4>
                                            </div>
                                            <div class="col-md-auto">
                                                <div class="review-item_date"><?php echo e(getCustomDate($item->added_on)); ?></div>
                                            </div>
                                        </div>
                                        <div class="review-item_rating"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i></div>
                                        <p><?php echo e($item->review); ?></p>
                                        <div class="row pt-2">
                                            <div class="col-md"><button type="button" class="btn">Reply</button></div>
                                            <div class="col-md-auto">
                                                <ul class="list-inline list-unstyled">
                                                    <li class="list-inline-item"><small>Is this helpful to you?</small></li>
                                                    <li class="list-inline-item"><button type="button" class="btn btn--grey btn-sm">Yes</button></li>
                                                    <li class="list-inline-item"><button type="button" class="btn btn--grey btn-sm">No</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <h2>No Review Found</h2>
                                    <?php endif; ?>
                                   
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="holder">
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="h1-style">RELATED PRODUCTS</h2>
            </div>
            <div class="prd-grid prd-carousel js-prd-carousel slick-arrows-aside-simple slick-arrows-mobile-lg data-to-show-4 data-to-show-md-3 data-to-show-sm-3 data-to-show-xs-2" data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 3, "slidesToScroll": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 2, "slidesToScroll": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 2, "slidesToScroll": 1}}]}'>
                
              <?php if(isset($related_products[0])): ?>
              <?php $__currentLoopData = $related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="prd prd-has-loader prd-new prd-popular">
                    <div class="prd-inside">
                        <div class="prd-img-area"><a href="<?php echo e(url('product/')); ?>/<?php echo e($list->slug); ?>" class="prd-img"><img src="<?php echo e(asset('storage/media/'.$list->image)); ?>" data-srcset="" alt="Glamor shoes" class="js-prd-img lazyload"></a>
                            <div class="label-new">NEW</div><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo e($list->slug); ?>','<?php echo e($list->id); ?>','<?php echo e($related_product_attr[$list->id][0]->id); ?>')" class="label-wishlist icon-heart js-label-wishlist"></a>
                            <ul class="list-options color-swatch prd-hidemobile">
                                
                            </ul>
                            <div class="gdw-loader"></div>
                        </div>
                        <div class="prd-info">
                            
                            <h2 class="prd-title"><a href="product.html"><?php echo e($list->name); ?></a></h2>
                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                            <div class="prd-price">
                                <div class="price-new">$ <?php echo e($related_product_attr[$list->id][0]->price); ?></div>
                            </div>
                            <div class="prd-hover">
                                <div class="prd-action">
                                    <form action="javascript:void(0)">
                                        <input type="hidden"> <button class="btn"   onclick="home_add_to_card('<?php echo e($list->id); ?>','<?php echo e($related_product_attr[$list->id][0]->color); ?>','<?php echo e($related_product_attr[$list->id][0]->size); ?>','<?php echo e($related_product_attr[$list->id][0]->price); ?>')" ><i class="icon icon-handbag"></i><span>Add To Cart</span></button>
                                    </form>
                                   
                                        <div class="prd-links"><a href="<?php echo e(url('product/')); ?>/<?php echo e($list->slug); ?>" onclick="related_model_popup('<?php echo e($list->slug); ?>')" class="icon-eye prd-qview-link js-qview-link  ajex_related_pop" data-fancybox data-src="#modalQuickView"></a></div>
                                     
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
            <div class="more-link-wrapper text-center mt-3"><a href="<?php echo e(url('/all_products')); ?>" class="btn-decor">show all</a></div>
        </div>
    </div>
</div>


<div class="modal--quickview" id="modalQuickView" style="display: none;">
    <div class="modal-header">
        <div class="modal-header-title">Quick View</div>
    </div>
    <div class="modal-content appendss" >
        <div class="modal-body">
            <div class="prd-block" id="prdGalleryModal">
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-5 col-xl-5">
                        <!-- Product Gallery -->
                        <div class="prd-block_main-image main-image--slide js-main-image--slide">
                            <div class="prd-block_main-image-holder js-main-image-zoom" data-zoomtype="inner">
                                <div class="prd-block_main-image-video js-main-image-video"><video loop muted preload="metadata" controls="controls">
                                        <source src="#"></video>
                                    <div class="gdw-loader"></div>
                                </div>
                                <div class="prd-has-loader">
                                    
                                    <img src="<?php echo e(asset('storage/media/'.$home_products[0]->image)); ?>" class="zoom" alt="<?php echo e($home_products[0]->name); ?>" data-zoom-image="<?php echo e(asset('storage/media/'.$home_products[0]->image)); ?>">

                                </div>
                                <div class="prd-block_main-image-next slick-next js-main-image-next">NEXT</div>
                                <div class="prd-block_main-image-prev slick-prev js-main-image-prev">PREV</div>
                            </div>
                            <div class="prd-block_main-image-links"><a data-fancybox data-width="900" href="https://www.youtube.com/watch?v=Zk3kr7J_v3Q" class="prd-block_video-link"><i class="icon icon-play"></i></a> <a href="images/products/large/product-01.jpg" class="prd-block_zoom-link"><i class="icon icon-zoomin"></i></a></div>
                        </div>
                        <div class="product-previews-wrapper">
                            <div class="product-previews-carousel" id="previewsGallery101"><a href="#" data-value="Silver" data-image="images/products/large/product-01.jpg" data-zoom-image="images/products/large/product-01.jpg"><img src="images/products/small/product-01.jpg" alt=""></a><a href="#" data-video="images/products/video/product.mp4"><img src="images/products/large/product-01.jpg" alt=""></a><a href="#" data-value="Silver" data-image="images/products/large/product-01-2.jpg" data-zoom-image="images/products/large/product-01-2.jpg"><img src="images/products/small/product-01-2.jpg" alt=""></a><a href="#" data-value="Silver" data-image="images/products/large/product-01-3.jpg" data-zoom-image="images/products/large/product-01-3.jpg"><img src="images/products/small/product-01-3.jpg" alt=""></a><a href="#" data-value="Silver" data-image="images/products/large/product-01-4.jpg" data-zoom-image="images/products/large/product-01-4.jpg"><img src="images/products/small/product-01-4.jpg" alt=""></a><a href="#" data-value="Gold" data-image="images/products/large/product-01-5.jpg" data-zoom-image="images/products/large/product-01-5.jpg"><img src="images/products/small/product-01-5.jpg" alt=""></a><a href="#" data-value="Gold" data-image="images/products/large/product-01-6.jpg" data-zoom-image="images/products/large/product-01-6.jpg"><img src="images/products/small/product-01-6.jpg" alt=""></a><a href="#" data-value="Gold" data-image="images/products/large/product-01-7.jpg" data-zoom-image="images/products/large/product-01-7.jpg"><img src="images/products/small/product-01-7.jpg" alt=""></a><a href="#" data-value="Gold" data-image="images/products/large/product-01-8.jpg" data-zoom-image="images/products/large/product-01-8.jpg"><img src="images/products/small/product-01-8.jpg" alt=""></a><a href="#" data-value="Dark Silver" data-image="images/products/large/product-01-9.jpg" data-zoom-image="images/products/large/product-01-9.jpg"><img src="images/products/small/product-01-9.jpg" alt=""></a></div>
                        </div>
                        <!-- /Product Gallery -->
                    </div>
                    <div class="col-md">
                        <div class="prd-block_info">
                            <div class="js-prd-d-holder prd-holder">
                                <div class="prd-block_title-wrap">
                                    <h1 class="prd-block_title name_pop"><?php echo e($home_products[0]->name); ?></h1>
                                    <div class="prd-block__labels"><span class="prd-label--new">NEW</span></div>
                                </div>
                                <div class="prd-block_info-top">
                                    <div class="product-sku">SKU:#<?php echo e($home_product_attr[$home_products[0]->id][0]->sku); ?></span></div>
                                    <div class="prd-rating"><a href="javascript:void(0)" class="prd-review-link"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i> <span>1 reviews</span></a></div>
                                    <div class="prd-availability">Availability: <span><?php echo e($home_product_attr[$home_products[0]->id][0]->qty); ?> ITEMS</span></div>
                                    <div id="qty_left" class="bg-primary bold"></div>
                                </div>
                                <div class="prd-block_description topline">
                                    <p><?php echo e($home_products[0]->shot_desc); ?>.</p>
                                </div>
                            </div>
                            <div class="prd-block_options topline">
                                
                                        <?php if($home_product_attr[$home_products[0]->id][0]->color_id>0): ?>
                                                                                        
                                        <div class="prd-color swatches"><span class="option-label">Color:</span> <select id="optionsSelect01">
                                                <option value="Silver" selected="selected">Silver</option>
                                                <option value="Gold">Gold</option>
                                                <option value="Dark Silver">Dark Silver</option>
                                            </select>

                                            <?php $__currentLoopData = $home_product_attr[$home_products[0]->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($color->color!=''): ?>

                                            

                                            <ul class="color-list color-list--sm  " data-select-id="optionsSelect01"   >
                                                <li class="product_color  size_<?php echo e($color->size); ?>" >

                                                    

                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="<?php echo e($color->color); ?>" data-value="<?php echo e($color->color); ?>" data-image="">
                                                        <button class="button_color button_color_radius color_<?php echo e($color->color); ?>"   onclick=change_product_color_image("<?php echo e(asset('storage/media/'.$color->image_attr)); ?>","<?php echo e($color->color); ?>","<?php echo e($color->price); ?>","<?php echo e($color->mrp); ?>")></button>  
                                                    </a>

                                                    

                                                </li> 
                                                
                                                
                                            </ul>
                                            <?php endif; ?> 
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    
                                        <?php endif; ?>

                                                          
                                 <?php if($home_product_attr[$home_products[0]->id][0]->size_id>0): ?>

                             <div class="prd-size swatches"><span class="option-label">Size:</span>
                                        <?php
                                        // for unique size
                                        $arrSize=[];
                                    
                                            foreach ($home_product_attr[$home_products[0]->id] as $size1){
                                                $arrSize[]=$size1->size;
                                            }
                                            $arrSize=array_unique($arrSize);   
                                            //   prx( $arrSize)  ;  

                                        ?>
                                        <?php $__currentLoopData = $arrSize; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                         
                                        <?php if($size!=''): ?>

                                        <ul class="size-list js-size-list" data-select-id="optionsSelect02">
                                            
                                            <li><a href="javascript:void(0)" onclick="showcolor('<?php echo e($size); ?>')" id="size_<?php echo e($size); ?>" class="size_link_highlited" data-value=""><span class="value"><?php echo e($size); ?></span></a></li>
                                        </ul>

                                        <?php endif; ?> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                </div>
                                <?php endif; ?>
                                                                 
                               
                                <div class="prd-block_qty"><span class="option-label">Qty:</span>
                                    <div class="qty qty-changer">
                                        <fieldset><input type="button" value="&#8210;" class="decrease"> <input id="qty"  name="qty" type="text" class="qty-input" value="1" data-min="1" data-max="<?php echo e($home_product_attr[$home_products[0]->id][0]->qty); ?>"> <input type="button" value="+" class="increase"></fieldset>
                                    </div><span class="option-label"> <span class="qty-max"></span> item(s)</span>
                                </div>
                            </div>
                            <div class="prd-block_actions topline">
                                <div class="prd-block_price price_product">
                                    <span class="prd-block_price--actual">$<?php echo e($home_product_attr[$home_products[0]->id][0]->price); ?></span> <span class="prd-block_price--old">$<?php echo e($home_product_attr[$home_products[0]->id][0]->mrp); ?></span></div>
                                
                                <div class="btn-wrap"><button class="btn btn--add-to-cart"   onclick="add_to_card('<?php echo e($home_products[0]->id); ?>','<?php echo e($home_product_attr[$home_products[0]->id][0]->color_id); ?>','<?php echo e($home_product_attr[$home_products[0]->id][0]->size_id); ?>')" ><i class="icon icon-handbag"></i><span>Add to cart</span></button></div>

                                <div class="prd-block_link"><a href="#" class="icon-heart-1"></a> <a href="#" class="icon-share"></a></div>
                            </div>
                            <div class="prd-safecheckout topline">
                                <h3 class="h2-style">guaranteed safe checkout</h3><img src="images/payment/safecheckout.png" alt="" class="img-fluid">
                            </div>
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
     <!-- <input type="hidden" id="price_card" name="price_card">  -->
    <?php echo csrf_field(); ?>    
</form>


<form  id="frm_popup_related">
    <input type="hidden" id="slug_related" name="slug_related" >
    <?php echo csrf_field(); ?>
</form>
<form  id="wishlist_form">
    <input type="hidden" id="wishlist_slug" name="wishlist_slug" >
    <input type="hidden" id="wishlist_product_id" name="wishlist_product_id" >
    <input type="hidden" id="wishlist_product_attr_id" name="wishlist_product_attr_id" >

    <?php echo csrf_field(); ?>
</form>






<?php $__env->stopSection(); ?> 

<?php echo $__env->make('front/layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/front/product.blade.php ENDPATH**/ ?>