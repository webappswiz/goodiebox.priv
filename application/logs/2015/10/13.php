<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-13 07:14:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: template_text_eng ~ APPPATH/classes/Controller/Admin/Templates.php [ 42 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Templates.php:42
2015-10-13 07:14:02 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Templates.php(42): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 42, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Templates.php(28): Controller_Admin_Templates->update()
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Templates->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Templates))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Templates.php:42
2015-10-13 07:14:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: template_text_eng ~ APPPATH/classes/Controller/Admin/Templates.php [ 42 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Templates.php:42
2015-10-13 07:14:14 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Templates.php(42): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/vhosts...', 42, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Templates.php(28): Controller_Admin_Templates->update()
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Templates->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Templates))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Admin/Templates.php:42