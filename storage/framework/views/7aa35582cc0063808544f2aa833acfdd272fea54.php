
<?php $__env->startSection('page_title','Manage Product'); ?>
<?php $__env->startSection('product_select','Active'); ?>


<?php $__env->startSection('container'); ?>


<?php if($id>0): ?>
<?php
$image_required=""; 
?>
     
 <?php else: ?>
 <?php
 $image_required="requireds";
 ?>
  
     
 <?php endif; ?>  


    


        <h1 class="mb-2">Manage Product</h1>
       
          
        <?php if(session()->has('sku_error')): ?>
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            
            <?php echo e(session('sku_error')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <?php endif; ?>
          
        <?php $__errorArgs = ['image_attr.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            
            <?php echo e($message); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <?php $__errorArgs = ['image.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            
            <?php echo e($message); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="overview-wrap">                                 
                                        

            <a href="<?php echo e(url('admin/product')); ?>"> <button  type="button" class="  au-btn au-btn-icon au-btn--blue">Back</button></a>
        </div> 

     <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <form action="<?php echo e(route('product.maanage_product_process')); ?>" method="post"  enctype="multipart/form-data"> 
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                            
                                <div class="card-body">
                                
                                    
                                                                    
                                    <?php echo csrf_field(); ?>                       
                               
                                    <div class="form-group">
                                        <label for="name" class="control-label mb-1">Name</label>
                                        <input id="name" name="name" value="<?php echo e($name); ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-primary" role="alert">
                                       <?php echo e($message); ?> 
                                        </div>
                                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    
                                    </div>
                                                                

                                    <div class="form-group">
                                        <label for="slug" class="control-label mb-1">Slug</label>
                                        <input id="slug" name="slug" value="<?php echo e($slug); ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" required>                                 
                                        <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-primary" role="alert">
                                       <?php echo e($message); ?> 
                                       </div>
                                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                                              

                                    <div class="form-group">
                                            <label for="image" class="control-label mb-1">Image</label>
                                            <input id="image" name="image"  type="file" class="form-control" aria-required="true" aria-invalid="false" <?php echo e($image_required); ?>>
                                           
                                            <?php if($image!=''): ?>
                                            <img  width="50px" src="<?php echo e(asset('storage/media/'.$image)); ?>"/></td>
                                             <?php endif; ?>
                                        <td class="process">

                                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="alert alert-primary" role="alert">
                                        <?php echo e($message); ?> 
                                        </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    
                                        
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                    
                                                    <label for="category" class="control-label mb-1">Category</label>
                                                    <select id="category" name="category"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    <option value="">Select Categories</option>
                                                        <?php $__currentLoopData = $categorylist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($category==$list->id): ?>
                                                            <option selected value="<?php echo e($list->id); ?>">
                                                            <?php else: ?>
                                                            <option value="<?php echo e($list->id); ?>">
                                                                <?php endif; ?>
                                                                <?php echo e($list->category_name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>                                            
                                            
                                                <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="alert alert-primary" role="alert">
                                                    <?php echo e($message); ?> 
                                                    </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                                                
                                                <div class="col-md-4">
                                                        <label for="brand" class="control-label mb-1">Brand</label>
                                                        
                                                        <select id="brand" name="brand"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                            <option value="">Select Brand</option>
                                                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($brand==$list->id): ?>
                                                                    <option selected value="<?php echo e($list->id); ?>">
                                                                    <?php else: ?>
                                                                    <option value="<?php echo e($list->id); ?>">
                                                                        <?php endif; ?>
                                                                        <?php echo e($list->name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>                                   
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <label for="model" class="control-label mb-1">Model</label>
                                                    <input id="model" name="model" value="<?php echo e($model); ?>"   type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                </div>  
                                        </div>
                                    </div>
                              
                           

                                    <div class="form-group">
                                        <label for="shot_desc" class="control-label mb-1">Shot_desc</label>
                                        <textarea id="shot_desc" name="shot_desc"    type="text" class="form-control" aria-required="true" aria-invalid="false" required><?php echo e($shot_desc); ?></textarea>
                                    </div>
                                 
                                    <div class="form-group">
                                        <label for="desc" class="control-label mb-1">Desc</label>
                                        <textarea id="desc" name="desc"    type="text" class="form-control" aria-required="true" aria-invalid="false" required><?php echo e($desc); ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="keywords" class="control-label mb-1">Keywords</label>
                                        <textarea id="keywords" name="keywords"    type="text" class="form-control" aria-required="true" aria-invalid="false" required"><?php echo e($keywords); ?></textarea>
                                 
                                    </div>

                                    <div class="form-group">
                                        <label for="technical_specification" class="control-label mb-1">Technical_specification</label>
                                        <textarea id="technical_specification" name="technical_specification"    type="text" class="form-control" aria-required="true" aria-invalid="false" required"><?php echo e($technical_specification); ?></textarea>
                                 
                                    </div>

                                    <div class="form-group">
                                        <label for="uses" class="control-label mb-1">Uses</label>
                                        <textarea id="uses" name="uses"    type="text" class="form-control" aria-required="true" aria-invalid="false" required"><?php echo e($uses); ?></textarea>
                                 
                                    </div>

                                    <div class="form-group">
                                        <label for="waranty" class="control-label mb-1">Waranty</label>
                                        <textarea id="waranty" name="waranty"    type="text" class="form-control" aria-required="true" aria-invalid="false" required"><?php echo e($waranty); ?></textarea>
                                 
                                    </div>    
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="lead_time" class="control-label mb-1">Lead Time</label>
                                                <input id="lead_time" name="lead_time" value="<?php echo e($lead_time); ?>"   type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            
                                            </div>
                                            <div class="col-md-4">
                                                <label for="tax_id" class="control-label mb-1">Tax ID</label>
                                                <select id="tax_id" name="tax_id"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    <option value="">Select Tax</option>
                                                        <?php $__currentLoopData = $taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($tax_id==$list->id): ?>
                                                            <option selected value="<?php echo e($list->id); ?>">
                                                            <?php else: ?>
                                                            <option value="<?php echo e($list->id); ?>">
                                                                <?php endif; ?>
                                                                <?php echo e($list->tax_desc); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>                                                            
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="is_promo" class="control-label mb-1">Is Promo</label>
                                                <select id="is_promo" name="is_promo"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    <?php if($is_promo=='1'): ?>
                                                    <option value="1" selected>Yes</option>
                                                    <option value="0">No</option>
                                                    <?php else: ?>
                                                        <option value="0" selected>No</option>
                                                        <option value="1" >Yes</option>
                                               
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <div class="col-md-3">   
                                                <label for="is_featured" class="control-label mb-1">Is Featured</label>
                                                <select id="is_featured" name="is_featured"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    <?php if($is_featured=='1'): ?>
                                                    <option value="1" selected>Yes</option>
                                                    <option value="0">No</option>
                                                    <?php else: ?>
                                                        <option value="0" selected>No</option>
                                                        <option value="1" >Yes</option>
                  
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="is_discounted" class="control-label mb-1">Is discounted</label>
                                                <select id="is_discounted" name="is_discounted"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    <?php if($is_discounted=='1'): ?>
                                                    <option value="1" selected>Yes</option>
                                                    <option value="0">No</option>
                                                    <?php else: ?>
                                                        <option value="0" selected>No</option>
                                                        <option value="1" >Yes</option>                  
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="is_discounted" class="control-label mb-1">Is discounted</label>
                                                <select id="is_discounted" name="is_discounted"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    <?php if($is_discounted=='1'): ?>
                                                    <option value="1" selected>Yes</option>
                                                    <option value="0">No</option>
                                                    <?php else: ?>
                                                        <option value="0" selected>No</option>
                                                        <option value="1" >Yes</option>                  
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <h1 class="mb-1">Product Images</h1>
                            <h5 class="mb-3">Image attribute items</h5>
                        </div>
                            <div class="col-lg-12" >
                               
                              
                              
                                        <div class="card" >                                       
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row" id="product_images_box">  
                                                        
                                                        <?php
                                                        $loop_count_num=1;
                                                        ?>
                        
                                                        <?php $__currentLoopData = $productImagesArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                                                        <?php
                                                         $loop_count_prev= $loop_count_num;
                                                        $pIArr=(array)$val;
                                                       
                                                        // echo '<pre>';
                                                        // print_r($pIArr);
                                                        ?>
                                                       
                                                       <input id="piid" name="piid[]"  value="<?php echo e($pIArr['id']); ?>"  type="hidden" class="form-control" aria-required="true" aria-invalid="false" >   
                                                                                  
                                                         <div class="col-md-4 product_images_<?php echo e($loop_count_num++); ?>" >
                                                                <label for="images" class="control-label mb-1">Images </label>
                                                                <input id="images" name="images[]"  type="file" class="form-control" aria-required="true" aria-invalid="false">
                                                               
                                                                <?php if($pIArr['images']!=''): ?>
                                                                <a href="<?php echo e(asset('storage/media/'.$pIArr['images'])); ?>" target="_blank">
                                                                <img  width="50px" src="<?php echo e(asset('storage/media/'.$pIArr['images'])); ?>"/>
                                                                 </a> 
                                                                <?php endif; ?>
                                                            

                                                                
                                                         </div>


                                                         <div class="col-md-2" >
                                                            <label for="images" class="control-label mb-1">
                                                               Button </label>
                                                               
                                                               <?php if($loop_count_num==2): ?>
                                                            <button type="button" class="btn btn-success btn-lg" onclick="add_images_more()">
                                                                <i class="fa fa-plus"></i>&nbsp; Add</button>  
                                                                <?php else: ?> 
                                                                <a href="<?php echo e(url('admin/product/product_images_delete/')); ?>/<?php echo e($pIArr['id']); ?>/<?php echo e($id); ?>">
                                                                <button type="button" class="btn btn-danger " >
                                                                    <i class="fa fa-plus"></i>&nbsp; Remove</button>  </a>
                                                                    <?php endif; ?>

                                                        </div>

                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            
                        </div>


                        <div class="col-lg-12">
                            <h1 class="mb-1">Product Attribute</h1>
                            <h5 class="mb-3">Image attribute items</h5>
                        </div>
                            <div class="col-lg-12" id="product_attr_box">
                               
                               <?php
                                $loop_count_num=1
                                ?>

                                <?php $__currentLoopData = $productAttrArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php
                                $pAArr=(array)$val;
                                $loop_count_prev= $loop_count_num
                                // echo '<pre>';
                                // print_r($pAArr);
                                ?>
                               
                               <input id="paid" name="paid[]"  value="<?php echo e($pAArr['id']); ?>"  type="hidden" class="form-control" aria-required="true" aria-invalid="false" >   
                              
                                        <div class="card" id="product_attr_<?php echo e($loop_count_num++); ?>">                                       
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">                                                                  
                                                            <div class="col-md-2">
                                                                    <label for="sku" class="control-label mb-1">SKU</label>
                                                                    <input id="sku" name="sku[]"  value="<?php echo e($pAArr['sku']); ?>"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>                                  
                                                            </div>
                                                            
                                                            <div class="col-md-2">
                                                                <label for="mrp" class="control-label mb-1">MRP</label>
                                                                <input id="mrp" name="mrp[]"   value="<?php echo e($pAArr['mrp']); ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                            </div>  

                                                            <div class="col-md-2">
                                                                <label for="price" class="control-label mb-1">PRICE</label>
                                                                <input id="price" name="price[]" value="<?php echo e($pAArr['price']); ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                            </div>  
                                                           


                                                         <div class="col-md-3">
                                                                <label for="size" class="control-label mb-1">SIZE</label>
                                                                <select id="size" name="size[]" value="<?php echo e($pAArr['size_id']); ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                                   
                                                                <option value="">Select size</option>
                                                                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($pAArr['size_id']==$list->id): ?>
                                                                        
                                                                    <option  value="<?php echo e($list->id); ?>" selected><?php echo e($list->size); ?></option>
                                                                    <?php else: ?>
                                                                    <option  value="<?php echo e($list->id); ?>" ><?php echo e($list->size); ?></option>
                                                                         <?php endif; ?>                                                      
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>                                            
                                                        
                                                            <?php $__errorArgs = ['size_id[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-primary" role="alert">
                                                                    <?php echo e($message); ?> 
                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                         </div>

                                                         <div class="col-md-3">
                                                    
                                                                <label for="color" class="control-label mb-1">COLOR</label>
                                                                <select id="color" name="color[]"  value="<?php echo e($pAArr['color_id']); ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                                <option value="">Select Color</option>
                                                                    <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($pAArr['color_id']==$list->id): ?>
                                                                    <option  value="<?php echo e($list->id); ?>" selected><?php echo e($list->color); ?></option>
                                                                       <?php else: ?>
                                                                       <option  value="<?php echo e($list->id); ?>" ><?php echo e($list->color); ?></option> 
                                                                       <?php endif; ?>                                                       
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>                                            
                                                        
                                                            <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <div class="alert alert-primary" role="alert">
                                                                    <?php echo e($message); ?> 
                                                                    </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                         </div>
                                                         <div class="col-md-2">
                                                            <label for="qty" class="control-label mb-1">QTY</label>
                                                            <input id="qty" name="qty[]"  value="<?php echo e($pAArr['qty']); ?>" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                        </div>  
                                                         
                                                         <div class="col-md-4">
                                                                <label for="image_attr" class="control-label mb-1">Image attr</label>
                                                                <input id="image_attr" name="image_attr[]"  type="file" class="form-control" aria-required="true" aria-invalid="false">
                                                               
                                                                <?php if($pAArr['image_attr']!=''): ?>
                                                                <img  width="50px" src="<?php echo e(asset('storage/media/'.$pAArr['image_attr'])); ?>"/></td>
                                                                 <?php endif; ?>
                                                            <td class="process">

                                                                <?php $__errorArgs = ['image_attr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <div class="alert alert-primary" role="alert">
                                                                <?php echo e($message); ?> 
                                                                </div>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                         </div>


                                                         <div class="col-md-2">
                                                            <label for="btn" class="control-label mb-1">
                                                               Button </label>
                                                               <?php if($loop_count_num==2): ?>
                                                            <button type="button" class="btn btn-success btn-lg" onclick="add_more()">
                                                                <i class="fa fa-plus"></i>&nbsp; Add</button>  
                                                                <?php else: ?> 
                                                                <a href="<?php echo e(url('admin/product/product_attr_delete/')); ?>/<?php echo e($pAArr['id']); ?>/<?php echo e($id); ?>">
                                                                <button type="button" class="btn btn-danger btn-lg" >
                                                                    <i class="fa fa-plus"></i>&nbsp; Remove</button>  </a>
                                                                    <?php endif; ?>

                                                    </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>       
                        </div>
                    </div>   

                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                        Submit
                        </button>
                    </div>
                    <input type="hidden" name="id" value="<?php echo e($id); ?>"/>  


                </form>
            </div>
        </div>
    </div>
<script>

    var loop_count=1;
    // for apend product attribute grid html by add button 
    function add_more(){
        loop_count++;
        // alert("s");
        // 1st way herer to create 1by1 html seprately
        var html=' <input id="paid" name="paid[]" type="hidden"    value="" class="form-control" aria-required="true" aria-invalid="false" >   <div class="card" id="product_attr_'+loop_count+'"><div class="card-body"><div class="form-group"><div class="row">';                                        


        html+=' <div class="col-md-2"><label for="sku" class="control-label mb-1">SKU</label><input id="sku" name="sku[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required></div> ';                                  
       
        html+=' <div class="col-md-2"><label for="mrp" class="control-label mb-1">MRP</label><input id="mrp" name="mrp[]"    type="text" class="form-control" aria-required="true" aria-invalid="false" required></div> ';
                                                                                                                 
                                                                                                              
         html+=' <div class="col-md-2"><label for="price" class="control-label mb-1">PRICE</label><input id="price" name="price[]"   type="text" class="form-control" aria-required="true" aria-invalid="false" required> </div>'; 
                                                                
        //   2nd way is here whole dropdown pick and use in below                                                      
         var size_id_html=jQuery('#size').html(); 
         size_id_html= size_id_html.replace("selected","") ;                                                                                          
         html+='<div class="col-md-3"><label for="size" class="control-label mb-1">SIZE</label><select id="size" name="size[]" type="text" class="form-control" aria-required="true" aria-invalid="false" >'+size_id_html+'</select> </div>';   
                                                                
         var color_id_html=jQuery('#color').html();  
         color_id_html= color_id_html.replace("selected","") ;   
                                                                                                         
         html+='<div class="col-md-3"> <label for="color" class="control-label mb-1">COLOR</label> <select id="color" name="color[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" >'+color_id_html+'</select> </div>';   
                                                                
         html+='  <div class="col-md-2"> <label for="qty" class="control-label mb-1">QTY</label><input id="qty" name="qty[]"   type="text" class="form-control" aria-required="true" aria-invalid="false" required> </div> '; 
                                                        
         html+=' <div class="col-md-4"> <label for="image_attr" class="control-label mb-1">Image attr</label><input id="image_attr" name="image_attr[]"  type="file" class="form-control" aria-required="true" aria-invalid="false"> </div>   ';  
                                                               
                                                                  
         html+='<div class="col-md-2"><label for="btn" class="control-label mb-1">  Button </label>  <button type="button" class="btn btn-danger btn-lg" onclick=remove_more("'+loop_count+'")> <i class="fa fa-minus"></i>&nbsp; Remove</button> </div> ';     
                                                            

        html+='</div></div></div></div></div></div></div>'                   
        jQuery('#product_attr_box').append(html);                                                                  

    }

    function remove_more(loop_count)
    {
        jQuery('#product_attr_'+loop_count).remove();
    }



    var loop_images_count=1;
    function add_images_more()
    {
       
     loop_images_count++;                                                   
     var html='<input id="piid" name="piid[]" type="hidden"   value="" class="form-control" aria-required="true" aria-invalid="false" >   <div class="col-md-4 product_images_'+loop_images_count+'"><label for="images" class="control-label mb-1">Images</label><input id="images" name="images[]"  type="file" class="form-control" aria-required="true" aria-invalid="false"> </div>';  
                                                                                                                                                                                      
     html+='<div class="col-md-2 product_images_'+loop_images_count+'"><label for="images" class="control-label mb-1">  Button </label>  <button type="button" class="btn btn-danger btn-lg" onclick=remove_images_more("'+loop_images_count+'")> <i class="fa fa-minus"></i>&nbsp; Remove</button></div>' ;     

        
        jQuery('#product_images_box').append(html);    
    }


    function remove_images_more(loop_images_count)
    {
        jQuery('.product_images_'+loop_images_count).remove();
    }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanal/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/adminpanal/manage_product.blade.php ENDPATH**/ ?>