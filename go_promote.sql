-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2020 pada 10.47
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `jadwalpp`
--

CREATE TABLE `jadwalpp` (
  `tgl_pp` date NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_selesai` date NOT NULL,
  `paket` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwalpp`
--

INSERT INTO `jadwalpp` (`tgl_pp`, `id_transaksi`, `id_paket`, `username`, `tgl_selesai`, `paket`, `status`) VALUES
('2020-11-19', 12357, 3, 'riansyah22', '2020-11-24', 'Gold', 'Selesai'),
('2020-11-05', 12358, 1, 'riansyh22', '2020-11-06', 'Bronze', 'Selesai'),
('2020-05-09', 12359, 1, 'riansyah22', '2020-05-10', 'Bronze', 'Belum'),
('2020-12-02', 12360, 1, 'rizalh', '2020-12-03', 'Bronze', 'Selesai'),
('2020-12-05', 12362, 4, 'evosroar', '2020-12-12', 'Platinum', 'Selesai'),
('2020-12-24', 12363, 1, 'botolkecap', '2020-12-25', 'Bronze', 'Proses'),
('2020-12-09', 12364, 4, 'rizalh', '2020-12-16', 'Platinum', 'Proses'),
('2020-12-09', 12367, 3, 'rizalh', '2020-12-14', 'Gold', 'Selesai'),
('2020-12-09', 12368, 3, 'rizalh', '2020-12-14', 'Gold', 'Proses'),
('2020-12-16', 12369, 2, 'rizalh', '2020-12-18', 'Silver', 'Proses'),
('2020-12-17', 12370, 3, 'rizalh', '2020-12-22', 'Gold', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `durasi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga`, `durasi`) VALUES
(1, 'Bronze', 15000, 1),
(2, 'Silver', 25000, 2),
(3, 'Gold', 50000, 5),
(4, 'Platinum', 60000, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `metode` varchar(10) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_paket` int(11) NOT NULL,
  `tgl_pp` date NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `caption` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `jasa_desain` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `metode`, `tgl_transaksi`, `id_paket`, `tgl_pp`, `username`, `caption`, `foto`, `status`, `jasa_desain`) VALUES
(12357, 'LinkAja', '2020-11-29', 3, '2020-11-19', 'riansyah22', 'qsqs', '5fc3cac69d9f0.jpeg', 'Proses', 1),
(12358, 'GoPay', '2020-11-30', 1, '2020-11-05', 'riansyh22', 'nbjkkjn', '5fc4fc571ee76.png', 'Proses', 1),
(12359, 'OVO', '2020-11-12', 1, '2020-05-09', 'riansyah22', '', '', 'Belum', 0),
(12360, 'OVO', '2020-12-01', 1, '2020-12-02', 'rizalh', '111', '5fc650ad04d49.png', 'Proses', 0),
(12361, 'LinkAja', '2020-12-01', 4, '2020-12-02', 'rizalh', 'fsfsdf', '5fc653a351627.png', 'Proses', 1),
(12362, 'LinkAja', '2020-12-01', 4, '2020-12-05', 'evosroar', 'aid romote ', '5fc6f0586de5d.png', 'Proses', 1),
(12363, 'OVO', '2020-12-02', 1, '2020-12-24', 'botolkecap', 'asasas', '5fc7b7e8b214d.png', 'Proses', 1),
(12364, 'OVO', '2020-12-03', 4, '2020-12-09', 'rizalh', '', '5fc9a00e596f3.png', 'Proses', 1),
(12367, 'GoPay', '2020-12-08', 3, '2020-12-09', 'rizalh', 'sdasdsadsffd', '5fcf268da870e.png', 'Proses', 1),
(12368, 'GoPay', '2020-12-08', 3, '2020-12-09', 'rizalh', 'liho', '5fcf28c8846a3.png', 'Proses', 1),
(12369, 'Dana', '2020-12-08', 2, '2020-12-16', 'rizalh', 'grg', '5fcf29186c78f.png', 'Proses', 1),
(12370, 'OVO', '2020-12-08', 3, '2020-12-17', 'rizalh', 'sw', '5fcf294baa544.png', 'Proses', 1);

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `insert` AFTER INSERT ON `transaksi` FOR EACH ROW INSERT INTO jadwalpp (id_transaksi,status,paket,username,id_paket,tgl_pp,tgl_selesai) (SELECT py.id_transaksi,py.status,pk.Nama_paket, p.username, pk.id_paket,py.tgl_pp, (py.tgl_pp + INTERVAL pk.Durasi DAY) as Sampai
FROM users_data p, paket pk, transaksi py
WHERE p.username = py.username AND pk.id_paket = py.id_paket AND py.id_transaksi=NEW.id_transaksi)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `level`) VALUES
('botolkecap', '$2y$10$D6PhRDc70SNHCOroRXNPseiJaYOczGEZs/gatG0V18H8aWnmYbfn2', 1),
('budiono', '$2y$10$4m0qMZvH83WmygLOQNUj8.utPWscCflmTWtDk9um2gUHSyB/ac17O', 1),
('evosroar', '$2y$10$LxZUpDG2ut8iomxKDJYCJ.sqvWE.EmvXGul7zUUgTkCRQqKG71ody', 1),
('gelasbotol', '$2y$10$iN8vaCExp7haJ1XasfcwMO062ZOmE3rrkt2x4bwj4EHhXBAjEmI3S', 1),
('mystogan', '$2y$10$w46Q5YwHsmBgbYn7VxGACONXwgApFdcmeOYh52jDOwtss94airWGC', 1),
('riansyah22', '$2y$10$l7AsAZ5RjlpHGa7tFYjH4uk6LRnk8mOdFCm5Ll72xVe//1MGDP/eC', 1),
('riansyh22', '$2y$10$W5EJYyRxYh3O58uRg9yw2eAv/.8jTO0bKjFrcF5gLPGsCnrzanX6i', 1),
('rizalh', '$2y$10$EzqYznGw2xW2wcgL0ZjS3OSbyRjQpsRZuHbD6dMnwljMkbTafADLu', 1),
('rizalhaha', '$2y$10$6XS8BQx0Ie24Y9QV.GCttuOMIebQqYX2Xs4.FdGwOw5jB6o7RRIFe', 2),
('rizalhaji', '$2y$10$76VrZ/DYFw3wNNy2d0wLE.2djlUJNr0jPFQ/gHd7i1qZL5BOb5vyS', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_data`
--

CREATE TABLE `users_data` (
  `username` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '-',
  `nama` varchar(30) NOT NULL DEFAULT ' ',
  `no_hp` varchar(12) NOT NULL DEFAULT '-',
  `email` varchar(30) NOT NULL DEFAULT '-',
  `instagram` varchar(20) NOT NULL DEFAULT '-',
  `user_id` int(11) NOT NULL,
  `foto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_data`
--

INSERT INTO `users_data` (`username`, `nama`, `no_hp`, `email`, `instagram`, `user_id`, `foto`) VALUES
('riansyah22', 'Rian', '089660254544', 'Rianfebriansyah22@gmail.com', 'rian', 9, ''),
('riansyh22', 'Rian Febriansyah', '089660254544', 'Rianfebriansyah22@gmail.com', 'riansyh', 10, ' '),
('rizalhaha', 'Rizal herliansyah', '089651983134', 'rizalmultimedia@gmail.com', '@rizalhh4', 11, ' '),
('rizalh', 'Rizal', '089651983134', 'rizalmultimedia2@gmail.com', '@rizalhajihidayat', 12, '5fcf29cc435a6.png'),
('mystogan', 'rizal', '089651983134', 'rizalmultimeddia2@gmail.com', '@rizalhh', 13, '5fc6ee5587eaf.png'),
('evosroar', 'rian febriansyah', '082121231312', 'rian@gmail.com', '@riansyh', 14, '5fc6efd343c74.png'),
('rizalhaji', 'rizalhaha', '089651983134', 'rizalmultimedia2@gmail.com', '@rizalhaha', 15, ''),
('gelasbotol', 'rizalhidayat', '2121212', 'rizalmultimedia2@gmail.com', '20012001', 16, '5fc78f5146924.png'),
('botolkecap', 'Rizal', '2012', 'rizalmultimedia2@gmail.com', '20012', 17, NULL),
('budiono', 'Rizal Hidayat', '082134543176', 'rizalmultimedia21@gmail.com', '@rizalh', 18, '5fcf4ab06465b.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwalpp`
--
ALTER TABLE `jadwalpp`
  ADD KEY `id_payment` (`id_transaksi`),
  ADD KEY `fkusername` (`username`),
  ADD KEY `id_paket_fk` (`id_paket`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_id_paket` (`id_paket`),
  ADD KEY `username_fk` (`username`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12371;

--
-- AUTO_INCREMENT untuk tabel `users_data`
--
ALTER TABLE `users_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwalpp`
--
ALTER TABLE `jadwalpp`
  ADD CONSTRAINT `fkusername` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_paket_fk` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_payment` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_id_paket` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `username_fk` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users_data`
--
ALTER TABLE `users_data`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
