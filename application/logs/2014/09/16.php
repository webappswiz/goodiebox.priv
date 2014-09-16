<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-16 11:46:02 --- EMERGENCY: ErrorException [ 4096 ]: Argument 4 passed to Kohana_Form::select() must be of the type array, string given, called in /var/www/goodiebox.priv/application/views/order/index.php on line 92 and defined ~ SYSPATH/classes/Kohana/Form.php [ 252 ] in /var/www/goodiebox.priv/system/classes/Kohana/Form.php:252
2014-09-16 11:46:02 --- DEBUG: #0 /var/www/goodiebox.priv/system/classes/Kohana/Form.php(252): Kohana_Core::error_handler(4096, 'Argument 4 pass...', '/var/www/goodie...', 252, Array)
#1 /var/www/goodiebox.priv/application/views/order/index.php(92): Kohana_Form::select('years', Array, Array, 'required')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/system/classes/Kohana/Form.php:252