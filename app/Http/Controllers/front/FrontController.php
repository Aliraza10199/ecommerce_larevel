<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Crypt;
use Mail;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //Fetching all data from database 
     public function index(Request $request)
     {
      
      // prx($_POST);

      
      // getData();
      // die();
        $result['home_categories']=DB::table('categories')->where(['status'=>1])
        ->where(['is_home'=>1])->get();


      $result['home_brands']=DB::table('brands')->where(['status'=>1])
      ->where(['is_home'=>1])->get();

   

      $result['home_banner']=DB::table('home_banners')->where(['status'=>1])->get();
     
     
     
     
      // $result['home_products'][$list->id]=DB::table('products')->where(['status'=>1])->get();
     
      
      $result['home_products']=DB::table('products')->where(['status'=>1])->get();



      foreach ($result['home_products'] as $list) {
        $result['home_product_attr'][$list->id]=DB::table('products_attr')
        ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
        ->leftJoin('colors','colors.id','=','products_attr.color_id')
        ->where(['products_attr.products_id'=>$list->id])
       ->select('products_attr.*','colors.color','sizes.size')->get();
      }

     
     
      //    echo "<pre>";
      // print_r($result);
      // die();

      // foreach ($result['home_categories'] as $list) {
      //   // echo "<pre>";
      //   // print_r($result['home_categories']);
      //   // die();
      // }


        return view('front.index', $result );

     }
     

     public function category(Request $request, $slug)
     {

          $sort="";
          $sort_text="";
          $color_filter="";
          $filter_price="";
          $colorFilterArr=[];
          if($request->get('sort')!==null){
            $sort=$request->get('sort');
          }

          $query=DB::table('products');
          $query=$query->leftJoin('categories','categories.id','=','products.category');
          $query=$query->leftJoin('products_attr','products.id','=','products_attr.products_id');  
          $query=$query->where(['products.status'=>1]);
          $query=$query->where(['categories.category_slug'=>$slug]);

          if($sort=='price_desc'){
            $query=$query->orderBy('products_attr.price','asc');
            $sort_text="Price - DESC";
          }
          if($sort=='price_asc'){
            $query=$query->orderBy('products_attr.price','desc');
            $sort_text="Price - ASC";
          }
    
          //  if($sort=='name'){
          //   $query=$query->orderBy('products.name','asc');
          //   $sort_text="Product Name";

          //  }
          
          if($request->get('filter_price')!==null)
          {
            $filter_price=$request->get('filter_price');

            if($filter_price>0){
              $query=$query->where(
                'products_attr.price',[$filter_price]);     
            }
          }
          

          if($request->get('color_filter')!==null)
          {
            $color_filter=$request->get('color_filter');
            $colorFilterArr=explode(':',$color_filter);
            //it removes empty array elemnts
            $colorFilterArr=array_filter($colorFilterArr);
            //  prx($colorFilterArr);
            $query=$query->where(['products_attr.color_id'=>$request->get('color_filter')]);
            // $sort_text="Product Name";
        

          }
          $query=$query->select('products.*');
          $query=$query->get();
          $result['product']=$query;

          foreach($result['product'] as $list1)
          {
            $query1=DB::table('products_attr');
            $query1=$query1->leftJoin('sizes','sizes.id','=','products_attr.size_id');
            $query1=$query1->leftJoin('colors','colors.id','=','products_attr.color_id');
            $query1=$query1->where(['products_attr.products_id'=>$list1->id]);
            $query1=$query1->select('products_attr.*','colors.color','sizes.size');

          
      
          
            $query1=$query1->get();
            $result['product_attr'][$list1->id]=$query1;
          }

        
        
          $result['colors']=DB::table('colors')->where(['status'=>1])
          ->get();

          $result['categories_left']=DB::table('categories')->where(['status'=>1])
          ->get();

          // prx($result['categories_left']);

          $result['slug']=$slug;
          $result['sort']=$sort;
          $result['sort_text']=$sort_text;
          // prx($result['colors']);
          $result['color_filter']=$color_filter;
          $result['filter_price']=$filter_price;
          $result['colorFilterArr']=$colorFilterArr;

          // prx($result);
          return view('front.category',$result);
     }


     public function product(Request $request, $slug)
     {
        // prx($_POST);
       
          $result['home_products']=DB::table('products')->where(['status'=>1])->where(['slug'=>$slug ])->get();
        
             

          foreach ($result['home_products'] as $list) {
            $result['home_product_attr'][$list->id]=DB::table('products_attr')
            ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
            ->leftJoin('colors','colors.id','=','products_attr.color_id')
            ->where(['products_attr.products_id'=>$list->id])
            ->select('products_attr.*','colors.color','sizes.size')->get();

           
          }
         
         



          // echo "<pre>";
          //   print_r($result);
          //   die();
          
          $result['related_products']=DB::table('products')->where(['status'=>1])->where('slug','!=',$slug)->where(['category'=>$result['home_products'][0]->category ])->get();
          foreach ($result['related_products'] as $list) {
            $result['related_product_attr'][$list->id]=DB::table('products_attr')
            ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
            ->leftJoin('colors','colors.id','=','products_attr.color_id')
            ->where(['products_attr.products_id'=>$list->id])
            ->select('products_attr.*','colors.color','sizes.size')->get();

            
          }

          // echo "<pre>";
          //   print_r($result);
          //   die();


          foreach ($result['home_products'] as $list)
          {
            $result['home_products_images'][$list->id]=DB::table('products_images')
            
            ->where(['products_images.products_id'=>$list->id])->get();
          }
          // echo "<pre>";
          // print_r($result);
          //   die();
      // prx($result);

      // $result['card_list']=DB::table('card')
      // ->leftJoin('products','products.id','=','card.product_id')
      // ->leftJoin('products_attr','products_attr.id','=','card.product_attr_id')
      // ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
      // ->leftJoin('colors','colors.id','=','products_attr.color_id')
      // // ->where(['user_id'=>$uid])
      // // ->where(['user_type'=>$user_type])
      // ->select('card.qty','products.name','products.image','products.image',
      // 'sizes.size','colors.color','products_attr.price','products.slug','products.id as pid',
      // 'products_attr.id as attr_id')
      // ->get();
      // prx($result);
     
      $result['product_review'] =DB::table('product_review')
            ->leftJoin('customers','customers.id','=','product_review.customer_id')
            // ->leftJoin('colors','colors.id','=','products_attr.color_id')
            ->where(['product_review.products_id'=>$result['home_products'][0]->id])
            ->where(['product_review.status'=>1])
            ->orderBy('product_review.added_on','desc')
          ->select('product_review.rating','product_review.review','product_review.added_on','customers.name')
          ->get();

            // prx($result['product_review']);
            
            // $getAvaliableQty=getAvaliableQty($product_id,$product_attr_id);
            // $finalAvaliable=$getAvaliableQty[0]->pqty-$getAvaliableQty[0]->qty;
            //  prx( $finalAvaliable);

           
    

      return view('front.product',$result);

    }



    public function add_to_card(Request $request)
    {
      // prx($_POST);
      // we use helper function for NON regester user by random ID genrate
      // if this session exist then we have regesterd user

      if($request->session()->has('FRONT_USER_LOGIN'))
      {
        $uid=$request->session()->get('FRONT_USER_ID');
        $user_type="reg";
      }else{
        $uid=getUserTempId();
        $user_type="not-reg";
      }
    
      
      $size_id=$request->post('size_id');
      $color_id=$request->post('color_id');
      $pqty=$request->post('pqty');
      $product_id=$request->post('product_id');

      // $result['popupdata']=$size_id;
      $data=$size_id;

      
        $result=DB::table('products_attr')
        ->select('products_attr.id')
        ->where(['products_id'=>$product_id])
        ->where(['sizes.size'=>$size_id])
        ->where(['colors.color'=>$color_id])
       
        ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
        ->leftJoin('colors','colors.id','=','products_attr.color_id')
        ->get();
        // prx($result);
      // prx($result[0]->id);
      $product_attr_id=$result[0]->id;

      $getAvaliableQty=getAvaliableQty($product_id,$product_attr_id);
      
      //  prx($finalAvaliable);
      if($getAvaliableQty!=null)
      {
        $finalAvaliable=$getAvaliableQty[0]->pqty-$getAvaliableQty[0]->qty;
        if($pqty>$finalAvaliable){
          return response()->json(['msg'=>"not_avaliable",'datas'=>"Only $finalAvaliable left"]);
        }
      }
     
      


      // ---------------------------
      // check wheather data is already in card then update or edit data to card
         


      $check=DB::table('card')
      ->where(['user_id'=>$uid])
      ->where(['user_type'=>$user_type])
      ->where(['product_id'=>$product_id])
      ->where(['product_attr_id'=>$product_attr_id])
      ->get();

       if(isset($check[0]))
       {
         $update_id=$check[0]->id;
         if($pqty==0)
         {
          DB::table('card')
          ->where(['id'=>$update_id])
          ->delete();
          
          $msg="removed";

         }else{
          DB::table('card')
          ->where(['id'=>$update_id])
          ->update(['qty'=>$pqty]);
          $msg="updated";

         }
         
     
       }else{
         $id=DB::table('card')->insertGetId([

          'user_id'=>$uid,
          'user_type'=>$user_type,
          'product_id'=>$product_id,
          'product_attr_id'=>$product_attr_id,
          'qty'=>$pqty,
          'added_on'=>date('Y-m-d h:i:s')
         ]);
         $msg="added";
       }
       $results=DB::table('card')
      ->leftJoin('products','products.id','=','card.product_id')
      ->leftJoin('products_attr','products_attr.id','=','card.product_attr_id')
      ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
      ->leftJoin('colors','colors.id','=','products_attr.color_id')
      ->where(['user_id'=>$uid])
      ->where(['user_type'=>$user_type])
      ->select('card.qty','products.name','products.image','products.image',
      'sizes.size','colors.color','products_attr.price','products.slug','products.id as pid',
      'products_attr.id as attr_id')
      ->get();
      
       return response()->json(['msg'=>$msg,'datas'=>$results,
       'totalItem'=>count($results)]);


      //  return view('front.product',$result);

    }


    public function view_card(Request $request)
    {

       // we use helper function for NON regester user by random ID genrate
      // if this session exist then we have regesterd user
      if($request->session()->has('FRONT_USER_LOGIN'))
      {
        // get user session
        $uid=$request->session()->get('FRONT_USER_ID');
        $user_type="reg";

      }else{
        // for non regesterd user
        $uid=getUserTempId();
        $user_type="not-reg";
      }


      $result['card_list']=DB::table('card')
      ->leftJoin('products','products.id','=','card.product_id')
      ->leftJoin('products_attr','products_attr.id','=','card.product_attr_id')
      ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
      ->leftJoin('colors','colors.id','=','products_attr.color_id')
      ->where(['user_id'=>$uid])
      ->where(['user_type'=>$user_type])
      ->select('card.qty','products.name','products.image','products.image',
      'sizes.size','colors.color','products_attr.price','products.slug','products.id as pid',
      'products_attr.id as attr_id')
      ->get();
      // prx($result);
      return view('front.view_card',$result);
    }

    public function search(Request $request, $str)
    {
       // prx($_POST);

         $query=DB::table('products');
         $query=$query->leftJoin('categories','categories.id','=','products.category');
         $query=$query->leftJoin('products_attr','products.id','=','products_attr.products_id');
         $query=$query->where(['products.status'=>1]);
         $query=$query->where('name','like',"%$str%");
         $query=$query->orwhere('model','like',"%$str%");
         $query=$query->orwhere('shot_desc','like',"%$str%");
         $query=$query->orwhere('desc','like',"%$str%");
         $query=$query->orwhere('keywords','like',"%$str%");
         $query=$query->orwhere('technical_specification','like',"%$str%");
       
         $query=$query->distinct()->select('products.*');
         $query=$query->get();
         $result['product']=$query;
  
        foreach($result['product'] as $list1)
        {
          $query1=DB::table('products_attr');
          $query1=$query1->leftJoin('sizes','sizes.id','=','products_attr.size_id');
          $query1=$query1->leftJoin('colors','colors.id','=','products_attr.color_id');
          $query1=$query1->where(['products_attr.products_id'=>$list1->id]);
          $query1=$query1->select('products_attr.*','colors.color','sizes.size');
          $query1=$query1->get();
          $result['product_attr'][$list1->id]=$query1;
        }
        //  prx($result);
  
       return view('front.search',$result);
      // echo $str;

    }



    public function regestration(Request $request)
    {
      // if user login then not open and go to regestration page until logout
      if($request->session()->has('FRONT_USER_LOGIN')!=null){
        return redirect('/');
      }

      $result=[];

      return view('front.regestration',$result);
    }



    public function login_user(Request $request)
    {
      // if user login then not open and go to login page until logout
      if($request->session()->has('FRONT_USER_LOGIN')!=null){
        return redirect('/');
      }
      return view('front.login_user');
    }
    

    public function regestration_process(Request $request)
    {
      // prx($_POST);
      $valid=Validator::make($request->all(),[

        "name"=>'required',
        "email"=>'required|email|unique:customers,email',
        "password"=>'required',
        "confirm_password"=>'required',
        "mobile"=>'required|numeric|digits:11',

      ]);
      if ($request->password !== $request->confirm_password) {
        $msgs="Password and Confirm password should match!"; 
        return response()->json(['msgs'=>$msgs]);
        die('Password and Confirm password should match!'); 
      
     }

      if(!$valid->passes()){
        return response()->json(['status'=>'error',
        'error'=>$valid->errors()->toArray()]);

      }else{
        $rand_id=rand(111111111,999999999);
        $arr=[
          "name"=>$request->name,
          "email"=>$request->email,
          "password"=>Crypt::encrypt($request->password),
          "confirm_password"=>Crypt::encrypt($request->confirm_password),
          "mobile"=>$request->mobile,
          "status"=>1,
          "is_verify"=>0,
          "rand_id"=>$rand_id,
          "created_at"=>date('Y-m-d h:i:s'),
          "updated_at"=>date('Y-m-d h:i:s')
        ];
        $query=DB::table('customers')->insert($arr);
        return response()->json(['msga'=>"Please wait..................."]);
        if($query)
        {

          $data=['name'=>$request->name,'rand_id'=>$rand_id];
                $user['to']=$request->email;
                Mail::send('front/email_verification',$data,function($messages) use ($user){
                    $messages->to($user['to']);
                    $messages->subject('Email Id Verification');
                });


          return response()->json(['status'=>'success',
          'msg'=>"Regestration sucessfully. Please check your email id for verification"]);
        }

      }

    }


    public function login_process(Request $request)
    {

      $result=DB::table('customers')   
      ->where(['email'=>$request->str_login_email])        
      ->get();


      if(isset($result[0]))
      {
           $db_pwd=Crypt::decrypt($result[0]->password);
          // for email verify check
           $status=$result[0]->status;
           $is_verify=$result[0]->is_verify;
           if($is_verify==0){
               return response()->json(['status'=>"error",'msg'=>'Please verify your email id']); 
           }
           if($status==0){
               return response()->json(['status'=>"error",'msg'=>'Your account has been deactivated']); 
           }




            if($db_pwd==$request->str_login_password)
            {
              if($request->rememberme===null){
                setcookie('login_email',$request->str_login_email,
                100);
                setcookie('login_pwd',$request->str_login_password,
                100);
                
              }else{
                setcookie('login_email',$request->str_login_email,
                time()+60*60*24*100);
                setcookie('login_pwd',$request->str_login_password,
                time()+60*60*24*100);
              }
              $request->session()->put('FRONT_USER_LOGIN',true);
              $request->session()->put('FRONT_USER_ID',$result[0]->id);
              $request->session()->put('FRONT_USER_NAME',$result[0]->name);
              $status="success";
              $msg="";
              $getUserTempId=getUserTempId();
              DB::table('card')  
              ->where(['user_id'=>$getUserTempId,'user_type'=>'not-reg'])
              ->update(['user_id'=>$result[0]->id,'user_type'=>'reg']);
            }
            else{
              $status="error";
              $msg="Please enter valid Password";
        
            }
           
      }
      else{ 
        $status="error";
        $msg="Please enter valid id";

      }

     
      return response()->json(['status'=>$status,
      'msg'=>$msg]);
      //$request->password;

    }

    public function email_verification(Request $request, $id)
    {
      // echo $id;
        $result=DB::table('customers')  
        ->where(['rand_id'=>$id])
        ->where(['is_verify'=>0])
        ->get(); 
        // prx($result);

          if(isset($result[0])){
              DB::table('customers')  
              ->where(['id'=>$result[0]->id])
              ->update(['is_verify'=>1,'rand_id'=>'']);
          return view('front.verification');
          }else{
              return redirect('/');
          }

    }   
    
    public function forgot_password(Request $request)
    {
     

      $result=DB::table('customers')  
      ->where(['email'=>$request->str_forgot_email])
      ->get(); 
      $rand_id=rand(111111111,999999999);
      if(isset($result[0]))
      {

          DB::table('customers')  
          ->where(['email'=>$request->str_forgot_email])
          ->update(['is_forgot_password'=>1,'rand_id'=>$rand_id]);
          
        $data=['name'=>$result[0]->name,'rand_id'=>$rand_id];
        $user['to']=$request->str_forgot_email;
        Mail::send('front/forgot_email',$data,function($messages) use ($user){
            $messages->to($user['to']);
            $messages->subject('Forgot Password');
        });
        return response()->json(['status'=>'success',
        'msg'=>'Please check your email id for Password']);
        
      }else{
        return response()->json(['status'=>'error',
        'msg'=>'email id not regestered']);
      }


    }
    
    public function forgot_password_change(Request $request, $id)
    {

      
      // echo $id;
        $result=DB::table('customers')  
        ->where(['rand_id'=>$id])
        ->where(['is_forgot_password'=>1])
        ->get(); 
        // prx($result);

          if(isset($result[0])){
            $request->session()->put('FORGOT_PASSWORD_USER_ID',$result[0]->id);
          return view('front.forgot_password_change');
          }else{
              return redirect('/');
          }

    }  
    
    public function forgot_password_change_process(Request $request)
    {
      if ($request->password !== $request->confirm_password) {
        $msgs="Password and Confirm password should match!"; 
        return response()->json(['msgs'=>$msgs]);
        die('Password and Confirm password should match!');      
     }
        DB::table('customers')  
            ->where(['id'=>$request->session()->get('FORGOT_PASSWORD_USER_ID')])
            ->update(
                [
                    'is_forgot_password'=>0,
                    'password'=>Crypt::encrypt($request->password),
                    'confirm_password'=>Crypt::encrypt($request->confirm_password),
                    'rand_id'=>''
                ]
            ); 
        return response()->json(['status'=>'success','msg'=>'Password changed']);     
    }


    public function checkout(Request $request)
    {


      

        $result['card_datas']=getAddtoCardTotalItem();
        // prx($result);

        $valid=Validator::make($result['card_datas']->all(),[

          "name"=>'required',
          "email"=>'required',
        
          "mobile"=>'required|numeric|digits:11',

        ]);

     



      if(isset($result['card_datas'][0]))
      {
        // echo "yes";
        if($request->session()->has('FRONT_USER_LOGIN') )
        {
          $uid=$request->session()->get('FRONT_USER_ID');
          
          $customer_info=DB::table('customers')  
          ->where(['id'=>$uid])
          ->get(); 
          $result['customers']['name']=$customer_info[0]->name;
          $result['customers']['email']=$customer_info[0]->email;
          $result['customers']['mobile']=$customer_info[0]->mobile;
          $result['customers']['address']=$customer_info[0]->address;
          $result['customers']['city']=$customer_info[0]->city;
          $result['customers']['country']=$customer_info[0]->country;
          $result['customers']['state']=$customer_info[0]->state;
          $result['customers']['zip']=$customer_info[0]->zip;
          // $result=$request->checkbox2;
          
          //  prx($result);
        }else{
          $result['customers']['name']='';
          $result['customers']['email']='';
          $result['customers']['mobile']='';
          $result['customers']['address']='';
          $result['customers']['city']='';
          $result['customers']['country']='';
          $result['customers']['state']='';
          $result['customers']['zip']='';
         
        }
        return view('front.checkout',$result);
      }else{
        // echo "no";
        return redirect('/');
      }

      
    }

    public function apply_coupon_code(Request $request)
    {
          
      $arr=apply_coupon_code($request->coupon_code);
      $arr=json_decode($arr,true);
      // prx($arr);
      return response()->json(['status'=>$arr['status'],'msg'=>$arr['msg'],'totalPrice'=>$arr['totalPrice']]); 

      
    }


    public function remove_coupon_code(Request $request)
    {
        $totalPrice=0;
        $result=DB::table('coupons')  
        ->where(['code'=>$request->coupon_code])
        ->get(); 
        $getAddToCartTotalItem=getAddtoCardTotalItem();
        $totalPrice=0;
        foreach($getAddToCartTotalItem as $list){
            $totalPrice=$totalPrice+($list->qty*$list->price);
        }  
        
        return response()->json(['status'=>'success','msg'=>'Coupon code removed','totalPrice'=>$totalPrice]); 
    }



    public function place_order(Request $request)
    {     
      //  prx($_POST); 
      $rand_id=rand(111111111,999999999);

      if($request->session()->has('FRONT_USER_LOGIN'))
      {

      }else{
        $valid=Validator::make($request->all(),[

          "email"=>'required|email|unique:customers,email'

        ]);
  
        if(!$valid->passes()){
          return response()->json(['status'=>'error',
          'msg'=>"The email has already tbeen taken"]);
        }else{
            
              $arr=[
                "name"=>$request->name,
                "email"=>$request->email,
                "password"=>Crypt::encrypt($rand_id),
                "address"=>$request->address,
                "city"=>$request->city,
                "state"=>$request->state,
                "country"=>$request->country,
                "zip"=>$request->zip,
                "confirm_password"=>Crypt::encrypt($rand_id),
                "mobile"=>$request->mobile,
                "status"=>1,
                "is_verify"=>1,
                "rand_id"=>$rand_id,
                "created_at"=>date('Y-m-d h:i:s'),
                "updated_at"=>date('Y-m-d h:i:s'),
                "is_forgot_password"=>0
              ];
              $user_id=DB::table('customers')->insertGetId($arr);
              $request->session()->put('FRONT_USER_LOGIN',true);
              $request->session()->put('FRONT_USER_ID',$user_id);
              $request->session()->put('FRONT_USER_NAME',$request->name);

              $data=['name'=>$request->name,'password'=>$rand_id];
              $user['to']=$request->email;
              Mail::send('front/password_sent',$data,function($messages) use ($user){
                  $messages->to($user['to']);
                  $messages->subject('New Password');
                });

              $getUserTempId=getUserTempId();
              
              DB::table('card')  
                  ->where(['user_id'=>$getUserTempId,'user_type'=>'Not-Reg'])
                  ->update(['user_id'=>$user_id,'user_type'=>'Reg']);
         
        }
    
      }

        $coupon_value=0;
        if($request->coupon_code!=''){
          $arr=apply_coupon_code($request->coupon_code);
          $arr=json_decode($arr,true);
          if($arr['status']=='success')
          {

            $coupon_value=$arr['coupon_code_value'];
          }else{
            return response()->json(['status'=>'false','msg'=>$arr['msg']]); 
          }
          
        }
       

        $uid=$request->session()->get('FRONT_USER_ID');
        $name=$request->name;
        $email=$request->email;
        $mobile=$request->mobile;
        $country=$request->country;
        $state=$request->state;
        $city=$request->city;
        $address=$request->address;
        $coupon_code=$request->coupon_code;
        $payment_type=$request->payment_type;


        $getAddToCartTotalItem=getAddtoCardTotalItem();
      
        $totalPrice=0;
        foreach($getAddToCartTotalItem as $list){
            $totalPrice=$totalPrice+($list->qty*$list->price);  
        }  
        $final_amt=$totalPrice-$coupon_value;

        $arr=[
          "customers_id"=>$uid,
          "name"=>$request->name,
          "email"=>$request->email,
          "mobile"=>$request->mobile,
          "country"=>$request->country,
          "state"=>$request->state,
          "address"=>$request->address,
          "city"=>$request->city,
          "coupon_code"=>$request->coupon_code,
          "coupon_value"=>$coupon_value,
          "order_status"=>"1",
          "payment_type"=>$request->payment_type,
          "payment_status"=>"pending",
          "total_amt"=>$final_amt,
          "added_on"=>date('Y-m-d h:i:s')
         
        ];
       
          $order_id=DB::table('orders')->insertGetId($arr);
         

          if($order_id>0)
          {
           
                $productDetailArr=[];
                foreach($getAddToCartTotalItem as $list)
                {  
                  $productDetailArr['product_id']=$list->pid;
                  $productDetailArr['price']=$list->price;
                  $productDetailArr['qty']=$list->qty;
                  $productDetailArr['order_id']=$order_id;
                  $productDetailArr['products_attr_id']=$list->attr_id;
                  DB::table('orders_details')->insert($productDetailArr);   
                } 

                if($request->payment_type=='Gateway' )
                {
                  $final_amt=$totalPrice-$coupon_value;
                              // $data = $request->input();
                    // print_r($data);
                    
                    // $product_id = $data['product_id'];
                    // $data = DB::select('select * from orders  where order_id='.$order_id  );
                    // $data = DB::table('orders')->select('name')->where('order_id='.$order_id)->get();

                    // print_r($data);
                    // $product_details = DB::select('select * from orders_details where order_id='.$order_id);

                    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
                    //1.
                    //get formatted price. remove period(.) from the price
                    $temp_amount 	= $final_amt*100;
                    $amount_array 	= explode('.', $temp_amount);
                    $pp_Amount 		= $amount_array[0];
                    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

                    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
                    //2.
                    //get the current date and time
                    //be careful set TimeZone in config/app.php
                    $DateTime 		= new \DateTime();
                    $pp_TxnDateTime = $DateTime->format('YmdHis');
                    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

                    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
                    //3.
                    //to make expiry date and time add one hour to current date and time
                    $ExpiryDateTime = $DateTime;
                    $ExpiryDateTime->modify('+' . 1 . ' hours');
                    $pp_TxnExpiryDateTime = $ExpiryDateTime->format('YmdHis');
                    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

                    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
                    //4.
                    //make unique transaction id using current date
                    $pp_TxnRefNo = 'T'.$pp_TxnDateTime;
                    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

                    //--------------------------------------------------------------------------------
                    //$post_data

                    $post_data =  array(
                      "pp_Version" 			=> Config::get('constants.jazzcash.VERSION'),
                      "pp_TxnType" 			=> "MWALLET",
                      "pp_Language" 			=> Config::get('constants.jazzcash.LANGUAGE'),
                      "pp_MerchantID" 		=> Config::get('constants.jazzcash.MERCHANT_ID'),
                      "pp_SubMerchantID" 		=> "",
                      "pp_Password" 			=> Config::get('constants.jazzcash.PASSWORD'),
                      "pp_BankID" 			=> "TBANK",
                      "pp_ProductID" 			=> "RETL",
                      "pp_TxnRefNo" 			=> $pp_TxnRefNo,
                      "pp_Amount" 			=> $pp_Amount,
                      "pp_TxnCurrency" 		=> Config::get('constants.jazzcash.CURRENCY_CODE'),
                      "pp_TxnDateTime" 		=> $pp_TxnDateTime,
                      "pp_BillReference" 		=> "billRef",
                      "pp_Description" 		=> "Description of transaction",
                      "pp_TxnExpiryDateTime" 	=> $pp_TxnExpiryDateTime,
                      "pp_ReturnURL" 			=> Config::get('constants.jazzcash.RETURN_URL'),
                      "pp_SecureHash" 		=> "",
                      "ppmpf_1" 				=> "1",
                      "ppmpf_2" 				=> "2",
                      "ppmpf_3" 				=> "3",
                      "ppmpf_4" 				=> "4",
                      "ppmpf_5" 				=> "5",
                    );

                    $pp_SecureHash = $this->get_SecureHash($post_data);

                    $post_data['pp_SecureHash'] = $pp_SecureHash;

                    $values = array(
                      'TxnRefNo'    => $post_data['pp_TxnRefNo'],
                      'total_amt' 	  => $final_amt,
                      // 'description' => $post_data['pp_Description'],
                      'payment_status' 	  => 'pending',
                    
                    );
                    // DB::table('orders')->insert($values);

                    DB::table('orders')->where(['id'=>$order_id])
                    ->update($values);


                    Session::put('post_data',$post_data);
                    // echo '<pre>';
                    // print_r($post_data);
                    // echo '</pre>';

                    // return view('do_checkout_v');
          
                  


                
                  return response()->json(['status'=>'jazzcash']); 
                }
            

            DB::table('card')
            ->where(['user_id'=>$uid,'user_type'=>'reg'])
            ->delete();
            
            $request->session()->put('ORDER_ID',$order_id);
            
            $status="success";
            $msg="Order Placed";

          }else{
            $status="false";
            $msg="Please try after sometime";
         
          }
        
        
      
       
      // }else{
      //   $status="false";
      //   $msg="Please Login to place order";
      
      // }

      return response()->json(['status'=>$status,'msg'=>$msg]); 

    }




    
    public function order_placed(Request $request)
    {

      if($request->session()->has('ORDER_ID') )
      {
        return view('front.order_placed');
       
      }else{
        return redirect('/');
      }

      
    }
 
    public function jazzcash_payment(Request $request)
    {

      return view('front.jazzcash_payment');
    }
   
    public function do_checkout_v(Request $request)
    {

      return view('front.do_checkout_v');
    }
   

    //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
	private function get_SecureHash($data_array)
	{
		ksort($data_array);
		
		$str = '';
		foreach($data_array as $key => $value){
			if(!empty($value)){
				$str = $str . '&' . $value;
			}
		}
		
		$str = Config::get('constants.jazzcash.INTEGERITY_SALT').$str;
		
		$pp_SecureHash = hash_hmac('sha256', $str, Config::get('constants.jazzcash.INTEGERITY_SALT'));
		
		//echo '<pre>';
		//print_r($data_array);
		//echo '</pre>';
		
		return $pp_SecureHash;
	}

  //NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
	public function paymentStatus(Request $request)
	{
		$response = $request->input();
		// echo '<pre>';
		// print_r($response);
		// echo '</pre>';
		
		if($response['pp_ResponseCode'] == '000')
		{
			$response['pp_ResponseMessage'] = 'Your Payment has been Successful';
			$values = array('status' => 'completed');
			DB::table('orders')
				->where('TxnRefNo',$response['pp_TxnRefNo'])
				->update(['payment_status' => 'completed']);
		}
		
		return view('front.payment-status',['response'=>$response]);
	}


  //***********account detail
  public function account_detail(Request $request)
  {
       
    $result['customers']=DB::table('customers')
    ->where(['id'=>$request->session()->get('FRONT_USER_ID')])->get();

    return view('front.account_detail',$result);
  }

  //************* */ updates details in accounts editor account of user
  public function account_detail_update(Request $request)
  {
    // prx($_POST);
    $arr=[
      "name"=>$request->name,
      // "email"=>$request->email,
      "mobile"=>$request->phone,
      "country"=>$request->country,
      "city"=>$request->city,  
      "state"=>$request->state,
      "zip"=>$request->zip,  
      "address"=>$request->address  
    ];
    DB::table('customers')->where(['id'=>$request->session()->get('FRONT_USER_ID')])->update($arr);

    return response()->json(['msg'=>'sucessfuly updated']); 
    
  }


  public function order_history(Request $request)
  {

    // $result['orders']=DB::table('orders')
    // ->where(['customers_id'=>$request->session()->get('FRONT_USER_ID')])->get();

    $result['orders']=DB::table('orders')
    ->select('orders.*','orders_status.orders_status')
    ->leftJoin('orders_status','orders_status.id','=','orders.order_status')
    ->where(['orders.customers_id'=>$request->session()->get('FRONT_USER_ID')])->get();


    // prx($result);
    return view('front.account_history', $result);
  }
  public function order_detail(Request $request , $id)
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
    ->where(['orders.customers_id'=>$request->session()->get('FRONT_USER_ID')])
    ->get();

    if(!isset($result['orders_details'][0]))
    {
      return redirect('/');
    }

    // prx($result['orders_details'][0]);
    // prx($result);
    return view('front.order_detail',$result);
  }




  public function my_wishlist(Request $request)
  {

    if($request->session()->has('FRONT_USER_LOGIN'))
    {
      // get user session
      $uid=$request->session()->get('FRONT_USER_ID');
      // $user_type="reg";

      $result['wishlist_product']=DB::table('wishlist')
      ->leftJoin('products','products.id','=','wishlist.product_id')
      ->leftJoin('products_attr','products_attr.id','=','wishlist.product_attr_id')
      ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
      ->leftJoin('colors','colors.id','=','products_attr.color_id')
      ->where(['user_id'=>$uid])
      // ->where(['user_type'=>$user_type])
      ->select('wishlist.id','products.name','products.image',
      'sizes.size','colors.color','products_attr.price','products.slug','products.id as pid','products_attr.size_id','products_attr.color_id',
      'products_attr.id as attr_id')
      ->get();

    }else{
     
    }
    // prx($result);
    return view('front.account_wishlist',$result);
  }



  public function wishlist_manage_ajax(Request $request)
  {
    //  prx($_POST);
    if($request->session()->has('FRONT_USER_LOGIN'))
    {
      $uid=$request->session()->get('FRONT_USER_ID');
      // $user_type="reg";
      // $checks=DB::table('wishlist')->where(['user_id'=>$uid ,'product_id'=>$request->wishlist_product_id]);
      $checks= DB::table('wishlist')->where(['product_id'=>$request->wishlist_product_id])->where(['user_id'=>$uid])
      ->where(['product_attr_id'=>$request->wishlist_product_attr_id]) ->first();
        if($checks)
        { 
            // $msg ="Already Added";
            // echo "Already Added";
            $check=DB::table('wishlist')
            ->where(['user_id'=>$uid])
            // ->where(['user_type'=>$user_type])
            ->where(['product_id'=>$request->wishlist_product_id])
            ->where(['product_attr_id'=>$request->wishlist_product_attr_id ])
            ->get();
      
             if(isset($check[0]))
             {
              $update_id=$check[0]->id;
               
                DB::table('wishlist')
                ->where(['id'=>$update_id])
                ->delete();
                $status="remove";
                $msg="Product removed from wishlist Successfuly";
               
              }
            
        }else{
            $arr=[ 
              "product_attr_id"=>$request->wishlist_product_attr_id,     
              "product_id"=>$request->wishlist_product_id,  
              "user_id"=>$uid,
              "added_on"=>date('Y-m-d h:i:s')
              ];
            $result=DB::table('wishlist')->insertGetId($arr);
            $status="added";
            $msg ="Product added to wishlist Succesfuly";
        }

      

      
    //  $status="login";
    //  $msg="you are login";
   }else{
        $status="not_login";
        $msg="Please login to submit your wishlist";
    }
    return response()->json(['status'=>$status,'msg'=>$msg]); 
  }

  public function wishlist_delete_product_ajax(Request $request)
  {
      // prx($_POST);
    if($request->session()->has('FRONT_USER_LOGIN'))
    {
      $uid=$request->session()->get('FRONT_USER_ID');
      // $user_type="reg";
      $check=DB::table('wishlist')
      ->where(['user_id'=>$uid])
      // ->where(['user_type'=>$user_type])
      ->where(['product_id'=>$request->wishlist_product_id])
      ->where(['product_attr_id'=>$request->wishlist_product_attr_id ])
      ->get();

       if(isset($check[0]))
       {
        $update_id=$check[0]->id;
         
          DB::table('wishlist')
          ->where(['id'=>$update_id])
          ->delete();
          
          $msg="removed wishlist";
          $status="done remove";
        }
      // echo $check;
      
    }
    return response()->json(['status'=>$status,'msg'=>$msg]); 
  }
  


  public function wish_list_page(Request $request)
  {
   
    //  prx($_POST); 
     if($request->session()->has('FRONT_USER_LOGIN'))
      {
        $uid=$request->session()->get('FRONT_USER_ID');
        // $user_type="reg";
      
          $status="success";
          $msg="Thanks your wishlist";
        }else{
          $status="error";
          $msg="Please login to enter wishlist";
      }
      
      return response()->json(['status'=>$status,'msg'=>$msg]); 
  }

 
  public function reviews_product(Request $request)
  {
    
    //  prx($_POST); 
     if($request->session()->has('FRONT_USER_LOGIN'))
      {
        $uid=$request->session()->get('FRONT_USER_ID');
        // $user_type="reg";
        $arr=[
          // "rating"=>$request->rating,
          "review"=>$request->message,
          "products_id"=>$request->product_id,
          "status"=>1,
          "customer_id"=>$uid,
          "added_on"=>date('Y-m-d h:i:s')
          ];
          $query=DB::table('product_review')->insert($arr);
          $status="success";
          $msg="Thank you for you sweet review";
        }else{
          $status="error";
          $msg="Please login to submit your review";
      }
      
      return response()->json(['status'=>$status,'msg'=>$msg]); 
  }


  public function ajex_related_pop_route(Request $request)
  {
   
          //  prx($_POST); 

          $slug=$request->post('slug_related');
          // prx($slug);



          $result['home_products']=DB::table('products')->where(['status'=>1])->where(['slug'=>$slug ])->get();
              
                  

            foreach ($result['home_products'] as $list) {
              $result['home_product_attr'][$list->id]=DB::table('products_attr')
              ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
              ->leftJoin('colors','colors.id','=','products_attr.color_id')
              ->where(['products_attr.products_id'=>$list->id])->get();
        
            }
        
        



          // echo "<pre>";
          //   print_r($result);
          //   die();
          
          $result['related_products']=DB::table('products')->where(['status'=>1])->where('slug','!=',$slug)->where(['category'=>$result['home_products'][0]->category ])->get();
          foreach ($result['related_products'] as $list) {
            $result['related_product_attr'][$list->id]=DB::table('products_attr')
            ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
            ->leftJoin('colors','colors.id','=','products_attr.color_id')
            ->where(['products_attr.products_id'=>$list->id])->get();

            
          }

          // echo "<pre>";
          //   print_r($result);
          //   die();


          foreach ($result['home_products'] as $list)
          {
            $result['home_products_images'][$list->id]=DB::table('products_images')
            
            ->where(['products_images.products_id'=>$list->id])->get();
          }
          // echo "<pre>";
          // print_r($result);
          //   die();
      // prx($result);

          $result['product_review'] =DB::table('product_review')
                ->leftJoin('customers','customers.id','=','product_review.customer_id')
                // ->leftJoin('colors','colors.id','=','products_attr.color_id')
                ->where(['product_review.products_id'=>$result['home_products'][0]->id])
                ->where(['product_review.status'=>1])
                ->orderBy('product_review.added_on','desc')
              ->select('product_review.rating','product_review.review','product_review.added_on','customers.name')
              ->get();
            
                
                    $status="success";
                    $msg="Thanks your wishlist";
                  
         
         
      
      return response()->json(['status'=>$status,'msg'=>$msg, 'results'=>$result]); 
  }

  
  public function contact_us(Request $request)
  {

    return view('front.contact_us');
  }

  
  public function about_us(Request $request)
  {

    return view('front.aboutus');
  }
  public function faq(Request $request)
  {

    return view('front.faq');
  }

  public function all_products(Request $request)
  {

      $result['home_products']=DB::table('products')->where(['status'=>1])->get();
      foreach ($result['home_products'] as $list) {
        $result['home_product_attr'][$list->id]=DB::table('products_attr')
        ->leftJoin('sizes','sizes.id','=','products_attr.size_id')
        ->leftJoin('colors','colors.id','=','products_attr.color_id')
        ->where(['products_attr.products_id'=>$list->id])->get();
         }

      //  prx($result);

    return view('front.All_products',$result);
  }

 
}
