<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-21 08:56:10 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/settings/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-21 08:56:10 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/settings/...')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-21 08:59:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_OrderStatus' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-09-21 08:59:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-21 09:06:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The status_name property does not exist in the Model_Shelter class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-21 09:06:09 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('status_name')
#1 /var/www/goodiebox.priv/application/views/admin/settings/form.php(16): Kohana_ORM->__get('status_name')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-21 09:06:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-09-21 09:06:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-21 09:06:52 --- EMERGENCY: Kohana_Exception [ 0 ]: The id property does not exist in the Model_OrderStatus class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-21 09:06:52 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id')
#1 /var/www/goodiebox.priv/application/views/admin/settings/form.php(25): Kohana_ORM->__get('id')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-21 09:07:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The id property does not exist in the Model_OrderStatus class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-21 09:07:42 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id')
#1 /var/www/goodiebox.priv/application/views/admin/settings/index.php(23): Kohana_ORM->__get('id')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-21 09:09:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Settings' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-09-21 09:09:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-21 09:12:49 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`goodiebox`.`orders`, CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`orders_status`) REFERENCES `order_statuses` (`type`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`puppy_id`, `selected_box`, `last_modified`, `user_id`, `date_purchased`, `delivery_firstname`, `delivery_lastname`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`) VALUES (38, 1, '2014-09-21 09:12:49', '10', '2014-09-21 09:12:49', 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 09:12:49 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `or...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/goodiebox.priv/application/classes/Controller/Order.php(193): Kohana_ORM->save()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 09:13:19 --- EMERGENCY: Kohana_Exception [ 0 ]: The status property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:702
2014-09-21 09:13:19 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('status', 1)
#1 /var/www/goodiebox.priv/application/classes/Controller/Order.php(102): Kohana_ORM->__set('status', 1)
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:702
2014-09-21 10:04:43 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`goodiebox`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`puppy_id`) REFERENCES `puppies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`selected_box`, `last_modified`, `user_id`, `date_purchased`, `delivery_firstname`, `delivery_lastname`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`) VALUES ('1', '2014-09-21 10:04:43', '10', '2014-09-21 10:04:43', 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 10:04:43 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `or...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/goodiebox.priv/application/classes/Controller/Order.php(194): Kohana_ORM->save()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 10:05:48 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`goodiebox`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`puppy_id`) REFERENCES `puppies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`selected_box`, `last_modified`, `user_id`, `date_purchased`, `delivery_firstname`, `delivery_lastname`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`) VALUES ('1', '2014-09-21 10:05:48', '10', '2014-09-21 10:05:48', 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 10:05:48 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `or...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/goodiebox.priv/application/classes/Controller/Order.php(194): Kohana_ORM->save()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 11:07:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The selected_size property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:702
2014-09-21 11:07:36 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('selected_size', 0)
#1 /var/www/goodiebox.priv/application/classes/Controller/Order.php(317): Kohana_ORM->__set('selected_size', 0)
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:702
2014-09-21 11:08:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The order_status property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:702
2014-09-21 11:08:04 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('order_status', 1)
#1 /var/www/goodiebox.priv/application/classes/Controller/Order.php(327): Kohana_ORM->__set('order_status', 1)
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:702
2014-09-21 11:08:19 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`goodiebox`.`orders`, CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`puppy_id`) REFERENCES `puppies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `orders` (`user_id`, `selected_box`, `puppy_id`, `last_modified`, `type`, `delivery_firstname`, `delivery_lastname`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`, `orders_status`) VALUES ('10', '1', 0, '2014-09-21 11:08:19', 2, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602', 1) ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 11:08:19 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `or...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/goodiebox.priv/application/classes/Controller/Order.php(328): Kohana_ORM->save()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 11:10:06 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`goodiebox`.`friend`, CONSTRAINT `friend_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `friend` (`friends_email`, `friends_name`, `coupon_code`) VALUES ('dethmix@gmail.com', 'Dmitriy Pavlov', 'erkBh5p0') ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 11:10:06 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `fr...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/goodiebox.priv/application/classes/Controller/Order.php(314): Kohana_ORM->save()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 11:18:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The order_status property does not exist in the Model_Order class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:702
2014-09-21 11:18:35 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('order_status', 1)
#1 /var/www/goodiebox.priv/application/classes/Controller/Order.php(300): Kohana_ORM->__set('order_status', 1)
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_step3()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:702
2014-09-21 11:27:47 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'success' ~ APPPATH/classes/Controller/Order.php [ 446 ] in /var/www/goodiebox.priv/application/classes/Controller/Order.php:446
2014-09-21 11:27:47 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Order.php(446): Kohana_Core::error_handler(2, 'Illegal string ...', '/var/www/goodie...', 446, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_Order->action_success()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Order))
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/goodiebox.priv/application/classes/Controller/Order.php:446
2014-09-21 11:28:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Order.php [ 445 ] in file:line
2014-09-21 11:28:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-21 12:50:52 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user_shelter.shelter_id' in 'on clause' [ SELECT DISTINCT `shelter`.`id` AS `shelter:id`, `shelter`.`shelter_name` AS `shelter:shelter_name`, `shelter`.`email` AS `shelter:email`, `user_shelter`.`id` AS `id`, `user_shelter`.`user_id` AS `user_id`, `user_shelter`.`dog` AS `dog`, `user_shelter`.`selected_box` AS `selected_box`, `user_shelter`.`delivery_address` AS `delivery_address`, `user_shelter`.`delivery_address2` AS `delivery_address2`, `user_shelter`.`delivery_city` AS `delivery_city`, `user_shelter`.`delivery_postcode` AS `delivery_postcode`, `user_shelter`.`delivery_telephone` AS `delivery_telephone`, `user_shelter`.`last_modified` AS `last_modified`, `user_shelter`.`date_purchased` AS `date_purchased` FROM `user_shelter` AS `user_shelter` LEFT JOIN `shelters` AS `shelter` ON (`shelter`.`id` = `user_shelter`.`shelter_id`) WHERE `user_id` = '10' ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 12:50:52 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT DISTINCT...', 'Model_User_Shel...', Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/goodiebox.priv/application/views/user_account/index.php(338): Kohana_ORM->find_all()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 12:51:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user_shelter.shelter_id' in 'on clause' [ SELECT `shelter`.`id` AS `shelter:id`, `shelter`.`shelter_name` AS `shelter:shelter_name`, `shelter`.`email` AS `shelter:email`, `user_shelter`.`id` AS `id`, `user_shelter`.`user_id` AS `user_id`, `user_shelter`.`dog` AS `dog`, `user_shelter`.`selected_box` AS `selected_box`, `user_shelter`.`delivery_address` AS `delivery_address`, `user_shelter`.`delivery_address2` AS `delivery_address2`, `user_shelter`.`delivery_city` AS `delivery_city`, `user_shelter`.`delivery_postcode` AS `delivery_postcode`, `user_shelter`.`delivery_telephone` AS `delivery_telephone`, `user_shelter`.`last_modified` AS `last_modified`, `user_shelter`.`date_purchased` AS `date_purchased` FROM `user_shelter` AS `user_shelter` LEFT JOIN `shelters` AS `shelter` ON (`shelter`.`id` = `user_shelter`.`shelter_id`) WHERE `user_id` = '10' ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 12:51:19 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `shelter...', 'Model_User_Shel...', Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/goodiebox.priv/application/views/user_account/index.php(337): Kohana_ORM->find_all()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 12:52:13 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'user_id' in where clause is ambiguous [ SELECT `shelter`.`id` AS `shelter:id`, `shelter`.`user_id` AS `shelter:user_id`, `shelter`.`shelter_id` AS `shelter:shelter_id`, `shelter`.`doggy_name` AS `shelter:doggy_name`, `shelter`.`doggy_gender` AS `shelter:doggy_gender`, `shelter`.`selected_size` AS `shelter:selected_size`, `user_shelter`.`id` AS `id`, `user_shelter`.`user_id` AS `user_id`, `user_shelter`.`dog` AS `dog`, `user_shelter`.`selected_box` AS `selected_box`, `user_shelter`.`delivery_address` AS `delivery_address`, `user_shelter`.`delivery_address2` AS `delivery_address2`, `user_shelter`.`delivery_city` AS `delivery_city`, `user_shelter`.`delivery_postcode` AS `delivery_postcode`, `user_shelter`.`delivery_telephone` AS `delivery_telephone`, `user_shelter`.`last_modified` AS `last_modified`, `user_shelter`.`date_purchased` AS `date_purchased` FROM `user_shelter` AS `user_shelter` LEFT JOIN `shelter_dog` AS `shelter` ON (`shelter`.`id` = `user_shelter`.`shelter_id`) WHERE `user_id` = '10' ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 12:52:13 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `shelter...', 'Model_User_Shel...', Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/goodiebox.priv/application/views/user_account/index.php(337): Kohana_ORM->find_all()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 12:54:09 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'shelter_id' in 'where clause' [ SELECT `user_shelter`.`id` AS `id`, `user_shelter`.`user_id` AS `user_id`, `user_shelter`.`dog` AS `dog`, `user_shelter`.`selected_box` AS `selected_box`, `user_shelter`.`delivery_address` AS `delivery_address`, `user_shelter`.`delivery_address2` AS `delivery_address2`, `user_shelter`.`delivery_city` AS `delivery_city`, `user_shelter`.`delivery_postcode` AS `delivery_postcode`, `user_shelter`.`delivery_telephone` AS `delivery_telephone`, `user_shelter`.`last_modified` AS `last_modified`, `user_shelter`.`date_purchased` AS `date_purchased` FROM `user_shelter` AS `user_shelter` WHERE `shelter_id` = 2 LIMIT 1 ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 12:54:09 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `user_sh...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/goodiebox.priv/application/classes/Controller/User/Account.php(173): Kohana_ORM->find()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_User_Account->action_shelter()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 12:55:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user_shelter.shelter_id' in 'on clause' [ SELECT `shelter`.`id` AS `shelter:id`, `shelter`.`user_id` AS `shelter:user_id`, `shelter`.`shelter_id` AS `shelter:shelter_id`, `shelter`.`doggy_name` AS `shelter:doggy_name`, `shelter`.`doggy_gender` AS `shelter:doggy_gender`, `shelter`.`selected_size` AS `shelter:selected_size`, `user_shelter`.`id` AS `id`, `user_shelter`.`user_id` AS `user_id`, `user_shelter`.`dog` AS `dog`, `user_shelter`.`selected_box` AS `selected_box`, `user_shelter`.`delivery_address` AS `delivery_address`, `user_shelter`.`delivery_address2` AS `delivery_address2`, `user_shelter`.`delivery_city` AS `delivery_city`, `user_shelter`.`delivery_postcode` AS `delivery_postcode`, `user_shelter`.`delivery_telephone` AS `delivery_telephone`, `user_shelter`.`last_modified` AS `last_modified`, `user_shelter`.`date_purchased` AS `date_purchased` FROM `user_shelter` AS `user_shelter` LEFT JOIN `shelter_dog` AS `shelter` ON (`shelter`.`id` = `user_shelter`.`shelter_id`) WHERE `shelter`.`shelter_id` = 2 LIMIT 1 ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 12:55:36 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `shelter...', false, Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/goodiebox.priv/application/classes/Controller/User/Account.php(173): Kohana_ORM->find()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_User_Account->action_shelter()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 12:57:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The shelter_id property does not exist in the Model_User_Shelter class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-21 12:57:38 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('shelter_id')
#1 /var/www/goodiebox.priv/application/classes/Controller/User/Account.php(177): Kohana_ORM->__get('shelter_id')
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(84): Controller_User_Account->action_shelter()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Account))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-21 13:32:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view tos/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-21 13:32:35 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('tos/index')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tos))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-21 13:50:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting \\ (T_NS_SEPARATOR) or ';' or '{' ~ APPPATH/views/tos/index.php [ 6 ] in file:line
2014-09-21 13:50:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-21 13:51:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting \\ (T_NS_SEPARATOR) or ';' or '{' ~ APPPATH/views/tos/index.php [ 5 ] in file:line
2014-09-21 13:51:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-21 13:51:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting \\ (T_NS_SEPARATOR) or ';' or '{' ~ APPPATH/views/tos/index.php [ 5 ] in file:line
2014-09-21 13:51:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-21 14:03:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view admin/orders/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-21 14:03:23 --- DEBUG: #0 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(545): Kohana_View->set_filename('admin/orders/in...')
#1 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(495): Controller_Base_Core->set_view()
#2 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#5 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php:545
2014-09-21 14:29:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/admin/orders/index.php [ 25 ] in /var/www/goodiebox.priv/application/views/admin/orders/index.php:25
2014-09-21 14:29:08 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/admin/orders/index.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 25, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/admin/orders/index.php:25
2014-09-21 14:33:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'status.orders_status' in 'on clause' [ SELECT `status`.`type` AS `status:type`, `status`.`status_name` AS `status:status_name`, `order`.`id` AS `id`, `order`.`user_id` AS `user_id`, `order`.`selected_box` AS `selected_box`, `order`.`puppy_id` AS `puppy_id`, `order`.`delivery_firstname` AS `delivery_firstname`, `order`.`delivery_lastname` AS `delivery_lastname`, `order`.`delivery_address` AS `delivery_address`, `order`.`delivery_address2` AS `delivery_address2`, `order`.`delivery_city` AS `delivery_city`, `order`.`delivery_postcode` AS `delivery_postcode`, `order`.`delivery_telephone` AS `delivery_telephone`, `order`.`company_name` AS `company_name`, `order`.`tax_code` AS `tax_code`, `order`.`coupon_code` AS `coupon_code`, `order`.`type` AS `type`, `order`.`orders_status` AS `orders_status`, `order`.`shelter_order` AS `shelter_order`, `order`.`last_modified` AS `last_modified`, `order`.`date_purchased` AS `date_purchased` FROM `orders` AS `order` LEFT JOIN `order_statuses` AS `status` ON (`order`.`id` = `status`.`orders_status`) ORDER BY `type` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 14:33:06 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `status`...', 'Model_Order', Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/goodiebox.priv/application/views/admin/orders/index.php(2): Kohana_ORM->find_all()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 14:43:36 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'type, date_purchased' in 'order clause' [ SELECT `status`.`type` AS `status:type`, `status`.`status_name` AS `status:status_name`, `order`.`id` AS `id`, `order`.`user_id` AS `user_id`, `order`.`selected_box` AS `selected_box`, `order`.`puppy_id` AS `puppy_id`, `order`.`delivery_firstname` AS `delivery_firstname`, `order`.`delivery_lastname` AS `delivery_lastname`, `order`.`delivery_address` AS `delivery_address`, `order`.`delivery_address2` AS `delivery_address2`, `order`.`delivery_city` AS `delivery_city`, `order`.`delivery_postcode` AS `delivery_postcode`, `order`.`delivery_telephone` AS `delivery_telephone`, `order`.`company_name` AS `company_name`, `order`.`tax_code` AS `tax_code`, `order`.`coupon_code` AS `coupon_code`, `order`.`type` AS `type`, `order`.`orders_status` AS `orders_status`, `order`.`shelter_order` AS `shelter_order`, `order`.`last_modified` AS `last_modified`, `order`.`date_purchased` AS `date_purchased` FROM `orders` AS `order` LEFT JOIN `order_statuses` AS `status` ON (`status`.`type` = `order`.`orders_status`) ORDER BY `type, date_purchased` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 14:43:36 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `status`...', 'Model_Order', Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/goodiebox.priv/application/views/admin/orders/index.php(2): Kohana_ORM->find_all()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 14:45:13 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'DESC' in 'order clause' [ SELECT `status`.`type` AS `status:type`, `status`.`status_name` AS `status:status_name`, `order`.`id` AS `id`, `order`.`user_id` AS `user_id`, `order`.`selected_box` AS `selected_box`, `order`.`puppy_id` AS `puppy_id`, `order`.`delivery_firstname` AS `delivery_firstname`, `order`.`delivery_lastname` AS `delivery_lastname`, `order`.`delivery_address` AS `delivery_address`, `order`.`delivery_address2` AS `delivery_address2`, `order`.`delivery_city` AS `delivery_city`, `order`.`delivery_postcode` AS `delivery_postcode`, `order`.`delivery_telephone` AS `delivery_telephone`, `order`.`company_name` AS `company_name`, `order`.`tax_code` AS `tax_code`, `order`.`coupon_code` AS `coupon_code`, `order`.`type` AS `type`, `order`.`orders_status` AS `orders_status`, `order`.`shelter_order` AS `shelter_order`, `order`.`last_modified` AS `last_modified`, `order`.`date_purchased` AS `date_purchased` FROM `orders` AS `order` LEFT JOIN `order_statuses` AS `status` ON (`status`.`type` = `order`.`orders_status`) ORDER BY `DESC` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 14:45:13 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `status`...', 'Model_Order', Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/goodiebox.priv/application/views/admin/orders/index.php(2): Kohana_ORM->find_all()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 14:45:52 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'DESC' in 'order clause' [ SELECT `status`.`type` AS `status:type`, `status`.`status_name` AS `status:status_name`, `order`.`id` AS `id`, `order`.`user_id` AS `user_id`, `order`.`selected_box` AS `selected_box`, `order`.`puppy_id` AS `puppy_id`, `order`.`delivery_firstname` AS `delivery_firstname`, `order`.`delivery_lastname` AS `delivery_lastname`, `order`.`delivery_address` AS `delivery_address`, `order`.`delivery_address2` AS `delivery_address2`, `order`.`delivery_city` AS `delivery_city`, `order`.`delivery_postcode` AS `delivery_postcode`, `order`.`delivery_telephone` AS `delivery_telephone`, `order`.`company_name` AS `company_name`, `order`.`tax_code` AS `tax_code`, `order`.`coupon_code` AS `coupon_code`, `order`.`type` AS `type`, `order`.`orders_status` AS `orders_status`, `order`.`shelter_order` AS `shelter_order`, `order`.`last_modified` AS `last_modified`, `order`.`date_purchased` AS `date_purchased` FROM `orders` AS `order` LEFT JOIN `order_statuses` AS `status` ON (`status`.`type` = `order`.`orders_status`) ORDER BY `DESC` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 14:45:52 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `status`...', 'Model_Order', Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/goodiebox.priv/application/views/admin/orders/index.php(2): Kohana_ORM->find_all()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 14:46:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'date_purchased DESC' in 'order clause' [ SELECT `status`.`type` AS `status:type`, `status`.`status_name` AS `status:status_name`, `order`.`id` AS `id`, `order`.`user_id` AS `user_id`, `order`.`selected_box` AS `selected_box`, `order`.`puppy_id` AS `puppy_id`, `order`.`delivery_firstname` AS `delivery_firstname`, `order`.`delivery_lastname` AS `delivery_lastname`, `order`.`delivery_address` AS `delivery_address`, `order`.`delivery_address2` AS `delivery_address2`, `order`.`delivery_city` AS `delivery_city`, `order`.`delivery_postcode` AS `delivery_postcode`, `order`.`delivery_telephone` AS `delivery_telephone`, `order`.`company_name` AS `company_name`, `order`.`tax_code` AS `tax_code`, `order`.`coupon_code` AS `coupon_code`, `order`.`type` AS `type`, `order`.`orders_status` AS `orders_status`, `order`.`shelter_order` AS `shelter_order`, `order`.`last_modified` AS `last_modified`, `order`.`date_purchased` AS `date_purchased` FROM `orders` AS `order` LEFT JOIN `order_statuses` AS `status` ON (`status`.`type` = `order`.`orders_status`) ORDER BY `date_purchased DESC` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 14:46:14 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `status`...', 'Model_Order', Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/goodiebox.priv/application/views/admin/orders/index.php(2): Kohana_ORM->find_all()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 14:46:28 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'DESC' in 'order clause' [ SELECT `status`.`type` AS `status:type`, `status`.`status_name` AS `status:status_name`, `order`.`id` AS `id`, `order`.`user_id` AS `user_id`, `order`.`selected_box` AS `selected_box`, `order`.`puppy_id` AS `puppy_id`, `order`.`delivery_firstname` AS `delivery_firstname`, `order`.`delivery_lastname` AS `delivery_lastname`, `order`.`delivery_address` AS `delivery_address`, `order`.`delivery_address2` AS `delivery_address2`, `order`.`delivery_city` AS `delivery_city`, `order`.`delivery_postcode` AS `delivery_postcode`, `order`.`delivery_telephone` AS `delivery_telephone`, `order`.`company_name` AS `company_name`, `order`.`tax_code` AS `tax_code`, `order`.`coupon_code` AS `coupon_code`, `order`.`type` AS `type`, `order`.`orders_status` AS `orders_status`, `order`.`shelter_order` AS `shelter_order`, `order`.`last_modified` AS `last_modified`, `order`.`date_purchased` AS `date_purchased` FROM `orders` AS `order` LEFT JOIN `order_statuses` AS `status` ON (`status`.`type` = `order`.`orders_status`) ORDER BY `DESC` ] ~ MODPATH/database/classes/Database/MySQLi.php [ 172 ] in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 14:46:28 --- DEBUG: #0 /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `status`...', 'Model_Order', Array)
#1 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/goodiebox.priv/application/views/admin/orders/index.php(2): Kohana_ORM->find_all()
#4 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#5 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#6 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Orders))
#10 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/goodiebox.priv/modules/database/classes/Kohana/Database/Query.php:251
2014-09-21 14:59:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/Controller/Admin/Orders.php [ 22 ] in file:line
2014-09-21 14:59:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-21 15:00:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/Controller/Admin/Orders.php [ 22 ] in file:line
2014-09-21 15:00:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-21 15:00:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/Controller/Admin/Orders.php [ 22 ] in file:line
2014-09-21 15:00:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-21 15:00:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/Controller/Admin/Orders.php [ 22 ] in file:line
2014-09-21 15:00:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-21 15:21:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Packages' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-09-21 15:21:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-21 15:21:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: statuses ~ APPPATH/views/admin/packages/index.php [ 19 ] in /var/www/goodiebox.priv/application/views/admin/packages/index.php:19
2014-09-21 15:21:52 --- DEBUG: #0 /var/www/goodiebox.priv/application/views/admin/packages/index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/goodie...', 19, Array)
#1 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#3 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#4 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Packages))
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/goodiebox.priv/application/views/admin/packages/index.php:19
2014-09-21 15:28:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The package_name property does not exist in the Model_OrderStatus class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-21 15:28:27 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('package_name')
#1 /var/www/goodiebox.priv/application/views/admin/packages/form.php(15): Kohana_ORM->__get('package_name')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Packages))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-21 15:30:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The type property does not exist in the Model_Packages class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603
2014-09-21 15:30:42 --- DEBUG: #0 /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('type')
#1 /var/www/goodiebox.priv/application/views/admin/packages/form.php(36): Kohana_ORM->__get('type')
#2 /var/www/goodiebox.priv/system/classes/Kohana/View.php(61): include('/var/www/goodie...')
#3 /var/www/goodiebox.priv/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/goodie...', Array)
#4 /var/www/goodiebox.priv/application/classes/Controller/Base/Core.php(512): Kohana_View->render()
#5 /var/www/goodiebox.priv/system/classes/Kohana/Controller.php(87): Controller_Base_Core->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Packages))
#8 /var/www/goodiebox.priv/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/goodiebox.priv/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/goodiebox.priv/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/goodiebox.priv/modules/orm/classes/Kohana/ORM.php:603