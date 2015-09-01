<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-27 09:40:38 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(http://gdata.youtube.com/feeds/api/users/UCAnqUKt9dkY7Tw2kndO9JAA/uploads?max-results=4&amp;v=3): failed to open stream: HTTP request failed! HTTP/1.0 403 Forbidden
 ~ APPPATH/views/kutyusaink/index.php [ 177 ] in file:line
2015-04-27 09:40:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/var/www/vhosts...', 177, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/application/views/kutyusaink/index.php(177): file_get_contents('http://gdata.yo...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kutyusaink))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-04-27 09:53:29 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(http://gdata.youtube.com/feeds/api/users/UCAnqUKt9dkY7Tw2kndO9JAA?v=2.1/uploads?max-results=4): failed to open stream: HTTP request failed! HTTP/1.0 400 Bad Request
 ~ APPPATH/views/kutyusaink/index.php [ 177 ] in file:line
2015-04-27 09:53:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/var/www/vhosts...', 177, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/application/views/kutyusaink/index.php(177): file_get_contents('http://gdata.yo...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kutyusaink))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-04-27 09:55:42 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(https://gdata.youtube.com/feeds/api/users/UCAnqUKt9dkY7Tw2kndO9JAA?v=2/uploads?max-results=4): failed to open stream: HTTP request failed! HTTP/1.0 400 Bad Request
 ~ APPPATH/views/kutyusaink/index.php [ 177 ] in file:line
2015-04-27 09:55:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/var/www/vhosts...', 177, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/application/views/kutyusaink/index.php(177): file_get_contents('https://gdata.y...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kutyusaink))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-04-27 09:58:31 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(https://gdata.youtube.com/feeds/api/users/UCAnqUKt9dkY7Tw2kndO9JAA?v=2/uploads?max-results=4): failed to open stream: HTTP request failed! HTTP/1.0 400 Bad Request
 ~ APPPATH/views/kutyusaink/index.php [ 177 ] in file:line
2015-04-27 09:58:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/var/www/vhosts...', 177, Array)
#1 /var/www/vhosts/goodiebox.priv/public_html/application/views/kutyusaink/index.php(177): file_get_contents('https://gdata.y...')
#2 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(61): include('/var/www/vhosts...')
#3 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/vhosts...', Array)
#4 /var/www/vhosts/goodiebox.priv/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#5 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kutyusaink))
#8 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/vhosts/goodiebox.priv/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/goodiebox.priv/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in file:line