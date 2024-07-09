-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: sports_store
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `authentication`
--

DROP TABLE IF EXISTS `authentication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authentication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authentication`
--

LOCK TABLES `authentication` WRITE;
/*!40000 ALTER TABLE `authentication` DISABLE KEYS */;
INSERT INTO `authentication` VALUES (1,'Kamal Uddin','kamal@yahoo.com',NULL,NULL,'kamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,NULL,NULL,'2024-07-07 16:32:54',1,'2024-07-07 16:53:57'),(2,'kamal','kamal@yahoo.com',NULL,NULL,'kamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,NULL,NULL,NULL,1,'2024-07-07 16:53:58'),(3,'kamal','mdakash906431@gmail.com',NULL,NULL,'kamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,NULL,NULL,NULL,1,'2024-07-07 16:53:59'),(4,'Akash','ramzan@gmail.com',NULL,NULL,'Akash','8cb2237d0679ca88db6464eac60da96345513964',NULL,NULL,NULL,NULL,1,'2024-07-07 16:54:00'),(5,'kamal','mdakash906431@gmail.com',NULL,NULL,'kamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,NULL,NULL,NULL,1,'2024-07-07 16:54:02'),(6,'jamal','mdakash906431@gmail.com',NULL,'17203633455511.jpg','jamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-07 16:42:25',NULL,NULL,1,'2024-07-07 16:54:04'),(7,'Akash','mdakash906431@gmail.com',NULL,'17203640723087.jpg','Akash','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-07 16:54:32',NULL,NULL,1,'2024-07-07 17:13:40'),(8,'kamal','kamal@gmil.com',NULL,'17203645655304.jpg','kamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-07 17:02:45',NULL,'2024-07-07 17:13:48',1,'2024-07-07 17:13:52'),(9,'kamal','kamal@gmil.com',NULL,'17203652758320.jpg','kamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-07 17:14:35',NULL,'2024-07-07 17:17:29',1,'2024-07-07 17:27:38'),(10,'kamal','kamal@gmil.com',NULL,'17203661452655.jpg','kamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-07 17:29:05',NULL,NULL,1,'2024-07-08 07:35:19'),(11,'jamal','jamal@yahoo.com',NULL,'17203661913498.jpg','jamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-07 17:29:51',NULL,NULL,1,'2024-07-07 17:42:10'),(12,'rohim','rohim@gmail.com',NULL,'17203665224341.jpg','rohim','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-07 17:35:22',NULL,NULL,1,'2024-07-07 17:42:07'),(13,'Tanbir','tanbir@gmail.com',NULL,'17203737419873.jpg','Tanbir','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-07 19:35:41',NULL,NULL,1,'2024-07-08 07:35:20'),(14,'sofiq','ramzan@gmail.com',NULL,'17203751189839.jpg','sofiq','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-07 19:58:38',NULL,NULL,1,'2024-07-08 07:35:21'),(15,'jj','kamal@gmil.com',NULL,'17203761556928.jpg','jj','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-07 20:15:55',NULL,NULL,1,'2024-07-07 20:35:17'),(16,'Akash','mdakash906431@gmail.com',NULL,NULL,'akash','8cb2237d0679ca88db6464eac60da96345513964',NULL,'2024-07-08 07:34:36',NULL,NULL,1,'2024-07-08 07:35:23'),(17,'kamal','kamal@gmail.com',NULL,NULL,'kamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-08 07:35:06',NULL,NULL,1,'2024-07-08 07:38:37'),(18,'jamal','jamal@gmail.com',NULL,'17204170743512.jpg','jamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-08 07:37:54',NULL,NULL,1,'2024-07-08 07:38:39'),(19,'kamal','kamal@gmail.com',NULL,'17204171376802.jpg','kamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-08 07:38:57',NULL,NULL,1,'2024-07-08 07:43:43'),(20,'kamal','kamal@gmail.com','0155','17204174576402.jpg','kamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-08 07:44:17',NULL,NULL,NULL,NULL),(21,'Bappy','bappy@gamil.com','0155','17204242609887.jpg','bappy','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-08 09:37:40',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `authentication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catagory`
--

DROP TABLE IF EXISTS `catagory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catagory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catagory`
--

LOCK TABLES `catagory` WRITE;
/*!40000 ALTER TABLE `catagory` DISABLE KEYS */;
INSERT INTO `catagory` VALUES (1,'Football',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `catagory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cupon_code` varchar(100) NOT NULL,
  `discount` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupon`
--

LOCK TABLES `coupon` WRITE;
/*!40000 ALTER TABLE `coupon` DISABLE KEYS */;
INSERT INTO `coupon` VALUES (1,'DD5XIF',52,'2024-07-01','2024-07-30','1','2024-07-03','1','2024-07-01',NULL),(2,'DD5XIF',50,'2024-07-01','2024-07-22','1','2024-07-01','1','0000-00-00',NULL),(3,'',0,'0000-00-00','0000-00-00','1','2024-07-02','1','2024-07-02','2024-07-02'),(4,'sdfsd',74,'2024-07-10','2024-07-24','1','2024-07-02','1','2024-07-02','2024-07-02'),(5,'r59',5,'2024-07-02','2024-07-04','1','2024-07-02','1','2024-07-02','0000-00-00'),(6,'r59',10,'2024-07-05','2024-07-09','1','2024-07-07','','0000-00-00',NULL);
/*!40000 ALTER TABLE `coupon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `post` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Bangladesh','','','','','j','j','j','j','mdakash906431@gmail.com',0,'2024-07-04 06:34:30',1,NULL,1,'2024-07-04 07:14:05'),(2,'Bangladesh','ff','f','','','Figma','j','f','j','mdakash906431@gmail.com',0,'2024-07-04 06:38:23',1,NULL,1,'2024-07-04 07:14:06'),(3,'Bangladesh','Md','Ramzan','','','None','Chittagong','Khagrachari','Ramgarh','mdakash906431@gmail.com',0,'2024-07-04 06:56:12',1,NULL,1,'2024-07-04 07:14:09'),(4,'Bangladesh','Md','Ramzan','','12345','Bd Publice Service','Chittagong','Khagrachari','Ramgarh','mdakash906431@gmail.com',1559075906,'2024-07-04 07:15:53',1,NULL,1,'2024-07-04 07:27:45'),(5,'Bangladesh','Md','Ramzan','','12345','Bd Publice Service','Chittagong','Khagrachari','Ramgarh','mdakash906431@gmail.com',12345,'2024-07-04 07:23:53',1,NULL,1,'2024-07-04 07:27:02'),(6,'Bangladesh','Md','Ramzan','','123','Bd Publice Service','Chittagong','Khagrachari','Ramgarh','mdakash906431@gmail.com',12345,'2024-07-04 07:28:15',1,NULL,1,'2024-07-04 07:49:29'),(7,'Bangladesh','Md','Mukut','','123','none','Chittagong','Ctg','Cth','mukut@gmail.com',12345,'2024-07-04 07:32:57',1,NULL,1,'2024-07-04 07:49:31'),(8,'Bangladesh','Md','Ramzan','','8cb2237d0679ca88db64','Bd Publice Service','Chittagong','Khagrachari','Ramgarh','mdakash906431@gmail.com',12345,'2024-07-04 07:50:06',NULL,NULL,1,'2024-07-04 08:03:55'),(9,'Bangladesh','Md','Ramzan','','8cb2237d0679ca88db6464eac60da96345513964','Bd Publice Service','Chittagong','Khagrachari','Ramgarh','mdakash906431@gmail.com',1558,'2024-07-04 08:04:28',NULL,NULL,1,'2024-07-07 17:22:09'),(10,'Bangladesh','Md','Mukut','','3acd0be86de7dcccdbf91b20f94a68cea535922d','123','123','123','123','',0,'2024-07-04 08:13:38',NULL,NULL,1,'2024-07-07 17:22:19'),(11,'Bangladesh','Md','Mukut','','fc8e1491881d5a6a9c929d6333f0dc22fbfcd2ed','Bd Publice Service','Chittagong','Khagrachari','Ramgarh','mukut@gmail.com',256,'2024-07-04 08:14:12',NULL,NULL,1,'2024-07-07 17:22:28'),(12,'Bangladesh','Md','Akash','','40bd001563085fc35165329ea1ff5c5ecbdbbeef','none','none','none ','none','no@gmail.com',0,'2024-07-07 17:24:07',NULL,NULL,1,'2024-07-07 17:27:04'),(13,'Bangladesh','Md','kamal','','40bd001563085fc35165329ea1ff5c5ecbdbbeef','kamal tredurs','bd','bd','bd','kamal@gmil.com',0,'2024-07-07 18:43:11',NULL,NULL,1,'2024-07-08 05:25:39'),(14,'Bangladesh','Md','Buppy','','40bd001563085fc35165329ea1ff5c5ecbdbbeef','123','123','','','',0,'2024-07-07 20:41:17',NULL,NULL,1,'2024-07-08 05:25:41'),(15,'Bangladesh','Md','Buppy','','40bd001563085fc35165329ea1ff5c5ecbdbbeef','123','123','aaa','aaa','mdakash906431@gmail.com',1859409681,'2024-07-07 20:41:45',NULL,NULL,1,'2024-07-08 05:25:42'),(16,'Bangladesh','Md','Buppy','','40bd001563085fc35165329ea1ff5c5ecbdbbeef','kamal tredurs','none','none','none','kamal@gmil.com',0,'2024-07-07 20:42:22',NULL,NULL,1,'2024-07-08 05:25:43'),(17,'Bangladesh','Md','Akash','','40bd001563085fc35165329ea1ff5c5ecbdbbeef','Bd Publice Service','none ','none ','none','mdakash906431@gmail.com',0,'2024-07-08 05:24:49',NULL,NULL,1,'2024-07-08 05:25:45'),(18,'Bangladesh','Md','Akash','','40bd001563085fc35165329ea1ff5c5ecbdbbeef','Bd Publice Service','none ','none ','none ','mdakash906431@gmail.com',0,'2024-07-08 05:26:19',NULL,NULL,1,'2024-07-08 06:30:57'),(19,'Bangladesh','Md','Akash','','40bd001563085fc35165329ea1ff5c5ecbdbbeef','Bd Publice Service','none ','none ','none','kamal@gmail.com',1558,'2024-07-08 06:31:27',NULL,NULL,1,'2024-07-08 07:06:52'),(20,'Bangladesh','Md','Akash','17204142989431.jpg','40bd001563085fc35165329ea1ff5c5ecbdbbeef','Bd Publice Service','none ','none ','none','none@gmail.com',0,'2024-07-08 06:51:38',NULL,NULL,1,'2024-07-08 07:06:54'),(21,'Bangladesh','Md','Akash','17204144603921.jpg','40bd001563085fc35165329ea1ff5c5ecbdbbeef','Bd Publice Service','none ','none ','none','none@gmail.com',0,'2024-07-08 06:54:20',NULL,NULL,1,'2024-07-08 07:06:57'),(22,'Bangladesh','Md','Akash','17204149265686.jpg','40bd001563085fc35165329ea1ff5c5ecbdbbeef','Bd Publice Service','none ','none ','none','kamal@gmail.com',0,'2024-07-08 07:02:06',NULL,NULL,1,'2024-07-08 07:06:55'),(23,'Bangladesh','Md','Akash','17204152533190.jpg','40bd001563085fc35165329ea1ff5c5ecbdbbeef','Bd Publice Service','none ','none ','none','none@gmail.com',0,'2024-07-08 07:07:33',NULL,NULL,1,'2024-07-08 07:10:32'),(24,'Bangladesh','Md','Akash','17204154512156.jpg','6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2','Bd Publice Service','none ','none ','none','none@gmail.com',0,'2024-07-08 07:10:51',NULL,NULL,1,'2024-07-08 07:25:19'),(25,'Bangladesh','Md','Akash','17204163491208.jpg','6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2','Bd Publice Service','none ','none ','none','none@gmail.com',0,'2024-07-08 07:25:49',NULL,NULL,1,'2024-07-08 07:45:14'),(26,'Bangladesh','Md','Akash','17204166693043.jpg','6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2','000','000','000','000','none@gmail.com',112233,'2024-07-08 07:31:09',NULL,NULL,1,'2024-07-08 07:45:15'),(27,'Bangladesh','Md','Akash','17204175917967.jpg','40bd001563085fc35165329ea1ff5c5ecbdbbeef','Bd Publice Service','none ','none ','none ','mdakash906431@gmail.com',155,'2024-07-08 07:46:31',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `catagory_id` int(11) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'','',NULL,0.00,0,'','2024-07-02 17:31:55',1,NULL,NULL,NULL),(2,'Football','fgfg','17199343318545.jpg',40.00,1,'DEER','2024-07-02 17:32:11',1,'2024-07-02 17:32:16',1,'2024-07-02 17:32:19'),(3,'Football','sdfsd','17199343871191.jpg',40.00,1,'DEER','2024-07-02 17:33:07',1,NULL,1,'2024-07-07 19:31:24'),(4,'sdfsd','sdfsd','17199344151536.jpg',2.00,1,'sdfsd','2024-07-02 17:33:35',1,'2024-07-07 19:31:28',1,'2024-07-07 19:31:30'),(5,'Chair','Funrichar','17204126173719.jpg',100.00,1,'Bd Publice Service','2024-07-08 06:23:37',1,NULL,NULL,NULL),(6,'Table','Funrichar','17204126368731.jpg',100.00,1,'Bd Publice Service','2024-07-08 06:23:56',1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_country` varchar(50) NOT NULL,
  `ship_country` varchar(50) NOT NULL,
  `bill_first_name` varchar(50) NOT NULL,
  `ship_first_name` varchar(50) NOT NULL,
  `bill_last_name` varchar(50) NOT NULL,
  `ship_last_name` varchar(50) NOT NULL,
  `bill_company_name` varchar(100) NOT NULL,
  `ship_company_name` varchar(100) NOT NULL,
  `bill_address` varchar(100) NOT NULL,
  `ship_address` varchar(100) NOT NULL,
  `bill_state` varchar(50) NOT NULL,
  `ship_state` varchar(50) NOT NULL,
  `bill_post` varchar(50) NOT NULL,
  `ship_post` varchar(50) NOT NULL,
  `bill_email` varchar(50) NOT NULL,
  `ship_email` varchar(50) NOT NULL,
  `bill_phone` int(15) NOT NULL,
  `ship_phone` int(15) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `cart_data` text NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'2','1','Ibrahim','','khalil','','WDPF-IT','','2no Gate','','asdf','','4100','','asdf@yahoo.com','',156669998,0,40.00,20.00,1,'eyJpdGVtIjp7IjMiOnsicHJvZHVjdF9uYW1lIjoiRm9vdGJhbGwiLCJwaG90byI6IjE3MTk5MzQzODcxMTkxLmpwZyIsInByaWNlIjoiNDAuMDAiLCJxdHkiOjF9fSwidG90YWwiOjQwLCJkaXNjb3VudCI6MjAsImN1cG9uIjoiREQ1WElGIiwidG90YWxfcXR5IjoxfQ==','DD5XIF','sadf','2024-07-07',1,1,NULL,'2024-07-07'),(2,'0','1','','','','','','','','','','','','','','',0,0,0.00,0.00,0,'bnVsbA==','','','2024-07-07',1,1,NULL,'2024-07-07'),(3,'0','1','','','','','','','','','','','','','','',0,0,0.00,0.00,0,'bnVsbA==','','','2024-07-07',1,1,NULL,'2024-07-07'),(4,'2','1','Md','','Ramzan','','Bd Public Service','','Khagrachari','','Patachara','','4440','','mdakash906431@gmail.com','',1559075906,0,82.00,8.20,3,'eyJpdGVtIjp7IjMiOnsicHJvZHVjdF9uYW1lIjoiRm9vdGJhbGwiLCJwaG90byI6IjE3MTk5MzQzODcxMTkxLmpwZyIsInByaWNlIjoiNDAuMDAiLCJxdHkiOjJ9LCI0Ijp7InByb2R1Y3RfbmFtZSI6InNkZnNkIiwicGhvdG8iOiIxNzE5OTM0NDE1MTUzNi5qcGciLCJwcmljZSI6IjIuMDAiLCJxdHkiOjF9fSwidG90YWwiOjgyLCJkaXNjb3VudCI6OC4yMDAwMDAwMDAwMDAwMDEsImN1cG9uIjoicjU5IiwidG90YWxfcXR5IjozfQ==','r59','','2024-07-07',1,1,NULL,'2024-07-08'),(5,'2','1','df','','dfdd','','fdd','','dfd','','dfd','','df','','df','',15,0,300.00,30.00,3,'eyJpdGVtIjp7IjUiOnsicHJvZHVjdF9uYW1lIjoiQ2hhaXIiLCJwaG90byI6IjE3MjA0MTI2MTczNzE5LmpwZyIsInByaWNlIjoiMTAwLjAwIiwicXR5IjoyfSwiNiI6eyJwcm9kdWN0X25hbWUiOiJUYWJsZSIsInBob3RvIjoiMTcyMDQxMjYzNjg3MzEuanBnIiwicHJpY2UiOiIxMDAuMDAiLCJxdHkiOjF9fSwidG90YWwiOjMwMCwiZGlzY291bnQiOjMwLCJjdXBvbiI6InI1OSIsInRvdGFsX3F0eSI6M30=','r59','','2024-07-08',1,1,NULL,'2024-07-08'),(6,'2','1','df','','dfdd','','fdd','','dfd','','dfd','','df','','df','',15,0,400.00,40.00,4,'eyJpdGVtIjp7IjUiOnsicHJvZHVjdF9uYW1lIjoiQ2hhaXIiLCJwaG90byI6IjE3MjA0MTI2MTczNzE5LmpwZyIsInByaWNlIjoiMTAwLjAwIiwicXR5IjoyfSwiNiI6eyJwcm9kdWN0X25hbWUiOiJUYWJsZSIsInBob3RvIjoiMTcyMDQxMjYzNjg3MzEuanBnIiwicHJpY2UiOiIxMDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjQwMCwiZGlzY291bnQiOjQwLCJjdXBvbiI6InI1OSIsInRvdGFsX3F0eSI6NH0=','r59','sss','2024-07-08',1,1,NULL,'2024-07-08');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `sub_amount` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `vat` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `purchase_data` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase`
--

LOCK TABLES `purchase` WRITE;
/*!40000 ALTER TABLE `purchase` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `sales_date` date DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `sub_amount` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `vat` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `sales_data` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `photo` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `post` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` VALUES (1,'Fahim','','','','','','','018','2024-07-07 17:20:45',1,'2024-07-07 17:20:51',1,'2024-07-07 17:21:49'),(2,'Football','','','','','','','123','2024-07-07 17:27:11',1,'2024-07-07 17:27:14',1,'2024-07-07 17:27:16'),(3,'fahim','','','','','','','111','2024-07-07 17:36:14',1,'2024-07-07 17:36:18',1,'2024-07-07 17:46:37'),(4,'fd','','','','','','','fff','2024-07-07 17:46:47',1,NULL,1,'2024-07-07 17:46:50'),(5,'Football','','','','','','','01559-075906','2024-07-07 17:48:15',1,'2024-07-07 17:48:18',1,'2024-07-07 17:48:20'),(6,'Md fa','','','','','','','','2024-07-08 07:56:42',1,NULL,1,'2024-07-08 07:56:46'),(7,'Md Fahim','','','','','','','0155','2024-07-08 07:56:58',1,NULL,1,'2024-07-08 08:55:19'),(8,'Md Fahim','Img.jpg','Fuji Film','Chittahong','Khagrachari','Ramgarh','fahim@gmail.com','0155','2024-07-08 08:48:05',1,NULL,1,'2024-07-08 08:55:21'),(9,'Md Fahim','Img.jpg','Fuji Film','Chittahong','Khagrachari','Ramgarh','fahim@gmail.com','0155','2024-07-08 08:55:38',1,NULL,1,'2024-07-08 08:56:55'),(10,'Md Fahim','Img.jpg','Fuji Film','Chittahong','Khagrachari','Ramgarh','fahim@gmail.com','0155','2024-07-08 08:57:14',1,NULL,1,'2024-07-08 09:03:13'),(11,'Md Fahim','Img.jpg','Fuji Film','Chittahong','Khagrachari','Ramgarh','fahim@gmail.com','0155','2024-07-08 09:03:33',1,'2024-07-08 09:09:42',1,'2024-07-08 09:16:06'),(12,'Md Fahim','Img.jpg','Bd Publice Service','none ','none ','none','mdakash906431@gmail.com','0155','2024-07-08 09:16:32',1,NULL,1,'2024-07-08 09:23:28'),(13,'Md Fahim','aleks-eva-1.jpg','Bd Publice Service','none ','none ','Ramgarh','kamal@gmail.com','0155','2024-07-08 09:17:55',1,NULL,1,'2024-07-08 09:23:30'),(14,'Lux','aleks-eva-1.jpg','Bd Publice Service','Chittahong','none ','none','mdakash906431@gmail.com','0155','2024-07-08 09:18:54',1,NULL,1,'2024-07-08 09:23:31'),(15,'Md Fahim','aleks-eva-1.jpg','Bd Publice Service','none ','none ','Ramgarh','mdakash906431@gmail.com','0155','2024-07-08 09:19:47',1,NULL,1,'2024-07-08 09:23:33'),(16,'Md Fahim','Img.jpg','Bd Publice Service','none ','none ','none','mdakash906431@gmail.com','0155','2024-07-08 09:23:45',1,NULL,1,'2024-07-08 09:25:41'),(17,'Md Fahim','17204236473450.jpg','Fuji Film','none ','none ','Ramgarh','mdakash906431@gmail.com','0155','2024-07-08 09:25:54',1,'2024-07-08 09:27:27',1,'2024-07-08 09:27:44');
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-09  9:16:02
