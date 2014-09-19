<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-19 12:11:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-09-19 12:11:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-19 12:11:29 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`goodiebox`.`orders`, CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`puppy_id`, `last_modified`, `delivery_firstname`, `delivery_lastname`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`, `selected_box`, `coupon_code`) VALUES (29, '2014-09-19 12:11:29', 'Alex', 'Karamushko', 'Koscmiadsassd', '', 'Zaporizhzhya', '69050', '380975231602', 1, 'DcJ5RRlt') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-19 12:11:29 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `or...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/goodiebox.priv/application/classes/Controller/Order.php(228): Kohana_ORM->save()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_gift2()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-19 14:42:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The delivery_firstname property does not exist in the Model_Friend class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:702
2014-09-19 14:42:32 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('delivery_firstn...', 'Alex')
#1 /var/www/goodiebox.priv/application/classes/Controller/Order.php(111): Kohana_ORM->__set('delivery_firstn...', 'Alex')
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:702
2014-09-19 16:48:58 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Order.php [ 105 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:105
2014-09-19 16:48:58 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(105): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/goodie...', 105, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:105
2014-09-19 16:53:04 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Order.php [ 106 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:106
2014-09-19 16:53:04 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(106): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/goodie...', 106, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:106
2014-09-19 17:05:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: order ~ APPPATH/classes/Controller/Order.php [ 105 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:105
2014-09-19 17:05:49 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(105): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 105, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:105
2014-09-19 17:07:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: order ~ APPPATH/classes/Controller/Order.php [ 106 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:106
2014-09-19 17:07:35 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(106): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 106, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:106
2014-09-19 17:09:06 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`goodiebox`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`puppy_id`) REFERENCES `puppies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`last_modified`, `coupon_code`, `user_id`, `date_purchased`, `delivery_firstname`, `delivery_lastname`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`) VALUES ('2014-09-19 17:09:06', 'v7zUqE6H', '12', '2014-09-19 17:09:06', 'Dmitriy', 'Pavlov', 'Koscmiadsassd', '', 'Zaporizhzhya', '53440', '380975231602') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-19 17:09:06 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `or...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/goodiebox.priv/application/classes/Controller/Order.php(158): Kohana_ORM->save()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-19 17:19:59 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`goodiebox`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`puppy_id`) REFERENCES `puppies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`last_modified`, `user_id`, `date_purchased`, `delivery_firstname`, `delivery_lastname`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`) VALUES ('2014-09-19 17:19:59', '12', '2014-09-19 17:19:59', 'Dmitriy', 'Pavlov', 'Koscmiadsassd', '', 'Zaporizhzhya', '53440', '380975231602') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-19 17:19:59 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `or...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/goodiebox.priv/application/classes/Controller/Order.php(167): Kohana_ORM->save()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-19 17:57:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view user_account/gift could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-19 17:57:58 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('user_account/gi...')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545