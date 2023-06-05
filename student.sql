-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2023 at 05:17 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studname` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `gender` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `languag` varchar(20) NOT NULL,
  `addres` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studname`, `email`, `gender`, `dob`, `languag`, `addres`) VALUES
(1, 'gopal', 'gopalvi123@gmail.com', 'male', '1996-10-27', 'php', 'virudhunagr'),
(2, 'ravi', 'ravi@gmail.com', 'male', '2023-05-01', 'HTML', 'VNR'),
(7, 'Senba', 'senbha@gmail.com', 'female', '1997-10-20', 'Fullstack ', 'Theni'),
(5, 'valli', 'valli@gmail.com', 'male', '2023-05-01', 'CSS', 'Chennai'),
(6, 'Pandi', 'pandi@gmail.com', 'male', '2023-05-02', 'HTML', 'Madura'),
(9, 'ram', 'ram@gmail.com', 'male', '1997-06-02', 'Automation', 'Delhi'),
(11, 'gopal', 'newmail@gmail.com', 'male', '1995-05-19', 'ubundo', 'Theni'),
(12, 'gops', 'gopa@gmail.com', 'male', '1995-05-23', 'HTML', 'Andiyar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
