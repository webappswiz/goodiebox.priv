<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-18 12:57:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::is_logged() ~ APPPATH/views/order/step3.php [ 125 ] in file:line
2014-09-18 12:57:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 13:02:09 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/order/step3.php [ 105 ] in /var/www/goodiebox.priv/application/views/order/step3.php:105
2014-09-18 13:02:09 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/step3.php(105): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/goodie...', 105, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/step3.php:105
2014-09-18 13:08:50 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/order/step3.php [ 105 ] in /var/www/goodiebox.priv/application/views/order/step3.php:105
2014-09-18 13:08:50 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/step3.php(105): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/goodie...', 105, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/step3.php:105
2014-09-18 13:11:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The customer_address2 property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-18 13:11:33 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('customer_addres...')
#1 /var/www/goodiebox.priv/application/views/order/step3.php(116): Kohana_ORM->__get('customer_addres...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-18 13:22:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: addressbook ~ APPPATH/views/order/step3.php [ 166 ] in /var/www/goodiebox.priv/application/views/order/step3.php:166
2014-09-18 13:22:28 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/step3.php(166): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 166, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/step3.php:166
2014-09-18 14:28:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/views/order/step3.php [ 233 ] in file:line
2014-09-18 14:28:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 14:28:38 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/views/order/step3.php [ 233 ] in file:line
2014-09-18 14:28:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 14:28:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH/views/order/step3.php [ 233 ] in file:line
2014-09-18 14:28:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-18 14:29:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: box ~ APPPATH/views/order/step3.php [ 244 ] in /var/www/goodiebox.priv/application/views/order/step3.php:244
2014-09-18 14:29:37 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/step3.php(244): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 244, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/step3.php:244
2014-09-18 14:29:57 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH/views/order/step3.php [ 244 ] in /var/www/goodiebox.priv/application/views/order/step3.php:244
2014-09-18 14:29:57 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/step3.php(244): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/goodie...', 244, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/step3.php:244
2014-09-18 14:31:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: box ~ APPPATH/views/order/step3.php [ 243 ] in /var/www/goodiebox.priv/application/views/order/step3.php:243
2014-09-18 14:31:30 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/step3.php(243): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 243, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/step3.php:243
2014-09-18 14:58:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: delivery_telephone ~ APPPATH/classes/Controller/Order.php [ 128 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:128
2014-09-18 14:58:42 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(128): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 128, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:128
2014-09-18 15:16:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/Order.php [ 51 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:51
2014-09-18 15:16:15 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(51): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 51, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:51
2014-09-18 15:16:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/Order.php [ 56 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:56
2014-09-18 15:16:42 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(56): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 56, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:56
2014-09-18 15:16:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/Order.php [ 68 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:68
2014-09-18 15:16:59 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(68): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 68, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:68
2014-09-18 15:18:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message ~ APPPATH/classes/Controller/Order.php [ 102 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:102
2014-09-18 15:18:11 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 102, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:102
2014-09-18 15:39:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: delivery_message ~ APPPATH/classes/Controller/Order.php [ 145 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:145
2014-09-18 15:39:05 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(145): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 145, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:145