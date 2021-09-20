<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/images/favicon.ico')}}">
    <!-- Vendor CSS -->
    <link href="{{asset('frontend/js/vendor/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/js/vendor/slick/slick.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/js/vendor/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/js/vendor/animate/animate.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('frontend/css/style-light.css')}}" rel="stylesheet">
    <!--icon font-->
    <link href="{{asset('frontend/fonts/icomoon/icomoon.css')}}" rel="stylesheet">
    <!--custom font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body class="home-page is-dropdn-click has-slider">
    <div class="body-preloader">
        <div class="loader-wrap">
            <div class="dots">
                <div class="dot one"></div>
                <div class="dot two"></div>
                <div class="dot three"></div>
            </div>
        </div>
    </div>
    <header class="hdr global_width hdr_sticky hdr-mobile-style2">
        <!-- Promo TopLine -->
        <div class="bgcolor" style="background-image: url(images/promo-topline-bg.png);">
            <div class="promo-topline" data-expires="1" style="display: none;">
                <div class="container">
                    <div class="promo-topline-item"><b>GET 10% OFF YOUR FIRST ORDER WITH CODE <span style="color: #000">GOODWIN</span>&nbsp;<span class="hidden-xs">&nbsp;|&nbsp;&nbsp; FREE GROUND SHIPPING OVER $250</span></b></div>
                </div><a href="#" class="promo-topline-close js-promo-topline-close"><i class="icon-cross"></i></a>
            </div>
        </div>
        <!-- /Promo TopLine -->
        <!-- Mobile Menu -->
        <div class="mobilemenu js-push-mbmenu">
            <div class="mobilemenu-content">
                <div class="mobilemenu-close mobilemenu-toggle">CLOSE</div>
                <div class="mobilemenu-scroll">
                    <div class="mobilemenu-search"></div>
                    <div class="nav-wrapper show-menu">
                        <div class="nav-toggle"><span class="nav-back"><i class="icon-arrow-left"></i></span> <span class="nav-title"></span></div>
                        <ul class="nav nav-level-1">
                            <li><a href="index.html">Layouts<span class="menu-label menu-label--color1">NEW</span></a><span class="arrow"></span>
                                <ul class="nav-level-2">
                                    <li><a href="index.html" title="">Fashion 1</a></li>
                                    <li><a href="index-fashion-2.html" title="">Fashion 2</a></li>
                                    <li><a href="index-electronics.html" title="">Electronics 1</a></li>
                                    <li><a href="index-electronics-2.html" title="">Electronics 2</a></li>
                                    <li><a href="index-furniture.html" title="">Furniture</a></li>
                                    <li><a href="index-nutrition.html" title="">Nutrition</a></li>
                                    <li><a href="index-sport.html" title="">Sport</a></li>
                                    <li><a href="index-tools.html" title="">Tools</a></li>
                                    <li><a href="index-watches.html" title="">Watches</a></li>
                                    <li><a href="index-tshirts.html" title="">T-shirts</a></li>
                                    <li><a href="index-toys.html" title="">Toys</a></li>
                                    <li><a href="index-plumbing.html" title="">Plumbing</a></li>
                                    <li><a href="index-rtl.html" title="">RTL</a></li>
                                </ul>
                            </li>
                           
                            <li><a href="{{url('/contact_us')}}" >Contact US<span class="menu-label menu-label--color3">Hurry Up!</span></a><span class="arrow"></span></li>
                        </ul>
                    </div>
                    <div class="mobilemenu-bottom">
                        <div class="mobilemenu-currency"></div>
                        <div class="mobilemenu-language"></div>
                        <div class="mobilemenu-settings"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Mobile Menu -->
        <div class="hdr-mobile show-mobile">
            <div class="hdr-content">
                <div class="container">
                    <!-- Menu Toggle -->
                    <div class="menu-toggle"><a href="#" class="mobilemenu-toggle"><i class="icon icon-menu"></i></a></div>
                    <!-- /Menu Toggle -->
                    <div class="logo-holder"><a href="index.html" class="logo"><img src="images/logo.png" srcset="images/logo-retina.png 2x" alt=""></a></div>
                    <div class="hdr-mobile-right">
                        <div class="hdr-topline-right links-holder"></div>
                        <div class="minicart-holder"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hdr-desktop hide-mobile">
            <div class="hdr-topline">
                <div class="container">
                    <div class="row">
                        <div class="col-auto hdr-topline-left">
                            <!-- Header Language -->
                            <div class="dropdn dropdn_language">
                                <div class="dropdn dropdn_caret"><a href="#" class="dropdn-link">ENG</a>
                                    <div class="dropdn-content">
                                        <div class="container">
                                            <ul>
                                                <li class="active"><a href="#"><img src="images/flags/en.png" alt="">English</a></li>
                                                <li><a href="#"><img src="images/flags/sp.png" alt="">Spanish</a></li>
                                                <li><a href="#"><img src="images/flags/de.png" alt="">German</a></li>
                                                <li><a href="#"><img src="images/flags/fr.png" alt="">French</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Header Language -->
                            <!-- Header Currency -->
                            <div class="dropdn dropdn_currency">
                                <div class="dropdn dropdn_caret"><a href="#" class="dropdn-link">$ USD</a>
                                    <div class="dropdn-content">
                                        <div class="container">
                                            <ul>
                                                <li class="active"><a href="#"><span>$ USD</span><span>United states dollars</span></a></li>
                                                <li><a href="#"><span>€ EUR</span><span>Euro</span></a></li>
                                                <li><a href="#"><span>£ GBP</span><span>United kingdom pounds</span></a></li>
                                                <li><a href="#"><span>$ CAD</span><span>Canadian dollars</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Header Currency -->
                        </div>
                        <div class="col hdr-topline-center">
                            <div class="custom-text"><span>FREE</span> STANDARD DELIVERY ON ORDERS OVER $ 150</div>
                            <div class="custom-text"><i class="icon icon-mobile"></i><b>8 800 265 89 56</b></div>
                        </div>
                        <div class="col-auto hdr-topline-right links-holder">
                            <!-- Header Search -->
                            <div class="dropdn dropdn_search hide-mobile @@classes"><a href="#" class="dropdn-link"><i class="icon icon-search2"></i><span>Search</span></a>
                                <div class="dropdn-content">
                                    <div class="container">
                                        <form action="javascript:void(0)" class="search">
                                            <button type="button" onclick="funSearch()" class="search-button"><i class="icon-search2"></i></button> 
                                            <input type="text" id="search_str" class="search-input" placeholder="search keyword" onclick="funSearch()">
                                            <div class="search-popular js-search-autofill"><span class="search-popular-label">popular searches:</span><a href="#">Jeans</a>  <a href="#">hand bags</a> <a href="#">St.Valentine’s gift</a> <a href="#">maxi dress</a> <a href="#">Underwear</a> <a href="#">men tops</a></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /Header Search -->
                            <!-- Header Wishlist -->
                            <form action="" class="wish_list">
                            <div class="dropdn dropdn_wishlist @@classes"><a href="{{url('/my_wishlist')}}" class="dropdn-link "><i class="icon icon-heart-1" ></i>
                                {{-- <span class="minicart-qty">2</span> --}}
                                <span>Wishlist</span></a></div>
                                @csrf
                        </form>
                            <!-- /Header Wishlist -->
                            <!-- Header Account -->
                            <div class="dropdn dropdn_account @@classes"><a href="#" class="dropdn-link"><i class="icon icon-person"></i><span>My Account</span></a>
                                <div class="dropdn-content">
                                    <div class="container">
                                        <div class="dropdn-close">CLOSE</div>
                                        <ul>
                                            <li><a href="{{url('/account_detail')}}"><i class="icon icon-person-fill"></i><span>My Account</span></a></li>
                                          
                                          
                                            @if(session()->has('FRONT_USER_LOGIN')!=null)
                                           <li><a href="{{url('/logout')}}"><i class="icon icon-lock"></i><span>Log Out</span></a></li>

                                           @else

                                           <li><a href="{{url('login_user')}}"><i class="icon icon-lock"></i><span>Log In</span></a></li>

                                           @endif
                                          
                                            <li><a href="{{url('regestration')}}"><i class="icon icon-person-fill-add"></i><span>Register</span></a></li>
                                            <li><a href="{{url('/checkout')}}"><i class="icon icon-check-box"></i><span>Checkout</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Header Account -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="hdr-content hide-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-auto logo-holder"><a href="{{url('/')}}" class="logo"><img src="{{asset('frontend/images/logo.png')}}" srcset="images/logo-retina.png 2x" alt=""></a></div>
                        <!--navigation-->
                        <div class="prev-menu-scroll icon-angle-left prev-menu-js"></div>
                        <div class="nav-holder">
                            <div class="hdr-nav">
                                <!--mmenu-->
                                <ul class="mmenu mmenu-js">
                                    <li class="mmenu-item--simple"><a href="#" title="">Layouts<span class="menu-label menu-label--color1">NEW</span></a>
                                        <div class="mmenu-submenu">
                                            <ul class="submenu-list">
                                                <li><a href="index.html" title="">Fashion 1<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-01.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-fashion-2.html" title="">Fashion 2<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-02.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-fashion-3.html" title="">Fashion 3<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-15.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-fashion-4.html" title="">Fashion 4<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-16.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-electronics.html" title="">Electronics 1<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-03.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-electronics-2.html" title="">Electronics 2<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-04.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-furniture.html" title="">Furniture<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-05.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-nutrition.html" title="">Nutrition<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-06.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-sport.html" title="">Sport<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-07.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-tools.html" title="">Tools<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-08.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-watches.html" title="">Watches<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-09.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-tshirts.html" title="">T-shirts<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-10.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-toys.html" title="">Toys<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-12.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-plumbing.html" title="">Plumbing<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-13.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                                <li><a href="index-rtl.html" title="">RTL<span class="mmenu-preview"><img src="images/placeholder.png" data-src="images/menu/preview-layout-14.jpg" class="lazyload" alt=""><span class="gdw-loader"></span></span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                   
                                    <li class="mmenu-item--mega"><a href="category.html">New Arrivals</a>
                                        <div class="mmenu-submenu mmenu-submenu-with-sublevel">
                                            <div class="mmenu-submenu-inside">
                                                <div class="container">
                                                    <div class="mmenu-right width-20">
                                                        <h4 class="text-center submenu-title">Featured</h4>
                                                        <div class="prd-carousel-menu" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows": true}'>
                                                            <div class="prd-sm"><a href="product.html" class="prd-img"><img src="{{asset('frontend/images/products/product-placeholder.png')}}" data-srcset="images/products/product-11-2.jpg" class="lazyload" alt=""></a>
                                                                <div class="prd-info">
                                                                    <h2 class="prd-title"><a href="product.html">Leather belt</a></h2>
                                                                    <div class="prd-price">
                                                                        <div class="price-new">$ 90.00</div>
                                                                        <div class="price-old">$ 150.00</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="prd-sm"><a href="product.html" class="prd-img"><img src="{{asset('frontend/images/products/product-placeholder.png')}}" data-srcset="images/products/product-06-2.jpg" class="lazyload" alt=""></a>
                                                                <div class="prd-info">
                                                                    <h2 class="prd-title"><a href="product.html">Louboutin</a></h2>
                                                                    <div class="prd-price">
                                                                        <div class="price-new">$ 110.00</div>
                                                                        <div class="price-old">$ 210.00</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="prd-sm"><a href="product.html" class="prd-img"><img src="images/products/product-placeholder.png" data-srcset="images/products/product-08-2.jpg" class="lazyload" alt=""></a>
                                                                <div class="prd-info">
                                                                    <h2 class="prd-title"><a href="product.html">Office bag</a></h2>
                                                                    <div class="prd-price">
                                                                        <div class="price-new">$ 210.00</div>
                                                                        <div class="price-old">$ 310.00</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mmenu-cols column-5">
                                                        <div class="mmenu-col">
                                                            <h3 class="submenu-title"><a href="category.html">shoes</a></h3>
                                                            <ul class="submenu-list">
                                                                <li><a href="category.html">Sub Menu Level 1</a>
                                                                    <ul class="sub-level">
                                                                        <li><a href="#">Sub Menu Level 2</a>
                                                                            <ul class="sub-level">
                                                                                <li><a href="#">Sub Menu Level 3</a>
                                                                                    <ul class="sub-level">
                                                                                        <li><a href="#">Sub Menu Level 4</a>
                                                                                            <ul class="sub-level">
                                                                                                <li><a href="#">Sub Menu Level 5</a>
                                                                                                    <ul class="sub-level">
                                                                                                        <li><a href="#">Sub Menu Level 6</a>
                                                                                                            <ul class="sub-level">
                                                                                                                <li><a href="#">Sub Menu Level 7</a></li>
                                                                                                                <li><a href="#">Sub Menu Level 7</a></li>
                                                                                                                <li><a href="#">Sub Menu Level 7</a></li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                        <li><a href="#">Sub Menu Level 6</a></li>
                                                                                                        <li><a href="#">Sub Menu Level 6</a></li>
                                                                                                        <li><a href="#">Sub Menu Level 6</a></li>
                                                                                                        <li><a href="#">Sub Menu Level 6</a></li>
                                                                                                        <li><a href="#">Sub Menu Level 6</a></li>
                                                                                                        <li><a href="#">Sub Menu Level 6</a></li>
                                                                                                        <li><a href="#">Sub Menu Level 6</a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li><a href="#">Sub Menu Level 5</a></li>
                                                                                                <li><a href="#">Sub Menu Level 5</a></li>
                                                                                                <li><a href="#">Sub Menu Level 5</a></li>
                                                                                                <li><a href="#">Sub Menu Level 5</a></li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li><a href="#">Sub Menu Level 4</a></li>
                                                                                        <li><a href="#">Sub Menu Level 4</a></li>
                                                                                        <li><a href="#">Sub Menu Level 4</a></li>
                                                                                        <li><a href="#">Sub Menu Level 4</a></li>
                                                                                        <li><a href="#">Sub Menu Level 4</a></li>
                                                                                        <li><a href="#">Sub Menu Level 4</a></li>
                                                                                        <li><a href="#">Sub Menu Level 4</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li><a href="#">Sub Menu Level 3</a></li>
                                                                                <li><a href="#">Sub Menu Level 3</a></li>
                                                                                <li><a href="#">Sub Menu Level 3</a></li>
                                                                                <li><a href="#">Sub Menu Level 3</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                        <li><a href="#">Sub Menu Level 2</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="category.html">Boots</a></li>
                                                                <li><a href="category.html">Flats</a></li>
                                                                <li><a href="category.html">Sneakers & Athletic</a></li>
                                                                <li><a href="category.html">Clogs & Mules</a></li>
                                                            </ul><a href="category.html" class="submenu-view-more">View More</a>
                                                            <div class="submenu-img"><a href="category.html"><img src="images/placeholder.png" data-src="images/menu/category-img-01.jpg" class="lazyload" alt=""></a></div>
                                                        </div>
                                                        <div class="mmenu-col">
                                                            <h3 class="submenu-title"><a href="category.html">tops</a></h3>
                                                            <ul class="submenu-list">
                                                                <li><a href="category.html">Dresses</a></li>
                                                                <li><a href="category.html">Shirts & Tops</a></li>
                                                                <li><a href="category.html">Coats & Outerwear</a></li>
                                                                <li><a href="category.html">Sweaters</a></li>
                                                            </ul>
                                                            <div class="submenu-img"><a href="category.html"><img src="images/placeholder.png" data-src="images/menu/category-img-02.jpg" class="lazyload" alt=""></a></div>
                                                        </div>
                                                        <div class="mmenu-col">
                                                            <h3 class="submenu-title"><a href="category.html">bottoms</a></h3>
                                                            <ul class="submenu-list">
                                                                <li><a href="category.html">Jeans</a></li>
                                                                <li><a href="category.html">Pants</a></li>
                                                                <li><a href="category.html">slippers</a></li>
                                                                <li><a href="category.html">suits</a></li>
                                                                <li><a href="category.html">socks</a></li>
                                                            </ul><a href="category.html" class="submenu-view-more">View More</a>
                                                            <div class="submenu-img"><a href="category.html"><img src="images/placeholder.png" data-src="images/menu/category-img-03.jpg" class="lazyload" alt=""></a></div>
                                                        </div>
                                                        <div class="mmenu-col">
                                                            <h3 class="submenu-title"><a href="category.html">accessories</a></h3>
                                                            <ul class="submenu-list">
                                                                <li><a href="category.html">Sunglasses</a></li>
                                                                <li><a href="category.html">Hats</a></li>
                                                                <li><a href="category.html">Watches</a></li>
                                                                <li><a href="category.html">Jewelry</a></li>
                                                                <li><a href="category.html">Belts</a></li>
                                                            </ul><a href="category.html" class="submenu-view-more">View More</a>
                                                            <div class="submenu-img"><a href="category.html"><img src="images/placeholder.png" data-src="images/menu/category-img-04.jpg" class="lazyload" alt=""></a></div>
                                                        </div>
                                                        <div class="mmenu-col">
                                                            <h3 class="submenu-title"><a href="category.html">bags</a></h3>
                                                            <ul class="submenu-list">
                                                                <li><a href="category.html">Handbags</a></li>
                                                                <li><a href="category.html">Backpacks</a></li>
                                                                <li><a href="category.html">Luggage</a></li>
                                                                <li><a href="category.html">wallets</a></li>
                                                            </ul><a href="category.html" class="submenu-view-more">View More</a>
                                                            <div class="submenu-img"><a href="category.html"><img src="{{asset('frontend/images/placeholder.png')}}" data-src="images/menu/category-img-05.jpg" class="lazyload" alt=""></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="mmenu-bottom">
                                                        <div class="custom-text"><span>FREE</span> STANDARD DELIVERY ON ORDERS OVER $ 150</div>
                                                        <div class="custom-text"><span>100%</span> money back guarantee</div>
                                                        <div class="custom-text"><span>24/7</span> customer support</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> 
                                    <li class="mmenu-item--mega"><a href="collections.html">Shop By<span class="menu-label menu-label--color4">SALE</span></a>
                                        <div class="mmenu-submenu">
                                            <div class="mmenu-submenu-inside">
                                                <div class="container">
                                                    <div class="mmenu-right width-25">
                                                        <!--banners grid from the editor Banner21 --> <a href="product.html" class="bnr-wrap">
                                                            <div class="bnr bnr21 bnr--style-1-1 bnr--left bnr--bottom bnr-hover-scale" data-fontratio="2.63"><img src="{{asset('frontend/images/menu/mega-banner.jpg')}}" alt=""> <span class="bnr-caption" style="padding: 8% 8%;"><span class="bnr-text-wrap"><span class="bnr-text5">try<br>to be 1-st</span> <span class="btn-decor btn-decor--xs bnr-btn">shop new arrivals<span class="btn-line"></span></span></span></span></div>
                                                        </a>
                                                        <!--banners grid from the editor -->
                                                    </div>
                                                    <div class="mmenu-cols column-5">
                                                        <div class="mmenu-col">
                                                            <h3 class="submenu-title"><a href="category.html">Men</a></h3>
                                                            <h3 class="submenu-title"><a href="category.html">Women</a></h3>
                                                            <h3 class="submenu-title"><a href="category.html">Electronics</a></h3>
                                                            <h3 class="submenu-title"><a href="category.html">Options</a></h3>
                                                            <h3 class="submenu-title"><a href="category.html">Sale</a></h3>
                                                        </div>
                                                        <div class="mmenu-col mmenu-col--double">
                                                            <h3 class="submenu-title"><a href="category.html">Shop By Brand</a></h3>
                                                            <ul class="submenu-list two-cols">
                                                                <li><a href="category.html">all brands a-z</a></li>
                                                                <li><a href="category.html">Converse</a></li>
                                                                <li><a href="category.html">Saucony</a></li>
                                                                <li><a href="category.html">Calvin Klein</a></li>
                                                                <li><a href="category.html">Lacoste</a></li>
                                                                <li><a href="category.html">Under Armour</a></li>
                                                                <li><a href="category.html">The North Face</a></li>
                                                                <li><a href="category.html">Clarks</a></li>
                                                                <li><a href="category.html">Clayton</a></li>
                                                                <li><a href="category.html">COACH</a></li>
                                                                <li><a href="category.html">Cobian</a></li>
                                                                <li><a href="category.html">Cole Haan</a></li>
                                                            </ul><a href="category.html" class="submenu-view-more">View More</a>
                                                        </div>
                                                        <div class="mmenu-col">
                                                            <h3 class="submenu-title"><a href="category.html">Shop By Color</a></h3>
                                                            <ul class="submenu-list">
                                                                <li><a href="category.html"><span class="color" style="background-color: #ff0000;"></span><span>Red</span></a></li>
                                                                <li><a href="category.html"><span class="color" style="background-color: #000000;"></span><span>Black</span></a></li>
                                                                <li><a href="category.html"><span class="color" style="background-color: #ffffff;"></span><span>White</span></a></li>
                                                                <li><a href="category.html"><span class="color" style="background-color: #15c979;"></span><span>Green</span></a></li>
                                                                <li><a href="category.html"><span class="color" style="background-color: #d81f5e;"></span><span>Purple</span></a></li>
                                                                <li><a href="category.html"><span class="color" style="background-color: #ff9f15;"></span><span>Orange</span></a></li>
                                                                <li><a href="category.html"><span class="color" style="background-color: #2196f3;"></span><span>Blue</span></a></li>
                                                            </ul><a href="category.html" class="submenu-view-more">View More</a>
                                                        </div>
                                                        <div class="mmenu-col">
                                                            <h3 class="submenu-title"><a href="category.html">shop by style</a></h3>
                                                            <ul class="submenu-list">
                                                                <li><a href="category.html">tops</a></li>
                                                                <li><a href="category.html">buttoms</a></li>
                                                                <li><a href="category.html">shoes</a></li>
                                                                <li><a href="category.html">accessories</a></li>
                                                                <li><a href="category.html">gifts</a></li>
                                                                <li><a href="category.html">clearens</a></li>
                                                            </ul><a href="category.html" class="submenu-view-more">View More</a>
                                                        </div>
                                                    </div>
                                                    <div class="mmenu-bottom">
                                                        <div class="custom-text"><span>FREE</span> STANDARD DELIVERY ON ORDERS OVER $ 150</div>
                                                        <div class="custom-text"><span>100%</span> money back guarantee</div>
                                                        <div class="custom-text"><span>24/7</span> customer support</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="https://themeforest.net/item/goodwin-ecommerce-html-template/23251412?rel=bigsteps" target="_blank">Buy Theme<span class="menu-label menu-label--color3">Hurry Up!</span></a></li>
                                </ul>
                                <!--/mmenu-->
                            </div>
                        </div>
                        <div class="next-menu-scroll icon-angle-right next-menu-js"></div>
                        <!--//navigation-->

                        @php
                            $getAddtoCardTotalItem=getAddtoCardTotalItem();
                            $totalCardItem=count($getAddtoCardTotalItem);
                             $sum = 0;
                        @endphp
                        <div class="col-auto minicart-holder">
                            <div class="minicart minicart-js "><a href="javascript:void(0)" class="minicart-link"><i class="icon icon-handbag"></i> <span class="minicart-qty">{{$totalCardItem}}</span> <span class="minicart-title">Shopping Cart</span>
                                 {{-- <span id="minicart-total"> $ </span></a> --}}
                                <div class="minicart-drop"   >
                                    <div class="container" >
                                        <div class="minicart-drop-close">CLOSE</div>
                                      
                                            
                                      
                                        <div class="minicart-drop-content"  id="cartBoxs"    >
                                        @if ( $totalCardItem>0)
                                            <h3>Recently added items:</h3>
                                            @foreach ($getAddtoCardTotalItem as $Carditem)
                                            @php
                                                $sum+=$Carditem->price*$Carditem->qty;  
                                            //    $sum=$sum+($Carditem->price*$Carditem->qty);  
                                            @endphp
                                            
                                        
                                           
                                            <div class="minicart-prd" >
                                                <div class="minicart-prd-image"><a href="#"><img src="{{asset('storage/media/'.$Carditem->image)}}" data-srcset="{{asset('storage/media/'.$Carditem->image)}}" class="lazyload" alt="{{$Carditem->name}}"></a></div>
                                                <div class="minicart-prd-name">
                                                    <h2><a href="#">{{$Carditem->name}}</a></h2>
                                                    @if($Carditem->color!='')
                                                    <h5>color: {{$Carditem->color}}</h5>
                                                    @endif
                                                    @if($Carditem->size!='')
                                                    <h5>size: {{$Carditem->size}}</h5>
                                                    @endif
                                                </div>
                                                <div class="minicart-prd-qty"><span>qty:</span> <b>{{$Carditem->qty}}</b></div>
                                                <div class="minicart-prd-price"><span>price:</span> <b>$ {{$Carditem->price*$Carditem->qty}}</b></div>
                                                <!-- {{-- <div class="minicart-prd-action"><a href="#" class="icon-heart js-label-wishlist"></a> <a href="product.html" class="icon-pencil"></a> <a href="#" class="icon-cross js-product-remove"></a></div> --}} -->
                                            </div>
                                            @endforeach
                                           
                                            <div class="minicart-drop-total">
                                                <div class="float-right"><span class="minicart-drop-summa"><span>Cart Subtotal:</span> <b id="total_shopping_cart">$ {{$sum}}</b></span>
                                                    <div class="minicart-drop-btns-wrap"><a href="{{url('/checkout')}}" class="btn"><i class="icon-check-box"></i><span>checkout</span></a> <a href="cart.html" class="btn btn--alt"><i class="icon-handbag"></i><span>view cart</span></a></div>
                                                </div>
                                                <div class="float-left"><a href="{{url('/view_card')}}" class="btn btn--alt"><i class="icon-handbag"></i><span>view cart</span></a></div>
                                            </div>
                                        </div>
                                        @endif
                                     
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-holder compensate-for-scrollbar" >
            <div class="container">
                <div class="row"><a href="#" class="mobilemenu-toggle show-mobile"><i class="icon icon-menu"></i></a>
                    <div class="col-auto logo-holder-s"><a href="index.html" class="logo"><img src="{{asset('frontend/images/logo.png')}}" srcset="images/logo-retina.png 2x" alt=""></a></div>
                    <!--navigation-->
                    <div class="prev-menu-scroll icon-angle-left prev-menu-js"></div>
                    <div class="nav-holder-s"></div>
                    <div class="next-menu-scroll icon-angle-right next-menu-js"></div>
                    <!--//navigation-->
                    <div class="col-auto minicart-holder-s"></div>
                </div>
            </div>
        </div>
    </header>
   @section('container')
   @show
       
 
      
    <footer class="page-footer footer-style-1 global_width">
        <div class="holder bgcolor bgcolor-1 mt-0">
            <div class="container">
                <div class="row shop-features-style3">
                    <div class="col-md"><a href="#" class="shop-feature light-color">
                            <div class="shop-feature-icon"><i class="icon-box3"></i></div>
                            <div class="shop-feature-text">
                                <div class="text1">Free worlwide delivery</div>
                                <div class="text2">Lorem ipsum dolor sit amet</div>
                            </div>
                        </a></div>
                    <div class="col-md"><a href="#" class="shop-feature light-color">
                            <div class="shop-feature-icon"><i class="icon-arrow-left-circle"></i></div>
                            <div class="shop-feature-text">
                                <div class="text1">100% money back guarantee</div>
                                <div class="text2">Lorem ipsum dolor sit amet</div>
                            </div>
                        </a></div>
                    <div class="col-md"><a href="#" class="shop-feature light-color">
                            <div class="shop-feature-icon"><i class="icon-call"></i></div>
                            <div class="shop-feature-text">
                                <div class="text1">24/7 customer support</div>
                                <div class="text2">Lorem ipsum dolor sit amet</div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
        <div class="holder bgcolor bgcolor-2 py-5 mt-0">
            <div class="container">
                <div class="subscribe-form subscribe-form--style1">
                    <form action="#">
                        <div class="form-inline">
                            <div class="subscribe-form-title">subscribe to newsletter:</div>
                            <div class="form-control-wrap"><input type="text" class="form-control" placeholder="Enter Your e-mail address"></div><button type="submit" class="btn-decor">subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-top container">
            <div class="row py-md-4">
                <div class="col-md-4 col-lg">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>Categories</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <ul>
                                <li><a href="javascript:void(0)">Shoes</a></li>
                                <li><a href="javascript:void(0)">Mens's </a></li>
                                <li><a href="javascript:void(0)">Shirts</a></li>
                                <li><a href="javascript:void(0)">All Brands</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>Customer Service</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <ul>
                                <li><a href=javascript:void(0)">Terms of Use</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                <li><a href="{{url('/faq')}}">F.A.Q.</a></li>
                                <li><a href="{{url('/contact_us')}}">Contact Info</a></li>
                                <li><a href="{{url('/regestration')}}">Create Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>My Account</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <ul>
                                <li><a href="{{url('/account_detail')}}">My Account</a></li>
                                <li><a href="{{url('/view_card')}}">View Cart</a></li>
                                <li><a href="{{url('/my_wishlist')}}">My Wishlist</a></li>
                                <li><a href="{{url('/order_history')}}">Order Status</a></li>
                                <li><a href="{{url('/order_history')}}">Track My Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>Information</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <ul>
                                <li><a href="{{url('/about_us')}}">About Us</a></li>
                                <li><a href="javascript:void(0)">Our Portfolio</a></li>
                                <li><a href="javascript:void(0)">How to buy</a></li>
                                <li><a href="javascript:void(0)">Arrival Sales</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-3">
                    <div class="footer-block collapsed-mobile">
                        <div class="title">
                            <h4>contact us</h4>
                            <div class="toggle-arrow"></div>
                        </div>
                        <div class="collapsed-content">
                            <ul class="contact-list">
                                <li><i class="icon-phone"></i><span><span class="h6-style">Call Us:</span><span>1 (800) 233-2742</span></span></li>
                                <li><i class="icon-clock4"></i><span><span class="h6-style">Hours:</span><span>Mon-fri 9am-8pm<br>sat 9am-6pm</span></span></li>
                                <li><i class="icon-mail-envelope1"></i><span><span class="h6-style">E-mail:</span><span><a href="mailto:info@goodwin.us">info@goodwin.us</a></span></span></li>
                                <li><i class="icon-location1"></i><span><span class="h6-style">Address:</span><span>goodwin store 140 new str., suite 21 brooklyn, NY</span></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom container">
            <div class="row lined py-2 py-md-3">
                <div class="col-md-2 hidden-mobile"><a href="#"><img src="{{asset('frontend/images/logo-footer-dark.png')}}" class="img-fluid" alt=""></a></div>
                <div class="col-md-6 col-lg-5 footer-copyright">
                    <p class="footer-copyright-text"><span>© Copyright</span> 2019 <a href="#">GoodwinStore</a>. <span>All rights reserved.</span></p>
                    <p class="footer-copyright-links"><a href="">Terms & conditions</a> <a href="">Privacy policy</a></p>
                </div>
                <div class="col-md-auto">
                    <div class="payment-icons"><img src="{{asset('frontend/images/placeholder.png')}}" data-srcset="{{asset('frontend/images/payment/payment-card-visa.png 1x')}}, {{asset('frontend/images/payment/payment-card-visax2.png 2x')}}" class="lazyload" alt=""> <img src="{{asset('frontend/images/placeholder.png')}}" data-srcset="{{asset('frontend/images/payment/payment-card-mastecard.png 1x')}}, {{asset('frontend/images/payment/payment-card-mastecardx2.png 2x')}}" class="lazyload" alt=""> <img src="{{asset('frontend/images/placeholder.png')}}" data-srcset="{{asset('frontend/images/payment/payment-card-discover.png 1x')}}, {{asset('frontend/images/payment/payment-card-discoverx2.png 2x')}}" class="lazyload" alt=""></div>
                </div>
                <div class="col-md-auto ml-lg-auto">
                    <ul class="social-list">
                        <li><a href="#" class="icon icon-facebook"></a></li>
                        <li><a href="#" class="icon icon-twitter"></a></li>
                        <li><a href="#" class="icon icon-google"></a></li>
                        <li><a href="#" class="icon icon-instagram"></a></li>
                        <li><a href="#" class="icon icon-youtube"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><a class="back-to-top js-back-to-top compensate-for-scrollbar" href="#" title="Scroll To Top"><i class="icon icon-angle-up"></i></a>
    <div class="modal--quickview" id="modalQuickView" style="display: none;">
        <div class="modal-header">
            <div class="modal-header-title">Quick View</div>
        </div>
        <div class="modal-content">
            <div class="modal-body">
                <div class="prd-block" id="prdGalleryModal">
                    <div class="prd-block_info">
                        <div class="prd-block_info-row info-row-1 mb-md-1">
                            <div class="info-row-col-1">
                                <h1 class="prd-block_title">Glamor shoes</h1>
                            </div>
                            <div class="info-row-col-2">
                                <div class="product-sku">SKU: <span>#0005</span></div>
                                <div class="prd-block__labels"><span class="prd-label--sale">SALE</span> <span class="prd-label--new">NEW</span></div>
                                <div class="prd-block_link"><a href="#" class="icon-heart-1"></a></div>
                            </div>
                        </div>
                        <div class="prd-block_info-row info-row-2">
                            <form action="#">
                                <div class="info-row-col-3">
                                    <div class="prd-block_price"><span class="prd-block_price--actual">$180.00</span> <span class="prd-block_price--old">$210.00</span></div>
                                </div>
                                <div class="info-row-col-4">
                                    <div class="prd-block_price"><span class="prd-block_price--actual">$180.00</span> <span class="prd-block_price--old">$210.00</span></div>
                                    <div class="prd-block_qty"><span class="option-label">Qty:</span>
                                        <div class="qty qty-changer qty-changer--lg">
                                            <fieldset><input type="button" value="&#8210;" class="decrease"> <input type="text" class="qty-input" value="2" data-min="0" data-max="10"> <input type="button" value="+" class="increase"></fieldset>
                                        </div>
                                    </div>
                                    <div class="prd-block_options">
                                        <div class="form-group select-wrapper-sm"><select class="form-control" tabindex="0">
                                                <option value="">36 / silver $34.00</option>
                                                <option value="">38 / silver $34.00</option>
                                                <option value="">36 / gold $45.00</option>
                                                <option value="">38 / gold $45.00</option>
                                            </select></div>
                                    </div>
                                    <div class="prd-block_actions">
                                        <div class="btn-wrap"><button class="btn btn--add-to-cart-sm"><i class="icon icon-handbag"></i><span>Add to cart</span></button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="prd-block_info js-prd-m-holder"></div><!-- Product Gallery -->
                    <div class="product-previews-wrapper">
                        <div class="product-quickview-carousel slick-arrows-aside-simple js-product-quickview-carousel">
                            <div><a href="images/products/large/product-01.jpg" data-fancybox="gallery"><img src="{{asset('frontend/images/products/product-01.jpg')}}" alt=""></a></div>
                            <div><a href="images/products/large/product-01-2.jpg" data-fancybox="gallery"><img src="{{asset('frontend/images/products/product-01-2.jpg')}}" alt=""></a></div>
                            <div><a href="images/products/large/product-01-3.jpg" data-fancybox="gallery"><img src="{{asset('frontend/images/products/product-01-3.jpg')}}" alt=""></a></div>
                            <div><a href="images/products/large/product-01-4.jpg" data-fancybox="gallery"><img src="{{asset('frontend/images/products/product-01-4.jpg')}}" alt=""></a></div>
                            <div><a href="images/products/large/product-01-5.jpg" data-fancybox="gallery"><img src="{{asset('frontend/images/products/product-01-5.jpg')}}" alt=""></a></div>
                        </div>
                        <div class="gdw-loader"></div>
                    </div>
                    <!-- /Product Gallery -->
                    <div class="mt-3 mt-md-4">
                        <h2>Description</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error expedita hic iure nemo, nihil quam. Ab blanditiis eligendi fugit impedit, magni minus omnis placeat recusandae rem, sunt ut vitae voluptates? Fuga pariatur provident reiciendis veritatis voluptates voluptatum. A accusantium aliquam amet deleniti ea esse ex minus obcaecati perferendis tempore? Cupiditate distinctio incidunt molestiae, nam nesciunt non quaerat quas ratione repellendus! Ab aperiam assumenda consequatur delectus ea exercitationem facilis, in itaque iusto labore maiores nemo nostrum odio officiis optio placeat quas qui quibusdam ratione rem soluta suscipit totam voluptas voluptatem voluptatum.</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <tbody>
                                    <tr>
                                        <td>FABRIC</td>
                                        <td>Metallic faux leather</td>
                                    </tr>
                                    <tr>
                                        <td>STYLE</td>
                                        <td>Goatskin lining, Strappy silhouette, Chunky heel, Buckle at ankle</td>
                                    </tr>
                                    <tr>
                                        <td>MANUFACTURE</td>
                                        <td>Made in Italy</td>
                                    </tr>
                                    <tr>
                                        <td>MATERIAL</td>
                                        <td>Rubber heel patch at leather sole</td>
                                    </tr>
                                    <tr>
                                        <td>WEIGHT</td>
                                        <td>0.05, 0.06, 0.07ess cards</td>
                                    </tr>
                                    <tr>
                                        <td>BOX</td>
                                        <td>This item cannot be gift-boxed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modalWishlistAdd" class="modal-info modal--success  modalWishlistAdds" style="display: none;">
        <div class="modal-text"><i class="icon icon-heart-fill modal-icon-info "></i><span class="wishlistadds"></span></div>
    </div>
    <div id="modalWishlistRemove" class="modal-info modal--error" style="display: none;">
        <div class="modal-text"><i class="icon icon-heart modal-icon-info"></i><span class="wishlistremoves"></span></div>
    </div>
    {{-- <div id="modalCheckOut" class="modal--checkout" style="display: none;">
        <div class="modal-header">
            <div class="modal-header-title"><i class="icon icon-check-box"></i><span>Product added to cart successfully!</span></div>
        </div>
        <div class="modal-content">
            <div class="modal-body">
                <div class="modalchk-prd">
                    <div class="row h-font">
                        <div class="modalchk-prd-image col"><a href="product.html"><img src="{{asset('frontend/images/products/product-01.jpg')}}" alt="Glamor shoes"></a></div>
                        <div class="modalchk-prd-info col">
                            <h2 class="modalchk-title"><a href="product.html">Glamor shoes</a></h2>
                            <div class="modalchk-price">$ 34.00</div>
                            <div class="prd-options"><span class="label-options">Sizes:</span><span class="prd-options-val">xs</span></div>
                            <div class="prd-options"><span class="label-options">Qty:</span><span class="prd-options-val">1</span></div>
                            <div class="prd-options"><span class="label-options">Color:</span><span class="prd-options-val">silver</span></div>
                            <div class="shop-features-modal d-none d-sm-block"><a href="#" class="shop-feature">
                                    <div class="shop-feature-icon"><i class="icon-box3"></i></div>
                                    <div class="shop-feature-text">
                                        <div class="text1">Delivery</div>
                                        <div class="text2">Lorem ipsum dolor sit amet conset</div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="shop-features-modal d-sm-none"><a href="#" class="shop-feature">
                                <div class="shop-feature-icon"><i class="icon-box3"></i></div>
                                <div class="shop-feature-text">
                                    <div class="text1">Delivery</div>
                                    <div class="text2">Lorem ipsum dolor sit amet conset</div>
                                </div>
                            </a></div>
                        <div class="modalchk-prd-actions col">
                            <h3 class="modalchk-title">There is <span class="custom-color">3</span> items in your cart</h3>
                            <div class="prd-options"><span class="label-options">Total:</span><span class="modalchk-total-price">$ 600.00</span></div>
                            <div class="modalchk-custom"><img src="{{asset('frontend/images/payment/guaranteed.png')}}" alt="Guaranteed"></div>
                            <div class="modalchk-btns-wrap"><a href="checkout.html" class="btn">proceed to checkout</a> <a href="#" class="btn btn--alt" data-fancybox-close>continue shopping</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="display: none;" class="modal--newsletter js-newslettermodal" data-pause="5000" data-expires="1">
        <div class="row no-gutters">
            <div class="col-sm d-none d-md-flex align-items-center justify-content-center">
                <div class="newslettermodal-img"><img src="{{asset('frontend/images/newsletter/newsletter-popup-fashion.png')}}" alt="Subscribe Us"></div>
            </div>
            <div class="col-sm">
                <div class="newslettermodal-content">
                    <div class="newslettermodal-content-center">
                        <div class="newslettermodal-content-logo"><img src="{{asset('frontend/images/logo.png')}}" alt=""></div>
                        <h3 class="h2-style newslettermodal-content-title">Sign up our newsletter</h3>
                        <div class="newslettermodal-content-text">Enter Your email address to sign up to receive our latest news and offers</div>
                        <form action="#" class="newslettermodal-content-form">
                            <div class="form-group"><input type="email" class="form-control" placeholder="Enter Your e-mail address"></div><button type="submit" class="btn mt-15">Subscribe</button>
                            <div class="checkbox-group mt-2"><input type="checkbox" name="newsletter" id="newsLetterCheckBox"> <label for="newsLetterCheckBox">Don't show this popup</label></div>
                        </form>
                        <div class="newslettermodal-content-socials">
                            <ul class="social-list mt-3">
                                <li><a href="#" class="icon icon-facebook"></a></li>
                                <li><a href="#" class="icon icon-twitter"></a></li>
                                <li><a href="#" class="icon icon-google"></a></li>
                                <li><a href="#" class="icon icon-instagram"></a></li>
                                <li><a href="#" class="icon icon-youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--<div class="modal&#45;&#45;newsletter animated-modal js-newslettermodal" data-animation-duration="5000" id="modalNewsletter" style="display: none;" data-pause="1000">-->
    <!--<div class="modal-content">-->
    <!--<div class="modal-body">-->
    <!--<div class="row">-->
    <!--<div class="col-sm"><img src="images/newsletter-left-bg.jpg" alt=""></div>-->
    <!--<div class="col-sm">-->
    <!--<div class="newslettermodal-content">-->
    <!--<div class="newslettermodal-content-logo"><img src="images/logo.png" alt=""></div>-->
    <!--<h3 class="h2-style">sign up our newslatter</h3>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <script src="{{asset('frontend/js/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/slick/slick.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/scrollLock/jquery-scrollLock.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/instafeed/instafeed.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/countdown/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/ez-plus/jquery.ez-plus.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/tocca/tocca.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/bootstrap-tabcollapse/bootstrap-tabcollapse.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/cookie/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/lazysizes/lazysizes.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/lazysizes/ls.bgset.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/form/jquery.form.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/form/validator.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/slider/slider.js')}}"></script>
    <script src="{{asset('frontend/js/app.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
   
   <script> 
    var PRODUCT_IMG=src="{{asset('storage/media/')}}";
    var viewcard_link="{{url('/view_card')}}";
    </script>
</body>

</html>