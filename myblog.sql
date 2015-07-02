-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: myblog
-- ------------------------------------------------------
-- Server version	5.5.43-0+deb7u1

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id_comments` int(11) NOT NULL AUTO_INCREMENT,
  `id_entries` int(11) DEFAULT NULL,
  `comment_text` text,
  `comment_date` datetime DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_comments`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (19,1,'I like the Monique stories, but you should be ashamed about Jean-Claude. Monique should divorce him','2015-07-01 16:35:00',3),(20,1,'Nobody cares about your vacation stories','2015-07-01 16:58:32',5),(21,9,'They should stop wasting tax payer money on this war','2015-07-01 16:58:59',5),(22,11,'This is a scandal, they should be ...','2015-07-01 16:59:33',5),(23,9,'The government should do something while I read this news','2015-07-01 17:00:43',4),(24,10,'These are all a bunch of analphabets','2015-07-01 17:01:29',4),(25,1,'We will not tolerate this news. To our brothers and sisters fighting for the sake of healthy vacation, we are going to make your site go down.\r\nMay the Mettwurst illuminate teh path','2015-07-01 17:09:13',6);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entries`
--

DROP TABLE IF EXISTS `entries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entries` (
  `id_entries` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `position` varchar(10) DEFAULT NULL,
  `entry_text` longtext,
  `entry_date` date DEFAULT NULL,
  PRIMARY KEY (`id_entries`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entries`
--

LOCK TABLES `entries` WRITE;
/*!40000 ALTER TABLE `entries` DISABLE KEYS */;
INSERT INTO `entries` VALUES (1,'Summer Vacation','myblog_1.jpg','left','Summer vacation starts this year on July 16 and ends on September 15. Like every year we will be following Monique and Jean-Claude in their trip to Malaga. Will Jean-Claude try to seduce other women this year again?','2015-07-02'),(9,'War memorial place Guillaume','myblog_5.jpg','left','The war, launched by Luxembourg as \"Operation Gromperekichelcher\" in 2012, began with an initial air campaign that almost immediately prompted concerns over the number of civilians being killed as well as international protests. The governement decided to send reinforcement to replace the soldier casualties.','2015-07-01'),(10,'War still raging in occupied Glacis','myblog_4.jpg','right','In 2014 war resulted in 31,000 deaths down from 72,000 deaths in 2013. The deadliest war in history, in terms of the cumulative number of deaths since its start, is the \"Gromperekichelcher war\", with 60â€“85 million deaths, followed by the \"Metwurscht invasion\" which was greater than 41 million. Luxembourg soldiers are still fighting the holy Gromperekichelcher war against our enemies.','2015-06-29'),(11,'Terrorist attack on the Glacis','myblog_3.jpg','left','The Glacis bombing, yesterday evening, has been of a rare violence compared to terrorist bomb attack on Zapata Building downtown. The police is interrogating the current suspectsThe blast destroyed or damaged 324 buildings within a 16-block radius, destroyed or burned 86 cars, and shattered glass in 258 nearby buildings, causing an estimated 652â‚¬ million worth of damage. Extensive rescue efforts have been undertaken by local, national and worldwide agencies in the wake of the bombing, and substantial donations were received from across the country.','2015-06-27');
/*!40000 ALTER TABLE `entries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','supersecret','piti@pt.lu'),(2,'piti','supersecret','piti@pt.lu'),(3,'maisy','unicorn23','maisy@pt.lu'),(4,'jemp','xblaster','jemp@gmail.com'),(5,'thierry','triumph','thierry.grandbuisson@hotmail.com'),(6,'xxx','bomb','xxx@yyy.xyz');
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

-- Dump completed on 2015-07-02 13:02:47
