-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2022 pada 03.48
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
(1, 'tempora odit saepe', 'nnikxhmumoeyyycjvmpikv.pdf', '2022-01-19 10:07:05', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(2, 'natus', 'gulmxafuczyptrdltbwaal.pdf', '2022-04-01 19:05:15', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(3, 'delectus molestiae', 'eadqyurlpuwmbtpjdhpwgt.pdf', '2022-06-24 19:26:54', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(4, 'qui', 'natanqmybxjptdzwavxneo.pdf', '2022-03-20 14:03:07', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(5, 'cumque quia', 'dzkmleqnnpldfilsvbkpii.pdf', '2022-01-27 06:45:47', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(6, 'perferendis omnis vel (edited)', 'pfhnugqoxuresyijcgdijf.pdf', '2022-08-11 08:03:06', '2022-07-27 21:22:18', '2022-08-11 01:03:06'),
(8, 'totam', 'eiekfgvoununnomwdqjzpw.pdf', '2022-04-11 23:24:13', '2022-07-27 21:22:18', '2022-07-27 21:22:18'),
(9, 'neque exercitationem dolor', 'udkopgdzpkraroyrikgdxl.pdf', '2022-03-14 05:06:19', '2022-07-27 21:22:18', '2022-07-27 21:22:18'),
(10, 'consequatur', 'uujewphuyoortqmxsihuah.pdf', '2022-04-09 00:58:59', '2022-07-27 21:22:18', '2022-07-27 21:22:18'),
(36, 'pdf dummy 1 edited fix 2', 'document-src/pdf-dummy-1.pdf', '2022-08-10 06:46:27', '2022-08-09 20:09:48', '2022-08-09 23:46:27'),
(37, 'tes menggunakan class', 'document-src/tes-menggunakan-class.pdf', '2022-08-12 00:46:34', '2022-08-11 17:46:34', '2022-08-11 17:46:34');

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
(1, 'commodi omnis sunt sed', 'Dolore neque repudiandae eum unde. Laboriosam aliquam velit dolore est. In et aperiam consectetur dolores deleniti voluptatem iure.', 'hsypnsqoegubywglyxlhjo.jpg', 'image', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(3, 'veniam', 'In doloremque maxime quam eaque assumenda. Ipsa quas dolores ducimus ex suscipit. Omnis laboriosam in impedit deserunt cumque in cupiditate. Deserunt repudiandae voluptatibus sit suscipit provident iste. Porro adipisci consectetur qui quia ut. Quia et quam voluptatem iusto. Quidem magnam ut et odit quos.', 'hbdfugywhqkkobmuitqzge.jpg', 'image', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(4, 'facere', 'Maxime et facilis omnis quam explicabo et expedita. Culpa atque fuga facilis vel et. Dolorem est autem autem placeat aliquam quod consequuntur.', 'gwywartpamzvstfodpysgt.jpg', 'video', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(5, 'eius dolore id voluptatum', 'Saepe id aut est veritatis. Voluptates in magni eum quibusdam. Magni eum rerum odit nisi ea odio. Sint earum est deserunt animi odit et inventore. Necessitatibus porro sequi harum sequi repudiandae porro voluptatem.', 'umudtlwyqsfaykdmanzeip.jpg', 'image', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(7, 'deserunt officiis cumque natus', 'Error ipsam suscipit quia sit. Ut aut eveniet provident sunt nam. Sunt dicta rem beatae quibusdam. Similique dolores voluptatum et quia vel molestias aperiam magni.', 'zrwvnhcwvzjwadsaemoubm.jpg', 'video', '2022-07-27 21:22:18', '2022-07-27 21:22:18'),
(8, 'impedit', 'Facilis consectetur perferendis et aut id quam. Harum nihil explicabo laudantium voluptas nihil. Voluptatibus sed deserunt fuga est similique.', 'nrfgqulnztuzuobcckfbkb.jpg', 'image', '2022-07-27 21:22:18', '2022-07-27 21:22:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `links`
--

INSERT INTO `links` (`id`, `name`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'numquam dicta similique', 'Esse qui ut tempore fugit necessitatibus maiores laudantium. Officia et et soluta voluptas laborum molestias laboriosam. Voluptatem est amet occaecati dolore et nisi cupiditate. Perspiciatis iure enim ut nisi inventore. Saepe eum qui at corporis est nulla.\n\nVoluptatibus minima earum laborum ut eaque quos ex deserunt. Repellendus optio corporis repudiandae eum et. Quasi voluptatem officiis suscipit possimus quod. Libero doloribus sed vero minus eaque nihil praesentium.\n\nQuis delectus itaque quis aut impedit aliquam. Sapiente sunt minus consectetur tempore quisquam et quia. Est ea tempora quasi voluptatum voluptatem non voluptatem necessitatibus. Sed et dolorem aut adipisci deserunt.\n\nFacilis harum dolore natus fuga totam qui. Nulla voluptas facere quasi quae neque deserunt quidem. Et magnam voluptas quo repellendus soluta. Autem voluptates quo labore illum qui vel dignissimos sunt.', '/consequatur/esse', '2022-07-27 21:22:19', '2022-07-27 21:22:19'),
(2, 'et', 'Animi fugiat ut ut fugiat. Repudiandae quam odit voluptatum aut quidem reprehenderit. Officia quaerat temporibus ut odit non minus.\n\nRerum hic sint velit. Ut similique labore voluptatem nobis. Occaecati mollitia quia temporibus modi quia est.\n\nIpsa labore aperiam quo molestiae recusandae architecto. Est laborum officiis commodi ipsam temporibus. Quod inventore commodi pariatur explicabo. Et optio iste doloribus sunt.', '/repellendus/cum/quia', '2022-07-27 21:22:19', '2022-07-27 21:22:19'),
(3, 'est et quae', 'Velit magni in tempora minus nisi sint. Consequatur veniam labore eum. Debitis asperiores minus qui in rerum.\n\nOdio nobis deserunt pariatur et voluptatem animi. Dolorem illum nemo et. Perspiciatis enim et et veritatis numquam eveniet tempora. Quaerat pariatur enim aut soluta ut amet atque.\n\nVoluptatem corporis et quis voluptatem odit. Et enim est id nemo explicabo et similique. Eos aut deserunt nam sunt non temporibus. A nulla iusto omnis eos reiciendis. Rem quam ut voluptate sed ut quia voluptate.\n\nUt voluptatum quod eum tempore rerum enim. Vero officiis ad fugiat optio beatae rerum. Consequuntur dolorem distinctio iusto quibusdam aperiam nesciunt quo.', '/repellat/blanditiis', '2022-07-27 21:22:19', '2022-07-27 21:22:19'),
(4, 'nihil', 'Minima debitis mollitia tenetur nesciunt sit. Animi eius et quia dolore. Et officiis ducimus fugit optio vitae. Itaque vel inventore voluptatem iure natus.\n\nDolores explicabo voluptatem laboriosam vel sed eligendi. Repudiandae asperiores magnam dolor atque dolore fugit reiciendis et. Quibusdam rerum illum rerum ut quas et.\n\nQuia in porro ipsa est quia necessitatibus eum. Repellendus non qui velit molestias totam cum omnis sint.', '/explicabo/qui/dicta', '2022-07-27 21:22:19', '2022-07-27 21:22:19'),
(5, 'qui reiciendis', 'Enim nemo non quas natus excepturi error. Quae asperiores deserunt natus et sunt. Veniam nemo dolore eius officia odit qui ex voluptatem. Quia saepe dolor suscipit ea. Eius qui nisi voluptas.\n\nQuia ad repellat doloribus a. Quae sit ut cum eveniet nihil et laboriosam. Nulla nam quibusdam asperiores est maxime dolorum.\n\nPlaceat et tenetur nobis aperiam doloribus laudantium rem. Tempora minima qui tempora eligendi. Occaecati sunt consequatur ea voluptas quasi.\n\nSunt nihil doloremque aspernatur aperiam ut et minima. Voluptatem illo possimus nesciunt sunt. Saepe et ea est veniam qui ea. Deleniti delectus voluptas neque minus dolores.', '/nisi/iure/omnis', '2022-07-27 21:22:19', '2022-07-27 21:22:19');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_07_14_034419_create_users_table', 1),
(3, '2022_07_14_034743_create_news_table', 1),
(4, '2022_07_14_035405_create_galleries_table', 1),
(5, '2022_07_14_035430_create_documents_table', 1),
(6, '2022_07_28_024135_create_services_table', 1),
(7, '2022_07_28_024638_create_links_table', 1);

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
(1, 4, 'berita', 'Quis non ipsa nam veniam nisi velit impedit incidunt facilis.', 'iure-necessitatibus-ea-porro-quo-nulla-est-soluta', NULL, '<p>Quia sed voluptatem saepe corporis ut fugit. Facere tempore hic ab eaque nesciunt rerum. Tenetur repellat vel qui dolor voluptas id iste. Amet error voluptatem id dolores ut.</p><p>Eos cupiditate ut aut eius iure. Est ut ipsum distinctio aut aut nulla voluptas. Veritatis aliquam reiciendis nam. Et dolorem et reiciendis dicta.</p>', NULL, '2022-07-27 21:21:52', '2022-07-27 21:21:52'),
(2, 4, 'goverment', 'Repudiandae possimus sit dolor.', 'vitae-amet-tempore-et-doloribus-cum-temporibus-libero-magni', NULL, '<p>Laudantium harum et deleniti. Laborum vel ratione a. Est velit velit omnis occaecati facere quam.</p><p>Nam ea vero voluptatem sed sunt. Veritatis omnis totam est dolore sunt temporibus id dolor. Iste asperiores cumque nam id repudiandae molestiae iure. Id totam quia delectus similique.</p>', NULL, '2022-07-27 21:21:52', '2022-07-27 21:21:52'),
(3, 1, 'goverment', 'Sunt et vero accusantium occaecati voluptas.', 'ratione-ipsa-a-debitis', NULL, '<p>Ut est culpa laboriosam sequi exercitationem commodi non. Laborum illum sint molestiae exercitationem fugiat dolores esse. Asperiores cum voluptas nemo impedit ducimus maxime. Numquam quos eos quos soluta minima vel nemo eligendi. Et nam possimus id omnis accusantium ex quae.</p><p>Sit perspiciatis vero velit minus consequatur consequuntur. Tenetur rerum in sit atque vel et necessitatibus. Optio nulla sed consectetur aut reprehenderit minus. Quaerat enim dolores suscipit rerum earum ullam.</p><p>Et perferendis sed et ipsum. Asperiores quod totam tenetur occaecati ipsa possimus. Culpa non nisi quibusdam sint est voluptates. Rerum aut perspiciatis perspiciatis necessitatibus.</p>', NULL, '2022-07-27 21:21:52', '2022-07-27 21:21:52'),
(4, 4, 'berita', 'Repudiandae recusandae ullam impedit odio.', 'ut-occaecati-doloremque-quasi-rerum-asperiores-impedit-aperiam-sapiente', NULL, '<p>Iste minus quas corporis deserunt explicabo et accusamus. Optio qui nam non molestiae explicabo ut. Occaecati deserunt temporibus eveniet laborum et corporis tenetur id.</p>', NULL, '2022-07-27 21:21:52', '2022-07-27 21:21:52'),
(5, 5, 'goverment', 'Nesciunt expedita provident illo deleniti voluptatum molestiae.', 'rem-perferendis-deserunt-id', NULL, '<p>Dignissimos pariatur similique voluptatem rerum illo. Eligendi rerum molestiae alias rem voluptatem enim sit. Id aut magnam nemo.</p>', NULL, '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(6, 3, 'goverment', 'Qui officia doloribus magni.', 'odio-voluptates-et-aut-sunt-sit-nihil-ratione', NULL, '<p>Ea est blanditiis labore est aspernatur ducimus eveniet. Quam a omnis odit qui voluptatem cumque omnis. Ratione vel voluptates ut veniam debitis.</p>', NULL, '2022-07-27 21:22:18', '2022-07-27 21:22:18'),
(7, 2, 'technology', 'Voluptatibus incidunt expedita quidem quas quibusdam praesentium dolorem consequuntur ipsa.', 'et-atque-totam-quia-laudantium-aut-sequi', NULL, '<p>Accusantium minima voluptatem saepe omnis deserunt. Libero saepe omnis non ipsam ut eum. Totam ut distinctio quia saepe.</p>', NULL, '2022-07-27 21:22:18', '2022-07-27 21:22:18'),
(8, 1, 'goverment', 'Provident nihil veniam odit.', 'et-rerum-repudiandae-officia-deleniti-odio-rerum', NULL, '<p>Repellat cum laboriosam quo voluptatem et perspiciatis veniam. Nesciunt hic ipsum esse vitae. Repellat vel voluptates nemo accusantium dolores vero.</p><p>Neque laboriosam doloribus omnis consectetur eos et nesciunt ipsam. Qui aut vel ullam. Aut iste tempore aut dolores. Sint dignissimos aut ea.</p>', NULL, '2022-07-27 21:22:18', '2022-07-27 21:22:18'),
(9, 5, 'berita', 'Consequatur et eos ullam recusandae soluta sit.', 'officiis-accusantium-aut-quia', NULL, '<p>Non et quibusdam et optio officiis corporis. Temporibus quo atque assumenda aut hic et. Voluptatum voluptas molestiae iusto laudantium at.</p><p>Incidunt nihil cumque ipsum qui nihil exercitationem esse. Sit consequatur praesentium est ea nesciunt ipsa est. Alias eum sit maxime in non.</p><p>Sit vitae fugit incidunt dolore laborum. Autem deserunt velit accusantium at omnis labore. Est fuga natus qui quis dolorem eos similique.</p>', NULL, '2022-07-27 21:22:18', '2022-07-27 21:22:18'),
(10, 2, 'goverment', 'Similique asperiores quam aliquam ea id quibusdam soluta sit aperiam est.', 'in-ullam-quia-qui', NULL, '<p>Eos natus qui in eum veniam. Qui eum quis iusto quam natus totam. Provident rerum quos et error ut animi ab et. Ut asperiores rerum temporibus adipisci voluptatem est. Laborum delectus aliquam voluptatem iste et.</p><p>Est quis est libero. Et ea odit eos eum quia quaerat est. Dolorem commodi praesentium modi exercitationem. Qui et necessitatibus est quo quia beatae. Necessitatibus totam quasi eum deleniti voluptas.</p><p>Doloremque esse a voluptas et. Amet quo sit magnam eos laborum. Voluptatibus voluptas et in sit rerum unde aut.</p>', NULL, '2022-07-27 21:22:18', '2022-07-27 21:22:18');

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'blanditiis', 'Illo dolor voluptatem omnis nesciunt sequi non. Veniam repudiandae non quis ipsam. Quos explicabo culpa minima repellat molestiae necessitatibus aut non. Minima dolores in sit.\n\nExercitationem mollitia aut porro perspiciatis. Quam consectetur sit et. In qui aut nobis earum. Laborum iste totam non accusamus.\n\nProvident necessitatibus et incidunt minima non doloremque veniam dolores. Deserunt illo laborum eum. Iste dolorum quod delectus odio molestias sed et.\n\nError et cum architecto mollitia vero necessitatibus dolorem. Ut assumenda perspiciatis aut aut et sequi commodi voluptates. Est praesentium quos quibusdam culpa laudantium perferendis accusamus. Consequatur similique aut eum et odit aspernatur ut.', 'vdvdvfdfvdf/ut/assumenda/provident', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(2, 'vero', 'Placeat qui nihil voluptas quia autem aut non. Culpa nam sit quam vero minima. Nisi ex voluptatem optio quasi et consequatur. Recusandae totam rem non facilis animi. Debitis doloribus ipsum aut et.\n\nAut ratione voluptatem accusantium delectus qui. Autem aperiam id sed iusto nam. Occaecati dolorem ut qui dolores et. Ut et totam et molestias eum recusandae placeat.\n\nLibero repellendus laboriosam debitis nam et earum. Exercitationem qui qui ut qui consequatur. Et vero quia occaecati aut sunt harum.\n\nVoluptates ullam iure vitae est odit. Deleniti adipisci atque omnis et. Qui natus hic harum repellendus esse maxime.', 'vdvdvfdfvdf/officiis/eum', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(3, 'ad hic', 'Inventore iste aut odit maxime maxime. Nobis quis quo dolores ad nulla et labore nam. Maiores aut suscipit laboriosam rerum. Esse est nisi veritatis quibusdam labore.\n\nEst eius ipsum delectus deserunt placeat amet. Consectetur ipsam reiciendis nam culpa libero magnam consequatur quo. Aliquam corporis voluptatem animi suscipit aut. Officiis ad animi est. Reiciendis illo ipsa reiciendis aperiam sed.\n\nQuis sed non nulla in. Harum similique provident rerum adipisci quis distinctio commodi culpa. Voluptatem repellendus commodi saepe tempore dignissimos quod.', 'vdvdvfdfvdf/illum/iste', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(4, 'vero', 'Deserunt qui voluptatem eligendi qui aut sit maxime. Non quibusdam suscipit autem voluptas nobis. Ullam necessitatibus et sit et sunt. Qui occaecati voluptatem delectus rerum.\n\nSit eveniet molestias et et eos odio. Suscipit accusantium ut eum saepe corporis non. Nam veniam quo in non beatae sed. Aut at expedita consequatur itaque vitae.\n\nSunt tempora voluptatem quibusdam commodi asperiores. Ab blanditiis error delectus maiores ex et fugit dolores. Et a sit dicta qui. Ab nostrum eaque ex impedit ratione id nulla.\n\nDicta quidem et impedit inventore. Inventore quas culpa vero cupiditate qui laborum animi. Officia non aut doloribus.', 'vdvdvfdfvdf/totam/facere/excepturi', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(5, 'amet', 'Deserunt quod et tempora quis sunt est qui molestiae. Rerum enim doloribus iure beatae omnis. Culpa perspiciatis eum in. Impedit recusandae eius consequatur nostrum.\n\nRerum rem aut labore et. Aliquam sit expedita rerum perferendis. Inventore ea sed quo tenetur voluptas. Beatae ipsa qui aut doloribus id consequuntur voluptatibus.\n\nRepellat soluta nihil voluptatem et vel. Sunt vitae amet voluptatem fugiat consequatur. Reiciendis dicta beatae inventore error soluta.\n\nQuo enim ab non temporibus. Quae vitae ad vero id modi. Numquam voluptatem dolorum dolor repellendus placeat dolor delectus.', 'vdvdvfdfvdf/autem/repudiandae', '2022-07-27 21:21:53', '2022-07-27 21:21:53'),
(6, 'et odio dicta', 'Sed numquam consectetur tempore sunt ad quidem. Praesentium maiores nihil quidem et doloremque sunt hic. Consequatur omnis et corporis dignissimos. Quia non sint saepe ut consequatur doloribus non consequatur.\n\nEt temporibus consequatur voluptatem atque ut facilis dolorem. Eius ad fuga ipsam molestias iste quia et. Qui nihil tenetur et ab eveniet nobis autem. Quo molestiae at debitis eaque aut. Harum nam pariatur et qui.\n\nError dolorem amet fugit sequi sed earum repellat. Beatae explicabo vel nisi magnam. Culpa dolorem non quia et.\n\nExplicabo reprehenderit eos odio et rerum libero. Nostrum suscipit ut libero suscipit dolorem possimus.', 'vdvdvfdfvdf/voluptate/rerum/qui/rerum', '2022-07-27 21:22:18', '2022-07-27 21:22:18'),
(7, 'sed soluta et', 'Corrupti et adipisci earum beatae eum laborum. Voluptatem ullam natus ut dignissimos. Iusto ratione earum est ullam.\n\nId totam saepe adipisci sed est pariatur. Esse minima dolor natus qui. Et sed expedita aliquid soluta velit et est dolorem.\n\nAmet consequatur atque reiciendis qui quia fuga et sed. Rerum blanditiis eos facere praesentium. Ducimus cupiditate consectetur molestias praesentium nobis repellat ut.\n\nEius repellat maiores ut beatae est. Quia harum quos facilis inventore libero eveniet. Eveniet minima inventore eveniet voluptatem. Ullam assumenda rerum amet soluta et excepturi inventore.', 'vdvdvfdfvdf/quo/eum/quisquam', '2022-07-27 21:22:18', '2022-07-27 21:22:18'),
(8, 'qui repellendus', 'Voluptas velit vel non qui. Veritatis et ipsam omnis dolores molestiae.\n\nFugit et numquam repellat voluptatem voluptas doloremque. Soluta reiciendis temporibus et. Molestiae laudantium iste fugit occaecati atque sed. Praesentium sequi porro qui.\n\nRepudiandae laborum nisi fuga. Harum nihil cumque aut. Ipsum dignissimos esse ratione vitae molestias error.', 'vdvdvfdfvdf/eius/optio/voluptate', '2022-07-27 21:22:18', '2022-07-27 21:22:18'),
(9, 'ea corrupti aut', 'Sequi repellat modi qui. Illo sequi sit doloribus. Placeat facere numquam quam.\n\nConsequatur quo rem blanditiis cum ullam incidunt similique dolores. Quae repellendus enim iusto id eveniet. Id aspernatur quis doloribus quasi fuga excepturi.\n\nRepellendus dolores similique sit. Consequuntur omnis dignissimos culpa ducimus vel quis sequi. In odit consequuntur explicabo quidem vel voluptate.', 'vdvdvfdfvdf/rem/molestiae', '2022-07-27 21:22:19', '2022-07-27 21:22:19'),
(10, 'consequatur', 'Facilis a tenetur qui qui. Minus explicabo enim occaecati aspernatur rerum voluptate aperiam. Accusamus voluptatem quisquam laborum et consectetur. Sunt nemo dignissimos saepe quae pariatur mollitia.\n\nNemo nam velit et reiciendis enim. Dolore unde nisi nam qui. Quia ab et vero ipsum quibusdam ut officia. Sint neque eligendi molestiae iusto dolorem nisi dolor.\n\nDolore iure earum consequatur enim molestiae corrupti. Ut et culpa consequatur dignissimos quia libero consectetur. Doloribus quae incidunt enim corporis et doloremque. Cumque rerum vel optio et quod nisi enim laudantium.\n\nNostrum dolorem accusamus et totam voluptates aut. Expedita et maiores repellat voluptatem exercitationem tempora atque nihil. Sequi aut saepe laudantium quo. Ad voluptas et asperiores molestiae dolorem animi tempore.', 'vdvdvfdfvdf/totam/distinctio', '2022-07-27 21:22:19', '2022-07-27 21:22:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'lazuardi.kunthara', 'Salimah Yuni Laksita', 'eutami@example.com', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-07-27 21:21:52', '2022-07-27 21:21:52'),
(2, 'rahimah.raina', 'Malika Padmasari M.Pd', 'tedi75@example.com', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-07-27 21:21:52', '2022-07-27 21:21:52'),
(3, 'dinda.agustina', 'Azalea Lestari S.Psi', 'msinaga@example.net', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-07-27 21:21:52', '2022-07-27 21:21:52'),
(4, 'yani31', 'Amelia Permata', 'usamah.zahra@example.net', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-07-27 21:21:52', '2022-07-27 21:21:52'),
(5, 'gantar15', 'Ulva Riyanti', 'wulandari.mahdi@example.com', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-07-27 21:21:52', '2022-07-27 21:21:52'),
(6, 'tutama', 'Hendra Mursita Gunarto', 'elisa80@example.net', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-07-27 21:22:17', '2022-07-27 21:22:17'),
(7, 'saiful.widiastuti', 'Hesti Prastuti M.Ak', 'wpradipta@example.net', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-07-27 21:22:17', '2022-07-27 21:22:17'),
(8, 'septi.sinaga', 'Padmi Laksita M.Kom.', 'nmaryadi@example.com', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-07-27 21:22:17', '2022-07-27 21:22:17'),
(9, 'nabila.nuraini', 'Eli Sarah Farida S.T.', 'situmorang.zaenab@example.com', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-07-27 21:22:17', '2022-07-27 21:22:17'),
(10, 'leo.novitasari', 'Maryanto Natsir', 'sadina.wahyudin@example.org', '$2y$10$4w1wC65i3mz/B1LRbKzDqeo0r4vdv2RmCyYibbx7ht04pOJ2FtNEu', '2022-07-27 21:22:18', '2022-07-27 21:22:18');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `links`
--
ALTER TABLE `links`
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
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
