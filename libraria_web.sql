-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 12:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libraria_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `emri` varchar(100) NOT NULL,
  `mbiemri` varchar(100) NOT NULL,
  `profesioni` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `emri`, `mbiemri`, `profesioni`, `foto`) VALUES
(1, 'Dion', 'Kuka', 'BACKEND DEVELOPER', 'guy1.jpg'),
(3, 'Alban', 'Salihu', 'FRONTEND DEVELOPER', 'guy2.jpg'),
(4, 'Filane', 'Fisteku', 'ENGLISH', 'girl1.jpg'),
(7, 'Filan', 'Fisteku', 'FRONTEND DEVELOPER', 'guy2.jpg'),
(8, 'Fili', 'Fila', 'CEO', 'girl2.jpg'),
(10, 'Albin', 'Vllahiu', 'BACKEND DEVELOPER', 'guy1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `libri`
--

CREATE TABLE `libri` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `photo` varchar(150) NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `User_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `libri`
--

INSERT INTO `libri` (`id`, `title`, `price`, `photo`, `author`, `date`, `User_ID`) VALUES
(13, 'Grateful And Give', 50.39, 'book1.png', 'Naim Frasheri', '2000-05-12', 40),
(18, 'Soccer Poster', 30.39, 'book2.png', 'Faik Konica', '2019-08-17', 41),
(20, 'Suspendisse Vel', 40.39, 'book3.png', 'Naim Frasheri', '2020-07-15', 41),
(21, 'Etiam Auctor', 36.43, 'first-offer.png', 'Sami Frasheri', '2017-06-14', 41),
(22, 'The Storyteller', 25.99, 'book4.png', 'Gjergj Fishta', '2013-02-06', 41),
(23, 'The Book Of Love', 40.39, 'book5.png', 'Naim Frasheri', '2008-02-17', 41),
(24, 'History Month', 12.99, 'book14.png', 'Sami Frasheri', '2020-07-20', 41),
(25, 'Eos Lobortis', 10.44, 'book12.png', 'Naim Frasheri', '2018-02-08', 40),
(35, 'Art Of The City', 30.39, 'book13.png', 'Faik Konica', '2020-07-15', 40),
(37, 'Shqiperia', 30.39, 'book1.png', 'Faik Konica', '2020-07-16', 40);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `ID` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` text DEFAULT NULL,
  `sentdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`ID`, `email`, `subject`, `content`, `sentdate`) VALUES
(1, 'dionkuka@hotmail.com', 'Test', '123123', '2020-07-08 20:24:39'),
(3, 'dionkuka@hotmail.com', 'Dioneeeyy', 'A po lodheni', '2020-07-08 20:27:24'),
(7, 'albansalihu@gmail.com', 'Pyetje rreth nje libri', 'Pershendetje,\r\n\r\nDesha te ju pyes se a mund te sjellni ndonje liber te ri qe nuk eshte ne website-in e juaj.\r\nNese po ather ju lutem a mund te e sillni librin Tregimet e Moqme Shqipetare.\r\n\r\nCdo te mire,\r\nAlban Salihu', '2020-07-11 15:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(22) DEFAULT NULL,
  `surname` varchar(22) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text NOT NULL,
  `roli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `roli`) VALUES
(10, 'Alban', 'Salihu', 'albansalihu@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(16, 'Dion', 'Kuka', 'dionkuka@hotmail.com', '182c1b766622a7bb2bacbc724cd4b04a', 0),
(24, 'Albin', 'Vllahiu', 'albinvllahiu@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(27, 'Dion', 'Kuka', 'dion@gmail.com', '7815696ecbf1c96e6894b779456d330e', 0),
(28, 'Alban', 'Salihu', 'as@ubt-uni.net', '7815696ecbf1c96e6894b779456d330e', 0),
(29, 'Albin', 'Vllahiu', 'av@ubt-uni.net', '202cb962ac59075b964b07152d234b70', 1),
(30, 'Dion', 'Kuka', 'dk@ubt-uni.net', '202cb962ac59075b964b07152d234b70', 0),
(31, 'Dion', 'Kuka', 'kukadion1@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(32, 'Alban', 'Salihu', 'albansalihu@hotmail.com', '202cb962ac59075b964b07152d234b70', 0),
(33, 'Albin', 'Vllahiu', 'vllahiu@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(36, 'Dion', 'Kuka', 'kuka@hotmail.com', '202cb962ac59075b964b07152d234b70', 0),
(39, 'Gentrit', 'Krasniqi', 'gk@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(40, 'Dion', 'Kuka', 'dionkuka@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(41, 'Alban', 'Salihu', 'alban@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(42, 'Dion', 'Kuka', 'dionkuka@yahoo.com', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libri`
--
ALTER TABLE `libri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `libri`
--
ALTER TABLE `libri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
