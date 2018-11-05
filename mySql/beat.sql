-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2018 at 03:43 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beat`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `body`, `attachment`, `media`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'same.', 'https://media0.giphy.com/media/lTw48Su92MnzG/giphy.gif', 1, '2018-09-28 08:04:11', '2018-09-28 08:04:11'),
(3, 4, 3, 'GET A JOB!', NULL, 0, '2018-09-28 08:22:35', '2018-09-28 08:22:35'),
(4, 4, 3, 'lol jk what\'s up?', NULL, 0, '2018-09-28 08:25:38', '2018-09-28 08:25:38'),
(5, 4, 2, 'Woah dude you should workout !', 'https://media3.giphy.com/media/jc1Fu8DXTV184/giphy.gif', 1, '2018-09-28 08:26:43', '2018-09-28 08:26:43'),
(6, 5, 4, 'Cement', NULL, 0, '2018-09-28 08:30:53', '2018-09-28 08:30:53'),
(8, 5, 3, NULL, 'https://media2.giphy.com/media/xUOwGlZwaxzgNbYH8Q/giphy.gif', 1, '2018-09-28 08:35:07', '2018-09-28 08:35:07'),
(9, 5, 2, 'Me', 'https://media0.giphy.com/media/3BRDkVjKikYW4/giphy.gif', 1, '2018-09-28 08:36:09', '2018-09-28 08:36:09'),
(10, 6, 3, 'i feel you...', 'https://media1.giphy.com/media/6bWNHVAoj7tNS/giphy.gif', 1, '2018-09-28 08:38:05', '2018-09-28 08:38:05'),
(11, 7, 5, 'Then why\'d we get a divorce?', NULL, 0, '2018-09-28 08:43:34', '2018-09-28 08:43:34'),
(12, 6, 5, 'Because you got my sister pregnant? Dumbass.', NULL, 0, '2018-09-28 08:44:57', '2018-09-28 08:44:57'),
(13, 8, 5, NULL, 'https://media0.giphy.com/media/r1HGFou3mUwMw/giphy.gif', 1, '2018-09-28 08:51:05', '2018-09-28 08:51:05'),
(14, 9, 7, NULL, 'https://media3.giphy.com/media/QgixZj4y3TwnS/giphy.gif', 1, '2018-09-28 08:57:48', '2018-09-28 08:57:48'),
(15, 9, 5, 'You deserve better sister!!', NULL, 0, '2018-09-28 08:58:24', '2018-09-28 08:58:24'),
(16, 9, 2, 'right now', 'https://media1.giphy.com/media/2Y8Iq3xe121Ba3hUAM/giphy.gif', 1, '2018-09-28 08:59:33', '2018-09-28 08:59:33'),
(17, 10, 2, NULL, 'https://media2.giphy.com/media/l2Jhye6dLP141dprG/giphy.gif', 1, '2018-09-28 09:03:39', '2018-09-28 09:03:39'),
(18, 11, 9, 'My place??', 'https://media2.giphy.com/media/3o6gE4rZPKadpLT9ew/giphy.gif', 1, '2018-09-28 09:05:53', '2018-09-28 09:05:53'),
(19, 11, 8, 'CUTE !', NULL, 0, '2018-09-28 09:06:07', '2018-09-28 09:06:07'),
(20, 11, 5, NULL, 'https://media2.giphy.com/media/12Nv3nBSCAbLO0/giphy.gif', 1, '2018-09-28 09:06:45', '2018-09-28 09:06:45'),
(21, 1, 7, 'shitty', NULL, 0, '2018-09-28 09:12:12', '2018-09-28 09:12:12'),
(22, 1, 5, NULL, 'https://media2.giphy.com/media/t9ctG5MZhyyU8/giphy.gif', 1, '2018-09-28 09:13:40', '2018-09-28 09:13:40'),
(23, 14, 10, 'What the fuck is a holler coast some ride at fucking Disney land', NULL, 0, '2018-09-28 09:19:09', '2018-09-28 09:19:09'),
(24, 1, 10, NULL, 'https://media0.giphy.com/media/NE9s6oJEOmFvG/giphy.gif', 1, '2018-09-28 09:19:43', '2018-09-28 09:19:43'),
(25, 15, 10, 'Im dead', 'https://media1.giphy.com/media/DqU4wVBxXOhNu/giphy.gif', 1, '2018-09-28 09:22:08', '2018-09-28 09:22:08'),
(26, 15, 5, 'thats fuck', NULL, 0, '2018-09-28 09:22:39', '2018-09-28 09:22:39'),
(27, 16, 10, 'Bruh...', 'https://media0.giphy.com/media/3o7TKLuUJnTZ7qn34Q/giphy.gif', 1, '2018-09-28 09:24:50', '2018-09-28 09:24:50'),
(28, 16, 5, NULL, 'https://media3.giphy.com/media/fiq9qEHyKuWvIrNJ5y/giphy.gif', 1, '2018-09-28 09:25:17', '2018-09-28 09:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

DROP TABLE IF EXISTS `followers`;
CREATE TABLE IF NOT EXISTS `followers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `follower_id` int(11) DEFAULT NULL,
  `followed` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follower_id`, `followed`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '2018-09-28 08:09:14', '2018-09-28 08:09:14'),
(2, 3, 1, 1, '2018-09-28 08:20:08', '2018-09-28 08:20:08'),
(3, 3, 2, 1, '2018-09-28 08:20:12', '2018-09-28 08:20:12'),
(4, 4, 3, 1, '2018-09-28 08:25:51', '2018-09-28 08:25:51'),
(5, 4, 1, 1, '2018-09-28 08:25:54', '2018-09-28 08:25:54'),
(6, 4, 2, 1, '2018-09-28 08:25:58', '2018-09-28 08:25:58'),
(7, 5, 1, 1, '2018-09-28 08:36:26', '2018-09-28 08:36:26'),
(8, 5, 2, 1, '2018-09-28 08:36:29', '2018-09-28 08:36:29'),
(9, 5, 4, 1, '2018-09-28 08:36:33', '2018-09-28 08:36:33'),
(10, 5, 3, 1, '2018-09-28 08:36:38', '2018-09-28 08:36:38'),
(11, 8, 1, 1, '2018-09-28 08:55:24', '2018-09-28 08:55:24'),
(12, 8, 5, 1, '2018-09-28 08:55:28', '2018-09-28 08:55:28'),
(13, 8, 2, 1, '2018-09-28 08:55:32', '2018-09-28 08:55:32'),
(14, 8, 4, 1, '2018-09-28 08:55:35', '2018-09-28 08:55:35'),
(15, 8, 3, 1, '2018-09-28 08:55:40', '2018-09-28 08:55:40'),
(16, 9, 1, 1, '2018-09-28 08:56:25', '2018-09-28 08:56:25'),
(17, 9, 3, 1, '2018-09-28 08:56:28', '2018-09-28 08:56:28'),
(18, 9, 5, 1, '2018-09-28 08:56:31', '2018-09-28 08:56:31'),
(19, 9, 4, 1, '2018-09-28 08:56:34', '2018-09-28 08:56:34'),
(20, 9, 8, 1, '2018-09-28 08:56:42', '2018-09-28 08:56:42'),
(21, 10, 1, 1, '2018-09-28 09:02:22', '2018-09-28 09:02:22'),
(22, 10, 3, 1, '2018-09-28 09:02:25', '2018-09-28 09:02:25'),
(23, 10, 5, 1, '2018-09-28 09:02:28', '2018-09-28 09:02:28'),
(24, 10, 9, 1, '2018-09-28 09:02:31', '2018-09-28 09:02:31'),
(25, 10, 4, 1, '2018-09-28 09:02:35', '2018-09-28 09:02:35'),
(26, 11, 1, 1, '2018-09-28 09:07:02', '2018-09-28 09:07:02'),
(27, 11, 8, 1, '2018-09-28 09:07:07', '2018-09-28 09:07:07'),
(28, 11, 5, 1, '2018-09-28 09:07:11', '2018-09-28 09:07:11'),
(29, 11, 4, 1, '2018-09-28 09:07:17', '2018-09-28 09:07:17'),
(30, 11, 3, 1, '2018-09-28 09:07:22', '2018-09-28 09:07:22'),
(31, 12, 2, 1, '2018-09-28 09:09:26', '2018-09-28 09:09:26'),
(32, 12, 1, 1, '2018-09-28 09:09:29', '2018-09-28 09:09:29'),
(33, 12, 3, 1, '2018-09-28 09:09:35', '2018-09-28 09:09:35'),
(34, 12, 10, 1, '2018-09-28 09:09:38', '2018-09-28 09:09:38'),
(35, 1, 2, 1, '2018-09-28 09:11:37', '2018-09-28 09:11:37'),
(36, 1, 4, 1, '2018-09-28 09:11:40', '2018-09-28 09:11:40'),
(37, 1, 9, 1, '2018-09-28 09:11:43', '2018-09-28 09:11:43'),
(38, 1, 8, 1, '2018-09-28 09:11:46', '2018-09-28 09:11:46'),
(39, 1, 11, 1, '2018-09-28 09:11:49', '2018-09-28 09:11:49'),
(40, 13, 1, 1, '2018-09-28 09:17:04', '2018-09-28 09:17:04'),
(41, 13, 3, 1, '2018-09-28 09:17:08', '2018-09-28 09:17:08'),
(42, 13, 4, 1, '2018-09-28 09:17:11', '2018-09-28 09:17:11'),
(43, 13, 9, 1, '2018-09-28 09:17:16', '2018-09-28 09:17:16'),
(44, 13, 8, 1, '2018-09-28 09:17:20', '2018-09-28 09:17:20'),
(45, 15, 1, 1, '2018-09-28 09:21:02', '2018-09-28 09:21:02'),
(46, 15, 5, 1, '2018-09-28 09:21:06', '2018-09-28 09:21:06'),
(47, 15, 9, 1, '2018-09-28 09:21:08', '2018-09-28 09:21:08'),
(48, 15, 13, 1, '2018-09-28 09:21:11', '2018-09-28 09:21:11'),
(49, 15, 3, 1, '2018-09-28 09:21:15', '2018-09-28 09:21:15'),
(50, 16, 1, 1, '2018-09-28 09:28:06', '2018-09-28 09:28:06'),
(51, 16, 8, 1, '2018-09-28 09:28:10', '2018-09-28 09:28:10'),
(52, 16, 11, 1, '2018-09-28 09:28:13', '2018-09-28 09:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `like` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `like`, `created_at`, `updated_at`, `comment_id`) VALUES
(12, 2, 2, 1, '2018-09-28 08:00:30', '2018-09-28 08:00:30', NULL),
(14, 3, 2, 1, '2018-09-28 08:14:32', '2018-09-28 08:14:32', NULL),
(18, 3, NULL, 1, '2018-09-28 08:18:55', '2018-09-28 08:18:55', 2),
(19, 5, 3, 1, '2018-09-28 08:30:35', '2018-09-28 08:30:35', NULL),
(20, 5, NULL, 1, '2018-09-28 08:35:15', '2018-09-28 08:35:15', 3),
(21, 5, NULL, 1, '2018-09-28 08:35:15', '2018-09-28 08:35:15', 3),
(22, 6, NULL, 1, '2018-09-28 08:37:24', '2018-09-28 08:37:24', 3),
(23, 6, NULL, 1, '2018-09-28 08:37:30', '2018-09-28 08:37:30', 3),
(24, 7, 5, 1, '2018-09-28 08:43:23', '2018-09-28 08:43:23', NULL),
(25, 9, 7, 1, '2018-09-28 08:57:33', '2018-09-28 08:57:33', NULL),
(26, 9, NULL, 1, '2018-09-28 08:58:29', '2018-09-28 08:58:29', 5),
(27, 9, NULL, 1, '2018-09-28 08:58:30', '2018-09-28 08:58:30', 5),
(28, 9, NULL, 1, '2018-09-28 08:58:31', '2018-09-28 08:58:31', 5),
(29, 9, 2, 1, '2018-09-28 08:58:49', '2018-09-28 08:58:49', NULL),
(30, 9, 3, 1, '2018-09-28 08:58:50', '2018-09-28 08:58:50', NULL),
(31, 9, NULL, 1, '2018-09-28 08:58:57', '2018-09-28 08:58:57', 2),
(32, 10, 8, 1, '2018-09-28 09:00:58', '2018-09-28 09:00:58', NULL),
(33, 10, 7, 1, '2018-09-28 09:01:00', '2018-09-28 09:01:00', NULL),
(34, 10, 5, 1, '2018-09-28 09:01:00', '2018-09-28 09:01:00', NULL),
(35, 10, NULL, 1, '2018-09-28 09:03:19', '2018-09-28 09:03:19', 2),
(36, 10, NULL, 1, '2018-09-28 09:03:21', '2018-09-28 09:03:21', 2),
(37, 11, 9, 1, '2018-09-28 09:05:29', '2018-09-28 09:05:29', NULL),
(38, 11, 8, 1, '2018-09-28 09:06:01', '2018-09-28 09:06:01', NULL),
(39, 11, NULL, 1, '2018-09-28 09:06:16', '2018-09-28 09:06:16', 5),
(40, 12, 9, 1, '2018-09-28 09:09:42', '2018-09-28 09:09:42', NULL),
(67, 15, 2, 1, '2018-09-28 09:22:56', '2018-09-28 09:22:56', NULL),
(66, 15, 3, 1, '2018-09-28 09:22:52', '2018-09-28 09:22:52', NULL),
(65, 15, 8, 1, '2018-09-28 09:22:50', '2018-09-28 09:22:50', NULL),
(64, 15, 11, 1, '2018-09-28 09:21:48', '2018-09-28 09:21:48', NULL),
(63, 1, 10, 1, '2018-09-28 09:19:47', '2018-09-28 09:19:47', NULL),
(62, 1, NULL, 1, '2018-09-28 09:19:29', '2018-09-28 09:19:29', 10),
(61, 13, 2, 1, '2018-09-28 09:15:46', '2018-09-28 09:15:46', NULL),
(60, 13, 8, 1, '2018-09-28 09:15:43', '2018-09-28 09:15:43', NULL),
(59, 13, 7, 1, '2018-09-28 09:15:42', '2018-09-28 09:15:42', NULL),
(57, 1, 2, 1, '2018-09-28 09:14:30', '2018-09-28 09:14:30', NULL),
(56, 1, 3, 1, '2018-09-28 09:14:28', '2018-09-28 09:14:28', NULL),
(55, 1, 7, 1, '2018-09-28 09:14:26', '2018-09-28 09:14:26', NULL),
(54, 1, NULL, 1, '2018-09-28 09:13:04', '2018-09-28 09:13:04', 2),
(69, 16, 11, 1, '2018-09-28 09:24:03', '2018-09-28 09:24:03', NULL),
(70, 16, 8, 1, '2018-09-28 09:25:01', '2018-09-28 09:25:01', NULL),
(71, 16, 5, 1, '2018-09-28 09:28:23', '2018-09-28 09:28:23', NULL),
(72, 16, 3, 1, '2018-09-28 09:28:25', '2018-09-28 09:28:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(104, '2014_10_12_000000_create_users_table', 1),
(105, '2014_10_12_100000_create_password_resets_table', 1),
(106, '2018_09_17_144951_create_posts_table', 1),
(107, '2018_09_18_144710_create_profiles_table', 1),
(108, '2018_09_18_151105_create_comments_table', 1),
(109, '2018_09_20_155908_create_followers_table', 1),
(110, '2018_09_21_012133_create_likes_table', 1),
(111, '2018_09_26_025632_add_comment_in_likes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `body`, `attachment`, `media`, `created_at`, `updated_at`) VALUES
(2, 1, 'How i\'m feeling right now.', 'https://media0.giphy.com/media/3oKIP6xabpHzlQapxe/giphy.gif', 1, '2018-09-28 07:47:00', '2018-09-28 07:47:00'),
(3, 3, 'I\'m bored.. someone talk to me', 'https://media2.giphy.com/media/RKS1pHGiUUZ2g/giphy.gif', 1, '2018-09-28 08:19:59', '2018-09-28 08:19:59'),
(4, 4, 'What should I cook today?', NULL, 0, '2018-09-28 08:21:56', '2018-09-28 08:21:56'),
(5, 6, 'Never lose heart.. Never lose hope... Never lose faith... Never give up.', NULL, 0, '2018-09-28 08:42:44', '2018-09-28 08:42:44'),
(7, 8, NULL, 'https://media2.giphy.com/media/i4gLlAUz2IVIk/giphy.gif', 1, '2018-09-28 08:53:19', '2018-09-28 08:53:19'),
(8, 9, NULL, 'https://media1.giphy.com/media/j6Uls25PT5Q4g/giphy.gif', 1, '2018-09-28 09:00:00', '2018-09-28 09:00:00'),
(9, 10, 'Anybody know a nice spot to chill?', NULL, 0, '2018-09-28 09:03:02', '2018-09-28 09:03:02'),
(10, 13, 'Our world is getting taking over by evil people.. One day they will just put us in camps like the holler coast..', NULL, 0, '2018-09-28 09:16:25', '2018-09-28 09:16:55'),
(11, 1, NULL, 'https://media2.giphy.com/media/8qzUcfexw3ysJ140T2/giphy.gif', 1, '2018-09-28 09:20:19', '2018-09-28 09:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `user_id` int(11) NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `bio` text COLLATE utf8mb4_unicode_ci,
  `birthplace` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`user_id`, `avatar`, `bio`, `birthplace`, `birthday`, `phonenumber`, `location`, `education`, `created_at`, `updated_at`) VALUES
(1, '1538099552.jpg', 'Just a young Fly Guy', 'Manila, Phillippines', '1996-10-09', '5879684749', 'Calgary, AB', 'Innotech College', '2018-09-28 07:37:27', '2018-09-28 07:52:32'),
(2, '1538100093.jpg', 'I\'m a dude.', 'Toronto,AB', '1993-12-26', '123456432', 'Calgary, AB', 'Father Scollen', '2018-09-28 08:00:01', '2018-09-28 08:01:54'),
(3, '1538100641.jpg', 'Me and my Mom\'s Spaghetti', 'Toronto,AB', '1997-08-13', '6543245576', 'Portland,WA', 'Forest Lawn', '2018-09-28 08:09:37', '2018-09-28 08:10:41'),
(4, '1538101286.jpg', 'CAN YOU SMELL!!!!!', 'Toronto,AB', '1973-03-14', '4132437628', 'Portland,WA', 'Bishop McNally', '2018-09-28 08:20:40', '2018-09-28 08:21:26'),
(5, '1538101982.jpg', 'Introvert but my belly button is an outtie', 'Toronto,AB', '1992-02-11', '4135696208', 'Honk Kong, Ireland', 'Madagascar Zoo University', '2018-09-28 08:30:30', '2018-09-28 08:33:02'),
(6, '1538102367.jpg', 'Don\'t mess with me.', 'Vancouver, OT', '1423-12-09', '5670932512', 'Portland,WA', 'Innotech College', '2018-09-28 08:37:09', '2018-09-28 08:39:27'),
(7, '1538102648.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-28 08:43:18', '2018-09-28 08:44:08'),
(8, '1538103033.jpg', 'Im da Man', 'Yo Mom\'s House', '2018-01-03', '234326567', 'Portland,WA', 'Father Scollen', '2018-09-28 08:49:08', '2018-09-28 08:50:33'),
(9, '1538103438.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-28 08:56:20', '2018-09-28 08:57:18'),
(10, '1538103735.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-28 09:00:54', '2018-09-28 09:02:15'),
(11, '1538103923.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-28 09:04:12', '2018-09-28 09:05:24'),
(12, '1538104155.png', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-28 09:08:10', '2018-09-28 09:09:15'),
(13, '1538104528.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-28 09:14:53', '2018-09-28 09:15:28'),
(14, '1538104722.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-28 09:18:23', '2018-09-28 09:18:42'),
(15, '1538104901.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-28 09:20:58', '2018-09-28 09:21:41'),
(16, '1538105037.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-28 09:23:27', '2018-09-28 09:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John J Medina', 'me@email.com', 'Male', NULL, '$2y$10$fxcQ3jIVeFIJ/nKTTn8VWeAReQ3p3WUqCNDAkX8DeC.sAjHU.qbu6', '89Md6D0y01K8RTKEHKbirLo7eGotf2pZrw1looAhuSF6h4qmfG8G17zYCZhg', '2018-09-28 07:37:27', '2018-09-28 07:37:27'),
(2, 'Jamie Lee Carter', 'jlc@email.com', 'Female', NULL, '$2y$10$2Eo9ClbqwoIAHK3DXljg1eS7z.dBrtvgL1Tx6lzN0CpxadQltH3QO', 'wHuCHBoP55u1Bm1glD4aeiFXW81jbuZ8lIqkXVzLiCrmTn08u7EWzPe8tNLt', '2018-09-28 08:00:01', '2018-09-28 08:01:54'),
(3, 'Michael Lee Jackson', 'mlj@email.com', 'Male', NULL, '$2y$10$HY8QGoV4aWuyjOnYU.X4FOmvG1s5rZ/fV7gZON8iY8MFbum1GDVZC', 'Qs9IG93mKxmJLjAtm5RXx9h3Z3QNBfJqYMa74EsXUrxtSHhj083Xog17i2oH', '2018-09-28 08:09:37', '2018-09-28 08:09:37'),
(4, 'The Rock', 'therock@email.com', 'Male', NULL, '$2y$10$YNGIrF9a4LrI7BLEymNybugNZyzC3V/05jezmkPd2gbnSU.IlTuuG', '3ovrDTsvPB51dCWirp0KLQGBGVM8rmKtW5pFhpL62pu8dUktHjdH2JlFWjiu', '2018-09-28 08:20:40', '2018-09-28 08:20:40'),
(5, 'Lovell Surtoby', 'ls@email.com', 'Female', NULL, '$2y$10$/XZObEobkxT6QpBbgU5AROwF3aqAhRs.RehABmpzj3sR.3YyovekO', 'ozQZIA3ECzs5WD8O5qIUuNr8bnOnKVBB4mBCR7wBJ1Oo1ykJTbvJGpDJ84BG', '2018-09-28 08:30:30', '2018-09-28 08:30:30'),
(6, 'Shel Machado', 'sm@email.com', 'Female', NULL, '$2y$10$Wwf2EX.mely9qLLLyc7U/udxmV6p5UWPp6QqD9ENmzBC7k70KwTHy', 'u42yKT5ziwyy5tRxTkFETlnt12xBTPpNT06k8kHyvbiLpozAEsNOdEOKbbSQ', '2018-09-28 08:37:09', '2018-09-28 08:37:09'),
(7, 'David Olie', 'do@email.com', 'Male', NULL, '$2y$10$YIge3KJoGt7SHe0lQeMEVeSqzcHxTwEGi6qllDPam5R4IoElvNelW', 'KkdRpEZmGPjizUrezKmVyQWxJz5w05KnSFoFQCma5pStfbW2Jch8rViAaaoD', '2018-09-28 08:43:18', '2018-09-28 08:43:18'),
(8, 'Vince Da Man', 'vince@email.com', 'Male', NULL, '$2y$10$B.rRhIkUy0DJrS7Wqh2kiOfM7yPGyHTBqj71MJg9PGbsCZdTQeZQ.', 'Kkd29uZrtznJdj0vNDKR0FiLnAjGYudMjWcLc7bKQYYimxfVeOY5nEvaS9oO', '2018-09-28 08:49:08', '2018-09-28 08:49:08'),
(9, 'Steffi Bell', 'sb@emial.com', 'Female', NULL, '$2y$10$W9WClFMOT73ODtMELUmx6u3SycphRymu2HLki4UrioJ/lmzIiwYFe', 'nQsPON5W4s3k48usb0K7WjWf4qGdOiMyLCL0gRYvxtoeYPg9mB2doa4pAHVk', '2018-09-28 08:56:20', '2018-09-28 08:56:20'),
(10, 'Brody Chung', 'bc@email.com', 'Male', NULL, '$2y$10$ZvjqYoGHlptwmRhRj4vNJe8g55w/oiKmlBdhfzbF73fo/k4XbuWnW', 'tfytKNH6s0doAQES5OceqcpNFaMlOcGgzXsZdDNvdhWx4EcBDs6FPPqT5fat', '2018-09-28 09:00:54', '2018-09-28 09:00:54'),
(11, 'Velma Smyth', 'vs@email.com', 'Male', NULL, '$2y$10$2qe0dHiV6OnHZlXeswVPdOiutc6DAxjmDXcKBxOpbw5BtyA9mPp4q', 'HlJ82KvQDh2uSQ9AVxriB0h8kv8dHhgAqDC0mGLBmCsibwAbqZ4aXfq95s7h', '2018-09-28 09:04:12', '2018-09-28 09:05:24'),
(12, 'Lauryn Snider', 'lss@email.com', 'Male', NULL, '$2y$10$DLyTKNpRI8nawNm31qoIIOIbJ4SH198Kbx9LzwFoQViK6lbDNSUWu', 'DaqHvpuX1mOk2TTjFjC89euCQrnzb9u5JTVCqEsGpn2oU0lon1qjrFnWPN0e', '2018-09-28 09:08:10', '2018-09-28 09:08:35'),
(13, 'Rahim Willis', 'wre@email.com', 'Male', NULL, '$2y$10$JlDU5zTkf7wIf9nrVVKtgu46UMjoxeWS58QzqT7ozvvrfsRLpIkqq', 'jAmbRkf8Ub3W0HUxSH7gtgDluGYiTwYibcFBLuXkTcNsr6shigEdBgk5lZDI', '2018-09-28 09:14:53', '2018-09-28 09:14:53'),
(14, 'Awais Kelly', 'ak@email.com', 'Male', NULL, '$2y$10$.yaAVW4JcL7kCF6.JsJYouU9QOQajio4/sKZpcKd7IJn229k1YbXa', 'Qmcb09oG7BkcwORwy15WFxVf1zoFmGE1ZtZX9DRSK3Ekbq51nEKQ0ScFhYkC', '2018-09-28 09:18:23', '2018-09-28 09:18:23'),
(15, 'Evie-Rose Velez', 'eva@email.com', 'Male', NULL, '$2y$10$IUbufZJQFuaITXJMZalGhehr9lhxzIIbfm3cY/S8ACeyMeMR.UwPG', 'sM9NJmzkPZJclVIvKlSREw91arpxbvNBHvYm1E08P1wvIHovejrvo66QgdO1', '2018-09-28 09:20:58', '2018-09-28 09:21:41'),
(16, 'Oakley Cash', 'asdw@email.com', 'Male', NULL, '$2y$10$1KAxoJvi3ymRcGGp2sBche9hrP.4JxawpSZqAfgvUC01dY659u4PK', 'onerppsxekVMHtBSSTxnvVABayi10dCBKxtsO5l1Ky8T8CYIgL4VYcBYZuvy', '2018-09-28 09:23:27', '2018-09-28 09:23:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
