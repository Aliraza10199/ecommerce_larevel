<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //Fetching all data from database 
     public function index()
     {
        $result['data']=Brand::all();
         return view('adminpanal.brand',$result);
     }
 
     
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
 
 
      //for edit category function get id from url and use it
      public function manage_brand( Request $request ,$id='')
      {
        
          if($id>0)
          {
              $arr=Brand::where(['id'=>$id])->get();
 
              $result['name']=$arr['0']->name;
              $result['image']=$arr['0']->image;
              $result['status']=$arr['0']->status;
              //varible for ID 
              $result['id']=$arr['0']->id;
             //  $result['data']['category_slug']=$arr['0']->category_slug;
  
  
          }else{
            
            $result['name']='';
            $result['image']='';
            $result['status']='';
              $result['id']=0;
  
  
          }
         //  echo '<pre>';
         //  print_r($result['data']);
         //  die();
  
          return view('adminpanal.manage_brand',$result);
      }
 
 
 
 
      //validation slug uniqe before inserting data to table 
     public function manage_brand_process(Request $request)
     {

        
        // return $request->post();
        
        $request->validate([
            //mimes use for user jsst ipload img jpg file not other thingS
            'name'=>'required|unique:brands,name,'.$request->post('id'),
            'name'=>'required',
            'image'=>'mimes:jpeg,jpg,png'
             
            ]);
 
 
       
         //id use for edit brand by submit in database    
        if($request->post('id')>0){
            $model=Brand::find($request->post('id'));
            $msg='Brand updated';
        }else{
            $model=new Brand(); 
            $msg='Brand inserted';
        }

          //for upload image code
          if($request->hasfile('image')){
            $image=$request->file('image');
            //seprate img extention
            $ext=$image->extension();
            //make img name $ concatinate with extension
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/brand',$image_name);
            $model->image=$image_name;
        }
 
 
   
        $model->name=$request->post('name');
        $model->status=1;
        $model->save();
 
        $request->session()->flash('message',$msg);
        return redirect('admin/brand');
     }
 
     //function for delte brand
     //we use get if specific data we want to fetch
     public function delete(Request $request, $id)
     {
        
         // echo $id;
         $model=Brand::find($id);
         $model->delete();
 
         $request->session()->flash('message','Brand Deleted');
         return redirect('admin/brand');
     }
   
     //function for status deactive or active in brand
     //we use get if specific data we want to fetch
     public function status(Request $request,$status,$id)
     {
        
         // echo $id;
         // echo $status;
         $model=Brand::find($id);
         $model->status=$status;
         $model->save();
 
         $request->session()->flash('message','Status updated');
         return redirect('admin/brand');
     }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         //
     }
 
     /**
      * Display the specified resource.
      *
      * @param  \App\Models\category  $category
      * @return \Illuminate\Http\Response
      */
     public function show(category $category)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\category  $category
      * @return \Illuminate\Http\Response
      */
     public function edit(category $category)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\category  $category
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, category $category)
     {
         //
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\category  $category
      * @return \Illuminate\Http\Response
      */
     public function destroy(category $category)
     {
         //
     }
 
 
}
