<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-13 13:25:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: firstname ~ APPPATH/classes/Controller/Kapcsolat.php [ 27 ] in /home2/goodieb1/public_html/application/classes/Controller/Kapcsolat.php:27
2015-04-13 13:25:36 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Kapcsolat.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 27, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Kapcsolat->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kapcsolat))
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home2/goodieb1/public_html/application/classes/Controller/Kapcsolat.php:27
2015-04-13 13:25:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: firstname ~ APPPATH/classes/Controller/Kapcsolat.php [ 27 ] in /home2/goodieb1/public_html/application/classes/Controller/Kapcsolat.php:27
2015-04-13 13:25:37 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Kapcsolat.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 27, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Kapcsolat->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kapcsolat))
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home2/goodieb1/public_html/application/classes/Controller/Kapcsolat.php:27
2015-04-13 13:25:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: firstname ~ APPPATH/classes/Controller/Kapcsolat.php [ 27 ] in /home2/goodieb1/public_html/application/classes/Controller/Kapcsolat.php:27
2015-04-13 13:25:38 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Kapcsolat.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 27, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Kapcsolat->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Kapcsolat))
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /home2/goodieb1/public_html/application/classes/Controller/Kapcsolat.php:27
2015-04-13 22:41:02 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(http://gdata.youtube.com/feeds/api/users/UCAnqUKt9dkY7Tw2kndO9JAA/uploads?max-results=4): failed to open stream: HTTP request failed! HTTP/1.0 503 Service Unavailable
 ~ APPPATH/views/main/index.php [ 298 ] in file:line
2015-04-13 22:41:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/home2/goodieb1...', 298, Array)
#1 /home2/goodieb1/public_html/application/views/main/index.php(298): file_get_contents('http://gdata.yo...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#3 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#4 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#5 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#11 {main} in file:line