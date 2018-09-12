-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 10:46 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberhawk`
--

-- --------------------------------------------------------

--
-- Table structure for table `factsdata`
--

CREATE TABLE `factsdata` (
  `id` bigint(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsdata`
--

CREATE TABLE `newsdata` (
  `id` bigint(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsdata`
--

INSERT INTO `newsdata` (`id`, `heading`, `body`, `author`, `image_link`, `date`) VALUES
(5, 'sdasds', 'asdsadgsfsdf', 'sasa', '', '2018-09-13'),
(6, 'aasa', 'asdasdasdasd', 'dasdasd', '', '2018-09-12'),
(9, 'asas', 'sasas', 'sasas', 'hello', '2018-09-25'),
(10, 'asas', 'sasas', 'sasas', '', '2018-09-25'),
(11, 'saa', 'dasdhsad\r\ndasdjasl;d\r\nadsasdmkl;asd\r\nasdajskldjkas\r\ndl;ajsdl;asdas\r\n', 'Aanjaneya', '', '2018-09-12'),
(12, 'saa', 'dasdhsad\r\ndasdjasl;d\r\nadsasdmkl;asd\r\nasdajskldjkas\r\ndl;ajsdl;asdas\r\n', 'Aanjaneya', '', '2018-09-12'),
(13, 'saa', 'dasdhsad\r\ndasdjasl;d\r\nadsasdmkl;asd\r\nasdajskldjkas\r\ndl;ajsdl;asdas\r\n', 'Aanjaneya', '', '2018-09-12'),
(17, 'Microsoft Issues Software Updates for 17 Critical Vulnerabilities', 'Just a few minutes ago Microsoft released its latest monthly Patch Tuesday update for September 2018, patching a total of 61 security vulnerabilities, 17 of which are rated as critical, 43 are rated Important, and one Moderate in severity.', 'Aanjaneya', '', '2018-09-12'),
(23, 'Microsoft Issues Software Updates for 17 Critical Vulnerabilities', 'Just a few minutes ago Microsoft released its latest monthly Patch Tuesday update for September 2018, patching a total of 61 security vulnerabilities, 17 of which are rated as critical, 43 are rated Important, and one Moderate in severity.', 'Aanjaneya', 'hello', '2018-09-12'),
(35, 'Microsoft Issues Software Updates for 17 Critical Vulnerabilities', 'Just a few minutes ago Microsoft released its latest monthly Patch Tuesday update for September 2018, patching a total of 61 security vulnerabilities, 17 of which are rated as critical, 43 are rated Important, and one Moderate in severity.', 'Aanjaneya', 'hello', '2018-09-12'),
(36, 'Microsoft Issues Software Updates for 17 Critical Vulnerabilities', 'Just a few minutes ago Microsoft released its latest monthly Patch Tuesday update for September 2018, patching a total of 61 security vulnerabilities, 17 of which are rated as critical, 43 are rated Important, and one Moderate in severity.', 'Aanjaneya', 'hello', '2018-09-12'),
(37, 'Microsoft Issues Software Updates for 17 Critical Vulnerabilities', 'Just a few minutes ago Microsoft released its latest monthly Patch Tuesday update for September 2018, patching a total of 61 security vulnerabilities, 17 of which are rated as critical, 43 are rated Important, and one Moderate in severity.', 'Aanjaneya', 'hello', '2018-09-12'),
(38, 'Microsoft Issues Software Updates for 17 Critical Vulnerabilities', 'Just a few minutes ago Microsoft released its latest monthly Patch Tuesday update for September 2018, patching a total of 61 security vulnerabilities, 17 of which are rated as critical, 43 are rated Important, and one Moderate in severity.', 'Aanjaneya', 'hello', '2018-09-12'),
(39, 'hello world', 'how are you', 'aman', 'hello', '2018-09-12'),
(51, 'hello world', 'how are you', 'Aanjaneya', 'hello', '2018-09-12'),
(52, 'hello world', 'how are you', 'Aanjaneya', 'hello', '2018-09-12'),
(53, 'hello world', 'how are you', 'Aanjaneya', 'hello', '2018-09-12'),
(54, 'gdfgdfg', 'dgdfgdfg', '', 'hello', ''),
(55, 'gdfgdfg', 'dgdfgdfg', '', 'hello', '');

-- --------------------------------------------------------

--
-- Table structure for table `toolsdata`
--

CREATE TABLE `toolsdata` (
  `id` int(10) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uploaddata`
--

CREATE TABLE `uploaddata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploaddata`
--

INSERT INTO `uploaddata` (`id`, `name`, `password`, `file_name`) VALUES
(14, 'hello', 'goole', 'yehoo'),
(15, 'title', 'title', '2_Hackers.docx'),
(16, 'title', 'title', '2_Hackers.docx'),
(17, 'title', 'title', 'Untitled.jpg'),
(18, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `factsdata`
--
ALTER TABLE `factsdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsdata`
--
ALTER TABLE `newsdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toolsdata`
--
ALTER TABLE `toolsdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaddata`
--
ALTER TABLE `uploaddata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `factsdata`
--
ALTER TABLE `factsdata`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `newsdata`
--
ALTER TABLE `newsdata`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `toolsdata`
--
ALTER TABLE `toolsdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uploaddata`
--
ALTER TABLE `uploaddata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
