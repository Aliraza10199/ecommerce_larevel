<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //Fetching all data from database 
    public function index()
    {
       $result['data']=category::all();
        return view('adminpanal.category',$result);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     //for edit category function get id from url and use it
     public function manage_category( Request $request ,$id='')
     {
       
         if($id>0)
         {
             $arr=category::where(['id'=>$id])->get();

             $result['category_name']=$arr['0']->category_name;
             $result['category_slug']=$arr['0']->category_slug;
             //varible for ID 
             $result['id']=$arr['0']->id;
            //  $result['data']['category_slug']=$arr['0']->category_slug;
 
 
         }else{
             $result['category_name']='';
             $result['category_slug']='';
             $result['id']=0;
 
 
         }
        //  echo '<pre>';
        //  print_r($result['data']);
        //  die();
 
         return view('adminpanal.manage_category',$result);
     }




     //validation slug uniqe before inserting data to table 
    public function manage_category_process(Request $request)
    {
       // return $request->post();
       
       $request->validate([

        'category_name'=>'required',
        'category_slug'=>'required|unique:categories,category_slug,'.$request->post('id'),
       ]);



      
        //id use for edit category by submit in database    
       if($request->post('id')>0){
           $model=category::find($request->post('id'));
           $msg='category updated';
       }else{
           $model=new category(); 
           $msg='category inserted';
       }


       $model->category_name=$request->post('category_name');
       $model->category_slug=$request->post('category_slug');
       $model->status=1;
       $model->save();

       $request->session()->flash('message',$msg);
       return redirect('admin/category');
    }

    //function for delte category
    //we use get if specific data we want to fetch
    public function delete(Request $request, $id)
    {
       
        // echo $id;
        $model=category::find($id);
        $model->delete();

        $request->session()->flash('message','category Deleted');
        return redirect('admin/category');
    }
  
    //function for status deactive or active in category
    //we use get if specific data we want to fetch
    public function status(Request $request,$status,$id)
    {
       
        // echo $id;
        // echo $status;
        $model=category::find($id);
        $model->status=$status;
        $model->save();

        $request->session()->flash('message','Status updated');
        return redirect('admin/category');
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
