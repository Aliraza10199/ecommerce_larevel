@extends('adminpanal/layout')
@section('page_title','Manage Product')
@section('product_select','Active')


@section('container')


@if($id>0)
@php
$image_required=""; 
@endphp
     
 @else
 @php
 $image_required="requireds";
 @endphp
  
     
 @endif  


    


        <h1 class="mb-2">Manage Product</h1>
       
          
        @if(session()->has('sku_error'))
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            {{-- <span class="badge badge-pill badge-danger">Success</span> --}}
            {{session('sku_error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
          
        @error('image_attr.*')
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            {{-- <span class="badge badge-pill badge-danger">Success</span> --}}
            {{$message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @enderror
        @error('image.*')
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
            {{-- <span class="badge badge-pill badge-danger">Success</span> --}}
            {{$message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @enderror
        <div class="overview-wrap">                                 
                                        {{-- <h2 class="title-1">ITEMS</h2> --}}

            <a href="{{url('admin/product')}}"> <button  type="button" class="  au-btn au-btn-icon au-btn--blue">Back</button></a>
        </div> 

     <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <form action="{{route('product.maanage_product_process')}}" method="post"  enctype="multipart/form-data"> 
                    {{-- help for img upload --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                            
                                <div class="card-body">
                                
                                    
                                                                    
                                    @csrf                       
                               
                                    <div class="form-group">
                                        <label for="name" class="control-label mb-1">Name</label>
                                        <input id="name" name="name" value="{{$name}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                        @error('name')
                                        <div class="alert alert-primary" role="alert">
                                       {{$message}} 
                                        </div>
                                         @enderror
                                    
                                    </div>
                                                                

                                    <div class="form-group">
                                        <label for="slug" class="control-label mb-1">Slug</label>
                                        <input id="slug" name="slug" value="{{$slug}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>                                 
                                        @error('slug')
                                        <div class="alert alert-primary" role="alert">
                                       {{$message}} 
                                       </div>
                                         @enderror
                                    </div>
                                                              

                                    <div class="form-group">
                                            <label for="image" class="control-label mb-1">Image</label>
                                            <input id="image" name="image"  type="file" class="form-control" aria-required="true" aria-invalid="false" {{{$image_required}}}>
                                           
                                            @if($image!='')
                                            <img  width="50px" src="{{asset('storage/media/'.$image)}}"/></td>
                                             @endif
                                        <td class="process">

                                            @error('image')
                                            <div class="alert alert-primary" role="alert">
                                        {{$message}} 
                                        </div>
                                            @enderror
                                    </div>
                                    
                                        
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                    
                                                    <label for="category" class="control-label mb-1">Category</label>
                                                    <select id="category" name="category"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    <option value="">Select Categories</option>
                                                        @foreach ($categorylist as $list)
                                                            @if($category==$list->id)
                                                            <option selected value="{{$list->id}}">
                                                            @else
                                                            <option value="{{$list->id}}">
                                                                @endif
                                                                {{$list->category_name}}</option>
                                                        @endforeach
                                                    </select>                                            
                                            
                                                @error('category')
                                                    <div class="alert alert-primary" role="alert">
                                                    {{$message}} 
                                                    </div>
                                                @enderror
                                            </div>
                                                                
                                                <div class="col-md-4">
                                                        <label for="brand" class="control-label mb-1">Brand</label>
                                                        {{-- <input id="brand" name="brand" value="{{$brand}}"  type="text" class="form-control" aria-required="true" aria-invalid="false" required> --}}
                                                        <select id="brand" name="brand"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                            <option value="">Select Brand</option>
                                                                @foreach ($brands as $list)
                                                                    @if($brand==$list->id)
                                                                    <option selected value="{{$list->id}}">
                                                                    @else
                                                                    <option value="{{$list->id}}">
                                                                        @endif
                                                                        {{$list->name}}</option>
                                                                @endforeach
                                                            </select>                                   
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <label for="model" class="control-label mb-1">Model</label>
                                                    <input id="model" name="model" value="{{$model}}"   type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                </div>  
                                        </div>
                                    </div>
                              
                           

                                    <div class="form-group">
                                        <label for="shot_desc" class="control-label mb-1">Shot_desc</label>
                                        <textarea id="shot_desc" name="shot_desc"    type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$shot_desc}}</textarea>
                                    </div>
                                 
                                    <div class="form-group">
                                        <label for="desc" class="control-label mb-1">Desc</label>
                                        <textarea id="desc" name="desc"    type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$desc}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="keywords" class="control-label mb-1">Keywords</label>
                                        <textarea id="keywords" name="keywords"    type="text" class="form-control" aria-required="true" aria-invalid="false" required">{{$keywords}}</textarea>
                                 
                                    </div>

                                    <div class="form-group">
                                        <label for="technical_specification" class="control-label mb-1">Technical_specification</label>
                                        <textarea id="technical_specification" name="technical_specification"    type="text" class="form-control" aria-required="true" aria-invalid="false" required">{{$technical_specification}}</textarea>
                                 
                                    </div>

                                    <div class="form-group">
                                        <label for="uses" class="control-label mb-1">Uses</label>
                                        <textarea id="uses" name="uses"    type="text" class="form-control" aria-required="true" aria-invalid="false" required">{{$uses}}</textarea>
                                 
                                    </div>

                                    <div class="form-group">
                                        <label for="waranty" class="control-label mb-1">Waranty</label>
                                        <textarea id="waranty" name="waranty"    type="text" class="form-control" aria-required="true" aria-invalid="false" required">{{$waranty}}</textarea>
                                 
                                    </div>    
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="lead_time" class="control-label mb-1">Lead Time</label>
                                                <input id="lead_time" name="lead_time" value="{{$lead_time}}"   type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            
                                            </div>
                                            <div class="col-md-4">
                                                <label for="tax_id" class="control-label mb-1">Tax ID</label>
                                                <select id="tax_id" name="tax_id"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    <option value="">Select Tax</option>
                                                        @foreach ($taxes as $list)
                                                            @if($tax_id==$list->id)
                                                            <option selected value="{{$list->id}}">
                                                            @else
                                                            <option value="{{$list->id}}">
                                                                @endif
                                                                {{$list->tax_desc}}</option>
                                                        @endforeach
                                                    </select>                                                            
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <label for="tax_type" class="control-label mb-1">Tax Type</label>
                                                <input id="tax_type" name="tax_type" value="{{$tax_type}}"   type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            
                                            </div> --}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="is_promo" class="control-label mb-1">Is Promo</label>
                                                <select id="is_promo" name="is_promo"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    @if($is_promo=='1')
                                                    <option value="1" selected>Yes</option>
                                                    <option value="0">No</option>
                                                    @else
                                                        <option value="0" selected>No</option>
                                                        <option value="1" >Yes</option>
                                               
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-3">   
                                                <label for="is_featured" class="control-label mb-1">Is Featured</label>
                                                <select id="is_featured" name="is_featured"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    @if($is_featured=='1')
                                                    <option value="1" selected>Yes</option>
                                                    <option value="0">No</option>
                                                    @else
                                                        <option value="0" selected>No</option>
                                                        <option value="1" >Yes</option>
                  
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="is_discounted" class="control-label mb-1">Is discounted</label>
                                                <select id="is_discounted" name="is_discounted"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    @if($is_discounted=='1')
                                                    <option value="1" selected>Yes</option>
                                                    <option value="0">No</option>
                                                    @else
                                                        <option value="0" selected>No</option>
                                                        <option value="1" >Yes</option>                  
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="is_discounted" class="control-label mb-1">Is discounted</label>
                                                <select id="is_discounted" name="is_discounted"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    @if($is_discounted=='1')
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
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <h1 class="mb-1">Product Images</h1>
                            <h5 class="mb-3">Image attribute items</h5>
                        </div>
                            <div class="col-lg-12" >
                               
                              
                              
                                        <div class="card" >                                       
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row" id="product_images_box">  
                                                        
                                                        @php
                                                        $loop_count_num=1;
                                                        @endphp
                        
                                                        @foreach ($productImagesArr as $key=>$val)
                        
                                                        @php
                                                         $loop_count_prev= $loop_count_num;
                                                        $pIArr=(array)$val;
                                                       
                                                        // echo '<pre>';
                                                        // print_r($pIArr);
                                                        @endphp
                                                       
                                                       <input id="piid" name="piid[]"  value="{{$pIArr['id']}}"  type="hidden" class="form-control" aria-required="true" aria-invalid="false" >   
                                                                                  
                                                         <div class="col-md-4 product_images_{{$loop_count_num++}}" >
                                                                <label for="images" class="control-label mb-1">Images </label>
                                                                <input id="images" name="images[]"  type="file" class="form-control" aria-required="true" aria-invalid="false">
                                                               
                                                                @if($pIArr['images']!='')
                                                                <a href="{{asset('storage/media/'.$pIArr['images'])}}" target="_blank">
                                                                <img  width="50px" src="{{asset('storage/media/'.$pIArr['images'])}}"/>
                                                                 </a> 
                                                                @endif
                                                            {{-- <td class="process"> --}}

                                                                {{-- @error('images')
                                                                <div class="alert alert-primary" role="alert">
                                                                {{$message}} 
                                                                </div>
                                                                @enderror --}}
                                                         </div>


                                                         <div class="col-md-2" >
                                                            <label for="images" class="control-label mb-1">
                                                               Button </label>
                                                               
                                                               @if($loop_count_num==2)
                                                            <button type="button" class="btn btn-success btn-lg" onclick="add_images_more()">
                                                                <i class="fa fa-plus"></i>&nbsp; Add</button>  
                                                                @else 
                                                                <a href="{{url('admin/product/product_images_delete/')}}/{{$pIArr['id']}}/{{$id}}">
                                                                <button type="button" class="btn btn-danger " >
                                                                    <i class="fa fa-plus"></i>&nbsp; Remove</button>  </a>
                                                                    @endif

                                                        </div>

                                                        @endforeach   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            
                        </div>


                        <div class="col-lg-12">
                            <h1 class="mb-1">Product Attribute</h1>
                            <h5 class="mb-3">Image attribute items</h5>
                        </div>
                            <div class="col-lg-12" id="product_attr_box">
                               
                               @php
                                $loop_count_num=1
                                @endphp

                                @foreach ($productAttrArr as $key=>$val)

                                @php
                                $pAArr=(array)$val;
                                $loop_count_prev= $loop_count_num
                                // echo '<pre>';
                                // print_r($pAArr);
                                @endphp
                               
                               <input id="paid" name="paid[]"  value="{{$pAArr['id']}}"  type="hidden" class="form-control" aria-required="true" aria-invalid="false" >   
                              
                                        <div class="card" id="product_attr_{{$loop_count_num++}}">                                       
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">                                                                  
                                                            <div class="col-md-2">
                                                                    <label for="sku" class="control-label mb-1">SKU</label>
                                                                    <input id="sku" name="sku[]"  value="{{$pAArr['sku']}}"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>                                  
                                                            </div>
                                                            
                                                            <div class="col-md-2">
                                                                <label for="mrp" class="control-label mb-1">MRP</label>
                                                                <input id="mrp" name="mrp[]"   value="{{$pAArr['mrp']}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                            </div>  

                                                            <div class="col-md-2">
                                                                <label for="price" class="control-label mb-1">PRICE</label>
                                                                <input id="price" name="price[]" value="{{$pAArr['price']}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                            </div>  
                                                           


                                                         <div class="col-md-3">
                                                                <label for="size" class="control-label mb-1">SIZE</label>
                                                                <select id="size" name="size[]" value="{{$pAArr['size_id']}}" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                                   
                                                                <option value="">Select size</option>
                                                                    @foreach ($sizes as $list)
                                                                    @if($pAArr['size_id']==$list->id)
                                                                        
                                                                    <option  value="{{$list->id}}" selected>{{$list->size}}</option>
                                                                    @else
                                                                    <option  value="{{$list->id}}" >{{$list->size}}</option>
                                                                         @endif                                                      
                                                                    @endforeach
                                                                </select>                                            
                                                        
                                                            @error('size_id[]')
                                                                    <div class="alert alert-primary" role="alert">
                                                                    {{$message}} 
                                                                    </div>
                                                                @enderror
                                                         </div>

                                                         <div class="col-md-3">
                                                    
                                                                <label for="color" class="control-label mb-1">COLOR</label>
                                                                <select id="color" name="color[]"  value="{{$pAArr['color_id']}}" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                                <option value="">Select Color</option>
                                                                    @foreach ($colors as $list)
                                                                    @if($pAArr['color_id']==$list->id)
                                                                    <option  value="{{$list->id}}" selected>{{$list->color}}</option>
                                                                       @else
                                                                       <option  value="{{$list->id}}" >{{$list->color}}</option> 
                                                                       @endif                                                       
                                                                    @endforeach
                                                                </select>                                            
                                                        
                                                            @error('color')
                                                                    <div class="alert alert-primary" role="alert">
                                                                    {{$message}} 
                                                                    </div>
                                                                @enderror
                                                         </div>
                                                         <div class="col-md-2">
                                                            <label for="qty" class="control-label mb-1">QTY</label>
                                                            <input id="qty" name="qty[]"  value="{{$pAArr['qty']}}" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                        </div>  
                                                         
                                                         <div class="col-md-4">
                                                                <label for="image_attr" class="control-label mb-1">Image attr</label>
                                                                <input id="image_attr" name="image_attr[]"  type="file" class="form-control" aria-required="true" aria-invalid="false">
                                                               
                                                                @if($pAArr['image_attr']!='')
                                                                <img  width="50px" src="{{asset('storage/media/'.$pAArr['image_attr'])}}"/></td>
                                                                 @endif
                                                            <td class="process">

                                                                @error('image_attr')
                                                                <div class="alert alert-primary" role="alert">
                                                                {{$message}} 
                                                                </div>
                                                                @enderror
                                                         </div>


                                                         <div class="col-md-2">
                                                            <label for="btn" class="control-label mb-1">
                                                               Button </label>
                                                               @if($loop_count_num==2)
                                                            <button type="button" class="btn btn-success btn-lg" onclick="add_more()">
                                                                <i class="fa fa-plus"></i>&nbsp; Add</button>  
                                                                @else 
                                                                <a href="{{url('admin/product/product_attr_delete/')}}/{{$pAArr['id']}}/{{$id}}">
                                                                <button type="button" class="btn btn-danger btn-lg" >
                                                                    <i class="fa fa-plus"></i>&nbsp; Remove</button>  </a>
                                                                    @endif

                                                    </div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach       
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
<script>

    var loop_count=1;
    // for apend product attribute grid html by add button 
    function add_more(){
        loop_count++;
        // alert("s");
        // 1st way herer to create 1by1 html seprately
        var html=' <input id="paid" name="paid[]" type="hidden"    value="" class="form-control" aria-required="true" aria-invalid="false" >   <div class="card" id="product_attr_'+loop_count+'"><div class="card-body"><div class="form-group"><div class="row">';                                        


        html+=' <div class="col-md-2"><label for="sku" class="control-label mb-1">SKU</label><input id="sku" name="sku[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required></div> ';                                  
       
        html+=' <div class="col-md-2"><label for="mrp" class="control-label mb-1">MRP</label><input id="mrp" name="mrp[]"    type="text" class="form-control" aria-required="true" aria-invalid="false" required></div> ';
                                                                                                                 
                                                                                                              
         html+=' <div class="col-md-2"><label for="price" class="control-label mb-1">PRICE</label><input id="price" name="price[]"   type="text" class="form-control" aria-required="true" aria-invalid="false" required> </div>'; 
                                                                
        //   2nd way is here whole dropdown pick and use in below                                                      
         var size_id_html=jQuery('#size').html(); 
         size_id_html= size_id_html.replace("selected","") ;                                                                                          
         html+='<div class="col-md-3"><label for="size" class="control-label mb-1">SIZE</label><select id="size" name="size[]" type="text" class="form-control" aria-required="true" aria-invalid="false" >'+size_id_html+'</select> </div>';   
                                                                
         var color_id_html=jQuery('#color').html();  
         color_id_html= color_id_html.replace("selected","") ;   
                                                                                                         
         html+='<div class="col-md-3"> <label for="color" class="control-label mb-1">COLOR</label> <select id="color" name="color[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" >'+color_id_html+'</select> </div>';   
                                                                
         html+='  <div class="col-md-2"> <label for="qty" class="control-label mb-1">QTY</label><input id="qty" name="qty[]"   type="text" class="form-control" aria-required="true" aria-invalid="false" required> </div> '; 
                                                        
         html+=' <div class="col-md-4"> <label for="image_attr" class="control-label mb-1">Image attr</label><input id="image_attr" name="image_attr[]"  type="file" class="form-control" aria-required="true" aria-invalid="false"> </div>   ';  
                                                               
                                                                  
         html+='<div class="col-md-2"><label for="btn" class="control-label mb-1">  Button </label>  <button type="button" class="btn btn-danger btn-lg" onclick=remove_more("'+loop_count+'")> <i class="fa fa-minus"></i>&nbsp; Remove</button> </div> ';     
                                                            

        html+='</div></div></div></div></div></div></div>'                   
        jQuery('#product_attr_box').append(html);                                                                  

    }

    function remove_more(loop_count)
    {
        jQuery('#product_attr_'+loop_count).remove();
    }



    var loop_images_count=1;
    function add_images_more()
    {
       
     loop_images_count++;                                                   
     var html='<input id="piid" name="piid[]" type="hidden"   value="" class="form-control" aria-required="true" aria-invalid="false" >   <div class="col-md-4 product_images_'+loop_images_count+'"><label for="images" class="control-label mb-1">Images</label><input id="images" name="images[]"  type="file" class="form-control" aria-required="true" aria-invalid="false"> </div>';  
                                                                                                                                                                                      
     html+='<div class="col-md-2 product_images_'+loop_images_count+'"><label for="images" class="control-label mb-1">  Button </label>  <button type="button" class="btn btn-danger btn-lg" onclick=remove_images_more("'+loop_images_count+'")> <i class="fa fa-minus"></i>&nbsp; Remove</button></div>' ;     

        
        jQuery('#product_images_box').append(html);    
    }


    function remove_images_more(loop_images_count)
    {
        jQuery('.product_images_'+loop_images_count).remove();
    }

</script>

@endsection