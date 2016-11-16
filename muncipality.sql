-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2016 at 08:42 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `muncipality`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminview`
--

CREATE TABLE IF NOT EXISTS `adminview` (
  `complaintid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `committee` varchar(100) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `complaint` varchar(150) DEFAULT NULL,
  `sta` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminview`
--

INSERT INTO `adminview` (`complaintid`, `userid`, `committee`, `subject`, `complaint`, `sta`) VALUES
(201, 101, 'Public works', 'water supply denied', 'water supply is denied in tiruvarpu panchayath', 'Not Forwarded'),
(203, 105, 'Public works', 'road damaged', 'road damaged in kumarakom side creates many accidents and traffic problems ', 'Not Forwarded');

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE IF NOT EXISTS `authority` (
  `id` int(11) NOT NULL,
  `to` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `matter` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authority`
--


-- --------------------------------------------------------

--
-- Table structure for table `complaint_details`
--

CREATE TABLE IF NOT EXISTS `complaint_details` (
  `complaintid` varchar(50) NOT NULL,
  `userid` varchar(50) DEFAULT NULL,
  `wardnumber` varchar(30) NOT NULL,
  `complaint` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `complaintimage` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `sta` varchar(50) NOT NULL,
  PRIMARY KEY (`complaintid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_details`
--

INSERT INTO `complaint_details` (`complaintid`, `userid`, `wardnumber`, `complaint`, `complaintimage`, `status`, `sta`) VALUES
('201', '101', '1', 'Water supply is denied at thiruvarpu panchayath for a week', 'water-tap.jpg', 'Waiting for your message', 'Forwarded to admin'),
('202', '103', '4', 'Dumping yard in vadavathur creates lot of problems to surrounded area.', '31Ktsbg05_Vadav_VA_1638956e.jpg', 'Waiting for your message', 'Not Forwarded'),
('203', '105', '6', 'There is road damaged creates lot of traffic issues in kumarakom side', 'road-damage_pre_construction_video_san_diego.jpg', 'Forwarded to authority', 'Forwarded to authority');

-- --------------------------------------------------------

--
-- Table structure for table `councilor_reg`
--

CREATE TABLE IF NOT EXISTS `councilor_reg` (
  `wardnumber` varchar(50) DEFAULT NULL,
  `wardname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `occu` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `sta` int(11) NOT NULL,
  UNIQUE KEY `wardnumber` (`wardnumber`),
  UNIQUE KEY `wardnumber_2` (`wardnumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `councilor_reg`
--

INSERT INTO `councilor_reg` (`wardnumber`, `wardname`, `name`, `address`, `pincode`, `emailid`, `mobile`, `age`, `gender`, `occu`, `status`, `pwd`, `photo`, `sta`) VALUES
('14', 'MULLENKZHY', 'JOBY JOHNSON', 'PATHNETTIL CHIRAYIL,KEEZHUKUNNU,KOTTAYAM', '686002', 'jobeejj84@gmail.com', '9446427949', 31, 'MALE', 'TEACHER', 'MARRIED', 'ktmmunicipality', '14.jpg', 0),
('13', 'NAGAMPADOM SOUTH', 'SABU PULIMOOTTIL', 'PULIMOOTTIL,KOTTAYAM', '686001', 'pulimoottil_trades@hotmail.com', '9496860604', 59, 'MALE', 'SOCIAL WORKER', 'MARRIED', 'ktmmunicipality', '13.jpg', 0),
('12', 'NAGAMPADOM NORTH', 'T C ROY', 'THURUTHYKATTU,KOTTAYAM,S H MOUNT', '***', 'roy@gmail.com', '9447212616', 50, 'MALE', 'SOCIAL WORKER', 'MARRIED', 'ktmmunicipality', '12.jpg', 0),
('11', 'MALLUSSERRY', 'JOMOL JAMES', 'PANAMATTATHIL,KOTTAYAM,MALLOOSSERY PO KOTTAYAM', '686041', 'jomol@gmail.com', '9495538372', 43, 'FEMALE', 'HOUSE WIFE', 'MARRIED', 'ktmmunicipality', '11.jpg', 0),
('10', 'PULLARIKUNNU', 'K K SREEON', 'KALLAMPALLIL,KOTTAYAM,MARIYATHURUTH', '****', 'kksreemon@gmail.com', '9846529743', 35, 'MALE', 'COLLECTION AGENT', 'MARRIED', 'ktmmunicipality', '10.jpg', 0),
('9', 'S H MOUNT', 'DR.SONA P R', 'PUTHENPARAMBIL,KOTTAYAM,S H MOUNT', '****', 'sonapr@gmail.com', '9567245369', 37, 'FEMALE', 'NIL', 'MARRIED', 'ktmmunicipality', '9.jpg', 0),
('8', 'TEMPLE WARD', 'RENUKA SASI', 'MULLACKAL,KOTTAYAM,KUMARANALLOOR', '686016', 'ab@gmail.com', '9656129903', 45, 'FEMALE', 'SOCIAL WORKER', 'MARRIED', 'ktmmunicipality', '8.jpg', 0),
('7', 'KUMARANALLOOR TOWN', 'G JAYAKUMAR', 'SANTHIBHAVAN,KOTTAYAM,KUMARANALLOOR', '686016', 'advjaikumar@rediffmail.com', '9847188675', 47, 'FEMALE', 'ADVOCATE', 'MARRIED', 'ktmmunicipality', '7.jpg', 0),
('6', 'PUTHETTU', 'VINU R MOHAN', 'VILANGIYIL,KOTTAYAM,S H MOUNT', '686006', 'vinumohan80@gmail.com', '9495212953', 35, 'MALE', 'BUSSINESS', 'MARRIED', 'vinumohan', '6.jpg', 1),
('5', 'SUBHA SANTHOSH', 'NATTASSERY', 'SREENILAYAM,NATTASSERY,S H MOUNT', '686006', 'subhamolsanthosh@ymail.com', '9349829445', 40, 'FEMALE', 'ACCOUNTS WORK', 'MARRIED', 'subhasanthosh', '5.jpg', 1),
('4', 'PALLIPURAM', 'REJIMON M E', 'PALLIPURATHU VALAYIL,PALLIPURAM,PERUMBAIKADU', '686016', 'nefore10@yahoo.com', '9496802992', 44, 'MALE', 'AKSHAYA ENTREPRENUER', 'MARRIED', 'rejimon', '4.jpg', 1),
('3', 'PARAMPUZHA', 'JOJY K THOMAS', 'THEKKEKURATHIYATTU,KOTTAYAM,PERUBAIKADU', '686016', 'jojikurathiyattu@gmail.com', '9447598789', 37, 'MALE', 'BUSINESS', 'MARRIED', 'jojyjojy', '3.jpg', 1),
('2', 'SANKRANTHI', 'LEELAMMA JOSEPH ', 'MADAKUMKALEL,KOTTAYAM,PERUBAIKAD', '****', 'aa@gmail.com', '9496637746', 47, 'FEMALE', 'HOUSE WIFE', 'MARRIED', 'leelamma', '2.jpg', 1),
('1', 'GANDHI NAGAR NORTH', 'ELSAMMA VARGHESE', 'KANNAMPADAM,KOTTAYAM,THELLAKOM', '686630', 'ss@gmail.com', '9496414336', 40, 'FEMALE', 'HOUSE WIFE', 'MARRIED', 'elsamma', '1.jpg', 1),
('15', 'MOUNT CARMEL', 'SALI MATHEWS', 'ROSEVILLA,KOTTAYAM,MUTTAMBALAM', '686004', 'salimathews@gmail.com', '9447809776', 60, 'FEMALE', 'RETD:HEALTH SUPERVISOR', 'MARRIED', 'ktmmunicipality', '15.jpg', 0),
('16', 'KANJIKUZHY', 'REKHA RAJESH', 'PUTHUPARAMBIL,KOTTAYAM,MUTTAMBALAM', '686004', 'rekharajkanjikuzhy@gmail.com', '9961640394', 40, 'FEMALE', 'NIL', 'MARRIED', 'ktmmunicipality', '16.jpg', 0),
('17', 'DEVALOKAM', 'SHEEBA PUNNEN', 'KINATTUMMUTTIL,KOTTAYAM,DEVALOKHAM', '686004', 'emilpunnenbabu@gmail.com', '9961702095', 50, 'FEMALE', 'BUSINESS', 'MARRIED', 'ktmmunicipality', '17.jpg', 0),
('18', 'MUTTAMBALAM', 'LILLYKUTTYMAMMEN', 'MADKANIL PUTHENPURACKAL,KOTTAYAM,MUTTAMBALAM', '686004', 'lillykuttymammen@gmail.com', '9446330641', 59, 'FEMALE', 'RETD:H S S PRICIPAL', 'MARRIED', 'ktmmunicipality', '18.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(30) DEFAULT NULL,
  `utype` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `utype`) VALUES
('admin@123', 'sonaprdr', 'admin'),
('vinumohan80@gmail.com', 'vinumohan', 'councillor'),
('anu@gmail.com', 'anuanuanu', 'user'),
('sanu@gmail.com', 'sanusanu', 'user'),
('anil@gmail.com', 'anilanil', 'user'),
('subhamolsanthosh@ymail.com', 'subhasanthosh', 'councillor'),
('nefore10@yahoo.com', 'rejimon', 'councillor'),
('jojikurathiyattu@gmail.com', 'jojyjojy', 'councillor'),
('aa@gmail.com', 'leelamma', 'councillor'),
('ss@gmail.com', 'elsamma', 'councillor'),
('aravind@gmail.com', 'aravind', 'user'),
('arya@gmail.com', 'aryaarya', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `nid` varchar(5) NOT NULL DEFAULT '',
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `title`, `description`, `image`) VALUES
('1', 'onam', 'sepetember  12', 'barimage.bmp');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `userid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `wardnumber` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `houseno` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`userid`, `name`, `wardnumber`, `address`, `houseno`, `street`, `emailid`, `mobile`, `pwd`, `status`) VALUES
(101, 'aravind', '1', 'kottayam', '203', 'aymanam', 'aravind@gmail.com', '9249791515', 'aravind', 1),
(102, 'arya', '1', 'vaikom', '345', 'vechoor', 'arya@gmail.com', '9744112779', 'aryaarya', 1),
(103, 'anil', '4', 'kottayam', '567', 'kottayam', 'anil@gmail.com', '9744112779', 'anilanil', 1),
(104, 'sanu', '10', 'pullarikunnu', '435', 'malloossery', 'sanu@gmail.com', '9087654890', 'sanusanu', 1),
(105, 'anu', '6', 'kottayam', '789', 'kottayam', 'anu@gmail.com', '9744112779', 'anuanuanu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ward_details`
--

CREATE TABLE IF NOT EXISTS `ward_details` (
  `wardnumber` varchar(30) NOT NULL,
  `wardname` varchar(30) DEFAULT NULL,
  `councilor` varchar(50) NOT NULL,
  `party` varchar(50) NOT NULL,
  `reservation` varchar(50) NOT NULL,
  PRIMARY KEY (`wardnumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward_details`
--

INSERT INTO `ward_details` (`wardnumber`, `wardname`, `councilor`, `party`, `reservation`) VALUES
('1', 'GANDHI NAGAR NORTH', 'ELSAMMAVARGHESE', 'INC', 'Woman'),
('2', 'SANKRANTHI', 'LEELAMMA JOSEPH', 'INC', 'Woman'),
('3', 'PARAMPUZHA', 'JOJY K THOMAS', 'KC(M)', 'General'),
('4', 'PALLIPURAM', 'REJIMON M E', 'CPI(M)', 'General'),
('5', 'NATTASSERY', 'SUBHA SANTHOSH', 'CPI(M)', 'SC Woman'),
('6', 'PUTHETTU', 'VINU R MOHAN', 'BJP', 'General'),
('7', 'KUMARANALLOOR TOWN', 'G JAYAKUMAR', 'CPI(M)', 'General'),
('8', 'TEMPLE WARD', 'RENUKA SASI', 'BJP', 'Woman'),
('9', 'S H MOUNT', 'DR.SONA P R', 'INC', 'SC Woman'),
('10', 'PULLARIKUNNU', 'KK SREEMON', 'CPI(M)', 'General'),
('11', 'MALLUSSERY', 'JOMOL JAMES', 'INC', 'Woman'),
('12', 'NAGAMPADOM NORTH', 'T C ROY', 'INC', 'General'),
('13', 'NAGAMPADOM SOUTH', 'SABU PULIMOOTTIL', 'INC', 'General'),
('14', 'MULLENKUZHY', 'JOBY JOHNSON', 'CPI(M)', 'General'),
('15', 'MOUNT CARMEL', 'SALI MATHEWS', 'INC', 'Woman'),
('16', 'KANJIKUZHY', 'REKHA RAJESH', 'INDEPENDENT', 'Woman'),
('17', 'DEVALOKAM', 'SHEEBA OUNNEN', 'INC', 'Woman'),
('18', 'MUTTAMBALAM', 'LILLYKUTTY MAMMEN', 'INC', 'Woman'),
('19', 'COLLECTROTE', 'T N HARIKUMAR', 'BJP', 'General'),
('20', 'CATHEDRAL', 'S GOPAKUMAR', 'INC', 'General'),
('21', 'THIRUNAKARA', 'JAYASREE KUMAR', 'INC', 'Woman'),
('22', 'CHIRAYILPADAM', 'ANUSHA KRISHNA', 'KC(M)', 'Woman'),
('23', 'PUTHENANGADI', 'P S ABHISHEK', 'CPI(M)', 'SC '),
('24', 'THIRUVATHUKAL', 'JANCY JACOB', 'INC', 'Woman'),
('25', 'PALLIKONAM', 'C N SATHYANESAN', 'CPI(M)', 'General'),
('26', 'PULINACKKAL', 'BINDHU SANTHOSHKUMAR', 'INC', 'Woman'),
('27', 'PATHINARILCHIRA', 'MEERABALU', 'INC', 'Woman'),
('28', 'KARAPUZHA', 'JYOTHI SREEKANTH', 'BJP', 'Woman'),
('30', 'MUPPAYIKADU', 'ADV.SHEEJA ANIL', 'INC', 'General'),
('31', 'MOOLAVATTOM', 'SHEENA BINU', 'INC', 'Woman'),
('32', 'KAKKUR MUTHENMALI', 'P R SURESH BABU', 'INC', 'General'),
('33', 'CHETTIKUNNU', 'SUSAN KUNJUMON', 'INC', 'Woman'),
('34', 'POWER HOUSE', 'SABU PALLIVATHUKAL', 'INC', 'General'),
('35', 'PANNIMATTOM', 'JOSE PALLIKUNNEL', 'KC(M)', 'Woman'),
('36', 'CHINGAVANAM', 'LEELAMMA MATHEW', 'KC(M)', 'Woman'),
('37', 'PALAMOODU', 'K K PRASAD', 'INC', 'General'),
('38', 'PUTHENTHODU', 'ADV.TINO K THOMAS', 'INC', 'General'),
('39', 'MAVILANGU', 'TINTU JINS', 'INC', 'Woman'),
('40', 'PALLAM', 'RIJESH C BREEZE VILLA', 'INDEPENDENT', 'General'),
('41', 'KANNADIKKADAVU', 'P N SARASSAMMAL', 'CPI(M)', 'Woman'),
('42', 'MARIYAPALLY', 'K SANKARAN', 'BJP', 'General'),
('43', 'THURAMUKHAM', 'ARUN SHAJI', 'CPI(M)', 'General'),
('44', 'KODIMATHA SOUTH', 'SANIL THAMMPY', 'CPI(M)', 'General'),
('45', 'KANJIRAM', 'SANIL K J', 'INC', 'General'),
('46', 'PANAMPADY', 'V V SHYLA', 'CPI(M)', 'General'),
('47', 'ILLIKKAL', 'M P SANTHOSH KUMAR', 'INC', 'General'),
('48', 'THAZHATHANGADY', 'KUNJUMON K METHER', 'IUML', 'General'),
('49', 'PAZHAYA SEMINARY', 'RADHAKRISHNAN KOYICKAL', 'INDEPENDENT', 'General'),
('50', 'VARISSERY', 'TELMA JOHN', 'CPI(M)', 'Woman'),
('51', 'THUTHUTTY', 'JAYASREE BINU', 'CPI(M)', 'Woman'),
('52', 'GANDHI NAGAR SOUTH', 'P P CHANDRAKUMAR', 'CPI', 'General');
