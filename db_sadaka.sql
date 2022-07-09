-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 03:07 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sadaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`) VALUES
(1, 'Lewis Hamilton', 'lewishamilton@yahoo.com', 'Bravo BiPel, GBU. (peace)'),
(2, 'Sebastian Vettel', 'seb_vet@gmail.com', 'What are we doing? Racing or ping pong?'),
(3, 'Don Jerinx', 'sidsuxx@hotmail.com', 'Ok boomer'),
(5, 'Takumi Fujiwara', 'ae86@yahoo.com', 'Night on fire...'),
(10, 'Jim Korn', 'jkorn@gmail.com', 'Keep fighting!!!'),
(11, 'Lightning McQueen', 'kcaww@yahoo.com', 'I am speed'),
(12, 'Jack Swagger', 'swagboi@gmail.com', 'KKK'),
(13, 'Jake Roberts', 'jaker@yahoo.com', 'Good cause for good thing'),
(14, 'Nikolas JH', 'njhornet@yahoo.com', 'Praise the Lord'),
(15, 'Jason Monroe', 'jassm@gmail.com', 'Thank you'),
(16, 'Karol Jenskins', 'kjens@yahoo.com', 'Godspeed'),
(17, 'Lio Rush', 'liorush@gmail.com', 'Give them hopes'),
(18, 'Lucinta Luna', 'lulaluna@yahoo.com', 'Ayok beramal bersama.'),
(25, 'Angelina Pamela', 'apamel@yahoo.com', 'Keep fighting'),
(26, 'Jakk Loo', 'jklmn@yahoo.com', 'Just do it');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `causes` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `causes`, `amount`, `name`, `email`, `phone`, `address`, `message`) VALUES
(1, 'culture', 55000000, 'Arisa Nguyen', 'aringu@gmail.com', '', '', ''),
(2, 'education', 60000000, 'Liza Love', 'onelover1@gmail.com', '', '', ''),
(3, 'hunger', 30000000, 'Farooq Saad', 'lollipop345@gmail.com', '085617483920', '', ''),
(4, 'rights', 80000000, 'Yakub Sucipto', 'ysucipt2@gmail.com', '085634509855', 'Pakuan Alam', 'Hak asasi harga mati'),
(5, 'hunger', 20000, 'Pramudito Ramadhan', 'ditoanak25@gmail.com', '08888888821', '', ''),
(6, 'rights', 500000, 'Mahmud', 'mahmud@yahoo.com', '', '', 'Untuk para pejuang HAM ayo merapat');

-- --------------------------------------------------------

--
-- Table structure for table `pendonor`
--

CREATE TABLE `pendonor` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `goldar` varchar(2) NOT NULL,
  `rhesus` varchar(1) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendonor`
--

INSERT INTO `pendonor` (`id`, `nama`, `tgllahir`, `jk`, `goldar`, `rhesus`, `nohp`, `email`) VALUES
('DNR-GHI294', 'Ghina Salsabila', '1992-05-09', 'P', 'O', '-', '085621057294', ''),
('DNR-GOZ234', 'Gozali', '1989-12-13', 'L', 'B', '+', '085678901234', ''),
('DNR-JEN781', 'Jenni Janetta', '1993-07-06', 'P', 'AB', '-', '085697069781', 'joms@yahoo.com'),
('DNR-JOH407', 'John Cena', '1980-08-17', 'L', 'B', '+', '085623915407', 'johncena@gmail.com'),
('DNR-KAL555', 'Kaleb Hasibuan', '1991-12-21', 'L', 'A', '+', '085669420555', ''),
('DNR-LEX968', 'Lexi Kaufman', '1975-06-05', 'P', 'O', '-', '085615073968', 'lexlex@yahoo.com'),
('DNR-LOL420', 'Lolita', '1999-08-17', 'P', 'A', '+', '085624774420', ''),
('DNR-NIC302', 'Nick Gondam', '1980-11-12', 'L', 'A', '+', '085620554302', ''),
('DNR-UCI029', 'Uci Sanusi', '1921-09-10', 'L', 'B', '+', '085696931029', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Pramudito', 'Ramadhan', 'ditoanak25@gmail.com', 'desember12'),
(2, 'Fajar', 'Agung', 'fajaragung4to11@gmail.com', 'z4ibatsu'),
(3, 'Test', 'User', 'test@email.com', 'password'),
(4, 'Test', 'Satu', 'testsatu@yahoo.com', 'testsatu');

-- --------------------------------------------------------

--
-- Table structure for table `resipien`
--

CREATE TABLE `resipien` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tglbutuh` date NOT NULL,
  `tgllahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `goldar` varchar(2) NOT NULL,
  `rhesus` varchar(1) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resipien`
--

INSERT INTO `resipien` (`id`, `nama`, `tglbutuh`, `tgllahir`, `jk`, `goldar`, `rhesus`, `jumlah`, `nohp`, `email`) VALUES
('RSP-ALB720', 'Albar Jamet', '2020-05-20', '1994-05-30', 'L', 'AB', '+', 2, '085697071720', 'albarjmt@gmail.com'),
('RSP-JIM432', 'Jim Botti', '2020-05-24', '2000-02-25', 'L', 'B', '-', 1, '085698765432', 'jimbotti@gmail.com'),
('RSP-MIC069', 'Michael Jackson', '2020-05-19', '1975-05-20', 'L', 'O', '-', 3, '085696942069', ''),
('RSP-PER186', 'Perri Monn', '2020-05-22', '1990-05-08', 'P', 'A', '+', 1, '085639502186', ''),
('RSP-SIT024', 'Siti Jaenab', '2020-05-27', '1994-04-01', 'P', 'AB', '+', 3, '085639541024', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resipien`
--
ALTER TABLE `resipien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
