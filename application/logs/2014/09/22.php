<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-22 11:49:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: template ~ APPPATH/views/template/menu.php [ 2 ] in /var/www/goodiebox.priv/application/views/template/menu.php:2
2014-09-22 11:49:31 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/template/menu.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 2, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/views/main/index.php(64): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/application/views/template/menu.php:2
2014-09-22 11:49:43 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/template/menu.php [ 2 ] in file:line
2014-09-22 11:49:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 11:50:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: active_menu ~ APPPATH/views/template/menu.php [ 2 ] in /var/www/goodiebox.priv/application/views/template/menu.php:2
2014-09-22 11:50:10 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/template/menu.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 2, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/views/main/index.php(64): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/application/views/template/menu.php:2
2014-09-22 11:50:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: active_menu ~ APPPATH/views/template/menu.php [ 2 ] in /var/www/goodiebox.priv/application/views/template/menu.php:2
2014-09-22 11:50:12 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/template/menu.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 2, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/views/main/index.php(64): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/application/views/template/menu.php:2
2014-09-22 11:52:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: active_menu ~ APPPATH/views/template/menu.php [ 2 ] in /var/www/goodiebox.priv/application/views/template/menu.php:2
2014-09-22 11:52:49 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/template/menu.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 2, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/views/main/index.php(64): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/application/views/template/menu.php:2
2014-09-22 11:59:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: active_menu ~ APPPATH/classes/Controller/Main.php [ 16 ] in /var/www/goodiebox.priv/application/classes/Controller/Main.php:16
2014-09-22 11:59:13 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 16, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Main.php:16
2014-09-22 11:59:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: template ~ APPPATH/classes/Controller/Main.php [ 16 ] in /var/www/goodiebox.priv/application/classes/Controller/Main.php:16
2014-09-22 11:59:23 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Main.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 16, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Main.php:16
2014-09-22 12:11:57 --- EMERGENCY: ErrorException [ 4096 ]: Argument 3 passed to Kohana_HTML::anchor() must be of the type array, string given, called in /var/www/goodiebox.priv/application/views/template/menu.php on line 29 and defined ~ SYSPATH/classes/Kohana/HTML.php [ 106 ] in /var/www/goodiebox.priv/system/classes/Kohana/HTML.php:106
2014-09-22 12:11:57 --- DEBUG: #0 /var/www/goodiebox.priv/system/classes/Kohana/HTML.php(106): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/var/www/goodie...', 106, Array)
#1 /var/www/goodiebox.priv/application/views/template/menu.php(29): Kohana_HTML::anchor('/', 'F??oldal', '')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/views/template/header.php(134): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#6 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#7 /var/www/goodiebox.priv/application/views/template/core.php(5): Kohana_View->render()
#8 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#9 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#10 /var/www/goodiebox.priv/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(513): Kohana_Controller_Template->after()
#12 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#13 [internal function]: Kohana_Controller->execute()
#14 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hogyan))
#15 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#18 {main} in /var/www/goodiebox.priv/system/classes/Kohana/HTML.php:106
2014-09-22 12:53:51 --- EMERGENCY: Database_Exception [ 2 ]: mysqli_connect(): (28000/1045): Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH/database/classes/Database/MySQLi.php [ 57 ] in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:155
2014-09-22 12:53:51 --- DEBUG: #0 /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php(155): Database_MySQLi->connect()
#1 /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('shelters')
#3 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home2/goodieb1/public_html/application/views/order/index.php(159): Kohana_ORM::factory('Shelter')
#8 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#9 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#10 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#11 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#14 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#17 {main} in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:155
2014-09-22 12:55:28 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'goodieb1_goodiebox.shelters' doesn't exist [ SHOW FULL COLUMNS FROM `shelters` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-09-22 12:55:28 --- DEBUG: #0 /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('shelters')
#2 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home2/goodieb1/public_html/application/views/order/index.php(159): Kohana_ORM::factory('Shelter')
#7 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#8 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#9 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#10 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#13 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#16 {main} in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-09-22 19:54:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Kapcsolat::send() ~ APPPATH/classes/Controller/Kapcsolat.php [ 24 ] in file:line
2014-09-22 19:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 19:54:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Kapcsolat::send() ~ APPPATH/classes/Controller/Kapcsolat.php [ 24 ] in file:line
2014-09-22 19:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 19:54:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Kapcsolat::send() ~ APPPATH/classes/Controller/Kapcsolat.php [ 24 ] in file:line
2014-09-22 19:54:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 19:54:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Kapcsolat::send() ~ APPPATH/classes/Controller/Kapcsolat.php [ 24 ] in file:line
2014-09-22 19:54:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 19:55:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Kapcsolat::send() ~ APPPATH/classes/Controller/Kapcsolat.php [ 24 ] in file:line
2014-09-22 19:55:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 19:56:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Kapcsolat::send() ~ APPPATH/classes/Controller/Kapcsolat.php [ 24 ] in file:line
2014-09-22 19:56:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-22 19:57:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Kapcsolat::send() ~ APPPATH/classes/Controller/Kapcsolat.php [ 24 ] in file:line
2014-09-22 19:57:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line