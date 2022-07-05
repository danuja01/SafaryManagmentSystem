-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2021 at 05:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ceylon_Safari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `c_no` int(11) NOT NULL,
  `c_fname` varchar(255) NOT NULL,
  `c_lname` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`c_no`, `c_fname`, `c_lname`, `phone_no`, `address`, `email`, `pass`, `q1`, `q2`) VALUES
(1, 'Danuja', 'Jayasuriya', 764510860, '342, kandy', 'danuja@admin.com', 'test', 'red', 'ravindu');

-- --------------------------------------------------------

--
-- Table structure for table `Binoculars`
--

CREATE TABLE `Binoculars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT './src/images/lenses/nikonh.png',
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Binoculars`
--

INSERT INTO `Binoculars` (`id`, `name`, `image`, `price`) VALUES
(1, 'Canon Binocular', './src/images/lenses/nikonh.png', 1500),
(2, 'Nikon Binocular', './src/images/lenses/nikonh.png', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `cameras`
--

CREATE TABLE `cameras` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT './src/images/Cameras/D5300.png',
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cameras`
--

INSERT INTO `cameras` (`id`, `brand`, `name`, `image`, `price`) VALUES
(1, 'Nikon', 'D5300', './src/images/Cameras/D5300.png', 550),
(2, 'Nikon ', 'D7500', './src/images/Cameras/D5300.png', 7500),
(3, 'Nikon', 'D850', './src/images/Cameras/D5300.png', 2100),
(4, 'Nikon', 'D5', './src/images/Cameras/D5300.png', 3000),
(5, 'Canon', 'EOS 80D', './src/images/Cameras/canon-6d-removebg-preview.png', 550),
(6, 'Canon', 'EOS 6D', './src/images/Cameras/canon-6d-removebg-preview.png', 750),
(7, 'Canon', 'EOS 5D', './src/images/Cameras/canon-6d-removebg-preview.png', 2100),
(8, 'Canon', 'EOS 1DX', './src/images/Cameras/canon-6d-removebg-preview.png', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `camping`
--

CREATE TABLE `camping` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camping`
--

INSERT INTO `camping` (`id`, `category`, `name`, `price`, `image`) VALUES
(1, 'Tents', 'Outsunny 1-2 man camping dome', 500, './src/images/camping/tent1.png'),
(2, 'Tents', 'Portable top up tent outdoor camping toilet', 420, './src/images/camping/tent1.png'),
(3, 'Tents', ' sun shade windproof camping tent', 650, './src/images/camping/tent1.png'),
(6, 'bags', '30L/40L/50L Military tacticak army ruckstack backpack\r\n', 550, './src/images/camping/H90b30d608b31492c9f1321527a2d7102S.jpg'),
(7, 'bags', 'Waterproof backpack 35L/75L bag Camping Hiking', 420, './src/images/camping/H90b30d608b31492c9f1321527a2d7102S.jpg'),
(8, 'bags', 'Rucksack Luggage Festival Travel Bag UK', 650, './src/images/camping/H90b30d608b31492c9f1321527a2d7102S.jpg'),
(10, 'cooking', 'Outdoor 8 Wicks Kerosene Burner Stove', 250, './src/images/camping/61c0QfYKrxL_AC_SX425_.jpg'),
(11, 'cooking', 'Cooking Picnic Bowl Pot Pan Set Portabl', 1250, './src/images/camping/61c0QfYKrxL_AC_SX425_.jpg'),
(12, 'cooking', ' BBQ Grill Picnic Camping Outdoor Stove\r\n', 750, './src/images/camping/61c0QfYKrxL_AC_SX425_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_no` int(11) NOT NULL,
  `c_fname` varchar(20) NOT NULL,
  `c_lname` varchar(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `q1` varchar(20) NOT NULL,
  `q2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_no`, `c_fname`, `c_lname`, `phone_no`, `address`, `email`, `pass`, `q1`, `q2`) VALUES
(17, 'Danuja', 'Jayasuriya', '0764510860', '', 'todanuja01@gmail.com', 'test', 'kingswood', 'spider man'),
(18, 'Yasiru', 'Jayasinghe', '0764510860', '', 'yasiru@gmail.com', '7288edd0fc3ffcbe93a0cf06e3568e28521687bc', 'kingswood', 'spider man'),
(19, 'Oshada', 'Thawalampola', '0764510860', '', 'od@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'kingswood', 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `Destinations`
--

CREATE TABLE `Destinations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Destinations`
--

INSERT INTO `Destinations` (`id`, `name`, `price`) VALUES
(1, 'Yala National Park', 3000),
(2, 'Wasgamuwa National Park', 3000),
(3, 'Willpattu National Park', 3000),
(4, 'Udawalawe National Park ', 3000),
(5, 'Gal Oya National Park', 3000),
(6, 'Kaudulla National Park', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `drones`
--

CREATE TABLE `drones` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drones`
--

INSERT INTO `drones` (`id`, `name`, `price`, `image`) VALUES
(1, 'DJI Phantom 3', 1500, './src/images/Drones/DJI Mavic pro.png'),
(2, 'DJI Phantom 4', 2100, './src/images/Drones/DJI Mavic pro.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Full_Name` varchar(50) NOT NULL,
  `Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Full_Name`, `Feedback`) VALUES
('danuja jayasuriya', 'wow! Absolutely stunning website and very user-friendly UI, Booked my safari through website and it was wonderful!'),
('Prashan Kumara', 'Excellent Service!Had a great vacation with Ceylon Safari! Highly Recommended! '),
('Chehan Weerasinghe', 'All un one place! Excellent Service! '),
('Oshada Thawalampola', 'Great work guys! had a wonderful trip!'),
('Yasiru Jayasinghe', 'wow');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL,
  `facilities` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `price`, `image`, `facilities`) VALUES
(1, 'Semi-Luxury', 10000, './img/semi-luxury.jpg', 'Basic Facilities,\r\nSpecial Safety and hygiene,\r\nBeauty and spa, \r\nEntertainment'),
(2, 'Luxury', 18000, './img/Luxury-Room.jpg', 'Basic Facilities,\r\nSpecial Safety and hygiene,\r\nBeauty and spa, \r\nEntertainment'),
(3, 'Super-Luxury', 30000, './img/super luxury.jpg', 'Basic Facilities,\r\nSpecial Safety and hygiene,\r\nBeauty and spa, \r\nEntertainment');

-- --------------------------------------------------------

--
-- Table structure for table `jeeps`
--

CREATE TABLE `jeeps` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `options` varchar(255) NOT NULL,
  `imgsrc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jeeps`
--

INSERT INTO `jeeps` (`id`, `name`, `price`, `options`, `imgsrc`) VALUES
(1, 'Toyota Hilux', 7500, '6 Seater,\r\n4 x 4,\r\nHeavy Duty Rubber Tires,\r\nUpdated shock and suspension,\r\nIncreased ground clearance,\r\nWinch', './src/images/vehicles/toyota-hilux-tonnka-concept-8th-gen-100.jpg'),
(2, 'LC Defender', 9000, '7 Seater,\r\n4 x 4,\r\nA snorkel that can handle deep water,\r\nIncreased ground clearance,\r\nRoof Rack,\r\nCool Box,', './src/images/vehicles/land-rover-defender-land-rover-defender-110-wallpaper-preview.jpg'),
(3, 'Jeep Wrengler', 11000, '6 Seater,\r\n4 x 4,\r\nBDS Suspension systems,\r\nHeavy Duty Rubber Tires,\r\nIncreased groundclearancee,\r\nWinch,', './src/images/vehicles/01-overland-jeep-2010-jk-offroad-4x4-adventure-metalcloak-mamba-kc-toyo-dick-cepek-rausch-creek-action4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lenses`
--

CREATE TABLE `lenses` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT './src/images/lenses/n400tele.png',
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lenses`
--

INSERT INTO `lenses` (`id`, `brand`, `name`, `image`, `price`) VALUES
(1, 'Nikon', '70-300mm', './src/images/lenses/n400tele.png', 550),
(2, 'Nikon', '200-600mm', './src/images/lenses/n400tele.png', 750),
(3, 'Nikon', '400mm(tele)', './src/images/lenses/n400tele.png', 2100),
(4, 'Nikon', '600m(tele)', './src/images/lenses/n400tele.png', 3000),
(5, 'Canon', '70-300mm', '/src/images/lenses/canon 200-600.png', 550),
(6, 'Canon', '200-600mm', '/src/images/lenses/canon 200-600.png', 750),
(7, 'Canon', '400mm(tele)', '/src/images/lenses/canon 200-600.png', 2100),
(8, 'Canon', '600mm(tele)', '/src/images/lenses/canon 200-600.png', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_address` varchar(255) NOT NULL,
  `d_email` varchar(255) NOT NULL,
  `card_no` int(11) NOT NULL,
  `exp` date NOT NULL,
  `ccv` int(11) NOT NULL,
  `total` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `d_name`, `d_address`, `d_email`, `card_no`, `exp`, `ccv`, `total`) VALUES
(24, 'Danuja Jayasuriya', 'No. 342, Daulagala Road , Angunawala, Peradeniya', 'Senaka Warnskumara', 333, '2022-10-11', 111, '15900'),
(25, 'Danuja Jayasuriya', 'No. 342, Daulagala Road , Angunawala, Peradeniya', 'todanuja01@gmail.com', 12332435, '2022-10-11', 111, '19000'),
(26, 'Danuja Jayasuriya', 'No. 342, Daulagala Road , Angunawala, Peradeniya', 'todanuja01@gmail.com', 234566677, '2022-09-10', 111, '45300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Binoculars`
--
ALTER TABLE `Binoculars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cameras`
--
ALTER TABLE `cameras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camping`
--
ALTER TABLE `camping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_no`);

--
-- Indexes for table `Destinations`
--
ALTER TABLE `Destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drones`
--
ALTER TABLE `drones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jeeps`
--
ALTER TABLE `jeeps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lenses`
--
ALTER TABLE `lenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Binoculars`
--
ALTER TABLE `Binoculars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cameras`
--
ALTER TABLE `cameras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `camping`
--
ALTER TABLE `camping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Destinations`
--
ALTER TABLE `Destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drones`
--
ALTER TABLE `drones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jeeps`
--
ALTER TABLE `jeeps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lenses`
--
ALTER TABLE `lenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
