



function change_product_color_image(img,color,price,mrp)
{
	//   alert(price);
	//   alert(color);
    jQuery('#color_id').val(color);
      	jQuery('.zoomContainer').html('<img src="'+img+'" class="zoom" alt="" data-zoom-image="'+img+'">');
      	jQuery('.price_product').html('<div class="prd-block_price price_product"><span class="prd-block_price--actual">$'+price+'</span> <span class="prd-block_price--old">$'+mrp+'</span></div>');

}

function showcolor(size){
    // alert("s");
    //data populated to size id feom size using jquery
    jQuery('#size_id').val(size);
  
   

    jQuery('.product_color').hide();   
    jQuery('.size_'+size).show();   
    jQuery('.size_link_highlited').css('border','0px');   
    jQuery('#size_'+size).css('border','1px solid black');   
    
}
function home_add_to_card(id,color_str_id,size_str_id)
{
    // alert(id);
    jQuery('#size_id').val(size_str_id);
    jQuery('#color_id').val(color_str_id); 
    add_to_card(id,color_str_id,size_str_id)

}

function add_to_card(id,color_str_id,size_str_id)
{
    // alert(id);
    jQuery('#add_to_card_msg').html('')
    
    var size_id =jQuery('#size_id').val();
    var color_id =jQuery('#color_id').val();
    jQuery('#color_idd').text(color_id);
    jQuery('#size_idd').text(size_id);
    
   
    

   

    if(color_str_id==0 && size_str_id==0){
        size_id='no';
        color_id='no;'
    }

    if(size_id=='' &&  size_id!='no')
    {
        jQuery('#add_to_card_msg').html('<div class="alert alert-success fade in alert-dismissible show" style="margin-top:18px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="font-size:20px">×</span></button><strong>Please select Size</strong> </div>')
    }else if(color_id=='' &&  color_id!='no')
    {
        jQuery('#add_to_card_msg').html('<div class="alert alert-success fade in alert-dismissible show" style="margin-top:18px;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="font-size:20px">×</span></button>    <strong>Please select Color!</strong> </div>')
    }else{
        // alert('thanks')
        jQuery('#product_id').val(id);
       
        jQuery('#pqty').val(jQuery('#qty').val());
        var qtyd=jQuery('#pqty').val();
        jQuery('#qtyd').text(qtyd);



        // jQuery('#price_card').val(price);
        // var price_=jQuery('#price_card').val(); 
        // price_card=price_*qtyd;
        // alert(price_card);
        // jQuery('#price_card_click').text(price_card);


        jQuery.ajax({
            url:'/add_to_card',
            data:jQuery('#frmAddTocard').serialize(),
            type:'post',
            success:function(result){
              var totalprice=0;
                // console.log(result);
                // alert('Product '+result.msg)
                // alert('Product '+result.msg)
                if(result.msg=='not_avaliable'){
                    alert(result.datas);
                    // alert('ss');
                    jQuery('#qty_left').html(result.datas);
                  }else{
                    alert("Product "+result.msg);
                    if(result.totalItem==0)
                    {
                        jQuery('.minicart-qty').html('0');
                        jQuery('.minicart-drop-content').remove();


                    }else
                    {
                    
                        jQuery('.minicart-qty').html(result.totalItem);
                        var total_price_cart=jQuery('#total_shopping_cart').text();
                        //  alert(total_price_cart)
                        jQuery('#minicart-total').text(total_price_cart);

                        var html='';
                        jQuery.each(result.datas, function(arrKey,arrVal)
                        {
                            //  jQuery.each(arrVal, function(key,val){
                                // console.log(arrKey);
                                console.log(arrVal);
                            //   });
                            totalprice=parseInt(totalprice)+(parseInt(arrVal.qty)*parseInt(arrVal.price));
                        
                            html+='<div class="minicart-prd" ><div class="minicart-prd-image"><a href="#"><img src="'+PRODUCT_IMG+'/'+arrVal.image+'" data-srcset="" class="lazyload" alt=""></a></div><div class="minicart-prd-name"><h2><a href="#">'+arrVal.name+'</a></h2></div><div class="minicart-prd-qty"><span>qty:</span> <b>'+arrVal.qty+'</b></div><div class="minicart-prd-price"><span>price:</span> <b>$ '+arrVal.price*arrVal.qty+'</b></div></div>';
                        });
                    
                        
                    }
                    html+='<div class="minicart-drop-total"><div class="float-right"><span class="minicart-drop-summa"><span>Cart Subtotal:</span> <b> $ '+totalprice+'</b></span><div class="minicart-drop-btns-wrap"><a href="" class="btn"><i class="icon-check-box"></i><span>checkout</span></a> <a href="cart.html" class="btn btn--alt"><i class="icon-handbag"></i><span>view cart</span></a></div></div><div class="float-left"><a href="'+viewcard_link+'" class="btn btn--alt"><i class="icon-handbag"></i><span>view cart</span></a></div></div>';
                    // html+='</div>';
                    jQuery('.minicart-drop-content').html(html);
                 }
         
            }
            // now using URL form-data goes to controler add_to_card
        });
        
        
    }
    // return size_id;
   
}

function deleteCardProduct(pid,color,size,attr_id)
{
    
   
    jQuery('#color_id').val(color);
    jQuery('#size_id').val(size);
    jQuery('#qty').val(0)
    add_to_card(pid,color,size);
    jQuery('#card_box'+attr_id).hide();
}

function sort_by(){

    var sort_by_value=jQuery('#sort_by_value').val();
    alert(sort_by_value);
    jQuery('#sort').val(sort_by_value);
    jQuery('#categoryfilter').submit();
}
   
// function pricebtn(){
//     var price=jQuery('ul#sort_by_price li').text();
//     alert(price);
    
    // jQuery('#filter_price').val(price);
    // jQuery('#categoryfilter').submit();

// }

$('ul#sort_by_price li').click(function()
    {

        // alert($(this).text());
        var pp=$(this).text();
        alert(pp);
         jQuery('#filter_price').val(pp);
    jQuery('#categoryfilter').submit();
    });

    

function setColor(color, type){
    var color_str=jQuery('#color_filter').val();
    if(type==1){
        var new_color_str=color_str.replace(color+':','');
        jQuery('#color_filter').val(new_color_str);
        
    }else{
        jQuery('#color_filter').val(color+':'+color_str);
        jQuery('#categoryfilter').submit();
    }
 
    jQuery('#categoryfilter').submit();

    // alert(color);
}



function funSearch(){
    var search_str=jQuery('#search_str').val();
    if(search_str!='' && search_str.length>3){
        window.location.href='/search/'+search_str;
    }
}

// ------------------------------------------------------------------------


// using ajex to send data in post in database customer
jQuery('#frmRegestration').submit(function(e){
   
    e.preventDefault();
    jQuery('#thank_you_msg').html('');
    jQuery('.field_error').html('');

    jQuery.ajax({
        url:'regestration_process',
        data:jQuery('#frmRegestration').serialize(),
        type:'post',
        success:function(result){

   
           
            jQuery('#mismatch_pwd_msg').html(result.msgs);
            jQuery('#thank_msg').html(result.msga);
            // for checking whuck filed error has come in post result in console
            if(result.status=="error"){
                jQuery.each(result.error,function(key,val){
                        // console.log(key);
                        // console.log(val);
                        jQuery('#'+key+'_error').html(val[0]);
                });
            } 
            // emprto form with sucess messag show
            if(result.status=="success"){
               
                jQuery('#thank_msg').html('');
                    $(".custom-model-main").addClass('model-open');
                 
                  $(".close-btn, .bg-overlay").click(function(){
                    $(".custom-model-main").removeClass('model-open');
                  });
                jQuery('.field_error').html('');
                jQuery('#frmRegestration')[0].reset();
                jQuery('#thank_you_msg').html(result.msg);
            }
            
        }
    });
});

//for Login user page
jQuery('#frmLogin').submit(function(e){
    jQuery('#login_msg').html('');
    e.preventDefault();
   
    jQuery.ajax({
        url:'/login_process',
        data:jQuery('#frmLogin').serialize(),
        type:'post',
        success:function(result){
            // for checking whuck filed error has come in post result in console
            if(result.status=="error"){

                jQuery('#login_msg').html(result.msg);
                // jQuery.each(result.error,function(key,val){
                //         // console.log(key);
                //         // console.log(val);
                //         jQuery('#'+key+'_error').html(val[0]);
                // });
            } 
            // emprto form with sucess messag show
            if(result.status=="success"){
                // alert('s');
                window.location.href='/'

              
                // jQuery('#frmLogin')[0].reset();
                // jQuery('#thank_you_msg').html(result.msg);
            }
            
        }
    });
});


//for forget user page
jQuery('#frmForgot').submit(function(e){
    jQuery('#forgot_msg').html("Please wait..");
    e.preventDefault();
   
    jQuery.ajax({
        url:'/forgot_password',
        data:jQuery('#frmForgot').serialize(),
        type:'post',
        success:function(result){
            // for checking whuck filed error has come in post result in console
            console.log(result);

                jQuery('#forgot_msg').html(result.msg);                
        }
    });
});

jQuery('#frmUpdatePassword').submit(function(e){
    jQuery('#thank_you_msg').html("Please wait...");
    jQuery('#thank_you_msg').html("");
    jQuery('#mismatch_pwd_msg').html('');
    e.preventDefault();
    jQuery.ajax({
      url:'/forgot_password_change_process',
      data:jQuery('#frmUpdatePassword').serialize(),
      type:'post',
      success:function(result){

        console.log(result);
        jQuery('#mismatch_pwd_msg').html(result.msgs);
        jQuery('#frmUpdatePassword')[0].reset();
        jQuery('#thank_you_msg').html(result.msg);
      }
    });
  });
  


//   jQuery('#formcheckoutCheckbox2').click(function(e){

//     var box=jQuery('#formcheckoutCheckbox2').val();
//     alert(box);

// });


function applCcouponCode(){

    // alert('a');
    jQuery('#coupon_code_msg').html('');
  
    var coupon_code=jQuery('#coupon_code').val();
    if(coupon_code!=''){

        jQuery.ajax({
            type:'post',
            url:'/apply_coupon_code',
            data:'coupon_code='+coupon_code+'&_token='+jQuery(
                "[name='_token']").val(),
                success:function(result)
                {
                    console.log(result.status);
                    if(result.status=='success'){
                    jQuery('.show_coupon_box').removeClass('hide');
                    jQuery('#coupon_code_str').html(coupon_code);
                    jQuery('#total_price').html('$ '+result.totalPrice);
                    jQuery('.apply_coupon_code_box').hide();
                    jQuery('.show_coupon_box').html('');
                    }else{
                    
                    }
                    jQuery('#coupon_code_msg').html(result.msg);
                }
                });
            }else{
                jQuery('#coupon_code_msg').html('Please enter coupon code');
            }
        }


function remove_coupon_code(){
    jQuery('#coupon_code_msg').html('');
    var coupon_code=jQuery('#coupon_code').val();
    jQuery('#coupon_code').val('');
    if(coupon_code!=''){
        jQuery.ajax({
        type:'post',
        url:'/remove_coupon_code',
        data:'coupon_code='+coupon_code+'&_token='+jQuery("[name='_token']").val(),
        success:function(result){
            if(result.status=='success'){
            jQuery('.show_coupon_box').addClass('hide');
            jQuery('#coupon_code_str').html('');
            jQuery('#total_price').html('$ '+result.totalPrice);
            jQuery('.apply_coupon_code_box').show();
            }else{
            
            }
            jQuery('#coupon_code_msg').html(result.msg);
        }
        });
    }
}

// $(document).ready(function() {
//     $("#basic-form").validate();
//     });



jQuery('#frmPlaceOrder').submit(function(e){
    jQuery('#order_place_msg').html("Please wait...");
    // jQuery('#thank_you_msg').html("");
    // jQuery('#mismatch_pwd_msg').html('');
    e.preventDefault();
    jQuery.ajax({
      url:'/place_order',
      data:jQuery('#frmPlaceOrder').serialize(),
      type:'post',
      success:function(result){

        // console.log(result);
        if(result.status=='success'){
             
            
            window.location.href="/order_placed"
        }else
        {
            if(result.status=='jazzcash')
            {
                window.location.href="/do_checkout_v"
                //  console.log(result.status);
            }else{
               

            }  

        
        }
     

        jQuery('#order_place_msg').html(result.msg);
      }
    });
  });



//   NNNNNNNNNNNNNNNNNNNNNNNNNNNN







$(document).ready(function(){
  
 
    $('#btn12').click(function(){
      
     var name_error = '';
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     
     if($.trim($('#name1').val()).length == 0)
     {
       

        _error = ' required';
      $('#name_error').text(_error);
      $('#namese').addClass('has-error');
     }else
        if($.trim($('#email1').val()).length == 0)
        {
           _error = ' required';
         $('#name_error').text(_error);
         $('#email1').addClass('has-error');
        
     }else
        if($.trim($('#mobile1').val()).length == 0)
        {
           _error = ' required';
         $('#name_error').text(_error);
         $('#mobile1').addClass('has-error');
        
     }else
        if($.trim($('#state1').val()).length == 0)
        {
           _error = ' required';
         $('#name_error').text(_error);
         $('#state1').addClass('has-error');
         
     }else
        if($.trim($('#city1').val()).length == 0)
        {
           _error = ' required';
         $('#name_error').text(_error);
         $('#city1').addClass('has-error');
     }else
        if($.trim($('#address1').val()).length == 0)
        {
           _error = ' required';
         $('#name_error').text(_error);
         $('#address1').addClass('has-error');
     }
     else
     {
				var nextId = $(this).closest('.tab-pane').next().attr("id");
				$('[href=#' + nextId + ']').tab('show');
				return false;	
     }
     
    });
});


$(document).ready(function(){
 
    $('#btn2').click(function(){
        // alert('btn2')
     
     var name_error2 = '';
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     
     if($.trim($('#city2').val()).length == 0)
     {
        _error2 = ' required';
      $('#name_error2').text(_error2);
      $('#city2').addClass('has-error');
     }else
        if($.trim($('#state2').val()).length == 0)
        {
            _error2 = ' required';
         $('#name_error2').text(_error2);
         $('#state2').addClass('has-error');
    }else
    //     if($.trim($('#zip2').val()).length == 0)
    //     {
    //         _error2 = ' required';
    //     $('#name_error2').text(_error2);
    //     $('#zip2').addClass('has-error');
    // }else
        if($.trim($('#address2').val()).length == 0)
        {
            _error2 = ' required';
        $('#name_error2').text(_error2);
        $('#address2').addClass('has-error');
    }else
    {
        var nextId = $(this).closest('.tab-pane').next().attr("id");
        $('[href=#' + nextId + ']').tab('show');
        return false;	
    }
            
    
      
   });
});
    
// ***************   for checkbox same addrees************ 
$(function () {
    $(".check_same_address").click(function () {
       
        if ($(this).is(":checked")) {
            var cit=jQuery('#city1').val();
            var st=jQuery('#state1').val();
            var add=jQuery('#address1').val();
            var contry=jQuery('#country1').val();
            // alert (contry)
           
            jQuery('#city2').val(cit);
            jQuery('#state2').val(st);
            jQuery('#address2').val(add);
            jQuery('#country2').val(contry).change();
            // $("#dvPassport").show();
        } else {
            jQuery('#city2').val('');
            jQuery('#state2').val('');
            jQuery('#address2').val('');
            
            // $("#dvPassport").hide();
        }
    });
});


// NNNNNNNNNNNNNNNNNNNNNNNNNNNN



function detail_updates() {
   
}

jQuery('#frm_update_btn').submit(function(e){
    jQuery('#update_msg').html("Please wait...");
    // alert('hello')
    // jQuery('#thank_you_msg').html("");
    // jQuery('#mismatch_pwd_msg').html('');
    e.preventDefault();
    jQuery.ajax({
      url:'/account_detail_update',
      data:jQuery('#frm_update_btn').serialize(),
      type:'post',
      success:function(result){
     

        jQuery('#update_msg').html(result.msg);
        jQuery('#frm_update_btn').html('');

      }
    });
  });



  //reviews
jQuery('#frmproductreview').submit(function(e){
    // jQuery('#thank_you_msg').html("Please wait...");
    // jQuery('#thank_you_msg').html("");
   
    e.preventDefault();
    jQuery.ajax({
      url:'/product_review_process',
      data:jQuery('#frmproductreview').serialize(),
      type:'post',
      success:function(result)
      {

        console.log(result.status);
        if(result.status=="success")
        {
            jQuery('.field_error').html(result.msg);
            jQuery('#frmproductreview')[0].reset();
            setInterval(function(){
                window.location.href=window.location.href
              },3000);
        }if(result.status=="error"){
            jQuery('.field_error').html(result.msg);
            
        }
        
      }
    });
  });




  jQuery('.wish_list').click(function(e){
    // jQuery('#thank_you_msg').html("Please wait...");
    // jQuery('#thank_you_msg').html("");
   
    e.preventDefault();
    jQuery.ajax({
      url:'/wish_list_page',
      data:jQuery('.wish_list').serialize(),
      type:'post',
      success:function(result)
      {

        console.log(result.status);
        if(result.status=="success")
        {
           
            
                window.location.href='/my_wishlist'
           
        }if(result.status=="error"){
            alert(result.msg);
            // jQuery('.field_error').html(result.msg);
            
        }
        
      }
    });
  });
  

// -----------------------------------------------------------------------------------


function related_model_popup(name)
{
    // alert(name);
    // jQuery('.name_pop').text(name);
    jQuery('#slug_related').val(name);

    
//   jQuery('.ajex_related_pop').click(function(e){
    // jQuery('#thank_you_msg').html("Please wait...");
    // jQuery('#thank_you_msg').html("");
   
    // e.preventDefault();
    jQuery.ajax({
      url:'/ajex_related_pop_route',
      data:jQuery('#frm_popup_related').serialize(),
      type:'post',
      success:function(result)
      {

        console.log(result.results);

       $.each(result.results, function(key,item) 
       {
           $('.appendss').append('<h1 class="prd-block_title name_pop">'+item.home_products.name+'</h1>'

            
            
           );
           
       });
        
      }
    });
//   });
}

function wishlist_manage(slug,pid,attr_id)
{
   //  alert(pid);
   //  alert(attr_id);
    jQuery('#wishlist_slug').val(slug);
    jQuery('#wishlist_product_id').val(pid);
    jQuery('#wishlist_product_attr_id').val(attr_id);
    jQuery.ajax({
       url:'/wishlist_manage_ajax',
       data:jQuery('#wishlist_form').serialize(),
       type:'post',
       success:function(result)
       {
 
         console.log(result);
           if(result.status=='not_login'){
               alert(result.msg);
               // window.location.href='/';
           }else{
               if(result.status=='added'){
            //    alert(result.msg);
               jQuery('.wishlistadds').html(result.msg);

                //    $(".modalWishlistAdds").addClass('active');
                   
                   

               }
                if(result.status=='remove'){
                //    alert(result.msg);
                   jQuery('.wishlistremoves').html(result.msg);

               }
           }
         
       }
     });


}


function deletewishlistProduct(slug,pid,size,color,attr_id) 
{
   //  alert(pid);
   //  alert(attr_id);
   //  alert(slug);
   jQuery('#wishlist_slug').val(slug);
   jQuery('#wishlist_product_id').val(pid);
   jQuery('#wishlist_product_attr_id').val(attr_id);
   jQuery('#size_id').val(size);
   jQuery('#qty').val(0);
 
  

       jQuery.ajax({
           url:'/wishlist_delete_product_ajax',
           data:jQuery('#wishlists_form').serialize(),
           type:'post',
           success:function(result)
           {
   
           console.log(result);
             
                   alert(result.msg);
                 
           
           }
       });

       jQuery('#card_box_wishlist'+attr_id).hide();

  
    
}





  

