-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 08:30 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `department`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `uname` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `uname`, `password`) VALUES
(1, 'admin123', 'root1234');

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE IF NOT EXISTS `alert` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `link` text NOT NULL,
  `added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`aid`, `text`, `link`, `added`) VALUES
(1, 'Find new timetables here', 'timetable.php', '2017-04-16 23:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `year` int(10) unsigned NOT NULL,
  `prof` varchar(45) NOT NULL,
  `company` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE IF NOT EXISTS `calender` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `event` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `calender`
--

INSERT INTO `calender` (`cid`, `date`, `event`) VALUES
(1, '2017-04-15', 'Ethnic Day'),
(2, '2017-04-10', 'Commencement of third internals'),
(3, '2017-05-05', 'Commencement of Semester End Examinations for the II, IV, VI and VIII semester BE');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `min_head` varchar(75) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `location` varchar(45) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `title`, `min_head`, `content`, `date`, `location`, `image`) VALUES
(1, 'SJCE Global Alumni Meet', 'an opportunity to all of you to gather @ SJCE once again to remember those ', 'Dear Alumni Friends\r\n\r\nWe are very happy to announce an event that provide an opportunity to all of you to gather @ SJCE once again to remember those old golden days of your college life with your beloved teachers and friends. SJCE is organizing an alumni meet on 19/12/2015, Saturday.\r\n\r\nWe invite you to attend the meet. We also request you to pass on information about the meet to your batch mates and friends. \r\n\r\nDo RSVP for the event.\r\n\r\nLooking forward to meet you all.\r\n\r\nRegitration Fees:\r\n\r\nIndividual Registration: Rs. 300/-\r\n\r\nFamily Registration: Rs. 500/-\r\n\r\n \r\n\r\nCheers\r\n\r\nSJCE Alumni Association', '2017-12-19', ' SJCE Quadrangle SJCE Campus, Mysuru', 'upload_images/events/alumni.jpg'),
(2, 'SJCE Global Alumni Meet', 'An opportunity to all of you to gather @ SJCE once again to remember those ', 'Dear Alumni Friends\r\n\r\nWe are very happy to announce an event that provide an opportunity to all of you to gather @ SJCE once again to remember those old golden days of your college life with your beloved teachers and friends. SJCE is organizing an alumni meet on 19/12/2015, Saturday.\r\n\r\nWe invite you to attend the meet. We also request you to pass on information about the meet to your batch mates and friends. \r\n\r\nDo RSVP for the event.\r\n\r\nLooking forward to meet you all.\r\n\r\nRegitration Fees:\r\n\r\nIndividual Registration: Rs. 300/-\r\n\r\nFamily Registration: Rs. 500/-\r\n\r\n \r\n\r\nCheers\r\n\r\nSJCE Alumni Association', '2017-12-19', ' SJCE Quadrangle SJCE Campus, Mysuru', 'upload_images/events/alumni.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `designation` varchar(45) NOT NULL,
  `education` varchar(45) NOT NULL,
  `interest` text NOT NULL,
  `specialization` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `name`, `designation`, `education`, `interest`, `specialization`, `email`, `image`) VALUES
(2, 'Dr. Srinath S', 'Asst. Professor', 'B.E, M.Tech, Ph.D', 'Image Processing, O.S, Networks', 'Software Enggineering', 'srinath@sjce.ac.in', 'upload_images/faculty/profile.jpg'),
(3, 'Brunda S', 'Asst. Professor', 'B.E, M.Tech', 'Image Processing, Networks', 'Networks', 'sbrunda@sjce.ac.in', 'upload_images/faculty/profile.jpg'),
(5, 'Vasantha Raghavan', 'Asst. Professor', 'B.E, M.Tech', 'Network Security', 'Network Engineering', 'vasantha@sjce.ac.in', 'upload_images/faculty/profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ftype` varchar(10) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `ftype`, `name`, `email`, `message`) VALUES
(1, '', 'SriHarsha', 'sriharsha.s32@gmail.com', 'This is dummy message'),
(2, 'feedback', 'SriHarsha', 'sriharsha.s32@gmail.com', 'Your website is really cool and awesome');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `nid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `min_cont` varchar(75) NOT NULL,
  `content` text NOT NULL,
  `tag1` varchar(45) NOT NULL,
  `tag2` varchar(45) NOT NULL,
  `tag3` varchar(45) NOT NULL,
  `image` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `title`, `min_cont`, `content`, `tag1`, `tag2`, `tag3`, `image`, `date_added`) VALUES
(1, 'JSS S&T University Logo Designing Competition', 'We are inviting new designs for our university logo', 'As a part of migration from SJCE to JSS S&T university, we are conducting a logo designing competition. The winner of the competition will be awarded price money of Rs. 10,000 and the logo designed by winner will be adopted as the new logo of JSS S&T University ', 'JSS STU', 'Logo', 'Competition', 'upload_images/news/logo1.png', '2017-04-16 23:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `stdachieve`
--

CREATE TABLE IF NOT EXISTS `stdachieve` (
  `sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `content` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE IF NOT EXISTS `subscription` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `mail_id` text NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`sid`, `fname`, `mail_id`) VALUES
(1, 'SriHarsha S', 'sriharsha.s32@gmail.com'),
(2, 'SriHarsha', 'sriharsha.s321@gmail.com'),
(3, 'Sangamesh Vastrad', 'sanghamesh.vastrad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ttdaily`
--

CREATE TABLE IF NOT EXISTS `ttdaily` (
  `secid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `day` varchar(45) NOT NULL,
  `dayid` int(1) NOT NULL,
  `slot1` varchar(45) NOT NULL,
  `slot2` varchar(45) NOT NULL,
  `slot3` varchar(45) NOT NULL,
  `slot4` varchar(45) NOT NULL,
  `slot5` varchar(45) NOT NULL,
  `slot6` varchar(45) NOT NULL,
  `slot7` varchar(45) NOT NULL,
  `slot8` varchar(45) NOT NULL,
  `slot9` varchar(45) NOT NULL,
  PRIMARY KEY (`secid`,`day`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `ttdaily`
--

INSERT INTO `ttdaily` (`secid`, `day`, `dayid`, `slot1`, `slot2`, `slot3`, `slot4`, `slot5`, `slot6`, `slot7`, `slot8`, `slot9`) VALUES
(101, 'FRIDAY', 5, '--', '--', 'MA310', 'CS36L/CS36L/CS37L(A2/A3/A1)', 'CS36L/CS36L/CS37L(A2/A3/A1)', 'CS36L/CS36L/CS37L(A2/A3/A1)', 'CS320', 'CS350', '--'),
(101, 'MONDAY', 1, '--', 'ES', 'CS330', 'CS310', 'CS350', 'CS340', 'CS330(T)-A1', 'CS330(T)-A1', '--'),
(101, 'SATURDAY', 6, '--', 'ES', 'CS320', 'CS310', 'MA310', 'CS330', '--', '--', '--'),
(101, 'THURSDAY', 4, '--', '--', 'CS310', 'CS320', 'MA310', 'CS340', 'CS330(T)-A2', 'CS330(T)-A2', '--'),
(101, 'TUESDAY', 2, 'CS37L(A3)', 'CS37L(A3)', 'CS37L(A3)', 'CS350', 'CS340', 'CS330', 'CS36L/CS37L(A1/A2)', 'CS36L/CS37L(A1/A2)', 'CS36L/CS37L(A1/A2)'),
(101, 'WEDNESDAY', 3, '--', 'MA310', 'CS340', 'CS320', 'CS310', 'CS350', '--', '--', '--'),
(102, 'FRIDAY', 5, '--', '--', 'CS310', 'CS320', 'CS330', 'ES', 'CS340', 'MA310', '--'),
(102, 'MONDAY', 1, '--', '--', 'CS320', 'CS340', 'CS350', 'CS310', 'CS36L/CS36L/CS37L(B1/B3/B2)', 'CS36L/CS36L/CS37L(B1/B3/B2)', 'CS36L/CS36L/CS37L(B1/B3/B2)'),
(102, 'SATURDAY', 6, '--', 'MA310', 'CS340', 'CS330', 'CS350', 'CS310', '--', '--', '--'),
(102, 'THURSDAY', 4, '--', 'CS330(T)-B2', 'CS330(T)-B2', 'CS350', 'CS340', 'CS320', 'CS37L(B1)', 'CS37L(B1)', 'CS37L(B1)'),
(102, 'TUESDAY', 2, '--', 'MA310', 'CS350', 'CS330', 'CS320', 'ES', 'CS330(T)-B1', 'CS330(T)-B1', '--'),
(102, 'WEDNESDAY', 3, '--', '--', '--', 'CS36L/CS37L(B2/B3)', 'CS36L/CS37L(B2/B3)', 'CS36L/CS37L(B2/B3)', 'CS310', 'MA310', '--');

-- --------------------------------------------------------

--
-- Table structure for table `ttsec`
--

CREATE TABLE IF NOT EXISTS `ttsec` (
  `secid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room` varchar(5) NOT NULL,
  `section` varchar(5) NOT NULL,
  `year` int(10) unsigned NOT NULL,
  PRIMARY KEY (`secid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ttsub`
--

CREATE TABLE IF NOT EXISTS `ttsub` (
  `secid` int(10) unsigned NOT NULL,
  `courseid` varchar(45) NOT NULL,
  `coursename` varchar(45) NOT NULL,
  `faculty` varchar(45) NOT NULL,
  PRIMARY KEY (`secid`,`courseid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttsub`
--

INSERT INTO `ttsub` (`secid`, `courseid`, `coursename`, `faculty`) VALUES
(101, 'CS310', 'Electronic Circuits and Digital System Design', 'Prof. Vasantha Raghavan'),
(101, 'CS320', 'Discrete Mathematical Structures and Combinat', 'Dr. T D Roopamala'),
(101, 'CS330', 'UNIX System Programming', 'Prof. S Brunda'),
(101, 'CS340', 'Computer Organization and Architecture', 'Dr. M A. Anasuya'),
(101, 'CS350', 'Data Structures', 'Prof. Manimala'),
(101, 'CS36L', 'Data Structures Laboratory', ''),
(101, 'CS37L', 'Electronic Circuits and Digital System Labora', ''),
(101, 'ES', 'Environmental Studies', ''),
(101, 'MA310', 'Fourier series, Integral Transforms and Appli', ''),
(102, 'CS310', 'Electronic Circuits and Digital System Design', 'Prof. Vasantha Raghavan'),
(102, 'CS320', 'Discrete Mathematical Structures and Combinat', 'Dr. T D Roopamala'),
(102, 'CS330', 'UNIX System Programming', 'Prof. S Brunda'),
(102, 'CS340', 'Computer Organization and Architecture', 'Prof. Vani Ashok'),
(102, 'CS350', 'Data Structures', 'Prof. Sheela N'),
(102, 'CS36L', 'Data Structures Laboratory', ''),
(102, 'CS37L', 'Electronic Circuits and Digital System Labora', ''),
(102, 'ES', 'Environmental Studies', ''),
(102, 'MA310', 'Fourier series, Integral Transforms and Appli', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
