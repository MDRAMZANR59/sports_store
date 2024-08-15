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
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authentication`
--

LOCK TABLES `authentication` WRITE;
/*!40000 ALTER TABLE `authentication` DISABLE KEYS */;
INSERT INTO `authentication` VALUES (24,'kamal','kamal@gmil.com','0155','17205520276135.jpg','kamal','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-09 21:07:07',NULL,NULL,1,NULL),(25,'Md Ramzan Ali','mdramzanaliisdbr59@gmail.com','01559075906','17209250592603.jpg','Ramzan','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-14 02:44:19',NULL,NULL,NULL,NULL),(26,'Abu Foysal','abufoysal581@gmail.com','01862034818','17209270177853.jpg','Bappy','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,'2024-07-14 03:16:57',NULL,NULL,NULL,NULL);
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catagory`
--

LOCK TABLES `catagory` WRITE;
/*!40000 ALTER TABLE `catagory` DISABLE KEYS */;
INSERT INTO `catagory` VALUES (2,'Home Accesorice','2024-07-10 07:53:38',1,NULL,NULL,NULL),(3,'Office Accesorice','2024-07-10 07:53:57',1,NULL,NULL,NULL),(4,'Store Accesoris','2024-07-12 13:45:37',1,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupon`
--

LOCK TABLES `coupon` WRITE;
/*!40000 ALTER TABLE `coupon` DISABLE KEYS */;
INSERT INTO `coupon` VALUES (1,'DD5XIF',52,'2024-07-01','2024-07-30','1','2024-07-03','1','2024-07-01','2024-07-14'),(2,'WDPF',50,'2024-07-01','2024-07-22','1','2024-07-01','1','2024-07-14',NULL),(3,'',0,'0000-00-00','0000-00-00','1','2024-07-02','1','2024-07-02','2024-07-02'),(4,'sdfsd',74,'2024-07-10','2024-07-24','1','2024-07-02','1','2024-07-02','2024-07-02'),(5,'r59',5,'2024-07-02','2024-07-04','1','2024-07-02','1','2024-07-02','0000-00-00'),(6,'r59',10,'2024-07-05','2024-07-31','1','2024-07-07','1','2024-07-14',NULL),(7,'tanbhit12',10,'2024-07-13','2024-07-28','1','2024-07-14','1','2024-07-14',NULL);
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (43,'2','Md','Ramzan','17209252699382.jpg','40bd001563085fc35165329ea1ff5c5ecbdbbeef','ISDB-WDPF','Chittagong','Bayejid','Oxizyn','mdramzanaliisdbr59@gmail.com',1559075906,'2024-07-14 02:47:49',NULL,NULL,NULL,NULL),(46,'2','abu','foysal','17209291687864.jpg','40bd001563085fc35165329ea1ff5c5ecbdbbeef','RFL Furniture LTD','Chittagong','Bayejid','Oxizyn','abufoysal581@gmail.com',1862034818,'2024-07-14 03:52:48',NULL,NULL,1,'2024-07-14 03:54:13'),(50,'2','Md','Kamal','17234461186842.jpg','40bd001563085fc35165329ea1ff5c5ecbdbbeef','none','Chittagong','Khagrachari','Ramgarh','kamal@gmail.com',1559075906,'2024-08-12 09:01:58',NULL,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (10,'Exclusive Home Chair','Classic Home Chair','17207862164717.jpg',3000.00,2,'Aotobi Furniture LTD','2024-07-12 14:00:06',1,'2024-07-12 14:14:42',1,NULL),(11,'Wooden Home Chair','Classic Home Chair','17207862386639.jpg',2500.00,2,'Aotobi Furniture LTD','2024-07-12 14:02:05',1,'2024-07-12 14:15:07',1,NULL),(12,'Classic Wooden Home Chair','Classic Home Chair','17207862516713.jpg',2800.00,2,'Aotobi Furniture LTD','2024-07-12 14:05:59',1,'2024-07-12 14:15:22',1,NULL),(13,'Luxary Home Chair','Rocking Wooden Home Chair','17207870834088.jpg',4500.00,2,'Aotobi Furniture LTD','2024-07-12 14:24:43',1,NULL,1,'2024-07-12 14:26:30'),(14,'Classic Fome Attach Chair','Fome Attach Classic Home Chair','17207871687733.jpg',2200.00,2,'Aotobi Furniture LTD','2024-07-12 14:26:08',1,NULL,NULL,NULL),(15,'Home Wooden Table','Rounded Wooden Table','17208474253925.jpg',4300.00,2,'Autobi Furniture','2024-07-13 05:10:25',1,NULL,NULL,NULL),(16,'Executive office table Golden','Executive office table black','17208943593001.jpg',8000.00,3,'RFL Furniture LTD','2024-07-13 18:12:39',1,'2024-07-14 02:27:26',1,NULL),(17,'Table Black','Exclusive Office Table Black','17209241562212.jpg',27000.00,3,'RFL Furniture LTD','2024-07-14 02:29:16',1,'2024-07-14 02:34:22',1,NULL),(18,'Office Table Singel','Office Table Board Black','17209242075718.jpg',15000.00,3,'RFL Furniture LTD','2024-07-14 02:30:07',1,'2024-07-14 02:34:33',1,NULL),(19,'Office table Board ','Exclusive office table of board','17209242733114.jpg',20000.00,3,'RFL Furniture LTD','2024-07-14 02:31:13',1,'2024-07-14 02:34:49',1,NULL),(20,'Rounded Table','Roundad Home Table','17209243586261.jpg',12000.00,2,'Autobi Furniture','2024-07-14 02:32:38',1,NULL,NULL,NULL),(21,'Square Table Board','Home Uses Table Square','17209244147516.jpg',16000.00,2,'Autobi Furniture','2024-07-14 02:33:34',1,NULL,NULL,NULL),(22,'Square Table Wooden','Home Uses Table Wooden','17209245431359.jpg',7500.00,2,'Autobi Furniture','2024-07-14 02:35:43',1,NULL,NULL,NULL),(23,'Home Uses Sofa','Exclusive Sofa','17209246248596.jpg',27000.00,2,'Autobi Furniture','2024-07-14 02:37:04',1,NULL,NULL,NULL),(24,'Home Uses Sofa','Home Uses Sofa Single','17209246785741.jpg',19000.00,2,'Karmo Furniture LTD','2024-07-14 02:37:58',1,NULL,NULL,NULL),(25,'Office Uses Sofa','Exclusive Office Sofa Black','17209247549052.jpg',56000.00,4,'Hatil Furniture TLD','2024-07-14 02:39:14',1,NULL,NULL,NULL);
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
  `payment_method` varchar(255) DEFAULT NULL,
  `shiping_charge` decimal(10,2) NOT NULL DEFAULT 0.00,
  `notes` varchar(500) NOT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `status_date` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (21,'2','1','none','','none','','none','','none','','none','','none','','eee@gmail','',0,0,200.00,0.00,2,'eyJpdGVtIjp7IjgiOnsicHJvZHVjdF9uYW1lIjoiVGFibGUiLCJwaG90byI6IjE3MjA1OTEyNzgyNjczLmpwZyIsInByaWNlIjoiMTAwLjAwIiwicXR5IjoxfSwiNyI6eyJwcm9kdWN0X25hbWUiOiJDaGFpciIsInBob3RvIjoiMTcyMDU5MTIzNTUzMzUuanBnIiwicHJpY2UiOiIxMDAuMDAiLCJxdHkiOjF9fSwidG90YWwiOjIwMCwiZGlzY291bnQiOjAsImN1cG9uIjoiIiwidG90YWxfcXR5IjoyfQ==','',NULL,0.00,'',NULL,NULL,NULL,'2024-07-10',1,NULL,NULL,NULL),(22,'2','2','Md','Md','kamal','kamal','Fuji Film','Fuji Film','Chittahong','Chittahong','Khagrachari','Khagrachari','Ramgarh','Ramgarh','kamal@gmail.com','kamal@gmail.com',0,0,300.00,30.00,3,'eyJpdGVtIjp7IjciOnsicHJvZHVjdF9uYW1lIjoiQ2hhaXIiLCJwaG90byI6IjE3MjA1OTEyMzU1MzM1LmpwZyIsInByaWNlIjoiMTAwLjAwIiwicXR5IjoyfSwiOCI6eyJwcm9kdWN0X25hbWUiOiJUYWJsZSIsInBob3RvIjoiMTcyMDU5MTI3ODI2NzMuanBnIiwicHJpY2UiOiIxMDAuMDAiLCJxdHkiOjF9fSwidG90YWwiOjMwMCwiZGlzY291bnQiOjMwLCJjdXBvbiI6InI1OSIsInRvdGFsX3F0eSI6M30=','r59','Online Payment',0.00,'',NULL,NULL,NULL,'2024-07-11',1,NULL,NULL,NULL),(23,'2','2','Md','Md','kamal','kamal','Fuji Film','Fuji Film','Khagrachari','Khagrachari','Ramgarh','Ramgarh','Ramgarh','Ramgarh','kamal@gmil.com','kamal@gmil.com',1559075906,1559075906,400.00,0.00,4,'eyJpdGVtIjp7IjciOnsicHJvZHVjdF9uYW1lIjoiQ2hhaXIiLCJwaG90byI6IjE3MjA1OTEyMzU1MzM1LmpwZyIsInByaWNlIjoiMTAwLjAwIiwicXR5IjoyfSwiOCI6eyJwcm9kdWN0X25hbWUiOiJUYWJsZSIsInBob3RvIjoiMTcyMDU5MTI3ODI2NzMuanBnIiwicHJpY2UiOiIxMDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjQwMCwiZGlzY291bnQiOjAsImN1cG9uIjoiIiwidG90YWxfcXR5Ijo0fQ==','','Online Payment',0.00,'',NULL,NULL,NULL,'2024-07-11',1,NULL,NULL,NULL),(24,'2','2','sohana','sohana','afsana','afsana','123','','Shishu kabarsthan, DC road, chawkbazar,chittagong','Shishu kabarsthan, DC road, chawkbazar,chittagong','chittagong','chittagong','4202','4202','sohanaafsana16@gmail.com','sohanaafsana16@gmail.com',1876635583,1876635583,7300.00,0.00,2,'eyJpdGVtIjp7IjEwIjp7InByb2R1Y3RfbmFtZSI6IkV4Y2x1c2l2ZSBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjE2NDcxNy5qcGciLCJwcmljZSI6IjMwMDAuMDAiLCJxdHkiOjF9LCIxNSI6eyJwcm9kdWN0X25hbWUiOiJIb21lIFdvb2RlbiBUYWJsZSIsInBob3RvIjoiMTcyMDg0NzQyNTM5MjUuanBnIiwicHJpY2UiOiI0MzAwLjAwIiwicXR5IjoxfX0sInRvdGFsIjo3MzAwLCJkaXNjb3VudCI6MCwiY3Vwb24iOiIiLCJ0b3RhbF9xdHkiOjJ9','','Online Payment',0.00,'123',NULL,NULL,NULL,'2024-07-13',1,NULL,NULL,NULL),(32,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,204000.00,20400.00,8,'eyJpdGVtIjp7IjEwIjp7InByb2R1Y3RfbmFtZSI6IkV4Y2x1c2l2ZSBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjE2NDcxNy5qcGciLCJwcmljZSI6IjMwMDAuMDAiLCJxdHkiOjJ9LCIxNyI6eyJwcm9kdWN0X25hbWUiOiJUYWJsZSBCbGFjayIsInBob3RvIjoiMTcyMDkyNDE1NjIyMTIuanBnIiwicHJpY2UiOiIyNzAwMC4wMCIsInF0eSI6Mn0sIjIxIjp7InByb2R1Y3RfbmFtZSI6IlNxdWFyZSBUYWJsZSBCb2FyZCIsInBob3RvIjoiMTcyMDkyNDQxNDc1MTYuanBnIiwicHJpY2UiOiIxNjAwMC4wMCIsInF0eSI6Mn0sIjI1Ijp7InByb2R1Y3RfbmFtZSI6Ik9mZmljZSBVc2VzIFNvZmEiLCJwaG90byI6IjE3MjA5MjQ3NTQ5MDUyLmpwZyIsInByaWNlIjoiNTYwMDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjIwNDAwMCwiZGlzY291bnQiOjIwNDAwLCJjdXBvbiI6InI1OSIsInRvdGFsX3F0eSI6OH0=','r59','Online Payment',0.00,'',NULL,NULL,NULL,'2024-07-14',1,NULL,NULL,NULL),(48,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,3000.00,300.00,1,'eyJpdGVtIjp7IjEwIjp7InByb2R1Y3RfbmFtZSI6IkV4Y2x1c2l2ZSBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjE2NDcxNy5qcGciLCJwcmljZSI6IjMwMDAuMDAiLCJxdHkiOjF9fSwidG90YWwiOjMwMDAsImRpc2NvdW50IjozMDAsImN1cG9uIjoidGFuYmhpdDEyIiwidG90YWxfcXR5IjoxfQ==','tanbhit12','Online Payment',0.00,'',NULL,NULL,NULL,'2024-07-14',1,NULL,NULL,NULL),(49,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,16600.00,1660.00,6,'eyJpdGVtIjp7IjEwIjp7InByb2R1Y3RfbmFtZSI6IkV4Y2x1c2l2ZSBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjE2NDcxNy5qcGciLCJwcmljZSI6IjMwMDAuMDAiLCJxdHkiOjJ9LCIxMSI6eyJwcm9kdWN0X25hbWUiOiJXb29kZW4gSG9tZSBDaGFpciIsInBob3RvIjoiMTcyMDc4NjIzODY2MzkuanBnIiwicHJpY2UiOiIyNTAwLjAwIiwicXR5IjoyfSwiMTIiOnsicHJvZHVjdF9uYW1lIjoiQ2xhc3NpYyBXb29kZW4gSG9tZSBDaGFpciIsInBob3RvIjoiMTcyMDc4NjI1MTY3MTMuanBnIiwicHJpY2UiOiIyODAwLjAwIiwicXR5IjoyfX0sInRvdGFsIjoxNjYwMCwiZGlzY291bnQiOjE2NjAsImN1cG9uIjoicjU5IiwidG90YWxfcXR5Ijo2fQ==','r59','Online Payment',0.00,'',NULL,NULL,NULL,'2024-07-14',1,NULL,NULL,NULL),(50,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,73600.00,0.00,9,'eyJpdGVtIjp7IjEwIjp7InByb2R1Y3RfbmFtZSI6IkV4Y2x1c2l2ZSBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjE2NDcxNy5qcGciLCJwcmljZSI6IjMwMDAuMDAiLCJxdHkiOjN9LCIxMSI6eyJwcm9kdWN0X25hbWUiOiJXb29kZW4gSG9tZSBDaGFpciIsInBob3RvIjoiMTcyMDc4NjIzODY2MzkuanBnIiwicHJpY2UiOiIyNTAwLjAwIiwicXR5IjoyfSwiMTIiOnsicHJvZHVjdF9uYW1lIjoiQ2xhc3NpYyBXb29kZW4gSG9tZSBDaGFpciIsInBob3RvIjoiMTcyMDc4NjI1MTY3MTMuanBnIiwicHJpY2UiOiIyODAwLjAwIiwicXR5IjoyfSwiMTciOnsicHJvZHVjdF9uYW1lIjoiVGFibGUgQmxhY2siLCJwaG90byI6IjE3MjA5MjQxNTYyMjEyLmpwZyIsInByaWNlIjoiMjcwMDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjczNjAwLCJkaXNjb3VudCI6MCwiY3Vwb24iOiIiLCJ0b3RhbF9xdHkiOjl9','','Online Payment',0.00,'',NULL,NULL,NULL,'2024-07-14',1,NULL,NULL,NULL),(51,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,7500.00,0.00,3,'eyJpdGVtIjp7IjExIjp7InByb2R1Y3RfbmFtZSI6Ildvb2RlbiBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjM4NjYzOS5qcGciLCJwcmljZSI6IjI1MDAuMDAiLCJxdHkiOjN9fSwidG90YWwiOjc1MDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6M30=','','Online Payment',0.00,'',NULL,NULL,NULL,'2024-07-14',1,NULL,NULL,NULL),(52,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,5000.00,0.00,2,'eyJpdGVtIjp7IjExIjp7InByb2R1Y3RfbmFtZSI6Ildvb2RlbiBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjM4NjYzOS5qcGciLCJwcmljZSI6IjI1MDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjUwMDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6Mn0=','','Online Payment',0.00,'',NULL,NULL,NULL,'2024-07-15',1,NULL,NULL,NULL),(53,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,6000.00,0.00,2,'eyJpdGVtIjp7IjEwIjp7InByb2R1Y3RfbmFtZSI6IkV4Y2x1c2l2ZSBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjE2NDcxNy5qcGciLCJwcmljZSI6IjMwMDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjYwMDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6Mn0=','','Online Payment',0.00,'',NULL,NULL,NULL,'2024-07-15',1,NULL,NULL,NULL),(54,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,5600.00,0.00,2,'eyJpdGVtIjp7IjEyIjp7InByb2R1Y3RfbmFtZSI6IkNsYXNzaWMgV29vZGVuIEhvbWUgQ2hhaXIiLCJwaG90byI6IjE3MjA3ODYyNTE2NzEzLmpwZyIsInByaWNlIjoiMjgwMC4wMCIsInF0eSI6Mn19LCJ0b3RhbCI6NTYwMCwiZGlzY291bnQiOjAsImN1cG9uIjoiIiwidG90YWxfcXR5IjoyfQ==','','Online Payment',0.00,'',NULL,NULL,NULL,'2024-07-15',1,NULL,NULL,NULL),(55,'2','2','Md','Md','Kamal','Kamal','none','none','Chittagong','Chittagong','Khagrachari','Khagrachari','Ramgarh','Ramgarh','kamal@gmail.com','kamal@gmail.com',1559075906,1559075906,5000.00,0.00,2,'eyJpdGVtIjp7IjExIjp7InByb2R1Y3RfbmFtZSI6Ildvb2RlbiBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjM4NjYzOS5qcGciLCJwcmljZSI6IjI1MDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjUwMDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6Mn0=','','Online Payment',0.00,'',NULL,NULL,NULL,'2024-08-12',1,NULL,NULL,NULL),(56,'2','2','Md','Md','Kamal','Kamal','none','none','Chittagong','Chittagong','Khagrachari','Khagrachari','Ramgarh','Ramgarh','kamal@gmail.com','kamal@gmail.com',1559075906,1559075906,5000.00,0.00,2,'eyJpdGVtIjp7IjExIjp7InByb2R1Y3RfbmFtZSI6Ildvb2RlbiBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjM4NjYzOS5qcGciLCJwcmljZSI6IjI1MDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjUwMDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6Mn0=','','Online Payment',0.00,'',NULL,NULL,NULL,'2024-08-12',1,NULL,NULL,NULL),(57,'2','2','Md','Md','Kamal','Kamal','none','none','Chittagong','Chittagong','Khagrachari','Khagrachari','Ramgarh','Ramgarh','kamal@gmail.com','kamal@gmail.com',1559075906,1559075906,5000.00,0.00,2,'eyJpdGVtIjp7IjExIjp7InByb2R1Y3RfbmFtZSI6Ildvb2RlbiBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjM4NjYzOS5qcGciLCJwcmljZSI6IjI1MDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjUwMDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6Mn0=','','Online Payment',0.00,'',NULL,NULL,NULL,'2024-08-12',1,NULL,NULL,NULL),(58,'2','2','Md','Md','Kamal','Kamal','none','none','Chittagong','Chittagong','Khagrachari','Khagrachari','Ramgarh','Ramgarh','kamal@gmail.com','kamal@gmail.com',1559075906,1559075906,7500.00,0.00,3,'eyJpdGVtIjp7IjExIjp7InByb2R1Y3RfbmFtZSI6Ildvb2RlbiBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjM4NjYzOS5qcGciLCJwcmljZSI6IjI1MDAuMDAiLCJxdHkiOjN9fSwidG90YWwiOjc1MDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6M30=','','Online Payment',0.00,'',NULL,NULL,NULL,'2024-08-12',1,NULL,NULL,NULL),(59,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,4300.00,0.00,1,'eyJpdGVtIjp7IjE1Ijp7InByb2R1Y3RfbmFtZSI6IkhvbWUgV29vZGVuIFRhYmxlIiwicGhvdG8iOiIxNzIwODQ3NDI1MzkyNS5qcGciLCJwcmljZSI6IjQzMDAuMDAiLCJxdHkiOjF9fSwidG90YWwiOjQzMDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6MX0=','','Online Payment',0.00,'','SSLCZ_TEST_66bae364a4b1c',NULL,NULL,'2024-08-13',1,NULL,NULL,NULL),(60,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,3000.00,0.00,1,'eyJpdGVtIjp7IjEwIjp7InByb2R1Y3RfbmFtZSI6IkV4Y2x1c2l2ZSBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjE2NDcxNy5qcGciLCJwcmljZSI6IjMwMDAuMDAiLCJxdHkiOjF9fSwidG90YWwiOjMwMDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6MX0=','','Online Payment',0.00,'','SSLCZ_TEST_66bae3893ebc8',NULL,NULL,'2024-08-13',1,NULL,NULL,NULL),(61,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,3000.00,0.00,1,'eyJpdGVtIjp7IjEwIjp7InByb2R1Y3RfbmFtZSI6IkV4Y2x1c2l2ZSBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjE2NDcxNy5qcGciLCJwcmljZSI6IjMwMDAuMDAiLCJxdHkiOjF9fSwidG90YWwiOjMwMDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6MX0=','','Online Payment',0.00,'','SSLCZ_TEST_66bae4176885f',NULL,NULL,'2024-08-13',1,NULL,NULL,NULL),(62,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,5600.00,0.00,2,'eyJpdGVtIjp7IjEyIjp7InByb2R1Y3RfbmFtZSI6IkNsYXNzaWMgV29vZGVuIEhvbWUgQ2hhaXIiLCJwaG90byI6IjE3MjA3ODYyNTE2NzEzLmpwZyIsInByaWNlIjoiMjgwMC4wMCIsInF0eSI6Mn19LCJ0b3RhbCI6NTYwMCwiZGlzY291bnQiOjAsImN1cG9uIjoiIiwidG90YWxfcXR5IjoyfQ==','','Online Payment',0.00,'','SSLCZ_TEST_66baf95022083',NULL,NULL,'2024-08-13',1,NULL,NULL,NULL),(63,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,9000.00,0.00,3,'eyJpdGVtIjp7IjEwIjp7InByb2R1Y3RfbmFtZSI6IkV4Y2x1c2l2ZSBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjE2NDcxNy5qcGciLCJwcmljZSI6IjMwMDAuMDAiLCJxdHkiOjN9fSwidG90YWwiOjkwMDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6M30=','','Online Payment',0.00,'','SSLCZ_TEST_66bc3483b1174',NULL,NULL,'2024-08-14',1,NULL,NULL,NULL),(64,'','','','','','','','','','','','','','','','',0,0,0.00,0.00,0,'bnVsbA==','',NULL,0.00,'','SSLCZ_TEST_66bc35ae45b4d',NULL,NULL,'2024-08-14',1,NULL,NULL,NULL),(65,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,5000.00,0.00,2,'eyJpdGVtIjp7IjExIjp7InByb2R1Y3RfbmFtZSI6Ildvb2RlbiBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjM4NjYzOS5qcGciLCJwcmljZSI6IjI1MDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjUwMDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6Mn0=','','Online Payment',0.00,'','SSLCZ_TEST_66bc35c3db179',NULL,NULL,'2024-08-14',1,NULL,NULL,NULL),(66,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,10000.00,0.00,4,'eyJpdGVtIjp7IjExIjp7InByb2R1Y3RfbmFtZSI6Ildvb2RlbiBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjM4NjYzOS5qcGciLCJwcmljZSI6IjI1MDAuMDAiLCJxdHkiOjR9fSwidG90YWwiOjEwMDAwLCJkaXNjb3VudCI6MCwiY3Vwb24iOiIiLCJ0b3RhbF9xdHkiOjR9','','Online Payment',0.00,'','SSLCZ_TEST_66bc35f1df645',NULL,NULL,'2024-08-14',1,NULL,NULL,NULL),(67,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,5000.00,0.00,2,'eyJpdGVtIjp7IjExIjp7InByb2R1Y3RfbmFtZSI6Ildvb2RlbiBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjM4NjYzOS5qcGciLCJwcmljZSI6IjI1MDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjUwMDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6Mn0=','','Online Payment',0.00,'','SSLCZ_TEST_66bc39844fdf1',NULL,NULL,'2024-08-14',1,NULL,NULL,NULL),(68,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,5000.00,0.00,2,'eyJpdGVtIjp7IjExIjp7InByb2R1Y3RfbmFtZSI6Ildvb2RlbiBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjM4NjYzOS5qcGciLCJwcmljZSI6IjI1MDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjUwMDAsImRpc2NvdW50IjowLCJjdXBvbiI6IiIsInRvdGFsX3F0eSI6Mn0=','','Online Payment',0.00,'','SSLCZ_TEST_66bc3f2f7e4fe',NULL,NULL,'2024-08-14',1,NULL,NULL,NULL),(69,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,29200.00,0.00,2,'eyJpdGVtIjp7IjE0Ijp7InByb2R1Y3RfbmFtZSI6IkNsYXNzaWMgRm9tZSBBdHRhY2ggQ2hhaXIiLCJwaG90byI6IjE3MjA3ODcxNjg3NzMzLmpwZyIsInByaWNlIjoiMjIwMC4wMCIsInF0eSI6MX0sIjE3Ijp7InByb2R1Y3RfbmFtZSI6IlRhYmxlIEJsYWNrIiwicGhvdG8iOiIxNzIwOTI0MTU2MjIxMi5qcGciLCJwcmljZSI6IjI3MDAwLjAwIiwicXR5IjoxfX0sInRvdGFsIjoyOTIwMCwiZGlzY291bnQiOjAsImN1cG9uIjoiIiwidG90YWxfcXR5IjoyfQ==','','Online Payment',0.00,'','SSLCZ_TEST_66bc3fab3baa6',NULL,NULL,'2024-08-14',1,NULL,NULL,NULL),(70,'2','2','Md','Md','Ramzan','Ramzan','ISDB-WDPF','ISDB-WDPF','Chittagong','Chittagong','Bayejid','Bayejid','Oxizyn','Oxizyn','mdramzanaliisdbr59@gmail.com','mdramzanaliisdbr59@gmail.com',1559075906,1559075906,38000.00,0.00,2,'eyJpdGVtIjp7IjI0Ijp7InByb2R1Y3RfbmFtZSI6IkhvbWUgVXNlcyBTb2ZhIiwicGhvdG8iOiIxNzIwOTI0Njc4NTc0MS5qcGciLCJwcmljZSI6IjE5MDAwLjAwIiwicXR5IjoyfX0sInRvdGFsIjozODAwMCwiZGlzY291bnQiOjAsImN1cG9uIjoiIiwidG90YWxfcXR5IjoyfQ==','','Online Payment',0.00,'','SSLCZ_TEST_66bd71a24c2bc',NULL,NULL,'2024-08-15',1,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase`
--

LOCK TABLES `purchase` WRITE;
/*!40000 ALTER TABLE `purchase` DISABLE KEYS */;
INSERT INTO `purchase` VALUES (1,23,'2024-07-14',55,52900.00,5.00,2645.00,55540.00,NULL,'2024-07-14 05:01:58',24,NULL,NULL,NULL),(2,23,'2024-07-14',150,160000.00,5000.00,4800.00,159800.00,NULL,'2024-07-14 05:12:41',26,NULL,NULL,NULL),(3,23,'2024-07-14',100,40000.00,500.00,800.00,40300.00,NULL,'2024-07-14 05:13:48',25,NULL,NULL,NULL),(4,23,'2024-07-14',500,1000000.00,5000.00,50000.00,1045000.00,NULL,'2024-07-14 05:14:29',25,NULL,NULL,NULL),(5,23,'2024-07-14',100,640000.00,4000.00,12800.00,648800.00,NULL,'2024-07-14 05:53:19',25,NULL,NULL,NULL),(6,23,'2024-07-14',100,184900.00,5000.00,3698.00,183598.00,NULL,'2024-07-14 05:55:42',25,NULL,NULL,NULL),(7,25,'2024-07-14',90,640000.00,500.00,32000.00,671500.00,NULL,'2024-07-14 05:56:42',25,NULL,NULL,NULL),(8,23,'2024-07-14',87,261864.00,100.00,5237.28,267001.00,NULL,'2024-07-14 06:41:59',25,NULL,NULL,NULL);
/*!40000 ALTER TABLE `purchase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_details`
--

DROP TABLE IF EXISTS `purchase_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchase_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_id` int(11) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_details`
--

LOCK TABLES `purchase_details` WRITE;
/*!40000 ALTER TABLE `purchase_details` DISABLE KEYS */;
INSERT INTO `purchase_details` VALUES (1,1,'2024-07-14',10,55.00,230.00,'2024-07-14 05:01:58',24,NULL,NULL,NULL),(2,2,'2024-07-14',10,150.00,400.00,'2024-07-14 05:12:41',26,NULL,NULL,NULL),(3,3,'2024-07-14',11,100.00,200.00,'2024-07-14 05:13:48',25,NULL,NULL,NULL),(4,4,'2024-07-14',23,500.00,1000.00,'2024-07-14 05:14:29',25,NULL,NULL,NULL),(5,5,'2024-07-14',10,100.00,800.00,'2024-07-14 05:53:19',25,NULL,NULL,NULL),(6,6,'2024-07-14',18,100.00,430.00,'2024-07-14 05:55:42',25,NULL,NULL,NULL),(7,7,'2024-07-14',20,90.00,800.00,'2024-07-14 05:56:42',25,NULL,NULL,NULL),(8,8,'2024-07-14',17,45.00,42.00,'2024-07-14 06:41:59',25,NULL,NULL,NULL),(9,8,'2024-07-14',20,42.00,510.00,'2024-07-14 06:41:59',25,NULL,NULL,NULL);
/*!40000 ALTER TABLE `purchase_details` ENABLE KEYS */;
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
  `sales_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` VALUES (1,1,NULL,10,55.00,230.00,'2024-07-14','2024-07-14 05:01:58',24,NULL,NULL,NULL),(2,2,NULL,10,150.00,400.00,'2024-07-14','2024-07-14 05:12:41',26,NULL,NULL,NULL),(3,3,NULL,11,100.00,200.00,'2024-07-14','2024-07-14 05:13:48',25,NULL,NULL,NULL),(4,4,NULL,23,500.00,1000.00,'2024-07-14','2024-07-14 05:14:29',25,NULL,NULL,NULL),(5,NULL,48,10,-1.00,3000.00,'2024-07-14','2024-07-14 05:23:19',1,NULL,NULL,NULL),(6,NULL,49,10,-2.00,3000.00,'2024-07-14','2024-07-14 05:45:55',1,NULL,NULL,NULL),(7,NULL,49,11,-2.00,2500.00,'2024-07-14','2024-07-14 05:45:55',1,NULL,NULL,NULL),(8,NULL,49,12,-2.00,2800.00,'2024-07-14','2024-07-14 05:45:55',1,NULL,NULL,NULL),(9,5,NULL,10,100.00,800.00,'2024-07-14','2024-07-14 05:53:19',25,NULL,NULL,NULL),(10,6,NULL,18,100.00,430.00,'2024-07-14','2024-07-14 05:55:42',25,NULL,NULL,NULL),(11,7,NULL,20,90.00,800.00,'2024-07-14','2024-07-14 05:56:42',25,NULL,NULL,NULL),(12,NULL,50,10,-3.00,3000.00,'2024-07-14','2024-07-14 06:37:20',1,NULL,NULL,NULL),(13,NULL,50,11,-2.00,2500.00,'2024-07-14','2024-07-14 06:37:20',1,NULL,NULL,NULL),(14,NULL,50,12,-2.00,2800.00,'2024-07-14','2024-07-14 06:37:20',1,NULL,NULL,NULL),(15,NULL,50,17,-2.00,27000.00,'2024-07-14','2024-07-14 06:37:20',1,NULL,NULL,NULL),(16,8,NULL,17,45.00,42.00,'2024-07-14','2024-07-14 06:41:59',25,NULL,NULL,NULL),(17,8,NULL,20,42.00,510.00,'2024-07-14','2024-07-14 06:41:59',25,NULL,NULL,NULL),(18,NULL,51,11,-3.00,2500.00,'2024-07-14','2024-07-14 08:41:35',1,NULL,NULL,NULL),(19,NULL,52,11,-2.00,2500.00,'2024-07-15','2024-07-15 04:47:42',1,NULL,NULL,NULL),(20,NULL,53,10,-2.00,3000.00,'2024-07-15','2024-07-15 08:51:55',1,NULL,NULL,NULL),(21,NULL,54,12,-2.00,2800.00,'2024-07-15','2024-07-15 09:54:03',1,NULL,NULL,NULL),(22,NULL,55,11,-2.00,2500.00,'2024-08-12','2024-08-12 09:02:25',1,NULL,NULL,NULL),(23,NULL,56,11,-2.00,2500.00,'2024-08-12','2024-08-12 09:05:25',1,NULL,NULL,NULL),(24,NULL,57,11,-2.00,2500.00,'2024-08-12','2024-08-12 09:06:07',1,NULL,NULL,NULL),(25,NULL,58,11,-3.00,2500.00,'2024-08-12','2024-08-12 09:11:33',1,NULL,NULL,NULL),(26,NULL,59,15,-1.00,4300.00,'2024-08-13','2024-08-13 06:39:00',1,NULL,NULL,NULL),(27,NULL,60,10,-1.00,3000.00,'2024-08-13','2024-08-13 06:39:37',1,NULL,NULL,NULL),(28,NULL,61,10,-1.00,3000.00,'2024-08-13','2024-08-13 06:41:59',1,NULL,NULL,NULL),(29,NULL,62,12,-2.00,2800.00,'2024-08-13','2024-08-13 08:12:32',1,NULL,NULL,NULL),(30,NULL,63,10,-3.00,3000.00,'2024-08-14','2024-08-14 06:37:23',1,NULL,NULL,NULL),(31,NULL,65,11,-2.00,2500.00,'2024-08-14','2024-08-14 06:42:43',1,NULL,NULL,NULL),(32,NULL,66,11,-4.00,2500.00,'2024-08-14','2024-08-14 06:43:29',1,NULL,NULL,NULL),(33,NULL,67,11,-2.00,2500.00,'2024-08-14','2024-08-14 06:58:44',1,NULL,NULL,NULL),(34,NULL,68,11,-2.00,2500.00,'2024-08-14','2024-08-14 07:22:55',1,NULL,NULL,NULL),(35,NULL,69,14,-1.00,2200.00,'2024-08-14','2024-08-14 07:24:59',1,NULL,NULL,NULL),(36,NULL,69,17,-1.00,27000.00,'2024-08-14','2024-08-14 07:24:59',1,NULL,NULL,NULL),(37,NULL,70,24,-2.00,19000.00,'2024-08-15','2024-08-15 05:10:26',1,NULL,NULL,NULL);
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` VALUES (18,'Md Fahim','17205523075134.jpg','Fuji Film','Khagrachari','Ramgarh','Ramgarh','mdfahim@gmail.com','0155','2024-07-09 21:04:07',1,'2024-07-09 21:11:47',1,'2024-07-12 11:20:02'),(23,'Jon Enderson','17207836206454.jpg','Aotobi Furniture LTD','GEC','Paslish','Paslish','furniture@autobi.com','015574258489','2024-07-12 13:27:00',1,'2024-07-12 13:59:55',1,NULL),(24,'Wiliem Kaley','17207837269553.jpg','RFL Furniture LTD','Uttora','Uttora','Abdullah Pur','furniture@rfl.com','01987214598','2024-07-12 13:28:46',1,NULL,NULL,NULL),(25,'Micel Willem','17207846566754.jpg','Ikea Ltd','Stock Home','Atowa','Atowa','store@ikea.com','97458789452','2024-07-12 13:44:16',1,NULL,NULL,NULL);
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

-- Dump completed on 2024-08-15  9:17:06
