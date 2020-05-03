-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2020 pada 09.14
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040018.`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `No` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Judul_Buku` varchar(20) NOT NULL,
  `Penulis` varchar(100) NOT NULL,
  `Penerbit` varchar(100) NOT NULL,
  `Tebal_Buku` varchar(100) NOT NULL,
  `Tahun_Terbit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`No`, `Foto`, `Judul_Buku`, `Penulis`, `Penerbit`, `Tebal_Buku`, `Tahun_Terbit`) VALUES
(1, 'rumahkaca.jpg', 'Rumah Kaca', 'Pramoedya Ananta Toer', 'Lentera', '646 Halaman', 2010),
(2, 'koalakomal.jpg', 'Koala Kumal', 'Raditya Dika', 'Gagas Media', '250 Halaman', 2015),
(3, 'laskarpelangi.jpg', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka,Yogyakarta', '529 Halaman', 2005),
(4, 'tentangkamu.jpg', 'tentang Kamu', 'Tere Liye ', 'Republika Penerbit,Jakarta', '524 Halaman', 2016),
(5, 'cm.jpg', '5 cm', 'Dhonny Ghirgantoro', 'PT.Grasindo,Yogyakarta', '281 Halaman', 2005),
(6, 'memahamifilm.jpg', 'Memahami Film', 'Himawan Pratists', 'Homerian Pustaka', '223 Halaman', 2008),
(7, 'sangkuriang.jpg', 'sangkuriang', 'Yuliandi Soekardi', 'CV.Pustaka setia', '104 Halaman', 2002),
(8, 'suaradilan.jpg', 'Milea;Suara Dilan', 'Pidi Baiq', 'pastel Books', '360 Halaman', 2016),
(9, 'pudarnyapc.jpg', 'Pudarnya Pesona Cleo', 'Habiburrahman El Shirazy', 'Republika,Jakarta', '111 Halaman', 2005),
(10, 'ayah.jpg ', 'Ayah', 'Andrea Hirata', 'Benteng Pustaka,Yogyakarta', '412 Halaman', 2015);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
