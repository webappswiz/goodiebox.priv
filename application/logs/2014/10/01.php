<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-01 16:35:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH/classes/Controller/Order.php [ 304 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php:304
2014-10-01 16:35:35 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(304): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 304, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php:304