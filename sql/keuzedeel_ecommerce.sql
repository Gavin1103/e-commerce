-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 jun 2021 om 19:13
-- Serverversie: 10.4.19-MariaDB
-- PHP-versie: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuzedeel_ecommerce`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ecommerce`
--

CREATE TABLE `ecommerce` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `price` float NOT NULL,
  `thema` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `ecommerce`
--

INSERT INTO `ecommerce` (`id`, `name`, `img`, `price`, `thema`) VALUES
(1, 'Battlefield 6', 'battlefield.jpg', 99.99, ''),
(2, 'Cyber Punk', 'cyberpunk.jpg', 69.99, ''),
(3, 'FIFA 22', 'fifa.png', 39.99, ''),
(4, 'Minecraft', 'minecraft.jpg', 19.99, '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `ecommerce`
--
ALTER TABLE `ecommerce`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `ecommerce`
--
ALTER TABLE `ecommerce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
