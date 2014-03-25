# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.14)
# Database: bem_cms
# Generation Time: 2014-03-25 01:16:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table be_acl_actions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `be_acl_actions`;

CREATE TABLE `be_acl_actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table be_acl_groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `be_acl_groups`;

CREATE TABLE `be_acl_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(10) unsigned NOT NULL DEFAULT '0',
  `rgt` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(254) NOT NULL,
  `link` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `be_acl_groups` WRITE;
/*!40000 ALTER TABLE `be_acl_groups` DISABLE KEYS */;

INSERT INTO `be_acl_groups` (`id`, `lft`, `rgt`, `name`, `link`)
VALUES
	(1,1,4,'Member',NULL),
	(2,2,3,'Administrator',NULL);

/*!40000 ALTER TABLE `be_acl_groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table be_acl_permission_actions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `be_acl_permission_actions`;

CREATE TABLE `be_acl_permission_actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `access_id` int(10) unsigned NOT NULL DEFAULT '0',
  `axo_id` int(10) unsigned NOT NULL DEFAULT '0',
  `allow` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `access_id` (`access_id`),
  KEY `axo_id` (`axo_id`),
  CONSTRAINT `be_acl_permission_actions_ibfk_1` FOREIGN KEY (`access_id`) REFERENCES `be_acl_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `be_acl_permission_actions_ibfk_2` FOREIGN KEY (`axo_id`) REFERENCES `be_acl_actions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table be_acl_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `be_acl_permissions`;

CREATE TABLE `be_acl_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL DEFAULT '0',
  `aco_id` int(10) unsigned NOT NULL DEFAULT '0',
  `allow` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aro_id` (`aro_id`),
  KEY `aco_id` (`aco_id`),
  CONSTRAINT `be_acl_permissions_ibfk_1` FOREIGN KEY (`aro_id`) REFERENCES `be_acl_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `be_acl_permissions_ibfk_2` FOREIGN KEY (`aco_id`) REFERENCES `be_acl_resources` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `be_acl_permissions` WRITE;
/*!40000 ALTER TABLE `be_acl_permissions` DISABLE KEYS */;

INSERT INTO `be_acl_permissions` (`id`, `aro_id`, `aco_id`, `allow`)
VALUES
	(1,2,1,'Y');

/*!40000 ALTER TABLE `be_acl_permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table be_acl_resources
# ------------------------------------------------------------

DROP TABLE IF EXISTS `be_acl_resources`;

CREATE TABLE `be_acl_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lft` int(10) unsigned NOT NULL DEFAULT '0',
  `rgt` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(254) NOT NULL,
  `link` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `be_acl_resources` WRITE;
/*!40000 ALTER TABLE `be_acl_resources` DISABLE KEYS */;

INSERT INTO `be_acl_resources` (`id`, `lft`, `rgt`, `name`, `link`)
VALUES
	(1,1,22,'Site',NULL),
	(2,2,21,'Control Panel',NULL),
	(3,3,20,'System',NULL),
	(4,14,15,'Members',NULL),
	(5,4,13,'Access Control',NULL),
	(6,16,17,'Settings',NULL),
	(7,18,19,'Utilities',NULL),
	(8,11,12,'Permissions',NULL),
	(9,9,10,'Groups',NULL),
	(10,7,8,'Resources',NULL),
	(11,5,6,'Actions',NULL);

/*!40000 ALTER TABLE `be_acl_resources` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table be_groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `be_groups`;

CREATE TABLE `be_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `disabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  CONSTRAINT `be_groups_ibfk_1` FOREIGN KEY (`id`) REFERENCES `be_acl_groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `be_groups` WRITE;
/*!40000 ALTER TABLE `be_groups` DISABLE KEYS */;

INSERT INTO `be_groups` (`id`, `locked`, `disabled`)
VALUES
	(1,1,0),
	(2,1,0);

/*!40000 ALTER TABLE `be_groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table be_preferences
# ------------------------------------------------------------

DROP TABLE IF EXISTS `be_preferences`;

CREATE TABLE `be_preferences` (
  `name` varchar(254) CHARACTER SET latin1 NOT NULL,
  `value` text CHARACTER SET latin1 NOT NULL,
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `be_preferences` WRITE;
/*!40000 ALTER TABLE `be_preferences` DISABLE KEYS */;

INSERT INTO `be_preferences` (`name`, `value`)
VALUES
	('default_user_group','1'),
	('smtp_host',''),
	('keep_error_logs_for','30'),
	('email_protocol','sendmail'),
	('use_registration_captcha','0'),
	('page_debug','0'),
	('automated_from_name','BackendPro'),
	('allow_user_registration','1'),
	('use_login_captcha','0'),
	('site_name','BackendPro'),
	('automated_from_email','noreply@backendpro.co.uk'),
	('account_activation_time','7'),
	('allow_user_profiles','0'),
	('activation_method','email'),
	('autologin_period','30'),
	('min_password_length','8'),
	('smtp_user',''),
	('smtp_pass',''),
	('email_mailpath','/usr/sbin/sendmail'),
	('smtp_port','25'),
	('smtp_timeout','5'),
	('email_wordwrap','1'),
	('email_wrapchars','76'),
	('email_mailtype','text'),
	('email_charset','utf-8'),
	('bcc_batch_mode','0'),
	('bcc_batch_size','200'),
	('login_field','email');

/*!40000 ALTER TABLE `be_preferences` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table be_resources
# ------------------------------------------------------------

DROP TABLE IF EXISTS `be_resources`;

CREATE TABLE `be_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  CONSTRAINT `be_resources_ibfk_1` FOREIGN KEY (`id`) REFERENCES `be_acl_resources` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `be_resources` WRITE;
/*!40000 ALTER TABLE `be_resources` DISABLE KEYS */;

INSERT INTO `be_resources` (`id`, `locked`)
VALUES
	(1,1),
	(2,1),
	(3,1),
	(4,1),
	(5,1),
	(6,1),
	(7,1),
	(8,1),
	(9,1),
	(10,1),
	(11,1);

/*!40000 ALTER TABLE `be_resources` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table be_user_profiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `be_user_profiles`;

CREATE TABLE `be_user_profiles` (
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `be_user_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `be_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `be_user_profiles` WRITE;
/*!40000 ALTER TABLE `be_user_profiles` DISABLE KEYS */;

INSERT INTO `be_user_profiles` (`user_id`)
VALUES
	(1);

/*!40000 ALTER TABLE `be_user_profiles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table be_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `be_users`;

CREATE TABLE `be_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(254) NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group` int(10) unsigned DEFAULT NULL,
  `activation_key` varchar(32) DEFAULT NULL,
  `last_visit` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `password` (`password`),
  KEY `group` (`group`),
  CONSTRAINT `be_users_ibfk_1` FOREIGN KEY (`group`) REFERENCES `be_acl_groups` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `be_users` WRITE;
/*!40000 ALTER TABLE `be_users` DISABLE KEYS */;

INSERT INTO `be_users` (`id`, `username`, `password`, `email`, `active`, `group`, `activation_key`, `last_visit`, `created`, `modified`)
VALUES
	(1,'Administrator','15d771dd8adb31744b4ad91b9c7b5d92f1638311','hello@mydevstudio.com',1,2,NULL,NULL,'2014-03-25 09:10:52',NULL);

/*!40000 ALTER TABLE `be_users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ci_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`)
VALUES
	('fa58f0e7d8ee4cff809c524ce8698bae','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.152 Safari/537.36',1395709900,'a:1:{s:9:\"user_data\";s:0:\"\";}');

/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
