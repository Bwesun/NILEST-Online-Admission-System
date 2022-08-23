-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 20, 2020 at 02:49 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `steph`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `pin` varchar(50) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `upload` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
  `days` varchar(50) NOT NULL,
  `months` varchar(50) NOT NULL,
  `years` varchar(50) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `postaladdress` varchar(50) NOT NULL,
  `permanentaddress` varchar(500) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `stateorigin` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `disability` varchar(50) NOT NULL,
  `specdisability` varchar(50) NOT NULL,
  `ssname` varchar(50) NOT NULL,
  `sadd` varchar(50) NOT NULL,
  `fmy` varchar(50) NOT NULL,
  `tmy` varchar(50) NOT NULL,
  `qualat` varchar(50) NOT NULL,
  `datat` varchar(50) NOT NULL,
  `examname` varchar(50) NOT NULL,
  `examdate` varchar(50) NOT NULL,
  `examcenter` varchar(50) NOT NULL,
  `examno` varchar(50) NOT NULL,
  `Subngrade` varchar(50) NOT NULL,
  `otherexam` varchar(50) NOT NULL,
  `honour` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `everenrol` varchar(50) NOT NULL,
  `everenrolduration` varchar(50) NOT NULL,
  `career` varchar(50) NOT NULL,
  `employname` varchar(50) NOT NULL,
  `addemploy` varchar(50) NOT NULL,
  `naturewrk` varchar(50) NOT NULL,
  `otheremploy` varchar(50) NOT NULL,
  `extrlcuract` varchar(50) NOT NULL,
  `accomplish` varchar(50) NOT NULL,
  `admissionstatus` varchar(50) NOT NULL,
  `courseoffered` varchar(50) NOT NULL,
  `app_id` varchar(12) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `pin` (`pin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`id`, `pin`, `serial`, `surname`, `upload`, `firstname`, `gender`, `maritalstatus`, `days`, `months`, `years`, `birthplace`, `email`, `phoneno`, `postaladdress`, `permanentaddress`, `lga`, `stateorigin`, `nationality`, `disability`, `specdisability`, `ssname`, `sadd`, `fmy`, `tmy`, `qualat`, `datat`, `examname`, `examdate`, `examcenter`, `examno`, `Subngrade`, `otherexam`, `honour`, `course`, `everenrol`, `everenrolduration`, `career`, `employname`, `addemploy`, `naturewrk`, `otheremploy`, `extrlcuract`, `accomplish`, `admissionstatus`, `courseoffered`, `app_id`) VALUES 
(1, 'maturinnocent@gmail.com', '1111', 'Matur', 'IMG_20190910_083646_1(1).jpg', 'Innocent', 'Others', 'Others', '31', 'December', '2018', 'Zaria', 'maturinnocent@gmail.com', '8144529246', 'Jushi Waje, Near Gidan sarkin noma, Sabon Gari, Za', 'Jushi Waje, Near Gidan sarkin noma, Sabon Gari, Zaria', 'Bokkos', 'Plateau', 'Nigeria', '', '', 'Gibeon Children School', 'Fantaki, Kubani', 'September/2008', 'May/2019', 'First School Leaving Certificate', '12/02/2018', 'WAESSE', '21/2/2018', '44556676', '4456566788', '', '', '', 'HNDSC', 'on', '2 years', 'Programmer', 'Biggy Computer Center', 'Jushia waje, No. 390, Sabon Gari, Zaria', 'Computer Operator', '', 'Batminton, Table Tennis', 'Gold Medal, Silver Medal', '', '', ''),
(2, 'step@gmail.com', 'stephen', 'Bukar', 'BeautyPlus_20190827172321_fast.jpg', 'Stephen', 'Male', 'Married', '24', 'August', '2013', 'Kuntar', 'step@gmail.com', '8155442266', 'Addresss Addresss Addresss Addresss Addresss Addre', 'Addresss Addresss Addresss Addresss Addresss Addresss Addresss Addresss Addresss ', 'Kunatari', 'Borno', 'Nigeria', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HNDSC', 'on', '2 years', 'Programmer', '', '', '', '', '', '', '', '', ''),
(3, 'emmanuel@gmail.com', 'emmanuel', 'Akpah', 'FB_IMG_15772808479766003.jpg', 'Emmanuel', 'Others', 'Others', '31', 'December', '2018', 'Kuntar', 'emmanuel@gmail.com', '9065237843', '', '', 'Igbaja', 'Benue', 'Nigeria', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'HNDSLT', 'on', '2 years', 'Scientist', '', '', '', '', '', '', 'accepted', '', ''),
(5, 'altukry@gmail.com', 'altukry', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '61741091');

-- --------------------------------------------------------

-- 
-- Table structure for table `admin_user`
-- 

CREATE TABLE `admin_user` (
  `id` int(4) NOT NULL auto_increment,
  `username` varchar(16) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `admin_user`
-- 

INSERT INTO `admin_user` (`id`, `username`, `password`) VALUES 
(1, 'admin', 'admin');

-- --------------------------------------------------------

-- 
-- Table structure for table `applicants`
-- 

CREATE TABLE `applicants` (
  `id` int(6) NOT NULL auto_increment,
  `app_id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL COMMENT 'Date of Birth',
  `address` varchar(60) NOT NULL,
  `pic` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `applicants`
-- 

INSERT INTO `applicants` (`id`, `app_id`, `name`, `email`, `phone`, `gender`, `password`, `dob`, `address`, `pic`) VALUES 
(1, '', 'Matur Innocent Joshua', 'maturinnocent@gmail.com', '08144529253', 'Male', '1111', '', '', ''),
(2, '', 'Stephen Bukar Mshelia', 'step@gmail.com', '08144529253', 'Male', 'stephen', '', '', ''),
(3, '', 'Akpah Emmanuel', 'emmanuel@gmail.com', '+2348144529253', 'Male', 'emmanuel', '', '', ''),
(4, '', 'Aliyu Hassan Ibrahim', 'altukry@gmail.com', '08788337744', 'Male', 'altukry', '', '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `grade`
-- 

CREATE TABLE `grade` (
  `id` int(2) NOT NULL auto_increment,
  `grade` varchar(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `grade`
-- 

INSERT INTO `grade` (`id`, `grade`) VALUES 
(1, 'A1'),
(2, 'A2'),
(3, 'B1'),
(4, 'B2'),
(5, 'B3'),
(6, 'B4'),
(7, 'C1'),
(8, 'C2'),
(9, 'C3'),
(10, 'C4'),
(11, 'C5'),
(12, 'C6'),
(13, 'D7'),
(14, 'E8'),
(15, 'F9');

-- --------------------------------------------------------

-- 
-- Table structure for table `hostel`
-- 

CREATE TABLE `hostel` (
  `id` int(6) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `regnum` varchar(15) NOT NULL,
  `room` varchar(4) NOT NULL,
  `status` varchar(10) NOT NULL,
  `app_id` varchar(6) NOT NULL,
  `date` varchar(20) NOT NULL,
  `student_id` varchar(6) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `hostel`
-- 

INSERT INTO `hostel` (`id`, `name`, `regnum`, `room`, `status`, `app_id`, `date`, `student_id`) VALUES 
(5, 'Black Panther', 'HNDCS/2017/073', 'A11', 'booked', '6110', '08/02/20', '1'),
(6, 'Stephen Bukar Msheli', 'HNDCS/2017/083', 'A1', 'approved', '54431', '18/02/20', '2');

-- --------------------------------------------------------

-- 
-- Table structure for table `hostel_confirm`
-- 

CREATE TABLE `hostel_confirm` (
  `id` int(5) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `receipt_no` varchar(10) NOT NULL,
  `regnum` varchar(12) NOT NULL,
  `app_id` varchar(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `hostel_confirm`
-- 

INSERT INTO `hostel_confirm` (`id`, `name`, `receipt_no`, `regnum`, `app_id`) VALUES 
(1, 'Stephen Bukar Msheli', '98989', 'HNDCS/2017/0', '5443');

-- --------------------------------------------------------

-- 
-- Table structure for table `olevel`
-- 

CREATE TABLE `olevel` (
  `id` int(2) NOT NULL auto_increment,
  `subject` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `olevel`
-- 

INSERT INTO `olevel` (`id`, `subject`) VALUES 
(1, 'Mathematics'),
(2, 'English Language'),
(3, 'Physics'),
(4, 'Biology'),
(5, 'Chemistry'),
(6, 'Geography'),
(7, 'Technical drawing'),
(8, 'Further Mathematics'),
(9, 'Economics'),
(10, 'CRS'),
(11, 'Animal Husbandry'),
(12, 'Agricultural Science');

-- --------------------------------------------------------

-- 
-- Table structure for table `rooms`
-- 

CREATE TABLE `rooms` (
  `id` int(3) NOT NULL auto_increment,
  `room` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

-- 
-- Dumping data for table `rooms`
-- 

INSERT INTO `rooms` (`id`, `room`, `status`) VALUES 
(1, 'A1', 'available'),
(2, 'A2', 'available'),
(3, 'A3', 'available'),
(4, 'A4', 'available'),
(5, 'A5', 'available'),
(6, 'A6', 'available'),
(7, 'A7', 'available'),
(8, 'A8', 'available'),
(9, 'A9', 'available'),
(10, 'A10', 'available'),
(11, 'A11', 'available'),
(12, 'A12', 'available'),
(13, 'A13', 'available'),
(14, 'A14', 'available'),
(15, 'A15', 'available'),
(16, 'A16', 'available'),
(17, 'A17', 'available'),
(18, 'A18', 'available'),
(19, 'A19', 'available'),
(20, 'A20', 'available'),
(21, 'A21', 'available'),
(22, 'A22', 'available'),
(23, 'A23', 'available'),
(24, 'A24', 'available'),
(25, 'A25', 'available'),
(26, 'A26', 'available'),
(27, 'A27', 'available'),
(28, 'A28', 'available'),
(29, 'A29', 'available'),
(30, 'A30', 'available'),
(31, 'B1', 'available'),
(32, 'B2', 'available'),
(33, 'B3', 'available'),
(34, 'B4', 'available'),
(35, 'B5', 'available'),
(36, 'B6', 'available'),
(37, 'B7', 'available'),
(38, 'B8', 'available'),
(39, 'B9', 'available'),
(40, 'B10', 'available'),
(41, 'B11', 'available'),
(42, 'B12', 'available'),
(43, 'B13', 'available'),
(44, 'B14', 'available'),
(45, 'B15', 'available'),
(46, 'B16', 'available'),
(47, 'B17', 'available'),
(48, 'B18', 'available'),
(49, 'B19', 'available'),
(50, 'B20', 'available'),
(51, 'BEX', 'available');

-- --------------------------------------------------------

-- 
-- Table structure for table `topics`
-- 

CREATE TABLE `topics` (
  `id` int(4) NOT NULL auto_increment COMMENT 'topic id',
  `topic` varchar(30) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `view` varchar(6) NOT NULL,
  `category` varchar(20) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `description` longtext NOT NULL,
  `priority` varchar(10) NOT NULL,
  `short_desc` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- 
-- Dumping data for table `topics`
-- 

INSERT INTO `topics` (`id`, `topic`, `date`, `time`, `view`, `category`, `pic`, `datetime`, `description`, `priority`, `short_desc`) VALUES 
(1, 'Election Postponed', '19/07/24', '03:48 PM', '', 'Sports', '', '2019-07-24 15:48:58', 'LIUGIHJB', '', ''),
(2, 'DESIGN OF A HUMAN BEING', '19/07/24', '03:49 PM', '', 'Entertainment', '', '2019-07-24 15:49:54', 'Story here', '', ''),
(3, 'DESIGN OF A HUMAN BEING', '19/07/24', '03:51 PM', '', 'Entertainment', '', '2019-07-24 15:51:35', 'Story here', '', ''),
(4, 'Design and Implementation of a', '19/07/24', '03:52 PM', '', 'EPL2019', 'IMG_20181207_170836_7.jpg', '2019-07-24 15:52:17', 'kjgjhb', '', ''),
(5, 'Design and Implementation of a', '19/07/24', '03:52 PM', '', 'EPL2019', 'IMG_20181207_170836_7.jpg', '2019-07-24 15:52:59', 'kjgjhb', '', ''),
(6, 'Design and Implementation of a', '19/07/24', '03:53 PM', '', 'Politics', 'IMG_20181202_163912_637.jpg', '2019-07-24 15:53:40', 'liub', '', ''),
(7, 'Design and Implementation of a', '19/07/24', '03:54 PM', '', 'Politics', 'IMG_20181202_163912_637.jpg', '2019-07-24 15:54:24', 'liub', '', ''),
(8, 'Design and Implementation of a', '19/07/24', '03:55 PM', '', 'EPL2019', 'IMG_20181207_073230_1.jpg', '2019-07-24 15:55:34', 'ljgihj', '', ''),
(9, 'Topic', '19/07/24', '03:57 PM', '', 'Entertainment', '', '2019-07-24 15:57:03', 'yt', '', ''),
(10, 'DESIGN OF A HUMAN BEING', '19/07/24', '04:00 PM', '', 'Sports', 'IMG_20181207_073254_9.jpg', '2019-07-24 16:00:16', 'iulhi', '', ''),
(11, 'DESIGN OF A HUMAN BEING', '19/07/24', '04:03 PM', '', 'Sports', 'IMG_20181207_073254_9.jpg', '2019-07-24 16:03:29', 'iulhi', '', ''),
(12, 'Design and Implementation of a', '19/07/24', '04:05 PM', '', 'Sports', 'IMG_20181207_170836_7.jpg', '2019-07-24 16:05:47', 'lkjbkjb;.jb', '', ''),
(13, 'Design and Implementation of a', '19/07/24', '04:08 PM', '', 'Sports', 'IMG_20181207_073230_1.jpg', '2019-07-24 16:08:04', '.jkbn.kj', '', ''),
(14, 'Design and Implementation of a', '19/07/24', '04:17 PM', '', 'Sports', 'IMG_20181207_170836_7.jpg', '2019-07-24 16:17:31', 'lkjbkjb', 'br', ''),
(15, 'Design and Implementation of a', '19/07/24', '04:22 PM', '', 'Sports', 'IMG_20181207_170836_7.jpg', '2019-07-24 16:22:05', 'Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: ', 'breaking', 'Governor Seyi Makinde of Oyo state on Monday, July'),
(16, 'DESIGN OF A HUMAN BEING', '19/07/24', '04:24 PM', '', 'Politics', 'IMG_20181207_073230_1.jpg', '2019-07-24 16:24:16', 'Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: ', 'latest', 'Governor Seyi Makinde of Oyo state on Monday, July'),
(17, 'Design and Implementation of a', '19/07/24', '04:26 PM', '', 'Entertainment', 'IMG_20181207_073230_1.jpg', '2019-07-24 16:26:15', 'Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: ', 'trending', 'Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly'),
(18, 'Design and Implementation of a', '19/07/24', '04:27 PM', '', 'EPL2019', 'img1546366918473.jpg', '2019-07-24 16:27:47', 'Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: ', 'latest', 'Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly'),
(19, 'Design and Implementation of a', '19/07/24', '04:30 PM', '', 'EPL2019', 'img1546366918473.jpg', '2019-07-24 16:30:32', 'Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly declare his assets in Ibadan, the state capital. Read more: ', 'latest', 'Governor Seyi Makinde of Oyo state on Monday, July 15, made public his campaign promises to publicly'),
(20, 'Design and Implementation of a', '19/07/24', '11:39 PM', '1', 'Sports', 'IMG_20181207_073230_1.jpg', '2019-07-24 23:39:51', 'loihiujk', 'latest', 'loihiujk'),
(21, 'Design and Implementation of a', '19/07/25', '09:23 AM', '1', 'Sports', 'IMG_20181207_170836_7.jpg', '2019-07-25 09:23:46', 'liuhbi', 'breaking', 'liuhbi'),
(22, 'Election Postponed', '19/07/25', '03:11 PM', '1', 'Sports', 'IMG_20181202_092611.jpg', '2019-07-25 15:11:31', 'liuhiuj', 'trending', 'liuhiuj');
