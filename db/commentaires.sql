-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2021 at 08:30 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_billet` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_billet`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(1, 1, 'Simon', 'Vas-y mon gars !!!', '2021-05-07 23:58:46'),
(2, 1, 'Un gars', 'Un truc', '2021-05-09 21:59:49'),
(3, 2, 'Lui', 'C\'est pas moi, c\'est lui !', '2021-05-14 22:00:10'),
(4, 3, 'Elliot', 'Are you really here ?', '2021-05-15 15:27:44'),
(5, 4, 'Simon', 'Mais quel morceau !', '2021-05-17 22:00:31'),
(6, 4, 'Hito', 'Tu m\'étonnes !', '2021-05-17 22:01:31'),
(7, 5, 'Simon', 'Meilleur groupe au monde !', '2021-05-16 22:02:45'),
(8, 5, 'Hito', 'Certes, mais un petit Psychonaut régulièrement ça fait du bien !', '2021-05-16 22:05:45'),
(9, 6, 'Visiteur anonyme', 'Blablablame Confusion', '2021-05-17 22:07:20'),
(10, 7, 'Julia', 'Hé ! On parle de moi ici ?', '2021-05-17 22:07:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
