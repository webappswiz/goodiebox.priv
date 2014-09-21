-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 21 2014 г., 16:25
-- Версия сервера: 5.5.37-0ubuntu0.13.10.1
-- Версия PHP: 5.5.3-1ubuntu2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `goodiebox`
--

-- --------------------------------------------------------

--
-- Структура таблицы `address_book`
--

CREATE TABLE IF NOT EXISTS `address_book` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customer_firstname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_lastname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_telephone` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_zip` varchar(15) COLLATE utf8_swedish_ci NOT NULL,
  `customer_city` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_address2` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `message` text COLLATE utf8_swedish_ci NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `address_book`
--

INSERT INTO `address_book` (`id`, `customer_firstname`, `customer_lastname`, `customer_telephone`, `customer_zip`, `customer_city`, `customer_address`, `customer_address2`, `message`, `user_id`) VALUES
(2, 'Alex', 'Karamushko', '380975231602', '69050', 'Zaporizhzhya', 'Kosmicheskaya 100a, 34 ', '', '', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `email_templates`
--

CREATE TABLE IF NOT EXISTS `email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(1) NOT NULL,
  `template_text` text COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `email_templates`
--

INSERT INTO `email_templates` (`id`, `type`, `template_text`) VALUES
(1, 1, 'Hello, thank your for the registration'),
(2, 2, 'Hello, how are you?'),
(3, 3, 'Wop wop wop');

-- --------------------------------------------------------

--
-- Структура таблицы `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `friends_email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `friends_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `selected_box` int(1) NOT NULL,
  `coupon_code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `date_purchased` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `friend`
--

INSERT INTO `friend` (`id`, `user_id`, `friends_email`, `friends_name`, `selected_box`, `coupon_code`, `date_purchased`) VALUES
(7, 10, 'dethmix@gmail.com', 'Dmitriy Pavlov', 1, '', '2014-09-21 13:18:26');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `selected_box` int(11) NOT NULL,
  `puppy_id` int(11) unsigned NOT NULL DEFAULT '0',
  `delivery_firstname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_lastname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_address2` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_city` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_postcode` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_telephone` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `tax_code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `coupon_code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `orders_status` int(1) NOT NULL DEFAULT '1',
  `shelter_order` int(11) DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `puppy_id` (`puppy_id`),
  KEY `orders_status` (`orders_status`),
  KEY `selected_box` (`selected_box`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=36 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `selected_box`, `puppy_id`, `delivery_firstname`, `delivery_lastname`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`, `company_name`, `tax_code`, `coupon_code`, `type`, `orders_status`, `shelter_order`, `last_modified`, `date_purchased`) VALUES
(15, 10, 1, 41, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602', '', '', '', 1, 1, NULL, '2014-09-21 09:57:36', '2014-09-21 09:57:36'),
(16, 10, 1, 42, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602', '', '', '', 1, 1, NULL, '2014-09-21 10:03:25', '2014-09-21 10:03:25'),
(19, 10, 1, 37, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602', '', '', '', 1, 1, NULL, '2014-09-21 10:06:36', '2014-09-21 10:06:36'),
(23, 10, 1, 0, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602', '', '', '', 2, 1, NULL, '2014-09-21 11:13:18', '2014-09-21 11:13:18'),
(26, 15, 1, 46, 'Her', 'Muller', 'siasdajsd', '', 'lkadkljdsfaljdsakljdsaklj', '69050', '8923752875823', '', '', '', 1, 1, NULL, '2014-09-21 11:27:47', '2014-09-21 11:27:47'),
(27, 15, 1, 0, 'Her', 'Muller', 'siasdajsd', '', 'lkadkljdsfaljdsakljdsaklj', '69050', '8923752875823', '', '', '', 2, 1, NULL, '2014-09-21 11:32:04', '2014-09-21 11:32:04'),
(29, 14, 1, 43, 'Dmitriy', 'Pavlov', 'kadfjlakfjalksdj', '', 'kadkjldajkdskjdjlkas', '65854', '47293847928347', '', '', 'HyOqVuty', 1, 1, NULL, '2014-09-21 11:38:37', '2014-09-21 11:38:37'),
(30, 10, 1, 37, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 34 ', '', 'Zaporizhzhya', '69050', '380975231602', '', '', '', 1, 1, NULL, '2014-09-21 11:50:04', '2014-09-21 11:50:04'),
(31, 10, 1, 0, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602', '', '', '', 3, 1, 14, '2014-09-21 12:53:40', '2014-09-21 12:53:40'),
(32, 10, 1, 0, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602', '', '', '', 3, 1, 15, '2014-09-21 12:58:24', '2014-09-21 12:58:24'),
(33, 10, 1, 0, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602', '', '', '', 3, 1, 16, '2014-09-21 12:58:45', '2014-09-21 12:58:45'),
(34, 10, 1, 0, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602', '', '', '', 2, 1, NULL, '2014-09-21 13:18:26', '2014-09-21 13:18:26'),
(35, 14, 1, 43, 'Dmitriy', 'Pavlov', 'kadfjlakfjalksdj', '', 'kadkjldajkdskjdjlkas', '65854', '47293847928347', '', '', '65CMLvAA', 1, 1, NULL, '2014-09-21 13:18:55', '2014-09-21 13:18:55');

-- --------------------------------------------------------

--
-- Структура таблицы `order_statuses`
--

CREATE TABLE IF NOT EXISTS `order_statuses` (
  `type` int(1) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `order_statuses`
--

INSERT INTO `order_statuses` (`type`, `status_name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Shipped'),
(4, 'Done'),
(6, 'Declined');

-- --------------------------------------------------------

--
-- Структура таблицы `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `weight` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `enabled` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `weight`, `price`, `enabled`) VALUES
(1, '1 hónap', '0', '10', 1),
(2, '3 hónap', '0', '15', 0),
(3, '6 hónap', '0', '20', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `puppies`
--

CREATE TABLE IF NOT EXISTS `puppies` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `puppy_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `gender` int(1) NOT NULL,
  `years` int(11) NOT NULL,
  `months` int(11) NOT NULL,
  `alerg` int(1) NOT NULL,
  `alerg_descr` text COLLATE utf8_swedish_ci NOT NULL,
  `selected_size` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=47 ;

--
-- Дамп данных таблицы `puppies`
--

INSERT INTO `puppies` (`id`, `user_id`, `puppy_name`, `gender`, `years`, `months`, `alerg`, `alerg_descr`, `selected_size`) VALUES
(36, 13, 'Artemon', 1, 2009, 5, 0, '', 1),
(37, 10, 'Artemon', 0, 1994, 1, 1, '', 2),
(42, 10, 'Artemon', 0, 1994, 1, 1, '', 2),
(43, 14, 'adasdaasd', 0, 1994, 1, 1, '', 1),
(44, 15, 'Tuzik', 1, 2008, 1, 0, '', 1),
(45, 15, 'Tuzik', 1, 2008, 1, 0, '', 1),
(46, 15, 'bobik', 0, 1994, 1, 0, '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(10, 1),
(11, 1),
(13, 1),
(14, 1),
(15, 1),
(11, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `shelters`
--

CREATE TABLE IF NOT EXISTS `shelters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shelter_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `shelters`
--

INSERT INTO `shelters` (`id`, `shelter_name`, `email`) VALUES
(1, 'test111', 'test1@test1.com'),
(2, 'test2111', 'test2@test2.com');

-- --------------------------------------------------------

--
-- Структура таблицы `shelter_dog`
--

CREATE TABLE IF NOT EXISTS `shelter_dog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `shelter_id` int(11) NOT NULL,
  `doggy_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `doggy_gender` int(1) NOT NULL,
  `selected_size` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `shelter_id` (`shelter_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `shelter_dog`
--

INSERT INTO `shelter_dog` (`id`, `user_id`, `shelter_id`, `doggy_name`, `doggy_gender`, `selected_size`) VALUES
(1, 10, 2, 'Tuzik', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_firstname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_lastname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_telephone` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_zip` varchar(15) COLLATE utf8_swedish_ci NOT NULL,
  `customer_city` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_address2` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_company` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_taxcode` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `logins` int(11) NOT NULL,
  `last_login` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_email` (`username`),
  KEY `users_index` (`id`),
  KEY `fk_users` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `customer_firstname`, `customer_lastname`, `customer_telephone`, `customer_zip`, `customer_city`, `customer_address`, `customer_address2`, `customer_company`, `customer_taxcode`, `logins`, `last_login`) VALUES
(10, 'alex@onlamp.info', '463ff07800d6a50276a8c29727a265cd3b6cb9ccbf4224161b4950bed3e484ce', 'alex@onlamp.info', 'Alex', 'Karamushko', '380975231602', '69050', 'Zaporizhzhya', 'Kosmicheskaya 100a, 33', '', '', '', 15, '1411289386'),
(11, 'admin', '463ff07800d6a50276a8c29727a265cd3b6cb9ccbf4224161b4950bed3e484ce', 'alexander.karamushko@gmail.com', '', '', '', '', '', '', '', '', '', 11, '1411297398'),
(13, 'dev@bsocialmedia.ca', 'a28a4e5e5fc383d1bbb2be9aafa1e2933d4b00d990e63e1d1b2527a37b0db2d6', 'dev@bsocialmedia.ca', 'Alex', 'Karamushko', '380975231602', '69050', 'Zaporizhzhya', 'Kosmicheskaya 100a', '', '', '', 1, '1411235949'),
(14, 'dethmix@gmail.com', '463ff07800d6a50276a8c29727a265cd3b6cb9ccbf4224161b4950bed3e484ce', 'dethmix@gmail.com', 'Dmitriy', 'Pavlov', '47293847928347', '65854', 'kadkjldajkdskjdjlkas', 'kadfjlakfjalksdj', '', '', '', 2, '1411294719'),
(15, 'alexander.karamushko@ecommerce.com', '463ff07800d6a50276a8c29727a265cd3b6cb9ccbf4224161b4950bed3e484ce', 'alexander.karamushko@ecommerce.com', 'Her', 'Muller', '8923752875823', '69050', 'lkadkljdsfaljdsakljdsaklj', 'siasdajsd', '', '', '', 1, '1411287515');

-- --------------------------------------------------------

--
-- Структура таблицы `user_shelter`
--

CREATE TABLE IF NOT EXISTS `user_shelter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `dog` int(11) NOT NULL,
  `selected_box` int(1) NOT NULL,
  `delivery_address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_address2` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_city` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_postcode` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_telephone` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `dog` (`dog`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `user_shelter`
--

INSERT INTO `user_shelter` (`id`, `user_id`, `dog`, `selected_box`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`, `last_modified`, `date_purchased`) VALUES
(14, 10, 1, 1, '', '', '', '', '', '2014-09-21 12:53:40', '2014-09-21 12:53:40'),
(15, 10, 1, 1, '', '', '', '', '', '2014-09-21 12:58:24', '2014-09-21 12:58:24'),
(16, 10, 1, 1, '', '', '', '', '', '2014-09-21 12:58:45', '2014-09-21 12:58:45');

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) CHARACTER SET utf8 NOT NULL,
  `token` varchar(40) CHARACTER SET utf8 NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `address_book`
--
ALTER TABLE `address_book`
  ADD CONSTRAINT `address_book_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `friend_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`selected_box`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`orders_status`) REFERENCES `order_statuses` (`type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `puppies`
--
ALTER TABLE `puppies`
  ADD CONSTRAINT `puppies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `shelter_dog`
--
ALTER TABLE `shelter_dog`
  ADD CONSTRAINT `shelter_dog_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shelter_dog_ibfk_1` FOREIGN KEY (`shelter_id`) REFERENCES `shelters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_shelter`
--
ALTER TABLE `user_shelter`
  ADD CONSTRAINT `user_shelter_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_shelter_ibfk_2` FOREIGN KEY (`dog`) REFERENCES `shelters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
