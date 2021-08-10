-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2021 at 10:40 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `building-manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_31_071353_create_user_roles_table', 2),
(25, '2020_01_07_061052_create_pages_table', 9),
(26, '2020_01_08_062856_create_newsleters_table', 10),
(27, '2020_01_09_060715_create_settings_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `newsleters`
--

CREATE TABLE `newsleters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsleters`
--

INSERT INTO `newsleters` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(47, 'admin@gmail.com', '1', '2021-08-09 02:40:54', '2021-08-09 02:50:59'),
(48, 'shamimbdpro@gmail.com', '1', '2020-12-01 02:41:00', '2021-08-09 05:09:11'),
(49, 'bulkshop@gmail.com', '1', '2021-08-09 02:41:41', '2021-08-09 05:41:53'),
(50, 'codepopular@gmail.com', '1', '2021-08-09 05:42:02', '2021-08-09 05:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sirial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_display` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` longtext COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` longtext COLLATE utf8mb4_unicode_ci,
  `meta_des` longtext COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `title`, `slug`, `sirial`, `page_display`, `contents`, `photo`, `meta_tag`, `meta_des`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Terms and Conditions', 'Terms and Conditions - Ultraline', 'terms-and-conditions', '2', 'footer', 'Terms and Conditions for ultraline\r\n\r\nIntroduction<p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, ultraline accessible at https://www.codepopular.com.</p>\r\n\r\n<p>These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions. These Terms and Conditions have been generated with the help of the <a href=\"https://www.termsandcondiitionssample.com\">Terms And Conditions Template</a> and the <a href=\"https://www.terms-conditions-generator.com\">Terms and Conditions Generator</a>.</p>\r\n\r\n<p>Minors or people below 18 years old are not allowed to use this Website.</p>\r\n\r\nIntellectual Property Rights\r\n\r\n<p>Other than the content you own, under these Terms, ultraline and/or its licensors own all the intellectual property rights and materials contained in this Website.</p>\r\n\r\n<p>You are granted limited license only for purposes of viewing the material contained on this Website.</p>\r\n\r\nRestrictions\r\n\r\n<p>You are specifically restricted from all of the following:</p>\r\n\r\n<ul><li>publishing any Website material in any other media;</li>\r\n    <li>selling, sublicensing and/or otherwise commercializing any Website material;</li>\r\n    <li>publicly performing and/or showing any Website material;</li>\r\n    <li>using this Website in any way that is or may be damaging to this Website;</li>\r\n    <li>using this Website in any way that impacts user access to this Website;</li>\r\n    <li>using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>\r\n    <li>engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li>\r\n    <li>using this Website to engage in any advertising or marketing.</li>\r\n</ul><p>Certain areas of this Website are restricted from being access by you and ultraline may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</p>\r\n\r\nYour Content\r\n\r\n<p>In these Website Standard Terms and Conditions, \"Your Content\" shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant ultraline a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</p>\r\n\r\n<p>Your Content must be your own and must not be invading any third-party’s rights. ultraline reserves the right to remove any of Your Content from this Website at any time without notice.</p>\r\n\r\nYour Privacy\r\n\r\n<p>Please read Privacy Policy.</p>\r\n\r\nNo warranties\r\n\r\n<p>This Website is provided \"as is,\" with all faults, and ultraline express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</p>\r\n\r\nLimitation of liability\r\n\r\n<p>In no event shall ultraline, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract.  ultraline, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</p>\r\n\r\nIndemnification\r\n\r\n<p>You hereby indemnify to the fullest extent ultraline from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</p>\r\n\r\nSeverability\r\n\r\n<p>If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p>\r\n\r\nVariation of Terms\r\n\r\n<p>ultraline is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</p>\r\n\r\nAssignment\r\n\r\n<p>The ultraline is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p>\r\n\r\nEntire Agreement\r\n    \r\n<p>These Terms constitute the entire agreement between ultraline and you in relation to your use of this Website, and supersede all prior agreements and understandings.</p>\r\n\r\nGoverning Law &amp; Jurisdiction\r\n\r\n<p>These Terms will be governed by and interpreted in accordance with the laws of the State of bd, and you submit to the non-exclusive jurisdiction of the state and federal courts located in bd for the resolution of any disputes.</p>', 'page_1622957213.png', 'Terms and Conditions', 'Ultraline  is a unique Software development company who since its very beginnings in 2016 has fulfilled a niche in the rapidly growing IT industry.', 1, '2020-01-07 03:55:26', '2021-06-05 23:26:53'),
(14, 'rwere', 'werwerewr', 'werewr', '2', 'footer', NULL, NULL, 'wefewr', 'werewr', 1, '2021-08-09 04:22:27', '2021-08-09 04:22:27');

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` longtext COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci,
  `google_map` longtext COLLATE utf8mb4_unicode_ci,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` longtext COLLATE utf8mb4_unicode_ci,
  `live_chat` longtext COLLATE utf8mb4_unicode_ci,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dribble` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `four_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `four_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `five_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `five_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `six_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `six_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_link1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_link2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_link3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_link4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_title5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_link5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `favicon`, `logo`, `about_us`, `email`, `email2`, `primary_color`, `phone`, `phone2`, `address`, `google_map`, `copyright`, `facebook`, `google_analytics`, `live_chat`, `twitter`, `linkedin`, `google`, `youtube`, `pinterest`, `dribble`, `instagram`, `first_title`, `first_link`, `second_title`, `third_title`, `third_link`, `second_link`, `four_title`, `four_link`, `five_title`, `five_link`, `six_title`, `six_link`, `service_title1`, `service_link1`, `service_title2`, `service_link2`, `service_title3`, `service_link3`, `service_title4`, `service_link4`, `service_title5`, `service_link5`, `created_at`, `updated_at`) VALUES
(1, 'favicon_1628498630.png', 'logo_1628498636.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'info@youwebsite.com444', 'info@youwebsite.com', '#ff6d60', '+1-202-555-0183', '+1-202-555-0145', '383/a, katasur Mohammodpur, Dhaka, Bangladesh', 'Google map there', 'Copyright Message', 'https://www.codepouplar.com', 'wwef', 'werewr', 'https://www.codepouplar.com', 'https://www.codepouplar.com', 'https://www.codepouplar.com', 'https://www.codepouplar.com', 'https://www.codepouplar.com', 'https://www.codepouplar.com', 'https://www.codepouplar.com', 'About Us', 'https://demo.softdevltd.com/ultraline-laravel/service', 'Project', 'Services', 'https://www.codepopular.com/ultraline/service', 'https://www.codepopular.com/ultraline/service', 'Contact', 'https://www.codepopular.com/ultraline/service', 'Get Quote', 'https://www.codepopular.com/ultraline/service', 'Themeforest', 'https://www.themeforest.com', 'Mobile App Development', 'https://www.codepopular.com/ultraline/service', 'Web Development', 'https://www.codepopular.com/ultraline/service', 'UI/UX Design', 'https://www.codepopular.com/ultraline/service', 'Mobile Games', 'https://www.codepopular.com/ultraline/service', 'Software Testing And QA', 'https://www.codepopular.com/ultraline/service', NULL, '2021-08-10 04:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `photo`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '+8801780038688', 'user_1628498524.jpg', '1', NULL, '$2y$10$1gmZEmAm3J/rN1PeE0kpxu0uYuCEYjtsTdzuNzhHTTVK7AjrBs0Im', 'CuSbz9lOG8OxR4sVexbwqBTP1ag6CsgEXmS8Pc5dpum7Yv7CKgyjEbRx5VB1', '2019-12-30 03:11:15', '2021-08-09 02:42:05'),
(2, 'user', 'user@gmail.com', '01794939992', NULL, '2', NULL, '$2y$10$OU7GQSewXAfL7gNZRjSOv.Mx5dIpiuhsAM.Cg.zbj/Ir4zgzFJvIa', NULL, '2021-08-09 12:43:36', '2021-08-09 12:43:36'),
(28, 'user2', 'user2@gmail.com', '01794939992', NULL, '5', NULL, '$2y$10$U3ILNb7MdlzDQjGmcP.LqePY9xXUPe8NzyGMmQPXO1fjfKFxo6Wju', NULL, '2021-08-09 12:45:58', '2021-08-10 04:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_status` int(11) NOT NULL DEFAULT '1',
  `show_option` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_name`, `role_status`, `show_option`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, 'dashboard,customer-portal,user,page,newsletter,settings', '2019-12-31 04:47:55', '2021-08-09 09:15:47'),
(2, 'User', 1, 'customer-portal,user,page,newsletter,settings', '2019-12-31 04:48:05', '2021-08-10 04:02:56'),
(5, 'customrole', 1, 'dashboard,customer-portal,user,page,newsletter', '2021-08-09 12:16:22', '2021-08-10 04:26:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsleters`
--
ALTER TABLE `newsleters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsleters`
--
ALTER TABLE `newsleters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
