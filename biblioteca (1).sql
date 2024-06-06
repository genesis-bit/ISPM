-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/03/2024 às 00:26
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `cursos`
--

INSERT INTO `cursos` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Engenharia Informática', '2024-03-20 19:14:02', '2024-03-20 19:14:02'),
(2, 'Engenharia de Telecomunicações', '2024-03-20 20:52:54', '2024-03-20 20:52:54');

-- --------------------------------------------------------

--
-- Estrutura para tabela `devolucaos`
--

CREATE TABLE `devolucaos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bibliotecario_id` bigint(20) UNSIGNED NOT NULL,
  `data` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `devolucaos`
--

INSERT INTO `devolucaos` (`id`, `bibliotecario_id`, `data`, `created_at`, `updated_at`) VALUES
(1, 2, '2024-03-15 00:00:00', '2024-03-24 23:15:53', '2024-03-24 23:15:53'),
(2, 2, '2024-03-29 00:00:00', '2024-03-26 21:54:54', '2024-03-26 21:54:54'),
(3, 2, '2024-03-24 00:00:00', '2024-03-26 21:23:52', '2024-03-26 21:23:52');

-- --------------------------------------------------------

--
-- Estrutura para tabela `docentes`
--

CREATE TABLE `docentes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(60) NOT NULL,
  `grau_academico_id` bigint(20) UNSIGNED NOT NULL,
  `especialidade_id` bigint(20) UNSIGNED NOT NULL,
  `numero_professor` varchar(30) NOT NULL,
  `numero_bilhete` varchar(30) NOT NULL,
  `contacto` varchar(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `docentes`
--

INSERT INTO `docentes` (`id`, `nome`, `grau_academico_id`, `especialidade_id`, `numero_professor`, `numero_bilhete`, `contacto`, `created_at`, `updated_at`) VALUES
(8, 'Luis Kalueio', 1, 1, 'LA123', '00232309LA012', '921458741', '2024-03-25 22:05:02', '2024-03-25 22:05:02');

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `livro_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_emprestimo_id` bigint(20) UNSIGNED NOT NULL,
  `bibliotecario_id` bigint(20) UNSIGNED NOT NULL,
  `data_emprestimo` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `livro_id`, `user_id`, `tipo_emprestimo_id`, `bibliotecario_id`, `data_emprestimo`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, 2, '2024-03-01 00:00:00', '2024-03-23 09:28:07', '2024-03-23 09:28:07'),
(2, 2, 5, 1, 2, '2024-03-29 00:00:00', '2024-03-24 23:33:01', '2024-03-24 23:33:01'),
(3, 2, 5, 2, 2, '2024-03-25 00:00:00', '2024-03-25 19:32:53', '2024-03-25 19:32:53'),
(4, 1, 8, 2, 2, '2024-03-28 00:00:00', '2024-03-26 21:54:12', '2024-03-26 21:54:12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `especialidades`
--

CREATE TABLE `especialidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `especialidades`
--

INSERT INTO `especialidades` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Administrador de BD', '2024-03-25 21:41:51', '2024-03-25 21:41:51');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estudantes`
--

CREATE TABLE `estudantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(60) NOT NULL,
  `curso_id` bigint(20) UNSIGNED NOT NULL,
  `numero_estudante` int(11) NOT NULL,
  `numero_bilhete` varchar(30) NOT NULL,
  `contacto` varchar(25) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `estudantes`
--

INSERT INTO `estudantes` (`id`, `nome`, `curso_id`, `numero_estudante`, `numero_bilhete`, `contacto`, `created_at`, `updated_at`) VALUES
(3, 'Izequiel Pedro', 1, 1234, '00123654LA012', '923235455', '2024-03-20 20:44:33', '2024-03-20 20:44:33'),
(5, 'Luzia Jose Lobo', 1, 10123, '00123222LA012', '911235455', '2024-03-24 23:32:36', '2024-03-24 23:32:36');

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
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
-- Estrutura para tabela `genero_livros`
--

CREATE TABLE `genero_livros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `genero_livros`
--

INSERT INTO `genero_livros` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Economia', '2024-03-18 23:37:49', '2024-03-18 23:37:49'),
(2, 'Fisica', '2024-03-18 23:47:56', '2024-03-18 23:47:56'),
(3, 'Matemática', '2024-03-18 23:55:34', '2024-03-18 23:55:34'),
(4, 'Biologia', '2024-03-18 23:57:27', '2024-03-18 23:57:27'),
(5, 'Programador', '2024-03-25 21:30:58', '2024-03-25 21:30:58');

-- --------------------------------------------------------

--
-- Estrutura para tabela `grau_academicos`
--

CREATE TABLE `grau_academicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `grau_academicos`
--

INSERT INTO `grau_academicos` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Licenciado', NULL, NULL),
(2, 'Mestrado', NULL, NULL),
(3, 'Doutoramento', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `autor` varchar(80) NOT NULL,
  `editora` varchar(60) NOT NULL,
  `ano_edicao` year(4) NOT NULL,
  `genero_livro_id` bigint(20) UNSIGNED NOT NULL,
  `observacao` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `editora`, `ano_edicao`, `genero_livro_id`, `observacao`, `created_at`, `updated_at`) VALUES
(1, 'Livro Qualquer', 'Felix João', 'Ls Republicano', '2023', 1, 'Otimo Livro', '2024-03-20 19:34:02', '2024-03-20 19:34:02'),
(2, 'Ramalho I', 'Fisico Americano', 'American Star', '2018', 2, 'Ganhou medalha', '2024-03-23 10:02:50', '2024-03-23 10:02:50'),
(3, 'Economizar', 'Isaac Pedro', 'Cacuaco', '2014', 1, 'Otimo Livro', '2024-03-26 21:34:40', '2024-03-26 21:34:40');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_03_16_074325_create_tipo_users_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2024_03_16_085921_create_cursos_table', 1),
(8, '2024_03_16_090140_create_grau_academicos_table', 1),
(9, '2024_03_16_090258_create_especialidades_table', 1),
(10, '2024_03_16_090726_create_estudantes_table', 1),
(11, '2024_03_16_091840_create_docentes_table', 1),
(12, '2024_03_16_093059_create_genero_livros_table', 1),
(13, '2024_03_16_093302_create_livros_table', 1),
(14, '2024_03_16_101938_create_prateleiras_table', 1),
(15, '2024_03_16_102055_create_prateleira_livros_table', 1),
(16, '2024_03_16_102633_create_tipo_emprestimos_table', 1),
(17, '2024_03_16_102737_create_emprestimos_table', 1),
(18, '2024_03_23_122656_create_devolucaos_table', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `prateleiras`
--

CREATE TABLE `prateleiras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `prateleiras`
--

INSERT INTO `prateleiras` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Administração', '2024-03-20 18:49:38', '2024-03-20 18:49:38'),
(2, 'Matemática', '2024-03-21 04:27:37', '2024-03-21 04:27:37'),
(3, 'Fisica', '2024-03-24 23:29:42', '2024-03-24 23:29:42');

-- --------------------------------------------------------

--
-- Estrutura para tabela `prateleira_livros`
--

CREATE TABLE `prateleira_livros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `livro_id` bigint(20) UNSIGNED NOT NULL,
  `prateleira_id` bigint(20) UNSIGNED NOT NULL,
  `posicao` varchar(255) NOT NULL,
  `quantidade_livro` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `prateleira_livros`
--

INSERT INTO `prateleira_livros` (`id`, `livro_id`, `prateleira_id`, `posicao`, `quantidade_livro`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '10', 4, '2024-03-21 04:47:28', '2024-03-21 04:47:28'),
(2, 2, 3, '11', 4, '2024-03-24 23:31:19', '2024-03-24 23:31:19');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_emprestimos`
--

CREATE TABLE `tipo_emprestimos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tipo_emprestimos`
--

INSERT INTO `tipo_emprestimos` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Solicitacão', NULL, NULL),
(2, 'Emprestimo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_users`
--

CREATE TABLE `tipo_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `tipo_users`
--

INSERT INTO `tipo_users` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', NULL, NULL),
(2, 'Bibliotecario', NULL, NULL),
(3, 'Docente', NULL, NULL),
(4, 'Estudante', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tipo_user_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tipo_user_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Administrador', 'admin@email.com', 1, NULL, '$2y$12$SOjZfIrvWf48gfgWpz4CkOyf2aTeCU6U02/Tub.iG0LGnrD6RsGVm', NULL, '2024-03-20 18:48:30', '2024-03-20 18:48:30'),
(3, 'Izequiel Pedro', 'izequiel@email.com', 4, NULL, '$2y$12$aneT1Adcj.J04WvA3JWTaurtvX3cA0aE.Mae6okf/8tzU.yxXpcGG', NULL, '2024-03-20 20:44:33', '2024-03-20 20:44:33'),
(4, 'Bibliotecario', 'bibliotecario@email.com', 2, NULL, '$2y$12$ywP2qyoLd3Ikqc3brGW2u.S9p.CZzfIWMFOWFfylIkUgViXWp3w66', NULL, '2024-03-21 18:12:08', '2024-03-21 18:12:08'),
(5, 'Luzia Jose Lobo', 'luzia@email.com', 4, NULL, '$2y$12$HEU50tKJ1nJ7APEbtO7Mo.5mFpPfXqG.uzpB359FwmwU9W3l9DzHa', NULL, '2024-03-24 23:32:36', '2024-03-24 23:32:36'),
(8, 'Luis Kalueio', 'luis@email.com', 3, NULL, '$2y$12$2GVNO30xBBO2OHrLUhZGbu82Q0d95VUCI7wDF/W0fjlFEKWgByxfe', NULL, '2024-03-25 22:05:02', '2024-03-25 22:05:02');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `devolucaos`
--
ALTER TABLE `devolucaos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `devolucaos_bibliotecario_id_foreign` (`bibliotecario_id`);

--
-- Índices de tabela `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `docentes_numero_professor_unique` (`numero_professor`),
  ADD UNIQUE KEY `docentes_numero_bilhete_unique` (`numero_bilhete`),
  ADD KEY `docentes_grau_academico_id_foreign` (`grau_academico_id`),
  ADD KEY `docentes_especialidade_id_foreign` (`especialidade_id`);

--
-- Índices de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emprestimos_livro_id_foreign` (`livro_id`),
  ADD KEY `emprestimos_user_id_foreign` (`user_id`),
  ADD KEY `emprestimos_bibliotecario_id_foreign` (`bibliotecario_id`),
  ADD KEY `emprestimos_tipo_emprestimo_id_foreign` (`tipo_emprestimo_id`);

--
-- Índices de tabela `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `estudantes`
--
ALTER TABLE `estudantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `estudantes_numero_estudante_unique` (`numero_estudante`),
  ADD UNIQUE KEY `estudantes_numero_bilhete_unique` (`numero_bilhete`),
  ADD KEY `estudantes_curso_id_foreign` (`curso_id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `genero_livros`
--
ALTER TABLE `genero_livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `grau_academicos`
--
ALTER TABLE `grau_academicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livros_genero_livro_id_foreign` (`genero_livro_id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `prateleiras`
--
ALTER TABLE `prateleiras`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `prateleira_livros`
--
ALTER TABLE `prateleira_livros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prateleira_livros_livro_id_foreign` (`livro_id`),
  ADD KEY `prateleira_livros_prateleira_id_foreign` (`prateleira_id`);

--
-- Índices de tabela `tipo_emprestimos`
--
ALTER TABLE `tipo_emprestimos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipo_users`
--
ALTER TABLE `tipo_users`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_tipo_user_id_foreign` (`tipo_user_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `genero_livros`
--
ALTER TABLE `genero_livros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `grau_academicos`
--
ALTER TABLE `grau_academicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prateleiras`
--
ALTER TABLE `prateleiras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `prateleira_livros`
--
ALTER TABLE `prateleira_livros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tipo_emprestimos`
--
ALTER TABLE `tipo_emprestimos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tipo_users`
--
ALTER TABLE `tipo_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `devolucaos`
--
ALTER TABLE `devolucaos`
  ADD CONSTRAINT `devolucaos_bibliotecario_id_foreign` FOREIGN KEY (`bibliotecario_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `devolucaos_id_foreign` FOREIGN KEY (`id`) REFERENCES `emprestimos` (`id`);

--
-- Restrições para tabelas `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_especialidade_id_foreign` FOREIGN KEY (`especialidade_id`) REFERENCES `especialidades` (`id`),
  ADD CONSTRAINT `docentes_grau_academico_id_foreign` FOREIGN KEY (`grau_academico_id`) REFERENCES `grau_academicos` (`id`),
  ADD CONSTRAINT `docentes_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD CONSTRAINT `emprestimos_bibliotecario_id_foreign` FOREIGN KEY (`bibliotecario_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emprestimos_livro_id_foreign` FOREIGN KEY (`livro_id`) REFERENCES `livros` (`id`),
  ADD CONSTRAINT `emprestimos_tipo_emprestimo_id_foreign` FOREIGN KEY (`tipo_emprestimo_id`) REFERENCES `tipo_emprestimos` (`id`),
  ADD CONSTRAINT `emprestimos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `estudantes`
--
ALTER TABLE `estudantes`
  ADD CONSTRAINT `estudantes_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `estudantes_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `livros_genero_livro_id_foreign` FOREIGN KEY (`genero_livro_id`) REFERENCES `genero_livros` (`id`);

--
-- Restrições para tabelas `prateleira_livros`
--
ALTER TABLE `prateleira_livros`
  ADD CONSTRAINT `prateleira_livros_livro_id_foreign` FOREIGN KEY (`livro_id`) REFERENCES `livros` (`id`),
  ADD CONSTRAINT `prateleira_livros_prateleira_id_foreign` FOREIGN KEY (`prateleira_id`) REFERENCES `prateleiras` (`id`);

--
-- Restrições para tabelas `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_tipo_user_id_foreign` FOREIGN KEY (`tipo_user_id`) REFERENCES `tipo_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
