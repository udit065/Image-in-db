-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 08:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gg`
--

-- --------------------------------------------------------

--
-- Table structure for table `ggfk`
--

CREATE TABLE `ggfk` (
  `id` int(255) NOT NULL,
  `name` varchar(125) NOT NULL,
  `type` varchar(125) NOT NULL,
  `size` int(125) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ggfk`
--

INSERT INTO `ggfk` (`id`, `name`, `type`, `size`, `image`) VALUES
(155, 'lit.jpg', 'image/jpeg', 32064, 'C:/xampp/htdocs/GG/uploads/lit.jpg'),
(165, 'cycling.jpg', 'image/jpeg', 4879, 'C:/xampp/htdocs/GG/uploads/cycling.jpg'),
(168, 'tokato.jpg', 'image/jpeg', 12185, 'C:/xampp/htdocs/GG/uploads/tokato.jpg'),
(169, 'beauty.jpg', 'image/jpeg', 14947, 'C:/xampp/htdocs/GG/uploads/beauty.jpg'),
(170, 'men in black.jpg', 'image/jpeg', 6536, 'C:/xampp/htdocs/GG/uploads/men in black.jpg'),
(172, 'vollyball.jpg', 'image/jpeg', 8535, 'C:/xampp/htdocs/GG/uploads/vollyball.jpg'),
(173, 'skateboard.jpg', 'image/jpeg', 10770, 'C:/xampp/htdocs/GG/uploads/skateboard.jpg'),
(174, 'war.jpg', 'image/jpeg', 5129, 'C:/xampp/htdocs/GG/uploads/war.jpg'),
(176, 'brain.jpg', 'image/jpeg', 10213, 'C:/xampp/htdocs/GG/uploads/brain.jpg'),
(177, 'brush.jpg', 'image/jpeg', 11850, 'C:/xampp/htdocs/GG/uploads/brush.jpg'),
(178, 'dayuum.jpg', 'image/jpeg', 24382, 'C:/xampp/htdocs/GG/uploads/dayuum.jpg'),
(179, 'gal.jpg', 'image/jpeg', 10391, 'C:/xampp/htdocs/GG/uploads/gal.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ggfk`
--
ALTER TABLE `ggfk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ggfk`
--
ALTER TABLE `ggfk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
