

<?php $__env->startSection('page_title','My Account'); ?>
<?php $__env->startSection('account_select','active'); ?>
<?php $__env->startSection('sidebar'); ?>







              
                <div class="col-md-9 aside">
                    <h2>Account Details</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Personal Info</h3>
                                    <p><b>Name: </b> <?php echo e($customers[0]->name); ?><br><b>E-mail:</b> <?php echo e($customers[0]->email); ?><br><b>Phone:</b> <?php echo e($customers[0]->mobile); ?> <br><b>Country:</b> <?php echo e($customers[0]->country); ?> <br><b>City:</b> <?php echo e($customers[0]->city); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Address  (Default)</h3>
                                    <p><?php echo e($customers[0]->address); ?></p>
                                    
                                    <div class="mt-2 clearfix"><a href="#" class="link-icn js-show-form" data-form="#updateDetails"><i class="icon-pencil"></i>Edit</a></div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card mt-3 d-none" id="updateDetails">
                       <form  action="/update_accountss" id="frm_update_btn">
                        <div class="card-body">
                            <h3>Update Account Details</h3>
                            <div class="row mt-2">
                                <div class="col-sm-6"><label class="text-uppercase"> Name:</label>
                                    <div class="form-group"><input type="text" name="name" class="form-control" ></div>
                                </div>
                                
                                <div class="col-sm-6"><label class="text-uppercase">City:</label>
                                    <div class="form-group"><input type="text" name="city" class="form-control" ></div>
                                </div>
    
                            </div>
                            <div class="row mt-2">
                              
                                <div class="col-sm-6"><label class="text-uppercase">Phone:</label>
                                    <div class="form-group"><input type="text" name="phone" class="form-control" ></div>
                                </div>
                                 <div class="col-sm-6"><label class="text-uppercase">Country:</label>
                                    <div class="form-group"><input type="text" name="country" class="form-control" ></div>
                                </div>
                                
                            </div>
                            <div class="row mt-2">
                             
                                    <div class="col-sm-6"><label class="text-uppercase">State:</label>
                                        <div class="form-group"><input type="text" name="state" class="form-control"></div>
                                    </div>
                                    <div class="col-sm-6"><label class="text-uppercase">zip/postal code:</label>
                                        <div class="form-group"><input type="text" name="zip" class="form-control"></div>
                                    </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-12"><label class="text-uppercase">Address:</label>
                                    <div class="form-group"><input type="text" name="address" class="form-control"></div>
                                </div>
                            </div>
                            <div class="mt-2"><button type="reset" class="btn btn--alt js-close-form" data-form="#updateDetails">Cancel</button> <button type="submit" class="btn ml-1 " onclick="detail_updates()" id="update_btn">Update</button></div>
                        </div>
                        <?php echo csrf_field(); ?>

                    </form>
                    </div>
                    <div id="update_msg"></div>
                </div>
           








<?php $__env->stopSection(); ?> 
<?php echo $__env->make('front/layout_account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/front/account_detail.blade.php ENDPATH**/ ?>