-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Jul 10, 2017 at 08:41 AM
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
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
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
-- Table structure for table `cb_comment`
--

CREATE TABLE `cb_comment` (
  `cid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
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
  `sid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fileextension` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `resourceserver` tinyint(4) NOT NULL,
  `commentcount` int(11) NOT NULL,
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
-- Table structure for table `cb_review`
--

CREATE TABLE `cb_review` (
  `cid` int(11) NOT NULL COMMENT 'Company ID',
  `uid` int(11) NOT NULL COMMENT 'Creator ID',
  `sid` int(11) NOT NULL COMMENT 'Store ID',
  `rtid` int(11) NOT NULL COMMENT 'Review type ID',
  `rpid` int(11) NOT NULL COMMENT 'Review property ID',
  `id` int(11) NOT NULL,
  `servicefeedback` text COMMENT 'Service feedback',
  `improvefeedback` text COMMENT 'Improve feedback',
  `ipaddress` int(11) NOT NULL,
  `datecreated` int(11) NOT NULL,
  `datemodified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cb_review`
--

INSERT INTO `cb_review` (`cid`, `uid`, `sid`, `rtid`, `rpid`, `id`, `servicefeedback`, `improvefeedback`, `ipaddress`, `datecreated`, `datemodified`) VALUES
(1, 1, 1, 1, 1, 1, NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cb_review_property`
--

CREATE TABLE `cb_review_property` (
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text,
  `displayorder` int(11) NOT NULL,
  `ipaddress` int(11) NOT NULL,
  `datecreated` int(11) NOT NULL,
  `datemodified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cb_review_property`
--

INSERT INTO `cb_review_property` (`cid`, `uid`, `id`, `name`, `description`, `displayorder`, `ipaddress`, `datecreated`, `datemodified`) VALUES
(0, 0, 1, 'Đạt', 'Chua thanh (Expresso)', 0, 0, 0, 0),
(0, 0, 2, 'Không đạt', 'Chua chát (Expresso)', 0, 0, 0, 0),
(0, 0, 3, 'Loại 1', NULL, 0, 0, 0, 0),
(0, 0, 4, 'Loại 2', NULL, 0, 0, 0, 0),
(0, 0, 5, 'Loại 3', NULL, 0, 0, 0, 0),
(0, 0, 6, 'Không sử dụng', NULL, 0, 0, 0, 0),
(0, 0, 7, 'Vàng nhạt', NULL, 0, 0, 0, 0),
(0, 0, 8, 'Nâu', NULL, 0, 0, 0, 0),
(0, 0, 9, 'Nâu đậm', NULL, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cb_review_type`
--

CREATE TABLE `cb_review_type` (
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `parentid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `displayorder` int(11) NOT NULL DEFAULT '0',
  `ipaddress` int(11) NOT NULL,
  `datecreated` int(11) NOT NULL,
  `datemodified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cb_review_type`
--

INSERT INTO `cb_review_type` (`cid`, `uid`, `id`, `parentid`, `name`, `description`, `displayorder`, `ipaddress`, `datecreated`, `datemodified`) VALUES
(0, 0, 1, 0, 'Đánh giá cà phê', '', 0, 0, 0, 0),
(0, 0, 2, 0, 'Tình hình quán', '', 0, 0, 0, 0),
(0, 0, 3, 0, 'Tay nghề nhân viên', '', 0, 0, 0, 0),
(0, 0, 4, 1, 'Loại cà phê đang dùng', '', 0, 0, 0, 0),
(0, 0, 5, 4, 'Cà phê phin', '', 0, 0, 0, 0),
(0, 0, 6, 4, 'Cà phê máy', '', 0, 0, 0, 0),
(0, 0, 7, 4, 'ESPRESSO', '', 0, 0, 0, 0),
(0, 0, 8, 4, 'CAPPUCCINO/LATTE', '', 0, 0, 0, 0),
(0, 0, 9, 4, 'PHIN ĐÁ/SỮA ĐÁ', '', 0, 0, 0, 0),
(0, 0, 10, 7, 'Độ dày crema', '', 0, 0, 0, 0),
(0, 0, 11, 7, 'Màu sắc', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cb_review_type_property`
--

CREATE TABLE `cb_review_type_property` (
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `rtid` int(11) NOT NULL,
  `rpid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `displayorder` int(11) NOT NULL,
  `isdefault` tinyint(4) NOT NULL,
  `ipaddress` int(11) NOT NULL,
  `datecreated` int(11) NOT NULL,
  `datemodified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cb_review_type_property`
--

INSERT INTO `cb_review_type_property` (`cid`, `uid`, `rtid`, `rpid`, `id`, `displayorder`, `isdefault`, `ipaddress`, `datecreated`, `datemodified`) VALUES
(0, 0, 11, 1, 1, 0, 1, 0, 0, 0),
(0, 0, 11, 8, 2, 0, 0, 0, 0, 0),
(0, 0, 11, 9, 3, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cb_store`
--

CREATE TABLE `cb_store` (
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `opening` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `region` varchar(50) NOT NULL,
  `latitude` int(11) NOT NULL,
  `longitude` int(11) NOT NULL,
  `logopath` varchar(255) NOT NULL,
  `coverpath` varchar(255) NOT NULL,
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`),
  ADD KEY `mid_2` (`mid`);

--
-- Indexes for table `cb_media`
--
ALTER TABLE `cb_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`),
  ADD KEY `aid` (`aid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `cb_review`
--
ALTER TABLE `cb_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `rpid` (`rpid`),
  ADD KEY `rtid` (`rtid`);

--
-- Indexes for table `cb_review_property`
--
ALTER TABLE `cb_review_property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cb_review_type`
--
ALTER TABLE `cb_review_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parentid` (`parentid`);

--
-- Indexes for table `cb_review_type_property`
--
ALTER TABLE `cb_review_type_property`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rtid` (`rtid`,`rpid`),
  ADD KEY `rpid` (`rpid`);

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
-- AUTO_INCREMENT for table `cb_review`
--
ALTER TABLE `cb_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cb_review_property`
--
ALTER TABLE `cb_review_property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cb_review_type`
--
ALTER TABLE `cb_review_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cb_review_type_property`
--
ALTER TABLE `cb_review_type_property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cb_store`
--
ALTER TABLE `cb_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cb_media`
--
ALTER TABLE `cb_media`
  ADD CONSTRAINT `cb_media_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `cb_album` (`id`),
  ADD CONSTRAINT `cb_media_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `cb_store` (`id`);

--
-- Constraints for table `cb_review_type_property`
--
ALTER TABLE `cb_review_type_property`
  ADD CONSTRAINT `cb_review_type_property_ibfk_1` FOREIGN KEY (`rtid`) REFERENCES `cb_review_type` (`id`),
  ADD CONSTRAINT `cb_review_type_property_ibfk_2` FOREIGN KEY (`rpid`) REFERENCES `cb_review_property` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
