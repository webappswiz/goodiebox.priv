<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-07 11:24:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The company_name property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2014-10-07 11:24:49 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('company_name')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/views/order/payment.php(54): Kohana_ORM->__get('company_name')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2014-10-07 16:25:01 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:1302
2014-10-07 16:25:01 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(471): Kohana_ORM->save()
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_gift2()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:1302
2014-10-07 16:29:07 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:1302
2014-10-07 16:29:07 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(471): Kohana_ORM->save()
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_gift2()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:1302
2014-10-07 16:35:15 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:1302
2014-10-07 16:35:15 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(471): Kohana_ORM->save()
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_gift2()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:1302
2014-10-07 16:36:23 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:1302
2014-10-07 16:36:23 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(471): Kohana_ORM->save()
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_gift2()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:1302
2014-10-07 16:38:39 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Order.php [ 527 ] in file:line
2014-10-07 16:38:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-07 16:41:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Order.php [ 527 ] in file:line
2014-10-07 16:41:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line