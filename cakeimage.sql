-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 10:28 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakeimage`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `image_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`image_id`, `image`, `name`) VALUES
(11, 'http://localhost/learn/cakeimage/image/joker_33-wallpaper-1920x1200.jpg', 'joker_33-wallpaper-1920x1200.jpg'),
(12, 'http://localhost/learn/cakeimage/image/photos_155a8e916e6863b_1519292782_50x50..jpg', 'C:\\xampp\\tmp\\php5856.tmp'),
(13, 'http://localhost/learn/cakeimage/image/photos_115a8e92ed7e026_1519293165_50x50..jpg', 'C:\\xampp\\tmp\\php30FC.tmp'),
(14, 'http://localhost/learn/cakeimage/image/photos_155a8e944488901_1519293508_50x50..jpg', 'C:\\xampp\\tmp\\php6D42.tmp'),
(15, 'http://localhost/learn/cakeimage/image/photos_155a8e9d932d8e6_1519295891_50x50..jpg', 'C:\\xampp\\tmp\\phpC862.tmp'),
(16, 'http://localhost/learn/cakeimage/image/photos_145a8e9e6563f3b_1519296101_50x50..jpg', '1'),
(17, 'http://localhost/learn/cakeimage/image/photos_135a8e9e7cc87e3_1519296124_50x50..jpg', '1'),
(18, 'http://localhost/learn/cakeimage/image/photos_125a8ea176b3825_1519296886_50x50..jpg', 'C:\\xampp\\tmp\\phpF934.tmp'),
(19, 'http://localhost/learn/cakeimage/image/photos_115a8ea6502579e_1519298128_50x50..jpg', 'C:\\xampp\\tmp\\phpEA91.tmp'),
(20, 'http://localhost/learn/cakeimage/image/photos_155a8ea6b750f97_1519298231_50x50..jpg', 'C:\\xampp\\tmp\\php7DA6.tmp'),
(21, 'http://localhost/learn/cakeimage/image/photos_105a8ea9d20b07d_1519299026_50x50..jpg', 'C:\\xampp\\tmp\\php9E0A.tmp'),
(22, 'http://localhost/learn/cakeimage/image/photos_115a8eab251ad5a_1519299365_50x50..jpg', 'joker_33-wallpaper-1920x1200.jpg'),
(23, 'http://localhost/learn/cakeimage/image/photos_135a8eab5873e9b_1519299416_50x50..jpg', 'C:\\xampp\\tmp\\php9336.tmp'),
(24, 'http://localhost/learn/cakeimage/image/photos_155a8ead7525796_1519299957_50x50..jpg', 'C:\\xampp\\tmp\\phpD327.tmp'),
(25, 'http://localhost/learn/cakeimage/image/photos_135a8ead8893800_1519299976_50x50..jpg', 'C:\\xampp\\tmp\\php1F35.tmp'),
(26, 'http://localhost/learn/cakeimage/image/photos_105a8eadb122d5e_1519300017_50x50..jpg', 'C:\\xampp\\tmp\\phpBD99.tmp'),
(27, 'http://localhost/learn/cakeimage/image/photos_105a8eae2a91f37_1519300138_50x50..jpg', 'joker_33-wallpaper-1920x1200.jpg'),
(28, 'http://localhost/learn/cakeimage/image/photos_135a8eae3319da1_1519300147_50x50..jpg', 'joker_33-wallpaper-1920x1200.jpg'),
(29, 'http://localhost/learn/cakeimage/image/photos_115a8eae689f2c2_1519300200_50x50..jpg', 'C:\\xampp\\tmp\\php8A6C.tmp'),
(30, 'http://localhost/learn/cakeimage/image/photos_115a8eb074c9466_1519300724_50x50..jpg', 'C:\\xampp\\tmp\\php89F9.tmp'),
(31, 'http://localhost/learn/cakeimage/image/photos_115a8eb0a32f0df_1519300771_50x50..jpg', 'C:\\xampp\\tmp\\php3F21.tmp'),
(32, 'http://localhost/learn/cakeimage/image/photos_115a8eb2ad3a267_1519301293_50x50..jpg', 'C:\\xampp\\tmp\\php35F3.tmp'),
(33, 'http://localhost/learn/cakeimage/image/photos_125a8eb2de6b7ba_1519301342_50x50..jpg', 'C:\\xampp\\tmp\\phpF6F3.tmp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
