-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 10:15 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `busticketregister`
--

CREATE TABLE `busticketregister` (
  `customerid` int(11) NOT NULL,
  `packageid` int(20) NOT NULL,
  `customername` varchar(50) NOT NULL,
  `customeremail` varchar(50) NOT NULL,
  `customerpassword` varchar(40) NOT NULL,
  `customeraddress` text NOT NULL,
  `customercontact` varchar(20) NOT NULL,
  `customermessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busticketregister`
--

INSERT INTO `busticketregister` (`customerid`, `packageid`, `customername`, `customeremail`, `customerpassword`, `customeraddress`, `customercontact`, `customermessage`) VALUES
(4, 1, 'raj', 'raj@gmail.com', '123456', 'mumbai', '9876543210', 'surat'),
(5, 1, 'vivek', 'vivek@gmail.com', '987654', 'surat', '9876548976', 'surat'),
(6, 1, 'admin', 'poojarajput0024@gmail.com', '1234', 'surat', '6355852054', 'hello'),
(7, 1, 'jay patel', 'jay@gmail.com', '12345', 'surat', '8976757645', 'hello'),
(8, 1, 'admin', 'poojarajput0024@gmail.com', '1234', 'B2-201, swapan shrushtri', '6355852054', 'saassda');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `sid` int(11) NOT NULL,
  `customerid` varchar(50) NOT NULL COMMENT 'userid',
  `number` int(10) NOT NULL COMMENT 'seat number',
  `PNR` varchar(13) NOT NULL COMMENT 'PNR',
  `date` date NOT NULL COMMENT 'date of booking'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`sid`, `customerid`, `number`, `PNR`, `date`) VALUES
(5, 'raj', 21, '2019-03-22-21', '2019-03-22'),
(6, 'raj', 22, '2019-03-22-22', '2019-03-22'),
(7, 'raj', 23, '2019-03-22-23', '2019-03-22'),
(8, 'raj', 24, '2019-03-22-24', '2019-03-22'),
(9, 'vivek', 17, '2019-03-22-17', '2019-03-22'),
(10, 'admin', 21, '2019-03-30-21', '2019-03-30'),
(11, 'admin', 22, '2019-03-30-22', '2019-03-30'),
(12, 'jay', 17, '2019-03-30-17', '2019-03-30'),
(13, 'jay', 18, '2019-03-30-18', '2019-03-30'),
(14, 'admin', 9, '2019-04-04-9', '2019-04-04'),
(15, 'admin', 10, '2019-04-04-10', '2019-04-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busticketregister`
--
ALTER TABLE `busticketregister`
  ADD PRIMARY KEY (`customerid`),
  ADD KEY `packageid` (`packageid`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `busticketregister`
--
ALTER TABLE `busticketregister`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `busticketregister`
--
ALTER TABLE `busticketregister`
  ADD CONSTRAINT `busticketregister_ibfk_1` FOREIGN KEY (`packageid`) REFERENCES `package` (`packageid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
