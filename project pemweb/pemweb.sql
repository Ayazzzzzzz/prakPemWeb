-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 07:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikelID` int(5) NOT NULL,
  `Gambar` text NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Keterangan` text NOT NULL,
  `Selengkapnya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikelID`, `Gambar`, `Judul`, `Keterangan`, `Selengkapnya`) VALUES
(1, 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/08/19122651/Anak-Mimisan-saat-Tidur-Perlukah-ke-Dokter_.jpg.webp', 'Anak Mimisan saat Tidur, Perlukah ke Dokter?', '“Mimisan adalah kondisi yang umum dialami anak-anak. Atasi dengan pertolon...', 'https://www.halodoc.com/artikel/search/anak'),
(2, 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/08/24085853/Catat-Ini-Pertolongan-Pertama-saat-Anak-Saki-Perut.jpg.webp', 'Anak Cacingan? Waspadai Berbagai Komplikasinya', '“Jangan abaikan jika anak cacingan. Kondisi ini dapat menyebabkan komplika...', 'https://www.halodoc.com/artikel/anak-cacingan-waspadai-berbagai-komplikasinya'),
(3, 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/08/16054638/anak-berani-ikut-lomba-ini-manfaatnya.jpg.webp', 'Anak Sudah Berani Ikut Lomba? Ini 4 Manfaatnya!', '“Ada beberapa manfaat dari mengikuti lomba 17 Agustus bagi anak. Salah satun...', 'https://www.halodoc.com/artikel/anak-sudah-berani-ikut-lomba-ini-4-manfaatnya'),
(4, 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/08/02041522/Anak-Usia-3-Tahun-Perlu-Disekolahkan-atau-Tidak_.jpg.webp', 'Anak Usia 3 Tahun Perlu Disekolahkan atau Tidak?', '“Sebenarnya mendaftarkan sekolah untuk anak usia tiga tahun boleh iya, boleh tida...', 'https://www.halodoc.com/artikel/anak-usia-3-tahun-perlu-disekolahkan-atau-tidak'),
(5, 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/06/15232643/787079D9-DBB8-42F2-8FB5-2EDE7A2D19A9.jpeg.webp', 'Anak Alami Tantrum, Perlukah ke Psikolog?', 'Anak yang masih berusia di bawah lima tahun sangat rentan mengalami tantrum, yaitu...', 'https://www.halodoc.com/artikel/anak-alami-tantrum-perlukah-ke-psikolog'),
(6, 'https://d1bpj0tv6vfxyp.cloudfront.net/articles/380010_16-4-2021_11-55-38.webp', 'Anak Terkena Hemofilia, Ini yang Perlu Diperhatikan Orangtua', 'Hemofilia adalah kondisi ketika darah tidak dapat membeku sebagaimana mestinya...', 'https://www.halodoc.com/artikel/anak-terkena-hemofilia-ini-yang-perlu-diperhatikan-orangtua'),
(7, 'https://d1bpj0tv6vfxyp.cloudfront.net/articles/6f427d68-8182-4739-87d5-a719726b0b02_article_image_url.webp', 'Anak Kecanduan Gadget, Orangtua Lakukan 5 Hal Ini', 'Seiring berkembangnya zaman, teknologi menjadi hal yang sulit dipisahkan...', 'https://www.halodoc.com/artikel/anak-kecanduan-gadget-orangtua-lakukan-5-hal-ini'),
(8, 'https://d1bpj0tv6vfxyp.cloudfront.net/articles/222965_11-12-2020_22-48-37.webp', 'Anak Sering Jajan Berlebihan, Ketahui 3 Bahayanya', 'Saat di sekolah, ada beragam jajanan yang bisa dibelinya karena bentuknya yang...', 'https://www.halodoc.com/artikel/anak-sering-jajan-berlebihan-ketahui-3-bahayanya'),
(9, 'https://d1bpj0tv6vfxyp.cloudfront.net/articles/f21479ac-f97a-498e-a1ff-138b6b356a59_article_image_url.webp', 'Anak Malas Sikat Gigi, Ikuti 5 Trik Ini', 'Rutin menyikat gigi menjadi salah satu cara yang bisa dilakukan untuk merawat...', 'https://www.halodoc.com/artikel/anak-malas-sikat-gigi-ikuti-5-trik-ini'),
(10, 'https://d1bpj0tv6vfxyp.cloudfront.net/articles/e2b678c8-acee-41d6-b3ba-1b16f55b2136_article_image_url.webp', 'Anak Terlambat Jalan dan Bicara Tanda Alami Dispraksia?', 'Dispraksia merupakan kondisi medis yang mempengaruhi koordinasi gerak tubuh,...', 'https://www.halodoc.com/artikel/anak-terlambat-jalan-dan-bicara-tanda-alami-dispraksia'),
(11, 'https://d1bpj0tv6vfxyp.cloudfront.net/articles/e48c03b6-d735-4d34-8d42-a24181396b32_article_image_url.webp', 'Anak Mudah Marah dan Tersinggung, Hati-Hati Gejala ODD', 'Kebanyakan anak-anak memang kadang-kadang sulit diatur dan cenderung suka melanggar...', 'https://www.halodoc.com/artikel/anak-mudah-marah-dan-tersinggung-hati-hati-gejala-odd'),
(12, 'https://d1bpj0tv6vfxyp.cloudfront.net/articles/85454974-2df4-4fbc-9416-b65fb7318145_article_image_url.webp', 'Anak Kesulitan Belajar, Perhatikan Hal Tidak Biasa Ini', 'Anak kesulitan belajar? Bisa jadi ia mengalami gangguan belajar. Gangguan...', 'https://www.halodoc.com/artikel/anak-kesulitan-belajar-perhatikan-hal-tidak-biasa-ini');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `foto` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kualifikasi` text NOT NULL,
  `biaya` varchar(20) NOT NULL,
  `dokterID` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`foto`, `nama`, `kualifikasi`, `biaya`, `dokterID`, `lokasi`) VALUES
('dokter1.avif', 'Dr. Anisa Dewi, Sp.A.', 'Pediatric Pulmonologist', '500.000-750.000', 1, 'RSKIA Sadewa'),
('dokter2.avif', 'Dr. Aditya Pratama, Sp.A.', 'Pediatric Pulmonologist', '650.000-900.000', 2, 'RSKIA Pratama UPN'),
('dokter3.avif', 'Dr. Siti Nurul Huda, Sp.A.', 'Pediatric Pulmonologist', '550.000-800.000', 3, 'RSKIA UGM'),
('dokter4.avif', 'Dr. Maya Indriani, Sp.A.', 'Pediatric Pulmonologist', '600.000-850.000', 4, 'RSKIA Hermina'),
('dokter5.avif', 'Dr. Rina Fitriani, Sp.A.', 'Pediatric Pulmonologist', '450.000-700.000', 5, 'RSKIA Permata Bunda'),
('dokter6.jpg', 'Dr. Putri Handayani, Sp.A.', 'Pediatric Pulmonologist', '700.000-950.000', 6, 'RSKIA Fajar'),
('dokter6.jpg', 'Dr. Amanda Surya, Sp.A.', 'Pediatric Hematologist', '500.000-700.000', 7, 'RSKIA Sadewa'),
('dokter5.avif', 'Dr. Ratna Cahaya, Sp.A.', 'Pediatric Hematologist', '550.000-750.000', 8, 'RSKIA Pratama UPN'),
('dokter4.avif', 'Dr. Nina Kusuma, Sp.A.', 'Pediatric Hematologist', '600.000-800.000', 9, 'RSKIA UGM'),
('dokter3.avif', 'Dr. Dian Pertiwi, Sp.A.', 'Pediatric Pulmonologist', '550.000-750.000', 10, 'RSKIA Hermina'),
('dokter2.avif', 'Dr. Aditya Wijaya, Sp.A.', 'Pediatric Hematologist', '550.000-750.000', 11, 'RSKIA Permata Bunda'),
('dokter1.avif', 'Dr. Maya Putri, Sp.A.', 'Pediatric Hematologist', '600.000-800.000', 12, 'RSKIA Fajar');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`first_name`, `last_name`, `email`, `contact`, `message`) VALUES
('laras', 'sari', 'larasayodya04@gmail.', 0, 'masuk ga?'),
('laras', 'sari', 'larasayodya04@gmail.', 2147483647, 'masuk ga?'),
('apa', 'sari', 'larasayodya04@gmail.', 2147483647, 'kedouble ga?');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`parent_name`, `children_name`, `troubling_symptoms`, `addictional_information`, `children_age`, `visit_date`, `status`, `pasienID`, `dokterID`) VALUES
('mamah gweh', 'gweh', 'plu', 'bersin bersin mulu gweh, ampe cape asli ', 19, '2023-11-30', 0, 1, 1),
('bapak sepuh', 'sepuh', 'penyakit merendah sampe inti b', 'aku mah masih pemula, ajarin dong puh sepuh~', 99, '2023-11-28', 1, 2, 1),
('bapak sepuh', 'sepuh', 'penyakit merendah', 'aku mah masih pemula, ajarin dong puh sepuh~', 99, '2023-11-28', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `birth_date` date NOT NULL,
  `riwayat` varchar(50) NOT NULL,
  `kunjungan` date NOT NULL,
  `address` text NOT NULL,
  `pasienID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`password`, `email`, `first_name`, `last_name`, `contact`, `birth_date`, `riwayat`, `kunjungan`, `address`, `pasienID`) VALUES
('akukaya', 'larasayodya04@gmail.com', 'laras', 'sari', '1010', '2004-07-15', 'tipes', '2023-11-29', 'ya disitu lah pokoknya, pake nanya.', 1),
('puhsepuh', 'sepuh999@gmail.com', 'sepuh', 'inti bumi', '871281872', '1999-08-12', 'gaada', '2023-11-01', 'di rumah para sepuh inti bumi ', 2),
('123220074', 'shintanc@gmail.com', 'Shinta', 'Nursobah', '085526397492', '2004-03-12', 'Anemia', '2023-12-20', 'Jl. Dirgantara', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikelID`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`dokterID`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD KEY `pasienID` (`pasienID`),
  ADD KEY `dokterID` (`dokterID`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`pasienID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikelID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `dokterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `pasienID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `kunjungan_ibfk_1` FOREIGN KEY (`pasienID`) REFERENCES `pasien` (`pasienID`),
  ADD CONSTRAINT `kunjungan_ibfk_2` FOREIGN KEY (`dokterID`) REFERENCES `dokter` (`dokterID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
