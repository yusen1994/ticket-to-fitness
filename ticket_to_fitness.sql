-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 12:11 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_to_fitness`
--
--
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `firstname`, `lastname`, `password`) VALUES
(1, 'jamesrice', 'James', 'Rice', 'Apple123@');

-- --------------------------------------------------------

--
-- Table structure for table `admin_earnings`
--

CREATE TABLE `admin_earnings` (
  `id` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_earnings`
--

INSERT INTO `admin_earnings` (`id`, `Date`, `Credits`) VALUES
(17, '2021-10-12 21:02:42', 4),
(18, '2021-10-12 21:03:13', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `activity_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `credits_pack`
--

CREATE TABLE `credits_pack` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_credit` int(20) NOT NULL,
  `cost` int(20) NOT NULL,
  `bonus_credits` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credits_pack`
--

INSERT INTO `credits_pack` (`id`, `name`, `total_credit`, `cost`, `bonus_credits`) VALUES
(1, 'Small Credits Pack', 25, 10, 0),
(2, 'Medium Credits Pack', 60, 20, 10),
(3, 'Large Credits Pack', 150, 50, 25);

-- --------------------------------------------------------

--
-- Table structure for table `gym_activity`
--

CREATE TABLE `gym_activity` (
  `id` int(20) NOT NULL,
  `gym_id` int(20) NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sessions_per_week` varchar(255) NOT NULL,
  `max_capacity` int(20) NOT NULL,
  `credit` int(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_activity`
--

INSERT INTO `gym_activity` (`id`, `gym_id`, `activity_name`, `category`, `sessions_per_week`, `max_capacity`, `credit`, `description`, `status`) VALUES
(66, 57, 'HIIT Training', 'Weights', 'a:2:{i:0;s:6:\"Monday\";i:1;s:8:\"Thursday\";}', 5, 25, 'This is a high intensity weight class. Not for the faint hearted!', 1),
(68, 60, 'Kick Boxing', 'Martial Arts', 'a:2:{i:0;s:8:\"Saturday\";i:1;s:6:\"Sunday\";}', 15, 38, 'Please bring protective wear. No children allowed.', 1),
(69, 61, 'Swimming Class', 'Swimming', 'a:2:{i:0;s:6:\"Monday\";i:1;s:9:\"Wednesday\";}', 5, 50, 'Please bring equipment like goggles. You must know how to swim.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gym_activity_timetable`
--

CREATE TABLE `gym_activity_timetable` (
  `id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `gym_id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `sale_percentage` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_activity_timetable`
--

INSERT INTO `gym_activity_timetable` (`id`, `activity_id`, `gym_id`, `day`, `time`, `sale_percentage`) VALUES
(37, 66, 57, 'monday', '05:00 AM-06:00 AM', NULL),
(38, 66, 57, 'thursday', '09:00 AM-10:00 AM', NULL),
(42, 68, 60, 'saturday', '07:00 PM-08:30 PM', NULL),
(43, 68, 60, 'sunday', '07:00 PM-08:30 PM', NULL),
(44, 69, 61, 'monday', '08:00 AM-09:00 AM', NULL),
(45, 69, 61, 'wednesday', '09:00 AM-10:00 AM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gym_earnings`
--

CREATE TABLE `gym_earnings` (
  `id` int(20) NOT NULL,
  `Date` datetime NOT NULL,
  `gym_id` int(11) NOT NULL,
  `Credits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_earnings`
--

INSERT INTO `gym_earnings` (`id`, `Date`, `gym_id`, `Credits`) VALUES
(32, '2021-10-11 11:07:11', 17, 180),
(33, '2021-10-11 11:10:59', 52, 23),
(34, '2021-10-12 17:05:26', 19, 45),
(35, '2021-10-12 17:28:55', 17, 45),
(36, '2021-10-12 19:19:25', 17, 180),
(37, '2021-10-12 21:02:42', 60, 34),
(38, '2021-10-12 21:03:13', 57, 23);

-- --------------------------------------------------------

--
-- Table structure for table `gym_information`
--

CREATE TABLE `gym_information` (
  `id` int(11) NOT NULL,
  `gym_id` int(20) NOT NULL,
  `gym_name` varchar(255) NOT NULL,
  `gym_address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `gym_email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `abn` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_information`
--

INSERT INTO `gym_information` (`id`, `gym_id`, `gym_name`, `gym_address`, `photo`, `latitude`, `longitude`, `gym_email`, `phone_number`, `abn`) VALUES
(39, 61, 'Lucas&#39; Gym', '50 Elizabeth Street, Hobart TAS, Australia', 'gymlogo1.png', '-42.8819208', '147.3279091', 'lucasgym@gmail.com', '62101010', 12345),
(40, 60, 'Relax Gym', 'Moonah Sports Centre, Gormanston Road, Moonah TAS, Australia', 'gymlogo2.jfif', '-42.84546539999999', '147.2993782', 'relaxgym@gmail.com', '62101010', 123456),
(41, 57, 'Power Gym', 'Northgate Shopping Centre, Main Road, Glenorchy TAS, Australia', 'gymlogo3.jfif', '-42.8323685', '147.2726447', 'powergym@gmail.com', '62101010', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `account_created` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `contact_number` int(32) NOT NULL,
  `user_activation_code` varchar(255) NOT NULL,
  `user_email_status` varchar(255) NOT NULL,
  `password_reset` varchar(255) NOT NULL,
  `partnership_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `account_created`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`, `dob`, `photo`, `contact_number`, `user_activation_code`, `user_email_status`, `password_reset`, `partnership_status`) VALUES
(57, '12 Oct 2021', NULL, 'Armando', 'Murray', 'armando.murray@example.com', '$2y$10$Pmc0YNXI33Sui.KEOqQh0.jn7cIgNSuS8ACYd2C9lgo.dW6XXnOn6', 'male', '1975-01-12', '', 0, '4ec5dd9da34382181e697172e51df937', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', 1),
(58, '12 Oct 2021', NULL, 'Vicki', 'Fields', 'vicki.fields@example.com', '$2y$10$nZbyJr3SkApsQNr0gPkTuOYS4FaWs.7FAobhl5KQTlq/tKcNCnkx6', 'female', '1996-03-07', '', 0, '0f3a5f9009401c7136180d436fd60ebd', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', NULL),
(59, '12 Oct 2021', NULL, 'Judd', 'Russell', 'judd.russell@example.com', '$2y$10$zHmZuCqfk9Q8TIsBqgoE2eKPYpJg8rB3xTdWzn87CizXPn1dSDR8.', 'male', '1994-05-04', '', 0, '4f03514b1ffb304048b69041d0cb5841', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', NULL),
(60, '12 Oct 2021', NULL, 'Nicole', 'Cruz', 'nicole.cruz@example.com', '$2y$10$8faF7ysCc6ZYRlwtWxbDjOWiRFPQVS.mz54oiWAFbQAnQa/xa4sby', 'female', '1979-04-05', '', 0, 'c486089b7854542020f8d8dff44f329b', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', 1),
(61, '12 Oct 2021', NULL, 'Lucas', 'Howlett', 'lucas@gmail.com', '$2y$10$2xWPPVSPCZ1dFNrz2lEa9u1kkv69z2WZwOqigyJRr0BR6V6UcBY36', 'male', '1997-08-04', '', 0, 'df951ad934f7d9858ae4e71bd582c37c', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_activity`
--

CREATE TABLE `users_activity` (
  `id` int(20) NOT NULL,
  `activity_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `gym_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_activity`
--

INSERT INTO `users_activity` (`id`, `activity_id`, `user_id`, `gym_id`) VALUES
(100, 68, 59, 60),
(101, 66, 59, 57);

-- --------------------------------------------------------

--
-- Table structure for table `users_allocation`
--

CREATE TABLE `users_allocation` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `timetable_id` int(20) NOT NULL,
  `activity_id` int(20) NOT NULL,
  `gym_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_allocation`
--

INSERT INTO `users_allocation` (`id`, `user_id`, `timetable_id`, `activity_id`, `gym_id`) VALUES
(70, 59, 42, 68, 60),
(71, 59, 37, 66, 57);

-- --------------------------------------------------------

--
-- Table structure for table `users_credits`
--

CREATE TABLE `users_credits` (
  `id` int(20) NOT NULL,
  `total_credit` int(20) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_credits`
--

INSERT INTO `users_credits` (`id`, `total_credit`, `user_id`) VALUES
(180, 150, 59),
(181, -38, 59),
(182, -25, 59);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_earnings`
--
ALTER TABLE `admin_earnings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credits_pack`
--
ALTER TABLE `credits_pack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gym_activity`
--
ALTER TABLE `gym_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gym_activity_ibfk_1` (`gym_id`);

--
-- Indexes for table `gym_activity_timetable`
--
ALTER TABLE `gym_activity_timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gym_earnings`
--
ALTER TABLE `gym_earnings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gym_information`
--
ALTER TABLE `gym_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gyminfo` (`gym_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_activity`
--
ALTER TABLE `users_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_activity_fkg` (`activity_id`);

--
-- Indexes for table `users_allocation`
--
ALTER TABLE `users_allocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_credits`
--
ALTER TABLE `users_credits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_earnings`
--
ALTER TABLE `admin_earnings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `credits_pack`
--
ALTER TABLE `credits_pack`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gym_activity`
--
ALTER TABLE `gym_activity`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `gym_activity_timetable`
--
ALTER TABLE `gym_activity_timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `gym_earnings`
--
ALTER TABLE `gym_earnings`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `gym_information`
--
ALTER TABLE `gym_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users_activity`
--
ALTER TABLE `users_activity`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users_allocation`
--
ALTER TABLE `users_allocation`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `users_credits`
--
ALTER TABLE `users_credits`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gym_activity`
--
ALTER TABLE `gym_activity`
  ADD CONSTRAINT `gym_activity_ibfk_1` FOREIGN KEY (`gym_id`) REFERENCES `gym_information` (`gym_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_activity`
--
ALTER TABLE `users_activity`
  ADD CONSTRAINT `users_activity_fkg` FOREIGN KEY (`activity_id`) REFERENCES `gym_activity` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
