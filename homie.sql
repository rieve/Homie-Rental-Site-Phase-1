-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 04:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homie`
--

-- --------------------------------------------------------

--
-- Table structure for table `bh_code`
--

CREATE TABLE `bh_code` (
  `id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bh_code`
--

INSERT INTO `bh_code` (`id`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Table structure for table `boyshostel_data`
--

CREATE TABLE `boyshostel_data` (
  `bhostel_id` int(11) NOT NULL,
  `owner_name` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `rent` decimal(8,0) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `hostel_name` varchar(100) DEFAULT NULL,
  `room_type` varchar(80) DEFAULT NULL,
  `hostel_type` varchar(50) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `mobile_no` bigint(255) DEFAULT NULL,
  `hostel_code` varchar(100) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `furniture` varchar(255) NOT NULL,
  `foodtime` varchar(255) NOT NULL,
  `foodmenu` varchar(255) NOT NULL,
  `waterfacility` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boyshostel_data`
--

INSERT INTO `boyshostel_data` (`bhostel_id`, `owner_name`, `location`, `rent`, `image`, `hostel_name`, `room_type`, `hostel_type`, `city`, `mobile_no`, `hostel_code`, `landmark`, `image1`, `image2`, `furniture`, `foodtime`, `foodmenu`, `waterfacility`, `user_id`) VALUES
(2, 'Rajani  Vidyadhar', 'Balaju', '15000', 'hostel/hostel2.jpg', 'Swanky Mint Hostel', 'Double', 'Boy', 'Lalitpur', 9857354637, '', '', '', '', '', '', '', '', 0),
(3, 'Mangita  Chitrakar', 'Kumaripati', '18000', 'hostel/hostel1.jpg', 'Caveland Hostel', 'Triple', 'Boy', 'Kathmandu', 98572543415, '', '', '', '', '', '', '', '', 0),
(5, 'Jeevan  Chaudhary', 'Samakhushi', '10000', 'hostel/hostel1.jpg', 'CODE Hostel', 'All', 'Boy', 'Bhakapur', 984756565, '', '', '', '', '', '', '', '', 0),
(6, 'Manoj  Kashyap', 'Kamaladi', '11000', 'hostel/hostel2.jpg', 'Hektor Design Hostel', 'Double', 'Boy', 'Bhaktapur', 9847463547, '', '', '', '', '', '', '', '', 0),
(8, 'Bina Ghimire', 'Surya Binayak', '13000', 'hostel/hostel1.jpg', 'Fauna Luxury Hostel', 'Single', 'Boy', 'Lalitpur', 9847463537, '', '', '', '', '', '', '', '', 0),
(10, 'Rakesh Nakarmi', 'Sallaghari', '18000', 'hostel/ht1.jpg', 'Hakuna Matata Hostel', 'Double', 'Boy', 'Kathmandu', 9857463554, '', '', '', '', '', '', '', '', 0),
(11, 'Nir Shakya', 'Panauti', '12000', 'hostel/hostel2.jpg', 'Nir Hostel', 'Double', 'Boy', 'Kathmandu', 987564773, 'HMBH_1', '', '', '', '', '', '', '', 0),
(15, '   Nir Shakya ', 'panauti', '12334', 'hostel/ht1.jpg', 'nir boys hostel', 'Double', 'Boy', NULL, NULL, 'HMBH_5', 'panauti', '', '', 'Study Table', '2 Meals a day', '', 'Well water', 19);

--
-- Triggers `boyshostel_data`
--
DELIMITER $$
CREATE TRIGGER `getID` BEFORE INSERT ON `boyshostel_data` FOR EACH ROW BEGIN
INSERT INTO bh_code VALUES (NULL);
SET NEW.hostel_code = CONCAT("HMBH_",LPAD(LAST_INSERT_ID(),1,"0"));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `createaccount_data`
--

CREATE TABLE `createaccount_data` (
  `Id` int(255) NOT NULL,
  `Fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `contact` bigint(255) DEFAULT NULL,
  `taddress` varchar(255) DEFAULT NULL,
  `paddress` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `repassword` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createaccount_data`
--

INSERT INTO `createaccount_data` (`Id`, `Fullname`, `email`, `profession`, `dob`, `gender`, `contact`, `taddress`, `paddress`, `password`, `repassword`) VALUES
(19, '   Nir Shakya ', 'neer.shakya16@gmail.com', '   Student', '2022-02-26', 'male', 9823860404, '   Khopasi', 'Khopasi', '$2y$10$8rbF9y/CDil4pFIFoS5erOTMedtOzL3rbRHxU2GAdbR/MpRlqwBNK', '$2y$10$LvYoWfLS/j/hyrSuDmgLnOzHmuzV0U0AUgHMquGVcpmxrwQjZDJfW'),
(16, 'Jatin Bhusal', 'jatin123@gmail.com', 'Student', '2022-01-06', 'male', 9841245637, 'Libali', '1253', '$2y$10$XomIFm8ONeG3s4eZcFCoYur6NKbNxXuydLXzqcerIhr7vqX5kWJv.', '$2y$10$.vVFyBgD7o.cJAkj6vnfb.Be2BJta4yUmBFoEdtEB3jrfodGn6stm'),
(17, 'Nir Shakya', 'nir@yahoo.com', 'Student', '2012-02-09', 'male', 9823415676, 'Khopasi', 'Khopasi', '$2y$10$nrxIKwMJUq6N8SJ.AaAjM.mKjWZCB4KQGWm1ngDWFPmnTwri5r2Km', '$2y$10$z7K4QmTRZx0nqJlI3AlFF.t.i/BpCY6x/2e42cGAIGu8pzFetVZ.W'),
(18, 'Sujan Rijal', 'sujanrijal@gmail.com', 'Student', '2016-03-08', 'male', 9841235643, 'KTM', 'SINDULI', '$2y$10$B5Iarg19IuqeB9TR5fic2.Gcxy9zoA8S5NRZ5d0ETLHKzTnN7QG.C', '$2y$10$hC3HZ1UA97bHbhmCb2EzH.azuLEg68TnbNq5hNJd6lURU15NLmzYa'),
(20, 'Ram Shrestha', 'ramshrestha@gmail.com', 'Student', '2020-07-08', 'male', 9841245637, 'Libali', '1253', '$2y$10$QZEaQm6XiNadaij054zZxeCMNJVR4sl/PvMSaqxS0MmhZ247i0q3a', '$2y$10$Huim5jWLYJM4/R5quoi9R.mGhMNMgLSl6Vt0pPXeQQOYVD/X/mFVe'),
(21, 'Dipendra Boyaju', 'dipendraboyaju222@gmail.com', 'Student', '2019-05-29', 'male', 9841245637, 'Libali', '1253', '$2y$10$IXU8XzfA8LvmqIw44Gu6UOTmKvyniZNLGVJv9A099XbbbhtSV4v0a', '$2y$10$nnTUTYApNCmR74RRUTlbPu1TW6OV4oj2Yw2VGH9pYHM/agoUzfztq'),
(22, 'Nir Shakya', 'lovefootball143sm@gmail.com', 'Student', '2019-06-04', 'male', 9854637123, 'Khopasi', 'Khopasi', '$2y$10$JBscRMlOjN6Cs6HoPOkYgeOLqvwb8aW/ok/0LY5y6VLo8EkD9lds2', '$2y$10$1jNBNt6rphSUe/jhMT25gOt0OlSJjXH09moIy0kVjcGp4siq714N6'),
(23, 'Reetu Sonar', 'reetu@gmail.com', 'Student', '2020-01-29', 'male', 9841245637, 'Libali', '1253', '$2y$10$LEl8c5JN4jviEtXYWKXPjeu9LB5Wv3mxCcod/6igBuJYOC7mlNLaq', '$2y$10$/touO7wO3cCBGrjSLqHOAOcynuXwlfWCiCdwRnuUmsvao42s5ZlN.'),
(24, 'Harsha Pant', 'harshapant@gmail.com', 'Student', '2018-02-06', 'male', 9841245637, 'Libali', '1253', '$2y$10$63gz3B03YWe2q8uQHTxDL.McnDZmMA.KxKbLaHQohoSPsqFghKHb6', '$2y$10$Sa9qdoVrJjDDbsY8fvK65uszZRjO6YLRocxtE4LQkvC2/DRknAnsW'),
(25, 'Sonia Dhaubhadel', 'soniadhaubhadel5@gmail.com', 'Student', '2012-02-07', 'female', 9861243567, 'Bhaktapur', 'Bhaktapur', '$2y$10$FOBtyNUyq/tbCZ0RFp7vfuaLS9lfbi..3ke50oJvHs3.YLLk3kf8u', '$2y$10$9/SVQV8VF3rL49bu0Ymqdup16XKOEDr19cc3kLdxjENjEh7bZrdU.'),
(26, 'Sujan Bhandari', 'sujanbhandari@gmail.com', 'Student', '2022-02-03', 'male', 9861866340, 'Libali', 'Khopasi', '$2y$10$uPvnlGRYQesWgU/Ij67ED.1eK3uhJpPyR64be9GJQcWjpyUGbaU/O', '$2y$10$dGiNX2SaKD5EhJnp1UkU.eWUKJW56Ff1ytnLjJsZLg03H5hgfOpDa'),
(27, 'Puskar ADHIKARI', 'puskar.adikhari@gmail.com', 'Student', '2022-02-02', 'male', 9861866340, 'Libali', 'Khopasi', '$2y$10$9rUJBczvrAp3v8JW2737QOtows9YybmXYcde16MsAuIomm7vqgj86', '$2y$10$YficgMDHAFle029YriDklecequ.agtH.B8O3/xU//YiEjVcZtyo6m'),
(29, ' Nir r Shakya', 'neer.shakya16@gmail.com', ' Student', '', NULL, 9823860404, ' Khopasi', NULL, NULL, NULL),
(30, 'dipen boyaju', 'admin@samlpe.com', 'student', '2022-03-07', 'male', 9779860704533, 'Bharwacho, nepal', 'Bhaktapur', '$2y$10$fkJGbKU3wkV8CCUPnbKPJObYAcZD1fRso9Nb5r2PiMYlnf9UWyk.G', '$2y$10$NEHQvX7wjV2gJq7bPJFTbudeH/LeDOCfaXzaUUqlOZWSvNOnHMD7e'),
(31, 'dipen boyaju', 'ratish167@gmail.com', 'student', '2022-03-23', 'female', 9779860704595, 'Bharwacho, nepal', 'Bhaktapur', '$2y$10$4WqhuRVTwduatD9A7ZO4UOHlqVzPGZT2aShOLmpwHKI6lQsPNEio6', '$2y$10$/14B3Zz236W/JrGzraIGj.55d6BJO0JNxwHbqmwNOBYllHxnTE3eC');

-- --------------------------------------------------------

--
-- Table structure for table `flat_data`
--

CREATE TABLE `flat_data` (
  `flat_id` int(11) NOT NULL,
  `owner_name` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `floor` varchar(50) DEFAULT NULL,
  `room` int(50) DEFAULT NULL,
  `rent` decimal(8,0) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `waterfacility` varchar(255) DEFAULT NULL,
  `pet` varchar(50) DEFAULT NULL,
  `parking` varchar(50) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `mobile_no` bigint(255) DEFAULT NULL,
  `flat_code` varchar(300) DEFAULT NULL,
  `user_id` int(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flat_data`
--

INSERT INTO `flat_data` (`flat_id`, `owner_name`, `location`, `landmark`, `floor`, `room`, `rent`, `image`, `image1`, `image2`, `waterfacility`, `pet`, `parking`, `purpose`, `city`, `mobile_no`, `flat_code`, `user_id`, `status`) VALUES
(1, 'Reetu  Sonar', 'Anamnagar', '', 'Third', 4, '20000', 'flat/ft.jpg', '', '', '', 'Cat Allowed', 'Bike Parking', 'All', '', 9861546367, 'ffd', 0, 0),
(2, 'Rajani  Vidyadhar', 'Balaju', '', 'Second', 3, '15000', 'flat/flat1.jpg', '', '', '', 'Dog Allowed', 'Car Parking', 'Personal Stay', '', 9861231465, '', 0, 0),
(3, 'Mangita  Chitrakar', 'Kumaripati', '', 'Fifth', 3, '18000', 'flat/flat2.jpg', '', '', '', 'Dog,Cat Allowed', 'BIke, Car Parking', 'Office Use', '', 9851098745, '', 0, 0),
(4, 'Harsha  Pant', 'Kausaltar', '', 'Third', 4, '25000', 'flat/ft.jpg', '', '', '', 'Not Allowed', 'No Parking', 'Office Use', '', 9823546278, '', 0, 0),
(5, 'Jeevan  Chaudhary', 'Samakhushi', '', 'First', 2, '10000', 'flat/flat1.jpg', '', '', '', 'Dog Allowed', 'Bike Parking', 'Personal Stay', '', 9841765832, '', 0, 0),
(6, 'Manoj  Kashyap', 'Kamaladi', '', 'Ground', 3, '11000', 'flat/flat2.jpg', '', '', '', 'Cat Allowed', 'Bike Parking', 'All', '', 9866237634, '', 0, 0),
(7, 'Dilip  Gadal', 'Nayabazar', '', 'Underground', 2, '8000', 'flat/ft.jpg', '', '', '', 'Dog Allowed', 'Car parking', 'Office Use', '', 9861236587, '', 0, 0),
(8, 'Bina Ghimire', 'Surya Binayak', '', 'Second', 3, '13000', 'flat/flat2.jpg', '', '', '', 'Not Allowed', 'No Parking', 'Personal Stay', '', 9861975367, '', 0, 0),
(9, 'Yogesh Silwal', 'Chiragtar', '', 'Fourth', 2, '10000', 'flat/ft.jpg', '', '', '', 'Dog,Cat Allowed', 'BIke, Car Parking', 'Office Use', '', 9841908456, '', 0, 0),
(10, 'Rakesh Nakarmi', 'Sallaghari', '', 'Second', 3, '18000', 'flat/flat1.jpg', '', '', '', 'Dog Allowed', 'Bike Parking', 'Office Use', '', 9823175378, '', 0, 0),
(13, '   Nir Shakya ', 'dang', NULL, 'Four Floor', 23, '2341234', 'flat/ft.jpg', 'flat/flat1.jpg', 'flat/flat2.jpg', 'Well water', 'Not Allowed', 'Four Wheelers', 'Personal Stay', NULL, NULL, 'HMFT_3', 19, 0),
(14, '   Nir Shakya ', 'kamalbinayak', NULL, 'First Floor', 44, '12222', 'flat/flat1.jpg', 'flat/flat2.jpg', 'flat/ft.jpg', 'Tanker Water', 'Allowed', 'Two Wheelers', 'Personal Stay', NULL, NULL, 'HMFT_4', 19, 0);

--
-- Triggers `flat_data`
--
DELIMITER $$
CREATE TRIGGER `getFID` BEFORE INSERT ON `flat_data` FOR EACH ROW BEGIN
INSERT INTO ft_code VALUES (NULL);
SET NEW.flat_code = CONCAT("HMFT_",LPAD(LAST_INSERT_ID(),1,"0"));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `fl_code`
--

CREATE TABLE `fl_code` (
  `id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fl_code`
--

INSERT INTO `fl_code` (`id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `ft_code`
--

CREATE TABLE `ft_code` (
  `Id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ft_code`
--

INSERT INTO `ft_code` (`Id`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Table structure for table `gh_code`
--

CREATE TABLE `gh_code` (
  `id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gh_code`
--

INSERT INTO `gh_code` (`id`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Table structure for table `girlshostel_data`
--

CREATE TABLE `girlshostel_data` (
  `ghostel_id` int(11) NOT NULL,
  `owner_name` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `landmark` varchar(255) NOT NULL,
  `rent` decimal(8,0) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `waterfacility` varchar(255) NOT NULL,
  `hostel_name` varchar(100) NOT NULL,
  `room_type` varchar(80) DEFAULT NULL,
  `hostel_type` varchar(50) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `mobile_no` bigint(255) DEFAULT NULL,
  `foodtime` varchar(255) NOT NULL,
  `foodmenu` varchar(255) NOT NULL,
  `furniture` varchar(255) NOT NULL,
  `hostel_code` varchar(300) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `girlshostel_data`
--

INSERT INTO `girlshostel_data` (`ghostel_id`, `owner_name`, `location`, `landmark`, `rent`, `image`, `image1`, `image2`, `waterfacility`, `hostel_name`, `room_type`, `hostel_type`, `city`, `mobile_no`, `foodtime`, `foodmenu`, `furniture`, `hostel_code`, `user_id`) VALUES
(1, 'Reetu  Sonar', 'Anamnagar', '', '20000', 'hostel/ht1.jpg', '', '', '', 'The Yard Hostel', 'Single', 'Girl', 'Kathmandu', 987057483, '', '', '', '', 0),
(4, 'Harsha  Pant', 'Kausaltar', '', '25000', 'hostel/ht1.jpg', '', '', '', 'Valencia Lounge Hostel', 'Single and Double', 'Girl', 'Lalitpur', 9866256, '', '', '', '', 0),
(7, 'Dilip  Gadal', 'Nayabazar', '', '8000', 'hostel/ht1.jpg', '', '', '', 'Amayour Surf Hostel', 'Triple', 'Girl', 'Bhaktapur', 98574637, '', '', '', '', 0),
(9, 'Yogesh Silwal', 'Chiragtar', '', '10000', 'hostel/hostel2.jpg', '', '', '', 'Palmers Lodge Hostels', 'Double', 'Girl', 'Kathmandu', 986756473, '', '', '', '', 0),
(10, 'Dipika Boyaju', 'Bkt', '', '4000', 'hostel/hostel1.jpg', '', '', '', 'ABC Hostels', 'double', 'girl', 'bkt', 985431267, '', '', '', 'HMGH_1', 0);

--
-- Triggers `girlshostel_data`
--
DELIMITER $$
CREATE TRIGGER `getGID` BEFORE INSERT ON `girlshostel_data` FOR EACH ROW BEGIN
INSERT INTO gh_code VALUES (NULL);
SET NEW.hostel_code = CONCAT("HMGH_",LPAD(LAST_INSERT_ID(),1,"0"));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `house_data`
--

CREATE TABLE `house_data` (
  `house_id` int(11) NOT NULL,
  `owner_name` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `floor` varchar(50) DEFAULT NULL,
  `room` int(50) DEFAULT NULL,
  `rent` decimal(8,0) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `waterfacility` varchar(255) DEFAULT NULL,
  `pet` varchar(50) DEFAULT NULL,
  `parking` varchar(50) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `mobile_no` bigint(255) DEFAULT NULL,
  `house_code` varchar(300) DEFAULT NULL,
  `user_id` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_data`
--

INSERT INTO `house_data` (`house_id`, `owner_name`, `location`, `landmark`, `floor`, `room`, `rent`, `image`, `image1`, `image2`, `waterfacility`, `pet`, `parking`, `purpose`, `city`, `mobile_no`, `house_code`, `user_id`, `status`) VALUES
(1, 'Reetu  Sonar', 'Anamnagar', 'Anamnagar', 'Third', 4, '200000', 'house/house1.jpg', 'house/shifting.jpg', '', '', 'Cat Allowed', 'Bike Parking', 'Personal Stay', '', 0, 'jjuf', 0, 1),
(2, 'Rajani  Vidyadhar', 'Balaju', '', 'Second', 3, '150000', 'house/house2.jpg', '', '', '', 'Dog Allowed', 'Car Parking', 'Office Use', '', 0, '', 0, 0),
(3, 'Mangita  Chitrakar', 'Kumaripati', '', 'Fifth', 3, '180000', 'house/house3.jpg', '', '', '', 'Dog,Cat Allowed', 'BIke, Car Parking', 'All', '', 0, '', 0, 0),
(4, 'Harsha  Pant', 'Kausaltar', '', 'Third', 4, '250000', 'house/house1.jpg', '', '', '', 'Not Allowed', 'No Parking', 'Office Use', '', 0, '', 0, 0),
(6, 'Manoj  Kashyap', 'Kamaladi', '', 'Ground', 3, '110000', 'house/house3.jpg', '', '', '', 'Cat Allowed', 'Bike Parking', 'Office Use', '', 0, '', 0, 0),
(7, 'Dilip  Gadal', 'Nayabazar', '', 'Underground', 2, '800000', 'house/house1.jpg', '', '', '', 'Dog Allowed', 'Car parking', 'Office Use', '', 0, '', 0, 0),
(8, 'Bina Ghimire', 'Surya Binayak', '', 'Second', 3, '130000', 'house/house2.jpg', '', '', '', 'Not Allowed', 'No Parking', 'Personal Stay', '', 0, '', 0, 0),
(9, 'Yogesh Silwal', 'Chiragtar', '', 'Fourth', 2, '600000', 'house/house3.jpg', '', '', '', 'Dog,Cat Allowed', 'BIke, Car Parking', 'All', '', 0, '', 0, 0),
(10, 'Rakesh Nakarmi', 'Sallaghari', '', 'Second', 3, '180000', 'house/house1.jpg', '', '', '', 'Dog Allowed', 'Bike Parking', 'Personal Stay', '', 0, '', 0, 0),
(11, 'Nir Shakya', 'Panauti', 'Indreswor', '5', 5, '6000', 'house/house1.jpg', '', '', 'Tap Water', 'Allowed', 'Available', 'Office', 'Panauti', 9841235423, 'HMHS_1', 0, 0),
(12, 'Jatin Bhusal', 'Bhaktapur', 'KhEC', '5', 5, '12000', 'house/house3.jpg', '', '', 'Well Water', 'Dog Allowed', 'Available', 'Office', 'Bhaktapur', 987564773, 'HMHS_2', 0, 0),
(13, 'Sonia Dhaubhadel', 'Bhaktapur', 'Nyatapol', '6', 7, '15000', 'house/house2.jpg', '', '', 'Well Water', 'Dog Allowed', 'Available', 'Office', 'Bhaktapur', 987564773, 'HMHS_3', 0, 0),
(18, '   Nir Shakya ', 'panauti', 'panauti', '4', 12, '18276', 'house/house3.jpg', '', '', 'Tanker Water', 'Allowed', 'Two Wheelers', 'Personal Stay', NULL, NULL, 'HMHS_1', 19, 0),
(21, '   Nir Shakya ', 'baneshwor', 'baneshwor', '5', 12, '20444', 'house/house1.jpg', '', '', 'Tanker Water', 'Allowed', 'Two Wheelers', 'Office Use', NULL, NULL, 'HMHS_1', 19, 0),
(22, '   Nir Shakya ', 'palpa', '', '5', 3, '222', 'house/house5.jfif', 'house/', 'house/', 'Tanker Water', 'Not Allowed', 'Two Wheelers', 'Personal Stay', NULL, NULL, 'HMHS_2', 19, 0),
(23, '   Nir Shakya ', 'libali', '', '3', 12, '12333', 'house/house6.jfif', 'house/', 'house/', 'Tap Water', 'Allowed', 'Two Wheelers', 'Personal Stay', NULL, NULL, 'HMHS_2', 19, 0),
(25, '   Nir Shakya ', 'Bhaktapur', '', '5', 12, '120000', 'house/banner2.jpg', 'house/banner2.jpg', 'house/', 'Tanker Water', 'Allowed', 'Four Wheelers', 'Personal Stay', NULL, NULL, 'HMHS_2', 19, 0);

--
-- Triggers `house_data`
--
DELIMITER $$
CREATE TRIGGER `getHID` BEFORE INSERT ON `house_data` FOR EACH ROW BEGIN
INSERT INTO hs_code VALUES (NULL);
SET NEW.house_code = CONCAT("HMHS_",LPAD(LAST_INSERT_ID(),1,"0"));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `hs_code`
--

CREATE TABLE `hs_code` (
  `id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hs_code`
--

INSERT INTO `hs_code` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23);

-- --------------------------------------------------------

--
-- Table structure for table `rm_code`
--

CREATE TABLE `rm_code` (
  `id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rm_code`
--

INSERT INTO `rm_code` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18);

-- --------------------------------------------------------

--
-- Table structure for table `room_data`
--

CREATE TABLE `room_data` (
  `room_id` int(11) NOT NULL,
  `owner_name` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `floor` varchar(50) DEFAULT NULL,
  `room` int(50) DEFAULT NULL,
  `rent` int(255) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `pet` varchar(50) DEFAULT NULL,
  `parking` varchar(50) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `waterfacility` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `mobile_no` bigint(255) DEFAULT NULL,
  `room_code` varchar(300) DEFAULT NULL,
  `user_id` int(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_data`
--

INSERT INTO `room_data` (`room_id`, `owner_name`, `location`, `landmark`, `floor`, `room`, `rent`, `image`, `image1`, `image2`, `pet`, `parking`, `purpose`, `waterfacility`, `city`, `mobile_no`, `room_code`, `user_id`, `display`, `status`) VALUES
(1, 'Reetu  Sonar', 'Anamnagar', '', 'Third', 4, 20000, 'room/room1.jpg', 'room/room1.jpg', 'room/room1.jpg', 'Cat Allowed', 'Bike Parking', 'Personal Stay', '', '', 0, '', 0, 'Occupied', 1),
(2, 'Rajani  Vidyadhar', 'Balaju', '', 'Second', 3, 15000, 'room/room2.jpg', 'room/room1.jpg', 'room/room1.jpg', 'Dog Allowed', 'Car Parking', 'All', '', '', 0, '', 0, 'Vacant', 0),
(3, 'Mangita  Chitrakar', 'Kumaripati', '', 'Fifth', 3, 18000, 'room/room3.jpg', 'room/room1.jpg', 'room/room1.jpg', 'Dog,Cat Allowed', 'BIke, Car Parking', 'Office Use', '', '', 0, '', 0, 'Vacant', 0),
(4, 'Harsha  Pant', 'Kausaltar', '', 'Third', 4, 25000, 'room/banner1.jpg', 'room/room1.jpg', 'room/room1.jpg', 'Not Allowed', 'No Parking', 'All', '', '', 0, '', 0, 'Vacant', 0),
(5, 'Jeevan  Chaudhary', 'Samakhushi', '', 'First', 2, 10000, 'room/room1.jpg', 'room/room1.jpg', 'room/room1.jpg', 'Dog Allowed', 'Bike Parking', 'Personal Stay', '', '', 0, '', 0, '0', 0),
(6, 'Manoj  Kashyap', 'Kamaladi', '', 'Ground', 3, 11000, 'room/room2.jpg', 'room/room1.jpg', 'room/room1.jpg', 'Cat Allowed', 'Bike Parking', 'Office Use', '', '', 0, '', 0, '0', 0),
(7, 'Dilip  Gadal', 'Nayabazar', '', 'Underground', 2, 8000, 'room/room3.jpg', 'room/room1.jpg', 'room/room1.jpg', 'Dog Allowed', 'Car parking', 'Office Use', '', '', 0, '', 0, '0', 0),
(8, 'Bina Ghimire', 'Surya Binayak', '', 'Second', 3, 13000, 'room/banner2.jpg', 'room/room1.jpg', 'room/room1.jpg', 'Not Allowed', 'No Parking', 'Personal Stay', '', '', 0, '', 0, '0', 0),
(9, 'Yogesh Silwal', 'Chiragtar', '', 'Fourth', 2, 10000, 'room/room1.jpg', 'room/room1.jpg', 'room/room1.jpg', 'Dog,Cat Allowed', 'BIke, Car Parking', 'Office Use', '', '', 0, '', 0, '0', 0),
(10, 'Rakesh Nakarmi', 'Sallaghari', '', 'Second', 3, 18000, 'room/banner3.jpg', 'room/room1.jpg', 'room/room1.jpg', 'Dog Allowed', 'Bike Parking', 'All', '', '', 0, '', 0, '0', 0),
(11, '', 'KTM', 'CCRC', 'Third Floor', 6, 6000, 'room/room1.jpg', 'room/room2.jpg', 'room/room3.jpg', 'Allowed', 'Four Wheelers', 'Office Use', 'Tanker Water', '', 0, 'HMRM_1', 0, '0', 0),
(19, NULL, 'Lumbini', 'Lumbini', 'Third Floor', NULL, 56666, 'room/banner2.jpg', 'room/shift-icon.png', 'room/wl1.jpg', 'Allowed', 'Four Wheelers', 'Office Use', 'Tap Water', NULL, NULL, 'HMRM_1', 0, '0', 0),
(21, NULL, 'Bhaktapur', 'fgf', '6', 4, 5454, 'room/room1.jpg', 'house/Sell_a_home.png', 'room/whatsapp.png', 'Allowed', 'Four Wheelers', 'Office Use', 'Well water', NULL, NULL, 'HMRM_1', 19, 'Occupied', 0),
(22, NULL, 'Pokhara', NULL, NULL, NULL, NULL, 'room/room2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HMRM_1', 0, 'Occupied', 0),
(23, NULL, 'Koteshwor', NULL, NULL, NULL, NULL, 'room/banner3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HMRM_1', 0, 'Vacant', 0);

--
-- Triggers `room_data`
--
DELIMITER $$
CREATE TRIGGER `getRID` BEFORE INSERT ON `room_data` FOR EACH ROW BEGIN
INSERT INTO rm_code VALUES (NULL);
SET NEW.room_code = CONCAT("HMRM_",LPAD(LAST_INSERT_ID(),1,"0"));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `flat_id` varchar(255) NOT NULL,
  `bhostel_id` int(255) NOT NULL,
  `ghostel_id` int(255) NOT NULL,
  `room_id` int(255) NOT NULL,
  `house_id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wish_id`, `user_id`, `flat_id`, `bhostel_id`, `ghostel_id`, `room_id`, `house_id`) VALUES
(49, 19, '', 0, 0, 0, 8),
(3, 19, '', 0, 0, 0, 0),
(50, 19, '', 0, 0, 0, 7),
(59, 19, '', 11, 0, 0, 0),
(58, 19, '', 0, 0, 9, 0),
(53, 19, '', 0, 0, 0, 9),
(56, 19, '', 0, 0, 14, 0),
(61, 31, '', 0, 0, 0, 24),
(62, 19, '', 0, 0, 0, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bh_code`
--
ALTER TABLE `bh_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boyshostel_data`
--
ALTER TABLE `boyshostel_data`
  ADD PRIMARY KEY (`bhostel_id`);

--
-- Indexes for table `createaccount_data`
--
ALTER TABLE `createaccount_data`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `flat_data`
--
ALTER TABLE `flat_data`
  ADD PRIMARY KEY (`flat_id`);

--
-- Indexes for table `fl_code`
--
ALTER TABLE `fl_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ft_code`
--
ALTER TABLE `ft_code`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gh_code`
--
ALTER TABLE `gh_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `girlshostel_data`
--
ALTER TABLE `girlshostel_data`
  ADD PRIMARY KEY (`ghostel_id`);

--
-- Indexes for table `house_data`
--
ALTER TABLE `house_data`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `hs_code`
--
ALTER TABLE `hs_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rm_code`
--
ALTER TABLE `rm_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_data`
--
ALTER TABLE `room_data`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bh_code`
--
ALTER TABLE `bh_code`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `boyshostel_data`
--
ALTER TABLE `boyshostel_data`
  MODIFY `bhostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `createaccount_data`
--
ALTER TABLE `createaccount_data`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `flat_data`
--
ALTER TABLE `flat_data`
  MODIFY `flat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fl_code`
--
ALTER TABLE `fl_code`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ft_code`
--
ALTER TABLE `ft_code`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gh_code`
--
ALTER TABLE `gh_code`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `girlshostel_data`
--
ALTER TABLE `girlshostel_data`
  MODIFY `ghostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `house_data`
--
ALTER TABLE `house_data`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hs_code`
--
ALTER TABLE `hs_code`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rm_code`
--
ALTER TABLE `rm_code`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `room_data`
--
ALTER TABLE `room_data`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
