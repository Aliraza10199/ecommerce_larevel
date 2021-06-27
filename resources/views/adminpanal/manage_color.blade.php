@extends('adminpanal/layout')
@section('page_title','Manage Color')
@section('color_select','Active')


@section('container')
    

    <h1 class="mb-2">Manage Color</h1>
     <div class="overview-wrap">
                                  
                                    {{-- <h2 class="title-1">ITEMS</h2> --}}


                                   <a href="{{url('admin/color')}}"> <button  type="button" class="  au-btn au-btn-icon au-btn--blue">Back</button>
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
                               
                             
                                <form action="{{route('color.maanage_color_process')}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="color" class="control-label mb-1">Color</label>
                                        <input id="color" name="color" value="{{$color}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                    </div>
                                    @error('color')
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