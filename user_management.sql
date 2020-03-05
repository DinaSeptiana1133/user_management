-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2020 pada 14.03
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_management`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `nama_lengkap`, `password`, `deleted_at`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'disept@gmail.com', 'y', '$2y$10$RdnXu8sbcTje8YaDyEWIEe1lA9qzhuHyxhwQlrU0bHq6TBwwM7pmi', NULL, '2020-02-24 07:17:22', '2020-02-24 07:17:22', 1),
(9, 'ds@gmail.com', 'Disept', '$2y$10$2qveOe9Do1UGI6j261HwZ..l4ocqlarOkEyPBqfqKtHVf3Jh.07k.', NULL, '2020-02-23 14:39:52', '2020-02-23 14:39:52', 0),
(12, 'abcd@gmail.com', 'abcd', '$2y$10$N3ftzZgImaBGPEsE.D3aa.Iyt5zNy8sF.5nIZrStJdGIbHXi.cIqW', NULL, '2020-02-22 16:49:15', '2020-02-22 16:49:15', 0),
(13, 'mmm@gmail.com', 'mmm', '$2y$10$wiWnZt/K0U69RbRZHxzNP.5h9gXpKDfP2ZsF.cW9D13OZoG0UvKUu', NULL, '2020-02-23 14:48:47', '2020-02-23 14:48:47', 0),
(14, 'dsorln@gmail.com', 'Dina Septiana', '$2y$10$dAHtEpT427VnVCW.w4dSXeptorv3yb4Bb74mR6E4WyL.FEWw4SmNK', NULL, '2020-02-23 14:16:51', '2020-02-23 14:16:51', 0),
(15, 'email', 'nama_lengkap', '$2y$10$/r5utzgPtMYRxMxxKpRPfe0OWaJ2/c4CiXVPxAuM.RGxgc7PFuVFa', NULL, '2020-02-23 14:25:15', '2020-02-23 14:25:15', 0),
(16, 'ds@gmail.com', 'Dina Septiana', '$2y$10$fEssxta.iz3JV.wtbUbKMugOnrWc4Phv3dym/nU37G4oDu8gSkYFe', NULL, '2020-02-23 14:32:39', '2020-02-23 14:32:39', 0),
(17, 'ds@gmail.com', 'Dina Septiana', '$2y$10$YYai1tfbPTYY/ShfJTagAezJp1zWId5nf1aIv0y6mdrzUUycP..iW', NULL, '2020-02-23 14:32:41', '2020-02-23 14:32:41', 0),
(18, 'ds@gmail.com', 'Dina Septiana', '$2y$10$P1nUPg4Lc5krhvfJv5U1z.1Z8NTtmV2X927R43eqZl6PGqwYSM4qq', NULL, '2020-02-23 14:39:50', '2020-02-23 14:39:50', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
