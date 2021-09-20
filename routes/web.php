<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeBannerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Front\JazzCheckoutController;


use App\Http\Controllers\Front\FrontController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





// Route::get('/checkoutjazz/{product_id}',[JazzCheckoutController::class,'index']);
// Route::post('/checkoutjazz',[JazzCheckoutController::class,'DoCheckout']);








// Route::get('/', function () {
//     return view('adminpanal.demo');
// });


Route::get('/',[FrontController::class,'index']);

Route::get('category/{id}',[FrontController::class,'category']);

Route::get('product/{id}',[FrontController::class,'product']);

Route::post('add_to_card',[FrontController::class,'add_to_card']);


Route::get('/view_card',[FrontController::class,'view_card']);

Route::get('search/{str}',[FrontController::class,'search']);

Route::get('regestration',[FrontController::class,'regestration']);
//customer data in databse using ajex post
Route::post('regestration_process',[FrontController::class,'regestration_process'])->name('regestration.regestration_process');

Route::get('login_user',[FrontController::class,'login_user']);

Route::post('login_process',[FrontController::class,'login_process'])->name('login_user.login_process');
//for logout user session end 
Route::get('logout',function(){
        
    session()->forget('FRONT_USER_LOGIN');
    session()->forget('FRONT_USER_ID');
    session()->forget('FRONT_USER_NAME');
    session()->forget('USER_TEMP_ID');
    return redirect('/');

});
Route::get('/verification/{id}',[FrontController::class,'email_verification']);

Route::post('forgot_password',[FrontController::class,'forgot_password']);

Route::get('/forgot_password_change/{id}',[FrontController::class,'forgot_password_change']);

Route::post('forgot_password_change_process',[FrontController::class,'forgot_password_change_process']);

Route::get('/checkout',[FrontController::class,'checkout']);

// Route::post('/checkout_manage',[FrontController::class,'checkout_manage'])->name('front.checkout_manage');
Route::post('apply_coupon_code',[FrontController::class,'apply_coupon_code']);

Route::post('remove_coupon_code',[FrontController::class,'remove_coupon_code']);

Route::post('place_order',[FrontController::class,'place_order']);

Route::get('/order_placed',[FrontController::class,'order_placed']);
Route::get('/jazzcash_payment',[FrontController::class,'jazzcash_payment']);

// jazzcashh_payments method routes`
Route::get('/do_checkout_v',[FrontController::class,'do_checkout_v']);
Route::post('/paymentStatus',[FrontController::class,'paymentStatus']);


Route::post('/product_review_process',[FrontController::class,'reviews_product']);

// NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
Route::group(['middleware'=>'user_auth'],function(){
            
        Route::get('/account_detail',[FrontController::class,'account_detail']);
        Route::post('/account_detail_update',[FrontController::class,'account_detail_update']);

        Route::get('/order_history',[FrontController::class,'order_history']);
        Route::get('/order_detail/{id}',[FrontController::class,'order_detail']);


        Route::get('/my_wishlist',[FrontController::class,'my_wishlist']);
        Route::post('/wishlist_manage_ajax',[FrontController::class,'wishlist_manage_ajax']);

       



});
// NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

Route::get('/contact_us',[FrontController::class,'contact_us']);
Route::get('/faq',[FrontController::class,'faq']);
Route::post('/wish_list_page',[FrontController::class,'wish_list_page']);
Route::get('/about_us',[FrontController::class,'about_us']);
Route::get('/all_products',[FrontController::class,'all_products']);
Route::post('/ajex_related_pop_route',[FrontController::class,'ajex_related_pop_route']);

Route::post('/wishlist_manage_ajax',[FrontController::class,'wishlist_manage_ajax']);
Route::post('/wishlist_delete_product_ajax',[FrontController::class,'wishlist_delete_product_ajax']);



//route of admin login page
Route::get('admin',[AdminController::class,'index']);
// authantication for login
Route::post('admin/auth',[AdminController::class,'auth'])->name('adminpanal.auth');







// NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
//just login admin have acces of dashboad and catagory pages otherwise redirect to login page
Route::group(['middleware'=>'admin_auth'],function(){
    
    Route::get('admin/dashboard',[AdminController::class,'dashboard']);

    //for category routes 
    Route::get('admin/category',[CategoryController::class,'index']);
    Route::get('admin/category/manage_category',[CategoryController::class,'manage_category']);
    // Route::get('admin/updatepassword',[AdminController::class,'updatepassword']);
  
    //for edit category
    Route::get('admin/category/manage_category/{id}',[CategoryController::class,'manage_category']);
    
    //for insert submit catagory data into database and redirect to catagory 
    Route::post('admin/category/manage_category_process',[CategoryController::class,'manage_category_process'])->name('category.maanage_category_process');
    
    //route to delete from ID dattabse to category
    Route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);
  
    //route to status active deactive from 0/1 dattabse to category
    Route::get('admin/category/status/{status}/{id}',[CategoryController::class,'status']);

//For Coupon routes
    Route::get('admin/coupon',[CouponController::class,'index']);
    Route::get('admin/coupon/manage_coupon',[CouponController::class,'manage_coupon']);
  
    //for edit coupon
    Route::get('admin/coupon/manage_coupon/{id}',[CouponController::class,'manage_coupon']);
    
    //for insert submit coupon data into database and redirect to coupon 
    Route::post('admin/coupon/manage_coupon_process',[CouponController::class,'manage_coupon_process'])->name('coupon.maanage_coupon_process');
    
    //route to delete from ID dattabse to coupon
    Route::get('admin/coupon/delete/{id}',[CouponController::class,'delete']);

    //route to status active deactive from 0/1 dattabse to coupon
    Route::get('admin/coupon/status/{status}/{id}',[CouponController::class,'status']);

//For Size routes
    Route::get('admin/size',[SizeController::class,'index']);
    Route::get('admin/size/manage_size',[SizeController::class,'manage_size']);
  
    //for edit size
    Route::get('admin/size/manage_size/{id}',[SizeController::class,'manage_size']);
    
    //for insert submit coupon data into database and redirect to size 
    Route::post('admin/size/manage_size_process',[SizeController::class,'manage_size_process'])->name('size.maanage_size_process');
    
    //route to delete from ID dattabse to size
    Route::get('admin/size/delete/{id}',[SizeController::class,'delete']);

    //route to status active deactive from 0/1 dattabse to size
    Route::get('admin/size/status/{status}/{id}',[SizeController::class,'status']);

//For Color routes
    Route::get('admin/color',[ColorController::class,'index']);
    Route::get('admin/color/manage_color',[ColorController::class,'manage_color']);
  
    //for edit color
    Route::get('admin/color/manage_color/{id}',[ColorController::class,'manage_color']);
    
    //for insert submit coupon data into database and redirect to color 
    Route::post('admin/color/manage_color_process',[ColorController::class,'manage_color_process'])->name('color.maanage_color_process');
    
    //route to delete from ID dattabse to size
    Route::get('admin/color/delete/{id}',[ColorController::class,'delete']);

    //route to status active deactive from 0/1 dattabse to color
    Route::get('admin/color/status/{status}/{id}',[ColorController::class,'status']);

//For Product routes
    Route::get('admin/product',[ProductController::class,'index']);
    Route::get('admin/product/manage_product',[ProductController::class,'manage_product']);
  
    //for edit product
    Route::get('admin/product/manage_product/{id}',[ProductController::class,'manage_product']);
    
    //for insert submit coupon data into database and redirect to product 
    Route::post('admin/product/manage_product_product',[ProductController::class,'manage_product_process'])->name('product.maanage_product_process');
    
    //route to delete from ID dattabse to size
    Route::get('admin/product/delete/{id}',[ProductController::class,'delete']);

    //route to status active deactive from 0/1 dattabse to product
    Route::get('admin/product/status/{status}/{id}',[ProductController::class,'status']);


//for product attribute delete route
 
    //route to delete from ID dattabse to remove bubbon 
    Route::get('admin/product/product_attr_delete/{paid}/{pid}',[ProductController::class,'product_attr_delete']);

 //for images multiple delete remove
    //route to delete from ID dattabse to remove bubbon 
    Route::get('admin/product/product_images_delete/{paid}/{pid}',[ProductController::class,'product_images_delete']);




//For Brand routes
    Route::get('admin/brand',[BrandController::class,'index']);
    Route::get('admin/brand/manage_brand',[BrandController::class,'manage_brand']);

    //for edit brand
    Route::get('admin/brand/manage_brand/{id}',[BrandController::class,'manage_brand']);

    //for insert submit coupon data into database and redirect to brand 
    Route::post('admin/brand/manage_brand_process',[BrandController::class,'manage_brand_process'])->name('brand.maanage_brand_process');

    //route to delete from ID dattabse to size
    Route::get('admin/brand/delete/{id}',[BrandController::class,'delete']);

    //route to status active deactive from 0/1 dattabse to brand
    Route::get('admin/brand/status/{status}/{id}',[BrandController::class,'status']);

//For customer routes
    Route::get('admin/customer',[CustomerController::class,'index']);
    Route::get('admin/customer/manage_customer',[CustomerController::class,'manage_customer']);

    //for edit customer
    Route::get('admin/customer/show/{id}',[CustomerController::class,'show']);

    
    //route to delete from ID dattabse to size
    Route::get('admin/customer/delete/{id}',[CustomerController::class,'delete']);

    //route to status active deactive from 0/1 dattabse to customer
    Route::get('admin/customer/status/{status}/{id}',[CustomerController::class,'status']);


    //For Tax routes
    Route::get('admin/tax',[TaxController::class,'index']);
    Route::get('admin/tax/manage_tax',[TaxController::class,'manage_tax']);

    //for edit tax
    Route::get('admin/tax/manage_tax/{id}',[TaxController::class,'manage_tax']);

    //for insert submit coupon data into database and redirect to cotaxlor 
    Route::post('admin/tax/manage_tax_process',[TaxController::class,'manage_tax_process'])->name('tax.maanage_tax_process');

    //route to delete from ID dattabse to size
    Route::get('admin/tax/delete/{id}',[TaxController::class,'delete']);

    //route to status active deactive from 0/1 dattabse to tax
    Route::get('admin/tax/status/{status}/{id}',[TaxController::class,'status']);


    //For home_banner routes
    Route::get('admin/home_banner',[HomeBannerController::class,'index']);
    Route::get('admin/home_banner/manage_home_banner',[HomeBannerController::class,'manage_home_banner']);

    //for edit home_banner
    Route::get('admin/home_banner/manage_home_banner/{id}',[HomeBannerController::class,'manage_home_banner']);

    //for insert submit coupon data into database and redirect to home_banner 
    Route::post('admin/home_banner/manage_home_banner_process',[HomeBannerController::class,'manage_home_banner_process'])->name('home_banner.maanage_home_banner_process');

    //route to delete from ID dattabse to size
    Route::get('admin/home_banner/delete/{id}',[HomeBannerController::class,'delete']);

    //route to status active deactive from 0/1 dattabse to home_banner
    Route::get('admin/home_banner/status/{status}/{id}',[HomeBannerController::class,'status']);



    //route for order
    Route::get('admin/order',[OrderController::class,'index']);
    Route::get('admin/order_detail/{id}',[OrderController::class,'order_detail']);
    Route::get('admin/update_payment_status/{status}/{id}',[OrderController::class,'update_payment_status']);
    Route::get('admin/update_order_status/{status}/{id}',[OrderController::class,'update_order_status']);
    Route::post('admin/order_detail/{id}',[OrderController::class,'update_track_detail']);




//for logout admin session end 
    Route::get('admin/logout',function(){
        
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('error','logout Sucessfully');
        return redirect('admin');

    });
    

});



