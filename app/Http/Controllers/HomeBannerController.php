<?php

namespace App\Http\Controllers;

use App\Models\HomeBanner;
use Illuminate\Http\Request;

use Storage;

class HomeBannerController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //Fetching all data from database 
     public function index()
     {
        $result['data']=HomeBanner::all();
         return view('adminpanal.home_banner',$result);
     }
 
     
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
 
 
      //for edit category function get id from url and use it
      public function manage_home_banner( Request $request ,$id='')
      {
        
          if($id>0)
          {
              $arr=HomeBanner::where(['id'=>$id])->get();
 
              $result['image']=$arr['0']->image;
              $result['btn_txt']=$arr['0']->btn_txt;
              $result['btn_link']=$arr['0']->btn_link;
            
             
              //varible for ID 
              $result['id']=$arr['0']->id;
             //  $result['data']['category_slug']=$arr['0']->category_slug;
            //  $result['categorylist']=DB::table('home_banners')->where(['status'=>1])->where('id','!=',$id)->get(); 
 
  
          }else{
              $result['image']='';
              $result['btn_txt']='';
              $result['btn_link']='';

              $result['id']=0; 
          }
         //  echo '<pre>';
         //  print_r($result['data']);
         //  die();
          return view('adminpanal.manage_home_banner',$result);
      }
 
 
 
 
      //validation slug uniqe before inserting data to table 
     public function manage_home_banner_process(Request $request)
     {
        // return $request->post();
        
        $request->validate([
 
       
         'image'=>'required|mimes:jpeg,jpg,png',
         
        ]);
 
 
 
       
         //id use for edit category by submit in database    
        if($request->post('id')>0){
            $model=HomeBanner::find($request->post('id'));
            $msg='Banner updated';
        }else{
            $model=new HomeBanner(); 
            $msg='Banner inserted';
        }
 
 
         //for upload image code
         if($request->hasfile('image'))
         {
             if($request->post('id')>0){
                 $arrImage=DB::table('home_banner')->where(['id'=>$request->post('id')])->get();
                if(storage::exists('/public/media/banner/'.$arrImage[0]->image)){
                    storage::delete('/public/media/banner/'.$arrImage[0]->image);
                } 
             }
             $image=$request->file('image');
             //seprate img extention
             $ext=$image->extension();
             //make img name $ concatinate with extension
             $image_name=time().'.'.$ext;
             $image->storeAs('/public/media/banner',$image_name);
             $model->image=$image_name;
         }
 
        //retrive
        $model->btn_txt=$request->post('btn_txt');
        $model->btn_link=$request->post('btn_link');
     
        $model->status=1;
        $model->save();
 
        $request->session()->flash('message',$msg);
        return redirect('admin/home_banner');
     }
 
     //function for delte category
     //we use get if specific data we want to fetch
     public function delete(Request $request, $id)
     {
        
         // echo $id;
         $model=HomeBanner::find($id);
         $model->delete();
 
         $request->session()->flash('message','Banner Deleted');
         return redirect('admin/home_banner');
     }
   
     //function for status deactive or active in category
     //we use get if specific data we want to fetch
     public function status(Request $request,$status,$id)
     {
        
         // echo $id;
         // echo $status;
         $model=HomeBanner::find($id);
         $model->status=$status;
         $model->save();
 
         $request->session()->flash('message','Status updated');
         return redirect('admin/home_banner');
     }
 
}
