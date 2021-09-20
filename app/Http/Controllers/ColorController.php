<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //Fetching all data from database 
     public function index()
     {
        $result['data']=Color::all();
         return view('adminpanal.color',$result);
     }
 
     
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
 
 
      //for edit category function get id from url and use it
      public function manage_color( Request $request ,$id='')
      {
        
          if($id>0)
          {
              $arr=Color::where(['id'=>$id])->get();
 
              $result['color']=$arr['0']->color;
              $result['status']=$arr['0']->status;
              //varible for ID 
              $result['id']=$arr['0']->id;
             //  $result['data']['category_slug']=$arr['0']->category_slug;
  
  
          }else{
            
            $result['color']='';
            $result['status']='';
              $result['id']=0;
  
  
          }
         //  echo '<pre>';
         //  print_r($result['data']);
         //  die();
  
          return view('adminpanal.manage_color',$result);
      }
 
 
 
 
      //validation slug uniqe before inserting data to table 
     public function manage_color_process(Request $request)
     {
        // return $request->post();
        
        $request->validate([
 
        
         'color'=>'required|unique:colors,color,'.$request->post('id'),
        ]);
 
 
 
       
         //id use for edit color by submit in database    
        if($request->post('id')>0){
            $model=Color::find($request->post('id'));
            $msg='Color updated';
        }else{
            $model=new Color(); 
            $msg='Color inserted';
        }
 
 
   
        $model->color=$request->post('color');
        $model->status=1;
        $model->save();
 
        $request->session()->flash('message',$msg);
        return redirect('admin/color');
     }
 
     //function for delte color
     //we use get if specific data we want to fetch
     public function delete(Request $request, $id)
     {
        
         // echo $id;
         $model=Color::find($id);
         $model->delete();
 
         $request->session()->flash('message','Color Deleted');
         return redirect('admin/color');
     }
   
     //function for status deactive or active in color
     //we use get if specific data we want to fetch
     public function status(Request $request,$status,$id)
     {
        
         // echo $id;
         // echo $status;
         $model=Color::find($id);
         $model->status=$status;
         $model->save();
 
         $request->session()->flash('message','Status updated');
         return redirect('admin/color');
     }
 
 
 
 
 
}
