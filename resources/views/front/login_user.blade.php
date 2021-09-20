
@extends('front/layouts')
@section('page_title','Login User')
@section('container')


@php

if(isset($_COOKIE['login_email']) && isset($_COOKIE['login_pwd'])){

    $login_email=$_COOKIE['login_email'];
    $login_pwd=$_COOKIE['login_pwd'];
    $is_remember="checked='checked'";
}else{
    $login_email="";
    $login_pwd="";
    $is_remember="";
}

@endphp


<div class="page-content">
    <div class="holder mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><span>Login</span></li>
            </ul>
        </div>
    </div>
    <div class="holder mt-0">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-md-4">
                    <div id="loginForm">
                        <h2 class="text-center">SIGN IN</h2>
                        <div class="form-wrapper">
                            <p>If you have an account with us, please log in.</p>
                            <form action="" id="frmLogin">
                                <div class="form-group"><input type="text" name="str_login_email" class="form-control" placeholder="email" value="{{$login_email}}" required></div>
                                <div class="form-group"><input type="password" name="str_login_password" class="form-control" placeholder="Password"  value="{{$login_pwd}}" required></div>
                                <p class="text-uppercase"><a href="#" class="js-toggle-forms">Forgot Your Password?</a></p>
                                <div class="clearfix"><input id="checkbox1"  name="rememberme" type="checkbox"  {{$is_remember}}> <label for="checkbox1" >Remember me</label></div><button type="submit" class="btn" id="btnLogin">Sign in</button>
                                <div id="login_msg" class="field_error"></div>
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div id="recoverPasswordForm" class="d-none">
                        <h2 class="text-center">RESET YOUR PASSWORD</h2>
                        <div class="form-wrapper">
                            <p>We will send you an email to reset your password.</p>
                            <form id="frmForgot" >
                                <div class="form-group"><input type="text" name="str_forgot_email" class="form-control" placeholder="Enter your Email" required></div>

                                {{-- <div class="form-group"><input type="password" class="form-control" placeholder="Password" required></div> --}}
                                <div class="btn-toolbar">
                                    <a href="javascript:void(0)"  class="btn btn--alt js-toggle-forms">Cancel</a> 
                                    <button type="submit" class="btn ml-1  Click-here" id="btnForgot">Submit</button>
                                    
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-divider"></div>
                <div class="col-sm-6 col-md-4 mt-3 mt-sm-0">
                    <h2 class="text-center">REGISTER</h2>
                    <div class="form-wrapper">
                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p><a href="{{url('regestration')}}" class="btn">create an account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="rt-container">
    <div class="col-rt-12">
        <div class="Scriptcontent">
        
      <!-- Message Box HTML -->
      {{-- <div class="Click-here">Click Me</div>         --}}
<div class="custom-model-main">
<div class="custom-model-inner">        
<div class="close-btn">×</div>
  <div class="custom-model-wrap">
      <div class="pop-up-content-wrap">
         {{-- <h2>Email sent successfully!</h2> --}}
         <h2  id="forgot_msg"></h2>
         {{-- <p>Please check Email for recovery password</p> --}}
      </div>
  </div>  
</div>  
<div class="bg-overlay"></div>
</div>
            <!-- End Message Box HTML -->
     
      </div>
  </div>
</div>


 <!-- jQuery -->
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
 <script>
 $(".Click-here").on('click', function() {
   $(".custom-model-main").addClass('model-open');
 }); 
 $(".close-btn, .bg-overlay").click(function(){
   $(".custom-model-main").removeClass('model-open');
 });
 </script>


@endsection 