-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 07:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electromart3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `aimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_id` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `piamge` varchar(255) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `pquantity` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`order_id`, `uname`, `pname`, `piamge`, `pprice`, `pquantity`) VALUES
(1, '', '[value-1]', '[value-2]', '[value-3]', '[value-4]'),
(2, '', '[value-1]', '[value-2]', '[value-3]', '[value-4]'),
(3, '', 'Triple Door Fridge', '', '50000', '1'),
(4, '', 'Triple Door Fridge', '', '50000', '1'),
(5, '', 'Triple Door Fridge', '', '50000', '1'),
(6, '', 'Inverter Split 3 Star AC', '', '33990', '1'),
(7, '', 'Apple iPhone', '', '62000', '1'),
(8, '', 'Bluetooth Headphone', '', '1399', '1'),
(9, '', 'Wired Earphones', '', '299', '1'),
(10, '', 'TV Vedio Game', '', '1499', '1'),
(11, '', 'Bluetooth Headphone', '', '1399', '1'),
(12, '', 'Bluetooth Headphone', '', '1399', '1'),
(13, '', 'Bluetooth Headphone', '', '1399', '1'),
(14, '', 'TV Vedio Game', '', '1499', '1'),
(15, '', 'Bluetooth Headphone', '', '1399', '1'),
(16, '', 'TV Vedio Game', '', '1499', '1'),
(17, 'himanshi', 'Bluetooth Headphone', '', '1399', '1'),
(18, 'himanshi', 'TV Vedio Game', '', '1499', '1'),
(19, 'rashi', '4k Ultra TV', '', '34999', '1'),
(20, 'rashi', '1.5 Ton Portable 5 Star Ac', '', '36990', '1'),
(21, 'rashi', 'Triple Door Fridge', '', '50000', '1'),
(22, 'rashi', '4k Ultra TV', '', '34999', '1'),
(23, 'rashi', '1.5 Ton Portable 5 Star Ac', '', '36990', '1'),
(24, 'rashi', 'Triple Door Fridge', '', '50000', '1'),
(25, 'rashi', '4k Ultra TV', '', '34999', '1'),
(26, 'rashi', '1.5 Ton Portable 5 Star Ac', '', '36990', '1'),
(27, 'rashi', 'Triple Door Fridge', '', '50000', '1'),
(28, 'rashi', '4k Ultra TV', '', '34999', '1'),
(29, 'rashi', '1.5 Ton Portable 5 Star Ac', '', '36990', '1'),
(30, 'rashi', 'Triple Door Fridge', '', '50000', '1'),
(31, 'rashi', '4k Ultra TV', '', '34999', '1'),
(32, 'rashi', '1.5 Ton Portable 5 Star Ac', '', '36990', '1'),
(33, 'rashi', 'Triple Door Fridge', '', '50000', '1'),
(34, 'rashi', '4k Ultra TV', '', '34999', '1'),
(35, 'rashi', '1.5 Ton Portable 5 Star Ac', '', '36990', '1'),
(36, 'rashi', 'Triple Door Fridge', '', '50000', '1'),
(37, 'rashi', '4k Ultra TV', '', '34999', '1'),
(38, 'rashi', '1.5 Ton Portable 5 Star Ac', '', '36990', '1'),
(39, 'rashi', 'Triple Door Fridge', '', '50000', '1'),
(40, 'radhika', 'Inverter Split 3 Star AC', '', '33990', '1'),
(41, 'radhika', 'Mixer Grinder', '', '2239', '1'),
(42, 'radhika', 'Windows Laptop', '', '52990', '1'),
(43, 'radhika', 'Inverter Split 3 Star AC', '', '33990', '1'),
(44, 'radhika', 'Mixer Grinder', '', '2239', '1'),
(45, 'radhika', 'Windows Laptop', '', '52990', '1'),
(46, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(47, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(48, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(49, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(50, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(51, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(52, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(53, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(54, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(55, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(56, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(57, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(58, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(59, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(60, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(61, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(62, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(63, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(64, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(65, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(66, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(67, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(68, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(69, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(70, 'himanshi', 'Inverter Split 3 Star AC', 'ac-3.png', '33990', '1'),
(71, 'himanshi', 'Laser Printer', 'laserprinter-1.png', '16549', '1'),
(72, 'himanshi', 'Razer Blade 14 Gaming Laptop', 'gaminglaptop-2.png', '299999', '1'),
(73, 'radhika', 'Razer Blade 14 Gaming Laptop', 'gaminglaptop-2.png', '299999', '1'),
(74, 'radhika', 'DSLR Camera', 'dslrcamera1.png', '61448', '1'),
(75, 'radhika', 'TV Vedio Game', 'tvvediogame-1.png', '1499', '1'),
(76, 'himanshi', 'Skyball Partybox 600 Speaker', 'multimediaspeaker-1.png', '1101', '1'),
(77, 'himanshi', 'Double Door Fridge', 'fridgedouble-2.png', '30000', '1'),
(78, 'himanshi', 'Headphone', 'headphone-1.png', '1297', '1'),
(79, 'himanshi', 'Bluetooth Headphone', 'blueheadphone-1.png', '1399', '1'),
(80, 'himanshi', 'Hand Blender', 'handblender-1.png', '849', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `cimage`) VALUES
(1, 'Television & Accessories', '4ktv1.png'),
(2, 'Home Appliances', 'fridgedouble-2.png'),
(3, 'Phone and Wearables', 'iphone-2.png'),
(4, 'Computers and Tablets', 'macbook-2.png'),
(5, 'Gaming Accessories', 'gaminglaptop-5.png'),
(6, 'Kitchen Appliances', 'juicer2.png'),
(7, 'Camera', 'mirrorlesscamera-1.png'),
(8, 'Speakers', 'smartspeaker-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `orderid` int(125) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`orderid`, `fname`, `lname`, `email`, `mobile`, `address1`, `address2`, `pincode`, `city`, `district`, `state`) VALUES
(1, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', 'rajkot', 'gondal'),
(2, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', 'rajkot', 'gondal'),
(3, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', 'rajkot', 'gondal'),
(4, '', '', '', '', '', '', 0, '', '', ''),
(5, '', '', '', '', '', '', 0, '', '', ''),
(6, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(7, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(8, '', '', '', '', '', '', 0, '', '', ''),
(9, '', '', '', '', '', '', 0, '', '', ''),
(10, '', '', '', '', '', '', 0, '', '', ''),
(11, '', '', '', '', '', '', 0, '', '', ''),
(12, '', '', '', '', '', '', 0, '', '', ''),
(13, 'sapariya', 'himasnhi', 'hhsapariya5@gmail.com', '948492747', 'rajkot', 'kuvadava road', 360003, 'jamnagar', 'gondal', 'gujarat'),
(14, 'sapariya', 'himasnhi', 'hhsapariya5@gmail.com', '948492747', 'rajkot', 'kuvadava road', 360003, 'jamnagar', 'gondal', 'gujarat'),
(15, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(16, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(17, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(18, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(19, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(20, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(21, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(22, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(23, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(24, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(25, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(26, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', 'msnas', 'gondal'),
(27, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', 'rse', 'gfeondal'),
(28, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', 'rse', 'gfeondal'),
(29, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', 'rse', 'gfeondal'),
(30, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', 'rse', 'gfeondal'),
(31, 'hwdewk', '', 'jhwhke@gmail.com', '', 'mjehdw', '', 0, 'jhedkw', '', ''),
(32, 'meesah', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(33, 'meesah', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(34, 'meesah', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(35, 'rashi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(36, 'rashi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(37, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(38, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(39, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(40, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(41, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(42, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(43, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(44, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(45, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(46, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(47, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(48, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(49, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(50, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(51, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(52, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal'),
(53, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', '02739184231', 'rajkot', 'gondal', 360003, 'rajkot', '', 'gondal');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`firstname`, `lastname`, `subject`, `message`) VALUES
('hiamsnhi', 'sapariya', 'hello', 'hello himanshi sapariya'),
('hiamsnhi', 'sapariya', 'hello', 'hello himanshi sapariya'),
('', '', '', ''),
('hiamsnhi', 'sapariya', 'hjk', 'mjhjfawe'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('himanshi', 'sapariya', 'hello', 'hello himanshi\r\n'),
('himanshi', 'sapariya', 'hello', 'hello himanshi\r\n'),
('himanshi', 'sapariya', 'himanshi', 'sapariya'),
('himanshi', 'sapariya', 'himanshi', 'sapariya'),
('himanshi', 'sapariya', 'hello', 'himanshi');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(252) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fname`, `lname`, `email`, `subject`, `message`) VALUES
(1, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', 'hyy', 'hello himanshi'),
(2, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', 'radhe', 'krishna'),
(3, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', 'radhe', 'krishna'),
(4, '', '', '', '', ''),
(5, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', 'hello', 'mnkfae'),
(6, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', 'hello', 'bca'),
(7, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', 'hello', 'bca'),
(8, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', 'kiljdgklf', 'jknkdncks'),
(10, 'himanshi', 'sapariya', 'himanshisapariya@gmail.com', 'dada', 'cfsfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `cid` int(30) NOT NULL,
  `sid` int(30) NOT NULL,
  `pid` int(30) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`cid`, `sid`, `pid`, `pname`, `pimage`, `qty`, `description`, `price`, `brand`) VALUES
(1, 1, 1, '4k Ultra TV', '8kultratv-1.png', '20', ' 139 cm (55 inches) 4K Ultra HD Smart LED Google TV 55C350MP (Silver)', '34999', 'Sony'),
(1, 1, 2, '8k Ultra TV', '8kultratv-2.png', '15', 'Sony 139 cm (55 inches) Tornado Series 8K Ultra HD Smart QLED TV 55E7K PRO (Dark Grey)', '44000', 'Sony'),
(1, 1, 3, 'Smart TV', 'smarttv-2.png', '16', 'Samsung 101 cm (40 inches) Bezel-Less S Series Full HD Smart Android LED TV 40S5400A (Black)', '50000', 'Samsung'),
(1, 2, 4, '4k Ultra Projector', 'hdprojector-1.png', '45', 'Sony MovieTime 1080p Full HD Projector for Home 4K Support, 12000 Lumens Highest Brightness Android Projector WiFi Bluetooth YouTube & Other Builtin Apps Mobile Display Portable Projector For Home Cinema', '29990', 'Sony'),
(1, 2, 5, 'Full HD Projector', 'hdprojector2.png', '34', 'Sony TH575 4K Compatible Full HD Home Cinema Projector 3800 ANSI lumens, Excellent 1.07 Billion Colors, Upto 200inches Screen Size,16ms Low Input Lag,10W Chamber Speaker, HDMI,Inbox Amazon Fire Stick', '68989', 'Sony'),
(2, 3, 6, 'Top Load Washing Machine', 'washingtop2.png', '23', 'Lg 6 Kg 5 Star Fully-Automatic Top Load Washing Machine ( NA-F60LF1HRB, Grey, Durable Metal Body, 8 Wash Program, Aquabeat wash technology, One touch smart wash, 2023 model)', '20000', 'LG'),
(2, 3, 7, 'Front Load Washing Machine', 'washingfront1.png', '34', 'Lg 3-In-1 8.5 Kg/6.5 Kg/2.5 Kg Inverter Washer Dryer Refresh Front Load (Executive Zxm, Mocha)', '57540', 'LG'),
(2, 3, 8, 'Smart Washing Machine', 'wachinefront-2.png', '5', 'LG 7.5 Kg 5 Star Smart Inverter Fully-Automatic Top Load Washing Machine (T75SKMB1Z, Middle Black, TurboDrum | Smart Motion)', '18873', 'LG'),
(2, 4, 9, 'Inverter Split 3 Star AC', 'ac-3.png', '15', 'Philips 1.5 Ton 4 Star 4 Way Swing, Inverter Split AC (Copper, 5 in 1 Convertible Cooling, Anti-Corrosive blue fins, 2023 Model, AC 1.5T EI 18PINV4R32-WWP,', '33990', 'Philips'),
(2, 4, 10, '1.5 Ton Portable 5 Star Ac', 'ac-2.png', '16', 'Philips 1.5 Ton 5 Star DUAL Inverter Window AC (Copper, Convertible 4-in-1 cooling, RW-Q18WUZA, 2023 Model, HD Filter with Anti-Virus Protection, White)', '36990', 'Philips'),
(2, 5, 11, 'Single Door Fridge', 'fridgesingle-1.png', '23', 'Lg 183 L 4 Star Digital Inverter Direct Cool Single Door Refrigerator (RR20C1724CU/HL, Camellia Blue 2023 Model)', '15980', 'LG'),
(2, 5, 12, 'Double Door Fridge', 'fridgedouble-2.png', '23', 'Samsung 653 L Frost Free Convertible 5In1, Digital Inverter Wi-Fi Enabled Side by Side Refrigerator (RS76CG8003S9HL, Refined Inox 2023 Model)', '30000', 'Samsung'),
(2, 5, 13, 'Triple Door Fridge', 'fridgetriple-2.png', '23', 'LG 240 L Frost Free Multi-Door Refrigerator(FP 263D Protton Roy, Alpha Steel)', '50000', 'Lg'),
(2, 6, 14, 'Desert Air Cooler', 'desertcooler-2.png', '23', 'Bajaj 70 Liters Desert Air Cooler with Fast Cooling Technology, 2 year warranty, 40 square meters coverage, 4800 CMH, Inverter compatible, 4 way air deflection and Ice Box', '10560', 'Bajaj'),
(2, 6, 15, 'Smart Air Cooler', 'smartcooler-2.png', '23', 'Bajaj Air Cooler for Home, 107CM Tower Cooler w/ 3 Speeds & 4 Modes, 12H Timer, LED Touch Screen, 4L Water Tank, Remote, 4 Ice Packs, 80W Low Power Consumption Evaporative Air Cooler for Room', '15000', 'Bajaj'),
(3, 7, 16, 'Android Phone', 'androidphone-2.png', '23', 'Xiomi M34 5G (Prism Silver, 8GB, 128GB Storage) | 120Hz sAMOLED Display | 50MP Triple No Shake Cam | 6000 mAh Battery | 16GB RAM with RAM Plus | Android 13 | Without Charger', '15000', 'Xiomi'),
(3, 7, 17, 'Apple iPhone', 'iphone-1.png', '23', 'Apple iPhone 14 (128 GB) - Red', '62000', 'Apple'),
(3, 8, 18, 'Headphone', 'headphone-1.png', '23', 'JBL Tranz 710, 72 Hrs Playtime with Quick Charge, Wireless On Ear Headphone with Mic, Deep Bass, Dual Equalizer, Bluetooth 5.0 with Voice Assistant Support (Black)', '1297', 'JBL'),
(3, 8, 19, 'Bluetooth Headphone', 'blueheadphone-1.png', '23', 'JBL Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Luscious Red)', '1399', 'JBL'),
(3, 9, 20, 'Wired Earphones', 'bluetooth.png', '23', 'Bluetooth On Ear Headphones with Mic, Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions, Integrated Controls and Dual Modes(Luscious Black)', '299', 'JBL'),
(3, 9, 21, 'Bluetooth Earphone', 'bluetoothheadphone-1.png', '23', 'JBL Buds VS201 V3 in-Ear Truly Wireless Earbuds with 60H of Playtime, Dual Equalizer, Full Touch Control, Mic, BTv5.1 (Forest Green)', '896', 'JBL'),
(4, 10, 22, 'Windows Laptop', 'laptopwindows-1.png', '23', 'Lenovo IdeaPad Slim 3 Intel Core i5 12th Gen 15.6\" (39.62cm) FHD Thin & Light Laptop (16GB/512GB SSD/Windows 11/Office 2021/Backlit/2Yr Warranty/3months Game Pass/Arctic Grey/1.63Kg), 82RK00LXIN', '52990', 'Lenovo'),
(4, 10, 23, 'Macbook', 'macbook-1.png', '23', 'Apple 2022 MacBook Air Laptop with M2 chip: 34.46 cm (13.6-inch) Liquid Retina Display, 8GB RAM, 256GB SSD Storage, Backlit Keyboard, 1080p FaceTime HD Camera. Works with iPhone/iPad; Starlight', '90000', 'Apple'),
(4, 11, 24, 'Inkject Printer', 'injectprinter-2.png', '23', 'Canon PIXMA MG2577s All in One (Print, Scan, Copy) Inkjet Colour Printer for Home\r\n', '3289', 'Canon'),
(4, 11, 25, 'Laser Printer', 'laserprinter-1.png', '23', 'Canon Laserjet 136w Compact Monochrome Multifunction Printer with Direct Wi-Fi (Print, Scan, Copy)', '16549', 'Canon'),
(5, 12, 26, 'Razer Blade 14 Gaming Laptop', 'gaminglaptop-2.png', '23', 'Razer Blade 15 Gaming Laptop: NVIDIA GeForce RTX 3070-11th Gen Intel 8-Core i7 CPU - 15.6” QHD 240Hz - 16GB RAM - 1TB SSD - Windows 11 - CNC Aluminum - Chroma RGB - THX Spatial Audio', '299999', 'Asus'),
(5, 12, 27, 'Acer Predator Helios 16', 'gaminglaptop-razer-1.png', '23', 'Gaming Laptop, Acer Predater Helios 7840HS 40.9 cm (16.1inch) FHD, 165hz, 7ms Response time(16GB DDR5, 512 GB SSD)/ NVIDIA® GeForce RTX™ 4060/ B&O/Backlit Kb/Win 11/MSO, 16-xf0060AX', '125000', 'Asus'),
(5, 13, 28, 'TV Vedio Game', 'tvvediogame-1.png', '23', 'Classic Arcade Gaming Console for Tv Video Games with Trendy 8 Bit Games Build in More Games with 1 Extra Cassette', '1499', 'Xiomi'),
(6, 14, 29, 'Pop Up Toaster', 'popuptoaster-1.png', '23', 'Philips FT 900W BK 900-Watt 2-Slice Pop-up Toaster (Black)', '1680', 'Philips'),
(6, 14, 30, 'Sandwich Maker', 'sandwichmaker1.png', '23', 'Prestige Sandwich Maker (PGMFD Designer)| Black | Heat Resistant Bakelite Body | German Technology Greblon Non-Stick Coating | Power Indicators | Oil Free Toasting | 800W', '1099', 'Prestige'),
(6, 15, 31, 'Coffee Maker', 'coffemaker-2.png', '23', 'Nescafe Richards Europa Drip 600-Watt 6-cup Drip Coffee Maker, Gloss Black, Regular (350012)', '2100', 'Nescafe'),
(6, 15, 32, 'Electric Kettle', 'kettle.png', '23', 'Prestige Basics 1500W Electric Kettle (Stainless Steel body, 1.5L)', '663', 'Prestige'),
(6, 16, 33, 'Hand Blender', 'handblender-1.png', '32', 'Bose Hand Blender with Stainless Steel Stem for Hot/Cold Blending and In-Built Cord Hook, ISI-Marked, Black', '849', 'Bose'),
(6, 16, 34, 'Mixer Grinder', 'mixergrinder-1.png', '32', 'Prestige Mixer Grinder (5 Jars, 3 Blades, Blue)', '2239', 'Prestige'),
(7, 17, 35, 'Drone Camera', 'dronecamera2.png', '32', 'Canon Best Choice Wi-Fi Selfie Gesture Foldable Camera Drone with 1800mAh Battery - 360 Flip Headless Mode RC Selfie Camera Quadcopter Toy, Multicolor', '4899', 'Canon'),
(7, 18, 36, 'Full Frame Camera', 'fullframecamera-2.png', '23', 'Sony Alpha ILCE-7C Compact Full Frame Camera (4K, Flip Screen, Light Weight, Real time Tracking, Content Creation, 3 Optical Zoom) - Black', '147899', 'Sony'),
(7, 18, 37, 'DSLR Camera', 'dslrcamera1.png', '23', 'Sony Alpha ZV-E10L 24.2 Mega Pixel Interchangeable-Lens Mirrorless vlog Camera with 16-50 mm Lens, Made for Creators (APS-C Sensor, Advanced Autofocus, Clear Audio, 4K Movie Recording) - Black, Compact', '61448', 'Sony'),
(8, 19, 38, 'Skyball Partybox 600 Speaker', 'multimediaspeaker-1.png', '23', 'Multimedia PC Gaming Speaker with Aux Connectivity, USB Support, Volume Control, and RGB Lights', '1101', 'Bose'),
(8, 19, 39, 'Audio MMS2625B', 'multimediaspeaker-2.png', '38', 'Multimedia Speaker| Suitable for Laptop & Desktop (Blue) | USB 2.0 | Deep Bass', '600', 'Bose'),
(8, 20, 40, 'Echo Dot Smart Speaker', 'smartspeaker-6.png', '89', 'Echo Dot (4th Gen, Blue) with combo with Wipro 9W LED smart color Bulb', '5000', 'JBL'),
(8, 20, 41, 'Infinity Bluetooth Speaker 5.0', 'smartspeaker-2.png', '22', 'JBL Bluetooth 9W Speaker, with TWS Function, Powerful Bass, BT 5.1, MicroSD Card Slot, RGB Lights, AUX Input, USB Support, and in-Built Noise Cancelling Mic (Grey)', '799', 'JBL'),
(5, 3, 43, 'kmflw', 'gaminglaptop-razer-1.png', '3', 'anything', '40000', 'canon'),
(12, 2, 45, 'light', 'gdada.jpeg', '7', 'wjdq', '30000', 'sony');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `uid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`uid`, `name`, `email`, `mobno`, `password`, `address`) VALUES
(1, 'admin', 'himanshisapariya@gmail.com', '9714053874', '$2y$10$3uL8iI8SXn4.oNb8B7IMnu7Yn77c6IC/S/6hw19TESpNbGysVYpQe', 'rajkot'),
(2, 'himanshi', 'saariya@gmail.com', '9714053874', '$2y$10$f9eKKP5AwdIlUdrDS6nKkOO6QF0XDWtLaKpPOrPjTU8jkTw3iEGNG', 'rajkot'),
(3, 'rashi', 'mak@gmail.com', '8329337465', '$2y$10$MsB4BWEq.2OHOf/nRlESoO0Y7KOXebgOZpyV8UHC3frymgqwXI9oK', 'gondal'),
(4, 'radhika', 'radha@gmail.com', '4173805736', '$2y$10$1/4BwJTuaVYITAbfQIPafuKOPHYDud6sNlpi/e0GI2UDhnNmVQWh.', 'gondal');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `cid` int(255) NOT NULL,
  `sid` int(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `simage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`cid`, `sid`, `sname`, `simage`) VALUES
(1, 1, 'LED TV', '4ktv2.png'),
(1, 2, 'Projector', 'ultraprojector-1.png'),
(2, 3, 'Washing Machine', 'washingtop1.png'),
(2, 4, 'Air Conditioner', 'ac4.png'),
(2, 5, 'Refridgerator', 'fridgetriple-1.png'),
(2, 6, 'Air Cooler', 'smartcooler-2.png'),
(3, 7, 'Mobile Phone', 'iphone-1.png'),
(3, 8, 'Headphones', 'headphone-2.png'),
(3, 9, 'Earphone', 'earphone2.png'),
(4, 10, 'Laptop', 'homelaptop.png'),
(4, 11, 'Printer', 'laserprinter-2.png'),
(5, 12, 'Gaming Laptop ', 'gaminglaptop-6.png'),
(5, 13, 'TV Video Game', 'tvvediogame-1.png'),
(6, 14, 'Toster and Sandwich Maker', 'sandwichmaker1.png'),
(6, 15, 'Beverage Maker', 'coffeemaker-1.png'),
(6, 16, 'Food Preparation Appliances', 'mixer2.png'),
(7, 17, 'Drone Camera', 'dronecamera1.png'),
(7, 18, 'Proffessional Camera', 'mirrorlesscamera-2.png'),
(8, 19, 'Multimedia Speaker', 'multimediaspeaker-5.png'),
(8, 20, 'Smart Speaker', 'smartspeaker-4.png'),
(9, 22, 'admin', 'gdada.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `adminname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adminimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`adminname`, `password`, `adminimage`) VALUES
('himanshi', 'mak1548', ''),
('drashti', 'food', ''),
('alefiya', 'aaloo', ''),
('janvi', 'viren', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `orderid` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
