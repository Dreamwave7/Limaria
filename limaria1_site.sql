-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Час створення: Лют 03 2025 р., 14:07
-- Версія сервера: 10.6.20-MariaDB-cll-lve
-- Версія PHP: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `limaria1_site`
--

-- --------------------------------------------------------

--
-- Структура таблиці `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `directions`
--

CREATE TABLE `directions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `abbreviation` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `directions`
--

INSERT INTO `directions` (`id`, `title`, `name`, `abbreviation`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Харчовка', 'food', 'FD', 'Description for Direction food', 1, '2025-01-07 06:52:17', '2025-01-07 06:52:17'),
(2, 'Медицина', 'medicine', 'MDN', 'Description for Direction medicine', 1, '2025-01-07 06:52:17', '2025-01-07 06:52:17'),
(3, 'Ветеринарія', 'veterinary', 'VTR', 'Description for Direction veterinary', 1, '2025-01-07 06:52:17', '2025-01-07 06:52:17');

-- --------------------------------------------------------

--
-- Структура таблиці `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '2024_12_26_150136_create_personal_access_tokens_table', 1),
(4, '2024_12_26_204414_create_directions_table', 1),
(5, '2024_12_26_212051_create_positions_table', 1),
(6, '2024_12_26_221415_create_employees_table', 1),
(7, '2024_12_26_221420_create_phones_table', 1),
(8, '2025_01_08_083753_create_feedback_table', 2);

-- --------------------------------------------------------

--
-- Структура таблиці `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `phones`
--

CREATE TABLE `phones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `phones`
--

INSERT INTO `phones` (`id`, `employee_id`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, '+380982190556', '2025-01-07 07:20:59', '2025-01-07 07:20:59'),
(2, 2, '+380982190557', '2025-01-07 07:22:49', '2025-01-07 07:22:49'),
(3, 3, '+380982190511', '2025-01-07 08:14:13', '2025-01-07 08:14:13');

-- --------------------------------------------------------

--
-- Структура таблиці `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `direction_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `positions`
--

INSERT INTO `positions` (`id`, `name`, `description`, `status`, `direction_id`, `created_at`, `updated_at`) VALUES
(1, 'Лаборант', 'Опис лаборанта', 1, 1, '2025-01-07 07:20:26', '2025-01-07 07:20:26');

-- --------------------------------------------------------

--
-- Структура таблиці `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('PCb8xLxfiT1z8zffPGiS6oklWj6H7ofOuosfGNat', NULL, '66.249.81.236', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Mobile Safari/537.36 Chrome-Lighthouse', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidDVvdHBFMUlKMktYTHI4ZWRSam5yMDYwOFA3UXdKb3dMUFRydmdaSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737038796),
('3WU484BCTWt9pLiyRaASspwgdlbO4mabeQawj3JT', NULL, '142.250.32.40', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Safari/537.36 Chrome-Lighthouse', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRzhqUTdtYUxtV21iUG96N2FlWmhqeWZISGNrendRYTQyaE85cm4yNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737038795),
('X3FJxIsHlxPEcheCaGSXXR95o5Rm497kIKWME72S', NULL, '66.249.81.230', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Safari/537.36 Chrome-Lighthouse', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidkFKeW5MMzVwSEJ2WUFmbk9SeUFRcm1CWmhhZXpZUHJST05YNThOQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737038785),
('cWQEFcehw2U6nwt40sgyTNSRAv5ULmnLGdGFt5iH', NULL, '66.249.81.230', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Mobile Safari/537.36 Chrome-Lighthouse', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2Z5OXdodFFYWUVSbktHRXpXMmgwV29ScWxvSkdrU3JWUUlsaXdWdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737038784),
('HGaSdWvfsOBqSl1wLLU4dpymjv74sU3sOZv5m7F8', NULL, '72.14.201.50', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSEFHOUJBY3gwNndFOEY5ZktoaVgwTGQ3NnNRakVGRUpibUFlcFphaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737038717),
('4E4j17GBO2J7hPyZPVjArl4wg5RpQnsZ37hQQPK1', NULL, '72.14.201.51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidVJCMUI2NWFXdHdZTnkyVE1MRXY5UXZGY1BuVFFjZk5SRDlPZGphSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737038716),
('c7aiSg2Iz5uLQp5HuwgX63cJv5GNNVYKOF0n4Gr8', NULL, '72.14.201.51', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVWpHRkpGbFRjWk11ZWJtNDJhaDdCNk1ZSmRZVUpwbEluZ2RCakZOayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737038707),
('h6ZvnxkU86IadE9CAXxMDhVk9tvObDGQkhWcSpvu', NULL, '193.186.4.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSVJJZGNrc09iN2NYcmk1Y3htbzdEUUdaeExGdTU4REtMSnpKUFMwMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1736941029),
('uuRBlKD1sxEMMaqt9KYUDIvgqU7qq895NEg6R88x', NULL, '5.133.192.108', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZHUyMTIxcExZU0pZZmI0N2RSa2ZMSlhXMTRuUkczZmZqU2VWRnpKNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1736946223),
('RIl5wrtQBK9i3v0mDdOEbKl6GNaR9av43NhYMFE3', NULL, '146.0.81.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZG8zOXR2cVVDRzRkWXBST01aWUdTbDlCMDJPYUdPTlNER2dQd1FYNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHBzOi8vbGltYXJpYS5jb20udWEvY29udGFjdHM/X3VybD0lMkZjb250YWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1736952224),
('Qvm8NITzoyXU1l8t86JeYZx3uEJv25tHklKAx5Pf', NULL, '193.111.61.142', 'curl/7.29.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQWFtakZsbmY5NHN3RFRLMk1DU3VXNHNDRFI2bFIyUk93Yml2eFNTZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1736952695),
('lBD9zddPh15QnTiEvGA9Ormay35DbX3l2NS9XbUR', NULL, '44.244.8.59', 'Mozilla/5.0 (compatible; wpbot/1.2; +https://forms.gle/ajBaxygz9jSR8p8G9)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibjRwemJYVXRuM1ZzdVhpVzRoMmtxY3RJcjh5dEI0WmpuTVRKU1Y4cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1736953373),
('ZCq6ilQw2oKFNSb6N45iwMELvvKVWeYOBQqv3PJ7', NULL, '176.39.36.97', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_1_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/22B91 [FBAN/FBIOS;FBAV/495.1.0.27.296;FBBV/683141668;FBDV/iPhone16,1;FBMD/iPhone;FBSN/iOS;FBSV/18.1.1;FBSS/3;FBID/phone;FBLC/uk_UA;FBOP/5;FBRV/684591905;IABMV/1]', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSmF3eWhlVllVQWltamE4ejJBSWhSdUNNb0NWbms2Nm82MUw5cTF4ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1736960757),
('RPoRKV3g7XF6NZPpnegeR7GS9Dh86zTyU2zV9ieY', NULL, '172.225.38.192', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_2_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.2 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWmhzYzZXNFBjZDdOMXVsbTVEc0RCNW0zYzJzMk9POHF1VFBJd1RuQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1736974849),
('Hm9yVeehwbxuimUab5yo4kfUi3MUfIqHsZOLlNoU', NULL, '176.53.216.22', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaURDblo4cjJ3ZWZBa2pvcFZxRW94eTBTTjFsTnZ1M0dFZUVsb2xTSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9saW1hcmlhLmNvbS51YSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1736996101),
('wUtyMpEQrs9XQtY6u0zGnJiPQNILd0iidNJImg4L', NULL, '104.152.52.67', 'curl/7.61.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkVXalZVTTRuTkZuSnZKa0k2N0UxaEhSSUhDS1pNMjBOSHBIcHJGciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737017860),
('SUZeCdxjdb78S1aWFgFt1XOTB6DT67a6PwxvJ5tQ', NULL, '146.19.186.47', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3NsaWJMYjdINFhoVndVVFB3RkU2VE5FaU1kdGNublVwVFdLbndpWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737023219),
('2X2tILpSfD7yts3MmRYfWN4GB0irsZOUo8iGkh2P', NULL, '146.0.81.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoia3M0YlFwclpiTlAxOHY2bG5xWkFSWTZlSzRJa3NTNHF3VlZDSUl3SiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737025516),
('PBHtx8xZXMaPvOQ10WhWjz9uBxNB2VopoPWpHtle', NULL, '72.14.201.49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiRlNocDVBbUN2SVNkR2JWbm5wZVpCc1g2eEhlQkwwRUlyY3pRdHpkMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737025534),
('4CBWgI8QPrpjbD6emI5zyEaxi42xkupem9R2VJUW', NULL, '54.190.114.41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWs4VDR4RHZSUmtZbDBUSXRWYjJVOGpyOVlhRXN6SnNoTWU2UlFxayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9saW1hcmlhLmNvbS51YSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737030807),
('fqSsKV9jIw2KakwHmAKtBCMRKxjWR12akZBW6rPg', NULL, '54.190.114.41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnBIRWZSOFJlQXpGVmhRSmVDZkw1Tk1qdEFPY3BIN3JmenFrZzRpMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737030810),
('TrGd7qbrDDDG3kuMtQMSgEkDYkCzfdlTwjDCjovs', NULL, '178.150.39.3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:134.0) Gecko/20100101 Firefox/134.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieDJTd2xkWFplcjFOR3ZNVnRVMU82bXo4dDhLV2hYR01ZNEFpMTVyRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737035374),
('Bba34EjpxlSWAy0XrDIu9xuC4H3Kmfn7GBlGquFx', NULL, '66.249.81.231', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Mobile Safari/537.36 Chrome-Lighthouse', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN29ZaW5iVHlqeXZ4UndZeFdvNHZrelZwRHVTRUtwbGx6ckEyZUlTNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737030850),
('GeJFw8UfWdoegYhlrMHrIdZQ8RPLie3jEmI5ulxr', NULL, '66.249.81.231', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Safari/537.36 Chrome-Lighthouse', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ1paMzFBcVAwa2tvajIzUk5RRm9XMVBBUTJCcGlsWlZHTGswNTFaYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737030851),
('fHhF75SnkB0a1jUSplNroSgJjGqpktD91yaq3dcT', NULL, '146.19.186.47', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieHc4a01ZTmtXdkVxZmFJbDZKSkV4WFFyRzNRVjhIWk1QOUhQQ2hLSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1736937394),
('B5eukxpTTD35FQtrbmRlq4bxUmI9o3f2Zg1WLf79', NULL, '146.0.81.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSlc2OU1HQldwQXhvZ0FLZXF5N2hyZWtMZ0I5OTV3eExHR29KQ2E2aCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1736938496),
('lcbd7vHz9RsRuwYuDZGGTl6Tdum6QCEsGAGcx6Qt', NULL, '146.0.81.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3plRWx6aXFOZU43cWE2NDdqd0Q5WnlyWDRSWHF1SmF1SzJSdDViaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHBzOi8vbGltYXJpYS5jb20udWEvdmV0ZXJpbmFyeS1wcmljZT9fdXJsPSUyRnZldGVyaW5hcnktcHJpY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1736940080),
('22C0ngurX4UeiAdLpQxHE8OSAoaumwAyCmVt4h6A', NULL, '62.64.127.66', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWVHYjMyWEJna3RrTzJ0YzdKZFlzQnpZMW5iOXhNNGprVm9qcHBaQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO319', 1736941030),
('1ki5uifv27khmdbSs9JOZD3wBndUTJp49TUUusDf', NULL, '72.14.201.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoib0hUOHpYbXNtUVprRjVxYjFBMjhDdEgxUkEwQk43SHFVR3ptenFqRyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1737038706),
('P2ofzZVyjTK8IGK5YVOALwweV6LOfe1x9Wg6rhVU', NULL, '66.102.9.3', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Mobile Safari/537.36 Chrome-Lighthouse', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidXhkcmJWZnVGZHg3ZlFlSDlmY0pScWhrelZRUkdBZkdJNnJ4ZFRQTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737031057),
('JY5s2wP2r3Kr6gLhs8zojPJGsZp6t1GRqJm3BQIV', NULL, '142.250.32.40', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Safari/537.36 Chrome-Lighthouse', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjFMUmI3cUpWWUZaRGdiV00zTE15YnRLeVVEMTNod1VJWE1TWldhNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737030859),
('PZWlAa7TZKVB1SyqH4cnnkXOfglgeO2hMabSZ9qS', NULL, '142.250.32.39', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Mobile Safari/537.36 Chrome-Lighthouse', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYkFhS0xDMmRIa01RYnBGTE1JM2R6bmRkSUQ2bHJmSDZ2MEt1MkVjUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737030861),
('NeLoPS6kaQwGfR2ZjdnxMAt0NyZYyJJwn0NtCGuK', NULL, '146.0.81.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlVsSm52NmJnMkd4YjdhVFhOM1NvWDFyaTlXallSdjAyVm9jbXJKTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO319', 1737038777),
('bWKwsZirlnREYXjRYOzBSdyFOiOmQDa698NaNnHR', NULL, '66.249.81.231', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Mobile Safari/537.36 Chrome-Lighthouse', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3JhWlo0NDJScHBEZW1qWG1RU2toenIxWnVvMHI1S05WMkJTaHFTMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737031046),
('rHY5qpK1IMEttVItnov1xGZkABBc4F8TjVwFzoNQ', NULL, '66.249.81.232', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Safari/537.36 Chrome-Lighthouse', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieU03RjRiWncxYkFPdUFTYjlTSDJId0VGOUNNZkV3UGdnSVF0UlBOSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737031047),
('OJg8NAzd7IevPDAq5BgOtymJnorXjh0S95VKCb6x', NULL, '142.250.32.40', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4590.2 Safari/537.36 Chrome-Lighthouse', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWm9VUnFVVEYyRXpEc1k3TFFTZ29kN2lxdndRSXFPTmdNUVhFclhrUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1737031057),
('Cok1UqNxeGWsIRPDjZfpYDiQ93pHI9YNh3UaTsHE', NULL, '146.0.81.2', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaTlCOW5RQnkzMHZja2xxVEM2M1hjV3dKaWNkMU5UdlpxS0ptRW0yeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTQ2OiJodHRwczovL2xpbWFyaWEuY29tLnVhLz9mYmNsaWQ9UEFZMnhqYXdJTmp3cGxlSFJ1QTJGbGJRSXhNUUFCcGxOQk9oSzVVRE9sUko1U2xGampkeFQ0Z3g3NXNlSndpV0JjZ3BNaEpXOVY5MGQxdFh5S0FYUzlhZ19hZW1fRlVVaml1eDY2TEwzUkVhY09yeEt1dyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1738583997),
('Tljm6mD2gcE7uwycyiXIqCK1ewAUlwhrfQCS4ewl', NULL, '146.0.81.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYnIxWVlia2QyT25aZ05pQU9BbVhuaTFiYzJKY2pkS0FpVFJxYkJoTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1738584013),
('Bcnr4g6oJe1n3CbH1xcmTFhJkyD8Mxz2fc6rY3pJ', NULL, '146.0.81.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicjU0WHlKU09HUEFoeFc5RXE2ems0cFpYdjZBT3NNaHFWek1CMnNrcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1738584025),
('BKd1jtJ88LWXSYlO39cm0JEyFcJo2TJUviPNGKRj', NULL, '146.0.81.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXZmazFQSlRoVlJxVXNVN1FnWUpyS2MyS3NTWGJ3TmhKWXMwMkdETyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1738584092),
('Xtn1JnfIv6pjBh88Q18uWhxOkXsHbAoDctnXTI0S', NULL, '146.0.81.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieGxSTVlqTVFtWjM5N1pTTjRqUVAzdUFwdWxDdDRJVzY2QlB0dEd0NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHBzOi8vbGltYXJpYS5jb20udWEvY29udGFjdHM/X3VybD0lMkZjb250YWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1738584141),
('sovlhJE3QbDhuqVtfAPOmGy3zrThneQrxDokvyV3', NULL, '45.83.195.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXZGcWZOc1ZPVFJaUThNUUphc2hWU2FFMzF3b0ZScE5YQlN5c3p4aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vbGltYXJpYS5jb20udWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1738584322);

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Dima', 'dimalisovoy@limaria.com.ua', NULL, '$2y$12$bRRr3iE6l.qA6rJ57FZx3uaoxhf3mzNSX/IBq2w5.KoHFsVzdhKBu', NULL, '2025-01-07 07:06:02', '2025-01-07 07:06:02');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Індекси таблиці `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Індекси таблиці `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_position_id_foreign` (`position_id`);

--
-- Індекси таблиці `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Індекси таблиці `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Індекси таблиці `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phones_phone_unique` (`phone`),
  ADD KEY `phones_employee_id_foreign` (`employee_id`);

--
-- Індекси таблиці `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `positions_direction_id_foreign` (`direction_id`);

--
-- Індекси таблиці `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `directions`
--
ALTER TABLE `directions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблиці `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `phones`
--
ALTER TABLE `phones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
