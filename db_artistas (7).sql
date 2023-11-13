-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 03:15 AM
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
-- Database: `db_artistas`
--

-- --------------------------------------------------------

--
-- Table structure for table `albumes`
--

CREATE TABLE `albumes` (
  `id_album` int(11) NOT NULL,
  `id_artista` int(11) DEFAULT NULL,
  `album` varchar(55) DEFAULT NULL,
  `nro_canciones` int(11) DEFAULT NULL,
  `fecha_publicacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `albumes`
--

INSERT INTO `albumes` (`id_album`, `id_artista`, `album`, `nro_canciones`, `fecha_publicacion`) VALUES
(3, 4, 'Por lo menos hoy', 12, 2014),
(5, 5, 'Ver más Nada Personal ', 12, 2014),
(6, 3, ' Mi sangre', 14, 2018),
(7, 2, 'Escuchar el viento', 14, 2019),
(8, 4, 'Despedazado por mil partes', 11, 2016),
(10, 6, 'Emmanuel', 666, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `artistas`
--

CREATE TABLE `artistas` (
  `id_artista` int(11) NOT NULL,
  `artista` varchar(50) DEFAULT NULL,
  `nro_albumes` int(11) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artistas`
--

INSERT INTO `artistas` (`id_artista`, `artista`, `nro_albumes`, `pais`) VALUES
(2, 'Ricardo Arjona', 25, 'Guatemala'),
(3, 'Emanuel San Roman', 1, 'Argentina'),
(4, 'No te va a gustar', 17, 'Uruguay'),
(5, 'Soda Stereo', 17, 'Argentina'),
(6, 'Anuel AA', 12, 'PuertoRico'),
(8, 'Los piojos', 28, 'Argentina');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`) VALUES
(0, 'webadmin', '$2y$10$AgDg51Nsiwuwtxk82YbEBev77/8bAyo8cC.64wkxOC5arY.2.eM6W'),
(1, 'webadmin@gmail.com', '$2y$10$B6yQcMfUQgy5wWY1KVKGiegsVSWYrvK3Y4BIHI3zTXfFZDvHWgEmK'),
(2, 'pentagrama23@gmail.com', '$2y$10$8eODt0puVu4kxm3/dvhRlOhEbXqueRrt4XGM/YoTCU3ng7kyClUHi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albumes`
--
ALTER TABLE `albumes`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `id_artista` (`id_artista`);

--
-- Indexes for table `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id_artista`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albumes`
--
ALTER TABLE `albumes`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id_artista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albumes`
--
ALTER TABLE `albumes`
  ADD CONSTRAINT `albumes_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `artistas` (`id_artista`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
