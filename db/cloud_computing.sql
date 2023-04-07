-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Creato il: Apr 07, 2023 alle 09:30
-- Versione del server: 8.0.32
-- Versione PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud_computing`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `accounts`
--

CREATE TABLE `accounts` (
  `id` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `id_gender` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dump dei dati per la tabella `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `first_name`, `last_name`, `dob`, `id_gender`) VALUES
(1, 'Mattehxx', '$2y$10$UOAG8hK1WRgEuE.e8sr/ZOfc.UpP33Lc05DCRAgY/pPHb7LjLo2HS', 'Matteo', 'Rovellini', '2004-04-11', 1),
(2, 'Pytaoffi', '$2y$10$MlsjkqFB0QmPxnVsfFhPbOzkU0kQHqytx6uKyyjGmELpEzyA0b/dW', 'Federico', 'Petrera', '2023-03-01', 1),
(3, 'Forno', '$2y$10$nwUaSErIU.kbEYkq4fuAVecUVnN9sLapdyTuuZtt1YzuZGs8c060S', 'Simone', 'Fornoni', '2022-11-15', 3),
(4, 'Aelio', '$2y$10$zLYvAhR5Da7UeFTMjiUMMeyFioabYpcHRk7fo2h5UpXcung552nye', 'Elio', 'Aliaj', '2004-10-31', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `gender`
--

CREATE TABLE `gender` (
  `id` int NOT NULL,
  `value` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dump dei dati per la tabella `gender`
--

INSERT INTO `gender` (`id`, `value`) VALUES
(1, 'male'),
(2, 'female'),
(3, 'other');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `FK__gender` (`id_gender`);

--
-- Indici per le tabelle `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT per la tabella `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `FK__gender` FOREIGN KEY (`id_gender`) REFERENCES `gender` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
