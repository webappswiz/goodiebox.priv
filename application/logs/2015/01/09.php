<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-09 18:57:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /home2/goodieb1/public_html/application/classes/Controller/Order.php:771
2015-01-09 18:57:52 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Order.php(771): Kohana_ORM->find()
#1 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_ipn()
#2 [internal function]: Kohana_Controller->execute()
#3 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home2/goodieb1/public_html/application/classes/Controller/Order.php:771