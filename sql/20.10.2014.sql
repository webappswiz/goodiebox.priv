-- phpMyAdmin SQL Dump
-- version 4.2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 20 2014 г., 21:28
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=8 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `coupons`
--

CREATE TABLE IF NOT EXISTS `coupons` (
`id` int(11) NOT NULL,
  `coupon` varchar(13) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`) VALUES
(3, 'GB1408127082'),
(4, 'GB1409937387'),
(5, 'GB1412148280'),
(6, 'GB1408126933'),
(7, 'GB1408127023');

-- --------------------------------------------------------

--
-- Структура таблицы `discounts`
--

CREATE TABLE IF NOT EXISTS `discounts` (
`id` int(11) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Структура таблицы `email_templates`
--

CREATE TABLE IF NOT EXISTS `email_templates` (
`id` int(11) NOT NULL,
  `type` int(1) NOT NULL,
  `template_text` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `email_templates`
--

INSERT INTO `email_templates` (`id`, `type`, `template_text`) VALUES
(1, 1, '<p>Kedves [firstname]!</p>\r\n<p><strong>Gratul&aacute;lunk! Sikeresen regisztr&aacute;lt&aacute;l a Goodiebox weboldal&aacute;n! </strong></p>\r\n<p><strong>L&eacute;trehoztuk neked a saj&aacute;t profilod!</strong> B&aacute;rmikor ellenőrizheted az aktu&aacute;lis rendel&eacute;sed, &uacute;jabb rendel&eacute;st adhatsz le vagy megh&iacute;vhatod a bar&aacute;taidat, hogy ők is megismerhessenek minket! :) Ha visszat&eacute;rsz hozz&aacute;nk, legk&ouml;zelebb nem kell az elej&eacute;ről kezdenek a megrendel&eacute;st. Ha azonos kutyust szeretn&eacute;l megaj&aacute;nd&eacute;kozni, az adott kutyus profilj&aacute;r&oacute;l m&aacute;r ind&iacute;thatod is a megrendel&eacute;st. &Iacute;gy sokkal egyszerűbb &eacute;s gyorsabb lesz minden!</p>\r\n<p>B&aacute;rmikor lehetős&eacute;ged van &uacute;j kedvencet hozz&aacute;adni, &iacute;gy akkor sem kell agg&oacute;dnod, ha nagy a csal&aacute;d &eacute;s t&ouml;bb kutyusod is van! Ne feledd, egyszerre csak egynek tudsz rendelni! Ha minden v&aacute;gyad a t&ouml;bbieket is meglepni egy adott h&oacute;napon bel&uuml;l, egyenk&eacute;nt b&aacute;rmikor megteheted, de csak amikor nyitva vagyunk, vagyis rendel&eacute;si időszak van! A weboldalunkon a főoldali visszasz&aacute;ml&aacute;l&oacute; minden esetben seg&iacute;ts&eacute;gedre van, hogy &eacute;ppen hol tartunk az adott h&oacute;napban.</p>\r\n<p><strong>Ne habozz, n&eacute;zd meg a saj&aacute;t profilod!</strong> B&aacute;rmikor jav&iacute;thatod a szem&eacute;lyes adataidat a j&ouml;vőre n&eacute;zve, &aacute;m a m&aacute;r leadott rendel&eacute;s adatai ezzel nem m&oacute;dosulnak. Klikkelj &eacute;s jelentkezz be a&nbsp;<a href="http://goodiebox.hu/user_session/login">http://goodiebox.hu/user_session/login</a>&nbsp;oldalon. Fedezz fel mindent &eacute;s h&iacute;vd meg az ismerőseidet, hogy ők is meglephess&eacute;k kedvenceiket!</p>\r\n<p>Felhaszn&aacute;l&oacute;neved: [login]</p>\r\n<p>Jelszavad: az a titkos karakterk&oacute;d, amit a regisztr&aacute;ci&oacute; sor&aacute;n megadt&aacute;l!</p>\r\n<p><strong>Ha vannak kuty&aacute;s bar&aacute;taid, lehetős&eacute;ged van megh&iacute;vni őket!</strong> Ha ők is rendelnek, ut&aacute;nuk kedvezm&eacute;nyed &iacute;r&oacute;dik j&oacute;v&aacute;, amit nyomon tudsz k&ouml;vetni a profilodban &eacute;s b&aacute;rmikor be is v&aacute;lthatod egy &uacute;j doboz rendel&eacute;s&eacute;n&eacute;l. &Eacute;rdemes azonban kiv&aacute;rni, m&iacute;g sok bar&aacute;tod rendel, hiszen &iacute;gy ak&aacute;r <strong>ingyen Goodiebox</strong>-hoz is juthatsz, ami szerint&uuml;nk nagyon szuper! :)</p>\r\n<p>K&ouml;sz&ouml;nj&uuml;k, hogy minket v&aacute;lasztott&aacute;l a kutyusod vagy bar&aacute;tod kutyus&aacute;nak &ouml;r&ouml;mszerz&eacute;s&eacute;re! &Iacute;g&eacute;rj&uuml;k, hogy mindent megtesz&uuml;nk az&eacute;rt, hogy maxim&aacute;lisan el&eacute;gedett legy&eacute;l a munk&aacute;nkkal! Ha vannak kuty&aacute;s ismerőseid, mutasd meg nekik is a weboldalunkat &eacute;s ne felejts el akt&iacute;v rajong&oacute;nk maradni a Goodiebox Facebook oldal&aacute;n sem! :)</p>\r\n<p>Minden h&oacute;napban valami &uacute;jdons&aacute;ggal k&eacute;sz&uuml;l&uuml;nk neked &eacute;s a kutyusodnak, &iacute;gy mindig &eacute;rdemes visszal&aacute;togatnod &eacute;s figyelni, mikor van nyitva a webshop! Term&eacute;szetesen minden lehets&eacute;ges f&oacute;rumon jelezz&uuml;k neked, &iacute;gy bőven lesz időd leadni az aktu&aacute;lis rendel&eacute;sedet!</p>\r\n<p>B&aacute;rmilyen k&eacute;rd&eacute;sed van a regisztr&aacute;ci&oacute;val, a weboldallal vagy a rendel&eacute;ssel kapcsolatban, nyugodtan keress minket az al&aacute;bbi e-mail c&iacute;men: <a href="mailto:info@goodiebox.hu">info@goodiebox.hu</a> vagy a <a href="http://goodiebox.hu/kapcsolat">http://goodiebox.hu/kapcsolat</a> oldalon.</p>\r\n<p>Sz&eacute;p napot!</p>\r\n<p>&nbsp;</p>\r\n<p>Goodiebox</p>\r\n<p>E-mail: <a href="mailto:info@goodiebox.hu">info@goodiebox.hu</a></p>\r\n<p>Weboldal: <a href="http://goodiebox.hu">http://goodiebox.hu</a></p>\r\n<p>Facebook: <a href="http://facebook.com/goodieboxhu">http://facebook.com/goodieboxhu</a></p>'),
(2, 2, '<p>Kedves [firstname]!</p>\r\n<p><strong>Gratul&aacute;lunk! Sikeresen megrendelted a meglepet&eacute;s dobozt a kutyusodnak!</strong></p>\r\n<p>A rendel&eacute;si időszak lez&aacute;r&aacute;s&aacute;t k&ouml;vetően, a lehető leggyorsabban feldolgozzuk a megrendel&eacute;sedet, csomagoljuk &eacute;s k&uuml;ldj&uuml;k a&nbsp;<strong>Goodiebox</strong>-odat az ingyenes h&aacute;zhozsz&aacute;ll&iacute;t&aacute;ssal a megjel&ouml;lt aktu&aacute;lis időszakban:&nbsp;</p>\r\n<ol start="2014">\r\n<li><strong> november&nbsp;6-7.</strong></li>\r\n</ol>\r\n<p><strong>Amennyiben a bar&aacute;tod kutyus&aacute;nak rendelted meg a Goodiebox-ot, hamarosan megkapod email-ben az aj&aacute;nd&eacute;kkupont (ha csak magadnak k&eacute;rted), amit kinyomtatva &aacute;tadhatsz a bar&aacute;todnak!&nbsp;</strong>Ha enged&eacute;lyezted, hogy a bar&aacute;tod is megkapja, akkor m&aacute;r h&iacute;vhatod is, biztosan landolt m&aacute;r a virtu&aacute;lis postal&aacute;d&aacute;j&aacute;ban! A bar&aacute;todnak b&aacute;rmikor lehetős&eacute;ge van ig&eacute;nyelni a meglepet&eacute;s dobozt a kutyus&aacute;nak, amikor a webshopunk nyitva van!&nbsp;</p>\r\n<p><strong>Fontos inform&aacute;ci&oacute;, hogy az aj&aacute;nd&eacute;kkupon maximum 3 h&oacute;napig &eacute;rv&eacute;nyes!</strong></p>\r\n<p>&nbsp;</p>\r\n<p>B&aacute;rmilyen k&eacute;rd&eacute;sed van a leadott megrendel&eacute;ssel kapcsolatban, nyugodtan keress minket az al&aacute;bbi e-mail c&iacute;men:<a href="mailto:rendeles@goodiebox.hu">rendeles@goodiebox.hu</a></p>\r\n<p>&nbsp;</p>\r\n<p>Sz&eacute;p napot!</p>\r\n<p>&nbsp;</p>\r\n<p>Goodiebox</p>\r\n<p>&nbsp;</p>\r\n<p>E-mail: <a href="mailto:info@goodiebox.hu">info@goodiebox.hu</a></p>\r\n<p>Weboldal: <a href="http://goodiebox.hu">http://goodiebox.hu</a></p>\r\n<p>Facebook: <a href="http://facebook.com/goodieboxhu">http://facebook.com/goodieboxhu</a></p>'),
(3, 3, '<p>Kedves [firstname]!</p>\r\n<p><strong>Gratul&aacute;lunk! Bar&aacute;tod meglepett t&eacute;ged &eacute;s a kutyusodat, &iacute;gy egy Goodiebox boldog tulajdonosa vagy!</strong></p>\r\n<p><strong>Hogy mi is pontosan a Goodiebox? </strong>Havonta megrendelhető, 4-5 k&uuml;l&ouml;nb&ouml;ző term&eacute;ket tartalmaz&oacute; meglepet&eacute;s doboz kutyusoknak. Gondosan v&aacute;logatott, pr&eacute;mium term&eacute;keket rejt&uuml;nk bele, hiszen a minős&eacute;g sz&aacute;munkra is nagyon fontos! Szeretn&eacute;nk, ha kuty&aacute;ddal egy&uuml;tt maxim&aacute;lisan el&eacute;gedettek lenn&eacute;tek, &eacute;s &aacute;lland&oacute; tagjai maradn&aacute;tok k&ouml;z&ouml;ss&eacute;g&uuml;nknek!&nbsp;</p>\r\n<p><strong>Mi a teendő, ha szeretn&eacute;tek megkapni a Goodiebox-ot? </strong>L&aacute;togass el a weboldalunkra, &eacute;s a főoldal jobb felső sark&aacute;ban klikkelj az<strong> &bdquo;Aj&aacute;nd&eacute;kbev&aacute;lt&aacute;s&rdquo;</strong> gombra, hogy megadhasd a kutyusod adatait, amit tudnunk kell a csomag &ouml;ssze&aacute;ll&iacute;t&aacute;s&aacute;hoz! B&aacute;rmikor k&eacute;rheted a dobozt, amikor a webshopunk nyitva van, vagyis rendel&eacute;si időszak van! <strong>Fontos inform&aacute;ci&oacute;, hogy az aj&aacute;nd&eacute;kkupon maximum 3 h&oacute;napig &eacute;rv&eacute;nyes! </strong></p>\r\n<p><strong>Ne habozz! Vedd &aacute;t az aj&aacute;nd&eacute;kod, v&aacute;ltsd be a kuponodat! </strong>Klikkelj az al&aacute;bbi linkre <a href="http://goodiebox.hu">http://goodiebox.hu</a> &eacute;s keresd az <strong>&bdquo;Aj&aacute;nd&eacute;kbev&aacute;lt&aacute;s&rdquo;</strong> gombot!</p>\r\n<p>B&aacute;rmilyen k&eacute;rd&eacute;sed van az aj&aacute;nd&eacute;kbev&aacute;lt&aacute;ssal kapcsolatban, nyugodtan keress minket az al&aacute;bbi e-mail c&iacute;men:<a href="mailto:info@goodiebox.hu">info@goodiebox.hu</a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Ne felejtsd el felh&iacute;vni a bar&aacute;todat, hogy megk&ouml;sz&ouml;nhesd neki a kedves meglepet&eacute;st! :)</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Sz&eacute;p napot!</p>\r\n<p>&nbsp;</p>\r\n<p>Goodiebox</p>\r\n<p>&nbsp;</p>\r\n<p>E-mail: <a href="mailto:info@goodiebox.hu">info@goodiebox.hu</a></p>\r\n<p>Weboldal: <a href="http://goodiebox.hu">http://goodiebox.hu</a></p>\r\n<p>Facebook: <a href="http://facebook.com/goodieboxhu">http://facebook.com/goodieboxhu</a></p>'),
(4, 4, '<p>Hello,</p>\r\n<p><strong>A bar&aacute;tod, [friend] gondolt r&aacute;d &eacute;s meg szeretne h&iacute;vni, hogy te is csatlakozz a Goodiebox-hoz! Legyen saj&aacute;t meglepet&eacute;s doboza a Te kutyusodnak is! :)</strong></p>\r\n<p><strong>Hogy mi is pontosan a Goodiebox?&nbsp;</strong></p>\r\n<p>Havonta megrendelhető, 4-5 k&uuml;l&ouml;nb&ouml;ző term&eacute;ket tartalmaz&oacute; meglepet&eacute;s doboz kutyusoknak. Gondosan v&aacute;logatott, pr&eacute;mium term&eacute;keket rejt&uuml;nk bele, hiszen a minős&eacute;g sz&aacute;munkra is nagyon fontos! Szeretn&eacute;nk, ha kuty&aacute;ddal egy&uuml;tt maxim&aacute;lisan el&eacute;gedettek lenn&eacute;tek, &eacute;s &aacute;lland&oacute; tagjai maradn&aacute;tok k&ouml;z&ouml;ss&eacute;g&uuml;nknek!&nbsp;</p>\r\n<p><strong>Mi van a dobozban?</strong></p>\r\n<p>Minden h&oacute;napban m&aacute;s dolgokat rejt a csomag. Kutyusod m&eacute;ret&eacute;t alapul v&eacute;ve v&aacute;logatjuk azt a 4-5 k&uuml;l&ouml;nb&ouml;ző magas minős&eacute;gű term&eacute;ket, amit a dobozba csemp&eacute;sz&uuml;nk nektek (t&aacute;p, snack, j&aacute;t&eacute;k, vitamin, kieg&eacute;sz&iacute;tő, esetenk&eacute;nt valami apr&oacute;s&aacute;got a gazdinak is).</p>\r\n<p><strong>Hogyan tudsz rendelni?</strong></p>\r\n<p><strong>Klikkelj az al&aacute;bbi linkre </strong><a href="http://goodiebox.hu">http://goodiebox.hu</a><strong> &eacute;s m&aacute;r ott is vagy a weboldalunkon! Nyugodtan b&ouml;ng&eacute;ssz, olvass el mindent &eacute;s b&aacute;rmilyen k&eacute;rd&eacute;sed van a rendel&eacute;ssel vagy egy&eacute;b funkci&oacute;kkal kapcsolatban, ne habozz &iacute;rni nek&uuml;nk az </strong><a href="mailto:info@goodiebox.hu">info@goodiebox.hu</a><strong> e-mail c&iacute;mre.</strong></p>\r\n<p><strong>Ha m&aacute;r regisztr&aacute;lt tagunk vagy, lehetős&eacute;ged lesz neked is megh&iacute;vni a bar&aacute;taidat!</strong> Ha ők is rendelnek, ut&aacute;nuk kedvezm&eacute;nyed &iacute;r&oacute;dik j&oacute;v&aacute;, amit nyomon tudsz k&ouml;vetni a saj&aacute;t profilodban &eacute;s b&aacute;rmikor be is v&aacute;lthatod egy &uacute;j doboz rendel&eacute;s&eacute;n&eacute;l. &Eacute;rdemes azonban kiv&aacute;rni, m&iacute;g sok bar&aacute;tod rendel, hiszen &iacute;gy ak&aacute;r <strong>ingyen Goodiebox</strong>-hoz is juthatsz, ami szerint&uuml;nk nagyon szuper! :)</p>\r\n<p><strong>Csatlakozz a Goodiebox Facebook oldal&aacute;hoz is! </strong>Gyere &eacute;s nyomj egy like-ot r&aacute;nk, olvasgasd a h&iacute;reket &eacute;s tudj meg mindent elsők&eacute;zből, ami a weboldallal kapcsolatos! Legy&eacute;l tagja egy lelkes k&ouml;z&ouml;ss&eacute;gnek, akik im&aacute;dj&aacute;k a kutyusaikat, &iacute;gy mindig van miről csever&eacute;szni! Klikkelj a <a href="http://facebook.com/goodieboxhu">http://facebook.com/goodieboxhu</a> linkre &eacute;s kezdj el b&ouml;ng&eacute;szni!&nbsp;:)</p>\r\n<p>Sz&eacute;p napot!</p>\r\n<p>Goodiebox</p>\r\n<p>E-mail: <a href="mailto:info@goodiebox.hu">info@goodiebox.hu</a></p>\r\n<p>Weboldal: <a href="http://goodiebox.hu">http://goodiebox.hu</a></p>\r\n<p>Facebook: <a href="http://facebook.com/goodieboxhu">http://facebook.com/goodieboxhu</a></p>');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=7 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

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
  `total_price` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `invoice_num` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `friend_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=268 ;

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
  `enabled` int(1) NOT NULL DEFAULT '0',
  `product_number` varchar(10) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `weight`, `price`, `enabled`, `product_number`) VALUES
(1, '1 hónap', '0', '7990', 1, 'GBX01'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=82 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=104 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `customer_firstname`, `customer_lastname`, `customer_telephone`, `customer_zip`, `customer_city`, `customer_address`, `customer_address2`, `customer_company`, `customer_taxcode`, `logins`, `last_login`) VALUES
(11, 'admin', 'cc1ac36745ac451101bce0f28e0c0f052baeae28a64ff4004ca135bc91aebb5a', 'alexander.karamushko@gmail.com', '', '', '', '', '', '', '', '', '', 64, '1413827476');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

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
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `invites`
--
ALTER TABLE `invites`
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
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `invites`
--
ALTER TABLE `invites`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=268;
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
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `user_shelter`
--
ALTER TABLE `user_shelter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- Ограничения внешнего ключа таблицы `discounts`
--
ALTER TABLE `discounts`
ADD CONSTRAINT `discounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
