-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 09:15 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csc_2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `financial_table`
--

CREATE TABLE `financial_table` (
  `user_id` int(20) NOT NULL,
  `student_fname` varchar(20) DEFAULT NULL,
  `student_lname` varchar(20) NOT NULL,
  `student_no` varchar(20) NOT NULL DEFAULT '0',
  `D_O_B` varchar(10) DEFAULT NULL,
  `Amount_paid` varchar(100) DEFAULT NULL,
  `Balance` varchar(100) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Next_of_kin` varchar(20) DEFAULT NULL,
  `Sponsor` varchar(20) DEFAULT NULL,
  `Telephone` varchar(20) DEFAULT NULL,
  `Sponsors_contact` varchar(20) DEFAULT NULL,
  `Reg_No` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_table`
--

INSERT INTO `financial_table` (`user_id`, `student_fname`, `student_lname`, `student_no`, `D_O_B`, `Amount_paid`, `Balance`, `Email`, `Next_of_kin`, `Sponsor`, `Telephone`, `Sponsors_contact`, `Reg_No`) VALUES
(1, 'Raphael', 'Abila', '216006923', '01/12/1991', '100000', '5000', 'rphlabila@gmail.com', 'josh', 'private', '783853401', '757585807', '16/u/2673'),
(2, 'Davis', 'Agaba', '21667578', '12/03/1965', '150000', '4000', 'agabadavis@gmail.com', 'penny', 'govt', '772647766', '2147483647', '16/u/2812'),
(4, '41', '41', '41', '41', '41', '41', '41', '41', '41', '41', '42', '16/U/734/PS'),
(5, '1', '1', '121', '1', '1', '1', '1', '1', '1', '1', '1', '16/u/2812'),
(6, '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '16/u/2812'),
(7, 'KK', 'j', '122', '222', '2', '2', '2', '2', '2', '2', '2', '16/u/2812'),
(8, 'Wakoko', 'Kenneth', '2150021', '19/9/1996', '10000', '2000', 'ken@yahoo.com', 'Ken', 'Gov', '12345678', '12345678', '16/u/2812');

-- --------------------------------------------------------

--
-- Table structure for table `results_table`
--

CREATE TABLE `results_table` (
  `user_id` int(20) NOT NULL,
  `student_fname` varchar(20) DEFAULT NULL,
  `student_lname` varchar(20) NOT NULL,
  `course_unit` varchar(20) DEFAULT NULL,
  `coursework_marks` int(3) DEFAULT NULL,
  `Test_marks` int(3) DEFAULT NULL,
  `Exam_marks` int(3) DEFAULT NULL,
  `Reg_No` varchar(15) NOT NULL,
  `Lecturers_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results_table`
--

INSERT INTO `results_table` (`user_id`, `student_fname`, `student_lname`, `course_unit`, `coursework_marks`, `Test_marks`, `Exam_marks`, `Reg_No`, `Lecturers_name`) VALUES
(11, 'Nakafeero ', 'Peninah', 'Java', 34, 80, 88, '16/u/26006943', 'Mr.Kizito'),
(7, 'Raphael', 'Abila', 'CS', 30, 25, 71, '16/U/260687544', 'Semogerere'),
(12, 'Nkunda ', 'Dorothy', 'SAD', 23, 78, 73, '16/U/26696', 'Mrs. Monica'),
(1, 'Abila', 'Raph', 'SAD', 39, 56, 89, '16/u/2673', 'Macy'),
(2, 'Davis', 'Agaba', 'DIM', 99, 39, 100, '16/u/2812', 'Amio'),
(14, 'Junta', 'David', 'Java', 25, 20, 65, '16/u/28145', 'Mr.Kizito'),
(13, 'Akello ', 'Rebecca', 'DIM', 40, 85, 98, '16/U/734/PS', 'Lugira ');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(10) NOT NULL,
  `StaffType` varchar(20) NOT NULL,
  `StaffName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffType`, `StaffName`, `Password`) VALUES
(1, 'Administrator', 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `financial_table`
--
ALTER TABLE `financial_table`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `Reg_No` (`Reg_No`);

--
-- Indexes for table `results_table`
--
ALTER TABLE `results_table`
  ADD PRIMARY KEY (`Reg_No`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `financial_table`
--
ALTER TABLE `financial_table`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `results_table`
--
ALTER TABLE `results_table`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `financial_table`
--
ALTER TABLE `financial_table`
  ADD CONSTRAINT `financial_table_ibfk_1` FOREIGN KEY (`Reg_No`) REFERENCES `results_table` (`Reg_No`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
