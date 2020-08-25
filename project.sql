-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 05:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `bdate` varchar(255) NOT NULL,
  `adate` varchar(255) NOT NULL,
  `eq` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `board` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `division` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `mship` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `fname`, `lname`, `bdate`, `adate`, `eq`, `degree`, `board`, `year`, `division`, `experience`, `mship`) VALUES
(1, 'Dr.kabir', 'hasan', '12/07/1980', '7/05/2018', 'FCPS', 'MBBS', 'Dhaka', 2004, '1st Division', '2 years in DMC', 'BMA'),
(2, 'Dr.Mahfuj', 'Rahman', '05/04/1981', '6/05/2018', 'PHD', 'MBBS', 'KHULNA', 2003, '2nd Division', '1 year in private', 'British Medical Society'),
(3, 'Dr.Rema', 'Khan', '11/02/1985', '8/05/2018', 'MBBS', 'MBBS', 'Dhaka', 2001, '1st Division', '1 year in private', 'AMS'),
(4, 'Dr.Nipa', 'Mondol', '14/06/1980', '7/05/2018', 'PLS', 'MBBS', 'Dhaka', 2001, '1st Division', '4 year in private', 'American Medical Society'),
(5, 'Dr.Zahid', 'hasan', '17/11/1979', '5/05/2018', 'FCPS', 'MBBS', 'NW', 2001, '1st Division', '2 year in KMC', 'BMA'),
(6, 'Dr.zakir', 'hossain', '18/10/1978', '17/11/2017', 'MBBS', 'FCPS', '', 2000, '1st Division', '1 year', 'BMA'),
(7, 'Dr.Neha', 'khan', '12/12/1980', '12/11/2017', 'FCPS', 'FCPS', 'Dhaka', 2001, '1st Division', 'Assistant doctor', 'BMA'),
(8, 'Dr.Nasir', 'Hasan', '16/07/1985', '12/12/2018', 'MBBS', 'MBBS', 'Dhaka', 2008, '1st Division', '2 years', 'American Medical Society'),
(10, 'Dr.nahid', 'hasan', '12/01/1980', '07/05/2010', 'MBBS', 'FCPS', 'Dhaka', 2000, '1st Division', 'no experience', 'British Medical Society');

-- --------------------------------------------------------

--
-- Table structure for table `inverstigation`
--

CREATE TABLE `inverstigation` (
  `Patient id` int(11) NOT NULL,
  `Height` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Symptoms` varchar(255) NOT NULL,
  `Bpressure` int(11) NOT NULL,
  `Fhabit` varchar(255) NOT NULL,
  `Hobby` varchar(255) NOT NULL,
  `Disease` varchar(255) NOT NULL,
  `sig` varchar(255) NOT NULL,
  `Did` int(11) NOT NULL,
  `Designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inverstigation`
--

INSERT INTO `inverstigation` (`Patient id`, `Height`, `Weight`, `Symptoms`, `Bpressure`, `Fhabit`, `Hobby`, `Disease`, `sig`, `Did`, `Designation`) VALUES
(1, 212, 212, '212', 212, '212', 'Foot ball', '212', '211212', 212, '212'),
(2, 121, 121, '121', 121, '121', 'Foot ball', '121', '121', 121, '121');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `dsupply` varchar(255) NOT NULL,
  `mid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `uprice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `mdate` varchar(255) NOT NULL,
  `exdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`sid`, `sname`, `dsupply`, `mid`, `name`, `type`, `uprice`, `quantity`, `mdate`, `exdate`) VALUES
(1, 'AB', '11/4/2018', 1, 'AA', 'TT', 5, 100, '9/9/2017', '9/9/2019'),
(2, 'VF', '10/5/2018', 2, 'CC', 'KK', 10, 200, '10/11/2017', '10/11/2019'),
(3, 'ZY', '1/1/2018', 3, 'PP', 'HH', 20, 500, '08/08/2016', '08/08/2018'),
(4, 'asd', '1/2/2018', 213, 'afhas', 'ttgas', 8, 1000, '1/1/2016', '1/1/2019'),
(111, 'sdsfdfsdf', '1/2/2018', 1231, 'dfssfsdfsdf', 'rrr', 111, 111111111, '1/1/2016', '1/1/2019');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `nid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `bdate` varchar(255) NOT NULL,
  `adate` varchar(255) NOT NULL,
  `eq` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `board` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `division` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nid`, `fname`, `lname`, `bdate`, `adate`, `eq`, `degree`, `board`, `year`, `division`, `experience`) VALUES
(1, 'Rita', 'khan', '12/12/1989', '5/05/2018', 'HSC', 'HSC', 'DHAKA', 2004, '2nd', '6 months'),
(2, 'Afia', 'zahan', '5/7/1988', '7/05/2018', 'HSC', 'HSC', 'DHAKA', 2003, '1sd', '1 year'),
(3, 'Arifa', 'hasan', '6/05/1992', '7/05/2018', 'HSC', 'HSC', 'Khulna', 2005, '1st', 'no experience'),
(4, 'Abs', 'DEF', '12/12/1991', '12/12/2017', 'HSC', 'HSC', 'Khulna', 2008, '1st Division', 'no experience');

-- --------------------------------------------------------

--
-- Table structure for table `patient_admission`
--

CREATE TABLE `patient_admission` (
  `Patient id` int(11) NOT NULL,
  `adate` varchar(12) DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `bdate` varchar(12) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `sig` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_admission`
--

INSERT INTO `patient_admission` (`Patient id`, `adate`, `fname`, `lname`, `bdate`, `mobile`, `address`, `paddress`, `profession`, `amount`, `sig`) VALUES
(49, '12/11/2017', 'Navid', 'Hasan', '2/2/1995', 1686798028, 'mirpur', 'mirpur', 'Private Job', 1000, 'navid'),
(50, '8/9/2017', 'Reza', 'Hasan', '09/10/1995', 982744444, 'dhaka', 'khulna', 'Government job', 2000, 'hasan'),
(51, '12/12/2018', 'hasan', 'rakib', '30/12/1995', 234235252, 'fdfsdsdsfd', 'aaaaaaaaaa', 'Business', 13000, 'nhad');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Patient_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `cdate` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `tc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Patient_id`, `sid`, `cdate`, `time`, `tc`) VALUES
(1, 1, '12/12/2017', '12:30', 'Pathology'),
(2, 2, '10/12/2017', '09:05 PM', 'Pathology');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `Patient id` int(11) NOT NULL,
  `dadvice` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Madvice` varchar(255) NOT NULL,
  `sno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `tday` varchar(255) NOT NULL,
  `morn` varchar(255) NOT NULL,
  `noon` varchar(255) NOT NULL,
  `even` varchar(255) NOT NULL,
  `test` varchar(255) NOT NULL,
  `sig` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`Patient id`, `dadvice`, `time`, `Madvice`, `sno`, `name`, `quantity`, `tday`, `morn`, `noon`, `even`, `test`, `sig`, `des`) VALUES
(1, '11', '', '11', 11, '11', 11, '11', 'Before Meal', '', '', '11', '11', ''),
(2, '11', '', '11', 11, '11', 11, '11', 'Before Meal', '', '', '11', '11', ''),
(3, '11', '', '11', 11, '11', 11, '11', 'Before Meal', 'Before Meal', 'Before Meal', '11', '11', '11'),
(4, '11', '', '11', 11, '11', 11, '11', 'Before Meal', 'Before Meal', 'Before Meal', '11', '11', '11'),
(5, '11', '', '11', 11, '11', 11, '11', 'Before Meal', 'Before Meal', 'Before Meal', '11', '11', '11'),
(6, '12', '12', '12', 12, '12', 12, '12', 'After Meal', 'After Meal', 'Before Meal', '12', '12', '12');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `wid` int(11) NOT NULL,
  `wname` varchar(255) NOT NULL,
  `rid` int(11) NOT NULL,
  `nid` int(11) NOT NULL,
  `sno` int(11) NOT NULL,
  `bno` int(11) NOT NULL,
  `btype` varchar(255) NOT NULL,
  `rent` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`wid`, `wname`, `rid`, `nid`, `sno`, `bno`, `btype`, `rent`, `status`) VALUES
(1, 'A', 100, 200, 1, 5, 'B', 1000, 'empty'),
(2, 'B', 101, 201, 2, 6, 'C', 500, 'empty'),
(3, 'CC', 102, 203, 3, 4, 'DD', 1500, 'occupied');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `inverstigation`
--
ALTER TABLE `inverstigation`
  ADD PRIMARY KEY (`Patient id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `patient_admission`
--
ALTER TABLE `patient_admission`
  ADD PRIMARY KEY (`Patient id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`Patient id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inverstigation`
--
ALTER TABLE `inverstigation`
  MODIFY `Patient id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_admission`
--
ALTER TABLE `patient_admission`
  MODIFY `Patient id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `Patient id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
