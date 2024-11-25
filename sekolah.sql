-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2024 pada 10.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `penulis` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `foto`, `deskripsi`, `penulis`, `created_at`, `updated_at`) VALUES
(1, 'Pertandingan Vollyball SMK Satubangsa Harmoni VS SMK/A Kartini Batam', 'FB-_DSC1811.jpg', 'Pertandingan ini merupakan pertandingan funmatch untuk saling melatih kemampuan dua belah pihak, dan juga sebagai penjalin saudaraan. Adapun peserta putra yang bertanding ialah: Adrian Gideon, Zhairil Zidan, Fharel Marino Pratama, Ibra Movid Syaputera, Abraham, Ruben, Raihan, Hanif, Muhammad Haikal.', 'Pandjie Aldino', '2024-11-18 01:21:13', '2024-11-18 01:21:13'),
(2, 'Solana: Masa Depan Blockchain dengan Kecepatan Super dan Biaya Rendah', 'FB-_DSC1810.jpg', 'Solana telah menjadi perbincangan hangat di dunia blockchain sebagai platform yang menawarkan transaksi cepat dan biaya yang sangat rendah. Dengan teknologi proof-of-history (PoH), Solana mampu memproses lebih dari 65.000 transaksi per detik, menjadikannya salah satu blockchain tercepat di dunia. Artikel ini membahas keunggulan Solana, proyek-proyek terkemuka yang dibangun di atasnya, serta potensinya dalam mengubah ekosistem kripto secara global.', 'Xann', '2024-11-18 01:29:28', '2024-11-18 01:29:28'),
(8, 'ac', 'FB-wallhaven-nz6dro.png', '<p><a href=\"https://youtu.be/oa5qxKExXIU?si=WMe0QJx8k8Tkv5iQ\" target=\"_blank\">yt</a><br></p>', 'taktau', '2024-11-24 04:42:32', '2024-11-24 04:42:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telpon` varchar(45) DEFAULT NULL,
  `instagram` varchar(45) DEFAULT NULL,
  `facebook` varchar(45) DEFAULT NULL,
  `twitter` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `alamat`, `email`, `telpon`, `instagram`, `facebook`, `twitter`, `created_at`, `updated_at`) VALUES
(2, 'Jl. Bengkong Jaya No.1, Bengkong Laut, Kec. Bengkong, Kota Batam, Kepulauan Riau 29432', 'sekolah@gmail.com', '0123456789', '@instagram', '@facebook', '@twitter', '2024-11-21 03:41:31', '2024-11-21 03:41:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `nama`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(10, 'Futsal', 'Ekstrakurikuler futsal melatih teknik, strategi, dan sportivitas siswa. Dengan latihan rutin dan bimbingan pelatih, tim aktif berlaga di kompetisi. Kegiatan ini membangun karakter, kerjasama, dan semangat juang.', 'futsal.jpeg', '2024-11-21 02:10:15', '2024-11-21 02:10:15'),
(11, 'Badminton', 'Ekstrakurikuler badminton melatih teknik dasar, stamina, dan ketangkasan. Dengan bimbingan pelatih, siswa diasah untuk kompetisi dan membangun semangat sportivitas, disiplin, serta prestasi.', 'badmin.jpeg', '2024-11-21 02:10:15', '2024-11-21 02:10:15'),
(12, 'VollyBall', 'Ekstrakurikuler voli melatih teknik passing, smash, dan teamwork. Dengan bimbingan pelatih, siswa diajak bermain penuh semangat untuk kompetisi dan membangun sportivitas.', 'volly.jpg', '2024-11-21 02:10:15', '2024-11-21 02:10:15'),
(13, 'Tari', 'Ekstrakurikuler tari mengajarkan gerakan seni tradisional dan modern. Melalui latihan rutin, siswa diajak mengekspresikan diri, melestarikan budaya, serta tampil dalam acara sekolah dan lomba.', 'tari.jpeg', '2024-11-21 02:10:15', '2024-11-21 02:10:15'),
(14, 'MMA', 'Ekstrakurikuler MMA melatih teknik bela diri, kekuatan, dan fokus. Kegiatan ini membangun disiplin, keberanian, dan mental juara. Terbuka bagi siswa pemula maupun yang berpengalaman.', 'mma.jpeg', '2024-11-21 02:10:15', '2024-11-21 02:10:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `diposting_oleh` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurutendik`
--

CREATE TABLE `gurutendik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gurutendik`
--

INSERT INTO `gurutendik` (`id`, `nama`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(9, 'Guru 1', 'Jabatan 1', 'GTK-_DSC1881.JPG', '2024-11-21 02:20:49', '2024-11-21 02:20:49'),
(10, 'Guru 2', 'Jabatan 2', 'GTK-_DSC1881.JPG', '2024-11-21 02:20:49', '2024-11-21 02:20:49'),
(11, 'Guru 3', 'Jabatan 3', 'GTK-_DSC1881.JPG', '2024-11-21 02:20:49', '2024-11-21 02:20:49'),
(12, 'Guru 4', 'Jabatan 4', 'GTK-_DSC1881.JPG', '2024-11-21 02:20:49', '2024-11-21 02:20:49'),
(13, 'Guru 5', 'Jabatan 5', 'GTK-_DSC1881.JPG', '2024-11-21 02:20:49', '2024-11-21 02:20:49'),
(14, 'Guru 6', 'Jabatan 6', 'GTK-_DSC1881.JPG', '2024-11-21 02:20:49', '2024-11-21 02:20:49'),
(15, 'Guru 7', 'Jabatan 7', 'GTK-_DSC1881.JPG', '2024-11-21 02:20:49', '2024-11-21 02:20:49'),
(16, 'Guru 8', 'Jabatan 8', 'GTK-_DSC1881.JPG', '2024-11-21 02:20:49', '2024-11-21 02:20:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_pendaftaran`
--

CREATE TABLE `informasi_pendaftaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasi_pendaftaran`
--

INSERT INTO `informasi_pendaftaran` (`id`, `gambar`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ak.jpeg', 'Selamat datang di Sekolah Satubangsa Harmoni Batam! Kami membuka pendaftaran untuk calon siswa baru tahun ajaran 2024/2025. Berikut adalah informasi penting terkait proses pendaftaran', 1, '2024-11-18 09:05:24', '2024-11-18 09:05:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_26_114653_create_profile_madrasah_table', 1),
(5, '2020_12_27_175723_create_ekstrakulikuler_table', 1),
(6, '2020_12_28_062834_create_gurutendik_table', 1),
(7, '2020_12_28_155258_create_contact_table', 1),
(8, '2020_12_28_172531_create_berita_table', 1),
(9, '2021_01_01_143849_create_informasi_pendaftaran_table', 1),
(11, '2024_11_21_105246_gallery', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile_madrasah`
--

CREATE TABLE `profile_madrasah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `jumlah_rombel` int(11) NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  `jumlah_guru` int(11) NOT NULL,
  `jumlah_tendik` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profile_madrasah`
--

INSERT INTO `profile_madrasah` (`id`, `nama`, `deskripsi`, `gambar`, `logo`, `jumlah_rombel`, `jumlah_siswa`, `jumlah_guru`, `jumlah_tendik`, `created_at`, `updated_at`) VALUES
(2, 'Satubangsa Harmoni', 'Sekolah Satu Bangsa Harmoni adalah Lembaga Pendidikan formal yang berada di bawah naungan Yayasan Satubangsa Harmoni Baru. Sekolah ini sebelumnya di kenal dengan nama Sekolah Harmoni dan beralih menjadi Sekolah Satu Bangsa Harmoni. Sekolah Satu Bangsa Harmoni memiliki jenjang pendidikan dari tingkat KB, TK, SD, SMP, dan SMK serta beralamat di Kelurahan Bengkong Laut, Kecamatan Bengkong. Sekolah ini menyediakan pendidikan sesuai dengan visi masing-masing unit sekolah.', 'bg.jpg', 'logo.png', 2, 231, 9, 12, '2024-11-09 10:41:32', '2024-11-09 10:41:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'san', 'san@gmail.com', '2024-11-09 12:02:36', '123', 'x', '2024-11-09 12:02:36', '2024-11-09 12:02:36'),
(2, '123', '123@123', NULL, '$2y$10$iYhfGYqOQ4DjW.UgLkUo3uA6FtO4TLNnQwIxaHqAUT11wZEWlWrKi', NULL, '2024-11-24 03:08:55', '2024-11-24 03:08:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gurutendik`
--
ALTER TABLE `gurutendik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi_pendaftaran`
--
ALTER TABLE `informasi_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `profile_madrasah`
--
ALTER TABLE `profile_madrasah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gurutendik`
--
ALTER TABLE `gurutendik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `informasi_pendaftaran`
--
ALTER TABLE `informasi_pendaftaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `profile_madrasah`
--
ALTER TABLE `profile_madrasah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
