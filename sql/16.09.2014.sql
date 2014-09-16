-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 16 2014 г., 22:49
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
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

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
  `comment` text COLLATE utf8_swedish_ci NOT NULL,
  `delivery_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_street_address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_city` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_postcode` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_telephone` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  `orders_status` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `friend`
--

INSERT INTO `friend` (`id`, `user_id`, `friends_email`, `friends_name`, `selected_size`, `selected_box`, `comment`, `delivery_name`, `delivery_street_address`, `delivery_city`, `delivery_postcode`, `delivery_telephone`, `last_modified`, `date_purchased`, `orders_status`) VALUES
(1, 5, 'rulana.s@mail.ru', 'dsaasddas', 2, 1, 'sadadsdadsa', '', '', '', '', '', '2014-09-15 20:52:52', '2014-09-15 20:52:52', 0),
(2, 6, 'alex@onlamp.info', 'dsaasddas', 1, 1, 'sdaasddsa', '', 'Kosmicheskaya ', 'Zaporizhzhya', '69050', '380975231602', '2014-09-15 21:16:21', '2014-09-15 21:16:21', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `selected_box` int(11) NOT NULL,
  `puppy_id` int(11) unsigned NOT NULL,
  `comment` text COLLATE utf8_swedish_ci NOT NULL,
  `delivery_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_street_address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_city` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_postcode` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_telephone` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  `orders_status` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `puppy_id` (`puppy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `selected_box`, `puppy_id`, `comment`, `delivery_name`, `delivery_street_address`, `delivery_city`, `delivery_postcode`, `delivery_telephone`, `last_modified`, `date_purchased`, `orders_status`) VALUES
(2, 6, 1, 2, '', '', '', '', '', '', '2014-09-15 21:10:11', '2014-09-15 21:10:11', 0),
(3, 6, 1, 4, '', '', 'test street gvardiya', 'Kiev', '53440', '380666424353', '2014-09-15 21:18:18', '2014-09-15 21:18:18', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `puppies`
--

INSERT INTO `puppies` (`id`, `user_id`, `puppy_name`, `gender`, `years`, `months`, `alerg`, `alerg_descr`, `selected_size`) VALUES
(2, 6, 'asdadsasdds', 0, 2, 5, 0, 'dasadsdas', 2),
(3, 6, 'asdadsasdds', 0, 2, 5, 0, 'adadsads', 1),
(4, 6, 'asdadsasdds', 0, 2, 5, 0, 'adadsads', 1);

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
(1, 1),
(5, 1),
(6, 1),
(1, 2);

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
  `logins` int(11) NOT NULL,
  `last_login` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_email` (`username`),
  KEY `users_index` (`id`),
  KEY `fk_users` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `customer_firstname`, `customer_lastname`, `customer_telephone`, `customer_zip`, `customer_city`, `customer_address`, `logins`, `last_login`) VALUES
(1, 'karam@karam.org.ua', '21232f297a57a5a743894a0e4a801fc3', 'karam@karam.org.ua', '', '', '', '', '', '', 7, '1410773856'),
(5, 'alex@onlamp.info', '89ddc819e76bc719443d20d0b43d7c7e50133de5ae22afdcb7d3b86de32bb505', 'alex@onlamp.info', 'Alex', 'Karamushko', '380975231602', '69050', 'Zaporizhzhya', 'Kosmicheskaya         ', 7, '1410896661'),
(6, 'rulana.s@mail.ru', 'e5d3d37de4dc93a6324beeb90bb6f0f0bc2fda120b8144a9edfdcd054752c72f', 'rulana.s@mail.ru', 'Alex', 'Karamushko', '380975231602', '69050', 'Zaporizhzhya', 'Kosmicheskaya ', 1, '1410804502');

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
  `comment` text COLLATE utf8_swedish_ci NOT NULL,
  `delivery_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_street_address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_city` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_postcode` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_telephone` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  `orders_status` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`shelter_id`),
  KEY `shelter_id` (`shelter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `user_shelter`
--

INSERT INTO `user_shelter` (`id`, `user_id`, `shelter_id`, `doggy_name`, `doggy_gender`, `selected_size`, `selected_box`, `comment`, `delivery_name`, `delivery_street_address`, `delivery_city`, `delivery_postcode`, `delivery_telephone`, `last_modified`, `date_purchased`, `orders_status`) VALUES
(3, 5, 1, 'vasya', 0, 3, 1, '', '', '', '', '', '', '2014-09-15 20:59:40', '2014-09-15 20:59:40', 0),
(4, 5, 1, 'tuzik', 0, 1, 1, '', '', '', '', '', '', '2014-09-15 21:01:21', '2014-09-15 21:01:21', 0),
(5, 5, 2, 'dsasaddasdsadsa', 0, 3, 1, '', 'Alex Karamushko', 'Kosmicheskaya ', 'Zaporizhzhya', '69050', '380975231602', '2014-09-16 12:20:19', '2014-09-16 12:20:19', 0);

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
