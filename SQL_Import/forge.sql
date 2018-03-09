-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:  8 март 2018 в 21:54
-- Версия на сървъра: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forge`
--

-- --------------------------------------------------------

--
-- Структура на таблица `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `user_id`, `date_created`) VALUES
(1, 'test', 'dsdsdsdssdsdsdsdsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 2, '2018-01-13 15:50:12'),
(3, 'nov post', 'dsdsdsdsddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 3, '2018-01-13 17:20:53'),
(4, 'dssds', 'sdsds', 2, '2018-01-14 10:18:34'),
(5, 'sdsds', 'dsdsds', 2, '2018-01-14 10:31:33'),
(6, 'ivanka\'s post', 'blablablablblalblslllalblalabllablalblablbalablabl', 4, '2018-01-14 11:10:53'),
(7, 'new post', 'asdsdsa', 4, '2018-01-14 11:10:28'),
(8, 'gddd', 'ddddddddddddddddddddddd', 2, '2018-01-14 14:24:04'),
(10, 'mypost', 'dssdsds', 2, '2018-01-15 17:38:47'),
(11, 'my blogs', '123', 3, '2018-03-08 19:12:43'),
(12, 'blabla', 'apocalipse', 2, '2018-03-08 19:13:18');

-- --------------------------------------------------------

--
-- Структура на таблица `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Valeri Zaykov', 'valeri.zaykov@gmail.com', '$2y$10$Mm9MksRZwql/G6kyTZoICurAyRc63sTQngTukVTLoKKp1kPiI6cvG', 'cmiJG5sE7ebfquwiEpyag9kOeeIUruZbT1mGqJsHwpTZzlCdjUEHXjWBh8a8', '2018-01-08 15:57:35', '2018-01-08 15:57:35'),
(3, 'Ivan Dragan', 'ivan@gmail.com', '$2y$10$FtJ1x14P2hKH6cXcwrx2x.UwoBoW4e5/B3/tRMjFkKUffL4oiCRpS', 'EWVsXM3prYhOHAzknCA4taYtV7PUoHJ0xghx3wkS4DHo0ArgZaCCLzDt0lLf', '2018-01-08 15:59:38', '2018-01-08 15:59:38'),
(4, 'Ivanka Ivanova', 'ivanka@gmail.com', '$2y$10$l7r3JjKpxMUWhBGYWubTzuBGhexw4RiNeW8HZpA4fzlQrFYvdxOOu', 'CjDsz4pBJo4A9JteTUriISiOu22QmEhRpz8JqAk9hOfU437XnlbpMYpiH5Gk', '2018-01-14 08:59:27', '2018-01-14 08:59:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
