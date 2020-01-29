-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: fenrir.stelth2000inc.com
-- Generation Time: Jan 29, 2020 at 04:16 PM
-- Server version: 10.1.41-MariaDB-0+deb9u1
-- PHP Version: 7.3.11-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ffxiv_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_ffxiv_datacenters`
--

CREATE TABLE IF NOT EXISTS `wp_ffxiv_datacenters` (
  `datacenter_id` int(10) NOT NULL AUTO_INCREMENT,
  `datacenter_name` varchar(255) NOT NULL,
  PRIMARY KEY (`datacenter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_ffxiv_datacenters`
--

INSERT INTO `wp_ffxiv_datacenters` (`datacenter_id`, `datacenter_name`) VALUES
(1, 'Elemental'),
(2, 'Gaia'),
(3, 'Mana'),
(4, 'Aether'),
(5, 'Primal'),
(6, 'Crystal'),
(7, 'Chaos'),
(8, 'Light');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

