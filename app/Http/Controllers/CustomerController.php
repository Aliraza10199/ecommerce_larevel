<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //Fetching all data from database 
     public function index()
     {
        $result['data']=Customer::all();
         return view('adminpanal.customer',$result);
     }
 
     
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
 
 
      //for edit category function get id from url and use it
      public function show( Request $request ,$id='')
      {
        
        $arr=Customer::where(['id'=>$id])->get();
        $result['customer_list']=$arr['0'];
          return view('adminpanal.show_customer',$result);
      }
   
     //function for status deactive or active in category
     //we use get if specific data we want to fetch
     public function status(Request $request,$status,$id)
     {
        
         // echo $id;
         // echo $status;
         $model=Customer::find($id);
         $model->status=$status;
         $model->save();
 
         $request->session()->flash('message','Customer Status updated');
         return redirect('admin/customer');
     }
 

}
