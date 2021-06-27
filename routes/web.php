<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
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

Route::get('/', function () {
    return view('adminpanal.demo');
});

//route of admin login page
Route::get('admin',[AdminController::class,'index']);
// authantication for login
Route::post('admin/auth',[AdminController::class,'auth'])->name('adminpanal.auth');



//just login admin have acces of dashboad and catagory pages otherwise redirect to login page
Route::group(['middleware'=>'admin_auth'],function(){
    
    Route::get('admin/dashboard',[AdminController::class,'dashboard']);

    //for category routes 
    Route::get('admin/category',[CategoryController::class,'index']);
    Route::get('admin/category/manage_category',[CategoryController::class,'manage_category']);
  
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





//for logout admin session end 
    Route::get('admin/logout',function(){
        
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('error','logout Sucessfully');
        return redirect('admin');

    });
    

});



