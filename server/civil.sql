-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 29 oct. 2024 à 15:06
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `civil`
--

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'Genie Informatique', 'ashraff.deev@gmail.com', '+ 44 7277272763', 'France  ,  Mraseille  , Rue Paris 88');

-- --------------------------------------------------------

--
-- Structure de la table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `hire_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `employees`
--

INSERT INTO `employees` (`id`, `name`, `position`, `salary`, `hire_date`) VALUES
(1, 'UUUUUU', 'nn', 2000.00, '2024-10-07');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `files_project`
--

CREATE TABLE `files_project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` longblob NOT NULL,
  `file_type` enum('PDF','Word','Excel','Other') NOT NULL,
  `status` enum('SIGNED','IN PROGRESS','REJECTED') DEFAULT 'IN PROGRESS',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `files_project`
--

INSERT INTO `files_project` (`id`, `name`, `file`, `file_type`, `status`, `created_at`, `updated_at`) VALUES
(2, 'aa', 0x255044462d312e340a25e2e3cfd30a322030206f626a0a3c3c2f4c656e677468203132332f46696c7465722f466c6174654465636f64653e3e73747265616d0a789c2be4720ae1323653b03030530849e13250d035b40031f4dd0c150c8d1442d2b834024b33abac14bc12cb1215522b12733543b280ca0c50546b2860150d2c4d2d2ec9cccfb35228cf482c51c82c5648ce492c2ec6aad6504fc110ab84919e82115609633d0563ac12267a0a26045de91ac215c80500bb2d393c0a656e6473747265616d0a656e646f626a0a342030206f626a0a3c3c2f547970652f506167652f4d65646961426f785b30203020353935203834325d2f5265736f75726365733c3c2f466f6e743c3c2f46312031203020523e3e3e3e2f436f6e74656e74732032203020522f506172656e742033203020523e3e0a656e646f626a0a312030206f626a0a3c3c2f547970652f466f6e742f537562747970652f54797065312f42617365466f6e742f48656c7665746963612f456e636f64696e672f57696e416e7369456e636f64696e673e3e0a656e646f626a0a332030206f626a0a3c3c2f547970652f50616765732f436f756e7420312f4b6964735b34203020525d3e3e0a656e646f626a0a352030206f626a0a3c3c2f547970652f436174616c6f672f50616765732033203020523e3e0a656e646f626a0a362030206f626a0a3c3c2f50726f6475636572286954657874ae20352e352e31332e3320a9323030302d323032322069546578742047726f7570204e56205c284147504c2d76657273696f6e5c29292f4372656174696f6e4461746528443a32303234313032363130333535372b303227303027292f4d6f644461746528443a32303234313032363130333535372b303227303027293e3e0a656e646f626a0a787265660a3020370a303030303030303030302036353533352066200a30303030303030333137203030303030206e200a30303030303030303135203030303030206e200a30303030303030343035203030303030206e200a30303030303030323035203030303030206e200a30303030303030343536203030303030206e200a30303030303030353031203030303030206e200a747261696c65720a3c3c2f53697a6520372f526f6f742035203020522f496e666f2036203020522f4944205b3c32366431323232313630616161366337336165336539643936363062656437303e3c32366431323232313630616161366337336165336539643936363062656437303e5d3e3e0a2569546578742d352e352e31332e330a7374617274787265660a3636310a2525454f460a, 'PDF', 'SIGNED', '2024-10-28 13:34:31', '2024-10-28 17:44:14'),
(3, 'Contrat', 0x255044462d312e340a25e2e3cfd30a322030206f626a0a3c3c2f4c656e677468203132332f46696c7465722f466c6174654465636f64653e3e73747265616d0a789c2be4720ae1323653b03030530849e13250d035b40031f4dd0c150c8d1442d2b834024b33abac14bc12cb1215522b12733543b280ca0c50546b2860150d2c4d2d2ec9cccfb35228cf482c51c82c5648ce492c2ec6aad6504fc110ab84919e82115609633d0563ac12267a0a26045de91ac215c80500bb2d393c0a656e6473747265616d0a656e646f626a0a342030206f626a0a3c3c2f547970652f506167652f4d65646961426f785b30203020353935203834325d2f5265736f75726365733c3c2f466f6e743c3c2f46312031203020523e3e3e3e2f436f6e74656e74732032203020522f506172656e742033203020523e3e0a656e646f626a0a312030206f626a0a3c3c2f547970652f466f6e742f537562747970652f54797065312f42617365466f6e742f48656c7665746963612f456e636f64696e672f57696e416e7369456e636f64696e673e3e0a656e646f626a0a332030206f626a0a3c3c2f547970652f50616765732f436f756e7420312f4b6964735b34203020525d3e3e0a656e646f626a0a352030206f626a0a3c3c2f547970652f436174616c6f672f50616765732033203020523e3e0a656e646f626a0a362030206f626a0a3c3c2f50726f6475636572286954657874ae20352e352e31332e3320a9323030302d323032322069546578742047726f7570204e56205c284147504c2d76657273696f6e5c29292f4372656174696f6e4461746528443a32303234313032363130333535372b303227303027292f4d6f644461746528443a32303234313032363130333535372b303227303027293e3e0a656e646f626a0a787265660a3020370a303030303030303030302036353533352066200a30303030303030333137203030303030206e200a30303030303030303135203030303030206e200a30303030303030343035203030303030206e200a30303030303030323035203030303030206e200a30303030303030343536203030303030206e200a30303030303030353031203030303030206e200a747261696c65720a3c3c2f53697a6520372f526f6f742035203020522f496e666f2036203020522f4944205b3c32366431323232313630616161366337336165336539643936363062656437303e3c32366431323232313630616161366337336165336539643936363062656437303e5d3e3e0a2569546578742d352e352e31332e330a7374617274787265660a3636310a2525454f460a, 'PDF', 'REJECTED', '2024-10-28 17:30:58', '2024-10-28 17:44:34'),
(4, 'www', 0x255044462d312e340a25e2e3cfd30a322030206f626a0a3c3c2f4c656e677468203132332f46696c7465722f466c6174654465636f64653e3e73747265616d0a789c2be4720ae1323653b03030530849e13250d035b40031f4dd0c150c8d1442d2b834024b33abac14bc12cb1215522b12733543b280ca0c50546b2860150d2c4d2d2ec9cccfb35228cf482c51c82c5648ce492c2ec6aad6504fc110ab84919e82115609633d0563ac12267a0a26045de91ac215c80500bb2d393c0a656e6473747265616d0a656e646f626a0a342030206f626a0a3c3c2f547970652f506167652f4d65646961426f785b30203020353935203834325d2f5265736f75726365733c3c2f466f6e743c3c2f46312031203020523e3e3e3e2f436f6e74656e74732032203020522f506172656e742033203020523e3e0a656e646f626a0a312030206f626a0a3c3c2f547970652f466f6e742f537562747970652f54797065312f42617365466f6e742f48656c7665746963612f456e636f64696e672f57696e416e7369456e636f64696e673e3e0a656e646f626a0a332030206f626a0a3c3c2f547970652f50616765732f436f756e7420312f4b6964735b34203020525d3e3e0a656e646f626a0a352030206f626a0a3c3c2f547970652f436174616c6f672f50616765732033203020523e3e0a656e646f626a0a362030206f626a0a3c3c2f50726f6475636572286954657874ae20352e352e31332e3320a9323030302d323032322069546578742047726f7570204e56205c284147504c2d76657273696f6e5c29292f4372656174696f6e4461746528443a32303234313032363130333535372b303227303027292f4d6f644461746528443a32303234313032363130333535372b303227303027293e3e0a656e646f626a0a787265660a3020370a303030303030303030302036353533352066200a30303030303030333137203030303030206e200a30303030303030303135203030303030206e200a30303030303030343035203030303030206e200a30303030303030323035203030303030206e200a30303030303030343536203030303030206e200a30303030303030353031203030303030206e200a747261696c65720a3c3c2f53697a6520372f526f6f742035203020522f496e666f2036203020522f4944205b3c32366431323232313630616161366337336165336539643936363062656437303e3c32366431323232313630616161366337336165336539643936363062656437303e5d3e3e0a2569546578742d352e352e31332e330a7374617274787265660a3636310a2525454f460a, 'Word', 'IN PROGRESS', '2024-10-28 17:38:20', '2024-10-28 17:38:20'),
(5, 'Contrat', 0x255044462d312e340a25e2e3cfd30a322030206f626a0a3c3c2f4c656e677468203132332f46696c7465722f466c6174654465636f64653e3e73747265616d0a789c2be4720ae1323653b03030530849e13250d035b40031f4dd0c150c8d1442d2b834024b33abac14bc12cb1215522b12733543b280ca0c50546b2860150d2c4d2d2ec9cccfb35228cf482c51c82c5648ce492c2ec6aad6504fc110ab84919e82115609633d0563ac12267a0a26045de91ac215c80500bb2d393c0a656e6473747265616d0a656e646f626a0a342030206f626a0a3c3c2f547970652f506167652f4d65646961426f785b30203020353935203834325d2f5265736f75726365733c3c2f466f6e743c3c2f46312031203020523e3e3e3e2f436f6e74656e74732032203020522f506172656e742033203020523e3e0a656e646f626a0a312030206f626a0a3c3c2f547970652f466f6e742f537562747970652f54797065312f42617365466f6e742f48656c7665746963612f456e636f64696e672f57696e416e7369456e636f64696e673e3e0a656e646f626a0a332030206f626a0a3c3c2f547970652f50616765732f436f756e7420312f4b6964735b34203020525d3e3e0a656e646f626a0a352030206f626a0a3c3c2f547970652f436174616c6f672f50616765732033203020523e3e0a656e646f626a0a362030206f626a0a3c3c2f50726f6475636572286954657874ae20352e352e31332e3320a9323030302d323032322069546578742047726f7570204e56205c284147504c2d76657273696f6e5c29292f4372656174696f6e4461746528443a32303234313032363130333535372b303227303027292f4d6f644461746528443a32303234313032363130333535372b303227303027293e3e0a656e646f626a0a787265660a3020370a303030303030303030302036353533352066200a30303030303030333137203030303030206e200a30303030303030303135203030303030206e200a30303030303030343035203030303030206e200a30303030303030323035203030303030206e200a30303030303030343536203030303030206e200a30303030303030353031203030303030206e200a747261696c65720a3c3c2f53697a6520372f526f6f742035203020522f496e666f2036203020522f4944205b3c32366431323232313630616161366337336165336539643936363062656437303e3c32366431323232313630616161366337336165336539643936363062656437303e5d3e3e0a2569546578742d352e352e31332e330a7374617274787265660a3636310a2525454f460a, 'Word', 'IN PROGRESS', '2024-10-28 17:38:58', '2024-10-28 17:38:58');

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `invoice_object` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `gross_total` decimal(10,2) NOT NULL,
  `total_after_deduction` decimal(10,2) NOT NULL,
  `status` enum('Paid','Unpaid','Overdue') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`id`, `project_id`, `invoice_number`, `invoice_object`, `client_name`, `gross_total`, `total_after_deduction`, `status`) VALUES
(1, 1, '74257257', 'gsdgsdg', 'gdsgdsgd', 211646.00, 54654.00, 'Paid'),
(2, 1, '54654', 'feffv', 'edff', 4165.00, 1651.00, 'Paid');

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `existing_quantity` int(11) DEFAULT NULL,
  `requested_quantity` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `materials`
--

INSERT INTO `materials` (`id`, `name`, `existing_quantity`, `requested_quantity`, `unit`, `unit_price`, `status`) VALUES
(2, 'eze', 654, 54, 'gram', 0.03, 'achete');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `notification_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `notification_type`) VALUES
(2, 'aaaaaaa', 'info');

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_object` text DEFAULT NULL,
  `nature_of_service` varchar(255) DEFAULT NULL,
  `service_order_date` date DEFAULT NULL,
  `execution_delay` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` enum('In Progress','Completed','Incompleted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `client_name`, `project_name`, `project_object`, `nature_of_service`, `service_order_date`, `execution_delay`, `amount`, `status`) VALUES
(1, 'rgzg', '', 'rgg', 'reger', '2024-10-30', 0, 1616.00, 'In Progress');

-- --------------------------------------------------------

--
-- Structure de la table `project_requests`
--

CREATE TABLE `project_requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `request_date` date DEFAULT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `project_description` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `project_requests`
--

INSERT INTO `project_requests` (`id`, `user_id`, `request_date`, `project_name`, `project_description`, `status`) VALUES
(1, 1, '2024-10-29', 'ooooooooo', 'ns vdkk', 'Pending'),
(2, 1, '2024-11-01', 'ooooooooo', 'vdsve', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` enum('SCHEDULED','CANCELLED','COMPLETED') DEFAULT 'SCHEDULED',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `rendez_vous`
--

INSERT INTO `rendez_vous` (`id`, `client_id`, `date`, `time`, `location`, `status`, `notes`, `created_at`, `updated_at`) VALUES
(2, 1, '2024-10-19', '00:16:00', 'Casa', NULL, NULL, '2024-10-28 23:11:52', '2024-10-28 23:12:06');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('35pG4FQhFoyej28Mryu9KIV2NLagS8aWZ3TMyU2G', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVU1LWHV1UDFZTkdoNmxHcUJlNnR2bmVxWlI0bTRiZHJReXBIU0lIRCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQtZ2VyYW50Ijt9fQ==', 1730210453);

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`id`, `project_id`, `name`, `description`, `date`, `status`) VALUES
(1, 1, 'efezf', 'jdfjhj', '2024-10-15', 'Completed'),
(2, 1, 'ezfef', 'zdzagdyih', '2024-10-16', 'In Progress'),
(4, 1, 'zdzaf', 'fgfdg', '2024-10-31', 'In Progress');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Nasma OUARDI', 'nasma@gamil.com', '$2a$12$RTMJaH/4i7tWntJeyZgliOcJtHFbwkNhQ8SMR2CMvOL24KwxDZBcC', 'ingenieur'),
(3, 'Mohammed OUEDRHIRI', 'employee@gmail.com', '$2a$12$LmRc72xiqEUwkhI1qkas3uKASii.Qoo8fw/68rCR6AkpbuRl/ftK.', 'technicien'),
(4, 'Majd Bennouna', 'bennounamajd@gmail.com', '$2a$12$LmRc72xiqEUwkhI1qkas3uKASii.Qoo8fw/68rCR6AkpbuRl/ftK.', 'gerant');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `files_project`
--
ALTER TABLE `files_project`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project_requests`
--
ALTER TABLE `project_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_client` (`client_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `files_project`
--
ALTER TABLE `files_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `project_requests`
--
ALTER TABLE `project_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Contraintes pour la table `project_requests`
--
ALTER TABLE `project_requests`
  ADD CONSTRAINT `project_requests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD CONSTRAINT `fk_client` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
