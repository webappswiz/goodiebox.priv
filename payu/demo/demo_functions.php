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

	//**********************************************************************************************************
	//	ONLY FOR TEST
	
		/*
		 * Language settings -- ONLY FOR TEST!
		 */	
		if ($config['LANGUAGE']=='HU') {
			define("LANGUAGE", "HU");
			define("LIVEUPDATE_TEST_TRANSACTION", "LiveUpdate teszt tranzakció");
			define("BACKREF_REDIRECT_PAGE", "BackRef visszatérő oldal");
			define("TIMEOUT_PAGE", "Időtúllépés");
			define("SET_UP_MERCHANT", "Az sdk/config.php fájlban állítsa be a kereskedői azonosítóját (MERCHANT)");
			define("SET_UP_SECRET_KEY", "Az sdk/config.php fájlban állítsa be a titkos kulcsát (SECRET_KEY)");	
			define("METHOD_CCVISAMC", "Bankkártya");
			define("METHOD_PAYU_MOBILE", "PayU mobile");
			define("METHOD_WIRE", "Átutalás");
			define("METHOD_CASH", "Utánvétel");
			define("METHOD_ON_PAYMENT_PAGE", "Fizető oldali kiválasztás");
			define("PAYMENT_METHOD", "Fizetési mód");
			define("SETTINGS", "Beállítás");
			define("PAYMENT_BUTTON", "PayU online fizetés indítása");
			define("SELECT_ON_PAYMENT_PAGE", "a PayU fizetőoldalon lehet kiválasztani");
			define("CARDS_FOR_TEST", "Teszt kártyák");		
			define("SUCCESFUL_PAYMENT", "Sikeres fizetés");
			define("UNSUCCESFUL_PAYMENT", "Sikertelen fizetés");
			define("CARD_NUMBER", "Kártya szám");
			define("EXPIRATION", "Lejárat");
			define("ANY_THREE_NUMBERS", "tetszőleges három szám");
			define("ANY_LATER", "tetszőleges későbbi dátum");
			
			define("SUCCESSFUL_CARD_AUTHORIZATION", "Sikeres kártya ellenőrzés.");
			define("SUCCESSFUL_WIRE", "Sikeres megrendelés. <br/>Az utalás megérkezése után lesz teljesítve a megrendelés");
			define("SUCCESSFUL_CASH", "Sikeres megrendelés. <br/>Fizetés a kézbesítéskor");
			
			
			
			define("WAITING_FOR_IPN", "Megerősítésre vár!");
			define("CONFIRMED_IPN", "IPN megerősítve, sikeres fizetés!");
			
			define("CONFIRMED_WIRE", "Beérkezett átutalás");
			
			define("UNSUCCESSFUL_TRANSACTION", "Sikertelen tranzakció.");
			define("UNSUCCESSFUL_NOTICE", "Kérjük, ellenőrizze a tranzakció során megadott adatok helyességét.<br>Amennyiben minden adatot helyesen adott meg, a visszautasítás okának kivizsgálása kapcsán kérjük, szíveskedjen kapcsolatba lépni kártyakibocsátó bankjával.");
				
			define("END_OF_TRANSACTION", "Vége a tranzakciónak.");
			define("BACKREF_DATE", "Dátum");
			define("DATE", "Dátum");
			define("ORDER_ID", "Megrendelés azonosító");
			define("PAYREFNO", "PayU referenciaszám");
			define("STATUS", "Státusz");
			define("PAYMENT_TEST", "Teszt fizetés");
			
			define("DO_MORE_TESTS", "Végezzen további teszteket!");
			define("DO_SUCCESSFUL_PAYMENT", "Teszteljen sikeres fizetést!");
			define("DO_UNSUCCESSFUL_PAYMENT", "Teszteljen sikertelen fizetést!");
			define("DO_CANCEL_PAYMENT", "Teszteljen megszakított fizetést (\"Vissza\" gomb a fizetőoldalon)!");

			define("ABORTED_TRANSACTION", "Megszakított tranzakció");
			define("TIMEOUT_TRANSACTION", "Időtúllépéses tranzakció	");
			define("TIMEOUT_PAGE_TITLE", "Időtúllépés, vagy megszakítás");
			define("TIMEOUT_NOTICE", "Ön megszakította a fizetést, vagy lejárt a tranzakció maximális ideje!");
	
		}
		elseif ($config['LANGUAGE']=='EN' ) {
			define("LANGUAGE", "EN");
			define("LIVEUPDATE_TEST_TRANSACTION", "LiveUpdate test transaction");
			define("BACKREF_REDIRECT_PAGE", "BackRef redirect page");
			define("TIMEOUT_PAGE", "Timeout page");
			define("SET_UP_MERCHANT", "Please define merchant id (MERCHANT) in sdk/config.php.");
			define("SET_UP_SECRET_KEY", "Please define secret key (SECRET_KEY) in sdk/config.php.");
			define("METHOD_CCVISAMC", "Credit card");
			define("METHOD_PAYU_MOBILE", "PayU mobile");
			define("METHOD_WIRE", "Wire transfer");
			define("METHOD_CASH", "Cash on delivery");
			define("METHOD_ON_PAYMENT_PAGE", "Select on payment page");
			define("PAYMENT_METHOD", "Payment method");
			define("SETTINGS", "Settings");
			define("PAYMENT_BUTTON", "Start PayU online payment");
			define("SELECT_ON_PAYMENT_PAGE", "select on PayU payment page");
			define("CARDS_FOR_TEST", "Cards for test");
			define("SUCCESFUL_PAYMENT", "Successful payment");
			define("UNSUCCESFUL_PAYMENT", "Unsuccessful payment");
			define("CARD_NUMBER", "Card number");
			define("EXPIRATION", "Card expiration date");
			define("ANY_THREE_NUMBERS", "any three numbers");	
			define("ANY_LATER", "any later");			
			
			define("SUCCESSFUL_CARD_AUTHORIZATION", "Successful card authorization.");
			define("SUCCESSFUL_WIRE", "Successful order.<br/>After successful wire transfer will be fulfilled your order.");
			define("SUCCESSFUL_CASH", "Successful order. <br/>Pay on delivery");
			
			define("WAITING_FOR_IPN", ">Waiting for confirmation!");
			define("CONFIRMED_IPN", "IPN was confirmed, payment is successful!");
			
			define("CONFIRMED_WIRE", "Wire transfer has been received");
			
			define("UNSUCCESSFUL_TRANSACTION", "Unsuccessful transaction.");
			define("UNSUCCESSFUL_NOTICE", "Please check the data entered during the transaction.<br/>If you submitted every data correctly, please contact your account holder financial institute.");

			define("END_OF_TRANSACTION", "End of transaction.");
			define("BACKREF_DATE", "Date");
			define("DATE", "Date");
			define("ORDER_ID", "Order ID");
			define("PAYREFNO", "PayU reference number");
			define("STATUS", "Status");
			define("PAYMENT_TEST", "Payment test");
			
			define("DO_MORE_TESTS", "Do more tests!");
			define("DO_SUCCESSFUL_PAYMENT", "Make test with card for successful payments");
			define("DO_UNSUCCESSFUL_PAYMENT", "Make test with card for unsuccessful payments");
			define("DO_CANCEL_PAYMENT", "Make cancel payment (\"Cancel\" button on payment page)!");
			
			define("ABORTED_TRANSACTION", "Cancel on payment page");
			define("TIMEOUT_TRANSACTION", "Timeout");
			define("TIMEOUT_PAGE_TITLE", "Timeout or cancel");
			define("TIMEOUT_NOTICE", "Ön megszakította a fizetést, vagy lejárt a tranzakció maximális ideje!");
		
		}

						
		/*
		 * Uniq test order ID -- ONLY FOR TEST!
		 */	
		$testOrderId = str_replace(".", "", $_SERVER['SERVER_ADDR']).date("U", time());
		 
		/*
		 * Change payment method -- ONLY FOR TEST!
		 */	
		 if (isset($_REQUEST['METHOD']) && $_REQUEST['METHOD']!='') {
			$config['METHOD'] = $_REQUEST['METHOD'];
		}
	 
	//**********************************************************************************************************
	
?>