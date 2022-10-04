-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2022 pada 03.47
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diskominfo_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Qui.', 'Odio placeat vel maiores et reprehenderit modi.', 'ilfgvghquqxpnkfxospyxk.jpg', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(2, 'Qui minima.', 'Adipisci sed in at tempora.', 'qhmvesyfmvwbvwomwahylu.jpg', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(3, 'Delectus.', 'Aut esse cum voluptatem qui quia.', 'zmnuzgkzpdwdptaamgxbiw.jpg', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(4, 'Voluptatem eos.', 'Non quos voluptates ut sequi facilis aut autem omnis et.', 'xjmjjlrpptqbpovukdwhtn.jpg', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(5, 'Quam.', 'Veniam qui aut est officiis vel facere iusto itaque.', 'nvrutmeoxgptnxjkegrhmt.jpg', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(6, 'Sunt.', 'Voluptas nobis est ut.', 'lxdvzhqkprkuxmrmmurknz.jpg', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(7, 'Provident.', 'Modi laboriosam nemo est error aut.', 'yioqsoaigjgiryvqqdruxr.jpg', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(8, 'Quis similique.', 'Quo ut explicabo repudiandae et.', 'fftlwnqnbmqsvkyfpugasm.jpg', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(9, 'Voluptates.', 'Odit voluptatibus maiores minima.', 'htbbmvcjwuwzcndtgxfjve.jpg', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(10, 'Enim provident.', 'Consequuntur possimus omnis voluptas beatae velit est.', 'iicjoudiffxhxsphcvzbqk.jpg', '2022-09-08 20:56:29', '2022-09-08 20:56:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `documents`
--

INSERT INTO `documents` (`id`, `name`, `source`, `create_date`, `created_at`, `updated_at`) VALUES
(1, 'doloribus', 'kgjmpfaejformykrojypms.pdf', '2022-04-02 20:37:04', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(2, 'voluptatum illum unde', 'cmvveedcpwfifasuwcsshr.pdf', '2022-03-12 09:05:05', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(3, 'aliquam repellendus', 'ochdccwaocxdxfoledpnmi.pdf', '2022-07-08 18:13:15', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(4, 'sunt quis', 'cpfyrxmoxxnetqvxekofvi.pdf', '2022-09-02 18:35:14', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(5, 'corrupti', 'soerlpbhifjxwgmncvcjpn.pdf', '2022-01-23 16:36:21', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(6, 'test 1', 'document-src/test-1.pdf', '2022-09-25 06:02:14', '2022-09-24 23:02:14', '2022-09-24 23:02:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('image','video') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `body`, `source`, `type`, `created_at`, `updated_at`) VALUES
(1, 'ut', 'Ullam esse perferendis distinctio fugiat. Et et voluptatem et ea. Nulla iste et quia assumenda in qui vero. Accusamus dolor quasi et est sed. Explicabo voluptas at vel quasi facilis aspernatur alias. Molestiae iusto necessitatibus molestiae.', 'jjzfuzcubwypmuxeelofcr.jpg', 'image', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(2, 'est', 'Debitis beatae et dolorem velit culpa sit. Omnis molestiae voluptatibus possimus optio non et molestiae. Dicta et quia ullam. Ducimus delectus mollitia quaerat maiores dicta quis dolorum. Officiis voluptatem porro tenetur minima cumque. Odio blanditiis ut praesentium quibusdam velit rerum sed et. Et laudantium esse nulla et.', 'qjyjlbgndjqlkemgpizqti.jpg', 'image', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(3, 'vel impedit et', 'Perspiciatis aperiam quae in nulla sequi quod distinctio. Quam qui dolorum quisquam atque quia. Nisi inventore unde sapiente et quis. Necessitatibus voluptatibus qui voluptas laudantium tempora.', 'suyngufizdmgpuminrrwjj.jpg', 'image', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(4, 'quos', 'Aliquid hic velit velit est sit blanditiis. Debitis impedit error molestias animi doloribus dolorum ratione. Hic nihil autem occaecati et sit veritatis qui.', 'nfpmklvrzevaxjdsckmzdk.jpg', 'video', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(5, 'et odio qui', 'Qui hic provident eligendi eveniet suscipit. Dignissimos commodi rem voluptatem vel qui necessitatibus iusto. Vitae sunt et odit voluptates quae. Dolores et sed omnis voluptatibus cupiditate quas dolorum. Dolorem provident deleniti saepe numquam est. Itaque enim in dolorum vero eos.', 'pnidifyjhwlvwooryyzwlq.jpg', 'image', '2022-09-08 20:56:29', '2022-09-08 20:56:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_07_14_034419_create_users_table', 1),
(11, '2022_07_14_034743_create_news_table', 1),
(12, '2022_07_14_035405_create_galleries_table', 1),
(13, '2022_07_14_035430_create_documents_table', 1),
(14, '2022_07_28_024135_create_services_table', 1),
(15, '2022_07_28_024638_create_links_table', 1),
(16, '2022_09_09_031300_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category` enum('goverment','technology','berita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `user_id`, `category`, `title`, `slug`, `image`, `body`, `publish_at`, `created_at`, `updated_at`) VALUES
(1, 3, 'technology', 'Corporis qui voluptatum aut.', 'voluptatibus-est-quia-adipisci-aspernatur-ut', NULL, '<p>Amet et repellendus occaecati reiciendis assumenda nulla. Voluptates voluptates eligendi aliquam explicabo saepe est est. Et est iste doloribus et quibusdam.</p><p>Quo velit omnis aspernatur neque accusamus et. Commodi rerum beatae eum quod qui placeat. Nemo architecto ipsam enim amet cum voluptas.</p><p>Quia vero labore sit laborum. Iure qui vero est qui dolores dolor. Ex earum nam libero. Et molestiae perspiciatis explicabo minus maiores accusamus alias.</p>', NULL, '2022-09-08 20:56:28', '2022-09-08 20:56:28'),
(2, 5, 'goverment', 'Quo in placeat.', 'quis-assumenda-quis-et-quo', NULL, '<p>Ab et rem quod ut ullam. Repudiandae porro corporis qui suscipit aperiam voluptate. Nulla facere reprehenderit numquam ipsam esse illo nulla.</p><p>Et veritatis voluptas et iusto dolor. In illum dolores perferendis quis sed delectus vel. Dolor dolores perspiciatis nam.</p>', NULL, '2022-09-08 20:56:28', '2022-09-08 20:56:28'),
(3, 5, 'technology', 'Dicta nemo aut dolorem impedit.', 'quisquam-ut-qui-minus-quae-quisquam', NULL, '<p>Aut dolor quis molestiae non cupiditate. Et qui est nisi esse vitae quaerat officia. Repudiandae nobis et occaecati. Tenetur quae rerum expedita porro sed. Voluptate dignissimos voluptatem ut corrupti possimus.</p><p>Quo vero mollitia iure. Quo totam quo atque sequi. Numquam hic inventore distinctio possimus error esse.</p>', NULL, '2022-09-08 20:56:28', '2022-09-08 20:56:28'),
(4, 3, 'berita', 'Qui sed veniam.', 'nihil-tempore-delectus-quo-ea-commodi-quia', NULL, '<p>Molestiae ut voluptatem ipsa. Deleniti animi suscipit sunt sit sapiente. Iste veritatis illum et amet eum.</p><p>Autem vero ea culpa. Qui exercitationem et dolorem quae repudiandae qui in nisi.</p><p>Odit perspiciatis earum consectetur aspernatur fugit. Et aut nulla deleniti beatae quam. Officia qui quibusdam aut. Vero in blanditiis commodi omnis est sunt et.</p>', NULL, '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(5, 3, 'berita', 'Est iusto molestiae numquam ex exercitationem.', 'praesentium-autem-ea-nostrum-vel', NULL, '<p>Aspernatur vel ducimus libero totam aliquid ea. Dolores mollitia pariatur delectus molestiae libero ipsam exercitationem. Atque exercitationem inventore harum nam velit. Sunt qui aut ipsam non quod consequuntur.</p><p>Sed iusto quo et est nesciunt. Fuga cupiditate necessitatibus doloremque incidunt. Est illum earum laboriosam ut nihil eum magnam quaerat.</p>', NULL, '2022-09-08 20:56:29', '2022-09-08 20:56:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `category_id`, `name`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, 6, 'harum fuga et', 'Eius a saepe quae quis nisi amet doloremque. Sunt quibusdam ut ratione. Nobis fugiat unde et culpa quibusdam qui maxime.\n\nConsequuntur illum et quas ullam quibusdam et odio corrupti. Consequatur officiis minima reprehenderit quidem. Ipsam tempora iste veniam rem architecto.\n\nLaborum suscipit enim quo. Excepturi eaque labore itaque minima consequatur cupiditate. Odio libero neque consequatur adipisci. Illum asperiores autem incidunt omnis.', '/sit/non', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(2, 6, 'fugit et', 'Ad et exercitationem qui quo consequatur porro qui. Et aut modi ab delectus aliquam.\n\nAut hic iste aut. Molestias voluptas officia dolorem deleniti. Nobis odit temporibus sunt perspiciatis nulla aut vel. Deserunt ex voluptas porro voluptatem quis.\n\nPraesentium dolor veniam alias laboriosam consequatur. Quo aut exercitationem ipsa eum. Ullam ut qui atque magni dolor incidunt.', '/sint/et/ad/quia/odio', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(3, 2, 'assumenda ipsum quae', 'Autem necessitatibus corrupti perspiciatis corporis voluptatum ea officia. Adipisci in consequatur numquam. Quod inventore magnam neque eum quia qui ea.\n\nAut eius rerum quod distinctio facere. Fugit qui ipsum non aliquid. Eum adipisci non est vitae. Consequatur rerum quo id non nemo.\n\nCorrupti itaque dignissimos ut ipsa eum qui. Sint cum vel tempore ex. Culpa a cum ratione quia perspiciatis accusantium velit.\n\nMolestias et ab quam atque exercitationem. Sed qui rerum magnam reiciendis dolor similique minima et. Fugit at officia vitae est corporis.', '/autem/repudiandae', '2022-09-08 20:56:29', '2022-09-08 20:56:29'),
(4, 4, 'vitae', 'Nihil laborum non assumenda explicabo nisi non. Est quisquam aut ducimus earum sint saepe ad. Quibusdam deserunt ipsam totam atque sapiente molestias eum.\n\nDoloremque mollitia quos quam maiores. Odit eligendi architecto minus ducimus est quaerat. Pariatur expedita veritatis veniam recusandae. Sit cum quo possimus molestias voluptatibus velit tenetur.\n\nQui praesentium quasi laborum deleniti at. Consequatur cum a beatae beatae itaque cum quidem. Enim dignissimos qui pariatur est unde.', '/odio/ut/quia/sunt/cupiditate', '2022-09-08 20:56:30', '2022-09-08 20:56:30'),
(5, 6, 'ipsa rerum dolor', 'Impedit quia dolores dignissimos hic dolor. Vero aut dolor eos molestias ut. Id dicta ipsum autem quia.\n\nRerum ut ipsa laborum nobis. Nihil harum qui rem dolores. Eos praesentium perferendis debitis omnis. Recusandae ut iusto distinctio rerum voluptatum sit omnis.\n\nDolores voluptate ut tempore esse. Est eum reprehenderit sit accusantium eveniet. Tempore architecto sint et architecto eveniet. Praesentium voluptatum a earum quod velit id dolore.\n\nPariatur beatae vitae voluptas officia ipsam culpa dolorem. Recusandae aut aut est dolores doloremque eius ut. Consequatur delectus in rerum beatae.', '/dolores/id/molestiae', '2022-09-08 20:56:30', '2022-09-08 20:56:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'eyulianti', 'Yance Astuti', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-09-08 20:56:28', '2022-09-08 20:56:28'),
(2, 'maryani', 'Umi Hassanah', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-09-08 20:56:28', '2022-09-08 20:56:28'),
(3, 'ami.ardianto', 'Narji Permadi', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-09-08 20:56:28', '2022-09-08 20:56:28'),
(4, 'salahudin.hardi', 'Eka Zahra Mandasari M.Ak', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-09-08 20:56:28', '2022-09-08 20:56:28'),
(5, 'shabibi', 'Gadang Setiawan', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-09-08 20:56:28', '2022-09-08 20:56:28'),
(6, 'zidan-p', 'zidan putra', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
