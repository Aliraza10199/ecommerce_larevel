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
               
                               
                             
                          <form action="{{route('coupon.maanage_coupon_process')}}" method="post" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">                                         
                                            
                                        <div class="card-body">

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="title" class="control-label mb-1">Title</label>
                                                        <input id="title" name="title" value="{{$title}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                        @error('title')
                                                        <div class="alert alert-primary" role="alert">
                                                        {{$message}} 
                                                        </div>
                                                            @enderror
                                                    </div>
                                            
                                        
                                                    <div class="col-lg-6">
                                                        <label for="code" class="control-label mb-1">Code</label>
                                                        <input id="code" name="code"  value="{{$code}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                
                                                        @error('code')
                                                            <div class="alert alert-primary" role="alert">
                                                            {{$message}} 
                                                            </div>
                                                        @enderror
                                                    </div> 
                                            
                                                </div>
                                            </div>

                                     
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="value" class="control-label mb-1">Value</label>
                                                        <input id="value" name="value"  value="{{$value}}"  class="form-control" aria-required="true" aria-invalid="false" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="type" class="control-label mb-1">Type</label>
                                                        <select id="type" name="type"  class="form-control" aria-required="true" aria-invalid="false" required>
                                                            @if($type=='Value')
                                                            <option value="Value" selected>Value</option>
                                                            <option value="Per">Percentage</option>
                                                            @elseif($type=='Per')
                                                            <option value="Value" selected>Value</option>
                                                            <option value="Per">Per</option>
                                                            @else
                                                                <option value="Value" selected>Value</option>
                                                                <option value="Per" >Per</option>                  
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="min_order_amt" class="control-label mb-1">Min Order Amount</label>
                                                        <input id="min_order_amt" name="min_order_amt" value="{{$min_order_amt}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                        @error('min_order_amt')
                                                        <div class="alert alert-primary" role="alert">
                                                        {{$message}} 
                                                        </div>
                                                            @enderror
                                                    </div>
                                            
                                        
                                                    <div class="col-lg-6">
                                                        <label for="is_one_time" class="control-label mb-1">Is one Time</label>                                                
                                                        <select id="is_one_time" name="is_one_time"   class="form-control" aria-required="true" aria-invalid="false" required>
                                                            @if($is_one_time=='1')
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                            @else
                                                                <option value="0" selected>No</option>
                                                                <option value="1" >Yes</option>                  
                                                            @endif
                                                        </select>
                                                    </div> 
                                            
                                                </div>
                                            </div>


                                   

                                    
                                  
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                                           
                                           Submit
                                        </button>
                                    </div>
                                    <input type="hidden" name="id" value="{{$id}}"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            
           
        </div>
    </div>
</div>


@endsection