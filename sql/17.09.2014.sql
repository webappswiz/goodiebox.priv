-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 18 2014 г., 17:36
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `address_book`
--

INSERT INTO `address_book` (`id`, `customer_firstname`, `customer_lastname`, `customer_telephone`, `customer_zip`, `customer_city`, `customer_address`, `customer_address2`, `message`, `user_id`) VALUES
(5, 'Vasya', 'Pupkin', '+380975231602', '69034', 'Kiev', 'Malinovskogo 19', '', 'asddasd', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `friends_email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `friends_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `selected_size` int(1) NOT NULL,
  `selected_box` int(1) NOT NULL,
  `delivery_firstname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_lastname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_address2` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_city` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_postcode` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_telephone` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `coupon_code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  `orders_status` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `friend`
--

INSERT INTO `friend` (`id`, `user_id`, `friends_email`, `friends_name`, `selected_size`, `selected_box`, `delivery_firstname`, `delivery_lastname`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`, `coupon_code`, `last_modified`, `date_purchased`, `orders_status`) VALUES
(4, 10, 'rulana.s@mail.ru', 'Alex', 3, 1, 'Vasya', 'Pupkin', 'Malinovskogo 19', '', 'Kiev', '69034', '+380975231602', '', '2014-09-18 15:39:16', '2014-09-18 15:39:16', 0),
(5, 10, 'info@wingporium.ca', 'Alex', 1, 1, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602', 'karam2014', '2014-09-18 17:14:45', '2014-09-18 17:14:45', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `selected_box` int(11) NOT NULL,
  `puppy_id` int(11) unsigned NOT NULL,
  `delivery_firstname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_lastname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_address2` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_city` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_postcode` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_telephone` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `coupon_code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  `orders_status` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `puppy_id` (`puppy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `selected_box`, `puppy_id`, `delivery_firstname`, `delivery_lastname`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`, `coupon_code`, `last_modified`, `date_purchased`, `orders_status`) VALUES
(9, 10, 1, 23, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602', '', '2014-09-18 15:33:05', '2014-09-18 15:33:05', 0),
(10, 10, 1, 28, 'Alex', 'Karamushko', 'Kosmicheskaya 100a, 33', '', 'Zaporizhzhya', '69050', '380975231602', '', '2014-09-18 16:39:09', '2014-09-18 16:39:09', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=29 ;

--
-- Дамп данных таблицы `puppies`
--

INSERT INTO `puppies` (`id`, `user_id`, `puppy_name`, `gender`, `years`, `months`, `alerg`, `alerg_descr`, `selected_size`) VALUES
(23, 10, 'Bobik', 1, 1994, 1, 1, '', 1),
(24, 10, 'Tuzik', 1, 1994, 1, 1, '', 2),
(26, 10, 'Giraf', 1, 1994, 1, 0, '', 3),
(27, 10, 'asasdsa', 1, 1994, 1, 0, 'sahsh,sajdja, sajasj', 2),
(28, 10, 'Giraf', 1, 1994, 1, 0, '', 3);

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
(10, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `shelters`
--

CREATE TABLE IF NOT EXISTS `shelters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shelter_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `shelters`
--

INSERT INTO `shelters` (`id`, `shelter_name`, `email`) VALUES
(1, 'test1', 'test1@test1.com'),
(2, 'test2', 'test2@test2.com');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(127) CHARACTER SET utf8 NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `customer_firstname`, `customer_lastname`, `customer_telephone`, `customer_zip`, `customer_city`, `customer_address`, `customer_address2`, `customer_company`, `customer_taxcode`, `logins`, `last_login`) VALUES
(10, 'alex@onlamp.info', '463ff07800d6a50276a8c29727a265cd3b6cb9ccbf4224161b4950bed3e484ce', 'alex@onlamp.info', 'Alex', 'Karamushko', '380975231602', '69050', 'Zaporizhzhya', 'Kosmicheskaya 100a, 33', '', '', '', 2, '1411045921');

-- --------------------------------------------------------

--
-- Структура таблицы `user_shelter`
--

CREATE TABLE IF NOT EXISTS `user_shelter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `shelter_id` int(11) NOT NULL,
  `doggy_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `doggy_gender` int(11) NOT NULL,
  `selected_size` int(1) NOT NULL,
  `selected_box` int(1) NOT NULL,
  `delivery_firstname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_lastname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_address2` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_city` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_postcode` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_telephone` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `coupon_code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  `orders_status` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`shelter_id`),
  KEY `shelter_id` (`shelter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=6 ;

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
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`puppy_id`) REFERENCES `puppies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Ограничения внешнего ключа таблицы `user_shelter`
--
ALTER TABLE `user_shelter`
  ADD CONSTRAINT `user_shelter_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_shelter_ibfk_2` FOREIGN KEY (`shelter_id`) REFERENCES `shelters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
