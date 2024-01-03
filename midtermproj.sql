-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 01:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midtermproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `total`, `address`, `contact_number`, `created_at`, `updated_at`) VALUES
(3, 1, 3, 20, 0.00, 'laoac', '0902920', '2023-09-28 04:19:19', '2023-09-28 04:19:19'),
(4, 3, 4, 9, 0.00, 'Laoac Alcala Pangasinan', '09077996720', '2023-10-18 00:00:20', '2023-10-18 00:00:20'),
(5, 3, 4, 20, 0.00, 'sample', '09077996720', '2023-10-18 00:01:12', '2023-10-18 00:01:12'),
(6, 5, 4, 10, 0.00, 'sinabaan', '09077996720', '2023-10-18 06:01:28', '2023-10-18 06:01:28'),
(7, 7, 4, 30, 0.00, 'hahhaa', '123', '2023-10-26 06:30:56', '2023-10-26 06:30:56'),
(8, 7, 4, 2, 0.00, 'sample', '09077996720', '2023-10-26 06:31:42', '2023-10-26 06:31:42'),
(9, 8, 8, 20, 0.00, 'laoac alcala pangasinan', '09077996720', '2023-11-21 05:35:45', '2023-11-21 05:35:45'),
(10, 11, 9, 3, 0.00, 'sample', '09077996720', '2023-12-11 23:33:07', '2023-12-11 23:33:07'),
(11, 11, 4, 7, 0.00, 'sample', '0907796720', '2023-12-11 23:34:13', '2023-12-11 23:34:13');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_27_103654_create_products_table', 2),
(6, '2023_09_27_105034_create_carts_table', 3),
(8, '2023_09_27_105235_create_order_purchases_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `order_purchases`
--

CREATE TABLE `order_purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `totalcost` decimal(8,2) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reference_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_purchases`
--

INSERT INTO `order_purchases` (`id`, `cart_id`, `totalcost`, `payment_method`, `status`, `created_at`, `updated_at`, `reference_number`) VALUES
(1, 3, 20000.00, 'cash on delivery', 2, '2023-09-28 04:19:30', '2023-09-28 04:21:38', 'REF-3hUobiAJ'),
(2, 5, 14000.00, 'cash on delivery', 0, '2023-10-18 00:01:32', '2023-10-18 00:01:32', 'REF-mH7cVVOV'),
(3, 5, 14000.00, 'cash on delivery', 0, '2023-10-18 00:03:47', '2023-10-18 00:03:47', 'REF-sJlIFKbp'),
(4, 5, 14000.00, 'cash on delivery', 0, '2023-10-18 00:04:04', '2023-10-18 00:04:04', 'REF-dBn3FsQr'),
(5, 6, 7000.00, 'cash on delivery', 2, '2023-10-18 06:01:37', '2023-10-18 06:02:13', 'REF-H4OZvOAE'),
(6, 7, 21000.00, 'cash on delivery', 0, '2023-10-26 06:31:52', '2023-10-26 06:31:52', 'REF-5D3bfRrz'),
(7, 9, 16000.00, 'cash on delivery', 2, '2023-11-21 05:35:56', '2023-11-21 05:36:36', 'REF-PzM4xaDy'),
(8, 11, 4900.00, 'cash on delivery', 2, '2023-12-11 23:34:38', '2023-12-11 23:36:46', 'REF-DMCbNcg2'),
(9, 10, 2400.00, 'cash on delivery', 1, '2023-12-11 23:34:38', '2023-12-11 23:36:29', 'REF-mmB9xREQ');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `label`, `description`, `image`, `price`, `is_active`, `quantity`, `created_at`, `updated_at`) VALUES
(3, 'sample', 'sample', '1695900968.png', 1000.00, 0, 69, '2023-09-28 03:36:08', '2023-10-10 17:24:40'),
(4, 'PPGI roof', 'Roof board is a board that can directly bear the load of the roof. Roofing panels are located on the roof of a house and are generally made of metals such as aluminum, magnesium, manganese or alloy. After the roof panels are assembled on the gable inclined beam on the top floor of the house, the wing panels are lapped to cover the vertical cracks that do not appear in the light of several monomer box roof panels, forming a well-integrated pitched roof. The aluminum alloy Coated on roofing and exterior wall is usually coated with Coil Coated technology, which has the advantages of good color difference control, uniform paint film, high quality stability.', '1696987616.jpg', 700.00, 1, 993, '2023-10-10 17:26:56', '2023-12-11 23:34:38'),
(5, 'sample', 'sample', '1699241634.jpg', 700.00, 0, 2000, '2023-11-05 19:33:54', '2023-11-06 19:35:15'),
(6, '304L Stainless steel plate', 'Galvalumed sheet, with 55% aluminum zinc alloy coating on the surface. The surface of the Galvalumed sheet  presents a unique smooth, flat and gorgeous star, and the basic color is silver white. The special coating structure makes it have excellent corrosion resistance. The normal service life of the Galvalumed sheet can reach 25a, and the heat resistance is very good, which can be used in the high temperature environment of 315 ℃; The coating has good adhesion with the paint film, has good processing performance, and can be punched, sheared, welded, etc; The surface conductivity is very good.', '1699328336.jpg', 800.00, 1, 100, '2023-11-06 19:38:56', '2023-11-21 05:28:59'),
(7, 'sample', 'sample', '1700573378.jpg', 900.00, 1, 1000, '2023-11-21 05:29:38', '2023-11-21 05:29:38'),
(8, 'sample roof', 'sam[le description', '1700573525.jpg', 800.00, 1, 80, '2023-11-21 05:32:05', '2023-11-21 05:35:56'),
(9, 'PPGI roof', 'Roof board is a board that can directly bear the load of the roof. Roofing panels are located on the roof of a house and are generally made of metals such as aluminum, magnesium, manganese or alloy. After the roof panels are assembled on the gable inclined beam on the top floor of the house, the wing panels are lapped to cover the vertical cracks that do not appear in the light of several monomer box roof panels, forming a well-integrated pitched roof. The aluminum alloy Coated on roofing and exterior wall is usually coated with Coil Coated technology, which has the advantages of good color difference control, uniform paint film, high quality stability.', '1702366201.JPG', 800.00, 1, 97, '2023-12-11 23:30:01', '2023-12-11 23:34:38');

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ken', 'ken@gmail.com', NULL, '$2y$10$RKNEhdEK9ReEdS.CSMwofuVEEjFWEAP229lEjB/g0mw.bl72ZxF5S', NULL, '2023-09-27 03:20:03', '2023-09-27 03:20:03'),
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$10$kgon6G1DluKmnfLpKBP9XupnkZ7FFNkVGRfqTThGOGkNduL3YKzuO', NULL, '2023-09-28 03:35:10', '2023-09-28 03:35:10'),
(4, 'brix jordan', 'brix@gmail.com', NULL, '$2y$10$P8HYm.xMwXprn2.bubut4uEmF0dWoK7gkVA8.i8UzuARnCez40XhG', NULL, '2023-10-18 05:53:42', '2023-10-18 05:53:42'),
(5, 'jordan', 'jordan@gmail.com', NULL, '$2y$10$UOjyl5WH2qXu9p70B51T1OdG3FTnIRqcWFJ25PrVOGK61hr0d3NZO', NULL, '2023-10-18 05:58:53', '2023-10-18 05:58:53'),
(6, 'carmelo', 'carmelo@gmail.com', NULL, '$2y$10$kwnVttrpyRHFoDmCCQAAruNba3mk1Gzx17nJIcnTqfr6t1y2XhTge', NULL, '2023-10-18 05:59:41', '2023-10-18 05:59:41'),
(7, 'ashley', 'ashley@gmail.com', NULL, '$2y$10$FxGuSKVUykTvVlCw3qpgt.qeTWBK/N2H03pvH94YMmBzO9SgdRiTe', NULL, '2023-10-26 06:30:18', '2023-10-26 06:30:18'),
(8, 'jonny dimagiba', 'dimagiba@gmail.com', NULL, '$2y$10$eh39ICe2VPqZcbTDdPdOUOsXruIz09idDIk71MKimkvDvUFqhgwF.', NULL, '2023-11-20 23:28:36', '2023-11-20 23:28:36'),
(9, 'Monica Nama', 'monica@gmail.com', NULL, '$2y$10$aVurgaSno6MaZXRjKnwyg.OW0uXxlZW.ybPp8Crk2ldixjGWkI6fO', NULL, '2023-12-11 05:09:13', '2023-12-11 05:09:13'),
(10, 'User1', 'user1@gmail.com', NULL, '$2y$10$/h5OYfQlcocJkut7kixrC.vQCdgBUhwZ/O3491HBkDuOEh7iFuYhq', NULL, '2023-12-11 05:14:21', '2023-12-11 05:14:21'),
(11, 'user2', 'user2@gmail.com', NULL, '$2y$10$.V9fXHMG9O2iWVb9mczWeujHEakyrwRSpdsfQuYmgroyfq9MdEb6K', NULL, '2023-12-11 05:14:44', '2023-12-11 05:14:44'),
(12, 'user3', 'user3@gmail.com', NULL, '$2y$10$iBIFpw8a0S1tMaWo9Xnwc.kn0rxOCq1.9nEdsr22axqs3jSET/J7i', NULL, '2023-12-11 05:15:01', '2023-12-11 05:15:01'),
(13, 'user4', 'user4@gmail.com', NULL, '$2y$10$tK3hXpKj2oHIpui2eA5uGOjGimitpRoKgaOfZhiV7CX863NvhOHzu', NULL, '2023-12-11 05:15:15', '2023-12-11 05:15:15'),
(14, 'user5', 'user5@gmail.com', NULL, '$2y$10$QQ2WBX30f9B0XKytuM7Gb.fMefOwYDN4ziwJ5FSS2nreWwoLOi5a2', NULL, '2023-12-11 05:15:31', '2023-12-11 05:15:31'),
(15, 'user6', 'user6@gmail.com', NULL, '$2y$10$owEqCjZaKapOH0k9yFy.duENdyfjjQGq0phTT43vxc1kP1ldOwxJy', NULL, '2023-12-11 05:15:51', '2023-12-11 05:15:51'),
(16, 'user7', 'user7@gmail.com', NULL, '$2y$10$qLOOA8.w2CFknwrJ9vLfjOO0ldKdi07YwWhSuemJKUyRS7clFKdvi', NULL, '2023-12-11 05:16:30', '2023-12-11 05:16:30'),
(17, 'user8', 'user8@gmail.com', NULL, '$2y$10$tzAWWeK2j3KwBdCS6xoxZOlW0Uv.2QCLmP7gAVvYkRK0z067K0/IG', NULL, '2023-12-11 05:16:44', '2023-12-11 05:16:44'),
(18, 'user9', 'user9@gmail.com', NULL, '$2y$10$SP2fddkQUmW0nk4EcFI2U.bn4cUPHhGq8TnkwhgCe7qFOLDWEhZAa', NULL, '2023-12-11 05:17:09', '2023-12-11 05:17:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

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
-- Indexes for table `order_purchases`
--
ALTER TABLE `order_purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_purchases_cart_id_foreign` (`cart_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_purchases`
--
ALTER TABLE `order_purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_purchases`
--
ALTER TABLE `order_purchases`
  ADD CONSTRAINT `order_purchases_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
