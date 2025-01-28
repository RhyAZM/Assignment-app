-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 10:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(111) NOT NULL,
  `catName` char(222) NOT NULL,
  `remark` char(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catName`, `remark`) VALUES
(6, 'Asus', 'laptop'),
(7, 'HP', 'laptop'),
(8, 'Dell', 'laptop'),
(9, 'Apple', 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(111) NOT NULL,
  `order_id` int(111) NOT NULL,
  `product_id` int(111) NOT NULL,
  `qty` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`) VALUES
(26, 17, 28, 1),
(27, 17, 31, 1),
(28, 18, 28, 1),
(29, 18, 31, 1),
(30, 19, 28, 1),
(31, 19, 31, 1),
(32, 20, 28, 1),
(33, 20, 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(111) NOT NULL,
  `description` char(111) NOT NULL,
  `price` int(111) NOT NULL,
  `category_id` int(111) NOT NULL,
  `photo` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `description`, `price`, `category_id`, `photo`) VALUES
(28, 'Asus Tuf Dash 15', 2000, 6, 'AsusTufDash15.jpg'),
(29, 'Asus Tuf Gaming F15', 2100, 6, 'AsusTufGamingF15.jpg'),
(30, 'Asus Tuf Sash 15 Gaming', 2300, 6, 'AsusTufSash15 gaming.jpg'),
(31, 'Asus Vivobook 15 X515ea', 1900, 6, 'AsusVivoBook15X515ea.jpg'),
(32, 'Asus Vivobook Pro 15', 1700, 6, 'AsusVivobookPro15.jpg'),
(33, 'Asus Zenbook 14', 2000, 6, 'AsusZenbook14.jpg'),
(34, 'Asus Zenbook Ux534fac', 2100, 6, 'AsusZenbookUx534fac.jpg'),
(35, 'ASUS ROG Strix G17', 1400, 6, 'AsusRogStrixg17.jpg'),
(39, 'HP Spectre X360 Core i7', 2100, 7, 'HP Spectre x360corei7.png'),
(40, 'HP 15S-EQ2001NE', 1700, 7, 'HP15S-EQ2001NE.png'),
(41, 'HP 17-cp0196nr', 1800, 7, 'hp17-cp0196nr.jpg'),
(42, 'HP Pavilion X360 core i5', 1900, 7, 'HPPavilionX360corei5.png'),
(43, 'HP Spectre X360 Core i5', 1800, 7, 'HPSpectrex360.jpg'),
(44, 'HP Victus Gaming', 2500, 7, 'HP Victus.png'),
(45, 'Dell G15 55511 Gaming', 2300, 8, 'DellG155511GamingLaptop.jpg'),
(46, 'Dell Inspiron 15', 2000, 8, 'DellInspiron15.jpg'),
(47, 'Dell Inspiron 3511', 2100, 8, 'DellInspiron3511.jpg'),
(48, 'Dell Inspiron 3593', 1900, 8, 'DellInspiron3593.jpg'),
(49, 'Dell Inspiron 3593 Core i7', 2100, 8, 'DellInspiron3593corei7.jpg'),
(50, 'Dell Inspiroon 15 3000', 2200, 8, 'DellInspiron153000.jpg'),
(51, 'Dell 15 FHD', 2000, 8, 'DellLaptop15FHD.jpg'),
(52, 'Dell Inspiron 15 5515', 2300, 8, 'DellNewInspiron155515.jpg'),
(53, 'Dell XPS 13', 2300, 8, 'DellXPS13.jpg'),
(54, '2020 Apple MacBook Air 13 Inch', 2000, 9, '2020AppleMacBookAir13inch.jpg'),
(55, ' 2020 Apple MacBook Air 16Inch', 2100, 9, '2020AppleMacBookAir16inch.jpg'),
(56, '2020 Apple MacBook Pro 13 Inch', 2500, 9, '2020AppleMacBookPro13inch.jpg'),
(57, '2020 Apple MacBook Pro 16 Inch', 2600, 9, '2020AppleMacBookPro16inch.jpg'),
(58, '2020 Apple MacBook Pro 14 Inch', 2700, 9, '2021AppleMacBookPro14inch.jpg'),
(59, '2020 Apple MacBook Pro 14 Inch', 2800, 9, '2021AppleMacBookPro16inch.jpg'),
(60, '2020 Apple MacBook Pro', 2000, 9, '2020AppleMacBookAir13inch.jpg'),
(63, 'Dell Inspiron', 1000, 8, 'DellInspiron3593corei7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `id` int(111) NOT NULL,
  `uid` int(111) NOT NULL,
  `order_date` date NOT NULL,
  `phone` int(111) NOT NULL,
  `address` char(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`id`, `uid`, `order_date`, `phone`, `address`) VALUES
(19, 2, '2022-03-15', 2147483647, 'Yangon'),
(20, 2, '2022-03-15', 4245452, 'Al Maidan Tower 1, Union, Dubai\r\nN/A');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(111) NOT NULL,
  `username` char(222) NOT NULL,
  `password` char(111) NOT NULL,
  `email` char(111) NOT NULL,
  `role` char(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `role`) VALUES
(1, 'Aung Zwe Mhan', '1234', 'zwemhan@gmail.com', 'admin'),
(2, 'Aung Zwe', '1234', 'aungzwe@gmail.com', 'user'),
(4, 'Zwe', '1234', 'aungzwehman26@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
