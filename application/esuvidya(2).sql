-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2015 at 11:16 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esuvidya`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE IF NOT EXISTS `divisions` (
  `div_id` int(10) NOT NULL AUTO_INCREMENT,
  `std_code` int(2) NOT NULL,
  `division_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`div_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`div_id`, `std_code`, `division_name`, `is_deleted`) VALUES
(1, 1, 'Ruby', 0),
(2, 1, 'Diamond', 0),
(3, 1, 'Saphire', 0),
(4, 1, 'Topaz', 0),
(5, 2, 'A', 0),
(6, 2, 'B', 0),
(7, 2, 'C', 0),
(8, 3, 'A', 0),
(9, 3, 'B', 0),
(10, 3, 'C', 0),
(11, 3, 'D', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `sec_id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_std` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `end_std` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `header_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `only_fr_acc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_deleted` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`sec_id`, `code`, `name`, `start_std`, `end_std`, `header_name`, `only_fr_acc`, `is_deleted`) VALUES
(1, 'I', 'Nursery', 'ER', 'ER', 'Navodaya Tiny Tots', 'No', 0),
(2, 'K', 'Pre-Primary', 'JK', 'SK', 'Navodaya KG School', 'No', 0),
(3, 'P', 'Primary', '01', '04', 'Navodya Primary School', 'No', 0),
(4, 'S', 'Secondary', '05', '10', 'Navodya High School', 'No', 0),
(5, 'T', 'Jr.College', '11', '12', 'Navodya Junior College', 'No', 0),
(6, 'U', 'Sr.College', 'FY', 'TY', 'Navodya College of Science & Commerce', 'No', 0);

-- --------------------------------------------------------

--
-- Table structure for table `standards`
--

CREATE TABLE IF NOT EXISTS `standards` (
  `std_id` int(10) NOT NULL AUTO_INCREMENT,
  `std_code` int(10) NOT NULL,
  `std` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `best_age` int(11) NOT NULL,
  `next_std` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `default_fee_schemes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `std_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fractional_marks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`std_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `standards`
--

INSERT INTO `standards` (`std_id`, `std_code`, `std`, `section`, `medium`, `best_age`, `next_std`, `default_fee_schemes`, `std_name`, `fractional_marks`, `is_deleted`) VALUES
(3, 1, 'ER', 'I', 'English', 2, 'JK', '1,2', 'Nursery', 'No', 0),
(4, 2, 'JK', 'K', 'English', 3, 'SK', '1,2', 'Junior K.G', 'No', 0),
(5, 3, 'SK', 'K', 'English', 4, '01', '3,4', 'Senior K.G', 'No', 0),
(6, 4, '01', 'P', 'English', 5, '02', '1,2', 'I', 'Yes', 0),
(7, 5, '02', 'P', 'English', 6, '03', '3,4', 'II', 'Yes', 0),
(8, 6, '03', 'P', 'English', 7, '04', '5,6', 'III', 'Yes', 0),
(9, 7, '04', 'P', 'English', 8, '05', '7,8', 'IV', 'Yes', 0),
(10, 8, '05', 'S', 'English', 9, '06', '1,2', 'V', 'Yes', 0),
(11, 9, '05', 'S', 'Gujrati', 9, '06', '1,2', 'V', 'No', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stud_id` int(10) NOT NULL AUTO_INCREMENT,
  `gr_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roll_num` int(10) NOT NULL,
  `std` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stream` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `division` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admit_to` datetime NOT NULL,
  `medium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_mname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_qualification` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_pq` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_mobile` int(10) NOT NULL,
  `father_ofc_num` int(10) DEFAULT NULL,
  `father_ofc_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adrs_father_ofc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_aadhar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_ai` int(10) DEFAULT NULL,
  `father_pan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_qualification` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_pq` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_mobile` int(10) DEFAULT NULL,
  `mother_ofc_num` int(10) DEFAULT NULL,
  `mother_ofc_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adrs_mother_ofc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_aadhar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_ai` int(10) DEFAULT NULL,
  `mother_pan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_divorced` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_adopted` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sibbling1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sibbling2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sibbling3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adrs_residence` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adrs_native` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_place` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt_phone` int(10) DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caste` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_caste` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` int(3) DEFAULT NULL,
  `height` int(3) DEFAULT NULL,
  `birth_date` datetime NOT NULL,
  `age` int(3) NOT NULL,
  `admission_date` datetime DEFAULT NULL,
  `fee_scheme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_std` int(10) DEFAULT NULL,
  `blood_grp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_tongue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `near_rly_stn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seat_num` int(10) DEFAULT NULL,
  `child_num` int(2) DEFAULT NULL,
  `passed_out` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_percentage` int(3) DEFAULT NULL,
  `handicap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nss` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `leaving_date` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `updated_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_deleted` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `gr_num`, `roll_num`, `std`, `stream`, `division`, `semester`, `admit_to`, `medium`, `fname`, `mname`, `lname`, `image_path`, `father_mname`, `father_qualification`, `father_occupation`, `father_pq`, `father_mobile`, `father_ofc_num`, `father_ofc_name`, `adrs_father_ofc`, `father_email`, `father_aadhar`, `father_ai`, `father_pan`, `mother_fname`, `mother_qualification`, `mother_occupation`, `mother_pq`, `mother_mobile`, `mother_ofc_num`, `mother_ofc_name`, `adrs_mother_ofc`, `mother_email`, `mother_aadhar`, `mother_ai`, `mother_pan`, `is_divorced`, `is_adopted`, `city`, `sibbling1`, `sibbling2`, `sibbling3`, `adrs_residence`, `adrs_native`, `pincode`, `district`, `birth_place`, `alt_phone`, `gender`, `religion`, `caste`, `s_caste`, `weight`, `height`, `birth_date`, `age`, `admission_date`, `fee_scheme`, `start_std`, `blood_grp`, `status`, `mother_tongue`, `nationality`, `near_rly_stn`, `seat_num`, `child_num`, `passed_out`, `last_percentage`, `handicap`, `nss`, `leaving_date`, `created`, `modified`, `updated_by`, `is_deleted`) VALUES
(1, '123', 1, '132', 'science', 'first', '6', '2015-07-30 00:00:00', 'english', 'gaurav', 'dhiman', 'sharma', '', '', '', '', NULL, 0, 0, '', '', '', '', 0, '', '', '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, 'rishikesh dehradun', 'dehradun', '249202', 'dehradun', 'risikesh', 2147483647, 'Male', 'hindu', 'brahman', 'pandit', 90, 178, '1987-03-13 00:00:00', 0, '2015-07-30 00:00:00', 'nothing', 132, '0', 'Left', 'hindi', 'indian', 'worli', 132, 1, 'yep', 100, 'nop', 'wtf', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(2, '1', 111, '0', 'stream1', 'division1', '0', '0000-00-00 00:00:00', 'english', 'sadfsadf', 'asdfasdfas', 'sadfasdfasdf', '', '', '', '', NULL, 0, 0, '', '', '', '', 0, '', '', '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, 'fasfdasdfasdf', 'asdfasdfasdf', '14444', 'haridwar', 'as', 24234234, 'Male', 'hindu', 'caste1', 'sadfasdfasdf', 90, 180, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 'sdfasdfasdf', 0, 'grp1', 'status2', 'marathi', 'Indian', 'asdfasdfa', 10, 10, 'Year1', 10, 'YES', 'YES', NULL, '2015-07-30 17:58:35', '2015-07-30 17:58:35', 'Gaurav Dhiman', 0),
(3, '0', 0, '0', '', '', '0', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', NULL, 0, 0, '', '', '', '', 0, '', '', '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, '', '', '', '', '', 0, 'Male', '', '', '', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', 0, '', '', '', '', '', 0, 0, '', 0, '', '', NULL, '2015-08-03 17:57:45', '2015-08-03 17:57:45', 'Gaurav Dhiman', 0),
(4, '0', 0, '0', '', '', '0', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', NULL, 0, 0, '', '', '', '', 0, '', '', '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, '', '', '', '', '', 0, 'Female', '', '', '', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', 0, '', 'Left', '', '', '', 0, 0, '', 0, '', '', NULL, '2015-08-03 17:57:55', '2015-08-03 17:57:55', 'Gaurav Dhiman', 0),
(5, '0', 0, '0', '', '', '0', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', NULL, 0, 0, '', '', '', '', 0, '', '', '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, '', '', '', '', '', 0, 'Male', '', '', '', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', 0, '', 'Left', '', '', '', 0, 0, '', 0, '', '', NULL, '2015-08-03 17:58:01', '2015-08-03 17:58:01', 'Gaurav Dhiman', 0),
(6, '0', 0, '0', '', '', '0', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', NULL, 0, 0, '', '', '', '', 0, '', '', '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, '', '', '', '', '', 0, 'Female', '', '', '', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', 0, '', 'Left', '', '', '', 0, 0, '', 0, '', '', NULL, '2015-08-03 17:58:05', '2015-08-03 17:58:05', 'Gaurav Dhiman', 0),
(7, '0', 0, '0', '', '', '0', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', NULL, 0, 0, '', '', '', '', 0, '', '', '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, '', '', '', '', '', 0, 'Female', '', '', '', 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', 0, '', '', '', '', '', 0, 0, '', 0, '', '', NULL, '2015-08-03 17:58:12', '2015-08-03 17:58:12', 'Gaurav Dhiman', 0),
(8, '12', 121212, '0', 'stream1', 'division1', '0', '0000-00-00 00:00:00', 'english', 'adsfsfdhgfjh', 'vbmnnm', 'sadfasfd', '', '', '', '', NULL, 0, 0, '', '', '', '', 0, '', '', '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, 'vbmnbnmvbmn vmvbn mvb', ' vmmv', '2445', 'dehradun', 'sfdasdfasd', 456456, 'Male', 'hindu', 'OPEN', 'sdfasdff', 45, 456, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 'sdfasdf', 0, 'A+', 'Current', 'marathi', 'Indian', 'asfdasdf', 4545, 4564, 'Year1', 45, 'NO', 'YES', NULL, '2015-08-06 12:56:40', '2015-08-06 12:56:40', 'Gaurav Dhiman', 0),
(9, '0', 0, '0', 'stream1', 'division1', '0', '0000-00-00 00:00:00', 'english', 'devi', 'kumari', 'mishra', 'assets/media/students_images/ae8b2f8ac0b307c63582b571b473d457.jpg', 'amit kumar', 'graduate', 'Service', 'Software developer', 2147483647, 1352450789, 'neosoft technologies', 'dadar', 'gauravgd22@yahoo.com', '123456789', 1000000, '1234656789', 'shree devi mishra', 'ssc', 'Housewife ', '', 123456789, 0, '', '', 'gauravgd22@yahoo.com', '123456789', 100000, '123456789', '', '', 'dehradun', '12', '111', '1', 'aDDSADADSADSADSasasda', 'asdasdasdasd', '249202', 'dehradun', 'rishikesh', 0, 'Female', 'muslim', 'OPEN', 'bihari', 80, 160, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', 0, '', 'Current', '', 'indian', '', 122, 1, 'Year1', 80, NULL, 'Year1', NULL, '2015-09-10 01:22:09', '2015-09-10 01:22:09', 'Gaurav Dhiman', 0),
(10, 'egd01', 1, 'std1', 'science', 'divisionA', '0', '0000-00-00 00:00:00', 'english', 'Gaurav', '', 'Dhiman', 'assets/media/students_images/161d1141c389ed380fd87500992161e6.jpg', 'Som Datt Sharma', 'post_graduate', 'Service', 'Chemical Engineer ', 2147483647, 132465789, 'IDPL', 'IDPL Rishikesh dehradun', 'gauravgd22@yahoo.com', '123456789', 1000000, '123465789', 'Saroj Bala Sharma', 'ssc', 'Service', 'B.Ed', 123456789, 12345789, 'Govt', 'rihikesh', 'saroj.bala@gmail.com', '123456789', 111111, '123465897', '', '', 'dehradun', '132', '123', '1232', 'C -5 Vijeta Building', 'Rishikesh', '', 'dehradun', 'Rishikesh', 123465789, 'Male', 'hindu', 'OPEN', '', 90, 160, '0000-00-00 00:00:00', 18, '0000-00-00 00:00:00', '2015-09-07', 0, 'A+', 'Current', 'marathi', 'Indian', 'thakurli', 12, 4, 'no', 80, NULL, 'no', NULL, '2015-09-12 18:06:53', '2015-09-12 18:06:53', 'Gaurav Dhiman', 0),
(11, 'egd01', 2, 'std1', 'science', 'divisionC', 'semester1', '1970-01-01 05:30:00', 'english', 'sdfsf', 'fssdfsdf', 'fddsfsdfs', NULL, 'fdsfsdfs', 'ssc', 'Service', '', 4565465, 0, '', '', '', '', 0, '', 'fgfgdfgdfgdfg', '', '', '', 0, 0, '', '', '', '', 0, '', NULL, NULL, '', '', '', '', '', '', '54654', '', '', 0, 'Male', 'hindu', '', '', 0, 0, '2015-09-12 00:00:00', 25, '1970-01-01 05:30:00', '', 0, '', '', '', '', '', 0, 0, '', 0, NULL, '', NULL, '2015-09-12 18:49:11', '2015-09-12 18:49:11', 'Gaurav Dhiman', 0),
(12, 'egd01', 2, 'std2', 'science', 'divisionA', 'semester1', '1970-01-01 05:30:00', 'hindi', 'fdsfsdfsfd', 'sdfsdfsdfsdfdfsdfdf', 'sdsfsdf', NULL, 'fdsfdsfgdfg', 'ssc', '', '', 546546, 0, '', '', '', '', 0, '', 'hdfgshgfshgdj', '', '', '', 0, 0, '', '', '', '', 0, '', 'yes', 'yes', '', '', '', '', '', '', '456', '', '', 0, 'Male', '', '', '', 0, 0, '1987-03-13 00:00:00', 28, '1970-01-01 05:30:00', '', 0, '', '', '', '', '', 0, 0, '', 0, NULL, '', NULL, '2015-09-12 19:46:42', '2015-09-12 19:46:42', 'Gaurav Dhiman', 0),
(13, 'egd01', 2, 'std1', 'science', 'divisionA', 'semester1', '1970-01-01 05:30:00', 'english', 'Gaurav', '', 'Dhiman', NULL, 'Som Datt Sharma', 'post_graduate', 'Service', 'Chemical Engineer ', 2147483647, 132465789, 'IDPL', 'IDPL Rishikesh dehradun', 'gauravgd22@yahoo.com', '123456789', 1000000, '123465789', '123465789', 'ssc', 'Service', 'B.Ed', 123456789, 12345789, 'Govt', 'rihikesh', 'saroj.bala@gmail.com', '123456789', 111111, '123465897', 'no', 'no', 'dehradun', '132', '123', '1232', 'C -5 Vijeta Building', 'Rishikesh', '249202', 'dehradun', 'Rishikesh', 123465789, 'Male', 'hindu', 'OPEN', '', 90, 160, '1987-09-13 00:00:00', 28, '1970-01-01 05:30:00', '2015-09-07', 0, 'A+', 'Current', 'marathi', 'Indian', 'thakurli', 12, 4, 'no', 80, 'no', 'no', '0000-00-00 00:00:00', '2015-09-13 02:04:15', '2015-09-13 02:04:15', 'Gaurav Dhiman', 0),
(14, 'egd01', 2, 'std1', 'commerce', 'divisionB', 'semester1', '1970-01-01 05:30:00', 'english', 'Amit', 'kumar', 'chamar', 'assets/media/students_images/a6e94538e5925868de366a063fedf6d1.jpg', 'idontknow', 'ssc', 'Other', 'nothing', 2147483647, 1352450789, 'neosoft technologies', 'andheri', 'gauravgd22@yahoo.com', '123456789', 1000000, '1234656789', 'idontknow', 'ssc', 'Housewife ', 'nothing', 123456789, 12345789, 'neosoft', 'bihar', 'gauravgd22@yahoo.com', '123456789', 100000, '123456789', 'no', 'no', 'dehradun', '1212', '234234234242424', '2342', 'bihar', 'bihar', '249202', 'haridwar', 'bihar', 12654987, 'Male', 'muslim', 'SC', 'bihari', 80, 160, '2015-09-15 00:00:00', 0, '1970-01-01 05:30:00', '', 0, 'A+', 'Current', 'marathi', 'Indian', 'thakurli stn', 10, 1, 'yes', 80, NULL, 'yes', NULL, '2015-09-15 22:57:45', '2015-09-15 22:57:45', 'Gaurav Dhiman', 0);

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
