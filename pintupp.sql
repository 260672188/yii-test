/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50628
Source Host           : localhost:3306
Source Database       : pintupp

Target Server Type    : MYSQL
Target Server Version : 50628
File Encoding         : 65001

Date: 2017-09-18 09:38:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for advertisement
-- ----------------------------
DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of advertisement
-- ----------------------------
INSERT INTO `advertisement` VALUES ('1', 'pear2007', '测试广告', '/upload/image/20160804/1470284563119266.jpg', '<p>范德萨发的范德萨</p>', '1', '1470284566', '1470284789');
INSERT INTO `advertisement` VALUES ('2', 'pear2007', '的范德萨', '/upload/image/20160804/1470284839320801.jpg', '<p><img src=\"/upload/image/20160804/1470284875509022.jpg\" title=\"1470284875509022.jpg\" alt=\"无标题.jpg\"/><img src=\"/upload/image/20160804/1470284902107002.jpg\" title=\"1470284902107002.jpg\" alt=\"图片1.jpg\"/></p>', '1', '1470284877', '1470284905');

-- ----------------------------
-- Table structure for articale
-- ----------------------------
DROP TABLE IF EXISTS `articale`;
CREATE TABLE `articale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of articale
-- ----------------------------
INSERT INTO `articale` VALUES ('1', 'pear2007', '111', '222', '344', '的人发的是', '1', '钉钉', '1', '1472722542', '1472724812');
INSERT INTO `articale` VALUES ('2', 'pear2007', '发生地方', '烦烦烦多少', '发生', '222', '3', '222222222', '1', '1472724361', '1472724361');

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('信息管理', '3', '1470975915');
INSERT INTO `auth_assignment` VALUES ('权限控制', '3', '1473644499');
INSERT INTO `auth_assignment` VALUES ('添加用户', '3', '1473644495');
INSERT INTO `auth_assignment` VALUES ('留言管理', '1', '1472455326');
INSERT INTO `auth_assignment` VALUES ('留言管理', '2', '1470740718');
INSERT INTO `auth_assignment` VALUES ('留言管理', '3', '1470975919');
INSERT INTO `auth_assignment` VALUES ('系统设置', '3', '1470975923');
INSERT INTO `auth_assignment` VALUES ('网站管理员', '2', '1470044164');
INSERT INTO `auth_assignment` VALUES ('网站运维', '3', '1470975934');
INSERT INTO `auth_assignment` VALUES ('超级用户', '1', '1470283233');
INSERT INTO `auth_assignment` VALUES ('超级用户', '2', '1472455813');

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/*', '2', null, null, null, '1472720711', '1472720711');
INSERT INTO `auth_item` VALUES ('/admin/*', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/assignment/*', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/assignment/assign', '2', null, null, null, '1470038527', '1470038527');
INSERT INTO `auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1470038527', '1470038527');
INSERT INTO `auth_item` VALUES ('/admin/assignment/revoke', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/assignment/view', '2', null, null, null, '1470038527', '1470038527');
INSERT INTO `auth_item` VALUES ('/admin/default/*', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/default/index', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/menu/*', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/menu/create', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/menu/delete', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/menu/update', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/menu/view', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/permission/*', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/permission/assign', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/permission/create', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/permission/delete', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/permission/remove', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/permission/update', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/permission/view', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/role/*', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/role/assign', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/role/create', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/role/delete', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/role/remove', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/role/update', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/role/view', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/route/*', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/route/assign', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/route/create', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/route/refresh', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/route/remove', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/rule/*', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/rule/create', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/rule/delete', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/rule/index', '2', null, null, null, '1470038528', '1470038528');
INSERT INTO `auth_item` VALUES ('/admin/rule/update', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/rule/view', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/user/*', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/user/activate', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/user/change-password', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/user/delete', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/user/index', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/user/login', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/user/logout', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/user/request-password-reset', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/user/reset-password', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/user/signup', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/admin/user/view', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/advertisement/*', '2', null, null, null, '1470278398', '1470278398');
INSERT INTO `auth_item` VALUES ('/advertisement/create', '2', null, null, null, '1470278397', '1470278397');
INSERT INTO `auth_item` VALUES ('/advertisement/delete', '2', null, null, null, '1470278398', '1470278398');
INSERT INTO `auth_item` VALUES ('/advertisement/index', '2', null, null, null, '1470278397', '1470278397');
INSERT INTO `auth_item` VALUES ('/advertisement/update', '2', null, null, null, '1470278398', '1470278398');
INSERT INTO `auth_item` VALUES ('/advertisement/upload', '2', null, null, null, '1470278397', '1470278397');
INSERT INTO `auth_item` VALUES ('/advertisement/view', '2', null, null, null, '1470278397', '1470278397');
INSERT INTO `auth_item` VALUES ('/articale/*', '2', null, null, null, '1472720710', '1472720710');
INSERT INTO `auth_item` VALUES ('/articale/create', '2', null, null, null, '1472720710', '1472720710');
INSERT INTO `auth_item` VALUES ('/articale/delete', '2', null, null, null, '1472720710', '1472720710');
INSERT INTO `auth_item` VALUES ('/articale/index', '2', null, null, null, '1472720710', '1472720710');
INSERT INTO `auth_item` VALUES ('/articale/update', '2', null, null, null, '1472720710', '1472720710');
INSERT INTO `auth_item` VALUES ('/articale/view', '2', null, null, null, '1472720710', '1472720710');
INSERT INTO `auth_item` VALUES ('/book/*', '2', null, null, null, '1470740582', '1470740582');
INSERT INTO `auth_item` VALUES ('/book/create', '2', null, null, null, '1470740582', '1470740582');
INSERT INTO `auth_item` VALUES ('/book/delall', '2', null, null, null, '1472451120', '1472451120');
INSERT INTO `auth_item` VALUES ('/book/delete', '2', null, null, null, '1470740582', '1470740582');
INSERT INTO `auth_item` VALUES ('/book/do', '2', null, null, null, '1472451120', '1472451120');
INSERT INTO `auth_item` VALUES ('/book/index', '2', null, null, null, '1470740582', '1470740582');
INSERT INTO `auth_item` VALUES ('/book/statusup', '2', null, null, null, '1472541605', '1472541605');
INSERT INTO `auth_item` VALUES ('/book/update', '2', null, null, null, '1470740582', '1470740582');
INSERT INTO `auth_item` VALUES ('/book/view', '2', null, null, null, '1470740582', '1470740582');
INSERT INTO `auth_item` VALUES ('/category/*', '2', null, null, null, '1472715941', '1472715941');
INSERT INTO `auth_item` VALUES ('/category/create', '2', null, null, null, '1472715941', '1472715941');
INSERT INTO `auth_item` VALUES ('/category/delete', '2', null, null, null, '1472715941', '1472715941');
INSERT INTO `auth_item` VALUES ('/category/index', '2', null, null, null, '1472715940', '1472715940');
INSERT INTO `auth_item` VALUES ('/category/update', '2', null, null, null, '1472715941', '1472715941');
INSERT INTO `auth_item` VALUES ('/category/view', '2', null, null, null, '1472715940', '1472715940');
INSERT INTO `auth_item` VALUES ('/channel/*', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/channel/create', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/channel/delete', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/channel/index', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/channel/update', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/channel/upload', '2', null, null, null, '1470044065', '1470044065');
INSERT INTO `auth_item` VALUES ('/channel/view', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/debug/*', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/debug/default/*', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/debug/default/db-explain', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/debug/default/download-mail', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/debug/default/index', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/debug/default/toolbar', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/debug/default/view', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/frendlink/*', '2', null, null, null, '1470278398', '1470278398');
INSERT INTO `auth_item` VALUES ('/frendlink/create', '2', null, null, null, '1470278398', '1470278398');
INSERT INTO `auth_item` VALUES ('/frendlink/delete', '2', null, null, null, '1470278398', '1470278398');
INSERT INTO `auth_item` VALUES ('/frendlink/index', '2', null, null, null, '1470278398', '1470278398');
INSERT INTO `auth_item` VALUES ('/frendlink/update', '2', null, null, null, '1470278398', '1470278398');
INSERT INTO `auth_item` VALUES ('/frendlink/upload', '2', null, null, null, '1470278398', '1470278398');
INSERT INTO `auth_item` VALUES ('/frendlink/view', '2', null, null, null, '1470278398', '1470278398');
INSERT INTO `auth_item` VALUES ('/gii/*', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/gii/default/*', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/gii/default/action', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/gii/default/diff', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/gii/default/index', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/gii/default/preview', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/gii/default/view', '2', null, null, null, '1470038529', '1470038529');
INSERT INTO `auth_item` VALUES ('/info/*', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/info/create', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/info/delete', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/info/index', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/info/update', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/info/upload', '2', null, null, null, '1470044066', '1470044066');
INSERT INTO `auth_item` VALUES ('/info/view', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/lookup/*', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/lookup/create', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/lookup/delete', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/lookup/index', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/lookup/update', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/lookup/view', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/page/*', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/page/create', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/page/delete', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/page/index', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/page/update', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/page/upload', '2', null, null, null, '1470044066', '1470044066');
INSERT INTO `auth_item` VALUES ('/page/view', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/partner/*', '2', null, null, null, '1470038531', '1470038531');
INSERT INTO `auth_item` VALUES ('/partner/create', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/partner/delete', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/partner/index', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/partner/update', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/partner/upload', '2', null, null, null, '1470044066', '1470044066');
INSERT INTO `auth_item` VALUES ('/partner/view', '2', null, null, null, '1470038530', '1470038530');
INSERT INTO `auth_item` VALUES ('/product/*', '2', null, null, null, '1472720711', '1472720711');
INSERT INTO `auth_item` VALUES ('/product/create', '2', null, null, null, '1472720710', '1472720710');
INSERT INTO `auth_item` VALUES ('/product/delete', '2', null, null, null, '1472720711', '1472720711');
INSERT INTO `auth_item` VALUES ('/product/index', '2', null, null, null, '1472720710', '1472720710');
INSERT INTO `auth_item` VALUES ('/product/update', '2', null, null, null, '1472720710', '1472720710');
INSERT INTO `auth_item` VALUES ('/product/view', '2', null, null, null, '1472720710', '1472720710');
INSERT INTO `auth_item` VALUES ('/site/*', '2', null, null, null, '1470038531', '1470038531');
INSERT INTO `auth_item` VALUES ('/site/error', '2', null, null, null, '1470038531', '1470038531');
INSERT INTO `auth_item` VALUES ('/site/index', '2', null, null, null, '1470038531', '1470038531');
INSERT INTO `auth_item` VALUES ('/site/login', '2', null, null, null, '1470038531', '1470038531');
INSERT INTO `auth_item` VALUES ('/site/logout', '2', null, null, null, '1470038531', '1470038531');
INSERT INTO `auth_item` VALUES ('/system/*', '2', null, null, null, '1470038531', '1470038531');
INSERT INTO `auth_item` VALUES ('/system/create', '2', null, null, null, '1470038531', '1470038531');
INSERT INTO `auth_item` VALUES ('/system/delete', '2', null, null, null, '1470038531', '1470038531');
INSERT INTO `auth_item` VALUES ('/system/index', '2', null, null, null, '1470038531', '1470038531');
INSERT INTO `auth_item` VALUES ('/system/update', '2', null, null, null, '1470038531', '1470038531');
INSERT INTO `auth_item` VALUES ('/system/upload', '2', null, null, null, '1470044066', '1470044066');
INSERT INTO `auth_item` VALUES ('/system/view', '2', null, null, null, '1470038531', '1470038531');
INSERT INTO `auth_item` VALUES ('产品管理', '2', '产品管理', null, null, '1472720966', '1472720966');
INSERT INTO `auth_item` VALUES ('信息管理', '2', null, null, null, '1470037424', '1470037424');
INSERT INTO `auth_item` VALUES ('修改密码', '2', null, null, null, '1472451198', '1472451198');
INSERT INTO `auth_item` VALUES ('基础权限', '1', '最基本的权限 注册用户拥有的', null, null, '1470038905', '1470038932');
INSERT INTO `auth_item` VALUES ('文章管理', '2', '管理文章', null, null, '1472720933', '1472720933');
INSERT INTO `auth_item` VALUES ('权限控制', '2', null, null, null, '1469677341', '1469677341');
INSERT INTO `auth_item` VALUES ('栏目管理', '2', null, null, null, '1472717740', '1472717740');
INSERT INTO `auth_item` VALUES ('添加用户', '2', '添加用户', null, null, '1472451705', '1472451705');
INSERT INTO `auth_item` VALUES ('用户信息', '2', '用户信息', null, null, '1472451750', '1472451750');
INSERT INTO `auth_item` VALUES ('用户管理', '2', '用户管理', null, null, '1470039267', '1470039267');
INSERT INTO `auth_item` VALUES ('留言管理', '2', '留言管理', null, null, '1470740379', '1472455315');
INSERT INTO `auth_item` VALUES ('系统安装', '2', null, null, null, '1469698679', '1469698679');
INSERT INTO `auth_item` VALUES ('系统设置', '2', null, null, null, '1470030841', '1470030841');
INSERT INTO `auth_item` VALUES ('网站管理员', '1', '信息管理 网站设置', null, null, '1470039003', '1470039003');
INSERT INTO `auth_item` VALUES ('网站运维', '2', null, null, null, '1470281836', '1470281836');
INSERT INTO `auth_item` VALUES ('超级用户', '1', '超级用户', null, null, '1470039028', '1470044314');
INSERT INTO `auth_item` VALUES ('运营', '1', '网站信息管理', null, null, '1469678010', '1470038973');
INSERT INTO `auth_item` VALUES ('重置密码', '2', '重置密码', null, null, '1472451803', '1472451803');

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/*');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/assignment/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/assignment/*');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/assignment/assign');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/assignment/assign');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/assignment/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/assignment/index');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/assignment/revoke');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/assignment/revoke');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/assignment/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/assignment/view');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/default/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/default/*');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/default/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/default/index');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/menu/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/menu/*');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/menu/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/menu/create');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/menu/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/menu/delete');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/menu/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/menu/index');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/menu/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/menu/update');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/menu/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/menu/view');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/permission/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/permission/*');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/permission/assign');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/permission/assign');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/permission/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/permission/create');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/permission/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/permission/delete');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/permission/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/permission/index');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/permission/remove');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/permission/remove');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/permission/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/permission/update');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/permission/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/permission/view');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/role/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/role/*');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/role/assign');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/role/assign');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/role/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/role/create');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/role/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/role/delete');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/role/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/role/index');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/role/remove');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/role/remove');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/role/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/role/update');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/role/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/role/view');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/route/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/route/*');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/route/assign');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/route/assign');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/route/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/route/create');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/route/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/route/index');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/route/refresh');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/route/refresh');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/route/remove');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/route/remove');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/rule/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/rule/*');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/rule/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/rule/create');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/rule/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/rule/delete');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/rule/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/rule/index');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/rule/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/rule/update');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/rule/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/rule/view');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/user/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/user/*');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/user/activate');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/user/activate');
INSERT INTO `auth_item_child` VALUES ('修改密码', '/admin/user/change-password');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/user/change-password');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/user/change-password');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/user/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/user/delete');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/user/index');
INSERT INTO `auth_item_child` VALUES ('用户管理', '/admin/user/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/user/index');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/user/login');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/user/login');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/user/logout');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/user/logout');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/user/request-password-reset');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/user/request-password-reset');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/user/reset-password');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/user/reset-password');
INSERT INTO `auth_item_child` VALUES ('重置密码', '/admin/user/reset-password');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/user/signup');
INSERT INTO `auth_item_child` VALUES ('添加用户', '/admin/user/signup');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/user/signup');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/user/view');
INSERT INTO `auth_item_child` VALUES ('用户信息', '/admin/user/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/admin/user/view');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/advertisement/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/advertisement/*');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/advertisement/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/advertisement/create');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/advertisement/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/advertisement/delete');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/advertisement/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/advertisement/index');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/advertisement/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/advertisement/update');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/advertisement/upload');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/advertisement/upload');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/advertisement/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/advertisement/view');
INSERT INTO `auth_item_child` VALUES ('文章管理', '/articale/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/articale/*');
INSERT INTO `auth_item_child` VALUES ('文章管理', '/articale/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/articale/create');
INSERT INTO `auth_item_child` VALUES ('文章管理', '/articale/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/articale/delete');
INSERT INTO `auth_item_child` VALUES ('文章管理', '/articale/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/articale/index');
INSERT INTO `auth_item_child` VALUES ('文章管理', '/articale/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/articale/update');
INSERT INTO `auth_item_child` VALUES ('文章管理', '/articale/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/articale/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/book/*');
INSERT INTO `auth_item_child` VALUES ('留言管理', '/book/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/book/create');
INSERT INTO `auth_item_child` VALUES ('留言管理', '/book/delall');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/book/delall');
INSERT INTO `auth_item_child` VALUES ('留言管理', '/book/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/book/delete');
INSERT INTO `auth_item_child` VALUES ('留言管理', '/book/do');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/book/do');
INSERT INTO `auth_item_child` VALUES ('留言管理', '/book/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/book/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/book/statusup');
INSERT INTO `auth_item_child` VALUES ('留言管理', '/book/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/book/update');
INSERT INTO `auth_item_child` VALUES ('留言管理', '/book/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/book/view');
INSERT INTO `auth_item_child` VALUES ('栏目管理', '/category/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/category/*');
INSERT INTO `auth_item_child` VALUES ('栏目管理', '/category/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/category/create');
INSERT INTO `auth_item_child` VALUES ('栏目管理', '/category/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/category/delete');
INSERT INTO `auth_item_child` VALUES ('栏目管理', '/category/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/category/index');
INSERT INTO `auth_item_child` VALUES ('栏目管理', '/category/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/category/update');
INSERT INTO `auth_item_child` VALUES ('栏目管理', '/category/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/category/view');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/channel/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/channel/*');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/channel/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/channel/create');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/channel/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/channel/delete');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/channel/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/channel/index');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/channel/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/channel/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/channel/upload');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/channel/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/channel/view');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/debug/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/debug/*');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/debug/default/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/debug/default/*');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/debug/default/db-explain');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/debug/default/db-explain');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/debug/default/download-mail');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/debug/default/download-mail');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/debug/default/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/debug/default/index');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/debug/default/toolbar');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/debug/default/toolbar');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/debug/default/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/debug/default/view');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/frendlink/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/frendlink/*');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/frendlink/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/frendlink/create');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/frendlink/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/frendlink/delete');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/frendlink/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/frendlink/index');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/frendlink/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/frendlink/update');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/frendlink/upload');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/frendlink/upload');
INSERT INTO `auth_item_child` VALUES ('网站运维', '/frendlink/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/frendlink/view');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/gii/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/gii/*');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/gii/default/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/gii/default/*');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/gii/default/action');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/gii/default/action');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/gii/default/diff');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/gii/default/diff');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/gii/default/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/gii/default/index');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/gii/default/preview');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/gii/default/preview');
INSERT INTO `auth_item_child` VALUES ('系统安装', '/gii/default/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/gii/default/view');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/info/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/info/*');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/info/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/info/create');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/info/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/info/delete');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/info/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/info/index');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/info/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/info/update');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/info/upload');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/info/upload');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/info/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/info/view');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/lookup/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/lookup/*');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/lookup/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/lookup/create');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/lookup/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/lookup/delete');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/lookup/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/lookup/index');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/lookup/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/lookup/update');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/lookup/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/lookup/view');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/page/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/page/*');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/page/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/page/create');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/page/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/page/delete');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/page/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/page/index');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/page/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/page/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/page/upload');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/page/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/page/view');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/partner/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/partner/*');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/partner/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/partner/create');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/partner/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/partner/delete');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/partner/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/partner/index');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/partner/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/partner/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/partner/upload');
INSERT INTO `auth_item_child` VALUES ('信息管理', '/partner/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/partner/view');
INSERT INTO `auth_item_child` VALUES ('产品管理', '/product/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/product/*');
INSERT INTO `auth_item_child` VALUES ('产品管理', '/product/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/product/create');
INSERT INTO `auth_item_child` VALUES ('产品管理', '/product/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/product/delete');
INSERT INTO `auth_item_child` VALUES ('产品管理', '/product/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/product/index');
INSERT INTO `auth_item_child` VALUES ('产品管理', '/product/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/product/update');
INSERT INTO `auth_item_child` VALUES ('产品管理', '/product/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/product/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/site/*');
INSERT INTO `auth_item_child` VALUES ('基础权限', '/site/error');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/site/error');
INSERT INTO `auth_item_child` VALUES ('基础权限', '/site/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/site/index');
INSERT INTO `auth_item_child` VALUES ('基础权限', '/site/login');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/site/login');
INSERT INTO `auth_item_child` VALUES ('基础权限', '/site/logout');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/site/logout');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/system/*');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/system/*');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/system/create');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/system/create');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/system/delete');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/system/delete');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/system/index');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/system/index');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/system/update');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/system/update');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/system/upload');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/system/upload');
INSERT INTO `auth_item_child` VALUES ('系统设置', '/system/view');
INSERT INTO `auth_item_child` VALUES ('超级用户', '/system/view');
INSERT INTO `auth_item_child` VALUES ('网站管理员', '信息管理');
INSERT INTO `auth_item_child` VALUES ('运营', '信息管理');
INSERT INTO `auth_item_child` VALUES ('网站管理员', '系统设置');

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for book
-- ----------------------------
DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `money` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `business` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of book
-- ----------------------------
INSERT INTO `book` VALUES ('2', '', null, null, '郭旭洋', '15201955759', null, '自主创业', null, '欲寻5万以内创业项目', '0', '1476141483', '1476141483');
INSERT INTO `book` VALUES ('3', '', null, null, '郭旭洋', '15201955759', null, '自主创业', null, '欲寻5万以内创业项目', '0', '0', '0');
INSERT INTO `book` VALUES ('41', '', null, null, '迟老二', '18643263039', 'top.missionciyco.com留言', '吉林省', '50万', '咨询', '0', '0', '0');
INSERT INTO `book` VALUES ('53', '', null, null, '王雷', '13939072867', 'top.missionciyco.com留言', '郑州', '', '', '0', '0', '0');
INSERT INTO `book` VALUES ('54', '', null, null, '王生', '13893265638', 'top.missionciyco.com留言', '甘肃兰州', '', '了解', '0', '0', '0');
INSERT INTO `book` VALUES ('55', '', null, null, '张寿东', '15525782626', 'top.missionciyco.com留言', '山西省吕梁', '5万', '想了解了解', '0', '0', '0');
INSERT INTO `book` VALUES ('56', '', null, null, '包惠东', '13812290600', 'top.missionciyco.com留言', '江苏无锡东港', '一万', '想了解', '0', '0', '0');
INSERT INTO `book` VALUES ('57', '', null, null, '周石山', '13974312539', 'top.missionciyco.com留言', '湖南吉首', '100000', '', '0', '0', '0');
INSERT INTO `book` VALUES ('58', '', null, null, '谢旭明', '18767802580', 'top.missionciyco.com留言', '  浙江省', '', '', '0', '0', '0');
INSERT INTO `book` VALUES ('59', '', null, null, '谢旭明', '18767802580', 'top.missionciyco.com留言', '  浙江省', '', '', '0', '0', '0');
INSERT INTO `book` VALUES ('60', '', null, null, '鱼', '15318828880', 'top.missionciyco.com留言', '山东', '', '', '0', '0', '0');
INSERT INTO `book` VALUES ('70', '', null, null, '测试', '13524325827', 'top.missionciyco.com留言', '', '', '', '0', '1476425890', '0');
INSERT INTO `book` VALUES ('71', '', null, null, '姜志刚', '15188803111', 'top.missionciyco.com留言', '', '', '', '0', '1476697192', '0');
INSERT INTO `book` VALUES ('72', '', null, null, '陈和平', '13702736598', 'top.missionciyco.com留言', '广东湛江市', '希望先了解品牌质量，实用价值，用户接受能力等再定。', '', '0', '1476698474', '0');
INSERT INTO `book` VALUES ('73', '', null, null, '王小华', '18037289333', 'top.missionciyco.com留言', '河南省林州市', '50000', '', '0', '1476700630', '0');
INSERT INTO `book` VALUES ('74', '', null, null, '王小华', '18037289333', 'top.missionciyco.com留言', '河南省林州市', '50000', '最小额度是多少', '0', '1476700674', '0');
INSERT INTO `book` VALUES ('75', '', null, null, '黄芭', '15886488567', 'top.missionciyco.com留言', '', '', '', '0', '1476702198', '0');
INSERT INTO `book` VALUES ('76', '', null, null, '胡哲铭', '15181946800', 'top.missionciyco.com留言', '四川省遂宁船山区德胜西路168号', '1000', '', '0', '1476706912', '0');
INSERT INTO `book` VALUES ('77', '', null, null, '张国飞', '18687401573', 'top.missionciyco.com留言', '云南省曲靖市', '', '', '0', '1476785975', '0');
INSERT INTO `book` VALUES ('78', '', null, null, '123', '13549635092', 'top.missionciyco.com留言', '', '', '在常德需要安装师傅请电13549635082', '1', '1476842188', '0');
INSERT INTO `book` VALUES ('79', '', null, null, '123', '13549635092', 'top.missionciyco.com留言', '', '', '在常德需要安装师傅请电13549635082', '1', '1476842198', '0');
INSERT INTO `book` VALUES ('80', '', null, null, '陈忠文', '13302934808', 'top.missionciyco.com留言', '深圳市龙岗区丰田路162号', '', '', '1', '1476843789', '0');
INSERT INTO `book` VALUES ('81', '', null, null, '沈女士', '18616611116', null, '上海睦邦', null, '我们有社区便民服务连锁项目，需招商外包', '1', '1482917164', '1482917164');
INSERT INTO `book` VALUES ('82', '', null, null, '徐先生', '13601950460', null, '精中教育集团', null, '本公司新创品牌需要针对全国对外招商，儿童艺术教育手作。希望寻求外包服务公司', '1', '1492655635', '1492655635');
INSERT INTO `book` VALUES ('83', '', null, null, '陈总', '18889649989', null, '中房集团', null, '营利项目\r\n演艺中心招省区代理\r\n外包\r\n项目联系人：18889649989 陈总', '1', '1492763521', '1492763521');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '名字',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父id',
  `created_at` int(10) NOT NULL,
  `updated_at` int(10) NOT NULL,
  `slug` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descriptions` varchar(1000) COLLATE utf8_unicode_ci DEFAULT '',
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `article` int(10) NOT NULL DEFAULT '0',
  `sort` tinyint(1) NOT NULL DEFAULT '0',
  `module` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'base' COMMENT '文档类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '新闻', '0', '1472629407', '1472629695', 'news', null, '', null, '1', '2', 'new');
INSERT INTO `category` VALUES ('2', '产品', '0', '1472629851', '1472629851', 'pro', null, '', null, '0', '0', 'pro');
INSERT INTO `category` VALUES ('3', '公司新闻', '1', '1472629891', '1472629891', 'companynew', null, '', null, '0', '0', 'new');
INSERT INTO `category` VALUES ('4', '活动', '3', '1472629912', '1472629912', 'hd', null, '', null, '0', '0', 'new');
INSERT INTO `category` VALUES ('5', '拼一下', '2', '1472629940', '1472629940', 'pyx', null, '', null, '0', '0', 'pro');
INSERT INTO `category` VALUES ('6', '纯净水', '2', '1472629965', '1472629965', 'cjs', null, '', null, '0', '0', 'pro');
INSERT INTO `category` VALUES ('7', '农夫山泉', '6', '1472711829', '1472711829', 'nfsq', '农夫山泉有点甜', '农夫山泉有点甜', '农夫山泉有点甜农夫山泉有点甜农夫山泉有点甜', '0', '1', 'pro');

-- ----------------------------
-- Table structure for channel
-- ----------------------------
DROP TABLE IF EXISTS `channel`;
CREATE TABLE `channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `cid` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT '0',
  `keyword` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of channel
-- ----------------------------
INSERT INTO `channel` VALUES ('1', '', '公司新闻', 'pear2007', '', '', '', '1', '1472610729', '1472610729', '1', '1');

-- ----------------------------
-- Table structure for frendlink
-- ----------------------------
DROP TABLE IF EXISTS `frendlink`;
CREATE TABLE `frendlink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sitetitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siteurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sitetitle` (`sitetitle`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of frendlink
-- ----------------------------
INSERT INTO `frendlink` VALUES ('1', 'pear2007', '拼一下', 'http://www.pingoing.cn/', '/upload/image/20160804/1470284728753400.jpg', '1', '1', '1472717533');
INSERT INTO `frendlink` VALUES ('2', 'pear2007', '测试2', 'http://www.pingoing.cn/', 'http://www.pingoing.cn/logo.jpg', '1', '1470284527', '1472717666');

-- ----------------------------
-- Table structure for info
-- ----------------------------
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of info
-- ----------------------------
INSERT INTO `info` VALUES ('1', 'pear2007', '发生', '发生发生的', '车位是电风扇', '/upload/image/20160901/1472716255393310.png', '<p>发生</p>', '1', '1472716257', '1472716257');
INSERT INTO `info` VALUES ('2', 'pear2007', '没撒测试的放大', '没撒测试的放大', '没撒测试的放大', '/upload/image/20160901/1472717891849533.png', '<p>没撒测试的放大</p>', '1', '1472717894', '1472717894');

-- ----------------------------
-- Table structure for lookup
-- ----------------------------
DROP TABLE IF EXISTS `lookup`;
CREATE TABLE `lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lookup
-- ----------------------------
INSERT INTO `lookup` VALUES ('1', '显示', '1', 'status', '1');
INSERT INTO `lookup` VALUES ('2', '隐藏', '0', 'status', '2');
INSERT INTO `lookup` VALUES ('4', '新闻', '1', 'sys', '1');
INSERT INTO `lookup` VALUES ('5', '产品', '2', 'sys', '2');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '权限控制', null, null, '8', 0x7B2269636F6E223A2266612066612D6C6F636B222C2276697369626C65223A747275657D);
INSERT INTO `menu` VALUES ('2', '路由', '1', '/admin/route/index', '1', null);
INSERT INTO `menu` VALUES ('3', '权限', '1', '/admin/permission/index', '2', null);
INSERT INTO `menu` VALUES ('4', '角色', '1', '/admin/role/index', '3', null);
INSERT INTO `menu` VALUES ('5', '分配', '1', '/admin/assignment/index', '4', null);
INSERT INTO `menu` VALUES ('6', '菜单', '1', '/admin/menu/index', '5', null);
INSERT INTO `menu` VALUES ('7', '系统安装', null, null, '9', 0x7B2269636F6E223A2266612066612D636F67222C2276697369626C65223A747275657D);
INSERT INTO `menu` VALUES ('8', 'GII', '7', '/gii/default/index', '1', null);
INSERT INTO `menu` VALUES ('9', 'Debug', '7', '/debug/default/index', null, 0x7B2269636F6E223A226661202066612D73746574686F73636F7065222C2276697369626C65223A747275657D);
INSERT INTO `menu` VALUES ('10', '系统设置', null, null, '3', 0x7B2269636F6E223A2266612066612D7772656E6368222C2276697369626C65223A747275657D);
INSERT INTO `menu` VALUES ('11', '联动', '10', '/lookup/index', null, null);
INSERT INTO `menu` VALUES ('12', '网站设置', '10', '/system/index', '2', null);
INSERT INTO `menu` VALUES ('13', '信息管理', null, null, '5', 0x207B2269636F6E223A2266612066612D66696C652D746578742D6F222C2276697369626C65223A747275657D);
INSERT INTO `menu` VALUES ('14', '信息', '13', '/info/index', null, null);
INSERT INTO `menu` VALUES ('15', '代理', '13', '/partner/index', null, null);
INSERT INTO `menu` VALUES ('16', '栏目', '13', '/channel/index', null, null);
INSERT INTO `menu` VALUES ('17', '用户管理', null, null, '2', 0x207B2269636F6E223A2266612066612D7573657273222C2276697369626C65223A747275657D);
INSERT INTO `menu` VALUES ('18', '用户列表', '17', '/admin/user/index', null, 0x207B2269636F6E223A226661202066612D75736572222C2276697369626C65223A747275657D);
INSERT INTO `menu` VALUES ('19', '单页', '13', '/page/index', null, null);
INSERT INTO `menu` VALUES ('20', '网站运维', null, null, '4', 0x200D0A7B2269636F6E223A2266612066612D6C696E6B222C2276697369626C65223A747275657D);
INSERT INTO `menu` VALUES ('21', '友情链接', '20', '/frendlink/index', null, null);
INSERT INTO `menu` VALUES ('22', '广告碎片', '20', '/advertisement/index', null, null);
INSERT INTO `menu` VALUES ('23', '留言管理', null, null, '0', 0x207B2269636F6E223A226661202066612D666178222C2276697369626C65223A747275657D);
INSERT INTO `menu` VALUES ('24', '留言', '23', '/book/index', null, null);
INSERT INTO `menu` VALUES ('25', '修改密码', '17', '/admin/user/change-password', null, null);
INSERT INTO `menu` VALUES ('26', '栏目管理', '13', '/category/index', '3', null);
INSERT INTO `menu` VALUES ('27', '文章管理', null, null, '1', 0x207B2269636F6E223A2266612066612D66696C652D746578742D6F222C2276697369626C65223A747275657D);
INSERT INTO `menu` VALUES ('28', '产品管理', null, null, '2', 0x207B2269636F6E223A2266612066612D66696C652D746578742D6F222C2276697369626C65223A747275657D);
INSERT INTO `menu` VALUES ('29', '文章管理', '27', '/articale/index', null, null);
INSERT INTO `menu` VALUES ('30', '产品管理', '28', '/product/index', null, null);

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1469673122');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1469673579');
INSERT INTO `migration` VALUES ('m140602_111327_create_menu_table', '1469677287');
INSERT INTO `migration` VALUES ('m160722_074830_info', '1469698443');
INSERT INTO `migration` VALUES ('m160722_074927_partner', '1469698443');
INSERT INTO `migration` VALUES ('m160722_074954_page', '1469698443');
INSERT INTO `migration` VALUES ('m160722_092859_system', '1469698443');
INSERT INTO `migration` VALUES ('m160804_022858_frendlink', '1470280744');
INSERT INTO `migration` VALUES ('m160804_023016_advertisement', '1470280745');
INSERT INTO `migration` VALUES ('m160809_102350_book', '1470740118');
INSERT INTO `migration` VALUES ('m160901_084136_articale', '1472720480');
INSERT INTO `migration` VALUES ('m160901_084148_product', '1472720480');

-- ----------------------------
-- Table structure for page
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES ('1', 'pear2007', '关于拼一下', '关于拼一下', '关于我们', '/upload/image/20160809/1470736775881506.png', '<h2 style=\"box-sizing: border-box; font-family: inherit; font-weight: 300; line-height: 1.1; color: rgb(51, 51, 51); margin-top: 20px; margin-bottom: 10px; font-size: 30px; text-align: left;\">关于我们</h2><p><img src=\"/upload/image/20160809/1470736932120639.jpg\" title=\"1470736932120639.jpg\" alt=\"sin1.jpg\"/></p><p style=\"text-align: left;\"><img class=\"img-responsive sin-on\" src=\"http://www.p.cms/admin/assets/ced93e65/themes/default/images/spacer.gif\" style=\"background:url(http://www.p.cms/admin/assets/ced93e65/lang/zh-cn/images/localimage.png) no-repeat center center;border:1px solid #ddd\" word_img=\"file:///C:/Users/Administrator.USER-20160523NP/Desktop/P/images/sin1.jpg\"/></p><p>11111111</p><p style=\"text-align: left;\"><strong style=\"box-sizing: border-box; font-size: 1.9em; display: block; height: 55px; text-align: left;\">公司</strong><span style=\"box-sizing: border-box; font-size: 1.7em;\">简介</span></p><p style=\"text-align: left;\"><span style=\"box-sizing: border-box; font-size: 1.7em;\"></span></p><p class=\"sed\" style=\"box-sizing: border-box; margin-top: 0.5em; margin-bottom: 1em; font-size: 0.95em; line-height: 1.8em; text-align: left;\">拼一下商城是上海果色天香网络科技有限公司旗下的网上水果生鲜交易平台，于2015年在上海成立，是国内最早的拼团用户模式的开创者，此模式因其优化产业链、提升服务效率与客户体验被用户广泛接受，同时也被各地互联网创业者竞相复制模仿。 拼一下在水果供应链有独特的优势，在2015年的时候深耕全国水果产地，与140多家水果产地合作社和生态种植公司建立了合作关系，深度打造了自己的供应链体系。</p><p style=\"text-align: left;\"><img class=\"img-responsive sin-on\" src=\"http://www.p.cms/admin/assets/ced93e65/themes/default/images/spacer.gif\" style=\"background:url(http://www.p.cms/admin/assets/ced93e65/lang/zh-cn/images/localimage.png) no-repeat center center;border:1px solid #ddd\" word_img=\"file:///C:/Users/Administrator.USER-20160523NP/Desktop/P/images/sin.jpg\"/><img src=\"http://www.p.cms/upload/image/20160809/1470736869708260.jpg\" title=\"1470736869708260.jpg\" alt=\"sin.jpg\" style=\"font-size: 27.2px; white-space: normal;\"/></p><p style=\"text-align: left;\"><strong style=\"box-sizing: border-box; font-size: 1.9em; display: block; height: 55px; text-align: left;\"><br/></strong><strong style=\"box-sizing: border-box; font-size: 1.9em; display: block; height: 55px; text-align: left;\">公司</strong><span style=\"box-sizing: border-box; font-size: 1.7em;\">愿景</span></p><p class=\"sed\" style=\"box-sizing: border-box; margin-top: 0.5em; margin-bottom: 1em; font-size: 0.95em; line-height: 1.8em; text-align: left;\">• 用户：实惠，便利，快捷<br style=\"box-sizing: border-box;\"/>• 合伙人：全方位支持，财富创造<br style=\"box-sizing: border-box;\"/>• 公司：同合伙人及合作商一道打造最大的移动互联网生鲜企业<br style=\"box-sizing: border-box;\"/>• 行业：朝阳行业，最后一片蓝海，努力做行业经营模式的创新者</p><p class=\"sed\" style=\"box-sizing: border-box; margin-top: 0.5em; margin-bottom: 1em; font-size: 0.95em; line-height: 1.8em; text-align: left;\"><br/></p><p style=\"text-align: left;\"><img class=\"img-responsive sin-on\" src=\"http://www.p.cms/admin/assets/ced93e65/themes/default/images/spacer.gif\" style=\"background:url(http://www.p.cms/admin/assets/ced93e65/lang/zh-cn/images/localimage.png) no-repeat center center;border:1px solid #ddd\" word_img=\"file:///C:/Users/Administrator.USER-20160523NP/Desktop/P/images/sin2.jpg\"/></p><p style=\"text-align: left;\"><strong style=\"box-sizing: border-box; font-size: 1.9em; display: block; height: 55px; text-align: left;\">公司</strong><span style=\"box-sizing: border-box; font-size: 1.7em;\">文化</span></p><p class=\"sed\" style=\"box-sizing: border-box; margin-top: 0.5em; margin-bottom: 1em; font-size: 0.95em; line-height: 1.8em; text-align: left;\">“真、诚、惠、利”是企业经营文化理念， “真心服务”、 “诚信为本”、 “尚惠贵和”、“先义后利”等思想均在拼一下商城的企业文化中得以诠释和延伸。</p><p style=\"text-align: left;\"><img class=\"img-responsive sin-on\" src=\"http://www.p.cms/admin/assets/ced93e65/themes/default/images/spacer.gif\" style=\"background:url(http://www.p.cms/admin/assets/ced93e65/lang/zh-cn/images/localimage.png) no-repeat center center;border:1px solid #ddd\" word_img=\"file:///C:/Users/Administrator.USER-20160523NP/Desktop/P/images/sin3.jpg\"/></p><p style=\"text-align: left;\"><strong style=\"box-sizing: border-box; font-size: 1.9em; display: block; height: 55px; text-align: left;\">未来</strong><span style=\"box-sizing: border-box; font-size: 1.7em;\">规划</span></p><p class=\"sed\" style=\"box-sizing: border-box; margin-top: 0.5em; margin-bottom: 1em; font-size: 0.95em; color: rgb(0, 0, 0); line-height: 1.8em; text-align: left;\">“拼一下商城将竭力打造拼团购物的标杆，一年内扶持200家城市合伙人，两年内打造城市合伙人比较完善的联营体系，优化产品和市场结构，三年做到全国城市合伙人覆盖。 我们的每一步都离不开你的关注和支持，相信未来我们能够共创无可限量的价值！！！</p><p><br/></p>', '1', '1470102606', '1471416461');
INSERT INTO `page` VALUES ('2', 'pear2007', '联系我们', '联系我们', '联系我们', '/upload/image/20160809/1470737025129529.png', '<p style=\"text-align: center;\"><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司名称：上海果色天香网络科技有限公司</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司地址：上海市杨浦区国定东路200号</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;免费电话：400-8088-917</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;招商地址：上海市普陀区中江路118弄22号<br/></p><p style=\"text-align: center;\"><img width=\"530\" class=\"img-responsive\" height=\"260\" src=\"http://api.map.baidu.com/staticimage?center=121.399162,31.228743&zoom=15&width=530&height=260&markers=121.400204,31.22801\"/></p><p style=\"text-align: center;\">招商部地址</p><p style=\"text-align: center;\"><br/><img width=\"530\" class=\"img-responsive\" height=\"260\" src=\"http://api.map.baidu.com/staticimage?center=121.526698,31.305343&zoom=13&width=530&height=260&markers=121.526141,31.303415\"/></p><p style=\"text-align: center;\">项目方地址</p>', '1', '1470127881', '1471511626');
INSERT INTO `page` VALUES ('3', 'pear2007', ' 招商加盟', ' 招商加盟', '招商加盟', '1111', '<ul class=\"pws_tabs_controll list-paddingleft-2\" style=\"list-style-type: none;\"><li><p><br/></p></li></ul><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/source.jpg\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">资源优势</h3><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 17px; color: rgb(111, 111, 111); line-height: 28px; font-weight: lighter;\">截止到2014年底，通路快建成立5年来，在为700多家企业提供渠道建设及全网营销服务，通过不断整合推广资源，积 累服务经验，培养近2000人的服务团队，为客户提供优质服务奠定了良好的基础。</p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">推广资源</h3><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 17px; color: rgb(111, 111, 111); line-height: 28px; font-weight: lighter;\">通路快建“天罗地网”推广资源汇聚千万投资者。<br style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"/>线上以百度、360等搜索引擎为主的全网络推广，线下有设立于机场、高铁站的生意街商机门店。以生意街为核心的网站群，<br style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"/>涵盖PC端与移动端，覆盖一、二、三、四线城市，汇聚中国3000万投资创业者与经销商人群。</p><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/tuiguangziyyuan.jpg\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">团队资源</h3><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 17px; color: rgb(111, 111, 111); line-height: 28px; font-weight: lighter;\">通路快建目前拥有近2000名员工，16大服务中心、13大资源平台、1000座席Call Center、超过300位专业营销、200位 网络营销、400位IT 技术的专业团队共同发力，为企业提供全渠道建设和全网营销服务。</p><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/tuandui.jpg\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">技术优势</h3><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 17px; color: rgb(111, 111, 111); line-height: 28px; font-weight: lighter;\">在招商和营销领域，独立研发了近30多项IT、互联网和移动应用技术。通过IT化云管理系统，帮助企业转型与升级，保障服 务效果与效率的提升。</p><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/jisuziyuan.jpg\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">一体化服务优势</h3><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 17px; color: rgb(111, 111, 111); line-height: 28px; font-weight: lighter;\">通路快建的产品服务覆盖营销全过程——<br style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"/>营销战略及规划，确定发展方向，规划内容包括：品牌、产品、渠道等；<br style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"/>商机包装与策划，帮你设计好生意；<br style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"/>产品的分销平台，让亿万生意人都成为你的代理商；<br style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"/>精准的招商推广，智能化管理体系，确保招商效果最大化；<br style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"/>OTO系统解决方案，打通线上线下、店前与后厂所有环节，让企业更高效；<br style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"/>通过平台化的管理方式，让渠道运营更高效，解决终端动销、管理、培训；<br style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"/>通路快建构建的生态服务系统，将为企业提供更多元化的服务；如手畅移动广告投放平台，赚零用移动自助调研、自媒<br style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"/>体推广平台，快速提供品牌知名度和产品客户体验；农村电商平台，让您的产品快速进入广大农村市场。</p><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/hezuo.jpg\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">战略合作</h3><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 17px; color: rgb(111, 111, 111); line-height: 28px; font-weight: lighter;\">通路快建的商业模式开创业内的先河，我们已经与多家风投机构、政府机构、媒体等达成了多元的战略合作伙伴关系。同共 为合作伙伴提供资本对接和为消费者提供零售体验，推动市场转型与升级，为市场创造更大价值。同时帮助政府招商引资、 促进就业。</p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">投融资机构</h3><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/mm-324-zlpn2.png\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">媒体机构</h3><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/mm-324-zlpn3.png\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">同业联盟</h3><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/mm-324-zlpn4.png\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">政府、商会、协会</h3><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/mm-324-zlpn5.png\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/partner.jpg\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">营销思想与方法</h3><p style=\"box-sizing: border-box; margin-top: 15px; margin-bottom: 15px; padding: 0px; list-style: none; font-size: 17px; color: rgb(111, 111, 111); line-height: 28px; font-weight: lighter;\">出发点：一个好生意应该吸引投资者，打动经销商，赢得消费者，最终为企业获取大量现金流。<br style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"/>通路快建成立5年来，在为700多家企业提供渠道建设及全网营销服务的过程中，积累了成熟的渠道建设、企业盈利模式设计、<br style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"/>营销全系统打造等多方面的经验，形成了特有的理论体系与行之有效的作业方法。</p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">渠道盈利三角模型</h3><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/yinglidanjiao_05.jpg\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">好商机的模型 （6CP+3个好）</h3><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/moxing_05.jpg\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">好商机传播9要素</h3><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/yaosu_05.jpg\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">商机投资价值坐标原理</h3><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/mar2_05.jpg\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">渠道建设闭环</h3><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/mar1_05.jpg\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 35px 0px; padding: 0px; list-style: none; font-size: 35px;\">以渠道为原点的研发</h3><p><img src=\"http://localhost:52811/resource/tonglu2016/images/ziyuanyoushi/yanfa_05.jpg\" alt=\"招商外包，分销渠道、渠道建设、营销策划、营销托管、市场营销、市场托管、销售托管、产品策划、渠道外包、渠道拓展、市场开发、新品上市、新品招商、招代理商\" style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; display: block; border: none;\"/></p><h3 style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; list-style: none; font-size: x-large; font-weight: lighter; background: rgb(164, 166, 172);\">留言申请合作</h3><p style=\"text-align: center;\"><iframe class=\"yanzheng\" src=\"http://www.875.cn/leaveword/enterprise\" frameborder=\"0\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; font-size: 14px; width: 585px; height: 517px;\"></iframe></p><p><br/></p>', '1', '1470231292', '1470294527');
INSERT INTO `page` VALUES ('4', 'admin', '拼一下APP下载', '拼一下APP下载', '下载APP', '/upload/image/20160809/1470730895217310.jpg', '<p><img src=\"/images/az.png\" class=\"img-responsive\"/></p><h6>Android版</h6><p><img src=\"/images/pg.png\" class=\"img-responsive\"/></p><h6>iphone版</h6><p><img src=\"/images/gz.png\" class=\"img-responsive\"/></p><h6>微信公众号</h6>', '1', '1470730902', '1470731649');

-- ----------------------------
-- Table structure for partner
-- ----------------------------
DROP TABLE IF EXISTS `partner`;
CREATE TABLE `partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of partner
-- ----------------------------
INSERT INTO `partner` VALUES ('1', 'pear2007', '深圳合伙人刘先生', '深圳合伙人刘先生', '深圳合伙人刘先生', '/upload/image/20160809/1470733307135003.jpg', '<p style=\"text-align: center;\">&nbsp; &nbsp;<img src=\"/upload/image/20160809/1470734644122352.jpg\" title=\"1470734644122352.jpg\" alt=\"cg2.jpg\"/>\r\n \r\n </p>', '1', '1470128928', '1470981303');
INSERT INTO `partner` VALUES ('2', 'admin', '信阳合伙人王先生', '信阳合伙人王先生', '信阳合伙人王先生', '/upload/image/20160809/1470733210603434.jpg', '<p style=\"text-align: center;\"><img src=\"/upload/image/20160809/1470733387114021.jpg\" title=\"1470733387114021.jpg\" alt=\"cg1.jpg\"/></p><p style=\"text-align: center;\">信阳合伙人王先生</p>', '1', '1470227901', '1470733401');
INSERT INTO `partner` VALUES ('3', 'admin', '咸宁合伙人王先生', '咸宁合伙人王先生', '咸宁合伙人王先生', '/upload/image/20160809/1470733312108427.jpg', '<p style=\"text-align:center\"><img src=\"/upload/image/20160809/1470733329793075.jpg\" title=\"1470733329793075.jpg\" alt=\"cg3.jpg\"/></p><p style=\"text-align: center;\"><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑; font-size: 18px; line-height: 19.8px; text-align: center; background-color: rgb(255, 255, 255);\">咸宁合伙人王先生</span></p>', '1', '1470227912', '1470733342');
INSERT INTO `partner` VALUES ('4', 'admin', '嘉兴合伙人颜先生', '嘉兴合伙人颜先生', '嘉兴合伙人颜先生', '/upload/image/20160812/1470968689127937.jpg', '<p><br/></p><p style=\"text-align: center;\"><img src=\"/upload/image/20160812/1470968696934521.jpg\" title=\"1470968696934521.jpg\" alt=\"嘉兴颜.jpg\"/></p><p style=\"text-align: center;\">嘉兴合伙人颜先生</p>', '1', '1470227926', '1470968714');
INSERT INTO `partner` VALUES ('5', 'admin', '衢州合伙人杜先生', '衢州合伙人杜先生', '衢州合伙人杜先生', '/upload/image/20160809/1470733564327041.jpg', '<p style=\"text-align: center;\"><img src=\"/upload/image/20160809/1470734718725128.jpg\" title=\"1470734718725128.jpg\" alt=\"cg5.jpg\"/></p><p style=\"text-align: center;\">衢州合伙人杜先生</p>', '1', '1470227944', '1470734763');
INSERT INTO `partner` VALUES ('6', 'pear2007', '马鞍山合伙人杨先生', '马鞍山合伙人杨先生', '马鞍山合伙人杨先生', '/upload/image/20160809/1470733599628264.jpg', '<p style=\"text-align: center;\"><img src=\"/upload/image/20160809/1470734793745654.jpg\" title=\"1470734793745654.jpg\" alt=\"cg6.jpg\"/></p><p style=\"text-align: center;\">马鞍山合伙人杨先生</p>', '1', '1470227980', '1470979262');
INSERT INTO `partner` VALUES ('13', 'admin', '太原合伙人王先生', '太原合伙人王先生', '太原合伙人王先生', '/upload/image/20160812/1470966971920105.jpg', '<p><br/></p><p style=\"text-align: center;\"><img src=\"/upload/image/20160812/1470966983646767.jpg\" title=\"1470966983646767.jpg\" alt=\"山西省王.jpg\"/></p><p style=\"text-align: center;\">太原合伙人王先生</p>', '1', '1470733924', '1470968392');
INSERT INTO `partner` VALUES ('14', 'admin', '衡阳合伙人王先生', '衡阳合伙人王先生', '衡阳合伙人王先生', '/upload/image/20160812/1470967215154484.jpg', '<p style=\"text-align: center;\"><img src=\"/upload/image/20160812/1470967224779391.jpg\" title=\"1470967224779391.jpg\" alt=\"衡阳王.jpg\"/></p><p style=\"text-align: center;\">衡阳合伙人王先生</p>', '1', '1470736761', '1470967233');
INSERT INTO `partner` VALUES ('15', 'pear2007', '河南驻马店 拼一下代理商  河南驻马店田先生', '河南驻马店 拼一下代理商  河南驻马店田先生', '河南驻马店田先生', '/upload/image/20160812/1470981320748968.jpg', '<p style=\"text-align: center;\"><img src=\"/upload/image/20160812/1470981163494994.jpg\" title=\"1470981163494994.jpg\" alt=\"河南驻马店 拼一下代理商 河南驻马店田先生.jpg\"/></p>', '1', '1470981171', '1470981322');
INSERT INTO `partner` VALUES ('16', 'pear2007', '拼一下河南郑州刘先生', '拼一下河南郑州刘先生签约照', '河南郑州刘先生', '/upload/image/20160812/1470983181986804.jpg', '<p style=\"text-align: center;\"><img src=\"/upload/image/20160812/1470983194139500.jpg\" title=\"1470983194139500.jpg\" alt=\"河南郑州刘先生.jpg\"/></p>', '1', '1470983213', '1470983213');
INSERT INTO `partner` VALUES ('17', 'pear2007', '拼一下海南省  海口市代理吴先生', '拼一下海南省  海口市代理吴先生', '海南省海口市吴先生', '/upload/image/20160812/1470986142367577.jpg', '<p style=\"text-align: center;\"><img src=\"/upload/image/20160812/1470985359102316.jpg\" title=\"1470985359102316.jpg\" alt=\"海南省 海口市拼一下代理.jpg\"/></p>', '1', '1470985363', '1471082672');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'pear2007', '大杀四方', '地方司法', '发生', '1', '5', '而撒打算', '1', '1472722601', '1472796960');

-- ----------------------------
-- Table structure for system
-- ----------------------------
DROP TABLE IF EXISTS `system`;
CREATE TABLE `system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weburl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sitelogo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8_unicode_ci,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of system
-- ----------------------------
INSERT INTO `system` VALUES ('1', '上海品途品牌管理有限公司', 'http://www.pintupp.com/', '/upload/image/20160903/1472894013111813.png', ' ', ' ', '沪ICP备16021082号-1', '上海普陀中江路路118弄22号', '021-51352250', '11', '<p>&nbsp;上海品途品牌管理有限公司</p>', '1', '1', '1474438080');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'pear2007', '7hoFBmxeAuhyxqsZD_KpAqwD5aP2J9NP', '$2y$13$PWlvQlHuJq2KJGYQYRF7ee6KVU1QjA0CNW.cISo8yxv71wOY2tl3.', null, 'ncplum@qq.com', '10', '1469674505', '1505698655');
