-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 яну 2019 в 22:17
-- Версия на сървъра: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computersp`
--

-- --------------------------------------------------------

--
-- Структура на таблица `computers`
--

CREATE TABLE `computers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `computers`
--

INSERT INTO `computers` (`id`, `name`, `description`, `created_at`, `updated_at`, `photo`) VALUES
(16, 'Georgi', 'aasdq', '2019-01-27 11:05:31', '2019-01-27 11:05:31', '1548594331.PNG'),
(17, 'Georgi', 'jorosad', '2019-01-27 15:00:35', '2019-01-27 15:00:35', '1548608435.PNG'),
(18, 'dsadsa', 'ddssa', '2019-01-27 15:01:20', '2019-01-27 15:01:20', '1548608480.PNG'),
(19, 'Intel Core i7-8700K', '# of Cores: 6\r\n# of Threads: 12\r\nProcessor Base Frequency: 3.70 GHz\r\nMax Turbo Frequency: 4.70 GHz\r\nCache: 12 MB\r\nBus Speed: 8 GT/s DMI3\r\nTDP: 95 W', '2019-01-27 15:36:46', '2019-01-27 15:36:46', '1548610606.jpg'),
(20, 'AMD Ryzen 7 2700X', 'Octa-Core 3.7GHz AM4', '2019-01-27 15:40:23', '2019-01-27 15:40:23', '1548610823.jpg'),
(21, 'TeamGroup Delta RGB LED 2x8GB DDR4 3000MHz', '2 x 8\r\nНастолна\r\n16 GB\r\nDDR4\r\n3000 MHz', '2019-01-27 15:41:16', '2019-01-27 15:41:16', '1548610876.jpg'),
(22, '1GB DDR2 533 MHZ CORSAIR VALUE SELECT', 'ТИП на RAM паметта:\r\nDDR2 за компютър	\r\nРазмер на паметта:\r\n1GB	\r\nСкорост ( Mhz ):\r\n533 MHz', '2019-01-27 15:42:39', '2019-01-27 15:42:39', '1548610959.jpg'),
(23, 'Gigabyte B450M AM4', 'DS3H AM4 B450 4DD R4 DVI/HDMI/M.2 uATX', '2019-01-27 15:45:13', '2019-01-27 15:45:56', '1548611113.jpg'),
(24, 'MSI B450 TOMAHAWK', 'CPU Socket 	Socket AM4\r\nМарка процесор	AMD\r\nТип на паметта	DDR4\r\nИзходи\r\nИнтегрирана видеокарта	Не\r\nDVI	Да\r\nHDMI	Да\r\nDisplayPort	Не', '2019-01-27 15:47:36', '2019-01-27 15:47:36', '1548611256.jpg'),
(25, 'Samsung 860 EVO 2.5 500GB', 'Външен/вътрешен	Вътрешен SSD\r\nКапацитет	500 GB\r\nМаксимален пренос на данни	6 Gbit/s\r\nNAND flash тип 	TLC\r\nМаксимална SSD скорост на четене	550 MB/s', '2019-01-27 15:48:58', '2019-01-27 15:49:09', '1548611338.jpg'),
(26, 'Kingston A400 2.5 240GB', 'Външен/вътрешен	Вътрешен SSD\r\nКапацитет	240 GB\r\nМаксимален пренос на данни	6 Gbit/', '2019-01-27 15:50:05', '2019-01-27 15:50:05', '1548611405.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_01_22_170259_add_photo_to_computers', 2);

-- --------------------------------------------------------

--
-- Структура на таблица `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Георги Дяков', 'g.dqkov@abv.bg', NULL, '$2y$10$auLdG2hycTaWferUHxx.MeGGmF5DX1uvpEbJ7NCOR1hLQpP8qu.fi', 'admin', 'ZTdjbIalA5kLs2ru01FXdLM69YSNklXarFV4Tc3uplJp0kyBEoohWBFej7rs', '2019-01-21 12:23:22', '2019-01-21 12:23:22'),
(3, 'GeorgiUser', 'g.dqkov@mail.com', NULL, '$2y$10$oglMmTiys8mWxGjSn2tk/u8SSOGvZ1WD8/dknvKyCJbNTeJvaMXpi', 'user', 'Jx4MmYdDmHu2mDvGTsK9r6hh84XkSk2uBeaBNQZinasN2ozO1jia1HgDtX4w', '2019-01-21 14:36:08', '2019-01-21 14:36:08'),
(7, 'Petko', 'petko@abv.bg', NULL, '$2y$10$YjreqgbtMQE/01E0ztQ8S.bxO8HJ11pg/kx6intslNMjnzArNrE5m', 'user', 'gbS0V5uhqMthh1mOUdZ0Omza0ZdJ0UNhRbqudbpmHxhtKHxH094Co67UC0zN', '2019-01-27 15:20:39', '2019-01-27 15:20:39'),
(8, 'Stamatko', 'stamatko@abv.bg', NULL, '$2y$10$sx4A6QpaDt8KtqAEJZWR5.PVLp3ALAnAv7d1remSZaaywEOXPMu3O', 'user', '0UJ5rEPmKIZJFJGAu2VbbvBsNkpR6TpkGUfimuqNPS8UmJPQMpafVcbZgWIk', '2019-01-27 15:24:00', '2019-01-27 15:24:00'),
(9, 'Vladi', 'vladi@abv.bg', NULL, '$2y$10$xdSmv0HbhJq3c0LVU8yCFOIoS1Xjgmkhxt95x66AEi8ts149/jLTa', 'user', 'eT8GGRCLXp9skYbC3hT6SAw1g5odvN73Gwenie0UrppKhJNAZJKxBPoT3QeN', '2019-01-27 15:29:38', '2019-01-27 15:29:38'),
(10, 'admin', 'admin@abv.bg', NULL, '$2y$10$IFcis.ZhFR2Ua4op5uU38uS5NFF3WzETyIoLQP.t/57X5nNfCaWC2', 'admin', '6PVbxxJbITegqn49gj5ZGwb9ZEH8CBNKiOIm3RFX6oECroZjI8x2Diq0GmLY', '2019-01-27 16:38:58', '2019-01-27 16:38:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
