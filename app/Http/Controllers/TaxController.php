<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //Fetching all data from database 
     public function index()
     {
        $result['data']=Tax::all();
         return view('adminpanal.tax',$result);
     }
 
     
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
 
 
      //for edit category function get id from url and use it
      public function manage_tax( Request $request ,$id='')
      {
        
          if($id>0)
          {
              $arr=Tax::where(['id'=>$id])->get();
 
              $result['tax_desc']=$arr['0']->tax_desc;
              $result['tax_value']=$arr['0']->tax_value;
              $result['status']=$arr['0']->status;
              //varible for ID 
              $result['id']=$arr['0']->id;
             //  $result['data']['category_slug']=$arr['0']->category_slug;
  
  
          }else{
            
            $result['tax_desc']='';
            $result['tax_value']='';
            $result['status']='';
              $result['id']=0;
  
  
          }
         //  echo '<pre>';
         //  print_r($result['data']);
         //  die();
  
          return view('adminpanal.manage_tax',$result);
      }
 
 
 
 
      //validation slug uniqe before inserting data to table 
     public function manage_tax_process(Request $request)
     {
        // return $request->post();
        
        $request->validate([
 
        
         'tax_value'=>'required|unique:taxes,tax_value,'.$request->post('id'),
        ]);
 
 
 
       
         //id use for edit color by submit in database    
        if($request->post('id')>0){
            $model=Tax::find($request->post('id'));
            $msg='Tax updated';
        }else{
            $model=new Tax(); 
            $msg='Tax inserted';
        }
 
 
   
        $model->tax_desc=$request->post('tax_desc');
        $model->tax_value=$request->post('tax_value');
        $model->status=1;
        $model->save();
 
        $request->session()->flash('message',$msg);
        return redirect('admin/tax');
     }
 
     //function for delte tax
     //we use get if specific data we want to fetch
     public function delete(Request $request, $id)
     {
        
         // echo $id;
         $model=Tax::find($id);
         $model->delete();
 
         $request->session()->flash('message','Tax Deleted');
         return redirect('admin/tax');
     }
   
     //function for status deactive or active in tax
     //we use get if specific data we want to fetch
     public function status(Request $request,$status,$id)
     {
        
         // echo $id;
         // echo $status;
         $model=Tax::find($id);
         $model->status=$status;
         $model->save();
 
         $request->session()->flash('message','Status updated');
         return redirect('admin/tax');
     }
 
}
