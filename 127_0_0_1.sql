-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 04:21 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminar`
--
CREATE DATABASE IF NOT EXISTS `seminar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `seminar`;

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `fname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(100) NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `fname`, `lastname`, `email`, `phone`, `category`) VALUES
(3, 'md', 'Sohan', 'info@sohan', 161111111, 'Workshop'),
(4, 'md', 'Sohan', 'info@sohan', 161111111, 'Seminar'),
(5, 'md', 'akib', '143@gmail.com', 161111111, 'Workshop');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`) VALUES
(9, 'upcoming-events_home-banner_green1.png'),
(10, 'event-register-banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(900) NOT NULL,
  `image_post` varchar(300) NOT NULL,
  `category` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `deadline` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `date`, `title`, `description`, `image_post`, `category`, `location`, `deadline`) VALUES
(1, '2019-07-27', 'Sample title', 'This is seminar and workshop system. At first user can registration this system. Every user submit his seminar and workshop and show all information. Organization can submit seminar and workshop.user login this system and show seminar and workshop by the catagory with all the iformation of it.', 'Event-banner.jpg', 'Seminar', 'à¦¶à¦¹à§€à¦¦ à¦®à§‹à§Ÿà¦¾à¦œà§à¦œà¦® à¦¹à¦²', '2019-08-23'),
(2, '2019-07-25', 'Tuition Fees', 'This is seminar and workshop system. At first user can registration this system. Every user submit his seminar and workshop and show all information. Organization can submit seminar and workshop.user login this system and show seminar and workshop by the catagory with all the iformation of it.', 'Event-banner.jpg', 'Workshop', 'Grand Central Park', '2019-08-03'),
(5, '2019-07-30', 'Test 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam dicta quisquam, explicabo dolorum id culpa atque necessitatibus rerum reiciendis, ullam hic incidunt quae suscipit, est voluptas debitis magni eum maiores?', 'event-register-banner.jpg', 'Others', 'Mirpur', '2019-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `reuser`
--

CREATE TABLE `reuser` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `Usertype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reuser`
--

INSERT INTO `reuser` (`id`, `fname`, `lastname`, `email`, `password`, `phone`, `occupation`, `Usertype`) VALUES
(1, 'Md', 'Dipu', 'dipu@admin.io', '123456', 1611111111, 'Admin', 'Admin'),
(2, 'md', 'akib', 'info@golamsorwar.xyz', '123456', 168888888, 'Student', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reuser`
--
ALTER TABLE `reuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reuser`
--
ALTER TABLE `reuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
