-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 11:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(3, 'latifah', 'bc2791b967a5f4ac12d7b531dcec80ad5fafa881');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(9, 2, 31, 'PoChick with Cream Sauce', 31000, 1, 'main-2.png'),
(21, 1, 5, 'Chocolate Tiramissu', 20000, 1, 'dessert-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(6, 1, 'latifah', '123', 'latifah@gmail.com', 'cash on delivery', '2, 4, Sigura gura, Lowokwaru, Malang, Jawa Timur, Indonesia - 12345', 'Chicken Burger (35000 x 1) - Beef Burger (45000 x 1) - ', 80000, '2022-12-09', 'completed'),
(8, 1, 'latifah', '123', 'latifah@gmail.com', 'gopay', '2, 4, Sigura gura, Lowokwaru, Malang, Jawa Timur, Indonesia - 12345', 'Saussage Pizza (89000 x 1) - Lychee Tea (14500 x 1) - ', 103500, '2022-12-12', 'completed'),
(9, 1, 'latifah', '123', 'latifah@gmail.com', 'gopay', '2, 4, Sigura gura, Lowokwaru, Malang, Jawa Timur, Indonesia - 12345', 'Chicken Burger (35000 x 1) - ', 35000, '2022-12-13', 'completed'),
(10, 3, 'ameylia', '0853292494', 'ameylia@gmail.com', 'cash on delivery', '1, 1C, Sawojajar, Sawojajar, Malang, Malang, Indonesia - 4213', 'Strawberry Float (18000 x 1) - Chocolate Tiramissu (20000 x 1) - ', 38000, '2022-12-13', 'completed'),
(11, 1, 'latifah', '123', 'latifah@gmail.com', 'cash on delivery', '2, 4, Sigura gura, Lowokwaru, Malang, Jawa Timur, Indonesia - 12345', 'Chicken Burger (35000 x 2) - ', 70000, '2022-12-14', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `image`) VALUES
(1, 'Beef Burger', 'fast food', 45000, 'burger-1.png'),
(2, 'Chicken Burger', 'fast food', 35000, 'burger-2.png'),
(3, 'Strawberry Float', 'desserts', 18000, 'dessert-1.png'),
(4, 'Chocolate Cake', 'desserts', 24000, 'dessert-2.png'),
(5, 'Chocolate Tiramissu', 'desserts', 20000, 'dessert-3.png'),
(6, 'Choco Cupcakes', 'desserts', 25000, 'dessert-4.png'),
(7, 'Stawberry Scopies', 'desserts', 28000, 'dessert-5.png'),
(10, 'Spaghetti Raviole', 'main dish', 36000, 'dish-2.png'),
(13, 'Orange Juice', 'drinks', 13000, 'drink-1.png'),
(15, 'Infuse Lemon Water', 'drinks', 19000, 'drink-3.png'),
(17, 'Strawberry Juice', 'drinks', 24000, 'drink-5.png'),
(19, 'Roasted Chicken', 'main dish', 103000, 'home-img-3.png'),
(21, 'Saussage Pizza', 'fast food', 89000, 'pizza-3.png'),
(23, 'Strawberry Matcha Latte', 'drinks', 17500, 'drink-6.png'),
(24, 'Choux de Chocolate', 'desserts', 20000, 'dessert-7.png'),
(25, 'Creamy Tomato Pasta', 'main dish', 21200, 'dish-5.png'),
(26, 'Spicy Miso Tonkotsu Ramen', 'main dish', 32000, 'dish-6.png'),
(27, 'Lychee Tea', 'drinks', 14500, 'drink-7.png'),
(29, 'Cherry and Peach Sangria', 'drinks', 16800, 'drink-8.png'),
(30, 'Chicken Katsu Curry', 'main dish', 27000, 'main-1.png'),
(31, 'PoChick with Cream Sauce', 'main dish', 31000, 'main-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `address`) VALUES
(1, 'latifah', 'latifah@gmail.com', '123', 'bc2791b967a5f4ac12d7b531dcec80ad5fafa881', '2, 4, Sigura gura, Lowokwaru, Malang, Jawa Timur, Indonesia - 12345'),
(2, 'nuraini', 'nuraini@gmail.com', '0896656086', 'df9f6aac4e0a444140c338a0d829022113a7c001', ''),
(3, 'ameylia', 'ameylia@gmail.com', '0853292494', '03a1397a90bb2eac2934f65e7c0b0421130a3e41', '1, 1C, Sawojajar, Sawojajar, Malang, Malang, Indonesia - 4213');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
