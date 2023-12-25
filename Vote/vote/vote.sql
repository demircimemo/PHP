-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Ara 2023, 21:14:38
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `vote`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `ip_adress` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `date_` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `voters`
--

INSERT INTO `voters` (`id`, `ip_adress`, `date_`) VALUES
(5, '::1', 1703530439);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `question` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `answerone` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `answertwo` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `answerthree` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `votesone` int(10) UNSIGNED DEFAULT NULL,
  `votestwo` int(10) UNSIGNED DEFAULT NULL,
  `votesthree` int(10) UNSIGNED DEFAULT NULL,
  `totalvotes` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `votes`
--

INSERT INTO `votes` (`id`, `question`, `answerone`, `answertwo`, `answerthree`, `votesone`, `votestwo`, `votesthree`, `totalvotes`) VALUES
(1, 'Which team will be the champion this season?', 'Galatasaray', 'Fenerbahçe', 'Beşiktaş', 8, 2, 2, 12);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
