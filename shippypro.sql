-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ago 12, 2022 alle 19:40
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shippypro`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `airports`
--

CREATE TABLE `airports` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `airports`
--

INSERT INTO `airports` (`id`, `name`, `code`, `latitude`, `longitude`) VALUES
('24e12a22-ab94-4412-b2c5-347278084973', 'Marsiglia', 'MRS', 43.4384, 5.21441),
('508a68fe-bda9-4658-8405-800c9c551848', 'Los-Angeles-International', 'LAX', 33.9416, -118.409),
('6f16a4a6-4baa-4163-8bca-c668a98548a4', 'Milano-Malpensa', 'MXP', 45.6301, 8.72553),
('c18398f5-ff73-43b8-a845-5e87adf2a3be', 'Parigi-Charles-de-Gaulle', 'CDG', 49.0083, 2.55079),
('ea67dc36-21f7-4a09-a161-ed049ee3fc0f', 'Casablanca', 'CMN', 33.3625, -7.58151);

-- --------------------------------------------------------

--
-- Struttura della tabella `flights`
--

CREATE TABLE `flights` (
  `code_departure` varchar(255) NOT NULL,
  `code_arrival` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `flights`
--

INSERT INTO `flights` (`code_departure`, `code_arrival`, `price`) VALUES
('CDG', 'LAX', 0),
('CMN', 'CDG', 0),
('CMN', 'LAX', 900),
('LAX', 'CMN', 800),
('MRS', 'CMN', 300),
('MXP', 'LAX', 1358),
('MXP', 'MRS', 300);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`code_departure`,`code_arrival`,`price`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
