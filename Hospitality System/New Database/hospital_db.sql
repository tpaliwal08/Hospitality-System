-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2013 at 03:50 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE IF NOT EXISTS `blood_donor` (
  `donor_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `modified_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`donor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`donor_id`, `firstname`, `lastname`, `age`, `weight`, `bloodgroup`, `address`, `email`, `mobile`, `modified_date`, `status`) VALUES
(1, 'Ramesh', 'sharma', 23, 70, 'A-', 'INDORE', 'r@gmail.com', '9858787558', '2013-05-02', 1),
(2, 'chetan', 'yadav', 23, 65, 'B+', 'Musakhedi ,indore', 'chetanyadav7@gmail.com', '2147483647', '2013-04-28', 1),
(3, 'Ajay', 'Rathod', 24, 50, 'A+', 'indore', 'aajya@gmail.com', '2147483647', '2013-04-28', 1),
(4, 'anil', 'sharma', 24, 65, 'o+', 'naulkha ,indore', '', '2147483647', '2013-04-28', 1),
(5, 'hitesh', 'sharma', 24, 55, 'o+', 'indore', '', '9898987878', '0000-00-00', 1),
(6, 'monu', 'SHARMA', 24, 55, 'o+', 'bamnala', '', '9898987878', '2013-05-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blood_group`
--

CREATE TABLE IF NOT EXISTS `blood_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `blood_group`
--

INSERT INTO `blood_group` (`group_id`, `group_name`, `quantity`, `created_date`, `modified_date`, `status`) VALUES
(1, 'A+', 15, '2013-04-28', '2013-05-07', 1),
(2, 'B+', 5, '2013-04-28', '2013-04-28', 1),
(3, 'A-', 5, '2013-04-28', '2013-04-28', 1),
(4, 'B-', 5, '2013-04-28', '2013-04-28', 1),
(5, 'O+', 5, '2013-04-28', '2013-04-28', 1),
(6, 'O-', 5, '2013-04-28', '2013-04-28', 1),
(7, 'AB+', 5, '2013-04-28', '2013-04-28', 1),
(8, 'AB-', 5, '2013-04-28', '2013-04-28', 1),
(9, 'l', 56, '0000-00-00', '2013-05-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `specialization` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `firstname`, `lastname`, `email`, `mobile`, `address`, `specialization`, `created_date`, `modified_date`, `status`) VALUES
(4, 'Dr. Chetan ', 'Yadav', 'chetanyadav7@hotmail.com', '2147483647', 'indore', 10, '0000-00-00', '0000-00-00', 1),
(5, 'Dr. Anil', 'Karadwal', 'aani.karadwal@gmail.com', '2147483647', 'naulkha ,indore', 0, '0000-00-00', '0000-00-00', 1),
(6, 'Dr. Ranbeer', 'kapoor', 'kapoor@gmail.com', '2147483647', 'vijay nagar indore', 11, '0000-00-00', '0000-00-00', 1),
(7, 'Dr. Abhishek', 'Sharma', 'abhishek@gmail.com', '2147483647', 'Bhawar kua indore', 11, '0000-00-00', '0000-00-00', 1),
(8, 'Dr. Jagruti', 'Yadav', 'jagruti@gmail.com', '2147483647', 'naulkha ,indore', 10, '0000-00-00', '0000-00-00', 1),
(10, 'anil', 'karadwal', 'aani.karadwal@gmail.com', '2147483647', 'indore', 11, '0000-00-00', '0000-00-00', 1),
(11, 'arun', 'shah', 'arun.kumavatt@gmail.com', '9685354979', 'naulkha ,indore', 13, '2013-05-03', '2013-05-03', 1),
(12, 'arun', 'kumavat', 'aanii.karadwal@gmail.com', '9893898999', 'indore', 15, '2013-05-03', '2013-05-03', 1),
(13, 'Chetan', 'Yadav', 'kdsf@jfksjf.com', '9049049304', 'dfls', 10, '2013-05-13', '2013-05-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_firstname` varchar(30) NOT NULL,
  `p_lastname` varchar(30) NOT NULL,
  `pfather_name` varchar(30) NOT NULL,
  `p_age` int(11) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_mobile` varchar(15) NOT NULL,
  `p_address` text NOT NULL,
  `admitted` varchar(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `p_firstname`, `p_lastname`, `pfather_name`, `p_age`, `p_email`, `p_mobile`, `p_address`, `admitted`, `created_date`, `modified_date`, `status`) VALUES
(1, 'xyz', 'abc', 'jkl', 25, 'xyz@gmail.com', '985895687', 'indore', 'no', '0000-00-00', '0000-00-00', 1),
(2, 'pqr', 'stu', 'vwx', 25, 'pqr@gmail.com', '986589878', 'indore', 'Yes', '0000-00-00', '0000-00-00', 0),
(3, 'pqr', 'abc', 'vwx', 25, 'pabc@gmail.com', '568987789', 'indore', 'yes', '0000-00-00', '0000-00-00', 0),
(4, 'pqr', 'stu', 'vwx', 25, 'pabc@gmail.com', '568987789', 'indore', 'Yes', '0000-00-00', '0000-00-00', 0),
(5, 'xyz', 'stu', 'vwx', 25, 'pabc@gmail.com', '568987789', 'indore', 'yes', '0000-00-00', '0000-00-00', 0),
(6, 'pqr', 'abc', 'vwx', 25, 'pqr@gmail.com', '985895687', 'indore', 'yes', '0000-00-00', '0000-00-00', 0),
(13, 'ramu', 'yadav', 'shyamu', 23, '', '499309409', 'kdjfeijs', 'yes', '0000-00-00', '0000-00-00', 0),
(14, 'pqr', 'eree', 'rererr', 45, 'tet@hfhh.vjjj', '787856536', 'khkk', 'yes', '0000-00-00', '0000-00-00', 0),
(15, 'kdfji', 'dkfjdfj', 'fkdjfeiw', 45, 'kjdfdjskjjdi', '940494049', 'kjfkdjfwi', 'yes', '0000-00-00', '0000-00-00', 1),
(16, 'gdgsdgs', 'gsgs', 'gsgss', 0, 'gsgs', '0', 'gsg', 'yes', '0000-00-00', '0000-00-00', 0),
(20, 'gfgfgf', 'fgfgfg', 'fgfgfg', 25, 'pqr@gmail.com', '985895687', 'indore', 'yes', '0000-00-00', '0000-00-00', 1),
(21, 'xyz', 'abc', 'fkdjfeiw', 25, 'pabc@gmail.com', '568987789', 'indore', 'yes', '0000-00-00', '0000-00-00', 1),
(27, 'dfd', 'dfdf', 'dfd', 25, 'xyz@gmail.com', '2147483647', 'indore', 'yes', '0000-00-00', '0000-00-00', 0),
(28, 'fdsf', 'ddss', 'dsdf', 24, 'sdfd', '2147483647', 'kfjdsfkj', 'yes', '0000-00-00', '0000-00-00', 0),
(29, 'dfd', 'abc', 'jkl', 25, 'c@gmail.cp,', '2147483647', 'dfdkfd', 'yes', '0000-00-00', '0000-00-00', 0),
(30, 'fdfd', 'fdfd', 'dfdf', 23, 'dfd', '2147483647', 'indore', 'yes', '0000-00-00', '0000-00-00', 0),
(31, 'dffsf', 'dfd', 'dfdf', 22, 'fdsf', '2147483647', 'jfjfjh', 'yes', '0000-00-00', '0000-00-00', 0),
(32, 'DFSD', 'FDF', 'dfsf', 23, 'dfds', '2147483647', 'dkfjdkj', 'yes', '0000-00-00', '0000-00-00', 0),
(33, 'dsd', 'dfd', 'dfdf', 34, 'xyz@gmail.com', '2147483647', 'indore', 'yes', '0000-00-00', '0000-00-00', 0),
(34, 'fdfd', 'dfd', 'fsfs', 28, 'asd', '2147483647', 'djaskdj', 'yes', '0000-00-00', '0000-00-00', 0),
(35, 'dfd', 'fdsf', 'dsfd', 23, 'fsdf', '2147483647', 'kfhjh', 'yes', '0000-00-00', '0000-00-00', 0),
(36, 'fdff', 'dfd', 'dfd', 33, '', '2147483647', 'fdgff', 'yes', '0000-00-00', '0000-00-00', 0),
(37, 'check', 'kfjdkj', 'jdkfdjk', 23, 'jfkdj', '2147483647', 'jdkjf', 'yes', '0000-00-00', '0000-00-00', 0),
(38, 'ggg', 'gfgg', 'ggg', 23, '', '2147483647', 'dlkfdl', 'yes', '0000-00-00', '0000-00-00', 0),
(39, 'check2', 'chjk', 'kdfjdk', 23, 'fjdkj', '2147483647', 'fksdjfk', 'yes', '0000-00-00', '0000-00-00', 0),
(40, 'check3', 'fjdkj', 'kdjfsdkj', 23, 'jfkdj', '2147483647', 'jdfdjh', 'yes', '0000-00-00', '0000-00-00', 0),
(41, 'check1', 'dfdkfjk', 'jkdfjdk', 23, 'dfjdk', '2147483647', 'ldkfdl', 'yes', '0000-00-00', '0000-00-00', 0),
(42, 'check123', 'check', 'vwx', 33, 'ddd', '2147483647', 'fdffs vdf', 'yes', '0000-00-00', '0000-00-00', 0),
(43, 'check234', 'fsfs', 'dfsdfs', 23, 'dsf', '2147483647', 'fdffs vdf', 'yes', '2013-04-28', '2013-04-28', 0),
(44, 'check345', 'fkdjk', 'jfkdjk', 23, 'jdkjdkfj', '2147483647', 'kdfldkfl', 'yes', '2013-05-02', '2013-05-02', 0),
(45, 'check4567', 'kfjdkfj', 'djfkdsjf', 23, 'kfjdskfj', '2147483647', 'fsfsfs', 'yes', '2013-05-02', '2013-05-02', 0),
(46, 'check0000', 'fjsk', 'jdjfs', 23, 'fkjsdkj', '2147483647', 'dfsd', 'yes', '2013-05-02', '2013-05-02', 1),
(47, 'check99999', 'fsdfsf', 'fsfsf', 24, 'fdsff', '2147483647', 'fsdfdss', 'yes', '2013-05-02', '2013-05-02', 1),
(48, 'check7777', 'abc', 'vwx', 23, 'ddd', '2147483647', 'fdffs vdf', 'yes', '2013-05-02', '2013-05-02', 1),
(49, 'check88888', 'dfsdf', 'dfdfss', 24, 'dfsfs', '2147483647', 'fdssfs', 'yes', '2013-05-02', '2013-05-02', 1),
(50, 'check123', 'fsfdsf', 'fdsfs', 24, 'fsfsd', '2147483647', 'dfdsfs', 'yes', '2013-05-02', '2013-05-02', 1),
(51, 'check0000', 'fsdfsf', 'fdsfs', 23, 'fdssf', '2147483647', 'fd', 'yes', '2013-05-02', '2013-05-02', 0),
(52, 'check2222', 'fssfdf', 'fsdff', 23, 'dfs', '2147483647', 'dfs', 'yes', '2013-05-02', '2013-05-02', 0),
(53, 'checksuccess', 'hfjhsfjh', 'fklsjdfk', 25, 'sklfsfk', '2147483647', 'fsfs', 'yes', '2013-05-02', '2013-05-02', 0),
(54, 'fdfsf', 'fdsfs', 'dfsdfs', 23, 'ddd', '2147483647', 'fdffs vdf', 'no', '2013-05-02', '2013-05-02', 1),
(55, 'ggg', 'fsfs', 'fsfsf', 25, 'fsfs', '2147483647', 'dfsf', 'no', '2013-05-02', '2013-05-02', 1),
(56, 'fsfsf', 'dfsdf', 'fsf', 23, 'dsfs', '2147483647', 'dfsf', 'no', '2013-05-02', '2013-05-02', 1),
(57, 'fdsfs', 'fsfs', 'fsfsf', 25, 'dfs', '2147483647', 'fdffs vdf', 'yes', '2013-05-02', '2013-05-02', 1),
(58, 'check123', 'abc', 'vwx', 23, 'ddd', '2147483647', 'dssssss', 'yes', '2013-05-02', '2013-05-02', 0),
(59, 'check123', 'abc', 'vwx', 33, 'ddd', '2147483647', 'fdffs vdf', 'yes', '2013-05-02', '2013-05-02', 0),
(60, 'fsdsf', 'fsfs', 'vwx', 23, 'ddd', '2147483647', 'fdffs vdf', 'no', '2013-05-02', '2013-05-02', 1),
(61, 'anil', 'kuumawat', 'father', 30, 'aani.karadwal@gmail.com', '2147483647', 'indore', 'yes', '2013-05-03', '2013-05-03', 0),
(62, 'chetan', 'yadav', 'jfskjf', 34, 'jkdjjfk', '2147483647', 'kjfdkjk', 'yes', '2013-05-03', '2013-05-03', 0),
(63, 'anil', 'karadwal', 'mr. roopnarayan', 25, 'aani.karadwal@gmail.com', '2147483647', 'indore', 'yes', '2013-05-03', '0000-00-00', 1),
(64, 'dds', 'sddasdad', 'sad', 33, 'aani.karadwal@gmail.com', '2147483647', 'indore', 'yes', '2013-05-03', '2013-05-03', 1),
(65, 'ddf', 'dfd', 'dddddddddddd', 23, 'xyz@gmail.com', '2147483647', 'indore', 'yes', '2013-05-03', '2013-05-03', 1),
(66, 'dfd', 'dfd', 'dfd', 23, 'xyz@gmail.com', '2147483647', 'indore', 'yes', '2013-05-03', '2013-05-03', 1),
(67, 'dfd', 'dfd', 'dfd', 23, 'xyz@gmail.com', '2147483647', 'indore', 'yes', '2013-05-03', '2013-05-03', 1),
(68, 'dfd', 'dfd', 'dfd', 23, 'xyz@gmail.com', '2147483647', 'indore', 'yes', '2013-05-03', '2013-05-03', 0),
(69, 'fdfds', 'fdsfs', 'dfsf', 23, 'xyz@gmail.com', '2147483647', 'indore', 'yes', '2013-05-03', '2013-05-03', 1),
(70, 'fsdf', 'dfsf', 'dfds', 23, 'xyz@gmail.com', '2147483647', 'indore', 'yes', '2013-05-03', '2013-05-03', 1),
(71, 'fff', 'dfsf', 'sfsf', 23, 'xyz@gmail.com', '2147483647', 'indore', 'yes', '2013-05-03', '2013-05-03', 0),
(72, 'check4', 'dfkk', 'dkfjd', 25, 'dfkfk', '2147483647', 'indore', 'no', '2013-05-03', '2013-05-03', 1),
(73, 'fg', 'ff', 'ghg', 32, 'aani.karadwal@gmail.com', '9890989098', 'indore', 'yes', '0000-00-00', '2013-05-03', 0),
(74, 'anil', 'dfdf', 'dfdf', 25, 'aani.karadwal@gmail.com', '9890989098', 'indore', 'yes', '2013-05-03', '2013-05-03', 0),
(75, 'rahul', 'sharma', 'aaaaaa', 20, 'ra@gmail.com', '9890989098', 'dewas', 'yes', '2013-05-03', '2013-05-06', 0),
(76, 'asas', 'sdas', 'sas', 343, 'aani.karadwal@gmail.com', '9948949989', 'dewas', 'yes', '2013-05-03', '2013-05-06', 0),
(77, 'raju', 'yadav', 'ramu', 23, 'ddd@gmail.com', '9093039093', 'fdffs vdf', 'yes', '2013-05-02', '2013-05-02', 1),
(78, 'chetan', 'yadav', 'hfjdshfj', 24, 'fkdskfs@gmail.com', '9856586598', 'dfsdfsf', 'no', '2013-12-02', '2013-12-02', 1),
(79, 'ravi', 'yadav', 'ksjdfk', 23, 'jfkdsf@jdfkdsjf.com', '9856586598', 'dfsdfsf', 'no', '2013-12-02', '2013-12-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient_admit_record`
--

CREATE TABLE IF NOT EXISTS `patient_admit_record` (
  `patient_id` int(11) NOT NULL,
  `admit_date` date NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `room_number` int(11) NOT NULL,
  `bed_number` int(11) NOT NULL,
  `charge_per_day` int(11) NOT NULL DEFAULT '100',
  `discharge_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_admit_record`
--

INSERT INTO `patient_admit_record` (`patient_id`, `admit_date`, `room_type`, `room_number`, `bed_number`, `charge_per_day`, `discharge_date`) VALUES
(2, '2013-04-18', 'private', 102, 1, 100, NULL),
(3, '2013-04-19', 'private', 102, 2, 100, '2013-04-25'),
(4, '2013-04-22', 'private', 102, 3, 100, NULL),
(35, '0000-00-00', 'private', 103, 1, 500, '0000-00-00'),
(36, '0000-00-00', 'private', 103, 2, 500, '0000-00-00'),
(37, '0000-00-00', 'private', 104, 2, 100, '0000-00-00'),
(38, '0000-00-00', 'private', 102, 1, 100, '0000-00-00'),
(39, '0000-00-00', 'private', 204, 1, 100, '0000-00-00'),
(40, '0000-00-00', 'private', 202, 1, 100, '0000-00-00'),
(41, '0000-00-00', 'private', 102, 1, 500, '0000-00-00'),
(42, '0000-00-00', 'private', 203, 1, 500, '0000-00-00'),
(43, '0000-00-00', 'private', 303, 1, 500, '2013-05-01'),
(44, '0000-00-00', 'private', 403, 1, 500, '2013-05-01'),
(45, '0000-00-00', 'private', 402, 1, 500, '2013-05-01'),
(46, '0000-00-00', 'private', 401, 1, 500, '0000-00-00'),
(47, '0000-00-00', 'private', 401, 3, 500, '0000-00-00'),
(48, '0000-00-00', 'private', 402, 3, 500, '0000-00-00'),
(49, '0000-00-00', 'private', 202, 1, 500, '0000-00-00'),
(50, '0000-00-00', 'private', 202, 1, 500, '0000-00-00'),
(50, '0000-00-00', 'private', 202, 1, 500, '0000-00-00'),
(51, '0000-00-00', 'private', 203, 3, 500, '0000-00-00'),
(52, '0000-00-00', 'private', 201, 2, 500, '0000-00-00'),
(53, '0000-00-00', 'private', 203, 2, 500, '2013-05-04'),
(68, '0000-00-00', 'private', 102, 1, 500, '0000-00-00'),
(70, '0000-00-00', 'general', 201, 18, 500, '0000-00-00'),
(73, '0000-00-00', '2', 102, 1, 500, '2013-05-01'),
(74, '0000-00-00', '2', 102, 2, 500, '0000-00-00'),
(75, '0000-00-00', '1', 104, 2, 300, '2013-05-07'),
(76, '0000-00-00', '2', 102, 2, 300, '2013-05-01'),
(77, '0000-00-00', '2', 202, 1, 500, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `patient_payment`
--

CREATE TABLE IF NOT EXISTS `patient_payment` (
  `patient_id` int(11) NOT NULL,
  `p_firstname` varchar(30) NOT NULL,
  `p_lastname` varchar(30) NOT NULL,
  `pfather_name` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `admit` varchar(30) NOT NULL,
  `bedcharge_total` int(20) NOT NULL,
  `doctor_fee` int(20) DEFAULT NULL,
  `medical_fee` int(20) DEFAULT NULL,
  `total_amount` int(20) DEFAULT NULL,
  `advance_amount` int(20) DEFAULT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_payment`
--

INSERT INTO `patient_payment` (`patient_id`, `p_firstname`, `p_lastname`, `pfather_name`, `mobile`, `address`, `admit`, `bedcharge_total`, `doctor_fee`, `medical_fee`, `total_amount`, `advance_amount`, `created_date`, `modified_date`) VALUES
(1, '', '', '', '', 'paddress', '', 0, 333, 333, 33533, 43432, '0000-00-00', '0000-00-00'),
(3, 'pqr', 'abc', 'vwx', '', '', 'yes', 0, 0, 0, 1000, 2500, '0000-00-00', '2013-04-28'),
(3, 'pqr', 'abc', 'vwx', '', '', 'yes', 0, 1000, 0, 1000, 2500, '0000-00-00', '2013-04-28'),
(52, 'check2222', 'fssfdf', 'fsdff', '2147483647', 'paddress', 'yes', 0, 1000, 343434, 3000, 1000, '2013-05-02', '0000-00-00'),
(52, 'check2222', 'fssfdf', 'fsdff', '2147483647', 'paddress', 'yes', 0, 1000, 343434, 3000, 1000, '2013-05-02', '0000-00-00'),
(53, 'checksuccess', 'hfjhsfjh', 'fklsjdfk', '2147483647', 'paddress', 'yes', 0, 1000, 1000, 3500, 1000, '2013-05-02', '0000-00-00'),
(60, 'fsdsf', 'fsfs', 'vwx', '2147483647', 'paddress', 'no', 0, 1000, 343434, 1000, 1000, '2013-05-02', '0000-00-00'),
(60, 'fsdsf', 'fsfs', 'vwx', '2147483647', 'paddress', 'no', 0, 1000, 343434, 1000, 1000, '2013-05-02', '0000-00-00'),
(61, 'anil', 'kuumawat', 'father', '2147483647', 'paddress', 'yes', 0, 2000, 3000, 6000, 1000, '2013-05-03', '0000-00-00'),
(62, 'chetan', 'yadav', 'jfskjf', '2147483647', 'paddress', 'yes', 0, 2000, 3000, 6000, 1000, '2013-05-03', '0000-00-00'),
(68, 'dfd', 'dfd', 'dfd', '2147483647', 'indore', 'yes', 500, 2000, 3000, 6000, 1000, '2013-05-03', '2013-05-03'),
(72, 'check4', 'dfkk', 'dkfjd', '2147483647', 'paddress', 'no', 1000, 1000, 1000, 2000, 1000, '2013-05-03', '2013-05-13'),
(73, 'fg', 'ff', 'ghg', '9890989098', 'indore', 'yes', 500, 2000, 3000, 6000, 1000, '2013-05-03', '2013-05-03'),
(74, 'anil', 'dfdf', 'dfdf', '9890989098', 'paddress', 'yes', 0, 2000, 3000, 6000, 1000, '2013-05-03', '0000-00-00'),
(75, 'rahul', 'sharma', 'aaaaaa', '9890989098', 'paddress', 'yes', 0, 0, 0, 0, 10000, '0000-00-00', '0000-00-00'),
(75, 'rahul', 'sharma', 'aaaaaa', '9890989098', 'paddress', 'yes', 0, 0, 0, 0, 10000, '0000-00-00', '0000-00-00'),
(75, 'rahul', 'sharma', 'aaaaaa', '9890989098', 'paddress', 'yes', 0, 0, 0, 0, 10000, '0000-00-00', '0000-00-00'),
(75, 'rahul', 'sharma', 'aaaaaa', '9890989098', 'paddress', 'yes', 0, 0, 0, 0, 10000, '0000-00-00', '0000-00-00'),
(75, 'rahul', 'sharma', 'aaaaaa', '9890989098', 'paddress', 'yes', 0, 0, 0, 0, 10000, '0000-00-00', '0000-00-00'),
(75, 'rahul', 'sharma', 'aaaaaa', '9890989098', 'paddress', 'yes', 0, 0, 0, 0, 10000, '0000-00-00', '0000-00-00'),
(76, 'asas', 'sdas', 'sas', '9948949989', 'paddress', 'yes', 0, 0, 0, 0, 10000, '2013-05-03', '0000-00-00'),
(77, 'raju', 'yadav', 'ramu', '9093039093', 'fdffs vdf', 'yes', 500, 1000, 1000, 1000, 1000, '2013-05-02', '2013-05-02'),
(77, 'raju', 'yadav', 'ramu', '9093039093', 'fdffs vdf', 'yes', 500, 1000, 1000, 1000, 1000, '2013-05-02', '2013-05-02'),
(78, 'chetan', 'yadav', 'hfjdshfj', '9856586598', 'dfsdfsf', 'no', 1000, 1500, 1000, 1500, 2000, '2013-12-02', '2013-05-13'),
(79, 'ravi', 'yadav', 'ksjdfk', '9856586598', 'dfsdfsf', 'no', 0, 1000, 0, 0, 1000, '2013-05-13', '2013-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_number` int(11) NOT NULL,
  `room_type` int(11) NOT NULL,
  `bed_limit` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`room_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_number`, `room_type`, `bed_limit`, `status`) VALUES
(101, 1, 20, 1),
(102, 2, 3, 1),
(103, 2, 3, 1),
(104, 2, 3, 1),
(105, 4, 10, 1),
(201, 1, 20, 1),
(202, 2, 3, 1),
(203, 2, 3, 1),
(204, 2, 3, 1),
(205, 3, 5, 1),
(301, 1, 20, 1),
(302, 2, 3, 1),
(303, 2, 3, 1),
(304, 2, 3, 1),
(401, 1, 20, 1),
(402, 2, 3, 1),
(403, 2, 3, 1),
(404, 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_availability`
--

CREATE TABLE IF NOT EXISTS `room_availability` (
  `room_number` int(11) NOT NULL,
  `bed_occupied` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_availability`
--

INSERT INTO `room_availability` (`room_number`, `bed_occupied`, `status`) VALUES
(102, 1, 0),
(102, 2, 0),
(102, 3, 0),
(101, 1, 1),
(101, 2, 0),
(101, 3, 0),
(101, 4, 0),
(101, 5, 0),
(101, 6, 0),
(101, 7, 0),
(101, 8, 0),
(101, 9, 0),
(101, 10, 0),
(101, 11, 0),
(101, 12, 0),
(101, 13, 0),
(101, 14, 0),
(101, 15, 0),
(101, 16, 0),
(101, 17, 0),
(101, 18, 0),
(101, 19, 0),
(101, 20, 0),
(103, 1, 0),
(103, 3, 0),
(104, 1, 0),
(104, 2, 0),
(104, 3, 0),
(201, 11, 0),
(201, 12, 0),
(201, 13, 0),
(201, 14, 0),
(201, 15, 0),
(201, 16, 0),
(201, 17, 0),
(201, 18, 1),
(201, 19, 0),
(201, 20, 0),
(202, 1, 1),
(202, 2, 0),
(203, 3, 0),
(204, 1, 1),
(204, 2, 0),
(204, 3, 0),
(302, 1, 0),
(302, 2, 0),
(302, 3, 0),
(303, 1, 0),
(303, 2, 0),
(303, 3, 0),
(304, 1, 0),
(304, 2, 0),
(304, 3, 0),
(402, 1, 0),
(402, 2, 0),
(402, 3, 1),
(403, 1, 0),
(403, 2, 0),
(403, 3, 0),
(404, 1, 0),
(404, 2, 0),
(404, 3, 0),
(201, 2, 0),
(201, 3, 0),
(201, 4, 0),
(201, 5, 0),
(201, 6, 0),
(201, 7, 0),
(201, 8, 0),
(201, 9, 0),
(201, 10, 0),
(301, 1, 0),
(301, 2, 0),
(301, 3, 0),
(301, 4, 0),
(301, 5, 0),
(301, 6, 0),
(301, 7, 0),
(301, 8, 0),
(301, 9, 0),
(301, 10, 0),
(401, 1, 1),
(401, 2, 0),
(401, 3, 1),
(401, 4, 0),
(401, 5, 0),
(401, 6, 0),
(401, 7, 0),
(401, 8, 0),
(401, 9, 0),
(401, 10, 0),
(201, 1, 0),
(301, 11, 0),
(301, 12, 0),
(301, 13, 0),
(301, 14, 0),
(301, 15, 0),
(301, 16, 0),
(301, 17, 0),
(301, 18, 0),
(301, 19, 0),
(301, 20, 0),
(401, 11, 0),
(401, 12, 0),
(401, 13, 0),
(401, 14, 0),
(401, 15, 0),
(401, 16, 0),
(401, 17, 0),
(401, 18, 0),
(401, 19, 0),
(401, 20, 0),
(202, 3, 0),
(203, 1, 0),
(203, 2, 0),
(103, 2, 1),
(105, 1, 0),
(105, 2, 0),
(105, 3, 0),
(105, 4, 0),
(105, 5, 0),
(105, 6, 0),
(105, 7, 0),
(105, 8, 0),
(105, 9, 0),
(105, 10, 0),
(205, 1, 0),
(205, 2, 0),
(205, 3, 0),
(205, 4, 0),
(205, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE IF NOT EXISTS `room_category` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`room_id`, `room_name`, `status`) VALUES
(1, 'general', 1),
(2, 'private', 1),
(3, 'icu', 1),
(4, 'child', 1),
(12, 'new', 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE IF NOT EXISTS `specialization` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  UNIQUE KEY `sid` (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`sid`, `sname`, `status`) VALUES
(10, 'Heart', 1),
(11, 'Eye', 1),
(13, 'Lever', 1),
(14, 'Pathology', 1),
(15, 'bon s', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_firstname` varchar(30) NOT NULL,
  `staff_lastname` varchar(30) NOT NULL,
  `staff_email` varchar(30) NOT NULL,
  `staff_mobile` varchar(15) NOT NULL,
  `scategory` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_firstname`, `staff_lastname`, `staff_email`, `staff_mobile`, `scategory`, `created_date`, `modified_date`, `status`) VALUES
(6, 'Harish', 'Sharma', 'har@gmail.com', '2147483647', 5, '0000-00-00', '0000-00-00', 1),
(7, 'Janvi', 'Tripathi', 'janvi@gmail.com', '2147483647', 6, '0000-00-00', '0000-00-00', 1),
(8, 'Ritesh', 'Sharma', 'rt@gmail.com', '989098998', 7, '0000-00-00', '2013-05-03', 1),
(9, 'dfdsf', 'cdfds', 'janvi@gmail.com', '2147483647', 8, '0000-00-00', '0000-00-00', 1),
(10, 'karan', 'khanna', 'har@gmail.com', '2147483647', 9, '0000-00-00', '0000-00-00', 1),
(11, 'ram', 'yadav', 'rt@gmail.com', '2147483647', 10, '0000-00-00', '0000-00-00', 1),
(12, 'dinesh', 'dfkfj', 'ds@gmail.com', '2147483647', 6, '2013-05-03', '2013-05-03', 1),
(13, 'Harish', 'sharma', 'janvi@gmail.com', '9890989982', 6, '2013-05-03', '2013-05-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_category`
--

CREATE TABLE IF NOT EXISTS `staff_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `staff_category`
--

INSERT INTO `staff_category` (`category_id`, `category_name`, `status`) VALUES
(5, 'Nurses', 1),
(6, 'Ward Boys', 1),
(7, 'Reseptionist', 1),
(8, 'Gaurds', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `firstname`, `lastname`, `created_date`, `modified_date`, `status`) VALUES
(43, 'chetan07', 'chetanyadav7@hotmail.com', '123456', 'chetan', 'yadav', '0000-00-00', '0000-00-00', 1),
(46, 'anil.karadwal', 'aani.karadwal@gmail.com', 'anil123', 'anil', 'karadwal', '0000-00-00', '2013-05-02', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
