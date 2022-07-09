-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 01:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firststore`
--

-- --------------------------------------------------------

--
-- Table structure for table `carpurchases`
--

CREATE TABLE `carpurchases` (
  `userID` varchar(32) NOT NULL,
  `carsID` varchar(32) NOT NULL,
  `carPrice` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carpurchases`
--

INSERT INTO `carpurchases` (`userID`, `carsID`, `carPrice`) VALUES
('1', 'gt', 95726),
('2', 'sc', 112350),
('3', 'cc', 41600),
('4', 'ga', 39355),
('5', 'ge', 62500),
('6', 'ca', 37850),
('abcd1234', 'ca', 42959),
('adad', 'sc', 126674),
('asdf', 'gt', 95726),
('ayy', 'ga', 44372),
('ayyo', 'ga', 42699),
('gt', 'gt', 83884),
('mackdaddy', 'ga', 43781),
('new11', 'ge', 67812),
('piop', 'ca', 42959),
('ree', 'sc', 136223),
('test1', 'sc', 126674),
('test2', 'cc', 46904);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carsID` varchar(32) NOT NULL,
  `carName` varchar(32) NOT NULL,
  `carYear` int(32) NOT NULL,
  `carHorsepower` int(32) NOT NULL,
  `carBasePrice` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carsID`, `carName`, `carYear`, `carHorsepower`, `carBasePrice`) VALUES
('ca', 'CLA', 2021, 221, 37850),
('cc', 'C-Class', 2021, 255, 41600),
('ga', 'GLA', 2021, 258, 39355),
('ge', 'GLE', 2021, 369, 62500),
('gt', 'GT', 2021, 383, 78950),
('sc', 'S-Class', 2021, 429, 112350);

-- --------------------------------------------------------

--
-- Table structure for table `upgrades`
--

CREATE TABLE `upgrades` (
  `upgradesID` varchar(32) NOT NULL,
  `upgradePrice` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upgrades`
--

INSERT INTO `upgrades` (`upgradesID`, `upgradePrice`) VALUES
('cabrk', 1040),
('caeng', 3785),
('cassp', 1892),
('catrn', 1324),
('ccbrk', 1144),
('cceng', 4160),
('ccssp', 2080),
('cctrn', 1456),
('gabrk', 1082),
('gaeng', 3935),
('gassp', 1967),
('gatrn', 1377),
('gebrk', 1718),
('geeng', 6250),
('gessp', 3125),
('getrn', 2187),
('gtbrk', 2171),
('gteng', 7895),
('gtssp', 3947),
('gttrn', 2763),
('scbrk', 3089),
('sceng', 11235),
('scssp', 5617),
('sctrn', 3932);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` varchar(32) NOT NULL,
  `userFullName` varchar(32) NOT NULL,
  `userPassword` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userFullName`, `userPassword`) VALUES
('1', '1', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b'),
('1414', '1414', 'afbfb89027a4dae87c6033eaa07896e93f3f1ddc2214ca43658982e8aa74b4d4'),
('2', '2', 'd4735e3a265e16eee03f59718b9b5d03019c07d8b6c51f90da3a666eec13ab35'),
('3', '3', '4e07408562bedb8b60ce05c1decfe3ad16b72230967de01f640b7e4729b49fce'),
('4', '4', '4b227777d4dd1fc61c6f884f48641d02b4d121d3fd328cb08b5531fcacdabf8a'),
('411', '411', '52f14fc33ef45dd80ac2626077948f44d8d211d5f24bf9db333c9403968e634a'),
('5', '5', 'ef2d127de37b942baad06145e54b0c619a1f22327b2ebbcfbec78f5564afe39d'),
('6', '6', 'e7f6c011776e8db7cd330b54174fd76f7d0216b612387a5ffcfb81e6f0919683'),
('abcd1234', 'abcd1234', 'e9cee71ab932fde863338d08be4de9dfe39ea049bdafb342ce659ec5450b69ae'),
('adad', 'adad', '30f643950f43480d9e14de623c26c0e578436d81c717d4a4af0fd979962550e6'),
('adfa', 'adfa', '16c447832f337f78ae282a2e0143368d95ba83f1bf7829b52a853fd0c126b434'),
('asdf', 'asdf', 'f0e4c2f76c58916ec258f246851bea091d14d4247a2fc3e18694461b1816e13b'),
('fafa', 'fafa', '3a1208de7e66f1706c65c2715c6c3fd4bd13d141a1b29ce267944c94e3cae0ec'),
('gaga', 'gaga', 'd95d5d9a4237845e5baebfa41c52ab0f49f48d98a5681d6745967a88cbdb8942'),
('new11', 'new11', 'd95c1537b96aa911871d4c118ac338394db3407afdbd38a2c63a7dde5add14da'),
('piop', 'piop', 'f72a00899412bb2d0b669d6eef5b0e8d893bc70346608b9aaac6439dc18a8d5a'),
('test1', 'test1', '1b4f0e9851971998e732078544c96b36c3d01cedf7caa332359d6f1d83567014'),
('test2', 'test2', '60303ae22b998861bce3b28f33eec1be758a213c86c93c076dbe9f558c11c752');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carpurchases`
--
ALTER TABLE `carpurchases`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carsID`);

--
-- Indexes for table `upgrades`
--
ALTER TABLE `upgrades`
  ADD PRIMARY KEY (`upgradesID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
