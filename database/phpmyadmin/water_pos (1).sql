-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 11:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `water_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_code` varchar(100) NOT NULL,
  `category_desc` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_desc`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'abv', 'asdasd', 'poster.png', '2022-11-13 07:17:11', '2022-11-13 07:17:11'),
(2, 'acas', 'asd', 'plot.png', '2022-11-13 07:28:09', '2022-11-13 07:28:09'),
(3, 'brand1', 'brand2133s;ss', '2-110103163K70-L.jpg', '2022-11-13 17:30:07', '2022-11-13 17:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_code`, `category_desc`, `image`, `created_at`, `updated_at`) VALUES
(5, 'ajsj', 'asd', 'sdasd', 'plot.png', '2022-11-11 16:20:21', '2022-11-11 16:20:21'),
(6, 'ada', 'aasas', 'dsdas', 'plot.png', '2022-11-11 16:21:55', '2022-11-11 16:21:55'),
(7, 'abx', 'abx', 'bax', 'poster.png', '2022-11-11 16:37:32', '2022-11-12 16:58:37'),
(8, 'arbaz', 'arbd', 'klhkhds', 'poster.png', '2022-11-13 08:22:57', '2022-11-13 08:22:57'),
(9, 'abc123', 'abc-123456', 'hello world', 'Generate_Certificate_1633935838970.jpg', '2022-11-13 17:28:23', '2022-11-13 17:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Name`, `Email`, `Phone`, `Country`, `City`, `Address`, `Description`, `created_at`, `updated_at`) VALUES
(1, 'hello123', 'hell12@gmai.com', '62347823', 'India', 'oewo', 'qwoeewioruwio', 'jwioeuwiowroi', '2022-11-21 16:03:09', '2022-11-21 16:43:42'),
(2, 'abc', 'abc@gamil.com', '78326478', 'USA', 'nrew', 'eklwlew', 'wewe;l', '2022-11-21 17:23:19', '2022-11-21 17:23:19'),
(3, 'eqew', 'qew@gamil.com', '3493458236', 'pakistan', 'ewerwer', 'erflmrlerflr', 'ererff', '2022-11-21 17:29:48', '2022-11-21 17:29:48'),
(4, 'qwertyyuii', 'wtrw@gmail.com', '83248726', 'pakistan', 'eji', 'qhuiwehui', 'hdiheuiwfuie', '2022-11-21 17:33:09', '2022-11-21 17:33:09'),
(5, 'bilal', 'bilal@gmail.com', '8327863289', 'India', 'hyderbad', 'qwewwqwqe', 'weqqweqwe', '2022-11-30 16:55:18', '2022-11-30 16:55:18'),
(6, 'weerrtt', 'wa@aa.com', '8938943289', 'India', 'weqwe', 'qweweqqwe', 'qweqwe', '2022-11-30 18:34:03', '2022-11-30 18:34:03'),
(7, 'tre', 'tre@gmail.com', 'y78362864782', 'India', 'dweq', 'qeqw', 'qwweqwe', '2022-11-30 18:35:22', '2022-11-30 18:35:22');

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
(5, '2022_11_08_195420_create_categories_table', 2),
(6, '2022_11_11_194026_add_image_filed_to_categories', 3),
(7, '2022_11_12_220202_create_subcategories_table', 4),
(8, '2022_11_12_225259_subcategory', 4),
(9, '2022_11_13_114748_create_brands_table', 5),
(10, '2022_11_13_163456_create_product_table', 6),
(11, '2022_11_13_104623_rename_id_in_subcategories', 7),
(12, '2022_11_13_202244_add_image_filed_to_product', 8),
(13, '2022_11_21_202014_create_customers_table', 8),
(14, '2022_11_21_214507_create_suppliers_table', 9);

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
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `sub_cate_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `product_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_min_qty` bigint(20) UNSIGNED NOT NULL,
  `product_qty` bigint(20) UNSIGNED NOT NULL,
  `product_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `cate_id`, `sub_cate_id`, `brand_id`, `product_unit`, `product_SKU`, `product_min_qty`, `product_qty`, `product_desc`, `product_price`, `created_at`, `updated_at`, `product_img`) VALUES
(5, 'aere', 7, 1, 1, 'ml', '2323', 23, 12, '2321qweweweq', 32, '2022-11-15 16:49:11', '2022-11-15 16:49:11', '3225051385_17e9c166a0_z.jpg'),
(8, 'ewr', 7, 2, 3, 'Liter', '123', 1223, 2313123, 'werwrerw4', 21, '2022-11-15 16:57:11', '2022-11-15 16:57:11', '1.jpg'),
(9, 'qw', 7, 1, 1, 'Liter', '123', 123, 123, '12dwweeqw', 12, '2022-11-15 17:26:48', '2022-11-15 17:26:48', '20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paidamount` int(11) NOT NULL,
  `totalamount` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saledate` date NOT NULL DEFAULT current_timestamp(),
  `customerid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `paidamount`, `totalamount`, `status`, `saledate`, `customerid`, `created_at`, `updated_at`) VALUES
(1, 12, 53, 'Completed', '2022-12-02', 3, '2022-12-01 17:02:49', '2022-12-01 17:02:49'),
(2, 12, 53, 'Completed', '2022-12-02', 3, '2022-12-01 17:06:36', '2022-12-01 17:06:36'),
(3, 12, 53, 'Completed', '2022-12-02', 3, '2022-12-01 17:08:09', '2022-12-01 17:08:09'),
(4, 12, 53, 'Completed', '2022-12-02', 3, '2022-12-01 17:13:00', '2022-12-01 17:13:00'),
(5, 12, 53, 'Completed', '2022-12-02', 3, '2022-12-01 17:13:45', '2022-12-01 17:13:45'),
(6, 12, 53, 'Inprogress', '2022-12-02', 1, '2022-12-01 17:14:08', '2022-12-01 17:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `salesproducts`
--

CREATE TABLE `salesproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `saleid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salesproducts`
--

INSERT INTO `salesproducts` (`id`, `saleid`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 21, '2022-12-01 17:13:45', '2022-12-01 17:13:45'),
(2, 5, 1, 32, '2022-12-01 17:13:45', '2022-12-01 17:13:45'),
(3, 6, 1, 21, '2022-12-01 17:14:08', '2022-12-01 17:14:08'),
(4, 6, 1, 32, '2022-12-01 17:14:08', '2022-12-01 17:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `sub_cate_id` bigint(20) UNSIGNED NOT NULL,
  `sub_cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cate_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cate_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`sub_cate_id`, `sub_cate_name`, `sub_cate_code`, `sub_cate_desc`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'abc223', 'wdeqwq1', 7, '2022-11-13 05:01:21', '2022-11-13 05:01:21'),
(2, 'ascd', '123', 'qdwqwe', 7, '2022-11-13 14:43:12', '2022-11-13 14:43:12'),
(3, 'abc_3456778', 'he-123', 'hello wolrd21233', 9, '2022-11-13 17:29:10', '2022-11-13 17:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `Name`, `Email`, `Phone`, `Country`, `City`, `Address`, `Description`, `created_at`, `updated_at`) VALUES
(1, 'wqe55555', 'fahad@gmail.com', '78623786', 'iNDIA', 'wewq', 'dklwejfkjwel dcdw', 'wfwewe', '2022-11-21 17:05:53', '2022-11-21 17:33:22'),
(2, 'supply12', 'sypp@gmail.com', '8236863', 'USA', 'hdwh', 'hkwhdjkwehjkdhk', 'kdhjkhjkfjke', '2022-11-21 17:32:13', '2022-11-21 17:32:13');

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cate_id_foreign` (`cate_id`),
  ADD KEY `product_sub_cate_id_foreign` (`sub_cate_id`),
  ADD KEY `product_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesproducts`
--
ALTER TABLE `salesproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`sub_cate_id`),
  ADD KEY `subcategories_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `salesproducts`
--
ALTER TABLE `salesproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `sub_cate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `product_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `product_sub_cate_id_foreign` FOREIGN KEY (`sub_cate_id`) REFERENCES `subcategories` (`sub_cate_id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
