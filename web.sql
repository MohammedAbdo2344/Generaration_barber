-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 08:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone number` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `address`, `phone number`, `password`) VALUES
(1, 'mohammed2344', '1234', '01017074419', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `E-mail` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `E-mail`, `phone`, `date`, `location`) VALUES
(1, 'mohammed hassan ', 'mh2900001@gmail.com', '01017074419', '2000-12-09', 'cairo'),
(2, 'ibrahim', 'oops23@gmail.com', '01087634578', '1999-03-02', 'cairo'),
(7, 'mohammed ', 'mh2900001@gmail.com', '01087634578', '1999-12-12', 'cairo');

-- --------------------------------------------------------

--
-- Table structure for table `barbers`
--

CREATE TABLE `barbers` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone number` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barbers`
--

INSERT INTO `barbers` (`id`, `name`, `address`, `phone number`, `image`, `facebook`, `instagram`) VALUES
(1, 'Mohammed hassan ', 'October', '01017074419', '../assets/img/Barbers/1.jpg  ', 'https://www.facebook.com/boody.abdo.963/  ', 'https://www.instagram.com/mohammedabdo30/channel/  '),
(2, 'Bassel amr', 'cairo', '01028346573', '../assets/img/Barbers/3.jpg', 'https://www.facebook.com/SheTos.B', 'https://www.instagram.com/basselshalan_/'),
(3, 'Antonious Micheal  ', 'Cairo', '01064537865', '../assets/img/Barbers/2.jpg ', 'https://www.facebook.com/antonios.micheal.5 ', 'https://www.instagram.com/antonious.antony/ '),
(4, 'Ahmed Tarek ', 'october ', '01023487656', '../assets/img/Barbers/7.jpg', 'https://www.facebook.com/A7med.Megahed.98', 'https://www.instagram.com/ahmed_megahed98/');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Item name` varchar(300) NOT NULL,
  `Quantity` varchar(5) NOT NULL,
  `price` varchar(300) NOT NULL,
  `total` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hgb`
--

CREATE TABLE `hgb` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hgb`
--

INSERT INTO `hgb` (`id`, `name`, `price`, `image`) VALUES
(22, 'Sérum Extentioniste Scalp & Hair Serum\r\n\r\n', 359, '../../assets/img/Store/14.jpg'),
(23, 'The Hair Boss Scalp Scrub 150ml\r\n\r\n', 599, '../../assets/img/Store/15.png'),
(24, 'REVITA 925ML HAIR GROWTH STIMULATING CONDITIONER\r\n\r\n', 999, '../../assets/img/Store/16.png');

-- --------------------------------------------------------

--
-- Table structure for table `hrb`
--

CREATE TABLE `hrb` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hrb`
--

INSERT INTO `hrb` (`id`, `name`, `price`, `image`) VALUES
(18, 'Lab Series Instant Filter Hydrating Moisturizer\r\n\r\n', 159, '../../assets/img/Store/17.png'),
(19, 'Bulldog Energising Moisturiser 100ml\r\n\r\n', 449, '../../assets/img/Store/18.png'),
(20, 'Hanz De Fuko Claymation Hair Wax\r\n\r\n', 379, '../../assets/img/Store/19.png');

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`id`, `name`, `price`, `image`) VALUES
(14, 'Braun All-in-one trimmer MGK3245, 7-in-1 trimmer, ...\r\n\r\n', 899, '../../assets/img/Store/5.jpg'),
(15, 'Grooming Kit Black/Blue 14.5x3.9centimeter\r\n\r\n', 375, '../../assets/img/Store/6.jpg'),
(16, 'A hair dryer Rbrown 3000 Watt power - Black\r\n\r\n', 133, '../../assets/img/Store/7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oils`
--

CREATE TABLE `oils` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oils`
--

INSERT INTO `oils` (`id`, `name`, `price`, `image`) VALUES
(10, 'Pure Essential Oil\r\n\r\n', 199, '../../assets/img/Store/11.png'),
(11, 'Linalool terpene for extracts and vape\r\n\r\n', 699, '../../assets/img/Store/12.jpg'),
(12, 'Avocado, Marula, Moringa & Tsubuki Hair Growth & N...\r\n\r\n', 499, '../../assets/img/Store/13.png');

-- --------------------------------------------------------

--
-- Table structure for table `skincare`
--

CREATE TABLE `skincare` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skincare`
--

INSERT INTO `skincare` (`id`, `name`, `price`, `image`) VALUES
(1, 'Facial Cleanser', 450, '../../assets/img/Store/1.png'),
(2, 'Tightening Eye Gel', 300, '../../assets/img/Store/2.png'),
(3, 'Age Rescue Face Lotion', 170, '../../assets/img/Store/3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `name`, `price`, `image`) VALUES
(6, 'Men Straight Barber Edge Razors Folding Shaving Kn...\r\n', 399, '../../assets/img/Store/10.png'),
(8, 'Beard Grooming Kit - Trimming Shaving Brush Comb B...\r\n', 899, ' ../../assets/img/Store/8.jpg'),
(9, 'Haircutting Scissors Stainless Steel\r\n\r\n', 299, '../../assets/img/Store/9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `e-mail` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone number` varchar(100) NOT NULL,
  `date of birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `e-mail`, `address`, `phone number`, `date of birth`) VALUES
(1, 'Aboabdo2344', '1f5542dc6ea1c62f6d35786cc684262d', 'mh2900001@gmail.com', 'Cairo', '01017074419                   ', '1999-01-12'),
(59, 'mohammedabdo32', '81dc9bdb52d04dc20036dbd8313ed055', 'mohammed2344h@gmail.com', 'Cairo', '01076538762', '2000-12-02'),
(99, 'ahmed tarek1234', 'ec6a6536ca304edf844d1d248a4f08dc', 'ahmed34@gmail.com', 'October', '01017074419 ', '1999-12-12'),
(102, 'mohammed2344', '81dc9bdb52d04dc20036dbd8313ed055', 'mohammed2344', 'hadayek alahram', ' myname', '1990-12-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barbers`
--
ALTER TABLE `barbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hgb`
--
ALTER TABLE `hgb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrb`
--
ALTER TABLE `hrb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oils`
--
ALTER TABLE `oils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skincare`
--
ALTER TABLE `skincare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barbers`
--
ALTER TABLE `barbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrb`
--
ALTER TABLE `hrb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `oils`
--
ALTER TABLE `oils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `skincare`
--
ALTER TABLE `skincare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
