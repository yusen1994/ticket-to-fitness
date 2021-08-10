-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 02:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

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
  `cost` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credits_pack`
--

INSERT INTO `credits_pack` (`id`, `name`, `total_credit`, `cost`) VALUES
(1, 'Small Credit Pack', 10, 10),
(2, 'Medium Credit Pack', 20, 20),
(3, 'Large Credit Pack', 50, 50);

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
(47, 19, 'Swimming', 'swimming', 'a:2:{i:0;s:6:\"Monday\";i:1;s:9:\"Wednesday\";}', 20, 200, 'This is swimming class', 1),
(48, 19, 'karate', 'fight', 'a:2:{i:0;s:7:\"Tuesday\";i:1;s:8:\"Saturday\";}', 12, 202, 'sasa', 1),
(49, 19, 'High Intensity Workout', 'weights', 'a:1:{i:0;s:7:\"Tuesday\";}', 20, 200, 'sasa', 0),
(50, 17, 'Kung Fu', 'fight', 'a:1:{i:0;s:7:\"Tuesday\";}', 12, 12, 'sasa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gym_activity_timetable`
--

CREATE TABLE `gym_activity_timetable` (
  `id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `gym_id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_activity_timetable`
--

INSERT INTO `gym_activity_timetable` (`id`, `activity_id`, `gym_id`, `day`, `time`) VALUES
(1, 47, 19, 'monday', '12:00 AM-12:30 AM'),
(2, 47, 19, 'monday', '1:00 PM-2:00 PM'),
(3, 47, 19, 'wednesday', '12:30 AM-02:00 AM'),
(4, 48, 19, 'tuesday', '12:30 AM-01:00 AM'),
(5, 48, 19, 'saturday', '01:30 AM-02:30 AM'),
(6, 49, 19, 'monday', '12:30 AM-01:00 AM'),
(7, 49, 19, 'monday', '2:00 AM-3:00-3:00 AM'),
(8, 49, 19, 'tuesday', '01:30 AM-04:30 AM'),
(9, 50, 17, 'tuesday', '12:00 AM-01:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `gym_information`
--

CREATE TABLE `gym_information` (
  `id` int(11) NOT NULL,
  `gym_id` int(20) NOT NULL,
  `gym_name` varchar(255) NOT NULL,
  `gym_address` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `gym_email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `abn` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_information`
--

INSERT INTO `gym_information` (`id`, `gym_id`, `gym_name`, `gym_address`, `latitude`, `longitude`, `gym_email`, `phone_number`, `abn`) VALUES
(9, 8, 'UNI Gym', 'Hobart', '', '', 'uni@gmail.com', '0000000000', 2147483647),
(24, 12, 'UNI Gym', '74-80 Molle Street', '-42.9041118', '147.3247504', 'ticket@gmail.com', '0468659344', 2147483647),
(25, 17, 'Zap Fitness', '74-80 Molle Street, Hobart TAS, Australia', '-42.88699039999999', '147.3198233', 'zap@gmail.com', '0458654987', 54545454),
(26, 19, 'Sndp Fitness', '40 Kerr Parade, Auburn NSW, Australia', '-33.8518727', '151.0346544', 'sndpgiri@gym.com', '0000000000', 2147483647),
(27, 20, 'Spidey Gym', 'Moonah Health Centre, Main Road, Moonah TAS, Australia', '-42.85051010000001', '147.2973588', 'spidey@gmail.com', '454545545', 45455455),
(28, 21, 'batman gym', 'Unigym Hobart, Grace Street, Sandy Bay TAS, Australia', '-42.9008398', '147.3284301', 'batman@gmail.com', '454555454545', 54545545);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_activation_code` varchar(255) NOT NULL,
  `user_email_status` varchar(255) NOT NULL,
  `password_reset` varchar(255) NOT NULL,
  `partnership_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `user_activation_code`, `user_email_status`, `password_reset`, `partnership_status`) VALUES
(8, 'anish', 'Anish', 'Adhikari', 'appy233986@gmail.com', '$2y$10$Sfz/xyVGjsYFw.X8bH4OIOan8oot8YVVDryBlHjWVfK2ZXKgZVDkS', '1c5288b3c4c13e4454ce9d4a555b23c6', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', NULL),
(12, 'pikachu', 'pikachu', 'pikachu', 'pikachu@gmail.com', '$2y$10$G4PHO1tMIDgbOQk2LIAJk.Y3Co/GWSzLIdWjQxGStL7LnBuGhAkqO', 'fe2dec42282688c94b363b8a15e630c3', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', 1),
(13, 'random', 'random', 'random', 'random@gmail.com', '$2y$10$cSjgHFb37qyni4XqcDQy5OcipXHPBv6dM7n2AT7jY0yFfNGLrbmI.', '3b721707409598c056c51f2ee403a0ea', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', NULL),
(14, '&””;Max123', '&””;Max123', 'puru', 'suru@gmail.com', '$2y$10$2D5.zAsI8y9X2Hd/9REgfeIFiGjGpwE1z42THr78w9f.zHXNicUGS', '53845891f2e8fceef4e9043a4e77c1ea', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', NULL),
(15, 'MAXYMAXY', 'MAXY', 'MAXY', 'sndpofficialida@gmail.com', '$2y$10$zF8wGJOSVNV/AZA1maOZo.A9SqNYDc2WMhrx4DJmczB03lTiNKgaG', '6ca73309f27b029dc11fa54f9a0fd497', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', NULL),
(16, 'sndp12', 'Sandeep', 'Giri', 'sgiri4@utas.edu.au', '$2y$10$zbuBm8yQ2zeEaTE6q9.BrOBKzF5SjT2U4NSGxDtPtFvOCK4kw1GlK', '9ca32f9746fab891e7df39e6a1bd2bf8', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', NULL),
(17, 'happy', 'will', 'smith', 'happy@gmail.com', '$2y$10$o7DOjmRdO11f1Fbt2Z8i8OWNVo2kxXq8HOqHE6X821mXn1YlPeDL2', '9f5c58295bfb78364a77260a68b05a5e', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', 1),
(18, 'jack', 'jack', 'jack', 'jack@gmail.com', '$2y$10$fERJcn0dD484lTsHaw4gJO3rpph03mZ.Dwpb9SPNN12gT2H6AJO.m', 'cf763e86d013c0d392b6179d3e750c75', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', NULL),
(19, 'sndpgiri', 'sandeep', 'giri', 'sndp@gmail.com', '$2y$10$gJ7QvVHwWL6PeauMjJCG1utW.5FkqVdzG.YwxA8D6FsRdAqU/jIbq', 'f9ca93644d9f791f4a495a4054e74637', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', 1),
(20, 'spiderman', 'spidey', 'man', 'spidey@gmail.com', '$2y$10$tNDNfHXZr.2cgLc0eCXwfuYxpTLNTgLEk1quRTY6NSOlqwy60mkE6', '0eac06a065e9f6817582de711e08d5b3', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', 1),
(21, 'batman', 'batman', 'batman', 'batman@gmail.com', '$2y$10$yXPO5zkHNJROy2ieZ8Bdx.SeBD8gOyrxlX0yDJ6//Jt397zDY5us2', 'e7150a3dfa8a632b2576094c48e79e14', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', 1);

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
(14, 47, 19, 19),
(16, 47, 17, 19);

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
(1, 10, 19),
(2, 20, 19),
(3, 20, 19),
(4, 20, 19),
(5, 20, 19),
(6, 20, 19),
(7, 20, 19),
(8, 20, 19),
(9, 10, 19),
(10, 10, 19),
(11, 20, 19),
(12, 50, 17),
(13, 50, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `credits_pack`
--
ALTER TABLE `credits_pack`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gym_activity`
--
ALTER TABLE `gym_activity`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `gym_activity_timetable`
--
ALTER TABLE `gym_activity_timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gym_information`
--
ALTER TABLE `gym_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_activity`
--
ALTER TABLE `users_activity`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users_credits`
--
ALTER TABLE `users_credits`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
