<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-22 12:24:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/users/registration.php [ 5 ] in /var/www/vhosts/goodiebox.karam.org.ua/public_html/application/views/users/registration.php:5
2014-08-22 12:24:55 --- DEBUG: #0 /var/www/vhosts/goodiebox.karam.org.ua/public_html/application/views/users/registration.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 5, Array)
#1 /var/www/vhosts/goodiebox.karam.org.ua/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.karam.org.ua/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.karam.org.ua/public_html/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.karam.org.ua/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.karam.org.ua/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#7 /var/www/vhosts/goodiebox.karam.org.ua/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.karam.org.ua/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.karam.org.ua/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.karam.org.ua/public_html/application/views/users/registration.php:5