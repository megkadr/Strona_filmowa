-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Kwi 2020, 16:36
-- Wersja serwera: 10.1.40-MariaDB
-- Wersja PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `filmy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmyy`
--

CREATE TABLE `filmyy` (
  `id_filmu` int(11) NOT NULL,
  `tytul` varchar(40) COLLATE utf8_polish_ci DEFAULT NULL,
  `dlugosc` time DEFAULT NULL,
  `link_zdj` varchar(40) COLLATE utf8_polish_ci DEFAULT NULL,
  `premiera` date DEFAULT NULL,
  `id_rezysera` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `link` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `filmyy`
--

INSERT INTO `filmyy` (`id_filmu`, `tytul`, `dlugosc`, `link_zdj`, `premiera`, `id_rezysera`, `id_kategori`, `link`) VALUES
(1, 'Zielona mila', '03:08:00', NULL, '1999-12-06', 1, 1, 'filmy\\obrazki\\1.jpg'),
(2, 'Skazani na Shawshank', '02:22:00', NULL, '1994-09-10', 1, 1, 'filmy\\obrazki\\2.jpg'),
(3, 'Forrest Gump', '02:22:00', NULL, '1994-06-23', 2, 1, 'filmy\\obrazki\\3.jpg'),
(4, 'Matrix', '02:16:00', NULL, '1999-03-24', 3, 3, 'filmy\\obrazki\\4.jpg'),
(5, 'Avatar', '02:42:00', NULL, '2009-12-10', 4, 5, 'filmy\\obrazki\\5.jpg'),
(6, 'Shrek', '01:30:00', NULL, '2001-04-22', 5, 6, 'filmy\\obrazki\\6.jpg'),
(7, 'Szeregowiec Ryan', '02:50:00', NULL, '1998-07-14', 6, 7, 'filmy\\obrazki\\7.jpg'),
(8, 'Titanic', '03:14:00', NULL, '1997-11-01', 4, 8, 'filmy\\obrazki\\8.jpg'),
(9, 'Pulp Fiction', '02:34:00', NULL, '1994-05-12', 7, 12, 'filmy\\obrazki\\9.jpg'),
(10, 'Nietykalni', '01:52:00', NULL, '2011-07-23', 8, 9, 'filmy\\obrazki\\10.jpg'),
(11, 'Incepcja', '02:28:00', NULL, '2010-07-08', 10, 10, 'filmy\\obrazki\\11.jpg'),
(12, 'Rango', '01:47:00', NULL, '2011-02-14', 9, 6, 'filmy\\obrazki\\12.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `karty`
--

CREATE TABLE `karty` (
  `id` int(11) NOT NULL,
  `numer` varchar(16) COLLATE utf8_polish_ci DEFAULT NULL,
  `datka` varchar(5) COLLATE utf8_polish_ci DEFAULT NULL,
  `pin` varchar(4) COLLATE utf8_polish_ci DEFAULT NULL,
  `CAV2` varchar(3) COLLATE utf8_polish_ci DEFAULT NULL,
  `imie` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `nazwisko` varchar(30) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategoria`
--

CREATE TABLE `kategoria` (
  `id_kategori` int(11) NOT NULL,
  `gatunek` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kategoria`
--

INSERT INTO `kategoria` (`id_kategori`, `gatunek`) VALUES
(1, 'Dramat'),
(2, 'Komedia'),
(3, 'Akcja'),
(4, 'Kryminał'),
(5, 'Sci-Fi'),
(6, 'Animacja'),
(7, 'Wojenny'),
(8, 'Melodramat'),
(9, 'Biograficzny'),
(10, 'Surrealistyczny'),
(11, 'Fantasy'),
(12, 'Gangsterski');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `id_filmu` int(11) DEFAULT NULL,
  `ocena` int(11) DEFAULT NULL,
  `id_uzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `oceny`
--

INSERT INTO `oceny` (`id_filmu`, `ocena`, `id_uzytkownika`) VALUES
(1, 10, 1),
(4, 8, 2),
(6, 10, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezyser`
--

CREATE TABLE `rezyser` (
  `id_rezysera` int(11) NOT NULL,
  `imie` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `Nazwisko` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rezyser`
--

INSERT INTO `rezyser` (`id_rezysera`, `imie`, `Nazwisko`) VALUES
(1, 'Frank', 'Darabont'),
(2, 'Robert', 'Zemeckis'),
(3, 'Lilly', 'Wachowski'),
(4, 'James', 'Cameron'),
(5, 'Andrew', 'Adamson'),
(6, 'Steven', 'Spielberg'),
(7, 'Quentin', 'Tarantino'),
(8, 'Olivier', 'Nakache'),
(9, 'Gore', 'Verbinski'),
(10, '    Christopher', 'Nolan');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytkownika` int(11) NOT NULL,
  `nick` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `haslo` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzytkownika`, `nick`, `haslo`, `email`) VALUES
(1, 'Artur', 'Rezmer', 'przyklad@onet.pl'),
(2, 'Frank', 'Sinatra', 'sintra.frank@wp.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmyy`
--
ALTER TABLE `filmyy`
  ADD PRIMARY KEY (`id_filmu`),
  ADD KEY `id_rezysera` (`id_rezysera`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeksy dla tabeli `karty`
--
ALTER TABLE `karty`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeksy dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD KEY `id_filmu` (`id_filmu`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

--
-- Indeksy dla tabeli `rezyser`
--
ALTER TABLE `rezyser`
  ADD PRIMARY KEY (`id_rezysera`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytkownika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `filmyy`
--
ALTER TABLE `filmyy`
  MODIFY `id_filmu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `karty`
--
ALTER TABLE `karty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `kategoria`
--
ALTER TABLE `kategoria`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `rezyser`
--
ALTER TABLE `rezyser`
  MODIFY `id_rezysera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `filmyy`
--
ALTER TABLE `filmyy`
  ADD CONSTRAINT `filmyy_ibfk_1` FOREIGN KEY (`id_rezysera`) REFERENCES `rezyser` (`id_rezysera`),
  ADD CONSTRAINT `filmyy_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategoria` (`id_kategori`);

--
-- Ograniczenia dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD CONSTRAINT `oceny_ibfk_1` FOREIGN KEY (`id_filmu`) REFERENCES `filmyy` (`id_filmu`),
  ADD CONSTRAINT `oceny_ibfk_2` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id_uzytkownika`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
