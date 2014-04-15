-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2014 at 11:47 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloodbank`
--
CREATE DATABASE IF NOT EXISTS `bloodbank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bloodbank`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `pass`) VALUES
(1, 'admin', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785');

-- --------------------------------------------------------

--
-- Table structure for table `bloodstock`
--

DROP TABLE IF EXISTS `bloodstock`;
CREATE TABLE IF NOT EXISTS `bloodstock` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `HNAME` varchar(40) NOT NULL,
  `BG` varchar(4) NOT NULL,
  `VOl` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `bloodstock`
--

INSERT INTO `bloodstock` (`id`, `HNAME`, `BG`, `VOl`) VALUES
(3, 'Shanti Memorial Hospital', 'AB-', 1),
(4, 'ISPAT GENERAL HOSPITAL (IGH)', 'B+', 1),
(5, 'ISPAT GENERAL HOSPITAL (IGH)', 'O-', 1),
(6, 'C.W.S.', 'A-', 3),
(7, 'Life Line Hospital', 'O+', 1),
(8, 'Rourkela Government Hospital', 'A+', 1),
(9, 'HiTech Medical College and Hospital', 'B+', 1),
(10, 'E S I C Model Hospital', 'AB+', 1),
(11, 'ISPAT GENERAL HOSPITAL (IGH)', 'B-', 1),
(12, 'C.W.S.', 'O+', 3),
(13, 'Life Line Hospital', 'AB-', 1),
(14, 'Rourkela Government Hospital', 'O+', 1),
(15, 'C.W.S.', 'A+', 3),
(16, 'C.W.S.', 'AB+', 3),
(17, 'E S I C Model Hospital', 'O-', 1),
(18, 'Shanti Memorial Hospital', 'A+', 1),
(19, 'HiTech Medical College and Hospital', 'AB-', 1),
(20, 'E S I C Model Hospital', 'A+', 1),
(21, 'Rourkela Government Hospital', 'A-', 1),
(22, 'Life Line Hospital', 'B-', 1),
(23, 'Life Line Hospital', 'B+', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

DROP TABLE IF EXISTS `donate`;
CREATE TABLE IF NOT EXISTS `donate` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `HNAME` varchar(40) NOT NULL,
  `RNAME` varchar(40) NOT NULL,
  `DAT` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `HNAME`, `RNAME`, `DAT`) VALUES
(6, 'Shanti Memorial Hospital', 'sudhanshu', '2014-04-06'),
(7, 'ISPAT GENERAL HOSPITAL (IGH)', 'sudhanshu', '2014-04-03'),
(8, 'ISPAT GENERAL HOSPITAL (IGH)', 'sudhanshu', '2014-04-01'),
(9, 'C.W.S.', 'sudhanshu', '2014-04-02'),
(10, 'Life Line Hospital', 'sudhanshu', '2014-04-05'),
(11, 'Rourkela Government Hospital', 'sudhanshu', '2014-03-06'),
(12, 'HiTech Medical College and Hospital', 'sudhanshu', '2014-04-19'),
(13, 'E S I C Model Hospital', 'ashutosh', '2014-04-09'),
(14, 'ISPAT GENERAL HOSPITAL (IGH)', 'ashutosh', '2014-03-20'),
(15, 'C.W.S.', 'ashutosh', '2014-04-02'),
(16, 'Life Line Hospital', 'ashutosh', '2014-04-01'),
(17, 'Rourkela Government Hospital', 'ashutosh', '2014-04-09'),
(18, 'C.W.S.', 'ashutosh', '2014-02-01'),
(19, 'C.W.S.', 'ashutosh', '2014-04-03'),
(20, 'E S I C Model Hospital', 'ashutosh', '2014-04-06'),
(21, 'C.W.S.', 'ashutosh', '2014-03-29'),
(22, 'Shanti Memorial Hospital', 'ashutosh', '2014-03-12'),
(23, 'HiTech Medical College and Hospital', 'ashutosh', '2014-04-12'),
(24, 'E S I C Model Hospital', 'ashutosh', '2014-04-10'),
(25, 'Rourkela Government Hospital', 'ashutosh', '2014-04-11'),
(26, 'C.W.S.', 'ashutosh', '2014-04-05'),
(27, 'Life Line Hospital', 'ashutosh', '2014-03-22'),
(28, 'C.W.S.', 'ashutosh', '2014-04-08'),
(29, 'C.W.S.', 'ashutosh', '2014-02-13'),
(30, 'Life Line Hospital', 'ashutosh', '2014-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `DNAME` varchar(40) NOT NULL,
  `DADD` varchar(100) NOT NULL,
  `DPHONE` bigint(20) NOT NULL,
  `BG` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `DNAME`, `DADD`, `DPHONE`, `BG`) VALUES
(5, 'Piyush Dwivedi', 'renukut', 8280102801, 'AB-'),
(6, 'Ashutosh dwivedi', 'LUCKNOW', 9439967338, 'B+'),
(7, 'kumar gaurav', 'patana bihar', 8984076215, 'O-'),
(8, 'Ashish kumar', 'bihar + hyderabad', 8834127639, 'A-'),
(9, 'Naman agrawal', 'jhansi uttar pradesh', 8018111961, 'O+'),
(10, 'Awanish kr ', 'gorakhpur UP', 8093804425, 'A+'),
(11, 'Mayank kumar', 'Bhubaneswar, odisha', 8598052135, 'B+'),
(12, 'Akshay dawar', 'indore MP', 7879877196, 'AB+'),
(13, 'Vikas Patidar', 'indore MP', 9124985272, 'B-'),
(14, 'Himanshu agrawal', 'Raipur ', 7543895324, 'O+'),
(15, 'Shivdayal Meena', 'Bharatpur Rajasthan', 8453459878, 'AB-'),
(16, 'Om prakash', ' Bhubaneswar, Orissa', 993873214, 'O+'),
(17, 'Sudhanshu Patel', 'Banaras UP', 9668641214, 'A+'),
(18, 'Vishesh kushwaha', 'bagpath UP', 7205807015, 'AB+'),
(19, 'Abhishek Puri ', 'Kanpur UP', 9843693486, 'O-'),
(20, 'Sidhanta chaudhari', 'barahmpur orissa', 9836326467, 'O+'),
(21, 'Chandra Prakash', 'gorakhpur UP', 9484565386, 'A+'),
(22, 'Avinash barnawal', 'NEPAL', 984567216, 'AB-'),
(23, 'Ganesh Prasad', 'python colony orissa', 9348742043, 'A-'),
(24, 'Naveen Modi', 'barahmpur orissa', 9034556347, 'O+'),
(25, 'Sushovan das', 'Bhubaneswar, odisha', 9878435345, 'B-'),
(26, 'Gaurav raghuvanshi', 'varanasi Up', 9734578346, 'A-'),
(27, 'abcd', 'ioejfohewf', 99999999, 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `HID` int(4) NOT NULL AUTO_INCREMENT,
  `HNAME` varchar(50) NOT NULL,
  `HADD` varchar(100) NOT NULL,
  `HPHONE` varchar(20) NOT NULL,
  PRIMARY KEY (`HID`),
  KEY `HID` (`HID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`HID`, `HNAME`, `HADD`, `HPHONE`) VALUES
(2, 'C.W.S.', 'Koel Nagar, Rourkela, Odisha ', '(0661) 2473931'),
(4, 'HiTech Medical College and Hospital', 'Civil Township, Rourkela, Odisha 769004', '+(91)-9437016222'),
(5, 'Shanti Memorial Hospital', 'Near Ambedkar Chowk, Udit Nagar, Shibaji Marg, Rourkela - 769012', '+(91)-9238100216'),
(6, 'Life Line Hospital', 'Civil Township, Rourkela - 769004', '+(91)-9437352131'),
(7, 'E S I C Model Hospital', 'Chhend Colony, Rourkela, OD 769004', '(0661) 6536027'),
(8, 'ISPAT GENRAL HOSPITAL(IGH)', 'Sector 19, Rourkela, OD', '0661-2503655');

-- --------------------------------------------------------

--
-- Table structure for table `rec`
--

DROP TABLE IF EXISTS `rec`;
CREATE TABLE IF NOT EXISTS `rec` (
  `RID` int(4) NOT NULL AUTO_INCREMENT,
  `RNAME` varchar(40) NOT NULL,
  `PASS` varchar(40) NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rec`
--

INSERT INTO `rec` (`RID`, `RNAME`, `PASS`) VALUES
(1, 'ashutosh', 'c2c4a896be2b3ab15212fcb701156f10eb890eaf'),
(2, 'sudhanshu', '30c4f22348e5b949b7859069be5a82075d33a63b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
