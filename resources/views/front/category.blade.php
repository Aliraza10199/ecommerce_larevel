
@extends('front/layouts')
@section('page_title','Category')
@section('container')



<div class="page-content">
        <div class="holder mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Category</span></li>
                </ul>
            </div>
        </div>
        <div class="holder mt-0">
            <div class="container">
                <!-- Two columns -->
                <!-- Page Title -->
                <div class="page-title text-center d-none d-lg-block">
                    <div class="title">
                        <h1>{{$slug}}</h1>
                    </div>
                </div>
                <!-- /Page Title -->
                <div class="row">
                    <!-- Left column -->
                    <div class="col-lg-3 aside aside--left fixed-col js-filter-col">
                        <div class="fixed-col_container">
                            <div class="filter-close">CLOSE</div>
                            <div class="sidebar-block sidebar-block--mobile d-block d-lg-none">
                                <div class="d-flex align-items-center">
                                    <div class="selected-label">(6) FILTER</div>
                                    <div class="selected-count ml-auto">SELECTED <span><b>25 items</b></span></div>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block open">
                                <div class="sidebar-block_title"><span>Current Selection</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <div class="selected-filters-wrap">
                                        <ul class="selected-filters">
                                            <li><a href="#">Men</a></li>
                                            <li><a href="#">Red</a></li>
                                            <li><a href="#">Nike</a></li>
                                            <li><a href="#">Above $200</a></li>
                                            <li><a href="#">S</a></li>
                                        </ul>
                                        <div class="d-flex align-items-center"><a href="#" class="clear-filters"><span>Clear All</span></a>
                                            <div class="selected-count ml-auto d-none d-lg-block">SELECTED<span><b>25 items</b></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block collapsed">
                                <div class="sidebar-block_title"><span>Categories</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <ul class="category-list">
                                        @foreach ($categories_left as $cat_left)
                                         @if($slug==$cat_left->category_slug)
                                            <li class=" left_cat_active" ><a class=" " href="{{url('category/'.$cat_left->category_slug)}}">{{$cat_left->category_name}}</a></li>
                                            @else
                                            <li class=""><a href="{{url('category/'.$cat_left->category_slug)}}">{{$cat_left->category_name}}</a></li>

                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block collapsed">
                                <div class="sidebar-block_title"><span>Colors</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                   
                                    <ul class="color-list two-column">
                                        @foreach ($colors as $color)
                                        @if(in_array($color->id,$colorFilterArr))
                                            {{-- <a class="aa-color-{{$color->color}}" href=""></a> --}}
                                            {{-- <li><a href="#" data-tooltip="Pink" title="Pink"><span class="value"><img src="{{asset('frontend/images/products/'.$color->color.'.jpg')}}" alt=""></span><span class="colorname">Pink (125)</span></a></li> --}}
                                            <li><a class=" actives  aa-color-{{strtolower($color->color)}}" href="javascript:void(0)"onclick="setColor('{{$color->id}}','1')"  data-tooltip="{{$color->color}}" title="{{$color->color}}"><span class="value"></span><span class="colorname"></span></a></li>
                                      @else
                                      <li><a class="aa-color-{{strtolower($color->color)}}" href="javascript:void(0)"onclick="setColor('{{$color->id}}','0')"  data-tooltip="{{$color->color}}" title="{{$color->color}}"><span class="value"></span><span class="colorname"></span></a></li>
                                        @endif
                                            @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block collapsed">
                                <div class="sidebar-block_title"><span>Brands</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <ul class="category-list">
                                        <li><a href="#">Adidas</a></li>
                                        <li><a href="#">Nike</a></li>
                                        <li class="active"><a href="#">Reebok</a></li>
                                        <li><a href="#">Ralph Lauren</a></li>
                                        <li><a href="#">Delpozo</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block collapsed">
                                <div class="sidebar-block_title"><span>Price</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content" >
                                    <ul class="category-list " id="sort_by_price">
                                        <li><a  href="javascript:void(0)">6000</a></li>
                                        <li class="active"><a  href="javascript:void(0)">650</a></li>
                                        <li><a   href="javascript:void(0)">450</a></li>
                                        {{-- <li  onclick="pricebtn()">Under $100</li>
                                        <li>Under $200</li>
                                        <li>Under $300</li> --}}
                                    </ul>
                                </div>
                            </div>
                          
                            <div class="sidebar-block filter-group-block collapsed">
                                <div class="sidebar-block_title"><span>Size</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <ul class="size-list" data-sort='["XXS","XS","S","M","L","XL","XXL","XXXL"]'>
                                        <li data-value="L" class="active"><a href="#">L</a></li>
                                        <li data-value="XL"><a href="#">XL</a></li>
                                        <li data-value="XXS"><a href="#">XXS</a></li>
                                        <li data-value="XS"><a href="#">XS</a></li>
                                        <li data-value="S"><a href="#">S</a></li>
                                        <li data-value="XXL"><a href="#">XXL</a></li>
                                        <li data-value="XXXL"><a href="#">XXXL</a></li>
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <!-- /Left column -->
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
                                            <div class="select-wrapper-sm d-none d-lg-inline-block"><select class="form-control input-sm" name="" onchange="sort_by()"  id="sort_by_value">
                                                    <option value="featured">Featured</option>
                                                    <option value="rating">Rating</option>
                                                    <option value="price_desc">Price - Desc</option>
                                                    <option value="price_asc">Price - Asc</option>
                                                    <option value="name">Name</option>
                                                </select></div>
                                            <div class="select-directions d-none d-lg-inline"><span><i class="icon icon-arrow-down"></i></span> <span><i class="icon icon-arrow-up"></i></span></div>
                                            <div class="dropdown d-flex d-lg-none align-items-center justify-content-center"><span class="select-label">Sort By</span>
                                                <div class="select-wrapper-sm"><select class="form-control input-sm">
                                                        <option value="featured">Featured</option>
                                                        <option value="rating">Rating</option>
                                                        <option value="price_desc">Price - Desc</option>
                                                    <option value="price_asc">Price - Asc</option>
                                                    <option value="name">Name</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                        {{$sort_text}}
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
                            @if(isset($product[0]))
                                        @foreach($product as $list)
                                        
                                        <div class="prd prd-has-loader prd-new prd-popular">
                                        
                                            <div class="prd-inside">
                                                <div class="prd-img-area"><a href="{{url('product/')}}/{{$list->slug}}" class="prd-img"><img src="{{asset('storage/media/'.$list->image)}}" data-srcset="" alt="{{$list->name}}" class="js-prd-img lazyload"></a>
                                                    <div class="label-new">NEW</div><a href="javascript:void(0)" onclick="wishlist_manage('{{$list->slug}}','{{$list->id}}','{{$product_attr[$list->id][0]->id}}')" class="label-wishlist icon-heart js-label-wishlist"></a>
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
                                                        <div class="price-new">$ {{$product_attr[$list->id][0]->price}}</div>
                                                    </div>
                                                    <div class="prd-hover">
                                                        <div class="prd-action">
                                                            <form action="javascript:void(0)"><input type="hidden"> <button class="btn" 
                                                                onclick="home_add_to_card('{{$list->id}}','{{$product_attr[$list->id][0]->color}}','{{$product_attr[$list->id][0]->size}}','{{$product_attr[$list->id][0]->price}}')" ><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
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


  <form id="categoryfilter">
    <input type="hidden" id="sort" name="sort" value="{{$sort}}">
    <input type="hidden" id="filter_price" name="filter_price" value="{{$filter_price}}">
    <input type="hidden" id="color_filter" name="color_filter" value="{{$color_filter}}">
</form>
<form  id="wishlist_form">
    <input type="hidden" id="wishlist_slug" name="wishlist_slug" >
    <input type="hidden" id="wishlist_product_id" name="wishlist_product_id" >
    <input type="hidden" id="wishlist_product_attr_id" name="wishlist_product_attr_id" >

    @csrf
</form>


@endsection 