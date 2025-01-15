-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/01/2025 às 21:24
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `status` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sunt', 'Dolore quam est et. Molestiae pariatur quo voluptas ex quae qui aut. Sit nulla facilis ipsa fugiat facilis consectetur. Quia sed aliquam eos eos sed eligendi sunt.', 1.00, '2024-10-29 22:02:49', '2024-10-29 22:02:49'),
(2, 'qui', 'Quis placeat consequatur vel numquam quia. Quae ipsa ab pariatur cum occaecati est quibusdam. Voluptates ut neque tempore et id et.', 1.00, '2024-10-29 22:02:49', '2024-10-29 22:02:49'),
(3, 'amet', 'Quis et vero dolore repudiandae et esse praesentium velit. Voluptatem qui ad occaecati sed molestiae quia. Ut minus minus autem minima nihil. Ratione qui omnis omnis saepe qui repellendus.', 1.00, '2024-10-29 22:02:49', '2024-10-29 22:02:49'),
(4, 'minus', 'Non qui molestiae cum id consequatur qui in. Error aut quia id voluptatem et numquam et.', 1.00, '2024-10-29 22:02:49', '2024-10-29 22:02:49'),
(5, 'libero', 'Incidunt aut dolorum quibusdam nesciunt. Voluptas et totam qui quo optio non. Natus ipsum fugiat quis illum mollitia unde. Quis tenetur alias voluptates.', 1.00, '2024-10-29 22:02:49', '2024-10-29 22:02:49');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `wpp` varchar(255) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_22_132600_create_categorias_table', 1),
(6, '2024_10_23_190935_create_produtos_table', 1),
(7, '2024_10_25_190452_contatos', 1),
(8, '2024_10_25_190517_regras', 1);

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
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `preco` double(8,2) NOT NULL,
  `desconto` double(8,2) NOT NULL,
  `status` decimal(8,2) NOT NULL,
  `url` text NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `desc`, `preco`, `desconto`, `status`, `url`, `id_user`, `id_categoria`, `created_at`, `updated_at`) VALUES
(1, 'at', 'Iste unde repellat id delectus impedit vitae illum voluptatem. Ipsa minima dolorum et consequuntur. Et ipsum possimus nam occaecati quibusdam tempore. Natus in dolores aperiam voluptatibus provident quia.', 15.00, 2.00, 69.00, 'https://via.placeholder.com/400x400.png/00dd00?text=rerum', 1, 3, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(2, 'rerum', 'Alias aut delectus recusandae fugiat eaque voluptatem maiores. Velit est quasi recusandae ea consequatur rerum totam provident. Nihil veritatis dolorem doloribus vero nihil et vitae.', 5.00, 5.00, 32.00, 'https://via.placeholder.com/400x400.png/006699?text=quo', 1, 2, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(3, 'rerum', 'Qui temporibus qui a quibusdam veniam perspiciatis voluptatibus. Voluptatibus vitae dolorem possimus et. Et beatae facere molestiae consectetur officia molestiae. Animi nulla mollitia eum dolorem fugiat quia quibusdam voluptatem.', 59.00, 60.00, 56.00, 'https://via.placeholder.com/400x400.png/005544?text=aspernatur', 1, 3, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(4, 'ea', 'Repudiandae et aut vel id. Quia ut at in veniam enim voluptatem corporis. Doloremque ratione omnis repellendus et molestias.', 29.00, 11.00, 74.00, 'https://via.placeholder.com/400x400.png/003322?text=excepturi', 1, 2, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(5, 'nemo', 'Non atque ipsam qui consequuntur maiores ut. Sit voluptas fugit corporis eos at minima laudantium.', 50.00, 8.00, 82.00, 'https://via.placeholder.com/400x400.png/009988?text=non', 1, 4, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(6, 'sunt', 'Odit tempore eaque fuga nobis cum amet sint assumenda. Tempora magnam molestias dolores quis est repellendus. Nobis veniam voluptatum ullam quisquam quia et qui.', 82.00, 35.00, 75.00, 'https://via.placeholder.com/400x400.png/003300?text=est', 1, 4, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(7, 'assumenda', 'Qui odio ab impedit ex vel. Mollitia quod mollitia quos autem soluta. Placeat aspernatur iste sunt dolor ut consequuntur.', 0.00, 0.00, 95.00, 'https://via.placeholder.com/400x400.png/007711?text=ipsa', 1, 3, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(8, 'voluptas', 'Incidunt tempora eos qui amet. Neque laudantium molestiae ut minima ea eligendi. Deserunt saepe consequuntur corrupti dolores quia. Doloribus totam ratione recusandae occaecati.', 99.00, 13.00, 76.00, 'https://via.placeholder.com/400x400.png/00ff99?text=sunt', 1, 2, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(9, 'rem', 'Quos rem cumque voluptatum. Et nesciunt tenetur pariatur quo est ut sint. Ratione sit labore consequatur.', 87.00, 57.00, 12.00, 'https://via.placeholder.com/400x400.png/007733?text=ea', 1, 1, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(10, 'vero', 'Totam voluptatem facilis sunt adipisci recusandae tenetur architecto error. Itaque nesciunt voluptatem corporis omnis ipsam consequatur magnam. Quo eum autem non vel accusamus sed. Quasi distinctio et ea quibusdam.', 91.00, 76.00, 47.00, 'https://via.placeholder.com/400x400.png/00aa11?text=et', 1, 1, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(11, 'voluptate', 'Eligendi earum velit quia in odio distinctio est. Sed cum vel laudantium tenetur eum aperiam unde aperiam. Praesentium porro sint sit incidunt sunt harum velit porro.', 9.00, 75.00, 59.00, 'https://via.placeholder.com/400x400.png/0099aa?text=ex', 1, 3, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(12, 'et', 'Aut sit voluptas fuga distinctio quasi. Est odit natus sunt laudantium dolores.', 22.00, 15.00, 54.00, 'https://via.placeholder.com/400x400.png/004422?text=animi', 1, 2, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(13, 'incidunt', 'Animi molestiae non totam eaque. Eaque aut id et. Ut aut ab nihil et quos. Aut autem temporibus et ut quidem odit.', 46.00, 3.00, 38.00, 'https://via.placeholder.com/400x400.png/00ffcc?text=provident', 1, 5, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(14, 'velit', 'Iste ipsa repellat at accusantium nobis tempore harum. Ullam impedit dolorum veniam ut. Deleniti magni ducimus nihil est ut ut minima. Sequi cumque optio recusandae porro ab voluptatem repellat aliquid.', 55.00, 3.00, 65.00, 'https://via.placeholder.com/400x400.png/00dd11?text=autem', 1, 2, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(15, 'est', 'Qui in est quas debitis nostrum maiores. Labore totam occaecati dolorum quibusdam.', 66.00, 17.00, 2.00, 'https://via.placeholder.com/400x400.png/00dd44?text=quia', 1, 3, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(16, 'doloribus', 'Cupiditate blanditiis adipisci et veniam suscipit. Autem maiores illo maiores. Eos amet quaerat ut est.', 52.00, 28.00, 8.00, 'https://via.placeholder.com/400x400.png/00eeee?text=rerum', 1, 4, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(17, 'expedita', 'Est ut nihil fugiat aliquid dolorem. Est adipisci provident officia sunt.', 80.00, 69.00, 17.00, 'https://via.placeholder.com/400x400.png/000011?text=alias', 1, 2, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(18, 'quae', 'Consequatur ut est ducimus excepturi et laborum provident. Consequatur ea necessitatibus itaque non. Quia doloremque quo alias sint in.', 95.00, 35.00, 10.00, 'https://via.placeholder.com/400x400.png/00ff44?text=fuga', 1, 4, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(19, 'autem', 'Excepturi et rerum consequatur tenetur molestiae quo. Inventore sit repellat ratione dolores. Sed quasi atque corporis quia quos qui reiciendis ipsum. Ab cumque ex molestiae maiores deleniti recusandae quisquam. Animi voluptas nisi facere facere minima eos.', 55.00, 40.00, 6.00, 'https://via.placeholder.com/400x400.png/002277?text=ex', 1, 3, '2024-10-29 22:03:01', '2024-10-29 22:03:01'),
(20, 'suscipit', 'Cupiditate dolorum molestiae autem est eius culpa sunt. Iusto magnam veniam nobis omnis voluptatibus rem. Dignissimos quia dolores ut eligendi consectetur consequatur minima ab.', 7.00, 59.00, 62.00, 'https://via.placeholder.com/400x400.png/008844?text=iste', 1, 1, '2024-10-29 22:03:01', '2024-10-29 22:03:01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `regras`
--

CREATE TABLE `regras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permissoes` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `regra_user`
--

CREATE TABLE `regra_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_regra` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mauricio', 'mauricio@mauricio.com', '2024-10-29 21:53:59', '$2y$10$jF5EMlcCTIUC18Lb8EyXEuKbEpkU88Nra1d/hemvCmQiA8RXtUe6u', NULL, '2024-10-29 21:53:59', '2024-10-29 21:53:59');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contatos_id_user_foreign` (`id_user`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produtos_id_user_foreign` (`id_user`),
  ADD KEY `produtos_id_categoria_foreign` (`id_categoria`);

--
-- Índices de tabela `regras`
--
ALTER TABLE `regras`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `regra_user`
--
ALTER TABLE `regra_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regra_user_id_user_foreign` (`id_user`),
  ADD KEY `regra_user_id_regra_foreign` (`id_regra`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `regras`
--
ALTER TABLE `regras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `regra_user`
--
ALTER TABLE `regra_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `contatos_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produtos_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `regra_user`
--
ALTER TABLE `regra_user`
  ADD CONSTRAINT `regra_user_id_regra_foreign` FOREIGN KEY (`id_regra`) REFERENCES `regras` (`id`),
  ADD CONSTRAINT `regra_user_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
