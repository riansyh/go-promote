-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Nov 2020 pada 11.06
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_promote`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `nama`, `no_hp`, `email`, `password`) VALUES
('riansyah22', 'Rian Febriansyah', '089660254544', 'rianfebriansyah22@gmail.com', '89099078');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalpp`
--

CREATE TABLE `jadwalpp` (
  `nama` varchar(20) NOT NULL,
  `instagram` varchar(20) NOT NULL,
  `paket` varchar(10) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `Keterangan` varchar(10) DEFAULT 'Berjalan',
  `id_payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwalpp`
--

INSERT INTO `jadwalpp` (`nama`, `instagram`, `paket`, `tanggal_mulai`, `tanggal_selesai`, `Keterangan`, `id_payment`) VALUES
('Kactus', '@kactus.id', 'Platinum', '2020-05-09', '2020-05-16', 'Selesai', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(5) NOT NULL,
  `Nama_paket` varchar(20) NOT NULL,
  `Harga` int(10) NOT NULL,
  `Durasi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `Nama_paket`, `Harga`, `Durasi`) VALUES
(1, 'Bronze', 15000, 1),
(2, 'Silver', 25000, 2),
(3, 'Gold', 50000, 5),
(4, 'Platinum', 60000, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(10) NOT NULL,
  `metode` varchar(10) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `id_paket` int(5) NOT NULL,
  `id_pembeli` varchar(10) NOT NULL,
  `tgl_pp` date NOT NULL,
  `id_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id_payment`, `metode`, `tanggal_transaksi`, `id_paket`, `id_pembeli`, `tgl_pp`, `id_admin`) VALUES
(1, 'OVO', '2020-05-08', 2, 'rfbr', '2020-05-09', 'riansyah22'),
(2, 'OVO', '2020-05-08', 4, 'rfbr', '2020-05-09', 'riansyah22'),
(4, 'OVO', '2020-05-11', 1, 'tbunga', '2020-05-12', 'riansyah22'),
(8, 'gopay', '2020-05-11', 1, 'tbunga', '0000-00-00', 'riansyah22'),
(9, 'gopay', '2020-05-11', 3, 'tbunga', '0000-00-00', 'riansyah22'),
(18, 'linkaja', '2020-05-11', 4, 'tbunga', '2020-05-28', 'riansyah22'),
(19, 'linkaja', '2020-05-16', 3, 'rfbr', '2020-05-30', 'riansyah22');

--
-- Trigger `payment`
--
DELIMITER $$
CREATE TRIGGER `insert` AFTER INSERT ON `payment` FOR EACH ROW INSERT INTO jadwalpp (id_payment, nama,instagram,paket,tanggal_mulai,tanggal_selesai) (SELECT py.id_payment, p.nama,p.instagram,pk.Nama_paket, py.tgl_pp, (py.tgl_pp + INTERVAL pk.Durasi DAY) as Sampai
FROM pembeli as p, paket as pk, payment as py
WHERE p.username = py.id_pembeli AND pk.id_paket = py.id_paket AND py.id_payment=NEW.id_payment)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `username` varchar(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `No_HP` varchar(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(6) NOT NULL,
  `instagram` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`username`, `Nama`, `No_HP`, `Email`, `password`, `instagram`) VALUES
('33', '33', '33', '33', '33', '33'),
('bril', 'Brilian', '3453453', 'bru', '1234', '90809'),
('rfbr', 'Kactus', '089660254544', 'kactus@gmail.com', '13242', '@kactus.id'),
('tbunga', 'Toko Bunga', '089675432356', 'tbunga@gmail.com', '81dc9b', '@tbunga.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `jadwalpp`
--
ALTER TABLE `jadwalpp`
  ADD KEY `id_payment` (`id_payment`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `payment` (`id_admin`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwalpp`
--
ALTER TABLE `jadwalpp`
  ADD CONSTRAINT `id_payment` FOREIGN KEY (`id_payment`) REFERENCES `payment` (`id_payment`);

--
-- Ketidakleluasaan untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`username`),
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
