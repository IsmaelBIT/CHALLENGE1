-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 jan 2020 om 15:15
-- Serverversie: 10.1.38-MariaDB
-- PHP-versie: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toets-op6`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `te_laat`
--

CREATE TABLE `te_laat` (
  `id` int(11) NOT NULL,
  `naam_student` varchar(100) NOT NULL,
  `klas` varchar(4) DEFAULT NULL,
  `aantal_minuten` int(4) DEFAULT NULL,
  `reden_student` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `te_laat`
--

INSERT INTO `te_laat` (`id`, `naam_student`, `klas`, `aantal_minuten`, `reden_student`) VALUES
(1, 'Piet', '10B', 14, 'Verslapen want mijn wekker ging niet af. Stroom was gisteren uitgevallen en mijn GSM was leeg.'),
(2, 'Annabel', '10B', 3, 'De tram had een lekke band en de conducteur kon hem niet snel plakken.'),
(3, 'Mustafa', '10D', 18, 'Ik heb een wekker van De Action. En die doen het niet goed.'),
(4, 'Jack', '10A', 120, 'Ik had gisteren een feestje en het werd nogal gezellig.'),
(5, 'Nora', '10A', 33, 'Had vanochtend echt even geen zin in school.'),
(9, 'Aron', '10C', 0, 'Komt nooit te laat!');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `te_laat`
--
ALTER TABLE `te_laat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `te_laat`
--
ALTER TABLE `te_laat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
