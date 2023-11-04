-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 12:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'sabbir', '1902001@icte.bdu.ac.bd', '$2y$10$HT20Dipv7SROPJqWzgS7YOj3Fmf4KyiZNhHPwUhDsCVoeeYpqpXcO'),
(2, 'admin', 'thesabbirahmed001@gmail.com', '$2y$10$Cq7ZBSSFmZErKRsX1xO8CuVF.he8crScdjAwy5nxEU24bzNQxAB2O'),
(3, 'ibnul', 'allensabbir007@gmail.com', '$2y$10$3zZAUqFB7B.X.Irjbty6G.5lsIlyJmMsCKLxWuU22OpHuW0s1A3.y'),
(4, 'shanta', 'sabbir@gmail.com', '$2y$10$csf5QeHkuKzhzh1AmKLYeuKfAaev97Eg.nN.QKGGgDSHyZQNle9f2'),
(5, 'shantaa', 'shanta@gmail.com', '$2y$10$IMW5dJYHpC/7sBdIvbSEbueY4qJz3nz1nQGJeVzz8ZCJUU5WbjQQW'),
(6, 'drsabbir', 'b160110033@ier.jnu.ac.bd', '$2y$10$lWL3W2zcfF7FKReH4ivGe.X.plyPXF/OQpfUj7kUzwTmvJW5iWg8O');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
