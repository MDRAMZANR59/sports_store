-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2024 at 01:26 AM
-- Server version: 10.6.18-MariaDB-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weebpbih_furni`
--

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `id` int(11) NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`id`, `name`, `email`, `contact`, `photo`, `username`, `password`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(24, 'kamal', 'kamal@gmil.com', '0155', '17205520276135.jpg', 'kamal', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, '2024-07-09 21:07:07', NULL, NULL, 1, NULL),
(25, 'Md Ramzan Ali', 'mdramzanaliisdbr59@gmail.com', '01559075906', '17209250592603.jpg', 'Ramzan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, '2024-07-14 02:44:19', NULL, NULL, NULL, NULL),
(26, 'Abu Foysal', 'abufoysal581@gmail.com', '01862034818', '17209270177853.jpg', 'Bappy', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, '2024-07-14 03:16:57', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(2, 'Home Accesorice', '2024-07-10 07:53:38', 1, NULL, NULL, NULL),
(3, 'Office Accesorice', '2024-07-10 07:53:57', 1, NULL, NULL, NULL),
(4, 'Store Accesoris', '2024-07-12 13:45:37', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `cupon_code` varchar(100) NOT NULL,
  `discount` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `cupon_code`, `discount`, `start_date`, `finish_date`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_at`) VALUES
(1, 'DD5XIF', 52, '2024-07-01', '2024-07-30', '1', '2024-07-03', '1', '2024-07-01', '2024-07-14'),
(2, 'WDPF', 50, '2024-07-01', '2024-07-22', '1', '2024-07-01', '1', '2024-07-14', NULL),
(3, '', 0, '0000-00-00', '0000-00-00', '1', '2024-07-02', '1', '2024-07-02', '2024-07-02'),
(4, 'sdfsd', 74, '2024-07-10', '2024-07-24', '1', '2024-07-02', '1', '2024-07-02', '2024-07-02'),
(5, 'r59', 5, '2024-07-02', '2024-07-04', '1', '2024-07-02', '1', '2024-07-02', '0000-00-00'),
(6, 'r59', 10, '2024-07-05', '2024-07-31', '1', '2024-07-07', '1', '2024-07-14', NULL),
(7, 'tanbhit12', 10, '2024-07-13', '2024-07-28', '1', '2024-07-14', '1', '2024-07-14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `country`, `first_name`, `last_name`, `photo`, `password`, `company_name`, `address`, `state`, `post`, `email`, `phone`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(40, '2', 'Md', 'kamal', '17207151173284.jpg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Fuji Film', 'Khagrachari', 'Ramgarh', 'Ramgarh', 'kamal@gmil.com', 1559075906, '2024-07-11 18:25:17', NULL, NULL, 1, '2024-07-14 02:44:46'),
(41, '2', 'sohana', 'afsana', '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 'Shishu kabarsthan, DC road, chawkbazar,chittagong', 'chittagong', '4202', 'sohanaafsana16@gmail.com', 1876635583, '2024-07-13 14:26:56', NULL, NULL, 1, '2024-07-14 02:44:48'),
(42, '2', 'md', 'kamal', '17209235045719.jpg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 'Chittagong', 'Khagrachari', 'Ramgarh', 'kamal@gmail.com', 1557425897, '2024-07-14 02:18:24', NULL, NULL, 1, '2024-07-14 02:44:51'),
(43, '2', 'Md', 'Ramzan', '17209252699382.jpg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ISDB-WDPF', 'Chittagong', 'Bayejid', 'Oxizyn', 'mdramzanaliisdbr59@gmail.com', 1559075906, '2024-07-14 02:47:49', NULL, NULL, NULL, NULL),
(46, '2', 'abu', 'foysal', '17209291687864.jpg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'RFL Furniture LTD', 'Chittagong', 'Bayejid', 'Oxizyn', 'abufoysal581@gmail.com', 1862034818, '2024-07-14 03:52:48', NULL, NULL, 1, '2024-07-14 03:54:13'),
(48, '2', 'tanbhir', 'hossin', '17209295396804.jpg', '8cb2237d0679ca88db6464eac60da96345513964', 'rfl', 'Chittagong', 'bangladesh', 'ctg', 'tanbhirhossin7@gmail.com', 1306725638, '2024-07-14 03:58:59', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `product_name`, `details`, `photo`, `price`, `catagory_id`, `company_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(10, 'Exclusive Home Chair', 'Classic Home Chair', '17207862164717.jpg', 3000.00, 2, 'Aotobi Furniture LTD', '2024-07-12 14:00:06', 1, '2024-07-12 14:14:42', 1, NULL),
(11, 'Wooden Home Chair', 'Classic Home Chair', '17207862386639.jpg', 2500.00, 2, 'Aotobi Furniture LTD', '2024-07-12 14:02:05', 1, '2024-07-12 14:15:07', 1, NULL),
(12, 'Classic Wooden Home Chair', 'Classic Home Chair', '17207862516713.jpg', 2800.00, 2, 'Aotobi Furniture LTD', '2024-07-12 14:05:59', 1, '2024-07-12 14:15:22', 1, NULL),
(13, 'Luxary Home Chair', 'Rocking Wooden Home Chair', '17207870834088.jpg', 4500.00, 2, 'Aotobi Furniture LTD', '2024-07-12 14:24:43', 1, NULL, 1, '2024-07-12 14:26:30'),
(14, 'Classic Fome Attach Chair', 'Fome Attach Classic Home Chair', '17207871687733.jpg', 2200.00, 2, 'Aotobi Furniture LTD', '2024-07-12 14:26:08', 1, NULL, NULL, NULL),
(15, 'Home Wooden Table', 'Rounded Wooden Table', '17208474253925.jpg', 4300.00, 2, 'Autobi Furniture', '2024-07-13 05:10:25', 1, NULL, NULL, NULL),
(16, 'Executive office table Golden', 'Executive office table black', '17208943593001.jpg', 8000.00, 3, 'RFL Furniture LTD', '2024-07-13 18:12:39', 1, '2024-07-14 02:27:26', 1, NULL),
(17, 'Table Black', 'Exclusive Office Table Black', '17209241562212.jpg', 27000.00, 3, 'RFL Furniture LTD', '2024-07-14 02:29:16', 1, '2024-07-14 02:34:22', 1, NULL),
(18, 'Office Table Singel', 'Office Table Board Black', '17209242075718.jpg', 15000.00, 3, 'RFL Furniture LTD', '2024-07-14 02:30:07', 1, '2024-07-14 02:34:33', 1, NULL),
(19, 'Office table Board ', 'Exclusive office table of board', '17209242733114.jpg', 20000.00, 3, 'RFL Furniture LTD', '2024-07-14 02:31:13', 1, '2024-07-14 02:34:49', 1, NULL),
(20, 'Rounded Table', 'Roundad Home Table', '17209243586261.jpg', 12000.00, 2, 'Autobi Furniture', '2024-07-14 02:32:38', 1, NULL, NULL, NULL),
(21, 'Square Table Board', 'Home Uses Table Square', '17209244147516.jpg', 16000.00, 2, 'Autobi Furniture', '2024-07-14 02:33:34', 1, NULL, NULL, NULL),
(22, 'Square Table Wooden', 'Home Uses Table Wooden', '17209245431359.jpg', 7500.00, 2, 'Autobi Furniture', '2024-07-14 02:35:43', 1, NULL, NULL, NULL),
(23, 'Home Uses Sofa', 'Exclusive Sofa', '17209246248596.jpg', 27000.00, 2, 'Autobi Furniture', '2024-07-14 02:37:04', 1, NULL, NULL, NULL),
(24, 'Home Uses Sofa', 'Home Uses Sofa Single', '17209246785741.jpg', 19000.00, 2, 'Karmo Furniture LTD', '2024-07-14 02:37:58', 1, NULL, NULL, NULL),
(25, 'Office Uses Sofa', 'Exclusive Office Sofa Black', '17209247549052.jpg', 56000.00, 4, 'Hatil Furniture TLD', '2024-07-14 02:39:14', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
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
  `created_at` date DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `bill_country`, `ship_country`, `bill_first_name`, `ship_first_name`, `bill_last_name`, `ship_last_name`, `bill_company_name`, `ship_company_name`, `bill_address`, `ship_address`, `bill_state`, `ship_state`, `bill_post`, `ship_post`, `bill_email`, `ship_email`, `bill_phone`, `ship_phone`, `total_amount`, `discount`, `total_qty`, `cart_data`, `coupon_code`, `payment_method`, `shiping_charge`, `notes`, `created_at`, `created_by`, `updated_by`, `updated_at`, `deleted_at`) VALUES
(21, '2', '1', 'none', '', 'none', '', 'none', '', 'none', '', 'none', '', 'none', '', 'eee@gmail', '', 0, 0, 200.00, 0.00, 2, 'eyJpdGVtIjp7IjgiOnsicHJvZHVjdF9uYW1lIjoiVGFibGUiLCJwaG90byI6IjE3MjA1OTEyNzgyNjczLmpwZyIsInByaWNlIjoiMTAwLjAwIiwicXR5IjoxfSwiNyI6eyJwcm9kdWN0X25hbWUiOiJDaGFpciIsInBob3RvIjoiMTcyMDU5MTIzNTUzMzUuanBnIiwicHJpY2UiOiIxMDAuMDAiLCJxdHkiOjF9fSwidG90YWwiOjIwMCwiZGlzY291bnQiOjAsImN1cG9uIjoiIiwidG90YWxfcXR5IjoyfQ==', '', NULL, 0.00, '', '2024-07-10', 1, NULL, NULL, NULL),
(22, '2', '2', 'Md', 'Md', 'kamal', 'kamal', 'Fuji Film', 'Fuji Film', 'Chittahong', 'Chittahong', 'Khagrachari', 'Khagrachari', 'Ramgarh', 'Ramgarh', 'kamal@gmail.com', 'kamal@gmail.com', 0, 0, 300.00, 30.00, 3, 'eyJpdGVtIjp7IjciOnsicHJvZHVjdF9uYW1lIjoiQ2hhaXIiLCJwaG90byI6IjE3MjA1OTEyMzU1MzM1LmpwZyIsInByaWNlIjoiMTAwLjAwIiwicXR5IjoyfSwiOCI6eyJwcm9kdWN0X25hbWUiOiJUYWJsZSIsInBob3RvIjoiMTcyMDU5MTI3ODI2NzMuanBnIiwicHJpY2UiOiIxMDAuMDAiLCJxdHkiOjF9fSwidG90YWwiOjMwMCwiZGlzY291bnQiOjMwLCJjdXBvbiI6InI1OSIsInRvdGFsX3F0eSI6M30=', 'r59', 'Online Payment', 0.00, '', '2024-07-11', 1, NULL, NULL, NULL),
(23, '2', '2', 'Md', 'Md', 'kamal', 'kamal', 'Fuji Film', 'Fuji Film', 'Khagrachari', 'Khagrachari', 'Ramgarh', 'Ramgarh', 'Ramgarh', 'Ramgarh', 'kamal@gmil.com', 'kamal@gmil.com', 1559075906, 1559075906, 400.00, 0.00, 4, 'eyJpdGVtIjp7IjciOnsicHJvZHVjdF9uYW1lIjoiQ2hhaXIiLCJwaG90byI6IjE3MjA1OTEyMzU1MzM1LmpwZyIsInByaWNlIjoiMTAwLjAwIiwicXR5IjoyfSwiOCI6eyJwcm9kdWN0X25hbWUiOiJUYWJsZSIsInBob3RvIjoiMTcyMDU5MTI3ODI2NzMuanBnIiwicHJpY2UiOiIxMDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjQwMCwiZGlzY291bnQiOjAsImN1cG9uIjoiIiwidG90YWxfcXR5Ijo0fQ==', '', 'Online Payment', 0.00, '', '2024-07-11', 1, NULL, NULL, NULL),
(24, '2', '2', 'sohana', 'sohana', 'afsana', 'afsana', '123', '', 'Shishu kabarsthan, DC road, chawkbazar,chittagong', 'Shishu kabarsthan, DC road, chawkbazar,chittagong', 'chittagong', 'chittagong', '4202', '4202', 'sohanaafsana16@gmail.com', 'sohanaafsana16@gmail.com', 1876635583, 1876635583, 7300.00, 0.00, 2, 'eyJpdGVtIjp7IjEwIjp7InByb2R1Y3RfbmFtZSI6IkV4Y2x1c2l2ZSBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjE2NDcxNy5qcGciLCJwcmljZSI6IjMwMDAuMDAiLCJxdHkiOjF9LCIxNSI6eyJwcm9kdWN0X25hbWUiOiJIb21lIFdvb2RlbiBUYWJsZSIsInBob3RvIjoiMTcyMDg0NzQyNTM5MjUuanBnIiwicHJpY2UiOiI0MzAwLjAwIiwicXR5IjoxfX0sInRvdGFsIjo3MzAwLCJkaXNjb3VudCI6MCwiY3Vwb24iOiIiLCJ0b3RhbF9xdHkiOjJ9', '', 'Online Payment', 0.00, '123', '2024-07-13', 1, NULL, NULL, NULL),
(32, '2', '2', 'Md', 'Md', 'Ramzan', 'Ramzan', 'ISDB-WDPF', 'ISDB-WDPF', 'Chittagong', 'Chittagong', 'Bayejid', 'Bayejid', 'Oxizyn', 'Oxizyn', 'mdramzanaliisdbr59@gmail.com', 'mdramzanaliisdbr59@gmail.com', 1559075906, 1559075906, 204000.00, 20400.00, 8, 'eyJpdGVtIjp7IjEwIjp7InByb2R1Y3RfbmFtZSI6IkV4Y2x1c2l2ZSBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjE2NDcxNy5qcGciLCJwcmljZSI6IjMwMDAuMDAiLCJxdHkiOjJ9LCIxNyI6eyJwcm9kdWN0X25hbWUiOiJUYWJsZSBCbGFjayIsInBob3RvIjoiMTcyMDkyNDE1NjIyMTIuanBnIiwicHJpY2UiOiIyNzAwMC4wMCIsInF0eSI6Mn0sIjIxIjp7InByb2R1Y3RfbmFtZSI6IlNxdWFyZSBUYWJsZSBCb2FyZCIsInBob3RvIjoiMTcyMDkyNDQxNDc1MTYuanBnIiwicHJpY2UiOiIxNjAwMC4wMCIsInF0eSI6Mn0sIjI1Ijp7InByb2R1Y3RfbmFtZSI6Ik9mZmljZSBVc2VzIFNvZmEiLCJwaG90byI6IjE3MjA5MjQ3NTQ5MDUyLmpwZyIsInByaWNlIjoiNTYwMDAuMDAiLCJxdHkiOjJ9fSwidG90YWwiOjIwNDAwMCwiZGlzY291bnQiOjIwNDAwLCJjdXBvbiI6InI1OSIsInRvdGFsX3F0eSI6OH0=', 'r59', 'Online Payment', 0.00, '', '2024-07-14', 1, NULL, NULL, NULL),
(48, '2', '2', 'Md', 'Md', 'Ramzan', 'Ramzan', 'ISDB-WDPF', 'ISDB-WDPF', 'Chittagong', 'Chittagong', 'Bayejid', 'Bayejid', 'Oxizyn', 'Oxizyn', 'mdramzanaliisdbr59@gmail.com', 'mdramzanaliisdbr59@gmail.com', 1559075906, 1559075906, 3000.00, 300.00, 1, 'eyJpdGVtIjp7IjEwIjp7InByb2R1Y3RfbmFtZSI6IkV4Y2x1c2l2ZSBIb21lIENoYWlyIiwicGhvdG8iOiIxNzIwNzg2MjE2NDcxNy5qcGciLCJwcmljZSI6IjMwMDAuMDAiLCJxdHkiOjF9fSwidG90YWwiOjMwMDAsImRpc2NvdW50IjozMDAsImN1cG9uIjoidGFuYmhpdDEyIiwidG90YWxfcXR5IjoxfQ==', 'tanbhit12', 'Online Payment', 0.00, '', '2024-07-14', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `supplier_id`, `purchase_date`, `qty`, `sub_amount`, `discount`, `vat`, `total_amount`, `purchase_data`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 23, '2024-07-14', 55, 52900.00, 5.00, 2645.00, 55540.00, NULL, '2024-07-14 05:01:58', 24, NULL, NULL, NULL),
(2, 23, '2024-07-14', 150, 160000.00, 5000.00, 4800.00, 159800.00, NULL, '2024-07-14 05:12:41', 26, NULL, NULL, NULL),
(3, 23, '2024-07-14', 100, 40000.00, 500.00, 800.00, 40300.00, NULL, '2024-07-14 05:13:48', 25, NULL, NULL, NULL),
(4, 23, '2024-07-14', 500, 1000000.00, 5000.00, 50000.00, 1045000.00, NULL, '2024-07-14 05:14:29', 25, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `purchase_id`, `purchase_date`, `item_id`, `qty`, `price`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 1, '2024-07-14', 10, 55.00, 230.00, '2024-07-14 05:01:58', 24, NULL, NULL, NULL),
(2, 2, '2024-07-14', 10, 150.00, 400.00, '2024-07-14 05:12:41', 26, NULL, NULL, NULL),
(3, 3, '2024-07-14', 11, 100.00, 200.00, '2024-07-14 05:13:48', 25, NULL, NULL, NULL),
(4, 4, '2024-07-14', 23, 500.00, 1000.00, '2024-07-14 05:14:29', 25, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `purchase_id`, `sales_id`, `item_id`, `qty`, `price`, `stock_date`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 1, NULL, 10, 55.00, 230.00, '2024-07-14', '2024-07-14 05:01:58', 24, NULL, NULL, NULL),
(2, 2, NULL, 10, 150.00, 400.00, '2024-07-14', '2024-07-14 05:12:41', 26, NULL, NULL, NULL),
(3, 3, NULL, 11, 100.00, 200.00, '2024-07-14', '2024-07-14 05:13:48', 25, NULL, NULL, NULL),
(4, 4, NULL, 23, 500.00, 1000.00, '2024-07-14', '2024-07-14 05:14:29', 25, NULL, NULL, NULL),
(5, NULL, 48, 10, -1.00, 3000.00, '2024-07-14', '2024-07-14 05:23:19', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `photo`, `company_name`, `address`, `state`, `post`, `email`, `contact`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(18, 'Md Fahim', '17205523075134.jpg', 'Fuji Film', 'Khagrachari', 'Ramgarh', 'Ramgarh', 'mdfahim@gmail.com', '0155', '2024-07-09 21:04:07', 1, '2024-07-09 21:11:47', 1, '2024-07-12 11:20:02'),
(23, 'Jon Enderson', '17207836206454.jpg', 'Aotobi Furniture LTD', 'GEC', 'Paslish', 'Paslish', 'furniture@autobi.com', '015574258489', '2024-07-12 13:27:00', 1, '2024-07-12 13:59:55', 1, NULL),
(24, 'Wiliem Kaley', '17207837269553.jpg', 'RFL Furniture LTD', 'Uttora', 'Uttora', 'Abdullah Pur', 'furniture@rfl.com', '01987214598', '2024-07-12 13:28:46', 1, NULL, NULL, NULL),
(25, 'Micel Willem', '17207846566754.jpg', 'Ikea Ltd', 'Stock Home', 'Atowa', 'Atowa', 'store@ikea.com', '97458789452', '2024-07-12 13:44:16', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authentication`
--
ALTER TABLE `authentication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
