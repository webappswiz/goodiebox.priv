-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 16 2014 г., 09:18
-- Версия сервера: 5.5.40-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.4

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
`id` int(11) unsigned NOT NULL,
  `customer_firstname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_lastname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_telephone` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_zip` varchar(15) COLLATE utf8_swedish_ci NOT NULL,
  `customer_city` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `customer_address2` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `message` text COLLATE utf8_swedish_ci NOT NULL,
  `user_id` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
`id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `message` text COLLATE utf8_swedish_ci NOT NULL,
  `date` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `replied` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `email_templates`
--

CREATE TABLE IF NOT EXISTS `email_templates` (
`id` int(11) NOT NULL,
  `type` int(1) NOT NULL,
  `template_text` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Дамп данных таблицы `email_templates`
--

INSERT INTO `email_templates` (`id`, `type`, `template_text`) VALUES
(1, 1, '<p>Dear [firstname],</p>\r\n<p>Thank you very much for the registring with Goodiebox.</p>\r\n<p>You may now login at&nbsp;http://goodiebox.karam.org.ua/user_session/login</p>\r\n<p>Your login: [login]</p>\r\n<p>Password: password that you''ve selected during the registration.</p>\r\n<div>E-mail:&nbsp;<a href="mailto:info@goodiebox.hu" target="_blank">info@goodiebox.hu</a></div>\r\n<div>Weboldal:&nbsp;<a href="/" target="_blank">http://goodiebox.hu</a></div>\r\n<p>&nbsp;</p>'),
(2, 2, '<p>Kedves [firstname]!</p>\r\n<div>&nbsp;</div>\r\n<div>K&ouml;sz&ouml;nj&uuml;k, hogy megrendelted a Goodiebox-ot! Rem&eacute;lj&uuml;k, hogy sok &ouml;r&ouml;m&ouml;t szerz&uuml;nk kutyusodnak &eacute;s neked!</div>\r\n<div>&nbsp;</div>\r\n<div>Ne felejtsd el: "&Uacute;j h&oacute;nap, &uacute;jabb Goodiebox!"</div>\r\n<div>&nbsp;</div>\r\n<div>V&aacute;runk vissza!</div>\r\n<div>&nbsp;</div>\r\n<div>Goodiebox csapat</div>\r\n<div>&nbsp;</div>\r\n<div>E-mail:&nbsp;<a href="mailto:info@goodiebox.hu" target="_blank">info@goodiebox.hu</a></div>\r\n<div>Weboldal:&nbsp;<a href="/" target="_blank">http://goodiebox.hu</a></div>'),
(3, 3, '<div>\r\n<div>Kedves [firstname]!</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div>K&ouml;sz&ouml;nj&uuml;k, hogy megrendelted a Goodiebox-ot! Rem&eacute;lj&uuml;k, hogy sok &ouml;r&ouml;m&ouml;t szerz&uuml;nk bar&aacute;todnak &eacute;s kutyus&aacute;nak!&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Ha magadat jel&ouml;lted meg az aj&aacute;nd&eacute;k kupon k&oacute;d &aacute;tvevőjek&eacute;nt, akkor csatoltuk neked ebben az &uuml;zenetben, ha pedig a bar&aacute;todat, akkor m&aacute;r h&iacute;vhatod is, hogy megkapta-e a meglepet&eacute;st?</div>\r\n<div>&nbsp;</div>\r\n<div>Ne felejtsd el: "&Uacute;j h&oacute;nap, &uacute;jabb Goodiebox!"</div>\r\n<div>&nbsp;</div>\r\n<div>V&aacute;runk vissza!</div>\r\n<div>&nbsp;</div>\r\n<div>Goodiebox csapat</div>\r\n</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div>E-mail:&nbsp;<a href="mailto:info@goodiebox.hu" target="_blank">info@goodiebox.hu</a></div>\r\n<div>Weboldal:&nbsp;<a href="/" target="_blank">http://goodiebox.hu</a></div>\r\n</div>\r\n</div>\r\n<div>&nbsp;</div>'),
(4, 4, '<p>Hello, you have received an invite from [friend].</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
`id` int(11) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `friends_email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `friends_firstname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `friends_lastname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `selected_box` int(1) NOT NULL,
  `coupon_code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `date_purchased` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Дамп данных таблицы `friend`
--

INSERT INTO `friend` (`id`, `user_id`, `friends_email`, `friends_firstname`, `friends_lastname`, `selected_box`, `coupon_code`, `date_purchased`) VALUES
(14, 66, 'alexander.karamushko@ecommerce.com', 'Yemi', 'Yemi', 1, '', '2014-10-15 15:35:04');

-- --------------------------------------------------------

--
-- Структура таблицы `invites`
--

CREATE TABLE IF NOT EXISTS `invites` (
`id` int(11) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `is_registered` int(1) NOT NULL DEFAULT '0',
  `is_paid` int(11) NOT NULL DEFAULT '0',
  `is_used` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Дамп данных таблицы `invites`
--

INSERT INTO `invites` (`id`, `user_id`, `email`, `is_registered`, `is_paid`, `is_used`) VALUES
(1, 66, 'alexander.karamushko@ecommerce.com', 1, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
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
  `message` text COLLATE utf8_swedish_ci NOT NULL,
  `payment_status` int(1) NOT NULL,
  `discount` int(1) NOT NULL DEFAULT '0',
  `total_price` varchar(20) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `selected_box`, `puppy_id`, `delivery_firstname`, `delivery_lastname`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`, `company_name`, `tax_code`, `coupon_code`, `type`, `orders_status`, `shelter_order`, `last_modified`, `date_purchased`, `message`, `payment_status`, `discount`, `total_price`) VALUES
(113, 66, 1, 0, 'Alex', 'Karamushko', 'Kosmicheskaya 100, 33', '', 'Zaporizhzhya', '6905', '+36 11 111-11-11', 'Karam@Software', 'Karam@Software', '', 2, 1, NULL, '2014-10-15 15:35:04', '2014-10-15 15:35:04', '', 1, 0, '8250.000000'),
(121, 69, 1, 44, 'Alex', 'Karamushko', 'Kosmicheskaya 97, 69', '', 'Zaporizhzhzya', '6905', '+36 11 111-11-11', '', '', '', 1, 1, NULL, '2014-10-16 06:12:41', '2014-10-16 06:12:41', '', 1, 0, '8250.000000');

-- --------------------------------------------------------

--
-- Структура таблицы `order_statuses`
--

CREATE TABLE IF NOT EXISTS `order_statuses` (
`type` int(1) NOT NULL,
  `status_name` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

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
`id` int(11) NOT NULL,
  `package_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `weight` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `enabled` int(1) NOT NULL DEFAULT '0',
  `product_number` varchar(10) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Дамп данных таблицы `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `weight`, `price`, `enabled`, `product_number`) VALUES
(1, '1 hónap', '0', '8250', 1, 'IC01'),
(2, '3 hónap', '0', '15', 0, 'IC03'),
(3, '6 hónap', '0', '20', 0, 'IC06');

-- --------------------------------------------------------

--
-- Структура таблицы `puppies`
--

CREATE TABLE IF NOT EXISTS `puppies` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `puppy_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `gender` int(1) NOT NULL,
  `years` int(11) NOT NULL,
  `months` int(11) NOT NULL,
  `alerg` int(1) NOT NULL,
  `alerg_descr` text COLLATE utf8_swedish_ci NOT NULL,
  `selected_size` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Дамп данных таблицы `puppies`
--

INSERT INTO `puppies` (`id`, `user_id`, `puppy_name`, `gender`, `years`, `months`, `alerg`, `alerg_descr`, `selected_size`) VALUES
(41, 66, 'Tuzik', 1, 1994, 1, 1, 'aaa', 1),
(44, 69, 'Bobik', 1, 2012, 1, 1, 'Chicken', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` int(11) unsigned NOT NULL,
  `name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

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
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(11, 1),
(66, 1),
(69, 1),
(11, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `shelters`
--

CREATE TABLE IF NOT EXISTS `shelters` (
`id` int(11) NOT NULL,
  `shelter_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

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
`id` int(11) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `shelter_id` int(11) NOT NULL,
  `doggy_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `doggy_gender` int(1) NOT NULL,
  `selected_size` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 NOT NULL,
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
  `last_login` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `customer_firstname`, `customer_lastname`, `customer_telephone`, `customer_zip`, `customer_city`, `customer_address`, `customer_address2`, `customer_company`, `customer_taxcode`, `logins`, `last_login`) VALUES
(11, 'admin', 'cc1ac36745ac451101bce0f28e0c0f052baeae28a64ff4004ca135bc91aebb5a', 'alexander.karamushko@gmail.com', '', '', '', '', '', '', '', '', '', 46, '1413437375'),
(66, 'alex@onlamp.info', '89ddc819e76bc719443d20d0b43d7c7e50133de5ae22afdcb7d3b86de32bb505', 'alex@onlamp.info', 'Alex', 'Karamushko', '+36 11 111-11-11', '6905', 'Zaporizhzhya', 'Kosmicheskaya 100, 33', '', 'Karam@Software', '1721637136', 5, '1413440001'),
(69, 'alexander.karamushko@ecommerce.com', '89ddc819e76bc719443d20d0b43d7c7e50133de5ae22afdcb7d3b86de32bb505', 'alexander.karamushko@ecommerce.com', 'Alex', 'Karamushko', '+36 11 111-11-11', '6905', 'Zaporizhzhzya', 'Kosmicheskaya 97, 69', '', '', '', 1, '1413439961');

-- --------------------------------------------------------

--
-- Структура таблицы `user_shelter`
--

CREATE TABLE IF NOT EXISTS `user_shelter` (
`id` int(11) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `dog` int(11) NOT NULL,
  `selected_box` int(1) NOT NULL,
  `delivery_address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_address2` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_city` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_postcode` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `delivery_telephone` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) CHARACTER SET utf8 NOT NULL,
  `token` varchar(40) CHARACTER SET utf8 NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `address_book`
--
ALTER TABLE `address_book`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `email_templates`
--
ALTER TABLE `email_templates`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `friend`
--
ALTER TABLE `friend`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `invites`
--
ALTER TABLE `invites`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `puppy_id` (`puppy_id`), ADD KEY `orders_status` (`orders_status`), ADD KEY `selected_box` (`selected_box`);

--
-- Индексы таблицы `order_statuses`
--
ALTER TABLE `order_statuses`
 ADD PRIMARY KEY (`type`);

--
-- Индексы таблицы `packages`
--
ALTER TABLE `packages`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `puppies`
--
ALTER TABLE `puppies`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq_name` (`name`);

--
-- Индексы таблицы `roles_users`
--
ALTER TABLE `roles_users`
 ADD PRIMARY KEY (`user_id`,`role_id`), ADD KEY `fk_role_id` (`role_id`);

--
-- Индексы таблицы `shelters`
--
ALTER TABLE `shelters`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shelter_dog`
--
ALTER TABLE `shelter_dog`
 ADD PRIMARY KEY (`id`), ADD KEY `shelter_id` (`shelter_id`), ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq_email` (`username`), ADD KEY `users_index` (`id`), ADD KEY `fk_users` (`id`);

--
-- Индексы таблицы `user_shelter`
--
ALTER TABLE `user_shelter`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `dog` (`dog`);

--
-- Индексы таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq_token` (`token`), ADD KEY `fk_user_id` (`user_id`), ADD KEY `expires` (`expires`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `address_book`
--
ALTER TABLE `address_book`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `email_templates`
--
ALTER TABLE `email_templates`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `friend`
--
ALTER TABLE `friend`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `invites`
--
ALTER TABLE `invites`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT для таблицы `order_statuses`
--
ALTER TABLE `order_statuses`
MODIFY `type` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `packages`
--
ALTER TABLE `packages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `puppies`
--
ALTER TABLE `puppies`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `shelters`
--
ALTER TABLE `shelters`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `shelter_dog`
--
ALTER TABLE `shelter_dog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT для таблицы `user_shelter`
--
ALTER TABLE `user_shelter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
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
-- Ограничения внешнего ключа таблицы `invites`
--
ALTER TABLE `invites`
ADD CONSTRAINT `invites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`orders_status`) REFERENCES `order_statuses` (`type`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`selected_box`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
ADD CONSTRAINT `shelter_dog_ibfk_1` FOREIGN KEY (`shelter_id`) REFERENCES `shelters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `shelter_dog_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
