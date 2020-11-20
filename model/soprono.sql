-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 18 nov. 2020 à 20:56
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
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_text` varchar(255) NOT NULL,
  `is_valid_answer` tinyint(1) NOT NULL,
  `answer_question_id` int(11) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`answer_id`, `answer_text`, `is_valid_answer`, `answer_question_id`) VALUES
(1, 'Ronaldo', 1, 1),
(2, 'Real Madrid', 1, 2),
(3, 'PSG', 0, 2),
(4, 'Manchester United', 0, 2),
(5, 'Juventus', 0, 2),
(6, 'France', 0, 3),
(7, 'Portugal', 1, 3),
(8, 'Espagne', 0, 3),
(9, '2', 1, 4),
(10, 'Allemagne', 0, 5),
(11, 'Grèce', 1, 5),
(12, 'Italie', 0, 5),
(13, 'Eder', 1, 6),
(14, 'Hazard', 0, 6),
(15, 'Ronaldo', 0, 6);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_title` varchar(255) NOT NULL,
  `question_quizz_id` int(11) NOT NULL,
  `question_input_type` varchar(255) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`question_id`, `question_title`, `question_quizz_id`, `question_input_type`) VALUES
(1, 'question1', 1, 'Le nom du capitaine du Portugal ?'),
(2, 'question2', 1, 'Quel club est le plus ancien d\'Europe ?'),
(3, 'question3', 1, 'Quel est le pays d\'Europe qui a gagné le dernier Euro ?'),
(4, 'question4', 1, 'Combien de fois la France a t\'elle remporté l\'Euro?'),
(5, 'question5', 1, 'Quel pays a remporté l\'Euro en 2004 ?'),
(6, 'question6', 1, ' Quel est le joueur qui a marqué le but assasin en finale du dernier Euro ?');

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
CREATE TABLE IF NOT EXISTS `quizz` (
  `quizz_id` int(11) NOT NULL AUTO_INCREMENT,
  `quizz_name` varchar(255) NOT NULL,
  PRIMARY KEY (`quizz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`quizz_id`, `quizz_name`) VALUES
(1, 'quizz1');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `user_mail`, `birth_date`, `password`) VALUES
(1, 'johnny', 'hall', 'johnny.hall@gmail.com', '2020-11-28', '$2y$10$TyzRtefZPyASwPWRIrhKmOQuwl8FmxEjT0GPCYbGpC0ZVQk7Fu7tG'),
(2, 'james', 'bond', 'jamesbond@007.com', '2020-11-04', '$2y$10$poWAT385zURtHCC7.uuUU.pJJwdfb026mU6bNurEW33E4nOB4ZNGK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
