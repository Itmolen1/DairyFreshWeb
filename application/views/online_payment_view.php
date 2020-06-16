<?php
$products=implode(',',array_column($cart_data,'item_master_id'));
$subtotal=0.0;
for($i=0;$i<count($cart_data);$i++)
{
	$subtotal+=$cart_data[$i]['item_master_price']*$cart_data[$i]['item_qty'];
}

function getCallbackUrl()
{
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    return base_url().'Checkout/OnlinePaymentSuccess';

}
?>
<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>

	<div class="contact-w3l">
        <div class="container">
            
            <h3 class="tittle-w3l">Online Payment
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </h3>

            <div>
		        <img  src="<?php echo base_url(); ?>assets/images/payumoney.png" />
		    </div>
            
            <div class="contact agileits">
                <div class="contact-agileinfo">
                    <div class="contact-form wthree">
                        <form action="#" id="payment_form">
                        	<input type="hidden" id="udf5" name="udf5" value="BOLT_KIT_PHP7" />
						    <input type="hidden" id="surl" name="surl" value="<?php echo getCallbackUrl(); ?>" />
						    <input type="hidden" id="furl" name="furl" value="<?php echo base_url().'Checkout/OnlinePaymentFailure'; ?>" />
						    <input type="hidden" id="key" name="key" value="rn0cskoi" />
						    <input type="hidden" id="salt" name="salts" value="jlEVZHuXj8" />

						    <?php $order_ref_no='ORD'.strtoupper(uniqid());?>

                            <div>
                            	<label>Transection ID/Order Ref# : </label>
                                <input class="form-control" type="text" id="txnid" name="txnid" value="<?php echo  $order_ref_no;?>" readonly />
                            </div>

                            <div>
                            	<label>Amount : </label>
                            	<input type="hidden" id="amount" name="amount" value="<?php echo  $subtotal;?>" />
                                <input class="form-control" type="text" id="amount2" name="amount2" value="<?php echo  $subtotal;?>" readonly />
                            </div>

                            <div>
                            	<label>Name : </label>
                                <input class="form-control" type="text" id="fname" name="fname" value="<?php echo  $this->session->userdata['user']['name'];?>" />
                            </div>

                            <div>
                            	<label>Email : </label>
                                <input class="form-control" type="text" id="email" name="email" value="<?php echo  $this->session->userdata['user']['email'];?>" />
                            </div>

                            <div>
                            	<label>Mobile : </label>
                                <input class="form-control" type="text" id="mobile" name="mobile" value="<?php echo  $this->session->userdata['user']['mobile'];?>" />
                            </div>

                            <input type="hidden" id="pinfo" name="pinfo" value="<?php echo  $products;?>" />

                            <input type="hidden" id="hash" name="hash" placeholder="Hash" value="" />
                            
                            <input type="submit" value="Proceed To Pay" onclick="launchBOLT(); return false;">
                        
                        </form>
                    </div>
                </div>
            </div>  
        </div>
    </div>

<script type="text/javascript">
	$( document ).ready(function() {
	    $.ajax({
          url: '<?php echo base_url().'Checkout/jsoc'; ?>',
          type: 'post',
          data: JSON.stringify({ 
            key: $('#key').val(),
            salt: $('#salt').val(),
            txnid: $('#txnid').val(),
            amount: $('#amount').val(),
            pinfo: $('#pinfo').val(),
            fname: $('#fname').val(),
            email: $('#email').val(),
            mobile: $('#mobile').val(),
            udf5: $('#udf5').val()
          }),
          contentType: "application/json",
          dataType: 'json',
          success: function(json) {
            if (json['error']) {
             $('#alertinfo').html('<i class="fa fa-info-circle"></i>'+json['error']);
            }
            else if (json['success']) { 
                $('#hash').val(json['success']);
            }
          }
        });
	});
</script>
<script type="text/javascript"><!--
$('#payment_form').bind('keyup blur', function(){
    $.ajax({
          url: '<?php echo base_url().'Checkout/jsoc'; ?>',
          type: 'post',
          data: JSON.stringify({ 
            key: $('#key').val(),
            salt: $('#salt').val(),
            txnid: $('#txnid').val(),
            amount: $('#amount').val(),
            pinfo: $('#pinfo').val(),
            fname: $('#fname').val(),
            email: $('#email').val(),
            mobile: $('#mobile').val(),
            udf5: $('#udf5').val()
          }),
          contentType: "application/json",
          dataType: 'json',
          success: function(json) {
            if (json['error']) {
             $('#alertinfo').html('<i class="fa fa-info-circle"></i>'+json['error']);
            }
            else if (json['success']) { 
                $('#hash').val(json['success']);
            }
          }
        }); 
});
//-->
</script>
<script type="text/javascript"><!--
function launchBOLT()
{
    bolt.launch({
    key: $('#key').val(),
    txnid: $('#txnid').val(), 
    hash: $('#hash').val(),
    amount: $('#amount').val(),
    firstname: $('#fname').val(),
    email: $('#email').val(),
    phone: $('#mobile').val(),
    productinfo: $('#pinfo').val(),
    udf5: $('#udf5').val(),
    surl : $('#surl').val(),
    furl: $('#furl').val(),
    mode: 'dropout' 
},{ responseHandler: function(BOLT){
    console.log( BOLT.response.txnStatus );     
    if(BOLT.response.txnStatus != 'CANCEL')
    {
        //Salt is passd here for demo purpose only. For practical use keep salt at server side only.
        var fr = '<form action=\"'+$('#surl').val()+'\" method=\"post\">' +
        '<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +
        '<input type=\"hidden\" name=\"salt\" value=\"'+$('#salt').val()+'\" />' +
        '<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +
        '<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +
        '<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +
        '<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +
        '<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
        '<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +
        '<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +
        '<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +
        '<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +
        '</form>';
        var form = jQuery(fr);
        jQuery('body').append(form);                                
        form.submit();
    }
},
    catchException: function(BOLT){
        alert( BOLT.message );
    }
});
}
//--
</script>   

