@extends('adminpanal/layout')
@section('page_title','Manage Home Banner')

@section('container')
    

    <h1 class="mb-2">Manage Home Banner</h1>
     <div class="overview-wrap">
                                  
                                    {{-- <h2 class="title-1">ITEMS</h2> --}}


                                   <a href="{{url('admin/home_banner')}}"> <button  type="button" class="  au-btn au-btn-icon au-btn--blue">Back</button>
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
                               
                             
                                <form action="{{route('home_banner.maanage_home_banner_process')}}" method="post"  enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="btn_txt" class="control-label mb-1">Btn Txt</label>
                                                <input id="btn_txt" name="btn_txt" value="{{$btn_txt}}" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div> 
                                        
                                            
                                            <div class="col-lg-6">
                                                <label for="btn_link" class="control-label mb-1">Btn Link </label>
                                                <input id="btn_link" name="btn_link"  value="{{$btn_link}}" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                @error('btn_link')
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
                                            <label for="image" class="control-label mb-1">Image</label>
                                            <input id="image" name="image"  type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                            @if($image!='')
                                            <a href="{{asset('storage/media//banner/'.$image)}}" target="_blank">
                                            <img  width="80px" src="{{asset('storage/media//banner/'.$image)}}"/>
                                            </a> 
                                             @endif    
                                                  {{-- @if($image!='')
                                                    <img  width="50px" src="{{asset('storage/media/banner/'.$image)}}"/></td>
                                                @endif
                                            <td class="process">  --}}

                                          
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