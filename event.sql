-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 09:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `titre` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `img` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`titre`, `date`, `type`, `description`, `img`) VALUES
('MicroClub Capture The Flag (MCTF)', '2022-09-01', 'salon', 'Micro Club Capture The Flag est un salon\r\nautour de la cyber-sécurité, englobant\r\nconférences, tables rondes et une compétition nationale.', 'ctf.jpg'),
('Red Hat Training Camp', '2022-09-21', 'formation', 'C\'est une formation certifiée de 3 jours.\r\nElle concerne système d’administration linux, virtualisation et cloud computing sur un niveau débutant-intermédiaire.', 'rh.jpg'),
('Algeria Game Challenge (AGC)', '2022-11-16', 'concour', 'c\'est un concours de développement de jeux vidéo destiné aux passionnés du domaine vidéoludique aux quatre coins du\r\npays.', 'agc.jpg'),
('Algeria 2.0', '2022-11-23', 'événement', 'est le plus grand événement WEB\r\net TIC en Afrique.Il a pour but d\'assurer\r\nune mutation vers un avenir numérique.', 'A2.jpg'),
('Algeria Disrupt', '2023-02-08', 'conference', 'Algeria Disrupt est la première édition de «Algeria Disrupt: the annual startup conference » ', 'AD.jpg'),
(' Hacktoberfest', '2022-05-01', 'événement', 'Hacktoberfest est une célébration de l\'open source. C\'est un évènement \r\nPrésenté par Digital OCEAN  etsponsorisé par GitHub \r\n', 'hf.jpg'),
('MLH Local Hack Day', '2022-10-18', 'événement', 'C’est une série d\'événements mondiaux simultanés conçus pour susciter une passion pour la technologie dans votre communauté locale, l’événement compren-\r\ndra 3 parties: Learn, Build et Share.', 'LDH.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
