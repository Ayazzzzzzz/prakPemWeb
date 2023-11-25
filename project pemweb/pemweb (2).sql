-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2023 pada 11.16
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `nama` varchar(30) NOT NULL,
  `kualifikasi` text NOT NULL,
  `contact` int(11) NOT NULL,
  `dokterID` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`nama`, `kualifikasi`, `contact`, `dokterID`, `lokasi`) VALUES
('Dr. Miranda S.S.', 'dokter anak nyehe', 123244, 1, 'Sadewa'),
('A', 'fyguijop', 34567, 2, 'Sadewa'),
('b', 'fcghjkl;', 5678, 3, 'Upn'),
('c', ' ccvbnm', 678, 4, 'Upn'),
('D', 'ftyguiop', 7890, 5, 'Sadewa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`first_name`, `last_name`, `email`, `contact`, `message`) VALUES
('laras', 'sari', 'larasayodya04@gmail.', 0, 'masuk ga?'),
('laras', 'sari', 'larasayodya04@gmail.', 2147483647, 'masuk ga?'),
('apa', 'sari', 'larasayodya04@gmail.', 2147483647, 'kedouble ga?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan`
--

CREATE TABLE `kunjungan` (
  `parent_name` varchar(30) NOT NULL,
  `children_name` varchar(30) NOT NULL,
  `troubling_symptoms` varchar(30) NOT NULL,
  `addictional_information` text NOT NULL,
  `children_age` int(3) NOT NULL,
  `visit_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `pasienID` int(11) NOT NULL,
  `dokterID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kunjungan`
--

INSERT INTO `kunjungan` (`parent_name`, `children_name`, `troubling_symptoms`, `addictional_information`, `children_age`, `visit_date`, `status`, `pasienID`, `dokterID`) VALUES
('mamah gweh', 'gweh', 'plu', 'bersin bersin mulu gweh, ampe cape asli ', 19, '2023-11-30', 0, 1, 1),
('bapak sepuh', 'sepuh', 'penyakit merendah sampe inti b', 'aku mah masih pemula, ajarin dong puh sepuh~', 99, '2023-11-28', 1, 2, 1),
('bapak sepuh', 'sepuh', 'penyakit merendah', 'aku mah masih pemula, ajarin dong puh sepuh~', 99, '2023-11-28', 1, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `password` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  `birth date` date NOT NULL,
  `riwayat` varchar(50) NOT NULL,
  `kunjungan` date NOT NULL,
  `address` text NOT NULL,
  `pasienID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`password`, `email`, `first_name`, `last_name`, `contact`, `birth date`, `riwayat`, `kunjungan`, `address`, `pasienID`) VALUES
('akukaya', 'larasayodya04@gmail.com', 'laras', 'sari', 1010, '2004-07-15', 'tipes', '2023-11-29', 'ya disitu lah pokoknya, pake nanya.', 1),
('puhsepuh', 'sepuh999@gmail.com', 'sepuh', 'inti bumi', 871281872, '1999-08-12', 'gaada', '2023-11-01', 'di rumah para sepuh inti bumi ', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`dokterID`);

--
-- Indeks untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD KEY `pasienID` (`pasienID`),
  ADD KEY `dokterID` (`dokterID`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`pasienID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `dokterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `pasienID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `kunjungan_ibfk_1` FOREIGN KEY (`pasienID`) REFERENCES `pasien` (`pasienID`),
  ADD CONSTRAINT `kunjungan_ibfk_2` FOREIGN KEY (`dokterID`) REFERENCES `dokter` (`dokterID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
