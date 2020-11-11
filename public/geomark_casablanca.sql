-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2020 at 11:38 AM
-- Server version: 10.3.23-MariaDB-1:10.3.23+maria~bionic-log
-- PHP Version: 7.2.31-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geomark_casablanca`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonces`
--

CREATE TABLE `annonces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appart_type_un` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface_habitable` double DEFAULT NULL,
  `appart_etage_niveau` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appart_etage_nombre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuisine_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuisine_equipe` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_chambre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dressing` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_salle_bain` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_salon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terrasse` tinyint(1) NOT NULL DEFAULT 0,
  `jardin_privatif` tinyint(1) NOT NULL DEFAULT 0,
  `cour` tinyint(1) NOT NULL DEFAULT 0,
  `buanderie` tinyint(1) NOT NULL DEFAULT 0,
  `cheminee` tinyint(1) NOT NULL DEFAULT 0,
  `climatisation` tinyint(1) NOT NULL DEFAULT 0,
  `chauffe_eau` tinyint(1) NOT NULL DEFAULT 0,
  `superficie_terrain` double DEFAULT NULL,
  `sous_sol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_terrain` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chalet_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facade_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone_disponible` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_piece` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hauteur_sous_plafond` double DEFAULT NULL,
  `internet` tinyint(1) NOT NULL DEFAULT 0,
  `wc_sanitaire` tinyint(1) NOT NULL DEFAULT 0,
  `balcon` tinyint(1) NOT NULL DEFAULT 0,
  `coin_cuisine` tinyint(1) NOT NULL DEFAULT 0,
  `acceuil` tinyint(1) NOT NULL DEFAULT 0,
  `ascenseur` tinyint(1) NOT NULL DEFAULT 0,
  `monte_charge` tinyint(1) NOT NULL DEFAULT 0,
  `coworking` tinyint(1) NOT NULL DEFAULT 0,
  `domiciliation` tinyint(1) NOT NULL DEFAULT 0,
  `open_space` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_box` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salle_reunion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fond_commerce` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terrasses` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface_total` double DEFAULT NULL,
  `sous_pente` double DEFAULT NULL,
  `longueur_facade` double DEFAULT NULL,
  `hauteur_plafond` double DEFAULT NULL,
  `angle_de_rue` tinyint(1) NOT NULL DEFAULT 0,
  `mezzanine` tinyint(1) NOT NULL DEFAULT 0,
  `titre_foncier` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lotissement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assainissement` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_eau` tinyint(1) NOT NULL DEFAULT 0,
  `puits` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_electricite` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_telephone` tinyint(1) NOT NULL DEFAULT 0,
  `zone_implante` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terrain_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix_annonce` double DEFAULT NULL,
  `particulier_portail` tinyint(1) NOT NULL DEFAULT 0,
  `description_appartement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_villa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_maison` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_riad` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_bureau` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_chalet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_commerce` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_commercial` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_plateau` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_residentiel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medias_appartement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medias_villa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medias_maison` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medias_riad` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medias_bureau` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medias_chalet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medias_commerce` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medias_commercial` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medias_plateau` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medias_residentiel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appartement` tinyint(1) NOT NULL DEFAULT 0,
  `villa` tinyint(1) NOT NULL DEFAULT 0,
  `maison` tinyint(1) NOT NULL DEFAULT 0,
  `riad` tinyint(1) NOT NULL DEFAULT 0,
  `chalet` tinyint(1) NOT NULL DEFAULT 0,
  `commerce` tinyint(1) NOT NULL DEFAULT 0,
  `bureau` tinyint(1) NOT NULL DEFAULT 0,
  `plateau` tinyint(1) NOT NULL DEFAULT 0,
  `residentiel` tinyint(1) NOT NULL DEFAULT 0,
  `commercial` tinyint(1) NOT NULL DEFAULT 0,
  `prix_appartement` double DEFAULT NULL,
  `prix_villa` double DEFAULT NULL,
  `prix_maison` double DEFAULT NULL,
  `prix_riad` double DEFAULT NULL,
  `prix_bureau` double DEFAULT NULL,
  `prix_chalet` double DEFAULT NULL,
  `prix_commerce` double DEFAULT NULL,
  `prix_commercial` double DEFAULT NULL,
  `prix_plateau` double DEFAULT NULL,
  `prix_residentiel` double DEFAULT NULL,
  `projet_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `annonce_urls`
--

CREATE TABLE `annonce_urls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annonce_urls`
--

INSERT INTO `annonce_urls` (`id`, `url`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-04-24 21:46:06', '2020-04-24 21:46:06'),
(2, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-02 12:28:21', '2020-05-02 12:28:21'),
(3, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-04 19:54:34', '2020-05-04 19:54:34'),
(4, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-05 08:48:50', '2020-05-05 08:48:50'),
(5, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-06 09:02:28', '2020-05-06 09:02:28'),
(6, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-07 09:19:59', '2020-05-07 09:19:59'),
(7, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-07 12:34:23', '2020-05-07 12:34:23'),
(8, 'http://myhouse.com/sujet/deposer/pricing', 2, '2020-05-08 09:28:05', '2020-05-08 09:28:05'),
(9, 'http://myhouse.com/sujet/deposer/pricing', 2, '2020-05-08 09:28:14', '2020-05-08 09:28:14'),
(10, 'http://myhouse.com/sujet/deposer/pricing', 2, '2020-05-08 09:33:38', '2020-05-08 09:33:38'),
(11, 'http://myhouse.com/sujet/deposer/pricing', 2, '2020-05-08 09:33:43', '2020-05-08 09:33:43'),
(12, 'http://myhouse.com/sujet/deposer/pricing', 2, '2020-05-08 09:33:48', '2020-05-08 09:33:48'),
(13, 'http://myhouse.com/sujet/deposer/pricing', 2, '2020-05-08 09:33:56', '2020-05-08 09:33:56'),
(14, 'http://myhouse.com/sujet/deposer/pricing', 2, '2020-05-08 09:34:03', '2020-05-08 09:34:03'),
(15, 'http://myhouse.com/sujet/deposer/pricing', 2, '2020-05-08 09:41:33', '2020-05-08 09:41:33'),
(16, 'http://myhouse.com/sujet/deposer/pricing', 2, '2020-05-08 10:25:35', '2020-05-08 10:25:35'),
(17, 'http://myhouse.com/sujet/deposer/pricing', 2, '2020-05-08 11:14:25', '2020-05-08 11:14:25'),
(18, 'http://myhouse.com/connexion', 2, '2020-05-08 20:16:31', '2020-05-08 20:16:31'),
(19, 'http://myhouse.com/sujet/deposer/pricing', 3, '2020-05-08 21:13:45', '2020-05-08 21:13:45'),
(20, 'http://myhouse.com/connexion', 3, '2020-05-08 21:14:34', '2020-05-08 21:14:34'),
(21, 'http://myhouse.com/sujet/deposer/pricing', 3, '2020-05-08 21:15:42', '2020-05-08 21:15:42'),
(22, 'http://myhouse.com/sujet/deposer/pricing', 3, '2020-05-08 21:46:18', '2020-05-08 21:46:18'),
(23, 'http://myhouse.com/sujet/deposer/pricing', 3, '2020-05-09 11:24:40', '2020-05-09 11:24:40'),
(24, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-09 15:55:53', '2020-05-09 15:55:53'),
(25, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-09 16:32:08', '2020-05-09 16:32:08'),
(26, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-09 23:26:11', '2020-05-09 23:26:11'),
(27, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-09 23:50:49', '2020-05-09 23:50:49'),
(28, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-10 17:08:49', '2020-05-10 17:08:49'),
(29, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-10 17:08:56', '2020-05-10 17:08:56'),
(30, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-11 09:29:59', '2020-05-11 09:29:59'),
(31, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-11 09:42:54', '2020-05-11 09:42:54'),
(32, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-11 10:01:44', '2020-05-11 10:01:44'),
(33, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-11 10:20:41', '2020-05-11 10:20:41'),
(34, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-11 12:47:41', '2020-05-11 12:47:41'),
(35, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-11 23:13:55', '2020-05-11 23:13:55'),
(36, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-12 15:25:27', '2020-05-12 15:25:27'),
(37, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-12 18:55:51', '2020-05-12 18:55:51'),
(38, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-12 18:58:11', '2020-05-12 18:58:11'),
(39, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-12 21:49:32', '2020-05-12 21:49:32'),
(40, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-12 22:04:08', '2020-05-12 22:04:08'),
(41, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-12 22:41:08', '2020-05-12 22:41:08'),
(42, 'http://myhouse.com/connexion', 1, '2020-05-13 09:20:58', '2020-05-13 09:20:58'),
(43, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-13 10:29:21', '2020-05-13 10:29:21'),
(44, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-13 10:34:48', '2020-05-13 10:34:48'),
(45, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-13 12:33:31', '2020-05-13 12:33:31'),
(46, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-13 12:38:50', '2020-05-13 12:38:50'),
(47, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-13 12:45:46', '2020-05-13 12:45:46'),
(48, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-13 14:01:19', '2020-05-13 14:01:19'),
(49, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-13 14:01:59', '2020-05-13 14:01:59'),
(50, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-13 14:03:13', '2020-05-13 14:03:13'),
(51, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-13 14:56:25', '2020-05-13 14:56:25'),
(52, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-13 15:18:30', '2020-05-13 15:18:30'),
(53, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-13 15:19:09', '2020-05-13 15:19:09'),
(54, 'http://myhouse.com/connexion', 2, '2020-05-13 15:40:01', '2020-05-13 15:40:01'),
(55, 'http://myhouse.com/sujet/deposer/pricing', 2, '2020-05-13 15:40:36', '2020-05-13 15:40:36'),
(56, 'http://myhouse.com/sujet/deposer/pricing', 2, '2020-05-13 16:02:38', '2020-05-13 16:02:38'),
(57, 'http://myhouse.com/connexion', 1, '2020-05-14 11:28:53', '2020-05-14 11:28:53'),
(58, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-14 11:33:14', '2020-05-14 11:33:14'),
(59, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-14 11:45:12', '2020-05-14 11:45:12'),
(60, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-14 11:47:42', '2020-05-14 11:47:42'),
(61, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-14 13:10:10', '2020-05-14 13:10:10'),
(62, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-14 14:09:35', '2020-05-14 14:09:35'),
(63, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-14 14:11:15', '2020-05-14 14:11:15'),
(64, 'http://myhouse.com/connexion', 1, '2020-05-15 09:02:00', '2020-05-15 09:02:00'),
(65, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-15 09:26:07', '2020-05-15 09:26:07'),
(66, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-15 09:52:24', '2020-05-15 09:52:24'),
(67, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-15 10:55:59', '2020-05-15 10:55:59'),
(68, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-15 22:11:44', '2020-05-15 22:11:44'),
(69, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-16 10:18:08', '2020-05-16 10:18:08'),
(70, 'http://myhouse.com/connexion', 1, '2020-05-18 08:42:46', '2020-05-18 08:42:46'),
(71, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-18 20:26:26', '2020-05-18 20:26:26'),
(72, 'http://myhouse.com/connexion', 1, '2020-05-18 20:47:10', '2020-05-18 20:47:10'),
(73, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-18 20:52:25', '2020-05-18 20:52:25'),
(74, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-19 09:10:06', '2020-05-19 09:10:06'),
(75, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-19 09:18:33', '2020-05-19 09:18:33'),
(76, 'http://myhouse.com/connexion', 1, '2020-05-20 09:05:44', '2020-05-20 09:05:44'),
(77, 'http://myhouse.com/connexion', 1, '2020-05-21 08:47:26', '2020-05-21 08:47:26'),
(78, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-21 11:08:28', '2020-05-21 11:08:28'),
(79, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-21 13:10:11', '2020-05-21 13:10:11'),
(80, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-21 13:22:41', '2020-05-21 13:22:41'),
(81, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-21 13:22:46', '2020-05-21 13:22:46'),
(82, 'http://myhouse.com/connexion', 10, '2020-05-21 14:04:37', '2020-05-21 14:04:37'),
(83, 'http://myhouse.com/sujet/deposer/pricing', 10, '2020-05-21 16:57:29', '2020-05-21 16:57:29'),
(84, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-21 17:25:19', '2020-05-21 17:25:19'),
(85, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-21 17:35:52', '2020-05-21 17:35:52'),
(86, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-21 17:51:16', '2020-05-21 17:51:16'),
(87, 'http://myhouse.com/connexion', 1, '2020-05-22 10:44:33', '2020-05-22 10:44:33'),
(88, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-22 16:30:28', '2020-05-22 16:30:28'),
(89, 'http://myhouse.com/connexion', 1, '2020-05-22 16:47:19', '2020-05-22 16:47:19'),
(90, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-22 19:07:11', '2020-05-22 19:07:11'),
(91, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-22 19:29:24', '2020-05-22 19:29:24'),
(92, 'http://myhouse.com/connexion', 1, '2020-05-23 09:45:27', '2020-05-23 09:45:27'),
(93, 'http://myhouse.com/connexion', 1, '2020-05-23 17:59:20', '2020-05-23 17:59:20'),
(94, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-23 21:27:18', '2020-05-23 21:27:18'),
(95, 'http://myhouse.com/connexion', 1, '2020-05-24 10:53:55', '2020-05-24 10:53:55'),
(96, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 15:14:37', '2020-05-24 15:14:37'),
(97, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 15:14:45', '2020-05-24 15:14:45'),
(98, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 15:26:52', '2020-05-24 15:26:52'),
(99, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 15:27:27', '2020-05-24 15:27:27'),
(100, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 15:27:32', '2020-05-24 15:27:32'),
(101, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 15:27:42', '2020-05-24 15:27:42'),
(102, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 15:28:12', '2020-05-24 15:28:12'),
(103, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 15:28:57', '2020-05-24 15:28:57'),
(104, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 15:29:36', '2020-05-24 15:29:36'),
(105, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 15:30:14', '2020-05-24 15:30:14'),
(106, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 15:31:35', '2020-05-24 15:31:35'),
(107, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 15:56:31', '2020-05-24 15:56:31'),
(108, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-24 23:04:30', '2020-05-24 23:04:30'),
(109, 'http://myhouse.com/connexion', 1, '2020-05-25 10:24:05', '2020-05-25 10:24:05'),
(110, 'http://myhouse.com/connexion', 1, '2020-05-26 08:26:40', '2020-05-26 08:26:40'),
(111, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-26 20:02:09', '2020-05-26 20:02:09'),
(112, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-26 21:51:07', '2020-05-26 21:51:07'),
(113, 'http://myhouse.com/connexion', 1, '2020-05-27 09:15:04', '2020-05-27 09:15:04'),
(114, 'http://myhouse.com/connexion', 1, '2020-05-27 13:15:57', '2020-05-27 13:15:57'),
(115, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-27 14:15:21', '2020-05-27 14:15:21'),
(116, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-27 14:21:42', '2020-05-27 14:21:42'),
(117, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-27 14:25:16', '2020-05-27 14:25:16'),
(118, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-27 15:39:45', '2020-05-27 15:39:45'),
(119, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-27 15:53:22', '2020-05-27 15:53:22'),
(120, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-27 16:01:44', '2020-05-27 16:01:44'),
(121, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-27 17:26:15', '2020-05-27 17:26:15'),
(122, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 09:23:54', '2020-05-28 09:23:54'),
(123, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 11:39:17', '2020-05-28 11:39:17'),
(124, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 14:02:48', '2020-05-28 14:02:48'),
(125, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 14:22:43', '2020-05-28 14:22:43'),
(126, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 14:35:43', '2020-05-28 14:35:43'),
(127, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 15:54:50', '2020-05-28 15:54:50'),
(128, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 16:12:31', '2020-05-28 16:12:31'),
(129, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 16:18:47', '2020-05-28 16:18:47'),
(130, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 16:27:38', '2020-05-28 16:27:38'),
(131, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 17:09:58', '2020-05-28 17:09:58'),
(132, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 17:14:57', '2020-05-28 17:14:57'),
(133, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 18:34:45', '2020-05-28 18:34:45'),
(134, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-28 19:11:17', '2020-05-28 19:11:17'),
(135, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-29 08:36:00', '2020-05-29 08:36:00'),
(136, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-29 09:01:28', '2020-05-29 09:01:28'),
(137, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-29 09:47:53', '2020-05-29 09:47:53'),
(138, 'http://192.168.1.11/sujet/deposer/pricing', 22, '2020-05-29 10:45:49', '2020-05-29 10:45:49'),
(139, 'http://myhouse.com/connexion', 1, '2020-05-29 11:17:27', '2020-05-29 11:17:27'),
(140, 'http://192.168.43.6/sujet/deposer/pricing', 1, '2020-05-29 12:13:22', '2020-05-29 12:13:22'),
(141, 'http://192.168.43.6/sujet/deposer/pricing', 1, '2020-05-29 12:33:43', '2020-05-29 12:33:43'),
(142, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-29 12:54:18', '2020-05-29 12:54:18'),
(143, 'http://myhouse.com/connexion', 1, '2020-05-29 13:44:04', '2020-05-29 13:44:04'),
(144, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-29 14:02:17', '2020-05-29 14:02:17'),
(145, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-29 14:07:33', '2020-05-29 14:07:33'),
(146, 'http://myhouse.com/connexion', 1, '2020-05-29 18:58:31', '2020-05-29 18:58:31'),
(147, 'http://myhouse.com/sujet/deposer/pricing', 33, '2020-05-29 21:41:13', '2020-05-29 21:41:13'),
(148, 'http://myhouse.com/sujet/deposer/pricing', 33, '2020-05-29 22:22:01', '2020-05-29 22:22:01'),
(149, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-30 14:11:57', '2020-05-30 14:11:57'),
(150, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-30 14:35:56', '2020-05-30 14:35:56'),
(151, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-30 14:42:09', '2020-05-30 14:42:09'),
(152, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-30 14:48:43', '2020-05-30 14:48:43'),
(153, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-30 16:41:03', '2020-05-30 16:41:03'),
(154, 'http://myhouse.com/sujet/deposer/pricing', 33, '2020-05-30 18:52:27', '2020-05-30 18:52:27'),
(155, 'http://myhouse.com/sujet/deposer/pricing', 33, '2020-05-30 19:34:52', '2020-05-30 19:34:52'),
(156, 'http://myhouse.com/connexion', 1, '2020-05-31 07:11:04', '2020-05-31 07:11:04'),
(157, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-31 08:18:55', '2020-05-31 08:18:55'),
(158, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-31 09:54:40', '2020-05-31 09:54:40'),
(159, 'http://127.0.0.1/sujet/deposer/pricing', 1, '2020-05-31 15:24:41', '2020-05-31 15:24:41'),
(160, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-05-31 21:52:16', '2020-05-31 21:52:16'),
(161, 'http://myhouse.com/connexion', 1, '2020-06-01 16:44:16', '2020-06-01 16:44:16'),
(162, 'http://myhouse.com/connexion', 1, '2020-06-01 16:48:07', '2020-06-01 16:48:07'),
(163, 'http://myhouse.com/sujet/deposer/pricing', 1, '2020-06-01 17:25:28', '2020-06-01 17:25:28'),
(164, 'http://myhouse.com/connexion', 1, '2020-06-01 18:32:30', '2020-06-01 18:32:30'),
(165, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-01 19:04:42', '2020-06-01 19:04:42'),
(166, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-02 11:26:50', '2020-06-02 11:26:50'),
(167, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-02 14:45:20', '2020-06-02 14:45:20'),
(168, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-02 16:50:36', '2020-06-02 16:50:36'),
(169, 'http://myhouse.local/connexion', 1, '2020-06-03 08:05:48', '2020-06-03 08:05:48'),
(170, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-03 09:18:06', '2020-06-03 09:18:06'),
(171, 'http://myhouse.local/connexion', 1, '2020-06-04 08:10:55', '2020-06-04 08:10:55'),
(172, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 08:13:15', '2020-06-04 08:13:15'),
(173, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 08:15:40', '2020-06-04 08:15:40'),
(174, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 08:18:07', '2020-06-04 08:18:07'),
(175, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 08:20:14', '2020-06-04 08:20:14'),
(176, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 08:22:09', '2020-06-04 08:22:09'),
(177, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 08:24:38', '2020-06-04 08:24:38'),
(178, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 10:00:56', '2020-06-04 10:00:56'),
(179, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 10:06:58', '2020-06-04 10:06:58'),
(180, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 10:32:02', '2020-06-04 10:32:02'),
(181, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 10:33:58', '2020-06-04 10:33:58'),
(182, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 10:35:56', '2020-06-04 10:35:56'),
(183, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 10:50:45', '2020-06-04 10:50:45'),
(184, 'http://myhouse.local/sujet/deposer/pricing', 1, '2020-06-04 10:52:52', '2020-06-04 10:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `bannieres`
--

CREATE TABLE `bannieres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bannieres`
--

INSERT INTO `bannieres` (`id`, `image`, `date`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1588151214.jpg', '2022-01-05 00:00:00', 1, '2020-04-29 09:06:54', '2020-04-29 09:06:54'),
(2, '1588151237.jpg', '2022-02-05 00:00:00', 1, '2020-04-29 09:07:17', '2020-04-29 09:07:17'),
(3, '1588151270.jpg', '2022-02-05 00:00:00', 1, '2020-04-29 09:07:50', '2020-04-29 09:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `category_types`
--

CREATE TABLE `category_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `connect_urls`
--

CREATE TABLE `connect_urls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `connect_urls`
--

INSERT INTO `connect_urls` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'http://myhouse.com/menu/particulier/annonces?user=particulier', '2020-04-24 20:00:00', '2020-04-24 20:00:00'),
(2, 'http://myhouse.com/', '2020-04-24 20:11:15', '2020-04-24 20:11:15'),
(3, 'http://myhouse.com/connexion', '2020-04-24 20:11:19', '2020-04-24 20:11:19'),
(4, 'http://localhost:1080/email/Kqhm94iU/html', '2020-04-24 20:13:00', '2020-04-24 20:13:00'),
(5, 'http://myhouse.com/confirm/gjacksongomez@gmail.com', '2020-04-24 20:13:08', '2020-04-24 20:13:08'),
(6, 'http://myhouse.com/resultat/particuliers/appartement-1', '2020-04-29 21:45:44', '2020-04-29 21:45:44'),
(7, 'http://myhouse.com/resultat/particuliers/appartement-1', '2020-04-30 09:41:08', '2020-04-30 09:41:08'),
(8, 'http://myhouse.com/resultat/particuliers/appartement-1', '2020-04-30 15:48:17', '2020-04-30 15:48:17'),
(9, 'http://myhouse.com/resultat/particuliers/appartement-1', '2020-04-30 17:50:55', '2020-04-30 17:50:55'),
(10, 'http://myhouse.com/resultat/particuliers/appartement-1', '2020-05-01 10:20:17', '2020-05-01 10:20:17'),
(11, 'http://myhouse.com/resultat/particuliers/appartement-1', '2020-05-02 11:06:22', '2020-05-02 11:06:22'),
(12, 'http://myhouse.com/', '2020-05-04 08:42:05', '2020-05-04 08:42:05'),
(13, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-05 08:41:52', '2020-05-05 08:41:52'),
(14, 'http://myhouse.com/sujet/deposer/particulier/description?id=4&type=villa', '2020-05-05 15:59:56', '2020-05-05 15:59:56'),
(15, 'http://myhouse.com/', '2020-05-06 09:01:52', '2020-05-06 09:01:52'),
(16, 'http://myhouse.com/', '2020-05-07 09:15:49', '2020-05-07 09:15:49'),
(17, 'http://myhouse.com/', '2020-05-07 20:04:04', '2020-05-07 20:04:04'),
(18, 'http://localhost:1080/email/fvds1xjw/html', '2020-05-07 20:05:57', '2020-05-07 20:05:57'),
(19, 'http://myhouse.com/confirm/hermanjacksonfoutou@yahoo.fr', '2020-05-07 20:06:07', '2020-05-07 20:06:07'),
(20, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-08 20:16:27', '2020-05-08 20:16:27'),
(21, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-08 20:25:23', '2020-05-08 20:25:23'),
(22, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-08 20:33:50', '2020-05-08 20:33:50'),
(23, 'http://myhouse.com/inscription', '2020-05-08 20:48:11', '2020-05-08 20:48:11'),
(24, 'http://myhouse.com/inscription', '2020-05-08 20:48:25', '2020-05-08 20:48:25'),
(25, 'http://myhouse.com/inscription', '2020-05-08 20:49:06', '2020-05-08 20:49:06'),
(26, 'http://localhost:1080/email/ehL4tljb/html', '2020-05-08 20:58:58', '2020-05-08 20:58:58'),
(27, 'http://myhouse.com/connexion', '2020-05-08 21:12:32', '2020-05-08 21:12:32'),
(28, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-08 21:14:05', '2020-05-08 21:14:05'),
(29, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-08 21:14:18', '2020-05-08 21:14:18'),
(30, 'http://myhouse.com/', '2020-05-09 10:45:41', '2020-05-09 10:45:41'),
(31, 'http://myhouse.com/forgot', '2020-05-09 11:06:21', '2020-05-09 11:06:21'),
(32, 'http://myhouse.com/forgot', '2020-05-09 11:08:50', '2020-05-09 11:08:50'),
(33, 'http://myhouse.com/connexion', '2020-05-09 11:08:54', '2020-05-09 11:08:54'),
(34, 'http://myhouse.com/inscription', '2020-05-09 11:09:18', '2020-05-09 11:09:18'),
(35, 'http://myhouse.com/inscription', '2020-05-09 11:12:07', '2020-05-09 11:12:07'),
(36, 'http://myhouse.com/', '2020-05-09 14:04:00', '2020-05-09 14:04:00'),
(37, 'http://myhouse.com/', '2020-05-10 11:31:14', '2020-05-10 11:31:14'),
(38, 'http://myhouse.com/', '2020-05-11 08:48:36', '2020-05-11 08:48:36'),
(39, 'http://myhouse.com/sujet/deposer/professionnel/critere?_token=VhN9OSP6i1lW3RkfjpsqhqqSUAvX4ij3Dnuk6fuy&id=34&appart_type_un=2%C3%A8me+main&surface_habitable=45&appart_etage_niveau=Sur+un+niveau&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=3+chambre%28s%29&dressings=4+dressing%28s%29&nombre_salle_bain=4+salle%28s%29+de+bain&nombre_salon=4+salon%28s%29&terrasses=6+terrasse%28s%29&balcons=9+balcon%28s%29&jardin_privatif=1&cour=1&buanderie=1&cheminee=1&climatisation=1&chauffe_eau=1&espace_vert=1&gardiennage=1&place_vehicule=1+place%28s%29+v%C3%A9hicule&box=1&piscine=1&terrain_sport=1&salle_fitness=1&spa=1&superette=1&ecole=1&mosquee=1&shopping=1&restaurent=1&cafe=1&pladge=1&plage=700m&campdagne=1&campagne=800m&mondtagne=1&montagne=1%2C4km&desedrt=1&desert=1%2C7km&spotd_surf=1&spot_surf=600m&goldf=1&golf=1%2C2km&fordet=1&foret=300m&statiodn_ski=1&station_ski=900m&riviedre=1&riviere=700m', '2020-05-12 08:39:59', '2020-05-12 08:39:59'),
(40, 'http://myhouse.com/', '2020-05-12 12:20:49', '2020-05-12 12:20:49'),
(41, 'http://myhouse.com/inscription', '2020-05-12 12:22:45', '2020-05-12 12:22:45'),
(42, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-13 09:20:48', '2020-05-13 09:20:48'),
(43, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-13 15:21:00', '2020-05-13 15:21:00'),
(44, 'http://myhouse.com/connexion', '2020-05-13 15:21:13', '2020-05-13 15:21:13'),
(45, 'http://myhouse.com/connexion', '2020-05-13 15:21:54', '2020-05-13 15:21:54'),
(46, 'http://myhouse.com/connexion', '2020-05-13 15:22:34', '2020-05-13 15:22:34'),
(47, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-13 15:39:19', '2020-05-13 15:39:19'),
(48, 'http://myhouse.com/connexion', '2020-05-13 15:39:34', '2020-05-13 15:39:34'),
(49, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers', '2020-05-13 20:39:08', '2020-05-13 20:39:08'),
(50, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers&transaction=&prix=10%2C73&surface=10%2C85&word=&tri=prix_asc', '2020-05-13 20:44:42', '2020-05-13 20:44:42'),
(51, 'http://myhouse.com/connexion', '2020-05-13 20:44:51', '2020-05-13 20:44:51'),
(52, 'http://myhouse.com/connexion', '2020-05-13 20:45:08', '2020-05-13 20:45:08'),
(53, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-14 11:28:26', '2020-05-14 11:28:26'),
(54, 'http://myhouse.com/connexion', '2020-05-14 11:28:36', '2020-05-14 11:28:36'),
(55, 'http://myhouse.com/connexion', '2020-05-14 11:28:40', '2020-05-14 11:28:40'),
(56, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-15 09:01:56', '2020-05-15 09:01:56'),
(57, 'http://myhouse.com/', '2020-05-16 10:04:12', '2020-05-16 10:04:12'),
(58, 'http://myhouse.com/sujet/deposer/particulier/edit/39', '2020-05-16 12:46:00', '2020-05-16 12:46:00'),
(59, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-18 08:42:42', '2020-05-18 08:42:42'),
(60, 'http://myhouse.com/sujet/deposer/particulier/edit/67', '2020-05-18 09:41:04', '2020-05-18 09:41:04'),
(61, 'http://myhouse.com/', '2020-05-18 20:34:07', '2020-05-18 20:34:07'),
(62, 'http://myhouse.com/connexion', '2020-05-18 20:36:08', '2020-05-18 20:36:08'),
(63, 'http://myhouse.com/connexion', '2020-05-18 20:44:46', '2020-05-18 20:44:46'),
(64, 'http://myhouse.com/connexion', '2020-05-18 20:44:50', '2020-05-18 20:44:50'),
(65, 'http://myhouse.com/connexion', '2020-05-18 20:44:53', '2020-05-18 20:44:53'),
(66, 'http://myhouse.com/connexion', '2020-05-18 20:44:55', '2020-05-18 20:44:55'),
(67, 'http://myhouse.com/connexion', '2020-05-18 20:45:01', '2020-05-18 20:45:01'),
(68, 'http://myhouse.com/connexion', '2020-05-18 20:45:16', '2020-05-18 20:45:16'),
(69, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-18 20:46:24', '2020-05-18 20:46:24'),
(70, 'http://myhouse.com/connexion', '2020-05-18 20:46:43', '2020-05-18 20:46:43'),
(71, 'http://myhouse.com/', '2020-05-18 20:57:01', '2020-05-18 20:57:01'),
(72, 'http://myhouse.com/sujet/deposer/particulier/update/67?charge_copropriete=&charges=oui&echange_periode_deux=&echange_periode_un=&last_id=AJCOrvI0e2EurCMmS&loyerMois=on&prix_jour=&prix_m=650&prix_mois=5020&prix_vente=600000&venteActif=1', '2020-05-19 08:57:58', '2020-05-19 08:57:58'),
(73, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-20 09:05:40', '2020-05-20 09:05:40'),
(74, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-21 08:47:16', '2020-05-21 08:47:16'),
(75, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-21 13:23:21', '2020-05-21 13:23:21'),
(76, 'http://myhouse.com/connexion', '2020-05-21 13:23:43', '2020-05-21 13:23:43'),
(77, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-21 13:24:16', '2020-05-21 13:24:16'),
(78, 'http://myhouse.com/connexion', '2020-05-21 13:24:26', '2020-05-21 13:24:26'),
(79, 'http://myhouse.com/connexion', '2020-05-21 13:24:40', '2020-05-21 13:24:40'),
(80, 'http://myhouse.com/inscription', '2020-05-21 13:32:03', '2020-05-21 13:32:03'),
(81, 'http://localhost:1080/email/SBuSVfWR/html', '2020-05-21 13:57:17', '2020-05-21 13:57:17'),
(82, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-21 14:04:14', '2020-05-21 14:04:14'),
(83, 'http://myhouse.com/', '2020-05-21 17:24:58', '2020-05-21 17:24:58'),
(84, 'http://myhouse.com/', '2020-05-22 08:58:49', '2020-05-22 08:58:49'),
(85, 'http://myhouse.com/connexion', '2020-05-22 08:58:52', '2020-05-22 08:58:52'),
(86, 'http://myhouse.com/connexion', '2020-05-22 09:01:40', '2020-05-22 09:01:40'),
(87, 'http://myhouse.com/connexion', '2020-05-22 09:01:41', '2020-05-22 09:01:41'),
(88, 'http://myhouse.com/connexion', '2020-05-22 09:01:43', '2020-05-22 09:01:43'),
(89, 'http://myhouse.com/connexion', '2020-05-22 09:01:46', '2020-05-22 09:01:46'),
(90, 'http://myhouse.com/connexion', '2020-05-22 09:01:47', '2020-05-22 09:01:47'),
(91, 'http://myhouse.com/connexion', '2020-05-22 09:01:53', '2020-05-22 09:01:53'),
(92, 'http://myhouse.com/connexion', '2020-05-22 09:03:11', '2020-05-22 09:03:11'),
(93, 'http://myhouse.com/connexion', '2020-05-22 09:03:31', '2020-05-22 09:03:31'),
(94, 'http://myhouse.com/connexion', '2020-05-22 09:06:02', '2020-05-22 09:06:02'),
(95, 'http://myhouse.com/menu/charte/particulier', '2020-05-22 09:12:54', '2020-05-22 09:12:54'),
(96, 'http://myhouse.com/', '2020-05-22 09:13:48', '2020-05-22 09:13:48'),
(97, 'http://myhouse.com/menu/charte/particulier', '2020-05-22 09:15:31', '2020-05-22 09:15:31'),
(98, 'http://myhouse.com/', '2020-05-22 09:15:45', '2020-05-22 09:15:45'),
(99, 'http://myhouse.com/connexion', '2020-05-22 09:15:47', '2020-05-22 09:15:47'),
(100, 'http://myhouse.com/connexion', '2020-05-22 09:16:10', '2020-05-22 09:16:10'),
(101, 'http://myhouse.com/connexion', '2020-05-22 09:25:02', '2020-05-22 09:25:02'),
(102, 'http://myhouse.com/connexion', '2020-05-22 09:25:20', '2020-05-22 09:25:20'),
(103, 'http://myhouse.com/connexion', '2020-05-22 09:25:24', '2020-05-22 09:25:24'),
(104, 'http://myhouse.com/connexion', '2020-05-22 09:25:35', '2020-05-22 09:25:35'),
(105, 'http://myhouse.com/connexion', '2020-05-22 09:25:39', '2020-05-22 09:25:39'),
(106, 'http://myhouse.com/connexion', '2020-05-22 09:28:05', '2020-05-22 09:28:05'),
(107, 'http://myhouse.com/connexion', '2020-05-22 09:28:10', '2020-05-22 09:28:10'),
(108, 'http://myhouse.com/connexion', '2020-05-22 09:28:12', '2020-05-22 09:28:12'),
(109, 'http://myhouse.com/', '2020-05-22 09:28:21', '2020-05-22 09:28:21'),
(110, 'http://localhost:1080/email/IlgTNjbK/html', '2020-05-22 10:10:50', '2020-05-22 10:10:50'),
(111, 'http://localhost:1080/email/cMl1X18k/html', '2020-05-22 10:20:19', '2020-05-22 10:20:19'),
(112, 'http://localhost:1080/email/cMl1X18k/html', '2020-05-22 10:20:45', '2020-05-22 10:20:45'),
(113, 'http://myhouse.com/connexion', '2020-05-22 10:20:47', '2020-05-22 10:20:47'),
(114, 'http://myhouse.com/connexion', '2020-05-22 10:20:50', '2020-05-22 10:20:50'),
(115, 'http://myhouse.com/', '2020-05-22 10:41:24', '2020-05-22 10:41:24'),
(116, 'http://myhouse.com/connexion', '2020-05-22 10:41:26', '2020-05-22 10:41:26'),
(117, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-22 10:44:29', '2020-05-22 10:44:29'),
(118, 'http://myhouse.com/', '2020-05-22 11:42:04', '2020-05-22 11:42:04'),
(119, 'http://myhouse.com/', '2020-05-22 11:42:31', '2020-05-22 11:42:31'),
(120, 'http://myhouse.com/sujet/deposer/particulier/transaction', '2020-05-22 11:46:24', '2020-05-22 11:46:24'),
(121, 'http://myhouse.com/sujet/deposer/particulier/transaction', '2020-05-22 11:46:39', '2020-05-22 11:46:39'),
(122, 'http://myhouse.com/', '2020-05-22 11:57:37', '2020-05-22 11:57:37'),
(123, 'http://myhouse.com/menu/charte/particulier', '2020-05-22 11:57:41', '2020-05-22 11:57:41'),
(124, 'http://myhouse.com/connexion', '2020-05-22 11:58:02', '2020-05-22 11:58:02'),
(125, 'http://myhouse.com/sujet/deposer/particulier/transaction', '2020-05-22 12:02:30', '2020-05-22 12:02:30'),
(126, 'http://myhouse.com/connexion', '2020-05-22 12:02:34', '2020-05-22 12:02:34'),
(127, 'http://localhost:1080/email/w9Os0MuU/html', '2020-05-22 12:02:51', '2020-05-22 12:02:51'),
(128, 'http://myhouse.com/', '2020-05-22 14:21:57', '2020-05-22 14:21:57'),
(129, 'http://myhouse.com/connexion', '2020-05-22 14:21:58', '2020-05-22 14:21:58'),
(130, 'http://myhouse.com/connexion', '2020-05-22 14:25:12', '2020-05-22 14:25:12'),
(131, 'http://myhouse.com/connexion', '2020-05-22 14:25:52', '2020-05-22 14:25:52'),
(132, 'http://myhouse.com/connexion', '2020-05-22 14:26:10', '2020-05-22 14:26:10'),
(133, 'http://myhouse.com/connexion', '2020-05-22 14:26:47', '2020-05-22 14:26:47'),
(134, 'http://myhouse.com/menu/charte/particulier', '2020-05-22 14:29:12', '2020-05-22 14:29:12'),
(135, 'http://myhouse.com/', '2020-05-22 14:30:42', '2020-05-22 14:30:42'),
(136, 'http://myhouse.com/menu/charte/particulier', '2020-05-22 14:34:39', '2020-05-22 14:34:39'),
(137, 'http://myhouse.com/menu/charte/particulier', '2020-05-22 14:37:10', '2020-05-22 14:37:10'),
(138, 'http://myhouse.com/menu/charte/particulier', '2020-05-22 14:40:40', '2020-05-22 14:40:40'),
(139, 'http://myhouse.com/menu/charte/particulier', '2020-05-22 14:41:12', '2020-05-22 14:41:12'),
(140, 'http://myhouse.com/', '2020-05-22 14:43:23', '2020-05-22 14:43:23'),
(141, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers', '2020-05-22 14:44:53', '2020-05-22 14:44:53'),
(142, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers', '2020-05-22 14:45:15', '2020-05-22 14:45:15'),
(143, 'http://myhouse.com/blog', '2020-05-22 14:46:56', '2020-05-22 14:46:56'),
(144, 'http://myhouse.com/', '2020-05-22 14:47:59', '2020-05-22 14:47:59'),
(145, 'http://myhouse.com/', '2020-05-22 14:48:14', '2020-05-22 14:48:14'),
(146, 'http://myhouse.com/', '2020-05-22 14:57:58', '2020-05-22 14:57:58'),
(147, 'http://myhouse.com/blog', '2020-05-22 14:58:18', '2020-05-22 14:58:18'),
(148, 'http://myhouse.com/blog', '2020-05-22 14:58:37', '2020-05-22 14:58:37'),
(149, 'http://myhouse.com/blog', '2020-05-22 16:26:58', '2020-05-22 16:26:58'),
(150, 'http://myhouse.com/', '2020-05-22 16:31:30', '2020-05-22 16:31:30'),
(151, 'http://myhouse.com/connexion', '2020-05-22 16:32:28', '2020-05-22 16:32:28'),
(152, 'http://myhouse.com/connexion', '2020-05-22 16:32:32', '2020-05-22 16:32:32'),
(153, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-22 16:47:13', '2020-05-22 16:47:13'),
(154, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-22 16:47:16', '2020-05-22 16:47:16'),
(155, 'http://myhouse.com/', '2020-05-22 19:05:38', '2020-05-22 19:05:38'),
(156, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-22 19:06:57', '2020-05-22 19:06:57'),
(157, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-23 09:45:17', '2020-05-23 09:45:17'),
(158, 'http://myhouse.com/', '2020-05-23 17:58:45', '2020-05-23 17:58:45'),
(159, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-23 17:59:13', '2020-05-23 17:59:13'),
(160, 'http://myhouse.com/', '2020-05-23 21:12:38', '2020-05-23 21:12:38'),
(161, 'http://myhouse.com/menu/charte/particulier', '2020-05-23 21:17:00', '2020-05-23 21:17:00'),
(162, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-24 10:53:51', '2020-05-24 10:53:51'),
(163, 'http://myhouse.com/', '2020-05-24 15:48:44', '2020-05-24 15:48:44'),
(164, 'http://myhouse.com/connexion', '2020-05-24 15:49:09', '2020-05-24 15:49:09'),
(165, 'http://myhouse.com/connexion', '2020-05-24 15:49:21', '2020-05-24 15:49:21'),
(166, 'http://myhouse.com/', '2020-05-24 15:50:42', '2020-05-24 15:50:42'),
(167, 'http://myhouse.com/blog/single', '2020-05-24 15:52:55', '2020-05-24 15:52:55'),
(168, 'http://myhouse.com/blog', '2020-05-24 15:53:25', '2020-05-24 15:53:25'),
(169, 'http://myhouse.com/blog', '2020-05-24 15:53:40', '2020-05-24 15:53:40'),
(170, 'http://myhouse.com/blog', '2020-05-24 15:54:49', '2020-05-24 15:54:49'),
(171, 'http://myhouse.com/', '2020-05-24 15:54:58', '2020-05-24 15:54:58'),
(172, 'http://myhouse.com/', '2020-05-24 15:55:16', '2020-05-24 15:55:16'),
(173, 'http://myhouse.com/blog', '2020-05-24 15:55:26', '2020-05-24 15:55:26'),
(174, 'http://myhouse.com/sujet/deposer/particulier/description?id=158&type=appartement', '2020-05-24 18:05:53', '2020-05-24 18:05:53'),
(175, 'http://myhouse.com/', '2020-05-24 18:06:49', '2020-05-24 18:06:49'),
(176, 'http://myhouse.com/', '2020-05-24 23:01:30', '2020-05-24 23:01:30'),
(177, 'http://myhouse.com/', '2020-05-24 23:01:37', '2020-05-24 23:01:37'),
(178, 'http://myhouse.com/', '2020-05-24 23:01:53', '2020-05-24 23:01:53'),
(179, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-25 10:23:59', '2020-05-25 10:23:59'),
(180, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-26 08:26:36', '2020-05-26 08:26:36'),
(181, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-27 09:14:46', '2020-05-27 09:14:46'),
(182, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-27 09:15:00', '2020-05-27 09:15:00'),
(183, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-27 13:15:50', '2020-05-27 13:15:50'),
(184, 'http://myhouse.com/connexion', '2020-05-27 13:15:51', '2020-05-27 13:15:51'),
(185, 'http://myhouse.com/blog', '2020-05-28 09:04:41', '2020-05-28 09:04:41'),
(186, 'http://myhouse.com/sujet/deposer/particulier/critere?id=232&appart_type_un=En+cours+de+construction&surface_habitable=130&appart_etage_niveau=Sur+un+niveau&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&vente_meuble=1&vente_non_meuble=1&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=3+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&jardin_privatif=1&cour=1&buanderie=1&cheminee=1&climatisation=1&chauffe_eau=1&espace_vert=1&gardiennage=1&place_vehicule=1+place%28s%29+v%C3%A9hicule&box=1&piscine=1&terrain_sport=1&salle_fitness=1&spa=1&superette=1&ecole=1&mosquee=1&shopping=1&restaurent=1&cafeteriat=1&mplage=1&plage=200m&mcampagne=1&campagne=400m&mmontagne=1&montagne=700m&mdesert=1&desert=700m&mspot_surf=1&spot_surf=900m&mgolf=1&golf=1%2C6km&mforet=1&foret=200m&mstation_ski=1&station_ski=1%2C5km&mriviere=1&riviere=1%2C1km', '2020-05-29 08:07:10', '2020-05-29 08:07:10'),
(187, 'http://192.168.1.11/', '2020-05-29 08:14:24', '2020-05-29 08:14:24'),
(188, 'http://192.168.1.11/sujet/deposer/pricing', '2020-05-29 08:17:43', '2020-05-29 08:17:43'),
(189, 'http://192.168.1.11/connexion', '2020-05-29 08:18:14', '2020-05-29 08:18:14'),
(190, 'http://myhouse.com/', '2020-05-29 08:25:41', '2020-05-29 08:25:41'),
(191, 'http://myhouse.com/', '2020-05-29 08:27:20', '2020-05-29 08:27:20'),
(192, 'http://192.168.1.11/', '2020-05-29 08:28:22', '2020-05-29 08:28:22'),
(193, 'http://192.168.1.11:1080/email/HVsYhCGJ/html', '2020-05-29 08:48:41', '2020-05-29 08:48:41'),
(194, 'http://192.168.1.11/connexion', '2020-05-29 08:51:54', '2020-05-29 08:51:54'),
(195, 'http://192.168.1.11/', '2020-05-29 10:22:40', '2020-05-29 10:22:40'),
(196, 'http://192.168.1.11:1080/email/wXZS0VGV/html', '2020-05-29 10:25:21', '2020-05-29 10:25:21'),
(197, 'http://192.168.1.11/connexion', '2020-05-29 10:26:34', '2020-05-29 10:26:34'),
(198, 'http://myhouse.com/', '2020-05-29 10:46:37', '2020-05-29 10:46:37'),
(199, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-29 11:17:19', '2020-05-29 11:17:19'),
(200, 'http://myhouse.com/', '2020-05-29 11:37:31', '2020-05-29 11:37:31'),
(201, 'http://myhouse.com/forgot', '2020-05-29 11:55:01', '2020-05-29 11:55:01'),
(202, 'http://myhouse.com/connexion', '2020-05-29 11:55:28', '2020-05-29 11:55:28'),
(203, 'http://myhouse.com/connexion', '2020-05-29 11:55:40', '2020-05-29 11:55:40'),
(204, 'http://myhouse.com/connexion', '2020-05-29 11:59:32', '2020-05-29 11:59:32'),
(205, 'http://myhouse.com/connexion', '2020-05-29 11:59:35', '2020-05-29 11:59:35'),
(206, 'http://myhouse.com/connexion', '2020-05-29 12:00:11', '2020-05-29 12:00:11'),
(207, 'http://myhouse.com/connexion', '2020-05-29 12:00:26', '2020-05-29 12:00:26'),
(208, 'http://192.168.43.6/', '2020-05-29 12:11:48', '2020-05-29 12:11:48'),
(209, 'http://myhouse.com/confirm/sqcsqc@sqc.ssd', '2020-05-29 12:19:12', '2020-05-29 12:19:12'),
(210, 'http://myhouse.com/confirm/sqcsqc@sqc.ssd', '2020-05-29 12:19:15', '2020-05-29 12:19:15'),
(211, 'http://myhouse.com/', '2020-05-29 12:19:24', '2020-05-29 12:19:24'),
(212, 'http://localhost:1080/email/PuN85Y1y/html', '2020-05-29 12:20:35', '2020-05-29 12:20:35'),
(213, 'http://myhouse.com/', '2020-05-29 12:31:46', '2020-05-29 12:31:46'),
(214, 'http://myhouse.com/confirm/gjacxkson@gmail.com', '2020-05-29 12:34:48', '2020-05-29 12:34:48'),
(215, 'http://localhost:1080/email/vJE0pc7b/html', '2020-05-29 12:35:22', '2020-05-29 12:35:22'),
(216, 'http://localhost:1080/email/vJE0pc7b/html', '2020-05-29 12:38:47', '2020-05-29 12:38:47'),
(217, 'http://localhost:1080/email/vJE0pc7b/html', '2020-05-29 12:38:49', '2020-05-29 12:38:49'),
(218, 'http://myhouse.com/connexion', '2020-05-29 12:38:50', '2020-05-29 12:38:50'),
(219, 'http://myhouse.com/connexion', '2020-05-29 12:38:53', '2020-05-29 12:38:53'),
(220, 'http://myhouse.com/', '2020-05-29 12:46:10', '2020-05-29 12:46:10'),
(221, 'http://myhouse.com/forgot', '2020-05-29 12:48:34', '2020-05-29 12:48:34'),
(222, 'http://myhouse.com/', '2020-05-29 13:24:43', '2020-05-29 13:24:43'),
(223, 'http://myhouse.com/menu/charte/particulier', '2020-05-29 13:30:30', '2020-05-29 13:30:30'),
(224, 'http://myhouse.com/menu/charte/particulier', '2020-05-29 13:30:35', '2020-05-29 13:30:35'),
(225, 'http://myhouse.com/', '2020-05-29 13:40:42', '2020-05-29 13:40:42'),
(226, 'http://myhouse.com/menu/faq/particulier', '2020-05-29 13:40:53', '2020-05-29 13:40:53'),
(227, 'http://myhouse.com/menu/faq/particulier', '2020-05-29 13:41:04', '2020-05-29 13:41:04'),
(228, 'http://myhouse.com/menu/charte/particulier', '2020-05-29 13:41:26', '2020-05-29 13:41:26'),
(229, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-29 13:44:01', '2020-05-29 13:44:01'),
(230, 'http://myhouse.com/', '2020-05-29 14:34:09', '2020-05-29 14:34:09'),
(231, 'http://localhost:1080/email/MKDAva75/html', '2020-05-29 14:35:26', '2020-05-29 14:35:26'),
(232, 'http://myhouse.com/confirm/fddf@df.fg', '2020-05-29 14:45:22', '2020-05-29 14:45:22'),
(233, 'http://localhost:1080/email/fcHBpyDJ/html', '2020-05-29 14:46:24', '2020-05-29 14:46:24'),
(234, 'http://192.168.1.11/', '2020-05-29 14:51:08', '2020-05-29 14:51:08'),
(235, 'http://myhouse.com/', '2020-05-29 14:51:18', '2020-05-29 14:51:18'),
(236, 'http://myhouse.com/connexion', '2020-05-29 14:51:20', '2020-05-29 14:51:20'),
(237, 'http://myhouse.com/connexion', '2020-05-29 14:51:22', '2020-05-29 14:51:22'),
(238, 'http://myhouse.com/', '2020-05-29 14:51:36', '2020-05-29 14:51:36'),
(239, 'http://myhouse.com/', '2020-05-29 14:51:59', '2020-05-29 14:51:59'),
(240, 'http://myhouse.com/', '2020-05-29 15:01:12', '2020-05-29 15:01:12'),
(241, 'http://myhouse.com/', '2020-05-29 15:01:22', '2020-05-29 15:01:22'),
(242, 'http://localhost:1080/email/VYNjWlXZ/html', '2020-05-29 15:02:06', '2020-05-29 15:02:06'),
(243, 'http://localhost:1080/email/VYNjWlXZ/html', '2020-05-29 15:04:39', '2020-05-29 15:04:39'),
(244, 'http://myhouse.com/', '2020-05-29 15:08:03', '2020-05-29 15:08:03'),
(245, 'http://myhouse.com/', '2020-05-29 15:16:18', '2020-05-29 15:16:18'),
(246, 'http://myhouse.com/', '2020-05-29 15:16:38', '2020-05-29 15:16:38'),
(247, 'http://myhouse.com/connexion', '2020-05-29 15:17:55', '2020-05-29 15:17:55'),
(248, 'http://myhouse.com/', '2020-05-29 18:58:37', '2020-05-29 18:58:37'),
(249, 'http://myhouse.com/', '2020-05-29 21:27:02', '2020-05-29 21:27:02'),
(250, 'http://myhouse.com/connexion?click=click', '2020-05-29 21:27:06', '2020-05-29 21:27:06'),
(251, 'http://myhouse.com/connexion', '2020-05-29 21:27:49', '2020-05-29 21:27:49'),
(252, 'http://myhouse.com/', '2020-05-29 22:32:33', '2020-05-29 22:32:33'),
(253, 'http://myhouse.com/', '2020-05-30 18:52:12', '2020-05-30 18:52:12'),
(254, 'http://myhouse.com/connexion?click=click', '2020-05-30 18:52:17', '2020-05-30 18:52:17'),
(255, 'http://myhouse.com/', '2020-05-31 14:25:35', '2020-05-31 14:25:35'),
(256, 'http://myhouse.com/connexion?click=click', '2020-05-31 14:26:13', '2020-05-31 14:26:13'),
(257, 'http://myhouse.com/connexion?click=click', '2020-05-31 14:26:36', '2020-05-31 14:26:36'),
(258, 'http://myhouse.com/connexion?click=click', '2020-05-31 14:26:59', '2020-05-31 14:26:59'),
(259, 'http://myhouse.com/inscription', '2020-05-31 14:27:58', '2020-05-31 14:27:58'),
(260, 'http://myhouse.com/', '2020-06-01 09:14:26', '2020-06-01 09:14:26'),
(261, 'http://myhouse.com/recherche/mixte?location=Casablanca&page=particuliers', '2020-06-01 09:17:57', '2020-06-01 09:17:57'),
(262, 'http://myhouse.com/forgot', '2020-06-01 09:20:28', '2020-06-01 09:20:28'),
(263, 'http://myhouse.com/confirm/gjacksong@gmail.com', '2020-06-01 09:31:08', '2020-06-01 09:31:08'),
(264, 'http://myhouse.com/forgot', '2020-06-01 09:45:33', '2020-06-01 09:45:33'),
(265, 'http://myhouse.com/forgot', '2020-06-01 10:17:17', '2020-06-01 10:17:17'),
(266, 'http://myhouse.com/sujet/deposer/pricing', '2020-06-01 10:17:25', '2020-06-01 10:17:25'),
(267, 'http://myhouse.com/connexion?click=click', '2020-06-01 10:17:29', '2020-06-01 10:17:29'),
(268, 'http://myhouse.com/connexion?click=click', '2020-06-01 10:17:53', '2020-06-01 10:17:53'),
(269, 'http://myhouse.com/connexion?click=click', '2020-06-01 10:17:58', '2020-06-01 10:17:58'),
(270, 'http://myhouse.com/connexion?click=click', '2020-06-01 10:18:06', '2020-06-01 10:18:06'),
(271, 'http://myhouse.com/connexion?click=click', '2020-06-01 10:21:34', '2020-06-01 10:21:34'),
(272, 'http://myhouse.com/forgot', '2020-06-01 12:45:06', '2020-06-01 12:45:06'),
(273, 'http://myhouse.com/confirm/gg@gg.ma', '2020-06-01 12:47:19', '2020-06-01 12:47:19'),
(274, 'http://myhouse.com/forgot', '2020-06-01 12:57:03', '2020-06-01 12:57:03'),
(275, 'http://myhouse.com/inscription', '2020-06-01 13:08:48', '2020-06-01 13:08:48'),
(276, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:08:50', '2020-06-01 13:08:50'),
(277, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:08:53', '2020-06-01 13:08:53'),
(278, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:09:00', '2020-06-01 13:09:00'),
(279, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:19:46', '2020-06-01 13:19:46'),
(280, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:19:55', '2020-06-01 13:19:55'),
(281, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:24:10', '2020-06-01 13:24:10'),
(282, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:24:13', '2020-06-01 13:24:13'),
(283, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:24:21', '2020-06-01 13:24:21'),
(284, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:27:31', '2020-06-01 13:27:31'),
(285, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:27:33', '2020-06-01 13:27:33'),
(286, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:27:35', '2020-06-01 13:27:35'),
(287, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:27:43', '2020-06-01 13:27:43'),
(288, 'http://myhouse.com/', '2020-06-01 13:27:53', '2020-06-01 13:27:53'),
(289, 'http://myhouse.com/sujet/deposer/pricing', '2020-06-01 13:28:21', '2020-06-01 13:28:21'),
(290, 'http://myhouse.com/sujet/deposer/pricing', '2020-06-01 13:28:21', '2020-06-01 13:28:21'),
(291, 'http://myhouse.com/blog?click=click', '2020-06-01 13:28:36', '2020-06-01 13:28:36'),
(292, 'http://myhouse.com/blog?click=click', '2020-06-01 13:28:41', '2020-06-01 13:28:41'),
(293, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:28:44', '2020-06-01 13:28:44'),
(294, 'http://myhouse.com/connexion?click=click', '2020-06-01 13:28:47', '2020-06-01 13:28:47'),
(295, 'http://myhouse.com/forgot', '2020-06-01 13:28:56', '2020-06-01 13:28:56'),
(296, 'http://myhouse.com/blog?click=click', '2020-06-01 13:31:03', '2020-06-01 13:31:03'),
(297, 'http://myhouse.com/', '2020-06-01 15:05:23', '2020-06-01 15:05:23'),
(298, 'http://myhouse.com/', '2020-06-01 16:11:03', '2020-06-01 16:11:03'),
(299, 'http://myhouse.com/', '2020-06-01 16:11:04', '2020-06-01 16:11:04'),
(300, 'http://myhouse.com/', '2020-06-01 16:11:45', '2020-06-01 16:11:45'),
(301, 'http://myhouse.com/forgot', '2020-06-01 16:23:13', '2020-06-01 16:23:13'),
(302, 'http://myhouse.com/forgot', '2020-06-01 16:23:16', '2020-06-01 16:23:16'),
(303, 'http://myhouse.com/forgot', '2020-06-01 16:23:22', '2020-06-01 16:23:22'),
(304, 'http://myhouse.com/forgot', '2020-06-01 16:23:53', '2020-06-01 16:23:53'),
(305, 'http://myhouse.com/forgot', '2020-06-01 16:26:02', '2020-06-01 16:26:02'),
(306, 'http://myhouse.com/forgot', '2020-06-01 16:26:12', '2020-06-01 16:26:12'),
(307, 'http://myhouse.com/forgot', '2020-06-01 16:27:01', '2020-06-01 16:27:01'),
(308, 'http://myhouse.com/connexion?click=click', '2020-06-01 16:27:34', '2020-06-01 16:27:34'),
(309, 'http://myhouse.com/connexion?click=click', '2020-06-01 16:27:39', '2020-06-01 16:27:39'),
(310, 'http://myhouse.com/connexion?click=click', '2020-06-01 16:30:42', '2020-06-01 16:30:42'),
(311, 'http://myhouse.com//password/reset/3508d4dded126759e26ccaf3117315c05e25b807aa52aa356e7ea6b9c687bfde', '2020-06-01 16:35:08', '2020-06-01 16:35:08'),
(312, 'http://myhouse.com/inscription', '2020-06-01 16:38:42', '2020-06-01 16:38:42'),
(313, 'http://myhouse.com/inscription', '2020-06-01 16:40:34', '2020-06-01 16:40:34'),
(314, 'http://myhouse.com/inscription', '2020-06-01 16:41:13', '2020-06-01 16:41:13'),
(315, 'http://myhouse.com/inscription', '2020-06-01 16:41:16', '2020-06-01 16:41:16'),
(316, 'http://myhouse.com/inscription', '2020-06-01 16:43:54', '2020-06-01 16:43:54'),
(317, 'http://myhouse.com/', '2020-06-01 16:47:25', '2020-06-01 16:47:25'),
(318, 'http://myhouse.com/', '2020-06-01 16:47:54', '2020-06-01 16:47:54'),
(319, 'http://myhouse.com/', '2020-06-01 16:47:57', '2020-06-01 16:47:57'),
(320, 'http://myhouse.com/', '2020-06-01 18:22:12', '2020-06-01 18:22:12'),
(321, 'http://myhouse.com/', '2020-06-01 18:23:39', '2020-06-01 18:23:39'),
(322, 'http://myhouse.com/recherche/mixte?location=&page=particuliers&location=Casablanca', '2020-06-01 18:28:33', '2020-06-01 18:28:33'),
(323, 'http://myhouse.local/', '2020-06-01 19:03:18', '2020-06-01 19:03:18'),
(324, 'http://myhouse.local/', '2020-06-01 19:03:59', '2020-06-01 19:03:59'),
(325, 'http://myhouse.local/connexion?click=click', '2020-06-01 19:04:21', '2020-06-01 19:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sujet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `sujet`, `contenu`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'je n\'arrive', 'fggfhjgjhf', 1, '2020-05-13 15:15:50', '2020-05-13 15:15:50'),
(2, 'Sujet', 'unde dejhdqshjdjh', 1, '2020-05-29 18:31:56', '2020-05-29 18:31:56'),
(3, 'dfbhfdsbdfr', 'drbdfsrbfdsbfdsbf', 1, '2020-05-29 18:33:43', '2020-05-29 18:33:43'),
(4, 'fthntert', 'hdtfhdrfhbred', 1, '2020-05-29 18:37:35', '2020-05-29 18:37:35'),
(5, 'fndtfdfndf', 'dfnfdsndsfrnfdsn', 1, '2020-05-29 18:38:01', '2020-05-29 18:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `entreprises`
--

CREATE TABLE `entreprises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_un` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_deux` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_trois` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_postal` double DEFAULT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siteweb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entreprises`
--

INSERT INTO `entreprises` (`id`, `nom`, `ville`, `adresse`, `telephone_un`, `telephone_deux`, `telephone_trois`, `email`, `pays`, `code_postal`, `images`, `logo`, `siteweb`, `user_id`, `created_at`, `updated_at`, `description`, `image`) VALUES
(8, 'Geomark', 'Casablanca', '11 rue de libourne', '053310334', '0533100345', '0675954410', 'contact@geomark.ma', 'Maroc', 51100, '1589068313.jpg', NULL, 'www.geomark.ma', 1, '2020-05-09 23:51:53', '2020-05-12 11:03:49', '{\"fr\":\"Une autre description de test pour savoir\"}', '118594458.jpg'),
(9, 'Kmart', 'New york', '11 main street', '+12054412985', '+125001215525', '+21012252256', 'contact@kmart.com', 'Usa', 10001, '1589131808.jpg', NULL, 'www.kmart.us', 1, '2020-05-10 17:30:08', '2020-05-12 11:36:55', '{\"fr\":\"Une petite description\"}', 'c04a4a356eb6a528db3fadbfb01fa55c.jpg'),
(10, 'Geomark', 'Casablanca', '11 rue de libourne', '053310334', '063310035', '063365501', 'contact@geomark.ma', 'maroc', 51102002, '1.jpg', NULL, 'www.geomark.ma', 1, '2020-05-11 09:33:30', '2020-05-11 09:33:30', NULL, NULL),
(11, 'Geomark', 'Casablanca', '11 rue de libourne', '053310334', '063310035', '063365501', 'contact@geomark.ma', 'maroc', 51102002, '1.jpg', NULL, 'www.geomark.ma', 1, '2020-05-11 09:35:58', '2020-05-11 09:35:58', NULL, NULL),
(12, 'Google', 'New york', '11 main street', '+1225540045', '05221102265', '+1255205525', 'contact@google.com', 'Maroc', 25544, '865862dd314f35389cd9b61d81099030.jpg', NULL, 'www.google.com', 1, '2020-05-11 09:46:22', '2020-05-11 09:46:22', NULL, NULL),
(14, 'Anna Inc', 'New york', '17 Main street', '+1223350112', '+212675901633', '+1250045115', 'contact@anna.com', 'Maroc', 51100, '9feed1210b9ba76a2801867ffb7dba9a.jpg', NULL, 'www.annainc.com', 1, '2020-05-12 19:07:57', '2020-05-12 19:07:57', NULL, NULL),
(15, 'Geomark', 'Tanger', '13, Rue Ibn Khattab, résidence Basma, impasse du beaujour', '0667676756', '06787878', '0654545454', 'askfdedfe@gmail.com', 'maroc', 56789, '9de6b09fdfdca1d665f6cb2df5843670.jpg', NULL, 'geomark', 1, '2020-05-12 22:22:23', '2020-05-12 22:22:23', NULL, NULL),
(20, 'Aspcom', 'New delhi', '78 Main street', '+45710000251', '+457122002555', '+45710252512', 'contact@aspcom.com', 'Inde', 330014, 'e41676a97b6af4b500839c15ae471ab6.jpg', NULL, 'www.aspcom.com', 1, '2020-05-13 10:32:39', '2020-05-13 10:32:39', NULL, NULL),
(21, 'ththtte', 'he', 'eher', '64654654654', NULL, NULL, 'erherh@eh.eh', 'rgrzgzerg', NULL, '394f271e76ec02dcc31ed95228a66dfe.jpg', NULL, NULL, 1, '2020-05-13 12:39:16', '2020-05-13 12:39:16', NULL, NULL),
(22, 'Geomark', 'Casablanca', '11 rue de libourne', '+212675901394', NULL, NULL, 'contact@geomark.ma', 'Maroc', 25000, '5c5ccfbfde402c4e971ef6b76f038b92.jpg', NULL, 'www.geomark.ma', 2, '2020-05-13 15:43:55', '2020-05-13 15:43:55', NULL, NULL),
(23, 'gEOMARK', 'Casablanca', '112 rue de libourne', '0675901394', NULL, NULL, 'contact@geomark.ma', 'Maroc', 2500, '5b347beb0d96428527b6de3f6a93807a.jpg', NULL, 'www.geomark.ma', 1, '2020-05-14 14:13:26', '2020-05-14 14:13:26', NULL, NULL),
(24, 'Geomark', 'Casablanca', '11 rue de libourne', '053310334', '0533120020', '053310224', 'contact@geo.ma', 'Maroc', 51102, '1589467376.jpg', NULL, 'www.gers.ma', 1, '2020-05-14 14:42:56', '2020-05-14 14:42:56', NULL, NULL),
(25, 'fggfdgf', 'jknbkj', 'fggf', '54736736278', NULL, NULL, 'gfhg@hfdhg', 'ghhghg', NULL, '2eb4406c3a17b4c28c8b12289c3303c3.jpg', NULL, NULL, 1, '2020-05-15 09:54:24', '2020-05-15 09:54:24', NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_urls`
--

CREATE TABLE `menu_urls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_urls`
--

INSERT INTO `menu_urls` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'http://myhouse.com/menu/particulier/annonces', '2020-04-24 20:13:37', '2020-04-24 20:13:37'),
(2, 'http://myhouse.com/sujet/deposer/pricing', '2020-04-24 21:51:22', '2020-04-24 21:51:22'),
(3, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers', '2020-04-24 23:58:00', '2020-04-24 23:58:00'),
(4, 'http://myhouse.com/', '2020-04-25 01:21:04', '2020-04-25 01:21:04'),
(5, 'http://myhouse.com/resultat/particuliers/appartement-1', '2020-04-25 12:04:32', '2020-04-25 12:04:32'),
(6, 'http://myhouse.com/', '2020-04-29 09:06:11', '2020-04-29 09:06:11'),
(7, 'http://myhouse.com/', '2020-04-29 10:00:29', '2020-04-29 10:00:29'),
(8, 'http://myhouse.com/resultat/particuliers/appartement-1?hour=05%3A03%3A03', '2020-05-01 20:18:07', '2020-05-01 20:18:07'),
(9, 'http://myhouse.com/resultat/particuliers/appartement-1', '2020-05-02 11:43:33', '2020-05-02 11:43:33'),
(10, 'http://myhouse.com/resultat/particuliers/appartement-1', '2020-05-02 11:46:53', '2020-05-02 11:46:53'),
(11, 'http://myhouse.com/connexion', '2020-05-04 08:42:10', '2020-05-04 08:42:10'),
(12, 'http://myhouse.com/', '2020-05-04 15:38:26', '2020-05-04 15:38:26'),
(13, 'http://myhouse.com/sujet/deposer/particulier/update/1?venteActif=on&last_id=AK4rkMK6qehgbtgK0&man1=1&man2=000&man3=000&loyerm1=&loyerm2=&loyerj1=&loyerj2=&charge1=&charge2=&echange_periode_un=&echange_periode_deux=', '2020-05-04 19:10:33', '2020-05-04 19:10:33'),
(14, 'http://myhouse.com/sujet/deposer/particulier/update/1?venteActif=on&last_id=A874LGOoE9zuJwadl&man1=200&man2=000&man3=000&loyerm1=&loyerm2=&loyerj1=&loyerj2=&charge1=&charge2=&echange_periode_un=&echange_periode_deux=', '2020-05-04 19:11:00', '2020-05-04 19:11:00'),
(15, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-04 19:56:56', '2020-05-04 19:56:56'),
(16, 'http://myhouse.com/connexion', '2020-05-05 08:41:56', '2020-05-05 08:41:56'),
(17, 'http://myhouse.com/', '2020-05-05 10:30:48', '2020-05-05 10:30:48'),
(18, 'http://myhouse.com/resultat/particuliers/appartement-3', '2020-05-05 20:45:22', '2020-05-05 20:45:22'),
(19, 'http://myhouse.com/connexion', '2020-05-06 09:01:56', '2020-05-06 09:01:56'),
(20, 'http://myhouse.com/connexion', '2020-05-07 09:15:53', '2020-05-07 09:15:53'),
(21, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-07 09:17:53', '2020-05-07 09:17:53'),
(22, 'http://myhouse.com/', '2020-05-07 09:20:43', '2020-05-07 09:20:43'),
(23, 'http://myhouse.com/sujet/deposer/particulier/services', '2020-05-07 10:27:50', '2020-05-07 10:27:50'),
(24, 'http://myhouse.com/resultat/particuliers/appartement-2', '2020-05-07 20:03:34', '2020-05-07 20:03:34'),
(25, 'http://myhouse.com/connect/success', '2020-05-07 20:06:36', '2020-05-07 20:06:36'),
(26, 'http://myhouse.com/', '2020-05-07 20:24:45', '2020-05-07 20:24:45'),
(27, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-08 20:18:47', '2020-05-08 20:18:47'),
(28, 'http://myhouse.com/', '2020-05-08 21:13:29', '2020-05-08 21:13:29'),
(29, 'http://myhouse.com/sujet/deposer/particulier/type/14', '2020-05-08 21:20:06', '2020-05-08 21:20:06'),
(30, 'http://myhouse.com/sujet/deposer/particulier/type/14', '2020-05-08 21:20:26', '2020-05-08 21:20:26'),
(31, 'http://myhouse.com/sujet/deposer/particulier/type/14', '2020-05-08 21:24:49', '2020-05-08 21:24:49'),
(32, 'http://myhouse.com/sujet/deposer/particulier/type/14', '2020-05-08 21:43:08', '2020-05-08 21:43:08'),
(33, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-08 22:26:27', '2020-05-08 22:26:27'),
(34, 'http://myhouse.com/connexion', '2020-05-09 11:12:11', '2020-05-09 11:12:11'),
(35, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-09 11:33:25', '2020-05-09 11:33:25'),
(36, 'http://myhouse.com/', '2020-05-09 12:16:17', '2020-05-09 12:16:17'),
(37, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-09 12:26:56', '2020-05-09 12:26:56'),
(38, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-09 12:27:07', '2020-05-09 12:27:07'),
(39, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-09 12:28:12', '2020-05-09 12:28:12'),
(40, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-09 12:28:17', '2020-05-09 12:28:17'),
(41, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-09 12:32:20', '2020-05-09 12:32:20'),
(42, 'http://myhouse.com/sujet/deposer/particulier/edit/16', '2020-05-09 12:32:30', '2020-05-09 12:32:30'),
(43, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-09 12:32:52', '2020-05-09 12:32:52'),
(44, 'http://myhouse.com/sujet/deposer/particulier/services', '2020-05-09 12:33:05', '2020-05-09 12:33:05'),
(45, 'http://myhouse.com/sujet/deposer/particulier/services', '2020-05-09 12:33:19', '2020-05-09 12:33:19'),
(46, 'http://myhouse.com/sujet/deposer/particulier/update/16?venteActif=on&last_id=A9HbisJQ5TULvlf4g&man1=120&man2=000&man3=000&loyerm1=&loyerm2=&loyerj1=&loyerj2=&charge1=&charge2=&echange_periode_un=&echange_periode_deux=', '2020-05-09 12:33:35', '2020-05-09 12:33:35'),
(47, 'http://myhouse.com/sujet/deposer/particulier/description?id=16&type=local_industriel', '2020-05-09 12:34:15', '2020-05-09 12:34:15'),
(48, 'http://myhouse.com/sujet/deposer/particulier/description?id=16&type=local_industriel', '2020-05-09 12:34:46', '2020-05-09 12:34:46'),
(49, 'http://myhouse.com/sujet/deposer/particulier/description?id=16&type=local_industriel', '2020-05-09 13:18:44', '2020-05-09 13:18:44'),
(50, 'http://myhouse.com/menu/profile/particulier', '2020-05-09 14:03:49', '2020-05-09 14:03:49'),
(51, 'http://myhouse.com/connect/success', '2020-05-09 14:04:12', '2020-05-09 14:04:12'),
(52, 'http://myhouse.com/', '2020-05-09 15:54:59', '2020-05-09 15:54:59'),
(53, 'http://myhouse.com/', '2020-05-09 15:55:04', '2020-05-09 15:55:04'),
(54, 'http://myhouse.com/', '2020-05-09 15:55:08', '2020-05-09 15:55:08'),
(55, 'http://myhouse.com/menu/professionnel/backoffice', '2020-05-09 17:23:55', '2020-05-09 17:23:55'),
(56, 'http://myhouse.com/', '2020-05-09 17:41:44', '2020-05-09 17:41:44'),
(57, 'http://myhouse.com/', '2020-05-09 20:04:41', '2020-05-09 20:04:41'),
(58, 'http://myhouse.com/sujet/deposer/professionnel/payement?id=26&adresse=11+rue+de+libourne+casablanca&pays=maroc&ville=casablanca&quartier=mers+sultan', '2020-05-09 21:46:06', '2020-05-09 21:46:06'),
(59, 'http://myhouse.com/sujet/deposer/professionnel/payement?id=28&adresse=11+rue+de+libourne&pays=maroc&ville=casablanca&quartier=mers+sultan', '2020-05-10 14:15:06', '2020-05-10 14:15:06'),
(60, 'http://myhouse.com/sujet/deposer/professionnel/payement?id=28&adresse=11+rue+de+libourne&pays=maroc&ville=casablanca&quartier=mers+sultan', '2020-05-10 15:18:22', '2020-05-10 15:18:22'),
(61, 'http://myhouse.com/sujet/deposer/professionnel/payement?id=32&adresse=11+rue+de+libourne&pays=maroc&ville=casablanca&quartier=mers+sultan', '2020-05-10 17:48:15', '2020-05-10 17:48:15'),
(62, 'http://myhouse.com/menu/professionnel/interesse/professionnel', '2020-05-10 20:34:03', '2020-05-10 20:34:03'),
(63, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers&location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29', '2020-05-10 22:39:43', '2020-05-10 22:39:43'),
(64, 'http://myhouse.com/', '2020-05-11 10:06:33', '2020-05-11 10:06:33'),
(65, 'http://myhouse.com/sujet/deposer/particulier/description?id=17&type=appartement', '2020-05-11 10:27:40', '2020-05-11 10:27:40'),
(66, 'http://myhouse.com/menu/professionnel/backoffice/campaign/push', '2020-05-11 11:35:23', '2020-05-11 11:35:23'),
(67, 'http://myhouse.com/', '2020-05-11 12:47:35', '2020-05-11 12:47:35'),
(68, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-11 12:51:59', '2020-05-11 12:51:59'),
(69, 'http://myhouse.com/', '2020-05-11 14:06:19', '2020-05-11 14:06:19'),
(70, 'http://myhouse.com/', '2020-05-11 17:01:00', '2020-05-11 17:01:00'),
(71, 'http://myhouse.com/menu/professionnel/backoffice/campaign', '2020-05-12 15:31:32', '2020-05-12 15:31:32'),
(72, 'http://myhouse.com/menu/professionnel/backoffice', '2020-05-12 15:56:40', '2020-05-12 15:56:40'),
(73, 'http://myhouse.com/', '2020-05-12 21:35:49', '2020-05-12 21:35:49'),
(74, 'http://myhouse.com/sujet/deposer/particulier/services', '2020-05-12 21:49:03', '2020-05-12 21:49:03'),
(75, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-12 22:03:14', '2020-05-12 22:03:14'),
(76, 'http://myhouse.com/', '2020-05-12 22:26:35', '2020-05-12 22:26:35'),
(77, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-13 12:37:45', '2020-05-13 12:37:45'),
(78, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-13 12:52:23', '2020-05-13 12:52:23'),
(79, 'http://myhouse.com/recherche/liste?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers&transaction=&prix=10%2C73&surface=10%2C85&word=', '2020-05-13 12:52:54', '2020-05-13 12:52:54'),
(80, 'http://myhouse.com/sujet/deposer/particulier/edit/22', '2020-05-13 14:04:01', '2020-05-13 14:04:01'),
(81, 'http://myhouse.com/sujet/deposer/particulier/edit/22', '2020-05-13 14:04:05', '2020-05-13 14:04:05'),
(82, 'http://myhouse.com/sujet/deposer/particulier/critere?id=22&appart_type_un=Livraison+imm%C3%A9diate+%28neuf%29&surface_habitable=120&appart_etage_niveau=Sur+un+niveau&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&place_vehicule=1+place%28s%29+v%C3%A9hicule&plage=00m&campagne=00m&montagne=00m&desedrt=1&desert=300m&spot_surf=00m&golf=00m&foret=00m&station_ski=00m&riviere=00m', '2020-05-13 14:07:35', '2020-05-13 14:07:35'),
(83, 'http://myhouse.com/menu/professionnel/backoffice', '2020-05-13 14:20:43', '2020-05-13 14:20:43'),
(84, 'http://myhouse.com/sujet/deposer/particulier/description?id=22&type=appartement', '2020-05-13 14:27:06', '2020-05-13 14:27:06'),
(85, 'http://myhouse.com/sujet/deposer/particulier/critere?id=22&appart_type_un=Livraison+imm%C3%A9diate+%28neuf%29&surface_habitable=120&appart_etage_niveau=Triplex&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&place_vehicule=1+place%28s%29+v%C3%A9hicule&plage=00m&campagne=00m&montagne=00m&desert=300m&spot_surf=00m&golf=00m&foret=00m&station_ski=00m&riviere=00m', '2020-05-13 14:29:04', '2020-05-13 14:29:04'),
(86, 'http://myhouse.com/sujet/deposer/particulier/critere?id=22&appart_type_un=Livraison+imm%C3%A9diate+%28neuf%29&surface_habitable=120&appart_etage_niveau=Triplex&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&place_vehicule=1+place%28s%29+v%C3%A9hicule&plage=00m&campagne=00m&montagne=00m&desert=300m&spot_surf=00m&golf=00m&foret=00m&station_ski=00m&riviere=00m', '2020-05-13 14:29:31', '2020-05-13 14:29:31'),
(87, 'http://myhouse.com/sujet/deposer/particulier/critere?id=22&appart_type_un=Livraison+imm%C3%A9diate+%28neuf%29&surface_habitable=120&appart_etage_niveau=Triplex&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&place_vehicule=1+place%28s%29+v%C3%A9hicule&plage=00m&campagne=00m&montagne=00m&desert=300m&spot_surf=00m&golf=00m&foret=00m&station_ski=00m&riviere=00m', '2020-05-13 14:31:09', '2020-05-13 14:31:09'),
(88, 'http://myhouse.com/sujet/deposer/particulier/critere?id=22&appart_type_un=Livraison+imm%C3%A9diate+%28neuf%29&surface_habitable=120&appart_etage_niveau=Triplex&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&place_vehicule=1+place%28s%29+v%C3%A9hicule&plage=00m&campagne=00m&montagne=00m&desert=300m&spot_surf=00m&golf=00m&foret=00m&station_ski=00m&riviere=00m', '2020-05-13 14:31:40', '2020-05-13 14:31:40'),
(89, 'http://myhouse.com/sujet/deposer/particulier/description?id=22&type=appartement', '2020-05-13 14:48:57', '2020-05-13 14:48:57'),
(90, 'http://myhouse.com/sujet/deposer/particulier/edit/20', '2020-05-13 14:49:10', '2020-05-13 14:49:10'),
(91, 'http://myhouse.com/sujet/deposer/particulier/services', '2020-05-13 14:58:10', '2020-05-13 14:58:10'),
(92, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-13 15:05:30', '2020-05-13 15:05:30'),
(93, 'http://myhouse.com/menu/profile/particulier', '2020-05-13 15:11:49', '2020-05-13 15:11:49'),
(94, 'http://myhouse.com/sujet/deposer/professionnel/services', '2020-05-13 15:40:06', '2020-05-13 15:40:06'),
(95, 'http://myhouse.com/sujet/deposer/professionnel/critere?_token=0YZ12bnOrTX0LQHWg5gHF4ZMLA3EaqY81K5YxspV&id=41&appart_type_un=Livraison+imm%C3%A9diate+%28neuf%29&surface_habitable=159%2C50&zone_disponible=Implant%C3%A9+dans+un+Centre+d%27affaires&appart_etage_nombre=Situ%C3%A9+au+5%C3%A8me+%C3%A9tage&nombre_piece=5+pi%C3%A8ce%28s%29&hauteur_sous_plafond=3%2C75&internet=1&terrasses=3+terrasse%28s%29&balcons=4+balcon%28s%29&chauffe_eau=1&coin_cuisine=1&climatisation=1&gardiennage=1&place_vehicule=1+place%28s%29+v%C3%A9hicule&ascenseur=1&monte_charge=1&espace_vert=1', '2020-05-13 15:46:20', '2020-05-13 15:46:20'),
(96, 'http://myhouse.com/', '2020-05-13 16:08:55', '2020-05-13 16:08:55'),
(97, 'http://myhouse.com/sujet/deposer/particulier/update/13?venteActif=on&last_id=AfdosKzAN8grGCGlt&man1=120&man2=000&man3=000&loyerm1=&loyerm2=&loyerj1=&loyerj2=&charge1=&charge2=&echange_periode_un=&echange_periode_deux=', '2020-05-13 16:09:19', '2020-05-13 16:09:19'),
(98, 'http://myhouse.com/', '2020-05-13 20:46:17', '2020-05-13 20:46:17'),
(99, 'http://myhouse.com/forgot', '2020-05-13 20:52:02', '2020-05-13 20:52:02'),
(100, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=professionnels', '2020-05-13 20:56:50', '2020-05-13 20:56:50'),
(101, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-14 12:41:08', '2020-05-14 12:41:08'),
(102, 'http://myhouse.com/sujet/deposer/particulier/edit/25', '2020-05-14 13:05:01', '2020-05-14 13:05:01'),
(103, 'http://myhouse.com/sujet/deposer/particulier/edit/20', '2020-05-14 13:07:23', '2020-05-14 13:07:23'),
(104, 'http://myhouse.com/sujet/deposer/particulier/edit/20', '2020-05-14 13:07:35', '2020-05-14 13:07:35'),
(105, 'http://myhouse.com/sujet/deposer/particulier/edit/25', '2020-05-14 13:10:01', '2020-05-14 13:10:01'),
(106, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-14 13:45:56', '2020-05-14 13:45:56'),
(107, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-14 13:51:53', '2020-05-14 13:51:53'),
(108, 'http://myhouse.com/sujet/deposer/particulier/services', '2020-05-15 09:25:55', '2020-05-15 09:25:55'),
(109, 'http://myhouse.com/sujet/deposer/professionnel/transaction', '2020-05-15 09:54:33', '2020-05-15 09:54:33'),
(110, 'http://myhouse.com/', '2020-05-15 10:55:49', '2020-05-15 10:55:49'),
(111, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-15 22:10:29', '2020-05-15 22:10:29'),
(112, 'http://myhouse.com/connexion', '2020-05-16 10:04:25', '2020-05-16 10:04:25'),
(113, 'http://myhouse.com/', '2020-05-21 10:34:24', '2020-05-21 10:34:24'),
(114, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-21 13:13:50', '2020-05-21 13:13:50'),
(115, 'http://myhouse.com/sujet/deposer/particulier/upload/93', '2020-05-21 17:24:41', '2020-05-21 17:24:41'),
(116, 'http://myhouse.com/connect/success', '2020-05-21 17:25:13', '2020-05-21 17:25:13'),
(117, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-21 17:27:52', '2020-05-21 17:27:52'),
(118, 'http://myhouse.com/', '2020-05-21 18:30:08', '2020-05-21 18:30:08'),
(119, 'http://myhouse.com/connexion', '2020-05-22 09:15:35', '2020-05-22 09:15:35'),
(120, 'http://myhouse.com/', '2020-05-22 14:56:10', '2020-05-22 14:56:10'),
(121, 'http://myhouse.com/', '2020-05-22 14:56:21', '2020-05-22 14:56:21'),
(122, 'http://myhouse.com/', '2020-05-22 14:56:33', '2020-05-22 14:56:33'),
(123, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-23 19:02:42', '2020-05-23 19:02:42'),
(124, 'http://myhouse.com/connect/success', '2020-05-23 21:17:05', '2020-05-23 21:17:05'),
(125, 'http://myhouse.com/', '2020-05-23 21:31:05', '2020-05-23 21:31:05'),
(126, 'http://myhouse.com/sujet/deposer/particulier/edit/146', '2020-05-24 15:07:20', '2020-05-24 15:07:20'),
(127, 'http://myhouse.com/sujet/deposer/particulier/edit/146', '2020-05-24 15:08:10', '2020-05-24 15:08:10'),
(128, 'http://myhouse.com/sujet/deposer/particulier/edit/145', '2020-05-24 15:09:41', '2020-05-24 15:09:41'),
(129, 'http://myhouse.com/sujet/deposer/particulier/edit/145', '2020-05-24 15:09:49', '2020-05-24 15:09:49'),
(130, 'http://myhouse.com/sujet/deposer/particulier/edit/145', '2020-05-24 15:10:51', '2020-05-24 15:10:51'),
(131, 'http://myhouse.com/sujet/deposer/particulier/transaction', '2020-05-24 15:24:39', '2020-05-24 15:24:39'),
(132, 'http://myhouse.com/sujet/deposer/particulier/edit/150', '2020-05-24 15:29:10', '2020-05-24 15:29:10'),
(133, 'http://myhouse.com/sujet/deposer/particulier/services', '2020-05-24 15:29:38', '2020-05-24 15:29:38'),
(134, 'http://myhouse.com/sujet/deposer/particulier/edit/150', '2020-05-24 15:30:33', '2020-05-24 15:30:33'),
(135, 'http://myhouse.com/sujet/deposer/particulier/edit/149', '2020-05-24 15:31:18', '2020-05-24 15:31:18'),
(136, 'http://myhouse.com/', '2020-05-24 22:15:55', '2020-05-24 22:15:55'),
(137, 'http://myhouse.com/', '2020-05-24 23:00:56', '2020-05-24 23:00:56'),
(138, 'http://myhouse.com/connexion', '2020-05-24 23:01:42', '2020-05-24 23:01:42'),
(139, 'http://myhouse.com/connexion', '2020-05-24 23:01:57', '2020-05-24 23:01:57'),
(140, 'http://myhouse.com/', '2020-05-24 23:04:16', '2020-05-24 23:04:16'),
(141, 'http://myhouse.com/', '2020-05-25 10:25:59', '2020-05-25 10:25:59'),
(142, 'http://myhouse.com/', '2020-05-26 11:44:27', '2020-05-26 11:44:27'),
(143, 'http://myhouse.com/sujet/deposer/particulier/critere?id=193&appart_type_un=2%C3%A8me+main&surface_habitable=45&appart_etage_niveau=Sur+un+niveau&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&vente_meuble=1&vente_non_meuble=1&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&cour=1&climatisation=1&espace_vert=1&place_vehicule=1+place%28s%29+v%C3%A9hicule&box=1&terrain_sport=1&spa=1&ecole=1&shopping=1&cafeteriat=1&mplage=1&plage=1%2C1km&campagne=00m&mmontagne=1&montagne=400m&mdesert=1&desert=100m&mspot_surf=1&spot_surf=100m&mgolf=1&golf=200m&mforet=1&foret=1%2C7km&station_ski=00m&mriviere=1&riviere=50m', '2020-05-26 20:27:59', '2020-05-26 20:27:59'),
(144, 'http://myhouse.com/sujet/deposer/particulier/critere?id=193&appart_type_un=2%C3%A8me+main&surface_habitable=45&appart_etage_niveau=Sur+un+niveau&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&vente_meuble=1&vente_non_meuble=1&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&cour=1&climatisation=1&espace_vert=1&place_vehicule=1+place%28s%29+v%C3%A9hicule&box=1&terrain_sport=1&spa=1&ecole=1&shopping=1&cafeteriat=1&mplage=1&plage=1%2C1km&campagne=00m&mmontagne=1&montagne=400m&mdesert=1&desert=100m&mspot_surf=1&spot_surf=100m&mgolf=1&golf=200m&mforet=1&foret=1%2C7km&station_ski=00m&mriviere=1&riviere=50m', '2020-05-26 20:29:37', '2020-05-26 20:29:37'),
(145, 'http://myhouse.com/sujet/deposer/particulier/critere?id=193&appart_type_un=2%C3%A8me+main&surface_habitable=45&appart_etage_niveau=Sur+un+niveau&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&vente_meuble=1&vente_non_meuble=1&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&cour=1&climatisation=1&espace_vert=1&place_vehicule=1+place%28s%29+v%C3%A9hicule&box=1&terrain_sport=1&spa=1&ecole=1&shopping=1&cafeteriat=1&mplage=1&plage=1%2C1km&campagne=00m&mmontagne=1&montagne=400m&mdesert=1&desert=100m&mspot_surf=1&spot_surf=100m&mgolf=1&golf=200m&mforet=1&foret=1%2C7km&station_ski=00m&mriviere=1&riviere=50m', '2020-05-26 20:29:47', '2020-05-26 20:29:47'),
(146, 'http://myhouse.com/', '2020-05-26 21:49:12', '2020-05-26 21:49:12'),
(147, 'http://myhouse.com/', '2020-05-26 21:50:33', '2020-05-26 21:50:33'),
(148, 'http://myhouse.com/sujet/deposer/particulier/description?id=194&type=villa', '2020-05-27 09:17:41', '2020-05-27 09:17:41'),
(149, 'http://myhouse.com/sujet/deposer/particulier/description?id=194&type=villa', '2020-05-27 09:18:17', '2020-05-27 09:18:17'),
(150, 'http://myhouse.com/sujet/deposer/particulier/description?id=194&type=villa', '2020-05-27 09:19:10', '2020-05-27 09:19:10'),
(151, 'http://myhouse.com/sujet/deposer/particulier/type/195', '2020-05-27 14:12:35', '2020-05-27 14:12:35'),
(152, 'http://myhouse.com/sujet/deposer/particulier/type/196', '2020-05-27 14:18:59', '2020-05-27 14:18:59'),
(153, 'http://myhouse.com/sujet/deposer/particulier/edit/199', '2020-05-27 14:24:36', '2020-05-27 14:24:36'),
(154, 'http://myhouse.com/sujet/deposer/particulier/edit/227', '2020-05-27 15:38:09', '2020-05-27 15:38:09'),
(155, 'http://myhouse.com/sujet/deposer/particulier/edit/227', '2020-05-27 15:38:19', '2020-05-27 15:38:19'),
(156, 'http://myhouse.com/sujet/deposer/particulier/edit/227', '2020-05-27 15:38:28', '2020-05-27 15:38:28'),
(157, 'http://myhouse.com/sujet/deposer/particulier/edit/228', '2020-05-27 15:42:53', '2020-05-27 15:42:53'),
(158, 'http://myhouse.com/sujet/deposer/particulier/edit/228', '2020-05-27 15:43:44', '2020-05-27 15:43:44'),
(159, 'http://myhouse.com/sujet/deposer/particulier/description?id=228&type=appartement', '2020-05-27 15:46:12', '2020-05-27 15:46:12'),
(160, 'http://myhouse.com/sujet/deposer/particulier/description?id=229&type=appartement', '2020-05-27 15:52:51', '2020-05-27 15:52:51'),
(161, 'http://myhouse.com/sujet/deposer/particulier/critere?id=230&appart_type_un=2%C3%A8me+main&surface_habitable=450&appart_etage_niveau=Sur+un+niveau&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+am%C3%A9ricaine&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&cour=1&cheminee=1&place_vehicule=1+place%28s%29+v%C3%A9hicule&salle_fitness=1&ecole=1&mosquee=1&restaurent=1&cafeteriat=1&mplage=1&plage=500m&campagne=00m&mmontagne=1&montagne=1%2C2km&mdesert=1&desert=00m&mspot_surf=1&spot_surf=400m&golf=00m&foret=00m&mstation_ski=1&station_ski=200m&riviere=00m', '2020-05-27 16:00:03', '2020-05-27 16:00:03'),
(162, 'http://myhouse.com/sujet/deposer/particulier/critere?id=230&appart_type_un=2%C3%A8me+main&surface_habitable=450&appart_etage_niveau=Sur+un+niveau&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+am%C3%A9ricaine&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&cour=1&cheminee=1&place_vehicule=1+place%28s%29+v%C3%A9hicule&salle_fitness=1&ecole=1&mosquee=1&restaurent=1&cafeteriat=1&mplage=1&plage=500m&campagne=00m&mmontagne=1&montagne=1%2C2km&mdesert=1&desert=00m&mspot_surf=1&spot_surf=400m&golf=00m&foret=00m&mstation_ski=1&station_ski=200m&riviere=00m', '2020-05-27 16:00:09', '2020-05-27 16:00:09'),
(163, 'http://myhouse.com/sujet/deposer/particulier/showlocalisation/231', '2020-05-27 16:07:47', '2020-05-27 16:07:47'),
(164, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers', '2020-05-27 17:24:38', '2020-05-27 17:24:38'),
(165, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-27 17:30:07', '2020-05-27 17:30:07'),
(166, 'http://myhouse.com/', '2020-05-27 17:48:35', '2020-05-27 17:48:35'),
(167, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-27 17:51:05', '2020-05-27 17:51:05'),
(168, 'http://myhouse.com/', '2020-05-27 18:12:35', '2020-05-27 18:12:35'),
(169, 'http://myhouse.com/sujet/deposer/particulier/upload/232', '2020-05-27 18:28:43', '2020-05-27 18:28:43'),
(170, 'http://myhouse.com/sujet/deposer/particulier/critere?id=232&appart_type_un=2%C3%A8me+main&surface_habitable=400.4&appart_etage_niveau=Sur+un+niveau&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&vente_meuble=1&vente_non_meuble=1&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&jardin_privatif=1&cour=1&buanderie=1&cheminee=1&climatisation=1&chauffe_eau=1&espace_vert=1&gardiennage=1&place_vehicule=1+place%28s%29+v%C3%A9hicule&box=1&piscine=1&terrain_sport=1&salle_fitness=1&spa=1&superette=1&ecole=1&mosquee=1&shopping=1&restaurent=1&cafeteriat=1&mplage=1&plage=200m&mcampagne=1&campagne=400m&mmontagne=1&montagne=700m&mdesert=1&desert=700m&mspot_surf=1&spot_surf=900m&mgolf=1&golf=1%2C6km&mforet=1&foret=200m&mstation_ski=1&station_ski=1%2C5km&mriviere=1&riviere=1%2C1km', '2020-05-27 22:17:58', '2020-05-27 22:17:58'),
(171, 'http://myhouse.com/connexion', '2020-05-28 09:04:46', '2020-05-28 09:04:46'),
(172, 'http://myhouse.com/menu/particulier/annonces?user=particulier', '2020-05-28 09:06:01', '2020-05-28 09:06:01'),
(173, 'http://myhouse.com/menu/particulier/annonces', '2020-05-28 09:06:08', '2020-05-28 09:06:08'),
(174, 'http://myhouse.com/', '2020-05-28 09:08:22', '2020-05-28 09:08:22'),
(175, 'http://myhouse.com/sujet/deposer/particulier/showlocalisation/233', '2020-05-28 09:47:54', '2020-05-28 09:47:54'),
(176, 'http://myhouse.com/', '2020-05-28 11:34:56', '2020-05-28 11:34:56'),
(177, 'http://myhouse.com/sujet/deposer/particulier/transaction', '2020-05-28 11:39:24', '2020-05-28 11:39:24'),
(178, 'http://myhouse.com/sujet/deposer/particulier/showlocalisation/232', '2020-05-28 13:31:56', '2020-05-28 13:31:56'),
(179, 'http://myhouse.com/', '2020-05-28 14:10:57', '2020-05-28 14:10:57'),
(180, 'http://myhouse.com/sujet/deposer/particulier/update/234?locationActif=1&last_id=ApFrBXqXqmyoEJzTI&prix_vente=&prix_m=&loyerMois=on&prix_mois=4500&charges=oui', '2020-05-28 14:21:10', '2020-05-28 14:21:10'),
(181, 'http://myhouse.com/', '2020-05-28 14:29:37', '2020-05-28 14:29:37'),
(182, 'http://myhouse.com/', '2020-05-28 14:48:30', '2020-05-28 14:48:30'),
(183, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-28 16:12:03', '2020-05-28 16:12:03'),
(184, 'http://myhouse.com/sujet/deposer/particulier/showlocalisation/241', '2020-05-28 17:14:00', '2020-05-28 17:14:00'),
(185, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-28 17:22:16', '2020-05-28 17:22:16'),
(186, 'http://myhouse.com/sujet/deposer/particulier/update/238?locationActif=1&last_id=AwRpDhzuljsfJ4Vf7&prix_vente=&prix_m=&loyerMois=on&prix_mois=5000&loyerJour=on&prix_jour=600&charges=oui', '2020-05-28 18:08:14', '2020-05-28 18:08:14'),
(187, 'http://myhouse.com/sujet/deposer/particulier/update/240?echangeActif=1&last_id=APwaoNvt09zm39nhJ&prix_vente=&prix_m=&charge_copropriete=&echange_definitif=1&echange_provisoir=1&echange_periode_un=25%2F10%2F2020&echange_periode_deux=26%2F10%2F2020', '2020-05-28 18:20:16', '2020-05-28 18:20:16'),
(188, 'http://myhouse.com/', '2020-05-28 18:58:12', '2020-05-28 18:58:12'),
(189, 'http://myhouse.com/menu/particulier/annonces', '2020-05-28 19:10:27', '2020-05-28 19:10:27'),
(190, 'http://myhouse.com/recherche/mixte?location=Casablanca+-+Settat&page=particuliers', '2020-05-28 19:30:18', '2020-05-28 19:30:18'),
(191, 'http://myhouse.com/sujet/deposer/particulier/update/245?venteActif=1&locationActif=1&last_id=AzkKvSXcXhJJNfYRa&prix_vente=1.200.000&prix_m=500&loyerMois=on&prix_mois=6000&loyerJour=on&prix_jour=600&charge_copropriete=', '2020-05-28 20:19:36', '2020-05-28 20:19:36'),
(192, 'http://myhouse.com/sujet/deposer/particulier/update/245?venteActif=1&locationActif=1&last_id=AxU7JEKzl8rNDyaWX&prix_vente=1.200.000&prix_m=500&loyerMois=on&prix_mois=6000&charge_copropriete=', '2020-05-28 20:44:30', '2020-05-28 20:44:30'),
(193, 'http://myhouse.com/sujet/deposer/particulier/update/245?venteActif=1&locationActif=1&last_id=AjgQYmz8ECfPak1iO&prix_vente=1.200.000&prix_m=500&loyerMois=on&prix_mois=6000&charge_copropriete=', '2020-05-28 20:44:48', '2020-05-28 20:44:48'),
(194, 'http://myhouse.com/sujet/deposer/particulier/update/245?venteActif=1&locationActif=1&last_id=AC6koIUU3X1pKWcPM&prix_vente=1.200.000&prix_m=500&loyerMois=on&prix_mois=6000&loyerJour=on&prix_jour=60&charge_copropriete=', '2020-05-28 20:46:00', '2020-05-28 20:46:00'),
(195, 'http://myhouse.com/sujet/deposer/particulier/update/236?venteActif=1&locationActif=1&echangeActif=1&last_id=AdOk9ZULpAhYYRM2B&prix_vente=1.500.000&prix_m=80&loyerMois=on&prix_mois=6000&loyerJour=on&prix_jour=300&charges=oui&echange_definitif=1&echange_provisoir=1&echange_periode_un=25%2F10%2F2020&echange_periode_deux=26%2F10%2F2020', '2020-05-28 21:05:50', '2020-05-28 21:05:50'),
(196, 'http://myhouse.com/sujet/deposer/particulier/edit/236', '2020-05-28 21:06:23', '2020-05-28 21:06:23'),
(197, 'http://myhouse.com/connexion', '2020-05-29 08:07:21', '2020-05-29 08:07:21'),
(198, 'http://192.168.1.11/connect/success', '2020-05-29 08:14:48', '2020-05-29 08:14:48'),
(199, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-29 08:54:03', '2020-05-29 08:54:03'),
(200, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-29 09:46:06', '2020-05-29 09:46:06'),
(201, 'http://myhouse.com/sujet/deposer/particulier/update/247?venteActif=1&locationActif=1&echangeActif=1&last_id=AKAcHuO8gg5l99Kh5&prix_vente=1.200.000&prix_m=&loyerMois=on&prix_mois=5000&loyerJour=on&prix_jour=600&charge_copropriete=&echange_definitif=1&echange_provisoir=1&echange_periode_un=26%2F11%2F2021&echange_periode_deux=28%2F11%2F2021', '2020-05-29 09:51:41', '2020-05-29 09:51:41'),
(202, 'http://myhouse.com/sujet/deposer/particulier/edit/247', '2020-05-29 09:51:52', '2020-05-29 09:51:52'),
(203, 'http://myhouse.com/sujet/deposer/particulier/update/247?venteActif=1&locationActif=1&echangeActif=1&last_id=A7sTrISGhhVNxUB9M&prix_vente=400.000&prix_m=89&loyerMois=on&prix_mois=5000&loyerJour=on&prix_jour=600&charge_copropriete=&echange_definitif=1&echange_provisoir=1&echange_periode_un=26%2F11%2F2021&echange_periode_deux=28%2F11%2F2021', '2020-05-29 10:11:00', '2020-05-29 10:11:00'),
(204, 'http://myhouse.com/sujet/deposer/particulier/transaction', '2020-05-29 11:17:37', '2020-05-29 11:17:37'),
(205, 'http://192.168.43.6/sujet/deposer/particulier/success', '2020-05-29 12:26:03', '2020-05-29 12:26:03'),
(206, 'http://192.168.43.6/sujet/deposer/particulier/upload/250', '2020-05-29 12:30:51', '2020-05-29 12:30:51'),
(207, 'http://myhouse.com/connect/success', '2020-05-29 12:31:59', '2020-05-29 12:31:59'),
(208, 'http://myhouse.com/connexion', '2020-05-29 12:48:39', '2020-05-29 12:48:39'),
(209, 'http://myhouse.com/sujet/deposer/particulier/critere?id=251&appart_type_un=2%C3%A8me+main&surface_habitable=400&appart_etage_niveau=Sur+un+niveau&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+am%C3%A9ricaine&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&place_vehicule=1+place%28s%29+v%C3%A9hicule&mplage=1&plage=00m&mcampagne=1&campagne=00m&mmontagne=1&montagne=00m&mdesert=1&desert=00m&mspot_surf=1&spot_surf=00m&mgolf=1&golf=00m&mforet=1&foret=00m&mstation_ski=1&station_ski=00m&mriviere=1&riviere=00m', '2020-05-29 13:10:29', '2020-05-29 13:10:29'),
(210, 'http://myhouse.com/recherche/mixte?location=&page=professionnels&location=Casablanca', '2020-05-29 14:07:20', '2020-05-29 14:07:20'),
(211, 'http://myhouse.com/sujet/deposer/particulier/transaction', '2020-05-29 14:14:38', '2020-05-29 14:14:38'),
(212, 'http://myhouse.com/', '2020-05-29 14:22:47', '2020-05-29 14:22:47'),
(213, 'http://myhouse.com/', '2020-05-29 14:25:53', '2020-05-29 14:25:53'),
(214, 'http://myhouse.com/', '2020-05-29 14:28:05', '2020-05-29 14:28:05'),
(215, 'http://myhouse.com/recherche/mixte?location=Casablanca&page=particuliers', '2020-05-29 14:29:39', '2020-05-29 14:29:39'),
(216, 'http://myhouse.com/', '2020-05-29 14:33:07', '2020-05-29 14:33:07'),
(217, 'http://192.168.1.11/connect/success', '2020-05-29 14:51:02', '2020-05-29 14:51:02'),
(218, 'http://myhouse.com/connexion', '2020-05-29 17:13:45', '2020-05-29 17:13:45'),
(219, 'http://myhouse.com/recherche/liste?location=Casablanca&page=particuliers&transaction=achat&category=&prix=10%2C73&surface=10%2C85&word=', '2020-05-29 17:14:22', '2020-05-29 17:14:22'),
(220, 'http://myhouse.com/recherche/liste?location=Casablanca&page=particuliers&transaction=&prix=10%2C73&surface=10%2C85&word=', '2020-05-29 17:25:55', '2020-05-29 17:25:55'),
(221, 'http://myhouse.com/recherche/mixte?location=&page=particuliers&location=Casablanca', '2020-05-29 17:39:13', '2020-05-29 17:39:13'),
(222, 'http://myhouse.com/recherche/liste?location=Casablanca&page=particuliers&transaction=&prix=10%2C73&surface=10%2C85&word=', '2020-05-29 17:53:29', '2020-05-29 17:53:29'),
(223, 'http://myhouse.com/resultat/particuliers/garage-242', '2020-05-29 19:02:28', '2020-05-29 19:02:28'),
(224, 'http://myhouse.com/', '2020-05-29 19:03:26', '2020-05-29 19:03:26'),
(225, 'http://myhouse.com/', '2020-05-29 20:41:27', '2020-05-29 20:41:27'),
(226, 'http://myhouse.com/blog', '2020-05-29 21:04:37', '2020-05-29 21:04:37'),
(227, 'http://myhouse.com/recherche/mixte?location=Casablanca&page=particuliers', '2020-05-29 21:07:47', '2020-05-29 21:07:47'),
(228, 'http://myhouse.com/', '2020-05-29 21:40:45', '2020-05-29 21:40:45'),
(229, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-29 22:01:13', '2020-05-29 22:01:13'),
(230, 'http://myhouse.com/connexion', '2020-05-30 08:35:47', '2020-05-30 08:35:47'),
(231, 'http://myhouse.com/sujet/deposer/particulier/upload/248', '2020-05-30 10:24:48', '2020-05-30 10:24:48'),
(232, 'http://myhouse.com/', '2020-05-30 10:39:15', '2020-05-30 10:39:15'),
(233, 'http://myhouse.com/sujet/deposer/particulier/showlocalisation/248', '2020-05-30 11:22:20', '2020-05-30 11:22:20'),
(234, 'http://myhouse.com/recherche/liste?location=Casablanca&page=particuliers&transaction=&prix=10%2C73&surface=10%2C85&word=', '2020-05-30 11:46:10', '2020-05-30 11:46:10'),
(235, 'http://myhouse.com/', '2020-05-30 13:08:51', '2020-05-30 13:08:51'),
(236, 'http://myhouse.com/sujet/deposer/particulier/edit/236', '2020-05-30 13:14:31', '2020-05-30 13:14:31'),
(237, 'http://myhouse.com/', '2020-05-30 14:11:42', '2020-05-30 14:11:42'),
(238, 'http://myhouse.com/sujet/deposer/pricing', '2020-05-30 14:13:16', '2020-05-30 14:13:16'),
(239, 'http://myhouse.com/', '2020-05-30 14:32:00', '2020-05-30 14:32:00'),
(240, 'http://myhouse.com/', '2020-05-30 14:32:07', '2020-05-30 14:32:07'),
(241, 'http://myhouse.com/blog?click=click', '2020-05-30 14:32:19', '2020-05-30 14:32:19'),
(242, 'http://myhouse.com/sujet/deposer/particulier/edit/253', '2020-05-30 14:48:30', '2020-05-30 14:48:30'),
(243, 'http://myhouse.com/resultat/particuliers/riad-247', '2020-05-30 14:49:14', '2020-05-30 14:49:14'),
(244, 'http://myhouse.com/', '2020-05-30 16:16:07', '2020-05-30 16:16:07'),
(245, 'http://myhouse.com/', '2020-05-30 16:35:26', '2020-05-30 16:35:26'),
(246, 'http://myhouse.com/recherche/mixte?location=&page=particuliers&location=Impasse+Rue+la+Boule+F%C3%A9d%C3%A9rale', '2020-05-30 16:35:39', '2020-05-30 16:35:39'),
(247, 'http://myhouse.com/recherche/mixte?location=&page=particuliers&location=Casablanca', '2020-05-30 16:36:43', '2020-05-30 16:36:43'),
(248, 'http://myhouse.com/sujet/deposer/particulier/edit/255', '2020-05-30 16:41:38', '2020-05-30 16:41:38'),
(249, 'http://myhouse.com/recherche/mixte?location=Casablanca&page=particuliers', '2020-05-30 18:51:50', '2020-05-30 18:51:50'),
(250, 'http://myhouse.com/', '2020-05-30 18:58:04', '2020-05-30 18:58:04'),
(251, 'http://myhouse.com/sujet/deposer/particulier/description?id=256&type=villa', '2020-05-30 19:34:40', '2020-05-30 19:34:40'),
(252, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-30 19:46:50', '2020-05-30 19:46:50'),
(253, 'http://myhouse.com/recherche/mixte?location=Casablanca&page=particuliers', '2020-05-31 08:52:48', '2020-05-31 08:52:48'),
(254, 'http://myhouse.com/resultat/particuliers/local%20commercial-241', '2020-05-31 09:11:37', '2020-05-31 09:11:37'),
(255, 'http://myhouse.com/recherche/liste?location=Casablanca&page=particuliers&transaction=&prix=1%2C99000000000&surface=1%2C1000&word=', '2020-05-31 09:47:09', '2020-05-31 09:47:09'),
(256, 'http://myhouse.com/resultat/particuliers/immeuble-b%C3%A2timent-257', '2020-05-31 12:32:35', '2020-05-31 12:32:35'),
(257, 'http://127.0.0.1/connexion', '2020-05-31 14:56:39', '2020-05-31 14:56:39'),
(258, 'http://myhouse.com/connexion', '2020-05-31 18:46:42', '2020-05-31 18:46:42'),
(259, 'http://myhouse.com/recherche/mixte?location=&page=particuliers&location=Casablanca+-+Settat', '2020-05-31 18:54:41', '2020-05-31 18:54:41'),
(260, 'http://myhouse.com/sujet/deposer/particulier/update/248?venteActif=1&locationActif=1&echangeActif=1&last_id=AOaqFVCNGSfIwr6rj&prix_vente=12.000&prix_m=&loyerMois=on&prix_mois=8.000&loyerJour=on&prix_jour=89&charge_copropriete=&echange_definitif=1&echange_provisoir=1&echange_periode_un=30%2F10%2F2020&echange_periode_deux=31%2F10%2F2020', '2020-05-31 19:26:32', '2020-05-31 19:26:32'),
(261, 'http://myhouse.com/connexion', '2020-06-01 15:02:36', '2020-06-01 15:02:36'),
(262, 'http://myhouse.local/sujet/deposer/particulier/edit/266', '2020-06-01 20:14:31', '2020-06-01 20:14:31'),
(263, 'http://myhouse.local/sujet/deposer/pricing', '2020-06-01 21:59:17', '2020-06-01 21:59:17'),
(264, 'http://myhouse.local/recherche/mixte?location=Casablanca&page=particuliers&&category=commercial&prix=1%2C99000000000&surface=1%2C1000&prix=5&surface=5&word=', '2020-06-02 14:45:11', '2020-06-02 14:45:11'),
(265, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-02 16:57:45', '2020-06-02 16:57:45'),
(266, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-03 08:15:32', '2020-06-03 08:15:32'),
(267, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-03 09:22:15', '2020-06-03 09:22:15'),
(268, 'http://myhouse.local/recherche/mixte?location=&page=particuliers&location=Casablanca', '2020-06-03 12:24:34', '2020-06-03 12:24:34'),
(269, 'http://myhouse.local/', '2020-06-03 12:32:20', '2020-06-03 12:32:20'),
(270, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 08:27:20', '2020-06-04 08:27:20'),
(271, 'http://myhouse.local/recherche/mixte?location=Casablanca&page=particuliers', '2020-06-04 08:30:45', '2020-06-04 08:30:45'),
(272, 'http://myhouse.local/', '2020-06-04 08:31:56', '2020-06-04 08:31:56'),
(273, 'http://myhouse.local/', '2020-06-04 09:09:28', '2020-06-04 09:09:28'),
(274, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 10:55:18', '2020-06-04 10:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_id` bigint(20) UNSIGNED NOT NULL,
  `to_id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `read_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_06_03_154650_create_roles_table', 1),
(9, '2019_06_07_152143_add_fields_to_users', 1),
(69, '2019_06_18_084932_create_messages_table', 2),
(70, '2019_08_19_000000_create_failed_jobs_table', 2),
(71, '2020_03_06_085912_create_transactions_table', 2),
(72, '2020_03_06_094116_create_type_biens_table', 2),
(73, '2020_03_12_092150_create_particuliers_table', 2),
(74, '2020_03_21_173233_create_category_types_table', 2),
(75, '2020_03_27_121024_create_entreprises_table', 2),
(76, '2020_03_28_000037_create_professionnels_table', 2),
(77, '2020_03_29_152640_create_neufs_table', 2),
(78, '2020_03_29_152652_create_annonces_table', 2),
(79, '2020_03_31_020600_create_urls_table', 2),
(80, '2020_04_03_004511_create_contacts_table', 2),
(81, '2020_04_04_164056_create_bannieres_table', 2),
(82, '2020_04_05_130325_local', 2),
(83, '2020_04_05_130444_localisation', 2),
(84, '2020_04_05_130507_localization', 2),
(85, '2020_04_09_103615_create_menu_urls_table', 2),
(86, '2020_04_09_122135_create_particulier_interesses_table', 2),
(87, '2020_04_10_093622_terrassable', 2),
(88, '2020_04_10_105217_create_connect_urls_table', 2),
(89, '2020_04_11_190014_create_particulier_criteres_table', 2),
(90, '2020_04_13_134332_create_annonce_urls_table', 2),
(91, '2020_04_14_094928_dressing', 2),
(92, '2020_04_14_095018_dressings', 2),
(93, '2020_04_14_163654_portail', 2),
(94, '2020_04_14_163710_portails', 2),
(95, '2020_04_15_114645_page', 2),
(96, '2020_04_17_202728_uri', 2),
(97, '2020_04_18_220200_echange', 2),
(98, '2020_04_20_105801_usercritere', 2),
(99, '2020_04_29_112721_create_particulier_agendas_table', 3),
(101, '2020_05_06_213454_add_garage_particulier', 4),
(125, '2020_05_08_190800_add_field_professionnels', 5),
(126, '2020_05_09_114042_add_terrasse_to_particulier', 5),
(128, '2020_05_09_202737_create_professionnel_criteres_table', 6),
(129, '2020_05_10_180016_create_professionnel_interesses_table', 7),
(130, '2020_05_10_203816_create_professionnel_agendas_table', 8),
(131, '2020_05_11_232235_add_entreprise_professionnel', 9),
(132, '2020_05_12_095228_add_entreprise_fields', 9),
(133, '2020_05_12_111348_add_user_fields', 10),
(134, '2020_05_12_125709_create_pushes_table', 11),
(135, '2020_05_12_130047_create_promotions_table', 11),
(140, '2020_05_15_105725_add_price_pa', 12),
(141, '2020_05_15_105753_add_price_po', 12),
(144, '2020_05_23_101922_add_vente_non_meuble', 13),
(145, '2020_05_23_101939_add_vente_non_meubles', 13),
(171, '2020_05_23_112006_add_location_non_meuble', 14),
(172, '2020_05_23_112109_add_location_non_meubles', 14),
(173, '2020_05_24_203214_add_field_to_critere', 14),
(174, '2020_05_24_203322_add_field_to_criter', 14),
(175, '2020_05_25_103407_add_near_field', 15),
(176, '2020_05_25_103506_add_nears_field', 15),
(177, '2020_05_26_122127_add_portail_field', 16),
(178, '2020_05_26_122241_adds_portail_field', 16);

-- --------------------------------------------------------

--
-- Table structure for table `neufs`
--

CREATE TABLE `neufs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_projet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appartement` tinyint(1) NOT NULL DEFAULT 0,
  `villa` tinyint(1) NOT NULL DEFAULT 0,
  `maison` tinyint(1) NOT NULL DEFAULT 0,
  `riad` tinyint(1) NOT NULL DEFAULT 0,
  `chalet` tinyint(1) NOT NULL DEFAULT 0,
  `commerce` tinyint(1) NOT NULL DEFAULT 0,
  `bureau` tinyint(1) NOT NULL DEFAULT 0,
  `plateau` tinyint(1) NOT NULL DEFAULT 0,
  `residentiel` tinyint(1) NOT NULL DEFAULT 0,
  `commercial` tinyint(1) NOT NULL DEFAULT 0,
  `prix_vente_de_appartement` double DEFAULT NULL,
  `superficie_de_appartement` double DEFAULT NULL,
  `superficie_a_appartement` double DEFAULT NULL,
  `nombre_chambre_de_appartement` int(11) DEFAULT NULL,
  `nombre_chambre_a_appartement` int(11) DEFAULT NULL,
  `prix_vente_de_villa` double DEFAULT NULL,
  `superficie_de_villa` double DEFAULT NULL,
  `superficie_a_villa` double DEFAULT NULL,
  `nombre_chambre_de_villa` int(11) DEFAULT NULL,
  `nombre_chambre_a_villa` int(11) DEFAULT NULL,
  `prix_vente_de_maison` double DEFAULT NULL,
  `superficie_de_maison` double DEFAULT NULL,
  `superficie_a_maison` double DEFAULT NULL,
  `nombre_chambre_de_maison` int(11) DEFAULT NULL,
  `nombre_chambre_a_maison` int(11) DEFAULT NULL,
  `prix_vente_de_riad` double DEFAULT NULL,
  `superficie_de_riad` double DEFAULT NULL,
  `superficie_a_riad` double DEFAULT NULL,
  `nombre_chambre_de_riad` int(11) DEFAULT NULL,
  `nombre_chambre_a_riad` int(11) DEFAULT NULL,
  `prix_vente_de_chalet` double DEFAULT NULL,
  `superficie_de_chalet` double DEFAULT NULL,
  `superficie_a_chalet` double DEFAULT NULL,
  `nombre_chambre_de_chalet` int(11) DEFAULT NULL,
  `nombre_chambre_a_chalet` int(11) DEFAULT NULL,
  `prix_vente_de_commerce` double DEFAULT NULL,
  `superficie_de_commerce` double DEFAULT NULL,
  `superficie_a_commerce` double DEFAULT NULL,
  `prix_vente_de_bureau` double DEFAULT NULL,
  `superficie_de_bureau` double DEFAULT NULL,
  `superficie_a_bureau` double DEFAULT NULL,
  `prix_vente_de_plateau` double DEFAULT NULL,
  `superficie_de_plateau` double DEFAULT NULL,
  `superficie_a_plateau` double DEFAULT NULL,
  `prix_vente_de_residentiel` double DEFAULT NULL,
  `superficie_de_residentiel` double DEFAULT NULL,
  `superficie_a_residentiel` double DEFAULT NULL,
  `prix_vente_de_commercial` double DEFAULT NULL,
  `superficie_de_commercial` double DEFAULT NULL,
  `superficie_a_commercial` double DEFAULT NULL,
  `superficie` double DEFAULT NULL,
  `espace_vert` double DEFAULT NULL,
  `gardiennage` tinyint(1) NOT NULL DEFAULT 0,
  `air_de_jeu` tinyint(1) NOT NULL DEFAULT 0,
  `piscine` tinyint(1) NOT NULL DEFAULT 0,
  `terrain_sport` tinyint(1) NOT NULL DEFAULT 0,
  `salle_fitness` tinyint(1) NOT NULL DEFAULT 0,
  `spa` tinyint(1) NOT NULL DEFAULT 0,
  `superette` tinyint(1) NOT NULL DEFAULT 0,
  `ecole` tinyint(1) NOT NULL DEFAULT 0,
  `mosque` tinyint(1) NOT NULL DEFAULT 0,
  `shopping` tinyint(1) NOT NULL DEFAULT 0,
  `restaurant` tinyint(1) NOT NULL DEFAULT 0,
  `service_menage` tinyint(1) NOT NULL DEFAULT 0,
  `plage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campagne` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montagne` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desert` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spot_surf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foret` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `station_ski` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `riviere` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medias` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ville` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quartier` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `neufs`
--

INSERT INTO `neufs` (`id`, `nom_projet`, `last_id`, `appartement`, `villa`, `maison`, `riad`, `chalet`, `commerce`, `bureau`, `plateau`, `residentiel`, `commercial`, `prix_vente_de_appartement`, `superficie_de_appartement`, `superficie_a_appartement`, `nombre_chambre_de_appartement`, `nombre_chambre_a_appartement`, `prix_vente_de_villa`, `superficie_de_villa`, `superficie_a_villa`, `nombre_chambre_de_villa`, `nombre_chambre_a_villa`, `prix_vente_de_maison`, `superficie_de_maison`, `superficie_a_maison`, `nombre_chambre_de_maison`, `nombre_chambre_a_maison`, `prix_vente_de_riad`, `superficie_de_riad`, `superficie_a_riad`, `nombre_chambre_de_riad`, `nombre_chambre_a_riad`, `prix_vente_de_chalet`, `superficie_de_chalet`, `superficie_a_chalet`, `nombre_chambre_de_chalet`, `nombre_chambre_a_chalet`, `prix_vente_de_commerce`, `superficie_de_commerce`, `superficie_a_commerce`, `prix_vente_de_bureau`, `superficie_de_bureau`, `superficie_a_bureau`, `prix_vente_de_plateau`, `superficie_de_plateau`, `superficie_a_plateau`, `prix_vente_de_residentiel`, `superficie_de_residentiel`, `superficie_a_residentiel`, `prix_vente_de_commercial`, `superficie_de_commercial`, `superficie_a_commercial`, `superficie`, `espace_vert`, `gardiennage`, `air_de_jeu`, `piscine`, `terrain_sport`, `salle_fitness`, `spa`, `superette`, `ecole`, `mosque`, `shopping`, `restaurant`, `service_menage`, `plage`, `campagne`, `montagne`, `desert`, `spot_surf`, `golf`, `foret`, `station_ski`, `riviere`, `description`, `medias`, `images`, `videos`, `adresse`, `latitude`, `longitude`, `online`, `user_id`, `created_at`, `updated_at`, `ville`, `pays`, `quartier`) VALUES
(1, 'Mercure', 'D5GxBFSv02CmovgG', 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 120000000, 20, 120, 2, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 120000000, 25, 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 45, 20, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, '00m', '500m', '00m', '100m', '00m', '00m', '1,1km', '00m', '1,8km', '{\"fr\":\"ert(yurethjrtjhntryj,ytrjhr(tyuhj\"}', '[\"1.jpg\",\"57782_763760_23.jpg\",\"118594458.jpg\"]', NULL, NULL, '{\"fr\":\"11 rue de libourne\"}', 33.58614, -7.60385, 0, 1, '2020-05-14 14:44:57', '2020-05-14 14:49:35', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'MyHouse Personal Access Client', 'VxIA7jylp8wVA3OGVmvqSaQGNxa1eZXV5Out61zX', 'http://localhost', 1, 0, 0, '2020-04-29 19:38:55', '2020-04-29 19:38:55'),
(2, NULL, 'MyHouse Password Grant Client', 'm4Mee7MDTqFSsHAodxRVIk11xDLjgpx0aXoAkLgB', 'http://localhost', 0, 1, 0, '2020-04-29 19:38:55', '2020-04-29 19:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-04-29 19:38:55', '2020-04-29 19:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `particuliers`
--

CREATE TABLE `particuliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `last_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `venteActif` tinyint(1) NOT NULL DEFAULT 0,
  `locationActif` tinyint(1) NOT NULL DEFAULT 0,
  `echangeActif` tinyint(1) NOT NULL DEFAULT 0,
  `vente_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `prix_vente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix_mois` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prix_jour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_copropriete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_longue_duree` tinyint(1) NOT NULL DEFAULT 0,
  `location_courte_duree` tinyint(1) NOT NULL DEFAULT 0,
  `location_etudiant` tinyint(1) NOT NULL DEFAULT 0,
  `location_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `colocation` tinyint(1) NOT NULL DEFAULT 0,
  `echange_definitif` tinyint(1) NOT NULL DEFAULT 0,
  `echange_provisoir` tinyint(1) NOT NULL DEFAULT 0,
  `echange_periode_un` datetime DEFAULT NULL,
  `echange_periode_deux` datetime DEFAULT NULL,
  `appart_type_un` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface_habitable` double DEFAULT NULL,
  `appart_etage_niveau` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appart_etage_nombre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appart_etage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appart_etage_immeuble` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuisine_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuisine_equipe` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_chambre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dressing` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_salle_bain` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_salon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terrasse` tinyint(1) NOT NULL DEFAULT 0,
  `jardin_privatif` tinyint(1) NOT NULL DEFAULT 0,
  `cour` tinyint(1) NOT NULL DEFAULT 0,
  `buanderie` tinyint(1) NOT NULL DEFAULT 0,
  `cheminee` tinyint(1) NOT NULL DEFAULT 0,
  `climatisation` tinyint(1) NOT NULL DEFAULT 0,
  `chauffe_eau` tinyint(1) NOT NULL DEFAULT 0,
  `espace_vert` tinyint(1) NOT NULL DEFAULT 0,
  `gardiennage` tinyint(1) NOT NULL DEFAULT 0,
  `place_vehicule` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box` tinyint(1) NOT NULL DEFAULT 0,
  `piscine` tinyint(1) NOT NULL DEFAULT 0,
  `terrain_sport` tinyint(1) NOT NULL DEFAULT 0,
  `spa` tinyint(1) NOT NULL DEFAULT 0,
  `superette` tinyint(1) NOT NULL DEFAULT 0,
  `ecole` tinyint(1) NOT NULL DEFAULT 0,
  `mosquee` tinyint(1) NOT NULL DEFAULT 0,
  `shopping` tinyint(1) NOT NULL DEFAULT 0,
  `restaurent` tinyint(1) NOT NULL DEFAULT 0,
  `plage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voie` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campagne` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montagne` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desert` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spot_surf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `riviere` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foret` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `station_ski` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `superficie_terrain` double DEFAULT NULL,
  `sous_sol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_terrain` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jaccuzi` tinyint(1) NOT NULL DEFAULT 0,
  `hammam_beldi` tinyint(1) NOT NULL DEFAULT 0,
  `cave` tinyint(1) NOT NULL DEFAULT 0,
  `service_menage` tinyint(1) NOT NULL DEFAULT 0,
  `salle_fitness` tinyint(1) NOT NULL DEFAULT 0,
  `air_jeu` tinyint(1) NOT NULL DEFAULT 0,
  `interphone` tinyint(1) NOT NULL DEFAULT 0,
  `amenagement_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chalet_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facade_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deux_salle_bain` tinyint(1) NOT NULL DEFAULT 0,
  `garage_ferme` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exploitation_agricole` tinyint(1) NOT NULL DEFAULT 0,
  `reception` tinyint(1) NOT NULL DEFAULT 0,
  `reservation` tinyint(1) NOT NULL DEFAULT 0,
  `dejeune` tinyint(1) NOT NULL DEFAULT 0,
  `wifi` tinyint(1) NOT NULL DEFAULT 0,
  `tele_cable` tinyint(1) NOT NULL DEFAULT 0,
  `type_chambre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chambre_non_fumeur` tinyint(1) NOT NULL DEFAULT 0,
  `service_en_chambre` tinyint(1) NOT NULL DEFAULT 0,
  `menage_quotidien` tinyint(1) NOT NULL DEFAULT 0,
  `animal_de_compagnie` tinyint(1) NOT NULL DEFAULT 0,
  `parking_gratuit` tinyint(1) NOT NULL DEFAULT 0,
  `restauration` tinyint(1) NOT NULL DEFAULT 0,
  `cafeteriat` tinyint(1) NOT NULL DEFAULT 0,
  `blanchisserie` tinyint(1) NOT NULL DEFAULT 0,
  `individuelle` tinyint(1) NOT NULL DEFAULT 0,
  `deux_lits` tinyint(1) NOT NULL DEFAULT 0,
  `trois_lits` tinyint(1) NOT NULL DEFAULT 0,
  `quatre_lits` tinyint(1) NOT NULL DEFAULT 0,
  `surface_disponible` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meuble` tinyint(1) NOT NULL DEFAULT 0,
  `kichenette` tinyint(1) NOT NULL DEFAULT 0,
  `salle_bain` tinyint(1) NOT NULL DEFAULT 0,
  `miroir` tinyint(1) NOT NULL DEFAULT 0,
  `bureau` tinyint(1) NOT NULL DEFAULT 0,
  `chauffage` tinyint(1) NOT NULL DEFAULT 0,
  `eau_chaude` tinyint(1) NOT NULL DEFAULT 0,
  `placard` tinyint(1) NOT NULL DEFAULT 0,
  `zone_disponible` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_piece` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hauteur_sous_plafond` double DEFAULT NULL,
  `internet` tinyint(1) NOT NULL DEFAULT 0,
  `wc_sanitaire` tinyint(1) NOT NULL DEFAULT 0,
  `balcon` tinyint(1) NOT NULL DEFAULT 0,
  `coin_cuisine` tinyint(1) NOT NULL DEFAULT 0,
  `acceuil` tinyint(1) NOT NULL DEFAULT 0,
  `ascenseur` tinyint(1) NOT NULL DEFAULT 0,
  `monte_charge` tinyint(1) NOT NULL DEFAULT 0,
  `coworking` tinyint(1) NOT NULL DEFAULT 0,
  `domiciliation` tinyint(1) NOT NULL DEFAULT 0,
  `open_space` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_box` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salle_reunion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frigorifique` tinyint(1) NOT NULL DEFAULT 0,
  `surface_batiment` double DEFAULT NULL,
  `espace_entrepot` double DEFAULT NULL,
  `espace_activite` double DEFAULT NULL,
  `espace_bureau` double DEFAULT NULL,
  `amenagement_r_sousol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hauteur_entrepot` double DEFAULT NULL,
  `site_clos` tinyint(1) NOT NULL DEFAULT 0,
  `pont_roulant` tinyint(1) NOT NULL DEFAULT 0,
  `alarme` tinyint(1) NOT NULL DEFAULT 0,
  `portail_un` double DEFAULT NULL,
  `portail_deux` double DEFAULT NULL,
  `portail_trois` double DEFAULT NULL,
  `portail` double DEFAULT NULL,
  `surface_garage` double DEFAULT NULL,
  `fond_commerce` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terrasses` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface_total` double DEFAULT NULL,
  `sous_pente` double DEFAULT NULL,
  `longueur_facade` double DEFAULT NULL,
  `hauteur_plafond` double DEFAULT NULL,
  `angle_de_rue` tinyint(1) NOT NULL DEFAULT 0,
  `mezzanine` tinyint(1) NOT NULL DEFAULT 0,
  `superficie_exploitable` double DEFAULT NULL,
  `surface_batie` double DEFAULT NULL,
  `raccordement_eau` tinyint(1) NOT NULL DEFAULT 0,
  `puits` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_electricite` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_telephone` tinyint(1) NOT NULL DEFAULT 0,
  `titre_foncier` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lotissement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assainissement` tinyint(1) NOT NULL DEFAULT 0,
  `zone_implante` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terrain_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `constructible` tinyint(1) NOT NULL DEFAULT 0,
  `surface_terrain` double DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 0,
  `adresse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_bien_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ville` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quartier` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balcons` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dressings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portail_quatre` double DEFAULT NULL,
  `portail_cinq` double DEFAULT NULL,
  `portail_six` double DEFAULT NULL,
  `portail_sept` double DEFAULT NULL,
  `portail_huit` double DEFAULT NULL,
  `portail_neuf` double DEFAULT NULL,
  `surface_disponible_un` double DEFAULT NULL,
  `surface_disponible_deux` double DEFAULT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uri` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `echange_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `garage_vehicule` tinyint(1) NOT NULL DEFAULT 0,
  `terrasse_commerciale` double DEFAULT NULL,
  `prix_m` double DEFAULT NULL,
  `charges` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vente_non_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `location_non_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `transactionurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `critereurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localisationurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uploadurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `successurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mplage` tinyint(1) NOT NULL DEFAULT 0,
  `mcampagne` tinyint(1) NOT NULL DEFAULT 0,
  `mmontagne` tinyint(1) NOT NULL DEFAULT 0,
  `mdesert` tinyint(1) NOT NULL DEFAULT 0,
  `mspot_surf` tinyint(1) NOT NULL DEFAULT 0,
  `mgolf` tinyint(1) NOT NULL DEFAULT 0,
  `mforet` tinyint(1) NOT NULL DEFAULT 0,
  `mstation_ski` tinyint(1) NOT NULL DEFAULT 0,
  `mriviere` tinyint(1) NOT NULL DEFAULT 0,
  `mvoix` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `particuliers`
--

INSERT INTO `particuliers` (`id`, `last_id`, `venteActif`, `locationActif`, `echangeActif`, `vente_meuble`, `prix_vente`, `prix_mois`, `prix_jour`, `charge_copropriete`, `location_longue_duree`, `location_courte_duree`, `location_etudiant`, `location_meuble`, `colocation`, `echange_definitif`, `echange_provisoir`, `echange_periode_un`, `echange_periode_deux`, `appart_type_un`, `surface_habitable`, `appart_etage_niveau`, `appart_etage_nombre`, `appart_etage`, `appart_etage_immeuble`, `cuisine_type`, `cuisine_equipe`, `nombre_chambre`, `dressing`, `nombre_salle_bain`, `nombre_salon`, `terrasse`, `jardin_privatif`, `cour`, `buanderie`, `cheminee`, `climatisation`, `chauffe_eau`, `espace_vert`, `gardiennage`, `place_vehicule`, `box`, `piscine`, `terrain_sport`, `spa`, `superette`, `ecole`, `mosquee`, `shopping`, `restaurent`, `plage`, `voie`, `campagne`, `montagne`, `desert`, `spot_surf`, `riviere`, `golf`, `foret`, `station_ski`, `superficie_terrain`, `sous_sol`, `type_terrain`, `jaccuzi`, `hammam_beldi`, `cave`, `service_menage`, `salle_fitness`, `air_jeu`, `interphone`, `amenagement_type`, `chalet_type`, `facade_type`, `deux_salle_bain`, `garage_ferme`, `exploitation_agricole`, `reception`, `reservation`, `dejeune`, `wifi`, `tele_cable`, `type_chambre`, `chambre_non_fumeur`, `service_en_chambre`, `menage_quotidien`, `animal_de_compagnie`, `parking_gratuit`, `restauration`, `cafeteriat`, `blanchisserie`, `individuelle`, `deux_lits`, `trois_lits`, `quatre_lits`, `surface_disponible`, `meuble`, `kichenette`, `salle_bain`, `miroir`, `bureau`, `chauffage`, `eau_chaude`, `placard`, `zone_disponible`, `nombre_piece`, `hauteur_sous_plafond`, `internet`, `wc_sanitaire`, `balcon`, `coin_cuisine`, `acceuil`, `ascenseur`, `monte_charge`, `coworking`, `domiciliation`, `open_space`, `nombre_box`, `salle_reunion`, `frigorifique`, `surface_batiment`, `espace_entrepot`, `espace_activite`, `espace_bureau`, `amenagement_r_sousol`, `hauteur_entrepot`, `site_clos`, `pont_roulant`, `alarme`, `portail_un`, `portail_deux`, `portail_trois`, `portail`, `surface_garage`, `fond_commerce`, `terrasses`, `surface_total`, `sous_pente`, `longueur_facade`, `hauteur_plafond`, `angle_de_rue`, `mezzanine`, `superficie_exploitable`, `surface_batie`, `raccordement_eau`, `puits`, `raccordement_electricite`, `raccordement_telephone`, `titre_foncier`, `lotissement`, `assainissement`, `zone_implante`, `terrain_type`, `titre_type`, `constructible`, `surface_terrain`, `latitude`, `longitude`, `images`, `online`, `adresse`, `videos`, `description`, `type_bien_id`, `user_id`, `created_at`, `updated_at`, `ville`, `pays`, `quartier`, `balcons`, `dressings`, `portail_quatre`, `portail_cinq`, `portail_six`, `portail_sept`, `portail_huit`, `portail_neuf`, `surface_disponible_un`, `surface_disponible_deux`, `page`, `uri`, `echange_meuble`, `garage_vehicule`, `terrasse_commerciale`, `prix_m`, `charges`, `vente_non_meuble`, `location_non_meuble`, `transactionurl`, `typeurl`, `descriptionurl`, `critereurl`, `localisationurl`, `uploadurl`, `successurl`, `mplage`, `mcampagne`, `mmontagne`, `mdesert`, `mspot_surf`, `mgolf`, `mforet`, `mstation_ski`, `mriviere`, `mvoix`) VALUES
(233, 'Ap9jlgjG1exzWI1Xh', 1, 0, 0, 0, '1.400.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 1254, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, 1, '2020-05-28 09:24:25', '2020-05-28 09:37:28', NULL, NULL, NULL, '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.com/sujet/deposer/particulier/type/233', 'http://myhouse.com/sujet/deposer/particulier/description?id=233&type=appartement', 'http://myhouse.com/sujet/deposer/particulier/critere?appart_etage=1%20appart%28s%29%20par%20%C3%A9tage&appart_etage_immeuble=2%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_niveau=Sur%20un%20niveau&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=00m&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&foret=00m&golf=00m&id=233&montagne=00m&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=00m&spot_surf=00m&station_ski=00m&surface_habitable=1254&terrasses=1%20terrasse%28s%29', 'http://myhouse.com/sujet/deposer/particulier/showlocalisation/233', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(243, 'AGGRh2dxzYknCF9nm', 1, 0, 0, 0, '20.000.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 10, 1, '2020-05-28 18:35:14', '2020-05-28 18:35:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.com/sujet/deposer/particulier/type/243', 'http://myhouse.com/sujet/deposer/particulier/description?id=243&type=plateau', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(249, 'AG8ifvWRAmFPfSg4y', 1, 1, 1, 1, '123.999.9', '2345', NULL, NULL, 0, 0, 1, 1, 1, 1, 1, '2020-06-22 00:00:00', '2020-09-28 00:00:00', '{\"fr\":\"2\\u00e8me main\"}', 345, '{\"fr\":\"Duplex\"}', '{\"fr\":\"Situ\\u00e9 au 19\\u00e8me \\u00e9tage\"}', '{\"fr\":\"10 appart(s) par \\u00e9tage\"}', '{\"fr\":\"14 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine d\'ext\\u00e9rieur\"}', 1, '{\"fr\":\"3 chambre(s)\"}', 0, '{\"fr\":\"3 salle(s) de bain\"}', '{\"fr\":\"3 salon(s)\"}', 0, 1, 1, 1, 1, 1, 1, 1, 1, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 1, 1, 1, 1, 1, 1, 1, 1, 1, '50m', NULL, '500m', '400m', '900m', '700m', '50m', '600m', '1,3km', '900m', NULL, NULL, NULL, 0, 0, 0, 0, 1, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"5 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.54371', '-7.591', NULL, 0, '{\"fr\":\"Boulevard Boulemane\"}', NULL, NULL, 1, 22, '2020-05-29 10:59:52', '2020-05-29 11:58:48', 'Casablanca', 'maroc', 'Aïn Chock', '{\"fr\":\"4 balcon(s)\"}', '{\"fr\":\"2 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://192.168.1.11/sujet/deposer/particulier/edit/249', 0, 0, NULL, NULL, '0', 1, 1, NULL, 'http://192.168.1.11/sujet/deposer/particulier/type/249', 'http://192.168.1.11/sujet/deposer/particulier/description?id=249&type=appartement', 'http://192.168.1.11/sujet/deposer/particulier/critere?appart_etage=10%20appart%28s%29%20par%20%C3%A9tage&appart_etage_immeuble=14%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_niveau=Duplex&appart_etage_nombre=Situ%C3%A9%20au%2019%C3%A8me%20%C3%A9tage&appart_type_un=2%C3%A8me%20main&balcons=4%20balcon%28s%29&box=1&buanderie=1&cafeteriat=1&campagne=500m&chauffe_eau=1&cheminee=1&climatisation=1&colocation=1&cour=1&cuisine_equipe=1&cuisine_type=Cuisine%20d%27ext%C3%A9rieur&desert=900m&dressings=2%20dressing%28s%29&ecole=1&espace_vert=1&foret=1%2C3km&gardiennage=1&golf=600m&id=249&jardin_privatif=1&location_etudiant=1&location_meuble=1&location_non_meuble=1&mcampagne=1&mdesert=1&mforet=1&mgolf=1&mmontagne=1&montagne=400m&mosquee=1&mplage=1&mriviere=1&mspot_surf=1&mstation_ski=1&nombre_chambre=3%20chambre%28s%29&nombre_salle_bain=3%20salle%28s%29%20de%20bain&nombre_salon=3%20salon%28s%29&piscine=1&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=50m&restaurent=1&riviere=50m&salle_fitness=1&shopping=1&spa=1&spot_surf=700m&station_ski=900m&superette=1&surface_habitable=345&terrain_sport=1&terrasses=5%20terrasse%28s%29&vente_meuble=1&vente_non_meuble=1', 'http://192.168.1.11/sujet/deposer/particulier/showlocalisation/249', 'http://192.168.1.11/sujet/deposer/particulier/upload/249', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(251, 'AE2D7pZlKgT0lkxJI', 1, 0, 0, 0, '1.200.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 400, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, 1, '2020-05-29 12:54:42', '2020-05-29 12:55:01', NULL, NULL, NULL, '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.com/sujet/deposer/particulier/type/251', 'http://myhouse.com/sujet/deposer/particulier/description?id=251&type=appartement', 'http://myhouse.com/sujet/deposer/particulier/critere?appart_etage=1%20appart%28s%29%20par%20%C3%A9tage&appart_etage_immeuble=2%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_niveau=Sur%20un%20niveau&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=00m&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&foret=00m&golf=00m&id=251&mcampagne=1&mdesert=1&mforet=1&mgolf=1&mmontagne=1&montagne=00m&mplage=1&mriviere=1&mspot_surf=1&mstation_ski=1&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=00m&spot_surf=00m&station_ski=00m&surface_habitable=400&terrasses=1%20terrasse%28s%29', NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(253, 'AIHknYVUD33B5moeZ', 1, 0, 0, 0, '30.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2020-05-30 14:42:21', '2020-05-30 14:48:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://myhouse.com/sujet/deposer/particulier/edit/253', 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.com/sujet/deposer/particulier/type/253', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(254, 'AJauBUq854PmwBaWJ', 1, 0, 0, 0, '50.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '2020-10-25 00:00:00', '2020-10-25 00:00:00', '{\"fr\":\"2\\u00e8me main\"}', 50, NULL, NULL, NULL, NULL, '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"Sous-sol + RDC\"}', NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 3, 1, '2020-05-30 14:54:05', '2020-05-30 15:00:43', NULL, NULL, NULL, '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://myhouse.com/sujet/deposer/particulier/edit/254', 0, 0, NULL, NULL, '0', 0, 0, NULL, 'http://myhouse.com/sujet/deposer/particulier/type/254', 'http://myhouse.com/sujet/deposer/particulier/description?id=254&type=maison', 'http://myhouse.com/sujet/deposer/particulier/critere?amenagement_type=Sous-sol%20%2B%20RDC&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=00m&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&foret=00m&golf=00m&id=254&montagne=00m&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=00m&spot_surf=00m&station_ski=00m&superficie_terrain=&surface_habitable=50&terrasses=1%20terrasse%28s%29', 'http://myhouse.com/sujet/deposer/particulier/showlocalisation/254', 'http://myhouse.com/sujet/deposer/particulier/upload/254', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(256, 'ArFMR4wtInVvFm9SS', 1, 0, 0, 0, '120.000.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 2, 33, '2020-05-30 18:52:43', '2020-05-30 18:52:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 20, NULL, 0, 0, NULL, 'http://myhouse.com/sujet/deposer/particulier/type/256', 'http://myhouse.com/sujet/deposer/particulier/description?id=256&type=villa', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(258, 'AYiKOQzdyivdHFjIp', 1, 1, 0, 0, '120.000.000', '5000', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 11, 1, '2020-05-31 07:11:22', '2020-05-31 08:18:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.com/sujet/deposer/particulier/type/258', 'http://myhouse.com/sujet/deposer/particulier/description?id=258&type=entrepot', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(259, 'AXcE4op4rbykWixuz', 0, 1, 0, 0, NULL, '5000', NULL, NULL, 0, 0, 1, 1, 1, 0, 0, '2020-10-20 00:00:00', '2020-10-25 00:00:00', '{\"fr\":\"2\\u00e8me main\"}', 500, NULL, NULL, NULL, NULL, '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 1, 1, 1, 1, 1, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', NULL, '{\"fr\":\"Sous-sol + RDC\"}', NULL, 0, 1, 1, 0, 0, 0, 1, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 5, 1, '2020-05-31 08:19:06', '2020-05-31 08:27:01', NULL, NULL, NULL, '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://myhouse.com/sujet/deposer/particulier/edit/259', 0, 0, NULL, NULL, NULL, 0, 1, NULL, 'http://myhouse.com/sujet/deposer/particulier/type/259', 'http://myhouse.com/sujet/deposer/particulier/description?id=259&type=riad', 'http://myhouse.com/sujet/deposer/particulier/critere?appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&buanderie=1&campagne=00m&cave=1&chauffe_eau=1&cheminee=1&climatisation=1&colocation=1&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&espace_vert=1&foret=00m&golf=00m&hammam_beldi=1&id=259&interphone=1&location_etudiant=1&location_meuble=1&location_non_meuble=1&mdesert=1&mmontagne=1&montagne=00m&mplage=1&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=00m&sous_sol=Sous-sol%20%2B%20RDC&spot_surf=00m&station_ski=00m&surface_habitable=500&terrasses=1%20terrasse%28s%29', NULL, NULL, NULL, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0),
(260, 'AZtOW3JnaHbyYBrmh', 1, 0, 0, 0, '120000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 50, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '45.0359', '23.26088', NULL, 0, '{\"fr\":\"Bistrita\"}', NULL, NULL, 1, 1, '2020-05-31 09:55:14', '2020-05-31 09:56:25', 'Roumanie', 'ROU', 'Bistrița-Năsăud', '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.com/sujet/deposer/particulier/type/260', 'http://myhouse.com/sujet/deposer/particulier/description?id=260&type=appartement', 'http://myhouse.com/sujet/deposer/particulier/critere?appart_etage=1%20appart%28s%29%20par%20%C3%A9tage&appart_etage_immeuble=2%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_niveau=Sur%20un%20niveau&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=00m&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&foret=00m&golf=00m&id=260&montagne=00m&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=00m&spot_surf=00m&station_ski=00m&surface_habitable=50&terrasses=1%20terrasse%28s%29', 'http://myhouse.com/sujet/deposer/particulier/showlocalisation/260', 'http://myhouse.com/sujet/deposer/particulier/upload/260', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(261, 'Ax8J3AI4FObP942C1', 1, 0, 0, 0, '120.000.000.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2020-05-31 16:00:14', '2020-05-31 16:00:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 12000, NULL, 0, 0, NULL, 'http://127.0.0.1/sujet/deposer/particulier/type/261', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(262, 'Ad5E5ODXB5LkiF7fL', 1, 1, 1, 1, '400000', '12000', '700', NULL, 0, 0, 1, 0, 0, 1, 1, '2020-05-23 00:00:00', '2020-05-29 00:00:00', '{\"fr\":\"2\\u00e8me main\"}', 200, '{\"fr\":\"Duplex\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 1, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 1, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 1, 1, 0, '00m', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, 1, '2020-05-31 16:09:09', '2020-05-31 16:14:11', NULL, NULL, NULL, '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 12000, NULL, 1, 0, NULL, 'http://127.0.0.1/sujet/deposer/particulier/type/262', 'http://127.0.0.1/sujet/deposer/particulier/description?id=262&type=appartement', 'http://127.0.0.1/sujet/deposer/particulier/critere?appart_etage=1%20appart%28s%29%20par%20%C3%A9tage&appart_etage_immeuble=2%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_niveau=Duplex&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=00m&cuisine_equipe=1&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&espace_vert=1&foret=00m&golf=00m&id=262&location_etudiant=1&mcampagne=1&mdesert=1&mmontagne=1&montagne=00m&mosquee=1&mplage=1&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=00m&shopping=1&spot_surf=00m&station_ski=00m&surface_habitable=200&terrasses=1%20terrasse%28s%29&vente_meuble=1&vente_non_meuble=1', 'http://127.0.0.1/sujet/deposer/particulier/showlocalisation/262', NULL, NULL, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(263, 'AsmoFLxLG4P5Y3UWD', 1, 0, 0, 0, '12.000.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 30, NULL, NULL, NULL, NULL, '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"Sous-sol + RDC\"}', NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 3, 1, '2020-05-31 21:52:26', '2020-05-31 21:52:43', NULL, NULL, NULL, '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.com/sujet/deposer/particulier/type/263', 'http://myhouse.com/sujet/deposer/particulier/description?id=263&type=maison', 'http://myhouse.com/sujet/deposer/particulier/critere?amenagement_type=Sous-sol%20%2B%20RDC&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=00m&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&foret=00m&golf=00m&id=263&montagne=00m&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=00m&spot_surf=00m&station_ski=00m&superficie_terrain=&surface_habitable=30&terrasses=1%20terrasse%28s%29', 'http://myhouse.com/sujet/deposer/particulier/showlocalisation/263', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(264, 'AHlrpmEi0mAWSl0fE', 1, 0, 0, 0, '22', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2020-06-01 17:10:58', '2020-06-01 17:10:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.com/sujet/deposer/particulier/type/264', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(265, 'AGAwHJYID7mvX73bj', 1, 0, 0, 0, '120.000.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 12, NULL, NULL, NULL, NULL, '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', NULL, '{\"fr\":\"Sous-sol + RDC\"}', NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, '{\"fr\":\"Garage ferm\\u00e9 1 place(s)\"}', 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 6, 1, '2020-06-01 17:25:41', '2020-06-01 18:16:10', NULL, NULL, NULL, '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.com/sujet/deposer/particulier/type/265', 'http://myhouse.com/sujet/deposer/particulier/description?id=265&type=ferme', 'http://myhouse.com/sujet/deposer/particulier/critere?appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=00m&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&foret=00m&garage_ferme=Garage%20ferm%C3%A9%201%20place%28s%29&golf=00m&id=265&montagne=00m&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&plage=00m&riviere=00m&sous_sol=Sous-sol%20%2B%20RDC&spot_surf=00m&station_ski=00m&superficie_terrain=&surface_habitable=12.000&terrasses=1%20terrasse%28s%29', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(266, 'AB82AkA0jTfz2zDPN', 1, 0, 0, 0, '1.200.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '2003-10-25 00:00:00', '2003-10-26 00:00:00', '{\"fr\":\"2\\u00e8me main\"}', 450, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, 1, '2020-06-01 19:04:55', '2020-06-01 21:12:46', NULL, NULL, NULL, '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://myhouse.local/sujet/deposer/particulier/edit/266', 0, 0, NULL, NULL, '0', 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/266', 'http://myhouse.local/sujet/deposer/particulier/description?id=266&type=appartement', 'http://myhouse.local/sujet/deposer/particulier/critere?appart_etage=1%20appart%28s%29%20par%20%C3%A9tage&appart_etage_immeuble=2%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_niveau=Sur%20un%20niveau&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=00m&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&foret=00m&golf=00m&id=266&montagne=00m&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=00m&spot_surf=00m&station_ski=00m&surface_habitable=450&terrasses=1%20terrasse%28s%29', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(267, 'Axyjv3FoMOhpl9OT3', 1, 0, 0, 0, '12.000.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '2003-10-25 00:00:00', '2003-10-26 00:00:00', '{\"fr\":\"2\\u00e8me main\"}', 200, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, 1, '2020-06-02 08:44:19', '2020-06-02 10:07:21', NULL, NULL, NULL, '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://myhouse.local/sujet/deposer/particulier/edit/267', 0, 0, NULL, NULL, '0', 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/267', 'http://myhouse.local/sujet/deposer/particulier/description?id=267&type=appartement', 'http://myhouse.local/sujet/deposer/particulier/critere?appart_etage=1%20appart%28s%29%20par%20%C3%A9tage&appart_etage_immeuble=2%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_niveau=Sur%20un%20niveau&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=00m&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&foret=00m&golf=00m&id=267&montagne=00m&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=00m&spot_surf=00m&station_ski=00m&surface_habitable=200&terrasses=1%20terrasse%28s%29', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/267', NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(268, 'AMzP88GOobQYUbQK5', 0, 1, 0, 0, NULL, '54', '444', NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 15, 1, '2020-06-02 10:21:39', '2020-06-02 10:21:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 'oui', 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/268', 'http://myhouse.local/sujet/deposer/particulier/description?id=268&type=propriete_agricole', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(269, 'AWjLmvAMAcZJlrE3l', 1, 0, 0, 0, '200', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 16, 1, '2020-06-02 14:45:27', '2020-06-02 14:46:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://myhouse.local/sujet/deposer/particulier/edit/269', 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/269', 'http://myhouse.local/sujet/deposer/particulier/description?id=269&type=immeuble', NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(270, 'AtY0eXJjLOEUnosOw', 1, 0, 0, 1, '500.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 45, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 1, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 1, 1, 1, 1, 1, 1, 1, 1, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 1, 1, 1, 1, 1, 0, 1, 1, 1, '200m', NULL, '1,7km', '1,4km', '1km', '400m', '00m', '1,6km', '1,4km', '1,1km', NULL, NULL, NULL, 0, 0, 0, 0, 1, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.60313', '-7.65592', '[\"f516acd314aaa731cfc0760f516d0a6f.jpg\",\"a39b8c73d94b23458c547a9bc0f81721.jpg\",\"499a2cf87c9c2c9b43b601c2b5742933.jpg\",\"fa089d515a118b809a0f1f9e4ed05283.jpg\",\"ce44c2cad03c32e527e4880867bcefb4.jpg\",\"6ce66b54cc20503c6d3d006bda6438c3.jpg\",\"51b6ad171afceb8bcd170524e5a39ee8.jpg\",\"27c886b77a0512c0a9c936c91c2341c5.jpg\",\"d3fa65a00bd61e4d3ea262b0355a0edf.jpg\"]', 1, '{\"fr\":\"Rue Kelaa\"}', NULL, '{\"fr\":\"un petit paragraphe pour demontr\\u00e9\"}', 1, 1, '2020-06-02 16:50:46', '2020-06-04 09:14:44', 'Casablanca', 'MAR', 'Anfa', '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://myhouse.local/sujet/deposer/particulier/edit/270', 0, 0, NULL, 450, NULL, 1, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/270', 'http://myhouse.local/sujet/deposer/particulier/description?id=270&type=appartement', 'http://myhouse.local/sujet/deposer/particulier/critere?appart_etage=1%20appart%28s%29%20par%20%C3%A9tage&appart_etage_immeuble=2%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_niveau=Sur%20un%20niveau&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&box=1&buanderie=1&campagne=1%2C7km&chauffe_eau=1&cheminee=1&climatisation=1&cour=1&cuisine_equipe=1&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=1km&dressings=1%20dressing%28s%29&espace_vert=1&foret=1%2C4km&gardiennage=1&golf=1%2C6km&id=270&jardin_privatif=1&mcampagne=1&mdesert=1&mforet=1&mgolf=1&mmontagne=1&montagne=1%2C4km&mosquee=1&mplage=1&mriviere=1&mspot_surf=1&mstation_ski=1&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&piscine=1&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=200m&restaurent=1&riviere=00m&salle_fitness=1&shopping=1&spa=1&spot_surf=400m&station_ski=1%2C1km&superette=1&surface_habitable=45&terrain_sport=1&terrasses=1%20terrasse%28s%29&vente_meuble=1&vente_non_meuble=1', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/270', 'http://myhouse.local/sujet/deposer/particulier/upload/270', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(271, 'AJbDov5yLTIZEd7Ja', 0, 1, 0, 0, NULL, NULL, '5000', NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"15 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '{\"fr\":\"1 pi\\u00e8ce(s)\"}', NULL, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"Sans fonds de commerce\"}', NULL, 450, 200, 4, 5, 1, 1, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.54371', '-7.591', '[\"45201b20c23fd268d858ea93f67825be.jpg\",\"f9e32acc62b757bf15df317db07ea0f1.jpg\",\"d6200c51b273d5d919b449ee302eb33a.jpg\",\"a1f3a03620e296223de965d75ae45a1d.jpg\",\"53f3bec866144abab3b75181c9a50efe.jpg\",\"aff27d03080b6d29c2c7612f1d9f266f.jpg\",\"81975d73d53a9857ab7b83620786806f.jpg\",\"006036283f8513ab0f13673d8c8115a2.jpg\"]', 1, '{\"fr\":\"Boulevard Boulemane\"}', NULL, '{\"fr\":\"edrhedrhereeherher ezrghyezrher erhrehrehezrh erhgbezrhgezhre rezgzrhzreh zrghzrhzrh zrgzregzrg\"}', 14, 1, '2020-06-03 08:05:59', '2020-06-04 09:14:59', 'Casablanca', 'MAR', 'Aïn Chock', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 30, NULL, 'oui', 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/271', 'http://myhouse.local/sujet/deposer/particulier/description?id=271&type=local_commercial', 'http://myhouse.local/sujet/deposer/particulier/critere?alarme=1&angle_de_rue=1&appart_type_un=2%C3%A8me%20main&fond_commerce=Sans%20fonds%20de%20commerce&hauteur_plafond=5&id=271&longueur_facade=4&mezzanine=1&nombre_piece=1%20pi%C3%A8ce%28s%29&place_vehicule=15%20place%28s%29%20v%C3%A9hicule&sous_pente=200&surface_total=450&terrasse_commerciale=30&wc_sanitaire=1', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/271', 'http://myhouse.local/sujet/deposer/particulier/upload/271', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(272, 'AqhPLz6g7Qa0TTAdE', 1, 0, 0, 0, '200.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2020-06-03 09:18:15', '2020-06-03 09:18:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/272', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(273, 'AJuOmGFggpav5YmqX', 1, 0, 0, 0, '200.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2020-06-03 09:18:44', '2020-06-03 09:18:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://myhouse.local/sujet/deposer/particulier/edit/273', 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/273', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(274, 'A7HS1MygWuxt9zDIi', 1, 0, 0, 0, '200.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2020-06-03 09:19:15', '2020-06-03 09:19:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/274', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(275, 'AKiK2ZVgDZdVaFNTv', 1, 1, 1, 0, '200.000', '2000', '300', NULL, 0, 0, 0, 0, 0, 1, 1, '2009-10-25 00:00:00', '2010-10-26 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1,1km', '600m', '600m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', 450, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 1, 1, 1, 1, '{\"fr\":\"1\"}', NULL, 1, NULL, NULL, NULL, 0, NULL, '33.58828', '-7.63638', '[\"a21ee59bd23dd14b5c713acdad617be8.jpg\",\"0b9201b7a72b7ca56cd09834cc42fffc.jpg\",\"04703395da2fb743d671c1759b301397.jpg\",\"14b3c12fe79c3910c9634df1065a2115.jpg\",\"01e877c83c061cadbc5b48a6e8f699e6.jpg\",\"d40aa9a7168948781303d9a06c1ac598.jpg\",\"51416433fd4ae01c2ea9d7b2d827267a.jpg\",\"758eda3436546c401c5ee9e0050f110b.jpg\"]', 1, '{\"fr\":\"Rue Jalal Eddine Siouti\"}', NULL, '{\"fr\":\"sdrgzrgrzs sdrgsergfrzs serfgzserfz sedrfgzefgz sqefzefe sgerzreg sgzresgzsre srgzsgvzs\"}', 18, 1, '2020-06-03 09:20:22', '2020-06-04 09:14:53', 'Casablanca', 'MAR', 'El Maarif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/275', 'http://myhouse.local/sujet/deposer/particulier/description?id=275&type=commercial', 'http://myhouse.local/sujet/deposer/particulier/critere?assainissement=1&campagne=600m&desert=00m&foret=00m&golf=00m&id=275&mcampagne=1&mdesert=1&mforet=1&mgolf=1&mmontagne=1&montagne=00m&mplage=1&mriviere=1&mspot_surf=1&mstation_ski=1&mvoix=1&plage=1%2C1km&puits=1&raccordement_eau=1&raccordement_electricite=1&raccordement_telephone=1&riviere=00m&spot_surf=00m&station_ski=00m&superficie_terrain=450&titre_foncier=1&voie=600m', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/275', 'http://myhouse.local/sujet/deposer/particulier/upload/275', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `particuliers` (`id`, `last_id`, `venteActif`, `locationActif`, `echangeActif`, `vente_meuble`, `prix_vente`, `prix_mois`, `prix_jour`, `charge_copropriete`, `location_longue_duree`, `location_courte_duree`, `location_etudiant`, `location_meuble`, `colocation`, `echange_definitif`, `echange_provisoir`, `echange_periode_un`, `echange_periode_deux`, `appart_type_un`, `surface_habitable`, `appart_etage_niveau`, `appart_etage_nombre`, `appart_etage`, `appart_etage_immeuble`, `cuisine_type`, `cuisine_equipe`, `nombre_chambre`, `dressing`, `nombre_salle_bain`, `nombre_salon`, `terrasse`, `jardin_privatif`, `cour`, `buanderie`, `cheminee`, `climatisation`, `chauffe_eau`, `espace_vert`, `gardiennage`, `place_vehicule`, `box`, `piscine`, `terrain_sport`, `spa`, `superette`, `ecole`, `mosquee`, `shopping`, `restaurent`, `plage`, `voie`, `campagne`, `montagne`, `desert`, `spot_surf`, `riviere`, `golf`, `foret`, `station_ski`, `superficie_terrain`, `sous_sol`, `type_terrain`, `jaccuzi`, `hammam_beldi`, `cave`, `service_menage`, `salle_fitness`, `air_jeu`, `interphone`, `amenagement_type`, `chalet_type`, `facade_type`, `deux_salle_bain`, `garage_ferme`, `exploitation_agricole`, `reception`, `reservation`, `dejeune`, `wifi`, `tele_cable`, `type_chambre`, `chambre_non_fumeur`, `service_en_chambre`, `menage_quotidien`, `animal_de_compagnie`, `parking_gratuit`, `restauration`, `cafeteriat`, `blanchisserie`, `individuelle`, `deux_lits`, `trois_lits`, `quatre_lits`, `surface_disponible`, `meuble`, `kichenette`, `salle_bain`, `miroir`, `bureau`, `chauffage`, `eau_chaude`, `placard`, `zone_disponible`, `nombre_piece`, `hauteur_sous_plafond`, `internet`, `wc_sanitaire`, `balcon`, `coin_cuisine`, `acceuil`, `ascenseur`, `monte_charge`, `coworking`, `domiciliation`, `open_space`, `nombre_box`, `salle_reunion`, `frigorifique`, `surface_batiment`, `espace_entrepot`, `espace_activite`, `espace_bureau`, `amenagement_r_sousol`, `hauteur_entrepot`, `site_clos`, `pont_roulant`, `alarme`, `portail_un`, `portail_deux`, `portail_trois`, `portail`, `surface_garage`, `fond_commerce`, `terrasses`, `surface_total`, `sous_pente`, `longueur_facade`, `hauteur_plafond`, `angle_de_rue`, `mezzanine`, `superficie_exploitable`, `surface_batie`, `raccordement_eau`, `puits`, `raccordement_electricite`, `raccordement_telephone`, `titre_foncier`, `lotissement`, `assainissement`, `zone_implante`, `terrain_type`, `titre_type`, `constructible`, `surface_terrain`, `latitude`, `longitude`, `images`, `online`, `adresse`, `videos`, `description`, `type_bien_id`, `user_id`, `created_at`, `updated_at`, `ville`, `pays`, `quartier`, `balcons`, `dressings`, `portail_quatre`, `portail_cinq`, `portail_six`, `portail_sept`, `portail_huit`, `portail_neuf`, `surface_disponible_un`, `surface_disponible_deux`, `page`, `uri`, `echange_meuble`, `garage_vehicule`, `terrasse_commerciale`, `prix_m`, `charges`, `vente_non_meuble`, `location_non_meuble`, `transactionurl`, `typeurl`, `descriptionurl`, `critereurl`, `localisationurl`, `uploadurl`, `successurl`, `mplage`, `mcampagne`, `mmontagne`, `mdesert`, `mspot_surf`, `mgolf`, `mforet`, `mstation_ski`, `mriviere`, `mvoix`) VALUES
(276, 'AiQSfTJEQqc7kZUdM', 1, 0, 0, 1, '120.000.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 450, NULL, '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 1, 0, 0, 1, 1, 1, 1, '{\"fr\":\"4 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 1, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 1, 0, 0, '{\"fr\":\"Implant\\u00e9 dans un Plateau de bureaux\"}', '{\"fr\":\"1 pi\\u00e8ce(s)\"}', 200, 1, 1, 0, 1, 1, 1, 1, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"9 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58286', '-7.67124', '[\"5ad719ed071a84eba930debb3b8fbc36.jpg\",\"2cf63e1c3309984a196e6183c2eeba89.jpg\",\"f418960ee8ca3c3fa555f594d9efd8bf.jpg\",\"8fbcb2fd70268effcca046cc5d1deaad.jpg\",\"cfe8e6fb731965f2c25ccb64ba2511f3.jpg\",\"67af45b5797837cdc26f6b65f9d73816.jpg\",\"aea95fce48f04ea7d4d4c45cbe6faf9f.jpg\",\"3e139c87e8a4c0e268466f76ed6bbdc7.jpg\"]', 1, '{\"fr\":\"Rue des Bananiers\"}', NULL, '{\"fr\":\"sdbsfdbsbsbsb sdbsbs ssbsbs\"}', 9, 1, '2020-06-04 08:11:06', '2020-06-04 09:14:39', 'Casablanca', 'MAR', 'Anfa', '{\"fr\":\"4 balcon(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/276', 'http://myhouse.local/sujet/deposer/particulier/description?id=276&type=bureau', 'http://myhouse.local/sujet/deposer/particulier/critere?acceuil=1&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&ascenseur=1&balcons=4%20balcon%28s%29&chauffage=1&chauffe_eau=1&climatisation=1&coin_cuisine=1&cour=1&espace_vert=1&gardiennage=1&hauteur_sous_plafond=200&id=276&internet=1&interphone=1&monte_charge=1&nombre_piece=1%20pi%C3%A8ce%28s%29&place_vehicule=4%20place%28s%29%20v%C3%A9hicule&surface_habitable=450&terrasses=9%20terrasse%28s%29&vente_meuble=1&vente_non_meuble=1&wc_sanitaire=1&zone_disponible=Implant%C3%A9%20dans%20un%20Plateau%20de%20bureaux', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/276', 'http://myhouse.local/sujet/deposer/particulier/upload/276', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(277, 'An5CvQdHUytO0Q2HG', 0, 1, 0, 0, NULL, '6000', NULL, '200', 0, 0, 1, 1, 1, 0, 0, NULL, NULL, '{\"fr\":\"Livraison imm\\u00e9diate (neuf)\"}', 120, NULL, NULL, NULL, NULL, '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 1, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 1, 1, 1, 1, 1, 1, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '00m', '00m', '1,1km', '1,7km', '400m', '1,5km', '400m', '1,6km', NULL, '{\"fr\":\"Sous-sol + RDC\"}', NULL, 1, 1, 1, 0, 0, 0, 1, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"5 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58584', '-7.60462', '[\"4fdd7effbcc2158a9b47308030aa9b2d.jpg\",\"7116ccb392b0c4aaab693995bdf8417f.jpg\",\"247904b9bd17fffaedcc367ac37f2514.jpg\",\"88876f60b7ea864b8934296e01a4e6cc.jpg\",\"ac2e3e76088c060734cea5bf4b6cf84a.jpg\",\"74c0fb0d2b9b370d805c4121d2164dc2.jpg\",\"22dd3ce11114ed92ac1e5d92e859437e.jpeg\"]', 1, '{\"fr\":\"Rue Libourne\"}', NULL, '{\"fr\":\"The setup in your Vue application looks like the following (using the lang.js NPM package):\"}', 5, 1, '2020-06-04 08:13:27', '2020-06-04 09:14:31', 'Casablanca', 'MAR', 'Mers-Sultan', '{\"fr\":\"6 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 'non', 0, 1, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/277', 'http://myhouse.local/sujet/deposer/particulier/description?id=277&type=riad', 'http://myhouse.local/sujet/deposer/particulier/critere?appart_type_un=Livraison%20imm%C3%A9diate%20%28neuf%29&balcons=6%20balcon%28s%29&buanderie=1&campagne=00m&cave=1&chauffe_eau=1&cheminee=1&climatisation=1&colocation=1&cour=1&cuisine_equipe=1&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=1%2C1km&dressings=1%20dressing%28s%29&espace_vert=1&foret=400m&golf=1%2C5km&hammam_beldi=1&id=277&interphone=1&jaccuzi=1&location_etudiant=1&location_meuble=1&location_non_meuble=1&mcampagne=1&mdesert=1&mforet=1&mgolf=1&mmontagne=1&montagne=00m&mplage=1&mriviere=1&mspot_surf=1&mstation_ski=1&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=400m&sous_sol=Sous-sol%20%2B%20RDC&spot_surf=1%2C7km&station_ski=1%2C6km&surface_habitable=120&terrasses=5%20terrasse%28s%29', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/277', 'http://myhouse.local/sujet/deposer/particulier/upload/277', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(278, 'AU7QvpXJB9ZnDcbTu', 0, 0, 1, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 500, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 1, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 1, 0, 1, 0, 1, 1, 1, 1, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 1, 1, 1, 0, 1, 1, 1, 0, 1, '50m', NULL, '800m', '900m', '300m', '1,6km', '1,1km', '1,1km', '1,6km', '500m', NULL, NULL, NULL, 0, 0, 0, 0, 1, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.59234', '-7.62274', '[\"a2653450339bfb7646e81047b6460308.jpeg\",\"860ee003426292c34ac35e9056b0ea77.jpg\",\"aeef63adef60670ea9396116534cbb1b.jpg\",\"0bcfacbf899d4465c503e43882dfa57f.jpg\",\"a92931bebc14ee9f2d3fa865353b9a78.jpg\",\"eba3308f579afa21b9c78a1286fe8499.jpg\"]', 1, '{\"fr\":\"Rue du Parc\"}', NULL, '{\"fr\":\"The setup in your Vue application looks like the following (using the lang.js NPM package):\"}', 1, 1, '2020-06-04 08:15:48', '2020-06-04 09:12:35', 'Casablanca', 'MAR', 'Sidi Belyout', '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/278', 'http://myhouse.local/sujet/deposer/particulier/description?id=278&type=appartement', 'http://myhouse.local/sujet/deposer/particulier/critere?appart_etage=1%20appart%28s%29%20par%20%C3%A9tage&appart_etage_immeuble=2%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_niveau=Sur%20un%20niveau&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&box=1&buanderie=1&campagne=800m&chauffe_eau=1&climatisation=1&cuisine_equipe=1&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=300m&dressings=1%20dressing%28s%29&ecole=1&espace_vert=1&foret=1%2C6km&gardiennage=1&golf=1%2C1km&id=278&jardin_privatif=1&mcampagne=1&mdesert=1&mforet=1&mgolf=1&mmontagne=1&montagne=900m&mosquee=1&mplage=1&mriviere=1&mspot_surf=1&mstation_ski=1&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&piscine=1&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=50m&restaurent=1&riviere=1%2C1km&salle_fitness=1&spot_surf=1%2C6km&station_ski=500m&superette=1&surface_habitable=500&terrain_sport=1&terrasses=1%20terrasse%28s%29', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/278', 'http://myhouse.local/sujet/deposer/particulier/upload/278', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(279, 'ABoIw27rsTGBkss6W', 0, 0, 1, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 1, '2020-10-25 00:00:00', '2020-11-24 00:00:00', '{\"fr\":\"2\\u00e8me main\"}', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, '{\"fr\":\"4 pi\\u00e8ce(s)\"}', NULL, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"Sans fonds de commerce\"}', NULL, 450, 200, 45, 6, 1, 1, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58951', '-7.60307', '[\"8cad11f5f002a781f4fd2122002d2742.jpeg\",\"84aabd9912a880217809bbc9520ad794.jpeg\",\"725fdf9f48fdb2971fe9fe819f46c2db.jpg\",\"6c8f6ff0896e347aa739a4b969701bb1.jpg\",\"a744a99dfd2cb20148b5c23f21a283a7.jpg\",\"4a97ce223cd22f023750e17ed832548e.jpg\",\"a62ed1c6051251146fcdb7b9a042dc39.jpg\",\"f2245c40fa40a302926612bf8c371fe8.jpg\",\"8beb691f89f1872e83a22161bfae70f5.jpg\"]', 1, '{\"fr\":\"Impasse Boulevard de la Gironde\"}', NULL, '{\"fr\":\"The setup in your Vue application looks like the following (using the lang.js NPM package):\"}', 14, 1, '2020-06-04 08:18:25', '2020-06-04 09:09:35', 'Casablanca', 'MAR', 'Mers-Sultan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 40, NULL, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/279', 'http://myhouse.local/sujet/deposer/particulier/description?id=279&type=local_commercial', 'http://myhouse.local/sujet/deposer/particulier/critere?alarme=1&angle_de_rue=1&appart_type_un=2%C3%A8me%20main&fond_commerce=Sans%20fonds%20de%20commerce&hauteur_plafond=6&id=279&longueur_facade=45&mezzanine=1&nombre_piece=4%20pi%C3%A8ce%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&sous_pente=200&surface_total=450&terrasse_commerciale=40&wc_sanitaire=1', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/279', 'http://myhouse.local/sujet/deposer/particulier/upload/279', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(280, 'AmzDqCurjFfF6ZKLy', 0, 1, 0, 0, NULL, NULL, '780', NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 450, NULL, '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', NULL, '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', NULL, 0, NULL, 0, NULL, NULL, 0, 0, 1, 0, 0, 1, 1, 0, 1, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 1, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 1, 0, 0, '{\"fr\":\"Implant\\u00e9 dans un Centre d\'affaires\"}', NULL, 200, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, '{\"fr\":\"1 box\"}', '{\"fr\":\"1 salle(s) de r\\u00e9union\"}', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58729', '-7.62201', '[\"949f19c49599ca00c3dc149e1e2bfa5b.jpeg\",\"d73fff3ff9a78f2495c464a4847a0d01.jpeg\",\"18f6a1f1b65eb48fe45e8e1609d87a98.jpg\",\"25f348e6765867f660be9c22dc2626c6.jpg\",\"2b6b500ed4eec9ee669497961d87642c.jpg\",\"b922ce16b4fc781c2175f406196a7fee.jpg\"]', 1, '{\"fr\":\"Rue la Boule F\\u00e9d\\u00e9rale\"}', NULL, '{\"fr\":\"The setup in your Vue application looks like the following (using the lang.js NPM package):\"}', 10, 1, '2020-06-04 08:20:23', '2020-06-04 09:14:24', 'Casablanca', 'MAR', 'Sidi Belyout', '{\"fr\":\"1 balcon(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 'oui', 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/280', 'http://myhouse.local/sujet/deposer/particulier/description?id=280&type=plateau', 'http://myhouse.local/sujet/deposer/particulier/critere?acceuil=1&appart_etage_immeuble=2%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&ascenseur=1&balcons=1%20balcon%28s%29&chauffage=1&chauffe_eau=1&climatisation=1&coin_cuisine=1&cour=1&coworking=1&domiciliation=1&gardiennage=1&hauteur_sous_plafond=200&id=280&internet=1&interphone=1&monte_charge=1&nombre_box=1%20box&open_space=1&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&salle_reunion=1%20salle%28s%29%20de%20r%C3%A9union&surface_habitable=450&terrasses=1%20terrasse%28s%29&wc_sanitaire=1&zone_disponible=Implant%C3%A9%20dans%20un%20Centre%20d%27affaires', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/280', 'http://myhouse.local/sujet/deposer/particulier/upload/280', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(281, 'AJrmzdg1kEnK8CtxL', 1, 1, 0, 1, '1.200.000', NULL, '600', NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 600, NULL, NULL, NULL, NULL, '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 1, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 1, 1, 1, 1, 1, 1, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '200m', NULL, '1,5km', '600m', '00m', '300m', '1,9km', '400m', '300m', '1,4km', 750, NULL, NULL, 1, 1, 1, 0, 0, 0, 1, '{\"fr\":\"Sous-sol + RDC\"}', NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 1, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58545', '-7.67396', '[\"85a6379ff457265604eed1a084c599b9.jpeg\",\"67748d5ca1e6ca8d22675d7a40186825.jpg\",\"fc49a213504e1fe8ff0539b46e9ecad2.jpg\",\"abe6e357e2af319119a7e7d00420f837.jpg\",\"788b83d5e47df9961e494ed3f0fbbbaf.jpg\",\"cb2926e2b960dd64b7e1fa121705b7a7.jpg\",\"e14d44d108fea4bba683c0eefd33acec.jpg\",\"168a0a1b8bff04f326fa4fdf0dda2517.jpg\",\"5e226e778d1c14d4f0b890003abee637.jpg\"]', 1, '{\"fr\":\"Rue du D\\u00e9troit d\'Ormuz\"}', NULL, '{\"fr\":\"The setup in your Vue application looks like the following (using the lang.js NPM package):\"}', 3, 1, '2020-06-04 08:22:21', '2020-06-04 09:14:19', 'Casablanca', 'MAR', 'Anfa', '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 1, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/281', 'http://myhouse.local/sujet/deposer/particulier/description?id=281&type=maison', 'http://myhouse.local/sujet/deposer/particulier/critere?amenagement_type=Sous-sol%20%2B%20RDC&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&buanderie=1&campagne=1%2C5km&cave=1&chauffage=1&chauffe_eau=1&cheminee=1&climatisation=1&cour=1&cuisine_equipe=1&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&foret=300m&golf=400m&hammam_beldi=1&id=281&interphone=1&jaccuzi=1&jardin_privatif=1&mcampagne=1&mdesert=1&mforet=1&mgolf=1&mmontagne=1&montagne=600m&mplage=1&mriviere=1&mspot_surf=1&mstation_ski=1&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=200m&riviere=1%2C9km&spot_surf=300m&station_ski=1%2C4km&superficie_terrain=750&surface_habitable=600&terrasses=1%20terrasse%28s%29&vente_meuble=1&vente_non_meuble=1', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/281', 'http://myhouse.local/sujet/deposer/particulier/upload/281', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(282, 'AFGOb7h8TH1OnlESW', 1, 0, 1, 0, '400.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '200m', '300m', '500m', '1,3km', '1,5km', '300m', '700m', '1,2km', '1,2km', '50m', 700, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 1, 1, 1, 1, '{\"fr\":\"1\"}', '{\"fr\":\"En lotissement\"}', 1, NULL, NULL, NULL, 0, NULL, '33.57832', '-7.6061', '[\"ccdce0bed24061ebdb787825bd7b2db7.jpeg\",\"5432529f1810bf361e38c2a43c6f70fa.jpg\",\"9633a2baeaeb60c2178e91a90aa73d40.jpg\",\"0a968b70f94a2c51961cde239d648f2e.jpg\",\"7f5b29acaec4670d6896958106538105.jpg\",\"e7d58c0d6464968d1a6c5c92ed84e3a3.jpg\"]', 1, '{\"fr\":\"Boulevard Imp\\u00e9rial\"}', NULL, '{\"fr\":\"The setup in your Vue application looks like the following (using the lang.js NPM package):\"}', 17, 1, '2020-06-04 08:24:51', '2020-06-04 09:14:14', 'Casablanca', 'MAR', 'Mechouar de Casablanca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/282', 'http://myhouse.local/sujet/deposer/particulier/description?id=282&type=residentiel', 'http://myhouse.local/sujet/deposer/particulier/critere?assainissement=1&campagne=500m&desert=1%2C5km&foret=1%2C2km&golf=1%2C2km&id=282&lotissement=En%20lotissement&mcampagne=1&mdesert=1&mforet=1&mgolf=1&mmontagne=1&montagne=1%2C3km&mplage=1&mriviere=1&mspot_surf=1&mstation_ski=1&mvoix=1&plage=200m&puits=1&raccordement_eau=1&raccordement_electricite=1&raccordement_telephone=1&riviere=700m&spot_surf=300m&station_ski=50m&superficie_terrain=700&titre_foncier=1&voie=300m', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/282', 'http://myhouse.local/sujet/deposer/particulier/upload/282', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(283, 'AfVpdQK64EqZa3C8l', 1, 0, 0, 0, '1.500.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 450, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58584', '-7.60462', '[\"077f768dff1f553cf91eb0cd669e3c3d.jpeg\",\"76008f85db7da4fa196a12005ee0e309.jpg\",\"5aa2b49a053b1ff64135e59126fb891f.jpg\",\"0be18cd9e37709025e9400e9482b4e46.jpg\",\"36d512768db6bde4b87a09bfe7c22f77.jpg\",\"1160940b032477587124942932bad963.jpg\",\"2684fe60825507f376177139d9faffb2.jpg\",\"2cb6b057f20f9c5c66aa7e280bc0ea6c.jpg\"]', 1, '{\"fr\":\"Rue Libourne\"}', NULL, '{\"fr\":\"Stefan: \\u201c[The] Routing feature can be used to get the translations from any part of code, even from mobile applications, desktop applications, anything that can issue HTTP request to server.\\u201d\"}', 1, 1, '2020-06-04 10:01:07', '2020-06-04 10:56:18', 'Casablanca', 'MAR', 'Mers-Sultan', '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 200, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/283', 'http://myhouse.local/sujet/deposer/particulier/description?id=283&type=appartement', 'http://myhouse.local/sujet/deposer/particulier/critere?appart_etage=1%20appart%28s%29%20par%20%C3%A9tage&appart_etage_immeuble=2%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_niveau=Sur%20un%20niveau&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=00m&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&foret=00m&golf=00m&id=283&montagne=00m&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=00m&spot_surf=00m&station_ski=00m&surface_habitable=450&terrasses=1%20terrasse%28s%29', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/283', 'http://myhouse.local/sujet/deposer/particulier/upload/283', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(284, 'A8eDh4fslUqetBdgs', 0, 1, 0, 0, NULL, NULL, '200', NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 10, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', 30, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"Sous-sol + RDC\"}', NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, NULL, NULL, 1, 120, 30, 50, 30, NULL, 40, 1, 1, 1, 14, 1, 4, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, '{\"fr\":\"Implant\\u00e9 en zone industrielle\"}', NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, 1, '2020-06-04 10:07:06', '2020-06-04 10:28:08', NULL, NULL, NULL, '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', 1, 4, 4, 44, 4, NULL, NULL, NULL, NULL, 'http://myhouse.local/sujet/deposer/particulier/edit/284', 0, 0, NULL, NULL, 'oui', 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/284', 'http://myhouse.local/sujet/deposer/particulier/description?id=284&type=appartement', 'http://myhouse.local/sujet/deposer/particulier/critere?appart_etage=1%20appart%28s%29%20par%20%C3%A9tage&appart_etage_immeuble=2%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_niveau=Sur%20un%20niveau&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=00m&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&foret=00m&golf=00m&id=284&montagne=00m&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=00m&spot_surf=00m&station_ski=00m&surface_habitable=10&terrasses=1%20terrasse%28s%29', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(285, 'AtAor2Z21iy1N1hSW', 1, 0, 0, 0, '30.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 330, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58584', '-7.60462', '[\"5a12c277e60256220d86173531ac5af7.jpg\",\"f764c9de9b4fe0bc41b568feb7f72600.jpg\",\"a146ed35b15a0efa73c6f25052149dc5.jpg\",\"8612794dc7dc73dce36e2e5c76dba77c.jpg\",\"589d287f59dce7657ba2082062e27ba9.jpg\",\"75dc31e1f0870550115641b64ed7c284.jpg\",\"6ea01e2a06a6557717557250238344ed.jpg\",\"9ea7fb73051314c0584b7dd99e170d2e.jpg\",\"c68c655ac62bfdfa346a95a59f391514.jpg\"]', 1, '{\"fr\":\"Rue Libourne\"}', NULL, '{\"fr\":\"\\u201cLaravel Localization to Vue\\u201d is a new package by Stefan Ninic that converts Laravel localization into a format consumable by JavaScript packages like Lang.js, which is a Laravel translator class in Javascript. The package will help you quickly transform Laravel translations into a format consumable by a Vue.js application\"}', 1, 1, '2020-06-04 10:30:03', '2020-06-04 10:56:08', 'Casablanca', 'MAR', 'Mers-Sultan', '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/285', 'http://myhouse.local/sujet/deposer/particulier/description?id=285&type=appartement', 'http://myhouse.local/sujet/deposer/particulier/critere?appart_etage=1%20appart%28s%29%20par%20%C3%A9tage&appart_etage_immeuble=2%20%C3%A9tage%28s%29%20par%20immeuble&appart_etage_niveau=Sur%20un%20niveau&appart_etage_nombre=Situ%C3%A9%20au%20rez-de-chauss%C3%A9e&appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=00m&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&foret=00m&golf=00m&id=285&montagne=00m&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=00m&spot_surf=00m&station_ski=00m&surface_habitable=330&terrasses=1%20terrasse%28s%29', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/285', 'http://myhouse.local/sujet/deposer/particulier/upload/285', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(286, 'AdMQc9B4zwpAWRAUi', 1, 0, 0, 1, '800.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', 50, NULL, NULL, NULL, NULL, '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 1, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 1, 0, 0, 0, 0, 0, 1, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '00m', NULL, '1,2km', '00m', '00m', '800m', '1,8km', '00m', '00m', '00m', 65, '{\"fr\":\"Sous-sol + RDC\"}', NULL, 1, 0, 1, 0, 0, 0, 1, NULL, NULL, '{\"fr\":\"Fa\\u00e7ades en bois\"}', 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58584', '-7.60462', '[\"5791a61d062a6a6d31e9005388b39923.jpeg\",\"b0f408c067abf150093620833b44e156.jpg\",\"bf00421477d9c90eae116937018c9f9e.jpg\",\"b19f096147ede8bf952dbfc615179d67.jpg\",\"28e9befaa6f3b5e983a51ec5739da2bf.jpg\",\"949c7df2204619048d47a108bf1a4b9a.jpg\",\"4c5e65479d72e66266854509baa08d85.jpg\"]', 1, '{\"fr\":\"Rue Libourne\"}', NULL, '{\"fr\":\"\\u201cLaravel Localization to Vue\\u201d is a new package by Stefan Ninic that converts Laravel localization into a format consumable by JavaScript packages like Lang.js, which is a Laravel translator class in Javascript. The package will help you quickly transform Laravel translations into a format consumable by a Vue.js application\"}', 4, 1, '2020-06-04 10:32:10', '2020-06-04 10:56:00', 'Casablanca', 'MAR', 'Mers-Sultan', '{\"fr\":\"1 balcon(s)\"}', '{\"fr\":\"1 dressing(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/286', 'http://myhouse.local/sujet/deposer/particulier/description?id=286&type=chalet', 'http://myhouse.local/sujet/deposer/particulier/critere?appart_type_un=2%C3%A8me%20main&balcons=1%20balcon%28s%29&campagne=1%2C2km&cave=1&cour=1&cuisine_equipe=1&cuisine_type=Cuisine%20am%C3%A9ricaine&desert=00m&dressings=1%20dressing%28s%29&facade_type=Fa%C3%A7ades%20en%20bois&foret=00m&gardiennage=1&golf=00m&id=286&interphone=1&jaccuzi=1&mcampagne=1&montagne=00m&mriviere=1&mspot_surf=1&nombre_chambre=1%20chambre%28s%29&nombre_salle_bain=1%20salle%28s%29%20de%20bain&nombre_salon=1%20salon%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=00m&riviere=1%2C8km&sous_sol=Sous-sol%20%2B%20RDC&spot_surf=800m&station_ski=00m&superficie_terrain=65&surface_habitable=50&terrasses=1%20terrasse%28s%29&vente_meuble=1', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/286', 'http://myhouse.local/sujet/deposer/particulier/upload/286', NULL, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0),
(287, 'AEdDUvwiSiL9Dtzby', 0, 0, 1, 0, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, '{\"fr\":\"2\\u00e8me main\"}', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"Sous-sol + RDC\"}', NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, NULL, NULL, 0, 40, 50, 80, 60, NULL, 12, 1, 1, 1, 4, 5, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, '{\"fr\":\"Implant\\u00e9 en zone industrielle\"}', NULL, NULL, 0, NULL, '33.58584', '-7.60462', '[\"6de98df0b192bb41d5cbcd997317ab84.jpg\",\"a30a9159466502e98aadbe9e55589e6f.jpg\",\"dc33da0a57b3e78cbc5496703de7e9c9.jpg\",\"5528b0c7cdb628f398a23fea5f5703d8.jpg\",\"de837391961764543da67e70328c4564.jpg\",\"a07649e9d605873dab22b66ab0638352.jpg\",\"f7628cb1b981db244b3894969a45517b.jpg\",\"f52dfe1b0eaed022ee4a4a673921bdf5.jpg\"]', 1, '{\"fr\":\"Rue Libourne\"}', NULL, '{\"fr\":\"\\u201cLaravel Localization to Vue\\u201d is a new package by Stefan Ninic that converts Laravel localization into a format consumable by JavaScript packages like Lang.js, which is a Laravel translator class in Javascript. The package will help you quickly transform Laravel translations into a format consumable by a Vue.js application\"}', 11, 1, '2020-06-04 10:34:05', '2020-06-04 10:55:49', 'Casablanca', 'MAR', 'Mers-Sultan', NULL, NULL, 4, 5, 8, 78, 8, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/287', 'http://myhouse.local/sujet/deposer/particulier/description?id=287&type=entrepot', 'http://myhouse.local/sujet/deposer/particulier/critere?alarme=1&amenagement_type=Sous-sol%20%2B%20RDC&appart_type_un=2%C3%A8me%20main&espace_activite=80&espace_bureau=60&espace_entrepot=50&hauteur_entrepot=12&id=287&monte_charge=1&place_vehicule=1%20place%28s%29%20v%C3%A9hicule%20%20&pont_roulant=1&portail_cinq=5&portail_deux=5&portail_huit=8&portail_quatre=4&portail_sept=78&portail_six=8&portail_trois=45&portail_un=4&site_clos=1&surface_batiment=40&wc_sanitaire=1&zone_implante=Implant%C3%A9%20en%20zone%20industrielle', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/287', 'http://myhouse.local/sujet/deposer/particulier/upload/287', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(289, 'AHgoSMIg7FeNDBep7', 1, 0, 0, 0, '12.000.000', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, '300m', '1,4km', '00m', '00m', '900m', '00m', '500m', '1,8km', '00m', '1,5km', 450, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 1, 1, 1, 1, '{\"fr\":\"1\"}', NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58584', '-7.60462', '[\"ac19e4b0b5fce22ec81cd37841e83e74.jpg\",\"c33aeae224aa38b90d2b0f3ef7947d8e.jpg\",\"87d6478b133119bdd594305feade8f6d.jpg\",\"35bff2db205af4c5352628d246539b70.jpg\",\"0450ea49c4af1b177a394392d55837b3.jpg\",\"33e73c812fa7926c716a06f4bec76d25.jpg\",\"13fc181db1c317a19ef6b5ad3f548202.jpg\",\"77f8c0662429322e72644aaab052b3a5.jpg\"]', 1, '{\"fr\":\"Rue Libourne\"}', NULL, '{\"fr\":\"\\u201cLaravel Localization to Vue\\u201d is a new package by Stefan Ninic that converts Laravel localization into a format consumable by JavaScript packages like Lang.js, which is a Laravel translator class in Javascript. The package will help you quickly transform Laravel translations into a format consumable by a Vue.js application\"}', 19, 1, '2020-06-04 10:50:56', '2020-06-04 10:55:36', 'Casablanca', 'MAR', 'Mers-Sultan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/289', 'http://myhouse.local/sujet/deposer/particulier/description?id=289&type=agricole', 'http://myhouse.local/sujet/deposer/particulier/critere?campagne=00m&desert=900m&foret=00m&golf=1%2C8km&id=289&mdesert=1&mforet=1&mgolf=1&mmontagne=1&montagne=00m&mplage=1&mriviere=1&mstation_ski=1&mvoix=1&plage=300m&puits=1&raccordement_eau=1&raccordement_electricite=1&raccordement_telephone=1&riviere=500m&spot_surf=00m&station_ski=1%2C5km&superficie_terrain=450&titre_foncier=1&voie=1%2C4km', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/289', 'http://myhouse.local/sujet/deposer/particulier/upload/289', NULL, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1),
(290, 'Avln5lUdJhgjGaHBF', 0, 1, 0, 0, NULL, '4500', NULL, '50', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 1, 0, NULL, 0, 0, 1, 0, 1, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 1, 0, NULL, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, NULL, 0, 1, 1, 1, 0, 1, 1, 1, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58584', '-7.60462', '[\"2f1d65cb17c5665241338bd06d31c031.jpeg\",\"d1014ea91888f9b0df3c6fa2311efbaa.jpg\",\"a236d37cbf5ab0087f869f70fa7c2cfe.jpg\",\"e96d8b1e049a01b214705778cc616ff0.jpg\",\"94750002395ec6ba988ca9c1db9f76c6.jpg\",\"6467829444bab5b5d4d749cef2f41743.jpg\",\"a40ae76f0f6623244c3eacfa9194ee93.jpg\"]', 1, '{\"fr\":\"Rue Libourne\"}', NULL, '{\"fr\":\"\\u201cLaravel Localization to Vue\\u201d is a new package by Stefan Ninic that converts Laravel localization into a format consumable by JavaScript packages like Lang.js, which is a Laravel translator class in Javascript. The package will help you quickly transform Laravel translations into a format consumable by a Vue.js application\"}', 8, 1, '2020-06-04 10:53:08', '2020-06-04 10:55:32', 'Casablanca', 'MAR', 'Mers-Sultan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 45, 200, NULL, NULL, 0, 0, NULL, NULL, 'non', 0, 0, NULL, 'http://myhouse.local/sujet/deposer/particulier/type/290', 'http://myhouse.local/sujet/deposer/particulier/description?id=290&type=cite', 'http://myhouse.local/sujet/deposer/particulier/critere?blanchisserie=1&cafeteriat=1&chauffage=1&deux_lits=1&eau_chaude=1&espace_vert=1&id=290&individuelle=1&kichenette=1&miroir=1&placard=1&quatre_lits=1&restauration=1&salle_bain=1&superette=1&surface_disponible_deux=200&surface_disponible_un=45&terrain_sport=1&trois_lits=1&wifi=1', 'http://myhouse.local/sujet/deposer/particulier/showlocalisation/290', 'http://myhouse.local/sujet/deposer/particulier/upload/290', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `particulier_agendas`
--

CREATE TABLE `particulier_agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `particulier_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `particulier_criteres`
--

CREATE TABLE `particulier_criteres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appart_type_un` tinyint(1) NOT NULL DEFAULT 0,
  `surface_habitable` tinyint(1) NOT NULL DEFAULT 0,
  `appart_etage_niveau` tinyint(1) NOT NULL DEFAULT 0,
  `appart_etage_nombre` tinyint(1) NOT NULL DEFAULT 0,
  `appart_etage` tinyint(1) NOT NULL DEFAULT 0,
  `appart_etage_immeuble` tinyint(1) NOT NULL DEFAULT 0,
  `cuisine_type` tinyint(1) NOT NULL DEFAULT 0,
  `cuisine_equipe` tinyint(1) NOT NULL DEFAULT 0,
  `dressing` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_salle_bain` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_salon` tinyint(1) NOT NULL DEFAULT 0,
  `terrasse` tinyint(1) NOT NULL DEFAULT 0,
  `jardin_privatif` tinyint(1) NOT NULL DEFAULT 0,
  `cour` tinyint(1) NOT NULL DEFAULT 0,
  `buanderie` tinyint(1) NOT NULL DEFAULT 0,
  `cheminee` tinyint(1) NOT NULL DEFAULT 0,
  `climatisation` tinyint(1) NOT NULL DEFAULT 0,
  `chauffe_eau` tinyint(1) NOT NULL DEFAULT 0,
  `espace_vert` tinyint(1) NOT NULL DEFAULT 0,
  `gardiennage` tinyint(1) NOT NULL DEFAULT 0,
  `place_vehicule` tinyint(1) NOT NULL DEFAULT 0,
  `box` tinyint(1) NOT NULL DEFAULT 0,
  `piscine` tinyint(1) NOT NULL DEFAULT 0,
  `terrain_sport` tinyint(1) NOT NULL DEFAULT 0,
  `spa` tinyint(1) NOT NULL DEFAULT 0,
  `superette` tinyint(1) NOT NULL DEFAULT 0,
  `ecole` tinyint(1) NOT NULL DEFAULT 0,
  `mosquee` tinyint(1) NOT NULL DEFAULT 0,
  `shopping` tinyint(1) NOT NULL DEFAULT 0,
  `restaurent` tinyint(1) NOT NULL DEFAULT 0,
  `plage` tinyint(1) NOT NULL DEFAULT 0,
  `voie` tinyint(1) NOT NULL DEFAULT 0,
  `campagne` tinyint(1) NOT NULL DEFAULT 0,
  `montagne` tinyint(1) NOT NULL DEFAULT 0,
  `desert` tinyint(1) NOT NULL DEFAULT 0,
  `spot_surf` tinyint(1) NOT NULL DEFAULT 0,
  `riviere` tinyint(1) NOT NULL DEFAULT 0,
  `golf` tinyint(1) NOT NULL DEFAULT 0,
  `foret` tinyint(1) NOT NULL DEFAULT 0,
  `station_ski` tinyint(1) NOT NULL DEFAULT 0,
  `superficie_terrain` tinyint(1) NOT NULL DEFAULT 0,
  `sous_sol` tinyint(1) NOT NULL DEFAULT 0,
  `type_terrain` tinyint(1) NOT NULL DEFAULT 0,
  `jaccuzi` tinyint(1) NOT NULL DEFAULT 0,
  `hammam_beldi` tinyint(1) NOT NULL DEFAULT 0,
  `cave` tinyint(1) NOT NULL DEFAULT 0,
  `service_menage` tinyint(1) NOT NULL DEFAULT 0,
  `salle_fitness` tinyint(1) NOT NULL DEFAULT 0,
  `air_jeu` tinyint(1) NOT NULL DEFAULT 0,
  `interphone` tinyint(1) NOT NULL DEFAULT 0,
  `amenagement_type` tinyint(1) NOT NULL DEFAULT 0,
  `chalet_type` tinyint(1) NOT NULL DEFAULT 0,
  `facade_type` tinyint(1) NOT NULL DEFAULT 0,
  `deux_salle_bain` tinyint(1) NOT NULL DEFAULT 0,
  `garage_ferme` tinyint(1) NOT NULL DEFAULT 0,
  `exploitation_agricole` tinyint(1) NOT NULL DEFAULT 0,
  `reception` tinyint(1) NOT NULL DEFAULT 0,
  `reservation` tinyint(1) NOT NULL DEFAULT 0,
  `dejeune` tinyint(1) NOT NULL DEFAULT 0,
  `wifi` tinyint(1) NOT NULL DEFAULT 0,
  `tele_cable` tinyint(1) NOT NULL DEFAULT 0,
  `type_chambre` tinyint(1) NOT NULL DEFAULT 0,
  `chambre_non_fumeur` tinyint(1) NOT NULL DEFAULT 0,
  `service_en_chambre` tinyint(1) NOT NULL DEFAULT 0,
  `menage_quotidien` tinyint(1) NOT NULL DEFAULT 0,
  `animal_de_compagnie` tinyint(1) NOT NULL DEFAULT 0,
  `parking_gratuit` tinyint(1) NOT NULL DEFAULT 0,
  `restauration` tinyint(1) NOT NULL DEFAULT 0,
  `cafeteriat` tinyint(1) NOT NULL DEFAULT 0,
  `blanchisserie` tinyint(1) NOT NULL DEFAULT 0,
  `individuelle` tinyint(1) NOT NULL DEFAULT 0,
  `deux_lits` tinyint(1) NOT NULL DEFAULT 0,
  `trois_lits` tinyint(1) NOT NULL DEFAULT 0,
  `quatre_lits` tinyint(1) NOT NULL DEFAULT 0,
  `surface_disponible` tinyint(1) NOT NULL DEFAULT 0,
  `meuble` tinyint(1) NOT NULL DEFAULT 0,
  `kichenette` tinyint(1) NOT NULL DEFAULT 0,
  `salle_bain` tinyint(1) NOT NULL DEFAULT 0,
  `miroir` tinyint(1) NOT NULL DEFAULT 0,
  `bureau` tinyint(1) NOT NULL DEFAULT 0,
  `chauffage` tinyint(1) NOT NULL DEFAULT 0,
  `eau_chaude` tinyint(1) NOT NULL DEFAULT 0,
  `placard` tinyint(1) NOT NULL DEFAULT 0,
  `zone_disponible` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_piece` tinyint(1) NOT NULL DEFAULT 0,
  `hauteur_sous_plafond` tinyint(1) NOT NULL DEFAULT 0,
  `internet` tinyint(1) NOT NULL DEFAULT 0,
  `wc_sanitaire` tinyint(1) NOT NULL DEFAULT 0,
  `balcon` tinyint(1) NOT NULL DEFAULT 0,
  `coin_cuisine` tinyint(1) NOT NULL DEFAULT 0,
  `acceuil` tinyint(1) NOT NULL DEFAULT 0,
  `ascenseur` tinyint(1) NOT NULL DEFAULT 0,
  `monte_charge` tinyint(1) NOT NULL DEFAULT 0,
  `coworking` tinyint(1) NOT NULL DEFAULT 0,
  `domiciliation` tinyint(1) NOT NULL DEFAULT 0,
  `open_space` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_box` tinyint(1) NOT NULL DEFAULT 0,
  `salle_reunion` tinyint(1) NOT NULL DEFAULT 0,
  `frigorifique` tinyint(1) NOT NULL DEFAULT 0,
  `surface_batiment` tinyint(1) NOT NULL DEFAULT 0,
  `espace_entrepot` tinyint(1) NOT NULL DEFAULT 0,
  `espace_activite` tinyint(1) NOT NULL DEFAULT 0,
  `espace_bureau` tinyint(1) NOT NULL DEFAULT 0,
  `amenagement_r_sousol` tinyint(1) NOT NULL DEFAULT 0,
  `hauteur_entrepot` tinyint(1) NOT NULL DEFAULT 0,
  `site_clos` tinyint(1) NOT NULL DEFAULT 0,
  `pont_roulant` tinyint(1) NOT NULL DEFAULT 0,
  `alarme` tinyint(1) NOT NULL DEFAULT 0,
  `portail_un` tinyint(1) NOT NULL DEFAULT 0,
  `portail_deux` tinyint(1) NOT NULL DEFAULT 0,
  `portail_trois` tinyint(1) NOT NULL DEFAULT 0,
  `portail` tinyint(1) NOT NULL DEFAULT 0,
  `surface_garage` tinyint(1) NOT NULL DEFAULT 0,
  `fond_commerce` tinyint(1) NOT NULL DEFAULT 0,
  `terrasses` tinyint(1) NOT NULL DEFAULT 0,
  `surface_total` tinyint(1) NOT NULL DEFAULT 0,
  `sous_pente` tinyint(1) NOT NULL DEFAULT 0,
  `longueur_facade` tinyint(1) NOT NULL DEFAULT 0,
  `hauteur_plafond` tinyint(1) NOT NULL DEFAULT 0,
  `angle_de_rue` tinyint(1) NOT NULL DEFAULT 0,
  `mezzanine` tinyint(1) NOT NULL DEFAULT 0,
  `superficie_exploitable` tinyint(1) NOT NULL DEFAULT 0,
  `surface_batie` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_eau` tinyint(1) NOT NULL DEFAULT 0,
  `puits` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_electricite` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_telephone` tinyint(1) NOT NULL DEFAULT 0,
  `titre_foncier` tinyint(1) NOT NULL DEFAULT 0,
  `lotissement` tinyint(1) NOT NULL DEFAULT 0,
  `assainissement` tinyint(1) NOT NULL DEFAULT 0,
  `zone_implante` tinyint(1) NOT NULL DEFAULT 0,
  `terrain_type` tinyint(1) NOT NULL DEFAULT 0,
  `titre_type` tinyint(1) NOT NULL DEFAULT 0,
  `constructible` tinyint(1) NOT NULL DEFAULT 0,
  `surface_terrain` tinyint(1) NOT NULL DEFAULT 0,
  `particulier_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `balcons` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_chambre` tinyint(1) NOT NULL DEFAULT 0,
  `dressings` tinyint(1) NOT NULL DEFAULT 0,
  `portail_quatre` tinyint(1) NOT NULL DEFAULT 0,
  `portail_cinq` tinyint(1) NOT NULL DEFAULT 0,
  `portail_six` tinyint(1) NOT NULL DEFAULT 0,
  `portail_sept` tinyint(1) NOT NULL DEFAULT 0,
  `portail_huit` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `particulier_criteres`
--

INSERT INTO `particulier_criteres` (`id`, `appart_type_un`, `surface_habitable`, `appart_etage_niveau`, `appart_etage_nombre`, `appart_etage`, `appart_etage_immeuble`, `cuisine_type`, `cuisine_equipe`, `dressing`, `nombre_salle_bain`, `nombre_salon`, `terrasse`, `jardin_privatif`, `cour`, `buanderie`, `cheminee`, `climatisation`, `chauffe_eau`, `espace_vert`, `gardiennage`, `place_vehicule`, `box`, `piscine`, `terrain_sport`, `spa`, `superette`, `ecole`, `mosquee`, `shopping`, `restaurent`, `plage`, `voie`, `campagne`, `montagne`, `desert`, `spot_surf`, `riviere`, `golf`, `foret`, `station_ski`, `superficie_terrain`, `sous_sol`, `type_terrain`, `jaccuzi`, `hammam_beldi`, `cave`, `service_menage`, `salle_fitness`, `air_jeu`, `interphone`, `amenagement_type`, `chalet_type`, `facade_type`, `deux_salle_bain`, `garage_ferme`, `exploitation_agricole`, `reception`, `reservation`, `dejeune`, `wifi`, `tele_cable`, `type_chambre`, `chambre_non_fumeur`, `service_en_chambre`, `menage_quotidien`, `animal_de_compagnie`, `parking_gratuit`, `restauration`, `cafeteriat`, `blanchisserie`, `individuelle`, `deux_lits`, `trois_lits`, `quatre_lits`, `surface_disponible`, `meuble`, `kichenette`, `salle_bain`, `miroir`, `bureau`, `chauffage`, `eau_chaude`, `placard`, `zone_disponible`, `nombre_piece`, `hauteur_sous_plafond`, `internet`, `wc_sanitaire`, `balcon`, `coin_cuisine`, `acceuil`, `ascenseur`, `monte_charge`, `coworking`, `domiciliation`, `open_space`, `nombre_box`, `salle_reunion`, `frigorifique`, `surface_batiment`, `espace_entrepot`, `espace_activite`, `espace_bureau`, `amenagement_r_sousol`, `hauteur_entrepot`, `site_clos`, `pont_roulant`, `alarme`, `portail_un`, `portail_deux`, `portail_trois`, `portail`, `surface_garage`, `fond_commerce`, `terrasses`, `surface_total`, `sous_pente`, `longueur_facade`, `hauteur_plafond`, `angle_de_rue`, `mezzanine`, `superficie_exploitable`, `surface_batie`, `raccordement_eau`, `puits`, `raccordement_electricite`, `raccordement_telephone`, `titre_foncier`, `lotissement`, `assainissement`, `zone_implante`, `terrain_type`, `titre_type`, `constructible`, `surface_terrain`, `particulier_id`, `created_at`, `updated_at`, `balcons`, `nombre_chambre`, `dressings`, `portail_quatre`, `portail_cinq`, `portail_six`, `portail_sept`, `portail_huit`) VALUES
(105, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 230, '2020-05-27 16:00:01', '2020-05-27 16:00:01', 0, 0, 0, 0, 0, 0, 0, 0),
(106, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 231, '2020-05-27 16:07:01', '2020-05-27 16:07:01', 0, 0, 0, 0, 0, 0, 0, 0),
(112, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 233, '2020-05-28 09:37:28', '2020-05-28 09:37:28', 0, 1, 1, 0, 0, 0, 0, 0),
(114, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 232, '2020-05-28 11:39:35', '2020-05-28 11:39:35', 0, 0, 0, 0, 0, 0, 0, 0),
(115, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 234, '2020-05-28 14:04:14', '2020-05-28 14:04:14', 0, 0, 0, 0, 0, 0, 0, 0),
(117, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 235, '2020-05-28 14:34:53', '2020-05-28 14:34:53', 0, 0, 0, 0, 0, 0, 0, 0),
(118, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 236, '2020-05-28 14:46:30', '2020-05-28 14:46:30', 0, 0, 0, 0, 0, 0, 0, 0),
(119, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 237, '2020-05-28 15:55:57', '2020-05-28 15:55:57', 0, 0, 0, 0, 0, 0, 0, 0),
(120, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 238, '2020-05-28 16:10:28', '2020-05-28 16:10:28', 0, 0, 0, 0, 0, 0, 0, 0),
(121, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 239, '2020-05-28 16:13:34', '2020-05-28 16:13:34', 1, 0, 0, 0, 0, 0, 0, 0),
(122, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 240, '2020-05-28 16:21:54', '2020-05-28 16:21:54', 1, 0, 0, 0, 0, 0, 0, 0),
(124, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 241, '2020-05-28 17:13:55', '2020-05-28 17:13:55', 0, 0, 0, 0, 0, 0, 0, 0),
(125, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 242, '2020-05-28 17:15:52', '2020-05-28 17:15:52', 0, 0, 0, 0, 0, 0, 0, 0),
(126, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 244, '2020-05-28 18:50:42', '2020-05-28 18:50:42', 0, 0, 0, 0, 0, 0, 0, 0),
(127, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 245, '2020-05-28 19:24:05', '2020-05-28 19:24:05', 1, 0, 0, 0, 0, 0, 0, 0),
(128, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 246, '2020-05-29 08:37:48', '2020-05-29 08:37:48', 0, 0, 0, 0, 0, 0, 0, 0),
(129, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 247, '2020-05-29 09:42:59', '2020-05-29 09:42:59', 0, 0, 0, 0, 0, 0, 0, 0),
(130, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 248, '2020-05-29 10:12:57', '2020-05-29 10:12:57', 0, 0, 0, 0, 0, 0, 0, 0),
(131, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 249, '2020-05-29 11:56:42', '2020-05-29 11:56:42', 0, 1, 0, 0, 0, 0, 0, 0),
(134, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 250, '2020-05-29 12:30:41', '2020-05-29 12:30:41', 0, 1, 0, 0, 0, 0, 0, 0),
(135, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 242, '2020-05-29 21:09:36', '2020-05-29 21:09:36', 0, 0, 0, 0, 0, 0, 0, 0),
(136, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 248, '2020-05-30 10:23:26', '2020-05-30 10:23:26', 0, 0, 0, 0, 0, 0, 0, 0),
(137, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 248, '2020-05-30 10:39:10', '2020-05-30 10:39:10', 0, 0, 0, 0, 0, 0, 0, 0),
(138, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 248, '2020-05-30 10:50:42', '2020-05-30 10:50:42', 0, 0, 0, 0, 0, 0, 0, 0),
(139, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 248, '2020-05-30 11:26:24', '2020-05-30 11:26:24', 0, 0, 0, 0, 0, 0, 0, 0),
(140, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 236, '2020-05-30 13:38:56', '2020-05-30 13:38:56', 0, 0, 0, 0, 0, 0, 0, 0),
(141, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 254, '2020-05-30 14:59:40', '2020-05-30 14:59:40', 1, 0, 0, 0, 0, 0, 0, 0),
(142, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 257, '2020-05-30 19:42:32', '2020-05-30 19:42:32', 0, 0, 0, 0, 0, 0, 0, 0),
(143, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 260, '2020-05-31 09:55:38', '2020-05-31 09:55:38', 0, 0, 0, 0, 0, 0, 0, 0),
(144, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 262, '2020-05-31 16:14:11', '2020-05-31 16:14:11', 0, 0, 0, 0, 0, 0, 0, 0),
(145, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 263, '2020-05-31 21:52:43', '2020-05-31 21:52:43', 1, 0, 0, 0, 0, 0, 0, 0),
(146, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 248, '2020-06-01 22:01:01', '2020-06-01 22:01:01', 0, 0, 0, 0, 0, 0, 0, 0),
(147, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 267, '2020-06-02 08:53:29', '2020-06-02 08:53:29', 0, 0, 0, 0, 0, 0, 0, 0),
(148, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 270, '2020-06-02 16:51:42', '2020-06-02 16:51:42', 0, 0, 0, 0, 0, 0, 0, 0),
(149, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 271, '2020-06-03 08:13:53', '2020-06-03 08:13:53', 0, 0, 0, 0, 0, 0, 0, 0),
(150, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 275, '2020-06-03 09:21:07', '2020-06-03 09:21:07', 0, 0, 0, 0, 0, 0, 0, 0),
(151, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 276, '2020-06-04 08:12:02', '2020-06-04 08:12:02', 0, 0, 0, 0, 0, 0, 0, 0),
(152, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 277, '2020-06-04 08:14:24', '2020-06-04 08:14:24', 0, 0, 0, 0, 0, 0, 0, 0),
(153, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 278, '2020-06-04 08:16:48', '2020-06-04 08:16:48', 0, 0, 0, 0, 0, 0, 0, 0),
(154, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 279, '2020-06-04 08:19:01', '2020-06-04 08:19:01', 0, 0, 0, 0, 0, 0, 0, 0),
(155, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 280, '2020-06-04 08:21:03', '2020-06-04 08:21:03', 0, 0, 0, 0, 0, 0, 0, 0),
(156, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 281, '2020-06-04 08:23:21', '2020-06-04 08:23:21', 0, 0, 0, 0, 0, 0, 0, 0),
(157, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 282, '2020-06-04 08:25:42', '2020-06-04 08:25:42', 0, 0, 0, 0, 0, 0, 0, 0),
(158, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 283, '2020-06-04 10:01:26', '2020-06-04 10:01:26', 1, 1, 1, 0, 0, 0, 0, 0),
(159, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 285, '2020-06-04 10:30:28', '2020-06-04 10:30:28', 0, 1, 0, 0, 0, 0, 0, 0),
(160, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 286, '2020-06-04 10:32:51', '2020-06-04 10:32:51', 0, 0, 0, 0, 0, 0, 0, 0),
(161, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 287, '2020-06-04 10:34:50', '2020-06-04 10:34:50', 0, 0, 0, 0, 1, 0, 1, 0),
(162, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 288, '2020-06-04 10:36:45', '2020-06-04 10:36:45', 0, 0, 0, 0, 0, 0, 0, 0),
(163, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 289, '2020-06-04 10:51:41', '2020-06-04 10:51:41', 0, 0, 0, 0, 0, 0, 0, 0),
(164, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 290, '2020-06-04 10:53:53', '2020-06-04 10:53:53', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `particulier_interesses`
--

CREATE TABLE `particulier_interesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `particulier_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kserraj@gmail.com', '$2y$10$5UbdvsZJhHRwEyWIYxo9UeiVlp63wXocCDysuRL8qBxQ8xubhRJa2', '2020-05-08 21:09:43'),
('ghoumari@geomark.ma', '$2y$10$D.s2BGKFLWA/GieqCsZOpurEnDJ7xUWVkTTaxbINdvgRMimV5gnqC', '2020-06-01 12:40:46'),
('gjacksongomez@gmail.com', '$2y$10$1CTdRD6VRztrOsdX2vlCeOL6CiV6UhmxwChCJeix0cDLHA52i4Ieq', '2020-06-01 16:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `professionnels`
--

CREATE TABLE `professionnels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `last_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `venteActif` tinyint(1) NOT NULL DEFAULT 0,
  `locationActif` tinyint(1) NOT NULL DEFAULT 0,
  `vente_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `prix_vente` double DEFAULT NULL,
  `prix_mois` double DEFAULT NULL,
  `prix_jour` double DEFAULT NULL,
  `charge_copropriete` double DEFAULT NULL,
  `location_longue_duree` tinyint(1) NOT NULL DEFAULT 0,
  `location_courte_duree` tinyint(1) NOT NULL DEFAULT 0,
  `location_etudiant` tinyint(1) NOT NULL DEFAULT 0,
  `location_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `colocation` tinyint(1) NOT NULL DEFAULT 0,
  `appart_type_un` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface_habitable` double DEFAULT NULL,
  `appart_etage_niveau` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appart_etage_nombre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appart_etage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appart_etage_immeuble` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuisine_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuisine_equipe` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_chambre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dressing` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_salle_bain` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_salon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terrasse` tinyint(1) NOT NULL DEFAULT 0,
  `jardin_privatif` tinyint(1) NOT NULL DEFAULT 0,
  `cour` tinyint(1) NOT NULL DEFAULT 0,
  `buanderie` tinyint(1) NOT NULL DEFAULT 0,
  `cheminee` tinyint(1) NOT NULL DEFAULT 0,
  `climatisation` tinyint(1) NOT NULL DEFAULT 0,
  `chauffe_eau` tinyint(1) NOT NULL DEFAULT 0,
  `espace_vert` tinyint(1) NOT NULL DEFAULT 0,
  `gardiennage` tinyint(1) NOT NULL DEFAULT 0,
  `place_vehicule` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `box` tinyint(1) NOT NULL DEFAULT 0,
  `piscine` tinyint(1) NOT NULL DEFAULT 0,
  `terrain_sport` tinyint(1) NOT NULL DEFAULT 0,
  `spa` tinyint(1) NOT NULL DEFAULT 0,
  `superette` tinyint(1) NOT NULL DEFAULT 0,
  `ecole` tinyint(1) NOT NULL DEFAULT 0,
  `mosquee` tinyint(1) NOT NULL DEFAULT 0,
  `shopping` tinyint(1) NOT NULL DEFAULT 0,
  `restaurent` tinyint(1) NOT NULL DEFAULT 0,
  `plage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voie` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campagne` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montagne` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desert` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spot_surf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `riviere` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foret` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `station_ski` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `superficie_terrain` double DEFAULT NULL,
  `sous_sol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_terrain` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jaccuzi` tinyint(1) NOT NULL DEFAULT 0,
  `hammam_beldi` tinyint(1) NOT NULL DEFAULT 0,
  `cave` tinyint(1) NOT NULL DEFAULT 0,
  `service_menage` tinyint(1) NOT NULL DEFAULT 0,
  `salle_fitness` tinyint(1) NOT NULL DEFAULT 0,
  `air_jeu` tinyint(1) NOT NULL DEFAULT 0,
  `interphone` tinyint(1) NOT NULL DEFAULT 0,
  `amenagement_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chalet_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facade_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deux_salle_bain` tinyint(1) NOT NULL DEFAULT 0,
  `garage_ferme` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exploitation_agricole` tinyint(1) NOT NULL DEFAULT 0,
  `individuelle` tinyint(1) NOT NULL DEFAULT 0,
  `deux_lits` tinyint(1) NOT NULL DEFAULT 0,
  `trois_lits` tinyint(1) NOT NULL DEFAULT 0,
  `quatre_lits` tinyint(1) NOT NULL DEFAULT 0,
  `surface_disponible` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meuble` tinyint(1) NOT NULL DEFAULT 0,
  `kichenette` tinyint(1) NOT NULL DEFAULT 0,
  `salle_bain` tinyint(1) NOT NULL DEFAULT 0,
  `miroir` tinyint(1) NOT NULL DEFAULT 0,
  `bureau` tinyint(1) NOT NULL DEFAULT 0,
  `chauffage` tinyint(1) NOT NULL DEFAULT 0,
  `eau_chaude` tinyint(1) NOT NULL DEFAULT 0,
  `placard` tinyint(1) NOT NULL DEFAULT 0,
  `zone_disponible` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_piece` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hauteur_sous_plafond` double DEFAULT NULL,
  `internet` tinyint(1) NOT NULL DEFAULT 0,
  `wc_sanitaire` tinyint(1) NOT NULL DEFAULT 0,
  `balcon` tinyint(1) NOT NULL DEFAULT 0,
  `coin_cuisine` tinyint(1) NOT NULL DEFAULT 0,
  `acceuil` tinyint(1) NOT NULL DEFAULT 0,
  `ascenseur` tinyint(1) NOT NULL DEFAULT 0,
  `monte_charge` tinyint(1) NOT NULL DEFAULT 0,
  `coworking` tinyint(1) NOT NULL DEFAULT 0,
  `domiciliation` tinyint(1) NOT NULL DEFAULT 0,
  `open_space` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_box` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salle_reunion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frigorifique` tinyint(1) NOT NULL DEFAULT 0,
  `surface_batiment` double DEFAULT NULL,
  `espace_entrepot` double DEFAULT NULL,
  `espace_activite` double DEFAULT NULL,
  `espace_bureau` double DEFAULT NULL,
  `amenagement_r_sousol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hauteur_entrepot` double DEFAULT NULL,
  `site_clos` tinyint(1) NOT NULL DEFAULT 0,
  `pont_roulant` tinyint(1) NOT NULL DEFAULT 0,
  `alarme` tinyint(1) NOT NULL DEFAULT 0,
  `portail_un` double DEFAULT NULL,
  `portail_deux` double DEFAULT NULL,
  `portail_trois` double DEFAULT NULL,
  `portail` double DEFAULT NULL,
  `surface_garage` double DEFAULT NULL,
  `fond_commerce` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terrasses` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surface_total` double DEFAULT NULL,
  `sous_pente` double DEFAULT NULL,
  `longueur_facade` double DEFAULT NULL,
  `hauteur_plafond` double DEFAULT NULL,
  `angle_de_rue` tinyint(1) NOT NULL DEFAULT 0,
  `mezzanine` tinyint(1) NOT NULL DEFAULT 0,
  `superficie_exploitable` double DEFAULT NULL,
  `surface_batie` double DEFAULT NULL,
  `raccordement_eau` tinyint(1) NOT NULL DEFAULT 0,
  `puits` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_electricite` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_telephone` tinyint(1) NOT NULL DEFAULT 0,
  `titre_foncier` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lotissement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assainissement` tinyint(1) NOT NULL DEFAULT 0,
  `zone_implante` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terrain_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `constructible` tinyint(1) NOT NULL DEFAULT 0,
  `surface_terrain` double DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `videos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_bien_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ville` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quartier` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dressings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balcons` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portail_quatre` double DEFAULT NULL,
  `portail_cinq` double DEFAULT NULL,
  `portail_six` double DEFAULT NULL,
  `portail_sept` double DEFAULT NULL,
  `portail_huit` double DEFAULT NULL,
  `portail_neuf` double DEFAULT NULL,
  `surface_disponible_un` double DEFAULT NULL,
  `surface_disponible_deux` double DEFAULT NULL,
  `wifi` tinyint(1) NOT NULL DEFAULT 0,
  `garage_vehicule` tinyint(1) NOT NULL DEFAULT 0,
  `restauration` tinyint(1) NOT NULL DEFAULT 0,
  `reception` tinyint(1) NOT NULL DEFAULT 0,
  `reservation` tinyint(1) NOT NULL DEFAULT 0,
  `dejeune` tinyint(1) NOT NULL DEFAULT 0,
  `tele_cable` tinyint(1) NOT NULL DEFAULT 0,
  `chambre_non_fumeur` tinyint(1) NOT NULL DEFAULT 0,
  `service_en_chambre` tinyint(1) NOT NULL DEFAULT 0,
  `menage_quotidien` tinyint(1) NOT NULL DEFAULT 0,
  `animal_de_compagnie` tinyint(1) NOT NULL DEFAULT 0,
  `cafeteriat` tinyint(1) NOT NULL DEFAULT 0,
  `blanchisserie` tinyint(1) NOT NULL DEFAULT 0,
  `terrasse_commerciale` double DEFAULT NULL,
  `echange_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `uri` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_chambre` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entreprise_id` bigint(20) NOT NULL,
  `prix_m` double DEFAULT NULL,
  `charges` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vente_non_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `location_non_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `transactionurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `critereurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localisationurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uploadurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `successurl` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mplage` tinyint(1) NOT NULL DEFAULT 0,
  `mcampagne` tinyint(1) NOT NULL DEFAULT 0,
  `mmontagne` tinyint(1) NOT NULL DEFAULT 0,
  `mdesert` tinyint(1) NOT NULL DEFAULT 0,
  `mspot_surf` tinyint(1) NOT NULL DEFAULT 0,
  `mgolf` tinyint(1) NOT NULL DEFAULT 0,
  `mforet` tinyint(1) NOT NULL DEFAULT 0,
  `mstation_ski` tinyint(1) NOT NULL DEFAULT 0,
  `mriviere` tinyint(1) NOT NULL DEFAULT 0,
  `mvoix` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professionnels`
--

INSERT INTO `professionnels` (`id`, `last_id`, `venteActif`, `locationActif`, `vente_meuble`, `prix_vente`, `prix_mois`, `prix_jour`, `charge_copropriete`, `location_longue_duree`, `location_courte_duree`, `location_etudiant`, `location_meuble`, `colocation`, `appart_type_un`, `surface_habitable`, `appart_etage_niveau`, `appart_etage_nombre`, `appart_etage`, `appart_etage_immeuble`, `cuisine_type`, `cuisine_equipe`, `nombre_chambre`, `dressing`, `nombre_salle_bain`, `nombre_salon`, `terrasse`, `jardin_privatif`, `cour`, `buanderie`, `cheminee`, `climatisation`, `chauffe_eau`, `espace_vert`, `gardiennage`, `place_vehicule`, `box`, `piscine`, `terrain_sport`, `spa`, `superette`, `ecole`, `mosquee`, `shopping`, `restaurent`, `plage`, `voie`, `campagne`, `montagne`, `desert`, `spot_surf`, `riviere`, `golf`, `foret`, `station_ski`, `superficie_terrain`, `sous_sol`, `type_terrain`, `jaccuzi`, `hammam_beldi`, `cave`, `service_menage`, `salle_fitness`, `air_jeu`, `interphone`, `amenagement_type`, `chalet_type`, `facade_type`, `deux_salle_bain`, `garage_ferme`, `exploitation_agricole`, `individuelle`, `deux_lits`, `trois_lits`, `quatre_lits`, `surface_disponible`, `meuble`, `kichenette`, `salle_bain`, `miroir`, `bureau`, `chauffage`, `eau_chaude`, `placard`, `zone_disponible`, `nombre_piece`, `hauteur_sous_plafond`, `internet`, `wc_sanitaire`, `balcon`, `coin_cuisine`, `acceuil`, `ascenseur`, `monte_charge`, `coworking`, `domiciliation`, `open_space`, `nombre_box`, `salle_reunion`, `frigorifique`, `surface_batiment`, `espace_entrepot`, `espace_activite`, `espace_bureau`, `amenagement_r_sousol`, `hauteur_entrepot`, `site_clos`, `pont_roulant`, `alarme`, `portail_un`, `portail_deux`, `portail_trois`, `portail`, `surface_garage`, `fond_commerce`, `terrasses`, `surface_total`, `sous_pente`, `longueur_facade`, `hauteur_plafond`, `angle_de_rue`, `mezzanine`, `superficie_exploitable`, `surface_batie`, `raccordement_eau`, `puits`, `raccordement_electricite`, `raccordement_telephone`, `titre_foncier`, `lotissement`, `assainissement`, `zone_implante`, `terrain_type`, `titre_type`, `constructible`, `surface_terrain`, `latitude`, `longitude`, `adresse`, `videos`, `description`, `images`, `type_bien_id`, `user_id`, `online`, `created_at`, `updated_at`, `ville`, `pays`, `quartier`, `dressings`, `balcons`, `portail_quatre`, `portail_cinq`, `portail_six`, `portail_sept`, `portail_huit`, `portail_neuf`, `surface_disponible_un`, `surface_disponible_deux`, `wifi`, `garage_vehicule`, `restauration`, `reception`, `reservation`, `dejeune`, `tele_cable`, `chambre_non_fumeur`, `service_en_chambre`, `menage_quotidien`, `animal_de_compagnie`, `cafeteriat`, `blanchisserie`, `terrasse_commerciale`, `echange_meuble`, `uri`, `type_chambre`, `page`, `entreprise_id`, `prix_m`, `charges`, `vente_non_meuble`, `location_non_meuble`, `transactionurl`, `typeurl`, `descriptionurl`, `critereurl`, `localisationurl`, `uploadurl`, `successurl`, `mplage`, `mcampagne`, `mmontagne`, `mdesert`, `mspot_surf`, `mgolf`, `mforet`, `mstation_ski`, `mriviere`, `mvoix`) VALUES
(28, 'AOzwYOQj0rMG7pxh8', 1, 0, 1, 140000000, NULL, NULL, NULL, 0, 0, 0, 0, 0, '{\"fr\":\"2\\u00e8me main\"}', 450, NULL, NULL, NULL, NULL, '{\"fr\":\"1\"}', 1, '{\"fr\":\"4 chambre(s)\"}', 0, '{\"fr\":\"1\"}', '{\"fr\":\"4 salon(s)\"}', 0, 1, 0, 1, 0, 1, 1, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '300m', NULL, '00m', '600m', '00m', '1,5km', '00m', '00m', '1km', '1,6km', 200, NULL, NULL, 1, 0, 1, 0, 0, 0, 1, '{\"fr\":\"Sous-sol + RDC\"}', NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 1, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58669', '-7.60181', '{\"fr\":\"11 rue de libourne\"}', NULL, '{\"fr\":\"Un petit texte de test pour v\\u00e9rifier\"}', '[\"1.jpg\",\"57782_763760_23.jpg\",\"36001122.jpg\",\"118594458.jpg\",\"132468306.jpg\"]', 3, 1, 1, '2020-05-09 23:52:04', '2020-05-10 18:09:14', 'casablanca', 'maroc', 'mers sultan', '{\"fr\":\"5 dressing(s)\"}', '{\"fr\":\"1\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 'http://myhouse.com/sujet/deposer/professionnel/localisation?id=28&professionnel=28', NULL, NULL, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 'ABmvF6eRfSEwRNVRK', 0, 1, 0, NULL, 120000, NULL, 120000, 1, 0, 0, 1, 0, '{\"fr\":\"Livraison imm\\u00e9diate (neuf)\"}', 450, NULL, NULL, NULL, NULL, '{\"fr\":\"Cuisine d\'ext\\u00e9rieur\"}', 1, '{\"fr\":\"5 chambre(s)\"}', 0, '{\"fr\":\"4 salle(s) de bain\"}', '{\"fr\":\"4 salon(s)\"}', 0, 0, 1, 0, 1, 0, 1, 1, 1, '{\"fr\":\"4 place(s) v\\u00e9hicule\"}', 0, 0, 1, 1, 1, 1, 1, 1, 1, '900m', NULL, '400m', '600m', '700m', '200m', '1,7km', '600m', '300m', '1,4km', 600, '{\"fr\":\"Sous-sol + RDC\"}', '{\"fr\":\"Jumel\\u00e9e\"}', 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 1, 0, 0, NULL, NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, 15.5, NULL, 12.2, NULL, NULL, '{\"fr\":\"4 terrasse(s)\"}', NULL, NULL, NULL, 45.2, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58669', '-7.60181', '{\"fr\":\"11 rue de libourne\"}', NULL, '{\"fr\":\"What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?\"}', '[\"1.jpg\",\"57782_763760_23.jpg\",\"36001122.jpg\",\"118594458.jpg\",\"132468306.jpg\",\"appartement-neuf-nantes-passage-saint-felix.jpg\",\"photo_750ed3f33e9274bcb7bb920c4ae7c3f0.jpg\",\"sejour-dun-appartement-neuf-renove_6112350.jpg\"]', 2, 1, 1, '2020-05-10 17:45:46', '2020-05-11 09:16:11', 'casablanca', 'maroc', 'mers sultan', '{\"fr\":\"4 dressing(s)\"}', '{\"fr\":\"3 balcon(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 'http://myhouse.com/sujet/deposer/professionnel/edit/32', NULL, NULL, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 'AZjxK71rcqe4Ygj0e', 1, 0, 1, 450000000, NULL, NULL, NULL, 0, 0, 0, 0, 0, '{\"fr\":\"En cours de construction\"}', 45, '{\"fr\":\"Duplex\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"8 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"3 chambre(s)\"}', 0, '{\"fr\":\"3 salle(s) de bain\"}', '{\"fr\":\"5 salon(s)\"}', 0, 0, 0, 0, 0, 0, 0, 1, 0, '{\"fr\":\"2 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, '100m', NULL, '300m', '600m', '700m', '1,7km', '100m', '1,7km', '400m', '400m', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"3 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58669', '-7.60181', '{\"fr\":\"11 rue de libourne\"}', NULL, '{\"fr\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\"}', '[\"1.jpg\",\"57782_763760_23.jpg\",\"36001122.jpg\",\"118594458.jpg\",\"132468306.jpg\",\"appartement-neuf-nantes-passage-saint-felix.jpg\",\"photo_750ed3f33e9274bcb7bb920c4ae7c3f0.jpg\",\"sejour-dun-appartement-neuf-renove_6112350.jpg\"]', 1, 1, 1, '2020-05-11 09:46:30', '2020-05-13 12:41:46', 'casablanca', 'maroc', 'mers sultan', '{\"fr\":\"4 dressing(s)\"}', '{\"fr\":\"5 balcon(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 'ApGRLc33Mt6Z0pt1C', 1, 0, 1, 400000000, NULL, NULL, NULL, 0, 0, 0, 0, 0, '{\"fr\":\"2\\u00e8me main\"}', 45, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 1, '{\"fr\":\"3 chambre(s)\"}', 0, '{\"fr\":\"4 salle(s) de bain\"}', '{\"fr\":\"4 salon(s)\"}', 0, 1, 1, 1, 1, 1, 1, 1, 1, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 1, 1, 1, 1, 1, 1, 1, 1, 1, '700m', NULL, '800m', '1,4km', '1,7km', '600m', '700m', '1,2km', '300m', '900m', NULL, NULL, NULL, 0, 0, 0, 0, 1, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"6 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58669', '-7.60181', '{\"fr\":\"11 rue de libourne\"}', NULL, '{\"fr\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\"}', '[\"1.jpg\",\"57782_763760_23.jpg\",\"36001122.jpg\",\"118594458.jpg\",\"132468306.jpg\",\"appartement-neuf-nantes-passage-saint-felix.jpg\",\"photo_750ed3f33e9274bcb7bb920c4ae7c3f0.jpg\",\"sejour-dun-appartement-neuf-renove_6112350.jpg\"]', 1, 1, 1, '2020-05-11 23:15:18', '2020-05-13 12:41:59', 'casablanca', 'maroc', 'mers sultan', '{\"fr\":\"4 dressing(s)\"}', '{\"fr\":\"9 balcon(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 'http://myhouse.com/sujet/deposer/professionnel/edit/34', NULL, NULL, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 'Ap2a58sV91p8L2NO8', 1, 0, 1, 450000000, NULL, NULL, NULL, 0, 0, 0, 0, 0, '{\"fr\":\"2\\u00e8me main\"}', 452.65, NULL, NULL, NULL, NULL, '{\"fr\":\"Cuisine ferm\\u00e9e\"}', 1, '{\"fr\":\"4 chambre(s)\"}', 0, '{\"fr\":\"3 salle(s) de bain\"}', '{\"fr\":\"5 salon(s)\"}', 0, 0, 1, 1, 1, 1, 1, 0, 0, NULL, 0, 1, 0, 0, 0, 0, 0, 0, 0, '1,8km', NULL, '1,6km', '1,4km', '1,1km', '800m', '100m', '500m', '1,2km', '700m', 755.65, '{\"fr\":\"Sous-sol + RDC\"}', NULL, 1, 1, 1, 0, 0, 0, 1, NULL, NULL, NULL, 0, '{\"fr\":\"Garage ferm\\u00e9 7 place(s)\"}', 1, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"7 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58669', '-7.60181', '{\"fr\":\"11 rue de libourne\"}', NULL, '{\"fr\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\"}', '[\"1.jpg\",\"57782_763760_23.jpg\",\"36001122.jpg\",\"118594458.jpg\",\"132468306.jpg\",\"appartement-neuf-nantes-passage-saint-felix.jpg\",\"photo_750ed3f33e9274bcb7bb920c4ae7c3f0.jpg\",\"sejour-dun-appartement-neuf-renove_6112350.jpg\"]', 6, 1, 1, '2020-05-12 19:12:52', '2020-05-12 21:26:01', 'casablanca', 'maroc', 'mers sultan', '{\"fr\":\"3 dressing(s)\"}', '{\"fr\":\"18 balcon(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 14, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 'AZKfiLbcGfFBvzSa8', 1, 0, 0, 100000000, NULL, NULL, NULL, 0, 0, 0, 0, 0, '{\"fr\":\"2\\u00e8me main\"}', 120.5, NULL, NULL, NULL, NULL, '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 0, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 1, 0, 0, 0, 0, 1, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 1, 0, 0, 0, 0, 0, 0, '1', NULL, '00m', '00m', '00m', '00m', '00m', '00m', '00m', '00m', 1200.5, '{\"fr\":\"1\"}', '{\"fr\":\"1\"}', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58277', '-7.6181', '{\"fr\":\"Boulevard Mohammed Zerktouni, Sidi Belyout, Casablanca, Morocco (street-square)\"}', NULL, '{\"fr\":\",kjiokljhoihjniujibkn\"}', '[\"1.jpg\"]', 2, 1, 1, '2020-05-12 22:23:05', '2020-05-13 12:41:54', 'casablanca', 'maroc', 'sidi belyout', '{\"fr\":\"1 dressing(s)\"}', '{\"fr\":\"1 balcon(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 15, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 'ACi2xBJE1hPKA7TaC', 1, 0, 0, 125000000, NULL, NULL, NULL, 0, 0, 0, 0, 0, '{\"fr\":\"2\\u00e8me main\"}', 45, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"4 appart(s) par \\u00e9tage\"}', '{\"fr\":\"21 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 1, '{\"fr\":\"6 chambre(s)\"}', 0, '{\"fr\":\"5 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 1, 0, 1, 0, 1, 0, 1, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 1, 0, 1, 1, 0, 1, 0, 1, 0, '100m', NULL, '00m', '1,8km', '00m', '500m', '400m', '00m', '900m', '00m', NULL, '{\"fr\":\"Sous-sol + RDC\"}', '{\"fr\":\"Jumel\\u00e9e\"}', 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"5 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '[\"1.jpg\",\"57782_763760_23.jpg\",\"36001122.jpg\",\"118594458.jpg\",\"132468306.jpg\",\"appartement-neuf-nantes-passage-saint-felix.jpg\",\"photo_750ed3f33e9274bcb7bb920c4ae7c3f0.jpg\",\"sejour-dun-appartement-neuf-renove_6112350.jpg\"]', 2, 1, 1, '2020-05-13 10:14:15', '2020-05-13 12:41:49', NULL, NULL, NULL, '{\"fr\":\"1 dressing(s)\"}', '{\"fr\":\"4 balcon(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 19, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 'AWl330nLW1d1IHTML', 1, 0, 1, 800000000, NULL, NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-05-13 10:33:42', '2020-05-13 10:33:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 20, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 'AWl330nLW1d1IHTML', 1, 0, 1, 800000000, NULL, NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-05-13 10:33:52', '2020-05-13 10:33:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 20, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 'AWWCAUIZyBXbuC54u', 1, 0, 1, 125000000, NULL, NULL, NULL, 0, 0, 0, 0, 0, '{\"fr\":\"2\\u00e8me main\"}', 45, '{\"fr\":\"Sur un niveau\"}', '{\"fr\":\"Situ\\u00e9 au rez-de-chauss\\u00e9e\"}', '{\"fr\":\"1 appart(s) par \\u00e9tage\"}', '{\"fr\":\"2 \\u00e9tage(s) par immeuble\"}', '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 1, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 1, 0, 0, 1, 0, 0, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 1, 0, 0, 1, 0, 1, 1, 0, '400m', NULL, '00m', '00m', '1km', '00m', '900m', '00m', '1,1km', '00m', NULL, NULL, NULL, 0, 0, 0, 0, 1, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58669', '-7.60181', '{\"fr\":\"11 rue de libourne\"}', NULL, '{\"fr\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\"}', '[\"1.jpg\",\"57782_763760_23.jpg\",\"36001122.jpg\",\"118594458.jpg\",\"132468306.jpg\",\"appartement-neuf-nantes-passage-saint-felix.jpg\",\"photo_750ed3f33e9274bcb7bb920c4ae7c3f0.jpg\",\"sejour-dun-appartement-neuf-renove_6112350.jpg\"]', 1, 1, 1, '2020-05-13 12:39:26', '2020-05-13 12:41:21', 'casablanca', 'maroc', 'mers sultan', '{\"fr\":\"1 dressing(s)\"}', '{\"fr\":\"5 balcon(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 21, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 'AAFfSnsoo6agMQhQP', 1, 0, 1, 500000000, NULL, NULL, NULL, 0, 0, 0, 0, 0, '{\"fr\":\"Livraison imm\\u00e9diate (neuf)\"}', 159.5, NULL, '{\"fr\":\"1\"}', NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 1, 1, 1, 1, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, '{\"fr\":\"1\"}', '{\"fr\":\"1\"}', 1, 1, 0, 0, 1, 0, 1, 1, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"1\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.59566', '-7.63813', '{\"fr\":\"Boulevard Mohammed Zerktouni\"}', NULL, '{\"fr\":\"nkhjbgkguyig;bjn;kjghbklguolkjl;kjblkguhjiok\"}', '[\"1.jpg\",\"36001122.jpg\",\"118594458.jpg\",\"132468306.jpg\"]', 9, 2, 0, '2020-05-13 15:44:35', '2020-05-13 16:01:16', 'Casablanca', 'Maroc', 'Sidi Belyout', NULL, '{\"fr\":\"4 balcon(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 'http://myhouse.com/sujet/deposer/professionnel/critere?_token=0YZ12bnOrTX0LQHWg5gHF4ZMLA3EaqY81K5YxspV&id=41&appart_type_un=Livraison+imm%C3%A9diate+%28neuf%29&surface_habitable=159%2C50&zone_disponible=Implant%C3%A9+dans+un+Centre+d%27affaires&appart_etage_nombre=Situ%C3%A9+au+5%C3%A8me+%C3%A9tage&nombre_piece=5+pi%C3%A8ce%28s%29&hauteur_sous_plafond=3%2C75&internet=1&terrasses=3+terrasse%28s%29&balcons=4+balcon%28s%29&chauffe_eau=1&coin_cuisine=1&climatisation=1&gardiennage=1&place_vehicule=1+place%28s%29+v%C3%A9hicule&ascenseur=1&monte_charge=1&espace_vert=1', NULL, NULL, 22, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 'A40ZNsnTzad7766QU', 1, 0, 1, 120000000, NULL, NULL, NULL, 0, 0, 0, 0, 0, '{\"fr\":\"2\\u00e8me main\"}', 450, NULL, NULL, NULL, NULL, '{\"fr\":\"Cuisine am\\u00e9ricaine\"}', 1, '{\"fr\":\"1 chambre(s)\"}', 0, '{\"fr\":\"1 salle(s) de bain\"}', '{\"fr\":\"1 salon(s)\"}', 0, 0, 0, 1, 0, 1, 0, 1, 0, '{\"fr\":\"1 place(s) v\\u00e9hicule\"}', 0, 1, 1, 0, 1, 0, 0, 1, 0, '200m', NULL, '00m', '1,7km', '00m', '00m', '00m', '00m', '00m', '00m', 120, '{\"fr\":\"Sous-sol + RDC\"}', '{\"fr\":\"Jumel\\u00e9e\"}', 1, 0, 0, 0, 1, 1, 0, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '{\"fr\":\"2 terrasse(s)\"}', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, '33.58673', '-7.60185', '{\"fr\":\"rue de libourne\"}', NULL, '{\"fr\":\"jhgjhgjgjhgjh jhgjhgjhgjhgjh dhtrfh\"}', '[\"1.jpg\"]', 2, 1, 0, '2020-05-14 14:14:16', '2020-05-14 14:37:51', 'casablanca', 'maroc', 'mers sultan', '{\"fr\":\"1 dressing(s)\"}', '{\"fr\":\"1 balcon(s)\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, 23, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `professionnel_agendas`
--

CREATE TABLE `professionnel_agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `professionnel_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professionnel_agendas`
--

INSERT INTO `professionnel_agendas` (`id`, `professionnel_id`, `user_id`, `start`, `end`, `created_at`, `updated_at`) VALUES
(3, 32, 1, '2020-05-15 13:07:05', '2020-05-16 00:00:00', '2020-05-11 23:04:50', '2020-05-11 23:04:50'),
(4, 35, 1, '2020-05-08 06:03:02', '2020-05-09 00:00:00', '2020-05-13 12:08:28', '2020-05-13 12:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `professionnel_criteres`
--

CREATE TABLE `professionnel_criteres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appart_type_un` tinyint(1) NOT NULL DEFAULT 0,
  `surface_habitable` tinyint(1) NOT NULL DEFAULT 0,
  `appart_etage_niveau` tinyint(1) NOT NULL DEFAULT 0,
  `appart_etage_nombre` tinyint(1) NOT NULL DEFAULT 0,
  `appart_etage` tinyint(1) NOT NULL DEFAULT 0,
  `appart_etage_immeuble` tinyint(1) NOT NULL DEFAULT 0,
  `cuisine_type` tinyint(1) NOT NULL DEFAULT 0,
  `cuisine_equipe` tinyint(1) NOT NULL DEFAULT 0,
  `dressing` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_salle_bain` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_salon` tinyint(1) NOT NULL DEFAULT 0,
  `terrasse` tinyint(1) NOT NULL DEFAULT 0,
  `jardin_privatif` tinyint(1) NOT NULL DEFAULT 0,
  `cour` tinyint(1) NOT NULL DEFAULT 0,
  `buanderie` tinyint(1) NOT NULL DEFAULT 0,
  `cheminee` tinyint(1) NOT NULL DEFAULT 0,
  `climatisation` tinyint(1) NOT NULL DEFAULT 0,
  `chauffe_eau` tinyint(1) NOT NULL DEFAULT 0,
  `espace_vert` tinyint(1) NOT NULL DEFAULT 0,
  `gardiennage` tinyint(1) NOT NULL DEFAULT 0,
  `place_vehicule` tinyint(1) NOT NULL DEFAULT 0,
  `box` tinyint(1) NOT NULL DEFAULT 0,
  `piscine` tinyint(1) NOT NULL DEFAULT 0,
  `terrain_sport` tinyint(1) NOT NULL DEFAULT 0,
  `spa` tinyint(1) NOT NULL DEFAULT 0,
  `superette` tinyint(1) NOT NULL DEFAULT 0,
  `ecole` tinyint(1) NOT NULL DEFAULT 0,
  `mosquee` tinyint(1) NOT NULL DEFAULT 0,
  `shopping` tinyint(1) NOT NULL DEFAULT 0,
  `restaurent` tinyint(1) NOT NULL DEFAULT 0,
  `plage` tinyint(1) NOT NULL DEFAULT 0,
  `voie` tinyint(1) NOT NULL DEFAULT 0,
  `campagne` tinyint(1) NOT NULL DEFAULT 0,
  `montagne` tinyint(1) NOT NULL DEFAULT 0,
  `desert` tinyint(1) NOT NULL DEFAULT 0,
  `spot_surf` tinyint(1) NOT NULL DEFAULT 0,
  `riviere` tinyint(1) NOT NULL DEFAULT 0,
  `golf` tinyint(1) NOT NULL DEFAULT 0,
  `foret` tinyint(1) NOT NULL DEFAULT 0,
  `station_ski` tinyint(1) NOT NULL DEFAULT 0,
  `superficie_terrain` tinyint(1) NOT NULL DEFAULT 0,
  `sous_sol` tinyint(1) NOT NULL DEFAULT 0,
  `type_terrain` tinyint(1) NOT NULL DEFAULT 0,
  `jaccuzi` tinyint(1) NOT NULL DEFAULT 0,
  `hammam_beldi` tinyint(1) NOT NULL DEFAULT 0,
  `cave` tinyint(1) NOT NULL DEFAULT 0,
  `service_menage` tinyint(1) NOT NULL DEFAULT 0,
  `salle_fitness` tinyint(1) NOT NULL DEFAULT 0,
  `air_jeu` tinyint(1) NOT NULL DEFAULT 0,
  `interphone` tinyint(1) NOT NULL DEFAULT 0,
  `amenagement_type` tinyint(1) NOT NULL DEFAULT 0,
  `chalet_type` tinyint(1) NOT NULL DEFAULT 0,
  `facade_type` tinyint(1) NOT NULL DEFAULT 0,
  `deux_salle_bain` tinyint(1) NOT NULL DEFAULT 0,
  `garage_ferme` tinyint(1) NOT NULL DEFAULT 0,
  `exploitation_agricole` tinyint(1) NOT NULL DEFAULT 0,
  `reception` tinyint(1) NOT NULL DEFAULT 0,
  `reservation` tinyint(1) NOT NULL DEFAULT 0,
  `dejeune` tinyint(1) NOT NULL DEFAULT 0,
  `wifi` tinyint(1) NOT NULL DEFAULT 0,
  `tele_cable` tinyint(1) NOT NULL DEFAULT 0,
  `type_chambre` tinyint(1) NOT NULL DEFAULT 0,
  `chambre_non_fumeur` tinyint(1) NOT NULL DEFAULT 0,
  `service_en_chambre` tinyint(1) NOT NULL DEFAULT 0,
  `menage_quotidien` tinyint(1) NOT NULL DEFAULT 0,
  `animal_de_compagnie` tinyint(1) NOT NULL DEFAULT 0,
  `parking_gratuit` tinyint(1) NOT NULL DEFAULT 0,
  `restauration` tinyint(1) NOT NULL DEFAULT 0,
  `cafeteriat` tinyint(1) NOT NULL DEFAULT 0,
  `blanchisserie` tinyint(1) NOT NULL DEFAULT 0,
  `individuelle` tinyint(1) NOT NULL DEFAULT 0,
  `deux_lits` tinyint(1) NOT NULL DEFAULT 0,
  `trois_lits` tinyint(1) NOT NULL DEFAULT 0,
  `quatre_lits` tinyint(1) NOT NULL DEFAULT 0,
  `surface_disponible` tinyint(1) NOT NULL DEFAULT 0,
  `meuble` tinyint(1) NOT NULL DEFAULT 0,
  `kichenette` tinyint(1) NOT NULL DEFAULT 0,
  `salle_bain` tinyint(1) NOT NULL DEFAULT 0,
  `miroir` tinyint(1) NOT NULL DEFAULT 0,
  `bureau` tinyint(1) NOT NULL DEFAULT 0,
  `chauffage` tinyint(1) NOT NULL DEFAULT 0,
  `eau_chaude` tinyint(1) NOT NULL DEFAULT 0,
  `placard` tinyint(1) NOT NULL DEFAULT 0,
  `zone_disponible` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_piece` tinyint(1) NOT NULL DEFAULT 0,
  `hauteur_sous_plafond` tinyint(1) NOT NULL DEFAULT 0,
  `internet` tinyint(1) NOT NULL DEFAULT 0,
  `wc_sanitaire` tinyint(1) NOT NULL DEFAULT 0,
  `balcon` tinyint(1) NOT NULL DEFAULT 0,
  `coin_cuisine` tinyint(1) NOT NULL DEFAULT 0,
  `acceuil` tinyint(1) NOT NULL DEFAULT 0,
  `ascenseur` tinyint(1) NOT NULL DEFAULT 0,
  `monte_charge` tinyint(1) NOT NULL DEFAULT 0,
  `coworking` tinyint(1) NOT NULL DEFAULT 0,
  `domiciliation` tinyint(1) NOT NULL DEFAULT 0,
  `open_space` tinyint(1) NOT NULL DEFAULT 0,
  `nombre_box` tinyint(1) NOT NULL DEFAULT 0,
  `salle_reunion` tinyint(1) NOT NULL DEFAULT 0,
  `frigorifique` tinyint(1) NOT NULL DEFAULT 0,
  `surface_batiment` tinyint(1) NOT NULL DEFAULT 0,
  `espace_entrepot` tinyint(1) NOT NULL DEFAULT 0,
  `espace_activite` tinyint(1) NOT NULL DEFAULT 0,
  `espace_bureau` tinyint(1) NOT NULL DEFAULT 0,
  `amenagement_r_sousol` tinyint(1) NOT NULL DEFAULT 0,
  `hauteur_entrepot` tinyint(1) NOT NULL DEFAULT 0,
  `site_clos` tinyint(1) NOT NULL DEFAULT 0,
  `pont_roulant` tinyint(1) NOT NULL DEFAULT 0,
  `alarme` tinyint(1) NOT NULL DEFAULT 0,
  `portail_un` tinyint(1) NOT NULL DEFAULT 0,
  `portail_deux` tinyint(1) NOT NULL DEFAULT 0,
  `portail_trois` tinyint(1) NOT NULL DEFAULT 0,
  `portail` tinyint(1) NOT NULL DEFAULT 0,
  `surface_garage` tinyint(1) NOT NULL DEFAULT 0,
  `fond_commerce` tinyint(1) NOT NULL DEFAULT 0,
  `terrasses` tinyint(1) NOT NULL DEFAULT 0,
  `surface_total` tinyint(1) NOT NULL DEFAULT 0,
  `sous_pente` tinyint(1) NOT NULL DEFAULT 0,
  `longueur_facade` tinyint(1) NOT NULL DEFAULT 0,
  `hauteur_plafond` tinyint(1) NOT NULL DEFAULT 0,
  `angle_de_rue` tinyint(1) NOT NULL DEFAULT 0,
  `mezzanine` tinyint(1) NOT NULL DEFAULT 0,
  `superficie_exploitable` tinyint(1) NOT NULL DEFAULT 0,
  `surface_batie` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_eau` tinyint(1) NOT NULL DEFAULT 0,
  `puits` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_electricite` tinyint(1) NOT NULL DEFAULT 0,
  `raccordement_telephone` tinyint(1) NOT NULL DEFAULT 0,
  `titre_foncier` tinyint(1) NOT NULL DEFAULT 0,
  `lotissement` tinyint(1) NOT NULL DEFAULT 0,
  `assainissement` tinyint(1) NOT NULL DEFAULT 0,
  `zone_implante` tinyint(1) NOT NULL DEFAULT 0,
  `terrain_type` tinyint(1) NOT NULL DEFAULT 0,
  `titre_type` tinyint(1) NOT NULL DEFAULT 0,
  `constructible` tinyint(1) NOT NULL DEFAULT 0,
  `surface_terrain` tinyint(1) NOT NULL DEFAULT 0,
  `balcons` tinyint(1) NOT NULL DEFAULT 0,
  `terrasse_commerciale` tinyint(1) NOT NULL DEFAULT 0,
  `echange_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `vente_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `location_meuble` tinyint(1) NOT NULL DEFAULT 0,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professionnel_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre_chambre` tinyint(1) NOT NULL DEFAULT 0,
  `dressings` tinyint(1) NOT NULL DEFAULT 0,
  `portail_quatre` tinyint(1) NOT NULL DEFAULT 0,
  `portail_cinq` tinyint(1) NOT NULL DEFAULT 0,
  `portail_six` tinyint(1) NOT NULL DEFAULT 0,
  `portail_sept` tinyint(1) NOT NULL DEFAULT 0,
  `portail_huit` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professionnel_criteres`
--

INSERT INTO `professionnel_criteres` (`id`, `appart_type_un`, `surface_habitable`, `appart_etage_niveau`, `appart_etage_nombre`, `appart_etage`, `appart_etage_immeuble`, `cuisine_type`, `cuisine_equipe`, `dressing`, `nombre_salle_bain`, `nombre_salon`, `terrasse`, `jardin_privatif`, `cour`, `buanderie`, `cheminee`, `climatisation`, `chauffe_eau`, `espace_vert`, `gardiennage`, `place_vehicule`, `box`, `piscine`, `terrain_sport`, `spa`, `superette`, `ecole`, `mosquee`, `shopping`, `restaurent`, `plage`, `voie`, `campagne`, `montagne`, `desert`, `spot_surf`, `riviere`, `golf`, `foret`, `station_ski`, `superficie_terrain`, `sous_sol`, `type_terrain`, `jaccuzi`, `hammam_beldi`, `cave`, `service_menage`, `salle_fitness`, `air_jeu`, `interphone`, `amenagement_type`, `chalet_type`, `facade_type`, `deux_salle_bain`, `garage_ferme`, `exploitation_agricole`, `reception`, `reservation`, `dejeune`, `wifi`, `tele_cable`, `type_chambre`, `chambre_non_fumeur`, `service_en_chambre`, `menage_quotidien`, `animal_de_compagnie`, `parking_gratuit`, `restauration`, `cafeteriat`, `blanchisserie`, `individuelle`, `deux_lits`, `trois_lits`, `quatre_lits`, `surface_disponible`, `meuble`, `kichenette`, `salle_bain`, `miroir`, `bureau`, `chauffage`, `eau_chaude`, `placard`, `zone_disponible`, `nombre_piece`, `hauteur_sous_plafond`, `internet`, `wc_sanitaire`, `balcon`, `coin_cuisine`, `acceuil`, `ascenseur`, `monte_charge`, `coworking`, `domiciliation`, `open_space`, `nombre_box`, `salle_reunion`, `frigorifique`, `surface_batiment`, `espace_entrepot`, `espace_activite`, `espace_bureau`, `amenagement_r_sousol`, `hauteur_entrepot`, `site_clos`, `pont_roulant`, `alarme`, `portail_un`, `portail_deux`, `portail_trois`, `portail`, `surface_garage`, `fond_commerce`, `terrasses`, `surface_total`, `sous_pente`, `longueur_facade`, `hauteur_plafond`, `angle_de_rue`, `mezzanine`, `superficie_exploitable`, `surface_batie`, `raccordement_eau`, `puits`, `raccordement_electricite`, `raccordement_telephone`, `titre_foncier`, `lotissement`, `assainissement`, `zone_implante`, `terrain_type`, `titre_type`, `constructible`, `surface_terrain`, `balcons`, `terrasse_commerciale`, `echange_meuble`, `vente_meuble`, `location_meuble`, `page`, `professionnel_id`, `created_at`, `updated_at`, `nombre_chambre`, `dressings`, `portail_quatre`, `portail_cinq`, `portail_six`, `portail_sept`, `portail_huit`) VALUES
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 28, '2020-05-10 00:03:43', '2020-05-10 00:03:43', 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 32, '2020-05-10 17:46:53', '2020-05-10 17:46:53', 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 34, '2020-05-11 23:38:39', '2020-05-11 23:38:39', 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 35, '2020-05-12 20:31:04', '2020-05-12 20:31:04', 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL, 36, '2020-05-12 22:24:15', '2020-05-12 22:24:15', 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 40, '2020-05-13 12:40:07', '2020-05-13 12:40:07', 0, 0, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 41, '2020-05-13 15:46:33', '2020-05-13 15:46:33', 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 42, '2020-05-14 14:15:52', '2020-05-14 14:15:52', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `professionnel_interesses`
--

CREATE TABLE `professionnel_interesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `professionnel_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professionnel_interesses`
--

INSERT INTO `professionnel_interesses` (`id`, `professionnel_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 32, 1, '2020-05-10 20:09:36', '2020-05-10 20:09:36'),
(3, 40, 1, '2020-05-13 21:11:35', '2020-05-13 21:11:35');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `linge11` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge12` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge13` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge14` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge15` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge21` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge22` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge23` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge24` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge25` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge31` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge32` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge33` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge34` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge41` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge42` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge43` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge44` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linge45` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professionnel_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `linge11`, `linge12`, `linge13`, `linge14`, `linge15`, `linge21`, `linge22`, `linge23`, `linge24`, `linge25`, `linge31`, `linge32`, `linge33`, `linge34`, `linge41`, `linge42`, `linge43`, `linge44`, `linge45`, `professionnel_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '{\"fr\":\"Frai\"}', '{\"fr\":\"de\"}', '{\"fr\":\"notaire\"}', '{\"fr\":\"offerts\"}', '{\"fr\":\"!\"}', '{\"fr\":\"Contactez-nous\"}', '{\"fr\":null}', '{\"fr\":null}', '{\"fr\":null}', '{\"fr\":null}', '{\"fr\":\"Offre\"}', '{\"fr\":\"aux\"}', '{\"fr\":\"10\"}', '{\"fr\":\"premiers\"}', '{\"fr\":\"Louez\"}', '{\"fr\":\"achetez\"}', '{\"fr\":\"l\'esprit\"}', '{\"fr\":\"tranquille\"}', '{\"fr\":null}', 34, 1, '2020-05-12 14:07:31', '2020-05-12 14:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `pushes`
--

CREATE TABLE `pushes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_biens`
--

CREATE TABLE `type_biens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_types_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_biens`
--

INSERT INTO `type_biens` (`id`, `nom`, `category_types_id`, `created_at`, `updated_at`) VALUES
(1, 'appartement', 1, '2020-04-24 21:49:47', '2020-04-24 21:49:47'),
(2, 'Villa', 1, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(3, 'Maison', 1, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(4, 'Cabanon/Chalet', 1, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(5, 'Riad', 1, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(6, 'Ferme', 1, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(7, 'Chambre d\'hôte', 1, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(8, 'Cité universitaire', 2, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(9, 'Bureau', 2, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(10, 'Plateau', 2, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(11, 'Entrepôt/Hangar', 2, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(12, 'Garage', 2, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(13, 'Local industriel', 2, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(14, 'Local commercial', 2, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(15, 'Propriété agricole', 2, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(16, 'Immeuble/Bâtiment', 2, '2020-04-24 21:49:48', '2020-04-24 21:49:48'),
(17, 'Terrain résidentiel', 3, '2020-04-24 21:49:49', '2020-04-24 21:49:49'),
(18, 'Terrain commercial', 3, '2020-04-24 21:49:49', '2020-04-24 21:49:49'),
(19, 'Terrain agricole', 3, '2020-04-24 21:49:49', '2020-04-24 21:49:49'),
(20, 'Terrain industriel', 3, '2020-04-24 21:49:49', '2020-04-24 21:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'http://myhouse.com/menu/messagerie/particulier', '2020-04-24 21:46:03', '2020-04-24 21:46:03'),
(2, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-04-24 21:51:19', '2020-04-24 21:51:19'),
(3, 'http://myhouse.com/resultat/particuliers/appartement-1', '2020-05-02 12:28:19', '2020-05-02 12:28:19'),
(4, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers', '2020-05-02 14:15:37', '2020-05-02 14:15:37'),
(5, 'http://myhouse.com/menu/particulier/agenda?user=particulier', '2020-05-04 19:54:32', '2020-05-04 19:54:32'),
(6, 'http://myhouse.com/', '2020-05-05 08:41:46', '2020-05-05 08:41:46'),
(7, 'http://myhouse.com/menu/particulier/annonces?user=particulier', '2020-05-05 08:48:48', '2020-05-05 08:48:48'),
(8, 'http://myhouse.com/sujet/deposer/particulier/description?id=4&type=villa', '2020-05-05 16:57:10', '2020-05-05 16:57:10'),
(9, 'http://myhouse.com/menu/particulier/annonces?user=particulier', '2020-05-05 20:49:37', '2020-05-05 20:49:37'),
(10, 'http://myhouse.com/menu/particulier/annonces', '2020-05-06 09:02:26', '2020-05-06 09:02:26'),
(11, 'http://myhouse.com/menu/particulier/annonces', '2020-05-07 09:17:50', '2020-05-07 09:17:50'),
(12, 'http://myhouse.com/', '2020-05-07 09:19:57', '2020-05-07 09:19:57'),
(13, 'http://myhouse.com/menu/particulier/annonces', '2020-05-07 12:34:21', '2020-05-07 12:34:21'),
(14, 'http://myhouse.com/', '2020-05-08 08:52:49', '2020-05-08 08:52:49'),
(15, 'http://myhouse.com/menu/professionnel/backoffice', '2020-05-08 11:14:23', '2020-05-08 11:14:23'),
(16, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers', '2020-05-08 20:16:24', '2020-05-08 20:16:24'),
(17, 'http://myhouse.com/', '2020-05-08 20:25:15', '2020-05-08 20:25:15'),
(18, 'http://myhouse.com/', '2020-05-08 20:33:42', '2020-05-08 20:33:42'),
(19, 'http://myhouse.com/', '2020-05-08 21:13:42', '2020-05-08 21:13:42'),
(20, 'http://myhouse.com/', '2020-05-08 21:14:02', '2020-05-08 21:14:02'),
(21, 'http://myhouse.com/', '2020-05-08 21:35:48', '2020-05-08 21:35:48'),
(22, 'http://myhouse.com/menu/particulier/annonces', '2020-05-09 11:24:38', '2020-05-09 11:24:38'),
(23, 'http://myhouse.com/menu/particulier/annonces', '2020-05-09 15:55:51', '2020-05-09 15:55:51'),
(24, 'http://myhouse.com/sujet/deposer/professionnel/edit/26', '2020-05-09 23:13:40', '2020-05-09 23:13:40'),
(25, 'http://myhouse.com/menu/profile/professionnel', '2020-05-09 23:26:10', '2020-05-09 23:26:10'),
(26, 'http://myhouse.com/sujet/deposer/professionnel/annonce-27', '2020-05-09 23:50:47', '2020-05-09 23:50:47'),
(27, 'http://myhouse.com/', '2020-05-10 17:08:47', '2020-05-10 17:08:47'),
(28, 'http://myhouse.com/menu/professionnel/backoffice', '2020-05-11 09:29:56', '2020-05-11 09:29:56'),
(29, 'http://myhouse.com/menu/professionnel/backoffice', '2020-05-11 09:42:51', '2020-05-11 09:42:51'),
(30, 'http://myhouse.com/sujet/deposer/professionnel/transaction', '2020-05-11 10:01:41', '2020-05-11 10:01:41'),
(31, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers&transaction=achat&prix=10%2C73&surface=10%2C85&prix=5&surface=5&word=', '2020-05-11 10:20:38', '2020-05-11 10:20:38'),
(32, 'http://myhouse.com/menu/particulier/interesse?user=particulier', '2020-05-11 12:41:49', '2020-05-11 12:41:49'),
(33, 'http://myhouse.com/menu/particulier/annonces', '2020-05-11 12:47:37', '2020-05-11 12:47:37'),
(34, 'http://myhouse.com/', '2020-05-11 23:13:53', '2020-05-11 23:13:53'),
(35, 'http://myhouse.com/menu/professionnel/backoffice/campaign', '2020-05-12 15:25:24', '2020-05-12 15:25:24'),
(36, 'http://myhouse.com/', '2020-05-12 18:55:48', '2020-05-12 18:55:48'),
(37, 'http://myhouse.com/menu/particulier/annonces', '2020-05-12 21:49:30', '2020-05-12 21:49:30'),
(38, 'http://myhouse.com/menu/particulier/annonces', '2020-05-12 22:04:03', '2020-05-12 22:04:03'),
(39, 'http://myhouse.com/', '2020-05-13 09:20:45', '2020-05-13 09:20:45'),
(40, 'http://myhouse.com/sujet/deposer/professionnel/type/37', '2020-05-13 10:29:19', '2020-05-13 10:29:19'),
(41, 'http://myhouse.com/', '2020-05-13 10:34:45', '2020-05-13 10:34:45'),
(42, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers', '2020-05-13 12:33:27', '2020-05-13 12:33:27'),
(43, 'http://myhouse.com/resultat/particuliers/villa-20', '2020-05-13 12:38:47', '2020-05-13 12:38:47'),
(44, 'http://myhouse.com/menu/professionnel/backoffice', '2020-05-13 12:45:44', '2020-05-13 12:45:44'),
(45, 'http://myhouse.com/', '2020-05-13 14:00:26', '2020-05-13 14:00:26'),
(46, 'http://myhouse.com/sujet/deposer/particulier/critere?id=22&appart_type_un=Livraison+imm%C3%A9diate+%28neuf%29&surface_habitable=120&appart_etage_niveau=Triplex&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&place_vehicule=1+place%28s%29+v%C3%A9hicule&plage=00m&campagne=00m&montagne=00m&desert=300m&spot_surf=00m&golf=00m&foret=00m&station_ski=00m&riviere=00m', '2020-05-13 14:36:48', '2020-05-13 14:36:48'),
(47, 'http://myhouse.com/sujet/deposer/particulier/critere?id=22&appart_type_un=Livraison+imm%C3%A9diate+%28neuf%29&surface_habitable=120&appart_etage_niveau=Triplex&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=1+dressing%28s%29&nombre_salle_bain=1+salle%28s%29+de+bain&nombre_salon=1+salon%28s%29&terrasses=1+terrasse%28s%29&balcons=1+balcon%28s%29&place_vehicule=1+place%28s%29+v%C3%A9hicule&plage=00m&campagne=00m&montagne=00m&desert=300m&spot_surf=00m&golf=00m&foret=00m&station_ski=00m&riviere=00m', '2020-05-13 14:52:01', '2020-05-13 14:52:01'),
(48, 'http://myhouse.com/', '2020-05-13 15:18:26', '2020-05-13 15:18:26'),
(49, 'http://myhouse.com/', '2020-05-13 15:20:48', '2020-05-13 15:20:48'),
(50, 'http://myhouse.com/forgot', '2020-05-13 15:39:10', '2020-05-13 15:39:10'),
(51, 'http://myhouse.com/sujet/deposer/professionnel/services', '2020-05-13 15:40:32', '2020-05-13 15:40:32'),
(52, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=professionnels', '2020-05-13 22:25:29', '2020-05-13 22:25:29'),
(53, 'http://myhouse.com/', '2020-05-14 11:28:21', '2020-05-14 11:28:21'),
(54, 'http://myhouse.com/', '2020-05-14 11:32:37', '2020-05-14 11:32:37'),
(55, 'http://myhouse.com/', '2020-05-14 11:45:09', '2020-05-14 11:45:09'),
(56, 'http://myhouse.com/', '2020-05-14 11:47:39', '2020-05-14 11:47:39'),
(57, 'http://myhouse.com/menu/particulier/annonces', '2020-05-14 13:10:07', '2020-05-14 13:10:07'),
(58, 'http://myhouse.com/menu/particulier/annonces?user=particulier', '2020-05-14 14:09:26', '2020-05-14 14:09:26'),
(59, 'http://myhouse.com/', '2020-05-14 14:39:40', '2020-05-14 14:39:40'),
(60, 'http://myhouse.com/', '2020-05-15 09:01:53', '2020-05-15 09:01:53'),
(61, 'http://myhouse.com/menu/particulier/annonces', '2020-05-15 09:26:03', '2020-05-15 09:26:03'),
(62, 'http://myhouse.com/sujet/deposer/particulier/transaction', '2020-05-15 09:52:15', '2020-05-15 09:52:15'),
(63, 'http://myhouse.com/', '2020-05-15 10:55:56', '2020-05-15 10:55:56'),
(64, 'http://myhouse.com/menu/particulier/annonces', '2020-05-15 22:11:42', '2020-05-15 22:11:42'),
(65, 'http://myhouse.com/menu/particulier/interesse?user=particulier', '2020-05-16 10:18:05', '2020-05-16 10:18:05'),
(66, 'http://myhouse.com/', '2020-05-18 08:42:38', '2020-05-18 08:42:38'),
(67, 'http://myhouse.com/sujet/deposer/particulier/transaction', '2020-05-18 20:22:00', '2020-05-18 20:22:00'),
(68, 'http://myhouse.com/menu/messagerie/particulier', '2020-05-18 20:24:58', '2020-05-18 20:24:58'),
(69, 'http://myhouse.com/connexion', '2020-05-18 20:46:21', '2020-05-18 20:46:21'),
(70, 'http://myhouse.com/menu/particulier/annonces', '2020-05-19 09:10:03', '2020-05-19 09:10:03'),
(71, 'http://myhouse.com/', '2020-05-19 09:18:30', '2020-05-19 09:18:30'),
(72, 'http://myhouse.com/', '2020-05-20 09:05:36', '2020-05-20 09:05:36'),
(73, 'http://myhouse.com/', '2020-05-21 08:47:10', '2020-05-21 08:47:10'),
(74, 'http://myhouse.com/sujet/deposer/particulier/critere?id=87&appart_type_un=2%C3%A8me+main&surface_habitable=450&appart_etage_niveau=Sur+un+niveau&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+am%C3%A9ricaine&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=2+dressing%28s%29&nombre_salle_bain=7+salle%28s%29+de+bain&nombre_salon=6+salon%28s%29&terrasses=4+terrasse%28s%29&balcons=4+balcon%28s%29&jardin_privatif=1&buanderie=1&climatisation=1&espace_vert=1&place_vehicule=1+place%28s%29+v%C3%A9hicule&box=1&terrain_sport=1&spa=1&ecole=1&shopping=1&plage=300m&campagne=00m&montagne=900m&desert=00m&spot_surf=1%2C8km&golf=00m&foret=1%2C1km&station_ski=00m&riviere=800m', '2020-05-21 11:08:01', '2020-05-21 11:08:01'),
(75, 'http://myhouse.com/sujet/deposer/particulier/critere?id=88&appart_type_un=2%C3%A8me+main&surface_habitable=450&appart_etage_niveau=Sur+un+niveau&appart_etage_nombre=Situ%C3%A9+au+rez-de-chauss%C3%A9e&appart_etage=1+appart%28s%29+par+%C3%A9tage&appart_etage_immeuble=2+%C3%A9tage%28s%29+par+immeuble&cuisine_type=Cuisine+d%27ext%C3%A9rieur&cuisine_equipe=1&nombre_chambre=1+chambre%28s%29&dressings=3+dressing%28s%29&nombre_salle_bain=5+salle%28s%29+de+bain&nombre_salon=5+salon%28s%29&terrasses=4+terrasse%28s%29&balcons=1+balcon%28s%29&jardin_privatif=1&buanderie=1&climatisation=1&chauffe_eau=1&espace_vert=1&place_vehicule=1+place%28s%29+v%C3%A9hicule&box=1&piscine=1&salle_fitness=1&spa=1&superette=1&mosquee=1&restaurent=1&pladge=1&plage=200m&campdagne=1&campagne=1%2C8km&mondtagne=1&montagne=100m&desert=1%2C4km&spotd_surf=1&spot_surf=1km&goldf=1&golf=1%2C5km&fordet=1&foret=1km&station_ski=500m&riviedre=1&riviere=50m', '2020-05-21 13:10:09', '2020-05-21 13:10:09'),
(76, 'http://myhouse.com/', '2020-05-21 13:22:35', '2020-05-21 13:22:35'),
(77, 'http://myhouse.com/', '2020-05-21 13:23:18', '2020-05-21 13:23:18'),
(78, 'http://myhouse.com/inscription', '2020-05-21 14:04:11', '2020-05-21 14:04:11'),
(79, 'http://myhouse.com/sujet/deposer/particulier/upload/92', '2020-05-21 16:57:26', '2020-05-21 16:57:26'),
(80, 'http://myhouse.com/menu/particulier/annonces', '2020-05-21 17:25:17', '2020-05-21 17:25:17'),
(81, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers', '2020-05-21 17:35:49', '2020-05-21 17:35:49'),
(82, 'http://myhouse.com/confirm/serraj@yahoo.fr', '2020-05-21 17:50:23', '2020-05-21 17:50:23'),
(83, 'http://myhouse.com/inscription', '2020-05-22 10:44:26', '2020-05-22 10:44:26'),
(84, 'http://myhouse.com/', '2020-05-22 12:11:39', '2020-05-22 12:11:39'),
(85, 'http://myhouse.com/connect/success', '2020-05-22 16:30:26', '2020-05-22 16:30:26'),
(86, 'http://myhouse.com/', '2020-05-22 16:47:11', '2020-05-22 16:47:11'),
(87, 'http://myhouse.com/menu/charte/particulier', '2020-05-22 19:06:54', '2020-05-22 19:06:54'),
(88, 'http://myhouse.com/recherche/mixte?location=Casablanca%2C+Casablanca+-+Settat%2C+Morocco+%28city-town-village%29&page=particuliers&transaction=echange&category=residentiel&prix=10%2C73&surface=10%2C85&prix=4&surface=5&word=', '2020-05-22 19:29:22', '2020-05-22 19:29:22'),
(89, 'http://myhouse.com/', '2020-05-23 09:45:09', '2020-05-23 09:45:09'),
(90, 'http://myhouse.com/menu/charte/particulier', '2020-05-23 17:59:03', '2020-05-23 17:59:03'),
(91, 'http://myhouse.com/menu/faq/particulier', '2020-05-23 21:27:15', '2020-05-23 21:27:15'),
(92, 'http://myhouse.com/', '2020-05-24 10:53:47', '2020-05-24 10:53:47'),
(93, 'http://myhouse.com/sujet/deposer/particulier/edit/145', '2020-05-24 15:14:35', '2020-05-24 15:14:35'),
(94, 'http://myhouse.com/', '2020-05-24 15:25:27', '2020-05-24 15:25:27'),
(95, 'http://myhouse.com/', '2020-05-24 15:26:07', '2020-05-24 15:26:07'),
(96, 'http://myhouse.com/', '2020-05-24 15:28:55', '2020-05-24 15:28:55'),
(97, 'http://myhouse.com/', '2020-05-24 15:30:12', '2020-05-24 15:30:12'),
(98, 'http://myhouse.com/sujet/deposer/particulier/description?id=154&type=appartement', '2020-05-24 15:48:21', '2020-05-24 15:48:21'),
(99, 'http://myhouse.com/blog', '2020-05-24 15:56:29', '2020-05-24 15:56:29'),
(100, 'http://myhouse.com/', '2020-05-24 22:59:26', '2020-05-24 22:59:26'),
(101, 'http://myhouse.com/', '2020-05-24 23:04:28', '2020-05-24 23:04:28'),
(102, 'http://myhouse.com/', '2020-05-25 10:23:52', '2020-05-25 10:23:52'),
(103, 'http://myhouse.com/', '2020-05-26 08:26:33', '2020-05-26 08:26:33'),
(104, 'http://myhouse.com/', '2020-05-26 20:02:07', '2020-05-26 20:02:07'),
(105, 'http://myhouse.com/menu/particulier/interesse?user=particulier', '2020-05-26 21:50:48', '2020-05-26 21:50:48'),
(106, 'http://myhouse.com/', '2020-05-26 22:40:27', '2020-05-26 22:40:27'),
(107, 'http://myhouse.com/', '2020-05-27 13:15:48', '2020-05-27 13:15:48'),
(108, 'http://myhouse.com/menu/particulier/annonces', '2020-05-27 14:15:20', '2020-05-27 14:15:20'),
(109, 'http://myhouse.com/menu/particulier/annonces', '2020-05-27 14:21:41', '2020-05-27 14:21:41'),
(110, 'http://myhouse.com/menu/particulier/annonces', '2020-05-27 14:25:14', '2020-05-27 14:25:14'),
(111, 'http://myhouse.com/menu/particulier/annonces', '2020-05-27 15:39:42', '2020-05-27 15:39:42'),
(112, 'http://myhouse.com/menu/particulier/annonces', '2020-05-27 15:53:21', '2020-05-27 15:53:21'),
(113, 'http://myhouse.com/menu/particulier/annonces', '2020-05-27 16:01:39', '2020-05-27 16:01:39'),
(114, 'http://myhouse.com/menu/particulier/annonces', '2020-05-27 17:26:13', '2020-05-27 17:26:13'),
(115, 'http://myhouse.com/menu/particulier/annonces', '2020-05-28 09:23:51', '2020-05-28 09:23:51'),
(116, 'http://myhouse.com/resultat/particuliers/terrain%20r%C3%A9sidentiel-232', '2020-05-28 11:39:15', '2020-05-28 11:39:15'),
(117, 'http://myhouse.com/menu/particulier/annonces', '2020-05-28 14:02:46', '2020-05-28 14:02:46'),
(118, 'http://myhouse.com/resultat/particuliers/villa-234', '2020-05-28 14:22:41', '2020-05-28 14:22:41'),
(119, 'http://myhouse.com/sujet/deposer/particulier/critere?alarme=1&angle_de_rue=1&appart_type_un=2%C3%A8me%20main&fond_commerce=Sans%20fonds%20de%20commerce&hauteur_plafond=8&id=235&longueur_facade=120&mezzanine=1&nombre_piece=7%20pi%C3%A8ce%28s%29&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&sous_pente=600&surface_total=450&terrasse_commerciale=200&wc_sanitaire=1', '2020-05-28 14:35:40', '2020-05-28 14:35:40'),
(120, 'http://myhouse.com/sujet/deposer/particulier/type/235', '2020-05-28 15:54:48', '2020-05-28 15:54:48'),
(121, 'http://myhouse.com/menu/particulier/annonces', '2020-05-28 16:12:28', '2020-05-28 16:12:28'),
(122, 'http://myhouse.com/sujet/deposer/particulier/critere?animal_de_compagnie=1&balcons=1%20balcon%28s%29&blanchisserie=1&cafeteriat=1&campagne=1%2C4km&chambre_non_fumeur=1&dejeune=1&desert=100m&espace_vert=1&foret=00m&golf=00m&id=239&location_etudiant=1&mcampagne=1&mdesert=1&menage_quotidien=1&mforet=1&mgolf=1&mmontagne=1&montagne=600m&mplage=1&mriviere=1&mspot_surf=1&mstation_ski=1&piscine=1&place_vehicule=1%20place%28s%29%20v%C3%A9hicule&plage=900m&reception=1&reservation=1&restauration=1&riviere=1%2C8km&service_en_chambre=1&spa=1&spot_surf=00m&station_ski=1%2C4km&tele_cable=1&terrasses=1%20terrasse%28s%29&type_chambre=Chambre%20individuelle&wifi=1', '2020-05-28 16:18:45', '2020-05-28 16:18:45'),
(123, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-28 16:27:36', '2020-05-28 16:27:36'),
(124, 'http://myhouse.com/sujet/deposer/particulier/description?id=239&type=chambre', '2020-05-28 17:09:56', '2020-05-28 17:09:56'),
(125, 'http://myhouse.com/sujet/deposer/particulier/success', '2020-05-28 17:14:55', '2020-05-28 17:14:55'),
(126, 'http://myhouse.com/recherche/mixte?location=Casablanca&page=particuliers&category=&prix=10%2C73&surface=10%2C85&word=', '2020-05-28 18:34:43', '2020-05-28 18:34:43'),
(127, 'http://myhouse.com/menu/particulier/annonces', '2020-05-28 19:11:14', '2020-05-28 19:11:14'),
(128, 'http://192.168.1.11/', '2020-05-29 08:17:25', '2020-05-29 08:17:25'),
(129, 'http://myhouse.com/', '2020-05-29 08:35:57', '2020-05-29 08:35:57'),
(130, 'http://myhouse.com/menu/particulier/annonces', '2020-05-29 09:01:26', '2020-05-29 09:01:26'),
(131, 'http://myhouse.com/sujet/deposer/particulier/edit/247', '2020-05-29 09:47:49', '2020-05-29 09:47:49'),
(132, 'http://192.168.1.11/menu/particulier/annonces', '2020-05-29 10:45:41', '2020-05-29 10:45:41'),
(133, 'http://myhouse.com/', '2020-05-29 11:17:18', '2020-05-29 11:17:18'),
(134, 'http://192.168.43.6/', '2020-05-29 12:13:20', '2020-05-29 12:13:20'),
(135, 'http://192.168.43.6/menu/particulier/annonces', '2020-05-29 12:33:40', '2020-05-29 12:33:40'),
(136, 'http://myhouse.com/menu/particulier/annonces', '2020-05-29 12:54:14', '2020-05-29 12:54:14'),
(137, 'http://myhouse.com/', '2020-05-29 13:43:59', '2020-05-29 13:43:59'),
(138, 'http://myhouse.com/recherche/mixte?location=Casablanca&page=particuliers', '2020-05-29 14:02:14', '2020-05-29 14:02:14'),
(139, 'http://myhouse.com/recherche/mixte?location=&page=professionnels&location=Casablanca', '2020-05-29 14:07:32', '2020-05-29 14:07:32'),
(140, 'http://myhouse.com/menu/particulier/annonces', '2020-05-29 14:33:39', '2020-05-29 14:33:39'),
(141, 'http://myhouse.com/', '2020-05-29 18:58:26', '2020-05-29 18:58:26'),
(142, 'http://myhouse.com/', '2020-05-29 21:41:11', '2020-05-29 21:41:11'),
(143, 'http://myhouse.com/', '2020-05-29 22:01:02', '2020-05-29 22:01:02'),
(144, 'http://myhouse.com/', '2020-05-29 22:14:24', '2020-05-29 22:14:24'),
(145, 'http://myhouse.com/', '2020-05-29 22:15:36', '2020-05-29 22:15:36'),
(146, 'http://myhouse.com/', '2020-05-29 22:15:53', '2020-05-29 22:15:53'),
(147, 'http://myhouse.com/', '2020-05-30 08:26:01', '2020-05-30 08:26:01'),
(148, 'http://myhouse.com/menu/particulier/annonces', '2020-05-30 14:11:53', '2020-05-30 14:11:53'),
(149, 'http://myhouse.com/blog?click=click', '2020-05-30 14:35:51', '2020-05-30 14:35:51'),
(150, 'http://myhouse.com/sujet/deposer/particulier/edit/252', '2020-05-30 14:42:07', '2020-05-30 14:42:07'),
(151, 'http://myhouse.com/menu/particulier/annonces', '2020-05-30 14:48:39', '2020-05-30 14:48:39'),
(152, 'http://myhouse.com/', '2020-05-30 16:15:46', '2020-05-30 16:15:46'),
(153, 'http://myhouse.com/menu/faq/particulier', '2020-05-30 16:41:00', '2020-05-30 16:41:00'),
(154, 'http://myhouse.com/connect/success', '2020-05-30 18:52:25', '2020-05-30 18:52:25'),
(155, 'http://myhouse.com/menu/particulier/annonces', '2020-05-30 19:34:50', '2020-05-30 19:34:50'),
(156, 'http://myhouse.com/recherche/mixte?location=Casablanca&page=particuliers', '2020-05-31 07:10:39', '2020-05-31 07:10:39'),
(157, 'http://myhouse.com/sujet/deposer/particulier/description?id=258&type=entrepot', '2020-05-31 08:18:53', '2020-05-31 08:18:53'),
(158, 'http://myhouse.com/recherche/liste?location=Casablanca&page=particuliers&transaction=&prix=1%2C99000000000&surface=1%2C1000&word=&tri=prix_asc', '2020-05-31 09:54:35', '2020-05-31 09:54:35'),
(159, 'http://127.0.0.1//password/reset/1a002fe40d54bf0cde95c46d2509952928c4c9a28da3376d817e2c2b4610a3ed', '2020-05-31 14:48:20', '2020-05-31 14:48:20'),
(160, 'http://127.0.0.1/recherche/mixte?location=Casablanca&page=particuliers', '2020-05-31 14:53:06', '2020-05-31 14:53:06'),
(161, 'http://127.0.0.1/menu/particulier/interesse?user=particulier', '2020-05-31 15:24:38', '2020-05-31 15:24:38'),
(162, 'http://myhouse.com/menu/particulier/annonces', '2020-05-31 19:44:31', '2020-05-31 19:44:31'),
(163, 'http://myhouse.com/recherche/mixte?location=Casablanca+-+Settat&page=particuliers&transaction=achat&category=&prix=1%2C99000000000&surface=1%2C1000&word=', '2020-05-31 21:52:11', '2020-05-31 21:52:11'),
(164, 'http://myhouse.com/connexion?click=click', '2020-06-01 10:17:20', '2020-06-01 10:17:20'),
(165, 'http://myhouse.com/forgot', '2020-06-01 13:28:18', '2020-06-01 13:28:18'),
(166, 'http://myhouse.com/sujet/deposer/pricing', '2020-06-01 13:28:33', '2020-06-01 13:28:33'),
(167, 'http://myhouse.com/forgot', '2020-06-01 16:44:07', '2020-06-01 16:44:07'),
(168, 'http://myhouse.com/', '2020-06-01 16:48:02', '2020-06-01 16:48:02'),
(169, 'http://myhouse.com/sujet/deposer/particulier/transaction', '2020-06-01 17:25:23', '2020-06-01 17:25:23'),
(170, 'http://myhouse.com/', '2020-06-01 18:32:18', '2020-06-01 18:32:18'),
(171, 'http://127.0.0.1/', '2020-06-01 18:38:06', '2020-06-01 18:38:06'),
(172, 'http://myhouse.local/connect/success', '2020-06-01 19:04:40', '2020-06-01 19:04:40'),
(173, 'http://myhouse.local/', '2020-06-01 21:59:14', '2020-06-01 21:59:14'),
(174, 'http://myhouse.local/recherche/mixte?location=Casablanca&page=neufs&location=Casablanca', '2020-06-02 11:26:48', '2020-06-02 11:26:48'),
(175, 'http://myhouse.local/menu/particulier/annonces', '2020-06-02 14:45:18', '2020-06-02 14:45:18'),
(176, 'http://myhouse.local/', '2020-06-02 16:50:34', '2020-06-02 16:50:34'),
(177, 'http://myhouse.local/', '2020-06-03 08:05:41', '2020-06-03 08:05:41'),
(178, 'http://myhouse.local/menu/particulier/annonces', '2020-06-03 09:18:05', '2020-06-03 09:18:05'),
(179, 'http://myhouse.local/recherche/mixte?location=Casablanca&page=particuliers', '2020-06-04 08:10:49', '2020-06-04 08:10:49'),
(180, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 08:13:13', '2020-06-04 08:13:13'),
(181, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 08:15:39', '2020-06-04 08:15:39'),
(182, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 08:18:06', '2020-06-04 08:18:06'),
(183, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 08:20:12', '2020-06-04 08:20:12'),
(184, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 08:22:07', '2020-06-04 08:22:07'),
(185, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 08:24:36', '2020-06-04 08:24:36'),
(186, 'http://myhouse.local/menu/particulier/annonces', '2020-06-04 10:00:54', '2020-06-04 10:00:54'),
(187, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 10:06:56', '2020-06-04 10:06:56'),
(188, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 10:32:00', '2020-06-04 10:32:00'),
(189, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 10:33:56', '2020-06-04 10:33:56'),
(190, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 10:35:54', '2020-06-04 10:35:54'),
(191, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 10:50:43', '2020-06-04 10:50:43'),
(192, 'http://myhouse.local/sujet/deposer/particulier/success', '2020-06-04 10:52:50', '2020-06-04 10:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmation_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `site_web` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliation_web` tinyint(1) DEFAULT NULL,
  `type_entreprise` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `habit_affiliation` tinyint(1) DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_postal` int(11) DEFAULT NULL,
  `nom_dirigent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siege_social` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction_dirigent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `pays`, `ville`, `telephone`, `image`, `telephone_2`, `email`, `confirmation_token`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `site_web`, `affiliation_web`, `type_entreprise`, `habit_affiliation`, `logo`, `address_postal`, `nom_dirigent`, `siege_social`, `fonction_dirigent`, `account_type`, `parent_id`) VALUES
(1, 'Herman', 'maroc', 'Casablanca', '0607440000', NULL, '053310334', 'gjacksongomez@gmail.com', NULL, NULL, '$2y$10$vFLOz0ONa2JvvyMXJg5ftO6SP8M7QiBFnoHnYJQmnpwuVN2hIXf/O', '3rXh7UbNRfdFooHws94nEPqRQYQDvAyPk0U8AJYc6FdlOgj3kXJMJb3JECOk', '2020-04-24 20:12:54', '2020-06-01 13:32:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Jackson', 'Maroc', 'Casablanca', '+212675901394', NULL, '+212675901394', 'hermanjacksonfoutou@yahoo.fr', NULL, NULL, '$2y$10$JVLSc4mClbzmpmOuMQfNG.ejFdaGWBrCB35Lw7Ak0/XZkQ26IcOt6', 'gC85eimJ6QPIxBdcb4lg1Ld0uvsEDz5lwFrkQIr5tXQZ7lY23fsrHJoDoh5W', '2020-05-07 20:05:43', '2020-05-07 20:05:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Karim', 'USA', 'New York', '0607440000', NULL, NULL, 'kserraj@gmail.com', NULL, NULL, '$2y$10$WVV45uvPvJ4e25qNmuNEvuSwgR.OORdQGeLlvzNaA4XARRO2nGls.', 'BS9RTuADUEiOeJG7816EirC6cv0yMIegxYfB9RNASpBw3YCgbFxv9PDAUDKR', '2020-05-08 20:50:35', '2020-05-08 20:58:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Ghoumari', 'maroc', 'casablanca', '056633221', NULL, '053310334', 'ghoumari@gmail.com', NULL, NULL, '$2y$10$iCGczETAZO3117gqH3EFxezrXTa0ROyb1xlz0.wppU5KtMLyTlBvC', NULL, '2020-05-12 12:49:35', '2020-05-12 12:49:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'adjont', NULL),
(8, 'ghoumari', 'Maroc', 'casablanca', '0675901394', NULL, '0675901394', 'contact@ghoumari.com', NULL, NULL, '$2y$10$NqNnWKAMgKhCYtb4q5V7ZuO6Ex6ce8JUzToGH8ABq6sVVEQDHEpD2', NULL, '2020-05-13 22:33:32', '2020-05-13 22:33:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'adjont', NULL),
(9, 'Immobilier', 'USA', 'New York', '+333678787878', NULL, NULL, 'serraj@gmail.com', '$2y$10$P8.4ymWMTwvQhRDynb4hpOKdTPBQ54QxjtF8f.dTL0Pq21Rg7bMjm', NULL, '$2y$10$C9dzXnHjqHgF5aNKZqhUZ.6RHbctTimbEsiIlTcYeUMbxlqQ89zDe', NULL, '2020-05-21 13:36:14', '2020-05-21 13:36:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Immobilier', 'USA', 'New York', '+333678787878', NULL, NULL, 'serraj@yahoo.fr', NULL, NULL, '$2y$10$vF3Uao2.NlIVsREBS/8TMOESMTx8lZCzlvTxl.q.s/NCJUYgJeCMa', '4f1kcNCd4TR4N988JtZdSIurj5SO2zqmmQxgVpRDPDtLp2Qb5s3usHLYlp44', '2020-05-21 13:40:06', '2020-05-21 13:57:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Kustom', 'maroc', 'Csablanca', '053310334', NULL, NULL, 'kk@germa.ma', '$2y$10$Ux3jGyUEVH2Fc1ICcwEpXORFXtzvuu08EwG30qD3tpQzv.1cffnMC', NULL, '$2y$10$gAVnk/8KasyA45DY6RQUceVxBw7XW4x.cIrp.p9wdYa8/T5GgUQWK', NULL, '2020-05-22 09:53:38', '2020-05-22 09:53:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'dfbdfbdfb', 'qevevev', 'dfbdfbdf', '3464634364646', NULL, NULL, 'lofe@gmail.com', NULL, NULL, '$2y$10$217/KX9IuhwutLee18lDYuUgihpmADIChnVQ.1cs2Dn0avl.P1mxe', NULL, '2020-05-22 10:08:39', '2020-05-22 10:10:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Mbani', 'jhgvjhgvhj', 'casajukhklj', '635365655', NULL, NULL, 'kmab@hu.hb', NULL, NULL, '$2y$10$hw2/mmBldHR2Y5cG9ZMXsuD5/6EdUu70sPssnRPLVZBvb0tDXmxqK', NULL, '2020-05-22 10:16:33', '2020-05-22 10:20:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'dfnbdnd', 'sfdhbsrfdb', 'dfbndfnbdfbn', '2114321313', NULL, NULL, 'sqfedqs@df.qd', '$2y$10$8LijlJyj3Kj8kNn6Y8xmzOCoHXShZFcM2uR5.xw6DqNDYrC6K.nmO', NULL, '$2y$10$/t70fcmleLmoTj8kntOGQ.5Ik/Auhy/3kqEU9ysoPttr0Abdi/t02', NULL, '2020-05-22 10:28:31', '2020-05-22 10:28:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'gndfndf', 'rgsgsed', 'dfndfn', '635331', NULL, NULL, 'kio@kh.fr', NULL, NULL, '$2y$10$IJqrTj/F6ilp/QnDqCiFHe7YM.okGvwUNXDTnN9Nc8FynUIrHMHOa', NULL, '2020-05-22 10:31:56', '2020-05-22 12:02:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'dfbndfbnd', 'maroc', 'dfbnfsdbn', '254524524', NULL, NULL, 'sdvgsd@sd.df', '$2y$10$Ridlt2C2c4KTp1tR.XCO.SsBPoEaVQRWp6eWwzn1OZH7cV2JTkli', NULL, '$2y$10$cR4URUb/AHlBwYZYkqOv3e8LDsBx0XEiWmGuxy5abI492x3kawKvG', NULL, '2020-05-22 10:35:04', '2020-05-22 10:35:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'tnjtdhntd', 'fzqafzqa', 'fdndfndf', '35413545', NULL, NULL, 'gbsfdbg@xn--s-oga.df', '$2y$10$Z6pZDtg1y9TndSJbZja.PuOLbGuLJU5B9OiTP6USnSX1aZ8El4R.', NULL, '$2y$10$zkgkYSkuqYvoTc5Vhy4Ao.ODKwbZqrq84I92/wrNSC3MeoaRTVa0O', NULL, '2020-05-22 10:36:01', '2020-05-22 10:36:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'gndnbd', 'sfdbsvg', 'fdbndfnb', '3213535', NULL, '656665456456', 'sdds@dgvd.fdg', '$2y$10$jlQXjUhy8XURzqe3To7IP.lRviX7.KWIo3tNs13TdIcwvaoYcczaG', NULL, '$2y$10$D4vixdqApFZt.TfQy0M4Eu5e8gtmj5BxPCTKS20s2fnGPOIgox1Uy', NULL, '2020-05-22 10:38:48', '2020-05-22 10:38:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'fgnjfgnjgfn', 'sdfgsqefgqe', 'gngf', '354663', NULL, '235436534', 'rgsr@sedfgs.sgfs', '$2y$10$OVwk8F4srGV0A310JdL.KO4juGhVClJm7cHnJI.yFw3QCAaspMMf2', NULL, '$2y$10$q9JF35o7W/knnRSjjBcynOYc4XGTa3kg7JCdzFzBjO2qL4n4kmtsG', NULL, '2020-05-22 10:40:21', '2020-05-22 10:40:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'goum', 'sdsc', 'qdscdsqcqdsc', '3456353543', NULL, '66363', 'sdfs@sd.sd', '$2y$10$vTdMhOpUxDhPYEqONswEm.OzsNiEcBdOJaPK0dTMC2fft7MUFNqi', NULL, '$2y$10$E7vyZ0dGFwoB2rrtSzEo.eSBprq6171vMJoxFJ.dMx3jTqB/U.BsW', NULL, '2020-05-22 16:40:45', '2020-05-22 16:40:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'John', 'USA', 'New York', '067876', NULL, NULL, 'serraj@fdg.com', '$2y$10$jsI0ouASLy83gxOIvf5MJ.7co8qwE4TlYBVMwi0MG6a47UcZtNZkm', NULL, '$2y$10$l0V/l89ocvCmF29gOPZOFepMe095rMOhEdUcPkA4IyMaTNG3/Jd8a', NULL, '2020-05-29 08:40:25', '2020-05-29 08:40:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'John', 'USA', 'New York', '067876', NULL, NULL, 'fgg@fghb.com', NULL, NULL, '$2y$10$YQZR2Vcoy4wBPajmWPiBA.LF1SGTWXbr3bclFYE/rxJxE.MmPsXwy', 'yyBTfasjvf1y6dbuKzBaN4NsCDe3ZLdKW3ub33hrOrrgv217EpvNWKlTHtR0', '2020-05-29 08:43:55', '2020-05-29 10:34:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'John', 'USA', 'New York', '067876', NULL, NULL, 'fge@fghb.com', NULL, NULL, '$2y$10$5Xxa9lm5OCCzTIMdLc741umaSR6nfWUhuV3DgpBatK8zGYcY9Bx5i', NULL, '2020-05-29 10:25:01', '2020-05-29 10:25:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Ghoumari', 'qssqdqsd', 'sdbgsrdb', '3535465', NULL, NULL, 'sqcsqc@sqc.ssd', '$2y$10$KlWH4QEPjtmGtUYqVF86HOxEvDdPBop6pouiQDb9SQY253WydDPhG', NULL, '$2y$10$IhweQ8.4Ih4eOL2cQtsq4O55VrIXXj4wqWEc/9V9UvjT7t6Cad6kS', NULL, '2020-05-29 12:01:21', '2020-05-29 12:01:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Ghoumari', 'Maroc', 'dfbfsb', '63465465', NULL, NULL, 'gjacxkson@gmail.com', NULL, NULL, '$2y$10$.kVipH81E4FdeLgNjk69Me8WrVPlEAHXd0Q5MoemeUkQhTXs9ogGW', NULL, '2020-05-29 12:20:28', '2020-05-29 12:20:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'sdvvsrdvgs', 'sgvsged', 'sbhsb', '65646546', NULL, NULL, 'sdfs@sd.sed', NULL, NULL, '$2y$10$pDZTDO40NbjS0gY0joOK9ediEecEThUD9p94UenLtJJSHSKQL9gtu', NULL, '2020-05-29 12:35:16', '2020-05-29 12:35:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'gqcs', 'qssqsq', 'dscvdscv', '12326464', NULL, NULL, 'sdd@ds.dd', NULL, NULL, '$2y$10$nQ8X.LL8C7jfj2U6ez8SFeQ.k6GRWRXl.Zab8M9FOB.G6eWbdzlb2', NULL, '2020-05-29 14:35:19', '2020-05-29 14:35:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Ghoumari', 'sdfsdsd', 'dffd', '35453454', NULL, NULL, 'fddf@df.fg', '$2y$10$QTDtEERRajJkVTlFgFu01ufO0VJz5PjQadiQ8wdJJdZOBLPfibBDK', NULL, '$2y$10$U0N9Uy4QMJUikzaxmKpmY.RhPxkgmm5D5gVEqq7ALkEkaaRBzBYm.', NULL, '2020-05-29 14:39:55', '2020-05-29 14:39:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'sdvsd', 'qdfvqdsfvc', 'sdvdsv', '654654656', NULL, NULL, 'gdcf@d.d', NULL, NULL, '$2y$10$z.PusvO.AEhE4wTd9ybSHeM./rDonvW.mZ1jeCb6wHjo52ahF6IAK', NULL, '2020-05-29 14:45:47', '2020-05-29 14:46:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'fnhgfn', 'dfsfds', 'dndgdg', '23123', NULL, '5465455', 'sdgvds@ds.d', NULL, NULL, '$2y$10$V0ST6uq//h6JLzHf6yPiQ.MwhUKabi63QRLcnmwuqZr4Z04UI1A6O', NULL, '2020-05-29 15:01:53', '2020-05-29 15:02:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'dfbfdb', 'dvfdsvs', 'fdbdfb', '3521351', NULL, '3235135', 'sdvsd@dsv.ds', NULL, NULL, '$2y$10$nhnSJiqG9btbtTJQRcXDVe7vuOmIV2wPzccgqVmZKDGJyCxIFxxc2', NULL, '2020-05-29 15:08:34', '2020-05-29 15:08:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Ghoumari', 'maroc', 'casa', '215555555', NULL, NULL, 'ssqs@sq.gq', NULL, NULL, '$2y$10$FVSYixi6G3G1WSL8fUheBePy0Cvydnk28MlLsaaXOSzJ/WZ.2MuVu', NULL, '2020-05-29 15:17:03', '2020-05-29 15:17:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Ghoumari', 'maroc', 'casablanca', '0533103443', NULL, NULL, 'ghoumari@geomark.ma', NULL, NULL, '$2y$10$RMaq0jqvKwXXh4Nhb/I7yOlTlKspIrlMxKiA9IbgPunbRRhqdkYk2', NULL, '2020-05-29 21:28:28', '2020-05-29 21:28:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'rgrfgrfhn', 'USA', 'New york', '0666666666', NULL, NULL, 'serraj@ghtfg.com', NULL, NULL, '$2y$10$kQldR/QhZb8TOSDg5vAVyeIrKbQ0bsWDHwgJHwkVh6/fMaBzJwfSe', NULL, '2020-05-31 14:34:38', '2020-05-31 14:37:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Herman', 'maroc', 'casa', '053310334', NULL, NULL, 'gjacksong@gmail.com', '$2y$10$KRakvwWK997zx.sRLfDRleB9GYK5MkWKOm83b3cPPfMYzI.MlFzR6', NULL, '$2y$10$Dw/ZQyjr5CmgKItgsj3ZfuT4RGX.h92plS.N/5K9aqWwSskaDI1bO', NULL, '2020-06-01 09:21:24', '2020-06-01 09:21:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Herman', 'Maroc', 'casablanca', '053310334', NULL, NULL, 'gjacksongmez@gmail.com', '$2y$10$hSqcrK31IBGdAK7PUD3KvudKwo.Hn1uTWIKryKmTvnUBbg7RXfCq', NULL, '$2y$10$DrWnS/MlNmjzJE20JnfeDO5VKj.uVCZ2JN3oo8ypei8FM93Ub8y1q', NULL, '2020-06-01 09:46:47', '2020-06-01 09:46:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Herman', 'maroc', 'casablanca', '053310334', NULL, '053321024', 'gg@gg.ma', '$2y$10$FGPOMUB4Ew9tVr0xYMFj2u9nsq9HWYTBKHN8zM7kUWrray.k0AAxy', NULL, '$2y$10$vRcCrnlDv0h6M5fjpwmm4eIQwmEccy/cvyWOvu6Vk9V2b9voHUdJ2', NULL, '2020-06-01 12:45:50', '2020-06-01 12:45:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Herman', 'qfqfqzfazqf', 'ersgbvrs', '5534364553', NULL, NULL, 'sdvbs@svd.sd', '$2y$10$ilni2b2AG91goCICXKUtref.yONJ5TRWKuda5uYTwFZzXeklydHa', NULL, '$2y$10$orRypkU1TOOFBTVi/ovneOuG7ctDqdI2uOIWKV7FNxOxl2yN2KA0y', NULL, '2020-06-01 12:57:28', '2020-06-01 12:57:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Herman', 'qfqfqzfazqf', 'ersgbvrs', '5534364553', NULL, NULL, 'sdvbxs@svd.sd', '$2y$10$11UfHLlJI2fOUJ9yG9qnfeXwbW7ncnRr2DufnTkNCpODYtQR37q9u', NULL, '$2y$10$Xiyt4kzYDARUdkwu3/rvVOON0rnqurLi3uy26bBoylsu7lm4fkXQ2', NULL, '2020-06-01 13:02:09', '2020-06-01 13:02:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annonce_urls`
--
ALTER TABLE `annonce_urls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannieres`
--
ALTER TABLE `bannieres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_types`
--
ALTER TABLE `category_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connect_urls`
--
ALTER TABLE `connect_urls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_urls`
--
ALTER TABLE `menu_urls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_from_id_foreign` (`from_id`),
  ADD KEY `messages_to_id_foreign` (`to_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neufs`
--
ALTER TABLE `neufs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `particuliers`
--
ALTER TABLE `particuliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `particulier_agendas`
--
ALTER TABLE `particulier_agendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `particulier_agendas_particulier_id_foreign` (`particulier_id`),
  ADD KEY `particulier_agendas_user_id_foreign` (`user_id`);

--
-- Indexes for table `particulier_criteres`
--
ALTER TABLE `particulier_criteres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `particulier_interesses`
--
ALTER TABLE `particulier_interesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `particulier_interesses_particulier_id_foreign` (`particulier_id`),
  ADD KEY `particulier_interesses_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `professionnels`
--
ALTER TABLE `professionnels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professionnel_agendas`
--
ALTER TABLE `professionnel_agendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professionnel_agendas_professionnel_id_foreign` (`professionnel_id`),
  ADD KEY `professionnel_agendas_user_id_foreign` (`user_id`);

--
-- Indexes for table `professionnel_criteres`
--
ALTER TABLE `professionnel_criteres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professionnel_interesses`
--
ALTER TABLE `professionnel_interesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professionnel_interesses_professionnel_id_foreign` (`professionnel_id`),
  ADD KEY `professionnel_interesses_user_id_foreign` (`user_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pushes`
--
ALTER TABLE `pushes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_biens`
--
ALTER TABLE `type_biens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
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
-- AUTO_INCREMENT for table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `annonce_urls`
--
ALTER TABLE `annonce_urls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
--
-- AUTO_INCREMENT for table `bannieres`
--
ALTER TABLE `bannieres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category_types`
--
ALTER TABLE `category_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `connect_urls`
--
ALTER TABLE `connect_urls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu_urls`
--
ALTER TABLE `menu_urls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
--
-- AUTO_INCREMENT for table `neufs`
--
ALTER TABLE `neufs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `particuliers`
--
ALTER TABLE `particuliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;
--
-- AUTO_INCREMENT for table `particulier_agendas`
--
ALTER TABLE `particulier_agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `particulier_criteres`
--
ALTER TABLE `particulier_criteres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT for table `particulier_interesses`
--
ALTER TABLE `particulier_interesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `professionnels`
--
ALTER TABLE `professionnels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `professionnel_agendas`
--
ALTER TABLE `professionnel_agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `professionnel_criteres`
--
ALTER TABLE `professionnel_criteres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `professionnel_interesses`
--
ALTER TABLE `professionnel_interesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pushes`
--
ALTER TABLE `pushes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type_biens`
--
ALTER TABLE `type_biens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_from_id_foreign` FOREIGN KEY (`from_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_to_id_foreign` FOREIGN KEY (`to_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `particulier_agendas`
--
ALTER TABLE `particulier_agendas`
  ADD CONSTRAINT `particulier_agendas_particulier_id_foreign` FOREIGN KEY (`particulier_id`) REFERENCES `particuliers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `particulier_agendas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `particulier_interesses`
--
ALTER TABLE `particulier_interesses`
  ADD CONSTRAINT `particulier_interesses_particulier_id_foreign` FOREIGN KEY (`particulier_id`) REFERENCES `particuliers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `particulier_interesses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `professionnel_agendas`
--
ALTER TABLE `professionnel_agendas`
  ADD CONSTRAINT `professionnel_agendas_professionnel_id_foreign` FOREIGN KEY (`professionnel_id`) REFERENCES `professionnels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `professionnel_agendas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `professionnel_interesses`
--
ALTER TABLE `professionnel_interesses`
  ADD CONSTRAINT `professionnel_interesses_professionnel_id_foreign` FOREIGN KEY (`professionnel_id`) REFERENCES `professionnels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `professionnel_interesses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
