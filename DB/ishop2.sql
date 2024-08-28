-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 03:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ishop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Smartphones'),
(2, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `co_name` varchar(255) NOT NULL,
  `co_email` varchar(255) NOT NULL,
  `co_subject` varchar(255) NOT NULL,
  `co_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `co_name`, `co_email`, `co_subject`, `co_message`) VALUES
(1, 'tes', 'tes@gmail.com', 'tes', 'tess'),
(2, 'hello', 'ra@gmail.com', 'jipi', 'pjp'),
(4, 't', 't@mail.com', 't', 't'),
(5, 'r', 'r@mai.com', 'r', 'rrr'),
(6, 'MOSTAFA', 'nadjib@gmail.com', 'TESTING MESSAGE', 'HELLO ISHOP , Am looking for my product'),
(7, 'NADJIB', 'nadjib@gmail.com', 'TESTING MESSAGE 2', 'HELLO ISHOP , Am looking for my product FF'),
(8, 'NADJIB2', 'nadjib@gmail.com', 'TESTING MESSAGE 22', 'HELLO ISHOP , Am looking for my product FF2');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `product_storage` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_name`, `product_brand`, `price`, `product_storage`, `product_color`, `quantity`, `name`, `email`, `address`, `city`, `order_date`, `total_price`) VALUES
(10, 'Reno 8', 'Oppo', 66900, '512 Gb', 'Black', 2, 'FFFFFFFFF', 'FFF@f.com', 'tiaret', '33', '2023-05-15', 133800),
(11, 'iPhone 14Pro Max', 'Apple', 313701, '512 Gb', 'Purple', 3, 'redmi', 'redmi@r.com', 'yy', '88', '2023-05-15', 941103),
(12, 'iPhone 11', 'Apple', 90000, '128 Gb', 'Black', 2, 'adem benaida', 'adembenaida2002@gmail.com', 'tiaret bouchakif', '0795051651', '2023-05-15', 180000),
(13, 'S22', 'Samsung', 127500, '256 Gb', 'White', 5, 'arbi', 'arbi@gmail.com', 'tiaret', '77777', '2023-05-17', 637500),
(14, 'iPhone X', 'Apple', 22000, '512Gb', 'White', 2, 'mokhtar', 'alpha@l.com', 'tiarret', '222222222222', '2023-05-19', 44000),
(15, 'iPhone 6', 'Apple', 20000, '128Gb', 'ROSE', 3, 'mostafa', 'bessouiketnadjib99@gmail.com', 'dubai', '77777777777777', '2023-05-19', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_storage` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `uploaded_date` date NOT NULL DEFAULT current_timestamp(),
  `product_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_brand`, `product_color`, `product_storage`, `product_desc`, `product_image`, `price`, `category_id`, `uploaded_date`, `product_url`) VALUES
(1, 'iPhone 14Pro Max', 'Apple', 'Purple', '128Gb', 'The iPhone 14 Pro Max', './uploads/14promaxpurple.png', 313701, 1, '2023-05-13', 'iphone14promax.php'),
(2, 'iPhone 14Pro Max', 'Apple', 'Black', '128Gb', 'The iPhone 14 Pro Max', './uploads/14promaxblack.png', 313700, 1, '2023-05-13', 'iphone14promax.php'),
(3, 'iPhone 14Pro Max', 'Apple', 'Gold', '128Gb', 'The iPhone 14 Pro Max', './uploads/14promaxgold.png', 313700, 1, '2023-05-13', 'iphone14promax.php'),
(4, 'iPhone 14Pro Max', 'Apple', 'Silver', '128Gb', 'The iPhone 14 Pro Max', './uploads/14promaxsilver.png', 313700, 1, '2023-05-13', 'iphone14promax.php'),
(87, 'iPhone 14Pro Max', 'Apple', 'Purple', '512Gb', 'The iPhone 14 Pro Max', './uploads/14promaxpurple.png', 320410, 1, '2023-05-13', 'iphone14promax.php'),
(88, 'iPhone 14Pro Max', 'Apple', 'Black', '512Gb', 'The iPhone 14 Pro Max', './uploads/14promaxblack.png', 320410, 1, '2023-05-13', 'iphone14promax.php'),
(89, 'iPhone 14Pro Max', 'Apple', 'Gold', '512Gb', 'The iPhone 14 Pro Max', './uploads/14promaxgold.png', 320410, 1, '2023-05-13', 'iphone14promax.php'),
(90, 'iPhone 14Pro Max', 'Apple', 'Silver', '512Gb', 'The iPhone 14 Pro Max', './uploads/14promaxsilver.png', 320410, 1, '2023-05-13', 'iphone14promax.php'),
(91, 'iPhone 14', 'Apple', 'Blue', '256Gb', 'The iPhone 14 ', './uploads/14blue.png', 210000, 1, '2023-05-13', 'iphone14.php'),
(92, 'iPhone 14', 'Apple', 'Midnight', '256Gb', 'The iPhone 14 ', './uploads/14midnight.png', 210000, 1, '2023-05-13', 'iphone14.php'),
(93, 'iPhone 14', 'Apple', 'Purple', '256Gb', 'The iPhone 14', './uploads/14purple.png', 210000, 1, '2023-05-13', 'iphone14.php'),
(94, 'iPhone 14', 'Apple', 'Red', '256Gb', 'The iPhone 14', './uploads/14red.png', 210000, 1, '2023-05-13', 'iphone14.php'),
(95, 'iPhone 13Pro Max', 'Apple', 'Blue', '256Gb', 'The iPhone 13 Pro Max', './uploads/13promaxblue.png', 245900, 1, '2023-05-13', 'iphone13promax.php'),
(96, 'iPhone 13Pro Max', 'Apple', 'Green', '256Gb ', 'The iPhone 13 Pro Max', './uploads/13promaxgreen.png', 245900, 1, '2023-05-13', 'iphone13promax.php'),
(97, 'iPhone 13Pro Max', 'Apple', 'Silver', '256Gb', 'The iPhone 13 Pro Max', './uploads/13promaxsilver.png', 245900, 1, '2023-05-13', 'iphone13promax.php'),
(98, 'iPhone 13Pro Max', 'Apple', 'Gravite', '256Gb', 'The iPhone 13 Pro Max', './uploads/13promaxgravite.png', 245900, 1, '2023-05-13', 'iphone13promax.php'),
(99, 'iPhone 13', 'Apple', 'Blue', '256Gb', 'The iPhone 13', './uploads/13blue.png', 150000, 1, '2023-05-13', 'iphone13.php'),
(100, 'iPhone 13', 'Apple', 'Midnight', '256Gb', 'The iPhone 13', './uploads/13midnight.png', 150000, 1, '2023-05-13', 'iphone13.php'),
(101, 'iPhone 13', 'Apple', 'Pink', '256Gb', 'The iPhone 13', './uploads/13pink.png', 150000, 1, '2023-05-13', 'iphone13.php'),
(102, 'iPhone 13', 'Apple', 'Red', '256Gb', 'The iPhone 13', './uploads/13red.png', 150000, 1, '2023-05-13', 'iphone13.php'),
(103, 'iPhone 12Pro Max', 'Apple', 'Blue', '256Gb', 'The iPhone 12 Pro Max', './uploads/12promaxblue.png', 135000, 1, '2023-05-13', 'iphone12promax.php'),
(104, 'iPhone 12Pro Max', 'Apple', 'Gold', '256Gb', 'The iPhone 12 Pro Max', './uploads/12promaxgold.png', 135000, 1, '2023-05-13', 'iphone12promax.php'),
(105, 'iPhone 12Pro Max', 'Apple', 'Gravite', '256Gb', 'The iPhone 12 Pro Max', './uploads/12promaxgraphite.png', 135000, 1, '2023-05-13', 'iphone12promax.php'),
(106, 'iPhone 12Pro Max', 'Apple', 'Siver', '256Gb', 'The iPhone 12 Pro Max', './uploads/12promaxsilver.png', 135000, 1, '2023-05-13', 'iphone12promax.php'),
(107, 'iPhone 12', 'Apple', 'Blue', '128Gb', 'The iPhone 12', './uploads/12blue.png', 120000, 1, '2023-05-13', 'iphone12.php'),
(108, 'iPhone 12', 'Apple', 'Purple', '128Gb', 'The iPhone 12', './uploads/12purple.png', 120000, 1, '2023-05-13', 'iphone12.php'),
(109, 'iPhone 12', 'Apple', 'Black', '128Gb', 'The iPhone 12', './uploads/12black.png', 120000, 1, '2023-05-13', 'iphone12.php'),
(110, 'iPhone 12', 'Apple', 'Red', '128Gb', 'The iPhone 12', './uploads/12red.png', 120000, 1, '2023-05-13', 'iphone12.php'),
(111, 'iPhone 11Pro Max', 'Apple', 'Black', '256Gb', 'The iPhone 11 Pro Max', './uploads/11promaxblack.png', 110000, 1, '2023-05-13', 'iphone11promax.php'),
(112, 'iPhone 11Pro Max', 'Apple', 'Green', '256Gb', 'The iPhone 11 Pro Max', './uploads/11promaxgreen.png', 110000, 1, '2023-05-13', 'iphone11promax.php'),
(113, 'iPhone 11Pro Max', 'Apple', 'Pink', '256Gb', 'The iPhone 11 Pro Max', './uploads/11promaxpink.png', 110000, 1, '2023-05-13', 'iphone11promax.php'),
(114, 'iPhone 11Pro Max', 'Apple', 'Silver', '256Gb', 'The iPhone 11 Pro Max', './uploads/11promaxsilver.png', 110000, 1, '2023-05-13', 'iphone11promax.php'),
(115, 'iPhone 11', 'Apple', 'Black', '128Gb', 'The iPhone 11', './uploads/11black.png', 90000, 1, '2023-05-13', 'iphone11.php'),
(116, 'iPhone 11', 'Apple', 'Green', '128Gb', 'The iPhone 11', './uploads/11green.png', 90000, 1, '2023-05-13', 'iphone11.php'),
(117, 'iPhone 11', 'Apple', 'Purple', '128Gb', 'The iPhone 11', './uploads/11purple.png', 90000, 1, '2023-05-13', 'iphone11.php'),
(118, 'iPhone 11', 'Apple', 'Red', '128Gb', 'The iPhone 11', './uploads/11red.png', 90000, 1, '2023-05-13', 'iphone11.php'),
(119, 'S22', 'Samsung', 'Pink', '256Gb', 'The Samsung Galaxy S22', './uploads/S22pink.png', 127500, 1, '2023-05-13', 's22.php'),
(120, 'S22', 'Samsung', 'Purple', '256Gb', 'The Samsung Galaxy S22', './uploads/S22purple.png', 127500, 1, '2023-05-13', 's22.php'),
(121, 'S22', 'Samsung', 'White', '256Gb', 'The Samsung Galaxy S22', './uploads/S22white.png', 127500, 1, '2023-05-13', 's22.php'),
(122, 'S22', 'Samsung', 'Green', '256Gb', 'The Samsung Galaxy S22', './uploads/S22green.png', 127500, 1, '2023-05-13', 's22.php'),
(123, 'S22 Ultra', 'Samsung', 'Green', '512Gb', 'The samsung S22 Ultra', './uploads/S22ultragreen.png', 199000, 1, '2023-05-13', 's22ultra.php'),
(124, 'S22 Ultra', 'Samsung', 'Black', '512Gb', 'The samsung ultra s22 ultra', './uploads/S22ultrablack.png', 199000, 1, '2023-05-13', 's22ultra.php'),
(125, 'S22 Ultra', 'Samsung', 'Pink', '512Gb', 'The samsung s22 ultra', './uploads/S22ultrapink.png', 199000, 1, '2023-05-13', 's22ultra.php'),
(126, 'S22 Ultra', 'Samsung', 'White', '512Gb', 'The samsung s22 ultra', './uploads/S22ultrawhite.png', 199000, 1, '2023-05-13', 's22ultra.php'),
(127, 'S21 Ultra', 'Samsung', 'Blue', '512Gb', 'The samsung s21 ultra', './uploads/S21ultrablue.png', 175000, 1, '2023-05-13', 's21ultra.php'),
(128, 'S21 Ultra', 'Samsung', 'Grey', '512Gb', 'The samsung s21 ultra', './uploads/S21ultragrey.png', 175000, 1, '2023-05-13', 's21ultra.php'),
(129, 'S21 Ultra ', 'Samsung', 'Pink', '512Gb', 'The samsung S21 ultra', './uploads/S21ultrapink.png', 175000, 1, '2023-05-13', 's21ultra.php'),
(130, 'S21 Ultra', 'Samsung', 'Black', '512Gb', 'The samsung S21 Ultra', './uploads/S21ultrablack.png', 175000, 1, '2023-05-13', 's21ultra.php'),
(131, 'A53 5G', 'Samsung', 'Black ', '256Gb', 'A53 5G', './uploads/a53black.png', 73900, 1, '2023-05-13', 'a535g.php'),
(132, 'A53 5G', 'Samsung', 'Blue', '256Gb', 'A53 5G', './uploads/a53blue.png', 73900, 1, '2023-05-13', 'a535g.php'),
(133, 'A53 5G', 'Samsung', 'Pink', '256Gb', 'A53 5G', './uploads/a53pink.png', 73900, 1, '2023-05-13', 'a535g.php'),
(134, 'A53 5G', 'Samsung', 'White', '256Gb', 'A53 5G', './uploads/a53white.png', 73900, 1, '2023-05-13', 'a535g.php'),
(135, 'Note 11 Pro', 'Xiaomi', 'White', '256Gb', 'NOTE  11 PRO', './uploads/55.png', 55000, 1, '2023-05-13', 'note11pro.php'),
(136, 'Note 11 Pro', 'Xiaomi', 'Black', '256Gb', 'NOTE 11 PRO', './uploads/55.png', 55000, 1, '2023-05-13', 'note11pro.php'),
(137, 'Note 11 Pro', 'Xiaomi', 'Blue', '256Gb', 'NOTE 11 PRO', './uploads/55.png', 55000, 1, '2023-05-13', 'note11pro.php'),
(138, '12T Pro', 'Xiaomi', 'Grey', '512Gb', '12T PRO', './uploads/1.png', 134000, 1, '2023-05-13', '12tpro.php'),
(139, '12T Pro', 'Xiaomi', 'Black', '512Gb', '12T PRO', './uploads/1.png', 134000, 1, '2023-05-13', '12tpro.php'),
(140, '12T Pro', 'Xiaomi', 'Blue', '512Gb', '12T PRO', './uploads/1.png', 134000, 1, '2023-05-13', '12tpro.php'),
(141, '11T Pro', 'Xiaomi', 'White', '512Gb', '11T PRO', './uploads/3n.png', 94000, 1, '2023-05-13', '11tpro.php'),
(142, '11T Pro', 'Xiaomi', 'Blue', '512Gb', '11T PRO', './uploads/3n.png', 94000, 1, '2023-05-13', '11tpro.php'),
(143, '11T Pro', 'Xiaomi', 'Black', '512Gb', '11T PRO', './uploads/3n.png', 94000, 1, '2023-05-13', '11tpro.php'),
(145, 'Find X5 Pro', 'Oppo', 'Black', '512Gb', 'Find X5 PRO', './uploads/1.jpg', 221000, 1, '2023-05-14', 'findx.php'),
(146, 'Reno 8', 'Oppo', 'Black', '512Gb', 'RENO 8 PRO', './uploads/7.png', 66900, 1, '2023-05-14', 'reno8.php'),
(147, 'Reno 7', 'Oppo', 'Black', '512Gb', 'RENO 7 PRO', './uploads/5.png', 57500, 1, '2023-05-14', 'reno7.php'),
(148, 'A93', 'Oppo', 'Black', '512Gb', 'A93 OPPO', './uploads/3f.png', 37000, 1, '2023-05-14', 'a93.php'),
(153, 'Mate 50 Pro', 'Huawei', 'Black', '512Gb', 'Huawei mate50 pro', './uploads/images.jpg', 162260, 1, '2023-05-14', 'mate50pro.php'),
(154, 'Mate X2', 'Huawei', 'Black', '1Tb', 'Huawei Mate X2', './uploads/f8.jpg', 398000, 1, '2023-05-14', 'matex2.php'),
(155, 'Mate 40 Pro', 'Huawei', 'Orange', '512Gb', 'Huawei mate 40 pro', './uploads/3.png', 148000, 1, '2023-05-14', 'mate40pro.php'),
(156, 'P50 PRO', 'Huawei', 'White', '512Gb', 'Huawei p50 pro', './uploads/5f.png', 138000, 1, '2023-05-14', 'p50pro.php'),
(192, 'iPhone 2', 'Apple', 'BLACK', '64Gb', 'Apple', './uploads/iPhonexxx.jpg', 3333, 1, '2023-05-19', 'iphonex.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `password` varchar(150) NOT NULL,
  `registered_at` date NOT NULL DEFAULT current_timestamp(),
  `isAdmin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `email`, `phone_number`, `password`, `registered_at`, `isAdmin`) VALUES
(1, 'Admin1', 'admin@gmail.com', 0, '1234', '2022-04-10', 1),
(3, 'Admin2', 'admin@fr.fr', 0, '2022', '2023-05-03', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
