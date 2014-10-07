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