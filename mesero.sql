-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 09:25 AM
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
(2, 'Mocha (Chocolate)', 1, 'Es una variante del café con leche. \r\nPreparado con un tercio de expreso y dos tercios de leche vaporizada,añadiendo una parte de jarabe de chocolate, agregando la famosa espuma de leche encima y canela.'),
(3, 'Chai (Especies)', 1, 'Consiste en una mezcla de té con especias e hierbas aromáticas'),
(4, 'Espresso', 2, 'Se caracteriza por su rápida preparación y por un sabor y textura más concentrados'),
(5, 'Americano', 2, 'El café americano es la mezcla de agua caliente y café procesado en un máquina de Expreso');

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
(1, 'Frio'),
(2, 'Caliente'),
(3, 'Desayuno'),
(4, 'ComidaSaludable'),
(5, 'ComidaRapida'),
(6, 'Postre');

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
-- Table structure for table `platillo`
--

CREATE TABLE `platillo` (
  `ID_platillo` int(11) NOT NULL,
  `nombre_platillo` varchar(50) NOT NULL,
  `clasificacion_p` int(11) NOT NULL,
  `descripcion_p` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `platillo`
--

INSERT INTO `platillo` (`ID_platillo`, `nombre_platillo`, `clasificacion_p`, `descripcion_p`) VALUES
(2, 'Sandwich tradicional', 3, 'Jamon, Queso mozarella, Lechuga y Tomate con mayonesa'),
(3, 'Enfrijoladas', 3, 'Platillo elaborado con tortillas de maíz que se sumergen en un caldillo espeso de frijoles molidos, enrolladas o dobladas, se sirven en un plato, con queso, cebolla y crema.'),
(4, 'Madre Selva', 4, 'Ensalada con delicada mezcla de lechuga, durazno, queso mosarella, nuez de brasil triturada y trozos de filete de pollo asado con suave aderezo de aceite de oliva.'),
(5, 'César', 4, 'Es una ensalada de lechuga romana y croûtons con jugo de limón, aceite de oliva, huevo, salsa Worcestershire, anchoas, ajo, mostaza de Dijon, queso parmesano y pimienta negra'),
(6, 'Hamburguesa de filete de pollo', 5, '150gr de pollo marinado en mostaza, en pan Artillano con mayonesa de menta al limón, queso Mozarella asado, lechuga, tomate, pepinillos agridulces, licor de naranja.'),
(7, 'Babel', 6, 'Brownie sobre reduccion de balsamico y vino tinto mas helado citron coronado con helado de frutos rojos y galleta de queso parmesano.'),
(8, 'Ursula', 6, 'Torre de suave tortas de cafe marinadas en amaretto, licor de café y ron, entre capas de chocolate, terminada con crema chantilly y frutas de temporada.');

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
-- Indexes for table `platillo`
--
ALTER TABLE `platillo`
  ADD PRIMARY KEY (`ID_platillo`),
  ADD KEY `clasificacion_p` (`clasificacion_p`);

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
  MODIFY `ID_bebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `ID_clasificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `ID_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `platillo`
--
ALTER TABLE `platillo`
  MODIFY `ID_platillo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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

--
-- Constraints for table `platillo`
--
ALTER TABLE `platillo`
  ADD CONSTRAINT `platillo_ibfk_1` FOREIGN KEY (`clasificacion_p`) REFERENCES `clasificacion` (`ID_clasificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
