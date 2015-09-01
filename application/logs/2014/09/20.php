<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-20 17:04:52 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function is_admin() on a non-object ~ APPPATH/classes/Controller/Admin.php [ 9 ] in file:line
2014-09-20 17:04:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-20 17:07:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 17:07:35 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/index')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 17:07:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 17:07:36 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/index')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 17:11:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 17:11:48 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/index')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 17:52:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function is_admin() on a non-object ~ APPPATH/classes/Controller/User/Session.php [ 18 ] in file:line
2014-09-20 17:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-20 18:16:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Shelters' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-09-20 18:16:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-20 18:23:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/shelters could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:23:45 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/shelters')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:23:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/shelters could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:23:52 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/shelters')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:23:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin_shelters/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:23:59 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin_shelters/...')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Shelters))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:24:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/shelters could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:24:11 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/shelters')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:27:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/shelters/edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:27:51 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/shelters/...')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Shelters))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:27:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/shelters/edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:27:52 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/shelters/...')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Shelters))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:30:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/shelters/edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:30:42 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/shelters/...')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Shelters))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 18:55:19 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Controller_Admin_Shelters could not be converted to string ~ APPPATH/classes/Controller/Admin/Shelters.php [ 17 ] in /var/www/goodiebox.priv/application/classes/Controller/Admin/Shelters.php:17
2014-09-20 18:55:19 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Admin/Shelters.php(17): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/goodie...', 17, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Admin_Shelters->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Shelters))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Admin/Shelters.php:17
2014-09-20 19:02:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The shelter_email property does not exist in the Model_Shelter class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-20 19:02:02 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('shelter_email')
#1 /var/www/goodiebox.priv/application/views/admin/shelters/form.php(15): Kohana_ORM->__get('shelter_email')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Shelters))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-20 19:03:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Shelters::update() ~ APPPATH/classes/Controller/Admin/Shelters.php [ 29 ] in file:line
2014-09-20 19:03:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-20 19:03:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function tr() ~ APPPATH/views/admin/shelters/index.php [ 34 ] in file:line
2014-09-20 19:03:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-20 19:07:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Salon' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-09-20 19:07:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-20 19:07:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/Admin/Shelters.php [ 50 ] in /var/www/goodiebox.priv/application/classes/Controller/Admin/Shelters.php:50
2014-09-20 19:07:41 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Admin/Shelters.php(50): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 50, Array)
#1 /var/www/goodiebox.priv/application/classes/Controller/Admin/Shelters.php(38): Controller_Admin_Shelters->update()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Admin_Shelters->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Shelters))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Admin/Shelters.php:50
2014-09-20 19:34:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Templates class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-20 19:34:59 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('email')
#1 /var/www/goodiebox.priv/application/views/admin/templates/form.php(7): Kohana_ORM->__get('email')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Templates))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-20 19:42:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: shelter_name ~ APPPATH/classes/Controller/Admin/Templates.php [ 49 ] in /var/www/goodiebox.priv/application/classes/Controller/Admin/Templates.php:49
2014-09-20 19:42:18 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Admin/Templates.php(49): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 49, Array)
#1 /var/www/goodiebox.priv/application/classes/Controller/Admin/Templates.php(38): Controller_Admin_Templates->update()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Admin_Templates->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Templates))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Admin/Templates.php:49
2014-09-20 19:53:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: shelter_name ~ APPPATH/classes/Controller/Admin/Templates.php [ 43 ] in /var/www/goodiebox.priv/application/classes/Controller/Admin/Templates.php:43
2014-09-20 19:53:40 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Admin/Templates.php(43): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 43, Array)
#1 /var/www/goodiebox.priv/application/classes/Controller/Admin/Templates.php(30): Controller_Admin_Templates->update()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Admin_Templates->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Templates))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Admin/Templates.php:43
2014-09-20 20:02:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/users/form could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 20:02:55 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/users/for...')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_users))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-20 20:06:19 --- EMERGENCY: Kohana_Exception [ 0 ]: The shelter_name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-20 20:06:19 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('shelter_name')
#1 /var/www/goodiebox.priv/application/views/admin/users/form.php(15): Kohana_ORM->__get('shelter_name')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_users))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-20 20:06:20 --- EMERGENCY: Kohana_Exception [ 0 ]: The shelter_name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-20 20:06:20 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('shelter_name')
#1 /var/www/goodiebox.priv/application/views/admin/users/form.php(15): Kohana_ORM->__get('shelter_name')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_users))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-20 21:44:36 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/template/core.php [ 9 ] in file:line
2014-09-20 21:44:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-20 21:44:39 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/template/core.php [ 9 ] in file:line
2014-09-20 21:44:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-20 21:44:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/views/template/core.php [ 9 ] in /var/www/goodiebox.priv/application/views/template/core.php:9
2014-09-20 21:44:49 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/template/core.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 9, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(513): Kohana_Controller_Template->after()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/application/views/template/core.php:9
2014-09-20 21:44:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/views/template/core.php [ 9 ] in /var/www/goodiebox.priv/application/views/template/core.php:9
2014-09-20 21:44:50 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/template/core.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 9, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(513): Kohana_Controller_Template->after()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/application/views/template/core.php:9
2014-09-20 21:44:58 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/template/core.php [ 9 ] in file:line
2014-09-20 21:44:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-20 21:50:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: active_menu ~ APPPATH/views/template/menu.php [ 24 ] in /var/www/goodiebox.priv/application/views/template/menu.php:24
2014-09-20 21:50:39 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/template/menu.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 24, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/views/hogyan/index.php(3): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hogyan))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/application/views/template/menu.php:24
2014-09-20 22:02:55 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`goodiebox`.`address_book`, CONSTRAINT `address_book_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `address_book` (`customer_firstname`, `customer_lastname`, `customer_telephone`, `customer_zip`, `customer_city`, `customer_address`) VALUES ('Alex', 'Karamushko', '380975231602', '69050', 'Zaporizhzhya', 'Kosmicheskaya 100a, 33 ') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-20 22:02:55 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ad...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/goodiebox.priv/application/classes/Controller/User/Account.php(39): Kohana_ORM->save()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_User_Account->action_editShipping()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251