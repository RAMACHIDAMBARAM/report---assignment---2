-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 09:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phase3_reportbee`
--

-- --------------------------------------------------------

--
-- Table structure for table `aaa`
--

CREATE TABLE `aaa` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profile_picture` longblob NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_logo` longblob NOT NULL,
  `standard` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aaa`
--

INSERT INTO `aaa` (`id`, `name`, `profile_picture`, `school_name`, `school_logo`, `standard`, `section`, `password`, `gender`, `email`, `admin`) VALUES
(3, 'dsfsa', '', '', '', '5', 'examcell', '1234567890', 'female', 'dsfsa@gmail.com', 0),
(2, 'qaswed', '', '', '', '8', 'examcell', '1234567890', 'Male', 'qaswed@gmail.com', 0),
(1, 'aaa', 0x4368657474696e61642d486f7573652d566572616e6461682e6a7067, 'AAA', 0x31353137303938335f313235303934353439383331323931305f363132343133333337313732303435373734365f6e2e6a7067, '', '', '1234567890', 'Male', 'qazxsw@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `examcell`
--

CREATE TABLE `examcell` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profile_picture` longblob NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_logo` longblob NOT NULL,
  `standard` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examcell`
--

INSERT INTO `examcell` (`id`, `name`, `profile_picture`, `school_name`, `school_logo`, `standard`, `section`, `password`, `gender`, `email`, `admin`) VALUES
(1, 'shimla', 0x31363533305f3436303637333431303735323531395f323435363635363233363638303235313634385f6e202831292e6a7067, 'examcell', 0x3230303070782d4665646572616c5f62616e6b5f496e6469612e7376675f2e706e67, '0', '0', '1234567890', 'Male', 'rmr.chidambaram@st.niituniversity.in', 1),
(2, 'qwerty', '', '', '', '8', 'a', '1234567890', 'Male', 'sss@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `qwerty`
--

CREATE TABLE `qwerty` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profile_picture` longblob NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_logo` longblob NOT NULL,
  `standard` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwerty`
--

INSERT INTO `qwerty` (`id`, `name`, `profile_picture`, `school_name`, `school_logo`, `standard`, `section`, `password`, `gender`, `email`, `admin`) VALUES
(1, 'qwerty', 0x313338353837345f3436343536373937373033353339345f353335373831313731373437303832383334395f6e2e6a7067, 'qwerty', 0x31363533305f3436303637333431303735323531395f323435363635363233363638303235313634385f6e202831292e6a7067, '', '', '1234567890', 'Male', 'A@gmail.com', 1),
(7, 'qaz', '', 'qwerty', '', '3', 'C', '1234567890', 'Male', 'AS@gmail.com', 0),
(16, 'azzzzz', '', '', '', '4', 'examcell', '1234567890', 'Male', 'azzzzz@gmail.com', 0),
(2, 'ram', 0x30783331333333383335333833373334354633343336333433353336333733393337333733303333333533333339333435463335333333353337333833313331333733313337333433373330333833323338333333343339354636453245364137303637, 'qwerty', 0x3078333133363335333333303546333433363330333633373333333433313330333733353332333533313339354633323334333533363336333533363332333333363336333833303332333533313336333433383546364532303238333132393245364137303637, '7', 'B', 'ram', 'Male', 'B@gmail.com', 0),
(9, 'zack', '', 'qwerty', '', '5', 'A', '1234567890', 'Male', 'gtr@gmail.com', 0),
(14, 'ooo', 0x31353137303938335f313235303934353439383331323931305f363132343133333337313732303435373734365f6e2e6a7067, 'qwerty', 0x31353032373538335f3336333539383930303634353934305f333833303033383339393534383735333732355f6e2e6a7067, '5', 'examcell', '1234567890', 'Male', 'ooo@gmail.com', 0),
(15, 'ooorrr', 0x31353137303938335f313235303934353439383331323931305f363132343133333337313732303435373734365f6e2e6a7067, 'qwerty', 0x31353032373538335f3336333539383930303634353934305f333833303033383339393534383735333732355f6e2e6a7067, '5', 'examcell', '1234567890', 'Male', 'ooorrrr@gmail.com', 0),
(6, 'shimla', '', 'qwerty', '', '5', 'C', '1234567890', 'female', 'q@gmail.com', 0),
(5, 'icitisee', '', 'qwerty', '', '4', 'a', '1234567890', 'Male', 'rmr1.chidambaram@st.niituniversity.in', 0),
(8, 'dwench', '', 'qwerty', '', '5', 'examcell', '1234567890', 'Male', 'S@gmail.com', 0),
(10, 'qwerty', '', 'qwerty', '', '8', 'a', '1234567890', 'Male', 'sss@gmail.com', 0),
(12, 'www', 0x31353137303938335f313235303934353439383331323931305f363132343133333337313732303435373734365f6e2e6a7067, 'qwerty', 0x31353032373538335f3336333539383930303634353934305f333833303033383339393534383735333732355f6e2e6a7067, '3', 'examcell', '1234567890', 'Male', 'www@gmail.com', 0),
(13, 'wwwee', 0x31353137303938335f313235303934353439383331323931305f363132343133333337313732303435373734365f6e2e6a7067, 'qwerty', 0x31353032373538335f3336333539383930303634353934305f333833303033383339393534383735333732355f6e2e6a7067, '5', 'examcell', '1234567890', 'Male', 'wwwsss@gmail.com', 0),
(11, 'xxx', 0x31353137303938335f313235303934353439383331323931305f363132343133333337313732303435373734365f6e2e6a7067, 'qwerty', 0x31353137303938335f313235303934353439383331323931305f363132343133333337313732303435373734365f6e2e6a7067, '4', 'c', '1234567890', 'Female', 'XXX@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aaa`
--
ALTER TABLE `aaa`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `examcell`
--
ALTER TABLE `examcell`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `qwerty`
--
ALTER TABLE `qwerty`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aaa`
--
ALTER TABLE `aaa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `examcell`
--
ALTER TABLE `examcell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `qwerty`
--
ALTER TABLE `qwerty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
