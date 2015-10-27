<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-21 11:14:59 --- EMERGENCY: ErrorException [ 8 ]: Object of class Model_Order could not be converted to int ~ APPPATH/classes/Controller/Order.php [ 685 ] in /home2/goodieb1/public_html/application/classes/Controller/Order.php:685
2014-10-21 11:14:59 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Order.php(685): Kohana_Core::error_handler(8, 'Object of class...', '/home2/goodieb1...', 685, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_ipn()
#2 [internal function]: Kohana_Controller->execute()
#3 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home2/goodieb1/public_html/application/classes/Controller/Order.php:685
2014-10-21 11:29:09 --- EMERGENCY: ErrorException [ 8 ]: Object of class Model_Order could not be converted to int ~ APPPATH/classes/Controller/Order.php [ 685 ] in /home2/goodieb1/public_html/application/classes/Controller/Order.php:685
2014-10-21 11:29:09 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Order.php(685): Kohana_Core::error_handler(8, 'Object of class...', '/home2/goodieb1...', 685, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_ipn()
#2 [internal function]: Kohana_Controller->execute()
#3 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home2/goodieb1/public_html/application/classes/Controller/Order.php:685
2014-10-21 15:29:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Order.php [ 652 ] in file:line
2014-10-21 15:29:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-21 15:29:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 211 ] in /home2/goodieb1/public_html/application/views/order/step3.php:211
2014-10-21 15:29:08 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(211): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 211, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:211
2014-10-21 15:40:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Order.php [ 652 ] in file:line
2014-10-21 15:40:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line