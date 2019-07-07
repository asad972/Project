-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 08:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FirstName`, `LastName`, `Email`, `Date`, `Password`) VALUES
('Khizer', 'Hameed', 'ahz@gmail.com', '2017-10-29', '12345'),
('Ahmad', 'Tehseen', 'amad1@gmail.com', '2023-02-04', '12345'),
('Ahmad', 'Tehseen', 'amad2@gmail.com', '2023-02-04', '12345'),
('Ahmad', 'Tehseen', 'amad3@gmail.com', '2023-02-04', '12345'),
('Ahmad', 'Tehseen', 'amad4@gmail.com', '2023-02-04', '12345'),
('Ahmad', 'Tehseen', 'amad@gmail.com', '2023-02-04', '12345'),
('Arslan ', 'Hameed', 'arslan@gmail.com', '2022-03-04', 'KhizerHameed98'),
('Asif', 'Hameed', 'Asif1@gmail.com', '2022-04-04', '12345'),
('Asif', 'Hameed', 'Asif2@gmail.com', '2022-04-04', '12345'),
('Asif', 'Hameed', 'Asif@gmail.com', '2022-04-04', 'KhizerHameed98'),
('Khizer', 'Hameed', 'khzrhameed98@gmail.com', '1996-10-02', 'KhizerHameed98'),
('Khizer', 'Hameed', 'kj@gmail.com', '2016-10-28', '12345'),
('Khizer', 'Hameed', 'kja@gmail.com', '2016-10-28', '12345'),
('Omer', 'Hameed', 'omer@gmail.com', '2010-05-25', '11221');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
