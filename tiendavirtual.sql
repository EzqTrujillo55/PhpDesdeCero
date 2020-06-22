-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 04:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiendavirtual`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombreCategoria`) VALUES
(1, 'Tecnología');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `categoria` varchar(15) NOT NULL,
  `precio` double NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `precio`, `foto`) VALUES
(21, 'cámara web', 'Tecnología', 50, '../imagenes/camara-web-microsoft-lifecam-studio-q2f-00013-hd-1080p.jpg'),
(22, 'dell', 'Tecnología', 500, '../imagenes/Captura.JPG'),
(23, 'cámara web', 'Tecnología', 50, '../imagenes/camara-web-microsoft-lifecam-studio-q2f-00013-hd-1080p.jpg'),
(24, 'cámara web', 'Tecnología', 50, '../imagenes/camara-web-microsoft-lifecam-studio-q2f-00013-hd-1080p.jpg'),
(25, 'dell', 'Tecnología', 50, '../imagenes/Captura.JPG'),
(26, 'dell', 'Tecnología', 50, '../imagenes/Captura.JPG'),
(27, 'dell', 'Tecnología', 50, '../imagenes/Captura.JPG'),
(28, 'dell', 'Tecnología', 50, '../imagenes/Captura.JPG'),
(29, 'dell', 'Tecnología', 50, '../imagenes/Captura.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombreUsuario` varchar(10) NOT NULL,
  `clave` text NOT NULL,
  `rol` varchar(10) NOT NULL,
  `permisoProductos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombreUsuario`, `clave`, `rol`, `permisoProductos`) VALUES
(1, 'pablo', '12345', 'ADMIN', 0),
(2, 'pablo2', '$2y$10$0fLb/Xc0grni1olhBAEvFu2rY/Lwq0WaM1kIlx5Qr.uJswZV8JeZa', 'ADMIN', 0),
(3, 'gaby', '$2y$10$pzZbG7bdrI8jcJYXD636LOUVu/YVROBJwp1.QOHjx8UiswNJXaTxO', 'ADMIN', 0),
(4, 'pablo', '$2y$10$bvWuWmHTeP66G5VD9e7ITOiuLWBw3zYRbjPiEksSnPtrBS5jbpdhW', 'CLIENTE', 0),
(5, 'javier', '$2y$10$ESFfQh904cVTsJazVzLOCOwuBdb7mGZsGezARdTtqbPP1iZ5vA87m', 'CLIENTE', 0),
(6, 'lux', '$2y$10$275WWlSXVUGq.U4PsqNWpuIPpo41W9lCr6sAkH45MbNV9CFDlMSIe', 'CLIENTE', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
