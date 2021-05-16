-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2021 at 01:22 AM
-- Server version: 5.7.34
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `josephpj_cowin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_states`
--

CREATE TABLE `tb_states` (
  `id` int(11) NOT NULL,
  `state_id` int(10) NOT NULL,
  `state_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_states`
--

INSERT INTO `tb_states` (`id`, `state_id`, `state_name`) VALUES
(1, 1, 'Andaman and Nicobar Islands'),
(2, 2, 'Andhra Pradesh'),
(3, 3, 'Arunachal Pradesh'),
(4, 4, 'Assam'),
(5, 5, 'Bihar'),
(6, 6, 'Chandigarh'),
(7, 7, 'Chhattisgarh'),
(8, 8, 'Dadra and Nagar Haveli'),
(9, 37, 'Daman and Diu'),
(10, 9, 'Delhi'),
(11, 10, 'Goa'),
(12, 11, 'Gujarat'),
(13, 12, 'Haryana'),
(14, 13, 'Himachal Pradesh'),
(15, 14, 'Jammu and Kashmir'),
(16, 15, 'Jharkhand'),
(17, 16, 'Karnataka'),
(18, 17, 'Kerala'),
(19, 18, 'Ladakh'),
(20, 19, 'Lakshadweep'),
(21, 20, 'Madhya Pradesh'),
(22, 21, 'Maharashtra'),
(23, 22, 'Manipur'),
(24, 23, 'Meghalaya'),
(25, 24, 'Mizoram'),
(26, 25, 'Nagaland'),
(27, 26, 'Odisha'),
(29, 28, 'Punjab'),
(30, 29, 'Rajasthan'),
(31, 30, 'Sikkim'),
(32, 31, 'Tamil Nadu'),
(33, 32, 'Telangana'),
(34, 33, 'Tripura'),
(35, 34, 'Uttar Pradesh'),
(36, 35, 'Uttarakhand'),
(37, 36, 'West Bengal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_states`
--
ALTER TABLE `tb_states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_states`
--
ALTER TABLE `tb_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
