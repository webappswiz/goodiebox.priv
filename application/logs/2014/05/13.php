<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-13 11:11:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_posts' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-13 11:11:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 11:17:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_categories' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-05-13 11:17:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 11:18:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The categories property does not exist in the Model_Posts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:18:09 --- DEBUG: #0 /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('categories')
#1 /var/www/joblinker.priv/application/classes/Controller/Api.php(13): Kohana_ORM->__get('categories')
#2 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(84): Controller_API->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:18:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The categories property does not exist in the Model_Posts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:18:22 --- DEBUG: #0 /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('categories')
#1 /var/www/joblinker.priv/application/classes/Controller/Api.php(13): Kohana_ORM->__get('categories')
#2 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(84): Controller_API->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:18:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The categories property does not exist in the Model_Posts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:18:23 --- DEBUG: #0 /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('categories')
#1 /var/www/joblinker.priv/application/classes/Controller/Api.php(13): Kohana_ORM->__get('categories')
#2 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(84): Controller_API->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:18:47 --- EMERGENCY: Kohana_Exception [ 0 ]: The categories property does not exist in the Model_Posts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:18:47 --- DEBUG: #0 /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('categories')
#1 /var/www/joblinker.priv/application/classes/Controller/Api.php(13): Kohana_ORM->__get('categories')
#2 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(84): Controller_API->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:18:48 --- EMERGENCY: Kohana_Exception [ 0 ]: The categories property does not exist in the Model_Posts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:18:48 --- DEBUG: #0 /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('categories')
#1 /var/www/joblinker.priv/application/classes/Controller/Api.php(13): Kohana_ORM->__get('categories')
#2 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(84): Controller_API->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:18:48 --- EMERGENCY: Kohana_Exception [ 0 ]: The categories property does not exist in the Model_Posts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:18:48 --- DEBUG: #0 /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('categories')
#1 /var/www/joblinker.priv/application/classes/Controller/Api.php(13): Kohana_ORM->__get('categories')
#2 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(84): Controller_API->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:19:52 --- EMERGENCY: Kohana_Exception [ 0 ]: The categories property does not exist in the Model_Posts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:19:52 --- DEBUG: #0 /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('categories')
#1 /var/www/joblinker.priv/application/classes/Controller/Api.php(11): Kohana_ORM->__get('categories')
#2 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(84): Controller_API->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:19:53 --- EMERGENCY: Kohana_Exception [ 0 ]: The categories property does not exist in the Model_Posts class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:19:53 --- DEBUG: #0 /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('categories')
#1 /var/www/joblinker.priv/application/classes/Controller/Api.php(11): Kohana_ORM->__get('categories')
#2 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(84): Controller_API->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 11:44:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view main/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/joblinker.priv/application/classes/Controller/Base/Core.php:545
2014-05-13 11:44:22 --- DEBUG: #0 /var/www/joblinker.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('main/index')
#1 /var/www/joblinker.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/joblinker.priv/application/classes/Controller/Base/Core.php:545
2014-05-13 11:58:35 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ SYSPATH/classes/Kohana/Arr.php [ 282 ] in file:line
2014-05-13 11:58:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-13 11:59:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$ssid ~ APPPATH/classes/Controller/Api.php [ 16 ] in /var/www/joblinker.priv/application/classes/Controller/Api.php:16
2014-05-13 11:59:23 --- DEBUG: #0 /var/www/joblinker.priv/application/classes/Controller/Api.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/joblin...', 16, Array)
#1 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(69): Controller_API->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/joblinker.priv/application/classes/Controller/Api.php:16
2014-05-13 11:59:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$ssid ~ APPPATH/classes/Controller/Api.php [ 16 ] in /var/www/joblinker.priv/application/classes/Controller/Api.php:16
2014-05-13 11:59:49 --- DEBUG: #0 /var/www/joblinker.priv/application/classes/Controller/Api.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/joblin...', 16, Array)
#1 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(69): Controller_API->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/joblinker.priv/application/classes/Controller/Api.php:16
2014-05-13 12:02:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ssid ~ APPPATH/classes/Controller/Api.php [ 26 ] in /var/www/joblinker.priv/application/classes/Controller/Api.php:26
2014-05-13 12:02:36 --- DEBUG: #0 /var/www/joblinker.priv/application/classes/Controller/Api.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/joblin...', 26, Array)
#1 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(69): Controller_API->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/joblinker.priv/application/classes/Controller/Api.php:26
2014-05-13 12:05:31 --- EMERGENCY: View_Exception [ 0 ]: The requested view api/login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/joblinker.priv/application/classes/Controller/Base/Core.php:545
2014-05-13 12:05:31 --- DEBUG: #0 /var/www/joblinker.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('api/login')
#1 /var/www/joblinker.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/joblinker.priv/application/classes/Controller/Base/Core.php:545
2014-05-13 12:06:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Api.php [ 47 ] in /var/www/joblinker.priv/application/classes/Controller/Api.php:47
2014-05-13 12:06:24 --- DEBUG: #0 /var/www/joblinker.priv/application/classes/Controller/Api.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/joblin...', 47, Array)
#1 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(84): Controller_API->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/joblinker.priv/application/classes/Controller/Api.php:47
2014-05-13 12:20:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The pass property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 12:20:01 --- DEBUG: #0 /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('pass')
#1 /var/www/joblinker.priv/application/classes/Controller/Api.php(48): Kohana_ORM->__get('pass')
#2 /var/www/joblinker.priv/system/classes/Kohana/Controller.php(84): Controller_API->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#5 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/joblinker.priv/modules/orm/classes/Kohana/ORM.php:603
2014-05-13 12:55:09 --- EMERGENCY: Exception [ 0 ]: Class file '/var/www/joblinker.priv/application/vendor/Controller/Test.php' does not exists ~ APPPATH/vendor/ApnsPHP/Autoload.php [ 49 ] in file:line
2014-05-13 12:55:09 --- DEBUG: #0 [internal function]: ApnsPHP_Autoload('Controller_Test')
#1 [internal function]: spl_autoload_call('Controller_Test')
#2 /var/www/joblinker.priv/system/classes/Kohana/Request/Client/Internal.php(74): class_exists('Controller_Test')
#3 /var/www/joblinker.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/joblinker.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/joblinker.priv/index.php(118): Kohana_Request->execute()
#6 {main} in file:line
2014-05-13 13:03:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Auth_ORM::md5() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 86 ] in file:line
2014-05-13 13:03:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line