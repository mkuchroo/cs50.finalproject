-- MySQL dump 10.13  Distrib 5.5.27, for Linux (i686)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.5.27

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
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `players` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `games` int(255) NOT NULL,
  `bat_runs` int(255) NOT NULL,
  `bat_balls` int(255) NOT NULL,
  `50s` int(255) NOT NULL,
  `100s` int(255) NOT NULL,
  `4s` int(255) NOT NULL,
  `6s` int(255) NOT NULL,
  `bowl_overs` int(255) NOT NULL,
  `bowl_runs` int(255) NOT NULL,
  `bowl_wicket` int(255) NOT NULL,
  `bat_style` varchar(255) NOT NULL,
  `bowl_style` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `players`
--

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
INSERT INTO `players` VALUES (0,'Ibrahim Khan',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Medium Fast','Harvard College'),(0,'Sher Afgan Tareen',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Medium Fast','Harvard Divinity School'),(0,'Tyrel Dat',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','-','Harvard College'),(0,'Manik Kuchroo',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Fast Medium','Harvard College'),(0,'Arjun Nandkishore',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Fast','Harvard College'),(0,'Simon Lock',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Medium','FILL OUT'),(0,'Jon Parsonage',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','-','Harvard Law School'),(0,'Yaaser Vanderman',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','-','Harvard Law School'),(0,'Sabin Dhakal',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Off Spin','FILL OUT'),(0,'Sameer Tyagi',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Medium, Right Arm Leg Spin','FILL OUT'),(0,'Aun Ansari',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Off Spin','FILL OUT'),(0,'Usman Javaid',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Leg Spin','FILL OUT'),(0,'Ahmed Makani',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Off Spin','FILL OUT'),(0,'Mihir Mankad',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Medium','FILL OUT'),(0,'Hisham Mabrook',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Medium','FILL OUT'),(0,'Sridhar Ravi',0,0,0,0,0,0,0,0,0,0,'Left Hand Bat','FILL OUT','FILL OUT'),(0,'Fahad Shuja',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','FILL OUT','FILL OUT'),(0,'Haider Raza',0,0,0,0,0,0,0,0,0,0,'Right Hand Bat','Right Arm Fast Medium','FILL OUT');
/*!40000 ALTER TABLE `players` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teams` (
  `id` int(2) NOT NULL,
  `team_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,'Harvard'),(2,'Opposition');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'caesar','$1$50$GHABNWBNE/o4VL7QjmQ6x0'),(2,'cs50','$1$50$ceNa7BV5AoVQqilACNLuC1'),(3,'jharvard','$1$50$RX3wnAMNrGIbgzbRYrxM1/'),(4,'malan','$1$HA$azTGIMVlmPi9W9Y12cYSj/'),(5,'nate','$1$50$sUyTaTbiSKVPZCpjJckan0'),(6,'rbowden','$1$50$lJS9HiGK6sphej8c4bnbX.'),(7,'skroob','$1$50$euBi4ugiJmbpIbvTTfmfI.'),(8,'tmacwilliam','$1$50$91ya4AroFPepdLpiX.bdP1'),(9,'zamyla','$1$50$Suq.MOtQj51maavfKvFsW1'),(10,'harvardcricketclub','skipper2012');
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

-- Dump completed on 2012-12-03 16:09:30
