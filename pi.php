<?php
require_once 'smtp_validateEmail.class.php';
$email = 'annaszusz_@freemail.hu';

print_r(verifyEmail($email,'info@goodiebox.hu', true));