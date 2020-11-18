-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 18 nov. 2020 à 09:38
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `soprono`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `idanswer` int(11) NOT NULL AUTO_INCREMENT,
  `answertext` varchar(255) NOT NULL,
  `correctanswer` tinyint(1) NOT NULL,
  `idanswerquestion` int(11) NOT NULL,
  PRIMARY KEY (`idanswer`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
CREATE TABLE IF NOT EXISTS `quizz` (
  `idquizz` int(11) NOT NULL,
  `namequizz` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idquizz`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_mail` (`user_mail`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `user_mail`, `birth_date`, `password`) VALUES
(1, 'johnny', 'johnny', 'johnny.hall@gmail.com', '1928-03-12', 'test'),
(2, 'john', 'smith', 'smith@hotmail.com', '1965-12-12', 'patate'),
(3, 'james', 'bond', 'jamesbond@007.com', '2000-12-12', '$2y$10$EWNub8JDVS4SXzB3JXkk0OleYxKUQ8iE/kHjuVGykP1aUO9jPep.O'),
(4, 'jean', 'lartiste', 'jean@test.com', '1977-10-12', '$2y$10$bOra50KLhT25OrN18JLYiuTG.nUqCOdQ6FA9.ZHUMNYouGtLcVcBK'),
(5, 'prenom', 'quartierlatin', 'mail@mail.com', '2010-12-12', '$2y$10$Ph1a4nhV2UE/UGkiXded1OrpbFjL4dQqJjSrMxGkYv0054ndcy20S'),
(6, 'prenom', 'quartierlatin2', 'mail2@mail.com', '2010-12-12', '$2y$10$2rnKCQKraNMEpVoGIukwRet3yUPBgG0umJ1s75Z7jZaFkQZ.Xb41O'),
(7, 'testdelavie', 'testefficace', 'testdumail@mail.com', '2034-12-13', '$2y$10$QiGuC2NYI37FFnOuUDdDHeuoZV8FCcaLDccmUqiGOQS9mTW5E0RQe'),
(8, 'testdupass', 'test', 'passdutest@olive.fr', '2000-09-20', '$2y$10$syc9KSqMegaGAabn6GO0h.g9JKdtqm8qWRn9ALH8Dkdp7SWUQs1Ye'),
(9, 'pourleprof', 'capture', 'exemple@mail.com', '2020-12-12', '$2y$10$gTs37wTMSZeFZ1Q1B.tExeu9sTAUXqKBG6.ZlU977fa1c8ItvAOa.'),
(10, 'raclette', 'fondue', 'hiver@raclette.com', '2015-12-15', '$2y$10$KNDWB5V3C26fBJsyOgJyWu5qplJmPO8Q9bUshbMio5M/IX3nbMvNO'),
(11, 'test3', 'test1', 'test4@gmail.com', '2020-11-18', '$2y$10$ArGHigySCAt7IOHnIJeNxOoM/CeZZj7qoOpQNLY9Ct8YiNY7rlxkW');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
