-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 03:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `Block_ID` int(11) NOT NULL,
  `Block_Name` varchar(255) DEFAULT NULL,
  `cot_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`Block_ID`, `Block_Name`, `cot_number`) VALUES
(1, 'Krishnaveni', 4),
(2, 'Bhima', 2),
(3, 'Tungabhadra', 2),
(4, 'Munneru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_ID` int(11) NOT NULL,
  `RegNo` varchar(7) DEFAULT NULL,
  `Block` varchar(255) DEFAULT NULL,
  `Floor` varchar(25) DEFAULT NULL,
  `Room` int(11) DEFAULT NULL,
  `Cot` int(11) DEFAULT NULL,
  `timestamp_column` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Booking_ID`, `RegNo`, `Block`, `Floor`, `Room`, `Cot`, `timestamp_column`) VALUES
(1, '9221456', 'Bhima', 'Second', 2, 2, '2024-03-19 15:19:56'),
(2, '9232444', 'Krishnaveni', 'First', 2, 1, '2024-04-02 16:15:06'),
(4, '9222456', 'Krishnaveni', 'Second', 3, 1, '2024-04-02 16:58:07'),
(5, '9222450', 'Bhima', 'Second', 2, 2, '2024-04-03 05:06:48'),
(54, '9221339', 'Tungabhadra', 'First', 2, 1, '2024-04-13 17:41:43'),
(56, '9222215', 'Bhima', 'First', 2, 1, '2024-04-17 12:51:50'),
(59, '9222435', 'Krishnaveni', 'Ground', 1, 1, '2024-05-02 12:48:57'),
(60, '9222488', 'Munneru', 'First', 1, 1, '2024-05-02 14:46:21'),
(62, '9222123', 'Tungabhadra', 'First', 1, 2, '2024-05-03 12:28:51'),
(64, '9222888', 'Bhima', 'Ground', 1, 2, '2024-05-04 08:44:40'),
(66, '9222787', 'Bhima', 'Ground', 2, 1, '2024-05-04 11:00:01'),
(67, '9333434', 'Krishnaveni', 'Ground', 4, 3, '2024-05-06 05:50:17'),
(68, '9222222', 'Krishnaveni', 'First', 3, 1, '2024-05-06 05:54:43'),
(69, '9111111', 'Krishnaveni', 'First', 7, 1, '2024-05-06 05:57:04'),
(70, '9555555', 'Tungabhadra', 'First', 6, 1, '2024-05-06 06:25:59'),
(71, '1234567', 'Krishnaveni', 'Ground', 3, 1, '2024-05-06 09:41:30'),
(72, '9333456', 'Munneru', 'Ground', 2, 1, '2024-05-06 10:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `cot`
--

CREATE TABLE `cot` (
  `Cot_ID` int(11) NOT NULL,
  `Room_ID` int(11) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `cot_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cot`
--

INSERT INTO `cot` (`Cot_ID`, `Room_ID`, `Status`, `cot_no`) VALUES
(1111, 111, 'booked', 1),
(1112, 111, 'Available', 2),
(1113, 111, 'Available', 3),
(1114, 111, 'Available', 4),
(1121, 112, 'Available', 1),
(1122, 112, 'Available', 2),
(1123, 112, 'Available', 3),
(1124, 112, 'Available', 4),
(1131, 113, 'booked', 1),
(1132, 113, 'Available', 2),
(1133, 113, 'Available', 3),
(1134, 113, 'Available', 4),
(1141, 114, 'Available', 1),
(1142, 114, 'Available', 2),
(1143, 114, 'booked', 3),
(1144, 114, 'Available', 4),
(1151, 115, 'Available', 1),
(1152, 115, 'Available', 2),
(1153, 115, 'Available', 3),
(1154, 115, 'Available', 4),
(1161, 116, 'Available', 1),
(1162, 116, 'Available', 2),
(1163, 116, 'Available', 3),
(1164, 116, 'Available', 4),
(1171, 117, 'Available', 1),
(1172, 117, 'Available', 2),
(1173, 117, 'Available', 3),
(1174, 117, 'Available', 4),
(1211, 121, 'Available', 1),
(1212, 121, 'Available', 2),
(1213, 121, 'Available', 3),
(1214, 121, 'Available', 4),
(1221, 122, 'booked', 1),
(1222, 122, 'Available', 2),
(1223, 122, 'Available', 3),
(1224, 122, 'Available', 4),
(1231, 123, 'Available', 1),
(1232, 123, 'Available', 2),
(1233, 123, 'Available', 3),
(1234, 123, 'Available', 4),
(1241, 124, 'Available', 1),
(1242, 124, 'Available', 2),
(1243, 124, 'Available', 3),
(1244, 124, 'Available', 4),
(1251, 125, 'Available', 1),
(1252, 125, 'Available', 2),
(1253, 125, 'Available', 3),
(1254, 125, 'Available', 4),
(1261, 126, 'Available', 1),
(1262, 126, 'Available', 2),
(1263, 126, 'Available', 3),
(1264, 126, 'Available', 4),
(1271, 127, 'booked', 1),
(1272, 127, 'Available', 2),
(1273, 127, 'Available', 3),
(1274, 127, 'Available', 4),
(1311, 131, 'Available', 1),
(1312, 131, 'Available', 2),
(1313, 131, 'Available', 3),
(1314, 131, 'Available', 4),
(1321, 132, 'Available', 1),
(1322, 132, 'Available', 2),
(1323, 132, 'Available', 3),
(1324, 132, 'Available', 4),
(1331, 133, 'booked', 1),
(1332, 133, 'Available', 2),
(1333, 133, 'Available', 3),
(1334, 133, 'Available', 4),
(1341, 134, 'Available', 1),
(1342, 134, 'Available', 2),
(1343, 134, 'Available', 3),
(1344, 134, 'Available', 4),
(1351, 135, 'Available', 1),
(1352, 135, 'Available', 2),
(1353, 135, 'Available', 3),
(1354, 135, 'Available', 4),
(1361, 136, 'Available', 1),
(1362, 136, 'Available', 2),
(1363, 136, 'Available', 3),
(1364, 136, 'Available', 4),
(1371, 137, 'Available', 1),
(1372, 137, 'Available', 2),
(1373, 137, 'Available', 3),
(1374, 137, 'Available', 4),
(2111, 211, 'Available', 1),
(2112, 211, 'booked', 2),
(2121, 212, 'booked', 1),
(2122, 212, 'Available', 2),
(2141, 214, 'Available', 1),
(2142, 214, 'Available', 2),
(2151, 215, 'Available', 1),
(2152, 215, 'Available', 2),
(2161, 216, 'Available', 1),
(2162, 216, 'Available', 2),
(2171, 217, 'Available', 1),
(2172, 217, 'Available', 2),
(2211, 221, 'booked', 1),
(2212, 221, 'Available', 2),
(2221, 222, 'booked', 1),
(2222, 222, 'Available', 2),
(2241, 224, 'Available', 1),
(2242, 224, 'Available', 2),
(2251, 225, 'Available', 1),
(2252, 225, 'Available', 2),
(2261, 226, 'Available', 1),
(2262, 226, 'Available', 2),
(2271, 227, 'Available', 1),
(2272, 227, 'Available', 2),
(2311, 231, 'booked', 1),
(2312, 231, 'Available', 2),
(2321, 232, 'booked', 1),
(2322, 232, 'booked', 2),
(2341, 234, 'Available', 1),
(2342, 234, 'Available', 2),
(2351, 235, 'Available', 1),
(2352, 235, 'Available', 2),
(2361, 236, 'Available', 1),
(2362, 236, 'Available', 2),
(2371, 237, 'Available', 1),
(2372, 237, 'Available', 2),
(3111, 311, 'Available', 1),
(3112, 311, 'Available', 2),
(3121, 312, 'Available', 1),
(3122, 312, 'Available', 2),
(3141, 314, 'Available', 1),
(3142, 314, 'Available', 2),
(3151, 315, 'Available', 1),
(3152, 315, 'Available', 2),
(3161, 316, 'Available', 1),
(3162, 316, 'Available', 2),
(3171, 317, 'Available', 1),
(3172, 317, 'Available', 2),
(3211, 321, 'Available', 1),
(3212, 321, 'booked', 2),
(3221, 322, 'booked', 1),
(3222, 322, 'Available', 2),
(3241, 324, 'Available', 1),
(3242, 324, 'Available', 2),
(3251, 325, 'Available', 1),
(3252, 325, 'Available', 2),
(3261, 326, 'booked', 1),
(3262, 326, 'Available', 2),
(3271, 327, 'Available', 1),
(3272, 327, 'Available', 2),
(3311, 331, 'Available', 1),
(3312, 331, 'Available', 2),
(3321, 332, 'Available', 1),
(3322, 332, 'Available', 2),
(3341, 334, 'Available', 1),
(3342, 334, 'Available', 2),
(3351, 335, 'Available', 1),
(3352, 335, 'Available', 2),
(3361, 336, 'Available', 1),
(3362, 336, 'Available', 2),
(3371, 337, 'Available', 1),
(3372, 337, 'Available', 2),
(4111, 411, 'booked', 1),
(4121, 412, 'booked', 1),
(4131, 413, 'Available', 1),
(4141, 414, 'Available', 1),
(4151, 415, 'Available', 1),
(4161, 416, 'Available', 1),
(4171, 417, 'Available', 1),
(4211, 421, 'booked', 1),
(4221, 422, 'Available', 1),
(4231, 423, 'Available', 1),
(4241, 424, 'Available', 1),
(4251, 425, 'Available', 1),
(4261, 426, 'Available', 1),
(4271, 427, 'Available', 1),
(4311, 431, 'booked', 1),
(4321, 432, 'Available', 1),
(4331, 433, 'Available', 1),
(4341, 434, 'Available', 1),
(4351, 435, 'Available', 1),
(4361, 436, 'Available', 1),
(4371, 437, 'Available', 1);

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE `floor` (
  `Floor_ID` int(11) NOT NULL,
  `Floor_Name` varchar(50) DEFAULT NULL,
  `Block_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`Floor_ID`, `Floor_Name`, `Block_ID`) VALUES
(11, 'G', 1),
(12, 'F', 1),
(13, 'S', 1),
(21, 'G', 2),
(22, 'F', 2),
(23, 'S', 2),
(31, 'G', 3),
(32, 'F', 3),
(33, 'S', 3),
(41, 'G', 4),
(42, 'F', 4),
(43, 'S', 4);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `RegNo` int(11) NOT NULL,
  `RollNo` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `PhoneNo` varchar(10) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `timestamp_column` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`RegNo`, `RollNo`, `Name`, `Gender`, `Year`, `PhoneNo`, `Email`, `Password`, `timestamp_column`) VALUES
(1234567, 12345, 'xyz', 'Female', 1, '1234567890', '1234567@student.nitandhra.ac.in', '12345678', '2024-05-06 15:10:05'),
(9111111, 422205, 'frahana', 'Female', 1, '451254124', '422205@student.nitandhra.ac.in', '789fah@123', '2024-05-06 11:26:48'),
(9212365, 421326, 'lahari', 'Female', 3, '9564706866', '421326@student.nitandhra.ac.in', 'lahari@123', '2024-05-04 14:19:43'),
(9221456, 422161, 'K Soujanya', 'Female', 2, '8179092823', '422161@student.nitandhra.ac.in', '9573792823', '2024-03-19 20:47:27'),
(9221638, 722105, 'A.SUSMITHA', 'Female', 2, '9121398826', '722105@student.nitandhra.ac.in', '722105susmitha', '2024-04-17 19:32:56'),
(9222123, 422279, 'monica', 'Female', 3, '9437487567', '422279@student.nitandhra.ac.in', 'mmonica', '2024-05-03 17:56:45'),
(9222215, 422135, 'charitha', 'Female', 2, '8688990296', '422135@student.nitandhra.ac.in', 'charitha456', '2024-04-17 18:19:55'),
(9222222, 422204, 'Sydnee', 'Female', 1, '2791128573', '422204@student.nitandhra.ac.in', 'Pa$$w0rd!', '2024-05-06 11:23:37'),
(9222333, 422221, 'jessi', 'Female', 2, '0231231231', '422221@student.nitandhra.ac.in', 'jessi123', '2024-05-04 12:24:59'),
(9222433, 722201, 'kavya', 'Female', 2, '4352313677', '722201@student.nitandhra.ac.in', 'kavya123', '2024-04-03 12:10:02'),
(9222443, 111011, 'preethi', 'Female', 3, '7896547894', '111011@student.nitandhra.ac.in', 'preethi9222443', '2024-05-02 15:14:53'),
(9222447, 422201, 'Kruthika', 'Female', 3, '9381166304', '422201@student.nitandhra.ac.in', 'kruthika123', '2024-04-02 21:08:15'),
(9222450, 422222, 'yagnasree', 'Female', 2, '4569871478', '422222@student.nitandhra.ac.in', 'yagna@123', '2024-04-03 10:35:52'),
(9222452, 422326, 'sonam', 'Female', 2, '1236547417', '422326@student.nitandhra.ac.in', 'sonam123', '2024-05-04 14:20:56'),
(9222456, 521140, 'Ruthuja', 'Female', 1, '1452549876', '521140@student.nitandhra.ac.in', 'ruthuja45', '2024-04-02 22:27:49'),
(9222525, 422237, 'vinuthna', 'Female', 2, '9345227283', '422237@student.nitandhra.ac.in', 'vinuthna', '2024-04-02 21:03:46'),
(9222555, 122123, 'urvashi', 'Female', 4, '7891472584', '122123@student.nitandhra.ac.in', 'urvashi', '2024-05-04 11:36:56'),
(9222787, 422202, 'abha', 'Female', 2, '9381155304', '422202@student.nitandhra.ac.in', 'abha123', '2024-05-04 16:05:17'),
(9222888, 422255, 'soha farahna', 'Female', 2, '5874961235', '422255@student.nitandhra.ac.in', 'soha321', '2024-05-04 14:12:43'),
(9232444, 222116, 'lasitha', 'Female', 1, '4569874587', '222116@student.nitandhra.ac.in', 'lasitha1234', '2024-04-02 21:44:02'),
(9333434, 422203, 'vasuda', 'Female', 1, '1587423694', '422203@student.nitandhra.ac.in', 'vasu1234', '2024-05-06 11:19:30'),
(9333456, 422209, 'enaima', 'Female', 4, '4789561457', '422209@student.nitandhra.ac.in', '422209', '2024-05-06 15:30:45'),
(9555555, 422206, 'pushpalatha', 'Female', 3, '5555666648', '422206@student.nitandhra.ac.in', 'fire123', '2024-05-06 11:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_ID` int(11) NOT NULL,
  `Room_Number` int(11) DEFAULT NULL,
  `Floor_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_ID`, `Room_Number`, `Floor_ID`) VALUES
(111, 1, 11),
(112, 2, 11),
(113, 3, 11),
(114, 4, 11),
(115, 5, 11),
(116, 6, 11),
(117, 7, 11),
(118, 8, 11),
(119, 9, 11),
(121, 1, 12),
(122, 2, 12),
(123, 3, 12),
(124, 4, 12),
(125, 5, 12),
(126, 6, 12),
(127, 7, 12),
(128, 8, 12),
(129, 9, 12),
(131, 1, 13),
(132, 2, 13),
(133, 3, 13),
(134, 4, 13),
(135, 5, 13),
(136, 6, 13),
(137, 7, 13),
(138, 8, 13),
(139, 9, 13),
(211, 1, 21),
(212, 2, 21),
(213, 3, 21),
(214, 4, 21),
(215, 5, 21),
(216, 6, 21),
(217, 7, 21),
(218, 8, 21),
(219, 9, 21),
(221, 1, 22),
(222, 2, 22),
(223, 3, 22),
(224, 4, 22),
(225, 5, 22),
(226, 6, 22),
(227, 7, 22),
(228, 8, 22),
(229, 9, 22),
(231, 1, 23),
(232, 2, 23),
(233, 3, 23),
(234, 4, 23),
(235, 5, 23),
(236, 6, 23),
(237, 7, 23),
(238, 8, 23),
(239, 9, 23),
(311, 1, 31),
(312, 2, 31),
(313, 3, 31),
(314, 4, 31),
(315, 5, 31),
(316, 6, 31),
(317, 7, 31),
(318, 8, 31),
(319, 9, 31),
(321, 1, 32),
(322, 2, 32),
(323, 3, 32),
(324, 4, 32),
(325, 5, 32),
(326, 6, 32),
(327, 7, 32),
(328, 8, 32),
(329, 9, 32),
(331, 1, 33),
(332, 2, 33),
(333, 3, 33),
(334, 4, 33),
(335, 5, 33),
(336, 6, 33),
(337, 7, 33),
(338, 8, 33),
(339, 9, 33),
(411, 1, 41),
(412, 2, 41),
(413, 3, 41),
(414, 4, 41),
(415, 5, 41),
(416, 6, 41),
(417, 7, 41),
(418, 8, 41),
(419, 9, 41),
(421, 1, 42),
(422, 2, 42),
(423, 3, 42),
(424, 4, 42),
(425, 5, 42),
(426, 6, 42),
(427, 7, 42),
(428, 8, 42),
(429, 9, 42),
(431, 1, 43),
(432, 2, 43),
(433, 3, 43),
(434, 4, 43),
(435, 5, 43),
(436, 6, 43),
(437, 7, 43),
(438, 8, 43),
(439, 9, 43),
(1110, 10, 11),
(1111, 11, 11),
(1112, 12, 11),
(1113, 13, 11),
(1114, 14, 11),
(1115, 15, 11),
(1116, 16, 11),
(1117, 17, 11),
(1118, 18, 11),
(1210, 10, 12),
(1211, 11, 12),
(1212, 12, 12),
(1215, 15, 12),
(1216, 16, 12),
(1310, 10, 13),
(1311, 11, 13),
(1312, 12, 13),
(1313, 13, 13),
(1314, 14, 13),
(1315, 15, 13),
(1316, 16, 13),
(2110, 10, 21),
(2111, 11, 21),
(2112, 12, 21),
(2113, 13, 21),
(2114, 14, 21),
(2115, 15, 21),
(2116, 16, 21),
(2117, 17, 21),
(2118, 18, 21),
(2119, 19, 21),
(2120, 20, 21),
(2121, 21, 21),
(2122, 22, 21),
(2210, 10, 22),
(2211, 11, 22),
(2212, 12, 22),
(2213, 13, 22),
(2214, 14, 22),
(2215, 15, 22),
(2216, 16, 22),
(2217, 17, 22),
(2218, 18, 22),
(2219, 19, 22),
(2220, 20, 22),
(2221, 21, 22),
(2222, 22, 22),
(2310, 10, 23),
(2311, 11, 23),
(2312, 12, 23),
(2313, 13, 23),
(2314, 14, 23),
(2315, 15, 23),
(2316, 16, 23),
(2317, 17, 23),
(2318, 18, 23),
(2319, 19, 23),
(2320, 20, 23),
(2321, 21, 23),
(2322, 22, 23),
(3110, 10, 31),
(3111, 11, 31),
(3112, 12, 31),
(3113, 13, 31),
(3114, 14, 31),
(3115, 15, 31),
(3116, 16, 31),
(3117, 17, 31),
(3118, 18, 31),
(3119, 19, 31),
(3120, 20, 31),
(3121, 21, 31),
(3122, 22, 31),
(3210, 10, 32),
(3211, 11, 32),
(3212, 12, 32),
(3213, 13, 32),
(3214, 14, 32),
(3215, 15, 32),
(3216, 16, 32),
(3217, 17, 32),
(3218, 18, 32),
(3219, 19, 32),
(3220, 20, 32),
(3221, 21, 32),
(3222, 22, 32),
(3310, 10, 33),
(3311, 11, 33),
(3312, 12, 33),
(3313, 13, 33),
(3314, 14, 33),
(3315, 15, 33),
(3316, 16, 33),
(3317, 17, 33),
(3318, 18, 33),
(3319, 19, 33),
(3320, 20, 33),
(3321, 21, 33),
(3322, 22, 33),
(4110, 10, 41),
(4111, 11, 41),
(4112, 12, 41),
(4113, 13, 41),
(4114, 14, 41),
(4115, 15, 41),
(4116, 16, 41),
(4117, 17, 41),
(4118, 18, 41),
(4119, 19, 41),
(4120, 20, 41),
(4121, 21, 41),
(4122, 22, 41),
(4210, 10, 42),
(4211, 11, 42),
(4212, 12, 42),
(4213, 13, 42),
(4214, 14, 42),
(4215, 15, 42),
(4216, 16, 42),
(4217, 17, 42),
(4218, 18, 42),
(4219, 19, 42),
(4220, 20, 42),
(4221, 21, 42),
(4222, 22, 42),
(4310, 10, 43),
(4311, 11, 43),
(4312, 12, 43),
(4313, 13, 43),
(4314, 14, 43),
(4315, 15, 43),
(4316, 16, 43),
(4317, 17, 43),
(4318, 18, 43),
(4319, 19, 43),
(4320, 20, 43),
(4321, 21, 43),
(4322, 22, 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`Block_ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_ID`);

--
-- Indexes for table `cot`
--
ALTER TABLE `cot`
  ADD PRIMARY KEY (`Cot_ID`),
  ADD KEY `Room_ID` (`Room_ID`);

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
  ADD PRIMARY KEY (`Floor_ID`),
  ADD KEY `Block_ID` (`Block_ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`RegNo`),
  ADD UNIQUE KEY `RollNo` (`RollNo`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_ID`),
  ADD KEY `Floor_ID` (`Floor_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Booking_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cot`
--
ALTER TABLE `cot`
  ADD CONSTRAINT `cot_ibfk_1` FOREIGN KEY (`Room_ID`) REFERENCES `room` (`Room_ID`);

--
-- Constraints for table `floor`
--
ALTER TABLE `floor`
  ADD CONSTRAINT `floor_ibfk_1` FOREIGN KEY (`Block_ID`) REFERENCES `block` (`Block_ID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`Floor_ID`) REFERENCES `floor` (`Floor_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
