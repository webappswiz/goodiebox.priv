<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-05 07:44:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 247 ] in /home2/goodieb1/public_html/application/views/order/step3.php:247
2015-03-05 07:44:52 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(247): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 247, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:247
2015-03-05 08:46:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: g_discount ~ APPPATH/classes/Controller/Order.php [ 321 ] in /home2/goodieb1/public_html/application/classes/Controller/Order.php:321
2015-03-05 08:46:01 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Order.php(321): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 321, Array)
#1 /home2/goodieb1/public_html/application/classes/Controller/Order.php(669): Controller_Order->regular_order()
#2 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home2/goodieb1/public_html/application/classes/Controller/Order.php:321
2015-03-05 09:39:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: g_discount ~ APPPATH/classes/Controller/Order.php [ 321 ] in /home2/goodieb1/public_html/application/classes/Controller/Order.php:321
2015-03-05 09:39:59 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Order.php(321): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 321, Array)
#1 /home2/goodieb1/public_html/application/classes/Controller/Order.php(670): Controller_Order->regular_order()
#2 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home2/goodieb1/public_html/application/classes/Controller/Order.php:321