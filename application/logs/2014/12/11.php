<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-11 07:21:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 218 ] in /home2/goodieb1/public_html/application/views/order/step3.php:218
2014-12-11 07:21:20 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(218): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 218, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:218