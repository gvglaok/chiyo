/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : ysd

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-05-15 20:26:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ysd_class
-- ----------------------------
DROP TABLE IF EXISTS `ysd_class`;
CREATE TABLE `ysd_class` (
  `cID` int(11) NOT NULL AUTO_INCREMENT,
  `cName` varchar(255) NOT NULL DEFAULT '',
  `cMenuNumber` int(11) DEFAULT '0',
  `cAddTime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ysd_class
-- ----------------------------
INSERT INTO `ysd_class` VALUES ('1', '凉菜', '1', '2016-05-12 11:02:00');
INSERT INTO `ysd_class` VALUES ('2', '炒菜', '1', '2016-05-12 11:04:00');
INSERT INTO `ysd_class` VALUES ('3', '汤类', '0', '2016-05-12 11:06:00');
INSERT INTO `ysd_class` VALUES ('4', '主食', '0', '2016-05-12 11:02:00');
INSERT INTO `ysd_class` VALUES ('5', '酒水', '0', '2016-05-12 11:08:00');
INSERT INTO `ysd_class` VALUES ('6', '饮料', '0', '2016-05-12 11:11:00');
INSERT INTO `ysd_class` VALUES ('7', '烧烤', '0', '2016-05-15 20:16:16');

-- ----------------------------
-- Table structure for ysd_menu
-- ----------------------------
DROP TABLE IF EXISTS `ysd_menu`;
CREATE TABLE `ysd_menu` (
  `mID` int(11) NOT NULL AUTO_INCREMENT,
  `cID` int(11) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `mImage` varchar(255) DEFAULT NULL,
  `mPrice` decimal(10,2) NOT NULL,
  `mInfo` varchar(255) DEFAULT NULL,
  `mStatus` varchar(255) DEFAULT NULL,
  `mAddNumber` int(11) DEFAULT NULL,
  PRIMARY KEY (`mID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ysd_menu
-- ----------------------------
INSERT INTO `ysd_menu` VALUES ('1', '1', '菜名', '/img/1.jpg', '22.00', 'O(∩_∩)O哈！', '1', '0');
INSERT INTO `ysd_menu` VALUES ('2', '2', '宫保鸡丁', 'c9641dbc4706f9ab6828e625fe452bdf.jpg', '3434.00', '6+56+5\r\n232+5+56+', '1', null);

-- ----------------------------
-- Table structure for ysd_menu_number
-- ----------------------------
DROP TABLE IF EXISTS `ysd_menu_number`;
CREATE TABLE `ysd_menu_number` (
  `omID` int(11) NOT NULL AUTO_INCREMENT,
  `omTableID` int(11) DEFAULT NULL,
  `omMid` int(11) DEFAULT NULL,
  PRIMARY KEY (`omID`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ysd_menu_number
-- ----------------------------

-- ----------------------------
-- Table structure for ysd_order
-- ----------------------------
DROP TABLE IF EXISTS `ysd_order`;
CREATE TABLE `ysd_order` (
  `oID` int(11) NOT NULL,
  `oTableNumber` varchar(11) DEFAULT NULL,
  `oMidArr` varchar(255) DEFAULT NULL,
  `oMenuNumber` int(11) DEFAULT NULL,
  `oMoney` varchar(255) DEFAULT NULL,
  `oAddTime` datetime DEFAULT NULL,
  PRIMARY KEY (`oID`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ysd_order
-- ----------------------------
INSERT INTO `ysd_order` VALUES ('0', 'A-12', '1,2,3,4,5,6', '6', '156', '2016-05-11 15:11:39');
INSERT INTO `ysd_order` VALUES ('1', 'B12', '1,2,3', '4', '66', '2016-05-11 15:12:14');
