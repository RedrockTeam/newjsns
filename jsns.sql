/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : jsns

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-02-15 21:04:37
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of album
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1', '6', '1', '1', '0', '1', '1', '2015-02-13 18:10:06', '2015-02-13 18:10:09', '0', '1', '1');
INSERT INTO `comment` VALUES ('2', '1', '6', '2', '1', '0', '1', '1', '2015-02-13 18:10:33', '2015-02-13 18:10:36', '0', '1', '1');
INSERT INTO `comment` VALUES ('3', '1', '6', '3', '1', '0', '1', '1', '2015-02-13 18:10:49', '2015-02-13 18:10:52', '0', '1', '1');
INSERT INTO `comment` VALUES ('4', '1', '6', '4', '1', '2', '1', '1', '2015-02-13 19:22:07', '2015-02-13 19:22:09', '1', '1', '1');
INSERT INTO `comment` VALUES ('5', '1', '6', '4', '2', '1', '1', '1', '2015-02-13 19:22:35', '2015-02-13 19:22:38', '1', '1', '1');
INSERT INTO `comment` VALUES ('6', '1', '6', '6', '1', '1', '1', '1', '2015-02-13 19:22:07', '2015-02-13 19:22:09', '2', '1', '1');

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
  `content` mediumtext COLLATE utf8_unicode_ci,
  `uid` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `comment_num` int(11) DEFAULT NULL,
  `love_num` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of literature
-- ----------------------------
INSERT INTO `literature` VALUES ('1', '6', 'title', '简介\r\n\r\n从哪里开始\r\nLaravel 哲学\r\n\r\n从哪里开始\r\n\r\n学习一门框架既令人生畏，又令人兴奋。为了提供平稳的学习体验，我们尝试为Laravel创建了清晰简明的文档。下面列出了推荐的阅读顺序：\r\n\r\n安装 和 配置\r\n路由\r\n请求与输入\r\n视图与响应\r\n控制器\r\n通过阅读这些文档，你应该能够掌握Laravel框架对于基本请求/响应的处理。下一步你可能希望阅读 配置数据库, 查询构造器, 以及 Eloquent ORM。或者你想要了解 身份验证和安全 以便在你的应用中实现用户登录功能。\r\n\r\n\r\nLaravel哲学\r\n\r\nLaravel是一套web应用开发框架，它具有富于表达性且简洁的语法。我们相信，开发过程应该是愉悦、创造性的体验。Laravel努力剔除开发过程中的痛苦，因此我们提供了验证（authentication）、路由（routing）、session和缓存（caching）等开发过程中经常用到的工具或功能。\r\n\r\nLaravel的目标是给开发者创造一个愉快的开发过程，并且不牺牲应用的功能性。快乐的开发者才能创造最棒的代码！为了这个目的，我们博取众框架之长处集中到Laravel中，这些框架甚至是基于Ruby on Rails、ASP.NET MVC、和Sinatra等开发语言或工具的。\r\n\r\nLaravel是易于理解并且强大的，它提供了强大的工具用以开发大型、健壮的应用。杰出的IoC、数据库迁移工具和紧密集成的单元测试支持，这些工具赋予你构建任何应用的能力。\r\n\r\n译者：王赛 （Bootstrap中文网）', '1', '2015-02-15 15:06:41', '2015-02-15 15:06:44', '1', '1', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of navigation
-- ----------------------------
INSERT INTO `navigation` VALUES ('1', 'literature', '文学', '00000000000');
INSERT INTO `navigation` VALUES ('2', 'photos', '爱拍', '00000000000');
INSERT INTO `navigation` VALUES ('3', 'recommend', '读书影逝', '00000000000');
INSERT INTO `navigation` VALUES ('4', 'micromovie', '微视', '00000000000');
INSERT INTO `navigation` VALUES ('5', 'original', '原味', '00000000000');
INSERT INTO `navigation` VALUES ('6', 'wq', '散文', '00000000001');
INSERT INTO `navigation` VALUES ('7', 'qwe', '风景', '00000000004');
INSERT INTO `navigation` VALUES ('8', '23', '人像', '00000000004');

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
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `works_infomation` text COLLATE utf8_unicode_ci,
  `works_introduce` text COLLATE utf8_unicode_ci,
  `comment_num` int(11) DEFAULT NULL,
  `love_num` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of recommend
-- ----------------------------

-- ----------------------------
-- Table structure for routelist
-- ----------------------------
DROP TABLE IF EXISTS `routelist`;
CREATE TABLE `routelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('1', '7', '1', 'ccc');
INSERT INTO `tags` VALUES ('2', '8', '2', 'ttt');

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
