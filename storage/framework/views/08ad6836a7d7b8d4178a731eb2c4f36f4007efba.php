<html xmlns="http://www.w3.org/1999/xhtml"><head>
<script type="text/javascript">
 function closethisasap() {
 document.forms["redirectpost"].submit();
  }
</script></head>

<body onload="closethisasap();">
<h1>Please wait you will be redirected soon to <br >Jazzcash Payment Page</h1>
 <form name="redirectpost" method="POST" action="<?php echo e(Config::get('constants.jazzcash.TRANSACTION_POST_URL')); ?>">
	 <?php 
	 $post_data = Session::get('post_data');
	 //echo '<pre>';
	 //print_r($post_data);
	 //echo '</pre>';
	 ?>
 <?php $__currentLoopData = $post_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="hidden" name="<?php echo e($key); ?>" value="<?php echo e($value); ?>">
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 </form>
 </body>
 </html><?php /**PATH C:\laragon\www\ecommerce\resources\views/front/do_checkout_v.blade.php ENDPATH**/ ?>