-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 06:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `A_mg` int(11) NOT NULL,
  `R_mg` int(11) NOT NULL,
  `B_mg` int(11) NOT NULL,
  `T_bookings` int(11) NOT NULL,
  `u_mg` int(11) NOT NULL,
  `offer_mg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `staff_id`, `A_mg`, `R_mg`, `B_mg`, `T_bookings`, `u_mg`, `offer_mg`) VALUES
(10, 65, 1, 1, 1, 0, 0, 0),
(11, 66, 1, 1, 1, 1, 1, 0),
(12, 67, 0, 0, 0, 0, 0, 0),
(13, 68, 0, 0, 0, 0, 0, 0),
(14, 69, 0, 0, 0, 0, 0, 0),
(15, 70, 0, 0, 0, 0, 1, 0),
(16, 71, 0, 0, 0, 0, 0, 0),
(17, 72, 0, 0, 0, 0, 0, 0),
(18, 73, 0, 0, 0, 0, 0, 0),
(19, 74, 0, 0, 0, 0, 0, 0),
(20, 75, 0, 0, 1, 0, 0, 0),
(21, 76, 0, 0, 1, 0, 0, 0),
(22, 77, 0, 0, 1, 0, 0, 0),
(23, 78, 0, 0, 1, 0, 0, 0),
(24, 79, 0, 0, 1, 0, 0, 0),
(25, 80, 0, 0, 1, 0, 0, 0),
(26, 81, 0, 0, 1, 0, 0, 0),
(27, 82, 0, 0, 1, 0, 0, 0),
(28, 83, 0, 0, 1, 0, 0, 0),
(29, 84, 0, 0, 1, 0, 0, 0),
(30, 85, 0, 0, 1, 0, 0, 0),
(31, 0, 0, 0, 1, 0, 0, 0),
(32, 0, 0, 0, 1, 0, 0, 0),
(33, 86, 0, 0, 1, 0, 0, 0),
(34, 87, 0, 0, 1, 0, 0, 0),
(35, 88, 0, 0, 1, 0, 0, 0),
(36, 89, 0, 0, 0, 0, 0, 0),
(37, 90, 0, 1, 0, 0, 0, 0),
(38, 0, 0, 1, 0, 0, 0, 0),
(39, 0, 1, 0, 0, 0, 0, 0),
(40, 91, 0, 0, 1, 0, 0, 0),
(41, 92, 0, 0, 1, 0, 0, 0),
(42, 93, 0, 0, 1, 0, 0, 0),
(43, 94, 0, 0, 1, 0, 0, 0),
(44, 95, 0, 0, 1, 0, 0, 0),
(45, 96, 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `img`, `name`, `email`, `phone`, `birthday`, `age`, `city`, `state`, `password`, `cpassword`) VALUES
(1, 'download.jpg', 'Tarun', 'tarunyadav0972@gmail.com', ' 8130634471', '10-12-1998', '20', 'delhi', 'delhi', 'tisha', 'tisha'),
(3, 'specialoffer.jpg', 'Karan', 'manju1212@gmail.com', '', '', '', '', '', 'Manju@123', 'Manju@123'),
(6, 'pu.jpg', 'tisha', 'rohitpahwa2017@gmail.com', '9896159202           ', '10-12-1998', '24', 'panipat', 'haryana', 'tisha', 'tisha');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL,
  `contact` int(200) NOT NULL,
  `agency` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pan` varchar(200) NOT NULL,
  `agent` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `img`, `name`, `email`, `password`, `cpassword`, `contact`, `agency`, `city`, `pan`, `agent`) VALUES
(1, '', 'rohit', 'rohit1@gmail.com', 'rht1234', 'rht1234', 2147483647, 'niit', 'Allahabad', '212303', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `ayushi`
--

CREATE TABLE `ayushi` (
  `id` int(11) NOT NULL,
  `seatno` varchar(100) NOT NULL,
  `amount` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ayushi`
--

INSERT INTO `ayushi` (`id`, `seatno`, `amount`, `status`) VALUES
(1, '1', '1200', 'empty'),
(2, '2', '1200', 'empty'),
(3, '3', '1200', 'empty'),
(4, '4', '1200', 'empty'),
(5, '5', '1200', 'empty'),
(6, '6', '1200', 'empty'),
(7, '7', '1200', 'empty'),
(8, '8', '1200', 'empty'),
(9, '9', '1200', 'empty'),
(10, '10', '1200', 'empty'),
(11, '11', '1200', 'empty'),
(12, '12', '1200', 'empty'),
(13, '13', '1200', 'booked'),
(14, '14', '1200', 'empty'),
(15, '15', '1200', 'empty'),
(16, '16', '1200', 'empty'),
(17, '17', '1200', 'empty'),
(18, '18', '1200', 'empty'),
(19, '19', '1200', 'empty'),
(20, '20', '1200', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `bus_management`
--

CREATE TABLE `bus_management` (
  `busid` int(10) NOT NULL,
  `busagency` varchar(255) NOT NULL,
  `bus_name` varchar(255) NOT NULL,
  `bus_number` varchar(255) NOT NULL,
  `bus_type` varchar(255) NOT NULL,
  `buscapacity` varchar(10) NOT NULL,
  `total_seats` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `start_point` varchar(255) NOT NULL,
  `drop_point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_management`
--

INSERT INTO `bus_management` (`busid`, `busagency`, `bus_name`, `bus_number`, `bus_type`, `buscapacity`, `total_seats`, `amount`, `route`, `start_point`, `drop_point`) VALUES
(1, 'Rk Travels', 'ritikk', 'rk123', 'AC Sleeper', '2+1', '30', '1000', 'allahabad-delhi', 'allahabad', 'delhi'),
(2, 'shivani travels', 'shivani', 'svn546', 'Non AC Seater', '2+2', '40', '400', 'allahabad-delhi', 'allahabad', 'delhi'),
(3, 'ayushi travels', 'ayushi', 'mp-4201', 'ac', '2+1', '20', '1200', 'ratlam-allahabad', 'ratlam', 'allahabad'),
(4, 'volvo travels', 'sujit', 'up-8450', 'Non AC Seater', '2+2', '40', '750', 'bangalore-chennai', 'bangalore', 'chennai'),
(5, 'ashoka travels', 'ritik', 'mp-4201', 'ac', '2+1', '30', '900', 'allahabad-delhi', 'allahabad', 'delhi');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `offer_name` varchar(255) NOT NULL,
  `posted_date` date NOT NULL,
  `discription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `image`, `offer_name`, `posted_date`, `discription`) VALUES
(31, 'review3.jpg', '30/30', '2020-12-20', 'my name is '),
(35, '', '40', '2021-01-21', 'my name is lakhan');

-- --------------------------------------------------------

--
-- Table structure for table `ritik`
--

CREATE TABLE `ritik` (
  `id` int(11) NOT NULL,
  `seatno` varchar(100) NOT NULL,
  `amount` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ritik`
--

INSERT INTO `ritik` (`id`, `seatno`, `amount`, `status`) VALUES
(1, '1', '900', 'empty'),
(2, '2', '900', 'empty'),
(3, '3', '900', 'empty'),
(4, '4', '900', 'empty'),
(5, '5', '900', 'empty'),
(6, '6', '900', 'empty'),
(7, '7', '900', 'booked'),
(8, '8', '900', 'empty'),
(9, '9', '900', 'empty'),
(10, '10', '900', 'empty'),
(11, '11', '900', 'empty'),
(12, '12', '900', 'empty'),
(13, '13', '900', 'empty'),
(14, '14', '900', 'empty'),
(15, '15', '900', 'empty'),
(16, '16', '900', 'empty'),
(17, '17', '900', 'empty'),
(18, '18', '900', 'empty'),
(19, '19', '900', 'empty'),
(20, '20', '900', 'empty'),
(21, '21', '900', 'empty'),
(22, '22', '900', 'empty'),
(23, '23', '900', 'empty'),
(24, '24', '900', 'empty'),
(25, '25', '900', 'empty'),
(26, '26', '900', 'empty'),
(27, '27', '900', 'empty'),
(28, '28', '900', 'empty'),
(29, '29', '900', 'empty'),
(30, '30', '900', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `ritikk`
--

CREATE TABLE `ritikk` (
  `id` int(11) NOT NULL,
  `seatno` varchar(100) NOT NULL,
  `amount` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ritikk`
--

INSERT INTO `ritikk` (`id`, `seatno`, `amount`, `status`) VALUES
(1, '1', '1000', 'empty'),
(2, '2', '1000', 'empty'),
(3, '3', '1000', 'empty'),
(4, '4', '1000', 'booked'),
(5, '5', '1000', 'booked'),
(6, '6', '1000', 'empty'),
(7, '7', '1000', 'empty'),
(8, '8', '1000', 'booked'),
(9, '9', '1000', 'empty'),
(10, '10', '1000', 'empty'),
(11, '11', '1000', 'empty'),
(12, '12', '1000', 'booked'),
(13, '13', '1000', 'booked'),
(14, '14', '1000', 'empty'),
(15, '15', '1000', 'empty'),
(16, '16', '1000', 'empty'),
(17, '17', '1000', 'empty'),
(18, '18', '1000', 'booked'),
(19, '19', '1000', 'booked'),
(20, '20', '1000', 'empty'),
(21, '21', '1000', 'empty'),
(22, '22', '1000', 'booked'),
(23, '23', '1000', 'booked'),
(24, '24', '1000', 'booked'),
(25, '25', '1000', 'empty'),
(26, '26', '1000', 'empty'),
(27, '27', '1000', 'empty'),
(28, '28', '1000', 'empty'),
(29, '29', '1000', 'empty'),
(30, '30', '1000', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `route_management`
--

CREATE TABLE `route_management` (
  `routeid` int(11) NOT NULL,
  `from` varchar(1000) NOT NULL,
  `to` varchar(2000) NOT NULL,
  `dtime` varchar(10) NOT NULL,
  `atime` varchar(10) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `doj` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route_management`
--

INSERT INTO `route_management` (`routeid`, `from`, `to`, `dtime`, `atime`, `duration`, `price`, `doj`) VALUES
(1, 'allahabad', 'delhi', '1:00 PM', '8:00 PM', '7', 1000, '2021-01-23'),
(2, 'allahabad', 'delhi', '12:00 PM', '9:00 PM', '9', 400, '2021-01-23'),
(3, 'ratlam', 'allahabad', '9:00 PM', '7:00 AM', '10', 1200, '2021-01-25'),
(4, 'bangalore', 'chennai', '7:15 PM', '12:15 AM', '6', 750, '2021-01-27'),
(5, 'allahabad', 'delhi', '8:00 PM', '4:00 AM', '6', 900, '2021-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(10) NOT NULL,
  `seatNo` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `seatNo`, `amount`, `status`) VALUES
(1, '1', '300', 'booking'),
(2, '2', '300', 'booking'),
(3, '3', '300', 'booked'),
(4, '4', '300', 'booked'),
(5, '5', '300', 'booking'),
(6, '6', '300', 'booked'),
(7, '7', '300', 'booking'),
(8, '8', '300', 'booking'),
(9, '9', '300', 'booking'),
(10, '10', '300', 'empty'),
(11, '11', '300', 'empty'),
(12, '12', '300', 'empty'),
(13, '13', '300', 'empty'),
(14, '14', '300', 'booked'),
(15, '15', '300', 'booked'),
(16, '16', '300', 'booked'),
(17, '17', '300', 'booked'),
(18, '18', '300', 'booking'),
(19, '19', '300', 'booking'),
(20, '20', '300', 'empty'),
(21, '21', '300', 'empty'),
(22, '22', '300', 'booked'),
(23, '23', '300', 'booked'),
(24, '24', '300', 'booked'),
(25, '25', '300', 'booked'),
(26, '26', '300', 'empty'),
(27, '27', '300', 'empty'),
(28, '28', '300', 'empty'),
(29, '29', '300', 'empty'),
(30, '30', '300', 'empty'),
(31, '31', '300', 'empty'),
(32, '32', '300', 'empty'),
(33, '33', '300', 'empty'),
(34, '34', '300', 'booked'),
(35, '35', '300', 'booking'),
(36, '36', '300', 'booked'),
(37, '37', '300', 'booked'),
(38, '38', '300', 'empty'),
(39, '39', '300', 'empty'),
(40, '40', '300', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `shivani`
--

CREATE TABLE `shivani` (
  `id` int(11) NOT NULL,
  `seatno` varchar(100) NOT NULL,
  `amount` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shivani`
--

INSERT INTO `shivani` (`id`, `seatno`, `amount`, `status`) VALUES
(1, '1', '400', 'empty'),
(2, '2', '400', 'empty'),
(3, '3', '400', 'booked'),
(4, '4', '400', 'booked'),
(5, '5', '400', 'booked'),
(6, '6', '400', 'booked'),
(7, '7', '400', 'empty'),
(8, '8', '400', 'empty'),
(9, '9', '400', 'empty'),
(10, '10', '400', 'empty'),
(11, '11', '400', 'empty'),
(12, '12', '400', 'empty'),
(13, '13', '400', 'empty'),
(14, '14', '400', 'empty'),
(15, '15', '400', 'empty'),
(16, '16', '400', 'empty'),
(17, '17', '400', 'empty'),
(18, '18', '400', 'empty'),
(19, '19', '400', 'empty'),
(20, '20', '400', 'empty'),
(21, '21', '400', 'empty'),
(22, '22', '400', 'empty'),
(23, '23', '400', 'empty'),
(24, '24', '400', 'empty'),
(25, '25', '400', 'empty'),
(26, '26', '400', 'empty'),
(27, '27', '400', 'empty'),
(28, '28', '400', 'empty'),
(29, '29', '400', 'empty'),
(30, '30', '400', 'empty'),
(31, '31', '400', 'empty'),
(32, '32', '400', 'empty'),
(33, '33', '400', 'empty'),
(34, '34', '400', 'booked'),
(35, '35', '400', 'booked'),
(36, '36', '400', 'empty'),
(37, '37', '400', 'empty'),
(38, '38', '400', 'empty'),
(39, '39', '400', 'empty'),
(40, '40', '400', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `street` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sujit`
--

CREATE TABLE `sujit` (
  `id` int(11) NOT NULL,
  `seatno` varchar(100) NOT NULL,
  `amount` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sujit`
--

INSERT INTO `sujit` (`id`, `seatno`, `amount`, `status`) VALUES
(1, '1', '750', 'empty'),
(2, '2', '750', 'empty'),
(3, '3', '750', 'empty'),
(4, '4', '750', 'empty'),
(5, '5', '750', 'empty'),
(6, '6', '750', 'empty'),
(7, '7', '750', 'empty'),
(8, '8', '750', 'empty'),
(9, '9', '750', 'empty'),
(10, '10', '750', 'empty'),
(11, '11', '750', 'empty'),
(12, '12', '750', 'empty'),
(13, '13', '750', 'empty'),
(14, '14', '750', 'booked'),
(15, '15', '750', 'empty'),
(16, '16', '750', 'empty'),
(17, '17', '750', 'empty'),
(18, '18', '750', 'empty'),
(19, '19', '750', 'empty'),
(20, '20', '750', 'empty'),
(21, '21', '750', 'empty'),
(22, '22', '750', 'empty'),
(23, '23', '750', 'empty'),
(24, '24', '750', 'empty'),
(25, '25', '750', 'empty'),
(26, '26', '750', 'empty'),
(27, '27', '750', 'empty'),
(28, '28', '750', 'empty'),
(29, '29', '750', 'empty'),
(30, '30', '750', 'empty'),
(31, '31', '750', 'empty'),
(32, '32', '750', 'empty'),
(33, '33', '750', 'empty'),
(34, '34', '750', 'empty'),
(35, '35', '750', 'empty'),
(36, '36', '750', 'empty'),
(37, '37', '750', 'empty'),
(38, '38', '750', 'empty'),
(39, '39', '750', 'empty'),
(40, '40', '750', 'empty');

-- --------------------------------------------------------

--
-- Table structure for table `ticketbooking`
--

CREATE TABLE `ticketbooking` (
  `id` int(11) NOT NULL,
  `seatnum` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `busnum` varchar(100) NOT NULL,
  `jdate` varchar(100) NOT NULL,
  `atime` varchar(100) NOT NULL,
  `dtime` varchar(100) NOT NULL,
  `btime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticketbooking`
--

INSERT INTO `ticketbooking` (`id`, `seatnum`, `amount`, `name`, `email`, `contact`, `busnum`, `jdate`, `atime`, `dtime`, `btime`) VALUES
(1, '37,38', 1200, 'sunny', 'manu11@gmail.com', '7876655645', 'up70a11', ' 2021-01-23', ' 7:00 AM', ' allahabad', ' delhi'),
(2, '2,7', 1800, 'anisha', 'manu11@gmail.com', '87878987', 'sk123', ' 2021-01-23', ' 7:00 AM', ' allahabad', ' delhi'),
(3, '39,40', 1200, 'manu', 'manu11@gmail.com', '9090988767', 'up70a11', ' 2021-01-23', ' 7:00 AM', ' allahabad', ' delhi'),
(4, '8,9', 2000, 'sunny', 'manu11@gmail.com', '8767564323', 'shiva1111', ' 2021-01-23', ' 6:00 PM', ' allahabad', ' delhi'),
(5, '8', 1000, 'tanu sonkar', 'tanu12@gmail.com', '7876655645', 'rk123', ' 2021-01-23', ' 8:00 PM', ' allahabad', ' delhi'),
(6, '12,13', 2000, 'sunny', 'tanu12@gmail.com', '9090988767', 'rk123', ' 2021-01-23', ' 8:00 PM', ' allahabad', ' delhi'),
(7, '18', 1000, 'mangal', 'tanu12@gmail.com', '7878876756', 'rk123', ' 2021-01-23', ' 8:00 PM', ' allahabad', ' delhi'),
(8, '19', 1000, 'anisha', 'tanu12@gmail.com', '87878987', 'rk123', ' 2021-01-23', ' 8:00 PM', ' allahabad', ' delhi'),
(9, '22', 1000, 'sunny', 'tanu12@gmail.com', '7878876756', 'rk123', ' 2021-01-23', ' allahabad', '', ''),
(10, '23', 1000, '', 'tanu12@gmail.com', '', 'rk123', ' 2021-01-23', ' 8:00 PM', ' allahabad', ' delhi'),
(11, '24', 1000, 'sunny', 'tanu12@gmail.com', '8767564323', 'rk123', ' 2021-01-23', ' 8:00 PM', ' allahabad', ' delhi'),
(12, '3,4,5,6', 1600, 'amisha', 'tanu12@gmail.com', '900000000', 'svn546', ' 2021-01-23', ' 12:00 PM', ' allahabad', ' delhi'),
(13, '4,5', 2000, 'shivani', 'manu11@gmail.com', '9876543210', 'rk123', ' 2021-01-23', ' 8:00 PM', ' allahabad', ' delhi'),
(14, '34,35', 800, 'ritik', 'manu11@gmail.com', '1236547890', 'svn546', ' 2021-01-23', ' 12:00 PM', ' allahabad', ' delhi'),
(15, '13', 1200, 'ayushi', 'manu11@gmail.com', '8796501423', 'mp-4201', ' 2021-01-25', ' 7:00 AM', ' ratlam', ' allahabad'),
(16, '14', 750, 'amiksha', 'tanu12@gmail.com', '7410258963', 'up-8450', ' 2021-01-27', ' 7:15 PM', ' bangalore', ' chennai'),
(17, '7', 900, 'ritik', 'manu11@gmail.com', '9876543210', 'mp-4201', ' 2021-01-12', ' 4:00 AM', ' allahabad', ' delhi');

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `street` varchar(1000) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_management`
--

INSERT INTO `user_management` (`id`, `name`, `email`, `password`, `cpassword`, `gender`, `contact`, `street`, `city`, `state`) VALUES
(1, 'Tanu', 'tanu12@gmail.com', 'tanusunny', 'tanusunny', 'female', '7687987879', 'krishna nagar kyd gang allahabad', 'Allahabad', 'Uttar Pradesh'),
(2, 'manu', 'manu11@gmail.com', 'manu123', 'manu123', 'female', '9234567891', 'malakraj', 'Allahabad', 'Uttar Pradesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ayushi`
--
ALTER TABLE `ayushi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_management`
--
ALTER TABLE `bus_management`
  ADD PRIMARY KEY (`busid`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ritik`
--
ALTER TABLE `ritik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ritikk`
--
ALTER TABLE `ritikk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_management`
--
ALTER TABLE `route_management`
  ADD PRIMARY KEY (`routeid`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shivani`
--
ALTER TABLE `shivani`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sujit`
--
ALTER TABLE `sujit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketbooking`
--
ALTER TABLE `ticketbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_management`
--
ALTER TABLE `user_management`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access`
--
ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ayushi`
--
ALTER TABLE `ayushi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `bus_management`
--
ALTER TABLE `bus_management`
  MODIFY `busid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `ritik`
--
ALTER TABLE `ritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ritikk`
--
ALTER TABLE `ritikk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `route_management`
--
ALTER TABLE `route_management`
  MODIFY `routeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `shivani`
--
ALTER TABLE `shivani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sujit`
--
ALTER TABLE `sujit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `ticketbooking`
--
ALTER TABLE `ticketbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_management`
--
ALTER TABLE `user_management`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
