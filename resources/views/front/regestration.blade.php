
@extends('front/layouts')
@section('page_title','Regestration')
@section('container')


<div class="page-content">
    <div class="holder mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><span>Create account</span></li>
            </ul>
        </div>
    </div>
    
    <div class="holder mt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-md-6">
                    <h2 class="text-center">CREATE AN ACCOUNT</h2>
                    <div class="form-wrapper">
                        <p>To access your whishlist, address book and contact preferences and to take advantage of our speedy checkout, create an account with us now.</p>
                        <form action="" id="frmRegestration">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group"><input type="text" name="name" class="form-control" placeholder="First name" required></div>
                                    <span class="field_error"  id="name_error"></span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group"><input type="text" name="Lname" class="form-control" placeholder="Last name" ></div>
                                   
                                </div>
                            </div>
                            <div class="form-group"><input type="text" name="email" class="form-control" placeholder="E-mail" required></div>
                            <span class="field_error"  id="email_error"></span>
                            <div class="form-group"><input type="text" name="mobile" class="form-control" placeholder="Mobile" required></div>
                            <span class="field_error"  id="mobile_error"></span>
                            <div class="form-group"><input type="password" name="password" class="form-control" placeholder="Password" required></div>
                            <span class="field_error"  id="password_error"></span>
                            <div class="form-group"><input type="password"  name="confirm_password" class="form-control" placeholder="Confirm Password" required></div>
                            <span class="field_error"  id="password_error"></span>
                           
                            <div id="mismatch_pwd_msg" class="field_error "> </div>
                          
                            <div class="clearfix"><input id="checkbox1" name="checkbox1" type="checkbox"  required > <label for="checkbox1">By registering your details you agree to our Terms and Conditions and privacy and cookie policy</label></div>
                            <div class="text-center  "><button type="submit" id="btnRegestration" class="btn">create an account</button></div>
                            <div  id="thank_msg" class="field_error  "></div>
                         
                           
                        @csrf
                        </form>
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
         <h2 id="thank_you_msg"></h2>
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

 </script>



@endsection 