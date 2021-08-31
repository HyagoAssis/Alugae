-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Ago-2021 às 19:22
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `alugae`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Para Casa', '2021-08-31 19:54:00', '2021-08-31 19:54:00'),
(2, 'Acessórios da Moda', '2021-08-31 19:54:27', '2021-08-31 19:54:27'),
(3, 'Esportes', '2021-08-31 19:54:38', '2021-08-31 19:54:38'),
(4, 'Livros', '2021-08-31 19:54:52', '2021-08-31 19:54:52'),
(5, 'Eletrônicos', '2021-08-31 19:55:12', '2021-08-31 19:55:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_17_193209_create_categorias_table', 1),
(5, '2021_07_17_195304_create_produtos_table', 1),
(6, '2021_07_21_210212_produtos_user', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double NOT NULL,
  `status` tinyint(1) NOT NULL,
  `imagem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `categoria_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `status`, `imagem`, `user_id`, `categoria_id`, `created_at`, `updated_at`) VALUES
(1, 'Bola de Futebol', 'Bola de Futebol de Campo Nike CSF Strike SP21', 5, 0, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSHD_6trW5pYgBmkgawngwmrf4IceYXST3JDg8t4KOsTGul9VCdYv8hZC_sMXvQB9hHuX7mW_IFc0A&usqp=CAc', 2, 3, '2021-08-31 20:01:15', '2021-08-31 20:04:14'),
(2, 'Vestido de noiva florido', 'Lindo vestido de noiva.', 1500, 1, 'https://ae01.alicdn.com/kf/H336179fb822a4e52a28d36781f3d2b75Q/Sevintage-bola-vestido-feito-m-o-3d-flores-vestidos-de-noiva-boho-vestidos-de-casamento-querida.jpg_Q90.jpg_.webp', 3, 2, '2021-08-31 20:07:44', '2021-08-31 20:07:45'),
(3, 'Câmera Sony A6600', 'Câmera profissional. Se estragar tem que pagar 15000', 400, 0, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCFMQ_oWgdK2A127iRHDI7jrVrm_dOPhV5lBsfHkJ0BZoEN70hNzi6Q9ZEdsk&usqp=CAc', 2, 5, '2021-08-31 20:11:21', '2021-08-31 20:11:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_user`
--

CREATE TABLE `produtos_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produto_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nota` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00000000000',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00000000000',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.jpg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adm` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `cpf`, `phone`, `image`, `email_verified_at`, `password`, `adm`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com.br', '00000000', '00000000000', 'user.jpg', NULL, '$2y$10$q.Kuf1b3Fq2yre6SI90/zu7KbqKfUuMVkz.txDYjqiAYFt92/BJNy', 1, NULL, '2021-08-31 19:46:04', '2021-08-31 19:46:04'),
(2, 'Fabio Junior', 'fabiojunior@gmail.com', '44444444444', '32977777777', 'user.jpg', NULL, '$2y$10$xyWvpJf2Teh3jcEiOiFkEu9uj7TqjAzJSMsvX.oXLp/pIIiVLQYh.', 0, NULL, '2021-08-31 19:48:28', '2021-08-31 20:16:49'),
(3, 'Ana Maria Braga', 'anamaria@gmail.com', '33333333333', '00000000000', 'user.jpg', NULL, '$2y$10$lbgFZHAVMKUwSTsQuyoUoOSDidvoNmmnV5962MLYJtKX1lB0JmqVG', 0, NULL, '2021-08-31 20:05:21', '2021-08-31 20:05:21');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categorias_nome_unique` (`nome`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produtos_user_id_foreign` (`user_id`),
  ADD KEY `produtos_categoria_id_foreign` (`categoria_id`);

--
-- Índices para tabela `produtos_user`
--
ALTER TABLE `produtos_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produtos_user_produto_id_foreign` (`produto_id`),
  ADD KEY `produtos_user_user_id_foreign` (`user_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos_user`
--
ALTER TABLE `produtos_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `produtos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `produtos_user`
--
ALTER TABLE `produtos_user`
  ADD CONSTRAINT `produtos_user_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `produtos_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
