<?php

require_once('application/vendor/class.phpmailer.php');
$email = new PHPMailer();
$email->ContentType = 'text/plain';
$email->AddAddress('alexander.karamushko@gmail.com');
$email->CharSet = 'UTF-8';
$email->From = 'alexander.karamushko@gmail.com';
$email->FromName = 'Alex Karamushko1111';
$email->Subject = 'Envato market - Your recent item submission';
$body = "Hello alexander.karamushko@gmail.com,<br/><br/>"."\n\n";
$body .= "We have received your item for a review. Our team will do their best to perform a revision in a short time. Usually it takes up to one working week.<br/><br/>"."\n\n";
$body .= "We will get back in touch with you shortly.<br/><br/>"."\n\n";
$body .= "If you need help or have any questions, please visit <a href=\"https://help.market.envato.com\">https://help.market.envato.com</a><br/><br/>"."\n\n";
$body .= "Thanks!<br/>"."\n";
$body .= "Envato<br/>"."\n";
$email->Body = $body;
$email->IsHTML(true);
$email->Send();
