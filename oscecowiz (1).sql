-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 05 oct. 2023 à 16:17
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `oscecowiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `equipment_id` bigint(20) UNSIGNED NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `consommations`
--

CREATE TABLE `consommations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `equipment_id` bigint(20) UNSIGNED NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `consommations`
--

INSERT INTO `consommations` (`id`, `equipment_id`, `value`, `etat`, `created_at`, `updated_at`) VALUES
(1104, 1, 339.00, 0, '2023-09-30 02:11:53', '2023-09-30 02:11:53'),
(1105, 2, 833.00, 0, '2023-09-30 02:11:53', '2023-09-30 02:11:53'),
(1106, 3, 518.00, 1, '2023-09-30 02:11:53', '2023-09-30 02:11:53'),
(1107, 4, 438.00, 1, '2023-09-30 02:11:53', '2023-09-30 02:11:53'),
(1108, 5, 800.00, 1, '2023-09-30 02:11:53', '2023-09-30 02:11:53'),
(1109, 1, 689.00, 1, '2023-09-30 02:11:55', '2023-09-30 02:11:55'),
(1110, 2, 144.00, 0, '2023-09-30 02:11:55', '2023-09-30 02:11:55'),
(1111, 3, 578.00, 0, '2023-09-30 02:11:55', '2023-09-30 02:11:55'),
(1112, 4, 397.00, 0, '2023-09-30 02:11:55', '2023-09-30 02:11:55'),
(1113, 5, 209.00, 0, '2023-09-30 02:11:55', '2023-09-30 02:11:55'),
(1114, 1, 676.00, 1, '2023-09-30 02:11:56', '2023-09-30 02:11:56'),
(1115, 2, 274.00, 0, '2023-09-30 02:11:56', '2023-09-30 02:11:56'),
(1116, 3, 147.00, 1, '2023-09-30 02:11:56', '2023-09-30 02:11:56'),
(1117, 4, 871.00, 0, '2023-09-30 02:11:56', '2023-09-30 02:11:56'),
(1118, 5, 638.00, 1, '2023-09-30 02:11:56', '2023-09-30 02:11:56'),
(1119, 1, 136.00, 0, '2023-09-30 02:11:57', '2023-09-30 02:11:57'),
(1120, 2, 560.00, 1, '2023-09-30 02:11:57', '2023-09-30 02:11:57'),
(1121, 3, 275.00, 0, '2023-09-30 02:11:57', '2023-09-30 02:11:57'),
(1122, 4, 725.00, 0, '2023-09-30 02:11:57', '2023-09-30 02:11:57'),
(1123, 5, 198.00, 0, '2023-09-30 02:11:57', '2023-09-30 02:11:57'),
(1124, 1, 278.00, 1, '2023-09-30 02:11:58', '2023-09-30 02:11:58'),
(1125, 2, 748.00, 1, '2023-09-30 02:11:58', '2023-09-30 02:11:58'),
(1126, 3, 849.00, 1, '2023-09-30 02:11:58', '2023-09-30 02:11:58'),
(1127, 4, 482.00, 0, '2023-09-30 02:11:58', '2023-09-30 02:11:58'),
(1128, 5, 207.00, 1, '2023-09-30 02:11:58', '2023-09-30 02:11:58'),
(1129, 1, 920.00, 1, '2023-09-30 02:11:59', '2023-09-30 02:11:59'),
(1130, 2, 529.00, 1, '2023-09-30 02:11:59', '2023-09-30 02:11:59'),
(1131, 3, 948.00, 1, '2023-09-30 02:11:59', '2023-09-30 02:11:59'),
(1132, 4, 294.00, 0, '2023-09-30 02:11:59', '2023-09-30 02:11:59'),
(1133, 5, 753.00, 1, '2023-09-30 02:11:59', '2023-09-30 02:11:59'),
(1134, 1, 851.00, 0, '2023-09-30 02:12:00', '2023-09-30 02:12:00'),
(1135, 2, 393.00, 1, '2023-09-30 02:12:00', '2023-09-30 02:12:00'),
(1136, 3, 128.00, 0, '2023-09-30 02:12:00', '2023-09-30 02:12:00'),
(1137, 4, 931.00, 0, '2023-09-30 02:12:00', '2023-09-30 02:12:00'),
(1138, 5, 430.00, 1, '2023-09-30 02:12:00', '2023-09-30 02:12:00'),
(1139, 1, 924.00, 0, '2023-09-30 02:12:01', '2023-09-30 02:12:01'),
(1140, 2, 630.00, 1, '2023-09-30 02:12:01', '2023-09-30 02:12:01'),
(1141, 3, 238.00, 1, '2023-09-30 02:12:01', '2023-09-30 02:12:01'),
(1142, 4, 416.00, 0, '2023-09-30 02:12:01', '2023-09-30 02:12:01'),
(1143, 5, 757.00, 1, '2023-09-30 02:12:01', '2023-09-30 02:12:01'),
(1144, 1, 225.00, 1, '2023-09-30 02:12:02', '2023-09-30 02:12:02'),
(1145, 2, 420.00, 0, '2023-09-30 02:12:02', '2023-09-30 02:12:02'),
(1146, 3, 964.00, 0, '2023-09-30 02:12:02', '2023-09-30 02:12:02'),
(1147, 4, 979.00, 1, '2023-09-30 02:12:02', '2023-09-30 02:12:02'),
(1148, 5, 434.00, 0, '2023-09-30 02:12:02', '2023-09-30 02:12:02'),
(1149, 1, 987.00, 1, '2023-10-03 09:20:11', '2023-10-03 09:20:11');

-- --------------------------------------------------------

--
-- Structure de la table `equipments`
--

CREATE TABLE `equipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `equipment_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipments`
--

INSERT INTO `equipments` (`id`, `equipment_id`, `name`, `etat`, `created_at`, `updated_at`, `start_time`, `end_time`) VALUES
(1, 1, 'Micro-onde', 1, '2023-09-24 15:43:34', '2023-10-05 14:06:37', NULL, NULL),
(2, 2, 'Television', 1, '2023-09-24 15:43:34', '2023-10-05 14:06:36', NULL, NULL),
(3, 3, 'Climatiseur', 1, '2023-09-24 15:43:34', '2023-10-02 19:09:15', NULL, NULL),
(4, 4, 'Ventilateur', 1, '2023-09-24 15:43:34', '2023-10-02 19:09:59', NULL, NULL),
(5, 5, 'Imprimante', 1, '2023-09-24 15:43:34', '2023-10-02 19:17:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2023_08_26_112159_create_equipments_table', 1),
(18, '2023_08_26_112223_create_consommation_table', 1),
(19, '2023_08_26_112234_create_commande_table', 1),
(20, '2023_08_26_112406_create_users_table', 1),
(21, '2023_09_23_171316_create_schedules_table', 2),
(22, '2023_10_05_141132_add_start_time_and_end_time_to_equipments', 3);

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `equipment_id` bigint(20) UNSIGNED NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `command_sent` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) NOT NULL,
  `prenom` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zouri', 'Kevin Carlos', 'carloszouri@gmail.com', NULL, '$2y$10$RiV3EZYFW8xLtajytQ217OihEhqhjJTtz58Bwlf5ncpOGpgN9NjC6', NULL, '2023-09-22 20:28:57', '2023-09-22 20:28:57');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commandes_equipment_id_foreign` (`equipment_id`);

--
-- Index pour la table `consommations`
--
ALTER TABLE `consommations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_equipment_id_foreign` (`equipment_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `consommations`
--
ALTER TABLE `consommations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1150;

--
-- AUTO_INCREMENT pour la table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_equipment_id_foreign` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`);

--
-- Contraintes pour la table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_equipment_id_foreign` FOREIGN KEY (`equipment_id`) REFERENCES `equipments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
