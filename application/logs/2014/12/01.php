<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-01 06:34:38 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/ramdisk/mysql/tmp/#sql_2454_2.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `shelters` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 06:34:38 --- DEBUG: #0 /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('shelters')
#2 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home2/goodieb1/public_html/application/views/order/index.php(247): Kohana_ORM::factory('Shelter')
#7 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#8 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#9 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#10 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#13 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#16 {main} in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 06:50:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 354 ] in /home2/goodieb1/public_html/application/views/order/step3.php:354
2014-12-01 06:50:36 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(354): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 354, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:354
2014-12-01 06:50:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 354 ] in /home2/goodieb1/public_html/application/views/order/step3.php:354
2014-12-01 06:50:37 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(354): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 354, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:354
2014-12-01 06:50:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 354 ] in /home2/goodieb1/public_html/application/views/order/step3.php:354
2014-12-01 06:50:37 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(354): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 354, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:354
2014-12-01 08:04:58 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/ramdisk/mysql/tmp/#sql_2454_1.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `packages` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 08:04:58 --- DEBUG: #0 /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('packages')
#2 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home2/goodieb1/public_html/application/views/order/step2.php(49): Kohana_ORM::factory('Packages')
#7 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#8 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#9 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#10 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#13 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#16 {main} in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 08:05:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: inv_count ~ APPPATH/classes/Controller/Order.php [ 404 ] in /home2/goodieb1/public_html/application/classes/Controller/Order.php:404
2014-12-01 08:05:42 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Order.php(404): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 404, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home2/goodieb1/public_html/application/classes/Controller/Order.php:404
2014-12-01 08:05:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: g_discount ~ APPPATH/classes/Controller/Order.php [ 256 ] in /home2/goodieb1/public_html/application/classes/Controller/Order.php:256
2014-12-01 08:05:58 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Order.php(256): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 256, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home2/goodieb1/public_html/application/classes/Controller/Order.php:256
2014-12-01 08:07:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 354 ] in /home2/goodieb1/public_html/application/views/order/step3.php:354
2014-12-01 08:07:47 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(354): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 354, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:354
2014-12-01 08:25:53 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home2/goodieb1/public_html/system/classes/Kohana/Session.php:125
2014-12-01 08:25:53 --- DEBUG: #0 /home2/goodieb1/public_html/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home2/goodieb1/public_html/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home2/goodieb1/public_html/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home2/goodieb1/public_html/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home2/goodieb1/public_html/application/classes/Controller/Core.php(23): Kohana_Auth::instance()
#5 /home2/goodieb1/public_html/application/classes/Controller/User/Account.php(10): Controller_Core->before()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(69): Controller_User_Account->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#9 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#12 {main} in /home2/goodieb1/public_html/system/classes/Kohana/Session.php:125
2014-12-01 09:02:08 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home2/goodieb1/public_html/system/classes/Kohana/Session.php:125
2014-12-01 09:02:08 --- DEBUG: #0 /home2/goodieb1/public_html/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home2/goodieb1/public_html/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home2/goodieb1/public_html/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home2/goodieb1/public_html/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home2/goodieb1/public_html/application/classes/Controller/Core.php(23): Kohana_Auth::instance()
#5 /home2/goodieb1/public_html/application/classes/Controller/Order.php(8): Controller_Core->before()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(69): Controller_Order->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#9 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#12 {main} in /home2/goodieb1/public_html/system/classes/Kohana/Session.php:125
2014-12-01 09:04:02 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Order.php [ 331 ] in /home2/goodieb1/public_html/application/classes/Controller/Order.php:331
2014-12-01 09:04:02 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Order.php(331): Kohana_Core::error_handler(8, 'Trying to get p...', '/home2/goodieb1...', 331, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home2/goodieb1/public_html/application/classes/Controller/Order.php:331
2014-12-01 09:07:38 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Order.php [ 331 ] in /home2/goodieb1/public_html/application/classes/Controller/Order.php:331
2014-12-01 09:07:38 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Order.php(331): Kohana_Core::error_handler(8, 'Trying to get p...', '/home2/goodieb1...', 331, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home2/goodieb1/public_html/application/classes/Controller/Order.php:331
2014-12-01 10:50:09 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/ramdisk/mysql/tmp/#sql_2454_1.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `packages` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 10:50:09 --- DEBUG: #0 /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('packages')
#2 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home2/goodieb1/public_html/application/views/order/step2.php(49): Kohana_ORM::factory('Packages')
#7 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#8 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#9 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#10 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#13 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#16 {main} in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 11:20:59 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/ramdisk/mysql/tmp/#sql_2454_2.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `packages` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 11:20:59 --- DEBUG: #0 /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('packages')
#2 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home2/goodieb1/public_html/application/views/order/step2.php(49): Kohana_ORM::factory('Packages')
#7 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#8 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#9 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#10 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#13 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#16 {main} in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 15:11:45 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/ramdisk/mysql/tmp/#sql_2454_1.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 15:11:45 --- DEBUG: #0 /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('users')
#2 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home2/goodieb1/public_html/application/classes/Controller/Api.php(15): Kohana_ORM::factory('User')
#7 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_API->action_check()
#8 [internal function]: Kohana_Controller->execute()
#9 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_API))
#10 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#13 {main} in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 17:02:58 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/ramdisk/mysql/tmp/#sql_2454_1.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `options` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 17:02:58 --- DEBUG: #0 /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('options')
#2 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(1)
#6 /home2/goodieb1/public_html/application/views/template/header.php(2): Kohana_ORM::factory('Options', 1)
#7 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#8 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#9 /home2/goodieb1/public_html/application/views/template/core.php(5): Kohana_View->render()
#10 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#11 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#12 /home2/goodieb1/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(518): Kohana_Controller_Template->after()
#14 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hogyan))
#17 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#20 {main} in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 20:17:17 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/ramdisk/mysql/tmp/#sql_2454_1.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `shelters` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-12-01 20:17:17 --- DEBUG: #0 /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('shelters')
#2 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home2/goodieb1/public_html/application/views/order/index.php(247): Kohana_ORM::factory('Shelter')
#7 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#8 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#9 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#10 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#13 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#16 {main} in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336