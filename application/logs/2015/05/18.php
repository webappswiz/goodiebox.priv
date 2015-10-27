<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-18 06:15:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Coupons::find_model() ~ APPPATH/classes/Controller/Admin/Coupons.php [ 13 ] in file:line
2015-05-18 06:15:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 06:19:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH/views/admin/invoice/form.php [ 138 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/invoice/form.php:138
2015-05-18 06:19:23 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/invoice/form.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 138, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/invoice/form.php:138
2015-05-18 06:22:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH/views/admin/invoice/form.php [ 138 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/invoice/form.php:138
2015-05-18 06:22:24 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/invoice/form.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 138, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/invoice/form.php:138
2015-05-18 06:23:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The status_name property does not exist in the Model_CouponCodes class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-05-18 06:23:09 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('status_name')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php(8): Kohana_ORM->__get('status_name')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-05-18 06:25:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-18 06:25:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 06:25:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-18 06:25:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 06:25:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: st ~ APPPATH/views/admin/coupons/form.php [ 8 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php:8
2015-05-18 06:25:20 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 8, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php:8
2015-05-18 06:25:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: st ~ APPPATH/views/admin/coupons/form.php [ 8 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php:8
2015-05-18 06:25:21 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 8, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php:8
2015-05-18 06:25:29 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php on line 8 and defined ~ SYSPATH/classes/Kohana/Form.php [ 252 ] in /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Form.php:252
2015-05-18 06:25:29 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/vhosts...', 252, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php(8): Kohana_Form::select('user_id', '', Object(Model_User), Array)
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Form.php:252
2015-05-18 06:29:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/coupons/form.php [ 8 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php:8
2015-05-18 06:29:15 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 8, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php:8
2015-05-18 06:30:14 --- EMERGENCY: Kohana_Exception [ 0 ]: The type property does not exist in the Model_CouponCodes class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-05-18 06:30:14 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('type')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php(17): Kohana_ORM->__get('type')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-05-18 06:30:15 --- EMERGENCY: Kohana_Exception [ 0 ]: The type property does not exist in the Model_CouponCodes class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-05-18 06:30:15 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('type')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php(17): Kohana_ORM->__get('type')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-05-18 06:39:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/coupons/form.php [ 8 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php:8
2015-05-18 06:39:25 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 8, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/form.php:8
2015-05-18 08:02:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH/views/admin/coupons/index.php [ 2 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/index.php:2
2015-05-18 08:02:37 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 2, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/index.php:2
2015-05-18 08:02:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$user_id ~ APPPATH/views/admin/coupons/index.php [ 21 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/index.php:21
2015-05-18 08:02:57 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/index.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/vhosts...', 21, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/index.php:21
2015-05-18 08:02:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$user_id ~ APPPATH/views/admin/coupons/index.php [ 21 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/index.php:21
2015-05-18 08:02:58 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/index.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/vhosts...', 21, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/index.php:21
2015-05-18 08:03:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: order ~ APPPATH/views/admin/coupons/index.php [ 28 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/index.php:28
2015-05-18 08:03:31 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/index.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 28, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/index.php:28
2015-05-18 09:31:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_CouponCode' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-18 09:31:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 09:31:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_CouponCode' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-18 09:31:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 09:47:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: new ~ APPPATH/classes/Controller/Order.php [ 433 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php:433
2015-05-18 09:47:20 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(433): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 433, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(700): Controller_Order->regular_order()
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php:433
2015-05-18 09:48:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: coupon_code ~ APPPATH/classes/Controller/Order.php [ 423 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php:423
2015-05-18 09:48:01 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(423): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 423, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(701): Controller_Order->regular_order()
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php:423
2015-05-18 09:48:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: coupon_code ~ APPPATH/classes/Controller/Order.php [ 423 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php:423
2015-05-18 09:48:27 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(423): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 423, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(701): Controller_Order->regular_order()
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php:423
2015-05-18 12:23:19 --- EMERGENCY: Kohana_Exception [ 0 ]: The invoice property does not exist in the Model_CouponCodes class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-05-18 12:23:19 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('invoice')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/views/user_account/index.php(612): Kohana_ORM->__get('invoice')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603