<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-20 19:09:45 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'goodieb1_goodiebox.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-10-20 19:09:45 --- DEBUG: #0 /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('users')
#2 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home2/goodieb1/public_html/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#7 /home2/goodieb1/public_html/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('mona125@citroma...', 'Nina', false)
#8 /home2/goodieb1/public_html/application/classes/Controller/User/Session.php(21): Kohana_Auth->login('mona125@citroma...', 'Nina')
#9 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_User_Session->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Session))
#12 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-10-20 19:09:49 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'goodieb1_goodiebox.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336
2014-10-20 19:09:49 --- DEBUG: #0 /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(1668): Database_MySQLi->list_columns('users')
#2 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home2/goodieb1/public_html/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home2/goodieb1/public_html/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#7 /home2/goodieb1/public_html/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('dorina1997@citr...', 'maszat50', false)
#8 /home2/goodieb1/public_html/application/classes/Controller/User/Session.php(21): Kohana_Auth->login('dorina1997@citr...', 'maszat50')
#9 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_User_Session->action_login()
#10 [internal function]: Kohana_Controller->execute()
#11 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Session))
#12 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home2/goodieb1/public_html/modules/database/classes/Database/MySQLi.php:336