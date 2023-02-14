-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 10:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muhammadrizkinew`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paragraf_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraf_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraf_three` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `paragraf_one`, `paragraf_two`, `paragraf_three`, `created_at`, `updated_at`) VALUES
(1, 'Saat ini saya adalah seorang mahasiswa Fakultas Sains dan Teknologi, program studi Sistem Komputer di salah satu Universitas yang ada di Medan.', 'Keseharian saya yaitu membaca buku atupun artikel. Selain itu saya juga aktif menuis artikel mengenai teknologi dan programming di blog saya dan teman saya bangun.', 'Saya juga adalah seorang Web Designer dan Web Programmer yang mana dapat membangun subuah web yang dapat membantu dalam menyelesaikan masalah saya pribadi maupun client saya.', '2023-02-13 07:12:25', '2023-02-13 07:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(6, 'Muhammad Rizki', 'mhdky502@gmail.com', 'Hello World!', '2023-02-13 20:36:01', '2023-02-13 20:36:01'),
(7, 'Muhammad Rizki', 'mhdky502@gmail.com', 'Tes time zone', '2023-02-13 20:36:30', '2023-02-13 20:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_09_091418_create_contacts_table', 1),
(6, '2023_02_09_210117_create_abouts_table', 1),
(7, '2023_02_09_210425_create_skills_table', 1),
(8, '2023_02_09_210922_create_portfolios_table', 1),
(9, '2023_02_09_211400_create_socials_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `web_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_repo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `web_name`, `technology_one`, `technology_two`, `description`, `status`, `web_link`, `web_repo`, `img_url`, `poster`, `created_at`, `updated_at`) VALUES
(1, 'MUHAMMAD RIZKI HOME PAGE', '<li>- HTML</li>\r\n<li>- Tailwind CSS</li>\r\n<li>- JavaScript</li>\r\n<li>- Laravel</li>\r\n<li>- Mysql</li>', 'HTML, Tailwind CSS, JavaScript, Laravel, Mysql', 'MUHAMMAD RIZKI HOME PAGE adalah sebuah Home Page yang menampilkan project yang talah saya bangun sebagai Branding atas kemampuan saya dalam dunia Web Programming.', 'Publish', 'https://mhdrizki.com', 'https://github.com/mhdky/muhammad-rizki-web-portfolio', 'img-storage/zO6vw2VDnTE80EYgMzDWJ466DGiZJS3wqs3aMW26.png', 'img-storage/aWPjOoy59TdgdDPugaq0JtxoipLEAGnkcbigEAeA.png', '2023-02-13 08:08:31', '2023-02-13 20:05:36'),
(2, 'ANISA COLLECTION CLOTHING STORE', '<li>- HTML</li>\r\n<li>- Tailwind CSS</li>\r\n<li>- JavaScript</li>\r\n<li>- Laravel</li>\r\n<li>- Mysql</li>\r\n<li>- Raja Ongkir API</li>\r\n<li>- Midtrans Payment Gateway</li>', 'HTML, Tailwind CSS, JavaScript, Laravel, Mysql, Raja Ongkir API, Midtrans Payment Gateway', 'Anisa Collection adalah sebuah website toko online yang menjual berbagai jenis pakaian, yang saat ini sedang dalam proses pengembangan sebagai project tugas akhir dari kuliah saya.', 'Development', NULL, NULL, 'img-storage/TVb0ROu0Ws3DKtNFNtJ9lq5SN13pm6hYxH5pRhrf.png', 'img-storage/DJqjE5zHRMPqZRPpKCLrfotZ4undfR6k3b8vxDLX.png', '2023-02-13 08:10:12', '2023-02-13 20:33:47'),
(3, 'wpu jUMp SHocase', '<li>- HTML</li>\r\n<li>- Tailwind CSS</li>\r\n<li>- JavaScript</li>\r\n<li>- Laravel</li>\r\n<li>- Mysql</li>', 'HTML, Tailwind CSS, JavaScript, Laravel, Mysql', 'WPU Jump Show Case adalah sebuah web yang dapat membantu teman-teman WPU yang telewat untuk menyaksikan Projectnya di riview atau di tampilkan di live youtube channel Web Programming Unpas.\r\n<br><br>\r\n\r\nWPU Jump Show Case memungkinkan kamu untuk dapat melihat langsung project kamu di riview melalui siaran ulang youtube chanel Web Programming Unpas dengan langsung menampilkan menit di mana project kamu di riview hanya dengan sekali klik tanpa harus kamu mencari menit-permenit project kamu di riview.', 'Development', NULL, NULL, 'img-storage/LY1Fz4AadBSKuEvaRacrcFFcSdPctZwcyUXnz8cF.png', 'img-storage/I7cCvcKMmXvrbGEGzg96uRDzedBp0a8ha99epo5J.png', '2023-02-13 08:11:28', '2023-02-13 20:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `programming_language` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `backend` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frontend` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `database` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `programming_language_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `backend_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frontend_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `database_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `programming_language`, `backend`, `frontend`, `database`, `other`, `programming_language_two`, `backend_two`, `frontend_two`, `database_two`, `other_two`, `created_at`, `updated_at`) VALUES
(1, '<div class=\"php w-[150px] rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    PHP\r\n                </div>\r\n                <div class=\"javascript w-[150px] rounded-[20px] flex justify-center items-center font-bold\">\r\n                    Javascript\r\n                </div>', '<div class=\"laravel w-[150px] rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    Laravel\r\n                </div>\r\n                <div class=\"node w-[150px] rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    Node Js\r\n                </div>\r\n                <div class=\"ex w-[150px]  rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    Express Js\r\n                </div>', '<div class=\"html w-[150px] rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    HTML\r\n                </div>\r\n                <div class=\"css w-[150px] rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    CSS\r\n                </div>\r\n                <div class=\"tw w-[150px] rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    Tailwind CSS\r\n                </div>\r\n                <div class=\"react w-[150px] rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    React JS\r\n                </div>', '<div class=\"mysql w-[150px] rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    SQL Server\r\n                </div>', '<div class=\"git w-[150px] rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    GIT\r\n                </div>\r\n                <div class=\"github w-[150px] rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    Github\r\n                </div>\r\n                <div class=\"api w-[150px] rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    Rest API \r\n                </div>\r\n                <div class=\"figma w-[150px] rounded-[20px] flex justify-center items-center mr-3 mb-3 font-bold\">\r\n                    Figma\r\n                </div>', 'PHP, JavaScript', 'Laravel, Node JS, Express JS', 'HTML, CSS, Tailwind CSS, React JS', 'SQL Server', 'GIT, Github, Rest API, Figma', '2023-02-13 07:12:25', '2023-02-13 08:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `instagram`, `linkedin`, `github`, `email`, `cv`, `created_at`, `updated_at`) VALUES
(1, 'https://instagram.com/rizki_sr_my/', 'https://www.linkedin.com/in/muhammad-rizki-335851226/', 'https://github.com/mhdky/', 'mailto:mhdky502@gmail.com', '#', '2023-02-13 07:12:25', '2023-02-13 07:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'muhammadrizki433', NULL, '$2y$10$Dhp4PzHERv2KRSkAkngjquHNdc6S1J6jQs2ouxgu0FwfF3YWIP6kG', NULL, '2023-02-13 07:12:25', '2023-02-13 07:12:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
