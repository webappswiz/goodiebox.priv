<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-18 09:34:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The 1 property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-01-18 09:34:42 --- DEBUG: #0 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('1')
#1 /home2/goodieb1/public_html/application/classes/Controller/Admin/Invoice.php(78): Kohana_ORM->__get('1')
#2 /home2/goodieb1/public_html/application/classes/Controller/Admin/Invoice.php(72): Controller_Admin_Invoice->receipt_email(Object(Model_Order), '1')
#3 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Invoice->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Invoice))
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-01-18 10:37:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH/views/admin/orders/page.php [ 35 ] in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 10:37:11 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/admin/orders/page.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 35, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 10:37:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH/views/admin/orders/page.php [ 35 ] in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 10:37:37 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/admin/orders/page.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 35, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 10:39:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH/views/admin/orders/page.php [ 35 ] in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 10:39:29 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/admin/orders/page.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 35, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 10:50:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH/views/admin/orders/page.php [ 35 ] in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 10:50:56 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/admin/orders/page.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 35, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 10:52:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH/views/admin/orders/page.php [ 35 ] in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 10:52:42 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/admin/orders/page.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 35, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 12:47:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH/views/admin/orders/page.php [ 35 ] in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 12:47:28 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/admin/orders/page.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 35, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 12:48:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH/views/admin/orders/page.php [ 35 ] in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 12:48:03 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/admin/orders/page.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 35, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 13:23:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH/views/admin/orders/page.php [ 35 ] in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 13:23:14 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/admin/orders/page.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 35, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 13:24:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH/views/admin/orders/page.php [ 35 ] in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 13:24:14 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/admin/orders/page.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 35, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 13:27:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH/views/admin/orders/page.php [ 35 ] in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 13:27:26 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/admin/orders/page.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 35, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 13:28:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH/views/admin/orders/page.php [ 35 ] in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35
2015-01-18 13:28:30 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/admin/orders/page.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 35, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/admin/orders/page.php:35