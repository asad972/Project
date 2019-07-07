-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 10:45 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gari_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
`brand_id` int(255) NOT NULL,
  `brand_title` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_title`) VALUES
(1, 'Honda'),
(2, 'Suzuki'),
(3, 'Toyota'),
(4, 'Kia'),
(5, 'Hyundai'),
(6, 'BMW');

-- --------------------------------------------------------

--
-- Table structure for table `categori`
--

CREATE TABLE IF NOT EXISTS `categori` (
`cat_id` int(255) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categori`
--

INSERT INTO `categori` (`cat_id`, `cat_title`) VALUES
(1, 'Suv'),
(2, 'Sedan'),
(3, 'Hatchback'),
(4, 'Minivan'),
(5, 'Crossover');

-- --------------------------------------------------------

--
-- Table structure for table `gari`
--

CREATE TABLE IF NOT EXISTS `gari` (
`gari_id` int(255) NOT NULL,
  `gari_brand` varchar(255) NOT NULL,
  `gari_cat` varchar(255) NOT NULL,
  `gari_name` varchar(255) NOT NULL,
  `gari_model` varchar(255) NOT NULL,
  `gari_price` int(255) NOT NULL,
  `gari_image` varchar(255) NOT NULL,
  `gari_keyword` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gari`
--

INSERT INTO `gari` (`gari_id`, `gari_brand`, `gari_cat`, `gari_name`, `gari_model`, `gari_price`, `gari_image`, `gari_keyword`) VALUES
(6, '1', '2', 'civic', 'gari_model', 40000000, 'user_1561667129_chrome-image-404137.png', 'Honda,civic,sedan,1.4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`U_id` int(100) NOT NULL,
  `U_first_name` varchar(100) NOT NULL,
  `U_last_name` varchar(100) NOT NULL,
  `U_email` varchar(100) NOT NULL,
  `U_password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_id`, `U_first_name`, `U_last_name`, `U_email`, `U_password`) VALUES
(1, 'Abubakar', 'majeed', 'abubakar@majeed.com', '123'),
(2, 'Asad', 'Ullah', 'asad@ullah.com', '0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
 ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categori`
--
ALTER TABLE `categori`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `gari`
--
ALTER TABLE `gari`
 ADD PRIMARY KEY (`gari_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categori`
--
ALTER TABLE `categori`
MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gari`
--
ALTER TABLE `gari`
MODIFY `gari_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `U_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
