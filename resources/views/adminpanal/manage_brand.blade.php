@extends('adminpanal/layout')
@section('page_title','Manage Brand')
@section('brand_select','Active')


@section('container')

@if($id>0)
@php
$image_required="";  
@endphp
     
 @else
  @php
 $image_required="required";
 @endphp
 @endif 
 
 @error('image.*')
 <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
     {{-- <span class="badge badge-pill badge-danger">Success</span> --}}
     {{$message}}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
     </button>
 </div>
 @enderror

    

    <h1 class="mb-2">Manage Brand</h1>
     <div class="overview-wrap">
                                  
                                    {{-- <h2 class="title-1">ITEMS</h2> --}}


                                   <a href="{{url('admin/brand')}}"> <button  type="button" class="  au-btn au-btn-icon au-btn--blue">Back</button>
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
                               
                             
                                <form action="{{route('brand.maanage_brand_process')}}" method="post"  enctype="multipart/form-data" >
                                  
                                    @csrf
                                    <div class="form-group">
                                        <label for="brand" class="control-label mb-1">Brand</label>
                                        <input id="brand" name="name" value="{{$name}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                    </div>
                                    @error('name')
                                         <div class="alert alert-primary" role="alert">
                                        {{$message}} 
                                        </div>
                                    @enderror

                                    <div class="form-group">
                                        <label for="image" class="control-label mb-1">Image</label>
                                        <input id="image" name="image"  type="file" class="form-control" aria-required="true" aria-invalid="false" {{{$image_required}}}>
                                       
                                        {{-- @if($image!='')
                                        <img  width="50px" src="{{asset('storage/media/'.$image)}}"/></td>
                                         @endif
                                    <td class="process"> --}}

                                        @error('image')
                                        <div class="alert alert-primary" role="alert">
                                    {{$message}} 
                                    </div>
                                        @enderror
                                        <td>@if($image!='')
                                            <img  width="50px" src="{{asset('storage/media/brand/'.$image)}}"/>
                                             @endif
                                        </td>
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