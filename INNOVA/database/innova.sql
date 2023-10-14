-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 03:25 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innova`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `CID` int(11) NOT NULL,
  `Email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Subject` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Messages` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`CID`, `Email`, `Subject`, `Messages`) VALUES
(105, 'nadun@icloud.com', 'Regarding my life insurance policy number - INV2564', 'This is just to know whether there is a better package that I could upgrade to cover all my expenses'),
(106, 'hansaka@huami.com', 'Regarding the new range of life insurance packages available ', 'Could you pls reply by emailing me to my above email regarding the newly available products.\r\n      ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_data`
--

CREATE TABLE `feedback_data` (
  `F_ID` int(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_data`
--

INSERT INTO `feedback_data` (`F_ID`, `Name`, `Email`, `Feedback`) VALUES
(2, 'Eranda Madhushanka', 'era@gmail.com', 'I am really satisfied with your service.'),
(3, 'Ravidu', 'ravi@yahoo.com', 'Excellent service.');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_id` int(11) NOT NULL,
  `Email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `INNOVA_ID` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Package` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Payment_Amount` float NOT NULL,
  `card_type` varchar(100) CHARACTER SET latin1 NOT NULL,
  `exp_year` int(11) NOT NULL,
  `exp_month` varchar(100) CHARACTER SET latin1 NOT NULL,
  `CVV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_id`, `Email`, `INNOVA_ID`, `Package`, `Payment_Amount`, `card_type`, `exp_year`, `exp_month`, `CVV`) VALUES
(948, 'tharindu@gmai.com', 'INV-102', 'INNOVA SMART WEALTH', 120, 'visa', 2020, 'January', 553),
(949, 'eranda@gmai.com', 'INV-152', 'INNOVA SMART WEALTH', 550, 'visa', 2020, 'January', 683);

-- --------------------------------------------------------

--
-- Table structure for table `portal`
--

CREATE TABLE `portal` (
  `Cl_ID` int(50) NOT NULL,
  `phonenum` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `passwordd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portal`
--

INSERT INTO `portal` (`Cl_ID`, `phonenum`, `password`, `passwordd`) VALUES
(3, 778545442, 'Amma123', 'Amma123'),
(4, 778434041, 'Wakka321', 'Wakka321');

-- --------------------------------------------------------

--
-- Table structure for table `ratting`
--

CREATE TABLE `ratting` (
  `ra_id` int(20) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `rating1` varchar(50) NOT NULL,
  `rating2` varchar(50) NOT NULL,
  `commentText` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratting`
--

INSERT INTO `ratting` (`ra_id`, `firstName`, `lastName`, `rating1`, `rating2`, `commentText`) VALUES
(10, 'Kasun', 'Chamara', 'max', 'average', 'Service is excellent'),
(11, 'Tharidu', 'Dilshan', 'min', 'bad', 'Price is too high');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `R_id` int(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `Homeaddress` varchar(50) NOT NULL,
  `NIC` int(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `MobileNo` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Companyaddress` varchar(50) NOT NULL,
  `InsurancePackage` varchar(50) NOT NULL,
  `Password1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`R_id`, `firstName`, `lastName`, `Homeaddress`, `NIC`, `Gender`, `MobileNo`, `Email`, `Companyaddress`, `InsurancePackage`, `Password1`) VALUES
(3, 'Biyon', 'Meegaswatta', '104f, kadawatha, ganemulla', 992903199, 'Male', 778434041, 'hansaka@yahoo.com', 'Commercial bank', 'Protection', '1234'),
(4, 'Chanudi', 'Perera', '30A,Cheenagahakottuna rd, Depanama, Pannipitiya ', 123456789, 'Female', 778434041, 'chanudi@gmail.com', 'Bank of Ceylon', 'Retirement', '56');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `C_ID` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`C_ID`, `Email`, `Password`) VALUES
(3, 'nadun@gmail.com', '123'),
(4, 'nipuni@yahoo.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `feedback_data`
--
ALTER TABLE `feedback_data`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_id`);

--
-- Indexes for table `portal`
--
ALTER TABLE `portal`
  ADD PRIMARY KEY (`Cl_ID`);

--
-- Indexes for table `ratting`
--
ALTER TABLE `ratting`
  ADD PRIMARY KEY (`ra_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`R_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`C_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `feedback_data`
--
ALTER TABLE `feedback_data`
  MODIFY `F_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=951;

--
-- AUTO_INCREMENT for table `portal`
--
ALTER TABLE `portal`
  MODIFY `Cl_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ratting`
--
ALTER TABLE `ratting`
  MODIFY `ra_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `R_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `C_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
