-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2019 at 11:33 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `College`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL,
  `replied` int(11) NOT NULL,
  `question_id` varchar(50) NOT NULL,
  `answer_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `likes` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `replied`, `question_id`, `answer_detail`, `datetime`, `user_id`, `likes`) VALUES
(1, 3, '1', 'fdsfsfsfsfs', '2019-07-27 04:12:45', 1, 144),
(0, 0, '1', 'hello', '2019-07-27 03:37:29', 1, 3),
(0, 0, '1', 'hello', '2019-07-27 03:37:29', 1, 3),
(0, 0, '12', 'hello', '2019-07-27 03:37:29', 1, 3),
(0, 0, '12', 'hello', '2019-07-27 03:37:29', 1, 3),
(0, 0, '1', 'hellooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo', '2019-07-27 03:37:29', 1, 3),
(0, 0, '1', 'dfdsfsfsdf', '2019-07-27 03:37:29', 1, 3),
(0, 0, '2', 'hyper text pre processor', '2019-07-27 03:37:29', 1, 3),
(0, 0, '5', 'hello', '2019-07-27 04:08:25', 1, 0),
(0, 0, '2', 'gfdhghjhhgnf', '2019-07-27 04:06:43', 1, 0),
(0, 0, '5', 'geeee', '2019-07-27 04:08:35', 1, 0),
(0, 0, '5', 'hdfhgfdhghd', '2019-07-27 04:11:37', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(50) NOT NULL,
  `question_detail` varchar(20000) NOT NULL,
  `datetime` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `subtopic_id` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `heading`, `question_detail`, `datetime`, `user_id`, `subtopic_id`, `views`) VALUES
(1, 'java', 'what is java ', '2019-07-27 03:55:00', 1, 2, 465),
(2, 'html', 'Fulll form of html', '2019-07-27 04:05:31', 2, 3, 135),
(3, 'java', 'what is java', '2019-07-27 02:41:28', 1, 2, 9),
(4, 'html', 'Fulll form of html', '2019-07-26 04:36:09', 2, 3, 48),
(5, 'J2EE', 'RMI Architecture', '2019-07-17 04:07:23', 2, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option1` varchar(222) NOT NULL,
  `option2` varchar(222) NOT NULL,
  `option3` varchar(222) NOT NULL,
  `option4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` varchar(15) DEFAULT NULL,
  `subject` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `que`, `option1`, `option2`, `option3`, `option4`, `ans`, `userans`, `subject`) VALUES
(1, 'Who is/was the prime minister of india from under:', 'Narendra modi', 'Salman khan', 'Dr. Rajendra prasad', 'Barak Obama', 'Narendra modi', '', ''),
(2, 'Where the u.n. situated?', 'USA', 'UK', 'giniva', 'Russia', 'USA', '', ''),
(3, 'who is modi', 'prime minister', 'celebrity', 'film star', 'DON', 'prime minister', '', ''),
(4, 'where the RPBC is?', 'IN RAJKOT', 'IN AHMEDABAD', 'IN BANGLORE', 'IN PUNE', 'IN RAJKOT', '', ''),
(5, 'erignk', 'rr', 'rr', 'rr', 'rr', 'rr', '', ''),
(6, 'whisgk', 'ww', 'ieorj', 'ww', 'sdgn', 'ww', '', ''),
(7, '1', '1', '2', '3', '4', '1', '', ''),
(8, '1', '1', '2', '3', '4', '1', '', ''),
(9, '1', '1', '2', '3', '4', '1', '', ''),
(10, 'rushit', 'r', 'r', 'r', 'r', 'r', '', 'science'),
(11, 'who is obaama', 'f. president', 'f. presiden', 'f. preside', 'f. president', 'f. president', '', 'maths'),
(12, 'who is obaama', 'f. president', 'f. presiden', 'f. preside', 'f. president', 'f. president', '', 'maths'),
(13, 'who is obaama', 'f. president', 'f. presiden', 'f. preside', 'f. president', 'f. president', '', 'maths'),
(14, 'who is obaama', 'f. president', 'f. presiden', 'f. preside', 'f. president', 'f. president', '', 'maths'),
(15, 'who is obaama', 'f. president', 'f. presiden', 'f. preside', 'f. president', 'f. president', '', 'maths');

-- --------------------------------------------------------

--
-- Table structure for table `subtopic`
--

CREATE TABLE IF NOT EXISTS `subtopic` (
  `Subtopic_id` int(11) NOT NULL,
  `Subtopic_name` varchar(50) NOT NULL,
  `Subtopic_desc` varchar(500) NOT NULL,
  `s_status` varchar(20) NOT NULL,
  `Topic_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subtopic`
--

INSERT INTO `subtopic` (`Subtopic_id`, `Subtopic_name`, `Subtopic_desc`, `s_status`, `Topic_id`) VALUES
(1, 'java mastrer table', 'how java master is sucessfulll in market', 't', 45),
(2, 'love', 'm loves p and p love m and both makes a family of 50 children and 200 daughter happy Family :)', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `Topic_id` int(11) NOT NULL,
  `Topic_name` varchar(50) NOT NULL,
  `Topic_type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`Topic_id`, `Topic_name`, `Topic_type`) VALUES
(1, 'Computer', 'text'),
(2, 'love', 'pramipankheda');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `enroll` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `ac_type` varchar(10) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `username`, `password`, `email`, `enroll`, `address`, `mobile`, `ac_type`, `user_status`) VALUES
(2, 'ruchit', 'agar', 'ruchit aga', '7878881678', 'R@gmail.com', '4545454545454', 'gjhgsdjhshgjas', '88888888888', 'user', 1),
(1, 'umang', 'fofaria', 'user_name', '123456789', 'Umang@gmail.com', '123456789', 'kjskdasdk', '7878881678', 'user', 1),
(3, 'mithilesh', 'modi', 'teddy', 'palaklovemithilesh', 'm@gmail.com', '78787878787878', 'hkjsdhkjhdaskjsh', '99999999999', 'user', 1);
