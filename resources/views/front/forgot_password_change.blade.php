
@extends('front/layouts')
@section('page_title','Change Password')
@section('container')


<div class="page-content">
    <div class="holder mt-0">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><span>Change Password</span></li>
            </ul>
        </div>
    </div>
    <div class="holder mt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-md-6">
                    <h2 class="text-center">CREATE NEW PASSWORD</h2>
                    <div class="form-wrapper">
                        <form action="" id="frmUpdatePassword">
                            
                            <label for="">Password<span>*</span></label>
                            <div class="form-group"><input type="password" name="password" class="form-control" placeholder="Password" required></div>
                            <span class="field_error"  id="password_error"></span>
                            <div class="form-group"><input type="password"  name="confirm_password" class="form-control" placeholder="Confirm Password" required></div>
                            <span class="field_error"  id="password_error"></span>
                            
                            <div class="text-center"><button type="submit" id="btnUpdatePassword" class="btn">Update Password</button></div>
                            <div id="password_error" class="field_error"></div> 
                        @csrf
                        </form>
                        <div id="mismatch_pwd_msg" class="field_error thank_g_msg"> </div>
                        <div id="thank_you_msg" class="field_error"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    <input type="hidden" id="qty" value="1">
  <form id="frmAddTocard">
    <input type="hidden" id="color_id" name="color_id">
    <input type="hidden" id="size_id" name="size_id">
    <input type="hidden" id="pqty" name="pqty">
    <input type="hidden" id="product_id" name="product_id">
    @csrf
</form>





@endsection 