<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-26 17:42:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: firstname ~ APPPATH/classes/Controller/Kapcsolat.php [ 27 ] in /var/www/vhosts/goodiebox.karam.org.ua/public_html/application/classes/Controller/Kapcsolat.php:27
2015-10-26 17:42:54 --- DEBUG: #0 /var/www/vhosts/goodiebox.karam.org.ua/public_html/application/classes/Controller/Kapcsolat.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 27, Array)
#1 /var/www/vhosts/goodiebox.karam.org.ua/public_html/system/classes/Kohana/Controller.php(84): Controller_Kapcsolat->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/vhosts/goodiebox.karam.org.ua/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kapcsolat))
#4 /var/www/vhosts/goodiebox.karam.org.ua/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/vhosts/goodiebox.karam.org.ua/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/goodiebox.karam.org.ua/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/vhosts/goodiebox.karam.org.ua/public_html/application/classes/Controller/Kapcsolat.php:27