<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-15 10:59:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: box ~ APPPATH/views/order/step3.php [ 131 ] in /var/www/goodiebox.priv/application/views/order/step3.php:131
2014-09-15 10:59:12 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/step3.php(131): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 131, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/step3.php:131
2014-09-15 11:00:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: box ~ APPPATH/views/order/step3.php [ 131 ] in /var/www/goodiebox.priv/application/views/order/step3.php:131
2014-09-15 11:00:53 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/step3.php(131): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 131, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/step3.php:131
2014-09-15 11:02:33 --- EMERGENCY: Exception [ 0 ]: Class file '/var/www/goodiebox.priv/application/vendor/Model/Users.php' does not exists ~ APPPATH/vendor/ApnsPHP/Autoload.php [ 49 ] in file:line
2014-09-15 11:02:33 --- DEBUG: #0 [internal function]: ApnsPHP_Autoload('Model_Users')
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(46): spl_autoload_call('Model_Users')
#2 /var/www/goodiebox.priv/application/classes/Controller/Order.php(45): Kohana_ORM::factory('Users')
#3 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-09-15 11:02:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: POST ~ APPPATH/classes/Controller/Order.php [ 46 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:46
2014-09-15 11:02:45 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 46, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:46
2014-09-15 11:06:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function delete() on a non-object ~ APPPATH/classes/Controller/Order.php [ 68 ] in file:line
2014-09-15 11:06:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-15 11:11:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Session_Native::$step1 ~ APPPATH/classes/Controller/Order.php [ 63 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:63
2014-09-15 11:11:36 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(63): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/goodie...', 63, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:63
2014-09-15 11:47:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/Order.php [ 51 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:51
2014-09-15 11:47:11 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(51): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 51, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:51
2014-09-15 11:48:06 --- EMERGENCY: Exception [ 0 ]: Class file '/var/www/goodiebox.priv/application/vendor/Controller/User.php' does not exists ~ APPPATH/vendor/ApnsPHP/Autoload.php [ 49 ] in file:line
2014-09-15 11:48:06 --- DEBUG: #0 [internal function]: ApnsPHP_Autoload('Controller_User')
#1 [internal function]: spl_autoload_call('Controller_User')
#2 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_User')
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#6 {main} in file:line
2014-09-15 11:54:25 --- EMERGENCY: Exception [ 0 ]: Class file '/var/www/goodiebox.priv/application/vendor/Controller/Api/User.php' does not exists ~ APPPATH/vendor/ApnsPHP/Autoload.php [ 49 ] in file:line
2014-09-15 11:54:25 --- DEBUG: #0 [internal function]: ApnsPHP_Autoload('Controller_Api_...')
#1 [internal function]: spl_autoload_call('Controller_Api_...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Api_...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#6 {main} in file:line
2014-09-15 12:03:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view api_user/check could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:03:42 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('api_user/check')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_User))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:05:02 --- EMERGENCY: View_Exception [ 0 ]: The requested view api/check could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:05:02 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('api/check')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:05:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view api/check could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:05:04 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('api/check')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:05:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view api/check could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:05:42 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('api/check')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:06:29 --- EMERGENCY: View_Exception [ 0 ]: The requested view api/check could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:06:29 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('api/check')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:06:30 --- EMERGENCY: View_Exception [ 0 ]: The requested view api/check could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:06:30 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('api/check')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:09:02 --- EMERGENCY: View_Exception [ 0 ]: The requested view api/check could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:09:02 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('api/check')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-15 12:15:35 --- EMERGENCY: Exception [ 0 ]: Class file '/var/www/goodiebox.priv/application/vendor/Controller/User/Profiles.php' does not exists ~ APPPATH/vendor/ApnsPHP/Autoload.php [ 49 ] in file:line
2014-09-15 12:15:35 --- DEBUG: #0 [internal function]: ApnsPHP_Autoload('Controller_User...')
#1 [internal function]: spl_autoload_call('Controller_User...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_User...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#6 {main} in file:line
2014-09-15 12:15:49 --- EMERGENCY: Exception [ 0 ]: Class file '/var/www/goodiebox.priv/application/vendor/Controller/User/Profiles.php' does not exists ~ APPPATH/vendor/ApnsPHP/Autoload.php [ 49 ] in file:line
2014-09-15 12:15:49 --- DEBUG: #0 [internal function]: ApnsPHP_Autoload('Controller_User...')
#1 [internal function]: spl_autoload_call('Controller_User...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_User...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#6 {main} in file:line
2014-09-15 12:39:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Auth_ORM::$id ~ APPPATH/classes/Controller/Order.php [ 16 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:16
2014-09-15 12:39:10 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/goodie...', 16, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:16
2014-09-15 12:39:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Auth_ORM::$id ~ APPPATH/classes/Controller/Order.php [ 16 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:16
2014-09-15 12:39:13 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/goodie...', 16, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:16
2014-09-15 12:42:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/order/index.php [ 75 ] in /var/www/goodiebox.priv/application/views/order/index.php:75
2014-09-15 12:42:33 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/index.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 75, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/index.php:75
2014-09-15 12:42:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/order/index.php [ 75 ] in /var/www/goodiebox.priv/application/views/order/index.php:75
2014-09-15 12:42:43 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/index.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 75, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/index.php:75
2014-09-15 12:42:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/order/index.php [ 75 ] in /var/www/goodiebox.priv/application/views/order/index.php:75
2014-09-15 12:42:45 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/index.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 75, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/index.php:75
2014-09-15 12:43:06 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/order/index.php [ 75 ] in file:line
2014-09-15 12:43:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-15 12:44:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Order::$user ~ APPPATH/classes/Controller/Order.php [ 16 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:16
2014-09-15 12:44:10 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/goodie...', 16, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:16
2014-09-15 12:44:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Order::$current_user ~ APPPATH/classes/Controller/Order.php [ 16 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:16
2014-09-15 12:44:23 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/goodie...', 16, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:16
2014-09-15 12:44:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Order::$current_user ~ APPPATH/classes/Controller/Order.php [ 16 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:16
2014-09-15 12:44:25 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/goodie...', 16, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:16
2014-09-15 12:44:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/order/index.php [ 75 ] in /var/www/goodiebox.priv/application/views/order/index.php:75
2014-09-15 12:44:56 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/index.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 75, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/index.php:75
2014-09-15 12:45:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/order/index.php [ 75 ] in /var/www/goodiebox.priv/application/views/order/index.php:75
2014-09-15 12:45:16 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/order/index.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 75, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/order/index.php:75
2014-09-15 12:45:30 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/order/index.php [ 75 ] in file:line
2014-09-15 12:45:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-15 12:45:50 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/order/index.php [ 75 ] in file:line
2014-09-15 12:45:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-15 12:45:51 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/order/index.php [ 75 ] in file:line
2014-09-15 12:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line