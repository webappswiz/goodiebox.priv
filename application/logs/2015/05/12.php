<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-12 19:09:17 --- EMERGENCY: Kohana_Exception [ 0 ]: The order_num property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:702
2015-05-12 19:09:17 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('order_num', '548')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Orders.php(320): Kohana_ORM->__set('order_num', '548')
#2 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Orders.php(219): Controller_Admin_Orders->cancel_order(Object(Model_Order), Object(Model_User), 1)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Orders.php(141): Controller_Admin_Orders->update()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Orders->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:702