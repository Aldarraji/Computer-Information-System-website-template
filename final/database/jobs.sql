-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for jobs
CREATE DATABASE IF NOT EXISTS `jobs` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `jobs`;

-- Dumping structure for table jobs.joblisting
CREATE TABLE IF NOT EXISTS `joblisting` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table jobs.joblisting: ~7 rows (approximately)
/*!40000 ALTER TABLE `joblisting` DISABLE KEYS */;
INSERT INTO `joblisting` (`ID`, `name`, `description`) VALUES
	(1, 'IT_specialist', 'Universal Health Service'),
	(2, 'Systems Engineer', 'NANA Regional Corporation'),
	(3, 'SR_NETWORK_ADMINSTRATOR', 'Universal Health Service'),
	(4, 'Customer Support Engineer', 'Aerotek'),
	(5, 'Customer Support Engineer', 'Kaman Aerosystems'),
	(6, 'Field IT Service and Support Technician', 'AmerisourceBergen'),
	(7, 'Database Specialist Job\r\n', 'Xcel Energy');
/*!40000 ALTER TABLE `joblisting` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
