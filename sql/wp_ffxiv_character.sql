-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: fenrir.stelth2000inc.com
-- Generation Time: Jan 29, 2020 at 04:14 PM
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
-- Table structure for table `wp_ffxiv_character`
--

CREATE TABLE IF NOT EXISTS `wp_ffxiv_character` (
  `character_id` int(10) NOT NULL AUTO_INCREMENT,
  `character_name` varchar(255) NOT NULL,
  `datacenter_id` int(10) NOT NULL,
  `server_id` int(10) NOT NULL,
  `character_title` varchar(255) DEFAULT NULL,
  `character_race` varchar(10) NOT NULL,
  `character_tribe` varchar(255) NOT NULL,
  `character_gardian` varchar(255) NOT NULL,
  `character_grand_company` varchar(255) DEFAULT NULL,
  `character_free_company` varchar(255) DEFAULT NULL,
  `character_minion_percent` int(3) NOT NULL,
  `character_mount_percent` int(3) NOT NULL,
  `character_ast_level` int(2) DEFAULT NULL,
  `character_whm_level` int(3) DEFAULT NULL,
  `character_sch_level` int(3) DEFAULT NULL,
  `character_gnb_level` int(3) DEFAULT NULL,
  `character_drk_level` int(3) DEFAULT NULL,
  `character_war_level` int(3) DEFAULT NULL,
  `character_pld_level` int(3) DEFAULT NULL,
  `character_blu_level` int(3) DEFAULT NULL,
  `character_rdm_level` int(3) DEFAULT NULL,
  `character_blm_level` int(3) DEFAULT NULL,
  `character_smn_level` int(3) DEFAULT NULL,
  `character_brd_level` int(3) DEFAULT NULL,
  `character_mch_level` int(3) DEFAULT NULL,
  `character_dnc_level` int(3) DEFAULT NULL,
  `character_sam_level` int(3) DEFAULT NULL,
  `character_nin_level` int(3) DEFAULT NULL,
  `character_drg_level` int(3) DEFAULT NULL,
  `character_mnk_level` int(3) DEFAULT NULL,
  `character_alc_level` int(3) DEFAULT NULL,
  `character_cul_level` int(3) DEFAULT NULL,
  `character_wvr_level` int(3) DEFAULT NULL,
  `character_ltw_level` int(3) DEFAULT NULL,
  `character_crp_level` int(3) DEFAULT NULL,
  `character_gsm_level` int(3) DEFAULT NULL,
  `character_arm_level` int(3) DEFAULT NULL,
  `character_bsm_level` int(3) DEFAULT NULL,
  `character_btn_level` int(3) DEFAULT NULL,
  `character_min_level` int(3) DEFAULT NULL,
  `character_fsh_level` int(3) DEFAULT NULL,
  PRIMARY KEY (`character_id`),
  KEY `wp_ffxiv_character` (`datacenter_id`),
  KEY `server_id` (`server_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wp_ffxiv_character`
--
ALTER TABLE `wp_ffxiv_character`
  ADD CONSTRAINT `wp_ffxiv_character` FOREIGN KEY (`datacenter_id`) REFERENCES `wp_ffxiv_datacenters` (`datacenter_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wp_ffxiv_character_ibfk_1` FOREIGN KEY (`server_id`) REFERENCES `wp_ffxiv_servers` (`server_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

