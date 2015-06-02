<?php
 
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='your_seller_id'; // Business email ID
 
?>
 
 
<h4>Welcome, Guest</h4>
 
<div class="product">            
    <div class="image">
        <img src="http://freewebmentor.com/wp-content/uploads/2014/01/logo.png" />
    </div>
    <div class="name">
        Paypal Payment System
    </div>
    <div class="price">
        Price:$10
    </div>
    <div class="btn">
    <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="freewebmentor Payment">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="10">
    <input type="hidden" name="cpp_header_image" value="http://freewebmentor.com/wp-content/uploads/2014/01/logo.png">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http://freewebmentor.com/paypal-payment/cancel.php">
    <input type="hidden" name="return" value="http://freewebmentor.com/paypal-payment/success.php">
    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> 
    </div>
</div>