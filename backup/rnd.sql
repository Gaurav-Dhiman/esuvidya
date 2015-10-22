-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2015 at 04:20 PM
-- Server version: 5.5.17-0ubuntu1~lucid1~ppa3
-- PHP Version: 5.4.11-1~lucid+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rnd`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stud_id` int(10) NOT NULL AUTO_INCREMENT,
  `gr_num` int(10) NOT NULL,
  `roll_num` int(10) NOT NULL,
  `std` int(10) NOT NULL,
  `stream` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `semester` int(2) NOT NULL,
  `admit_to` datetime NOT NULL,
  `medium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adrs_residence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adrs_father_ofc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adrs_mother_ofc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adrs_native` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `alt_phone` int(10) NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caste` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_caste` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weight` int(3) NOT NULL,
  `height` int(3) NOT NULL,
  `birth_date` datetime NOT NULL,
  `admission_date` datetime NOT NULL,
  `fee_scheme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_std` int(10) NOT NULL,
  `house` int(11) DEFAULT NULL,
  `blood_grp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `repeater` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_occupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_tongue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `computer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `books_allowed` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `near_rly_stn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seat_num` int(10) NOT NULL,
  `bus` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bus_num` int(10) DEFAULT NULL,
  `bus_route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `child_num` int(2) NOT NULL,
  `passed_out` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_percentage` int(3) NOT NULL,
  `handicap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nss` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `updated_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_deleted` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `gr_num`, `roll_num`, `std`, `stream`, `division`, `semester`, `admit_to`, `medium`, `fname`, `mname`, `lname`, `mother_name`, `adrs_residence`, `adrs_father_ofc`, `adrs_mother_ofc`, `adrs_native`, `city`, `pincode`, `district`, `birth_place`, `phone`, `mobile`, `alt_phone`, `gender`, `religion`, `caste`, `s_caste`, `weight`, `height`, `birth_date`, `admission_date`, `fee_scheme`, `start_std`, `house`, `blood_grp`, `status`, `repeater`, `father_occupation`, `mother_occupation`, `mother_tongue`, `nationality`, `computer`, `books_allowed`, `near_rly_stn`, `seat_num`, `bus`, `bus_num`, `bus_route`, `child_num`, `passed_out`, `last_percentage`, `handicap`, `nss`, `created`, `modified`, `updated_by`, `is_deleted`) VALUES
(1, 123, 1, 132, 'science', 'first', 6, '2015-07-30 00:00:00', 'english', 'gaurav', 'dhiman', 'sharma', 'saroj', 'rishikesh dehradun', 'idpl rishikesh dehradun', 'geeta nagar rishikesh dehradun', 'dehradun', 'rishikesh', '249202', 'dehradun', 'risikesh', 1352540789, 2147483647, 2147483647, 'male', 'hindu', 'brahman', 'pandit', 90, 178, '1987-03-13 00:00:00', '2015-07-30 00:00:00', 'nothing', 132, 123, '0', 'good', 'nop', 'chemical engineer', 'house wife', 'hindi', 'indian', 'yes', 'so many', 'worli', 132, 'nop', 132, 'fhasdjfhkasjdhfjhsdfasf', 1, 'yep', 100, 'nop', 'wtf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(2, 1, 111, 0, 'stream1', 'division1', 0, '0000-00-00 00:00:00', 'english', 'sadfsadf', 'asdfasdfas', 'sadfasdfasdf', 'dfasdfa', 'fasfdasdfasdf', 'asdfasd', 'sdfasdf', 'asdfasdfasdf', 'dehradun', '14444', 'haridwar', 'as', 2147483647, 24234234, 2147483647, 'Male', 'hindu', 'caste1', 'sadfasdfasdf', 90, 180, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'sdfasdfasdf', 0, 0, 'grp1', 'status2', 'sdfasdfasdf', 'service1', 'service1', 'marathi', 'Indian', 'asfdasfd', '10', 'asdfasdfa', 10, 'YES', 0, 'Route1', 10, 'Year1', 10, 'YES', 'YES', '2015-07-30 17:58:35', '2015-07-30 17:58:35', 'Gaurav Dhiman', 0),
(3, 0, 0, 0, '', '', 0, '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', '', '2015-08-03 17:57:45', '2015-08-03 17:57:45', 'Gaurav Dhiman', 0),
(4, 0, 0, 0, '', '', 0, '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', '', '2015-08-03 17:57:55', '2015-08-03 17:57:55', 'Gaurav Dhiman', 0),
(5, 0, 0, 0, '', '', 0, '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', '', '2015-08-03 17:58:01', '2015-08-03 17:58:01', 'Gaurav Dhiman', 0),
(6, 0, 0, 0, '', '', 0, '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', '', '2015-08-03 17:58:05', '2015-08-03 17:58:05', 'Gaurav Dhiman', 0),
(7, 0, 0, 0, '', '', 0, '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, '', '', '2015-08-03 17:58:12', '2015-08-03 17:58:12', 'Gaurav Dhiman', 0),
(8, 12, 121212, 0, 'stream1', 'division1', 0, '0000-00-00 00:00:00', 'english', 'adsfsfdhgfjh', 'vbmnnm', 'sadfasfd', 'vbmnvbmn', 'vbmnbnmvbmn vmvbn mvb', 'nm vbnmbvn m', 'vbnm bnm', ' vmmv', 'dehradun', '2445', 'dehradun', 'sfdasdfasd', 4563456, 456456, 45645645, 'Male', 'hindu', 'OPEN', 'sdfasdff', 45, 456, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'sdfasdf', 0, NULL, 'A+', 'Current', NULL, 'Professional', 'Professional', 'marathi', 'Indian', NULL, NULL, 'asfdasdf', 4545, NULL, NULL, NULL, 4564, 'Year1', 45, 'NO', 'YES', '2015-08-06 12:56:40', '2015-08-06 12:56:40', 'Gaurav Dhiman', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `password`, `username`, `email`, `gender`, `created`, `modified`, `user_type`, `is_deleted`) VALUES
(1, 'gaurav', '5f4ef7265c6c65fac3533c1871245363', 'gauravgd', 'gauravgd22@yahoo.com', 'Male', '2015-07-27 00:00:00', '2015-07-27 00:00:00', 'Superadmin', 0),
(2, 'dev', 'cbcefaf71b4677cb8bcc006e0aeaa34a', 'devchu', 'dev_chu@gmail.com', 'Male', '2015-07-27 00:00:00', '2015-07-27 00:00:00', 'Admin', 0),
(6, 'amit chu', '6c4186e6d2f8ec90dff7b3e9a58b1b91', 'amitchu', 'amit@chu.com', 'Male', '2015-07-29 16:18:23', '2015-07-29 16:22:18', 'superadmin', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
