-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: fenrir.stelth2000inc.com
-- Generation Time: Jan 29, 2020 at 04:17 PM
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
-- Table structure for table `wp_ffxiv_servers`
--

CREATE TABLE IF NOT EXISTS `wp_ffxiv_servers` (
  `server_id` int(10) NOT NULL AUTO_INCREMENT,
  `server_name` varchar(255) NOT NULL,
  `datacenter_id` int(10) NOT NULL,
  PRIMARY KEY (`server_id`),
  KEY `wp_ffxiv_servers` (`datacenter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_ffxiv_servers`
--

INSERT INTO `wp_ffxiv_servers` (`server_id`, `server_name`, `datacenter_id`) VALUES
(1, 'Aegis', 1),
(2, 'Atomos', 1),
(3, 'Carbuncle', 1),
(4, 'Garuda', 1),
(5, 'Gungnir', 1),
(6, 'Kujata', 1),
(7, 'Ramuh', 1),
(8, 'Tonberry', 1),
(9, 'Typhon', 1),
(10, 'Unicorn', 1),
(11, 'Alexander', 2),
(12, 'Bahamut', 2),
(13, 'Durandal', 2),
(14, 'Fenrir', 2),
(15, 'Ifrit', 2),
(16, 'Ridill', 2),
(17, 'Tiamat', 2),
(18, 'Ultima', 2),
(19, 'Ultima', 2),
(20, 'Valefor', 2),
(21, 'Yojimbo', 2),
(22, 'Zeromus', 2),
(23, 'Anima', 3),
(24, 'Asura', 3),
(25, 'Belias', 3),
(26, 'Chocobo', 3),
(27, 'Hades', 3),
(28, 'Ixion', 3),
(29, 'Mandragora', 3),
(30, 'Masamune', 3),
(31, 'Pandaemonium', 3),
(32, 'Shinryu', 3),
(33, 'Titan', 3),
(34, 'Adamantoise', 4),
(35, 'Cactuar', 4),
(36, 'Faerie', 4),
(37, 'Gilgamesh', 4),
(38, 'Jenova', 4),
(39, 'Midgardsormr', 4),
(40, 'Sargatanas', 4),
(41, 'Siren', 4),
(42, 'Behemoth', 5),
(43, 'Excalibur', 5),
(44, 'Exodus', 5),
(45, 'Famfrit', 5),
(46, 'Hyperion', 5),
(47, 'Lamia', 5),
(48, 'Leviathan', 5),
(49, 'Ultros', 5),
(50, 'Balmung', 6),
(51, 'Brynhildr', 6),
(52, 'Coeurl', 6),
(53, 'Diabolos', 6),
(54, 'Goblin', 6),
(55, 'Malboro', 6),
(56, 'Mateus', 6),
(57, 'Zalera', 6),
(58, 'Cerberus', 7),
(59, 'Louisoix', 7),
(60, 'Moogle', 7),
(61, 'Omega', 7),
(62, 'Ragnarok', 7),
(63, 'Spriggan', 7),
(64, 'Lich', 8),
(65, 'Odin', 8),
(66, 'Phoenix', 8),
(67, 'Shiva', 8),
(68, 'Twintania', 8),
(69, 'Zodiark', 8);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wp_ffxiv_servers`
--
ALTER TABLE `wp_ffxiv_servers`
  ADD CONSTRAINT `wp_ffxiv_servers` FOREIGN KEY (`datacenter_id`) REFERENCES `wp_ffxiv_datacenters` (`datacenter_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

