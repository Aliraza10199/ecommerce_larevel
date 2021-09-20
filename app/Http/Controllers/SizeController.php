<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //Fetching all data from database 
     public function index()
     {
        $result['data']=Size::all();
         return view('adminpanal.size',$result);
     }
 
     
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
 
 
      //for edit category function get id from url and use it
      public function manage_size( Request $request ,$id='')
      {
        
          if($id>0)
          {
              $arr=Size::where(['id'=>$id])->get();
 
              $result['size']=$arr['0']->size;
              $result['status']=$arr['0']->status;
              //varible for ID 
              $result['id']=$arr['0']->id;
             //  $result['data']['category_slug']=$arr['0']->category_slug;
  
  
          }else{
            
            $result['size']='';
            $result['status']='';
              $result['id']=0;
  
  
          }
         //  echo '<pre>';
         //  print_r($result['data']);
         //  die();
  
          return view('adminpanal.manage_size',$result);
      }
 
 
 
 
      //validation slug uniqe before inserting data to table 
     public function manage_size_process(Request $request)
     {
        // return $request->post();
        
        $request->validate([
 
        
         'size'=>'required|unique:sizes,size,'.$request->post('id'),
        ]);
 
 
 
       
         //id use for edit size by submit in database    
        if($request->post('id')>0){
            $model=Size::find($request->post('id'));
            $msg='Size updated';
        }else{
            $model=new Size(); 
            $msg='Size inserted';
        }
 
 
   
        $model->size=$request->post('size');
        $model->status=1;
        $model->save();
 
        $request->session()->flash('message',$msg);
        return redirect('admin/size');
     }
 
     //function for delte size
     //we use get if specific data we want to fetch
     public function delete(Request $request, $id)
     {
        
         // echo $id;
         $model=Size::find($id);
         $model->delete();
 
         $request->session()->flash('message','Size Deleted');
         return redirect('admin/size');
     }
   
     //function for status deactive or active in category
     //we use get if specific data we want to fetch
     public function status(Request $request,$status,$id)
     {
        
         // echo $id;
         // echo $status;
         $model=Size::find($id);
         $model->status=$status;
         $model->save();
 
         $request->session()->flash('message','Status updated');
         return redirect('admin/size');
     }
 

}
