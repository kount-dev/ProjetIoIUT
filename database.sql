-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 20 Juin 2013 à 21:07
-- Version du serveur: 5.5.29
-- Version de PHP: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `bdd_ioiut`
--

-- --------------------------------------------------------

--
-- Structure de la table `acos`
--

DROP TABLE IF EXISTS `acos`;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=177 ;

--
-- Contenu de la table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 2),
(2, NULL, NULL, NULL, 'administrateur', 3, 4),
(3, NULL, NULL, NULL, 'controllers', 5, 290),
(4, 3, NULL, NULL, 'Disciplines', 6, 17),
(5, 4, NULL, NULL, 'index', 7, 8),
(6, 4, NULL, NULL, 'view', 9, 10),
(7, 4, NULL, NULL, 'add', 11, 12),
(8, 4, NULL, NULL, 'edit', 13, 14),
(9, 4, NULL, NULL, 'delete', 15, 16),
(10, 3, NULL, NULL, 'Exercises', 18, 45),
(11, 10, NULL, NULL, 'index', 19, 20),
(12, 10, NULL, NULL, 'view', 21, 22),
(13, 10, NULL, NULL, 'add', 23, 24),
(14, 10, NULL, NULL, 'edit', 25, 26),
(15, 10, NULL, NULL, 'delete', 27, 28),
(16, 3, NULL, NULL, 'GroupLists', 46, 57),
(17, 16, NULL, NULL, 'index', 47, 48),
(18, 16, NULL, NULL, 'view', 49, 50),
(19, 16, NULL, NULL, 'add', 51, 52),
(20, 16, NULL, NULL, 'edit', 53, 54),
(21, 16, NULL, NULL, 'delete', 55, 56),
(22, 3, NULL, NULL, 'Groups', 58, 69),
(23, 22, NULL, NULL, 'index', 59, 60),
(24, 22, NULL, NULL, 'view', 61, 62),
(25, 22, NULL, NULL, 'add', 63, 64),
(26, 22, NULL, NULL, 'edit', 65, 66),
(27, 22, NULL, NULL, 'delete', 67, 68),
(28, 3, NULL, NULL, 'IutGroups', 70, 81),
(29, 28, NULL, NULL, 'index', 71, 72),
(30, 28, NULL, NULL, 'view', 73, 74),
(31, 28, NULL, NULL, 'add', 75, 76),
(32, 28, NULL, NULL, 'edit', 77, 78),
(33, 28, NULL, NULL, 'delete', 79, 80),
(34, 3, NULL, NULL, 'Pages', 82, 85),
(35, 34, NULL, NULL, 'display', 83, 84),
(42, 3, NULL, NULL, 'Users', 86, 109),
(43, 42, NULL, NULL, 'index', 87, 88),
(44, 42, NULL, NULL, 'view', 89, 90),
(45, 42, NULL, NULL, 'add', 91, 92),
(46, 42, NULL, NULL, 'edit', 93, 94),
(47, 42, NULL, NULL, 'delete', 95, 96),
(48, 42, NULL, NULL, 'login', 97, 98),
(49, 42, NULL, NULL, 'logout', 99, 100),
(50, 3, NULL, NULL, 'AclExtras', 110, 111),
(51, 3, NULL, NULL, 'DebugKit', 112, 119),
(52, 51, NULL, NULL, 'ToolbarAccess', 113, 118),
(53, 52, NULL, NULL, 'history_state', 114, 115),
(54, 52, NULL, NULL, 'sql_explain', 116, 117),
(61, 3, NULL, NULL, 'Questions', 120, 141),
(62, 61, NULL, NULL, 'index', 121, 122),
(63, 61, NULL, NULL, 'view', 123, 124),
(64, 61, NULL, NULL, 'add', 125, 126),
(65, 61, NULL, NULL, 'edit', 127, 128),
(66, 61, NULL, NULL, 'delete', 129, 130),
(74, 10, NULL, NULL, 'load', 29, 30),
(77, 10, NULL, NULL, 'valider', 31, 32),
(78, 10, NULL, NULL, 'saveFromPost', 33, 34),
(79, 10, NULL, NULL, 'saveInstance', 35, 36),
(80, 3, NULL, NULL, 'ExercisesDisciplines', 142, 153),
(81, 80, NULL, NULL, 'index', 143, 144),
(82, 80, NULL, NULL, 'view', 145, 146),
(83, 80, NULL, NULL, 'add', 147, 148),
(84, 80, NULL, NULL, 'edit', 149, 150),
(85, 80, NULL, NULL, 'delete', 151, 152),
(86, 3, NULL, NULL, 'ExercisesQuestions', 154, 165),
(87, 86, NULL, NULL, 'index', 155, 156),
(88, 86, NULL, NULL, 'view', 157, 158),
(89, 86, NULL, NULL, 'add', 159, 160),
(90, 86, NULL, NULL, 'edit', 161, 162),
(91, 86, NULL, NULL, 'delete', 163, 164),
(92, 3, NULL, NULL, 'Qcus', 166, 209),
(93, 92, NULL, NULL, 'index', 167, 168),
(94, 92, NULL, NULL, 'load', 169, 170),
(97, 92, NULL, NULL, 'valider', 171, 172),
(98, 92, NULL, NULL, 'saveFromPost', 173, 174),
(99, 92, NULL, NULL, 'saveInstance', 175, 176),
(100, 92, NULL, NULL, 'view', 177, 178),
(101, 92, NULL, NULL, 'add', 179, 180),
(102, 92, NULL, NULL, 'edit', 181, 182),
(103, 92, NULL, NULL, 'delete', 183, 184),
(104, 3, NULL, NULL, 'QuestionTypes', 210, 221),
(105, 104, NULL, NULL, 'index', 211, 212),
(106, 104, NULL, NULL, 'view', 213, 214),
(107, 104, NULL, NULL, 'add', 215, 216),
(108, 104, NULL, NULL, 'edit', 217, 218),
(109, 104, NULL, NULL, 'delete', 219, 220),
(111, 3, NULL, NULL, 'QuestionsDisciplines', 222, 233),
(112, 111, NULL, NULL, 'index', 223, 224),
(113, 111, NULL, NULL, 'view', 225, 226),
(114, 111, NULL, NULL, 'add', 227, 228),
(115, 111, NULL, NULL, 'edit', 229, 230),
(116, 111, NULL, NULL, 'delete', 231, 232),
(124, 42, NULL, NULL, 'leaderboard', 101, 102),
(125, 42, NULL, NULL, 'sortleaderboard', 103, 104),
(126, 3, NULL, NULL, 'Answers', 234, 263),
(127, 126, NULL, NULL, 'index', 235, 236),
(128, 126, NULL, NULL, 'displayUserLog', 237, 238),
(129, 126, NULL, NULL, 'displayByIdExercise', 239, 240),
(130, 126, NULL, NULL, 'displayByIdUser', 241, 242),
(131, 126, NULL, NULL, 'view', 243, 244),
(132, 126, NULL, NULL, 'add', 245, 246),
(133, 126, NULL, NULL, 'edit', 247, 248),
(134, 126, NULL, NULL, 'delete', 249, 250),
(135, 126, NULL, NULL, 'saveAnswer', 251, 252),
(136, 126, NULL, NULL, 'generationXML', 253, 254),
(137, 126, NULL, NULL, 'readXMLAnswer', 255, 256),
(138, 126, NULL, NULL, 'feedback', 257, 258),
(139, 126, NULL, NULL, 'successRate', 259, 260),
(140, 126, NULL, NULL, 'scoreEnFonctionNbRealisations', 261, 262),
(141, 10, NULL, NULL, 'displayXmlToHtml', 37, 38),
(142, 10, NULL, NULL, 'import', 39, 40),
(143, 10, NULL, NULL, 'listByUser', 41, 42),
(144, 10, NULL, NULL, 'display', 43, 44),
(145, 92, NULL, NULL, 'displayXmlToHtml', 185, 186),
(146, 92, NULL, NULL, 'displayWithReponses', 187, 188),
(147, 92, NULL, NULL, 'correction', 189, 190),
(148, 92, NULL, NULL, 'saveQuestion', 191, 192),
(149, 92, NULL, NULL, 'saveEditQuestion', 193, 194),
(150, 92, NULL, NULL, 'addChoice', 195, 196),
(151, 92, NULL, NULL, 'addEditChoice', 197, 198),
(152, 92, NULL, NULL, 'generationXML', 199, 200),
(153, 92, NULL, NULL, 'import', 201, 202),
(154, 92, NULL, NULL, 'getQuestionType', 203, 204),
(155, 92, NULL, NULL, 'checkDtdUpload', 205, 206),
(156, 92, NULL, NULL, 'saveUploadQuestion', 207, 208),
(157, 3, NULL, NULL, 'Qos', 264, 277),
(158, 157, NULL, NULL, 'load', 265, 266),
(159, 157, NULL, NULL, 'executeToHTML', 267, 268),
(160, 157, NULL, NULL, 'add', 269, 270),
(161, 157, NULL, NULL, 'valider', 271, 272),
(162, 157, NULL, NULL, 'saveFromPost', 273, 274),
(163, 157, NULL, NULL, 'saveInstance', 275, 276),
(164, 61, NULL, NULL, 'import', 131, 132),
(165, 61, NULL, NULL, 'getQuestionType', 133, 134),
(166, 61, NULL, NULL, 'checkDtdUpload', 135, 136),
(167, 61, NULL, NULL, 'saveUploadQuestion', 137, 138),
(168, 61, NULL, NULL, 'saveQuestion', 139, 140),
(169, 42, NULL, NULL, 'admin', 105, 106),
(170, 42, NULL, NULL, 'initDB', 107, 108),
(171, 3, NULL, NULL, 'ExerciseGroupLists', 278, 289),
(172, 171, NULL, NULL, 'index', 279, 280),
(173, 171, NULL, NULL, 'view', 281, 282),
(174, 171, NULL, NULL, 'add', 283, 284),
(175, 171, NULL, NULL, 'edit', 285, 286),
(176, 171, NULL, NULL, 'delete', 287, 288);

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namefile` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `exercise_id` int(11) NOT NULL,
  `attempt_number` int(11) NOT NULL,
  `success_rate` float DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `answers`
--

INSERT INTO `answers` (`id`, `namefile`, `user_id`, `exercise_id`, `attempt_number`, `success_rate`, `created`, `modified`) VALUES
(16, '16_2013-06-09.xml', 11, 1, 12, 100, '2013-06-09 19:29:06', '2013-06-09 19:29:06'),
(17, '17_2013-06-09.xml', 10, 1, 13, 100, '2013-06-09 19:29:36', '2013-06-09 19:29:36'),
(18, '18_2013-06-09.xml', 11, 1, 3, 100, '2013-06-09 19:33:48', '2013-06-09 19:33:48');

-- --------------------------------------------------------

--
-- Structure de la table `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 20),
(3, NULL, 'Group', 2, NULL, 21, 24),
(5, 1, 'User', 8, NULL, 2, 3),
(6, 1, 'User', 9, NULL, 4, 5),
(7, 1, 'User', 10, NULL, 6, 7),
(8, 1, 'User', 11, NULL, 8, 9),
(9, 1, 'User', 12, NULL, 10, 11),
(10, 1, 'User', 8, NULL, 12, 13),
(11, 1, 'User', 9, NULL, 14, 15),
(12, 1, 'User', 10, NULL, 16, 17),
(13, 3, 'User', 11, NULL, 22, 23),
(14, 1, 'User', 12, NULL, 18, 19);

-- --------------------------------------------------------

--
-- Structure de la table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 3, '1', '1', '1', '1'),
(2, 3, 3, '-1', '-1', '-1', '-1'),
(3, 3, 129, '1', '1', '1', '1'),
(4, 3, 138, '1', '1', '1', '1'),
(5, 3, 124, '1', '1', '1', '1'),
(6, 3, 44, '1', '1', '1', '1'),
(7, 3, 143, '1', '1', '1', '1'),
(8, 3, 144, '1', '1', '1', '1'),
(9, 3, 135, '1', '1', '1', '1'),
(10, 3, 130, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Structure de la table `disciplines`
--

DROP TABLE IF EXISTS `disciplines`;
CREATE TABLE `disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `disciplines`
--

INSERT INTO `disciplines` (`id`, `name`, `created`, `modified`) VALUES
(1, 'CSS', '2013-03-22 15:21:43', '2013-03-22 15:21:43'),
(2, 'HTML', '2013-03-22 15:21:53', '2013-03-22 15:21:53'),
(3, 'PHP', '2013-03-22 15:22:04', '2013-03-22 15:22:04'),
(4, 'Framework', '2013-03-22 15:22:25', '2013-03-22 15:22:25');

-- --------------------------------------------------------

--
-- Structure de la table `exercises`
--

DROP TABLE IF EXISTS `exercises`;
CREATE TABLE `exercises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `minimum_points` int(11) NOT NULL,
  `opening_date` datetime DEFAULT NULL,
  `closing_date` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `exercises`
--

INSERT INTO `exercises` (`id`, `name`, `minimum_points`, `opening_date`, `closing_date`, `user_id`, `created`, `modified`) VALUES
(1, 'Exercise', 0, '2013-03-30 15:20:00', '2014-04-15 15:20:00', 4, '2013-06-07 12:15:11', '2013-06-09 13:50:47'),
(2, 'Exercise 2', 0, '2013-03-30 15:20:00', '2014-04-15 15:20:00', 4, '2013-06-07 12:15:39', '2013-06-07 12:15:39'),
(3, 'Exercise 3', 0, '2013-03-30 15:20:00', '2014-04-15 15:20:00', 4, '2013-06-07 12:15:55', '2013-06-09 16:10:59');

-- --------------------------------------------------------

--
-- Structure de la table `exercises_disciplines`
--

DROP TABLE IF EXISTS `exercises_disciplines`;
CREATE TABLE `exercises_disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_id` int(11) NOT NULL,
  `discipline_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `exercises_disciplines`
--

INSERT INTO `exercises_disciplines` (`id`, `exercise_id`, `discipline_id`, `created`, `modified`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 4, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 3, 2, NULL, NULL),
(6, 3, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `exercises_questions`
--

DROP TABLE IF EXISTS `exercises_questions`;
CREATE TABLE `exercises_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `exercises_questions`
--

INSERT INTO `exercises_questions` (`id`, `exercise_id`, `question_id`, `created`, `modified`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 3, 7, NULL, NULL),
(8, 3, 8, NULL, NULL),
(9, 3, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `exercise_group_lists`
--

DROP TABLE IF EXISTS `exercise_group_lists`;
CREATE TABLE `exercise_group_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_id` int(11) NOT NULL,
  `iut_group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `exercise_group_lists`
--

INSERT INTO `exercise_group_lists` (`id`, `exercise_id`, `iut_group_id`, `created`, `modified`) VALUES
(1, 2, 1, '2013-06-09 12:50:11', '2013-06-09 12:53:08'),
(2, 1, 1, NULL, NULL),
(3, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'administrateur', '2013-03-18 18:20:01', '2013-03-18 18:20:01'),
(2, 'eleve', '2013-06-07 12:25:25', '2013-06-07 12:25:25');

-- --------------------------------------------------------

--
-- Structure de la table `group_lists`
--

DROP TABLE IF EXISTS `group_lists`;
CREATE TABLE `group_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `iut_group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `group_lists`
--

INSERT INTO `group_lists` (`id`, `user_id`, `iut_group_id`, `created`, `modified`) VALUES
(8, 11, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `iut_groups`
--

DROP TABLE IF EXISTS `iut_groups`;
CREATE TABLE `iut_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `iut_groups`
--

INSERT INTO `iut_groups` (`id`, `name`, `created`, `modified`) VALUES
(1, '2A', '2013-06-09 10:27:54', '2013-06-09 10:27:54'),
(2, '1A', '2013-06-09 10:56:59', '2013-06-09 10:56:59');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namefile` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `points` int(10) NOT NULL,
  `difficulty` int(10) NOT NULL,
  `question_type_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `questions`
--

INSERT INTO `questions` (`id`, `namefile`, `user_id`, `points`, `difficulty`, `question_type_id`, `created`, `modified`) VALUES
(1, 'qcu_1_2013-06-07.xml', 4, 1, 3, 1, '2013-06-07 12:15:12', '2013-06-09 17:08:20'),
(2, 'qcu_2_2013-06-07.xml', 4, 5, 3, 1, '2013-06-07 12:15:13', '2013-06-07 12:15:13'),
(3, 'qcu_3_2013-06-07.xml', 4, 3, 3, 1, '2013-06-07 12:15:14', '2013-06-07 12:15:14'),
(4, 'qcu_4_2013-06-07.xml', 4, 1, 3, 1, '2013-06-07 12:15:40', '2013-06-07 12:15:40'),
(5, 'qcu_5_2013-06-07.xml', 4, 5, 3, 1, '2013-06-07 12:15:41', '2013-06-07 12:15:41'),
(6, 'qcu_6_2013-06-07.xml', 4, 3, 3, 1, '2013-06-07 12:15:42', '2013-06-07 12:15:42'),
(7, 'qcu_7_2013-06-07.xml', 4, 1, 3, 1, '2013-06-07 12:15:56', '2013-06-07 12:15:56'),
(8, 'qcu_8_2013-06-07.xml', 4, 5, 3, 1, '2013-06-07 12:15:57', '2013-06-07 12:15:57'),
(9, 'qcu_9_2013-06-07.xml', 4, 3, 3, 1, '2013-06-07 12:15:58', '2013-06-07 12:15:58');

-- --------------------------------------------------------

--
-- Structure de la table `questions_disciplines`
--

DROP TABLE IF EXISTS `questions_disciplines`;
CREATE TABLE `questions_disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `discipline_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `questions_disciplines`
--

INSERT INTO `questions_disciplines` (`id`, `question_id`, `discipline_id`, `created`, `modified`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 4, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 3, 3, NULL, NULL),
(6, 3, 4, NULL, NULL),
(7, 4, 1, NULL, NULL),
(8, 4, 4, NULL, NULL),
(9, 5, 2, NULL, NULL),
(10, 5, 4, NULL, NULL),
(11, 6, 3, NULL, NULL),
(12, 6, 4, NULL, NULL),
(13, 7, 1, NULL, NULL),
(14, 7, 4, NULL, NULL),
(15, 8, 2, NULL, NULL),
(16, 8, 4, NULL, NULL),
(17, 9, 3, NULL, NULL),
(18, 9, 4, NULL, NULL),
(31, 17, 3, NULL, NULL),
(32, 17, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `question_types`
--

DROP TABLE IF EXISTS `question_types`;
CREATE TABLE `question_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `controller` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `question_types`
--

INSERT INTO `question_types` (`id`, `name`, `controller`, `created`, `modified`) VALUES
(1, 'Question Ã  choix unique', 'Qcu', '2013-03-22 15:23:03', '2013-03-22 15:23:03'),
(2, 'Question ouverte', 'Qo', '2013-03-22 15:23:49', '2013-03-22 15:23:49');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(40) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `xp` float DEFAULT NULL,
  `actual_rank` int(11) DEFAULT NULL,
  `last_rank` int(11) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `avatar_namefile` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mail`, `xp`, `actual_rank`, `last_rank`, `group_id`, `avatar_namefile`, `created`, `modified`) VALUES
(8, 'florian', '51ba318570e3d416974b93511b0024512bf5dcb4', 'florian@florian.fr', 0, NULL, NULL, 1, NULL, '2013-06-09 19:16:59', '2013-06-09 19:18:03'),
(9, 'louis', 'b28d04149bc5151bfc258aa7c01f605d354f81ef', 'louis@louis.fr', 0, NULL, NULL, 1, NULL, '2013-06-09 19:17:38', '2013-06-09 19:17:38'),
(10, 'quentin', 'aa26144053d99fcff013ff1e96c169d0f7a35401', 'quentin@quentin.fr', 6.03, 2, 1, 1, NULL, '2013-06-09 19:17:56', '2013-06-09 19:17:56'),
(11, 'eleve', 'c7b15743ef49977b9164e2eb2bce1ced7bc1fcf0', 'eleve@eleve.fr', 10.08, 1, 2, 2, NULL, '2013-06-09 19:26:10', '2013-06-09 19:26:10'),
(12, 'administrateur', 'caca30d5ff5ac02b71c2ea2c56f8d3c01dfd4fc0', 'admin@admin.fr', 0, NULL, NULL, 1, NULL, '2013-06-20 21:05:52', '2013-06-20 21:05:52');
