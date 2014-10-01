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

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu" lang="hu">
    <head>
		<title>PayU SDK BackRef</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="hu" />
		<link type="image/gif" href="http://www.payu.hu/sites/hungary/files/favicon-apple.gif" rel="shortcut icon">
		<link href="demo/style.css" type="text/css" rel="stylesheet">
    </head>
	
    <body>
	
	<table class="headertable" align="center">
	<tr class="headertr">
		<td class="headertd1">
			<a href="http://www.payu.hu/" target="_blank">
				<img src="logo/payu_logo.png" title="PayU - Online bankkártyás fizetés" alt="PayU vásárlói tájékoztató">
			</a> 
		</td>
		<td class="headertd2">
			<h2><a>[ BackRef ]</a></h2>
		</td>
	</tr>
	
	<tr>
		<td valign="top">
			<fieldset class="fieldset1"><legend><span><?php echo BACKREF_REDIRECT_PAGE; ?></span></legend>

				<fieldset class="fieldset3"><legend><span><?php echo "Tájékoztatás"; ?></span></legend>
					<?php print $message;?><br/><br/>	
				</fieldset>
					
				<fieldset class="fieldset3"><legend><span><?php echo "További tesztek" ?></span></legend>	
					<form action="index.php" method="POST" id="LiveUpdate"><button type="submit" name="LiveUpdate"><?php echo DO_MORE_TESTS; ?></button></form>
					<ul>
						<li><?php echo DO_SUCCESSFUL_PAYMENT; ?>
						<li><?php echo DO_UNSUCCESSFUL_PAYMENT; ?>
						<li><?php echo DO_CANCEL_PAYMENT; ?>
					</ul>
				</fieldset>
						
			</fieldset>
		</td>
		<td valign="top">
			<fieldset class="fieldset2"><legend><?php echo CARDS_FOR_TEST; ?></legend>	
				<b><?php echo SUCCESFUL_PAYMENT; ?></b><br/>
				<b><?php echo CARD_NUMBER; ?>:</b> 4908366099900425<br/>
				<b>CVC:</b> 823<br/>
				<b><?php echo EXPIRATION; ?>:</b> 10/14<br/><br/>
				<b><?php echo UNSUCCESFUL_PAYMENT; ?></b><br/>
				<b><?php echo CARD_NUMBER; ?>:</b> 4111111111111111<br/>
				<b>CVC:</b> <?php echo ANY_THREE_NUMBERS; ?><br/>
				<b><?php echo EXPIRATION; ?>:</b> <?php echo ANY_LATER; ?>
			</fieldset>			
		</td>
	</tr>
	
	<tr class="mobiletr">

	</tr>
	
	<tr>
		<td class="footer1">
			<b>PayU PHP SDK <?php echo $backref->sdkVersion(); ?></b><br/>
			2013, PayU Hungary Kft.<br/>
			Email: support@payu.hu<br/>
			Telefon: 06 1 510 0707
		</td>
		
		<td class="footer2">
			<a href="http://www.payu.hu/sites/hungary/files/documents/Fizetesi_tajekoztato_PayU_Hungary_Kft.pdf " target="_blank">
				<img src="logo/payu_logo_long.png" title="PayU - Online bankkártyás fizetés" alt="PayU vásárlói tájékoztató"> 
			</a>
		</td>
	</tr>
		
	</table>
	
    </body>
</html>
