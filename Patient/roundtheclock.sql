-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 11:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roundtheclock`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Sr_No` int(6) NOT NULL,
  `Patient_Name` varchar(64) NOT NULL,
  `Doctor_Name` varchar(64) NOT NULL,
  `Age` int(32) NOT NULL,
  `Date_of_Appointment` date NOT NULL,
  `Time_Slot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`Sr_No`, `Patient_Name`, `Doctor_Name`, `Age`, `Date_of_Appointment`, `Time_Slot`) VALUES
(1, 'Urvashi Gopal', 'Dr. Aditi Singh', 32, '2020-11-11', '11:00-12:00'),
(2, 'Dhiraj Shetty', 'Dr. Abhishek Rathord', 23, '2020-11-11', '18:00-19:00'),
(3, 'Maya Saxena', 'Dr. Nikita Sonavane', 26, '2020-11-12', '10:00-11:00'),
(4, 'Umesh Goyal', 'Dr. Nikita Sonavane', 58, '2020-11-12', '17:00-18:00'),
(5, 'Ankita Tata', 'Dr. Abhishek Rathord', 23, '2020-11-12', '20:00-21:00'),
(6, 'Anil Joshi', 'Dr. Aditi Singh', 38, '2020-11-13', '12:00-13:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `doctor_id` int(20) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `Age` int(3) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Qualification` varchar(64) NOT NULL,
  `Specialization` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`doctor_id`, `Name`, `Age`, `Phone`, `Email`, `Qualification`, `Specialization`) VALUES
(1, 'Dr. Aditi Singh', 34, 873543976, 'aditi.singh@roundtheclock.com', 'MBBS, DNB', 'Neurosurgeon'),
(2, 'Dr. Abhishek Rathord', 38, 884756384, 'abhishek.rathord@roundtheclock.com', 'MBBS', 'General Physician'),
(3, 'Dr. Nikita Sonavane', 36, 998345639, 'nikita.sonavne2@roundtheclock.com', 'BSD, PDD', 'Dermatologist');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Sr_No` int(20) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Status` varchar(64) NOT NULL,
  `Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Sr_No`, `Name`, `Email`, `Status`, `Feedback`) VALUES
(1, 'Ankita Tata', 'ankita.tata@gmail.com', 'Patient', 'Unable to view the next appointment');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Name` varchar(64) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Confirm_Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `Phone`, `Email`, `Password`, `Confirm_Password`) VALUES
('Dr. Abhishek Rathord', 884756384, 'abhishek.rathord@roundtheclock.com', 'Password@123', 'Password@123'),
('Dr. Aditi Singh', 873543976, 'aditi.singh@roundtheclock.com', 'Password@123', 'Password@123'),
('Ankita Tata', 998472648, 'ankitatata83@gmail.com', 'Password@123', 'Password@123'),
('Dhiraj Shetty', 994858394, 'dhiraj99@gmail.com', 'Password@123', 'Password@123'),
('Umesh Goyal', 993847293, 'goyal.umesh@yahoo.co.in', 'Password@123', 'Password@123'),
('Anil Joshi', 848593829, 'joshi.anil2@gmail.com', 'Password@123', 'Password@123'),
('Maya Saxena', 848593853, 'mayasaxena26@yahoo.in', 'Password@123', 'Password@123'),
('Dr. Nikita Sonavane', 998345639, 'nikita.sonavne2@roundtheclock.com', 'Password@123', 'Password@123'),
('Roxanne D\'Souza', 948594845, 'roxanne.admin@roundtheclock.com', 'Password@123', 'Password@123'),
('Urvashi Gopal', 948593847, 'urvashigopal3@gmail.com', 'Password@123', 'Password@123');

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `Patient_Id` int(20) NOT NULL,
  `Patient_Name` varchar(64) NOT NULL,
  `Doctor_Name` varchar(64) NOT NULL,
  `Date_of_Appointment` date NOT NULL,
  `Symptoms` text NOT NULL,
  `Prescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_history`
--

INSERT INTO `medical_history` (`Patient_Id`, `Patient_Name`, `Doctor_Name`, `Date_of_Appointment`, `Symptoms`, `Prescription`) VALUES
(1, 'Urvashi Gopal', 'Dr. Aditi Singh', '2020-10-20', 'tumor in the temporal lobe, unilateral hearing loss on the left side, giddiness, less appreciation of music', 'Recommended a CT and MRI scan'),
(2, 'Dhiraj Shetty', 'Dr. Abishekh Rathord', '2020-10-20', 'inconsistent fever, headache, loss of appetite', 'Combiflam SOS'),
(3, 'Maya Saxena', 'Dr. Nikita Sonavane', '2020-10-21', 'rashes on skin aggravated when exposed to sunlight, constant itching', 'momate cream, applied twice a day. use sunscreen'),
(4, 'Umesh Goyal', 'Dr. Nikita Sonavane', '2020-10-21', 'dandruff, itchy head', 'scalpe shampoo to be used after washing hair with regular shampoo'),
(5, 'Ankita Tata', 'Dr. Abhishek Rathord', '2020-10-22', 'throat infection, dry cough, slight fever, loss of appetite', 'cough syrup, oncet CF, plently of fluids'),
(6, 'Anil Joshi', 'Dr. Aditi Singh', '2020-10-23', 'severe backache, difficulty in sitting for a long time', 'MRI of spinal cord, combiflam SOS');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `Patient_Id` int(20) NOT NULL,
  `Patient_Name` varchar(64) NOT NULL,
  `Age` int(32) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`Patient_Id`, `Patient_Name`, `Age`, `Phone`, `Email`) VALUES
(1, 'Urvashi Gopal', 32, 948593847, 'urvashigopal3@gmail.com'),
(2, 'Dhiraj Shetty', 23, 994858394, 'dhiraj99@gmail.com'),
(3, 'Maya Saxena', 26, 848593853, 'mayasaxena26@yahoo.in'),
(4, 'Umesh Goyal', 58, 993847293, 'goyal.umesh@yahoo.co.in'),
(5, 'Ankita Tata', 23, 998472648, 'ankitatata83@gmail.com'),
(6, 'Anil Joshi', 38, 848593829, 'joshi.anil2@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`Sr_No`);

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Sr_No`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`Patient_Id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`Patient_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
