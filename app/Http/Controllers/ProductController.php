<?php

namespace App\Http\Controllers;
 
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //Fetching all data from database 
     public function index()
     {
        $result['data']=Product::all();
         return view('adminpanal.product',$result);
     }
 
     
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
 
 
      //for editING category function get id from url and use it
      public function manage_product( Request $request ,$id='')
      {
        
          if($id>0)
          {
              $arr=Product::where(['id'=>$id])->get();
 
              $result['category']=$arr['0']->category;
              $result['name']=$arr['0']->name;
              $result['image']=$arr['0']->image;
              $result['slug']=$arr['0']->slug;
              $result['brand']=$arr['0']->brand;
              $result['model']=$arr['0']->model;
              $result['shot_desc']=$arr['0']->shot_desc;
              $result['desc']=$arr['0']->desc;
              $result['keywords']=$arr['0']->keywords;
              $result['technical_specification']=$arr['0']->technical_specification;
              $result['uses']=$arr['0']->uses;
              $result['waranty']=$arr['0']->waranty;
              $result['status']=$arr['0']->status;
              //varible for ID 
              $result['id']=$arr['0']->id;
             //  $result['data']['category_slug']=$arr['0']->category_slug;
            

             /*it use for product attribute and products table ID by using get data if produt table id == productatt table id then fecht prodts_ attr table all data
             to $result table its use when user edit (update) data tehn all data appear on frontend*/ 
             $result['productAttrArr']=DB::table('products_attr')->where(['products_id'=>$id])->get(); 
            //   echo '<pre>';
            //  print_r( $result);
            //  die();


            $productImagesArr=DB::table('products_images')->where(['products_id'=>$id])->get(); 
            

            if(!isset($productImagesArr[0]))
            {
               
                $result['productImagesArr']['0']['id']='';
                $result['productImagesArr']['0']['images']='';
            }else{
                $result['productImagesArr']= $productImagesArr;
              
            }
            //  echo '<pre>';
            // print_r($productImagesArr[0]);
            // die();

  
          }else{
            
            $result['category']='';
            $result['name']='';
            $result['image']='';
            $result['slug']='';
            $result['brand']='';
            $result['model']='';
            $result['shot_desc']='';
            $result['desc']='';
            $result['keywords']='';
            $result['technical_specification']='';
            $result['uses']='';
            $result['waranty']='';
            $result['status']='';
            $result['id']=0;

           
           
            $result['productAttrArr'][0]['id']='';
             /* it use when user just add new data then in frontend input fields data will be empty shown*/
           

             $result['productAttrArr'][0]['product_id']='';
              $result['productAttrArr'][0]['sku']='';
              $result['productAttrArr'][0]['image_attr']='';
              $result['productAttrArr'][0]['mrp']='';
              $result['productAttrArr'][0]['price']='';
              $result['productAttrArr'][0]['qty']='';
              $result['productAttrArr'][0]['size_id']='';
              $result['productAttrArr'][0]['color_id']='';
              
              
              
              
              $result['productImagesArr']['0']['images']='';
              $result['productImagesArr']['0']['id']='';
             
  
          }
        //   echo '<pre>';
        //     print_r($result);
        //     die();
            
    
         

         $result['categorylist']=DB::table('categories')->where(['status'=>1])->get(); 
         $result['sizes']=DB::table('sizes')->where(['status'=>1])->get(); 
         $result['colors']=DB::table('colors')->where(['status'=>1])->get(); 
         $result['brands']=DB::table('brands')->where(['status'=>1])->get(); 
        //   echo '<pre>';
        //   print_r($result['categorylist']);
        //   die();
  
          return view('adminpanal.manage_product',$result);
      }
 
 
 
  // data insert data update or redirect all works here
      //validation slug uniqe before inserting data to table 
     public function manage_product_process(Request $request)
     {
        // return $request->post();
        // echo '<pre>';
        // print_r( $request->post());
        // die();

     //for image validation condition on edit and on new img uploading required or not
        if($request->post('id')>0){
           $image_validation="mimes:jpeg,jpg,png";
        }else{
            $image_validation="required|mimes:jpeg,jpg,png";
        }

     


        
        $request->validate([
        //mimes use for user jsst ipload img jpg file not other thingS
        'name'=>'required',
        'image'=>$image_validation,
         'slug'=>'required|unique:products,slug,'.$request->post('id'),

         'image_attr.*'=>'mimes:jpeg,jpg,png',
         
         
         'images.*'=>'mimes:jpeg,jpg,png'
        ]);

        $paidArr=$request->post('paid');

        $skuArr=$request->post('sku');
        // print_r(  $skuArr);
        // die();
        $mrpArr=$request->post('mrp');
        $priceArr=$request->post('price');
        $qtyArr=$request->post('qty');
        $size_idArr=$request->post('size');
        $color_idArr=$request->post('color');
     
       
        foreach( $skuArr as $key=>$val)
        {
             $check=DB::table('products_attr')->where('sku','=',$skuArr[$key])->where('id','!=',$paidArr[$key])->get();
             
             
             if(isset($check[0])){
                $request->session()->flash('sku_error',$skuArr[$key]. ' SKU already used');
                return redirect(request()->headers->get('referer'));
             }
        }
       
 
 
       
         //id use for edit product by submit in database    
        if($request->post('id')>0){
            $model=Product::find($request->post('id'));
            $msg='Product updated';
        }else{
            $model=new Product(); 
            $msg='Product inserted';
        }

            
        //for upload image code
        if($request->hasfile('image')){
            $image=$request->file('image');
            //seprate img extention
            $ext=$image->extension();
            //make img name $ concatinate with extension
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media',$image_name);
            $model->image=$image_name;
        }
 

       
 
 
   
        $model->category=$request->post('category');
        $model->name=$request->post('name');
        // $model->image=$request->post('image');
        $model->slug=$request->post('slug');
        $model->brand=$request->post('brand');
        $model->model=$request->post('model');
        $model->shot_desc=$request->post('shot_desc');
        $model->desc=$request->post('desc');
        $model->keywords=$request->post('keywords');
        $model->technical_specification=$request->post('technical_specification');
        $model->uses=$request->post('uses');
        $model->waranty=$request->post('waranty');
   
      
        $model->status=1;
        $model->save();
        //fetch id of product table and it is use in product attribute table
        $pid=$model->id; 


        // data insert data update or redirect all works here
        //loop use and varible bcz here we inserted multiple data or array 
      
    /*Product attr start*/
        // $paidArr=$request->post('paid');

        // $skuArr=$request->post('sku');
        // print_r(  $skuArr);
        // die();
        // $mrpArr=$request->post('mrp');
        // $priceArr=$request->post('price');
        // $qtyArr=$request->post('qty');
        // $size_idArr=$request->post('size');
        // $color_idArr=$request->post('color');
     
       
        foreach( $skuArr as $key=>$val)
        {
            
        // // makes an array productAttrArr and one by one insert all info into it array
            $productAttrArr['products_id']=$pid;
            $productAttrArr['sku']= $skuArr[$key];
            // $productAttrArr['image_attr']='test';
            $productAttrArr['mrp']= (int)$mrpArr[$key];
            $productAttrArr['price']= (int)$priceArr[$key];
            $productAttrArr['qty']= (int)$qtyArr[$key];
            // $productAttrArr['size_id']= $size_idArr[$key];
            // $productAttrArr['color_id']= $color_idArr[$key];



            if($size_idArr[$key]=='')
            {
                $productAttrArr['size_id']=0;
            }
            else{
                $productAttrArr['size_id']= $size_idArr[$key];
            }
            if($color_idArr[$key]=='')
            {
                $productAttrArr['color_id']= 0;
            }
            else{
                $productAttrArr['color_id']= $color_idArr[$key];
            }


            //for image in attribute uploading
            if($request->hasFile("image_attr.$key"))
            {
                $rand=rand('111111111','999999999');
                $image_attr=$request->file("image_attr.$key");
                //seprate img extention
                $ext=$image_attr->extension();
                //make img name $ concatinate with extension
                $image_name=$rand.'.'.$ext;
                $request->file("image_attr.$key")->storeAs('/public/media',$image_name);
                $productAttrArr['image_attr']=$image_name;
            }
            else{
                $productAttrArr['image_attr']='';
            }



     
          
            if($paidArr[$key]!=''){
                DB::table('products_attr')->where(['id'=>$paidArr[$key]])->update($productAttrArr);
            }else
            {
                DB::table('products_attr')->insert($productAttrArr);
            }
            
           
        }

        /*Product attr sEnd*/
       
       
        /*Product images Start*/
        $piidArr=$request->post('piid');
        foreach( $piidArr as $key=>$val)
        {
            $productImagesArr['products_id']=$pid;

            if($request->hasFile("images.$key"))
            {
                $rand=rand('111111111','999999999');
                $images=$request->file("images.$key");
                //seprate img extention
                $ext=$images->extension();
                //make img name $ concatinate with extension
                $image_name=$rand.'.'.$ext;
                $request->file("images.$key")->storeAs('/public/media',$image_name);
                $productImagesArr['images']=$image_name;

                if($piidArr[$key]!='')
                {
                    DB::table('products_images')->where(['id'=>$piidArr[$key]])->update($productImagesArr);
                }else
                {
                    DB::table('products_images')->insert($productImagesArr);
                }
    
            }
           
            
          

        }
        
        /*Product images END*/
        
 
        $request->session()->flash('message',$msg);
        return redirect('admin/product');
     }



     
 
     //function for delte product
     //we use get if specific data we want to fetch
     public function delete(Request $request, $id)
     {
        
         // echo $id;
         $model=Product::find($id);
         $model->delete();
 
         $request->session()->flash('message','Product Deleted');
         return redirect('admin/product');
     }
   
     //function for delte product attribute
     //we use get if specific data we want to fetch
     public function product_attr_delete(Request $request, $paid, $pid)
     {
        
        DB::table('products_attr')->where(['id'=>$paid])->delete();
        //  $request->session()->flash('message','Product attribute Deleted');
         return redirect('admin/product/manage_product/'.$pid);
     }



     
   
     //function for delte product multiple images attribute
     //we use get if specific data we want to fetch
     public function product_images_delete(Request $request, $paid, $pid)
     {
        
        DB::table('products_images')->where(['id'=>$paid])->delete();
        //  $request->session()->flash('message','Product attribute Deleted');
         return redirect('admin/product/manage_product/'.$pid);
     }
   



     //function for status deactive or active in category
     //we use get if specific data we want to fetch
     public function status(Request $request,$status,$id)
     {
        
         // echo $id;
         // echo $status;
         $model=Product::find($id);
         $model->status=$status;
         $model->save();
 
         $request->session()->flash('message','Status updated');
         return redirect('admin/product');
     }
 
 
 
 
 
 
 
 
 
 
 
 
}
