/*
Navicat MySQL Data Transfer

Source Server         : lh2
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : ysd

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-05-19 18:00:31
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk;

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
INSERT INTO `ysd_class` VALUES ('8', '特色菜品', '0', '2016-05-16 11:26:34');

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
  `mStatus` bit(1) DEFAULT b'1',
  `mAddNumber` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`mID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ysd_menu
-- ----------------------------
INSERT INTO `ysd_menu` VALUES ('1', '1', '菜名', '1.jpg', '22.00', 'O(∩_∩)O哈！', '', '0');
INSERT INTO `ysd_menu` VALUES ('2', '2', '宫保鸡丁', 'c9641dbc4706f9ab6828e625fe452bdf.jpg', '56.00', '6+56+5\r\n232+5+56+', '', '0');
INSERT INTO `ysd_menu` VALUES ('3', '2', '菜名2', '2.jpg', '15.00', 'info2', '', '0');
INSERT INTO `ysd_menu` VALUES ('4', '2', '菜名3', '3.png', '11.00', 'info3', '', '0');
INSERT INTO `ysd_menu` VALUES ('5', '8', '菜名4', '4.jpg', '12.00', 'info4', '', '0');

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
  `oID` int(11) NOT NULL AUTO_INCREMENT,
  `oTableNumber` varchar(11) DEFAULT NULL,
  `oMidArr` varchar(255) DEFAULT NULL,
  `oMenuNumber` int(11) DEFAULT NULL,
  `oMoney` varchar(255) DEFAULT NULL,
  `oAddTime` timestamp NULL DEFAULT NULL,
  `oStatus` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`oID`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ysd_order
-- ----------------------------
INSERT INTO `ysd_order` VALUES ('5', 'A-12', '1,2,3,4,5', '5', '156', '2016-05-11 15:11:39', '1');
INSERT INTO `ysd_order` VALUES ('1', 'B-12', '1,2,3', '4', '66', '2016-05-11 15:12:14', '0');
INSERT INTO `ysd_order` VALUES ('2', 'A-1', '1,3,4,5', '4', '52', '2016-05-16 11:28:36', '1');
INSERT INTO `ysd_order` VALUES ('3', 'A-2', '1,2,3,5', '4', '45', '2016-05-16 11:29:35', '1');
INSERT INTO `ysd_order` VALUES ('68', 'A-4', '1,2,4,5', '4', '36', '2016-05-16 11:33:40', '0');
INSERT INTO `ysd_order` VALUES ('69', 'A-3', '1,2,5', '3', '47', '2016-05-16 11:35:08', '0');
