@extends('adminpanal/layout')
@section('page_title','Manage Category')

@section('container')
    

    <h1 class="mb-2">Manage Category</h1>
     <div class="overview-wrap">
                                  
                                    {{-- <h2 class="title-1">ITEMS</h2> --}}


                                   <a href="{{url('admin/category')}}"> <button  type="button" class="  au-btn au-btn-icon au-btn--blue">Back</button>
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
                               
                             
                                <form action="{{route('category.maanage_category_process')}}" method="post"  enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="category_name" class="control-label mb-1">Category Name</label>
                                                <input id="category_name" name="category_name" value="{{$category_name}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                            </div> 
                                        
                                            <div class="col-lg-4">
                                                <label for="parent_category_id" class="control-label mb-1">Parent Category </label>
                                                <select id="parent_category_id" name="parent_category_id"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    <option value="0">Select Categories</option>
                                                        @foreach ($categorylist as $list)
                                                            @if($parent_category_id==$list->id)
                                                            <option selected value="{{$list->id}}">
                                                            @else
                                                            <option value="{{$list->id}}">
                                                                @endif
                                                                {{$list->category_name}}</option>
                                                        @endforeach
                                                    </select> 
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="category_slug" class="control-label mb-1">Category Slug</label>
                                                <input id="category_slug" name="category_slug"  value="{{$category_slug}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                @error('category_slug')
                                                <div class="alert alert-primary" role="alert">
                                                {{$message}} 
                                                </div>
                                                @enderror
                                            
                                            </div>    
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                            <label for="category_image" class="control-label mb-1">Image</label>
                                            <input id="category_image" name="category_image"  type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                            @if($category_image!='')
                                            <a href="{{asset('storage/media/category/'.$category_image)}}" target="_blank">
                                            <img  width="80px" src="{{asset('storage/media/category/'.$category_image)}}"/>
                                            </a> 
                                            @endif    
                                        {{--           @if($category_image!='')
                                                    <img  width="50px" src="{{asset('storage/media/'.$image)}}"/></td>
                                                @endif
                                            <td class="process"> --}}

                                            @error('category_image')
                                            <div class="alert alert-primary" role="alert">
                                            {{$message}} 
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                        <label for="is_home" class="control-label mb-1">Show in Home page</label>
                                        <input id="is_home" name="is_home"  type="checkbox"  aria-required="true" aria-invalid="false" {{$is_home_selected}}>
                                          
                                    {{--           @if($category_image!='')
                                                <img  width="50px" src="{{asset('storage/media/'.$image)}}"/></td>
                                            @endif
                                        <td class="process"> --}}

                                        @error('is_home')
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