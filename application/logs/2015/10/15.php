<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-15 19:24:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The template_text_eng property does not exist in the Model_Templates class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-10-15 19:24:42 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('template_text_e...')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(212): Kohana_ORM->__get('template_text_e...')
#2 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(923): Controller_Order->receipt_email(Object(Model_Order), Object(Model_User), 1)
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_success()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-10-15 19:24:50 --- EMERGENCY: Kohana_Exception [ 0 ]: The template_text_eng property does not exist in the Model_Templates class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603
2015-10-15 19:24:50 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('template_text_e...')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(212): Kohana_ORM->__get('template_text_e...')
#2 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Order.php(923): Controller_Order->receipt_email(Object(Model_Order), Object(Model_User), 1)
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_success()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/vhosts/goodiebox.priv/public_html/modules/orm/classes/Kohana/ORM.php:603