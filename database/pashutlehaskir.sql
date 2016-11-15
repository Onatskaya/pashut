-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2016 at 01:43 PM
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
-- Table structure for table `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bath_tbl`
--

CREATE TABLE IF NOT EXISTS `bath_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `bath_tbl`
--

INSERT INTO `bath_tbl` (`id`, `bath`) VALUES
(1, '1/2 Bath'),
(2, '3/4 Bath'),
(3, '1 Bath'),
(4, '1 1/2 Bath'),
(5, '1 3/4 Bath'),
(6, '2 Baths'),
(7, '2 1/2 Bath'),
(8, '3 Baths'),
(9, '3 1/2 Bath'),
(10, '4 Baths'),
(11, '4 1/2 Bath'),
(12, '5 Baths'),
(13, '5 1/2 Bath'),
(14, '6 Baths'),
(15, '6 1/2 Bath'),
(16, '7 Baths'),
(17, '7 1/2 Bath'),
(18, '8 Baths'),
(19, '8 1/2 Bath'),
(20, 'Shared Bathroom'),
(21, 'Private Bathroom'),
(22, 'No Bathroom'),
(23, 'Baths N/A');

-- --------------------------------------------------------

--
-- Table structure for table `bedroom_tbl`
--

CREATE TABLE IF NOT EXISTS `bedroom_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bedroom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `bedroom_tbl`
--

INSERT INTO `bedroom_tbl` (`id`, `bedroom`) VALUES
(1, 'Shared Bedroom'),
(2, 'Private Bedroom'),
(3, 'Bachelor'),
(4, 'Loft'),
(5, 'Single'),
(6, 'Studio'),
(7, '1 bedroom'),
(8, '2 bedrooms'),
(9, '3 bedrooms'),
(10, '4 bedrooms'),
(11, '5 bedrooms'),
(12, '6 bedrooms'),
(13, '7 bedrooms'),
(14, '8 bedrooms'),
(15, '9 bedrooms'),
(16, 'Other Bedroom Option'),
(17, 'Bedroom N/A');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Tel Aviv'),
(2, 'Ramat-Gan'),
(3, 'Givatayim'),
(4, 'Netanya'),
(5, 'Raanana'),
(6, 'Herzliya'),
(7, 'Bat Yam'),
(8, 'Holon'),
(9, 'Eilat'),
(10, 'Haifa'),
(11, 'Jerusalem'),
(12, 'Akko'),
(13, 'Arad'),
(14, 'Ariel'),
(15, 'Ashdod'),
(16, 'Ashkelon'),
(17, 'Bat Yam'),
(18, 'Beer Sheva'),
(19, 'Beit Shean'),
(20, 'Beit Shemesh'),
(21, 'Betar Illit'),
(22, 'Bnei Berak'),
(23, 'Dimona'),
(24, 'Hadera'),
(25, 'Hod HaSharon'),
(26, 'Karmiel'),
(27, 'Kfar Saba'),
(28, 'Kiryat Ata'),
(29, 'Kiryat Bialik'),
(30, 'Kiryat Gat'),
(31, 'Kiryat Malachi'),
(32, 'Kiryat Motzkin'),
(33, 'Kiryat Ono'),
(34, 'Kiryat Shemone'),
(35, 'Kiryat Yam'),
(36, 'Lod'),
(37, 'Maale Adumim'),
(38, 'Maalot Tarshiha'),
(39, 'Migdal HaEmek'),
(40, 'Modiin'),
(41, 'Nahariya'),
(42, 'Nes Ziona'),
(43, 'Nesher'),
(44, 'Netivot'),
(45, 'Or Yehuda'),
(46, 'Petah Tikva'),
(47, 'Ramat Hasharon'),
(48, 'Ramla'),
(49, 'Rehovot'),
(50, 'Rishon Lezion'),
(51, 'Rosh Haayin'),
(52, 'Sderot'),
(53, 'Tiberias'),
(54, 'Tirat Carmel'),
(55, 'Tsfat (Safed)'),
(56, 'Yavne'),
(57, 'Yehud-Monosson');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_tbl`
--

CREATE TABLE IF NOT EXISTS `favorite_tbl` (
  `fav_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) NOT NULL,
  `property_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`fav_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `favorite_tbl`
--

INSERT INTO `favorite_tbl` (`fav_id`, `member_id`, `property_id`, `status`) VALUES
(1, '3', '1', 'Unfavorite'),
(2, '3', '2', 'Favorite'),
(3, '3', '3', 'Favorite'),
(4, '3', '5', 'Favorite');

-- --------------------------------------------------------

--
-- Table structure for table `floor_tbl`
--

CREATE TABLE IF NOT EXISTS `floor_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `floor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `floor_tbl`
--

INSERT INTO `floor_tbl` (`id`, `floor`) VALUES
(1, 'Floor type not specified'),
(2, 'Carpet Floors'),
(3, 'New Carpets'),
(4, 'Hardwood Floors'),
(5, 'New Hardwood Floors'),
(6, 'Tile Floors'),
(7, 'New Tile Floors'),
(8, 'Carpet and Laminate Floors'),
(9, 'Hardwood and Carpet Floors'),
(10, 'Hardwood and Tile Floors'),
(11, 'Carpet and Tile Floors'),
(12, 'Carpet, Hardwood, and Laminate Floors'),
(13, 'Carpet, Hardwood, and Tile Floors'),
(14, 'Concrete'),
(15, 'Laminate'),
(16, 'Marble Tile Floors');

-- --------------------------------------------------------

--
-- Table structure for table `house_image`
--

CREATE TABLE IF NOT EXISTS `house_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `house_image`
--

INSERT INTO `house_image` (`image_id`, `member_id`, `post_id`, `image`) VALUES
(1, '1', '14', '101465985618.jpg'),
(2, '1', '14', '111465985618.jpg'),
(3, '1', '14', '121465985618.jpg'),
(4, '1', '14', '131465985618.jpg'),
(5, '1', '14', '141465985618.jpg'),
(6, '2', '16', '201466681237.jpg'),
(7, '2', '16', '211466681237.jpg'),
(8, '2', '17', '201466754091.jpg'),
(9, '2', '17', '211466754092.jpg'),
(10, '9', '18', '901466759215.jpg'),
(11, '2', '19', '201467280854.jpg'),
(12, '2', '20', '201467282127.jpg'),
(13, '9', '21', '901467638406.jpg'),
(14, '2', '22', '201467789572.jpg'),
(15, '2', '23', '201467789638.jpg'),
(16, '2', '1', '201469444351.jpg'),
(17, '2', '1', '211469444352.jpg'),
(18, '2', '1', '221469444352.jpg'),
(19, '9', '2', '901469787760.JPG'),
(20, '9', '2', '911469787760.');

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
-- Table structure for table `lease_tbl`
--

CREATE TABLE IF NOT EXISTS `lease_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lease_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `lease_tbl`
--

INSERT INTO `lease_tbl` (`id`, `lease_type`) VALUES
(1, 'One year minimum lease'),
(2, 'Nine month lease'),
(3, 'Six month lease'),
(4, 'Three month lease'),
(5, 'Month-to-month lease'),
(6, 'Weekly rental'),
(7, 'Sublet'),
(8, 'Two year minimum lease'),
(9, 'Flexible lease'),
(10, 'Other lease type'),
(11, 'In Escrow');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_type` varchar(255) NOT NULL,
  `membership_plan` varchar(255) NOT NULL,
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
  `accept_terms` varchar(255) NOT NULL,
  `accept_foreclosure` varchar(255) NOT NULL,
  `accept_credit_check` varchar(255) NOT NULL,
  `accept_pm_brokerage` varchar(255) NOT NULL,
  `contract_accepted` varchar(255) NOT NULL,
  `contract_accepted_CHX` varchar(255) NOT NULL,
  `contract_area_CHX` varchar(255) NOT NULL,
  `contract_structure_CHX` varchar(255) NOT NULL,
  `contract_bedrooms_CHX` varchar(255) NOT NULL,
  `contract_furnished_CHX` varchar(255) NOT NULL,
  `contract_maxrent` varchar(255) NOT NULL,
  `member2_firstname` varchar(255) NOT NULL,
  `member2_lastname` varchar(255) NOT NULL,
  `member2_email` varchar(255) NOT NULL,
  `member2_phone_a` varchar(255) NOT NULL,
  `member2_phone_b` varchar(255) NOT NULL,
  `member2_phone_c` varchar(255) NOT NULL,
  `sender_first_name` varchar(255) NOT NULL,
  `sender_last_name` varchar(255) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `sender_phone_a` varchar(255) NOT NULL,
  `sender_phone_b` varchar(255) NOT NULL,
  `sender_phone_c` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `member_status` varchar(255) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_type`, `membership_plan`, `ll_type`, `first_name`, `last_name`, `email`, `mem_phone_a`, `mem_phone_b`, `mem_phone_c`, `credit_card_no`, `creditcard_type_id`, `credit_card_exp_mo`, `credit_card_exp_yr`, `credit_card_cvs`, `mem_street_number`, `mem_street_address`, `mem_city`, `mem_state`, `mem_zipcode`, `username`, `password`, `accept_terms`, `accept_foreclosure`, `accept_credit_check`, `accept_pm_brokerage`, `contract_accepted`, `contract_accepted_CHX`, `contract_area_CHX`, `contract_structure_CHX`, `contract_bedrooms_CHX`, `contract_furnished_CHX`, `contract_maxrent`, `member2_firstname`, `member2_lastname`, `member2_email`, `member2_phone_a`, `member2_phone_b`, `member2_phone_c`, `sender_first_name`, `sender_last_name`, `sender_email`, `sender_phone_a`, `sender_phone_b`, `sender_phone_c`, `order_id`, `member_status`) VALUES
(1, 'landlord', '', 'Individual', 'yugandhar', 'jaiswal', 'yugandhar.laabhaa@gmail.com', '123', '456', '7899', '', '', '', '', '', '123', 'Leonardo street', 'bhopal', 'CT', '845454', 'yugandhar.laabhaa@gmail.com', '123456', '', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Disable'),
(2, 'landlord', '', 'Complex', 'Ankit', 'Makwana', 'ankitm.laabhaa@gmail.com', '977', '047', '4161', '', '', '', '', '', '5', 'anand bazar', 'indore', 'LA', '452001', 'ankitm.laabhaa@gmail.com', '12345', '', '', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Disable'),
(3, 'member', 's1', '', 'Ankit', 'Makwana', 'ankit@gmail.com', '999', '999', '9999', 'a78798799', '', '01', '16', 'aaa', '', '', '', '', '452001', 'ankit@gmail.com', '12345', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PLH-01', 'Enable'),
(4, 'member', 'd2', '', 'ramesh', 'rathore', 'ramesh@gmail.com', '999', '999', '9999', '5645665', '', '02', '19', '1233', '', '', '', '', '452001', 'ramesh@gmail.com', '12345', '', '', '', '', '1', '', '', '', '', '', '', 'suresh', 'jain', 'suresh@gmail.com', '789', '789', '7798', '', '', '', '', '', '', 'PLH-02', 'Disable'),
(5, 'member', 'c3', '', 'suresh', 'singh', 'singh@gmail.com', '999', '999', '9999', 'a2143434', '', '02', '18', '45', '', '', '', '', '452001', 'singh@gmail.com', '456456456456', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PLH-03', 'Disable'),
(7, 'member', 's1', '', 'first name ', 'last name', 'user@gmail.com', '456', '545', '4546', '8787878977878787', '', '04', '20', '121', '', '', '', '', '212212', 'user@gmail.com', '1111111111', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', 'sender name', 'sender last name', 'senderemail@gmail.com', '789', '798', '7987', 'PLH-04', 'Disable'),
(8, 'member', 's1', '', 'Jugal', 'Sharma', 'laabhaa@gmail.com', '260', '920', '7920', '1234', '', '03', '17', '234', '', '', '', '', '452016', 'laabhaa@gmail.com', '1234ertfrded', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PLH-05', 'Disable'),
(9, 'landlord', '', 'Individual', 'David', 'Miller', 'inv8mobile@mail.com', '054', '443', '4939', '', '', '', '', '', '15', 'hayarkon st', 'tel aviv', 'CA', '05465', 'inv8mobile@mail.com', '1234512345', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Disable'),
(11, 'member', 's1', '', 'Ankit', 'Makwana', 'ankitm@gmail.com', '999', '999', '9999', '2323112212311231', '', '01', '2016', '2131', '', '', '', '', '452001', 'ankitm@gmail.com', '1234567890', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PLH-06', 'Enable'),
(12, 'member', 's2', '', 'Akshay', 'Verma', 'akshayy@gmail.com', '385', '741', '7741', '4456655646456456', '2', '01', '2016', '4564', '', '', '', '', '456001', 'akshayy@gmail.com', '1234567890', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PLH-07', 'Enable'),
(13, 'member', 's1', '', 'Ankit', 'Makwana', 'sudha@gmail.com', '999', '999', '9999', '5465564565455454', '3', '01', '2016', '4545', '', '', '', '', '452001', 'sudha@gmail.com', '1234567890', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PLH-08', 'Enable'),
(14, 'member', 's2', '', 'yugandhar', 'jaiswal', 'abc@bca.com', '123', '456', '6788', '7894566554545454', '', '01', '2016', '123', '', '', '', '', '452016', 'abc@bca.com', '1234567890', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PLH-09', ''),
(15, 'member', 's2', '', 'yugandhar', 'Jaiswal', 'abc@gmnail.com', '860', '265', '0456', '123456789', '', '01', '2016', '1234', '', '', '', '', '1234566', 'abc@gmnail.com', '1234567890', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PLH-10', ''),
(16, 'member', 's2', '', 'yugandhart', 'sdsd', 'yugandhar.laabhaa11@gmail.com', 'sds', 'dsd', 'asd', 'sdasdasd', '', '01', '2016', 'sdas', '', '', '', '', '452016', 'yugandhar.laabhaa11@gmail.com', '1234567890', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PLH-11', '');

-- --------------------------------------------------------

--
-- Table structure for table `parking_tbl`
--

CREATE TABLE IF NOT EXISTS `parking_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parking` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `parking_tbl`
--

INSERT INTO `parking_tbl` (`id`, `parking`) VALUES
(1, 'Parking included'),
(2, 'Parking available'),
(3, 'No Parking'),
(4, 'Garage parking'),
(5, 'Carport parking'),
(6, 'Street parking'),
(7, 'Driveway parking'),
(8, 'Subterranean parking'),
(9, 'Gated parking'),
(10, 'Permit parking'),
(11, 'Covered parking'),
(12, 'Valet parking'),
(13, 'Tandem Parking'),
(14, 'Stand Alone Garage'),
(15, 'Private Garage');

-- --------------------------------------------------------

--
-- Table structure for table `plan_tbl`
--

CREATE TABLE IF NOT EXISTS `plan_tbl` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) NOT NULL,
  `plan_id` varchar(255) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `plan_amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `payment_date` datetime NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `plan_status` varchar(255) NOT NULL,
  `extra1` varchar(255) NOT NULL,
  `extra2` varchar(255) NOT NULL,
  `extra3` varchar(255) NOT NULL,
  `extra4` varchar(255) NOT NULL,
  `extra5` varchar(255) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `plan_tbl`
--

INSERT INTO `plan_tbl` (`pid`, `member_id`, `plan_id`, `member_name`, `plan_name`, `plan_amount`, `status`, `start_date`, `end_date`, `payment_date`, `order_id`, `plan_status`, `extra1`, `extra2`, `extra3`, `extra4`, `extra5`) VALUES
(1, '3', 's1', 'Ankit', 'Single Membership for 1 month', '99', 'Paid', '2016-07-01', '2016-10-31', '2016-07-01 11:30:40', 'PLH-01', 'Enable', '', '', '', '', ''),
(3, '11', 's1', 'Ankit', 'Single Membership for 1 month', '99', 'Paid', '2016-07-04', '2016-08-04', '2016-07-04 04:14:10', 'PLH-06', 'Enable', '', '', '', '', ''),
(4, '12', 's2', 'Akshay', 'Single Membership for 2 month', '158', 'Paid', '2016-07-04', '2016-09-04', '2016-07-04 04:22:04', 'PLH-07', 'Enable', '', '', '', '', ''),
(5, '13', 's1', 'Ankit', 'Single Membership for 1 month', '99', 'Paid', '2016-07-04', '2016-08-04', '2016-07-04 04:33:31', 'PLH-08', 'Enable', '', '', '', '', ''),
(6, '', '', '', '', '', 'Paid', '2016-07-04', '0000-00-00', '2016-07-04 05:27:24', '', 'Disable', '', '', '', '', ''),
(7, '', '', '', '', '', 'Paid', '2016-07-04', '0000-00-00', '2016-07-04 05:28:25', '', 'Disable', '', '', '', '', ''),
(8, '14', 's2', 'yugandhar', 'Single Membership for 2 month', '158', 'Unpaid', '0000-00-00', '0000-00-00', '2016-09-05 07:14:54', 'PLH-09', '', '', '', '', '', ''),
(9, '15', 's2', 'yugandhar', 'Single Membership for 2 month', '158', 'Unpaid', '0000-00-00', '0000-00-00', '2016-09-05 07:20:28', 'PLH-10', '', '', '', '', '', ''),
(10, '16', 's2', 'yugandhart', 'Single Membership for 2 month', '158', 'Unpaid', '0000-00-00', '0000-00-00', '2016-09-05 07:24:08', 'PLH-11', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_a` varchar(255) NOT NULL,
  `contact_b` varchar(255) NOT NULL,
  `contact_c` varchar(255) NOT NULL,
  `contact_d` varchar(255) NOT NULL,
  `alt_contact_a` varchar(255) NOT NULL,
  `alt_contact_b` varchar(255) NOT NULL,
  `alt_contact_c` varchar(255) NOT NULL,
  `alt_contact_d` varchar(255) NOT NULL,
  `contact_fax_a` varchar(255) NOT NULL,
  `contact_fax_b` varchar(255) NOT NULL,
  `contact_fax_c` varchar(255) NOT NULL,
  `bre_number` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `availability` date NOT NULL,
  `short_descp` varchar(255) NOT NULL,
  `rent` varchar(255) NOT NULL,
  `listing_type` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `bedroom` varchar(255) NOT NULL,
  `bathroom` varchar(255) NOT NULL,
  `furnished` varchar(255) NOT NULL,
  `lease_type` varchar(255) NOT NULL,
  `pet` varchar(255) NOT NULL,
  `structure_type` varchar(255) NOT NULL,
  `unit_detail` varchar(255) NOT NULL,
  `unit_type` varchar(255) NOT NULL,
  `unit_no` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `square_footage` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `listing_number` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `member_id` varchar(255) NOT NULL,
  `property_lat` varchar(255) NOT NULL,
  `property_lng` varchar(255) NOT NULL,
  `property_zoom` varchar(255) NOT NULL,
  `mon_time_frm` varchar(255) NOT NULL,
  `mon_time_to` varchar(255) NOT NULL,
  `tue_time_frm` varchar(255) NOT NULL,
  `tue_time_to` varchar(255) NOT NULL,
  `wed_time_frm` varchar(255) NOT NULL,
  `wed_time_to` varchar(255) NOT NULL,
  `thu_time_frm` varchar(255) NOT NULL,
  `thu_time_to` varchar(255) NOT NULL,
  `fri_time_frm` varchar(255) NOT NULL,
  `fri_time_to` varchar(255) NOT NULL,
  `sat_time_frm` varchar(255) NOT NULL,
  `sat_time_to` varchar(255) NOT NULL,
  `sun_time_frm` varchar(255) NOT NULL,
  `sun_time_to` varchar(255) NOT NULL,
  `walkscore` varchar(255) NOT NULL,
  `soundscore` varchar(255) NOT NULL,
  `vehicle_noise` varchar(255) NOT NULL,
  `airport_noise` varchar(255) NOT NULL,
  `business_noise` varchar(255) NOT NULL,
  `featured_listing` varchar(255) NOT NULL,
  `f_credit_card_no` varchar(255) NOT NULL,
  `f_credit_exp_mo` varchar(255) NOT NULL,
  `f_credit_exp_yr` varchar(255) NOT NULL,
  `f_credit_card_cvv` varchar(255) NOT NULL,
  `walkscore_descrp` text NOT NULL,
  `soundscore_descrp` text NOT NULL,
  `refrigerator` varchar(255) NOT NULL,
  `air_conditioner` varchar(255) NOT NULL,
  `yard` varchar(255) NOT NULL,
  `stove` varchar(255) NOT NULL,
  `wallheater` varchar(255) NOT NULL,
  `elevator` varchar(255) NOT NULL,
  `dishwasher` varchar(255) NOT NULL,
  `laundry` varchar(255) NOT NULL,
  `pool` varchar(255) NOT NULL,
  `microwave` varchar(255) NOT NULL,
  `wd` varchar(255) NOT NULL,
  `spa` varchar(255) NOT NULL,
  `central_air` varchar(255) NOT NULL,
  `wd_hookups` varchar(255) NOT NULL,
  `accessiblee` varchar(255) NOT NULL,
  `central_heat` varchar(255) NOT NULL,
  `balcony` varchar(255) NOT NULL,
  `controlled_access` varchar(255) NOT NULL,
  `fireplace` varchar(255) NOT NULL,
  `patio` varchar(255) NOT NULL,
  `quiet_nhood` varchar(255) NOT NULL,
  `full_descp` text NOT NULL,
  `utilities` varchar(255) NOT NULL,
  `utils_partial` varchar(255) NOT NULL,
  `water` varchar(255) NOT NULL,
  `hot_water` varchar(255) NOT NULL,
  `trash` varchar(255) NOT NULL,
  `gas` varchar(255) NOT NULL,
  `electricity` varchar(255) NOT NULL,
  `maid_service` varchar(255) NOT NULL,
  `gardener` varchar(255) NOT NULL,
  `pool_service` varchar(255) NOT NULL,
  `association_fees` varchar(255) NOT NULL,
  `cable` varchar(255) NOT NULL,
  `wifi` varchar(255) NOT NULL,
  `driver_instruction` text NOT NULL,
  `la_weekly` varchar(255) NOT NULL,
  `downtown_news` varchar(255) NOT NULL,
  `zumper` varchar(255) NOT NULL,
  `vast` varchar(255) NOT NULL,
  `daily_press` varchar(255) NOT NULL,
  `oodle` varchar(255) NOT NULL,
  `live_lovely` varchar(255) NOT NULL,
  `google_base` varchar(255) NOT NULL,
  `canyon_news` varchar(255) NOT NULL,
  `reader` varchar(255) NOT NULL,
  `walkscore2` varchar(255) NOT NULL,
  `renthop` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `parking_space` varchar(255) NOT NULL,
  `school_district` varchar(255) NOT NULL,
  `open_house` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_date_confirm` varchar(255) NOT NULL,
  `for_rent_check1` varchar(255) NOT NULL,
  `for_rent_check2` varchar(255) NOT NULL,
  `driver_instr` text NOT NULL,
  `property_available` varchar(255) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `name`, `email`, `contact_a`, `contact_b`, `contact_c`, `contact_d`, `alt_contact_a`, `alt_contact_b`, `alt_contact_c`, `alt_contact_d`, `contact_fax_a`, `contact_fax_b`, `contact_fax_c`, `bre_number`, `address`, `state`, `city`, `availability`, `short_descp`, `rent`, `listing_type`, `deposit`, `bedroom`, `bathroom`, `furnished`, `lease_type`, `pet`, `structure_type`, `unit_detail`, `unit_type`, `unit_no`, `parking`, `square_footage`, `main_image`, `image1`, `image2`, `image3`, `image4`, `image5`, `listing_number`, `date`, `member_id`, `property_lat`, `property_lng`, `property_zoom`, `mon_time_frm`, `mon_time_to`, `tue_time_frm`, `tue_time_to`, `wed_time_frm`, `wed_time_to`, `thu_time_frm`, `thu_time_to`, `fri_time_frm`, `fri_time_to`, `sat_time_frm`, `sat_time_to`, `sun_time_frm`, `sun_time_to`, `walkscore`, `soundscore`, `vehicle_noise`, `airport_noise`, `business_noise`, `featured_listing`, `f_credit_card_no`, `f_credit_exp_mo`, `f_credit_exp_yr`, `f_credit_card_cvv`, `walkscore_descrp`, `soundscore_descrp`, `refrigerator`, `air_conditioner`, `yard`, `stove`, `wallheater`, `elevator`, `dishwasher`, `laundry`, `pool`, `microwave`, `wd`, `spa`, `central_air`, `wd_hookups`, `accessiblee`, `central_heat`, `balcony`, `controlled_access`, `fireplace`, `patio`, `quiet_nhood`, `full_descp`, `utilities`, `utils_partial`, `water`, `hot_water`, `trash`, `gas`, `electricity`, `maid_service`, `gardener`, `pool_service`, `association_fees`, `cable`, `wifi`, `driver_instruction`, `la_weekly`, `downtown_news`, `zumper`, `vast`, `daily_press`, `oodle`, `live_lovely`, `google_base`, `canyon_news`, `reader`, `walkscore2`, `renthop`, `floor`, `parking_space`, `school_district`, `open_house`, `post_date`, `post_date_confirm`, `for_rent_check1`, `for_rent_check2`, `driver_instr`, `property_available`) VALUES
(1, 'Ankit Makwana', 'ankitm.laabhaa@gmail.com', '999', '999', '9999', '12312', '787', '877', '7787', '4544564654', '455', '564', '4465', '213132', 'palasia', 'Israel', 'Tel Aviv', '2016-07-26', 'this is short description', '3500', 'Standard Rental', '45000', '8 bedrooms', '7 1/2 Bath', 'Furnished', 'Six month lease', 'Will consider pet', 'Apartments /Condos', '3', 'Lower Middle', '12', 'Valet parking', '1500', 'm21469444351.jpg', 'a21469444351.jpg', 'b21469444351.jpg', 'c21469444351.jpg', 'd21469444351.jpg', 'e21469444351.jpg', '1', '2016-07-25 04:29:11', '2', '22.726032', '75.87564900000007', '16', '6:00', '21:00', '7:00', '19:00', '8:00', '18:00', '9:00', '20:00', '9:00', '19:00', '9:00', '20:00', '7:00', '21:00', 'Easy', 'Calm', 'Active', 'Calm', 'Busy', '', '', '', '', '', 'Close to all major shops and restaurants', 'Active Street', 'yes', 'yes', '', '', '', 'yes', '', '', '', '', '', '', '', 'yes', 'yes', '', '', '', '', '', '', 'this is long descripion', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', 'yes', 'yes', 'yes', '', '', '', '', '', 'yes', '', 'yes', 'Carpet Floors', '3', 'this is school district', '10am to 5pm', '1970-01-01', 'yes', 'Yes', 'Yes', 'this is driver instruction', 'Available'),
(2, 'David Miller', 'inv8mobile@mail.com', '054', '443', '4343', '', '054', '443', '4343', '', '', '', '', '', '313 Hayarkon, Tel Aviv', 'Israel', 'Tel Aviv', '2016-07-29', 'Gorgeous Unit available immediately!!', '6300', 'Standard Rental', '6300', '4 bedrooms', '2 Baths', 'Unfurnished', 'One year minimum lease', 'Will consider pet', 'Apartments /Condos', '', 'Upper Corner', '12', 'Parking included', '95', 'm91469787760.JPG', 'a91469787760.JPG', 'b91469787760.jpg', 'c91469787760.JPG', 'd91469787760.jpg', 'e91469787760.jpg', '2', '2016-07-29 03:52:40', '9', '32.0960437', '34.77449219999994', '16', '8:00', '15:00', '11:00', '13:00', '18:00', '20:00', '6:00', '9:00', '13:00', '17:00', '10:00', '14:00', '15:00', '19:00', 'Easy', 'Active', 'Calm', 'Calm', 'Busy', '', '', '', '', '', 'Close to all major shops and restaurants', 'Busy Street', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '4 bed, 2 bath, prime location. Close to all major shops and restaurants, spacious, clean, bright. Marble floors, granite counter tops. Short walk to city center.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Marble Tile Floors', '1', '', '', '1970-01-01', 'yes', '', 'Yes', '', 'Available'),
(3, 'David Miller', 'inv8mobile@mail.com', '054', '443', '4939', '', '054', '443', '4939', '', '', '', '', '', '313 Hayarkon, Tel Aviv', 'Israel', 'Tel Aviv', '2016-08-06', 'Amazing Luxury Condo! ', '6300', 'Standard Rental', '6300', '4 bedrooms', '2 Baths', 'Unfurnished', 'One year minimum lease', 'Will consider pet', 'Apartments /Condos', '', 'Upper Corner', '12', 'Parking included', '95', 'm91470470774.jpg', 'a91470470774.jpg', 'b91470470774.jpg', 'c91470470774.jpg', 'd91470470774.jpg', 'e91470470774.jpg', '3', '2016-08-06 01:36:14', '9', '32.0960437', '34.77449219999994', '16', '7:00', '9:00', '9:00', '11:00', '11:00', '13:00', '10:00', '14:00', '13:00', '20:00', '8:00', '17:00', '15:00', '19:00', 'Easy', 'Active', 'Calm', 'Calm', 'Busy', '', '', '', '', '', 'Close to all major shops and restaurants', 'Busy Street', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'Brand new, renovated, spacious, bright, quiet. Available Immediately.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Marble Tile Floors', '1', '', '', '1970-01-01', 'yes', 'Yes', 'Yes', '', 'Available'),
(4, 'David MIller', 'inv8mobile@mail.com', '054', '323', '3232', '', '043', '323', '3232', '', '', '', '', '', '313 Hayarkon St., Tel Aviv', 'Israel', 'Tel Aviv', '2016-08-12', 'Beaitful Condo! Excellent location!!', '5500', 'Standard Rental', '5500', '3 bedrooms', '2 Baths', 'Unfurnished', 'Two year minimum lease', 'Will consider pet', 'Apartments /Condos', '', 'Upper', '10', 'Parking included', '90', 'm91470991282.jpg', 'a91470991282.jpg', 'b91470991282.jpg', 'c91470991282.jpg', 'd91470991282.jpg', 'e91470991282.jpg', '4', '2016-08-12 02:11:22', '9', '32.0960437', '34.77449219999994', '16', '7:00', '11:00', '12:00', '13:00', '12:00', '18:00', '17:00', '22:00', '11:00', '16:00', '19:00', '21:00', '9:00', '16:00', 'Easy', 'Active', 'Busy', 'Busy', 'Active', '', '', '', '', '', 'Near all major shops and restaurants', 'Active Street', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'Amazing unit available immediately! Plenty of space, bright, open and airy, walk in closets, marble floors, viking kitchen. Washer/Dryer in unit,new cabinets and bathrooms. ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Marble Tile Floors', '1', '', '', '1970-01-01', 'yes', '', 'Yes', '', 'Available'),
(5, 'David Miller', 'inv8mobile@mail.com', '090', '090', '0909', '', '090', '090', '0909', '', '', '', '', '', '313 Hayarkon St., Tel Aviv', 'Israel', 'Tel Aviv', '2016-08-12', 'Beautiful New Condo!!', '5000', 'Standard Rental', '5000', '2 bedrooms', '1 Bath', 'Unfurnished', 'One year minimum lease', 'Will consider pet', 'Apartments /Condos', '', 'Upper Rear', '5', 'Parking available', '65', 'm91470997739.jpg', 'a91470997739.jpg', 'b91470997739.jpg', 'c91470997739.jpg', 'd91470997739.jpg', 'e91470997739.jpg', '5', '2016-08-12 03:58:59', '9', '32.0960437', '34.77449219999994', '16', '8:00', '10:00', '9:00', '11:00', '10:00', '12:00', '11:00', '13:00', '12:00', '14:00', '14:00', '16:00', '15:00', '18:00', 'Hard', 'Active', 'Calm', 'Active', 'Calm', '', '', '', '', '', 'Far from major shops and restaurants', 'Calm Street', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'Available now!! Spacious, Bright, clean and airy! All new renovations, new kitchen, bath, washer/dryer in unit. Open kitchen, ocean view!', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'New Hardwood Floors', '1', '', '', '1970-01-01', 'yes', '', 'Yes', '', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_name`) VALUES
(1, 'Israel');

-- --------------------------------------------------------

--
-- Table structure for table `timing`
--

CREATE TABLE IF NOT EXISTS `timing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `timing`
--

INSERT INTO `timing` (`id`, `time`) VALUES
(1, '6:00'),
(2, '7:00'),
(3, '8:00'),
(4, '9:00'),
(5, '10:00'),
(6, '11:00'),
(7, '12:00'),
(8, '13:00'),
(9, '14:00'),
(10, '15:00'),
(11, '16:00'),
(12, '17:00'),
(13, '18:00'),
(14, '19:00'),
(15, '20:00'),
(16, '21:00'),
(17, '22:00');

-- --------------------------------------------------------

--
-- Table structure for table `unit_tbl`
--

CREATE TABLE IF NOT EXISTS `unit_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `unit_tbl`
--

INSERT INTO `unit_tbl` (`id`, `unit_type`) VALUES
(1, 'Upper Front'),
(2, 'Upper Rear'),
(3, 'Upper Corner'),
(4, 'Upper'),
(5, 'Upper Middle'),
(6, 'Lower Middle'),
(7, 'Lower'),
(8, 'Lower Front'),
(9, 'Lower Rear'),
(10, 'Lower Corner'),
(11, 'Front'),
(12, 'Rear'),
(13, 'Middle'),
(14, 'Freestanding'),
(15, '2 Story'),
(16, '3 Story'),
(17, 'Not Specified');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
