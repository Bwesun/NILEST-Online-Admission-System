CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `pin` varchar(50) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `upload` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
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
  `admissionstatus` varchar(50) NOT NULL default 'registered',
  `reg_status` varchar(50) NOT NULL default 'pending',
  `receipt` varchar(12) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `pin` (`pin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`id`, `pin`, `serial`, `surname`, `upload`, `firstname`, `gender`, `maritalstatus`, `dob`, `birthplace`, `email`, `phoneno`, `postaladdress`, `permanentaddress`, `lga`, `stateorigin`, `nationality`, `disability`, `specdisability`, `ssname`, `sadd`, `fmy`, `tmy`, `qualat`, `datat`, `examname`, `examdate`, `examcenter`, `examno`, `Subngrade`, `otherexam`, `honour`, `course`, `everenrol`, `everenrolduration`, `career`, `employname`, `addemploy`, `naturewrk`, `otheremploy`, `extrlcuract`, `accomplish`, `admissionstatus`, `reg_status`, `receipt`) VALUES 
(1, 'akpa@gmail.com', 'emmanuel', 'Akpah', '', 'Emmanuel', 'Male', '', '12/12/2012', 'Kuntar', 'akpa@gmail.com', '08144529253', 'iulih', 'oiul', 'Kunatari', 'Benue', 'Nigeria', '', '', 'kuyguyg', 'liugliu', 'gliug', 'liug', 'ilug', 'iug', 'WAESSE', 'ljguliugb', 'ligliug', 'liugliug', 'liuglig', 'liugliug', 'liugliu', 'HNDSLT', 'on', 'liugj', 'liu', 'Biggy Computer Center', 'liulh', 'iughilh', 'liug', 'uygilug', 'luygui', 'accepted', 'clear', '998888');

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
  `receipt` varchar(9) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `applicants`
-- 

INSERT INTO `applicants` (`id`, `app_id`, `name`, `email`, `phone`, `gender`, `password`, `dob`, `address`, `pic`, `receipt`) VALUES 
(1, '', 'Akpah Emmanuel', 'akpa@gmail.com', '08144529253', 'Male', 'emmanuel', '12/12/2012', '', '', '998888');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `hostel`
-- 

INSERT INTO `hostel` (`id`, `name`, `regnum`, `room`, `status`, `app_id`, `date`, `student_id`) VALUES 
(5, 'Black Panther', 'HNDCS/2017/073', 'A11', 'approved', '6110', '08/02/20', '1'),
(6, 'Stephen Bukar Msheli', 'HNDCS/2017/083', 'A1', 'approved', '54431', '18/02/20', '2'),
(7, 'Akpah Emmanuel', 'HNDCS/2017/067', 'A7', 'booked', '03763', '24/02/20', 'akpa@g');

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
  `topic` varchar(255) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `topics`
-- 

INSERT INTO `topics` (`id`, `topic`, `date`, `time`, `view`, `category`, `pic`, `datetime`, `description`, `priority`, `short_desc`) VALUES 
(2, 'What is bonded leather and how', '20/02/24', '11:51 AM', '7', '', 'bonded.jpg', '2020-02-24 11:51:26', 'Have you been wondering, "What is bonded leather?" and how different it is from other types of leather? You may have come across a piece of clothing or furniture that looked like leather but wondered why it was not as pricey as it should be. This information will come in handy when you want to purchase a sofa, bag, clothes, or any other item made from this material. If you are not familiar with the different types of leather and each of their properties, you are likely to be easily confused when shopping. Being aware of each type, their pros and cons, and differences in appearance will enable you to have a better and easier shopping experience. Ensure you do not find yourself disappointed after you are already in ownership of the wrong type of material as it could be difficult to get a replacement or a switch up after a certain duration of time or even immediately after purchase.\r\n', 'latest', 'Have you been wondering, "What is bonded leather?" and how different it is from other types of leath'),
(3, 'Lionel Messi: Braithwaite clai', '20/02/24', '11:53 AM', '2', '', 'bonded2.jpg', '2020-02-24 11:53:15', '- Lionel Messi had a new teammate signed by his club as Martin Brathwiate made his debut for Barcelona - The Danish striker revealed he his happy to be playing alongside Messi after making his debut against Eibar - Braithwaite was signed from Leganes following injuries to Luis Suarez and Ousmane Dembele Not many players have had the opportunity of playing alongside Lionel Messi but new signing Martin Braithwaite is still relishing his debut alongside the Argentine icon. The Danish international made an impression when Barcelona spanked Eibar in a match dominated by Messi''s brilliance. Artur Melo got to the end of a rebound from Braithwaite''s shot which was saved by Eibar''s goalkeeper before it was dispatched by the Brazilian midfielder. But the 28-year-old who was signed on a short notice earlier last week admitted that it was a great honor playing for Braca and becoming teammates with Messi. \r\n', 'latest', '- Lionel Messi had a new teammate signed by his club as Martin Brathwiate made his debut for Barcelo'),
(5, 'What is Safeguarding?', '20/02/24', '11:56 AM', '3', '', 'bonded4.jpg', '2020-02-24 11:56:27', 'Safeguarding covers a board spectrum of needs but is mostly concerned with health and social welfare. It ensures that all categories of people ranging from children to adults are safe. Due to their vulnerability, children are often at the centre of most safeguarding initiatives. What does it mean to protect a child? What are the 6 principles of child safeguarding? Here is a definitive analysis of this concept in relation to children. What does safeguarding mean? The word safeguard originated from late Middle English, which means safe-conduct or protection. In Old French, the term is known as sauve garde. If translated in English, Sauve means ''safe'' while garde means ''guard.'' \r\n', 'latest', 'Safeguarding covers a board spectrum of needs but is mostly concerned with health and social welfare'),
(8, 'NILEST Graduating Students Sign Out!', '20/02/24', '12:09 PM', '1', '', 'IMG-20200207-WA0007.jpg', '2020-02-24 12:09:29', '28/08/2019 will forever be green in the memories of HND2 Students of theNigerian Institute of Leather and Science Technology, as they Signed Out of the University yesterday. The Students of the Department of Civil and Environmental Engineering were particularly spectacular with their display of Love and Happiness. The joy of leaving the University was evident on people''s face. Students of various departments were called to the dance floor to show their dancing skills. It was really a memorable day. By: Matur innocent joshua', 'latest', '28/08/2019 will forever be green in the memories of HND2 Students of theNigerian Institute of Leathe');
