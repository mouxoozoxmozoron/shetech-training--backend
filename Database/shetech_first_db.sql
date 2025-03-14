-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2025 at 12:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shetech_first_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(90) NOT NULL,
  `last_name` varchar(90) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `created_at`) VALUES
(1, 'Mussa', 'Aron', 'mussaaron20@gmail.com', '123', '0745450431', '2025-02-06 08:15:02'),
(5, 'Denis', 'Juma', 'denis@gmail.com', '$2y$10$PVZsqV9RpJbsvZx.B/jAbeZRceoC914rj86a.wYQnHi6rs8z5jjyi', '0745453215', '2025-02-27 21:29:36'),
(7, 'immaculate', 'test', 'test@gmail.com', '$2y$10$G.YK2dNilqNJn7W4Zrogperx.j8pWd2M2HRNkE6x.zW1adFu0WiBW', '0712345678', '2025-03-14 01:53:42'),
(10, 'reign', 'shetech', 'reign@gmail.com', '$2y$10$KsU.iF1u5cK442AvozlwD.aeGkP7fgrAKDr8ydlOCg.fTZVRehLKq', '075641245', '2025-03-14 02:49:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
