-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Baza danych: `kalkulator`
-- Struktura tabeli `wynik`


CREATE TABLE `wynik` (
  `idwynik` int(11) NOT NULL,
  `kwota` double NOT NULL,
  `lat` int(11) NOT NULL,
  `procent` double NOT NULL,
  `rata` double NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;


-- Wstawienie danych do tabeli `wynik`


INSERT INTO `wynik` (`idwynik`, `kwota`, `lat`, `procent`, `rata`, `data`) VALUES
(1, 999, 10, 3, 24.975, '2021-05-16 11:12:56');


-- ID dla tabeli `wynik`

ALTER TABLE `wynik`
  ADD PRIMARY KEY (`idwynik`);


-- automatyczna inkrementacja dla tabeli `wynik`

ALTER TABLE `wynik`
  MODIFY `idwynik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
