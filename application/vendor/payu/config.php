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
 
$config = array(
	'MERCHANT' => "P120701",																		//merchant account ID
	'SECRET_KEY' => "2@6H297Z_2P3@L9)N*9M",																		//secret key for account ID	
	'METHOD' => "CCVISAMC",																			//payment method	 empty -> select payment method on PayU payment page OR [ CCVISAMC, WIRE, CASH, PAYU_MOBILE ]
	'ORDER_DATE' => date("Y-m-d H:i:s"),													//date of transaction
	'LOGGER' => true,																		//transaction log
	'LOG_PATH' => '/var/www/vhosts/goodiebox.karam.org.ua/',																	//path of log file
	'BACK_REF' => 'http://'.$_SERVER['HTTP_HOST'].'/order/success',						//url of payu payment backref page
	'TIMEOUT_URL' => 'http://'.$_SERVER['HTTP_HOST'].'/order/timeout.php',					//url of payu payment timeout page
	'ORDER_TIMEOUT' => 3600,
	'LANGUAGE' => 'EN'
);

?>

