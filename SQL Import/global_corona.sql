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
-- Database: `chart_corona`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `global_corona`
--

CREATE TABLE `global_corona` (
  `id` int(20) NOT NULL,
  `timeDate` date NOT NULL,
  `positive` int(20) NOT NULL,
  `death` int(20) NOT NULL,
  `recovered` int(20) NOT NULL,
  `active` int(20) NOT NULL,
  `p_high` int(20) NOT NULL,
  `d_high` int(20) NOT NULL,
  `r_high` int(20) NOT NULL,
  `a_high` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `global_corona`
--

INSERT INTO `global_corona` (`id`, `timeDate`, `positive`, `death`, `recovered`, `active`, `p_high`, `d_high`, `r_high`, `a_high`) VALUES
(1606238384, '2020-01-31', 11958, 259, 504, 11448, 2127, 46, 72, 2009),
(1606300858, '2020-02-29', 86605, 2977, 42330, 41298, 14153, 158, 3715, 12057),
(1606301468, '2020-03-31', 864229, 44053, 178168, 642008, 74217, 4722, 14077, 32843),
(1606301968, '2020-04-30', 3266132, 233986, 1046997, 1985149, 102100, 8485, 67448, 59817),
(1606302765, '2020-05-31', 6238550, 374374, 2853987, 3010189, 126125, 6842, 110097, 53975),
(1606302978, '2020-06-30', 10577756, 513186, 5790762, 4273808, 194190, 6589, 154169, 90813),
(1606303675, '2020-07-31', 17752831, 682392, 11155040, 5915399, 289609, 7179, 241448, 95852),
(1606303969, '2020-08-31', 25628294, 854424, 17932640, 6841230, 289901, 6838, 274846, 98347),
(1606304445, '2020-09-30', 34147983, 1018218, 25422199, 7707566, 322648, 6348, 298473, 63717),
(1606304765, '2020-10-31', 46367473, 1199727, 33479248, 11688498, 573614, 7512, 284865, 308767),
(1606304813, '2020-11-30', 64445050, 1474338, 44827390, 18143322, 673614, 12306, 536116, 344610),
(1608184887, '2020-12-31', 83800239, 1825016, 59320807, 22654416, 745018, 15124, 546698, 277688),
(1609474390, '2021-01-31', 90077058, 1934801, 64463352, 23678905, 835547, 15218, 602010, 413339);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `global_corona`
--
ALTER TABLE `global_corona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `global_corona`
--
ALTER TABLE `global_corona`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1609474391;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
