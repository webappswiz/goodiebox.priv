-- phpMyAdmin SQL Dump
-- version 4.2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 29 2014 г., 09:18
-- Версия сервера: 5.1.73
-- Версия PHP: 5.3.3

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=3 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `email`, `subject`, `message`, `date`, `replied`) VALUES
(8, 'Alex', 'Karamushko', 'alexander.karamushko@gmail.com', 'ToS Violation - PHP SPAM', 'adsadsads', '2014-09-22 19:1', 1),
(9, 'Alex', 'Karamushko', 'alexander.karamushko@gmail.com', 'Security issue', 'addasd', '2014-09-22 07:1', 0),
(10, 'Alex', 'Karamushko', 'alexander.karamushko@gmail.com', 'Account security issue', 'dsaadsdsa', '2014-09-22 19:1', 0),
(11, 'Alex', 'Karamushko', 'alexander.karamushko@gmail.com', 'ToS Violation - Phishing', 'dadsaaddsa', '2014-09-22 19:15', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `email_templates`
--

CREATE TABLE IF NOT EXISTS `email_templates` (
`id` int(11) NOT NULL,
  `type` int(1) NOT NULL,
  `template_text` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `email_templates`
--

INSERT INTO `email_templates` (`id`, `type`, `template_text`) VALUES
(1, 1, 'Hello, thank your for the registration'),
(2, 2, '<p>Kedves [firstname]!</p>\r\n<div>&nbsp;</div>\r\n<div>K&ouml;sz&ouml;nj&uuml;k, hogy megrendelted a Goodiebox-ot! Rem&eacute;lj&uuml;k, hogy sok &ouml;r&ouml;m&ouml;t szerz&uuml;nk kutyusodnak &eacute;s neked!&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Rendel&eacute;sed sikeres volt, itt olvashatod a visszaigazol&aacute;st r&oacute;la:</div>\r\n<div>&nbsp;</div>\r\n<div><br />\r\n<div>\r\n<div dir="ltr">\r\n<div class="gmail_extra">\r\n<div class="gmail_quote">\r\n<blockquote class="gmail_quote">\r\n<div dir="ltr">\r\n<div class="gmail_quote">\r\n<div dir="ltr">\r\n<table border="1" cellspacing="0">\r\n<tbody>\r\n<tr>\r\n<td width="587">\r\n<table border="1" cellspacing="0">\r\n<tbody>\r\n<tr>\r\n<td colspan="2">\r\n<p align="center"><strong>Sz&aacute;ll&iacute;t&oacute;</strong></p>\r\n</td>\r\n<td colspan="2">\r\n<div align="center"><strong>Vevő</strong></div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="98">N&eacute;v:</td>\r\n<td width="180">Web Apps Kft</td>\r\n<td width="106">N&eacute;v:</td>\r\n<td width="185">Fulop Andras</td>\r\n</tr>\r\n<tr>\r\n<td>C&iacute;m:</td>\r\n<td>Budapest 1053, Kossuth Lajos utca, 7-9</td>\r\n<td width="106">C&iacute;m:</td>\r\n<td width="185">Debrecen 4032, Egyetem Sugarut 47, 3/13</td>\r\n</tr>\r\n<tr>\r\n<td>Ad&oacute;sz&aacute;m:</td>\r\n<td>234242424</td>\r\n<td width="106">C&eacute;gn&eacute;v:</td>\r\n<td width="185">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Banksz&aacute;mla:</td>\r\n<td>42312431231341234</td>\r\n<td width="106">Ad&oacute;sz&aacute;m:</td>\r\n<td width="185">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Telefon:</td>\r\n<td>HU314334</td>\r\n<td width="106">Telefon:</td>\r\n<td width="185">323423421</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table border="1" cellspacing="0">\r\n<tbody>\r\n<tr><th scope="col" width="133">Fizet&eacute;si m&oacute;d</th><th scope="col" width="141">Sz&aacute;mla kelte</th><th scope="col" width="137">Teljes&iacute;t&eacute;s d&aacute;tuma</th><th scope="col" width="158">Sz&aacute;mla sorsz&aacute;ma</th></tr>\r\n<tr>\r\n<td>&Aacute;tutal&aacute;s</td>\r\n<td>2014/09/30</td>\r\n<td>2014/09/30</td>\r\n<td>1241223212</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table border="1" cellspacing="0">\r\n<tbody>\r\n<tr><th scope="col" width="77">Term&eacute;k #</th><th scope="col" width="345">Term&eacute;k le&iacute;r&aacute;sa</th><th scope="col" width="151">&Aacute;r (HUF)</th></tr>\r\n<tr>\r\n<td>IC01</td>\r\n<td>Goodiebox 1 month Icipici</td>\r\n<td>\r\n<div align="right">7.490,00</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table border="1" cellspacing="0" align="right">\r\n<tbody>\r\n<tr><th scope="row" width="426">\r\n<div align="left">Kedvezm&eacute;ny:</div>\r\n</th><th scope="row" width="151">\r\n<div align="right">0,00</div>\r\n</th></tr>\r\n<tr><th scope="row">\r\n<div align="left">Sz&aacute;ll&iacute;t&aacute;s &eacute;s csomagol&aacute;s:</div>\r\n</th><th scope="row">\r\n<div align="right">0,00</div>\r\n</th></tr>\r\n<tr><th scope="row">\r\n<div align="left">&Aacute;FA:</div>\r\n</th><th scope="row">\r\n<div align="right">0,00</div>\r\n</th></tr>\r\n<tr><th scope="row">\r\n<div align="left">&Ouml;sszesen:</div>\r\n</th><th scope="row">\r\n<div align="right">7.490,00</div>\r\n</th></tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n</blockquote>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div>&nbsp;</div>\r\n<div>Ne felejtsd el: "&Uacute;j h&oacute;nap, &uacute;jabb Goodiebox!"</div>\r\n<div>&nbsp;</div>\r\n<div>V&aacute;runk vissza!</div>\r\n<div>&nbsp;</div>\r\n<div>Goodiebox csapat</div>\r\n<div>&nbsp;</div>\r\n<div>E-mail:&nbsp;<a href="mailto:info@goodiebox.hu" target="_blank">info@goodiebox.hu</a></div>\r\n<div>Weboldal:&nbsp;<a href="/" target="_blank">http://goodiebox.hu</a></div>'),
(3, 3, '<div>\r\n<div>Kedves [firstname]!</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div>K&ouml;sz&ouml;nj&uuml;k, hogy megrendelted a Goodiebox-ot! Rem&eacute;lj&uuml;k, hogy sok &ouml;r&ouml;m&ouml;t szerz&uuml;nk bar&aacute;todnak &eacute;s kutyus&aacute;nak!&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Ha magadat jel&ouml;lted meg az aj&aacute;nd&eacute;k kupon k&oacute;d &aacute;tvevőjek&eacute;nt, akkor csatoltuk neked ebben az &uuml;zenetben, ha pedig a bar&aacute;todat, akkor m&aacute;r h&iacute;vhatod is, hogy megkapta-e a meglepet&eacute;st?</div>\r\n<div>&nbsp;</div>\r\n<div>Rendel&eacute;sed sikeres volt, itt olvashatod a visszaigazol&aacute;st r&oacute;la:</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div>\r\n<div>\r\n<div dir="ltr">\r\n<div class="gmail_extra">\r\n<div class="gmail_quote">\r\n<blockquote class="gmail_quote">\r\n<div dir="ltr">\r\n<div class="gmail_quote">\r\n<div dir="ltr">\r\n<table border="1" cellspacing="0">\r\n<tbody>\r\n<tr>\r\n<td width="587">\r\n<table border="1" cellspacing="0">\r\n<tbody>\r\n<tr>\r\n<td colspan="2">\r\n<p align="center"><strong>Sz&aacute;ll&iacute;t&oacute;</strong></p>\r\n</td>\r\n<td colspan="2">\r\n<div align="center"><strong>Vevő</strong></div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td width="98">N&eacute;v:</td>\r\n<td width="180">Web Apps Kft</td>\r\n<td width="106">N&eacute;v:</td>\r\n<td width="185">[firstname] [lastname]</td>\r\n</tr>\r\n<tr>\r\n<td>C&iacute;m:</td>\r\n<td>Budapest 1053, Kossuth Lajos utca, 7-9</td>\r\n<td width="106">C&iacute;m:</td>\r\n<td width="185">[address]</td>\r\n</tr>\r\n<tr>\r\n<td>Ad&oacute;sz&aacute;m:</td>\r\n<td>234242424</td>\r\n<td width="106">C&eacute;gn&eacute;v:</td>\r\n<td width="185">[company_name]&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>Banksz&aacute;mla:</td>\r\n<td>42312431231341234</td>\r\n<td width="106">Ad&oacute;sz&aacute;m:</td>\r\n<td width="185">[taxnumber]</td>\r\n</tr>\r\n<tr>\r\n<td>Telefon:</td>\r\n<td>HU314334</td>\r\n<td width="106">Telefon:</td>\r\n<td width="185">[telephone]</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table border="1" cellspacing="0">\r\n<tbody>\r\n<tr><th scope="col" width="133">Fizet&eacute;si m&oacute;d</th><th scope="col" width="141">Sz&aacute;mla kelte</th><th scope="col" width="137">Teljes&iacute;t&eacute;s d&aacute;tuma</th><th scope="col" width="158">Sz&aacute;mla sorsz&aacute;ma</th></tr>\r\n<tr>\r\n<td>&Aacute;tutal&aacute;s</td>\r\n<td>[date]</td>\r\n<td>[date]</td>\r\n<td>[invoice_num]</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table border="1" cellspacing="0">\r\n<tbody>\r\n<tr><th scope="col" width="77">Term&eacute;k #</th><th scope="col" width="345">Term&eacute;k le&iacute;r&aacute;sa</th><th scope="col" width="151">&Aacute;r (HUF)</th></tr>\r\n<tr>\r\n<td>IC01</td>\r\n<td>Goodiebox [package]&nbsp;[size]</td>\r\n<td>\r\n<div align="right">[price]</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table border="1" cellspacing="0" align="right">\r\n<tbody>\r\n<tr><th scope="row" width="426">\r\n<div align="left">Kedvezm&eacute;ny:</div>\r\n</th><th scope="row" width="151">\r\n<div align="right">0,00</div>\r\n</th></tr>\r\n<tr><th scope="row">\r\n<div align="left">Sz&aacute;ll&iacute;t&aacute;s &eacute;s csomagol&aacute;s:</div>\r\n</th><th scope="row">\r\n<div align="right">0,00</div>\r\n</th></tr>\r\n<tr><th scope="row">\r\n<div align="left">&Aacute;FA:</div>\r\n</th><th scope="row">\r\n<div align="right">0,00</div>\r\n</th></tr>\r\n<tr><th scope="row">\r\n<div align="left">&Ouml;sszesen:</div>\r\n</th><th scope="row">\r\n<div align="right">[total]</div>\r\n</th></tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n</blockquote>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div>&nbsp;</div>\r\n<div>Ne felejtsd el: "&Uacute;j h&oacute;nap, &uacute;jabb Goodiebox!"</div>\r\n<div>&nbsp;</div>\r\n<div>V&aacute;runk vissza!</div>\r\n<div>&nbsp;</div>\r\n<div>Goodiebox csapat</div>\r\n</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div>E-mail:&nbsp;<a href="mailto:info@goodiebox.hu" target="_blank">info@goodiebox.hu</a></div>\r\n<div>Weboldal:&nbsp;<a href="/" target="_blank">http://goodiebox.hu</a></div>\r\n</div>\r\n</div>\r\n<div>&nbsp;</div>');

-- --------------------------------------------------------

--
-- Структура таблицы `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
`id` int(11) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `friends_email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `friends_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `selected_box` int(1) NOT NULL,
  `coupon_code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `date_purchased` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `friend`
--

INSERT INTO `friend` (`id`, `user_id`, `friends_email`, `friends_name`, `selected_box`, `coupon_code`, `date_purchased`) VALUES
(8, 11, 'alex@onlamp.info', 'dsaasddas', 1, 'ohNbxcVK', '2014-09-22 19:48:54');

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
  `date_purchased` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=48 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `selected_box`, `puppy_id`, `delivery_firstname`, `delivery_lastname`, `delivery_address`, `delivery_address2`, `delivery_city`, `delivery_postcode`, `delivery_telephone`, `company_name`, `tax_code`, `coupon_code`, `type`, `orders_status`, `shelter_order`, `last_modified`, `date_purchased`) VALUES
(36, 11, 1, 0, 'Alex', 'Karamushko', 'akdsjaksdjka', '', 'lakdl;askdl;akd', '9238493284', '9028390328', '', '', '', 2, 1, NULL, '2014-09-22 19:47:45', '2014-09-22 19:47:45');

-- --------------------------------------------------------

--
-- Структура таблицы `order_statuses`
--

CREATE TABLE IF NOT EXISTS `order_statuses` (
`type` int(1) NOT NULL,
  `status_name` varchar(50) COLLATE utf8_swedish_ci NOT NULL
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
`id` int(11) NOT NULL,
  `package_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `weight` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `enabled` int(1) NOT NULL DEFAULT '0'
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
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `puppy_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `gender` int(1) NOT NULL,
  `years` int(11) NOT NULL,
  `months` int(11) NOT NULL,
  `alerg` int(1) NOT NULL,
  `alerg_descr` text COLLATE utf8_swedish_ci NOT NULL,
  `selected_size` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=47 ;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` int(11) unsigned NOT NULL,
  `name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL
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
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(11, 1),
(11, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `shelters`
--

CREATE TABLE IF NOT EXISTS `shelters` (
`id` int(11) NOT NULL,
  `shelter_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=3 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
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
  `last_login` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `customer_firstname`, `customer_lastname`, `customer_telephone`, `customer_zip`, `customer_city`, `customer_address`, `customer_address2`, `customer_company`, `customer_taxcode`, `logins`, `last_login`) VALUES
(11, 'admin', 'a28a4e5e5fc383d1bbb2be9aafa1e2933d4b00d990e63e1d1b2527a37b0db2d6', 'alexander.karamushko@gmail.com', '', '', '', '', '', '', '', '', '', 18, '1411466658');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=17 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_book`
--
ALTER TABLE `address_book`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `puppy_id` (`puppy_id`), ADD KEY `orders_status` (`orders_status`), ADD KEY `selected_box` (`selected_box`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
 ADD PRIMARY KEY (`type`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puppies`
--
ALTER TABLE `puppies`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq_name` (`name`);

--
-- Indexes for table `roles_users`
--
ALTER TABLE `roles_users`
 ADD PRIMARY KEY (`user_id`,`role_id`), ADD KEY `fk_role_id` (`role_id`);

--
-- Indexes for table `shelters`
--
ALTER TABLE `shelters`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shelter_dog`
--
ALTER TABLE `shelter_dog`
 ADD PRIMARY KEY (`id`), ADD KEY `shelter_id` (`shelter_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq_email` (`username`), ADD KEY `users_index` (`id`), ADD KEY `fk_users` (`id`);

--
-- Indexes for table `user_shelter`
--
ALTER TABLE `user_shelter`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `dog` (`dog`);

--
-- Indexes for table `user_tokens`
--
ALTER TABLE `user_tokens`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uniq_token` (`token`), ADD KEY `fk_user_id` (`user_id`), ADD KEY `expires` (`expires`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_book`
--
ALTER TABLE `address_book`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
MODIFY `type` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `puppies`
--
ALTER TABLE `puppies`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shelters`
--
ALTER TABLE `shelters`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shelter_dog`
--
ALTER TABLE `shelter_dog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_shelter`
--
ALTER TABLE `user_shelter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_tokens`
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
