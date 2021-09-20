


function update_payment_status(id){
    // alert('s')
    //this is confirm box which gives true or false value
    var check=confirm('are you sure?');
    var payment_status=jQuery('#payment_status').val();
    //   alert(check);
    //   alert(payment_status);
    if(check==true)
    {
        window.location.href='/admin/update_payment_status/'+payment_status+'/'+id;
    }
}


function update_order_status(id){
    var check=confirm('Are your sure?');
    var order_status=jQuery('#order_status').val();
    if(check==true){
      window.location.href='/admin/update_order_status/'+order_status+'/'+id;
    }
  }