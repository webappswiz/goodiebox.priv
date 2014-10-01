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
	 * Import config data
	 */		
	require_once("sdk/config.php");

	/*
	 * Import PayUPayment class
	 */		
	require_once("sdk/PayUPayment.class.php");

	/*
	 * Test helper functions  -- ONLY FOR TEST!
	 */
	require_once('demo/demo_functions.php');
	
	/*
	 * Start backref
	 */		
	$backref = new PayUBackRef($config);
		
	/*
	 * Add order reference number from merchant system (ORDER_REF)
	 */			
	$backref->order_ref = $_REQUEST['order_ref'];

	/*
	 * Log to file
	 */	
	$backref->logger = $config['LOGGER'];
	$backref->log_path = $config['LOG_PATH'];
	
	/*
	 * Check backref
	 */			
	if($backref->checkResponse()){
		
		/*
		 * SUCCESSFUL card authorizing
		 * Notify user and wait for IPN
		 * Need to notify user
		 * 
		 */
		$backStatus = $backref->backStatusArray;

		/*
		 * Your code here
		 */	
		 
		// Notification by payment method
		
		//CCVISAMC & PAYU_MOBILE
		if ($backStatus['PAYMETHOD']=='Visa/MasterCard/Eurocard'||$backStatus['PAYMETHOD']=='PayU mobile') {
			$message = '<b><font color="green">'.SUCCESSFUL_CARD_AUTHORIZATION.'</font></b><br/>';
			if ($backStatus['ORDER_STATUS']=='IN_PROGRESS') {
				$message .= '<b><font color="green">'.WAITING_FOR_IPN.'</font></b><br/>';
			} elseif ($backStatus['ORDER_STATUS']=='PAYMENT_AUTHORIZED' || $backStatus['ORDER_STATUS']=='COMPLETED') {
				$message .= '<b><font color="green">'.CONFIRMED_IPN.'</font></b><br/>';
			} 
		}
		//WIRE
		elseif ($backStatus['PAYMETHOD']=='Bank/Wire transfer') {
			$message = '<b><font color="green">'.SUCCESSFUL_WIRE.'</font></b><br/>';
			if ($backStatus['ORDER_STATUS']=='PAYMENT_AUTHORIZED' || $backStatus['ORDER_STATUS']=='COMPLETED') {
				$message .= '<b><font color="green">'.CONFIRMED_WIRE.'</font></b><br/>';
			} 			
		}
		//CASH
		elseif ($backStatus['PAYMETHOD']=='Cash on delivery') {
				$message = '<b><font color="green">'.SUCCESSFUL_CASH.'</font></b><br/>';
		}
			
	} else {
		
		/*
		 * UNSUCCESSFUL card authorizing
		 * END of transaction
		 * Need to notify user
		 * 
		 */
		$backStatus = $backref->backStatusArray;
		
		/*
		 * Your code here
		 */	
		$message = '<b><font color="red">'.UNSUCCESSFUL_TRANSACTION.'</font></b><br/>';
		$message .= '<b><font color="red">'.END_OF_TRANSACTION.'</font></b><br/>';
		$message .= UNSUCCESSFUL_NOTICE.'<br/><br/>';
		
		
	}

	/*
	 * Notification
	 */	
	$message .= BACKREF_DATE.': <b>'.$backStatus['BACKREF_DATE'].'</b><br/>';
	$message .= ORDER_ID.': <b>'.$backStatus['REFNOEXT'].'</b><br/>';
	$message .= PAYREFNO.': <b>'.$backStatus['PAYREFNO'].'</b><br/>';	
	$message .= STATUS.': <b>'.$backStatus['ORDER_STATUS'].'</b><br/>';	
	$message .= PAYMENT_METHOD.': <b>'.$backStatus['PAYMETHOD'].'</b>';	


	
	/*
	 * Print generated message
	 *
	 * No need to print it because it will displayed in HTML demo page 
	 */		
	 //echo $message;

?>

<!--

	All of following code for test purpose only. 

-->
<?php include('demo/demo_backref.php'); ?>
			
