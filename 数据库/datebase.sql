-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2021 at 06:20 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('abc', 123);

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`id`, `name`, `price`, `quantity`, `date`) VALUES
(1, '百点', 3, 300, '2021-11-01'),
(2, '芭提娅', 2, 300, '2021-11-09'),
(3, '新柑', 3, 300, '2021-11-08'),
(4, '韩国进口饮料', 4, 200, '2021-11-10'),
(5, '零度果坊', 4, 400, '2021-11-09'),
(6, '农夫果园', 5, 200, '2021-11-09'),
(7, '农夫山泉', 3, 100, '2021-11-02'),
(8, '冷榨果汁', 3, 300, '2021-11-16'),
(9, '水微凉', 5, 300, '2021-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `dingdan`
--

CREATE TABLE `dingdan` (
  `name` varchar(20) NOT NULL,
  `shangpin` varchar(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `numeber` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`id`, `name`, `price`, `quantity`, `date`) VALUES
(1, '苹果', 2, 100, '2021-11-01'),
(2, '香蕉', 3, 100, '2021-11-01'),
(3, '黑葡萄', 3, 100, '2021-11-01'),
(4, '蓝莓', 25, 100, '2021-11-01'),
(5, '杨桃', 16, 100, '2021-11-01'),
(6, '车厘子', 34, 100, '2021-11-02'),
(7, '血橙', 9, 100, '2021-11-02'),
(8, '葡萄', 5, 100, '2021-11-04'),
(9, '猕猴桃', 13, 100, '2021-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`id`, `name`, `price`, `quantity`, `date`) VALUES
(1, '哑铃', 30, 100, '2021-11-04'),
(2, '棒球棒', 50, 100, '2021-11-04'),
(3, '滑轮鞋', 93, 100, '2021-11-04'),
(4, '排球', 50, 100, '2021-11-04'),
(5, '羽毛球', 23, 100, '2021-11-04'),
(6, '跳绳', 20, 100, '2021-11-04'),
(7, '橄榄球', 42, 100, '2021-11-04'),
(8, '毽子', 8, 100, '2021-11-04'),
(9, '足球', 16, 100, '2021-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `toba`
--

CREATE TABLE `toba` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `toba`
--

INSERT INTO `toba` (`id`, `name`, `price`, `quantity`, `date`) VALUES
(1, '黄鹤楼', 40, 100, '2021-11-02'),
(2, '长白山', 56, 100, '2021-11-10'),
(3, '东坡香烟', 67, 100, '2021-11-02'),
(4, '岱海白', 67, 100, '2021-11-16'),
(5, '酒祖杜康', 76, 100, '2021-11-09'),
(6, '二锅头', 67, 100, '2021-11-08'),
(7, '郎', 46, 200, '2021-11-17'),
(8, '红旗渠', 23, 199, '2021-11-09'),
(9, '七匹狼', 23, 200, '2021-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(20) NOT NULL,
  `password` int(20) NOT NULL,
  `sex` varchar(2) NOT NULL,
  `beizhu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `password`, `sex`, `beizhu`) VALUES
('陈蒙蒙', 927, '女', '开开心心的人');

-- --------------------------------------------------------

--
-- Table structure for table `vegetable`
--

CREATE TABLE `vegetable` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vegetable`
--

INSERT INTO `vegetable` (`id`, `name`, `price`, `quantity`, `date`) VALUES
(1, '茼蒿', 3, 100, '2021-11-02'),
(2, '菠菜', 4, 100, '2021-11-02'),
(3, '葱', 2, 100, '2021-11-02'),
(4, '白菜', 2, 100, '2021-11-02'),
(5, '豆角', 12, 100, '2021-11-02'),
(6, '青椒', 6, 100, '2021-11-02'),
(7, '西红柿', 4, 100, '2021-11-02'),
(8, '豌豆', 7, 100, '2021-11-02'),
(9, '紫茄', 8, 100, '2021-11-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toba`
--
ALTER TABLE `toba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `vegetable`
--
ALTER TABLE `vegetable`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
