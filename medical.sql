-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 11:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'mama234');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pharmacy_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `price`, `status`, `pharmacy_name`, `location`) VALUES
(62, 'Paracetamol', '1000', 'available', 'iyumwa,dodoma,makulu,0753253538', ''),
(63, 'Metaceflin', '2500', 'available', 'iyumwa,dodoma,makulu,0753253538', ''),
(64, 'diclopa', '200', 'available', 'Ipagala pharmacy,Dodoma,Iringa road,0654509933', ''),
(65, 'hedex', '350', 'not available', 'ABC pharmacy,Dodoma,Area C,0714343434', ''),
(66, 'Coflin', '2000', 'available', 'Waafrica pharmacy,Dodoma,Maili mbili,0764787878', ''),
(67, 'Good morning', '3000', 'available', 'Ihumwa pharmacy,Dodoma,Ihumwa,0987343421', ''),
(68, 'Dawa tatu', '200', 'not available', 'Upendo pharmacy,Dodoma,Chang\'ombe,0987656543', ''),
(69, 'Hedex', '400', 'not available', 'Tumaini pharmacy,Dodoma,Ipagala,0985676765', ''),
(70, 'Blufen', '2500', 'not available', 'Butcher pharmacy,Dodoma,Mipango,0713242424', ''),
(71, 'Chloroqeen', '1000', 'available', 'ester pharmacy,Dodoma,Jamatini,0954323232', ''),
(72, 'Amoxyilin', '7000', 'available', 'UDOM pharmacy,Dodoma,UDOM,0987656565', ''),
(73, 'Ampiclox', '8500', 'available', 'White pharmacy,Dodoma,St john,0879654321', ''),
(74, 'Cipro', '3800', 'not available', 'Tumaini pharmacy,Dodoma,Ipagala,0985676765', ''),
(75, 'Metacafelyn', '1500', 'available', 'lomodo,dodoma,bungeni,0788969690', ''),
(76, 'Flagly', '400', 'not available', 'sabasaba,Dodoma,usomalini,0987676765', ''),
(77, 'Indosin', '2000', 'not available', 'msalato,Dodoma,usomalini,0765646464', ''),
(78, 'Magnesium', '500', 'available', 'kisasa,dodoma,kimbinyiko,0987656565', ''),
(79, 'Dox', '2700', 'available', 'White pharmacy,Dodoma,St john,0879654321', ''),
(80, 'Queninie', '2700', 'not available', 'Waafrica pharmacy,Dodoma,Maili mbili,0764787878', ''),
(81, 'Mseto', '2900', 'available', 'Baraka pharmacy,Dodoma,Veyula,098767676754', '');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `Id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pharmacy_name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `phone_number` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`Id`, `username`, `pharmacy_name`, `location`, `phone_number`, `email`, `password`, `status`) VALUES
(13, 'billie', 'mpwapwa', 'dar es salaam', 98767674, 'vijo@gmail.com', '2fd388288325325ed29e1cec0281866c', 'active'),
(14, 'salm k', 'sabasaba', 'bus stand', 9876543, 'salma@gmail.com', 'b40c6663172cf1a2fd50d649887042f0', 'active'),
(15, 'baraka', 'veyula', 'mpwapwa', 2147483647, 'bu@gmail.com', '481ef83f3145fe37a5f40268bb87ca6b', 'active'),
(16, 'ally', 'uzunguni', 'lulu', 98765432, 'ally@gmal.com', 'f45731e3d39a1b2330bbf93e9b3de59e', 'diactivated');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `Id` int(4) NOT NULL,
  `pharmac_name` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`Id`, `pharmac_name`, `region`, `street`, `phone_number`) VALUES
(1, 'makulu', 'Dododma', 'uzunguni', '0923454567'),
(2, 'sabasaba', 'Dodoma', 'usomalini', '0987676765'),
(4, 'msalato', 'Dodoma', 'usomalini', '0765646464'),
(5, 'kisasa', 'dodoma', 'kimbinyiko', '0987656565'),
(6, 'lomodo', 'dodoma', 'bungeni', '0788969690'),
(7, 'Upendo pharmacy', 'Dodoma', 'Chang\'ombe', '0987656543'),
(8, 'Butcher pharmacy', 'Dodoma', 'Mipango', '0713242424'),
(9, 'Waafrica pharmacy', 'Dodoma', 'Maili mbili', '0987654321'),
(10, 'ABC pharmacy', 'Dodoma', 'Area C', '0987656543'),
(11, 'Ihumwa pharmacy', 'Dodoma', 'Ihumwa', '0987343421'),
(12, 'Ipagala pharmacy', 'Dodoma', 'Iringa road', '0654509933'),
(13, 'Tumaini pharmacy', 'Dodoma', 'Ipagala', '0985676765'),
(14, 'UDOM pharmacy', 'Dodoma', 'UDOM', '0987656565'),
(15, 'White pharmacy', 'Dodoma', 'St john', '0879654321'),
(16, 'ester pharmacy', 'Dodoma', 'Jamatini', '0954323232'),
(18, 'Butcher pharmacy', 'Dodoma', 'Mipango', '0676898989'),
(19, 'Waafrica pharmacy', 'Dodoma', 'Maili mbili', '0764787878'),
(20, 'ABC pharmacy', 'Dodoma', 'Area C', '0714343434'),
(21, 'Ihumwa pharmacy', 'Dodoma', 'Ihumwa', '06767876767'),
(22, 'Ipagala pharmacy', 'Dodoma', 'Iringa road', '0786868690'),
(23, 'Tumaini pharmacy', 'Dodoma', 'Ipagala', '0987675454'),
(24, 'UDOM pharmacy', 'Dodoma', 'UDOM', '0765434343'),
(25, 'White pharmacy', 'Dodoma', 'St john', '09876543212'),
(26, 'ester pharmacy', 'Dodoma', 'Jamatini', '99087654321'),
(27, 'Mahimbi', 'dodoma', 'Nyerere squire', '0976565656'),
(28, 'lili', 'dodoma', 'dodoma', '0972343421'),
(29, 'iyumwa', 'dodoma', 'makulu', '0753253538'),
(30, 'Baraka pharmacy', 'Dodoma', 'Veyula', '098767676754');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
