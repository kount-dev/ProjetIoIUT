-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 21 Juin 2013 à 08:07
-- Version du serveur: 5.5.29
-- Version de PHP: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `ioiut`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=199 ;

--
-- Contenu de la table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 2),
(2, NULL, NULL, NULL, 'administrateur', 3, 4),
(3, NULL, NULL, NULL, 'controllers', 5, 304),
(4, 3, NULL, NULL, 'Disciplines', 6, 17),
(5, 4, NULL, NULL, 'index', 7, 8),
(6, 4, NULL, NULL, 'view', 9, 10),
(7, 4, NULL, NULL, 'add', 11, 12),
(8, 4, NULL, NULL, 'edit', 13, 14),
(9, 4, NULL, NULL, 'delete', 15, 16),
(10, 3, NULL, NULL, 'Exercises', 18, 41),
(11, 10, NULL, NULL, 'index', 19, 20),
(12, 10, NULL, NULL, 'view', 21, 22),
(13, 10, NULL, NULL, 'add', 23, 24),
(14, 10, NULL, NULL, 'edit', 25, 26),
(15, 10, NULL, NULL, 'delete', 27, 28),
(16, 3, NULL, NULL, 'GroupLists', 42, 53),
(17, 16, NULL, NULL, 'index', 43, 44),
(18, 16, NULL, NULL, 'view', 45, 46),
(19, 16, NULL, NULL, 'add', 47, 48),
(20, 16, NULL, NULL, 'edit', 49, 50),
(21, 16, NULL, NULL, 'delete', 51, 52),
(22, 3, NULL, NULL, 'Groups', 54, 65),
(23, 22, NULL, NULL, 'index', 55, 56),
(24, 22, NULL, NULL, 'view', 57, 58),
(25, 22, NULL, NULL, 'add', 59, 60),
(26, 22, NULL, NULL, 'edit', 61, 62),
(27, 22, NULL, NULL, 'delete', 63, 64),
(28, 3, NULL, NULL, 'IutGroups', 66, 77),
(29, 28, NULL, NULL, 'index', 67, 68),
(30, 28, NULL, NULL, 'view', 69, 70),
(31, 28, NULL, NULL, 'add', 71, 72),
(32, 28, NULL, NULL, 'edit', 73, 74),
(33, 28, NULL, NULL, 'delete', 75, 76),
(34, 3, NULL, NULL, 'Pages', 78, 81),
(35, 34, NULL, NULL, 'display', 79, 80),
(42, 3, NULL, NULL, 'Users', 82, 105),
(43, 42, NULL, NULL, 'index', 83, 84),
(44, 42, NULL, NULL, 'view', 85, 86),
(45, 42, NULL, NULL, 'add', 87, 88),
(46, 42, NULL, NULL, 'edit', 89, 90),
(47, 42, NULL, NULL, 'delete', 91, 92),
(48, 42, NULL, NULL, 'login', 93, 94),
(49, 42, NULL, NULL, 'logout', 95, 96),
(50, 3, NULL, NULL, 'AclExtras', 106, 107),
(51, 3, NULL, NULL, 'DebugKit', 108, 115),
(52, 51, NULL, NULL, 'ToolbarAccess', 109, 114),
(53, 52, NULL, NULL, 'history_state', 110, 111),
(54, 52, NULL, NULL, 'sql_explain', 112, 113),
(61, 3, NULL, NULL, 'Questions', 116, 137),
(62, 61, NULL, NULL, 'index', 117, 118),
(63, 61, NULL, NULL, 'view', 119, 120),
(64, 61, NULL, NULL, 'add', 121, 122),
(65, 61, NULL, NULL, 'edit', 123, 124),
(66, 61, NULL, NULL, 'delete', 125, 126),
(74, 10, NULL, NULL, 'load', 29, 30),
(80, 3, NULL, NULL, 'ExercisesDisciplines', 138, 149),
(81, 80, NULL, NULL, 'index', 139, 140),
(82, 80, NULL, NULL, 'view', 141, 142),
(83, 80, NULL, NULL, 'add', 143, 144),
(84, 80, NULL, NULL, 'edit', 145, 146),
(85, 80, NULL, NULL, 'delete', 147, 148),
(86, 3, NULL, NULL, 'ExercisesQuestions', 150, 161),
(87, 86, NULL, NULL, 'index', 151, 152),
(88, 86, NULL, NULL, 'view', 153, 154),
(89, 86, NULL, NULL, 'add', 155, 156),
(90, 86, NULL, NULL, 'edit', 157, 158),
(91, 86, NULL, NULL, 'delete', 159, 160),
(92, 3, NULL, NULL, 'Qcus', 162, 199),
(93, 92, NULL, NULL, 'index', 163, 164),
(94, 92, NULL, NULL, 'load', 165, 166),
(100, 92, NULL, NULL, 'view', 167, 168),
(101, 92, NULL, NULL, 'add', 169, 170),
(102, 92, NULL, NULL, 'edit', 171, 172),
(103, 92, NULL, NULL, 'delete', 173, 174),
(104, 3, NULL, NULL, 'QuestionTypes', 200, 211),
(105, 104, NULL, NULL, 'index', 201, 202),
(106, 104, NULL, NULL, 'view', 203, 204),
(107, 104, NULL, NULL, 'add', 205, 206),
(108, 104, NULL, NULL, 'edit', 207, 208),
(109, 104, NULL, NULL, 'delete', 209, 210),
(111, 3, NULL, NULL, 'QuestionsDisciplines', 212, 223),
(112, 111, NULL, NULL, 'index', 213, 214),
(113, 111, NULL, NULL, 'view', 215, 216),
(114, 111, NULL, NULL, 'add', 217, 218),
(115, 111, NULL, NULL, 'edit', 219, 220),
(116, 111, NULL, NULL, 'delete', 221, 222),
(124, 42, NULL, NULL, 'leaderboard', 97, 98),
(125, 42, NULL, NULL, 'sortleaderboard', 99, 100),
(126, 3, NULL, NULL, 'Answers', 224, 253),
(127, 126, NULL, NULL, 'index', 225, 226),
(128, 126, NULL, NULL, 'displayUserLog', 227, 228),
(129, 126, NULL, NULL, 'displayByIdExercise', 229, 230),
(130, 126, NULL, NULL, 'displayByIdUser', 231, 232),
(131, 126, NULL, NULL, 'view', 233, 234),
(132, 126, NULL, NULL, 'add', 235, 236),
(133, 126, NULL, NULL, 'edit', 237, 238),
(134, 126, NULL, NULL, 'delete', 239, 240),
(135, 126, NULL, NULL, 'saveAnswer', 241, 242),
(136, 126, NULL, NULL, 'generationXML', 243, 244),
(137, 126, NULL, NULL, 'readXMLAnswer', 245, 246),
(138, 126, NULL, NULL, 'feedback', 247, 248),
(139, 126, NULL, NULL, 'successRate', 249, 250),
(140, 126, NULL, NULL, 'scoreEnFonctionNbRealisations', 251, 252),
(141, 10, NULL, NULL, 'displayXmlToHtml', 31, 32),
(142, 10, NULL, NULL, 'import', 33, 34),
(143, 10, NULL, NULL, 'listByUser', 35, 36),
(144, 10, NULL, NULL, 'display', 37, 38),
(145, 92, NULL, NULL, 'displayXmlToHtml', 175, 176),
(146, 92, NULL, NULL, 'displayWithReponses', 177, 178),
(147, 92, NULL, NULL, 'correction', 179, 180),
(148, 92, NULL, NULL, 'saveQuestion', 181, 182),
(149, 92, NULL, NULL, 'saveEditQuestion', 183, 184),
(150, 92, NULL, NULL, 'addChoice', 185, 186),
(151, 92, NULL, NULL, 'addEditChoice', 187, 188),
(152, 92, NULL, NULL, 'generationXML', 189, 190),
(153, 92, NULL, NULL, 'import', 191, 192),
(154, 92, NULL, NULL, 'getQuestionType', 193, 194),
(155, 92, NULL, NULL, 'checkDtdUpload', 195, 196),
(156, 92, NULL, NULL, 'saveUploadQuestion', 197, 198),
(164, 61, NULL, NULL, 'import', 127, 128),
(165, 61, NULL, NULL, 'getQuestionType', 129, 130),
(166, 61, NULL, NULL, 'checkDtdUpload', 131, 132),
(167, 61, NULL, NULL, 'saveUploadQuestion', 133, 134),
(168, 61, NULL, NULL, 'saveQuestion', 135, 136),
(169, 42, NULL, NULL, 'admin', 101, 102),
(170, 42, NULL, NULL, 'initDB', 103, 104),
(171, 3, NULL, NULL, 'ExerciseGroupLists', 254, 265),
(172, 171, NULL, NULL, 'index', 255, 256),
(173, 171, NULL, NULL, 'view', 257, 258),
(174, 171, NULL, NULL, 'add', 259, 260),
(175, 171, NULL, NULL, 'edit', 261, 262),
(176, 171, NULL, NULL, 'delete', 263, 264),
(179, 10, NULL, NULL, 'importDataXML', 39, 40),
(180, 3, NULL, NULL, 'Qcms', 266, 303),
(181, 180, NULL, NULL, 'index', 267, 268),
(182, 180, NULL, NULL, 'load', 269, 270),
(183, 180, NULL, NULL, 'displayXmlToHtml', 271, 272),
(184, 180, NULL, NULL, 'displayWithReponses', 273, 274),
(185, 180, NULL, NULL, 'correction', 275, 276),
(186, 180, NULL, NULL, 'add', 277, 278),
(187, 180, NULL, NULL, 'edit', 279, 280),
(188, 180, NULL, NULL, 'saveQuestion', 281, 282),
(189, 180, NULL, NULL, 'saveEditQuestion', 283, 284),
(190, 180, NULL, NULL, 'addChoice', 285, 286),
(191, 180, NULL, NULL, 'addEditChoice', 287, 288),
(192, 180, NULL, NULL, 'generationXML', 289, 290),
(193, 180, NULL, NULL, 'view', 291, 292),
(194, 180, NULL, NULL, 'import', 293, 294),
(195, 180, NULL, NULL, 'getQuestionType', 295, 296),
(196, 180, NULL, NULL, 'checkDtdUpload', 297, 298),
(197, 180, NULL, NULL, 'saveUploadQuestion', 299, 300),
(198, 180, NULL, NULL, 'delete', 301, 302);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `answers`
--

INSERT INTO `answers` (`id`, `namefile`, `user_id`, `exercise_id`, `attempt_number`, `success_rate`, `created`, `modified`) VALUES
(16, '16_2013-06-09.xml', 11, 1, 12, 100, '2013-06-09 19:29:06', '2013-06-09 19:29:06'),
(17, '17_2013-06-09.xml', 10, 1, 13, 100, '2013-06-09 19:29:36', '2013-06-09 19:29:36'),
(18, '18_2013-06-09.xml', 11, 1, 3, 100, '2013-06-09 19:33:48', '2013-06-09 19:33:48'),
(19, '19_2013-06-12.xml', 10, 1, 4, 100, '2013-06-12 09:11:31', '2013-06-12 09:11:31'),
(20, '20_2013-06-12.xml', 9, 3, 5, 100, '2013-06-12 10:08:04', '2013-06-12 10:08:04'),
(21, '21_2013-06-16.xml', 8, 1, 6, 100, '2013-06-16 08:39:36', '2013-06-16 08:39:36'),
(22, '22_2013-06-16.xml', 8, 2, 7, 100, '2013-06-16 08:41:54', '2013-06-16 08:41:54'),
(23, '23_2013-06-16.xml', 10, 3, 8, 100, '2013-06-16 08:58:39', '2013-06-16 08:58:39'),
(24, '24_2013-06-16.xml', 9, 2, 9, 100, '2013-06-16 08:59:22', '2013-06-16 08:59:22');

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
(1, 'Exercise', 0, '2013-03-30 15:20:00', '2014-04-15 15:20:00', 10, '2013-06-07 12:15:11', '2013-06-09 13:50:47'),
(2, 'Exercise 2', 0, '2013-03-30 15:20:00', '2014-04-15 15:20:00', 10, '2013-06-07 12:15:39', '2013-06-07 12:15:39'),
(3, 'Exercise 3', 0, '2013-03-30 15:20:00', '2014-04-15 15:20:00', 10, '2013-06-07 12:15:55', '2013-06-09 16:10:59');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `questions`
--

INSERT INTO `questions` (`id`, `namefile`, `user_id`, `points`, `difficulty`, `question_type_id`, `created`, `modified`) VALUES
(1, 'qcu_1_2013-06-07.xml', 4, 1, 3, 1, '2013-06-07 12:15:12', '2013-06-20 21:47:30'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

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
(18, 9, 4, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `question_types`
--

INSERT INTO `question_types` (`id`, `name`, `controller`, `created`, `modified`) VALUES
(1, 'Question Ã  choix unique', 'Qcu', '2013-03-22 15:23:03', '2013-03-22 15:23:03'),
(3, 'Question Ã  choix multiple', 'Qcm', '2013-06-20 23:45:26', '2013-06-20 23:45:50');

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
(8, 'florian', 'ef3ce76a84fe7519453a613804375f66b9a7a118', 'florian@florian.fr', 12.06, 2, 1, 1, NULL, '2013-06-09 19:16:59', '2013-06-12 09:38:08'),
(9, 'louis', 'b28d04149bc5151bfc258aa7c01f605d354f81ef', 'louis@louis.fr', 12.06, 3, 4, 1, NULL, '2013-06-09 19:17:38', '2013-06-12 09:38:42'),
(10, 'quentin', 'aa26144053d99fcff013ff1e96c169d0f7a35401', 'quentin@quentin.fr', 16.91, 1, 2, 1, NULL, '2013-06-09 19:17:56', '2013-06-09 19:17:56'),
(11, 'eleve', 'c7b15743ef49977b9164e2eb2bce1ced7bc1fcf0', 'eleve@eleve.fr', 10.08, 4, 3, 2, NULL, '2013-06-09 19:26:10', '2013-06-09 19:26:10'),
(12, 'administrateur', 'caca30d5ff5ac02b71c2ea2c56f8d3c01dfd4fc0', 'admin@admin.fr', 0, NULL, NULL, 1, NULL, '2013-06-21 07:26:13', '2013-06-21 07:26:13');
