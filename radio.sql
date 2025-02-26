-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2025 at 06:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radio`
--

-- --------------------------------------------------------

--
-- Table structure for table `frecuencia`
--

CREATE TABLE `frecuencia` (
  `NoFrec` int(5) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Programa` varchar(25) NOT NULL,
  `Loc` varchar(50) NOT NULL,
  `Music` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `frecuencia`
--

INSERT INTO `frecuencia` (`NoFrec`, `Nombre`, `Programa`, `Loc`, `Music`) VALUES
(73, 'Trafic Mex', 'El Changoleon', 'David Valenzuela', 'Rock Español'),
(87, 'El Sonidito', 'A Chismear', 'Andres Ponte', 'Banda'),
(99, 'Kiss FM', 'On the Mornings', 'Kevin Clerk', 'Pop'),
(105, 'The OG', 'Shinning Coffe', 'Albert Wesker', 'Indie'),
(189, 'The Rock', 'Wake me when Im Dead', 'James Armstrong', 'Rock');

-- --------------------------------------------------------

--
-- Table structure for table `locutores`
--

CREATE TABLE `locutores` (
  `Nombre` varchar(50) NOT NULL,
  `Apodo` varchar(25) NOT NULL,
  `Programa` varchar(50) NOT NULL,
  `Horario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `locutores`
--

INSERT INTO `locutores` (`Nombre`, `Apodo`, `Programa`, `Horario`) VALUES
('Albert Wesker', 'The Redfiel', 'The OG', '6pm - 10pm'),
('Andres Ponte', 'Dj Calimba', 'A chismear', '1pm - 4pm'),
('David Valenzuela', 'El Monke', 'El Changoleon', '3pm - 6pm'),
('James Armstrong', 'The Senator', 'Wake me when Im Dead', '5pm - 8pm'),
('Kevin Clerk', 'Dj Monsoon', 'On the Mornings', '9 - 12');

-- --------------------------------------------------------

--
-- Table structure for table `musica`
--

CREATE TABLE `musica` (
  `Musica` varchar(25) NOT NULL,
  `NoFrec` int(5) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Art` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `musica`
--

INSERT INTO `musica` (`Musica`, `NoFrec`, `Nombre`, `Art`) VALUES
('Banda', 87, 'Cuando me Dejaste', 'Los Tristes'),
('Indie', 105, 'Tomorrow', 'TomatoesJoJos'),
('Pop', 99, 'Pick me up', 'Rolling Marie'),
('Rock', 189, 'Paparatzi', 'Carnival'),
('Rock Español', 73, 'Tal como Ayer', 'Cafe para Raton');

-- --------------------------------------------------------

--
-- Table structure for table `programa`
--

CREATE TABLE `programa` (
  `Programa` varchar(25) NOT NULL,
  `Horario` varchar(25) NOT NULL,
  `Tipo` varchar(25) NOT NULL,
  `Loc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `programa`
--

INSERT INTO `programa` (`Programa`, `Horario`, `Tipo`, `Loc`) VALUES
('A Chismear', '1pm - 4pm', 'Social', 'Andres Ponte'),
('El Changoleon', '3pm - 6pm', 'Comedia ', 'David Valenzuela'),
('On the Mornings', '9 - 12', 'Comedia', 'Kevin Clerk'),
('The OG', '6pm - 10pm', 'Noticias y Social', 'Albert Wesker'),
('Wake me when Im Dead', '5pm - 8pm', 'Noticias y Comedia', 'James Armstrong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frecuencia`
--
ALTER TABLE `frecuencia`
  ADD PRIMARY KEY (`NoFrec`),
  ADD UNIQUE KEY `Loc` (`Loc`,`Music`),
  ADD KEY `Music` (`Music`);

--
-- Indexes for table `locutores`
--
ALTER TABLE `locutores`
  ADD PRIMARY KEY (`Nombre`),
  ADD UNIQUE KEY `Programa` (`Programa`);

--
-- Indexes for table `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`Musica`);

--
-- Indexes for table `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`Programa`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `frecuencia`
--
ALTER TABLE `frecuencia`
  ADD CONSTRAINT `frecuencia_ibfk_1` FOREIGN KEY (`Loc`) REFERENCES `locutores` (`Nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frecuencia_ibfk_2` FOREIGN KEY (`Music`) REFERENCES `musica` (`Musica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `locutores`
--
ALTER TABLE `locutores`
  ADD CONSTRAINT `locutores_ibfk_1` FOREIGN KEY (`Programa`) REFERENCES `programa` (`Programa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
