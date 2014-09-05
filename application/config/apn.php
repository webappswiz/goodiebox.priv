<?php

defined('SYSPATH') or die('No direct script access.');

return array(
    'appname' => array(
        APN::CERTIFICATE => "ck.pem",
        APN::PASSPHRASE => "",
        APN::ENVIRONMENT => "production", /* or "production" */
    ),
    APN::CONNECT_TIMEOUT => 60,
    /* Don't touch */
    APN::PRODUCTION_SERVER => "ssl://gateway.push.apple.com:2195",
    APN::SANDBOX_SERVER => "ssl://gateway.sandbox.push.apple.com:2195",
    APN::PRODUCTION_FEEDBACK_SERVER => "ssl://feedback.push.apple.com:2196",
    APN::SANDBOX_FEEDBACK_SERVER => "ssl://feedback.sandbox.push.apple.com:2196"
);
