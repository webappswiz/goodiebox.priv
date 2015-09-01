<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-20 08:31:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/coupons/add_user could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php:550
2015-05-20 08:31:51 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(550): Kohana_View->set_filename('admin/coupons/a...')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(500): Controller_Base_Core->set_view()
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php:550
2015-05-20 08:31:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/coupons/add_user could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php:550
2015-05-20 08:31:52 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(550): Kohana_View->set_filename('admin/coupons/a...')
#1 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(500): Controller_Base_Core->set_view()
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php:550
2015-05-20 08:33:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH/views/admin/coupons/add_user.php [ 8 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/add_user.php:8
2015-05-20 08:33:06 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/add_user.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 8, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/add_user.php:8
2015-05-20 08:33:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH/views/admin/coupons/add_user.php [ 15 ] in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/add_user.php:15
2015-05-20 08:33:19 --- DEBUG: #0 /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/add_user.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/vhosts...', 15, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupons))
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/vhosts/goodiebox.priv/public_html/application/views/admin/coupons/add_user.php:15