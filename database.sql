-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 19 Mars 2013 à 15:14
-- Version du serveur: 5.5.29
-- Version de PHP: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `ioiut`
--

DROP DATABASE `ioiut`;
CREATE DATABASE `ioiut` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ioiut`;

-- --------------------------------------------------------

--
-- Structure de la table `acos`
--

CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Contenu de la table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 2),
(2, NULL, NULL, NULL, 'administrateur', 3, 4),
(3, NULL, NULL, NULL, 'controllers', 5, 134),
(4, 3, NULL, NULL, 'Disciplines', 6, 17),
(5, 4, NULL, NULL, 'index', 7, 8),
(6, 4, NULL, NULL, 'view', 9, 10),
(7, 4, NULL, NULL, 'add', 11, 12),
(8, 4, NULL, NULL, 'edit', 13, 14),
(9, 4, NULL, NULL, 'delete', 15, 16),
(10, 3, NULL, NULL, 'Exercises', 18, 29),
(11, 10, NULL, NULL, 'index', 19, 20),
(12, 10, NULL, NULL, 'view', 21, 22),
(13, 10, NULL, NULL, 'add', 23, 24),
(14, 10, NULL, NULL, 'edit', 25, 26),
(15, 10, NULL, NULL, 'delete', 27, 28),
(16, 3, NULL, NULL, 'GroupLists', 30, 41),
(17, 16, NULL, NULL, 'index', 31, 32),
(18, 16, NULL, NULL, 'view', 33, 34),
(19, 16, NULL, NULL, 'add', 35, 36),
(20, 16, NULL, NULL, 'edit', 37, 38),
(21, 16, NULL, NULL, 'delete', 39, 40),
(22, 3, NULL, NULL, 'Groups', 42, 53),
(23, 22, NULL, NULL, 'index', 43, 44),
(24, 22, NULL, NULL, 'view', 45, 46),
(25, 22, NULL, NULL, 'add', 47, 48),
(26, 22, NULL, NULL, 'edit', 49, 50),
(27, 22, NULL, NULL, 'delete', 51, 52),
(28, 3, NULL, NULL, 'IutGroups', 54, 65),
(29, 28, NULL, NULL, 'index', 55, 56),
(30, 28, NULL, NULL, 'view', 57, 58),
(31, 28, NULL, NULL, 'add', 59, 60),
(32, 28, NULL, NULL, 'edit', 61, 62),
(33, 28, NULL, NULL, 'delete', 63, 64),
(34, 3, NULL, NULL, 'Pages', 66, 69),
(35, 34, NULL, NULL, 'display', 67, 68),
(36, 3, NULL, NULL, 'Resultats', 70, 81),
(37, 36, NULL, NULL, 'index', 71, 72),
(38, 36, NULL, NULL, 'view', 73, 74),
(39, 36, NULL, NULL, 'add', 75, 76),
(40, 36, NULL, NULL, 'edit', 77, 78),
(41, 36, NULL, NULL, 'delete', 79, 80),
(42, 3, NULL, NULL, 'Users', 82, 99),
(43, 42, NULL, NULL, 'index', 83, 84),
(44, 42, NULL, NULL, 'view', 85, 86),
(45, 42, NULL, NULL, 'add', 87, 88),
(46, 42, NULL, NULL, 'edit', 89, 90),
(47, 42, NULL, NULL, 'delete', 91, 92),
(48, 42, NULL, NULL, 'login', 93, 94),
(49, 42, NULL, NULL, 'logout', 95, 96),
(50, 3, NULL, NULL, 'AclExtras', 100, 101),
(51, 3, NULL, NULL, 'DebugKit', 102, 109),
(52, 51, NULL, NULL, 'ToolbarAccess', 103, 108),
(53, 52, NULL, NULL, 'history_state', 104, 105),
(54, 52, NULL, NULL, 'sql_explain', 106, 107),
(55, 3, NULL, NULL, 'ExercicesQuestions', 110, 121),
(56, 55, NULL, NULL, 'index', 111, 112),
(57, 55, NULL, NULL, 'view', 113, 114),
(58, 55, NULL, NULL, 'add', 115, 116),
(59, 55, NULL, NULL, 'edit', 117, 118),
(60, 55, NULL, NULL, 'delete', 119, 120),
(61, 3, NULL, NULL, 'Questions', 122, 133),
(62, 61, NULL, NULL, 'index', 123, 124),
(63, 61, NULL, NULL, 'view', 125, 126),
(64, 61, NULL, NULL, 'add', 127, 128),
(65, 61, NULL, NULL, 'edit', 129, 130),
(66, 61, NULL, NULL, 'delete', 131, 132),
(67, 42, NULL, NULL, 'initDB', 97, 98);

-- --------------------------------------------------------

--
-- Structure de la table `aros`
--

CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, 1, 'User', 4, NULL, 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `aros_acos`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 3, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Structure de la table `disciplines`
--

CREATE TABLE `disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `exercices_questions`
--

CREATE TABLE `exercices_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `exercises`
--

CREATE TABLE `exercises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `minimum_points` int(11) NOT NULL,
  `opening_date` datetime DEFAULT NULL,
  `closing_date` datetime DEFAULT NULL,
  `discipline_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `group_lists`
--

CREATE TABLE `group_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `iut_group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'administrateur', '2013-03-18 18:20:01', '2013-03-18 18:20:01');

-- --------------------------------------------------------

--
-- Structure de la table `iut_groups`
--

CREATE TABLE `iut_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `question_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

CREATE TABLE `resultats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namefile` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `exercise_id` int(11) NOT NULL,
  `attempt_number` int(11) NOT NULL,
  `success_rate` float DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(40) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `xp` float(11) DEFAULT NULL,
  `actual_rank` int(11) DEFAULT NULL,
  `last_rank` int(11) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `avatar_namefile` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(4, 'quentin', 'aa26144053d99fcff013ff1e96c169d0f7a35401', 1, '2013-03-18 18:20:25', '2013-03-18 18:20:25'),
(5, 'florian', 'ef3ce76a84fe7519453a613804375f66b9a7a118', 1, '2013-03-19 09:23:55', '2013-03-19 09:23:55'),
(6, 'louis', 'b28d04149bc5151bfc258aa7c01f605d354f81ef', 1, '2013-03-19 09:24:06', '2013-03-19 09:24:06');

--
-- Structure de la table `questions_disciplines`
--

CREATE TABLE `questions_disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `discipline_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `exercices_disciplines`
--

CREATE TABLE `exercices_disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_id` int(11) NOT NULL,
  `discipline_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
