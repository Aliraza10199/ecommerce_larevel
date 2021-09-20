<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title><?php echo $__env->yieldContent('page_title'); ?></title>

     <!-- Fontfaces CSS-->
     <link href="<?php echo e(asset('adminpanals/css/font-face.css')); ?>" rel="stylesheet" media="all">
     <link href="<?php echo e(asset('adminpanals/vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
     <link href="<?php echo e(asset('adminpanals/vendor/font-awesome-5/css/fontawesome-all.min.css')); ?>" rel="stylesheet" media="all">
     <link href="<?php echo e(asset('adminpanals/vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">

       

 
     <!-- Bootstrap CSS-->
     <link href="<?php echo e(asset('adminpanals/vendor/bootstrap-4.1/bootstrap.min.css')); ?>" rel="stylesheet" media="all">
 
     <!-- Vendor CSS-->
     <link href="<?php echo e(asset('adminpanals/vendor/animsition/animsition.min.css')); ?>" rel="stylesheet" media="all">
     <link href="<?php echo e(asset('adminpanals/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet" media="all">
     <link href="<?php echo e(asset('adminpanals/vendor/wow/animate.css" rel="stylesheet')); ?>" media="all">
     <link href="<?php echo e(asset('adminpanals/vendor/css-hamburgers/hamburgers.min.css')); ?>" rel="stylesheet" media="all">
     <link href="<?php echo e(asset('adminpanals/vendor/slick/slick.css" rel="stylesheet')); ?>" media="all">
     <link href="<?php echo e(asset('adminpanals/vendor/select2/select2.min.css')); ?>" rel="stylesheet" media="all">
     <link href="<?php echo e(asset('adminpanals/vendor/perfect-scrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" media="all">
 
     <!-- Main CSS-->
     <link href="<?php echo e(asset('adminpanals//css/theme.css')); ?>"  rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="adminpanal/index.html">
                            <img src="<?php echo e(asset('adminpanals/images/icon/logo-blue.png')); ?>"  alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        
                    <li class="<?php echo $__env->yieldContent('dashboard_select'); ?>">
                            <a  href="<?php echo e(url('admin/dashboard')); ?>">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>          
                    </li>
                    <li class="<?php echo $__env->yieldContent('order_select'); ?>">
                            <a  href="<?php echo e(url('admin/order')); ?>">
                            <i class="fas fa-tachometer-alt"></i>Order</a>          
                    </li>
                
                        <li class="<?php echo $__env->yieldContent('category_select'); ?>">
                            <a  href="<?php echo e(url('admin/category')); ?>">
                            <i class="fas fa-list"></i>Category</a>                         
                    </li>
                    
                    <li class="<?php echo $__env->yieldContent('coupon_select'); ?>" >
                            <a  href="<?php echo e(url('admin/coupon')); ?>">
                            <i class="fas fa-tag"></i>Coupon</a>
                    </li>

                    <li class="<?php echo $__env->yieldContent('size_select'); ?>" >
                            <a  href="<?php echo e(url('admin/size')); ?>">
                            <i class="fas fa-tag"></i>Size</a>                         
                    </li>

                    <li class="<?php echo $__env->yieldContent('color_select'); ?>" >
                        <a  href="<?php echo e(url('admin/color')); ?>">
                            <i class="fas fa-paint-brush"></i>Color</a>                     
                    </li>

                    <li class="<?php echo $__env->yieldContent('brand_select'); ?>" >
                        <a  href="<?php echo e(url('admin/brand')); ?>">
                            <i class="fas fa-window-maximize"></i>Brand</a>                     
                    </li>

                    <li class="<?php echo $__env->yieldContent('product_select'); ?>" >
                        <a  href="<?php echo e(url('admin/product')); ?>">
                            <i class="fa-sitemap "></i>Product</a>  
                    </li>

                    <li class="<?php echo $__env->yieldContent('customer_select'); ?>" >
                        <a  href="<?php echo e(url('admin/customer')); ?>">
                            <i class="fas fa-user"></i>Customer</a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('tax_select'); ?>" >
                        <a  href="<?php echo e(url('admin/tax')); ?>">
                            <i class="fas fa-user"></i>Tax</a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('home_banner_select'); ?>" >
                        <a  href="<?php echo e(url('admin/home_banner')); ?>">
                            <i class="fas fa-images"></i>Home Banner</a>
                    </li>
                          
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo e(asset('adminpanals/images/icon/logo.png')); ?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li class="<?php echo $__env->yieldContent('dashboard_select'); ?>">
                            <a  href="<?php echo e(url('admin/dashboard')); ?>">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>          
                    </li>
                        <li class="<?php echo $__env->yieldContent('order_select'); ?>">
                            <a  href="<?php echo e(url('admin/order')); ?>">
                            <i class="fas fa-tachometer-alt"></i>Order</a>          
                    </li>
                
                        <li class="<?php echo $__env->yieldContent('category_select'); ?>">
                            <a  href="<?php echo e(url('admin/category')); ?>">
                            <i class="fas fa-list"></i>Category</a>                         
                    </li>
                    
                    <li class="<?php echo $__env->yieldContent('coupon_select'); ?>" >
                            <a  href="<?php echo e(url('admin/coupon')); ?>">
                            <i class="fas fa-tag"></i>Coupon</a>
                    </li>

                    <li class="<?php echo $__env->yieldContent('size_select'); ?>" >
                            <a  href="<?php echo e(url('admin/size')); ?>">
                            <i class="fas fa-tag"></i>Size</a>                         
                    </li>

                    <li class="<?php echo $__env->yieldContent('color_select'); ?>" >
                        <a  href="<?php echo e(url('admin/color')); ?>">
                            <i class="fas fa-paint-brush"></i>Color</a>                     
                    </li>

                    <li class="<?php echo $__env->yieldContent('brand_select'); ?>" >
                        <a  href="<?php echo e(url('admin/brand')); ?>">
                            <i class="fas fa-window-maximize"></i>Brand</a>                     
                    </li>

                    <li class="<?php echo $__env->yieldContent('product_select'); ?>" >
                        <a  href="<?php echo e(url('admin/product')); ?>">
                            <i class="fas fa-sitemap"></i>Product</a>  
                    </li>

                    <li class="<?php echo $__env->yieldContent('customer_select'); ?>" >
                        <a  href="<?php echo e(url('admin/customer')); ?>">
                            <i class="fas fa-user"></i>Customer</a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('tax_select'); ?>" >
                        <a  href="<?php echo e(url('admin/tax')); ?>">
                            <i class="fas fa-user"></i>Tax</a>
                    </li>
                    <li class="<?php echo $__env->yieldContent('home_banner_select'); ?>" >
                        <a  href="<?php echo e(url('admin/home_banner')); ?>">
                            <i class="fas fa-images"></i>Home Banner</a>
                    </li>

                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                <div class="account-item clearfix js-item-menu">
                                        
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">Welcome Admin</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                           
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="<?php echo e(url('admin/logout')); ?>">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <?php $__env->startSection('container'); ?>
                                <?php echo $__env->yieldSection(); ?>
                                
                            </div>
                        </div>
                        <div class="row m-t-25">
                          
           
                       
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


    <!-- Jquery JS-->
    <script src="<?php echo e(asset('adminpanals/vendor/jquery-3.2.1.min.js')); ?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo e(asset('adminpanals/vendor/bootstrap-4.1/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap-4.1/bootstrap.min.js')); ?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo e(asset('adminpanals/vendor/slick/slick.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('adminpanals/vendor/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('adminpanals/vendor/animsition/animsition.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('adminpanals/vendor/counter-up/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('adminpanals/vendor/counter-up/jquery.counterup.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('adminpanals/vendor/vendor/circle-progress/circle-progress.min.js')); ?>"></script>
    <script src="<?php echo e(asset('adminpanals/vendor/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('adminpanals/vendor/chartjs/Chart.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('adminpanals/vendor/select2/select2.min.js')); ?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo e(asset('adminpanals//js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('adminpanals//js/mains.js')); ?>"></script>

</body>

</html>
<!-- end document-->
<?php /**PATH C:\laragon\www\ecommerce\resources\views/adminpanal/layout.blade.php ENDPATH**/ ?>