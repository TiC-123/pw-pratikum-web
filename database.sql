-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 03:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `device_brand` varchar(255) NOT NULL,
  `device_quantity` int(11) NOT NULL,
  `device_status` tinyint(1) NOT NULL,
  `device_image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `device_defect` tinyint(1) NOT NULL,
  `device_origin` varchar(255) NOT NULL,
  `device_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id`, `device_name`, `device_brand`, `device_quantity`, `device_status`, `device_image`, `type`, `device_defect`, `device_origin`, `device_id`) VALUES
(1, 'Monitor', 'Intel', 3, 0, 'monitor-intel.jpg', '21.5\" monitor Intel core i3 4160 3.6GHZ All-in-one PC', 0, 'Santa Clara, California, USA', 1001),
(2, 'Echo', 'Amazon', 1, 0, 'amazon-echo.jpg', 'Amazon Echo Dot 3rd Generation Smart Speaker', 1, 'Bellevue, Washington, USA', 1003),
(3, 'CCTV', 'Hikvision ', 5, 1, 'cctv.jpg', 'Hikvision 2MP 1080P DS-2CD1123G0-I IP', 0, ' Hangzhou, China', 1007),
(4, 'Speaker', 'Xiaomi', 4, 0, 'speaker.jpg', 'Portable Version Wireless bluetooth', 0, 'Beijing, China\r\n', 1321),
(5, 'Server', 'ASUS', 1, 1, 'server.png', 'ASUSTOR AS6004U 4-Bay NAS Server Storage Personal Cloud AS 6004U', 1, 'Taipei City, Taipei, Taiwan', 985);

-- --------------------------------------------------------

--
-- Table structure for table `device_data`
--

CREATE TABLE `device_data` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `device_data`
--

INSERT INTO `device_data` (`id`) VALUES
(985),
(1001),
(1003),
(1007),
(1321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`),
  ADD KEY `use` (`device_id`);

--
-- Indexes for table `device_data`
--
ALTER TABLE `device_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `device`
--
ALTER TABLE `device`
  ADD CONSTRAINT `use` FOREIGN KEY (`device_id`) REFERENCES `device_data` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
