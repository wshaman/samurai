-- MySQL dump 10.13  Distrib 5.1.38, for unknown-linux-gnu (x86_64)
--
-- Host: localhost    Database: db002
-- ------------------------------------------------------
-- Server version	5.1.38

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
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (14,13,NULL,NULL,'index',9,10),(13,9,NULL,NULL,'Menus',8,13),(12,10,NULL,NULL,'checkSession',5,6),(10,9,NULL,NULL,'Pages',2,7),(9,NULL,NULL,NULL,'controllers',1,112),(11,10,NULL,NULL,'display',3,4),(15,13,NULL,NULL,'checkSession',11,12),(16,9,NULL,NULL,'Dgroups',14,29),(17,16,NULL,NULL,'index',15,16),(18,16,NULL,NULL,'admin_index',17,18),(19,16,NULL,NULL,'admin_delete',19,20),(20,16,NULL,NULL,'admin_new',21,22),(21,16,NULL,NULL,'admin_edit',23,24),(22,16,NULL,NULL,'admin_save',25,26),(23,16,NULL,NULL,'checkSession',27,28),(24,9,NULL,NULL,'Mains',30,39),(25,24,NULL,NULL,'index',31,32),(26,24,NULL,NULL,'admin_index',33,34),(27,24,NULL,NULL,'ajax_cart',35,36),(28,24,NULL,NULL,'checkSession',37,38),(29,9,NULL,NULL,'Dishes',40,53),(30,29,NULL,NULL,'admin_index',41,42),(31,29,NULL,NULL,'admin_new',43,44),(32,29,NULL,NULL,'admin_edit',45,46),(33,29,NULL,NULL,'admin_delete',47,48),(34,29,NULL,NULL,'admin_save',49,50),(35,29,NULL,NULL,'checkSession',51,52),(36,9,NULL,NULL,'Cnews',54,67),(37,36,NULL,NULL,'admin_index',55,56),(38,36,NULL,NULL,'admin_new',57,58),(39,36,NULL,NULL,'admin_edit',59,60),(40,36,NULL,NULL,'admin_delete',61,62),(41,36,NULL,NULL,'admin_save',63,64),(42,36,NULL,NULL,'checkSession',65,66),(43,9,NULL,NULL,'Groups',68,81),(44,43,NULL,NULL,'index',69,70),(45,43,NULL,NULL,'view',71,72),(46,43,NULL,NULL,'add',73,74),(47,43,NULL,NULL,'edit',75,76),(48,43,NULL,NULL,'delete',77,78),(49,43,NULL,NULL,'checkSession',79,80),(50,9,NULL,NULL,'Gbooks',82,97),(51,50,NULL,NULL,'index',83,84),(52,50,NULL,NULL,'add',85,86),(53,50,NULL,NULL,'admin_index',87,88),(54,50,NULL,NULL,'admin_edit',89,90),(55,50,NULL,NULL,'admin_save',91,92),(56,50,NULL,NULL,'save',93,94),(57,50,NULL,NULL,'checkSession',95,96),(58,9,NULL,NULL,'Users',98,111),(59,58,NULL,NULL,'test',99,100),(60,58,NULL,NULL,'login',101,102),(61,58,NULL,NULL,'admin_login',103,104),(62,58,NULL,NULL,'logout',105,106),(63,58,NULL,NULL,'build_acl',107,108),(64,58,NULL,NULL,'checkSession',109,110);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (3,2,'User',1,'admin',4,5),(2,NULL,'Group',1,'admins',3,6);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,2,9,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cnews`
--

DROP TABLE IF EXISTS `cnews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cnews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caption` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `pre` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cnews`
--

LOCK TABLES `cnews` WRITE;
/*!40000 ALTER TABLE `cnews` DISABLE KEYS */;
INSERT INTO `cnews` VALUES (2,'Тест01','Многабукаф','Малобукаф','63b9666a35102fab091712a5edf13487','2009-10-03 17:00:00'),(4,'Тест03','ывапывапвыапы','аываываыв','b94014ed1f6367ed20cbce14b0e10a6f','2009-10-04 10:10:50');
/*!40000 ALTER TABLE `cnews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dgroups`
--

DROP TABLE IF EXISTS `dgroups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dgroups` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `show_on_main` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dgroups`
--

LOCK TABLES `dgroups` WRITE;
/*!40000 ALTER TABLE `dgroups` DISABLE KEYS */;
INSERT INTO `dgroups` VALUES (1,'ЭэээБУКВЫ!','JgbcFние',1),(2,'НаборБукаффф','ПРОПРЛвпавыпаваj',1),(3,'Прроверка3_','frrrrrrrrrrr',1),(4,'test005','jhyuyr',0);
/*!40000 ALTER TABLE `dgroups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dishes`
--

DROP TABLE IF EXISTS `dishes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dishes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `dgroup_id` int(5) unsigned NOT NULL,
  `cost` float unsigned NOT NULL COMMENT 'Стоимость порции',
  `weight` int(5) unsigned NOT NULL COMMENT 'вес в гр.',
  `cost_half` float unsigned NOT NULL COMMENT 'Стоимость половины порции',
  `weight_half` int(5) NOT NULL COMMENT 'вес в гр. половины порции',
  `image` varchar(50) NOT NULL COMMENT 'Имя картинки',
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dishes`
--

LOCK TABLES `dishes` WRITE;
/*!40000 ALTER TABLE `dishes` DISABLE KEYS */;
INSERT INTO `dishes` VALUES (1,'Круглая штука',1,342.45,23,202.45,11,'250130a14fcee8fdc786e44692eaaa0f','Ну, она такая круглая!'),(2,'test02',2,32,123,0,0,'397c4a008ab35a45cb35d2107ff15041','dfsdfas'),(3,'rrrrrrrrrr',3,0,0,0,0,'4281c43438eadf5e25fb1664c339112b','treterterter'),(4,'gfdasd',1,0,0,0,0,'63f8c193f9771108ad6d471fe8ef067f','sdfgsdfgsd');
/*!40000 ALTER TABLE `dishes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gbooks`
--

DROP TABLE IF EXISTS `gbooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gbooks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `answer` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(80) NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gbooks`
--

LOCK TABLES `gbooks` WRITE;
/*!40000 ALTER TABLE `gbooks` DISABLE KEYS */;
INSERT INTO `gbooks` VALUES (1,'А что это ваще?','Это сайт.','2009-10-08 16:33:37','ананым',1),(2,'Это канал про аниме?\r\nА как пропатчить кде2 под фрибсд?','','2009-10-08 17:49:31','Любопытный',0);
/*!40000 ALTER TABLE `gbooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admins','0000-00-00 00:00:00',NULL),(2,'admins','2009-10-09 02:47:48',NULL);
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'samurai',1,'8522fb228dc0f15488fb6610d0418dd7243102f4');
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

-- Dump completed on 2009-10-09 19:01:44
