-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 01:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appID` int(11) NOT NULL,
  `appDate` date NOT NULL,
  `appTime` time NOT NULL,
  `patientIC` varchar(12) NOT NULL,
  `empID` int(11) NOT NULL,
  `treatmentID` int(11) DEFAULT NULL,
  `statusapp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appID`, `appDate`, `appTime`, `patientIC`, `empID`, `treatmentID`, `statusapp`) VALUES
(10, '0000-00-00', '00:00:00', '020405060233', 222, 2, 'completed'),
(11, '0000-00-00', '10:00:00', '010523068744', 222, 4, 'completed'),
(12, '2022-07-20', '10:34:46', '020510140950', 505, 4, 'completed'),
(13, '2022-07-03', '00:00:11', '020510140950', 222, 0, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empID` int(11) NOT NULL,
  `empRole` varchar(200) NOT NULL,
  `empUN` varchar(200) NOT NULL,
  `empPwd` varchar(200) NOT NULL,
  `empName` varchar(200) NOT NULL,
  `statusemp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empID`, `empRole`, `empUN`, `empPwd`, `empName`, `statusemp`) VALUES
(101, 'Nurse', 'N101', '1111', 'NOR SYAHIRAH BINTI AFANDI', 'active'),
(222, 'Doctor', 'D222', '1234', 'Hafiz Kamal Bin Kamarul', 'active'),
(505, 'Doctor', 'D505', '5555', 'AFIQ BIN MUSTAFA', 'inactive'),
(606, 'Doctor', 'D606', '6666', 'FATASYA NUR HUSNA BINTI ZAILAN', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientIC` varchar(12) NOT NULL,
  `patientName` varchar(200) NOT NULL,
  `patientAge` int(11) NOT NULL,
  `patientGender` varchar(20) NOT NULL,
  `patientPhoneNumber` varchar(11) NOT NULL,
  `patientAddress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientIC`, `patientName`, `patientAge`, `patientGender`, `patientPhoneNumber`, `patientAddress`) VALUES
('010523068744', 'ANDI BIN ISMAIL', 20, 'Male', '01299848393', 'SHAH ALAM'),
('020405060233', 'AKMAL DANIEL BIN MOHD BADROL HISHAM', 20, 'Male', '0179854120', 'TAMAN NEGARA, KUALA TAHAN, 27000, JERANTUT, PAHANG'),
('020510140950', 'Siti Aminah binti', 20, 'Male', '0136508191', 'No.9,Jalan Taman Kinrara');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `total_issued` decimal(6,2) NOT NULL,
  `paymentTotal` int(20) NOT NULL,
  `appID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentID`, `total_issued`, `paymentTotal`, `appID`) VALUES
(194, '250.00', 700, 10),
(197, '90.00', 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treatmentID` int(11) NOT NULL,
  `treatmentCost` decimal(6,2) NOT NULL,
  `treatmentName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treatmentID`, `treatmentCost`, `treatmentName`) VALUES
(0, '0.00', NULL),
(2, '250.00', 'whitening'),
(3, '150.00', 'scaling'),
(4, '90.00', 'Check-up');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appID`),
  ADD KEY `patientIC` (`patientIC`),
  ADD KEY `treatmentID` (`treatmentID`),
  ADD KEY `empID` (`empID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientIC`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `appID` (`appID`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treatmentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `treatmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`patientIC`) REFERENCES `patient` (`patientIC`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`treatmentID`) REFERENCES `treatment` (`treatmentID`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`empID`) REFERENCES `employee` (`empID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`appID`) REFERENCES `appointment` (`appID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
