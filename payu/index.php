<?php
/**
 * 
 *  Copyright (C) 2013 PayU Hungary Kft.
 *
 *  This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * @copyright   Copyright (c) 2013 PayU Hungary Kft. (http://www.payu.hu)
 * @link        http://www.payu.hu 
 * @license     http://www.gnu.org/licenses/gpl-3.0.html  GNU GENERAL PUBLIC LICENSE (GPL V3.0)
 *
 * @package  	PayU SDK 
 * 
 */

 
	 /*
	 * Optional error riporting
	 */	 
	 error_reporting(E_ALL);
	 //ini_set('error_reporting', E_ALL);

	 
	 /*
	 * Import config data
	 */		
	require_once("sdk/config.php");
	
	/*
	 * Import PayUPayment class
	 */
	require_once('sdk/PayUPayment.class.php');


	/*
	 * Test helper functions  -- ONLY FOR TEST!
	 */
	require_once('demo/demo_functions.php');
	
	
	/*
	 * Start LiveUpdate
	 */
	$lu = new PayULiveUpdate($config);
	
 	/*
	 * Oreder global data (most cases no need to modify)		
	 */	 
	$lu->setField("ORDER_DATE", $config['ORDER_DATE']);
	$lu->setField("BACK_REF", $config['BACK_REF']);
	$lu->setField("TIMEOUT_URL", $config['TIMEOUT_URL']);
	$lu->setField("ORDER_TIMEOUT", $config['ORDER_TIMEOUT']);

	/*
	 * Payment method
	 */	
	 
		//only the given method
		if ($config['METHOD']!='') {
			$lu->setField("PAY_METHOD", $config['METHOD']);
			$lu->setField("AUTOMODE", 1);
		} 
		//select payment method on payment page	
		elseif ($config['METHOD']=='') {
			$lu->setField("PAY_METHOD", '');
			$lu->setField("AUTOMODE", 0);
		} 
/*
		//Only case of uniq contract
		$lu->setField("LU_ENABLE_TOKEN", 1);
		$lu->setField("LU_TOKEN_TYPE", 'PAY_BY_CLICK');
*/
		
	/*
	 * Order global data (need to fill by order data)
	 */			
	$lu->setField("ORDER_REF", $testOrderId);
	$lu->setField("PRICES_CURRENCY", "HUF");
	$lu->setField("DISCOUNT", 200); 
	$lu->setField("ORDER_SHIPPING", 0); 
	$lu->setField("LANGUAGE", LANGUAGE);
	$lu->setField("ORDER_PRICE_TYPE", "GROSS");
	
	/*
	 * Add product with array
	 * Sample products with gross price
	 */
	$lu->addProduct(array(
		'name' => 'Lorem 1',							//product name [ string ]
		'code' => 'sku0001',							//merchant systemwide unique product ID [ string ]
		'info' => 'Lorem ipsum dolor sit amet',			//product description [ string ]
		'price' => 1311, 								//product price [ HUF: integer | EUR, USD decimal 0.00 ]
		'vat' => 0,										//product tax rate [ in case of gross price: 0 ] (percent)
		'qty' => 1										//product quantity [ integer ] 
	));

	$lu->addProduct(array(
		'name' => 'Duis 2',								//product name [ string ]
		'code' => 'sku0002',							//merchant systemwide unique product ID [ string ]
		'info' => 'Duis aute irure dolor',				//product description [ string ]
		'price' => 1123, 								//product price [ HUF: integer | EUR, USD decimal 0.00 ]
		'vat' => 0,										//product tax rate [ in case of gross price: 0 ] (percent)
		'qty' => 2										//product quantity [ integer ] 
	));
	
	/*
	 * Billing data
	 */	   
	$lu->setField("BILL_FNAME", "PayU");
	$lu->setField("BILL_LNAME", "Tester");
	$lu->setField("BILL_EMAIL", "payu.tester@example.com"); 
	$lu->setField("BILL_PHONE", "36201234567");
//		$lu->setField("BILL_COMPANY", "Company name");			// optional
//		$lu->setField("BILL_FISCALCODE", " ");					// optional
	$lu->setField("BILL_COUNTRYCODE", "HU");
	$lu->setField("BILL_STATE", "State");
	$lu->setField("BILL_CITY", "City"); 
	$lu->setField("BILL_ADDRESS", "First line address"); 
	$lu->setField("BILL_ADDRESS2", "Second line address");		// optional
	$lu->setField("BILL_ZIPCODE", "1234"); 
		
	/*
	 * Delivery data
	 */	
	$lu->setField("DELIVERY_FNAME", "PayU"); 
	$lu->setField("DELIVERY_LNAME", "Tester"); 
	$lu->setField("DELIVERY_EMAIL", "payu.tester@example.com"); 
	$lu->setField("DELIVERY_PHONE", "36201234567"); 
	$lu->setField("DELIVERY_COUNTRYCODE", "HU");
	$lu->setField("DELIVERY_STATE", "State");
	$lu->setField("DELIVERY_CITY", "City");
	$lu->setField("DELIVERY_ADDRESS", "First line address"); 
	$lu->setField("DELIVERY_ADDRESS2", "Second line address");	// optional
	$lu->setField("DELIVERY_ZIPCODE", "1234"); 
	
	/*
	 * Log to file
	 */	
	$lu->logger = $config['LOGGER'];
	$lu->log_path = $config['LOG_PATH'];
	
	/*
	 * Generate fields and print form
	 */		
	$display = $lu->createHtmlForm('PayUForm', 'button', PAYMENT_BUTTON);	// format: link, button, auto (auto is redirects to payment page immediately )
	
	/*
	 * Print generated html form
	 *
	 * In the test environment no need to print it because it will be displayed in HTML demo page 
	 * 
	 * Must have to print it in your environment
	 */		
	//echo $display;
	
	
	/*
	 * Print missing fields list for debug
	 */
	//print "<pre>";
	//print_r($lu->getMissing());
	//print "<pre>";   
	
?>

<!--

	All of following code for test purpose only. 

-->
<?php include('demo/demo_liveupdate.php'); ?>
