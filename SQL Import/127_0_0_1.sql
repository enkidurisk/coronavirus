-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Feb 2021 pada 05.19
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
-- Database: `coronavirus`
--
CREATE DATABASE IF NOT EXISTS `coronavirus` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `coronavirus`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cardpoint`
--

CREATE TABLE `cardpoint` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cardpoint`
--

INSERT INTO `cardpoint` (`id`, `title`, `picture`, `description`) VALUES
(1532103910, 'Tips Aman saat New Normal', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/06/14/2009676744.jpeg', 'Jaga jarak min 1 meter\r\nHindari sentuhan wajah\r\nHindari kerumunan\r\nMenjaga imun tubuh\r\nGunakan masker\r\nSering mencuci tangan'),
(1532103912, 'bahan Untuk new normal', 'https://cdn-2.tstatic.net/jogja/foto/bank/images/sejumlah-hand-sanitizer-yang-terpajang-di-sebuah-toko-modern-berjejaring.jpg', 'Hand Sanitizer\r\nAlat Makan Pribadi\r\nBotol Minum Pribadi\r\nAlat Salat'),
(1532103937, 'Hobi baru Saat new normal', 'https://cdn1-production-images-kly.akamaized.net/fSunChhrgWz1IgK0E6GN0fkeXAM=/1280x720/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3173542/original/048599300_1594190445-photo-1513694203232-719a280e022f.jpg', 'Berkebun\r\nMendekorasi Rumah\r\nMemasak dirumah\r\nBerolahraga di Rumah / luar\r\nBermain Game'),
(1532103940, 'Kegiatan Seru luar ruangan', 'https://shopee.co.id/inspirasi-shopee/wp-content/uploads/2020/06/photo-1541625602330-2277a4c46182-630x420.jpg', 'Bersepeda di ruang terbuka\r\nPiknik di mobil\r\nJalan-jalan bersama teman');

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
(1609474390, '2021-01-31', 103513134, 2237204, 75119840, 26156090, 845691, 17594, 602010, 413339),
(1612159611, '2021-02-28', 109824819, 2422694, 84552672, 22849453, 510107, 14811, 598969, 32757);

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
(1609474446, '2021-01-31', 1078314, 29998, 873221, 175095, 14224, 476, 10924, 5279),
(1612159557, '2021-02-28', 1233959, 33596, 1039674, 176046, 12156, 304, 13038, 2191);

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `post` text NOT NULL,
  `reportdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`id`, `name`, `email`, `post`, `reportdate`) VALUES
(1611597748, 'ZmlyZGFu', 'ZmlyZGFuQGdtYWlsLmNvbQ==', 'aGFpIGFwYSBrYWJhciBzZW11YW55YSBzZW1vZ2Egc2VoYXQgYWph', '2021-01-26 01:02:28'),
(1613277509, 'cmlhbg==', 'cmlhbkBnbWFpbC5jb20=', 'SGFpIEJvbGVoIG5hbnlhIEFkYSBnYWsgY2FyYSBkYXBhdCB1YW5nIGRpIGludGVybmV0IHRlcnVzIGJpYSBkaWNhaXJrYW4ga2UgZG9tcGV0IGRpZ2l0YWwgc2VwZXJ0aSBEYW5hLCBPVk8sIGdvcGF5IE1vaG9uIFBlcmNlcmFoYW5ueWEgVGVyaW1hIGthc2loIDop', '2021-02-14 11:38:29'),
(1613366228, 'dmlsYW5kaW1pciBrb3J6xIE=', 'dmlsYW1kaW1pcmtvcnpAZ21haWwuY29t', '0J/QvtGH0LXQvNGDINGC0Ysg0L3QtSDQuNGB0L/QvtC70YzQt9GD0LXRiNGMINGA0YPRgdGB0LrQuNC5', '2021-02-15 12:17:08'),
(1613376076, 'dmFsaXIgbWxiYg==', 'dmFsaXJAZ21haWwuY29t', 'RG93bmxvYWQgYWphIGRpIHBsYXlzdG9yZSwgY2FyaSBzbmFja3ZpZGVvLCBzYXlhIGFqYSBiZXJoYXNpbCBrb2sgd2FsYXVwdW4gYnV0dWggd2FrdHUgc2F0dSBidWxhbiwgc2F5YSB0b3AgdXAgTUwgZGlzaXR1IGJhbmcgUmlhbiBidWF0IGphbGFuaW4gbWlzaSBIZXJvIFNraW4gRXBpYyBMdW1heWFuIEdhayBtaW50YSBkaXV0IGFtYSBvcnR18J+YgvCfmILwn5iC', '2021-02-17 00:00:18'),
(1613376077, 'dmFsaXIgbWxiYg==', 'dmFsaXJAZ21haWwuY29t', 'U2thbGlhbiBqYWphbiBiZWxhbmphIG9ubGluZSBhdGF1IGtlcGluZ2luIE1ha2FuIHJpbmdhbiBhdGF1IGluZ2luIEJlbGkgUGFrZXQgbWVsYWx1aSBVYW5nIE5vbiB0dW5haSBtYW50dWwgZGVoIDop', '2021-02-17 00:43:57'),
(1613376078, 'ZGltYXM=', 'ZGltYXNAZ21haWwuY29t', 'Y2FyYSBtZW50cmFuc2ZlciB1YW5nIGRhcmkgcGlraXJhbiBnaW1hbmEgYmFuZyA/', '2021-02-18 11:09:15'),
(1613376079, 'dmlhbg==', 'dmlhbkBnbWFpbC5jb20=', 'amFuZ2FuIGdpdHUgYmFuZywgZG93bmxvYWQgYWphIHNuYWNrdmlkZW8sIGhlbG8sIGF0YXUgdGlrdG9rIGthbXUgdGluZ2dhbCBuZ2VyamFpIG1pc2kgeWFuZyB0ZXJzZWRpYSwgc3lhcmF0IHBhbGluZyBwZW50aW5nIHVzaWEgaGFydXMgMTggdGFodW4geWFhIDop', '2021-02-18 11:10:39'),
(1613376080, 'Y2FjYQ==', 'Y2FjYUBnbWFpbC5jb20=', 'UGFkYSBCdXR1aCBkdWl0IHlhLCBtZW50YW5nIG1lbnRhbmcgbWF1IHRhbWF0IFNNQSB3a3drd2sgY2FuZGEgOik=', '2021-02-18 11:13:43'),
(1613376081, 'cmlza3k=', 'cmlza3lAZ21haWwuY29t', 'aXlhIGNhY2EsIHNhbXBhaSBzYW1wYWkgc2F5YSBtZW5nZ3VuYWthbiB5b3V0dWJlIHByZW1pdW0gdmVyc2kgbW9kIGJpYXIgZ2FrIGFkYSBpa2xhbiBzYW1hIGRvd25sb2FkIHZpZGVvIHBha2UgeW11c2ljIG1vZGUganVnYSwgbnllc2FsIGp1Z2Ega2FsYXUgYmVsaSBwdXJjaGFzZSB1bnR1bmcgYWphIHB1cmNoYXNlbnlhIGdyYXRpc/CfmILwn5iC8J+Ygg==', '2021-02-18 11:15:56'),
(1613376082, 'Y2FjYQ==', 'Y2FjYUBnbWFpbC5jb20=', 'b29vaCBzYW1hIGRvbmcsIHNheWEganVnYSBwYWtlIHNwb3RpZnkgdmVyc2kgbW9kIG55YQ==', '2021-02-18 11:17:01'),
(1613376083, 'cmlza3k=', 'cmlza3lAZ21haWwuY29t', '8J+RjfCfkY3wn5GN8J+RjfCfkY3wn5GN', '2021-02-18 11:17:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `title`, `picture`, `link`, `description`) VALUES
(1532103930, '7 Game Android Terbaik 2021 yang Wajib Dimainkan gengs', 'https://api.duniagames.co.id/api/content/upload/file/2079763491608110443.jpg', 'https://www.tabloidbintang.com/gaya-hidup/read/154959/7-game-android-terbaik-2021-yang-wajib-dimainkan', 'Di tahun 2021, beberapa game Android terbaik masih mendominasi pasar. (Dok. Istimewa)'),
(1532103935, '5 Aktivitas Ringan dan Seru saat Libur di Rumah Aja', 'https://shopee.co.id/inspirasi-shopee/wp-content/uploads/2020/06/photo-1585389490368-924a3be18e3d-1280x720.jpg', 'https://lifestyle.bisnis.com/read/20210101/220/1337631/5-aktivitas-ringan-dan-seru-saat-liburdi-rumah-aja', 'Dengan pandemi yang masih membayangi, maka di rumah saja menjadi pilihan menghabiskan waktu di rumah.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cardpoint`
--
ALTER TABLE `cardpoint`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `global_corona`
--
ALTER TABLE `global_corona`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `indonesia_corona`
--
ALTER TABLE `indonesia_corona`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cardpoint`
--
ALTER TABLE `cardpoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1612262597;

--
-- AUTO_INCREMENT untuk tabel `global_corona`
--
ALTER TABLE `global_corona`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1612159612;

--
-- AUTO_INCREMENT untuk tabel `indonesia_corona`
--
ALTER TABLE `indonesia_corona`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483649;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1613376084;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1612262564;
--
-- Database: `projek_2`
--
CREATE DATABASE IF NOT EXISTS `projek_2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projek_2`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hitung_nilai_akhir`
--

CREATE TABLE `hitung_nilai_akhir` (
  `id` int(13) NOT NULL,
  `nama_mahasiswa` varchar(40) NOT NULL,
  `mata_kuliah` varchar(50) NOT NULL,
  `nilai_absen` varchar(50) NOT NULL,
  `nilai_tugas` varchar(50) NOT NULL,
  `nilai_uts` varchar(50) NOT NULL,
  `nilai_uas` varchar(50) NOT NULL,
  `nilai_akhir` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hitung_nilai_akhir`
--

INSERT INTO `hitung_nilai_akhir` (`id`, `nama_mahasiswa`, `mata_kuliah`, `nilai_absen`, `nilai_tugas`, `nilai_uts`, `nilai_uas`, `nilai_akhir`, `grade`) VALUES
(1611465404, 'User', 'Komputer', '100', '98,54', '99,87', '96,89', '97.7', 'A'),
(1611546891, 'Yusra Budiman Hsb', 'Komputer', '90', '95', '92', '89', '91.2', 'A');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hitung_nilai_akhir`
--
ALTER TABLE `hitung_nilai_akhir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hitung_nilai_akhir`
--
ALTER TABLE `hitung_nilai_akhir`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1611546892;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
