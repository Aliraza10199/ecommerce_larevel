<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //Fetching all data from database 
     public function index()
     {
        $result['data']=Coupon::all();
         return view('adminpanal.coupon',$result);
     }
 
     
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
 
 
      //for edit category function get id from url and use it
      public function manage_coupon( Request $request ,$id='')
      {
        
          if($id>0)
          {
              $arr=Coupon::where(['id'=>$id])->get();
 
              $result['title']=$arr['0']->title;
              $result['code']=$arr['0']->code;
              $result['value']=$arr['0']->value;
              $result['type']=$arr['0']->type;
              $result['min_order_amt']=$arr['0']->min_order_amt;
              $result['is_one_time']=$arr['0']->is_one_time;
              //varible for ID 
              $result['id']=$arr['0']->id;
             //  $result['data']['category_slug']=$arr['0']->category_slug;
  
  
          }else{
              $result['title']='';
              $result['code']='';
              $result['value']='';
              $result['type']='';
              $result['min_order_amt']='';
              $result['is_one_time']='';
              $result['id']=0;
  
  
          }
         //  echo '<pre>';
         //  print_r($result['data']);
         //  die();
  
          return view('adminpanal.manage_coupon',$result);
      }
 
 
 
 
      //validation slug uniqe before inserting data to table 
     public function manage_coupon_process(Request $request)
     {
        // return $request->post();
        
        $request->validate([
 
         'title'=>'required',
         'code'=>'required|unique:coupons,code,'.$request->post('id'),
         'value'=>'required',
        ]);
 
 
 
       
         //id use for edit category by submit in database    
        if($request->post('id')>0){
            $model=Coupon::find($request->post('id'));
            $msg='Coupon updated';
        }else{
            $model=new Coupon(); 
            $msg='Copuon inserted';
            $model->status=1;
        }
 
 
        $model->title=$request->post('title');
        $model->code=$request->post('code');
        $model->value=$request->post('value');
        $model->type=$request->post('type');
        $model->min_order_amt=$request->post('min_order_amt');
        $model->is_one_time=$request->post('is_one_time');
        $model->status=1;
        $model->save();
 
        $request->session()->flash('message',$msg);
        return redirect('admin/coupon');
     }
 
     //function for delte coupon
     //we use get if specific data we want to fetch
     public function delete(Request $request, $id)
     {
        
         // echo $id;
         $model=Coupon::find($id);
         $model->delete();
 
         $request->session()->flash('message','Coupon Deleted');
         return redirect('admin/coupon');
     }

      //function for status deactive or active in coupon
    //we use get if specific data we want to fetch
    public function status(Request $request,$status,$id)
    {
       
        // echo $id;
        // echo $status;
        $model=Coupon::find($id);
        $model->status=$status;
        $model->save();

        $request->session()->flash('message','Status updated');
        return redirect('admin/coupon');
    }

 
}
