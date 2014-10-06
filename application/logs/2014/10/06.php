<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-06 17:13:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view order/payment could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php:545
2014-10-06 17:13:09 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('order/payment')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php:545
2014-10-06 17:16:14 --- EMERGENCY: Kohana_Exception [ 0 ]: The message property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:702
2014-10-06 17:16:14 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('message', '')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(259): Kohana_ORM->__set('message', '')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:702
2014-10-06 17:18:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/views/order/step3.php [ 169 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/order/step3.php:169
2014-10-06 17:18:38 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/order/step3.php(169): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 169, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/order/step3.php:169
2014-10-06 17:19:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view order/payment could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php:545
2014-10-06 17:19:03 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('order/payment')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php:545
2014-10-06 17:37:41 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/order/payment.php [ 5 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php:5
2014-10-06 17:37:41 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php(5): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/vhosts...', 5, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php:5
2014-10-06 17:39:07 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/order/payment.php [ 8 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php:8
2014-10-06 17:39:07 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/vhosts...', 8, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php:8
2014-10-06 17:39:08 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/order/payment.php [ 8 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php:8
2014-10-06 17:39:08 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/vhosts...', 8, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php:8
2014-10-06 17:39:10 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/order/payment.php [ 8 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php:8
2014-10-06 17:39:10 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/vhosts...', 8, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php:8
2014-10-06 17:39:20 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/order/payment.php [ 8 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php:8
2014-10-06 17:39:20 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/vhosts...', 8, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php:8
2014-10-06 17:39:35 --- EMERGENCY: ErrorException [ 1 ]: Cannot access protected property PayULiveUpdate::$merchantId ~ APPPATH/views/order/payment.php [ 21 ] in file:line
2014-10-06 17:39:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-06 17:39:52 --- EMERGENCY: ErrorException [ 1 ]: Cannot access protected property PayULiveUpdate::$merchantId ~ APPPATH/views/order/payment.php [ 22 ] in file:line
2014-10-06 17:39:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-06 17:39:55 --- EMERGENCY: ErrorException [ 1 ]: Cannot access protected property PayULiveUpdate::$merchantId ~ APPPATH/views/order/payment.php [ 22 ] in file:line
2014-10-06 17:39:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-06 17:41:59 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/order/payment.php [ 18 ] in file:line
2014-10-06 17:41:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-06 17:42:25 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/order/payment.php [ 18 ] in file:line
2014-10-06 17:42:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-06 17:42:26 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/order/payment.php [ 18 ] in file:line
2014-10-06 17:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-06 17:45:20 --- EMERGENCY: ErrorException [ 1 ]: Cannot access protected property PayULiveUpdate::$merchantId ~ APPPATH/views/order/payment.php [ 21 ] in file:line
2014-10-06 17:45:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-06 17:45:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The customer_email property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2014-10-06 17:45:49 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('customer_email')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php(41): Kohana_ORM->__get('customer_email')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603