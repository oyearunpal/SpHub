-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2014 at 10:01 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spirit`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE IF NOT EXISTS `achievements` (
  `Username` varchar(20) NOT NULL,
  `Pname` text NOT NULL,
  `Branch` text NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Sport` text NOT NULL,
  `Achievement` varchar(50) NOT NULL,
  PRIMARY KEY (`Year`),
  KEY `Year` (`Year`),
  KEY `Year_2` (`Year`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cricket`
--

CREATE TABLE IF NOT EXISTS `cricket` (
  `Username` varchar(20) NOT NULL,
  `Pname` text NOT NULL,
  `Branch` text NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cricket_news`
--

CREATE TABLE IF NOT EXISTS `cricket_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(20) NOT NULL,
  `content` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cricket_news`
--

INSERT INTO `cricket_news` (`id`, `heading`, `content`) VALUES
(1, 'india Vs Eng', 'dont read all this things'),
(2, 'india Vs West', 'Trial no 31'),
(3, 'SPIT Vs West', 'they both play good'),
(4, 'india Vs Eng', 'A scratchy fifty by Shikhar Dhawan stood out as th'),
(5, 'india Vs Westindies', 'India took a beating in the first ODI in Kochi''s N');

-- --------------------------------------------------------

--
-- Table structure for table `cricket_news_page`
--

CREATE TABLE IF NOT EXISTS `cricket_news_page` (
  `cnpid` int(11) NOT NULL,
  `date` date NOT NULL,
  `body` varchar(5000) NOT NULL,
  PRIMARY KEY (`cnpid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket_news_page`
--

INSERT INTO `cricket_news_page` (`cnpid`, `date`, `body`) VALUES
(0, '2014-10-01', 'This is the news section for Cricket.Get live updates from us.'),
(1, '2014-10-08', 'India took a beating in the first ODI in Kochi''s Nehru Stadium on Wednesday night when their famous batting line-up failed to chase a record West Indian total of 321 for six wickets. Suresh Raina failed to take his Champions League Twenty20 form into the series and Virat Kohli''s run drought, that started in July this year in England, continued. '),
(2, '2014-10-11', 'Amid this leather-hunt, Shami was India''s best bowler. Shami (4/66) produced his best bowling performance versus West Indies in ODIs. Shami''s third four-wicket haul is his first in ODIs in India. Shami, with 32 wickets at 23.87 runs apiece in 14 matches, is the top wicket-taker in ODIs this year for India.'),
(3, '2014-10-13', 'A scratchy fifty by Shikhar Dhawan stood out as the Indian top order either played poor strokes or ran like school boys between wickets. Dhawan ran out Ajinkya Rahane for 24 and after that, India failed to produce a substantial partnership. Rahane made a promising start, chose the right balls to hit but Dhawan did him in after a badly judged "yes-no". '),
(4, '2014-10-13', 'In spite of the 124-run defeat, India''s fourth biggest in terms of runs in ODIs at home, ''Sir'' Ravindra Jadeja reached a milestone for having bowled marathon spells in the last one year. Jadeja has bowled 246 overs in 26 matches -- the most by a bowler in ODIs. He is followed by Ravichandran Ashwin (236.4) and Mohammed Shami (198.0)'),
(5, '2014-10-22', 'Kohli continued his poor run with the bat. He failed miserably against the moving ball in England and West Indies exploited that weakness in Kochi. Jerome Taylor found the edge of Kohli''s slanting bat and Darren Sammy, <b>with hands</b> like buckets, gobbled the batsman up at slips.');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
  `fno` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`fno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`fno`, `feedback`) VALUES
(1, '0'),
(2, 'asd'),
(3, 'rakjsh'),
(4, ''),
(5, 'sa'),
(6, 'apple is good'),
(7, 'one of the awesome site I have ever seen'),
(8, 'y'),
(9, ''),
(10, ''),
(11, 'trial 34\r\n'),
(12, ''),
(13, 'afdasfa');

-- --------------------------------------------------------

--
-- Table structure for table `football`
--

CREATE TABLE IF NOT EXISTS `football` (
  `Username` varchar(20) NOT NULL,
  `Pname` text NOT NULL,
  `Branch` text NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_tournaments`
--

CREATE TABLE IF NOT EXISTS `other_tournaments` (
  `OTname` varchar(20) NOT NULL,
  `Organizer` varchar(20) NOT NULL,
  `Time` date NOT NULL,
  `Venue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sptournaments`
--

CREATE TABLE IF NOT EXISTS `sptournaments` (
  `Tname` varchar(20) NOT NULL,
  `Orgnaizer` varchar(20) NOT NULL,
  `Time` date NOT NULL,
  `Venue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `branch` text NOT NULL,
  `year` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `roll_no` int(15) NOT NULL,
  `dob` date NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `Username` (`username`),
  FULLTEXT KEY `Branch` (`branch`),
  FULLTEXT KEY `Branch_2` (`branch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volleyball`
--

CREATE TABLE IF NOT EXISTS `volleyball` (
  `Username` varchar(20) NOT NULL,
  `Pname` text NOT NULL,
  `Branch` text NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
