-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 05:30 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dresses', 1, '2023-06-19 20:24:49', '2023-06-19 20:24:49'),
(2, 'Bags', 1, '2023-06-19 20:26:11', '2023-06-19 20:26:11'),
(3, 'T-shirts', 1, '2023-06-20 14:32:43', '2023-06-20 14:32:43'),
(4, 'Jackets', 1, '2023-06-20 14:32:54', '2023-06-20 14:32:54'),
(5, 'Shoes', 1, '2023-06-20 14:33:02', '2023-06-20 14:33:02'),
(6, 'Jumpers', 1, '2023-06-20 14:33:10', '2023-06-20 14:33:10'),
(7, 'Jeans', 1, '2023-06-20 14:33:19', '2023-06-20 14:33:19'),
(8, 'Sportwear', 1, '2023-06-20 14:33:28', '2023-06-20 14:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `colour_pivots`
--

CREATE TABLE `colour_pivots` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `colour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colour_pivots`
--

INSERT INTO `colour_pivots` (`id`, `product_id`, `colour`, `created_at`, `updated_at`) VALUES
(4, 3, 'brown', '2023-06-20 21:43:51', '2023-06-20 21:43:51'),
(5, 3, 'yellow', '2023-06-20 21:43:51', '2023-06-20 21:43:51'),
(6, 4, 'red', '2023-06-20 21:47:34', '2023-06-20 21:47:34'),
(7, 5, 'blue', '2023-06-20 21:49:13', '2023-06-20 21:49:13'),
(8, 5, 'black', '2023-06-20 21:49:13', '2023-06-20 21:49:13'),
(9, 6, 'black', '2023-06-20 21:50:47', '2023-06-20 21:50:47'),
(10, 6, 'green', '2023-06-20 21:50:47', '2023-06-20 21:50:47'),
(11, 7, 'black', '2023-06-20 21:52:11', '2023-06-20 21:52:11'),
(12, 8, 'yellow', '2023-06-20 21:53:46', '2023-06-20 21:53:46'),
(13, 9, 'brown', '2023-06-20 21:54:50', '2023-06-20 21:54:50'),
(14, 9, 'black', '2023-06-20 21:54:50', '2023-06-20 21:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_19_190106_create_categories_table', 2),
(6, '2023_06_19_190418_create_products_table', 3),
(7, '2023_06_20_031249_create_size_pivots_table', 4),
(8, '2023_06_20_031315_create_colour_pivots_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `size`, `colour`, `brand`, `price`, `status`, `image`, `created_at`, `updated_at`) VALUES
(3, 1, 'Brown paperbag waist pencil skirt', '[\"s\"]', '[\"brown\",\"yellow\"]', 'Next', 60.00, 1, 'image16873154313354251921.jpg', '2023-06-19 22:58:22', '2023-06-20 21:43:51'),
(4, 3, 'Khaki utility boiler jumpsuit', '[\"s\"]', '[\"red\"]', 'River Island', 120.00, 1, 'image16873156543138740457.jpg', '2023-06-19 23:01:21', '2023-06-20 21:47:34'),
(5, 2, 'Orange saddle lock front chain bag', '[\"m\"]', '[\"blue\",\"black\"]', 'Geox', 152.00, 1, 'image16873157531955294700.jpg', '2023-06-20 21:49:13', '2023-06-20 21:49:13'),
(6, 4, 'Diamond Quilted Jacket', '[\"l\"]', '[\"black\",\"green\"]', 'New Balance', 250.00, 1, 'image168731584713128573989.jpg', '2023-06-20 21:50:47', '2023-06-20 21:50:47'),
(7, 5, 'Beige knitted elastic runner shoes', '[\"s\"]', '[\"black\"]', 'UGG', 84.00, 1, 'image16873159314219855259.jpg', '2023-06-20 21:52:11', '2023-06-20 21:52:11'),
(8, 6, 'Dark yellow lace cut out swing dress', '[\"m\"]', '[\"yellow\"]', 'F&F', 270.00, 1, 'image16873160261482416485.jpg', '2023-06-20 21:53:46', '2023-06-20 21:53:46'),
(9, 7, 'Blue utility pinafore denim dress', '[\"s\",\"m\"]', '[\"brown\",\"black\"]', 'Nike', 100.00, 1, 'image16873160901084003429.jpg', '2023-06-20 21:54:50', '2023-06-20 21:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `size_pivots`
--

CREATE TABLE `size_pivots` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `size_pivots`
--

INSERT INTO `size_pivots` (`id`, `product_id`, `size`, `created_at`, `updated_at`) VALUES
(6, 3, 's', '2023-06-20 21:43:51', '2023-06-20 21:43:51'),
(7, 4, 's', '2023-06-20 21:47:34', '2023-06-20 21:47:34'),
(8, 5, 'm', '2023-06-20 21:49:13', '2023-06-20 21:49:13'),
(9, 6, 'l', '2023-06-20 21:50:47', '2023-06-20 21:50:47'),
(10, 7, 's', '2023-06-20 21:52:11', '2023-06-20 21:52:11'),
(11, 8, 'm', '2023-06-20 21:53:46', '2023-06-20 21:53:46'),
(12, 9, 's', '2023-06-20 21:54:50', '2023-06-20 21:54:50'),
(13, 9, 'm', '2023-06-20 21:54:50', '2023-06-20 21:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Web', 'web@gmail.com', NULL, '$2y$10$70CN1tA1Vz/96gpv9nt0F.zJOXkcKDctxl.oFnCrqlmi/8qlMMatC', NULL, '2023-06-19 14:11:14', '2023-06-19 14:11:14'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$THxvlv8vtAOucabKJ0RhR.JDFKTVHn1GXi35e1XMq4q24QBZJ6Wci', NULL, '2023-06-20 14:30:20', '2023-06-20 14:30:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colour_pivots`
--
ALTER TABLE `colour_pivots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colour_pivots_product_id_foreign` (`product_id`);

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
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `size_pivots`
--
ALTER TABLE `size_pivots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `size_pivots_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `colour_pivots`
--
ALTER TABLE `colour_pivots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `size_pivots`
--
ALTER TABLE `size_pivots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `colour_pivots`
--
ALTER TABLE `colour_pivots`
  ADD CONSTRAINT `colour_pivots_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `size_pivots`
--
ALTER TABLE `size_pivots`
  ADD CONSTRAINT `size_pivots_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
