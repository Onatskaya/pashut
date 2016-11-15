-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2016 at 06:19 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pashutlehaskir`
--
CREATE DATABASE IF NOT EXISTS `pashutlehaskir` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pashutlehaskir`;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `office_location` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `mon_from` varchar(255) NOT NULL,
  `mon_to` varchar(255) NOT NULL,
  `tue_from` varchar(255) NOT NULL,
  `tue_to` varchar(255) NOT NULL,
  `wed_from` varchar(255) NOT NULL,
  `wed_to` varchar(255) NOT NULL,
  `thu_from` varchar(255) NOT NULL,
  `thu_to` varchar(255) NOT NULL,
  `fri_from` varchar(255) NOT NULL,
  `fri_to` varchar(255) NOT NULL,
  `sat_from` varchar(255) NOT NULL,
  `sat_to` varchar(255) NOT NULL,
  `sun_from` varchar(255) NOT NULL,
  `sun_to` varchar(255) NOT NULL,
  `start_month` varchar(25) NOT NULL,
  `start_day` varchar(20) NOT NULL,
  `start_year` varchar(4) NOT NULL,
  `resume` varchar(255) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `first_name`, `last_name`, `telephone`, `Email`, `street_address`, `city`, `state`, `zip_code`, `office_location`, `degree`, `mon_from`, `mon_to`, `tue_from`, `tue_to`, `wed_from`, `wed_to`, `thu_from`, `thu_to`, `fri_from`, `fri_to`, `sat_from`, `sat_to`, `sun_from`, `sun_to`, `start_month`, `start_day`, `start_year`, `resume`) VALUES
(1, 'yugandhar', 'Jaiswal', '8602650456', 'yugandhar.laabhaa@gmail.com', '1212', 'indore', 'FL', '845458', 'La Jolla', 'High School or Equivalent', '8AM', '8AM', '8AM', '8AM', '8AM', '8AM', '8AM', '8AM', '8AM', '8AM', '8AM', '8AM', '8AM', '8AM', 'February', '10', '2017', 'yugandhar.laabhaa@gmail.com.docx');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_type` varchar(255) NOT NULL,
  `ll_type` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mem_phone_a` varchar(255) NOT NULL,
  `mem_phone_b` varchar(255) NOT NULL,
  `mem_phone_c` varchar(255) NOT NULL,
  `credit_card_no` varchar(255) NOT NULL,
  `creditcard_type_id` varchar(255) NOT NULL,
  `credit_card_exp_mo` varchar(50) NOT NULL,
  `credit_card_exp_yr` varchar(50) NOT NULL,
  `credit_card_cvs` varchar(250) NOT NULL,
  `mem_street_number` varchar(250) NOT NULL,
  `mem_street_address` varchar(255) NOT NULL,
  `mem_city` varchar(255) NOT NULL,
  `mem_state` varchar(255) NOT NULL,
  `mem_zipcode` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contract_accepted` varchar(255) NOT NULL,
  `contract_accepted_CHX` varchar(255) NOT NULL,
  `contract_area_CHX` varchar(255) NOT NULL,
  `contract_structure_CHX` varchar(255) NOT NULL,
  `contract_bedrooms_CHX` varchar(255) NOT NULL,
  `contract_furnished_CHX` varchar(255) NOT NULL,
  `contract_maxrent` varchar(255) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_type`, `ll_type`, `first_name`, `last_name`, `email`, `mem_phone_a`, `mem_phone_b`, `mem_phone_c`, `credit_card_no`, `creditcard_type_id`, `credit_card_exp_mo`, `credit_card_exp_yr`, `credit_card_cvs`, `mem_street_number`, `mem_street_address`, `mem_city`, `mem_state`, `mem_zipcode`, `username`, `password`, `contract_accepted`, `contract_accepted_CHX`, `contract_area_CHX`, `contract_structure_CHX`, `contract_bedrooms_CHX`, `contract_furnished_CHX`, `contract_maxrent`) VALUES
(1, '', '1', 'yugandhar', 'jaiswal', 'yugandhar.laabhaa@gmail.com', '123', '456', '7899', '', '', '', '', '', '123', 'Leonardo street', 'La', '7', '845454', 'yugandhar.laabhaa@gmail.com', '123456', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
