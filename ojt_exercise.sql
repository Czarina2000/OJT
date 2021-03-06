-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 03:56 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojt_exercise`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `ID` int(11) NOT NULL,
  `Reg_ID` int(11) NOT NULL,
  `City` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ID`, `Reg_ID`, `City`) VALUES
(1, 5, 'Batangas'),
(2, 5, 'Cavite'),
(3, 5, 'Laguna'),
(4, 5, 'Quezon'),
(5, 5, 'Rizal'),
(6, 2, 'Ilocos Norte'),
(7, 2, 'Ilocos Sur'),
(8, 2, 'La Union'),
(9, 2, 'Pangasinan'),
(10, 3, 'Batanes'),
(11, 3, 'Cagayan'),
(12, 3, 'Isabela'),
(13, 3, 'Nueva Vizcaya'),
(14, 3, 'Quirino'),
(15, 4, 'Aurora'),
(16, 4, 'Bataan'),
(17, 4, 'Bulacan'),
(18, 4, 'Nueva Ecija'),
(19, 4, 'Pampanga'),
(20, 4, 'Tarlac'),
(21, 4, 'Zambales'),
(22, 6, 'Marinduque'),
(23, 6, 'Oriental Mindoro'),
(24, 6, 'Occidental Mindoro'),
(25, 6, 'Palawan'),
(26, 6, 'Romblon'),
(27, 7, 'Albay'),
(28, 7, 'Camarines Norte'),
(29, 7, 'Camarines Sur'),
(30, 7, 'Catanduanes'),
(31, 7, 'Masbate'),
(32, 7, 'Sorsogon'),
(33, 8, 'Aklan'),
(34, 8, 'Antique'),
(35, 8, 'Capiz'),
(36, 8, 'Guimaras'),
(37, 8, 'Iloilo'),
(38, 8, 'Negros Occidental'),
(39, 9, 'Bohol'),
(40, 9, 'Cebu'),
(41, 9, 'Negros Oriental'),
(42, 9, 'Siquijor'),
(43, 10, 'Biliran'),
(44, 10, 'Eastern Samar'),
(45, 10, 'Northern Samar'),
(46, 10, 'Samar'),
(47, 10, 'Leyte'),
(48, 10, 'Southern Leyte'),
(49, 11, 'Zamboanga del Norte'),
(50, 11, 'Zamboanga del Sur'),
(51, 11, 'Zamboanga Sibugay'),
(52, 12, 'Bukidnon'),
(53, 12, 'Camiquin'),
(54, 12, 'Misamis Oriental'),
(55, 12, 'Misamis Occidental'),
(56, 12, 'Lanao del Norte'),
(57, 13, 'Davao De Oro'),
(58, 13, 'Davao Del Norte'),
(59, 13, 'Davao del Sur'),
(60, 13, 'Davao Oriental '),
(61, 13, 'Davao Occidental'),
(62, 14, 'North Cotabato'),
(63, 14, 'South Cotobato'),
(64, 14, 'Sarangani'),
(65, 14, 'Sultan Kudarat'),
(66, 15, 'Agusan del Norte'),
(67, 15, 'Agusan del Sur'),
(68, 15, 'Dinagat Islands'),
(69, 15, 'Surigao del Norte'),
(70, 15, 'Surigao Del Sur'),
(71, 16, 'Maguindanao'),
(72, 16, 'Lanao Del Sur'),
(73, 16, 'Basilan'),
(74, 16, 'Sulu'),
(75, 16, 'Tawi-Tawi'),
(76, 17, 'Abra'),
(77, 17, 'Apayao'),
(78, 17, 'Benguet'),
(79, 17, 'Ifugao'),
(80, 17, 'Kalinga'),
(81, 17, 'Mountain Province');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Profile_ID` int(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Middlename` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Birthday` date NOT NULL,
  `Age` int(50) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `Region` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Profile_ID`, `Firstname`, `Middlename`, `Lastname`, `Birthday`, `Age`, `Address1`, `Address2`, `Region`, `City`) VALUES
(100019, 'Czarina', 'Fontanilla', 'Bacit', '2012-01-18', 10, 'Butucan', 'Looc', 'Region 2: Cagayan Valley', 'Cagayan'),
(100020, 'Aj', 'Ote', 'Dela Vega', '2000-01-12', 22, 'Bulihan', 'Calayo', 'Region 6: Western Visayas', 'Antique'),
(100021, 'Bryan', 'Tiqus', 'Calbayar', '2001-04-15', 20, 'Utod', 'Utod', 'Region 7: Central Visayas', 'Negros Oriental'),
(100022, 'Lovely', 'Baral', 'Bagtas', '2009-03-10', 13, 'Brgy. 1', 'Malapad Na Bato', 'Region 4A: Calabarzon', 'Batangas');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `ID` int(11) NOT NULL,
  `Region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`ID`, `Region`) VALUES
(1, 'NCR: National Capital Region'),
(2, 'Region 1: Ilocos Region'),
(3, 'Region 2: Cagayan Valley'),
(4, 'Region 3: Central Luzon'),
(5, 'Region 4A: Calabarzon'),
(6, 'Region 4B: MIMAROPA'),
(7, 'Region 5: Bicol Region'),
(8, 'Region 6: Western Visayas'),
(9, 'Region 7: Central Visayas'),
(10, 'Region 8: Eastern Visayas'),
(11, 'Region 9: Zamboanga Peninsula'),
(12, 'Region 10: Northern Mindanao\r\n'),
(13, 'Region 11: Davao Region\r\n'),
(14, 'Region 12: Soccskargen\r\n'),
(15, 'Region 13: Caraga Region\r\n'),
(16, 'Barmm\r\n'),
(17, 'CAR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `regcity` (`Reg_ID`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Profile_ID`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `Profile_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100024;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `regcity` FOREIGN KEY (`Reg_ID`) REFERENCES `region` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
