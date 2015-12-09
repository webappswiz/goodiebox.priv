<script>
    $(document).ready(function() {
        $('#PayUForm').submit();
    });
</script>
<div class="clear"></div>
<section class="thanku" class="rounded">
    <?php
    $o = ORM::factory('Order', $order['id'])->with('Package');
    if ($o->discount == 1) {
        $invites = ORM::factory('Invites')
                ->where('user_id', '=', $current_user->id)
                ->and_where('is_used', '=', 0)
                ->and_where('is_registered', '=', 1)
                ->find_all();
        $global_discount = ORM::factory('Discounts')
                    ->where('user_id', '=', $current_user->id)
                    ->find();
            if ($global_discount->loaded()) {
                $g_discount = $global_discount->discount;
            } else
                $g_discount = 0;
        if(count($invites)>0){
            $discount = ($o->package->price * ((count($invites)*5+$g_discount)/100));
        } elseif($g_discount>0){
            $discount = ($o->package->price * ($g_discount/100));
        }
        else {
            $discount = 0;
        }
    } else {
        $discount = 0;
    }
    $hash['MERCHANT'] = 'P120701';
    $hash['ORDER_REF'] = $o->id;
    $hash['ORDER_DATE'] = $o->date_purchased;
    $hash['ORDER_PNAME'] = 'Goodiebox '.$o->package->package_name;
    $hash['ORDER_PCODE'] = $o->package->product_number;
    $hash['ORDER_PINFO'] = '';
    $hash['ORDER_PRICE'] = $o->total_price;
    $hash['ORDER_QTY'] = '1';
    $hash['ORDER_VAT'] = '0';
    $hash['ORDER_SHIPPING'] = '0';
    $hash['PRICES_CURRENCY'] = 'HUF';
    $hash['DISCOUNT'] = $discount;
    $hash['PAY_METHOD'] = 'CCVISAMC';
    $hash_string = $payment->createHashString($hash);
    ?>
    <form action='https://secure.simplepay.hu/payment/order/lu.php' method='POST' id='PayUForm'>
        <input type='hidden' name='MERCHANT' id='MERCHANT' value='<?= $payment->merchantId ?>' />
        <input type='hidden' name='ORDER_REF' id='ORDER_REF' value='<?= $o->id ?>' />
        <input type='hidden' name='ORDER_DATE' id='ORDER_DATE' value='<?= $o->date_purchased ?>' />
        <input type='hidden' name='ORDER_PNAME[]' id='ORDER_PNAME' value='<?= 'Goodiebox '.$o->package->package_name ?>' />
        <input type='hidden' name='ORDER_PCODE[]' id='ORDER_PCODE' value='<?= $o->package->product_number ?>' />
        <input type='hidden' name='ORDER_PINFO[]' id='ORDER_PINFO' value='' />
        <input type='hidden' name='ORDER_PRICE[]' id='ORDER_PRICE' value='<?= $o->total_price ?>' />
        <input type='hidden' name='ORDER_QTY[]' id='ORDER_QTY' value='1' />
        <input type='hidden' name='ORDER_VAT[]' id='ORDER_VAT' value='0' />
        <input type='hidden' name='PRICES_CURRENCY' id='PRICES_CURRENCY' value='HUF' />
        <input type='hidden' name='ORDER_SHIPPING' id='ORDER_SHIPPING' value='0' />
        <input type='hidden' name='DISCOUNT' id='DISCOUNT' value='<?=$discount?>' />
        <input type='hidden' name='PAY_METHOD' id='PAY_METHOD' value='CCVISAMC' />
        <input type='hidden' name='LANGUAGE' id='LANGUAGE' value='<?php echo ( $current_user->lang==1)?'HU':'EN'?>' />
        <input type='hidden' name='AUTOMODE' id='AUTOMODE' value='1' />
        <input type='hidden' name='ORDER_TIMEOUT' id='ORDER_TIMEOUT' value='3600' />
        <input type='hidden' name='TIMEOUT_URL' id='TIMEOUT_URL' value='<?= URL::base(TRUE, FALSE) ?>order/timeout/' />
        <input type='hidden' name='BACK_REF' id='BACK_REF' value='<?= URL::base(TRUE, FALSE) ?>order/success' />
        <input type='hidden' name='BILL_FNAME' id='BILL_FNAME' value='<?= $current_user->customer_firstname ?>' />
        <input type='hidden' name='BILL_LNAME' id='BILL_LNAME' value='<?= $current_user->customer_lastname ?>' />
        <input type='hidden' name='BILL_EMAIL' id='BILL_EMAIL' value='<?= $current_user->email ?>' />
        <input type='hidden' name='BILL_PHONE' id='BILL_PHONE' value='<?= $current_user->customer_telephone ?>' />
        <input type='hidden' name='BILL_ADDRESS' id='BILL_ADDRESS' value='<?= $current_user->customer_address ?>' />
        <input type='hidden' name='BILL_ADDRESS2' id='BILL_ADDRESS2' value='<?= $current_user->customer_address2 ?>' />
        <input type='hidden' name='BILL_ZIPCODE' id='BILL_ZIPCODE' value='<?= $current_user->customer_zip ?>' />
        <input type='hidden' name='BILL_CITY' id='BILL_CITY' value='<?= $current_user->customer_city ?>' />
        <input type='hidden' name='BILL_STATE' id='BILL_STATE' value='' />
        <input type='hidden' name='BILL_COUNTRYCODE' id='BILL_COUNTRYCODE' value='HU' />
        <input type='hidden' name='BILL_COMPANY' id='BILL_COMPANY' value='<?= $o->company_name ?>' />
        <input type='hidden' name='BILL_FISCALCODE' id='BILL_FISCALCODE' value='<?= $o->tax_code ?>' />
        <input type='hidden' name='DELIVERY_FNAME' id='DELIVERY_FNAME' value='<?= $o->delivery_firstname ?>' />
        <input type='hidden' name='DELIVERY_LNAME' id='DELIVERY_LNAME' value='<?= $o->delivery_lastname ?>' />
        <input type='hidden' name='DELIVERY_PHONE' id='DELIVERY_PHONE' value='<?= $o->delivery_telephone ?>' />
        <input type='hidden' name='DELIVERY_ADDRESS' id='DELIVERY_ADDRESS' value='<?= $o->delivery_address ?>' />
        <input type='hidden' name='DELIVERY_ADDRESS2' id='DELIVERY_ADDRESS2' value='<?= $o->delivery_address2 ?>' />
        <input type='hidden' name='DELIVERY_ZIPCODE' id='DELIVERY_ZIPCODE' value='<?= $o->delivery_postcode ?>' />
        <input type='hidden' name='DELIVERY_CITY' id='DELIVERY_CITY' value='<?= $o->delivery_city ?>' />
        <input type='hidden' name='DELIVERY_STATE' id='DELIVERY_STATE' value='' />
        <input type='hidden' name='DELIVERY_COUNTRYCODE' id='DELIVERY_COUNTRYCODE' value='HU' />
        <input type='hidden' name='DELIVERY_COMPANY' id='DELIVERY_COMPANY' value='<?= $o->company_name ?>' />
        <input type='hidden' name='DELIVERY_FISCALCODE' id='DELIVERY_FISCALCODE' value='<?= $o->tax_code ?>' />
        <input type='hidden' name='ORDER_HASH' id='ORDER_HASH' value='<?= $hash_string ?>' />
        <input type='hidden' name='SDK_VERSION' id='SDK_VERSION' value='PHP_2.1_sdk20140212' />
    </form>				
</section>