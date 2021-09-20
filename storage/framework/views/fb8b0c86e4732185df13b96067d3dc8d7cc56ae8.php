

<?php $__env->startSection('page_title','Login User'); ?>
<?php $__env->startSection('container'); ?>


<?php

if(isset($_COOKIE['login_email']) && isset($_COOKIE['login_pwd'])){

    $login_email=$_COOKIE['login_email'];
    $login_pwd=$_COOKIE['login_pwd'];
    $is_remember="checked='checked'";
}else{
    $login_email="";
    $login_pwd="";
    $is_remember="";
}

?>


<div class="page-content">
    <div class="holder mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li><span>Login</span></li>
            </ul>
        </div>
    </div>
    <div class="holder mt-0">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-md-4">
                    <div id="loginForm">
                        <h2 class="text-center">SIGN IN</h2>
                        <div class="form-wrapper">
                            <p>If you have an account with us, please log in.</p>
                            <form action="" id="frmLogin">
                                <div class="form-group"><input type="text" name="str_login_email" class="form-control" placeholder="email" value="<?php echo e($login_email); ?>" required></div>
                                <div class="form-group"><input type="password" name="str_login_password" class="form-control" placeholder="Password"  value="<?php echo e($login_pwd); ?>" required></div>
                                <p class="text-uppercase"><a href="#" class="js-toggle-forms">Forgot Your Password?</a></p>
                                <div class="clearfix"><input id="checkbox1"  name="rememberme" type="checkbox"  <?php echo e($is_remember); ?>> <label for="checkbox1" >Remember me</label></div><button type="submit" class="btn" id="btnLogin">Sign in</button>
                                <div id="login_msg" class="field_error"></div>
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </div>
                    <div id="recoverPasswordForm" class="d-none">
                        <h2 class="text-center">RESET YOUR PASSWORD</h2>
                        <div class="form-wrapper">
                            <p>We will send you an email to reset your password.</p>
                            <form id="frmForgot" >
                                <div class="form-group"><input type="text" name="str_forgot_email" class="form-control" placeholder="Enter your Email" required></div>

                                
                                <div class="btn-toolbar">
                                    <a href="javascript:void(0)"  class="btn btn--alt js-toggle-forms">Cancel</a> 
                                    <button type="submit" class="btn ml-1  Click-here" id="btnForgot">Submit</button>
                                    
                                </div>
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-divider"></div>
                <div class="col-sm-6 col-md-4 mt-3 mt-sm-0">
                    <h2 class="text-center">REGISTER</h2>
                    <div class="form-wrapper">
                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p><a href="<?php echo e(url('regestration')); ?>" class="btn">create an account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="rt-container">
    <div class="col-rt-12">
        <div class="Scriptcontent">
        
      <!-- Message Box HTML -->
      
<div class="custom-model-main">
<div class="custom-model-inner">        
<div class="close-btn">×</div>
  <div class="custom-model-wrap">
      <div class="pop-up-content-wrap">
         
         <h2  id="forgot_msg"></h2>
         
      </div>
  </div>  
</div>  
<div class="bg-overlay"></div>
</div>
            <!-- End Message Box HTML -->
     
      </div>
  </div>
</div>


 <!-- jQuery -->
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
 <script>
 $(".Click-here").on('click', function() {
   $(".custom-model-main").addClass('model-open');
 }); 
 $(".close-btn, .bg-overlay").click(function(){
   $(".custom-model-main").removeClass('model-open');
 });
 </script>


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('front/layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/front/login_user.blade.php ENDPATH**/ ?>