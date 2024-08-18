-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Aug 2024 um 20:54
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be22_exam6_bigeventskutayaltan`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product_controller`
--

DROP TABLE IF EXISTS `product_controller`;
CREATE TABLE `product_controller` (
  `id` int(11) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `product_controller`
--

INSERT INTO `product_controller` (`id`, `ename`, `date`, `time`, `image`, `type`, `email`, `url`) VALUES
(1, 'Summer Festival', '2024-08-30', '14:00:00', 'https://cdn.pixabay.com/photo/2023/01/01/16/35/street-7690347_960_720.jpg', 'Family', 'family@event.com', 'https://codefactory.wien/en/home-en/'),
(2, 'Football 2024', '2024-08-31', '12:00:00', 'https://cdn.pixabay.com/photo/2015/01/26/22/40/child-613199_960_720.jpg', 'Sport', 'sports@event.com', 'https://codefactory.wien/en/home-en/'),
(3, 'Bungee jumping', '2024-09-03', '10:00:00', 'https://cdn.pixabay.com/photo/2010/11/25/bungy-184_1280.jpg', 'Extreme', 'extreme@mail.com', 'https://codefactory.wien/en/home-en/'),
(4, 'Danube swimming event', '2024-08-25', '09:00:00', 'https://cdn.pixabay.com/photo/2014/09/21/15/15/ironman-455138_960_720.jpg', 'Sport', 'sports@event.com', 'https://codefactory.wien/en/home-en/'),
(5, 'Underground Theatre', '2024-08-20', '20:45:00', 'https://cdn.pixabay.com/photo/2015/05/20/22/58/old-cinema-776296_960_720.jpg', 'Theatre', 'movie@event.com', 'https://codefactory.wien/en/home-en/'),
(6, 'F1 Red Bull Ring', '2024-09-28', '15:00:00', 'https://cdn.pixabay.com/photo/2017/08/06/07/55/car-2590057_960_720.jpg', 'Sport', 'sport@event.com', 'https://codefactory.wien/en/home-en/');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `product_controller`
--
ALTER TABLE `product_controller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `product_controller`
--
ALTER TABLE `product_controller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
