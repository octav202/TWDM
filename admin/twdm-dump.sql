-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: twdm
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `RANKING`
--

DROP TABLE IF EXISTS `RANKING`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RANKING` (
  `rank_id` int(11) NOT NULL AUTO_INCREMENT,
  `player_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RANKING`
--

LOCK TABLES `RANKING` WRITE;
/*!40000 ALTER TABLE `RANKING` DISABLE KEYS */;
INSERT INTO `RANKING` VALUES (1,1,12750),(2,2,12325),(3,3,10500),(4,4,9275),(5,5,8200),(6,6,7950),(7,7,6100),(8,8,5635),(9,9,5500),(10,10,5215);
/*!40000 ALTER TABLE `RANKING` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TOURNAMENT`
--

DROP TABLE IF EXISTS `TOURNAMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TOURNAMENT` (
  `tournament_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `surface` varchar(64) DEFAULT NULL,
  `place` varchar(64) DEFAULT NULL,
  `month` varchar(64) DEFAULT NULL,
  `finance` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`tournament_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TOURNAMENT`
--

LOCK TABLES `TOURNAMENT` WRITE;
/*!40000 ALTER TABLE `TOURNAMENT` DISABLE KEYS */;
INSERT INTO `TOURNAMENT` VALUES (1,'Australian Open','Grand Slam 2000','Outdoor Hard','Melbourne, Australia','January','€20,190,930'),(2,'ABN AMRO World Tennis','ATP 500','Indoor Hard','Rotterdam, Netherlands','February','€1,996,245'),(3,'Rio Open','ATP 500','Outdoor Clay','Rio de Janeiro, Brazil','February','$1,842,475'),(4,'Dubai Duty Free','ATP 500','Outdoor Hard','Dubai, U.A.E','February','$3,057,135'),(5,'BNP Paribas Open','ATP 1000','Outdoor Hard','Indian Wells, U.S.A','March','$8,909,960'),(6,'Miami Open','ATP 1000','Outdoor Hard','Miami, Florida , U.S.A','March','$8,909,960'),(7,'Rolex Monte-Carlo Masters','ATP 1000','Outdoor Clay','Monte Carlo, Monaco','April','€5,238,735'),(8,'Barcelona Open','ATP 500','Outdoor Clay','Barcelona, Spain','April','€2,794,220'),(9,'Mutua Madrid Open','ATP 1000','Outdoor Clay','Madrid, Spain','May','€7,190,930'),(10,'Internazionali BNL ','ATP 1000','Outdoor Clay','Rome, Spain','May','€5,444,985'),(11,'Roland Garros','Grand Slam 2000','Outdoor Clay','Paris, France','April','€20,190,930'),(12,'Gerry Weber Open','ATP 500','Outdoor Grass','Halle, Germany','June','€2,116,915'),(13,'Wimbledon','Grand Slam 2000','Outdoor Grass','London, U.K','July','€20,190,930'),(14,'Rogers Cup','ATP 1000','Outdoor Hard','Toronto, Canada','August','$5,939,970'),(15,'Western & Southern Open','ATP 1000','Outdoor Hard','Cincinnati, U.S.A','August','$6,335,970'),(16,'US Open','Grand Slam 2000','Outdoor Hard','New York, U.S.A','August','€20,190,930'),(17,'China Open','ATP 500','Outdoor Hard','Beijing, China','October','$4,658,510'),(18,'Rakuten Japan Open','ATP 500','Indoor Hard','Tokyo, Japan','October','$1,928,580'),(19,'Rolex Shanghai Masters','ATP 1000','Outdoor Hard','Shanghai, China','October','$9,219,970'),(20,'Swiss Indoors Basel','ATP 500','Indoor Hard','Basel, Switzerland','October','€2,442,740'),(21,'Rolex Paris Masters','ATP 1000','Indoor Hard','Paris, France','October','€5,444,985'),(22,'Nitto ATP Finals','ATP Final','Indoor Hard','London, U.K.','November','€20,190,930');
/*!40000 ALTER TABLE `TOURNAMENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player` (
  `player_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `country` varchar(20) NOT NULL,
  `birthplace` varchar(32) DEFAULT NULL,
  `age` varchar(32) DEFAULT NULL,
  `ranking` varchar(33) DEFAULT NULL,
  `weight` varchar(64) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `coach` varchar(30) DEFAULT NULL,
  `about` varchar(1000) DEFAULT NULL,
  `img` varchar(1000) NOT NULL,
  PRIMARY KEY (`player_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player`
--

LOCK TABLES `player` WRITE;
/*!40000 ALTER TABLE `player` DISABLE KEYS */;
INSERT INTO `player` VALUES (1,'Andy','Murray','GBR','GLASGOW, SCOTLAND','30','1','84KG','1.91','IVAN LENDL ','> Began playing at age 3\r\n> Mother, Judy, who works in tennis and father, William, is a retail area manager; brother, Jamie, also plays on the ATP World Tour\r\n> Grew up playing football and tennis, and was once offered trials with Glasgow Rangers FC\r\n> Loves boxing, football and basketball, and regularly attends Miami Heat games (NBA)\r\n> Based in Barcelona from age 15-17\r\n> Played 1st full men’s singles match with roof closed at Wimbledon on June 29, 2009 vs. Wawrinka\r\n> On March 12, 2013, he was presented the Laureus World Breakthrough of the Year Award\r\n> Featured in GQ Magazine’s “20 Most Stylish Athletes of 2013”\r\n> Received OBE (Officer of the Most Excellent Order of the British Empire) medal from Prince William on Oct. 17, 2013\r\n','img/murray.png'),(2,'Novak','Djokovic','SRB','BELGRADE, SERBIA','29','2','75KG','1.88','Boris Becker','> Nicknamed “Nole”\r\n> Began playing at age 4 and made pro debut at 16\r\n> Father, Srdjan; mother, Dijana; brothers; Marko (born Aug. 20, 1991) and Djordje (born July 17, 1995)\r\n> Father, uncle and aunt were all professional skiers and his father was also an excellent football player. His father wanted him to be a football player or skier but excelled in tennis at an early age.\r\n> Credits his family as inspiration for giving him so much support\r\n> Idol growing up was Pete Sampras\r\n> At age 12, attended Niki Pilic Academy in Munich and practiced there for almost 2 years before returning to Belgrade\r\n> Speaks Serbian, Italian, German, English and French\r\n> Favourite surface is hard, but considers himself well-rounded','img/djokovic.png'),(3,'Stan','Wawrinka','SUI','LAUSANNE, SWITZERLAND','32','3','81KG','1.83','Magnus Norman','> Nicknamed ”Stan the Man” and “Stanimal”\r\n> Began playing at 8, stopped school at 15 to focus on tennis\r\n> Surname is Polish, but he is only Polish by ancestry\r\n> Father, Wolfram, is German; mother, Isabelle, is Swiss; brother, Jonathan; sisters, Djanaee and Naella. Parents work on an organic farm, helping handicapped people.\r\n> Enjoys movies and music. Fan of Lausanne ice hockey club.\r\n> Considers backhand his best shot\r\n> Swiss flag carrier at 2012 Olympics opening ceremony\r\n> Named 2013 Swiss of the Year by his country’s TV audience\r\n> Elected 2015 Swiss Sportsman of the Yea','img/wawrinka.png'),(4,'Rafael','Nadal','ESP','MANACOR, MALLORCA, SPAIN','30','4','85KG','185CM','Carlos Moya','> Full name is Rafael Nadal Parera, nicknamed “Rafa”\r\n> Began playing tennis at age 4 with his uncle Toni\r\n> Plays left-handed but writes right-handed. Used to play with 2-handed forehand and backhand before his uncle made him change at age 9 or 10 to a 1-handed forehand.\r\n> Father, Sebastian, is a business partner with his 2 brothers of a restaurant, Sa Punta, and owner of a glass and windows company, Vidres Mallorca; mother, Ana Maria, is the Rafa Nadal Foundation president; sister, Maria Isabel\r\n> Comes from same island (Mallorca) as Carlos Moya. The city of Manacor is second-biggest in Mallorca.\r\n> His other uncle, Miguel Angel Nadal, is a former professional football player with stints on FC Barcelona, Real Mallorca and Spanish national team that competed in 1994, 1998 and 2002 World Cups\r\n> Founded the Rafa Nadal Foundation in 2008 and was presented with ATP Aces for Charity grant in 2011.','img/nadal.png'),(5,'Roger','Federer','SUI','BASEL, SWITZERLAND','35','5','85KG','1.85','Ivan Ljubicic','> Began playing tennis at age 8\r\n> Mother, Lynette; father, Robert; sister, Diana\r\n> Idols growing up were Stefan Edberg, Boris Becker and Pete Sampras\r\n> Enjoys spending time with his family, relaxing on the beach, playing cards and table tennis. He is also a fervent fan of hometown football team, FC Basel.\r\n> Speaks English, German, Swiss German, and French\r\n> Since 2003, has won a record 33 ATP World Tour Awards: ATP No. 1 (5 times: 2004-07, 2009), Arthur Ashe Humanitarian of Year (2 times: 2006, 2013), Stefan Edberg Sportsmanship (12 times: 2004-09, 2011-16), ATPWorldTour.com Fans’ Favourite for a record 14 consecutive years (2003-16)\r\n> Ranked No. 2 on the Reputation Institute’s 2011 study of world’s most respected, admired and trusted personalities. Was second to Nelson Mandela but ahead of the likes of Bill Gates, Steve Jobs, Oprah Winfrey and Bono','img/federer.png'),(6,'Milos','Raonic','CAN','PODGORICA, MONTENEGRO','26','6','98KG','1.96','RICCARDO PIATTI','> Began playing tennis at age 8\r\n> Moved from Podgorica, Montenegro to Canada at age 3\r\n> Father, Dusan; mother, Vesna, are both engineers; sister, Jelena and brother, Momir\r\n> Speaks English and Montenegrin\r\n> Idol growing up was Sampras: “I video-taped all his matches”\r\n> Was among the 1st group of players to join Tennis Canada’s National Training Centre in Montréal when it opened in 2007\r\n> Favourite surface, hard; shots, serve and forehand\r\n> Enjoys watching movies and spending time with family/friends\r\n> Founded Milos Raonic Foundation in 2012 to help disadvantaged youth become active, productive members of society. Foundation received ATP ACES for Charity $15,000 grant in 2016, which it matched for a total of $30,000.\r\n> Fan of FC Barcelona, Toronto Raptors (NBA) and Toronto Blue Jays (MLB)','img/raonic.png'),(7,'Dominic','Thiem','AUT','WIENER NEUSTADT, AUSTRIA','23','7','82KG','1.85','GÜNTER BRESNIK','> Nicknamed “Dominator”\r\n> Began playing tennis at age 6\r\n> Father, Wolfgang, and mother, Karin, are professional tennis coaches; brother, Moritz, also plays tennis\r\n> Idols growing up were countrymen Stefan Koubek and Jürgen Melzer\r\n> Favourite shot is forehand and surface is clay\r\n> Favourite tournaments are Vienna and Kitzbühel\r\n> Big football fan and supports Chelsea FC\r\n> Also enjoys and follows ski jump competitions\r\n> Joined Austrian military service from Nov. 2014 to Apr. 2015 (did not miss any tournaments)\r\n> Physiotherapist is Alex Stober','img/thiem.png'),(8,'Marin','Cilic','CRO','	MEDJUGORJE, BOSNIA-HERZEGOVINA','28','8','89KG','1.98','JONAS BJORKMAN ','> Nicknamed “Chila” by his friends\r\n> Began playing at age 7 with his cousin, Tanja\r\n> Father, Zdenko; mother, Koviljka, are both retired; brothers: Vinko, Goran and Mile\r\n> Favourite football teams are AC Milan and the Croatian national team, admires players Kaka and Robinho\r\n> Enjoys playing on all surfaces but says hard and grass are best-suited surfaces for him\r\n> Recipient of 2016 Arthur Ashe Humanitarian Award after launching Marin Cilic Foundation in June 2016 to provide young people improved access to education\r\n> Admires countrymen Goran Ivanisevic and Ivan Ljubic','img/cilic.png'),(9,'Kei','Nishikori','JPN','SHIMANE, JAPAN','27','9','75KG','1.78','DANTE BOTTINI ','> Began playing at age 5\r\n> Mother, Eri, is a piano teacher; father, Kiyoshi, is an engineer; sister, Reina\r\n> Moved from Shimane, Japan, to US at age 14, to train at the IMG Academy in Florida and didn\'t speak a word of English when he arrived. Still trains at IMG Academy.\r\n> Came to academy as a member of Masaaki Morita Tennis Fund group, which consists of a select few Japanese players sponsored by Mr. Morita, CEO of Sony\r\n> A former roommate of Zach Gilbert, son of ex-ATP Top 10 pro Brad Gilbert, who was his coach in 2011\r\n> Favourite surfaces are hard and clay, best shot is forehand\r\n> Named 2008 ATP Star of Tomorrow presented by Emirates\r\n> In 2011, played Chang in Tokyo to raise money for earthquake relief','img/nishikori.png'),(10,'David','Goffin','BEL','ROCOURT, BELGIUM','26','10','68KG','1.80','Thierry Van Cleemput','> Nicknamed “La Goff”\r\n> Began playing tennis at age 6 with his father\r\n> Father, Michel, is a tennis coach at the Barchon Club in Liege; mother, Francoise; brother, Simon\r\n> Enjoys playing golf\r\n> Idol growing up was Roger Federer\r\n> Voted by fellow players in 2014 as the ATP Comeback Player of the Year\r\n> Trains with the Belgian Tennis Federation in Mons','img/goffin.png');
/*!40000 ALTER TABLE `player` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_description` varchar(100) DEFAULT NULL,
  `post_date` varchar(32) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'sadsad','2018/01/10 15:31:34',9,1),(2,'sadsad','2018/01/10 15:31:37',9,1),(3,'Rafael Nadal','2018/01/10 16:05:47',10,10),(4,'Roger Federer','2018/01/10 16:12:06',10,10),(5,'test','2018/01/11 10:35:01',3,2),(6,'test','2018/01/11 10:35:41',3,2);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `topic_date` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic`
--

LOCK TABLES `topic` WRITE;
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
INSERT INTO `topic` VALUES (1,'test','2018/01/10 10:36:04',8),(2,'sadasdsaddsa','2018/01/10 10:36:33',3),(3,'1144','2018/01/10 10:49:56',3),(4,'zcxzcxzcxzxzcxz','2018/01/10 15:08:37',3),(5,'zcxzcxzcxzxzcxz','2018/01/10 15:08:40',3),(6,'zcxzcxzcxzxzcxz','2018/01/10 15:13:50',3),(7,'zcxzcxzcxzxzcxz','2018/01/10 15:15:14',3),(8,'test','2018/01/10 15:26:18',9),(9,'test','2018/01/10 15:31:30',9),(10,'Nadal','2018/01/10 15:56:08',9),(11,'rrr','2018/01/10 15:59:51',10);
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(32) DEFAULT NULL,
  `lastName` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Octavian','Bostan','octav202@yahoo.com','test','user'),(2,'Simona','Bacanu','simona@yahoo.com','test','user'),(3,'test','test','test','test','user'),(4,'ssseeeee','ssseeeee','test','Required','user'),(5,'twdm','twdm','twdm','twdm','user'),(6,'zzzz','zzz','zzz','zzzz','user'),(7,'xzczxc','xzcxzc','zxcxzc','zxccxz','user'),(8,'zzzz','zzzz','zzzz','zzzz','user'),(9,'octav','octav','octav','octav','user'),(10,'rrr','rrr','rrr','rrr','user');
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

-- Dump completed on 2018-01-11 17:20:45
