-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 09:57 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datalatihdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamendaki`
--

CREATE TABLE `datamendaki` (
  `id` int(11) NOT NULL,
  `pendaki` varchar(255) NOT NULL,
  `cuaca` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `gunungberapi` varchar(255) NOT NULL,
  `mendaki` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamendaki`
--

INSERT INTO `datamendaki` (`id`, `pendaki`, `cuaca`, `waktu`, `gunungberapi`, `mendaki`) VALUES
(1, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(2, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(3, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Ya'),
(4, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Tidak'),
(5, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Tidak'),
(6, 'Profesional', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(7, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(8, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(9, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Tidak'),
(10, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Tidak'),
(11, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Ya'),
(12, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(13, 'Profesional', 'Hujan', 'Siang', 'FALSE', 'Tidak'),
(14, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Tidak'),
(15, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(16, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(17, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Tidak'),
(18, 'Profesional', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(19, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(20, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(21, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(22, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(23, 'Profesional', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(24, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(25, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(26, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Tidak'),
(27, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Tidak'),
(28, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Tidak'),
(29, 'Pemula', 'Cerah', 'Siang', 'TRUE', 'Tidak'),
(30, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(31, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(32, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(33, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(34, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Ya'),
(35, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Tidak'),
(36, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(37, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(38, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Tidak'),
(39, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(40, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(41, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(42, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Tidak'),
(43, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Ya'),
(44, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(45, 'Profesional', 'Hujan', 'Siang', 'FALSE', 'Tidak'),
(46, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(47, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Ya'),
(48, 'Profesional', 'Mendung', 'Siang', 'FALSE', 'Tidak'),
(49, 'Profesional', 'Mendung', 'Malam', 'TRUE', 'Tidak'),
(50, 'Profesional', 'Mendung', 'Pagi', 'TRUE', 'Ya'),
(51, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(52, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(53, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Tidak'),
(54, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Tidak'),
(55, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(56, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Tidak'),
(57, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Tidak'),
(58, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Ya'),
(59, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(60, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(61, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(62, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Tidak'),
(63, 'Profesional', 'Mendung', 'Siang', 'FALSE', 'Ya'),
(64, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(65, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(66, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(67, 'Profesional', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(68, 'Menengah', 'Hujan', 'Pagi', 'FALSE', 'Ya'),
(69, 'Menengah', 'Hujan', 'Pagi', 'FALSE', 'Ya'),
(70, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Ya'),
(71, 'Pemula', 'Mendung', 'Pagi', 'TRUE', 'Tidak'),
(72, 'Profesional', 'Hujan', 'Siang', 'FALSE', 'Tidak'),
(73, 'Profesional', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(74, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(75, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(76, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Tidak'),
(77, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(78, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(79, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(80, 'Menengah', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(81, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(82, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Tidak'),
(83, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Tidak'),
(84, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya'),
(85, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(86, 'Profesional', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(87, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Ya'),
(88, 'Menengah', 'Hujan', 'Siang', 'FALSE', 'Tidak'),
(89, 'Profesional', 'Mendung', 'Malam', 'FALSE', 'Tidak'),
(90, 'Pemula', 'Cerah', 'Pagi', 'TRUE', 'Ya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamendaki`
--
ALTER TABLE `datamendaki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamendaki`
--
ALTER TABLE `datamendaki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
