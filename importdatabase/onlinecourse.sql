-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 05:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinecourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `tentang_kelas` text NOT NULL,
  `slug` varchar(250) NOT NULL,
  `url_video` varchar(250) NOT NULL,
  `img` text NOT NULL,
  `tools` text NOT NULL,
  `pelajari` text NOT NULL,
  `sistemoperasi` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `rom` varchar(50) NOT NULL,
  `premium` varchar(20) NOT NULL,
  `price` varchar(50) NOT NULL,
  `sertifikat` int(11) NOT NULL,
  `konsultasi` int(11) NOT NULL,
  `sekalibayar` int(11) NOT NULL,
  `langganan` int(11) NOT NULL,
  `pemateri` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `img_pemateri` text NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `part` varchar(50) NOT NULL,
  `demo_project` text NOT NULL,
  `sertifikat_kelas` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `screenshot1` text NOT NULL,
  `screenshot2` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `title`, `tentang_kelas`, `slug`, `url_video`, `img`, `tools`, `pelajari`, `sistemoperasi`, `ram`, `rom`, `premium`, `price`, `sertifikat`, `konsultasi`, `sekalibayar`, `langganan`, `pemateri`, `jabatan`, `img_pemateri`, `tingkat`, `part`, `demo_project`, `sertifikat_kelas`, `kategori`, `screenshot1`, `screenshot2`, `created_at`, `updated_at`) VALUES
(2, 'Codeigniter 4 Part 1', 'Pengenalan CODEIGNITER 4 ke 1', 'codeigniter-4-part-1', 'https://www.youtube.com/embed/DieNZPwIUoQ', './upload/course/Course-1613833969.jpeg', 'codeigniter;xampp;sublime', 'pengenalan codeigniter;dasar dasar codeigniter;', 'windows;linux;mac os', '4 gb', '10 gb', 'Premium', '250000', 0, 0, 0, 0, 'Gilang Permana Putra', 'senior programmer', './upload/pemateri/Pemateri-1613833969.jpeg', 'Semua Level', 'codeigniter 4', 'https://web.telegram.org/#/im?p=@CryptoPuzzleGroup', './upload/sertifikat/Sertifikat-1613833969.png', 'Development', './upload/screenshot/Screenshot1-1613833969.jpeg', './upload/screenshot/Screenshot2-1613833969.png', '2021-02-20 15:12:49', '2021-02-20 15:12:49'),
(3, 'Codeigniter 4 Part 2', 'pendalaman codeigniter', 'codeigniter-4-part-2', 'https://www.youtube.com/embed/DieNZPwIUoQ', './upload/course/Course-1613834055.jpeg', 'codeigniter;xampp;sublime', 'pendalaman codeigniter;routing, templateing dll', 'windows;linux;mac os', '4 gb', '10 gb', 'Premium', '250000', 0, 0, 0, 0, 'Gilang Permana Putra', 'senior programmer', './upload/pemateri/Pemateri-1613834055.png', 'Semua Level', 'codeigniter 4', 'https://web.telegram.org/#/im?p=@CryptoPuzzleGroup', './upload/sertifikat/Sertifikat-1613834056.jpeg', 'Development', './upload/screenshot/Screenshot1-1613834056.png', './upload/screenshot/Screenshot2-1613834056.png', '2021-02-20 15:14:16', '2021-02-20 15:14:16'),
(4, 'Lumen Part 1', 'belajar lumen', 'lumen-part-1', 'https://www.youtube.com/embed/DieNZPwIUoQ', './upload/course/Course-1613834149.png', 'codeigniter;xampp;sublime', 'belajar lumen; pengenalan lumen;', 'windows;linux;mac os', '4 gb', '10 gb', 'Premium', '200000', 0, 0, 0, 0, 'Gilang Permana Putra', 'senior programmer', './upload/pemateri/Pemateri-1613834149.jpeg', 'Semua Level', 'codeigniter 4', 'https://web.telegram.org/#/im?p=@CryptoPuzzleGroup', './upload/sertifikat/Sertifikat-1613834149.jpeg', 'Development', './upload/screenshot/Screenshot1-1613834149.jpeg', './upload/screenshot/Screenshot2-1613834149.jpeg', '2021-02-20 15:15:50', '2021-02-20 15:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$VqvEv2Df2c.ni/zhhoYwP.9aFekFRfKUjv5iVlu11Yq6H6khCek0W', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
