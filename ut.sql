-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2022 at 05:22 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ut`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido_paterno` varchar(250) NOT NULL,
  `apellido_materno` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `correo`, `id_cargo`) VALUES
(1, 'Josue', 'Cardona', 'Velazquez', 'example@mail.com', 1),
(3, 'Alejandro', 'Martinez', 'Muñoz', 'Ale1@gmail.com', 1),
(4, 'Alejandro', 'Martinez', 'Martinez', 'martinez@mail.com', 2),
(5, 'manuel', 'sanchez', 'moreno', 'manuel@gmial.com', 2),
(6, 'Juan', 'Martinez', 'Perez', 'juan@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `asesores`
--

CREATE TABLE `asesores` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellidos` text NOT NULL,
  `correo` text NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `asesores`
--

INSERT INTO `asesores` (`id`, `nombre`, `apellidos`, `correo`, `contrasena`, `id_cargo`) VALUES
(1, 'Maestro', 'martinez', 'ejemplo@mail.com', '123456', 2),
(2, 'Maestro2', 'lucas', 'example1@mail.com', '12345', 2),
(4, 'Maria', 'Fernanda', 'Example4@mail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id`, `descripcion`) VALUES
(1, 'admin'),
(2, 'alumno'),
(3, 'maestro');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comentarios`
--

CREATE TABLE `tbl_comentarios` (
  `co_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `comentarios` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comentario_nombre` varchar(40) CHARACTER SET utf8 NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_contrato_laboral`
--

CREATE TABLE `tb_contrato_laboral` (
  `id` int(11) NOT NULL,
  `fname` text CHARACTER SET latin1 NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_control_seguimiento`
--

CREATE TABLE `tb_control_seguimiento` (
  `id` int(11) NOT NULL,
  `fname` text CHARACTER SET latin1 NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_entrevista_final`
--

CREATE TABLE `tb_entrevista_final` (
  `id` int(11) NOT NULL,
  `fname` text CHARACTER SET latin1 NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_reporte_avance`
--

CREATE TABLE `tb_reporte_avance` (
  `id` int(11) NOT NULL,
  `fname` text CHARACTER SET latin1 NOT NULL,
  `name` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `correo`, `contrasena`, `id_cargo`) VALUES
(1, 'Josue Cardona Velazquez', 'Josue', 'example@mail.com', '12345', 2),
(2, 'Juan Perez Martinez', 'Juan P', 'example2@mail.com', '12345', 3),
(3, 'Adrian Garza', 'Admin', 'admin@mail.com', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `descripcion` (`descripcion`);

--
-- Indexes for table `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `tb_contrato_laboral`
--
ALTER TABLE `tb_contrato_laboral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_control_seguimiento`
--
ALTER TABLE `tb_control_seguimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_entrevista_final`
--
ALTER TABLE `tb_entrevista_final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_reporte_avance`
--
ALTER TABLE `tb_reporte_avance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `asesores`
--
ALTER TABLE `asesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_contrato_laboral`
--
ALTER TABLE `tb_contrato_laboral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_control_seguimiento`
--
ALTER TABLE `tb_control_seguimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_entrevista_final`
--
ALTER TABLE `tb_entrevista_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_reporte_avance`
--
ALTER TABLE `tb_reporte_avance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
