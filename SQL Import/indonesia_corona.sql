-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2021 pada 04.30
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chart_corona_id`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `indonesia_corona`
--

CREATE TABLE `indonesia_corona` (
  `id` int(20) NOT NULL,
  `indoTime` date NOT NULL,
  `id_positive` int(20) NOT NULL,
  `id_death` int(20) NOT NULL,
  `id_recovered` int(20) NOT NULL,
  `id_active` int(20) NOT NULL,
  `id_high_p` int(20) NOT NULL,
  `id_high_d` int(20) NOT NULL,
  `id_high_r` int(20) NOT NULL,
  `id_high_a` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `indonesia_corona`
--

INSERT INTO `indonesia_corona` (`id`, `indoTime`, `id_positive`, `id_death`, `id_recovered`, `id_active`, `id_high_p`, `id_high_d`, `id_high_r`, `id_high_a`) VALUES
(1606295868, '2020-03-02', 2, 0, 0, 2, 2, 0, 0, 2),
(1606297868, '2020-03-31', 1528, 136, 81, 1311, 153, 20, 13, 120),
(1606302546, '2020-04-30', 10118, 792, 1522, 7804, 436, 60, 137, 239),
(1606303546, '2020-05-31', 26473, 1613, 7308, 17552, 973, 59, 523, 391),
(1606303768, '2020-06-30', 56385, 2876, 24806, 28703, 1385, 71, 1027, 776),
(1606303989, '2020-07-31', 108376, 5131, 65907, 37338, 2657, 139, 2366, 1533),
(1606304100, '2020-08-31', 174796, 7417, 125959, 41420, 3308, 120, 3166, 1393),
(1606304409, '2020-09-30', 287008, 10740, 214947, 61321, 4823, 160, 4510, 1431),
(1606304753, '2020-10-31', 410088, 13869, 337801, 66578, 4850, 129, 5810, 1348),
(1606304814, '2020-11-30', 538883, 16945, 450518, 71420, 6267, 169, 4527, 2330),
(1608185415, '2020-12-31', 743198, 22138, 611097, 109963, 8369, 258, 7356, 4520),
(1609474446, '2021-01-31', 818386, 23947, 673511, 120928, 10617, 233, 7582, 3224);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `indonesia_corona`
--
ALTER TABLE `indonesia_corona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `indonesia_corona`
--
ALTER TABLE `indonesia_corona`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483649;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
