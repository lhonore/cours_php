-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: stage
-- ------------------------------------------------------
-- Server version	5.5.47-0+deb8u1

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
-- Current Database: `stage`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `stage` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `stage`;

--
-- Table structure for table `logins`
--

DROP TABLE IF EXISTS `logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logins` (
  `login` varchar(10) COLLATE latin1_general_cs NOT NULL,
  `password` varchar(32) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logins`
--

LOCK TABLES `logins` WRITE;
/*!40000 ALTER TABLE `logins` DISABLE KEYS */;
INSERT INTO `logins` VALUES ('bob','azert'),('curt','qwerty'),('pat','etoile'),('toto','tutu');
/*!40000 ALTER TABLE `logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES ('2016-03-31 14:27:00','Connexion de bob'),('2016-03-31 14:28:35','Connexion de bob'),('2016-03-31 14:40:30','Connexion de bob'),('2016-03-31 14:40:55','Connexion de bob'),('2016-03-31 14:42:18','Connexion de bob'),('2016-03-31 14:45:22','Connexion de bob'),('2016-04-01 09:32:48','Connexion de bob'),('2016-04-01 09:33:19','Connexion de bob'),('2016-04-01 09:36:39','Connexion de bob'),('2016-04-01 09:37:41','Connexion de bob'),('2016-04-01 09:46:28','Connexion de bob'),('2016-04-01 09:48:14','Connexion de bob'),('2016-04-01 09:48:29','Connexion de bob'),('2016-04-01 09:50:04','Connexion de bob'),('2016-04-01 09:51:33','Connexion de bob'),('2016-04-01 09:52:53','Connexion de bob'),('2016-04-01 09:59:04','Connexion de bob'),('2016-04-01 10:16:12','Connexion de bob'),('2016-04-01 10:17:15','Connexion de bob'),('2016-04-01 10:30:32','Connexion de bob'),('2016-04-01 10:31:53','Connexion de bob'),('2016-04-01 12:03:19','Connexion de bob'),('2016-04-01 12:07:11','Connexion de bob'),('2016-04-01 12:11:17','Connexion de bob'),('2016-04-01 12:25:55','Connexion de bob'),('2016-04-01 12:26:11','Connexion de bob'),('2016-04-01 12:52:02','Connexion de bob'),('2016-04-01 13:56:46','Connexion de bob');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-01 16:32:35
