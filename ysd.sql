/*
Navicat MySQL Data Transfer

Source Server         : lh2
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : ysd

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-05-26 19:26:43
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ysd_class
-- ----------------------------
INSERT INTO `ysd_class` VALUES ('12', '传家特色菜', '60', '2016-05-26 19:26:18');
INSERT INTO `ysd_class` VALUES ('4', '主食', '8', '2016-05-26 19:19:00');
INSERT INTO `ysd_class` VALUES ('5', '酒', '17', '2016-05-26 19:19:29');
INSERT INTO `ysd_class` VALUES ('6', '饮料', '10', '2016-05-26 19:19:54');
INSERT INTO `ysd_class` VALUES ('13', '汤羹', '6', '2016-05-26 19:20:27');

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
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ysd_menu
-- ----------------------------
INSERT INTO `ysd_menu` VALUES ('11', '12', '秘制猪手', '042a5ad54ba18fdeb2ae303f3a0803e1.jpg', '68.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('12', '12', '棒棒鸡 ', '85614fcb34f31af825b3e6acb8fba39e.jpg', '26.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('13', '12', '茶树菇炒腊肉', '47ba7b528b6e2dd37a81f6ecae0780c6.jpg', '38.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('14', '12', '茶香酥皮鸡', '', '56.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('15', '4', '榴莲酥', '559e0caae64767e69fd7b1a6f3b2a13e.jpg', '26.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('16', '4', '山药卷', 'f51cbf681bf9c8c3412b2c5f62210bc4.jpg', '18.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('17', '4', '金银馒头', '446f6b6405540043064f562bd2ec68cb.jpg', '16.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('18', '4', '爆香冰激凌', '9b109015802b53b43d70849b920a7b32.jpg', '26.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('19', '4', '菜泡饭', '692c40d9e1ec50a93651bab7343c1c3e.jpg', '22.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('20', '4', '扬州炒饭', 'd1fcd314f9af5b6158efe94c98ead88a.jpg', '26.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('21', '4', '阳春面', 'eda308987ddee19b1ab4c3b227f02b09.jpg', '22.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('22', '4', '水饺', '79c6253f3b4fb3e8b4fe0cdc2068ede7.jpg', '28.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('23', '13', '青菜榨菜肉丝汤', 'e60f24e88c2f0252718da70e93335bd0.jpg', '16.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('24', '13', '紫菜蛋汤', '25a7ccb3ccd8134ade834443a0b386aa.jpg', '12.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('25', '13', '时蔬蛋汤', 'be7075c19e8e0d8024f00ab504b42447.jpg', '12.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('26', '13', '西湖牛肉羹', '935ca59810da927f97abf2aee9a130ea.jpg', '18.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('27', '13', '平桥豆腐羹', 'dd1e4471d4e92f19edcf93c9d6e91acd.jpg', '8.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('28', '13', '栗米蛋花羹', '1e5188c90e5037c093cea01461e0b55c.jpg', '16.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('29', '12', '臭豆腐肥肠煲', '188cf4a5403121dd0596ef6efb4b1980.jpg', '38.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('30', '12', '传家鸡', '', '46.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('31', '12', '牛筋烧鳝段', 'e8f7fe8e0cae8fe61902f4534e838a47.jpg', '88.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('32', '12', '传家烤羊骨棒', '', '24.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('33', '12', '传家烤鱼', '', '68.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('34', '12', '传家小炒皇', '', '38.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('35', '12', '农家腊味蒸', 'e9b7b084e5905205327c7bfcad2a4ff5.jpg', '58.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('36', '12', '传家鱼', '', '58.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('37', '12', '泡萝卜', '4d53db35c16d1a9c8303dc77edb486dc.jpg', '8.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('38', '12', '大蒜茨菇炒刀板肉', '', '36.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('39', '12', '地三鲜', '2234d0576dd68cbc7948b36aa1e6edb9.jpg', '18.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('40', '12', '荠菜圆子锅仔', 'b42a491d3823f092e67b0bf5841dacd5.jpg', '42.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('41', '12', '剁椒拌鸭珍', 'f6711ccea2699c690eedd9bb999472f2.jpg', '18.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('42', '12', '干扁四季豆', 'b77bad8bd17afa6b7a4b2ee362a8ce78.jpg', '26.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('43', '12', '青椒干子肉丝', '248a7237217f4fffb43b710fa75d5db9.jpg', '16.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('44', '12', '干锅肥肠', 'e645a3c2ae45c1c06d720588adf727e9.jpg', '38.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('45', '12', '干锅黄牛肉', '8dbf65a9e8617d154ca093e4e24b30b1.jpg', '48.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('46', '12', '青椒土豆丝', 'f69f482b097291de818fb7d04df6bee7.jpg', '8.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('47', '12', '干锅千叶豆腐', 'b7e069096f613670d154cea0cc9971ae.jpg', '26.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('48', '12', '清炒西兰花', '8598ed434259eeb6c671cec17f41496a.jpg', '22.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('49', '12', '干锅天龙爪', 'e5b333cca13086944b03a18c34c122e0.jpg', '42.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('50', '12', '上汤娃娃菜', 'd33c20f9e1e3b1b67b310f84e87c4b65.jpg', '22.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('51', '12', '干锅天龙爪', 'ab71207ff2d3506d4ce5b9bcb96f5563.jpg', '42.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('52', '5', '小银汤沟', '', '18.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('55', '12', '海之蓝', '', '138.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('56', '12', '干锅鱿鱼', 'fe755a782b29e20f3ca750b43a7d8063.jpg', '38.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('57', '5', '海之蓝', '', '138.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('58', '12', '石锅茄子', 'b23840786a6c88a7dc8054b01c4b13e3.jpg', '26.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('59', '12', '干锅有机花菜', 'b27a4188c4c61a1a412a0785dde7ba56.jpg', '22.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('60', '12', '天之蓝', '', '328.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('62', '12', '宫爆虾球', 'c9cb6e25f861207d43729ecb30823e42.jpg', '58.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('63', '12', '石锅娃娃菜', '6fb9c4bd19bdef6219165d2e1a1d50cb.jpg', '26.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('66', '12', '海鲜烩豆腐', '744091bd8429837c9e81a6c049f5b8f1.jpg', '32.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('68', '12', '爽口小木耳', '', '18.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('69', '12', '杭椒牛柳', 'd37962d64136de420ef65020b37b2d47.jpg', '36.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('70', '5', '月亮', '', '98.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('71', '5', 'G6', '', '128.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('72', '5', '今世缘G3', '', '78.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('73', '12', '水煮牛三宝', '2359c511bbdc03e0d9d80e496bba00cb.jpg', '56.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('74', '5', 'K3', '', '458.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('75', '5', 'K1', '', '298.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('77', '12', '苏式熏鱼', '4761b68142642c556bffe503018d620f.jpg', '28.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('78', '5', '银汤沟', '', '58.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('79', '12', '蒜茸粉丝蒸扇贝', '83ad62830c28125ce51cf3a28c802ea4.jpg', '80.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('80', '5', '92干红', '', '328.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('81', '5', '张裕经典干红', '', '88.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('82', '12', '酸菜凤尾虾', 'e069507b80614f9aa3000e483a89d879.jpg', '56.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('83', '5', 'M3', '', '580.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('84', '5', 'M6', '', '880.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('85', '12', '酸汤肥牛', '0471c26b8513b4ba3df719ca8bf098f3.jpg', '58.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('86', '5', '上海老酒', '', '20.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('87', '5', '女儿红', '', '228.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('88', '12', '塔香鸡中翅', '', '46.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('89', '5', '东北坊', '', '18.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('90', '12', '酸汤桂花', 'de9dcfe25e5aa60ea45371fad06b9b96.jpg', '58.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('91', '12', '铁板茶树菇烧鸡', '7ca4191eb08f6ef6f8f0aae72fca4c0c.jpg', '42.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('92', '12', '铁板山芋', '264e3bd2c65bd74a32054c4512971f69.jpg', '32.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('93', '12', '酸汤全家福', 'a8bb6391b47f60633ff31de466564384.jpg', '62.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('94', '12', '五香牛肉', '1c1d25ba7734186c61b76f8aa0f67586.jpg', '28.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('95', '12', '雪菜烧小黄鱼', '432d2eb7f8270c738b9c3730bd8c8015.jpg', '48.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('96', '12', '西红柿炒鸡蛋', '', '18.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('97', '12', '香菇青菜', 'd5fdef6caad5ebcd1f9689d9d02174a7.jpg', '12.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('98', '6', '椰汁', '', '20.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('99', '6', '果粒橙', '', '12.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('100', '12', '香芹炒肉丝', '381d13075383b92e6ca66f5833b0d793.jpg', '18.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('101', '6', '大雪碧', '', '12.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('102', '6', '大可乐', '', '12.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('103', '6', '加多宝', '', '6.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('104', '12', '香酥掌中宝', '19259747eab19b3fa61fb1901d1831c6.jpg', '46.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('105', '6', '小雪碧', '', '6.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('106', '12', '湘味小炒肉', '324d868933720b91425ad8c589eebbe4.jpg', '28.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('107', '6', '小可乐', '', '6.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('108', '6', '旺仔', '', '6.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('109', '12', '想家的锅巴', '8274639be66be7231315280ffecd4553.jpg', '32.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('110', '6', '矿泉水', '', '4.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('111', '5', '品啤', '', '6.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('113', '5', '雪花纯生', '', '10.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('114', '12', '一品羊肉', '683a0f862f09ca4870a87ddc7033d49e.jpg', '98.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('115', '6', '玉米汁', '', '36.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('116', '12', '鱼羊一锅鲜', 'f6a8d9754dac968abe2f390e2930e820.jpg', '68.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('117', '12', '蘸酱黄瓜', 'f1f9b12d22bfc66850e19b5d4f085bdb.jpg', '8.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('118', '12', '孜然脆骨', '', '36.00', '', '', '0');
INSERT INTO `ysd_menu` VALUES ('119', '12', '野生木耳小炒肉', '1cd442b964a04d616b7524f19cf52ebd.jpg', '26.00', '', '', '0');

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
  `oAddTime` varchar(20) DEFAULT NULL,
  `oStatus` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`oID`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ysd_order
-- ----------------------------
INSERT INTO `ysd_order` VALUES ('5', 'A-12', '1,2,3,4,5', '5', '156', '2016-05-11 15:11:39', '1');
INSERT INTO `ysd_order` VALUES ('1', 'B-12', '1,2,3', '4', '93', '2016-05-11 15:12:14', '1');
INSERT INTO `ysd_order` VALUES ('2', 'A-1', '1,3,4,5', '4', '52', '2016-05-16 11:28:36', '1');
INSERT INTO `ysd_order` VALUES ('3', 'A-2', '1,2,3,5', '4', '45', '2016-05-16 11:29:35', '1');
INSERT INTO `ysd_order` VALUES ('68', 'A-4', '1,2,4,5', '4', '101', '2016-05-16 11:33:40', '1');
INSERT INTO `ysd_order` VALUES ('69', 'A-3', '1,2,5', '3', '90', '2016-05-16 11:35:08', '1');
INSERT INTO `ysd_order` VALUES ('76', '999', '1,1,1', '3', '66', '1463980858', '1');
INSERT INTO `ysd_order` VALUES ('77', 'd11', '3,4,4,3', '4', '52', '1463981250', '1');
INSERT INTO `ysd_order` VALUES ('78', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('79', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('80', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('81', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('82', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('83', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('84', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('85', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('86', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('87', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('88', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('89', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('90', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('91', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('92', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('93', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('94', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('95', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('96', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('97', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('98', 'B66', '1,2,3,4,3', '5', '119', '1464169217', '1');
INSERT INTO `ysd_order` VALUES ('99', 'B69', '3,2,5,1', '4', '105', '1464236926', '1');
