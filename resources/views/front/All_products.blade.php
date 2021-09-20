
@extends('front/layouts')
@section('page_title','All Products')
@section('container')


<div class="page-content">
    <div class="holder mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li><span>Recommended products</span></li>
            </ul>
        </div>
    </div>
    <div class="holder mt-0">
        <div class="container">
            <!-- Two columns -->
            <!-- Page Title -->
            <div class="page-title text-center">
                <div class="title">
                    <h1>All Products</h1>
                </div>
            </div>
            <!-- /Page Title -->
            <div class="row row-flex">
                <!-- Center column -->
                <div class="col-lg aside">
                    <div class="prd-grid-wrap">
                        <!-- Filter Row -->
                        <div class="filter-row invisible">
                            <div class="row row-1 d-lg-none align-items-center">
                                <div class="col">
                                    <h1 class="category-title">WOMEN’S</h1>
                                </div>
                                <div class="col-auto ml-auto">
                                    <div class="view-in-row d-md-none"><span data-view="data-to-show-sm-1"><i class="icon icon-view-1"></i></span> <span data-view="data-to-show-sm-2"><i class="icon icon-view-2"></i></span></div>
                                    <div class="view-in-row d-none d-md-inline"><span data-view="data-to-show-md-2"><i class="icon icon-view-2"></i></span> <span data-view="data-to-show-md-3"><i class="icon icon-view-3"></i></span></div>
                                </div>
                            </div>
                            <div class="row row-2">
                                <div class="col-left d-flex align-items-center">
                                    <div class="sort-by-holder">
                                        <div class="select-label d-none d-lg-inline">Sort by:</div>
                                        <div class="select-wrapper-sm d-none d-lg-inline-block"><select class="form-control input-sm">
                                                <option value="featured">Featured</option>
                                                <option value="rating">Rating</option>
                                                <option value="price">Price</option>
                                            </select></div>
                                        <div class="select-directions d-none d-lg-inline"><span><i class="icon icon-arrow-down"></i></span> <span><i class="icon icon-arrow-up"></i></span></div>
                                        <div class="dropdown d-flex d-lg-none align-items-center justify-content-center"><span class="select-label">Sort By</span>
                                            <div class="select-wrapper-sm"><select class="form-control input-sm">
                                                    <option value="featured">Featured</option>
                                                    <option value="rating">Rating</option>
                                                    <option value="price">Price</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="filter-button d-lg-none"><a href="#" class="fixed-col-toggle">FILTER</a></div>
                                </div>
                                <div class="col col-center d-none d-lg-flex align-items-center justify-content-center">
                                    <div class="view-label">View:</div>
                                    <div class="view-in-row"><span data-view="data-to-show-3"><i class="icon icon-view-3"></i></span> <span data-view="data-to-show-4"><i class="icon icon-view-4"></i></span></div>
                                </div>
                                <div class="col-right ml-auto d-none d-lg-flex align-items-center">
                                    <div class="items-count">35 item(s)</div>
                                    <div class="show-count-holder">
                                        <div class="select-label">Show:</div>
                                        <div class="select-wrapper-sm"><select class="form-control input-sm">
                                                <option value="featured">12</option>
                                                <option value="rating">36</option>
                                                <option value="price">100</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Filter Row -->
                        <!-- Products Grid -->



                        <div class="prd-grid product-listing data-to-show-3 data-to-show-md-3 data-to-show-sm-2 js-category-grid">

                    @if(isset($home_products[0]))
                    @foreach($home_products as $list)

                            <div class="prd prd-has-loader prd-new prd-popular">
                                <div class="prd-inside">
                                    <div class="prd-img-area"><a href="{{url('product/')}}/{{$list->slug}}" class="prd-img"><img src="{{asset('storage/media/'.$list->image)}}" class="prd-img"><img src="{{asset('storage/media/'.$list->image)}}" data-srcset="{{asset('storage/media/'.$list->image)}}" alt="{{$list->name}}" class="js-prd-img lazyload"></a>
                                        <div class="label-new">NEW</div><a href="javascript:void(0)" onclick="wishlist_manage('{{$list->slug}}','{{$list->id}}','{{$home_product_attr[$list->id][0]->id}}')" class="label-wishlist icon-heart js-label-wishlist"></a>
                                        <ul class="list-options color-swatch prd-hidemobile">
                                            {{-- <li data-image="images/products/product-01.jpg"><a href="#" class="js-color-toggle"><img src="images/products/product-placeholder.png" data-srcset="images/products/xsmall/product-01.jpg" class="lazyload" alt="Color Name"></a></li> --}}
                                            {{-- <li data-image="images/products/product-01-2.jpg"><a href="#" class="js-color-toggle"><img src="images/products/product-placeholder.png" data-srcset="images/products/xsmall/product-01-2.jpg" class="lazyload" alt="Color Name"></a></li> --}}
                                        </ul>
                                        <div class="gdw-loader"></div>
                                    </div>
                                    <div class="prd-info">
                                        {{-- <div class="prd-tag prd-hidemobile"><a href="#">under armor</a></div> --}}
                                        <h2 class="prd-title"><a href="product.html">{{$list->name}}</a></h2>
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
                        <div class="loader-wrap">
                            <div class="dots">
                                <div class="dot one"></div>
                                <div class="dot two"></div>
                                <div class="dot three"></div>
                            </div>
                        </div>
                        <!-- /Products Grid -->
                        <div class="show-more d-flex mt-4 mt-md-6 justify-content-center align-items-start"><a href="#" class="btn btn--alt js-product-show-more" data-load="ajax-products-load.html">show more</a>
                            <ul class="pagination mt-0">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Center column -->
            </div>
            <!-- /Two columns -->
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