-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2019 at 04:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mesero`
--

-- --------------------------------------------------------

--
-- Table structure for table `bebida`
--

CREATE TABLE `bebida` (
  `ID_bebida` int(11) NOT NULL,
  `nombre_b` varchar(50) NOT NULL,
  `clasificacion` int(11) NOT NULL,
  `descripcion_b` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bebida`
--

INSERT INTO `bebida` (`ID_bebida`, `nombre_b`, `clasificacion`, `descripcion_b`) VALUES
(1, 'Frapuccino (Clasico)', 1, 'Es un café con hielo cubierto de espuma elaborado a partir de café instantáneo.'),
(2, 'Mocha (Chocolate)', 1, 'Es una variante del café con leche. \r\nPreparado con un tercio de expreso y dos tercios de leche vaporizada,añadiendo una parte de jarabe de chocolate, agregando la famosa espuma de leche encima y canela.');

-- --------------------------------------------------------

--
-- Table structure for table `clasificacion`
--

CREATE TABLE `clasificacion` (
  `ID_clasificacion` int(11) NOT NULL,
  `nombre_clasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clasificacion`
--

INSERT INTO `clasificacion` (`ID_clasificacion`, `nombre_clasi`) VALUES
(1, 'Frio');

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `ID_persona` int(11) NOT NULL,
  `nombre_p` varchar(50) NOT NULL,
  `apellido1_p` varchar(50) NOT NULL,
  `apellido2_p` varchar(50) NOT NULL,
  `fnacimiento` date NOT NULL,
  `rolF` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`ID_persona`, `nombre_p`, `apellido1_p`, `apellido2_p`, `fnacimiento`, `rolF`, `email`, `password`) VALUES
(1, 'Yesenia', 'Leonel', 'Vera', '1996-08-29', 2, 'yesenia@gmial.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `ID_rol` int(11) NOT NULL,
  `nombre_rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`ID_rol`, `nombre_rol`) VALUES
(1, 'Comensal'),
(2, 'Mesero'),
(3, 'Cocinero'),
(4, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bebida`
--
ALTER TABLE `bebida`
  ADD PRIMARY KEY (`ID_bebida`),
  ADD KEY `clasificacion` (`clasificacion`);

--
-- Indexes for table `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`ID_clasificacion`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ID_persona`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `rolF` (`rolF`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_rol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bebida`
--
ALTER TABLE `bebida`
  MODIFY `ID_bebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `ID_clasificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `ID_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bebida`
--
ALTER TABLE `bebida`
  ADD CONSTRAINT `bebida_ibfk_1` FOREIGN KEY (`clasificacion`) REFERENCES `clasificacion` (`ID_clasificacion`);

--
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`rolF`) REFERENCES `rol` (`ID_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
