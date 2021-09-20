

<?php $__env->startSection('page_title','Order Placed'); ?>
<?php $__env->startSection('container'); ?>


         

               <!-- product category -->
            <section id="aa-product-category">
            <div class="container">
               <div class="row d-flex justify-content-center mt-5"   >
                  
                     <h2 class="text-primary">Order has been Placed successfully</h2>
               </div>
               <div class="row d-flex justify-content-center"   >
                  
                  <h2 class="align-bottom text-success">Order Id:    <?php echo e(session()->get('ORDER_ID')); ?></h2>
               </div>
               <div class="row d-flex justify-content-center" >
                  <a href="<?php echo e(url('/order_history')); ?>" class=" primary Bold">Check Your Order Detail here</a><br>
               </div>
            </div>
            </section>


      
                
 </div>



<?php $__env->stopSection(); ?> 
<?php echo $__env->make('front/layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/front/order_placed.blade.php ENDPATH**/ ?>