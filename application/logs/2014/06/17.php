<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-17 15:46:16 --- EMERGENCY: Exception [ 0 ]: Class file '/var/www/joblinker.priv/application/vendor/Controller/A.php' does not exists ~ APPPATH/vendor/ApnsPHP/Autoload.php [ 49 ] in file:line
2014-06-17 15:46:16 --- DEBUG: #0 [internal function]: ApnsPHP_Autoload('Controller_A')
#1 [internal function]: spl_autoload_call('Controller_A')
#2 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_A')
#3 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#6 {main} in file:line