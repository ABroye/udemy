-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 15 fév. 2023 à 13:46
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `raspdev`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_shortdescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_longdescription` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `article_title`, `article_shortdescription`, `article_longdescription`, `article_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apache', 'Apache est un logiciel serveur, qui permet d\'exécuter des requêtes HTTP pour les sites web.', '<p>Apache est un logiciel serveur, qui permet d\'ex&eacute;cuter des requ&ecirc;tes HTTP pour les sites web.</p>', 'logo-apache_1676401723.png', 1, '2023-02-14 19:07:27', '2023-02-14 19:17:31'),
(2, 'PHP', 'PHP, est un langage de script à usage général, particulièrement adapté au développement pour le web.', '<p>PHP, est un langage de script &agrave; usage g&eacute;n&eacute;ral, particuli&egrave;rement adapt&eacute; au d&eacute;veloppement pour le web.</p>', 'logo-php_1676402072.png', 1, '2023-02-14 19:09:09', '2023-02-14 19:17:32'),
(3, 'MariaDB', 'MariaDB server, est l\'un des serveurs de base de données les plus populaires au monde pour le web.', '<p>MariaDB server, est l\'un des serveurs de base de donn&eacute;es les plus populaires au monde pour le web.</p>', 'logo-mariadb_1676402083.png', 1, '2023-02-14 19:09:36', '2023-02-14 19:17:32'),
(4, 'phpMyAdmin', 'phpMyAdmin, est un logiciel gratuit écrit en PHP, destiné à gérer les bases de données de MySQL.', '<p>phpMyAdmin, est un logiciel gratuit &eacute;crit en PHP, destin&eacute; &agrave; g&eacute;rer les bases de donn&eacute;es de MySQL.</p>', 'logo-phpmyadmin_1676402095.png', 1, '2023-02-14 19:10:16', '2023-02-14 19:17:33'),
(5, 'Raspberry Pi OS', 'Il s\'agit d\'une modification de Debian spécifiquement adaptée pour les systèmes à puce de type ARM.', '<p>Il s\'agit d\'une modification de Debian sp&eacute;cifiquement adapt&eacute;e pour les syst&egrave;mes &agrave; puce de type ARM.</p>', 'logo-debian_1676402108.png', 1, '2023-02-14 19:10:47', '2023-02-14 19:17:34'),
(6, 'ProFTPD', 'ProFTPD est un serveur FTP sécurisé et configurable, particulièrement adapté pour le serveur Apache.', '<p>ProFTPD est un serveur FTP s&eacute;curis&eacute; et configurable, particuli&egrave;rement adapt&eacute; pour le serveur Apache.</p>', 'logo-proftpd_1676402119.png', 1, '2023-02-14 19:11:36', '2023-02-14 19:17:36'),
(7, 'RealVNC', 'RealVNC®, est un logiciel d\'accès à distance, rapide et ultra-sécurisé qui permet le partage d\'écran.', '<p>RealVNC&reg;, est un logiciel d\'acc&egrave;s &agrave; distance, rapide et ultra-s&eacute;curis&eacute; qui permet le partage d\'&eacute;cran.</p>', 'logo-realvnc_1676402129.png', 1, '2023-02-14 19:12:42', '2023-02-14 19:17:37'),
(8, 'Visual Studio Code', 'Visual Studio Code, est un éditeur de code pour créer et débogguer des applications Web et cloud.', '<p>Visual Studio Code, est un &eacute;diteur de code pour cr&eacute;er et d&eacute;bogguer des applications Web et cloud.</p>', 'logo-vsc_1676402141.png', 1, '2023-02-14 19:13:27', '2023-02-14 19:17:39');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Accueil', '2023-02-14 14:49:14', '2023-02-14 14:49:14');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_14_152203_create_categories_table', 1),
(6, '2023_02_14_152232_create_pages_table', 1),
(7, '2023_02_14_152250_create_sliders_table', 1),
(8, '2023_02_14_152310_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_shortdescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_longdescription` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'L\'association RaspDev c\'est :', 'L\'opportunité de devenir l\'acteur de son propre hébergement Web.', 'slide-1_1676389854.png', 1, '2023-02-14 14:50:54', '2023-02-14 19:18:02'),
(2, 'Hébergement Web Participatif', 'C\'est parce que chacun y met du siens, que nous y arriverons tous ensemble.', 'slide-2_1676389888.png', 1, '2023-02-14 14:51:28', '2023-02-14 19:18:03'),
(3, 'Hébergement Web Solidaire', 'La solidarité de nos membres fait de nos services les plus efficaces du marché.', 'slide-3_1676389913.png', 1, '2023-02-14 14:51:53', '2023-02-14 19:18:04'),
(4, 'Hébergement Web Économique', 'Franchement, ce n\'est pas un Raspberry Pi qui va nous ruiner.', 'slide-4_1676389936.png', 1, '2023-02-14 14:52:16', '2023-02-14 14:52:16'),
(5, 'Hébergement Web Écologique', 'Avec une faible consommation électrique nos infrastructures sont proches du 0 émission de Co2.', 'slide-5_1676389958.png', 1, '2023-02-14 14:52:38', '2023-02-14 14:52:38');

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
