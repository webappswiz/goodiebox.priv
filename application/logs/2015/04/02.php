<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-02 05:42:45 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Order.php [ 348 ] in /home2/goodieb1/public_html/application/classes/Controller/Order.php:348
2015-04-02 05:42:45 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Order.php(348): Kohana_Core::error_handler(8, 'Trying to get p...', '/home2/goodieb1...', 348, Array)
#1 /home2/goodieb1/public_html/application/classes/Controller/Order.php(693): Controller_Order->regular_order()
#2 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home2/goodieb1/public_html/application/classes/Controller/Order.php:348
2015-04-02 05:42:52 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Order.php [ 348 ] in /home2/goodieb1/public_html/application/classes/Controller/Order.php:348
2015-04-02 05:42:52 --- DEBUG: #0 /home2/goodieb1/public_html/application/classes/Controller/Order.php(348): Kohana_Core::error_handler(8, 'Trying to get p...', '/home2/goodieb1...', 348, Array)
#1 /home2/goodieb1/public_html/application/classes/Controller/Order.php(693): Controller_Order->regular_order()
#2 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home2/goodieb1/public_html/application/classes/Controller/Order.php:348
2015-04-02 09:23:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: REFNOEXT ~ APPPATH/vendor/payu/PayUPayment.class.php [ 409 ] in /home2/goodieb1/public_html/application/vendor/payu/PayUPayment.class.php:409
2015-04-02 09:23:14 --- DEBUG: #0 /home2/goodieb1/public_html/application/vendor/payu/PayUPayment.class.php(409): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 409, Array)
#1 /home2/goodieb1/public_html/application/classes/Controller/Order.php(887): PayUIpn->validateReceived()
#2 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_ipn()
#3 [internal function]: Kohana_Controller->execute()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home2/goodieb1/public_html/application/vendor/payu/PayUPayment.class.php:409
2015-04-02 09:28:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: REFNOEXT ~ APPPATH/vendor/payu/PayUPayment.class.php [ 409 ] in /home2/goodieb1/public_html/application/vendor/payu/PayUPayment.class.php:409
2015-04-02 09:28:06 --- DEBUG: #0 /home2/goodieb1/public_html/application/vendor/payu/PayUPayment.class.php(409): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 409, Array)
#1 /home2/goodieb1/public_html/application/classes/Controller/Order.php(887): PayUIpn->validateReceived()
#2 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_ipn()
#3 [internal function]: Kohana_Controller->execute()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home2/goodieb1/public_html/application/vendor/payu/PayUPayment.class.php:409
2015-04-02 09:35:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: REFNOEXT ~ APPPATH/vendor/payu/PayUPayment.class.php [ 409 ] in /home2/goodieb1/public_html/application/vendor/payu/PayUPayment.class.php:409
2015-04-02 09:35:24 --- DEBUG: #0 /home2/goodieb1/public_html/application/vendor/payu/PayUPayment.class.php(409): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 409, Array)
#1 /home2/goodieb1/public_html/application/classes/Controller/Order.php(887): PayUIpn->validateReceived()
#2 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(84): Controller_Order->action_ipn()
#3 [internal function]: Kohana_Controller->execute()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /home2/goodieb1/public_html/application/vendor/payu/PayUPayment.class.php:409
2015-04-02 11:08:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 9 ] in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-04-02 11:08:43 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 9, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-04-02 11:10:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: order ~ APPPATH/views/order/payment.php [ 9 ] in /home2/goodieb1/public_html/application/views/order/payment.php:9
2015-04-02 11:10:06 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/payment.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/home2/goodieb1...', 9, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/payment.php:9
2015-04-02 18:21:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: step1 ~ APPPATH/views/order/step3.php [ 9 ] in /home2/goodieb1/public_html/application/views/order/step3.php:9
2015-04-02 18:21:34 --- DEBUG: #0 /home2/goodieb1/public_html/application/views/order/step3.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home2/goodieb1...', 9, Array)
#1 /home2/goodieb1/public_html/system/classes/Kohana/View.php(61): include('/home2/goodieb1...')
#2 /home2/goodieb1/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home2/goodieb1...', Array)
#3 /home2/goodieb1/public_html/application/classes/Controller/Base/Core.php(517): Kohana_View->render()
#4 /home2/goodieb1/public_html/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /home2/goodieb1/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home2/goodieb1/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home2/goodieb1/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /home2/goodieb1/public_html/application/views/order/step3.php:9