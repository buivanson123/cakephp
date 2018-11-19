-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 10:57 AM
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
-- Database: `cake_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `advs`
--

CREATE TABLE `advs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `slide` tinyint(1) NOT NULL,
  `middle` tinyint(1) NOT NULL,
  `bottom` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `displayname` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `create` datetime NOT NULL,
  `readed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `create` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
