-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2015 at 03:26 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blooddonors`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `lid` int(20) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `did` int(20) NOT NULL,
  `dummy` int(20) NOT NULL,
  PRIMARY KEY (`lid`),
  UNIQUE KEY `lid` (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `postreq`
--

CREATE TABLE IF NOT EXISTS `postreq` (
  `postno` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `bloodgrp` varchar(20) NOT NULL,
  `units` int(20) NOT NULL,
  `hname` varchar(30) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `needbef` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobno` bigint(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `reason` varchar(30) NOT NULL,
  `poston` datetime NOT NULL,
  PRIMARY KEY (`postno`),
  UNIQUE KEY `postno` (`postno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `postreq`
--

INSERT INTO `postreq` (`postno`, `pname`, `age`, `gender`, `bloodgrp`, `units`, `hname`, `contactno`, `state`, `district`, `needbef`, `name`, `mobno`, `email`, `reason`, `poston`) VALUES
(1, 'kavi', 45, 'female', 'A+', 3, 'HM hospital', 22255447, 'Tamil Nadu', 'Chennai', '2015-03-24', 'karthik', 9988774455, 'kathick@gmail.com', 'dengue', '2015-03-22 21:26:04'),
(2, 'kamala', 56, 'female', 'B-', 2, 'Apollo', 22258741, 'Karnataka', 'Bijapur', '2015-03-24', 'lalitha', 9988665533, 'Not available', 'accident', '2015-03-23 16:20:06'),
(3, 'suriya', 50, 'male', 'B+', 2, 'bharat', 22263541, 'Arunachal Pradesh', 'Itanagar', '2015-03-24', 'geetha', 9966332255, 'Not available', 'surgery', '2015-03-23 17:49:15'),
(4, 'magi', 50, 'female', 'O-', 2, 'apollo', 9996699966, 'Tamil Nadu', 'Chennai', '2015-03-25', 'kathir', 9988663322, 'Not available', 'accident', '2015-03-24 07:00:32'),
(5, 'harini', 45, 'female', 'O-', 3, 'malar', 9966996688, 'Tamil Nadu', 'Coimbotore', '2015-03-25', 'getha', 9988777777, 'Not available', 'heart transplantation', '2015-03-24 07:01:59'),
(6, 'oviya', 47, 'female', 'O-', 3, 'apollo', 9966998877, 'Delhi', 'Central', '2015-03-25', 'prem', 9999977777, 'Not available', 'dengue', '2015-03-24 07:02:01'),
(7, 'prem', 20, 'male', 'A1B+', 3, 'balaji', 22226666, 'Delhi', 'Central', '2015-03-25', 'devaki', 9966336633, 'Not available', 'dengue', '2015-03-24 07:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `donorid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgrp` varchar(20) NOT NULL,
  `lastdonate` date NOT NULL,
  `mobno` bigint(20) NOT NULL,
  `offno` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `streetname` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`donorid`),
  UNIQUE KEY `donorid` (`donorid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`donorid`, `name`, `age`, `weight`, `dob`, `gender`, `bloodgrp`, `lastdonate`, `mobno`, `offno`, `email`, `streetname`, `location`, `district`, `state`, `username`, `password`) VALUES
(1, 'karthick', 42, 52, '1973-03-04', 'male', 'O+', '2015-02-04', 9632582222, 22265488, 'kathick28@gmail.com', 'radha street', 'Nanganallur', 'Coimbotore', 'Tamil Nadu', 'kar228', 'kar28'),
(2, 'ravi', 50, 55, '1965-03-01', 'male', 'B+', '2014-07-16', 9874563214, 22245631, 'ravi@gmail.ocm', '9th main road', 'adyar', 'Chennai', 'Tamil Nadu', 'ravi123', 'ravi123'),
(3, 'priya', 40, 50, '1975-12-05', 'female', 'A+', '2014-12-03', 9632254187, 0, 'priya@gmail.com', '5th cross street', 'voltas colony', 'Central', 'Delhi', 'priya12', 'priya12'),
(4, 'vignesh', 39, 52, '1976-12-08', 'male', 'O-', '2014-05-12', 9632256314, 22258741, 'vig@gmail.com', '2nd cross street', 'rapuram', 'Chennai', 'Tamil Nadu', 'vig12', 'vig12'),
(5, 'jaya', 35, 55, '1980-03-21', 'female', 'AB+', '2014-06-24', 9874563245, 22225874, 'jaya@gmail.com', '2nd cross street', 'Ram nagar', 'Chandigarh', 'Chandigarh', 'jaya12', 'jaya12'),
(6, 'vijay', 25, 53, '1990-04-16', 'male', 'O-', '2014-10-08', 9632541784, 22254163, 'vijay90@gmail.com', '1st cross street', 'gandhipuram', 'Kurukshetra', 'Haryana', 'vijay12', 'vijay12'),
(7, 'prem', 23, 54, '1992-04-17', 'male', 'A2-', '2014-11-13', 9632587417, 22265415, 'prem12@gmail.com', '8th main road', 'coffee estate', 'Ernakulam', 'Kerala', 'prem13', 'prem13'),
(8, 'maha', 26, 54, '1989-11-06', 'female', 'B-', '2014-07-10', 9632541877, 22254163, 'maha@gmail.com', '8th cross street', 'MK colony', 'Bhojpur', 'Bihar', 'maha123', 'maha123'),
(9, 'anu', 27, 56, '1988-11-06', 'female', 'A1B+', '2014-09-08', 9632541582, 22526341, 'anu@gmail.com', '8th cross street', 'DK Nagar', 'Jorhat', 'Assam', 'anu123', 'anu123'),
(10, 'juhi', 27, 56, '1988-11-06', 'female', 'A1B-', '2013-03-14', 9632259632, 22258763, 'juhi@gmail.com', '10th cross street', 'srinagar', 'Patan', 'Gujarat', 'juhi123', 'juhi123'),
(11, 'sabritha', 30, 54, '0195-11-06', 'female', 'A2B-', '2014-07-07', 9638541888, 22254199, 'saub@gmail.com', '5th cross street', 'MR colony', 'Hassan', 'Karnataka', 'sabu23', 'sabu23'),
(12, 'sruthi', 36, 55, '1979-11-06', 'female', 'A1+', '2015-03-08', 9632549632, 22254444, 'sruthi@gmail.com', '4th cross street', 'Ram nagar', 'Guntur', 'Andhar Pradesh', 'sruthi123', 'sruthi123'),
(13, 'mercy', 46, 60, '1969-11-06', 'female', 'A2B+', '2014-02-18', 9632541852, 22254999, 'mercy@gmail.com', '3rd main road', 'srinagar', 'Koraput', 'Orissa', 'mercy123', 'mercy123'),
(14, 'krishna', 28, 67, '1987-11-06', 'male', 'A-', '2014-09-08', 9632549999, 22254163, 'krish@gmail.com', '7th cross street', 'MN colony', 'Karikal', 'Pondicherry', 'krish123', 'krish123'),
(15, 'viji', 29, 65, '1986-11-06', 'male', 'A-', '2014-03-18', 9941526378, 22254777, 'Not available', '8th cross street', 'rajiv gandhi nagar', 'Alwar', 'Rajasthan', 'viji1', 'viji1'),
(16, 'kannan', 37, 67, '1978-11-06', 'male', 'A1B-', '2014-07-18', 9888254555, 22258521, 'Not available', '10th cross street', 'MR colony', 'Chennai', 'Tamil Nadu', 'kannan', 'kannan'),
(17, 'mani', 27, 70, '1988-11-06', 'male', 'O+', '2013-07-25', 9994155896, 22252634, 'Not available', '15th cross street', 'Ram nagar', 'Salem', 'Tamil Nadu', 'mani123', 'mani123'),
(18, 'srileka', 30, 59, '1985-11-06', 'female', 'O+', '2014-07-30', 9985263258, 22255578, 'Not available', '18th cross street', 'sabari colony', 'Madurai', 'Tamil Nadu', 'sri123', 'sri123'),
(19, 'magesh', 34, 65, '1981-11-06', 'male', 'O-', '2014-07-21', 9998558999, 22254111, 'Not available', '14th cross street', 'srinagar', 'Namakkal', 'Tamil Nadu', 'mag12', 'mag12'),
(20, 'babu', 50, 50, '1965-01-16', 'male', 'A2+', '2014-08-07', 9632255441, 0, 'Not available', 'raja street', 'GTM colony', 'Lohit', 'Arunachal Pradesh', 'babu12', 'babu12'),
(21, 'balaji', 45, 50, '1970-01-16', 'male', 'A2-', '2014-09-04', 9632255444, 0, 'Not available', '8th cross street', 'meenabakam', 'Kancheepuram', 'Tamil Nadu', 'balaji12', 'balaji12'),
(22, 'sharmila', 25, 60, '1990-08-14', 'female', 'A1+', '2015-01-23', 9941526383, 0, 'Not available', '5th cross street', 'Ram nagar', 'Perambalur', 'Tamil Nadu', 'sharmi96', 'sharmi96'),
(23, 'hemanth', 30, 60, '1985-01-02', 'male', 'AB+', '2015-03-19', 9790922006, 9790922006, 'hema@gmail.com', '10th cross street', 'Ram colony', 'Ashoknagar', 'Madhya Pradesh', 'heman', 'heman'),
(24, 'janani', 52, 60, '1963-11-06', 'female', 'AB+', '0000-00-00', 9988455566, 0, 'Not available', '5th cross street', 'AB colony', 'Kangra', 'Himachal Pradesh', 'jana12', 'jana12'),
(25, 'durai', 35, 55, '1980-10-25', 'male', 'A2-', '0000-00-00', 9963634545, 0, 'Not available', 'murgan street', 'chrompet', 'Chennai', 'Tamil Nadu', 'durai23', 'durai23'),
(26, 'priyanka', 25, 56, '1990-11-06', 'female', 'B-', '2014-02-10', 9978895541, 22258963, 'Not available', '6th cross street', 'pallavaram', 'Kolar', 'Karnataka', 'priyan', 'priyan12'),
(27, 'kamal', 26, 60, '1989-03-12', 'male', 'B-', '2014-03-27', 9988776655, 22285967, 'kamal@gmail.com', '17th cross street', 'Tnagar', 'New Delhi', 'Delhi', 'kamal12', 'kamal12'),
(28, 'harini', 28, 66, '1987-03-11', 'female', 'A1-', '2015-03-02', 9966332524, 22244557, 'Not available', '9th main road', 'parrys', 'Gaya', 'Bihar', 'harin', 'harni12'),
(29, 'ambika', 25, 55, '1990-12-19', 'female', 'A2B+', '2014-09-11', 9911555441, 22285741, 'Not available', '4th main road', 'rajiv gandhi nagar', 'Chennai', 'Tamil Nadu', 'ambig', 'ambiga'),
(30, 'hemachandra', 25, 65, '1990-03-03', 'male', 'A1B+', '2014-09-18', 9966556655, 22255664, 'Not available', '6th cross street', 'rajiv gandhi nagar', 'Chennai', 'Tamil Nadu', 'hemaa', 'hemaa'),
(31, 'rahul', 25, 56, '1990-03-10', 'male', 'A-', '2015-03-03', 9966332255, 0, 'Not available', '3rd street', 'Radha nagar', 'Dindigul', 'Tamil Nadu', 'rahul', 'rahul'),
(32, 'kathir', 30, 55, '1985-09-15', 'male', 'A1B+', '2014-03-27', 9966337788, 0, 'Not available', '5th cross street', 'adyar', 'Chennai', 'Tamil Nadu', 'kathir12', 'kathir12'),
(33, 'laksmi', 30, 65, '1985-08-07', 'male', 'B+', '0000-00-00', 9988778877, 0, 'Not available', '7th main road', 'guindy', 'Chennai', 'Tamil Nadu', 'donate', 'donate'),
(34, 'tarun', 30, 68, '1985-03-05', 'male', 'A1B+', '2014-10-10', 9988556688, 0, 'Not available', '7th main road', 'chrompet', 'Karikal', 'Pondicherry', 'blood', 'blood'),
(35, 'abi', 35, 60, '1980-10-09', 'female', 'A2+', '0000-00-00', 9889966334, 0, 'Not available', '4th main road', 'Radha nagar', 'Jammu', 'Jammu and Kashmir', 'abinaya', 'abinaya'),
(36, 'sai', 19, 55, '1995-11-21', 'male', 'A1+', '0000-00-00', 9488525768, 12345678, 'vaishu21.krish@gmail', 'rajam nagar', 'tpr', 'Cuddalorei', 'Tamil Nadu', 'vaishu', 'vaishu'),
(38, 'maha', 25, 65, '1990-03-03', 'male', 'A-', '2015-03-02', 9632587415, 22225588, 'maha12@gmail.com', '4th main road', 'Nanganallur', 'Chennai', 'Tamil Nadu', 'maha12', 'maha12');
