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
-- Table structure for table `billets`
--

CREATE TABLE `billets` (
  `id` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billets`
--

INSERT INTO `billets` (`id`, `auteur`, `titre`, `contenu`, `date_creation`) VALUES
(1, 'Saimonn', 'Mon premier post !', 'Hey, bienvenue chez vous, on va parler de tout, mais surtout de rien !', '2021-05-07 23:37:33'),
(2, 'Visiteur anonyme', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae cursus dolor, et lobortis ex. Ut id sapien in felis gravida aliquet. Phasellus et sapien non lacus feugiat convallis.', '2021-05-13 12:00:26'),
(3, 'Mr Robot', 'Are you a one or a zero ?', 'But now, his involvement with FSosciety’s ramping up, in super violent ways. Mr. Robot wants Elliot to help [...] smacks down an ultimatum: “Are you a one, or a zero?” Is Elliot in, or out?', '2021-05-15 15:27:43'),
(4, 'Psychonaut', 'Mantra', 'I’m the voice above\r\nA halo on distant skies\r\nIs this a lost cause?\r\nI resent your ways\r\nBut I’m part of you all\r\nAnd so far you’re nothing\r\n\r\nSo hopelessly drown in your egos', '2021-05-16 13:43:20'),
(5, 'Tool', 'Sober', 'There\'s a shadow just behind me\r\nShrouding every step I take\r\nMaking every promise empty\r\nPointing every finger at me.', '2021-05-16 16:44:33'),
(6, 'Blame confusion', 'Laisser faire', 'Rester, dans les vapes\r\nChanger, le mal de place\r\nLaisser faire', '2021-05-10 23:44:57'),
(7, 'Entertainment for the braindead', 'Gamble', 'You are aware the air is thinning. Always anticipate the fall. Can\'t lose a game you thought you\'re winning if you don\'t really play at all. I stare for hours without blinking as reason usually prevails. I know my vessel can\'t be sinking when it has not even set sails. A halted train cannot run off the rails.', '2021-05-12 23:48:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billets`
--
ALTER TABLE `billets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billets`
--
ALTER TABLE `billets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
