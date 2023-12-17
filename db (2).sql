-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2016 at 03:57 AM
-- Server version: 5.1.32
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE IF NOT EXISTS `cash` (
  `vouchno` int(20) NOT NULL,
  `vouchdate` date NOT NULL,
  `supid` int(20) NOT NULL,
  `amt` int(20) NOT NULL,
  `pmode` text NOT NULL,
  `chno` int(20) NOT NULL,
  `chdate` date NOT NULL,
  `bank` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`vouchno`, `vouchdate`, `supid`, `amt`, `pmode`, `chno`, `chdate`, `bank`) VALUES
(0, '0000-00-00', 0, 0, '', 0, '0000-00-00', ''),
(0, '0000-00-00', 0, 0, '', 0, '0000-00-00', ''),
(1, '0000-00-00', 1, 1, '1', 1, '0000-00-00', '1'),
(2, '2000-10-10', 5, 5, '5', 5, '2000-10-10', '5'),
(2, '2000-10-10', 5, 5, '5', 5, '2000-10-10', '5'),
(0, '0000-00-00', 0, 0, 'gsdsdg', 0, '0000-00-00', 'gsdg'),
(0, '0000-00-00', 0, 0, '', 0, '0000-00-00', ''),
(0, '0000-00-00', 0, 0, '', 0, '0000-00-00', ''),
(0, '0000-00-00', 0, 0, '', 0, '0000-00-00', ''),
(0, '0000-00-00', 0, 0, '', 0, '0000-00-00', ''),
(0, '0000-00-00', 0, 0, '', 0, '0000-00-00', ''),
(0, '0000-00-00', 0, 0, '', 0, '0000-00-00', ''),
(0, '0000-00-00', 0, 0, '', 0, '0000-00-00', ''),
(0, '0000-00-00', 0, 0, '', 0, '0000-00-00', ''),
(0, '0000-00-00', 0, 0, '', 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE IF NOT EXISTS `confirmation` (
  `ordno` int(11) NOT NULL,
  `prno` text NOT NULL,
  `qty` double NOT NULL,
  `price` double NOT NULL,
  `amt` double NOT NULL,
  `userid` text NOT NULL,
  `ordate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`ordno`, `prno`, `qty`, `price`, `amt`, `userid`, `ordate`) VALUES
(1, '1', 1, 1, 1, '', '0000-00-00'),
(2, '12', 1, 22, 12, '', '0000-00-00'),
(3, 'aa', 33, 2, 66, '1', '2016-03-16'),
(3, '11', 22, 11, 242, '1', '2016-03-16'),
(3, '33', 45, 33, 1485, '1', '2016-03-16'),
(4, 'aa', 22, 2, 44, '1', '2016-03-16'),
(4, '33', 44, 33, 1452, '1', '2016-03-16'),
(4, 'aa', 66, 2, 132, '1', '2016-03-16'),
(5, 'aa', 56, 2, 112, '1', '2016-03-16'),
(6, '11', 22, 11, 242, '1', '2016-03-16'),
(6, '22', 44, 33, 1452, '1', '2016-03-16'),
(6, '33', 66, 33, 2178, '1', '2016-03-16'),
(7, '55', 11, 66, 726, '1', '2016-03-18'),
(7, '33', 33, 33, 1089, '1', '2016-03-18'),
(8, '11', 4, 11, 44, '1', '2016-03-18'),
(9, '11', 33, 11, 363, '1', '2016-03-18'),
(10, '33', 11, 33, 363, '1', '2016-03-18'),
(10, '22', 33, 33, 1089, '1', '2016-03-18'),
(11, '11', 22, 11, 242, '1', '2016-03-18'),
(11, '55', 12, 66, 792, '1', '2016-03-18'),
(11, '22', 0.5, 33, 16.5, '1', '2016-03-18'),
(12, 'aa', 2, 2, 4, '1', '2016-03-18'),
(12, '11', 33, 11, 363, '1', '2016-03-18'),
(13, '11', 33, 11, 363, '1', '2016-03-18'),
(13, '11', 334, 11, 3674, '1', '2016-03-18'),
(13, '33', 33, 33, 1089, '1', '2016-03-18'),
(14, '11', 222, 11, 2442, '1', '2016-03-22'),
(14, 'aa', 333, 2, 666, '1', '2016-03-22'),
(14, '22', 444, 33, 14652, '1', '2016-03-22'),
(14, '55', 333, 66, 21978, '1', '2016-03-22'),
(10, '33', 11, 33, 363, '1', '2016-03-18'),
(10, '22', 33, 33, 1089, '1', '2016-03-18'),
(15, '11', 111, 11, 1221, '1', '2016-03-22'),
(15, '33', 333, 33, 10989, '1', '2016-03-22'),
(16, '11', 33, 11, 363, '1', '2016-03-22'),
(16, '33', 44, 33, 1452, '1', '2016-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `dno` int(11) NOT NULL,
  `dname` text NOT NULL,
  `ddate` date NOT NULL,
  `dtime` text NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--


-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `empid` decimal(3,0) DEFAULT NULL,
  `ename` char(30) DEFAULT NULL,
  `addr` char(50) DEFAULT NULL,
  `city` char(15) DEFAULT NULL,
  `mobno` char(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--


-- --------------------------------------------------------

--
-- Table structure for table `logi`
--

CREATE TABLE IF NOT EXISTS `logi` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logi`
--


-- --------------------------------------------------------

--
-- Table structure for table `orde`
--

CREATE TABLE IF NOT EXISTS `orde` (
  `ordno` text NOT NULL,
  `ordate` text NOT NULL,
  `userid` text NOT NULL,
  `totalamt` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orde`
--

INSERT INTO `orde` (`ordno`, `ordate`, `userid`, `totalamt`) VALUES
('1', '2000-2-10', '3', '12'),
('1', '2000-2-10', '3', '12'),
('2', '30-2-4000', '3', '20'),
('1', '2000-2-10', '3', '12'),
('1', '1-2-2000', '1', '10');

-- --------------------------------------------------------

--
-- Table structure for table `porder`
--

CREATE TABLE IF NOT EXISTS `porder` (
  `ordno` text NOT NULL,
  `orddate` datetime NOT NULL,
  `totalamt` int(20) NOT NULL,
  `supid` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `porder`
--

INSERT INTO `porder` (`ordno`, `orddate`, `totalamt`, `supid`) VALUES
('a', '0000-00-00 00:00:00', 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `pordertra`
--

CREATE TABLE IF NOT EXISTS `pordertra` (
  `ordno` int(11) NOT NULL,
  `prno` text NOT NULL,
  `qty` double NOT NULL,
  `price` double NOT NULL,
  `amt` double NOT NULL,
  `userid` text NOT NULL,
  `ordate` date NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pordertra`
--

INSERT INTO `pordertra` (`ordno`, `prno`, `qty`, `price`, `amt`, `userid`, `ordate`, `status`) VALUES
(1, '1', 1, 1, 1, '', '0000-00-00', ''),
(2, '12', 1, 22, 12, '', '0000-00-00', ''),
(3, 'aa', 33, 2, 66, '1', '2016-03-16', ''),
(3, '11', 22, 11, 242, '1', '2016-03-16', ''),
(3, '33', 45, 33, 1485, '1', '2016-03-16', ''),
(4, 'aa', 22, 2, 44, '1', '2016-03-16', ''),
(4, '33', 44, 33, 1452, '1', '2016-03-16', ''),
(4, 'aa', 66, 2, 132, '1', '2016-03-16', ''),
(5, 'aa', 56, 2, 112, '1', '2016-03-16', ''),
(6, '11', 22, 11, 242, '1', '2016-03-16', ''),
(6, '22', 44, 33, 1452, '1', '2016-03-16', ''),
(6, '33', 66, 33, 2178, '1', '2016-03-16', ''),
(7, '55', 11, 66, 726, '1', '2016-03-18', ''),
(7, '33', 33, 33, 1089, '1', '2016-03-18', ''),
(8, '11', 4, 11, 44, '1', '2016-03-18', ''),
(9, '11', 33, 11, 363, '1', '2016-03-18', ''),
(10, '33', 11, 33, 363, '1', '2016-03-18', ''),
(10, '22', 33, 33, 1089, '1', '2016-03-18', ''),
(11, '11', 22, 11, 242, '1', '2016-03-18', ''),
(11, '55', 12, 66, 792, '1', '2016-03-18', ''),
(11, '22', 0.5, 33, 16.5, '1', '2016-03-18', ''),
(12, 'aa', 2, 2, 4, '1', '2016-03-18', ''),
(12, '11', 33, 11, 363, '1', '2016-03-18', ''),
(13, '11', 33, 11, 363, '1', '2016-03-18', ''),
(13, '11', 334, 11, 3674, '1', '2016-03-18', ''),
(13, '33', 33, 33, 1089, '1', '2016-03-18', ''),
(14, '11', 222, 11, 2442, '1', '2016-03-22', ''),
(14, 'aa', 333, 2, 666, '1', '2016-03-22', ''),
(14, '22', 444, 33, 14652, '1', '2016-03-22', ''),
(14, '55', 333, 66, 21978, '1', '2016-03-22', ''),
(15, '11', 111, 11, 1221, '1', '2016-03-22', ''),
(15, '33', 333, 33, 10989, '1', '2016-03-22', ''),
(16, '11', 33, 11, 363, '1', '2016-03-22', ''),
(16, '33', 44, 33, 1452, '1', '2016-03-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `prno` text NOT NULL,
  `discription` text NOT NULL,
  `qty` int(20) NOT NULL,
  `mrp` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `qtystock` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prno`, `discription`, `qty`, `mrp`, `price`, `qtystock`) VALUES
('cc', 'aa', 1, 2, 3, 1),
('1', '55', 55, 66, 55, 44),
('1', '55', 55, 66, 55, 44),
('1', '55', 55, 66, 55, 44),
('3', '22', 33, 33, 33, 33),
('22', '33', 44, 33, 22, 11),
('11', '11', 11, 11, 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `invno` text NOT NULL,
  `invdate` datetime NOT NULL,
  `ordno` int(20) NOT NULL,
  `grossamt` int(20) NOT NULL,
  `discount` int(20) NOT NULL,
  `texableamt` int(20) NOT NULL,
  `vat` int(20) NOT NULL,
  `roundoff` int(20) NOT NULL,
  `netamt` int(20) NOT NULL,
  `supid` int(20) NOT NULL,
  `cashcredit` text NOT NULL,
  `chno` int(20) NOT NULL,
  `chdate` datetime NOT NULL,
  `bankname` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`invno`, `invdate`, `ordno`, `grossamt`, `discount`, `texableamt`, `vat`, `roundoff`, `netamt`, `supid`, `cashcredit`, `chno`, `chdate`, `bankname`) VALUES
('a', '0000-00-00 00:00:00', 1, 11, 1, 1, 1, 1, 1, 1, 'a', 1, '0000-00-00 00:00:00', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `purchaset`
--

CREATE TABLE IF NOT EXISTS `purchaset` (
  `invno` text NOT NULL,
  `prno` text NOT NULL,
  `qty` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `AMT` int(20) NOT NULL,
  `taxrate` int(20) NOT NULL,
  `discount` int(20) NOT NULL,
  `VAT` int(20) NOT NULL,
  `NETAMT` int(20) NOT NULL,
  `TAXABLEAMT` int(20) NOT NULL,
  `PENDQTY` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchaset`
--

INSERT INTO `purchaset` (`invno`, `prno`, `qty`, `price`, `AMT`, `taxrate`, `discount`, `VAT`, `NETAMT`, `TAXABLEAMT`, `PENDQTY`) VALUES
('a', 'a', 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `use1`
--

CREATE TABLE IF NOT EXISTS `use1` (
  `userid` text NOT NULL,
  `password` text NOT NULL,
  `username` text NOT NULL,
  `addr` text NOT NULL,
  `city` text NOT NULL,
  `mbno` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `use1`
--

INSERT INTO `use1` (`userid`, `password`, `username`, `addr`, `city`, `mbno`) VALUES
('1', '1', '1', '1', '1', '1');
