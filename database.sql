/*
SQLyog Ultimate v9.62
MySQL - 5.5.24-log : Database - ioiut
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE IF NOT EXISTS `ioiut` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ioiut`;

/*Table structure for table `acos` */

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
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

/*Data for the table `acos` */

insert  into `acos`(`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) values (1,NULL,NULL,NULL,'controllers',1,2),(2,NULL,NULL,NULL,'administrateur',3,4),(3,NULL,NULL,NULL,'controllers',5,248),(4,3,NULL,NULL,'Disciplines',6,17),(5,4,NULL,NULL,'index',7,8),(6,4,NULL,NULL,'view',9,10),(7,4,NULL,NULL,'add',11,12),(8,4,NULL,NULL,'edit',13,14),(9,4,NULL,NULL,'delete',15,16),(10,3,NULL,NULL,'Exercises',18,41),(11,10,NULL,NULL,'index',19,20),(12,10,NULL,NULL,'view',21,22),(13,10,NULL,NULL,'add',23,24),(14,10,NULL,NULL,'edit',25,26),(15,10,NULL,NULL,'delete',27,28),(16,3,NULL,NULL,'GroupLists',42,53),(17,16,NULL,NULL,'index',43,44),(18,16,NULL,NULL,'view',45,46),(19,16,NULL,NULL,'add',47,48),(20,16,NULL,NULL,'edit',49,50),(21,16,NULL,NULL,'delete',51,52),(22,3,NULL,NULL,'Groups',54,65),(23,22,NULL,NULL,'index',55,56),(24,22,NULL,NULL,'view',57,58),(25,22,NULL,NULL,'add',59,60),(26,22,NULL,NULL,'edit',61,62),(27,22,NULL,NULL,'delete',63,64),(28,3,NULL,NULL,'IutGroups',66,77),(29,28,NULL,NULL,'index',67,68),(30,28,NULL,NULL,'view',69,70),(31,28,NULL,NULL,'add',71,72),(32,28,NULL,NULL,'edit',73,74),(33,28,NULL,NULL,'delete',75,76),(34,3,NULL,NULL,'Pages',78,81),(35,34,NULL,NULL,'display',79,80),(36,3,NULL,NULL,'Resultats',82,93),(37,36,NULL,NULL,'index',83,84),(38,36,NULL,NULL,'view',85,86),(39,36,NULL,NULL,'add',87,88),(40,36,NULL,NULL,'edit',89,90),(41,36,NULL,NULL,'delete',91,92),(42,3,NULL,NULL,'Users',94,113),(43,42,NULL,NULL,'index',95,96),(44,42,NULL,NULL,'view',97,98),(45,42,NULL,NULL,'add',99,100),(46,42,NULL,NULL,'edit',101,102),(47,42,NULL,NULL,'delete',103,104),(48,42,NULL,NULL,'login',105,106),(49,42,NULL,NULL,'logout',107,108),(50,3,NULL,NULL,'AclExtras',114,115),(51,3,NULL,NULL,'DebugKit',116,123),(52,51,NULL,NULL,'ToolbarAccess',117,122),(53,52,NULL,NULL,'history_state',118,119),(54,52,NULL,NULL,'sql_explain',120,121),(55,3,NULL,NULL,'ExercicesQuestions',124,135),(56,55,NULL,NULL,'index',125,126),(57,55,NULL,NULL,'view',127,128),(58,55,NULL,NULL,'add',129,130),(59,55,NULL,NULL,'edit',131,132),(60,55,NULL,NULL,'delete',133,134),(61,3,NULL,NULL,'Questions',136,149),(62,61,NULL,NULL,'index',137,138),(63,61,NULL,NULL,'view',139,140),(64,61,NULL,NULL,'add',141,142),(65,61,NULL,NULL,'edit',143,144),(66,61,NULL,NULL,'delete',145,146),(68,3,NULL,NULL,'ExercicesDisciplines',150,161),(69,68,NULL,NULL,'index',151,152),(70,68,NULL,NULL,'view',153,154),(71,68,NULL,NULL,'add',155,156),(72,68,NULL,NULL,'edit',157,158),(73,68,NULL,NULL,'delete',159,160),(74,10,NULL,NULL,'load',29,30),(75,10,NULL,NULL,'executeToHTML',31,32),(76,10,NULL,NULL,'generation',33,34),(77,10,NULL,NULL,'valider',35,36),(78,10,NULL,NULL,'saveFromPost',37,38),(79,10,NULL,NULL,'saveInstance',39,40),(80,3,NULL,NULL,'ExercisesDisciplines',162,173),(81,80,NULL,NULL,'index',163,164),(82,80,NULL,NULL,'view',165,166),(83,80,NULL,NULL,'add',167,168),(84,80,NULL,NULL,'edit',169,170),(85,80,NULL,NULL,'delete',171,172),(86,3,NULL,NULL,'ExercisesQuestions',174,185),(87,86,NULL,NULL,'index',175,176),(88,86,NULL,NULL,'view',177,178),(89,86,NULL,NULL,'add',179,180),(90,86,NULL,NULL,'edit',181,182),(91,86,NULL,NULL,'delete',183,184),(92,3,NULL,NULL,'Qcus',186,209),(93,92,NULL,NULL,'index',187,188),(94,92,NULL,NULL,'load',189,190),(95,92,NULL,NULL,'executeToHTML',191,192),(96,92,NULL,NULL,'generation',193,194),(97,92,NULL,NULL,'valider',195,196),(98,92,NULL,NULL,'saveFromPost',197,198),(99,92,NULL,NULL,'saveInstance',199,200),(100,92,NULL,NULL,'view',201,202),(101,92,NULL,NULL,'add',203,204),(102,92,NULL,NULL,'edit',205,206),(103,92,NULL,NULL,'delete',207,208),(104,3,NULL,NULL,'QuestionTypes',210,221),(105,104,NULL,NULL,'index',211,212),(106,104,NULL,NULL,'view',213,214),(107,104,NULL,NULL,'add',215,216),(108,104,NULL,NULL,'edit',217,218),(109,104,NULL,NULL,'delete',219,220),(110,61,NULL,NULL,'generation',147,148),(111,3,NULL,NULL,'QuestionsDisciplines',222,233),(112,111,NULL,NULL,'index',223,224),(113,111,NULL,NULL,'view',225,226),(114,111,NULL,NULL,'add',227,228),(115,111,NULL,NULL,'edit',229,230),(116,111,NULL,NULL,'delete',231,232),(117,3,NULL,NULL,'Quos',234,247),(118,117,NULL,NULL,'load',235,236),(119,117,NULL,NULL,'executeToHTML',237,238),(120,117,NULL,NULL,'generation',239,240),(121,117,NULL,NULL,'valider',241,242),(122,117,NULL,NULL,'saveFromPost',243,244),(123,117,NULL,NULL,'saveInstance',245,246),(124,42,NULL,NULL,'leaderboard',109,110),(125,42,NULL,NULL,'sortleaderboard',111,112);

/*Table structure for table `aros` */

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `aros` */

insert  into `aros`(`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) values (1,NULL,'Group',1,NULL,1,4),(2,1,'User',4,NULL,2,3);

/*Table structure for table `aros_acos` */

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `aros_acos` */

insert  into `aros_acos`(`id`,`aro_id`,`aco_id`,`_create`,`_read`,`_update`,`_delete`) values (1,1,3,'1','1','1','1');

/*Table structure for table `disciplines` */

DROP TABLE IF EXISTS `disciplines`;

CREATE TABLE `disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `disciplines` */

insert  into `disciplines`(`id`,`name`,`created`,`modified`) values (1,'CSS','2013-03-22 15:21:43','2013-03-22 15:21:43'),(2,'HTML','2013-03-22 15:21:53','2013-03-22 15:21:53'),(3,'PHP','2013-03-22 15:22:04','2013-03-22 15:22:04'),(4,'Framework','2013-03-22 15:22:25','2013-03-22 15:22:25');

/*Table structure for table `exercises` */

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `exercises` */

/*Table structure for table `exercises_disciplines` */

DROP TABLE IF EXISTS `exercises_disciplines`;

CREATE TABLE `exercises_disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_id` int(11) NOT NULL,
  `discipline_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `exercises_disciplines` */

/*Table structure for table `exercises_questions` */

DROP TABLE IF EXISTS `exercises_questions`;

CREATE TABLE `exercises_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `exercises_questions` */

/*Table structure for table `group_lists` */

DROP TABLE IF EXISTS `group_lists`;

CREATE TABLE `group_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `iut_group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `group_lists` */

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `groups` */

insert  into `groups`(`id`,`name`,`created`,`modified`) values (1,'administrateur','2013-03-18 18:20:01','2013-03-18 18:20:01');

/*Table structure for table `iut_groups` */

DROP TABLE IF EXISTS `iut_groups`;

CREATE TABLE `iut_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `iut_groups` */

/*Table structure for table `question_types` */

DROP TABLE IF EXISTS `question_types`;

CREATE TABLE `question_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `controller` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `question_types` */

insert  into `question_types`(`id`,`name`,`controller`,`created`,`modified`) values (1,'Question Ã  choix unique','Qcu','2013-03-22 15:23:03','2013-03-22 15:23:03'),(2,'Question ouverte','Qo','2013-03-22 15:23:49','2013-03-22 15:23:49');

/*Table structure for table `questions` */

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `questions` */

/*Table structure for table `questions_disciplines` */

DROP TABLE IF EXISTS `questions_disciplines`;

CREATE TABLE `questions_disciplines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `discipline_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `questions_disciplines` */

/*Table structure for table `resultats` */

DROP TABLE IF EXISTS `resultats`;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `answers` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
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
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`password`,`mail`,`xp`,`actual_rank`,`last_rank`,`group_id`,`avatar_namefile`,`created`,`modified`) values (4,'quentin','aa26144053d99fcff013ff1e96c169d0f7a35401','',NULL,NULL,NULL,1,NULL,'2013-03-18 18:20:25','2013-03-18 18:20:25'),(5,'florian','ef3ce76a84fe7519453a613804375f66b9a7a118','',NULL,NULL,NULL,1,NULL,'2013-03-19 09:23:55','2013-03-19 09:23:55'),(6,'louis','b28d04149bc5151bfc258aa7c01f605d354f81ef','',NULL,NULL,NULL,1,NULL,'2013-03-19 09:24:06','2013-03-19 09:24:06');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
