-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 05:25 AM
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
-- Database: `jobifyuganda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(1) NOT NULL,
  `adminname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mypassword` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `adminname`, `email`, `mypassword`, `created_at`) VALUES
(1, 'tech Warriors Ltd', 'sempo.galaxys@gmail.com', '$2y$10$goEoJnysVBPpCqnL2haM/.F5ezMDXtuND2BJ/17o9eQquauXDvsEO', '2023-04-30 09:11:41'),
(3, 'Sempo', 'ssempebwapaulbct@gmail.com', '$2y$10$8NrhZ9RcYWOLzwtmwmQeCuAONDX/ZW5LXTkSFbP2oKao4frVMB75K', '2023-04-30 12:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Design', '2023-04-26 13:32:11'),
(2, 'Development', '2023-04-26 13:32:11'),
(6, 'Management', '2023-04-30 19:52:46'),
(7, 'Analysis', '2023-05-01 03:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(3) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `job_region` varchar(200) NOT NULL,
  `job_type` varchar(200) NOT NULL,
  `vacancy` varchar(3) NOT NULL,
  `job_category` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `application_deadline` varchar(200) NOT NULL,
  `job_description` text NOT NULL,
  `responsibilities` text NOT NULL,
  `education_experience` text NOT NULL,
  `other_benifits` text NOT NULL,
  `company_email` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_id` int(3) NOT NULL,
  `company_image` varchar(200) NOT NULL,
  `status` int(3) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `job_region`, `job_type`, `vacancy`, `job_category`, `experience`, `salary`, `gender`, `application_deadline`, `job_description`, `responsibilities`, `education_experience`, `other_benifits`, `company_email`, `company_name`, `company_id`, `company_image`, `status`, `created_at`) VALUES
(1, 'Web developer', 'Mbale', 'Part Time', '1', 'development', '1-3 years', '$50k - $70k', 'Male', '20-5-2023', 'filled', 'filled1', 'filled2', 'filled3', 'sempo.code@gmail.com', 'tech Warriors Ltd', 1, '20230302_164704.png', 1, '2023-04-26 09:21:19'),
(2, 'Web Analyst', 'Entebbe', 'Part Time', '3', 'design', '1-3 years', '$50k - $70k', 'Any', '29-5-2023', 'weeeeeeeeeeeeeeeeeeeeee', 'waaaaaaaaaaaaaaaa', 'wooooooooooooooooooooooooooo', 'wuuuuuuuuuuuuuuuuuuuuu', 'sempo.code@gmail.com', 'tech Warriors Ltd', 1, '20230302_164704.png', 0, '2023-04-26 09:46:28'),
(4, 'Game development', 'Anywhere', 'Part Time', '6', 'development', '3-6 years', '$50k - $70k', 'Male', '5-6-2023', 'oijgsdfojifds\r\nsdfoijosdf\r\nfdjko;dso', 'poigfdspokdsfpodfs\r\ndsfkpdfsoijodfs\r\ndfjksd;', 'dsjklsdgf\r\nsdoijerioe\r\nerjoierjose', 'gjols;lkfgjoerop\r\npweriutewmns\r\noijvsk;esrgf\r\nskjhsaioua', 'sempo.code@gmail.com', 'tech Warriors Ltd', 1, '20230302_164704.png', 1, '2023-04-26 14:18:51'),
(5, 'Software developer', 'Kampala', 'Full Time', '2', 'development', '3-6 years', '$70k - $100k', 'Any', '10-5-2023', 'thlk;asdfjlk;asdfjlk;fsdklsdlk', 'gf;ljkfds;lkdflk', 'lkj;dgjdfljkdf', 'ljkgfkjdkkjcdvbjlkdf', 'sempo.code@gmail.com', 'tech Warriors Ltd', 1, '20230302_164704.png', 1, '2023-04-26 15:59:23'),
(6, 'UI /UX designer', 'Anywhere', 'Full Time', '6', 'design', '1-3 years', '$50k - $70k', 'Any', '1-7-2023', 'hjfdsjkdfklksd', 'jldjkdfgkl;d', 'kjjgdkldlkd', ' ljdf;lkjdsfl;ks', 'sempo.code@gmail.com', 'tech Warriors Ltd', 1, '20230302_164704.png', 0, '2023-04-26 16:03:03'),
(8, 'Graphics Designer', 'Kampala', 'Full Time', '2', 'design', '1-3 years', '$50k - $70k', 'Any', '10-6-2023', 'fdkjdflkj', 'lkjfdjjjjj', 'ljkfgslkj', 'lkjfdkjl', 'ladwit8@gmail.com', 'Sempo Digital Services', 9, 'profilePic.jpg', 1, '2023-04-27 13:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(3) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cv` varchar(200) DEFAULT NULL,
  `worker_id` int(3) NOT NULL,
  `job_id` int(3) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `company_id` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `username`, `email`, `cv`, `worker_id`, `job_id`, `job_title`, `company_id`, `created_at`) VALUES
(1, 'Wit Paul', 'ssempebwapaulbct@gmail.com', '0321637739.pdf', 5, 1, 'Web developer', 1, '2023-04-27 07:11:16'),
(2, 'Wit Paul', 'ssempebwapaulbct@gmail.com', '0321637739.pdf', 5, 4, 'Game development', 1, '2023-04-27 11:09:04'),
(3, 'Tiondi Gilbert', 'tiondigilbert2018@gmail.com', '', 11, 5, 'Software developer', 1, '2023-05-01 19:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `saved_jobs`
--

CREATE TABLE `saved_jobs` (
  `id` int(3) NOT NULL,
  `job_id` int(3) NOT NULL,
  `worker_id` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saved_jobs`
--

INSERT INTO `saved_jobs` (`id`, `job_id`, `worker_id`, `created_at`) VALUES
(1, 1, 5, '2023-04-27 08:10:48'),
(2, 5, 5, '2023-04-27 10:20:19'),
(7, 8, 5, '2023-04-27 13:29:24'),
(8, 5, 11, '2023-05-01 19:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` int(3) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `searches`
--

INSERT INTO `searches` (`id`, `keyword`, `created_at`) VALUES
(1, 'Game development', '2023-04-30 06:12:07'),
(2, 'Web developer', '2023-04-30 07:24:31'),
(3, 'Software developer', '2023-04-30 07:24:55'),
(4, 'web designer', '2023-04-30 07:25:42'),
(5, 'Web developer', '2023-04-30 07:28:50'),
(6, 'Architectural designer', '2023-04-30 07:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mypassword` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `cv` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `linkedin` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mypassword`, `img`, `type`, `cv`, `title`, `bio`, `facebook`, `twitter`, `linkedin`, `created_at`) VALUES
(1, 'tech Warriors Ltd', 'sempo.code@gmail.com', '$2y$10$goEoJnysVBPpCqnL2haM/.F5ezMDXtuND2BJ/17o9eQquauXDvsEO', '20230302_164704.png', 'Company', NULL, 'NULL', 'We provide web development and maintenance services. We specialize most in dynamic websites. Trust us with your website issues. May God bless you all.', '', '', '', '2023-04-21 22:39:55'),
(5, 'Wit Paul', 'ssempebwapaulbct@gmail.com', '$2y$10$Mo9lQEZjXyI0C322cHKkc.qiSdTwhxlwQkJOCg6pDipIpyJKasQlC', '20221113_201128.jpg', 'Worker', '0321637739.pdf', 'UI / UX designer', 'I\'m a committed designer with an experience of three years now. Do not hesitate to reach out to me in case of any task, thank you.', '', '', '', '2023-04-23 09:30:07'),
(9, 'Sempo Digital Services', 'ladwit8@gmail.com', '$2y$10$UrCOnexDq7KvnjKH2qiFzejBpA2aBr2J9adHuKBM0jrwZ8/LUfF.6', 'fullLog.png', 'Company', 'NULL', 'NULL', '', '', '', '', '2023-04-27 13:08:28'),
(10, 'Ssali', 'ssalilawrence91@gmail.cm', '$2y$10$cTmPT0GDJhk9eUSn4iRKcuBmhfsHgAgTfJxtIf9iKHVNTqtVatp8u', 'sali.png', 'Worker', 'UC-fc5ab270-7710-4847-9a78-16d30210d02e.pdf', 'Systems Manager', 'sdfsffsf', '', '', '', '2023-05-01 19:04:06'),
(11, 'Tiondi Gilbert', 'tiondigilbert2018@gmail.com', '$2y$10$K.mqYrWTok6txiLjHJK3e.UYvz/LJOFAdYQzPgSkl0ward8QcgDku', '20230320_000713.png', 'Worker', 'CSS Basic Concepts.pptx', 'Network Engineer', 'fdsaaaaaaaaaaaaaaaaaaaaaaaaaajklsdfaalkjdsslkjdsfkjdfifdkjxkxzckjk', '', '', '', '2023-05-01 19:27:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saved_jobs`
--
ALTER TABLE `saved_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `saved_jobs`
--
ALTER TABLE `saved_jobs`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
