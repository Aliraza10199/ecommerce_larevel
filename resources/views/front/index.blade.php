@extends('front/layouts')
@section('page_title','Home Page')
@section('container')

<div class="page-content">
    <!-- BN Slider 1 -->
  
    <div class="holder fullwidth full-nopad mt-0">
      <div class="container">
      
          <div class="bnslider-wrapper">
              <div class="bnslider bnslider--lg bnslider--darkarrows keep-scale" id="bnslider-001" data-slick='{"arrows": true, "dots": true}' data-autoplay="false" data-speed="5000" data-start-width="1920" data-start-height="815" data-start-mwidth="480" data-start-mheight="578">
                  @foreach($home_banner as $list)
                  <div class="bnslider-slide bnslide-fashion-4">
                      <div class="bnslider-image-mobile" style="background-image: url({{asset('storage/media/banner/'.$list->image)}});"></div>
                      <div class="bnslider-image" style="background-image: url({{asset('storage/media/banner/'.$list->image)}});"></div>
                      <div class="bnslider-text-wrap bnslider-overlay">
                          <div class="bnslider-text-content txt-middle txt-right">
                              <div class="bnslider-text-content-flex">
                                  <div class="bnslider-vert w-50 mx-0">
                                      <div class="bnslider-text bnslider-text--lg text-center" data-animation="popIn" data-animation-delay=".8s" style="color: #ffc501;">50% OFF</div>
                                      <div class="bnslider-text bnslider-text--xxs text-center" data-animation="fadeInUp" data-animation-delay="1s" style="color: #000; font-weight: 300;">TILL DECEMBER 13</div>
                                      <div class="bnslider-text bnslider-text--xs text-center" data-animation="zoomIn" data-animation-delay="1.6s" style="color: #ffc501;">FINAL CLEARANCE</div>
                                      <div class="btn-wrap double-mt text-center" data-animation="fadeInUp" data-animation-delay="2s"><a href="{{$list->btn_link}}" target="_blank" class="btn-decor" style="color: #000;">{{$list->btn_txt}}<span class="btn-line" style="background-color: #ffc501;"></span></a></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endforeach
                
              </div>
              <div class="bnslider-loader">
                  <div class="loader-wrap">
                      <div class="dots">
                          <div class="dot one"></div>
                          <div class="dot two"></div>
                          <div class="dot three"></div>
                      </div>
                  </div>
              </div>
              <div class="bnslider-arrows container-fluid">
                  <div></div>
              </div>
              <div class="bnslider-dots vert-dots container-fluid"></div>
          </div>
     
      </div>
  </div>
  <!-- //BN Slider 1 -->
  
      
  
  <div class="holder fullboxed bgcolor mt-0 py-2 py-sm-3">
     
      <div class="container">
        <h2 class="h1-style">Categories</h2>
          <div class="row bnr-grid">
          
              @foreach ($home_categories as $list)
              <div class="col-md">
                  <a href="{{url('category/'.$list->category_slug)}}" class="bnr-wrap">
                      <div class="bnr bnr1 bnr--style-1 bnr--right bnr--middle bnr-hover-scale" data-fontratio="5.55"><img src="{{asset('storage/media/category/'.$list->category_image)}}" data-src="" alt="{{$list->category_name}}" class="lazyload"> <span class="bnr-caption"><span class="bnr-text-wrap"><span class="bnr-text1">new arrivals</span> <span class="bnr-text2">{{$list->category_name}}</span> <span class="btn-decor bnr-btn">shop now<span class="btn-line"></span></span></span></span>
                      </div>
                  </a>
                  
              </div>
              @endforeach
          </div>
         
      </div>
   
  </div>
  
 
  <div class="holder">
      <div class="container">
          <div class="title-with-right">
              <h2 class="h1-style">Recomended Products</h2>
             
              <div class="prd-carousel-tabs js-filters-prd d-none d-md-flex" data-grid="tabCarousel-01"><span class="active" data-filter="prd">All</span> <span data-filter="prd-popular">Popular</span> <span data-filter="prd-sale">Sale</span> <span data-filter="prd-new">New</span></div>
              <div class="prd-carousel-tabs js-filters-prd-sm d-md-none"><span class="filters-label active" data-filter=".prd">All</span> <span class="filters-label" data-filter=".prd-popular">Popular</span> <span class="filters-label" data-filter=".prd-sale">Sale</span> <span class="filters-label" data-filter=".prd-new">New</span></div>
          </div>
       
          <div class="prd-grid prd-carousel js-prd-carousel-tab slick-arrows-aside-simple slick-arrows-mobile-lg data-to-show-4 data-to-show-md-3 data-to-show-sm-3 data-to-show-xs-2 js-product-isotope-sm" id="tabCarousel-01" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
             
              @if(isset($home_products[0]))
              @foreach($home_products as $list)
             
              <div class="prd prd-has-loader prd-new prd-popular">
               
                  <div class="prd-inside">
                      <div class="prd-img-area"><a href="{{url('product/')}}/{{$list->slug}}" class="prd-img"><img src="{{asset('storage/media/'.$list->image)}}" data-srcset="{{asset('storage/media/'.$list->image)}}" alt="{{$list->name}}" class="js-prd-img lazyload"></a>
                          <div class="label-new">NEW</div><a href="javascript:void(0)" onclick="wishlist_manage('{{$list->slug}}','{{$list->id}}','{{$home_product_attr[$list->id][0]->id}}')" class="label-wishlist icon-heart js-label-wishlist"></a>
                          <ul class="list-options color-swatch prd-hidemobile">
                              {{-- <li data-image="images/products/product-01.jpg"><a href="#" class="js-color-toggle"><img src="images/products/product-placeholder.png" data-srcset="images/products/xsmall/product-01.jpg" class="lazyload" alt="Color Name"></a></li>
                              <li data-image="images/products/product-01-2.jpg"><a href="#" class="js-color-toggle"><img src="images/products/product-placeholder.png" data-srcset="images/products/xsmall/product-01-2.jpg" class="lazyload" alt="Color Name"></a></li> --}}
                          </ul>
                          <div class="gdw-loader"></div>
                      </div>
                      <div class="prd-info">
                          {{-- <div class="prd-tag prd-hidemobile"><a href="#">under armor</a></div> --}}
                          <h2 class="prd-title"><a href="product.html"> {{$list->name}}</a></h2>
                          <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                          <div class="prd-price">
                              <div class="price-new">$ {{$home_product_attr[$list->id][0]->price}}</div>
                          </div>
                          <div class="prd-hover">
                              <div class="prd-action">
                                  <form action="javascript:void(0)"><input type="hidden"> <button class="btn" 
                                    onclick="home_add_to_card('{{$list->id}}','{{$home_product_attr[$list->id][0]->color}}','{{$home_product_attr[$list->id][0]->size}}','{{$home_product_attr[$list->id][0]->price}}')"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
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
              @endforeach
              @else
              <li>
                  <figure>
                      No data found
                  </figure>
              </li>
              @endif
  
            
             
          </div>
        
          <div class="more-link-wrapper text-center"><a href="{{url('/all_products')}}" class="btn-decor">show all</a></div>
      </div>
  </div>
  <div class="holder fullwidth full-nopad bgcolor bgcolor-1">
      <div class="container">
      
          <div class="row no-gutters align-items-center">
              {{-- <div class="col-md d-none d-md-block"><a href="javascript:void(0)" class="bnr bnr--left bnr--middle"><img src="{{asset('storage/media/sale.jpg')}}" data-src="{{asset('storage/media/sale.jpg')}}" alt="Banner" class="lazyload"></a></div> --}}
              <div class="col-md"><a href="" class="bnr bnr--style-2 bnr--center bnr--middle" data-fontratio="9.52"><span class="bnr-caption"><span class="bnr-text-wrap"><span class="bnr-text1">ciber sale</span> <span class="bnr-text2">on summer collections</span> <span class="bnr-text3">50% or more off</span> <span class="btn-decor bnr-btn btn-decor--whiteline">shop now<span class="btn-line"></span></span></span></span></a></div>
             
              {{-- @foreach($home_banner as $list) --}}
              <div class="col-md d-none d-md-block"><a href="javascript:void(0)" class="bnr bnr--left bnr--middle"><img src="{{asset('storage/media/sale.jpg')}}" data-src="{{asset('storage/media/sale.jpg')}}" alt="Banner" class="lazyload"></a></div>
              {{-- @endforeach --}}
  
            </div>
          
           
          
      </div>
  </div>
  {{-- <div class="holder">
      <div class="container">
          <div class="row vert-margin mobile-xs-pad">
              <div class="col-6 col-lg-3 aside-col-lg-4"><a href="#" class="bnr bnr--style-3 bnr--left bnr--top" data-fontratio="2.63"><img src="images/placeholder.png" data-src="images/home-fashion/banner-7.jpg" alt="Banner" class="lazyload"> <span class="bnr-caption"><span class="bnr-text-wrap"><span class="bnr-text1">Limited discunts for jeans</span> <span class="bnr-text2">65<sup>%</sup><sub>off</sub></span></span></span></a></div>
              <div class="col-6 col-lg-3 aside-d-none"><a href="#" class="bnr bnr--style-4 bnr--center bnr--middle" data-fontratio="2.63"><img src="images/placeholder.png" data-src="images/home-fashion/banner-8.jpg" alt="Banner" class="lazyload"> <span class="bnr-caption"><span class="bnr-text-wrap"><span class="bnr-text1">unique deal</span> <span class="bnr-text2">diesel watches</span> <span><span class="btn-decor bnr-btn">shop now<span class="btn-line"></span></span></span></span></span></a></div>
              <div class="col-lg-6 aside-col-lg-8">
                  <div class="prd-promo prd-promo-carousel vert-dots">
                      <div class="prd-hor prd-has-loader">
                          <h3 class="sidebar-block_title">Bestseller</h3>
                          <div class="prd-inside">
                              <div class="prd-img-area">
                                  <div class="prd-img-wrap"><a href="product.html" class="prd-img"><img src="images/products/product-09.jpg" alt="Office shirt" class="js-prd-img"></a></div>
                                  <ul class="list-options color-swatch prd-hidemobile">
                                      <li data-image="images/products/product-09.jpg"><a href="#" class="js-color-toggle"><img src="images/products/xsmall/product-09.jpg" alt="Color Name"></a></li>
                                      <li data-image="images/products/product-09-2.jpg"><a href="#" class="js-color-toggle"><img src="images/products/xsmall/product-09-2.jpg" alt="Color Name"></a></li>
                                  </ul>
                                  <div class="gdw-loader"></div>
                              </div>
                              <div class="prd-info">
                                  <h3 class="sidebar-block_title">Bestseller</h3>
                                  <div class="inside">
                                      <div class="prd-tag"><a href="#">clorks</a></div>
                                      <h2 class="prd-title"><a href="product.html">Office shirt</a></h2>
                                      <div class="prd-rating"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                      <div class="prd-price">
                                          <div class="price-new">$ 78.00</div>
                                      </div>
                                      <div class="prd-action">
                                          <form action="#"><input type="hidden"> <button class="btn" ><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                          <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="prd-hor prd-has-loader">
                          <h3 class="sidebar-block_title">Deal of the day</h3>
                          <div class="prd-inside">
                              <div class="prd-img-area">
                                  <div class="prd-img-wrap"><a href="product.html" class="prd-img"><img src="images/products/product-10.jpg" alt="Flip Flops Easy" class="js-prd-img"></a></div>
                                  <div class="label-sale">-29%</div>
                                  <ul class="list-options color-swatch prd-hidemobile">
                                      <li data-image="images/products/product-10.jpg"><a href="#" class="js-color-toggle"><img src="images/products/xsmall/product-10.jpg" alt="Color Name"></a></li>
                                      <li data-image="images/products/product-10-2.jpg"><a href="#" class="js-color-toggle"><img src="images/products/xsmall/product-10-2.jpg" alt="Color Name"></a></li>
                                  </ul>
                                  <div class="gdw-loader"></div>
                              </div>
                              <div class="prd-info">
                                  <h3 class="sidebar-block_title">Deal of the day</h3>
                                  <div class="inside">
                                      <div class="prd-tag"><a href="#">claytan</a></div>
                                      <h2 class="prd-title"><a href="product.html">Flip Flops Easy</a></h2>
                                      <div class="prd-rating"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                      <div class="prd-price">
                                          <div class="price-new">$ 122.00</div>
                                          <div class="price-old">$ 240.00</div>
                                          <div class="price-comment">You save $ 118.00</div>
                                      </div>
                                      <div class="prd-action">
                                          <form action="#"><input type="hidden"> <button class="btn" ><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                          <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="prd-hor prd-has-loader">
                          <h3 class="sidebar-block_title">Top Rated</h3>
                          <div class="prd-inside">
                              <div class="prd-img-area">
                                  <div class="prd-img-wrap"><a href="product.html" class="prd-img"><img src="images/products/product-11.jpg" alt="Leather belt" class="js-prd-img"></a></div>
                                  <ul class="list-options color-swatch prd-hidemobile">
                                      <li data-image="images/products/product-11.jpg"><a href="#" class="js-color-toggle"><img src="images/products/xsmall/product-11.jpg" alt="Color Name"></a></li>
                                      <li data-image="images/products/product-11-2.jpg"><a href="#" class="js-color-toggle"><img src="images/products/xsmall/product-11-2.jpg" alt="Color Name"></a></li>
                                  </ul>
                                  <div class="gdw-loader"></div>
                              </div>
                              <div class="prd-info">
                                  <h3 class="sidebar-block_title">Top Rated</h3>
                                  <div class="inside">
                                      <div class="prd-tag"><a href="#">cabian</a></div>
                                      <h2 class="prd-title"><a href="product.html">Leather belt</a></h2>
                                      <div class="prd-rating"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                      <div class="prd-price">
                                          <div class="price-new">$ 87.00</div>
                                      </div>
                                      <div class="prd-action">
                                          <form action="#"><input type="hidden"> <button class="btn" ><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                          <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}
  <div class="holder fullwidth full-nopad bgcolor py-4">
      <div class="container">
          <h2 class="h1-style text-center">Looks We Like</h2>
          <div class="instagram-carousel">
              <div id="instafeed" class="instagram-feed-full js-instagram-feed" data-instafeed='{"limit": "12", "accessToken": "8136043898.1677ed0.5f6f0f08a4614a9f83fd02618b192be9", "sortBy": "most-recent"}'></div>
              <div class="instagram-carousel-arrows container"></div>
          </div>
          <div class="text-center"><a href="#" class="btn-decor">shop the lookbook</a></div>
      </div>
  </div>
  <div class="holder">
      <div class="container">
          <div class="row vert-margin">
              <div class="col-md-4 col-lg-3">
                  <h2 class="h1-style text-center-sm">Popular Tags</h2>
                  <ul class="tags-list text-center-sm">
                      <li><a href="#">Jeans</a></li>
                      <li><a href="#">St.Valentine’s gift</a></li>
                      <li><a href="#">Sunglasses</a></li>
                      <li><a href="#">Discount</a></li>
                      <li><a href="#">Maxi dress</a></li>
                      <li><a href="#">Underwear</a></li>
                      <li><a href="#">men accessories</a></li>
                      <li><a href="#">hand bags</a></li>
                      <li><a href="#">Jeans</a></li>
                      <li><a href="#">St.Valentine’s gift</a></li>
                      <li><a href="#">Sunglasses</a></li>
                      <li><a href="#">Discount</a></li>
                      <li><a href="#">Maxi dress</a></li>
                      <li><a href="#">Underwear</a></li>
                      <li><a href="#">men accessories</a></li>
                      <li><a href="#">hand bags</a></li>
                      <li><a href="#">Discount</a></li>
                      <li><a href="#">Jeans</a></li>
                  </ul>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-6">
                  <div class="title-with-arrows">
                      <h2 class="h1-style">Our Blog</h2>
                      <div class="carousel-arrows"></div>
                  </div>
                  <div class="post-prws post-prws-carousel" data-slick='{"slidesToShow": 2, "responsive": [{"breakpoint": 1024,"settings": {"slidesToShow": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 1}}]}'>
                      <div class="post-prw"><a href="blog-post.html" class="post-img"><img src="images/blog/blog-placeholder.png" data-src="images/blog/small/blog-img-1.jpg" class="lazyload" alt=""></a>
                          <h4 class="post-title"><a href="#">New brands arrivals</a></h4>
                          <p class="post-teaser">Lorem ipsum dolor amet consest adicpising elitr anno dolor sit.</p>
                          <div class="post-bot">
                              <div class="post-date">13 dec</div><a href="blog-post.html" class="post-link">read more</a>
                              <div class="post-action"><a href="#" class="icon icon-heart-1"></a> <a href="#" class="icon-share"></a></div>
                          </div>
                      </div>
                      <div class="post-prw"><a href="blog-post.html" class="post-img"><img src="images/blog/blog-placeholder.png" data-src="images/blog/small/blog-img-2.jpg" class="lazyload" alt=""></a>
                          <h4 class="post-title"><a href="#">x-mas sale</a></h4>
                          <p class="post-teaser">Lorem ipsum dolor amet consest adicpising elitr anno dolor sit.</p>
                          <div class="post-bot">
                              <div class="post-date">13 dec</div><a href="blog-post.html" class="post-link">read more</a>
                              <div class="post-action"><a href="#" class="icon icon-heart-1"></a> <a href="#" class="icon-share"></a></div>
                          </div>
                      </div>
                      <div class="post-prw"><a href="blog-post.html" class="post-img"><img src="images/blog/blog-placeholder.png" data-src="images/blog/small/blog-img-3.jpg" class="lazyload" alt=""></a>
                          <h4 class="post-title"><a href="#">minim veniam quis nostrud</a></h4>
                          <p class="post-teaser">Lorem ipsum dolor amet consest adicpising elitr anno dolor sit.</p>
                          <div class="post-bot">
                              <div class="post-date">13 dec</div><a href="blog-post.html" class="post-link">read more</a>
                              <div class="post-action"><a href="#" class="icon icon-heart-1"></a> <a href="#" class="icon-share"></a></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="title-with-arrows">
                      <h2 class="h1-style">Promos</h2>
                      <div class="carousel-arrows"></div>
                  </div>
                  <div class="promo-carousel" data-slick='{"responsive": [{"breakpoint": 1200,"settings": {"slidesToShow": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 2}}]}'>
                      <div><a href="#" target="_blank" class="bnr-wrap">
                              <div class="bnr bnr7 bnr--style-5 bnr--center bnr--middle bnr-hover-scale" data-fontratio="2.63"><img src="images/home-fashion/banner-9.jpg" alt=""><span class="bnr-caption" style="display: flex;"><span class="bnr-text-wrap"><span class="bnr-text1"><span><b>30%</b><br>SALE</span></span><span class="bnr-text2">hurry up !</span><span class="bnr-text3">underwear sale<br><b>diesel, Calvin klein, g-star</b></span></span></span></div>
                          </a></div>
                      <div><a href="#" target="_blank" class="bnr-wrap">
                              <div class="bnr bnr8 bnr--style-5 bnr--center bnr--middle bnr-hover-scale" data-fontratio="2.63"><img src="images/home-fashion/banner-10.jpg" alt=""> <span class="bnr-caption"><span class="bnr-text-wrap"><span class="bnr-text2">NEW</span> <span class="bnr-text3">women's accessories<br>popular brands</span> <span class="bnr-text1"><span style="padding:.7em 1em;"><b>20%</b><br>OFF</span></span></span></span></div>
                          </a></div>
                      <div><a href="#" target="_blank" class="bnr-wrap">
                              <div class="bnr bnr9 bnr--style-5 bnr--center bnr--middle bnr-hover-scale" data-fontratio="2.63"><img src="images/home-fashion/banner-11.jpg" alt=""> <span class="bnr-caption"><span class="bnr-text-wrap"><span class="bnr-text2">DISCOUNT</span><span class="bnr-text1"> <span style="padding:.7em 1em;"><b>-20%</b></span></span> <span class="bnr-text3">for<br>men's clothing</span></span></span></div>
                          </a></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="holder">
      <div class="container">
          <h2 class="h1-style text-center">Shop brands</h2>
      
        
      </div>
  </div>
  <div class="holder">
      <div class="container">
         
          <ul class="brand-carousel js-brand-carousel slick-arrows-aside-simple">
            
              @foreach($home_brands as $list)
              
              <li><a href="#"><img src="{{asset('storage/media/brand/'.$list->image)}}" data-src="" class="lazyload" alt="{{$list->name}}"></a></li>
              @endforeach
             
          </ul>
         
          <div class="text-center"><a href="#" class="btn-decor">view all brands</a></div>
      </div>
  </div>
  </div>
  <input type="hidden" id="qty" value="1">
  <form id="frmAddTocard">
    <input type="hidden" id="color_id" name="color_id">
    <input type="hidden" id="size_id" name="size_id">
    <input type="hidden" id="pqty" name="pqty">
    <input type="hidden" id="product_id" name="product_id">
    @csrf
</form>


<form  id="wishlist_form">
    <input type="hidden" id="wishlist_slug" name="wishlist_slug" >
    <input type="hidden" id="wishlist_product_id" name="wishlist_product_id" >
    <input type="hidden" id="wishlist_product_attr_id" name="wishlist_product_attr_id" >

    @csrf
</form>

@endsection


