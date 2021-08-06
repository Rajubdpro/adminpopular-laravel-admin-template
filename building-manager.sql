-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2021 at 05:23 PM
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
(30, 'codepopular@gmail.com', '1', '2019-01-11 01:34:19', '2020-01-26 01:17:46'),
(31, 'hello@gmail.cim', '1', '2019-11-21 14:13:01', '2020-01-21 14:13:01'),
(32, 'test@gmail.com', '1', '2019-11-26 00:34:22', '2020-01-26 00:34:22'),
(33, 'gmail@gmail.com', '1', '2020-01-26 01:06:05', '2020-01-26 01:06:05'),
(34, 'hellobfd@gmail.com', '1', '2020-01-28 04:11:08', '2020-01-28 04:11:08'),
(35, 'helloshamim@gmail.com', '1', '2020-02-21 00:12:38', '2020-10-23 00:26:10'),
(36, 'testing@gmail.com', '1', '2020-02-21 00:15:02', '2020-02-21 00:15:02'),
(37, 'softdevltd@gmail.com', '1', '2020-03-01 10:30:14', '2020-09-05 07:11:36'),
(41, 'info@codepopular.com', '1', '2021-06-06 09:24:57', '2021-06-06 09:24:57'),
(42, 'info@codefffpopular.com', '1', '2021-06-07 11:26:44', '2021-06-07 11:26:44'),
(43, 'werwer@gmail.com', '1', '2021-06-07 13:18:39', '2021-06-07 13:18:39'),
(44, 'wewrewr@gmail.com', '1', '2021-06-07 13:18:49', '2021-06-07 13:18:49'),
(45, 'erewr@gmail.com', '1', '2021-06-07 13:19:19', '2021-06-07 13:19:19'),
(46, 'fsdfdsf@gmail.com', '1', '2021-06-07 13:31:34', '2021-06-07 13:31:34');

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
(2, 'Privacy Policy', 'Privacy Policy - Webase', 'privacy-policy', '1', 'footer', '<h1>Privacy Policy for UltraLine</h1>\r\n\r\n<p>At UltraLine, accessible from www.codepopular.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by UltraLine and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in UltraLine. This policy is not applicable to any information collected offline or via channels other than this website.</p>\r\n\r\n<h2>Consent</h2>\r\n\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>\r\n\r\n<h2>Information we collect</h2>\r\n\r\n<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>\r\n<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>\r\n<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>\r\n\r\n<h2>How we use your information</h2>\r\n\r\n<p>We use the information we collect in various ways, including to:</p>\r\n\r\n<ul>\r\n<li>Provide, operate, and maintain our webste</li>\r\n<li>Improve, personalize, and expand our webste</li>\r\n<li>Understand and analyze how you use our webste</li>\r\n<li>Develop new products, services, features, and functionality</li>\r\n<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the webste, and for marketing and promotional purposes</li>\r\n<li>Send you emails</li>\r\n<li>Find and prevent fraud</li>\r\n</ul>\r\n\r\n<h2>Log Files</h2>\r\n\r\n<p>UltraLine follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services\' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users\' movement on the website, and gathering demographic information. Our Privacy Policy was created with the help of the <a href=\"https://www.privacypolicygenerator.info\">Privacy Policy Generator</a> and the <a href=\"https://www.privacypolicytemplate.net/\">Privacy Policy Template</a>.</p>\r\n\r\n<h2>Cookies and Web Beacons</h2>\r\n\r\n<p>Like any other website, UltraLine uses \'cookies\'. These cookies are used to store information including visitors\' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users\' experience by customizing our web page content based on visitors\' browser type and/or other information.</p>\r\n\r\n\r\n\r\n<h2>Advertising Partners Privacy Policies</h2>\r\n\r\n<p>You may consult this list to find the Privacy Policy for each of the advertising partners of UltraLine.</p>\r\n\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on UltraLine, which are sent directly to users\' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n\r\n<p>Note that UltraLine has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n\r\n<h2>Third Party Privacy Policies</h2>\r\n\r\n<p>UltraLine\'s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</p>\r\n\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers\' respective websites. What Are Cookies?</p>\r\n\r\n<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>\r\n\r\n<p>Under the CCPA, among other rights, California consumers have the right to:</p>\r\n<p>Request that a business that collects a consumer\'s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>\r\n<p>Request that a business delete any personal data about the consumer that a business has collected.</p>\r\n<p>Request that a business that sells a consumer\'s personal data, not sell the consumer\'s personal data.</p>\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>GDPR Data Protection Rights</h2>\r\n\r\n<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>\r\n<p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>\r\n<p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>\r\n<p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>\r\n<p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>\r\n<p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>\r\n<p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<h2>Children\'s Information</h2>\r\n\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n\r\n<p>UltraLine does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>', 'page_1622957224.png', 'Privacy Policy tags', 'Ultraline is a unique Software development company who since its very beginnings in 2016 has fulfilled a niche in the rapidly growing IT industry.', 1, '2020-01-07 03:56:23', '2021-06-05 23:27:04'),
(7, 'Home', 'Home - Ultraline', '', '1', 'header', NULL, 'page_1622957233.png', 'Text', 'Ultraline is a unique Software development company who since its very beginnings in 2016 has fulfilled a niche in the rapidly growing IT industry.', 1, '2020-01-07 06:23:20', '2021-06-05 23:27:14'),
(8, 'About Us', 'About Us - Ultraline', 'about-us', '2', 'header', '<p><br></p>', 'page_1622957050.png', 'page key', 'Ultraline  is a unique Software development company who since its very beginnings in 2016 has fulfilled a niche in the rapidly growing IT industry.', 1, '2020-01-07 06:36:32', '2021-06-05 23:24:10'),
(9, 'Services', 'Services - Ultraline', 'service', '3', 'header', NULL, 'page_1622957245.png', 'service page tag', 'Ultraline  is a unique Software development company who since its very beginnings in 2016 has fulfilled a niche in the rapidly growing IT industry.', 1, '2020-01-07 06:40:13', '2021-06-05 23:27:25'),
(10, 'Project', 'Project - Ultraline', 'project', '5', 'header', '<p>qweqweqwewqe</p>', 'page_1622957253.png', 'Project', 'Ultraline  is a unique Software development company who since its very beginnings in 2016 has fulfilled a niche in the rapidly growing IT industry.', 1, '2020-01-07 06:54:44', '2021-06-05 23:27:33'),
(11, 'Contact', 'Contact - Ultraline', 'contact', '5', 'header', NULL, 'page_1622957268.png', 'Contact', 'Ultraline  is a unique Software development company who since its very beginnings in 2016 has fulfilled a niche in the rapidly growing IT industry.', 1, '2020-01-07 06:58:18', '2021-06-05 23:27:48'),
(13, 'Quote', 'quote', 'quote', '1', 'other', NULL, 'page_1622957276.png', 'Quote', 'Ultraline  is a unique Software development company who since its very beginnings in 2016 has fulfilled a niche in the rapidly growing IT industry.', 1, '2020-01-08 00:21:02', '2021-06-05 23:27:57');

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
(1, 'favicon_1623218922.png', 'logo_1608219121.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'info@youwebsite.com', 'info@youwebsite.com', '#ff6d60', '+1-202-555-0183', '+1-202-555-0145', '383/a, katasur Mohammodpur, Dhaka, Bangladesh', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.847606771624!2d90.36009841453367!3d23.752813184588188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bfa2ff34f5c1%3A0xfb6e3ee898f83acc!2sCodePopular%20Online%20Marketplace!5e0!3m2!1sen!2sbd!4v1582439726807!5m2!1sen!2sbd', '2020 Ultraline Solutions. All Rights Reserved', 'https://www.codepouplar.com', '', '', 'https://www.codepouplar.com', 'https://www.codepouplar.com', 'https://www.codepouplar.com', 'https://www.codepouplar.com', 'https://www.codepouplar.com', 'https://www.codepouplar.com', 'https://www.codepouplar.com', 'About Us', 'https://demo.softdevltd.com/ultraline-laravel/service', 'Project', 'Services', 'https://www.codepopular.com/ultraline/service', 'https://www.codepopular.com/ultraline/service', 'Contact', 'https://www.codepopular.com/ultraline/service', 'Get Quote', 'https://www.codepopular.com/ultraline/service', 'Themeforest', 'https://www.themeforest.com', 'Mobile App Development', 'https://www.codepopular.com/ultraline/service', 'Web Development', 'https://www.codepopular.com/ultraline/service', 'UI/UX Design', 'https://www.codepopular.com/ultraline/service', 'Mobile Games', 'https://www.codepopular.com/ultraline/service', 'Software Testing And QA', 'https://www.codepopular.com/ultraline/service', NULL, '2021-06-09 00:08:42');

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
(1, 'Admin', 'admin@gmail.com', '+8801780038688', 'user_1583687475.jpg', '1', NULL, '$2y$10$kbggEIdE9E2wQWMvQAQuk.2KZ6sX3y1WJWrBKfnnoPoODeh74nAKC', 'TyTf1Lx7nHcsHUvW7sds5K5zgpbvJVFqY3NIafFcPnKLJ5syDmlyXyQgppML', '2019-12-30 03:11:15', '2020-03-26 19:39:39'),
(19, 'user', 'user@gmail.com', '', NULL, '2', NULL, '$2y$10$0MKPyjcyh/GRu5ciol4o1OfZFI.iQXQLhOhU7JYhyxupsLrw4x8fi', NULL, '2021-06-06 09:30:00', '2021-06-06 09:30:00'),
(20, 'test2', 'test@gmail.com', '', NULL, '5', NULL, '$2y$10$ixQlY6/CwhF7WyxfcsAzLO3j8av8kkcsOrRyF.PwM4tPrZmJesRli', NULL, '2021-06-06 13:17:41', '2021-06-06 13:18:33');

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
(1, 'Admin', 1, 'Dashboard,User,Slider,Service,Portfolio,Team,Client,Testimonial,Page,Newsletter,Settings,Working Progress', '2019-12-31 04:47:55', '2021-06-06 13:07:16'),
(2, 'User', 1, 'Portfolio,Testimonial,Settings', '2019-12-31 04:48:05', '2021-06-06 13:10:49');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
