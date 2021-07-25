-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 04:04 PM
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
-- Table structure for table `gym_activity`
--

CREATE TABLE `gym_activity` (
  `id` int(20) NOT NULL,
  `gym_id` int(20) NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sessions_per_week` int(20) NOT NULL,
  `max_capacity` int(20) NOT NULL,
  `credit` int(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_activity`
--

INSERT INTO `gym_activity` (`id`, `gym_id`, `activity_name`, `category`, `sessions_per_week`, `max_capacity`, `credit`, `description`, `status`) VALUES
(30, 17, 'Zap Training', 'Pilates', 20, 10, 70, 'Hello', 1),
(31, 12, 'Martial Art', 'swimming', 2, 100, 10, 'Hello', 1),
(32, 17, 'Zap Yoga', 'Yoga', 5, 100, 25, 'Tet', 1);

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
(25, 17, 'Zap Fitness', '74-80 Molle Street, Hobart TAS, Australia', '-42.88699039999999', '147.3198233', 'zap@gmail.com', '0458654987', 54545454);

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
(18, 'jack', 'jack', 'jack', 'jack@gmail.com', '$2y$10$fERJcn0dD484lTsHaw4gJO3rpph03mZ.Dwpb9SPNN12gT2H6AJO.m', 'cf763e86d013c0d392b6179d3e750c75', 'not verified', 'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gym_activity`
--
ALTER TABLE `gym_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gym_activity_ibfk_1` (`gym_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gym_activity`
--
ALTER TABLE `gym_activity`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `gym_information`
--
ALTER TABLE `gym_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gym_activity`
--
ALTER TABLE `gym_activity`
  ADD CONSTRAINT `gym_activity_ibfk_1` FOREIGN KEY (`gym_id`) REFERENCES `gym_information` (`gym_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
