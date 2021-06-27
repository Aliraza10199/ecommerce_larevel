@extends('adminpanal/layout')
@section('page_title','Manage Coupon')

@section('container')
    

    <h1 class="mb-2">Manage Coupon</h1>
     <div class="overview-wrap">
                                  
                                    {{-- <h2 class="title-1">ITEMS</h2> --}}


                                   <a href="{{url('admin/coupon')}}"> <button  type="button" class="  au-btn au-btn-icon au-btn--blue">Back</button>
                                   </a>
                                </div> 

     <!-- MAIN CONTENT-->
     <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                               
                             
                                <form action="{{route('coupon.maanage_coupon_process')}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="title" class="control-label mb-1">Title</label>
                                        <input id="title" name="title" value="{{$title}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                    </div>
                                    @error('title')
                                         <div class="alert alert-primary" role="alert">
                                        {{$message}} 
                                        </div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="code" class="control-label mb-1">Code</label>
                                        <input id="code" name="code"  value="{{$code}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                    </div>
                                    @error('code')
                                         <div class="alert alert-primary" role="alert">
                                        {{$message}} 
                                        </div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="value" class="control-label mb-1">Value</label>
                                        <input id="value" name="value"  value="{{$value}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                    </div>
                                    @error('value')
                                         <div class="alert alert-primary" role="alert">
                                        {{$message}} 
                                        </div>
                                    @enderror
                                  
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                                           
                                           Submit
                                        </button>
                                    </div>
                                    <input type="hidden" name="id" value="{{$id}}"/>
                                </form>
                            </div>
                        </div>
                    </div>
               

            </div>
        </div>
    </div>
</div>


@endsection