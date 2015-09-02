<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-02 10:40:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH/classes/Controller/Order.php [ 225 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php:225
2015-09-02 10:40:23 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(225): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 225, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php:225
2015-09-02 10:40:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/classes/Controller/Order.php [ 226 ] in file:line
2015-09-02 10:40:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-02 10:40:38 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/classes/Controller/Order.php [ 226 ] in file:line
2015-09-02 10:40:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-02 10:40:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/classes/Controller/Order.php [ 227 ] in file:line
2015-09-02 10:40:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-02 10:41:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/classes/Controller/Order.php [ 226 ] in file:line
2015-09-02 10:41:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-02 10:41:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/classes/Controller/Order.php [ 226 ] in file:line
2015-09-02 10:41:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line