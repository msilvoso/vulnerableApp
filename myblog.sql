SET NAMES utf8;

--
-- Table structure for table `comments`
--

CREATE DATABASE IF NOT EXISTS myblog;
USE myblog;

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'This is great <3 we are all going to be famous :)','2011-12-23 20:05:39',3),(2,2,'Don\'t be. Life is beautiful. We all love you <3','2011-12-28 23:23:23',3),(3,5,'I did not understand this <3','2012-01-05 14:02:24',3),(4,6,'You are very intelligent <3 :)','2012-01-06 14:54:58',3),(5,1,'What for? What crap are you going to put on your blog?','2011-12-24 11:23:45',4),(6,3,'Happy too!','2012-01-01 13:27:54',4),(7,2,'Haha. Emo!','2011-12-29 11:11:11',4),(8,4,'Name it after your dog.','2012-01-04 12:43:32',4),(9,6,'Mr Knowitall!','2012-01-06 17:14:32',4),(10,3,'Happy new and safe year!','2012-01-01 14:34:23',5),(11,2,'Buy a bike and drive around :)','2011-12-30 16:47:27',5),(12,6,'Whatever.','2012-01-07 09:45:13',5),(13,5,'????','2012-01-05 17:52:56',5),(14,3,'Happy new year. Kisses OXOXOXOXO','2012-01-01 15:12:21',3),(15,3,'Thank you Guys! You are great!!','2012-01-06 15:07:14',1);
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
  `entry_text` text,
  `entry_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_entries`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entries`
--

LOCK TABLES `entries` WRITE;
/*!40000 ALTER TABLE `entries` DISABLE KEYS */;
INSERT INTO `entries` VALUES (1,'Hello this is my first blog. I\'m a bit shy about it but will tell everybody how I feel deep inside me. I may hurt some feelings Sorry <3 :*','2011-12-23 17:14:32'),(2,'I\'m feeling sad today. The sun is shining, the birds are singing but I have no money :(\r\nPerhaps I could sell my super blog application to Mark Zuckerberg :)','2011-12-28 09:45:13'),(3,'It\'s a breeze Sunday morning and everything looks great here..\r\n\r\nWait.. of course, it\'s New Year\r\n\r\nPlease welcome 2012 and say good bye to 2011. It\'s been a wonderful year of 2011. Lots of joy and sorrow mixed last year, but that\'s already in the past and never regret anything you have done in the past. The only thing you should do now is look for the future which awaits us.\r\n\r\n<span style=\'font-size:x-large;color:red;\'>Happy New Year to You All</span>','2012-01-01 12:17:04'),(4,'If you’re wondering How to name my blog, the following tips will facilitate the task.\r\n\r\nWhen creating a blog or buying a domain, we have to think of a good name, which may be difficult considering that the number of existing domains is increasing or that the chosen one is already taken.\r\n\r\nTake time to find a good name for your blog, because it will be the image, presentation, and the idea, that visitors will have before entering the blog.  Don’t forget that an attractive name will spark more curiosity to visit it.\r\n\r\n•                    But … How to name my blog? First, decide what your blog will be and focus on one issue instead of covering many topics.   This is more effective in crating loyalty form your visitors.\r\n\r\n•                    Use a short and easy to remember name. It’s best if It´s written as it is pronounced. If people can know what the blog is about just by reading the name, the more likely you will be visited.\r\n\r\n•                    The name of your blog should be equal to the domain name. This is a rule often ignored by people, probably because the search for a suitable domain that has not yet been registered, is a difficult task. If your domain name doesn’t match the name of the blog, you may lose some readers along the way.\r\n\r\n•                    It’s advantageous if your Bogs’ name contains keywords to facilitate indexing in search engines. If your blog is about cars, the title must refer to cars.','2012-01-02 14:54:58'),(5,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget eros elit, eu eleifend leo. Donec fermentum viverra sodales. Aliquam odio elit, vulputate et commodo at, auctor ut mi. Nulla gravida volutpat accumsan. Aliquam ac libero sem. Vivamus sed urna dui, et facilisis arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque blandit egestas tellus.\r\n\r\nSed eget nisl vitae dui porta ullamcorper. Nunc sit amet lacus eros. In posuere dolor a quam tincidunt ac pulvinar dui vulputate. Donec eget velit vitae ipsum ultrices dapibus. Praesent interdum suscipit dignissim. Integer quis ullamcorper eros. Mauris sapien purus, auctor nec posuere id, euismod ut felis. Ut condimentum elit id nisi volutpat id porta massa eleifend. Praesent malesuada lorem sed augue mattis interdum.\r\n\r\nMaecenas nisl est, convallis et dapibus ac, vehicula et risus. Curabitur eu turpis nunc, ac rhoncus odio. Nam eu aliquam lacus. Nam in nibh nec turpis auctor lobortis sed ac urna. Nullam lacus eros, laoreet et vehicula id, faucibus non nibh. Proin libero augue, dapibus in venenatis vel, iaculis non nibh. Suspendisse tempor molestie viverra. Etiam pulvinar lacus in orci suscipit sodales.\r\n\r\nAenean suscipit pretium venenatis. Sed tristique neque at nulla facilisis sagittis. Praesent et eros vel mi suscipit vehicula. Etiam sollicitudin sollicitudin odio, sit amet semper mi rhoncus at. Mauris placerat fermentum augue ut bibendum. Curabitur congue elit eu tortor tincidunt elementum. Nulla tempor, arcu in tempus hendrerit, erat justo pretium nunc, eu adipiscing enim ligula a dui. Sed vitae elit nec risus laoreet iaculis sed a eros. Suspendisse potenti. Integer ultricies mauris sit amet leo pharetra malesuada ac a mi. Nam nec eros tortor. Praesent urna elit, faucibus nec adipiscing sit amet, iaculis vitae ligula.\r\n\r\nPraesent faucibus quam id lacus malesuada condimentum. Morbi ultrices risus in felis mattis eu adipiscing felis bibendum. Integer lacus augue, semper in feugiat id, fermentum quis odio. Morbi nibh nunc, volutpat sed aliquam ut, vestibulum sed sapien. Quisque mi turpis, varius id ullamcorper at, vestibulum quis magna. Aliquam erat volutpat. Nullam eget quam et massa fermentum sodales sit amet nec mi. Pellentesque dignissim, nisl sit amet vestibulum dapibus, felis odio porta augue, iaculis volutpat lectus velit fringilla dui.','2012-01-05 11:32:01'),(6,'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \'de Finibus Bonorum et Malorum\' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \'Lorem ipsum dolor sit amet..\', comes from a line in section 1.10.32.','2012-01-06 12:24:12');
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'piti','supersecret','piti@pt.lu'),(2,'admin','supersecret','piti@pt.lu'),(3,'maisy','unicorn23','maisy@pt.lu'),(4,'jemp','xblaster','jemp@gmail.com'),(5,'thierry','triumph','thierry.grandbuisson@hotmail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

UNLOCK TABLES;

GRANT ALL PRIVILEGES ON myblog.* TO myblog@localhost IDENTIFIED BY 'myblog';
FLUSH PRIVILEGES;
