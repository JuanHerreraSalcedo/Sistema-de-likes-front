/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 100417
Source Host           : localhost:3306
Source Database       : db_sistema_likes

Target Server Type    : MYSQL
Target Server Version : 100417
File Encoding         : 65001

Date: 2021-11-04 10:35:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(255) DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `creado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', 'John Doe', '01.jpg', '2021-10-28 11:55:02');
INSERT INTO `posts` VALUES ('2', 'Pedro Doe', '02.jpg', '2021-10-28 11:55:11');
INSERT INTO `posts` VALUES ('3', 'Bob Doe', '03.jpg', '2021-10-28 11:55:23');
INSERT INTO `posts` VALUES ('4', 'Lulu Doe', '04.jpg', '2021-10-28 11:55:33');
INSERT INTO `posts` VALUES ('5', 'Lucy Ortega', '05.jpg', '2021-10-28 11:55:51');
INSERT INTO `posts` VALUES ('6', 'Ana Doe', '06.jpg', '2021-10-28 11:56:01');
INSERT INTO `posts` VALUES ('7', 'Roberto Doe', '07.jpg', '2021-10-28 11:56:12');
INSERT INTO `posts` VALUES ('8', 'Jorge Doe', '08.jpg', '2021-10-29 11:56:22');
INSERT INTO `posts` VALUES ('9', 'Pancho Doe', '09.jpg', '2021-10-28 11:56:36');
INSERT INTO `posts` VALUES ('10', 'Luis Doe', '10.jpg', '2021-10-28 11:56:46');
