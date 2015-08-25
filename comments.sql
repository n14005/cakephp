-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 8 月 25 日 09:17
-- サーバのバージョン： 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dot`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `commenter` varchar(255) DEFAULT NULL,
  `body` text,
  `post_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `test` varchar(111) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`id`, `commenter`, `body`, `post_id`, `created`, `modified`, `test`) VALUES
(1, 'c 1', 'b 1', 2, '2015-08-22 15:44:28', '2015-08-22 15:44:28', ''),
(2, 'c 2', 'b 2', 1, '2015-08-22 15:44:28', '2015-08-22 15:44:28', ''),
(3, 'c 3', 'b 3', 1, '2015-08-22 15:44:28', '2015-08-22 15:44:28', ''),
(4, '11111', '111', 1, '2015-08-22 10:17:30', '2015-08-22 10:17:30', ''),
(5, 'asd', 'asd', 2, '2015-08-22 10:32:49', '2015-08-22 10:32:49', ''),
(6, 'てすと', 'てすと', 15, '2015-08-22 10:51:11', '2015-08-22 10:51:11', ''),
(7, 'asd', 'asd', 16, '2015-08-22 11:13:00', '2015-08-22 11:13:00', ''),
(8, 'a', 'a', 19, '2015-08-22 13:34:23', '2015-08-22 13:34:23', ''),
(9, '下地', 'あああ', 19, '2015-08-22 13:34:35', '2015-08-22 13:34:35', ''),
(10, 'asd', 'asd', 15, '2015-08-22 15:48:02', '2015-08-22 15:48:02', ''),
(11, 'zxc', 'zxc', 29, '2015-08-23 10:47:54', '2015-08-23 10:47:54', ''),
(12, 'おれ', 'てすと', 29, '2015-08-23 10:48:02', '2015-08-23 10:48:02', ''),
(13, '', '', 29, '2015-08-23 10:50:34', '2015-08-23 10:50:34', ''),
(15, NULL, NULL, 0, '2015-08-25 04:12:49', '2015-08-25 04:12:49', 'oooo'),
(16, NULL, NULL, 0, '2015-08-25 04:13:03', '2015-08-25 04:13:03', 'zxc'),
(17, '', '', 32, '2015-08-25 04:24:26', '2015-08-25 04:24:26', ''),
(18, '', '', 32, '2015-08-25 04:24:26', '2015-08-25 04:24:26', ''),
(19, 'zxc', 'zxc', 32, '2015-08-25 04:24:30', '2015-08-25 04:24:30', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
