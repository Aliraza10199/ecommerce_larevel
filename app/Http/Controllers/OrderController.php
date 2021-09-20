<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    
    public function index()
    {
    $result['orders']=DB::table('orders')
    ->select('orders.*','orders_status.orders_status')
    ->leftJoin('orders_status','orders_status.id','=','orders.order_status')
    ->get();
    // prx($result);
    return view('adminpanal.order',$result);
    }
    public function order_detail(Request $request,$id)
    {
       
                
        $result['orders_details']=
        DB::table('orders_details')
        ->select('orders.*','orders_details.price','orders_details.qty','products.name as pname','products_attr.image_attr','sizes.size','colors.color','orders_status.orders_status')
        ->leftJoin('orders','orders.id','=','orders_details.order_id')
        ->leftJoin('products_attr','products_attr.id','=','orders_details.products_attr_id')
        ->leftJoin('products','products.id','=','products_attr.products_id')

        ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
        ->leftJoin('orders_status','orders_status.id','=','orders.order_status')

        ->leftJoin('colors','colors.id','=','products_attr.color_id')
        ->where(['orders.id'=>$id])
        ->get();


        $result['orders_status']=
        DB::table('orders_status')
        ->get();
        // prx($result);
        $result['payment_status']=['pending','completed','fail'];
        return view('adminpanal.order_detail',$result);
    } 
  
    public function update_payment_status(Request $request, $status, $id)
    {
        DB::table('orders')
        ->where(['id'=>$id])
        ->update(['payment_status'=>$status]);
        // prx($status);
        return redirect('/admin/order_detail/'.$id);

    }
    public function update_order_status(Request $request,$status,$id)
    {
        // prx($status);
        DB::table('orders')
        ->where(['id'=>$id])
        ->update(['order_status'=>$status]);
        return redirect('/admin/order_detail/'.$id);
    } 


    public function update_track_detail(Request $request,$id)
    {
        // echo $request->post('track_detail');
        $track_details=$request->post('track_detail');
        DB::table('orders')
        ->where(['id'=>$id])
        ->update(['track_detail'=>$track_details]);
        return redirect('/admin/order_detail/'.$id);
    } 
    
}
