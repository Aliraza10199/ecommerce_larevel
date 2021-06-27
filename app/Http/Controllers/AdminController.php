<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // condition when user login and want to go back without logout 
    public function index(Request $request)
    {
        if($request->session()->has('ADMIN_LOGIN'))
        {
            return redirect('admin/dashboard');
        }
        else{
            return view('adminpanal.login');
 
        }
        return view('adminpanal.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    // auth funtion use for Data check verify validate
    public function auth(Request $request)
    {
        // retrive datas from user
        $email=$request->post('email');
        $password=$request->post('password');

        // now check verify emial paswd vaalidation from sql to user>> for  this model is requer use App\Models\Admin;//
        // $result=Admin::where(['email'=>$email,'password'=>$password])->get();
      
    //   check for email ID
        $result=Admin::where(['email'=>$email])->first();

        if($result)
        {
            if(Hash::check($request->post('password'),$result->password))
            {
                $request->session()->put('ADMIN_LOGIN',true);
                $request->session()->put('ADMIN_ID',$result->id);
                return redirect('admin/dashboard');
            }else{
                $request->session()->flash('error','please enter correct password');
               return redirect('admin');
            }

        }else{
            $request->session()->flash('error','please enter valid id');
               return redirect('admin');
        }


                    //  echo'<pre>';
                    //  print_r($result);
                //    if(isset($result['0']->id))
                //    {
                //     $request->session()->put('ADMIN_LOGIN',true);
                //     $request->session()->put('ADMIN_ID',$result['0']->id);
                //     return redirect('admin/dashboard');
                //    }
                //    else{
                //            $request->session()->flash('error','please enter valid id');
                //            return redirect('admin');
                //    }

    }


    public function dashboard()
    {
        return view('adminpanal.dashboard');
    }


    // public function updatepassword()
    // {
    //    $r=Admin::find(1);
    //    $r->password=Hash::make('123456789');
    //    $r->save();
    // }

    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}




