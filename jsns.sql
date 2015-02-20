/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jsns

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-02-20 19:53:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for album
-- ----------------------------
DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `album_name` text COLLATE utf8_unicode_ci,
  `album_cover` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of album
-- ----------------------------
INSERT INTO `album` VALUES ('1', '1', 'test', null, '2015-02-17 16:58:26', '2015-02-17 16:58:29');

-- ----------------------------
-- Table structure for collection
-- ----------------------------
DROP TABLE IF EXISTS `collection`;
CREATE TABLE `collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `work_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of collection
-- ----------------------------

-- ----------------------------
-- Table structure for comment
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1', '6', '1', '1', '0', '1', '1', '2015-02-13 18:10:06', '2015-02-13 18:10:09', '0', '1', '1');
INSERT INTO `comment` VALUES ('2', '1', '6', '2', '1', '0', '1', '1', '2015-02-13 18:10:33', '2015-02-13 18:10:36', '0', '1', '1');
INSERT INTO `comment` VALUES ('3', '1', '6', '3', '1', '0', '1', '1', '2015-02-13 18:10:49', '2015-02-13 18:10:52', '0', '1', '1');
INSERT INTO `comment` VALUES ('7', '1', '6', '6', '1', '1', '1', '1', '2015-02-13 19:22:07', '2015-02-13 19:22:09', '1', '1', '1');
INSERT INTO `comment` VALUES ('4', '1', '6', '4', '1', '2', '1', '1', '2015-02-13 19:22:07', '2015-02-13 19:22:09', '1', '1', '1');
INSERT INTO `comment` VALUES ('5', '1', '6', '4', '2', '1', '1', '1', '2015-02-13 19:22:35', '2015-02-13 19:22:38', '1', '1', '1');
INSERT INTO `comment` VALUES ('6', '1', '6', '6', '1', '1', '1', '1', '2015-02-13 19:22:07', '2015-02-13 19:22:09', '2', '1', '1');
INSERT INTO `comment` VALUES ('8', '1', '9', 'ewfefw1', '1', '0', '1', '1', '2015-02-20 19:15:51', '2015-02-20 19:15:53', '0', '2', '1');
INSERT INTO `comment` VALUES ('9', '1', '9', 'ewfefw2', '1', '0', '1', '1', '2015-02-20 19:15:51', '2015-02-20 19:15:53', '0', '2', '1');
INSERT INTO `comment` VALUES ('10', '1', '9', 'ewfefw3', '1', '0', '1', '1', '2015-02-20 19:15:51', '2015-02-20 19:15:53', '0', '2', '1');

-- ----------------------------
-- Table structure for group
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of group
-- ----------------------------
INSERT INTO `group` VALUES ('1', '1', '1');
INSERT INTO `group` VALUES ('2', '2', '2');

-- ----------------------------
-- Table structure for literature
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of literature
-- ----------------------------
INSERT INTO `literature` VALUES ('1', '6', 'title1', 'public/uploads/1.png', 'sdhgfdhbfd', '1', '2015-02-15 15:06:41', '2015-02-15 15:06:44', '15', '14', '1');
INSERT INTO `literature` VALUES ('2', '7', 'title2', 'public/uploads/2.png', '324', '2', '2015-02-17 21:50:32', '2015-02-15 15:06:44', '15', '13', '1');
INSERT INTO `literature` VALUES ('3', '6', 'title3', 'public/uploads/1.png', 'sdfsd', '1', '2015-02-17 21:50:36', '2015-02-15 15:06:44', '1', '13', '1');
INSERT INTO `literature` VALUES ('4', '8', 'title4', 'public/uploads/2.png', '234', '2', '2015-02-17 21:50:44', '2015-02-15 15:06:44', '14', '17', '1');
INSERT INTO `literature` VALUES ('5', '6', 'title5', 'public/uploads/1.png', '4576', '1', '2015-02-17 21:50:47', '2015-02-15 15:06:44', '14', '133', '1');
INSERT INTO `literature` VALUES ('6', '7', 'title6', 'public/uploads/2.png', '介绍\r\n\r\nLaravel 的 Eloquent ORM 提供了漂亮、简洁的 ActiveRecord 实现来和数据库的互动。 每个数据库表会和一个对应的「模型」互动。\r\n\r\n在开始之前，记得把 app/config/database.php 里的数据库连接配置好。\r\n\r\n\r\n基本用法\r\n\r\n我们先从建立一个 Eloquent 模型开始。模型通常放在 app/models 目录下，但是您可以将它们放在任何地方，只要能通过 composer.json 被自动载入。\r\n\r\n定义一个 Eloquent 模型\r\n\r\nclass User extends Eloquent {}\r\n注意我们并没有告诉 Eloquent User 模型会使用哪个数据库表。若没有特别指定，系统会默认自动对应名称为「类名称的小写复数形态」的数据库表。所以，在上面的例子中， Eloquent 会假设 User 将把数据存在 users 数据库表。可以在类里定义 table 属性自定义要对应的数据库表。\r\n\r\nclass User extends Eloquent {\r\n\r\n    protected $table = \'my_users\';\r\n\r\n}\r\n注意： Eloquent 也会假设每个数据库表都有一个字段名称为 id 的主键。您可以在类里定义 primaryKey 属性来重写。同样的，您也可以定义 connection 属性，指定模型连接到专属的数据库连接。\r\n定义好模型之后，您就可以从数据库表新增及获取数据了。注意在默认情况下，在数据库表里需要有 updated_at 和 created_at 两个字段。如果您不想设定或自动更新这两个字段，则将类里的 $timestamps 属性设为 false即可。\r\n\r\n取出所有模型数据\r\n\r\n$users = User::all();\r\n根据主键取出一条数据\r\n\r\n$user = User::find(1);\r\n\r\nvar_dump($user->name);', '2', '2015-02-17 21:50:50', '2015-02-15 15:06:44', '14', '16', '1');
INSERT INTO `literature` VALUES ('7', '6', 'title7', 'public/uploads/1.png', '介绍\r\n\r\n数据库查询构造器 (query builder) 提供方便流畅的接口来建立、执行数据库查询语法。在您的应用程序里面，它可以被使用在大部分的数据 库操作，而且它在所有支持的数据库系统上都可以执行。\r\n\r\n注意: Laravel 查询构造器使用 PDO 参数绑定，以保护应用程序免于SQL注入攻击 (SQL injection)，因此传入的参数不需过滤额外的特殊字符串。\r\n\r\nSelects\r\n\r\n从数据库表中取得所有的数据列\r\n\r\n$users = DB::table(\'users\')->get();\r\n\r\nforeach ($users as $user)\r\n{\r\n    var_dump($user->name);\r\n}\r\n从数据库表中取得单一数据列\r\n\r\n$user = DB::table(\'users\')->where(\'name\', \'John\')->first();\r\n\r\nvar_dump($user->name);\r\n从数据库表中取得单一数据列的单一字段\r\n\r\n$name = DB::table(\'users\')->where(\'name\', \'John\')->pluck(\'name\');\r\n取得单一字段值的列表\r\n\r\n$roles = DB::table(\'roles\')->lists(\'title\');\r\n这个方法将会回传含有数据库表 role 的 title 字段值的数组。您也可以通过下面的方法，为回传的数组指定自定义键值。\r\n\r\n$roles = DB::table(\'roles\')->lists(\'title\', \'name\');', '1', '2015-02-17 21:50:56', '2015-02-15 15:06:44', '16', '16', '1');

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of log
-- ----------------------------

-- ----------------------------
-- Table structure for micromovie
-- ----------------------------
DROP TABLE IF EXISTS `micromovie`;
CREATE TABLE `micromovie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci,
  `author` text COLLATE utf8_unicode_ci,
  `uid` int(11) DEFAULT NULL,
  `introduce` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `comment_num` int(11) DEFAULT NULL,
  `love_num` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of micromovie
-- ----------------------------
INSERT INTO `micromovie` VALUES ('1', 'test1', 'qwer1', '1', 'hhhhh66666', '2015-02-15 19:36:17', '2015-02-15 19:36:20', '1', '21', '12', '1');
INSERT INTO `micromovie` VALUES ('2', 'test1', 'qwer2', '1', 'hhhhh6666', '2015-02-15 19:42:39', '2015-02-15 19:36:20', '3', '13', '12', '1');
INSERT INTO `micromovie` VALUES ('3', 'test1', 'qwer3', '1', 'hhhhh6666', '2015-02-15 19:42:44', '2015-02-15 19:36:20', '4', '14', '13', '1');
INSERT INTO `micromovie` VALUES ('4', 'test1', 'qwer4', '1', 'hhhhh666666', '2015-02-15 19:42:54', '2015-02-15 19:36:20', '5', '12', '16', '1');
INSERT INTO `micromovie` VALUES ('5', 'test1', 'qwer5', '1', 'hhhhh66666', '2015-02-15 19:42:59', '2015-02-15 19:36:20', '3', '14', '14', '1');
INSERT INTO `micromovie` VALUES ('6', 'test1', 'qwer6', '1', 'hhhhh6666', '2015-02-15 19:43:03', '2015-02-15 19:36:20', '2', '16', '15', '1');

-- ----------------------------
-- Table structure for mywork
-- ----------------------------
DROP TABLE IF EXISTS `mywork`;
CREATE TABLE `mywork` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `work_id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of mywork
-- ----------------------------

-- ----------------------------
-- Table structure for navigation
-- ----------------------------
DROP TABLE IF EXISTS `navigation`;
CREATE TABLE `navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_id` int(11) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of navigation
-- ----------------------------
INSERT INTO `navigation` VALUES ('1', 'literature', '文学', '00000000000');
INSERT INTO `navigation` VALUES ('2', 'photos', '爱拍', '00000000000');
INSERT INTO `navigation` VALUES ('3', 'recommend', '读书影逝', '00000000000');
INSERT INTO `navigation` VALUES ('4', 'micromovie', '微视', '00000000000');
INSERT INTO `navigation` VALUES ('5', 'original', '原味', '00000000000');
INSERT INTO `navigation` VALUES ('6', 'wq', '散文', '00000000001');
INSERT INTO `navigation` VALUES ('7', 'qwe', '风景', '00000000001');
INSERT INTO `navigation` VALUES ('8', '23', '人像', '00000000001');
INSERT INTO `navigation` VALUES ('9', null, '毛概', '00000000003');
INSERT INTO `navigation` VALUES ('10', null, '马列', '00000000003');
INSERT INTO `navigation` VALUES ('11', null, '邓小平理论', '00000000003');

-- ----------------------------
-- Table structure for original
-- ----------------------------
DROP TABLE IF EXISTS `original`;
CREATE TABLE `original` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of original
-- ----------------------------

-- ----------------------------
-- Table structure for permission
-- ----------------------------
DROP TABLE IF EXISTS `permission`;
CREATE TABLE `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `path_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- ----------------------------
-- Table structure for photos
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `original_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introduce` text COLLATE utf8_unicode_ci,
  `album_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `comment_num` int(11) DEFAULT NULL,
  `love_num` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of photos
-- ----------------------------

-- ----------------------------
-- Table structure for recommend
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
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- ----------------------------
-- Table structure for routelist
-- ----------------------------
DROP TABLE IF EXISTS `routelist`;
CREATE TABLE `routelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of routelist
-- ----------------------------
INSERT INTO `routelist` VALUES ('1', '文学发表评论', 'home/comment/literatrue');
INSERT INTO `routelist` VALUES ('2', '图片发表评论', 'home/comment/photos');
INSERT INTO `routelist` VALUES ('3', '微视发表评论', 'home/comment/micromovie');
INSERT INTO `routelist` VALUES ('4', '原味发表评论', 'home/comment/original');
INSERT INTO `routelist` VALUES ('5', '读书影逝发表评论', 'home/comment/recommend');
INSERT INTO `routelist` VALUES ('6', '获取排序文学及分页', 'home/literatrue');
INSERT INTO `routelist` VALUES ('7', '获取文章评论', 'home/literatrue/comment');
INSERT INTO `routelist` VALUES ('8', '获取排序图片及分页', 'home/photos');
INSERT INTO `routelist` VALUES ('9', '获取图片评论', 'home/photos/comment');
INSERT INTO `routelist` VALUES ('10', '获取排序微视及分页', 'home/micromovie');
INSERT INTO `routelist` VALUES ('11', '获取微视评论', 'home/micromovie/comment');
INSERT INTO `routelist` VALUES ('12', '获取原味页面', 'home/original');
INSERT INTO `routelist` VALUES ('13', '获取原味评论', 'home/original/comment');
INSERT INTO `routelist` VALUES ('14', '获取排序读书影逝及分页', 'home/recommend');
INSERT INTO `routelist` VALUES ('15', '获取读书影逝评论', 'home/recommend/comment');
INSERT INTO `routelist` VALUES ('16', 'test', 'home/test');

-- ----------------------------
-- Table structure for tags
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
INSERT INTO `tags` VALUES ('1', '9', '1', 'ccc');
INSERT INTO `tags` VALUES ('2', '10', '2', 'ttt');
INSERT INTO `tags` VALUES ('3', '9', null, 'sd');
INSERT INTO `tags` VALUES ('4', '11', null, 'sdf');
INSERT INTO `tags` VALUES ('5', '9', null, 'sdf4');
INSERT INTO `tags` VALUES ('6', '10', null, 'vc');
INSERT INTO `tags` VALUES ('7', '11', null, 'ewrf');
INSERT INTO `tags` VALUES ('8', '9', null, 'b');
INSERT INTO `tags` VALUES ('9', '9', null, 'we');
INSERT INTO `tags` VALUES ('10', '10', null, 'wefr');
INSERT INTO `tags` VALUES ('11', '11', null, 'eg');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `head` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introduce` text COLLATE utf8_unicode_ci,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'admin', '1', '1', null, null, null, null, null, '1');
INSERT INTO `users` VALUES ('2', '2', 'test', null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for user_type
-- ----------------------------
DROP TABLE IF EXISTS `user_type`;
CREATE TABLE `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_type
-- ----------------------------
INSERT INTO `user_type` VALUES ('1', '网站开发者');
