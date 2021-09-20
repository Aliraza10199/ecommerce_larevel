@extends('adminpanal/layout')
@section('page_title','Manage Tax')
@section('tax_select','Active')


@section('container')
    

    <h1 class="mb-2">Manage Tax</h1>
     <div class="overview-wrap">
                                  
                                    {{-- <h2 class="title-1">ITEMS</h2> --}}


                                   <a href="{{url('admin/tax')}}"> <button  type="button" class="  au-btn au-btn-icon au-btn--blue">Back</button>
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
                               
                             
                                <form action="{{route('tax.maanage_tax_process')}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="tax" class="control-label mb-1">Tax Value</label>
                                                <input id="tax_value" name="tax_value" value="{{$tax_value}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>                                   
                                                @error('tax_value')
                                                    <div class="alert alert-primary" role="alert">
                                                    {{$message}} 
                                                    </div>
                                                @enderror
                                             </div>
                                            <div class="col-lg-6">
                                                <label for="tax" class="control-label mb-1">Tax Desc</label>
                                                <input id="tax_desc" name="tax_desc" value="{{$tax_desc}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>                                   
                                                @error('tax_desc')
                                                    <div class="alert alert-primary" role="alert">
                                                    {{$message}} 
                                                    </div>
                                                @enderror
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
                                </form>
                            </div>
                        </div>
                    </div>
               

            </div>
        </div>
    </div>
</div>


@endsection