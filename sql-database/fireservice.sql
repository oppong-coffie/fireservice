-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 03:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fireservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(70, '2014_10_12_000000_create_users_table', 1),
(71, '2014_10_12_100000_create_password_resets_table', 1),
(72, '2019_08_19_000000_create_failed_jobs_table', 1),
(73, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(74, '2024_12_12_230339_create_workers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `pob` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `spouse` varchar(255) NOT NULL,
  `num_children` int(11) NOT NULL,
  `names_children` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `languages` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hometown` varchar(255) NOT NULL,
  `residential_address` varchar(255) NOT NULL,
  `kin_name` varchar(255) NOT NULL,
  `kin_phone` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_number` varchar(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL DEFAULT 'default_value',
  `national_id` varchar(255) NOT NULL DEFAULT 'default_value',
  `rank` varchar(255) NOT NULL DEFAULT 'default_value',
  `staff_id` varchar(255) NOT NULL DEFAULT 'default_value',
  `date_of_enlishment` varchar(255) NOT NULL DEFAULT 'default_value',
  `height` varchar(255) NOT NULL DEFAULT 'default_value',
  `shirt_size` varchar(255) NOT NULL DEFAULT 'default_value',
  `cap_beret_size` varchar(255) NOT NULL DEFAULT 'default_value',
  `boot_size` varchar(255) NOT NULL DEFAULT 'default_value',
  `shoe_size` varchar(255) NOT NULL DEFAULT 'default_value',
  `disciplinary` varchar(255) NOT NULL DEFAULT 'default_value',
  `station` varchar(255) NOT NULL DEFAULT 'default_value',
  `previous_station` varchar(255) NOT NULL DEFAULT 'default_value',
  `department` varchar(255) NOT NULL DEFAULT 'default_value',
  `previous_department` varchar(255) NOT NULL DEFAULT 'default_value',
  `retirement_date` varchar(255) NOT NULL DEFAULT 'default_value',
  `medical_conditions` varchar(255) NOT NULL DEFAULT 'default_value',
  `allergies` varchar(255) NOT NULL DEFAULT 'default_value',
  `blood_type` varchar(255) NOT NULL DEFAULT 'default_value',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `profile_pic`, `firstname`, `surname`, `dob`, `pob`, `marital_status`, `spouse`, `num_children`, `names_children`, `age`, `sex`, `languages`, `qualification`, `courses`, `contact`, `email`, `hometown`, `residential_address`, `kin_name`, `kin_phone`, `bank_name`, `bank_number`, `voters_id`, `national_id`, `rank`, `staff_id`, `date_of_enlishment`, `height`, `shirt_size`, `cap_beret_size`, `boot_size`, `shoe_size`, `disciplinary`, `station`, `previous_station`, `department`, `previous_department`, `retirement_date`, `medical_conditions`, `allergies`, `blood_type`, `created_at`, `updated_at`) VALUES
(2, 'uploads/PjTKc86X8CihjzlvN3Pc9r5RZZn6owk6RhtieqUF.jpg', 'Joseph', 'Mensah', '1999-10-11', 'Sefwi', 'married', 'Janet Ahenkora', 2, 'Oppong Ben, Adow Vic', '24', 'male', 'English, Fante', 'Degree', 'Info tech, Com App, C++, PHP, Mobilie App', '0246414197', 'mensahjoe27@gmail.com', 'Takoradi', 'box 39', 'Kwasi Sarfo', '0246414197', 'Call Bank', '222220000087822', '328670887826822', 'GHA-9828678657-7', 'IT Technicien', 'GH126', '2000-12-23', '22', '22', '99', '12', '12', 'None', 'Efia Nkwanta', 'Tarkwa', 'IT', 'Fighter', 'Not yet', 'default_value', 'Negative', 'A+', '2025-01-02 09:02:08', '2025-01-02 09:02:08'),
(3, 'uploads/SLzSKCx5OSkBmHOQhBkXF5vHKYOLYdjLrcjSqYzV.jpg', 'James', 'Arthur', '2000-11-11', 'Kumasi', 'single', 'Janet Arthur', 1, 'Kofi Arthur', '54', 'male', 'English, Twi', 'HND', 'Info tech, Com App, Citizenship', '0246414197', 'oppongcoffie27@gmail.com', 'Takoradi', 'box 39', 'Ama Kontor', '0246414197', 'GCB', '222220000087822', '328670887826822', 'GHA-9828678657-7', 'Officer', 'GH126', '2015-11-11', '12', '22', '22', '22', '22', 'none', 'Efia Nkwanta', 'Tarkwa', 'IT', 'Fashion', '11/11/1888', 'default_value', 'Negative', 'O+', '2025-01-02 13:51:32', '2025-01-02 13:51:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
