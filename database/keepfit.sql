-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2022 at 05:14 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keepfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `classlogin`
--

DROP TABLE IF EXISTS `classlogin`;
CREATE TABLE IF NOT EXISTS `classlogin` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(128) NOT NULL,
  `LastName` varchar(128) NOT NULL,
  `EmailAddress` varchar(128) NOT NULL,
  `UserPassword` varchar(128) NOT NULL,
  `UserDesignation` enum('Teacher','Instructor','','') NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `classlogin`
--

INSERT INTO `classlogin` (`UserID`, `FirstName`, `LastName`, `EmailAddress`, `UserPassword`, `UserDesignation`) VALUES
(1, 'David', 'Ofili', 'ofili.dn@gmail.com', '$2y$10$F9RUwY/SzaYoeyBzuyDJ8eOeiKW7bRKrH2dFuW7yqA/iSxUSLsgPO', 'Instructor'),
(2, 'Kunta', 'Kinte', 'bane@barnes.org', '$2y$10$vP/NLcohGz303Dcav/jvQemUFYbhTi5lpPzsnEBQyLdjfWAwBtI86', 'Teacher'),
(3, 'Kurt', 'Elliot', 'kurt@gmail.com', '$2y$10$IoeQMwf3Uoz15yPhBCccTuUvolgjCUWCBKk/OGoxdUZVDVLhRrfsO', 'Teacher'),
(4, 'Gary', 'Bush', 'gary@bush.com', '$2y$10$vKK1wxKR7Iwq8wiW2HaB2.2rhZ2SjliU8H8r/1A9KfjY6zhYQ8av2', 'Instructor'),
(5, 'Admin', 'Admin', 'admin@admin.admin', '$2y$10$3WILiL6UJfqa4rxC4K4d0u4I73lw2aA3wv9t7oJwxbU24wpKI3wha', 'Instructor'),
(6, 'Andy', 'Davito', 'andy@davito.com', '$2y$10$0PPe0pp6RTiJapI6tI2gvOUv8szRSmYMq0TBoyzehMe3pwnUn6gae', 'Teacher'),
(7, 'Dolph', 'Dwight', 'dolph.dwight@fashion.co.uk', '$2y$10$k1e2Ko2rfNVd4WHPfEkGtu3zIT..nuKGFTioNAF7pUcQzQ.bqz.ge', 'Instructor'),
(8, 'Adolph', 'Georgie', 'a.georgie@keepfit.edu', '$2y$10$NxhltvIvmzu9wUvJP1Mev.zagsrVgjQRILU9T2mWLovhnCl3FzUXe', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `profileimage`
--

DROP TABLE IF EXISTS `profileimage`;
CREATE TABLE IF NOT EXISTS `profileimage` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `EmailAddress` varchar(128) NOT NULL,
  `ImageStatus` int NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
