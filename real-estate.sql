-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 01:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real-estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `desc_blog` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `desc_blog`, `image`) VALUES
(7, '10 things you need to know about digital marketing', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ab enim quidem. Numquam obcaecati perferendis laudantium rem magnam dolor repudiandae ducimus iusto aut illo, sint harum amet quam minima ipsam, dolore atque laboriosam voluptatum illum neque impedit ipsa pariatur! Pariatur non necessitatibus eveniet, quas at in magni vero labore aperiam praesentium repellat minus dignissimos debitis quidem nam maiores ab nesciunt amet temporibus aspernatur mollitia a sed! Modi, placeat necessitatibus laboriosam sit quaerat numquam quam dolores dignissimos velit error obcaecati. Repudiandae autem a aspernatur amet eaque. Iure odit quia commodi ab vel suscipit enim, dolore repellendus mollitia maxime. Tempore ad aspernatur culpa perspiciatis consequatur ipsam itaque repudiandae natus quasi commodi illo numquam aliquid, vitae debitis quae facere similique sed! Necessitatibus unde praesentium quo illum dolore facere. Similique iusto consequuntur quia ex a sapiente ratione odio odit nemo sit cupiditate impedit alias consectetur voluptatem, exercitationem corporis vero hic praesentium. Facilis nisi quaerat temporibus ut reiciendis soluta maiores ipsum enim quidem voluptatum, iusto repellat itaque! Ratione, quis. Magnam fugit consectetur vel voluptatem sit nobis voluptatum perspiciatis eveniet sequi! Mollitia, provident. Repellendus nemo cumque error. Officia vitae inventore voluptate! Repellendus veniam tenetur ratione voluptas provident ab aspernatur sit recusandae nemo repudiandae cum, in fugiat a. Ducimus fuga in molestiae dolore! Ad, quos ullam? Possimus porro fugiat quos quasi ducimus est suscipit iure mollitia natus molestiae aperiam consequuntur neque repellat, sed earum, cum facere, sit explicabo vitae et necessitatibus facilis quisquam ea. Nemo a illo modi sapiente necessitatibus cum fugiat nisi officia facere, animi laudantium!', 'blog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking_one`
--

CREATE TABLE `booking_one` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `booking` text NOT NULL,
  `home_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_one`
--

INSERT INTO `booking_one` (`id`, `user_id`, `booking`, `home_id`) VALUES
(8, 1, 'YES', 7),
(9, 1, 'NO', 5);

-- --------------------------------------------------------

--
-- Table structure for table `booking_two`
--

CREATE TABLE `booking_two` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `booking` text NOT NULL,
  `home_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_two`
--

INSERT INTO `booking_two` (`id`, `user_id`, `booking`, `home_id`) VALUES
(1, 1, 'YES', 3),
(2, 1, 'NO', 11),
(3, 1, 'YES', 7),
(4, 1, 'YES', 2),
(5, 1, 'NO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `buy_house`
--

CREATE TABLE `buy_house` (
  `id` int(10) NOT NULL,
  `price` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_house`
--

INSERT INTO `buy_house` (`id`, `price`, `details`, `image`, `category`) VALUES
(1, '200k', '3 rooms, 3 bathrooms, 1 garden', 'home-2.jpg', 'new'),
(2, '100k', '4 beds, 1 garden , 1 bathroom', 'home-3.jpg', 'new'),
(3, '200k', '3 rooms, 3 bathrooms, 1 garden', 'home-4.jpg', 'popular'),
(4, '50k', '2beds, 1kitchen, 1 bathroom', 'home-5.jpg', 'new'),
(5, '300k', '6rooms, 1garden,6bathrooms', 'home-5.jpg', 'popular'),
(6, '100k', '6beds, 6bathrooms', 'home-6.jpg', 'new'),
(7, '250k', '5rooms, 1hall, 1store', 'home-7.jpg', 'popular'),
(8, '300k', '2beds, 1kitchen, 1 bathroom', 'home-8.jpg', 'popular');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent_house`
--

CREATE TABLE `rent_house` (
  `id` int(10) NOT NULL,
  `price` text NOT NULL,
  `detail` text NOT NULL,
  `image` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent_house`
--

INSERT INTO `rent_house` (`id`, `price`, `detail`, `image`, `category`) VALUES
(1, '200k', '2beds, 1kitchen, 1 bathroom', 'home-9.jpg', 'expensive'),
(2, '100k', '2beds, 1kitchen, 1 bathroom', 'home-10.jpg', 'expensive'),
(3, '300k', '4 beds, 1 garden , 1 bathroom', 'home-11.jpg', 'expensive'),
(4, '500k', '6beds, 6bathrooms', 'home-12.jpg', 'expensive'),
(5, '1000k', '6rooms, 1garden,6bathrooms', 'home-13.jpg', 'popular'),
(6, '500k', '4 beds, 1 garden , 1 bathroom', 'home-13.jpg', 'popular'),
(7, '700k', '6beds, 6bathrooms', 'home-15.jpg', 'popular'),
(8, '550k', '4 beds, 1 garden , 1 bathroom', 'home-16.jpg', 'popular'),
(9, '10k', '2beds, 1kitchen, 1 bathroom', 'house-1.jpg', 'cheap'),
(10, '20k', '4 beds, 1 garden , 1 bathroom', 'sale-4.jpg', 'cheap'),
(11, '25k', '3 rooms, 3 bathrooms, 1 garden', 'sale-3.jpg', 'cheap'),
(12, '35k', '6beds, 6bathrooms', 'sale-2.jpg', 'cheap');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(10) NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `password` text NOT NULL,
  `confirm_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `email`, `mobile`, `password`, `confirm_password`) VALUES
(1, 'email@gmail.com', '8976512340', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_one`
--
ALTER TABLE `booking_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_two`
--
ALTER TABLE `booking_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_house`
--
ALTER TABLE `buy_house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_house`
--
ALTER TABLE `rent_house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `booking_one`
--
ALTER TABLE `booking_one`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `booking_two`
--
ALTER TABLE `booking_two`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `buy_house`
--
ALTER TABLE `buy_house`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rent_house`
--
ALTER TABLE `rent_house`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
