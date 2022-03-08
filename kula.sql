-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Mar 2022, 10:24
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `użytkownicy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kula`
--

CREATE TABLE `kula` (
  `promien` int(11) NOT NULL,
  `wynik` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kula`
--

INSERT INTO `kula` (`promien`, `wynik`, `id`) VALUES
(325626, 77777, 24),
(372144, 88888, 25),
(99999, 418662, 26),
(67, 281, 27),
(900000, 3768000, 28),
(444444, 1860739, 29),
(777777, 3256293, 30),
(777777, 3256293, 31),
(777777, 3256293, 32),
(777777, 3256293, 33),
(777777, 3256293, 34),
(67676767, 283340065, 35);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kula`
--
ALTER TABLE `kula`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kula`
--
ALTER TABLE `kula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
