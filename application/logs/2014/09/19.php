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