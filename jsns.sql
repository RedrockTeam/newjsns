/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : jsns

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-04-21 18:04:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `album`
-- ----------------------------
DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `album_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `album_cover` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `comment_num` int(11) DEFAULT NULL,
  `love_num` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of album
-- ----------------------------
INSERT INTO `album` VALUES ('73', '1', '12', 'dd', '0', '2015-04-16 23:49:21', '2015-04-16 23:52:46', '0', '0', '1');
INSERT INTO `album` VALUES ('74', '1', null, null, '2', '2015-04-16 23:49:21', '2015-04-16 23:49:21', '0', '0', '1');
INSERT INTO `album` VALUES ('75', '1', null, null, null, '2015-04-16 23:49:23', '2015-04-16 23:49:23', '0', '0', '1');
INSERT INTO `album` VALUES ('76', '1', null, null, null, '2015-04-16 23:53:18', '2015-04-16 23:53:18', '0', '0', '1');
INSERT INTO `album` VALUES ('77', '1', '12', '', '67', '2015-04-16 23:53:19', '2015-04-17 00:00:03', '0', '0', '1');
INSERT INTO `album` VALUES ('78', '1', '13', 'test', '67', '2015-04-17 00:02:54', '2015-04-17 00:02:57', '0', '0', '1');
INSERT INTO `album` VALUES ('79', '1', null, null, null, '2015-04-17 00:02:54', '2015-04-17 00:02:54', '0', '0', '1');
INSERT INTO `album` VALUES ('80', '1', '13', 'test', '67', '2015-04-17 00:04:51', '2015-04-17 00:04:53', '0', '0', '1');
INSERT INTO `album` VALUES ('81', '1', '12', '233', '81', '2015-04-17 00:06:21', '2015-04-17 00:06:33', '0', '0', '1');
INSERT INTO `album` VALUES ('82', '1', '12', 'wegerg', '86', '2015-04-17 23:28:31', '2015-04-17 23:28:38', '0', '0', '1');
INSERT INTO `album` VALUES ('83', '1', null, null, null, '2015-04-17 23:28:32', '2015-04-17 23:28:32', '0', '0', '1');
INSERT INTO `album` VALUES ('84', '1', null, null, null, '2015-04-17 23:28:32', '2015-04-17 23:28:32', '0', '0', '1');
INSERT INTO `album` VALUES ('85', '1', null, null, null, '2015-04-18 10:41:37', '2015-04-18 10:41:37', '0', '0', '1');
INSERT INTO `album` VALUES ('86', '1', null, null, null, '2015-04-18 10:41:38', '2015-04-18 10:41:38', '0', '0', '1');
INSERT INTO `album` VALUES ('87', '1', '12', '', '103', '2015-04-18 10:41:38', '2015-04-18 10:50:53', '0', '0', '1');
INSERT INTO `album` VALUES ('88', '1', null, null, null, '2015-04-18 10:52:03', '2015-04-18 10:52:03', '0', '0', '1');
INSERT INTO `album` VALUES ('89', '1', null, null, null, '2015-04-18 10:52:04', '2015-04-18 10:52:04', '0', '0', '1');
INSERT INTO `album` VALUES ('90', '1', '12', '', '107', '2015-04-18 10:52:04', '2015-04-18 10:52:08', '0', '0', '1');
INSERT INTO `album` VALUES ('91', '1', '12', '', '110', '2015-04-18 11:01:55', '2015-04-18 11:01:59', '0', '0', '1');
INSERT INTO `album` VALUES ('92', '1', null, null, null, '2015-04-18 11:01:56', '2015-04-18 11:01:56', '0', '0', '1');
INSERT INTO `album` VALUES ('93', '1', null, null, null, '2015-04-18 11:01:56', '2015-04-18 11:01:56', '0', '0', '1');
INSERT INTO `album` VALUES ('94', '1', '12', '', '111', '2015-04-18 11:17:07', '2015-04-18 11:17:11', '0', '0', '1');
INSERT INTO `album` VALUES ('95', '1', null, null, null, '2015-04-18 11:17:07', '2015-04-18 11:17:07', '0', '0', '1');
INSERT INTO `album` VALUES ('96', '1', '12', '她的第一次', '116', '2015-04-18 16:54:55', '2015-04-18 16:55:05', '0', '0', '1');
INSERT INTO `album` VALUES ('97', '1', null, null, null, '2015-04-18 16:54:56', '2015-04-18 16:54:56', '0', '0', '1');
INSERT INTO `album` VALUES ('98', '1', null, null, null, '2015-04-18 16:54:57', '2015-04-18 16:54:57', '0', '0', '1');
INSERT INTO `album` VALUES ('99', '1', '12', '', '117', '2015-04-18 16:55:59', '2015-04-18 16:56:02', '0', '0', '1');

-- ----------------------------
-- Table structure for `collection`
-- ----------------------------
DROP TABLE IF EXISTS `collection`;
CREATE TABLE `collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `work_id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of collection
-- ----------------------------
INSERT INTO `collection` VALUES ('28', '13', '78', '1');

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `from` int(11) DEFAULT NULL,
  `to` int(11) DEFAULT NULL,
  `read_status` int(11) DEFAULT NULL,
  `praise` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `father_id` int(11) DEFAULT NULL,
  `love_num` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('61', '36', '10', 'tthfjnfjn', '1', '0', '0', '0', '2015-04-18 14:32:44', '2015-04-18 14:32:44', '0', '0', '1');
INSERT INTO `comment` VALUES ('62', '36', '10', 'rtfjytjtykj', '1', '1', '1', '0', '2015-04-18 14:32:51', '2015-04-20 21:20:14', '61', '0', '1');
INSERT INTO `comment` VALUES ('63', '36', '10', 'tjrfyjnrfymyrfm', '1', '1', '1', '0', '2015-04-18 14:32:56', '2015-04-20 21:20:14', '61', '0', '1');
INSERT INTO `comment` VALUES ('64', '36', '10', 'njrfymrfmrym', '1', '1', '1', '0', '2015-04-18 14:33:00', '2015-04-20 21:20:14', '61', '0', '1');
INSERT INTO `comment` VALUES ('65', '60', '6', 'ytjuyktuk', '1', '1', '1', '0', '2015-04-19 17:17:26', '2015-04-20 21:20:14', '0', '0', '1');
INSERT INTO `comment` VALUES ('66', '60', '6', 'erhehedthb', '1', '1', '1', '0', '2015-04-19 17:17:33', '2015-04-20 21:20:14', '65', '0', '1');
INSERT INTO `comment` VALUES ('67', '60', '6', 'ehrtdththe', '1', '1', '1', '0', '2015-04-19 17:17:38', '2015-04-20 21:20:14', '65', '0', '1');
INSERT INTO `comment` VALUES ('68', '60', '6', 'erhetdhbethehb', '1', '1', '1', '0', '2015-04-19 17:17:42', '2015-04-20 21:20:14', '65', '0', '1');
INSERT INTO `comment` VALUES ('69', '36', '10', 'erhrththr', '1', '1', '1', '0', '2015-04-19 17:46:59', '2015-04-20 21:20:14', '61', '0', '1');
INSERT INTO `comment` VALUES ('70', '36', '10', '676itji67k', '1', '0', '0', '0', '2015-04-19 17:47:04', '2015-04-19 17:47:04', '0', '0', '1');
INSERT INTO `comment` VALUES ('71', '36', '10', '67i6i7i76', '1', '0', '0', '0', '2015-04-19 17:47:10', '2015-04-19 17:47:10', '0', '0', '1');

-- ----------------------------
-- Table structure for `group`
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of group
-- ----------------------------
INSERT INTO `group` VALUES ('1', '1', '1');
INSERT INTO `group` VALUES ('5', '2', '3');
INSERT INTO `group` VALUES ('4', '13', '3');

-- ----------------------------
-- Table structure for `literature`
-- ----------------------------
DROP TABLE IF EXISTS `literature`;
CREATE TABLE `literature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `cover` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci,
  `uid` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `comment_num` int(11) DEFAULT NULL,
  `love_num` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of literature
-- ----------------------------
INSERT INTO `literature` VALUES ('42', '6', 'sdaf', 'public/uploads/da50f04ab792accb36008cc3adeec78d.jpg', 'dfas', '1', '2015-04-07 13:26:22', '2015-04-07 13:26:22', '0', '0', '1');
INSERT INTO `literature` VALUES ('43', '6', ' ewtweas', null, '&lt;span style=&quot;background-color: rgb(255, 0, 0);&quot;&gt;是打发&lt;/span&gt;', '1', '2015-04-16 18:55:02', '2015-04-16 18:55:02', '0', '0', '1');
INSERT INTO `literature` VALUES ('44', '6', '撒鹅防', null, '撒旦飞洒地方', '1', '2015-04-16 18:56:31', '2015-04-16 18:56:31', '0', '0', '1');
INSERT INTO `literature` VALUES ('45', '6', '薇恩', null, 'dsgdafgsad', '1', '2015-04-16 18:57:30', '2015-04-16 18:57:30', '0', '0', '1');
INSERT INTO `literature` VALUES ('46', '6', 'as', null, 'dasas', '1', '2015-04-16 19:00:07', '2015-04-16 19:00:07', '0', '0', '1');
INSERT INTO `literature` VALUES ('47', '6', 'asd', null, '&lt;span style=&quot;background-color: yellow;&quot;&gt;asdsadasd&lt;/span&gt;', '1', '2015-04-16 19:00:20', '2015-04-16 19:00:20', '0', '0', '1');
INSERT INTO `literature` VALUES ('48', '6', 'w', null, 'asdfa', '1', '2015-04-16 19:15:17', '2015-04-16 19:15:17', '0', '0', '1');
INSERT INTO `literature` VALUES ('49', '6', 'ewe', null, '&lt;span style=&quot;background-color: yellow;&quot;&gt;sadfasdf&lt;/span&gt;', '1', '2015-04-16 19:16:05', '2015-04-16 19:16:05', '0', '0', '1');
INSERT INTO `literature` VALUES ('50', '6', '', null, '&lt;p&gt;&lt;br&gt;&lt;img onload=&quot;alert(&#039;sb&#039;)&quot; src=&quot;public/uploads/b6e5ac1f635c9e12a2f90224b7c841f0.jpg&quot; data-filename=&quot;_ (2).jpg&quot; style=&quot;width: 750px;&quot;&gt;&lt;/p&gt;', '1', '2015-04-16 19:19:18', '2015-04-16 19:19:18', '0', '0', '1');
INSERT INTO `literature` VALUES ('51', '6', '3232 ', null, 'Object', '1', '2015-04-16 19:34:43', '2015-04-16 19:34:43', '0', '0', '1');
INSERT INTO `literature` VALUES ('52', '6', '3232 ', null, 'Object', '1', '2015-04-16 19:36:24', '2015-04-16 19:36:24', '0', '0', '1');
INSERT INTO `literature` VALUES ('53', '6', '3232 ', null, '\n<span style=\"background-color: yellow;\">rsadfasd</span>\n', '1', '2015-04-16 19:42:03', '2015-04-16 19:42:03', '0', '0', '1');
INSERT INTO `literature` VALUES ('54', '6', 'eesefe', null, '\n<p><br><img src=\"public/uploads/581a01f67276b168d04ecc909db67727.jpg\" style=\"width: 750px;\"></p>\n', '1', '2015-04-16 19:43:37', '2015-04-16 19:43:37', '0', '0', '1');
INSERT INTO `literature` VALUES ('55', '6', '', null, '\n\n', '1', '2015-04-16 19:48:36', '2015-04-16 19:48:36', '0', '0', '1');
INSERT INTO `literature` VALUES ('56', '6', '', null, '\n\n', '1', '2015-04-16 19:48:53', '2015-04-16 19:48:53', '0', '0', '1');
INSERT INTO `literature` VALUES ('57', '6', '', null, '\n\n', '1', '2015-04-16 19:49:24', '2015-04-16 19:49:24', '0', '0', '1');
INSERT INTO `literature` VALUES ('58', '19', '你的第一次', null, '\n<span style=\"font-style: italic;\">fgnfgn<span style=\"font-weight: bold;\">fnfjnfgjgjmgjyyktky</span></span>\n', '1', '2015-04-18 16:53:58', '2015-04-18 16:53:58', '0', '0', '1');
INSERT INTO `literature` VALUES ('59', '8', 'sdsbsdvsvds', null, '\n<p>sdvsvdsvsdv</p>\n', '1', '2015-04-18 17:08:38', '2015-04-18 17:08:38', '0', '0', '1');
INSERT INTO `literature` VALUES ('60', '6', '67i67i', null, '\n<p>67j6tkt67kk67</p>\n', '1', '2015-04-18 17:19:07', '2015-04-18 17:19:07', '0', '0', '1');

-- ----------------------------
-- Table structure for `log`
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `action` mediumtext COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES ('1', '1', '操作文章', '2015-03-26 01:48:13', '2015-03-26 01:48:13');
INSERT INTO `log` VALUES ('2', '1', '操作文章', '2015-03-26 01:49:51', '2015-03-26 01:49:51');
INSERT INTO `log` VALUES ('3', '1', '操作文章', '2015-03-26 01:49:58', '2015-03-26 01:49:58');
INSERT INTO `log` VALUES ('4', '1', '{\"id\":7,\"type_id\":6,\"title\":\"title7\",\"cover\":\"public\\/uploads\\/1.png\",\"content\":\"\\u4ecb\\u7ecd\\r\\n\\r\\n\\u6570\\u636e\\u5e93\\u67e5\\u8be2\\u6784\\u9020\\u5668 (query builder) \\u63d0\\u4f9b\\u65b9\\u4fbf\\u6d41\\u7545\\u7684\\u63a5\\u53e3\\u6765\\u5efa\\u7acb\\u3001\\u6267\\u884', '2015-03-26 01:50:58', '2015-03-26 01:50:58');
INSERT INTO `log` VALUES ('5', '1', '{\"id\":7,\"type_id\":6,\"title\":\"title7\",\"cover\":\"public\\/uploads\\/1.png\",\"content\":\"\\u4ecb\\u7ecd\\r\\n\\r\\n\\u6570\\u636e\\u5e93\\u67e5\\u8be2\\u6784\\u9020\\u5668 (query builder) \\u63d0\\u4f9b\\u65b9\\u4fbf\\u6d41\\u7545\\u7684\\u63a5\\u53e3\\u6765\\u5efa\\u7acb\\u3001\\u6267\\u884c\\u6570\\u636e\\u5e93\\u67e5\\u8be2\\u8bed\\u6cd5\\u3002\\u5728\\u60a8\\u7684\\u5e94\\u7528\\u7a0b\\u5e8f\\u91cc\\u9762\\uff0c\\u5b83\\u53ef\\u4ee5\\u88ab\\u4f7f\\u7528\\u5728\\u5927\\u90e8\\u5206\\u7684\\u6570\\u636e \\u5e93\\u64cd\\u4f5c\\uff0c\\u800c\\u4e14\\u5b83\\u5728\\u6240\\u6709\\u652f\\u6301\\u7684\\u6570\\u636e\\u5e93\\u7cfb\\u7edf\\u4e0a\\u90fd\\u53ef\\u4ee5\\u6267\\u884c\\u3002\\r\\n\\r\\n\\u6ce8\\u610f: Laravel \\u67e5\\u8be2\\u6784\\u9020\\u5668\\u4f7f\\u7528 PDO \\u53c2\\u6570\\u7ed1\\u5b9a\\uff0c\\u4ee5\\u4fdd\\u62a4\\u5e94\\u7528\\u7a0b\\u5e8f\\u514d\\u4e8eSQL\\u6ce8\\u5165\\u653b\\u51fb (SQL injection)\\uff0c\\u56e0\\u6b64\\u4f20\\u5165\\u7684\\u53c2\\u6570\\u4e0d\\u9700\\u8fc7\\u6ee4\\u989d\\u5916\\u7684\\u7279\\u6b8a\\u5b57\\u7b26\\u4e32\\u3002\\r\\n\\r\\nSelects\\r\\n\\r\\n\\u4ece\\u6570\\u636e\\u5e93\\u8868\\u4e2d\\u53d6\\u5f97\\u6240\\u6709\\u7684\\u6570\\u636e\\u5217\\r\\n\\r\\n$users = DB::table(\'users\')->get();\\r\\n\\r\\nforeach ($users as $user)\\r\\n{\\r\\n    var_dump($user->name);\\r\\n}\\r\\n\\u4ece\\u6570\\u636e\\u5e93\\u8868\\u4e2d\\u53d6\\u5f97\\u5355\\u4e00\\u6570\\u636e\\u5217\\r\\n\\r\\n$user = DB::table(\'users\')->where(\'name\', \'John\')->first();\\r\\n\\r\\nvar_dump($user->name);\\r\\n\\u4ece\\u6570\\u636e\\u5e93\\u8868\\u4e2d\\u53d6\\u5f97\\u5355\\u4e00\\u6570\\u636e\\u5217\\u7684\\u5355\\u4e00\\u5b57\\u6bb5\\r\\n\\r\\n$name = DB::table(\'users\')->where(\'name\', \'John\')->pluck(\'name\');\\r\\n\\u53d6\\u5f97\\u5355\\u4e00\\u5b57\\u6bb5\\u503c\\u7684\\u5217\\u8868\\r\\n\\r\\n$roles = DB::table(\'roles\')->lists(\'title\');\\r\\n\\u8fd9\\u4e2a\\u65b9\\u6cd5\\u5c06\\u4f1a\\u56de\\u4f20\\u542b\\u6709\\u6570\\u636e\\u5e93\\u8868 role \\u7684 title \\u5b57\\u6bb5\\u503c\\u7684\\u6570\\u7ec4\\u3002\\u60a8\\u4e5f\\u53ef\\u4ee5\\u901a\\u8fc7\\u4e0b\\u9762\\u7684\\u65b9\\u6cd5\\uff0c\\u4e3a\\u56de\\u4f20\\u7684\\u6570\\u7ec4\\u6307\\u5b9a\\u81ea\\u5b9a\\u4e49\\u952e\\u503c\\u3002\\r\\n\\r\\n$roles = DB::table(\'roles\')->lists(\'title\', \'name\');\",\"uid\":1,\"created_at\":\"2015-02-17 21:50:56\",\"updated_at\":\"2015-03-26 01:53:46\",\"comment_num\":16,\"love_num\":16,\"status\":\"0\"}', '2015-03-26 01:53:46', '2015-03-26 01:53:46');
INSERT INTO `log` VALUES ('6', '1', '{\"id\":7,\"type_id\":6,\"title\":\"title7\",\"cover\":\"public\\/uploads\\/1.png\",\"content\":\"\\u4ecb\\u7ecd\\r\\n\\r\\n\\u6570\\u636e\\u5e93\\u67e5\\u8be2\\u6784\\u9020\\u5668 (query builder) \\u63d0\\u4f9b\\u65b9\\u4fbf\\u6d41\\u7545\\u7684\\u63a5\\u53e3\\u6765\\u5efa\\u7acb\\u3001\\u6267\\u884c\\u6570\\u636e\\u5e93\\u67e5\\u8be2\\u8bed\\u6cd5\\u3002\\u5728\\u60a8\\u7684\\u5e94\\u7528\\u7a0b\\u5e8f\\u91cc\\u9762\\uff0c\\u5b83\\u53ef\\u4ee5\\u88ab\\u4f7f\\u7528\\u5728\\u5927\\u90e8\\u5206\\u7684\\u6570\\u636e \\u5e93\\u64cd\\u4f5c\\uff0c\\u800c\\u4e14\\u5b83\\u5728\\u6240\\u6709\\u652f\\u6301\\u7684\\u6570\\u636e\\u5e93\\u7cfb\\u7edf\\u4e0a\\u90fd\\u53ef\\u4ee5\\u6267\\u884c\\u3002\\r\\n\\r\\n\\u6ce8\\u610f: Laravel \\u67e5\\u8be2\\u6784\\u9020\\u5668\\u4f7f\\u7528 PDO \\u53c2\\u6570\\u7ed1\\u5b9a\\uff0c\\u4ee5\\u4fdd\\u62a4\\u5e94\\u7528\\u7a0b\\u5e8f\\u514d\\u4e8eSQL\\u6ce8\\u5165\\u653b\\u51fb (SQL injection)\\uff0c\\u56e0\\u6b64\\u4f20\\u5165\\u7684\\u53c2\\u6570\\u4e0d\\u9700\\u8fc7\\u6ee4\\u989d\\u5916\\u7684\\u7279\\u6b8a\\u5b57\\u7b26\\u4e32\\u3002\\r\\n\\r\\nSelects\\r\\n\\r\\n\\u4ece\\u6570\\u636e\\u5e93\\u8868\\u4e2d\\u53d6\\u5f97\\u6240\\u6709\\u7684\\u6570\\u636e\\u5217\\r\\n\\r\\n$users = DB::table(\'users\')->get();\\r\\n\\r\\nforeach ($users as $user)\\r\\n{\\r\\n    var_dump($user->name);\\r\\n}\\r\\n\\u4ece\\u6570\\u636e\\u5e93\\u8868\\u4e2d\\u53d6\\u5f97\\u5355\\u4e00\\u6570\\u636e\\u5217\\r\\n\\r\\n$user = DB::table(\'users\')->where(\'name\', \'John\')->first();\\r\\n\\r\\nvar_dump($user->name);\\r\\n\\u4ece\\u6570\\u636e\\u5e93\\u8868\\u4e2d\\u53d6\\u5f97\\u5355\\u4e00\\u6570\\u636e\\u5217\\u7684\\u5355\\u4e00\\u5b57\\u6bb5\\r\\n\\r\\n$name = DB::table(\'users\')->where(\'name\', \'John\')->pluck(\'name\');\\r\\n\\u53d6\\u5f97\\u5355\\u4e00\\u5b57\\u6bb5\\u503c\\u7684\\u5217\\u8868\\r\\n\\r\\n$roles = DB::table(\'roles\')->lists(\'title\');\\r\\n\\u8fd9\\u4e2a\\u65b9\\u6cd5\\u5c06\\u4f1a\\u56de\\u4f20\\u542b\\u6709\\u6570\\u636e\\u5e93\\u8868 role \\u7684 title \\u5b57\\u6bb5\\u503c\\u7684\\u6570\\u7ec4\\u3002\\u60a8\\u4e5f\\u53ef\\u4ee5\\u901a\\u8fc7\\u4e0b\\u9762\\u7684\\u65b9\\u6cd5\\uff0c\\u4e3a\\u56de\\u4f20\\u7684\\u6570\\u7ec4\\u6307\\u5b9a\\u81ea\\u5b9a\\u4e49\\u952e\\u503c\\u3002\\r\\n\\r\\n$roles = DB::table(\'roles\')->lists(\'title\', \'name\');\",\"uid\":1,\"created_at\":\"2015-02-17 21:50:56\",\"updated_at\":\"2015-03-26 01:53:47\",\"comment_num\":16,\"love_num\":16,\"status\":\"1\"}', '2015-03-26 01:53:47', '2015-03-26 01:53:47');
INSERT INTO `log` VALUES ('7', '1', '文学类title7进行0', '2015-03-26 01:56:09', '2015-03-26 01:56:09');
INSERT INTO `log` VALUES ('8', '1', '冻结', '2015-03-26 01:56:51', '2015-03-26 01:56:51');
INSERT INTO `log` VALUES ('9', '1', '冻结', '2015-03-26 01:57:10', '2015-03-26 01:57:10');
INSERT INTO `log` VALUES ('10', '1', '冻结', '2015-03-26 01:57:15', '2015-03-26 01:57:15');
INSERT INTO `log` VALUES ('11', '1', '文学类title7进行(0==0)?\'冻结\':\'恢复\'', '2015-03-26 01:57:40', '2015-03-26 01:57:40');
INSERT INTO `log` VALUES ('12', '1', '文学类title7进行恢复', '2015-03-26 01:58:36', '2015-03-26 01:58:36');
INSERT INTO `log` VALUES ('13', '1', '对文学类标题为title7的文章进行冻结', '2015-03-26 01:59:03', '2015-03-26 01:59:03');
INSERT INTO `log` VALUES ('14', '1', '对文学类标题为title7的文章进行恢复', '2015-03-26 02:04:27', '2015-03-26 02:04:27');
INSERT INTO `log` VALUES ('17', '1', '对文学类标题为title7的文章进行冻结', '2015-03-26 21:33:49', '2015-03-26 21:33:49');
INSERT INTO `log` VALUES ('18', '1', '对文学类标题为title7的文章进行恢复', '2015-03-26 21:43:00', '2015-03-26 21:43:00');
INSERT INTO `log` VALUES ('19', '1', '对相册类标题为3sadf的文章进行冻结', '2015-03-26 21:53:01', '2015-03-26 21:53:01');
INSERT INTO `log` VALUES ('20', '1', '对相册类标题为的文章进行', '2015-03-27 00:27:34', '2015-03-27 00:27:34');
INSERT INTO `log` VALUES ('21', '1', 'PhotosmanageController@albummanage', '2015-03-27 00:28:14', '2015-03-27 00:28:14');
INSERT INTO `log` VALUES ('22', '1', 'test', '2015-03-27 00:33:47', '2015-03-27 00:33:47');
INSERT INTO `log` VALUES ('23', '1', 'test', '2015-03-27 00:36:00', '2015-03-27 00:36:00');
INSERT INTO `log` VALUES ('24', '1', 'test1', '2015-03-27 00:36:00', '2015-03-27 00:36:00');
INSERT INTO `log` VALUES ('25', '1', 'test', '2015-03-27 00:36:10', '2015-03-27 00:36:10');
INSERT INTO `log` VALUES ('26', '1', 'test1', '2015-03-27 00:36:11', '2015-03-27 00:36:11');
INSERT INTO `log` VALUES ('27', '1', 'test', '2015-03-27 00:40:56', '2015-03-27 00:40:56');
INSERT INTO `log` VALUES ('28', '1', 'test1', '2015-03-27 00:40:56', '2015-03-27 00:40:56');
INSERT INTO `log` VALUES ('29', '1', 'test', '2015-03-27 00:45:40', '2015-03-27 00:45:40');
INSERT INTO `log` VALUES ('30', '1', 'test', '2015-03-27 00:45:47', '2015-03-27 00:45:47');
INSERT INTO `log` VALUES ('31', '1', 'test', '2015-03-27 00:47:01', '2015-03-27 00:47:01');
INSERT INTO `log` VALUES ('32', '1', '1', '2015-03-27 01:30:59', '2015-03-27 01:30:59');
INSERT INTO `log` VALUES ('33', '1', '1', '2015-03-27 01:31:35', '2015-03-27 01:31:35');
INSERT INTO `log` VALUES ('34', '1', '1', '2015-03-27 01:32:11', '2015-03-27 01:32:11');
INSERT INTO `log` VALUES ('35', '1', '1', '2015-03-27 01:32:17', '2015-03-27 01:32:17');
INSERT INTO `log` VALUES ('36', '1', '0', '2015-03-27 01:32:59', '2015-03-27 01:32:59');
INSERT INTO `log` VALUES ('37', '1', '06', '2015-03-27 01:33:59', '2015-03-27 01:33:59');
INSERT INTO `log` VALUES ('38', '1', '对相册id为7的相册进行恢复', '2015-03-27 01:35:35', '2015-03-27 01:35:35');
INSERT INTO `log` VALUES ('39', '1', '对相册id为7的相册进行冻结', '2015-03-27 01:35:37', '2015-03-27 01:35:37');
INSERT INTO `log` VALUES ('40', '1', '对相册id为0的相册进行冻结', '2015-03-27 01:37:18', '2015-03-27 01:37:18');
INSERT INTO `log` VALUES ('41', '1', '对相片id为1的相片进行冻结', '2015-03-27 01:37:24', '2015-03-27 01:37:24');
INSERT INTO `log` VALUES ('42', '1', '对原味标题为3sadf的作品进行恢复', '2015-03-27 01:46:22', '2015-03-27 01:46:22');
INSERT INTO `log` VALUES ('43', '1', '对评论id为17冻结', '2015-03-27 01:50:27', '2015-03-27 01:50:27');
INSERT INTO `log` VALUES ('44', '1', '对用户id为2冻结', '2015-03-27 01:52:39', '2015-03-27 01:52:39');
INSERT INTO `log` VALUES ('45', '1', '对用户id为2恢复', '2015-03-27 01:52:44', '2015-03-27 01:52:44');
INSERT INTO `log` VALUES ('46', '1', '登陆', '2015-03-28 23:53:29', '2015-03-28 23:53:29');
INSERT INTO `log` VALUES ('47', '1', '登陆', '2015-04-01 16:03:43', '2015-04-01 16:03:43');
INSERT INTO `log` VALUES ('48', '1', '对评论id为33冻结', '2015-04-01 20:11:29', '2015-04-01 20:11:29');
INSERT INTO `log` VALUES ('49', '1', '对评论id为32冻结', '2015-04-01 20:11:30', '2015-04-01 20:11:30');
INSERT INTO `log` VALUES ('50', '1', '对评论id为31冻结', '2015-04-01 20:11:31', '2015-04-01 20:11:31');
INSERT INTO `log` VALUES ('51', '1', '对评论id为30冻结', '2015-04-01 20:11:31', '2015-04-01 20:11:31');
INSERT INTO `log` VALUES ('52', '1', '对评论id为29冻结', '2015-04-01 20:11:32', '2015-04-01 20:11:32');
INSERT INTO `log` VALUES ('53', '1', '对评论id为28冻结', '2015-04-01 20:11:32', '2015-04-01 20:11:32');
INSERT INTO `log` VALUES ('54', '1', '对评论id为27冻结', '2015-04-01 20:11:33', '2015-04-01 20:11:33');
INSERT INTO `log` VALUES ('55', '1', '对评论id为26冻结', '2015-04-01 20:11:34', '2015-04-01 20:11:34');
INSERT INTO `log` VALUES ('56', '1', '对评论id为25冻结', '2015-04-01 20:11:34', '2015-04-01 20:11:34');
INSERT INTO `log` VALUES ('57', '1', '对评论id为24冻结', '2015-04-01 20:11:36', '2015-04-01 20:11:36');
INSERT INTO `log` VALUES ('58', '1', '对评论id为23冻结', '2015-04-01 20:11:36', '2015-04-01 20:11:36');
INSERT INTO `log` VALUES ('59', '1', '对评论id为22冻结', '2015-04-01 20:11:37', '2015-04-01 20:11:37');
INSERT INTO `log` VALUES ('60', '1', '对评论id为7冻结', '2015-04-01 20:12:09', '2015-04-01 20:12:09');
INSERT INTO `log` VALUES ('61', '1', '对评论id为2冻结', '2015-04-01 20:12:22', '2015-04-01 20:12:22');
INSERT INTO `log` VALUES ('62', '1', '对评论id为3冻结', '2015-04-01 20:12:23', '2015-04-01 20:12:23');
INSERT INTO `log` VALUES ('63', '1', '对评论id为3恢复', '2015-04-01 20:12:36', '2015-04-01 20:12:36');
INSERT INTO `log` VALUES ('64', '1', '对评论id为2恢复', '2015-04-01 20:12:43', '2015-04-01 20:12:43');
INSERT INTO `log` VALUES ('65', '1', '对评论id为7冻结', '2015-04-01 20:12:57', '2015-04-01 20:12:57');
INSERT INTO `log` VALUES ('66', '1', '对评论id为5冻结', '2015-04-01 20:13:10', '2015-04-01 20:13:10');
INSERT INTO `log` VALUES ('67', '1', '对评论id为5恢复', '2015-04-01 20:13:16', '2015-04-01 20:13:16');
INSERT INTO `log` VALUES ('68', '1', '对评论id为5冻结', '2015-04-01 20:13:33', '2015-04-01 20:13:33');
INSERT INTO `log` VALUES ('69', '1', '对评论id为5冻结', '2015-04-01 20:13:38', '2015-04-01 20:13:38');
INSERT INTO `log` VALUES ('70', '1', '对评论id为5恢复', '2015-04-01 20:13:39', '2015-04-01 20:13:39');
INSERT INTO `log` VALUES ('71', '1', '登陆, 于::1', '2015-04-01 20:41:39', '2015-04-01 20:41:39');
INSERT INTO `log` VALUES ('72', '1', '对评论id为33恢复', '2015-04-01 23:58:05', '2015-04-01 23:58:05');
INSERT INTO `log` VALUES ('73', '1', '对评论id为24恢复', '2015-04-01 23:58:14', '2015-04-01 23:58:14');
INSERT INTO `log` VALUES ('74', '1', '对评论id为23恢复', '2015-04-01 23:58:14', '2015-04-01 23:58:14');
INSERT INTO `log` VALUES ('75', '1', '对评论id为22恢复', '2015-04-01 23:58:16', '2015-04-01 23:58:16');
INSERT INTO `log` VALUES ('76', '1', '对评论id为17恢复', '2015-04-01 23:58:17', '2015-04-01 23:58:17');
INSERT INTO `log` VALUES ('77', '1', '对评论id为28恢复', '2015-04-01 23:58:24', '2015-04-01 23:58:24');
INSERT INTO `log` VALUES ('78', '1', '对评论id为29恢复', '2015-04-01 23:58:24', '2015-04-01 23:58:24');
INSERT INTO `log` VALUES ('79', '1', '对评论id为30恢复', '2015-04-01 23:58:25', '2015-04-01 23:58:25');
INSERT INTO `log` VALUES ('80', '1', '对评论id为31恢复', '2015-04-01 23:58:25', '2015-04-01 23:58:25');
INSERT INTO `log` VALUES ('81', '1', '对评论id为32恢复', '2015-04-01 23:58:26', '2015-04-01 23:58:26');
INSERT INTO `log` VALUES ('82', '1', '对评论id为27恢复', '2015-04-01 23:58:27', '2015-04-01 23:58:27');
INSERT INTO `log` VALUES ('83', '1', '登陆, 于::1', '2015-04-05 17:18:01', '2015-04-05 17:18:01');
INSERT INTO `log` VALUES ('84', '1', '登陆, 于::1', '2015-04-06 12:02:51', '2015-04-06 12:02:51');
INSERT INTO `log` VALUES ('85', '1', '登陆, 于::1', '2015-04-06 19:19:16', '2015-04-06 19:19:16');
INSERT INTO `log` VALUES ('86', '1', '对文学类标题为dqw的文章进行冻结', '2015-04-06 21:15:07', '2015-04-06 21:15:07');
INSERT INTO `log` VALUES ('87', '1', '对文学类标题为wewe的文章进行冻结', '2015-04-06 21:35:00', '2015-04-06 21:35:00');
INSERT INTO `log` VALUES ('88', '1', '登陆, 于::1', '2015-04-07 11:58:06', '2015-04-07 11:58:06');
INSERT INTO `log` VALUES ('89', '1', '登陆, 于::1', '2015-04-07 12:32:20', '2015-04-07 12:32:20');
INSERT INTO `log` VALUES ('90', '1', '登陆, 于::1', '2015-04-08 16:08:25', '2015-04-08 16:08:25');
INSERT INTO `log` VALUES ('91', '1', '登陆, 于::1', '2015-04-08 23:01:37', '2015-04-08 23:01:37');
INSERT INTO `log` VALUES ('92', '1', '登陆, 于::1', '2015-04-15 16:04:29', '2015-04-15 16:04:29');
INSERT INTO `log` VALUES ('93', '1', '登陆, 于::1', '2015-04-16 16:09:54', '2015-04-16 16:09:54');
INSERT INTO `log` VALUES ('94', '1', '登陆, 于::1', '2015-04-16 23:45:07', '2015-04-16 23:45:07');
INSERT INTO `log` VALUES ('95', '1', '登陆, 于::1', '2015-04-17 14:31:51', '2015-04-17 14:31:51');
INSERT INTO `log` VALUES ('96', '1', '登陆, 于127.0.0.1', '2015-04-18 10:27:28', '2015-04-18 10:27:28');
INSERT INTO `log` VALUES ('97', '1', '登陆, 于127.0.0.1', '2015-04-18 14:32:11', '2015-04-18 14:32:11');
INSERT INTO `log` VALUES ('98', '1', '登陆, 于127.0.0.1', '2015-04-18 17:06:53', '2015-04-18 17:06:53');
INSERT INTO `log` VALUES ('99', '1', '登陆, 于127.0.0.1', '2015-04-18 17:18:48', '2015-04-18 17:18:48');
INSERT INTO `log` VALUES ('100', '1', '登陆, 于127.0.0.1', '2015-04-19 09:58:06', '2015-04-19 09:58:06');
INSERT INTO `log` VALUES ('101', '1', '登陆, 于127.0.0.1', '2015-04-20 21:19:48', '2015-04-20 21:19:48');
INSERT INTO `log` VALUES ('102', '1', '登陆, 于127.0.0.1', '2015-04-21 14:06:56', '2015-04-21 14:06:56');

-- ----------------------------
-- Table structure for `micromovie`
-- ----------------------------
DROP TABLE IF EXISTS `micromovie`;
CREATE TABLE `micromovie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `cover_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` text COLLATE utf8_unicode_ci,
  `uid` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introduce` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `comment_num` int(11) DEFAULT NULL,
  `love_num` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of micromovie
-- ----------------------------
INSERT INTO `micromovie` VALUES ('1', '14', 'test1', 'http://i1.hdslb.com/320_180/video/2f/2f32eef5d8a6ecaa97c7d2f8a69b7b4c.jpg', 'qwer1', '1', 'http://static.hdslb.com/miniloader.swf?aid=2051499', 'hhhhh66666', '2015-02-15 19:36:17', '2015-02-15 19:36:20', '1', '21', '17', '1');
INSERT INTO `micromovie` VALUES ('2', '15', 'test2', 'http://i1.hdslb.com/320_180/video/2f/2f32eef5d8a6ecaa97c7d2f8a69b7b4c.jpg', 'qwer2', '1', 'http://static.hdslb.com/miniloader.swf?aid=2021519', 'hhhhh6666', '2015-02-15 19:42:39', '2015-02-15 19:36:20', '3', '13', '12', '1');
INSERT INTO `micromovie` VALUES ('3', '14', 'test3', 'http://i1.hdslb.com/320_180/video/2f/2f32eef5d8a6ecaa97c7d2f8a69b7b4c.jpg', 'qwer3', '1', 'http://static.hdslb.com/miniloader.swf?aid=2021519', 'hhhhh6666', '2015-02-15 19:42:44', '2015-02-15 19:36:20', '4', '14', '13', '1');
INSERT INTO `micromovie` VALUES ('4', '15', 'test4', 'http://i1.hdslb.com/320_180/video/2f/2f32eef5d8a6ecaa97c7d2f8a69b7b4c.jpg', 'qwer4', '1', 'http://static.hdslb.com/miniloader.swf?aid=2021519', 'hhhhh666666', '2015-02-15 19:42:54', '2015-03-26 21:40:51', '5', '12', '16', '0');
INSERT INTO `micromovie` VALUES ('5', '14', 'test5', 'http://i1.hdslb.com/320_180/video/2f/2f32eef5d8a6ecaa97c7d2f8a69b7b4c.jpg', 'qwer5', '1', 'http://static.hdslb.com/miniloader.swf?aid=2021519', 'hhhhh66666', '2015-02-15 19:42:59', '2015-02-15 19:36:20', '3', '14', '14', '1');
INSERT INTO `micromovie` VALUES ('6', '15', 'test6', 'http://i1.hdslb.com/320_180/video/2f/2f32eef5d8a6ecaa97c7d2f8a69b7b4c.jpg', 'qwer6', '1', 'http://static.hdslb.com/miniloader.swf?aid=2021519', 'hhhhh6666', '2015-02-15 19:43:03', '2015-03-26 21:41:32', '2', '16', '17', '1');
INSERT INTO `micromovie` VALUES ('9', '14', 'asdf', 'public/uploads/1ddc875b21f5c603bcb0b152bcbe8ab4.jpg', null, '1', '3e231e32', 'dsaf', '2015-04-08 16:09:45', '2015-04-08 16:09:45', '0', '0', '0', '1');
INSERT INTO `micromovie` VALUES ('8', '14', 'asdf', 'public/uploads/c6e3bb233d389663d1fad41e1bbacb61.jpg', null, '1', 'asdfsdaf', 'asdf', '2015-04-07 13:31:59', '2015-04-07 13:31:59', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for `mywork`
-- ----------------------------
DROP TABLE IF EXISTS `mywork`;
CREATE TABLE `mywork` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `work_id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of mywork
-- ----------------------------
INSERT INTO `mywork` VALUES ('28', '6', '42', '1');
INSERT INTO `mywork` VALUES ('29', '6', '43', '1');
INSERT INTO `mywork` VALUES ('30', '6', '44', '1');
INSERT INTO `mywork` VALUES ('31', '6', '45', '1');
INSERT INTO `mywork` VALUES ('32', '6', '46', '1');
INSERT INTO `mywork` VALUES ('33', '6', '47', '1');
INSERT INTO `mywork` VALUES ('34', '6', '48', '1');
INSERT INTO `mywork` VALUES ('35', '6', '49', '1');
INSERT INTO `mywork` VALUES ('36', '6', '50', '1');
INSERT INTO `mywork` VALUES ('37', '6', '53', '1');
INSERT INTO `mywork` VALUES ('38', '6', '54', '1');
INSERT INTO `mywork` VALUES ('39', '6', '55', '1');
INSERT INTO `mywork` VALUES ('40', '6', '56', '1');
INSERT INTO `mywork` VALUES ('41', '6', '57', '1');
INSERT INTO `mywork` VALUES ('42', '19', '58', '1');
INSERT INTO `mywork` VALUES ('43', '8', '59', '1');
INSERT INTO `mywork` VALUES ('44', '6', '60', '1');

-- ----------------------------
-- Table structure for `navigation`
-- ----------------------------
DROP TABLE IF EXISTS `navigation`;
CREATE TABLE `navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_id` int(11) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of navigation
-- ----------------------------
INSERT INTO `navigation` VALUES ('1', 'literature', '文学', '00000000000');
INSERT INTO `navigation` VALUES ('2', 'photos', '爱拍', '00000000000');
INSERT INTO `navigation` VALUES ('3', 'recommend', '读书影逝', '00000000000');
INSERT INTO `navigation` VALUES ('4', 'micromovie', '微视', '00000000000');
INSERT INTO `navigation` VALUES ('5', 'original', '原味', '00000000000');
INSERT INTO `navigation` VALUES ('6', 'literature', '散文', '00000000001');
INSERT INTO `navigation` VALUES ('7', 'literature', '风景', '00000000001');
INSERT INTO `navigation` VALUES ('8', 'literature', '人像', '00000000001');
INSERT INTO `navigation` VALUES ('9', 'recommend', '毛概', '00000000003');
INSERT INTO `navigation` VALUES ('10', 'recommend', '马列', '00000000003');
INSERT INTO `navigation` VALUES ('11', 'recommend', '邓小平理论', '00000000003');
INSERT INTO `navigation` VALUES ('12', 'photos', '漫画', '00000000002');
INSERT INTO `navigation` VALUES ('13', 'photos', '风景', '00000000002');
INSERT INTO `navigation` VALUES ('14', 'micromovie', '微电影', '00000000004');
INSERT INTO `navigation` VALUES ('15', 'micromovie', '导演', '00000000004');
INSERT INTO `navigation` VALUES ('16', 'original', '模型', '00000000005');
INSERT INTO `navigation` VALUES ('17', 'original', '绘画', '00000000005');
INSERT INTO `navigation` VALUES ('18', 'original', '舞蹈', '00000000005');
INSERT INTO `navigation` VALUES ('19', 'literature', '666', '00000000001');
INSERT INTO `navigation` VALUES ('20', 'literature', '213', '00000000001');
INSERT INTO `navigation` VALUES ('21', 'literature', '防辐射', '00000000001');
INSERT INTO `navigation` VALUES ('22', 'literature', 'fsd', '00000000001');
INSERT INTO `navigation` VALUES ('23', 'literature', '+++', '00000000001');
INSERT INTO `navigation` VALUES ('24', 'test', 'test', '00000000000');
INSERT INTO `navigation` VALUES ('25', 'micromovie', 'qew', '00000000004');
INSERT INTO `navigation` VALUES ('26', 'test', '1`', '00000000024');
INSERT INTO `navigation` VALUES ('27', 'literature', 'sdf', '00000000001');
INSERT INTO `navigation` VALUES ('28', 'qwe', 'wq', '00000000000');
INSERT INTO `navigation` VALUES ('29', 'literature', 'dfsf', '00000000001');
INSERT INTO `navigation` VALUES ('30', 'literature', '234', '00000000001');
INSERT INTO `navigation` VALUES ('31', 'literature', '234234', '00000000001');
INSERT INTO `navigation` VALUES ('32', 'literature', 'svsd', '00000000001');
INSERT INTO `navigation` VALUES ('33', 'literature', 'sdfsd', '00000000001');
INSERT INTO `navigation` VALUES ('34', 'literature', 'wer', '00000000001');
INSERT INTO `navigation` VALUES ('35', 'literature', 'sdf', '00000000001');
INSERT INTO `navigation` VALUES ('36', 'literature', 'qwe', '00000000001');
INSERT INTO `navigation` VALUES ('37', 'literature', '123', '00000000001');
INSERT INTO `navigation` VALUES ('38', 'literature', 'dfs', '00000000001');
INSERT INTO `navigation` VALUES ('39', 'literature', 'sfd', '00000000001');
INSERT INTO `navigation` VALUES ('40', 'literature', 'sdf', '00000000001');
INSERT INTO `navigation` VALUES ('41', 'literature', 'qwe', '00000000001');
INSERT INTO `navigation` VALUES ('42', 'literature', 'sdf', '00000000001');
INSERT INTO `navigation` VALUES ('43', 'literature', '123', '00000000001');
INSERT INTO `navigation` VALUES ('44', 'literature', 'sdf', '00000000001');
INSERT INTO `navigation` VALUES ('45', 'literature', 'sdf', '00000000001');
INSERT INTO `navigation` VALUES ('46', 'literature', 'sdf', '00000000001');
INSERT INTO `navigation` VALUES ('47', 'literature', 'sdf', '00000000001');
INSERT INTO `navigation` VALUES ('48', 'literature', 'asdasd', '00000000001');
INSERT INTO `navigation` VALUES ('49', 'literature', 'asd', '00000000001');
INSERT INTO `navigation` VALUES ('50', 'literature', '432', '00000000001');

-- ----------------------------
-- Table structure for `original`
-- ----------------------------
DROP TABLE IF EXISTS `original`;
CREATE TABLE `original` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `cover_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `introduce` text COLLATE utf8_unicode_ci,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `love_num` int(11) DEFAULT NULL,
  `comment_num` int(11) DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of original
-- ----------------------------
INSERT INTO `original` VALUES ('1', '16', 'public/images/xxx.jpg', null, '3sadf', 'dsgvdsgb', '1', '1', null, '2015-03-27 01:46:22', '0', null, '1');
INSERT INTO `original` VALUES ('2', '17', null, null, '4adf', 'sdvsdvsb', '2', '2', null, '2015-03-24 15:05:14', '1', null, '1');
INSERT INTO `original` VALUES ('3', '18', null, null, 'sadf', 'sbdsb', '13', '2', null, null, '1', null, '1');
INSERT INTO `original` VALUES ('4', '16', null, null, 'fd', null, '1', '1', null, null, '1', null, '1');

-- ----------------------------
-- Table structure for `permission`
-- ----------------------------
DROP TABLE IF EXISTS `permission`;
CREATE TABLE `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `path_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permission
-- ----------------------------
INSERT INTO `permission` VALUES ('1', '1', '1');
INSERT INTO `permission` VALUES ('2', '1', '2');
INSERT INTO `permission` VALUES ('3', '1', '3');
INSERT INTO `permission` VALUES ('4', '1', '4');
INSERT INTO `permission` VALUES ('5', '1', '5');
INSERT INTO `permission` VALUES ('6', '1', '6');
INSERT INTO `permission` VALUES ('7', '1', '7');
INSERT INTO `permission` VALUES ('8', '1', '8');
INSERT INTO `permission` VALUES ('9', '1', '9');
INSERT INTO `permission` VALUES ('10', '1', '10');
INSERT INTO `permission` VALUES ('11', '1', '11');
INSERT INTO `permission` VALUES ('12', '1', '12');
INSERT INTO `permission` VALUES ('13', '1', '13');
INSERT INTO `permission` VALUES ('14', '1', '14');
INSERT INTO `permission` VALUES ('15', '1', '15');
INSERT INTO `permission` VALUES ('16', '1', '16');
INSERT INTO `permission` VALUES ('18', '2', '1');
INSERT INTO `permission` VALUES ('23', '2', '2');
INSERT INTO `permission` VALUES ('24', '3', '5');
INSERT INTO `permission` VALUES ('25', '1', '24');
INSERT INTO `permission` VALUES ('26', '1', '25');
INSERT INTO `permission` VALUES ('27', '1', '26');
INSERT INTO `permission` VALUES ('28', '1', '27');
INSERT INTO `permission` VALUES ('29', '1', '28');
INSERT INTO `permission` VALUES ('30', '1', '29');
INSERT INTO `permission` VALUES ('31', '1', '30');
INSERT INTO `permission` VALUES ('32', '1', '31');
INSERT INTO `permission` VALUES ('33', '1', '32');
INSERT INTO `permission` VALUES ('34', '1', '33');
INSERT INTO `permission` VALUES ('35', '1', '34');
INSERT INTO `permission` VALUES ('36', '1', '35');
INSERT INTO `permission` VALUES ('37', '1', '36');
INSERT INTO `permission` VALUES ('38', '1', '37');
INSERT INTO `permission` VALUES ('39', '2', '51');
INSERT INTO `permission` VALUES ('40', '1', '38');
INSERT INTO `permission` VALUES ('41', '1', '39');
INSERT INTO `permission` VALUES ('42', '1', '40');
INSERT INTO `permission` VALUES ('43', '1', '41');
INSERT INTO `permission` VALUES ('44', '1', '43');
INSERT INTO `permission` VALUES ('45', '1', '42');
INSERT INTO `permission` VALUES ('46', '1', '44');
INSERT INTO `permission` VALUES ('47', '1', '45');
INSERT INTO `permission` VALUES ('48', '1', '46');
INSERT INTO `permission` VALUES ('49', '1', '47');
INSERT INTO `permission` VALUES ('50', '1', '48');
INSERT INTO `permission` VALUES ('51', '1', '49');
INSERT INTO `permission` VALUES ('52', '1', '50');
INSERT INTO `permission` VALUES ('53', '1', '51');
INSERT INTO `permission` VALUES ('54', '1', '52');
INSERT INTO `permission` VALUES ('55', '1', '53');
INSERT INTO `permission` VALUES ('56', '1', '54');
INSERT INTO `permission` VALUES ('57', '1', '55');
INSERT INTO `permission` VALUES ('58', '1', '56');
INSERT INTO `permission` VALUES ('59', '1', '57');
INSERT INTO `permission` VALUES ('60', '1', '58');
INSERT INTO `permission` VALUES ('61', '1', '59');
INSERT INTO `permission` VALUES ('62', '1', '60');
INSERT INTO `permission` VALUES ('63', '1', '61');
INSERT INTO `permission` VALUES ('64', '2', '62');
INSERT INTO `permission` VALUES ('65', '3', '62');
INSERT INTO `permission` VALUES ('66', '1', '62');
INSERT INTO `permission` VALUES ('67', '1', '63');
INSERT INTO `permission` VALUES ('68', '1', '64');
INSERT INTO `permission` VALUES ('69', '1', '65');
INSERT INTO `permission` VALUES ('70', '1', '66');
INSERT INTO `permission` VALUES ('71', '1', '67');
INSERT INTO `permission` VALUES ('72', '1', '68');
INSERT INTO `permission` VALUES ('73', '1', '69');
INSERT INTO `permission` VALUES ('74', '1', '70');

-- ----------------------------
-- Table structure for `photos`
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `original_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introduce` text COLLATE utf8_unicode_ci,
  `album_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `comment_num` int(11) DEFAULT NULL,
  `love_num` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of photos
-- ----------------------------
INSERT INTO `photos` VALUES ('58', null, 'public/uploads/abe03b02c8d8db841f5497f63f86f7dc.png', 'public/uploads/db01d4f742a4e205b7b1647665138cdb_original.png', null, '0', '2015-04-16 23:49:22', '2015-04-16 23:49:22', '0', '1', '1');
INSERT INTO `photos` VALUES ('59', null, 'public/uploads/46e40020405579d2bf57a40a82befc01.jpeg', 'public/uploads/01916edff97849e00e960a1084938980_original.jpeg', null, '0', '2015-04-16 23:49:22', '2015-04-16 23:49:22', '0', '1', '1');
INSERT INTO `photos` VALUES ('60', null, 'public/uploads/f14e79793d942efe4a88a41d6ab1a9b9.jpeg', 'public/uploads/0aef34f31c3e5949d1813bd0120c6ec6_original.jpeg', null, '0', '2015-04-16 23:49:24', '2015-04-16 23:49:24', '0', '1', '1');
INSERT INTO `photos` VALUES ('61', null, 'public/uploads/7811c48514bcbacbc9f01447b07ea7a8.png', 'public/uploads/18a850c9ba3c1f4fd61c6f96b74c7684_original.png', null, '0', '2015-04-16 23:49:25', '2015-04-16 23:49:25', '0', '1', '1');
INSERT INTO `photos` VALUES ('62', null, 'public/uploads/42e97d35bc940dee6047991b959d519e.jpeg', 'public/uploads/8b0f3658a197f6f2f02374d13af11fd9_original.jpeg', null, '0', '2015-04-16 23:52:44', '2015-04-16 23:52:44', '0', '1', '1');
INSERT INTO `photos` VALUES ('63', null, 'public/uploads/8ee9e5c001b5fc355430e10d86c84cf9.png', 'public/uploads/8d0ba7eef6426fbec29cb7d801c3acef_original.png', null, '0', '2015-04-16 23:53:19', '2015-04-16 23:53:19', '0', '1', '1');
INSERT INTO `photos` VALUES ('64', null, 'public/uploads/41492a94c993ef33a5329a8f9ed6ed3a.png', 'public/uploads/83bdbdd394d409100f161077d7022b55_original.png', null, '0', '2015-04-16 23:53:20', '2015-04-16 23:53:20', '0', '1', '1');
INSERT INTO `photos` VALUES ('65', null, 'public/uploads/ce9ed59b3468165b2453a11f97fa1d52.jpeg', 'public/uploads/f4d94afb6b4e3ca9923cd04675120557_original.jpeg', null, '76', '2015-04-16 23:53:23', '2015-04-16 23:53:23', '0', '1', '1');
INSERT INTO `photos` VALUES ('66', null, 'public/uploads/dfe5709a45606a8d8ffd9255b8f301c3.png', 'public/uploads/32a2b46f713305e404f445c40131da4e_original.png', null, '77', '2015-04-16 23:55:01', '2015-04-16 23:55:01', '0', '1', '1');
INSERT INTO `photos` VALUES ('67', null, 'public/uploads/38f47bebf11adb743672305f856278d0.png', 'public/uploads/5222a31f0c0ce00843ea54ded226f6c3_original.png', null, '77', '2015-04-16 23:55:01', '2015-04-16 23:55:01', '0', '1', '1');
INSERT INTO `photos` VALUES ('68', null, 'public/uploads/78e686a483ff3c15950809b1a57da1fc.jpeg', 'public/uploads/c69cb4f738332edbd990a00028ab95eb_original.jpeg', null, '77', '2015-04-16 23:55:05', '2015-04-16 23:55:05', '0', '1', '1');
INSERT INTO `photos` VALUES ('69', null, 'public/uploads/fffc6190f8e3ee9bd9c1abea18432b61.png', 'public/uploads/8eb6ffe00f9da95bb5dfbd66fa481b34_original.png', null, '77', '2015-04-16 23:56:12', '2015-04-16 23:56:12', '0', '1', '1');
INSERT INTO `photos` VALUES ('70', null, 'public/uploads/136c70d55955bcb84fab892684eb382f.png', 'public/uploads/e47a130173e37ecb0352fbca4ff8bc43_original.png', null, '77', '2015-04-16 23:56:12', '2015-04-16 23:56:12', '0', '1', '1');
INSERT INTO `photos` VALUES ('71', null, 'public/uploads/cfe42fc461bc36247e7f69457c9b05be.jpeg', 'public/uploads/387c417fc9a0b5051a1fc933d16dd052_original.jpeg', null, '77', '2015-04-16 23:56:15', '2015-04-16 23:56:15', '0', '1', '1');
INSERT INTO `photos` VALUES ('72', null, 'public/uploads/e93e1238b8b7d222e3f6784221d5fae0.jpeg', 'public/uploads/3da2b662fbff8d0468c3510773d52017_original.jpeg', null, '77', '2015-04-16 23:56:15', '2015-04-16 23:56:15', '0', '1', '1');
INSERT INTO `photos` VALUES ('73', null, 'public/uploads/27d5b466d1c1202df3810decec54a35b.png', 'public/uploads/9cdf8c86a564a1a281804b535b722b89_original.png', null, '77', '2015-04-16 23:58:04', '2015-04-16 23:58:04', '0', '1', '1');
INSERT INTO `photos` VALUES ('74', null, 'public/uploads/30add16738653fef0bb60b058c369a52.jpeg', 'public/uploads/5f13d5c963c8022ac2e9edd52b18001f_original.jpeg', null, '77', '2015-04-16 23:58:04', '2015-04-16 23:58:04', '0', '1', '1');
INSERT INTO `photos` VALUES ('75', null, 'public/uploads/66da72fd889174a0593d03820cabd4c2.jpeg', 'public/uploads/307568b2a64a646db08daa867894460d_original.jpeg', null, '77', '2015-04-16 23:58:06', '2015-04-16 23:58:06', '0', '1', '1');
INSERT INTO `photos` VALUES ('76', null, 'public/uploads/889cefcc35c82919eabe4b095de42815.png', 'public/uploads/fa20e299427d8b4d3fbdb1e49c612df0_original.png', null, '77', '2015-04-16 23:58:06', '2015-04-16 23:58:06', '0', '1', '1');
INSERT INTO `photos` VALUES ('77', null, 'public/uploads/c849b32e2ecf0f128d495192ab0716c6.png', 'public/uploads/a52a9c998cf9593c2444edb9907d105b_original.png', null, '0', '2015-04-17 00:02:54', '2015-04-17 00:02:54', '0', '1', '1');
INSERT INTO `photos` VALUES ('78', null, 'public/uploads/30af0679b74841c7bfc81567a8a1803c.png', 'public/uploads/c78af7d5f2be1ddd8f9f62bba165a95e_original.png', null, '0', '2015-04-17 00:02:55', '2015-04-17 00:02:55', '0', '2', '1');
INSERT INTO `photos` VALUES ('79', null, 'public/uploads/2e000939ba8ca67f6cecd1724bb1d8ae.jpeg', 'public/uploads/b5b994b662859cf7b49e92659f45a1e5_original.jpeg', null, '78', '2015-04-17 00:02:56', '2015-04-17 00:02:56', '0', '1', '1');
INSERT INTO `photos` VALUES ('80', null, 'public/uploads/9312bfa78b43c52f4c77d61cbd2e42ca.jpeg', 'public/uploads/2f67a44fd84c3b08e98900438800f720_original.jpeg', null, '0', '2015-04-17 00:04:52', '2015-04-17 00:04:52', '0', '1', '1');
INSERT INTO `photos` VALUES ('81', null, 'public/uploads/bdbd6e0c2d13e5dccdd0ff59ab59bf04.jpeg', 'public/uploads/668bf5f0f95422f61b27c10c7e1fd2a6_original.jpeg', null, '81', '2015-04-17 00:06:22', '2015-04-17 00:06:22', '0', '1', '1');
INSERT INTO `photos` VALUES ('82', null, 'public/uploads/71e3d861b81f68a2e69d7bb71a24c26a.jpeg', 'public/uploads/71e3d861b81f68a2e69d7bb71a24c26a_original.jpeg', null, '82', '2015-04-17 23:28:31', '2015-04-17 23:28:31', '0', '1', '1');
INSERT INTO `photos` VALUES ('83', null, 'public/uploads/1c73291aefa8266b5bf2445deed9796a.jpeg', 'public/uploads/1c73291aefa8266b5bf2445deed9796a_original.jpeg', null, '84', '2015-04-17 23:28:32', '2015-04-17 23:28:32', '0', '1', '1');
INSERT INTO `photos` VALUES ('84', null, 'public/uploads/bcab7b7a7b7d101f037e93b18225de67.jpeg', 'public/uploads/bcab7b7a7b7d101f037e93b18225de67_original.jpeg', null, '83', '2015-04-17 23:28:33', '2015-04-17 23:28:33', '0', '1', '1');
INSERT INTO `photos` VALUES ('85', null, 'public/uploads/90fcf8cdd238df7e68f81bfb8623a2f5.jpeg', 'public/uploads/90fcf8cdd238df7e68f81bfb8623a2f5_original.jpeg', null, '82', '2015-04-17 23:28:33', '2015-04-17 23:28:33', '0', '1', '1');
INSERT INTO `photos` VALUES ('86', null, 'public/uploads/96fdfcf9e0175cb9fc90c48a6543f679.png', 'public/uploads/96fdfcf9e0175cb9fc90c48a6543f679_original.png', null, '82', '2015-04-17 23:28:34', '2015-04-17 23:28:34', '0', '1', '1');
INSERT INTO `photos` VALUES ('87', null, 'public/uploads/b89801667f5ea9595a711f5edc1b7deb.jpeg', 'public/uploads/b89801667f5ea9595a711f5edc1b7deb_original.jpeg', null, '86', '2015-04-18 10:41:39', '2015-04-18 10:41:39', '0', '1', '1');
INSERT INTO `photos` VALUES ('88', null, 'public/uploads/dfae8d1eb534e321837783481fa45a1e.jpeg', 'public/uploads/dfae8d1eb534e321837783481fa45a1e_original.jpeg', null, '85', '2015-04-18 10:41:39', '2015-04-18 10:41:39', '0', '1', '1');
INSERT INTO `photos` VALUES ('89', null, 'public/uploads/ca1f697f2714ee0fa69c76c567d5060a.png', 'public/uploads/ca1f697f2714ee0fa69c76c567d5060a_original.png', null, '87', '2015-04-18 10:41:39', '2015-04-18 10:41:39', '0', '1', '1');
INSERT INTO `photos` VALUES ('90', null, 'public/uploads/a56a5441b4e3fce25919e90dbfa06f39.jpeg', 'public/uploads/a56a5441b4e3fce25919e90dbfa06f39_original.jpeg', null, '87', '2015-04-18 10:42:31', '2015-04-18 10:42:31', '0', '1', '1');
INSERT INTO `photos` VALUES ('91', null, 'public/uploads/e14256c8ee0f6f1d88502421fca78e40.jpeg', 'public/uploads/e14256c8ee0f6f1d88502421fca78e40_original.jpeg', null, '87', '2015-04-18 10:42:31', '2015-04-18 10:42:31', '0', '1', '1');
INSERT INTO `photos` VALUES ('92', null, 'public/uploads/e83b06a2b180e4878f5bd763166e0893.jpeg', 'public/uploads/e83b06a2b180e4878f5bd763166e0893_original.jpeg', null, '87', '2015-04-18 10:42:31', '2015-04-18 10:42:31', '0', '1', '1');
INSERT INTO `photos` VALUES ('93', null, 'public/uploads/f31f054e0e2294cb57ec6a460f3569ad.png', 'public/uploads/f31f054e0e2294cb57ec6a460f3569ad_original.png', null, '87', '2015-04-18 10:42:32', '2015-04-18 10:42:32', '0', '1', '1');
INSERT INTO `photos` VALUES ('94', null, 'public/uploads/887cb13bf893caf724472e2492850e1b.jpeg', 'public/uploads/887cb13bf893caf724472e2492850e1b_original.jpeg', null, '87', '2015-04-18 10:45:19', '2015-04-18 10:45:19', '0', '1', '1');
INSERT INTO `photos` VALUES ('95', null, 'public/uploads/8678a90e3c4ef6bc810810c9c58d65e5.png', 'public/uploads/8678a90e3c4ef6bc810810c9c58d65e5_original.png', null, '87', '2015-04-18 10:45:19', '2015-04-18 10:45:19', '0', '1', '1');
INSERT INTO `photos` VALUES ('96', null, 'public/uploads/50362dfcb20872209e62ade3d0f27ed4.jpeg', 'public/uploads/50362dfcb20872209e62ade3d0f27ed4_original.jpeg', null, '87', '2015-04-18 10:45:19', '2015-04-18 10:45:19', '0', '1', '1');
INSERT INTO `photos` VALUES ('97', null, 'public/uploads/a062bd09e44e98094926d1b95462bc2a.jpeg', 'public/uploads/a062bd09e44e98094926d1b95462bc2a_original.jpeg', null, '87', '2015-04-18 10:46:00', '2015-04-18 10:46:00', '0', '1', '1');
INSERT INTO `photos` VALUES ('98', null, 'public/uploads/8510bdd87b45e6ac9f4626ea43c9beff.jpeg', 'public/uploads/8510bdd87b45e6ac9f4626ea43c9beff_original.jpeg', null, '87', '2015-04-18 10:46:01', '2015-04-18 10:46:01', '0', '1', '1');
INSERT INTO `photos` VALUES ('99', null, 'public/uploads/0147d07c4ad1f07b6e5df1e47bde54af.jpeg', 'public/uploads/0147d07c4ad1f07b6e5df1e47bde54af_original.jpeg', null, '87', '2015-04-18 10:46:01', '2015-04-18 10:46:01', '0', '1', '1');
INSERT INTO `photos` VALUES ('100', null, 'public/uploads/b77879028267c4c5bed5ec30ad986076.jpeg', 'public/uploads/242a3c660b947ff034b1921739e41b06_original.jpeg', null, '87', '2015-04-18 10:48:25', '2015-04-18 10:48:25', '0', '1', '1');
INSERT INTO `photos` VALUES ('101', null, 'public/uploads/88f078e27a90096d843c9b5b1bc5f8d5.jpeg', 'public/uploads/88f078e27a90096d843c9b5b1bc5f8d5_original.jpeg', null, '87', '2015-04-18 10:48:30', '2015-04-18 10:48:30', '0', '1', '1');
INSERT INTO `photos` VALUES ('102', null, 'public/uploads/282fa564434e536ef888177d3b045a4a.jpeg', 'public/uploads/282fa564434e536ef888177d3b045a4a_original.jpeg', null, '87', '2015-04-18 10:50:50', '2015-04-18 10:50:50', '0', '1', '1');
INSERT INTO `photos` VALUES ('103', null, 'public/uploads/3244744722b64f9cfd7c189110863e45.jpeg', 'public/uploads/3244744722b64f9cfd7c189110863e45_original.jpeg', null, '87', '2015-04-18 10:50:50', '2015-04-18 10:50:50', '0', '1', '1');
INSERT INTO `photos` VALUES ('104', null, 'public/uploads/c6435a90be4a42532d7bff2996192f78.jpeg', 'public/uploads/c6435a90be4a42532d7bff2996192f78_original.jpeg', null, '88', '2015-04-18 10:52:04', '2015-04-18 10:52:04', '0', '1', '1');
INSERT INTO `photos` VALUES ('105', null, 'public/uploads/ebb01c64395c7d3bbe0fe143781e3a24.jpeg', 'public/uploads/ebb01c64395c7d3bbe0fe143781e3a24_original.jpeg', null, '89', '2015-04-18 10:52:04', '2015-04-18 10:52:04', '0', '1', '1');
INSERT INTO `photos` VALUES ('106', null, 'public/uploads/5e4ba9f9f3cd01d8004b5acfba339ca0.jpeg', 'public/uploads/5e4ba9f9f3cd01d8004b5acfba339ca0_original.jpeg', null, '90', '2015-04-18 10:52:04', '2015-04-18 10:52:04', '0', '1', '1');
INSERT INTO `photos` VALUES ('107', null, 'public/uploads/21f60756c4ea0114f66c537734a9d2c6.jpeg', 'public/uploads/21f60756c4ea0114f66c537734a9d2c6_original.jpeg', null, '90', '2015-04-18 10:52:05', '2015-04-18 10:52:05', '0', '1', '1');
INSERT INTO `photos` VALUES ('108', null, 'public/uploads/d93d30d7ed1be065622b1f3d5d229cb4.jpeg', 'public/uploads/d93d30d7ed1be065622b1f3d5d229cb4_original.jpeg', null, '92', '2015-04-18 11:01:56', '2015-04-18 11:01:56', '0', '1', '1');
INSERT INTO `photos` VALUES ('109', null, 'public/uploads/c1dc2523dd539fb997437dd857a5ddb1.jpeg', 'public/uploads/c2aad1d9947f1eb67cd645112c81b77a_original.jpeg', null, '93', '2015-04-18 11:01:56', '2015-04-18 11:01:56', '0', '1', '1');
INSERT INTO `photos` VALUES ('110', null, 'public/uploads/fc834d829ca6c37568b8a81de6e68c5b.jpeg', 'public/uploads/fc834d829ca6c37568b8a81de6e68c5b_original.jpeg', null, '91', '2015-04-18 11:01:56', '2015-04-18 11:01:56', '0', '1', '1');
INSERT INTO `photos` VALUES ('111', null, 'public/uploads/ac5b110a7f0587fb69cb9985f89edfe9.png', 'public/uploads/ac5b110a7f0587fb69cb9985f89edfe9_original.png', null, '94', '2015-04-18 11:17:08', '2015-04-18 11:17:08', '0', '1', '1');
INSERT INTO `photos` VALUES ('112', null, 'public/uploads/4ef0e53a979fd1c87b58750040a9d409.jpeg', 'public/uploads/4ef0e53a979fd1c87b58750040a9d409_original.jpeg', null, '95', '2015-04-18 11:17:08', '2015-04-18 11:17:08', '0', '1', '1');
INSERT INTO `photos` VALUES ('113', null, 'public/uploads/f7646596f15b33d3651b873dd218ecc4.jpeg', 'public/uploads/f7646596f15b33d3651b873dd218ecc4_original.jpeg', null, '97', '2015-04-18 16:54:58', '2015-04-18 16:54:58', '0', '1', '1');
INSERT INTO `photos` VALUES ('114', null, 'public/uploads/6d7692b3d7cb049cc7aa3b097576b7e4.jpeg', 'public/uploads/6d7692b3d7cb049cc7aa3b097576b7e4_original.jpeg', null, '98', '2015-04-18 16:54:58', '2015-04-18 16:54:58', '0', '1', '1');
INSERT INTO `photos` VALUES ('115', null, 'public/uploads/2147ecb41be5f4a72400947899b04351.jpeg', 'public/uploads/2147ecb41be5f4a72400947899b04351_original.jpeg', null, '96', '2015-04-18 16:54:58', '2015-04-18 16:54:58', '0', '1', '1');
INSERT INTO `photos` VALUES ('116', null, 'public/uploads/4b8f904fadd247d177d5fbb227889999.png', 'public/uploads/4b8f904fadd247d177d5fbb227889999_original.png', null, '96', '2015-04-18 16:55:00', '2015-04-18 16:55:00', '0', '1', '1');
INSERT INTO `photos` VALUES ('117', null, 'public/uploads/a6f800dcd8e02d9a192035c3b543af2b.jpeg', 'public/uploads/a6f800dcd8e02d9a192035c3b543af2b_original.jpeg', null, '99', '2015-04-18 16:55:59', '2015-04-18 16:55:59', '0', '1', '1');

-- ----------------------------
-- Table structure for `recommend`
-- ----------------------------
DROP TABLE IF EXISTS `recommend`;
CREATE TABLE `recommend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `star` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `works_introduce` text COLLATE utf8_unicode_ci,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `publish` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `original_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `interpreter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `page_num` int(11) DEFAULT NULL,
  `comment_num` int(11) DEFAULT NULL,
  `love_num` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of recommend
-- ----------------------------
INSERT INTO `recommend` VALUES ('1', '9', '222', '21', '2.5', '2r2fr1', 'Lich', '1', 'ert', '3w', 'Lich', '2015-02-20 18:45:00', '123', '11', '11', '1');
INSERT INTO `recommend` VALUES ('2', '10', '324', '324', '3.3', '43tg', 'Lich', '2', 'rf', 'tfe', 'Lich', '2015-02-20 18:45:03', '213', '11', '22', '1');
INSERT INTO `recommend` VALUES ('3', '9', '3254', '324', '4', 'gd', 'Lich', '3', 'dsf', '4edv', 'Lich', '2015-02-20 18:45:10', '214', '22', '33', '1');
INSERT INTO `recommend` VALUES ('4', '10', '3254', '324', '2', 'gd', 'Lich', '32', 'sdf', '4e', 'Lich', '2015-02-20 18:45:13', '325', '22', '34', '1');
INSERT INTO `recommend` VALUES ('5', '11', '3254', '324', '2', 'gd', 'Lich', '432', 'sgvsd', '4rd', 'Lich', '2015-02-20 18:45:08', '436', '22', '33', '1');
INSERT INTO `recommend` VALUES ('6', '9', '3254', '324', '1', 'gd', 'Lich', '543', 'weg', 'tr', 'Lich', '2015-02-20 18:45:19', '234', '22', '33', '1');
INSERT INTO `recommend` VALUES ('7', '10', '3254', '324', '1', 'gd', 'Lich', '7654', 'ds', 'freh', 'Lich', '2015-02-20 18:45:16', '34', '22', '33', '1');
INSERT INTO `recommend` VALUES ('8', '11', '3254', '324', '2', 'gd', 'Lich', '4563', 'dfs', 're', 'Lich', '2015-02-20 18:45:22', '235', '22', '33', '1');
INSERT INTO `recommend` VALUES ('9', '9', 'sdf', 'dsfg', '3', '3434g', 'Lich', '23', 'gdfs', 'erh', 'Lich', '2015-02-20 18:45:24', '436', '454', '325', '1');
INSERT INTO `recommend` VALUES ('10', '11', '3254', '324', '4', 'gd', 'Lich', '4', 'sdfg', 'we', 'Lich', '2015-02-20 18:45:05', '436', '22', '33', '1');
INSERT INTO `recommend` VALUES ('11', '10', '3254', '324', '5', 'gd', 'Lich', '324', 'dfg', 'hr4', 'Lich', '2015-02-20 18:45:27', '436', '22', '33', '1');
INSERT INTO `recommend` VALUES ('12', '9', 'dsf', 'sdf', '2', 'dfb', 'Lich', '32', 'fg', '4e', 'Lich', '2015-02-20 18:45:30', '643', '22', '44', '1');
INSERT INTO `recommend` VALUES ('13', '11', '3254', '324', '2', 'gd', 'Lich', '4', 'fg', 'e4', 'Lich', '2015-02-20 18:45:32', '56', '22', '33', '1');
INSERT INTO `recommend` VALUES ('14', '11', '3254', '324', '3', 'gd', 'Lich', '324', 'dsfg', 'hhb4e', 'Lich', '2015-02-20 18:45:35', '43545435', '22', '33', '1');
INSERT INTO `recommend` VALUES ('15', '9', '3254', '324', '1', 'gd', 'Lich', '34', 'df', 'tr', 'Lich', '2015-02-20 18:45:41', '34', '22', '33', '1');
INSERT INTO `recommend` VALUES ('16', '11', '3254', '324', '4', 'gd', 'Lich', '32', 'ds', 'r4', 'Lich', '2015-02-20 18:45:38', '53453', '22', '33', '1');
INSERT INTO `recommend` VALUES ('17', '9', '3254', '324', '4', 'gd', 'Lich', '23', 'r', 'tr', 'Lich', '2015-02-20 18:45:44', '45', '22', '33', '1');
INSERT INTO `recommend` VALUES ('18', '10', '3254', '324', '5', 'gd', 'Lich', '32', 'sdf', 'trf', 'Lich', '2015-02-20 18:45:46', '345', '22', '33', '1');
INSERT INTO `recommend` VALUES ('19', '11', '3254', '324', '2', 'gd', 'Lich', '3', 'reg', 'tfrj', 'Lich', '2015-02-20 18:45:50', '543', '22', '33', '1');
INSERT INTO `recommend` VALUES ('20', '9', '20', '20', '3', '20', 'Lich', '32', 'reg', 'trjr4t', 'Lich', '2015-02-20 18:45:54', '435', '20', '20', '1');
INSERT INTO `recommend` VALUES ('21', '10', '3254', '324', '4', 'gd', 'Lich', '3', 'sdf', 't', 'Lich', '2015-02-20 18:45:56', '345', '22', '33', '1');
INSERT INTO `recommend` VALUES ('35', '11', null, 'public/uploads/2da646a715826258f699ba281bc04986.png', null, 'xzcvxz', null, null, null, null, null, null, null, null, null, '0');
INSERT INTO `recommend` VALUES ('36', '10', 'test', 'public/uploads/9b90a0110a111e8af195a22413601494.png', '0', '12rfwed', 'me', '123', 'ddsd', 'rgv2w4e', '3wefgv2q', '0000-00-00 00:00:00', '123', '0', '1', '1');

-- ----------------------------
-- Table structure for `routelist`
-- ----------------------------
DROP TABLE IF EXISTS `routelist`;
CREATE TABLE `routelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of routelist
-- ----------------------------
INSERT INTO `routelist` VALUES ('1', '文学发表评论', 'home/comment/literature');
INSERT INTO `routelist` VALUES ('2', '图片发表评论', 'home/comment/photos');
INSERT INTO `routelist` VALUES ('3', '微视发表评论', 'home/comment/micromovie');
INSERT INTO `routelist` VALUES ('4', '原味发表评论', 'home/comment/original');
INSERT INTO `routelist` VALUES ('5', '读书影逝发表评论', 'home/comment/recommend');
INSERT INTO `routelist` VALUES ('6', '获取排序文学及分页', 'home/literature');
INSERT INTO `routelist` VALUES ('7', '获取文章评论', 'home/literature/comment');
INSERT INTO `routelist` VALUES ('8', '获取排序图片及分页', 'home/photos');
INSERT INTO `routelist` VALUES ('9', '获取图片评论', 'home/photos/comment');
INSERT INTO `routelist` VALUES ('10', '获取排序微视及分页', 'home/micromovie');
INSERT INTO `routelist` VALUES ('11', '获取微视评论', 'home/micromovie/comment');
INSERT INTO `routelist` VALUES ('12', '获取原味页面', 'home/original');
INSERT INTO `routelist` VALUES ('13', '获取原味评论', 'home/original/comment');
INSERT INTO `routelist` VALUES ('14', '获取排序读书影逝及分页', 'home/recommend');
INSERT INTO `routelist` VALUES ('15', '获取读书影逝评论', 'home/recommend/comment');
INSERT INTO `routelist` VALUES ('16', 'test1我去', 'home/test1');
INSERT INTO `routelist` VALUES ('23', '后台 首页', 'admin/index');
INSERT INTO `routelist` VALUES ('64', '修改个人信息', 'home/personal/personalinfo');
INSERT INTO `routelist` VALUES ('24', '文学模块管理首页', 'admin/literature');
INSERT INTO `routelist` VALUES ('25', '文学模块管理搜索', 'admin/literature/search');
INSERT INTO `routelist` VALUES ('26', '文学模块管理', 'admin/literature/manage');
INSERT INTO `routelist` VALUES ('27', '系统首页', 'admin/system');
INSERT INTO `routelist` VALUES ('28', '添加导航', 'admin/system/addnav');
INSERT INTO `routelist` VALUES ('29', '添加路由', 'admin/system/addroute');
INSERT INTO `routelist` VALUES ('30', '删除路由', 'admin/system/delroute');
INSERT INTO `routelist` VALUES ('31', '编辑路由', 'admin/system/editroute');
INSERT INTO `routelist` VALUES ('32', '用户管理首页', 'admin/user');
INSERT INTO `routelist` VALUES ('33', '添加用户组', 'admin/user/addgroup');
INSERT INTO `routelist` VALUES ('34', '删除用户组', 'admin/user/delgroup');
INSERT INTO `routelist` VALUES ('35', '编辑用户组', 'admin/user/editgroup');
INSERT INTO `routelist` VALUES ('36', '删除用户组授权路由', 'admin/user/delroute');
INSERT INTO `routelist` VALUES ('37', '添加用户组授权路由', 'admin/user/addroute');
INSERT INTO `routelist` VALUES ('38', '用户状态管理', 'admin/user/manage');
INSERT INTO `routelist` VALUES ('39', '评论管理首页', 'admin/comment');
INSERT INTO `routelist` VALUES ('40', '评论管理', 'admin/comment/manage');
INSERT INTO `routelist` VALUES ('41', '读书影逝管理首页', 'admin/recommend');
INSERT INTO `routelist` VALUES ('42', '读书影逝管理', 'admin/recommend/manage');
INSERT INTO `routelist` VALUES ('43', '读书影逝发布', 'admin/recommend/add');
INSERT INTO `routelist` VALUES ('44', '微视管理首页', 'admin/micromovie');
INSERT INTO `routelist` VALUES ('45', '爱拍管理首页', 'admin/photos');
INSERT INTO `routelist` VALUES ('46', ' 相册管理', 'admin/photos/albummanage');
INSERT INTO `routelist` VALUES ('47', '相片管理', 'admin/photos/photomanage');
INSERT INTO `routelist` VALUES ('48', '文学管理首页', 'admin/literature');
INSERT INTO `routelist` VALUES ('49', '文学管理搜索', 'admin/literature/search');
INSERT INTO `routelist` VALUES ('50', '文学管理管理', 'admin/literature/manage');
INSERT INTO `routelist` VALUES ('51', '仪表盘', 'admin/index');
INSERT INTO `routelist` VALUES ('52', '微视管理', 'admin/micromovie/manage');
INSERT INTO `routelist` VALUES ('53', '发表爱拍评论', 'home/comment/photos');
INSERT INTO `routelist` VALUES ('54', ' 微视发表评论', 'home/comment/micromovie');
INSERT INTO `routelist` VALUES ('55', '原味发表评论', 'home/comment/original');
INSERT INTO `routelist` VALUES ('56', '读书影逝发表评论', 'home/comment/recommend');
INSERT INTO `routelist` VALUES ('57', '文学发布文章', 'home/literature/createpassage');
INSERT INTO `routelist` VALUES ('58', '文学发表评论', 'home/comment/literatrue');
INSERT INTO `routelist` VALUES ('59', '用户搜索', 'admin/user/search');
INSERT INTO `routelist` VALUES ('60', '原味模块', 'admin/original');
INSERT INTO `routelist` VALUES ('61', '原味模块管理', 'admin/original/manage');
INSERT INTO `routelist` VALUES ('62', '收藏', 'home/comment/collect');
INSERT INTO `routelist` VALUES ('63', '发表微视', 'home/movie/createmovie');
INSERT INTO `routelist` VALUES ('65', '微视点赞', 'home/praise');
INSERT INTO `routelist` VALUES ('66', '微视踩', 'home/thread');
INSERT INTO `routelist` VALUES ('67', '头像上传页', 'home/imageUpload');
INSERT INTO `routelist` VALUES ('68', '头像剪切', 'home/imageUploadCut');
INSERT INTO `routelist` VALUES ('69', '头像上传', 'home/imageUpload');
INSERT INTO `routelist` VALUES ('70', '上传图片,文章，微视', 'home/uploads');

-- ----------------------------
-- Table structure for `tags`
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `work_id` int(11) DEFAULT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('1', '14', '1', 'ccc');
INSERT INTO `tags` VALUES ('2', '14', '2', 'ttt');
INSERT INTO `tags` VALUES ('3', '14', null, 'sd');
INSERT INTO `tags` VALUES ('4', '14', null, 'sdf');
INSERT INTO `tags` VALUES ('5', '14', null, 'sdf4');
INSERT INTO `tags` VALUES ('6', '14', null, 'vc');
INSERT INTO `tags` VALUES ('7', '15', null, 'ewrf');
INSERT INTO `tags` VALUES ('8', '15', null, 'b');
INSERT INTO `tags` VALUES ('9', '15', null, 'we');
INSERT INTO `tags` VALUES ('10', '15', null, 'wefr');
INSERT INTO `tags` VALUES ('11', '15', null, 'eg');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `head` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introduce` text COLLATE utf8_unicode_ci,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1634300', 'Lich', 'public/uploads/a65dd8e688cc3e8c4e33e0db588f87f1.jpg', 'rfnfrynjfryjn', '88583', null, '2015-04-19 17:18:19', 'jCHt8fbqIbf5Ez2f0dXOETS89b8kAgrYoWWk2xhizEA1w0i6kOmde4QG5H1w', '1', '$2y$10$/ec1TG8xk/yluvZIyArHJuwflso.71z4bhXu00nJuAD5OtExYLAb6');
INSERT INTO `users` VALUES ('13', '1629745', 'boolean93', null, null, null, '2015-03-17 16:36:20', '2015-03-17 17:21:58', '5t9WaxEVprt7GmIN1uiikOikJjq4jYZx6hQTmql9DQAcdBz25AfJoQ12TbgY', '1', '$2y$10$LikPUlobqTyroR9xm.svMeiswMFq.k8tcYVm9zCXo0vSdOx5nd7zC');
INSERT INTO `users` VALUES ('2', '1634301', 'Lich2', null, null, null, null, '2015-03-27 01:52:44', 'c429BvCSGYXe0ZuXWxT4UydQduX4JwHN931pk3B3IIRRCGZ4h6Fc6Tr8IFDE', '1', '$2y$10$/ec1TG8xk/yluvZIyArHJuwflso.71z4bhXu00nJuAD5OtExYLAb6');
INSERT INTO `users` VALUES ('14', '1632229', 'smelrain', null, null, null, '2015-04-18 17:04:05', '2015-04-18 17:04:05', null, null, '$2y$10$zlIlc/C4TptnJqWNx5LYruUtN5oDydbrI8EnJHlc9fwZx44bHj9dK');

-- ----------------------------
-- Table structure for `user_type`
-- ----------------------------
DROP TABLE IF EXISTS `user_type`;
CREATE TABLE `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_type
-- ----------------------------
INSERT INTO `user_type` VALUES ('2', '管理员');
INSERT INTO `user_type` VALUES ('3', '普通用户');
INSERT INTO `user_type` VALUES ('1', '网站开发者');
