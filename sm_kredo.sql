-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 06:46 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm_kredo`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments_tbl`
--

CREATE TABLE `comments_tbl` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `post_id` int(100) NOT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `comment_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cover_img_tbl`
--

CREATE TABLE `cover_img_tbl` (
  `cover_img_id` int(11) NOT NULL,
  `img_name` varchar(100) DEFAULT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cover_img_tbl`
--

INSERT INTO `cover_img_tbl` (`cover_img_id`, `img_name`, `user_id`) VALUES
(2, '56400594_680421635707403_9168812778194845881_n.jpg', 1),
(3, 'kurt.jpg', 2),
(4, 'sadasd.jpg', 3),
(5, '-HaIUC7K_400x400.jpg', 5),
(6, '1200px-Star_Wars_Logo.svg.png', 4),
(7, '56400594_680421635707403_9168812778194845881_n.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `followed_users`
--

CREATE TABLE `followed_users` (
  `follow_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `followed_user_id` int(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `followed_users`
--

INSERT INTO `followed_users` (`follow_id`, `user_id`, `followed_user_id`, `status`) VALUES
(33, 6, 5, 'followed'),
(34, 6, 4, 'followed'),
(35, 6, 1, 'followed'),
(36, 1, 2, 'followed'),
(37, 1, 3, 'followed');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `login_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`login_id`, `user_email`, `user_password`) VALUES
(1, 'kjmojado21@gmail.com', 'admin'),
(2, 'justin@gmail.com', 'mirror'),
(3, 'avicii@gmail.com', 'avicii'),
(4, 'yosuke@harasawa', 'harasawa'),
(5, 'takuto@imari', 'imari'),
(6, 'yuka@matsumuto', 'yuka');

-- --------------------------------------------------------

--
-- Table structure for table `posts_tbl`
--

CREATE TABLE `posts_tbl` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_content` varchar(1000) NOT NULL,
  `post_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts_tbl`
--

INSERT INTO `posts_tbl` (`post_id`, `user_id`, `post_content`, `post_image`) VALUES
(2, 1, 'asdasdasdasdas', NULL),
(3, 1, 'hey', NULL),
(4, 1, 'cute guy', 'hqdefault.jpg'),
(5, 1, 'sure thing', 'casing.png'),
(6, 1, '', '83623211_3528423540563715_2315435745654865920_o.jpg'),
(7, 1, 'so goood 👌', 'annMRNq6_700w_0.jpg'),
(8, 2, 'He is shocked ', 'zlMU1kkN_400x400.jpg'),
(9, 2, '', 'tnl4ccfviv341.jpg'),
(11, 2, 'HAAHAHAH IM SO HANDSOME', NULL),
(13, 1, 'hi im hadndsome', NULL),
(14, 3, 'whatsup!?', 'sadasd.jpg'),
(16, 1, 'sure thing', 'download.jfif'),
(17, 1, 'tis is me', 'me.jpg'),
(18, 1, 'asdasdasdasd', NULL),
(19, 4, 'this is my new post!', NULL),
(20, 5, 'im so you here', '-HaIUC7K_400x400.jpg'),
(21, 4, 'i like starwars', '1200px-Star_Wars_Logo.svg.png'),
(22, 6, 'i like france #gargoyle', 'french-travel-phrases-3-1-e1557342435156.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_age` varchar(100) NOT NULL,
  `user_bdate` date NOT NULL,
  `user_location` varchar(100) NOT NULL,
  `user_img` varchar(100) DEFAULT NULL,
  `login_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `user_fullname`, `user_age`, `user_bdate`, `user_location`, `user_img`, `login_id`) VALUES
(1, 'Kurt John Mojado', '23', '1996-02-15', 'Cebu City', 'me.jpg', 1),
(2, 'Justin Timberlake', '25', '1996-02-21', 'Tokyo,Shibuya', 'sherlock.jpeg', 2),
(3, 'Avicii', '28', '0000-00-00', 'Kanagawa Prefecture', 'avicii.jpg', 3),
(4, 'Yosuke Harasawa', '28', '2020-02-05', 'Gunma,Japan', '10bd583b5580c3f48177652a38964ef7.jpg', 4),
(5, 'Takuto Imari', '22', '2020-02-05', 'Fukuka,Japan', '-HaIUC7K_400x400.jpg', 5),
(6, 'Yuka Matsumuto', '30', '2020-02-05', 'Saitama,Japan', 'yuka.jpg', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments_tbl`
--
ALTER TABLE `comments_tbl`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `cover_img_tbl`
--
ALTER TABLE `cover_img_tbl`
  ADD PRIMARY KEY (`cover_img_id`);

--
-- Indexes for table `followed_users`
--
ALTER TABLE `followed_users`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `posts_tbl`
--
ALTER TABLE `posts_tbl`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments_tbl`
--
ALTER TABLE `comments_tbl`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cover_img_tbl`
--
ALTER TABLE `cover_img_tbl`
  MODIFY `cover_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `followed_users`
--
ALTER TABLE `followed_users`
  MODIFY `follow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts_tbl`
--
ALTER TABLE `posts_tbl`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
