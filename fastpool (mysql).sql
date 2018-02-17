-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2017 at 01:38 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastpool`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `DriverOfTheWeek`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `DriverOfTheWeek` ()  BEGIN
select u.name ,max(rides_completed) as rides_completed from driver d, user_info u where  d.User_id = u.User_id;
END$$

DROP PROCEDURE IF EXISTS `TOPDRIVERS`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `TOPDRIVERS` (OUT `name` VARCHAR(20), OUT `rate1` INT(10), OUT `model1` VARCHAR(20), OUT `car_no` VARCHAR(20))  BEGIN
select u.name ,Rate ,model ,carno from driver d, user_info u, rating r where r.Driver_id=d.Driver_id and d.User_id = u.User_id ORDER BY Rate desc limit 3 ;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `coordinates`
--

DROP TABLE IF EXISTS `coordinates`;
CREATE TABLE IF NOT EXISTS `coordinates` (
  `longitude` varchar(100) NOT NULL,
  `Driver_id` int(10) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  PRIMARY KEY (`Driver_id`),
  KEY `coordinates_FKIndex1` (`Driver_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `create_trip`
--

DROP TABLE IF EXISTS `create_trip`;
CREATE TABLE IF NOT EXISTS `create_trip` (
  `Trip_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Driver_id` int(10) NOT NULL,
  `Tariff` int(10) UNSIGNED NOT NULL,
  `Seats` int(10) UNSIGNED NOT NULL,
  `start_loc` varchar(100) NOT NULL,
  `end_loc` varchar(100) NOT NULL,
  `offer` int(11) NOT NULL,
  PRIMARY KEY (`Trip_id`),
  KEY `Create_trip_FKIndex1` (`Driver_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_trip`
--

INSERT INTO `create_trip` (`Trip_id`, `Driver_id`, `Tariff`, `Seats`, `start_loc`, `end_loc`, `offer`) VALUES
(1, 3, 45, 3, 'abcd ', 'wewewe ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `Driver_id` int(10) NOT NULL AUTO_INCREMENT,
  `User_id` int(10) UNSIGNED NOT NULL,
  `model` varchar(20) NOT NULL,
  `carno` varchar(20) NOT NULL,
  `licenseno` varchar(20) NOT NULL,
  `rides_completed` int(11) DEFAULT '0',
  PRIMARY KEY (`Driver_id`),
  UNIQUE KEY `carno` (`carno`),
  KEY `Driver_FKIndex1` (`User_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`Driver_id`, `User_id`, `model`, `carno`, `licenseno`, `rides_completed`) VALUES
(1, 4, 'mehran', 'akk-742', '12345678', 2),
(2, 5, 'corolla', 'agg-724', '1234566789', 3),
(3, 6, 'swift', 'a-kk56', '1234566', 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver_has_request`
--

DROP TABLE IF EXISTS `driver_has_request`;
CREATE TABLE IF NOT EXISTS `driver_has_request` (
  `Driver_id` int(10) NOT NULL,
  `Req_id` int(10) NOT NULL,
  `Rider_id` int(10) NOT NULL,
  PRIMARY KEY (`Driver_id`,`Req_id`),
  KEY `Driver_has_Request_FKIndex1` (`Driver_id`),
  KEY `Rider_id` (`Rider_id`),
  KEY `Driver_has_Request_FKIndex2` (`Req_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_has_request`
--

INSERT INTO `driver_has_request` (`Driver_id`, `Req_id`, `Rider_id`) VALUES
(1, 1, 3),
(1, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `Rate` int(10) UNSIGNED NOT NULL,
  `Driver_id` int(10) NOT NULL,
  `Rider_id` int(10) NOT NULL,
  `Feedback` text NOT NULL,
  PRIMARY KEY (`Driver_id`,`Rider_id`),
  KEY `Rating_FKIndex1` (`Driver_id`),
  KEY `Rating_FKIndex2` (`Rider_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`Rate`, `Driver_id`, `Rider_id`, `Feedback`) VALUES
(10, 1, 1, 'Hammad is one of the best drivers at FAST.'),
(6, 2, 2, 'I wish I could drive like Sauman. I''m a huge fan of him.'),
(5, 3, 2, 'very good ride');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `Req_id` int(11) NOT NULL AUTO_INCREMENT,
  `Rider_id` int(10) NOT NULL,
  `Pickup_loc` varchar(100) NOT NULL,
  `go` tinyint(1) NOT NULL,
  PRIMARY KEY (`Req_id`),
  KEY `Request_FKIndex1` (`Rider_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

DROP TABLE IF EXISTS `rider`;
CREATE TABLE IF NOT EXISTS `rider` (
  `Rider_id` int(10) NOT NULL AUTO_INCREMENT,
  `User_id` int(10) UNSIGNED NOT NULL,
  `rides_completed` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Rider_id`),
  KEY `Rider_FKIndex1` (`User_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rider`
--

INSERT INTO `rider` (`Rider_id`, `User_id`, `rides_completed`) VALUES
(1, 4, 3),
(2, 5, 20),
(3, 6, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tripinfo`
--
DROP VIEW IF EXISTS `tripinfo`;
CREATE TABLE IF NOT EXISTS `tripinfo` (
`Driver_id` int(10)
,`User_id` int(10) unsigned
,`model` varchar(20)
,`carno` varchar(20)
,`licenseno` varchar(20)
,`rides_completed` int(11)
,`Rider_id` int(10)
,`Trip_id` int(10) unsigned
,`trip_date` date
,`Start_time` time
,`End_time` time
);

-- --------------------------------------------------------

--
-- Table structure for table `trip_info`
--

DROP TABLE IF EXISTS `trip_info`;
CREATE TABLE IF NOT EXISTS `trip_info` (
  `Rider_id` int(10) NOT NULL,
  `Trip_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Driver_id` int(10) NOT NULL,
  `trip_date` date NOT NULL,
  `Start_time` time DEFAULT NULL,
  `End_time` time DEFAULT NULL,
  PRIMARY KEY (`Trip_id`),
  KEY `Trip_info_FKIndex1` (`Trip_id`),
  KEY `Trip_info_FKIndex2` (`Rider_id`),
  KEY `Trip_info_FKIndex3` (`Driver_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip_info`
--

INSERT INTO `trip_info` (`Rider_id`, `Trip_id`, `Driver_id`, `trip_date`, `Start_time`, `End_time`) VALUES
(1, 1, 1, '2016-12-08', '07:00:00', '08:00:00'),
(3, 2, 3, '2016-12-22', '06:00:00', '09:00:00'),
(2, 3, 2, '2016-12-08', '15:04:00', '18:01:00'),
(2, 5, 3, '2016-12-13', '01:00:00', '01:20:00');

--
-- Triggers `trip_info`
--
DROP TRIGGER IF EXISTS `driver_after_insert`;
DELIMITER $$
CREATE TRIGGER `driver_after_insert` AFTER INSERT ON `trip_info` FOR EACH ROW BEGIN
DECLARE c INT;
SELECT Driver_id into c
FROM trip_info
ORDER BY trip_id DESC
LIMIT 1;
 UPDATE driver
  SET rides_completed = rides_completed+1
  WHERE Driver_id = c;
  END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `rider_after_insert`;
DELIMITER $$
CREATE TRIGGER `rider_after_insert` AFTER INSERT ON `trip_info` FOR EACH ROW BEGIN
DECLARE c INT;
SELECT Rider_id into c
FROM trip_info
ORDER BY trip_id DESC
LIMIT 1;
  UPDATE rider
  SET rides_completed = rides_completed+1
  WHERE Rider_id = c;
  END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `User_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `category` varchar(30) NOT NULL,
  `contactno` bigint(12) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cnic` (`cnic`),
  KEY `User_id` (`User_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`User_id`, `name`, `email`, `pwd`, `gender`, `category`, `contactno`, `cnic`, `image`, `address`) VALUES
(5, 'sauman', 'k142107@nu.edu.pk', 'ammarkhan', 'male', 'rider', 3352101822, '1234567890987764', 'Sauman.jpg', 'Abc johar mor .'),
(6, 'akif', 'k142093@nu.edu.pk', 'ammarkhan', 'male', 'driver', 3352101822, '12345678909876', 'Akif.jpg', 'a442 block h'),
(4, 'hammad', 'k142145@nu.edu.pk', 'ammarkhan', 'male', 'Driver', 3352101822, '3456776543', 'hammad.jpg', 'a44-22 block h');

-- --------------------------------------------------------

--
-- Structure for view `tripinfo`
--
DROP TABLE IF EXISTS `tripinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tripinfo`  AS  select `driver`.`Driver_id` AS `Driver_id`,`driver`.`User_id` AS `User_id`,`driver`.`model` AS `model`,`driver`.`carno` AS `carno`,`driver`.`licenseno` AS `licenseno`,`driver`.`rides_completed` AS `rides_completed`,`trip_info`.`Rider_id` AS `Rider_id`,`trip_info`.`Trip_id` AS `Trip_id`,`trip_info`.`trip_date` AS `trip_date`,`trip_info`.`Start_time` AS `Start_time`,`trip_info`.`End_time` AS `End_time` from (`driver` join `trip_info` on((`driver`.`Driver_id` = `trip_info`.`Driver_id`))) ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
