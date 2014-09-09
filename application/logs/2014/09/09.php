<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-09 13:17:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view order/step2 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-09 13:17:27 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('order/step2')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-09 14:54:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/Order.php [ 36 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:36
2014-09-09 14:54:01 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 36, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:36
2014-09-09 15:01:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Order.php [ 19 ] in file:line
2014-09-09 15:01:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line