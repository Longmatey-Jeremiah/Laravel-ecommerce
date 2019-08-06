-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2019 at 02:44 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finix`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` varchar(100) NOT NULL,
  `brand_cat` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`, `brand_cat`) VALUES
(1, 'Apple', 1),
(2, 'Samsung', 1),
(5, 'Nokia', 1),
(6, 'Tecno', 1),
(9, 'Nike', 7),
(10, 'Adidas', 7),
(12, 'Gucci', 6),
(13, 'Hp', 2),
(18, 'Fila', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(31, 2, 0, 1, 'Samsung A50', 'samsunga50.JPG', 1, 250, 250),
(32, 1, 0, 1, 'Iphone X', 'iphonex.JPG', 1, 800, 800),
(33, 3, 0, 1, 'HP Envy', 'hpenvy.JPG', 1, 590, 590),
(34, 4, 0, 1, 'Hp Omen', 'hpomen.JPG', 1, 1600, 1600),
(35, 8, 0, 1, 'Nokia 7.1', 'nokia7.1.JPG', 1, 150, 150),
(36, 7, 0, 1, 'Nokia 9', 'nokia9.JPG', 1, 200, 200),
(37, 6, 0, 1, 'Nike Air 270 ', 'nikeam2.JPG', 1, 26, 26),
(38, 5, 0, 1, 'Nike Airmax', 'nikeamx.JPG', 1, 25, 25),
(39, 9, 0, 1, 'Adidas Strip ', 'adidasstrip.JPG', 1, 9, 9),
(40, 10, 0, 1, 'Gucci Fat', 'guccifat.JPG', 1, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(100) NOT NULL,
  `category_title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Mobile Phones'),
(2, 'Laptops'),
(5, 'Men\'s Fashion'),
(6, 'Women\'s Fashion'),
(7, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` varchar(200) NOT NULL,
  `product_brand` varchar(200) NOT NULL,
  `product_title` varchar(2000) NOT NULL,
  `product_img` varchar(200) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_keywords` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_img`, `product_price`, `product_desc`, `product_keywords`) VALUES
(1, '1', '1', 'Iphone X', 'iphonex.JPG', 800, '', 'Apple,Iphone,Iphone X,Apple iphone x'),
(2, '1', '2', 'Samsung A50', 'samsunga50.JPG', 250, '', 'Samsung,Samsung A50,A50'),
(3, '2', '13', 'HP Envy', 'hpenvy.JPG', 590, '', 'Hp,Hp envy,hp laptop,laptop,laptops,hp laptops'),
(4, '2', '13', 'Hp Omen', 'hpomen.JPG', 1600, '', 'Hp Omen,Omen,Hp,Hp laptops,laptops,laptop,\r\nGaming laptops'),
(5, '5', '9', 'Nike Airmax', 'nikeamx.JPG', 25, '', 'Nike,Airmax,Nike Airmax,Nike Shoes,Shoes,\r\nMen\'s fashion,fashion,men\'s fashion'),
(6, '5', '9', 'Nike Air 270 ', 'nikeam2.JPG', 26, '', 'Nike,Air,Nike Air,Nike Shoes,Shoes,\r\nMen\'s fashion,fashion,men\'s fashion'),
(7, '1', '5', 'Nokia 9', 'nokia9.JPG', 200, '', 'Nokia,Nokia 9,Nokia,Nokia phones,Mobile Phones,Smartphones'),
(8, '1', '5', 'Nokia 7.1', 'nokia7.1.JPG', 150, '', 'Nokia,Nokia 9,Nokia,Nokia phones,Mobile Phones,Smartphones'),
(9, '7', '10', 'Adidas Strip ', 'adidasstrip.JPG', 9, '', 'Adidas,Adidas jerseys,jerseys,Adidas strip,Adidas sportswear'),
(10, '6', '12', 'Gucci Fat', 'guccifat.JPG', 6, '', 'Gucci,gucci for ladies,gucci fat,clothing,fashion'),
(11, '5', '18', 'Fila Logo', 'filalogo.JPG', 5, '', 'Fila,Fila men\'s wear,fila fashion,fila logo men\'s fashion ,men\'s wear'),
(12, '5', '18', 'Fila Dis', 'filadismen.JPG', 18, '', 'Fila,Fila men\'s wear,fila fashion,fila logo men\'s fashion ,men\'s wear,fila shoes ,shoes,men\'s category,fila men\'s shoes');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Jerry', 'Longmatey', 'longmateyjeremiah1@gmail.com', '$2y$10$QBLvLNjJfEDKnAk75hKsauG8Oua0xEvUdlP8ibkqlDtG9ToCpeX2C', 1234567899, 'Hanna', 'Kpone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
