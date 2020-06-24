-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 11:26 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `customer_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `customer_mail` text COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` double(10,0) NOT NULL,
  `sale_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `customer_name`, `customer_mail`, `product_id`, `product_name`, `product_price`, `sale_date`) VALUES
('1', 'Reto Fanzen', 'reto.fanzen@no-reply.rexx-systems.com', 1, 'Refactoring: Improving the Design of Existing Code', 50, '2019-04-02'),
('2', 'Reto Fanzen', 'reto.fanzen@no-reply.rexx-systems.com', 2, 'Clean Architecture: A Craftsman\'s Guide to Software Structure and Design', 25, '2019-05-01'),
('3', 'Leandro Bußmann', 'leandro.bussmann@no-reply.rexx-systems.com', 2, 'Clean Architecture: A Craftsman\'s Guide to Software Structure and Design', 25, '2019-05-01'),
('4', 'Hans Schäfer', 'hans.schaefer@no-reply.rexx-systems.com', 1, 'efactoring: Improving the Design of Existing Code', 38, '2019-06-07'),
('5', 'Mia Wyss', 'mia.wyss@no-reply.rexx-systems.com', 1, 'Refactoring: Improving the Design of Existing Code', 38, '2019-07-01'),
('6', 'Mia Wyss', 'mia.wyss@no-reply.rexx-systems.com', 2, 'Clean Architecture: A Craftsman\'s Guide to Software Structure and Design', 20, '2019-08-07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
