
<?php $__env->startSection('page_title','Show Customer Details'); ?>
<?php $__env->startSection('customer_select','active'); ?>

<?php $__env->startSection('container'); ?>


<h1>Customer Details</h1>
                    

                        <div class="row m-t-30">
                            <div class="col-md-8">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        
                                        <tbody>
                                            <tr>
                                                <td><strong> Name</strong></td>
                                                <td><?php echo e($customer_list->name); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong> Email</strong></td>
                                                <td><?php echo e($customer_list->email); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong> Mobile</strong></td>
                                                <td><?php echo e($customer_list->mobile); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong> Address</strong></td>
                                                <td><?php echo e($customer_list->address); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong> City</strong></td>
                                                <td><?php echo e($customer_list->city); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong> State</strong></td>
                                                <td><?php echo e($customer_list->state); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong> Zip</strong></td>
                                                <td><?php echo e($customer_list->zip); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong> Company</strong></td>
                                                <td><?php echo e($customer_list->company); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong> GST number</strong></td>
                                                <td><?php echo e($customer_list->gstin); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong> Added on</strong></td>
                                                <td><?php echo e(\Carbon\Carbon::parse($customer_list->created_at)
                                                ->format('d-m-y')); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong> Updated on on</strong></td>
                                                <td><?php echo e(\Carbon\Carbon::parse($customer_list->updated_at)
                                                    ->format('d-m-y')); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
                       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanal/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/adminpanal/show_customer.blade.php ENDPATH**/ ?>