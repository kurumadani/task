-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 7 朁E22 日 05:28
-- サーバのバージョン： 5.6.25-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salesmanagement`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` varchar(4) NOT NULL,
  `CustomerName` varchar(30) NOT NULL,
  `TEL` varchar(12) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `TEL`, `Email`) VALUES
('0001', '青空商事', '0268-26-9999', 'ao@aaaa.jp'),
('0002', 'ひまわり商事', '06-6547-8963', 'info@himawari.como'),
('0003', 'まこに酒房', '0268-36-3214', 'makoni@plala.pr'),
('0004', '丸子文具', '0268-26-9999', 'tatsudai2000@gmail.com'),
('0005', '車谷サイクルショップEX', '00-1234-5678', 'shop@yahoo.co.jp');

-- --------------------------------------------------------

--
-- テーブルの構造 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `GoodsID` varchar(4) NOT NULL,
  `GoodsName` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `goods`
--

INSERT INTO `goods` (`GoodsID`, `GoodsName`, `Price`) VALUES
('1000', 'シンプルな消しゴム', 200),
('1001', 'カラフルノート', 150),
('1002', 'きらきらボールペン', 120),
('1003', '天使のメモ帳', 200),
('1004', 'チョコの味がするスケール', 1080),
('1005', 'センサー付クリップ', 650),
('1006', 'おせっかいなノート', 1500),
('2001', '適当な鉛筆', 200),
('2002', '地味なペン', 100);

-- --------------------------------------------------------

--
-- テーブルの構造 `salesinfo`
--

CREATE TABLE IF NOT EXISTS `salesinfo` (
  `id` int(11) NOT NULL,
  `SalesDate` date NOT NULL,
  `CustomerID` varchar(4) NOT NULL,
  `GoodsID` int(4) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `salesinfo`
--

INSERT INTO `salesinfo` (`id`, `SalesDate`, `CustomerID`, `GoodsID`, `Quantity`) VALUES
(1, '2014-07-24', '0004', 1000, 40),
(32, '2015-07-21', '0001', 1000, 500),
(33, '2015-07-21', '0001', 1000, 1000),
(35, '2015-07-21', '0005', 2002, 10),
(36, '2015-07-21', '0005', 1005, 20),
(37, '2015-07-21', '0005', 1002, 30),
(39, '2015-07-21', '0004', 1003, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`GoodsID`);

--
-- Indexes for table `salesinfo`
--
ALTER TABLE `salesinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salesinfo`
--
ALTER TABLE `salesinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
