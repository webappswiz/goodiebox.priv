<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-16 11:46:02 --- EMERGENCY: ErrorException [ 4096 ]: Argument 4 passed to Kohana_Form::select() must be of the type array, string given, called in /var/www/goodiebox.priv/application/views/order/index.php on line 92 and defined ~ SYSPATH/classes/Kohana/Form.php [ 252 ] in /var/www/goodiebox.priv/system/classes/Kohana/Form.php:252
2014-09-16 11:46:02 --- DEBUG: #0 /var/www/goodiebox.priv/system/classes/Kohana/Form.php(252): Kohana_Core::error_handler(4096, 'Argument 4 pass...', '/var/www/goodie...', 252, Array)
#1 /var/www/goodiebox.priv/application/views/order/index.php(92): Kohana_Form::select('years', Array, Array, 'required')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/system/classes/Kohana/Form.php:252
2014-09-16 12:19:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The delivery_name property does not exist in the Model_User_Shelter class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:702
2014-09-16 12:19:28 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('delivery_name', 'Alex Karamushko')
#1 /var/www/goodiebox.priv/application/classes/Controller/Order.php(112): Kohana_ORM->__set('delivery_name', 'Alex Karamushko')
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:702
2014-09-16 20:21:07 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/user_account/index.php [ 1 ] in file:line
2014-09-16 20:21:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-16 20:21:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' ~ APPPATH/views/user_account/index.php [ 17 ] in file:line
2014-09-16 20:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-16 20:31:52 --- EMERGENCY: Kohana_Exception [ 0 ]: The telephone property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-16 20:31:52 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('telephone')
#1 /var/www/goodiebox.priv/application/views/user_account/index.php(57): Kohana_ORM->__get('telephone')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-16 20:50:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Puppies' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-09-16 20:50:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-16 21:40:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/user_account/index.php [ 92 ] in file:line
2014-09-16 21:40:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-16 21:59:44 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'shelter.shelter_id' in 'where clause' [ SELECT `shelter`.`id` AS `id`, `shelter`.`shelter_name` AS `shelter_name`, `shelter`.`email` AS `email` FROM `shelters` AS `shelter` WHERE `shelter`.`shelter_id` = '3' LIMIT 1 ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-16 21:59:44 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `shelter...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(653): Kohana_ORM->find()
#4 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('shelter')
#5 /var/www/goodiebox.priv/application/views/user_account/index.php(152): Kohana_ORM->__get('shelter')
#6 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#7 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#8 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#12 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-16 21:59:46 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'shelter.shelter_id' in 'where clause' [ SELECT `shelter`.`id` AS `id`, `shelter`.`shelter_name` AS `shelter_name`, `shelter`.`email` AS `email` FROM `shelters` AS `shelter` WHERE `shelter`.`shelter_id` = '3' LIMIT 1 ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-16 21:59:46 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `shelter...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(653): Kohana_ORM->find()
#4 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('shelter')
#5 /var/www/goodiebox.priv/application/views/user_account/index.php(152): Kohana_ORM->__get('shelter')
#6 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#7 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#8 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#12 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-16 22:26:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User/Account.php [ 22 ] in file:line
2014-09-16 22:26:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-16 22:29:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/User/Account.php [ 21 ] in /var/www/goodiebox.priv/application/classes/Controller/User/Account.php:21
2014-09-16 22:29:59 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/User/Account.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 21, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_User_Account->action_editShipping()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/User/Account.php:21
2014-09-16 22:39:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: lastname-name ~ APPPATH/classes/Controller/User/Account.php [ 25 ] in /var/www/goodiebox.priv/application/classes/Controller/User/Account.php:25
2014-09-16 22:39:26 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/User/Account.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/goodie...', 25, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_User_Account->action_editShipping()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/User/Account.php:25