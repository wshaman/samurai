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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dgroups`
--

LOCK TABLES `dgroups` WRITE;
/*!40000 ALTER TABLE `dgroups` DISABLE KEYS */;
INSERT INTO `dgroups` VALUES (1,'ЭэээБУКВЫ!','JgbcFние',0),(2,'НаборБукаффф','ПРОПРЛвпавыпава',1),(3,'Прроверка3_','frrrrrrrrrrr',1);
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
  `dgroups_id` int(5) unsigned NOT NULL,
  `cost` float unsigned NOT NULL COMMENT 'Стоимость порции',
  `weight` int(5) unsigned NOT NULL COMMENT 'вес в гр.',
  `cost_half` float unsigned NOT NULL COMMENT 'Стоимость половины порции',
  `weight_half` int(5) NOT NULL COMMENT 'вес в гр. половины порции',
  `image` varchar(50) NOT NULL COMMENT 'Имя картинки',
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dishes`
--

LOCK TABLES `dishes` WRITE;
/*!40000 ALTER TABLE `dishes` DISABLE KEYS */;
INSERT INTO `dishes` VALUES (1,'Круглая штука',1,342.45,23,0,0,'d8b9872127267abd99936ba2d55def63','Ну, она такая круглая!'),(2,'jjjjjjjjjjjjjj',0,0,0,0,0,'35d1bc4335ec5bd16c1bc8e6941043fc','hhhhhhhhhhhhhhhhhhh'),(3,'qqqqqqqqqqqq',0,0,0,0,0,'6d225d35ffb926f3a72b60476cf3fd0b','dfsdfsdfsdfsd'),(4,'dfsdf',0,0,0,0,0,'','sgfasdgfasd'),(5,'rgsdg',1,0,0,0,0,'17e311cde2df9c825cd3dd6614f69931','ggs'),(6,'fsdfasdf',1,0,0,0,0,'413e702910d300d2dd50437b13bff070','asdgfasdgasdfgs');
/*!40000 ALTER TABLE `dishes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2009-10-03  2:44:44
