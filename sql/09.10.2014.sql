-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: goodiebox
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `address_book`
--

DROP TABLE IF EXISTS `address_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address_book` (
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
  KEY `user_id` (`user_id`),
  CONSTRAINT `address_book_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address_book`
--

LOCK TABLES `address_book` WRITE;
/*!40000 ALTER TABLE `address_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `address_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `message` text COLLATE utf8_swedish_ci NOT NULL,
  `date` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `replied` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_templates`
--

DROP TABLE IF EXISTS `email_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(1) NOT NULL,
  `template_text` text COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_templates`
--

LOCK TABLES `email_templates` WRITE;
/*!40000 ALTER TABLE `email_templates` DISABLE KEYS */;
INSERT INTO `email_templates` VALUES (1,1,'<p>Dear [firstname],</p>\r\n<p>Thank you very much for the registring with Goodiebox.</p>\r\n<p>You may now login at&nbsp;http://goodiebox.karam.org.ua/user_session/login</p>\r\n<p>Your login: [login]</p>\r\n<p>Password: password that you\'ve selected during the registration.</p>\r\n<div>E-mail:&nbsp;<a href=\"mailto:info@goodiebox.hu\" target=\"_blank\">info@goodiebox.hu</a></div>\r\n<div>Weboldal:&nbsp;<a href=\"/\" target=\"_blank\">http://goodiebox.hu</a></div>\r\n<p>&nbsp;</p>'),(2,2,'<p>Kedves [firstname]!</p>\r\n<div>&nbsp;</div>\r\n<div>K&ouml;sz&ouml;nj&uuml;k, hogy megrendelted a Goodiebox-ot! Rem&eacute;lj&uuml;k, hogy sok &ouml;r&ouml;m&ouml;t szerz&uuml;nk kutyusodnak &eacute;s neked!</div>\r\n<div>&nbsp;</div>\r\n<div>Ne felejtsd el: \"&Uacute;j h&oacute;nap, &uacute;jabb Goodiebox!\"</div>\r\n<div>&nbsp;</div>\r\n<div>V&aacute;runk vissza!</div>\r\n<div>&nbsp;</div>\r\n<div>Goodiebox csapat</div>\r\n<div>&nbsp;</div>\r\n<div>E-mail:&nbsp;<a href=\"mailto:info@goodiebox.hu\" target=\"_blank\">info@goodiebox.hu</a></div>\r\n<div>Weboldal:&nbsp;<a href=\"/\" target=\"_blank\">http://goodiebox.hu</a></div>'),(3,3,'<div>\r\n<div>Kedves [firstname]!</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div>K&ouml;sz&ouml;nj&uuml;k, hogy megrendelted a Goodiebox-ot! Rem&eacute;lj&uuml;k, hogy sok &ouml;r&ouml;m&ouml;t szerz&uuml;nk bar&aacute;todnak &eacute;s kutyus&aacute;nak!&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Ha magadat jel&ouml;lted meg az aj&aacute;nd&eacute;k kupon k&oacute;d &aacute;tvevőjek&eacute;nt, akkor csatoltuk neked ebben az &uuml;zenetben, ha pedig a bar&aacute;todat, akkor m&aacute;r h&iacute;vhatod is, hogy megkapta-e a meglepet&eacute;st?</div>\r\n<div>&nbsp;</div>\r\n<div>Ne felejtsd el: \"&Uacute;j h&oacute;nap, &uacute;jabb Goodiebox!\"</div>\r\n<div>&nbsp;</div>\r\n<div>V&aacute;runk vissza!</div>\r\n<div>&nbsp;</div>\r\n<div>Goodiebox csapat</div>\r\n</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<div>E-mail:&nbsp;<a href=\"mailto:info@goodiebox.hu\" target=\"_blank\">info@goodiebox.hu</a></div>\r\n<div>Weboldal:&nbsp;<a href=\"/\" target=\"_blank\">http://goodiebox.hu</a></div>\r\n</div>\r\n</div>\r\n<div>&nbsp;</div>');
/*!40000 ALTER TABLE `email_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friend`
--

DROP TABLE IF EXISTS `friend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `friends_email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `friends_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `selected_box` int(1) NOT NULL,
  `coupon_code` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `date_purchased` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `friend_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friend`
--

LOCK TABLES `friend` WRITE;
/*!40000 ALTER TABLE `friend` DISABLE KEYS */;
INSERT INTO `friend` VALUES (1,30,'alexander.karamushko@gmail.com','Alex Karamushko',1,'','2014-10-07 16:22:17');
/*!40000 ALTER TABLE `friend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invites`
--

DROP TABLE IF EXISTS `invites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `is_registered` int(1) NOT NULL DEFAULT '0',
  `is_used` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `invites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invites`
--

LOCK TABLES `invites` WRITE;
/*!40000 ALTER TABLE `invites` DISABLE KEYS */;
INSERT INTO `invites` VALUES (1,30,'alexander.karamushko@ecommerce.com',1,1),(3,30,'karam@karam.org.ua',1,1);
/*!40000 ALTER TABLE `invites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_statuses`
--

DROP TABLE IF EXISTS `order_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_statuses` (
  `type` int(1) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_statuses`
--

LOCK TABLES `order_statuses` WRITE;
/*!40000 ALTER TABLE `order_statuses` DISABLE KEYS */;
INSERT INTO `order_statuses` VALUES (1,'Pending'),(2,'Processing'),(3,'Shipped'),(4,'Done'),(6,'Declined');
/*!40000 ALTER TABLE `order_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
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
  `message` text COLLATE utf8_swedish_ci NOT NULL,
  `payment_status` int(1) NOT NULL,
  `discount` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `puppy_id` (`puppy_id`),
  KEY `orders_status` (`orders_status`),
  KEY `selected_box` (`selected_box`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`orders_status`) REFERENCES `order_statuses` (`type`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`selected_box`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (9,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+380975231602','','','',1,1,NULL,'2014-10-07 16:08:50','2014-10-07 16:08:50','asdadsasd',0,0),(10,30,1,0,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+380975231602','','','',2,1,NULL,'2014-10-07 16:22:17','2014-10-07 16:22:17','',1,0),(11,31,1,3,'Dmitriy','Pavlov','Koscmiadsassd','','Zaporizhzhya','69050','+380975231602','','','EA14Zhfm',1,1,NULL,'2014-10-07 16:38:39','2014-10-07 16:38:39','',0,0),(12,30,1,0,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+380975231602','','','',3,1,2,'2014-10-07 17:48:42','2014-10-07 17:48:42','',1,0),(13,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+380975231602','','','',1,1,NULL,'2014-10-07 18:14:50','2014-10-07 18:14:50','',0,0),(14,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+36 80 975-23-16','','','',1,1,NULL,'2014-10-09 09:18:54','2014-10-09 09:18:54','',0,0),(15,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+36 80 975-23-16','','','',1,1,NULL,'2014-10-09 09:20:47','2014-10-09 09:20:47','',0,0),(16,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+36 80 975-23-16','','','',1,1,NULL,'2014-10-09 09:21:04','2014-10-09 09:21:04','',0,0),(17,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+36 80 975-23-16','','','',1,1,NULL,'2014-10-09 09:22:14','2014-10-09 09:22:14','',0,0),(18,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+36 80 975-23-16','','','',1,1,NULL,'2014-10-09 09:22:31','2014-10-09 09:22:31','',0,0),(19,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+36 80 975-23-16','','','',1,1,NULL,'2014-10-09 09:22:50','2014-10-09 09:22:50','',0,0),(20,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+36 80 975-23-16','','','',1,1,NULL,'2014-10-09 09:24:04','2014-10-09 09:24:04','',0,0),(22,33,1,5,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','53440','+36 11 111-11-11','','','',1,1,NULL,'2014-10-09 10:39:08','2014-10-09 10:39:08','',0,0),(23,34,1,6,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+36 11 111-11-11','','','',1,1,NULL,'2014-10-09 16:54:17','2014-10-09 16:54:17','',1,0),(24,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+36 80 975-23-16','','','',1,1,NULL,'2014-10-09 18:58:39','2014-10-09 18:58:39','',0,0),(25,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+36 80 975-23-16','','','',1,1,NULL,'2014-10-09 19:01:12','2014-10-09 19:01:12','',0,1),(26,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+36 80 975-23-16','','','',1,1,NULL,'2014-10-09 19:02:49','2014-10-09 19:02:49','',0,1),(27,30,1,2,'Alex','Karamushko','Kosmicheskaya 100, 33','','Zaporizhzhya','69050','+36 80 975-23-16','','','',1,1,NULL,'2014-10-09 19:03:37','2014-10-09 19:03:37','',1,1);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `weight` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `price` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  `enabled` int(1) NOT NULL DEFAULT '0',
  `product_number` varchar(10) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` VALUES (1,'1 hónap','0','8250',1,'IC01'),(2,'3 hónap','0','15',0,'IC03'),(3,'6 hónap','0','20',0,'IC06');
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puppies`
--

DROP TABLE IF EXISTS `puppies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puppies` (
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
  KEY `user_id` (`user_id`),
  CONSTRAINT `puppies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puppies`
--

LOCK TABLES `puppies` WRITE;
/*!40000 ALTER TABLE `puppies` DISABLE KEYS */;
INSERT INTO `puppies` VALUES (2,30,'Giraf',0,1994,1,0,'',1),(3,31,'Bobik',0,1994,1,1,'',1),(5,33,'Giraf',0,1994,1,0,'',1),(6,34,'Tuzik',0,1994,1,0,'',1);
/*!40000 ALTER TABLE `puppies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'login','Login privileges, granted after account confirmation'),(2,'admin','Administrative user, has access to everything.');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_users`
--

DROP TABLE IF EXISTS `roles_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_users`
--

LOCK TABLES `roles_users` WRITE;
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;
INSERT INTO `roles_users` VALUES (11,1),(30,1),(31,1),(33,1),(34,1),(11,2);
/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shelter_dog`
--

DROP TABLE IF EXISTS `shelter_dog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shelter_dog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `shelter_id` int(11) NOT NULL,
  `doggy_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `doggy_gender` int(1) NOT NULL,
  `selected_size` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `shelter_id` (`shelter_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `shelter_dog_ibfk_1` FOREIGN KEY (`shelter_id`) REFERENCES `shelters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `shelter_dog_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shelter_dog`
--

LOCK TABLES `shelter_dog` WRITE;
/*!40000 ALTER TABLE `shelter_dog` DISABLE KEYS */;
INSERT INTO `shelter_dog` VALUES (2,30,1,'dsasaddasdsadsa',0,1);
/*!40000 ALTER TABLE `shelter_dog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shelters`
--

DROP TABLE IF EXISTS `shelters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shelters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shelter_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shelters`
--

LOCK TABLES `shelters` WRITE;
/*!40000 ALTER TABLE `shelters` DISABLE KEYS */;
INSERT INTO `shelters` VALUES (1,'test111','test1@test1.com'),(2,'test2111','test2@test2.com');
/*!40000 ALTER TABLE `shelters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_shelter`
--

DROP TABLE IF EXISTS `user_shelter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_shelter` (
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
  KEY `dog` (`dog`),
  CONSTRAINT `user_shelter_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_shelter_ibfk_2` FOREIGN KEY (`dog`) REFERENCES `shelters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_shelter`
--

LOCK TABLES `user_shelter` WRITE;
/*!40000 ALTER TABLE `user_shelter` DISABLE KEYS */;
INSERT INTO `user_shelter` VALUES (2,30,2,1,'','','','','','2014-10-07 17:48:42','2014-10-07 17:48:42');
/*!40000 ALTER TABLE `user_shelter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_tokens`
--

DROP TABLE IF EXISTS `user_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) CHARACTER SET utf8 NOT NULL,
  `token` varchar(40) CHARACTER SET utf8 NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`),
  CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_tokens`
--

LOCK TABLES `user_tokens` WRITE;
/*!40000 ALTER TABLE `user_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
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
  `last_login` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_email` (`username`),
  KEY `users_index` (`id`),
  KEY `fk_users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (11,'admin','a28a4e5e5fc383d1bbb2be9aafa1e2933d4b00d990e63e1d1b2527a37b0db2d6','alexander.karamushko@gmail.com','','','','','','','','','',30,'1412683072'),(30,'alex@onlamp.info','89ddc819e76bc719443d20d0b43d7c7e50133de5ae22afdcb7d3b86de32bb505','alex@onlamp.info','Alex','Karamushko','+380975231602','69050','Zaporizhzhya','Kosmicheskaya 100, 33','','','',12,'1412881081'),(31,'dethmix@gmail.com','89ddc819e76bc719443d20d0b43d7c7e50133de5ae22afdcb7d3b86de32bb505','dethmix@gmail.com','Dmitriy','Pavlov','+380975231602','69050','Zaporizhzhya','Koscmiadsassd','','','',3,'1412850590'),(33,'alexander.karamushko@ecommerce.com','89ddc819e76bc719443d20d0b43d7c7e50133de5ae22afdcb7d3b86de32bb505','alexander.karamushko@ecommerce.com','Alex','Karamushko','+36 11 111-11-11','53440','Zaporizhzhya','Kosmicheskaya 100, 33','','','',1,'1412851148'),(34,'karam@karam.org.ua','89ddc819e76bc719443d20d0b43d7c7e50133de5ae22afdcb7d3b86de32bb505','karam@karam.org.ua','Alex','Karamushko','+36 11 111-11-11','69050','Zaporizhzhya','Kosmicheskaya 100, 33','','','',1,'1412873656');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-09 22:09:49
