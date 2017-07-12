-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Jul 06, 2017 at 09:19 AM
-- Server version: 10.1.21-MariaDB-1~jessie
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdf_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cb_album`
--

CREATE TABLE `cb_album` (
  `cid` int(11) NOT NULL,
  `creatorid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `slug` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `displayorder` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `isdeleted` int(11) NOT NULL,
  `deletedby` int(11) NOT NULL,
  `ipaddress` int(11) NOT NULL,
  `datecreated` int(11) NOT NULL,
  `datemodified` int(11) NOT NULL,
  `datedeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cb_comment`
--

CREATE TABLE `cb_comment` (
  `cid` int(11) NOT NULL,
  `creatorid` int(11) NOT NULL,
  `storeid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `displayorder` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `isdeleted` tinyint(4) NOT NULL,
  `deletedby` int(11) NOT NULL,
  `ipaddress` int(11) NOT NULL,
  `datecreated` int(11) NOT NULL,
  `datemodified` int(11) NOT NULL,
  `datedeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cb_media`
--

CREATE TABLE `cb_media` (
  `cid` int(11) NOT NULL,
  `storeid` int(11) NOT NULL,
  `albumid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `path` int(11) NOT NULL,
  `resourceserver` tinyint(4) NOT NULL,
  `displayorder` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `isdeleted` tinyint(4) NOT NULL,
  `deletedby` int(11) NOT NULL,
  `ipaddress` int(11) NOT NULL,
  `datecreated` int(11) NOT NULL,
  `datemodified` int(11) NOT NULL,
  `datedeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cb_store`
--

CREATE TABLE `cb_store` (
  `cid` int(11) NOT NULL,
  `creatorid` int(11) NOT NULL,
  `logoid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `workdaystart` time NOT NULL,
  `workdayend` time NOT NULL,
  `address` varchar(255) NOT NULL,
  `region` varchar(50) NOT NULL,
  `latitude` int(11) NOT NULL,
  `longitude` int(11) NOT NULL,
  `displayorder` smallint(6) NOT NULL,
  `status` smallint(6) NOT NULL,
  `isdeleted` tinyint(4) NOT NULL,
  `deletedby` int(11) NOT NULL,
  `ipaddress` int(11) NOT NULL,
  `datecreated` int(11) NOT NULL,
  `datemodified` int(11) NOT NULL,
  `datedeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cb_album`
--
ALTER TABLE `cb_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cb_comment`
--
ALTER TABLE `cb_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cb_media`
--
ALTER TABLE `cb_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cb_store`
--
ALTER TABLE `cb_store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cb_comment`
--
ALTER TABLE `cb_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cb_media`
--
ALTER TABLE `cb_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cb_store`
--
ALTER TABLE `cb_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
