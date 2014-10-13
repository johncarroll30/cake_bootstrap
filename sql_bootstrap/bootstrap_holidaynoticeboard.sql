/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : holidaynoticeboard

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-10-11 14:29:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `acos`
-- ----------------------------
DROP TABLE IF EXISTS `acos`;
CREATE TABLE `acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_acos_lft_rght` (`lft`,`rght`),
  KEY `idx_acos_alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=379 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acos
-- ----------------------------
INSERT INTO `acos` VALUES ('147', null, null, null, 'controllers', '1', '172');
INSERT INTO `acos` VALUES ('148', '147', null, null, 'Groups', '2', '15');
INSERT INTO `acos` VALUES ('149', '148', null, null, 'admin_index', '3', '4');
INSERT INTO `acos` VALUES ('150', '148', null, null, 'admin_view', '5', '6');
INSERT INTO `acos` VALUES ('151', '148', null, null, 'admin_add', '7', '8');
INSERT INTO `acos` VALUES ('152', '148', null, null, 'admin_edit', '9', '10');
INSERT INTO `acos` VALUES ('153', '148', null, null, 'admin_delete', '11', '12');
INSERT INTO `acos` VALUES ('154', '148', null, null, 'blackhole', '13', '14');
INSERT INTO `acos` VALUES ('155', '147', null, null, 'Pages', '16', '21');
INSERT INTO `acos` VALUES ('156', '155', null, null, 'display', '17', '18');
INSERT INTO `acos` VALUES ('157', '155', null, null, 'blackhole', '19', '20');
INSERT INTO `acos` VALUES ('158', '147', null, null, 'Users', '22', '51');
INSERT INTO `acos` VALUES ('159', '158', null, null, 'login', '23', '24');
INSERT INTO `acos` VALUES ('160', '158', null, null, 'logout', '25', '26');
INSERT INTO `acos` VALUES ('161', '158', null, null, 'auth_error', '27', '28');
INSERT INTO `acos` VALUES ('162', '158', null, null, 'login_redirect', '29', '30');
INSERT INTO `acos` VALUES ('163', '158', null, null, 'register', '31', '32');
INSERT INTO `acos` VALUES ('164', '158', null, null, 'forgotten', '33', '34');
INSERT INTO `acos` VALUES ('165', '158', null, null, 'admin_dashboard', '35', '36');
INSERT INTO `acos` VALUES ('166', '158', null, null, 'admin_index', '37', '38');
INSERT INTO `acos` VALUES ('167', '158', null, null, 'admin_view', '39', '40');
INSERT INTO `acos` VALUES ('168', '158', null, null, 'admin_add', '41', '42');
INSERT INTO `acos` VALUES ('169', '158', null, null, 'admin_edit', '43', '44');
INSERT INTO `acos` VALUES ('170', '158', null, null, 'admin_delete', '45', '46');
INSERT INTO `acos` VALUES ('171', '158', null, null, 'admin_change_status', '47', '48');
INSERT INTO `acos` VALUES ('172', '158', null, null, 'blackhole', '49', '50');
INSERT INTO `acos` VALUES ('319', '147', null, null, 'Acl', '52', '113');
INSERT INTO `acos` VALUES ('320', '319', null, null, 'Acl', '53', '60');
INSERT INTO `acos` VALUES ('321', '320', null, null, 'index', '54', '55');
INSERT INTO `acos` VALUES ('322', '320', null, null, 'admin_index', '56', '57');
INSERT INTO `acos` VALUES ('323', '320', null, null, 'blackhole', '58', '59');
INSERT INTO `acos` VALUES ('324', '319', null, null, 'Acos', '61', '74');
INSERT INTO `acos` VALUES ('325', '324', null, null, 'admin_index', '62', '63');
INSERT INTO `acos` VALUES ('326', '324', null, null, 'admin_empty_acos', '64', '65');
INSERT INTO `acos` VALUES ('327', '324', null, null, 'admin_build_acl', '66', '67');
INSERT INTO `acos` VALUES ('328', '324', null, null, 'admin_prune_acos', '68', '69');
INSERT INTO `acos` VALUES ('329', '324', null, null, 'admin_synchronize', '70', '71');
INSERT INTO `acos` VALUES ('330', '324', null, null, 'blackhole', '72', '73');
INSERT INTO `acos` VALUES ('331', '319', null, null, 'Aros', '75', '112');
INSERT INTO `acos` VALUES ('332', '331', null, null, 'admin_index', '76', '77');
INSERT INTO `acos` VALUES ('333', '331', null, null, 'admin_check', '78', '79');
INSERT INTO `acos` VALUES ('334', '331', null, null, 'admin_users', '80', '81');
INSERT INTO `acos` VALUES ('335', '331', null, null, 'admin_update_user_role', '82', '83');
INSERT INTO `acos` VALUES ('336', '331', null, null, 'admin_ajax_role_permissions', '84', '85');
INSERT INTO `acos` VALUES ('337', '331', null, null, 'admin_role_permissions', '86', '87');
INSERT INTO `acos` VALUES ('338', '331', null, null, 'admin_user_permissions', '88', '89');
INSERT INTO `acos` VALUES ('339', '331', null, null, 'admin_empty_permissions', '90', '91');
INSERT INTO `acos` VALUES ('340', '331', null, null, 'admin_clear_user_specific_permissions', '92', '93');
INSERT INTO `acos` VALUES ('341', '331', null, null, 'admin_grant_all_controllers', '94', '95');
INSERT INTO `acos` VALUES ('342', '331', null, null, 'admin_deny_all_controllers', '96', '97');
INSERT INTO `acos` VALUES ('343', '331', null, null, 'admin_get_role_controller_permission', '98', '99');
INSERT INTO `acos` VALUES ('344', '331', null, null, 'admin_grant_role_permission', '100', '101');
INSERT INTO `acos` VALUES ('345', '331', null, null, 'admin_deny_role_permission', '102', '103');
INSERT INTO `acos` VALUES ('346', '331', null, null, 'admin_get_user_controller_permission', '104', '105');
INSERT INTO `acos` VALUES ('347', '331', null, null, 'admin_grant_user_permission', '106', '107');
INSERT INTO `acos` VALUES ('348', '331', null, null, 'admin_deny_user_permission', '108', '109');
INSERT INTO `acos` VALUES ('349', '331', null, null, 'blackhole', '110', '111');
INSERT INTO `acos` VALUES ('350', '147', null, null, 'Blog', '114', '171');
INSERT INTO `acos` VALUES ('351', '350', null, null, 'BlogPostCategories', '115', '128');
INSERT INTO `acos` VALUES ('352', '351', null, null, 'admin_index', '116', '117');
INSERT INTO `acos` VALUES ('353', '351', null, null, 'admin_view', '118', '119');
INSERT INTO `acos` VALUES ('354', '351', null, null, 'admin_add', '120', '121');
INSERT INTO `acos` VALUES ('355', '351', null, null, 'admin_edit', '122', '123');
INSERT INTO `acos` VALUES ('356', '351', null, null, 'admin_delete', '124', '125');
INSERT INTO `acos` VALUES ('357', '351', null, null, 'blackhole', '126', '127');
INSERT INTO `acos` VALUES ('358', '350', null, null, 'BlogPostTags', '129', '142');
INSERT INTO `acos` VALUES ('359', '358', null, null, 'admin_index', '130', '131');
INSERT INTO `acos` VALUES ('360', '358', null, null, 'admin_view', '132', '133');
INSERT INTO `acos` VALUES ('361', '358', null, null, 'admin_add', '134', '135');
INSERT INTO `acos` VALUES ('362', '358', null, null, 'admin_edit', '136', '137');
INSERT INTO `acos` VALUES ('363', '358', null, null, 'admin_delete', '138', '139');
INSERT INTO `acos` VALUES ('364', '358', null, null, 'blackhole', '140', '141');
INSERT INTO `acos` VALUES ('365', '350', null, null, 'BlogPosts', '143', '160');
INSERT INTO `acos` VALUES ('366', '365', null, null, 'index', '144', '145');
INSERT INTO `acos` VALUES ('367', '365', null, null, 'view', '146', '147');
INSERT INTO `acos` VALUES ('368', '365', null, null, 'admin_index', '148', '149');
INSERT INTO `acos` VALUES ('369', '365', null, null, 'admin_view', '150', '151');
INSERT INTO `acos` VALUES ('370', '365', null, null, 'admin_add', '152', '153');
INSERT INTO `acos` VALUES ('371', '365', null, null, 'admin_edit', '154', '155');
INSERT INTO `acos` VALUES ('372', '365', null, null, 'admin_delete', '156', '157');
INSERT INTO `acos` VALUES ('373', '365', null, null, 'blackhole', '158', '159');
INSERT INTO `acos` VALUES ('374', '350', null, null, 'BlogSettings', '161', '170');
INSERT INTO `acos` VALUES ('375', '374', null, null, 'admin_index', '162', '163');
INSERT INTO `acos` VALUES ('376', '374', null, null, 'admin_view', '164', '165');
INSERT INTO `acos` VALUES ('377', '374', null, null, 'admin_edit', '166', '167');
INSERT INTO `acos` VALUES ('378', '374', null, null, 'blackhole', '168', '169');

-- ----------------------------
-- Table structure for `aros`
-- ----------------------------
DROP TABLE IF EXISTS `aros`;
CREATE TABLE `aros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aros_lft_rght` (`lft`,`rght`),
  KEY `idx_aros_alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aros
-- ----------------------------
INSERT INTO `aros` VALUES ('7', null, 'Group', '1', '', '1', '4');
INSERT INTO `aros` VALUES ('8', null, 'Group', '2', '', '5', '6');
INSERT INTO `aros` VALUES ('9', null, 'Group', '3', '', '7', '12');
INSERT INTO `aros` VALUES ('10', '7', 'User', '1', '', '2', '3');
INSERT INTO `aros` VALUES ('11', '9', 'User', '2', '', '8', '9');
INSERT INTO `aros` VALUES ('12', '9', 'User', '113', '', '10', '11');

-- ----------------------------
-- Table structure for `aros_acos`
-- ----------------------------
DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE `aros_acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL,
  `aco_id` int(10) unsigned NOT NULL,
  `_create` char(2) NOT NULL DEFAULT '0',
  `_read` char(2) NOT NULL DEFAULT '0',
  `_update` char(2) NOT NULL DEFAULT '0',
  `_delete` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_aco_id` (`aco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=666 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aros_acos
-- ----------------------------
INSERT INTO `aros_acos` VALUES ('654', '7', '147', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for `blog_posts`
-- ----------------------------
DROP TABLE IF EXISTS `blog_posts`;
CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text,
  `body` text,
  `published` tinyint(1) NOT NULL,
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  `in_rss` tinyint(1) NOT NULL DEFAULT '1',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_posts
-- ----------------------------
INSERT INTO `blog_posts` VALUES ('1', 'asdasd', 'asdasd', 'asdasd', 'asd', '1', '0', '1', 'asd', 'asd', 'as asd', '2014-07-15 14:50:59', '2014-09-04 14:06:22', '-_57-155583.jpg');
INSERT INTO `blog_posts` VALUES ('9', 'sssvvv', 'sssvvv', 'sdd', 'sadasdasd', '1', '0', '1', '', '', '', '2014-08-04 13:07:19', '2014-08-04 13:07:19', 'Lake_mapourika_NZ-527.jpeg');
INSERT INTO `blog_posts` VALUES ('10', 'asdasdasd', 'asdasdasd', 'asdasd', 'asdasd', '1', '0', '1', '', '', '', '2014-08-04 13:08:09', '2014-08-04 13:08:09', 'Lake_mapourika_NZ-527261.jpeg');
INSERT INTO `blog_posts` VALUES ('11', 'dfsfsd', 'ssfsdfsdfsdf', 'fsdf', 'sdfsdf', '1', '0', '1', 'dfsdf', 'sdfsdf', 'ssfsdffds', '2014-10-08 13:42:56', '2014-10-08 13:42:56', null);
INSERT INTO `blog_posts` VALUES ('12', 'asasd', 'asdaad', 'asdas', 'dasdasd', '1', '0', '1', 'asda', 'dsad', 'as asd', '2014-10-08 13:46:22', '2014-10-08 13:46:22', '2915-8360.jpg');

-- ----------------------------
-- Table structure for `blog_post_categories`
-- ----------------------------
DROP TABLE IF EXISTS `blog_post_categories`;
CREATE TABLE `blog_post_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keywords` text,
  `rss_channel_title` varchar(255) DEFAULT NULL,
  `rss_channel_description` text,
  `blog_post_count` int(11) NOT NULL DEFAULT '0',
  `under_blog_post_count` int(11) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_post_categories
-- ----------------------------
INSERT INTO `blog_post_categories` VALUES ('1', null, '1', '4', 'Test category', 'test-category', '', '', '', '', '', '5', '5', '2014-07-14 11:30:39', '2014-07-15 15:12:29');
INSERT INTO `blog_post_categories` VALUES ('2', null, '5', '6', 'dsfdsfsdfsdf', 'sdfsdfsdfsdf', 'sdf', 'sdfsdf', 'sdfs', null, null, '0', '0', '2014-07-15 15:02:43', '2014-07-15 15:02:43');
INSERT INTO `blog_post_categories` VALUES ('3', '1', '2', '3', 'asdwdq dqwd ', 'asdwdq-dqwd-', 'asd', 'asdasd', 'asdasd', null, null, '0', '0', '2014-07-15 15:06:21', '2014-07-15 15:12:34');

-- ----------------------------
-- Table structure for `blog_post_categories_blog_posts`
-- ----------------------------
DROP TABLE IF EXISTS `blog_post_categories_blog_posts`;
CREATE TABLE `blog_post_categories_blog_posts` (
  `blog_post_category_id` int(11) NOT NULL,
  `blog_post_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_post_category_id`,`blog_post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_post_categories_blog_posts
-- ----------------------------
INSERT INTO `blog_post_categories_blog_posts` VALUES ('1', '1');
INSERT INTO `blog_post_categories_blog_posts` VALUES ('1', '9');
INSERT INTO `blog_post_categories_blog_posts` VALUES ('1', '10');
INSERT INTO `blog_post_categories_blog_posts` VALUES ('1', '11');
INSERT INTO `blog_post_categories_blog_posts` VALUES ('1', '12');

-- ----------------------------
-- Table structure for `blog_post_tags`
-- ----------------------------
DROP TABLE IF EXISTS `blog_post_tags`;
CREATE TABLE `blog_post_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keywords` text,
  `rss_channel_title` varchar(255) DEFAULT NULL,
  `rss_channel_description` text,
  `blog_post_count` int(11) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_post_tags
-- ----------------------------
INSERT INTO `blog_post_tags` VALUES ('1', 'dfsfsfdsfsdfsdfccccccd ds sdf csdf', 'dfsfsfdsfsdfsdfccccccd-ds-sdf-csdf', 'sdfsdf', 'sdfsd', 'fsdfsdf', null, null, '5', '2014-07-15 15:33:15', '2014-07-15 15:50:22');

-- ----------------------------
-- Table structure for `blog_post_tags_blog_posts`
-- ----------------------------
DROP TABLE IF EXISTS `blog_post_tags_blog_posts`;
CREATE TABLE `blog_post_tags_blog_posts` (
  `blog_post_tag_id` int(11) NOT NULL,
  `blog_post_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_post_tag_id`,`blog_post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_post_tags_blog_posts
-- ----------------------------
INSERT INTO `blog_post_tags_blog_posts` VALUES ('1', '1');
INSERT INTO `blog_post_tags_blog_posts` VALUES ('1', '9');
INSERT INTO `blog_post_tags_blog_posts` VALUES ('1', '10');
INSERT INTO `blog_post_tags_blog_posts` VALUES ('1', '11');
INSERT INTO `blog_post_tags_blog_posts` VALUES ('1', '12');

-- ----------------------------
-- Table structure for `blog_settings`
-- ----------------------------
DROP TABLE IF EXISTS `blog_settings`;
CREATE TABLE `blog_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting` varchar(255) NOT NULL,
  `setting_text` varchar(255) NOT NULL,
  `tip` varchar(255) DEFAULT NULL,
  `value` text,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_text_UNIQUE` (`setting_text`),
  UNIQUE KEY `setting_UNIQUE` (`setting`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_settings
-- ----------------------------
INSERT INTO `blog_settings` VALUES ('1', 'meta_title', 'Meta Title', null, 'My New Blog', null);
INSERT INTO `blog_settings` VALUES ('2', 'meta_description', 'Meta Description', null, '', '0000-00-00 00:00:00');
INSERT INTO `blog_settings` VALUES ('3', 'meta_keywords', 'Meta Keywords', null, '', null);
INSERT INTO `blog_settings` VALUES ('4', 'rss_channel_title', 'RSS Channel Title', null, 'My New Blog', null);
INSERT INTO `blog_settings` VALUES ('5', 'rss_channel_description', 'RSS Channel Description', null, '', null);
INSERT INTO `blog_settings` VALUES ('6', 'show_summary_on_post_view', 'Show post summary on post detail page?', '\'Yes\' or \'No\'', 'No', null);
INSERT INTO `blog_settings` VALUES ('7', 'show_categories_on_post_view', 'Show post categories on post detail page?', '\'Yes\' or \'No\'', 'No', null);
INSERT INTO `blog_settings` VALUES ('8', 'show_tags_on_post_view', 'Show post tags on post detail page?', '\'Yes\' or \'No\'', 'Yes', null);
INSERT INTO `blog_settings` VALUES ('9', 'use_summary_or_body_on_post_index', 'Use the summary or the post body on the post index page?', '\'Summary\' or \'Body\'', 'Summary', null);
INSERT INTO `blog_settings` VALUES ('10', 'use_summary_or_body_in_rss_feed', 'Use the summary or the post body in the RSS feed?', '\'Summary\' or \'Body\'', 'Body', null);
INSERT INTO `blog_settings` VALUES ('11', 'published_format_on_post_index', 'Published date/time format on post index page', 'e.g. \'d M Y\' see php.net/date', '<\\s\\p\\a\\n \\c\\l\\a\\s\\s=\"\\d\\a\\y\">d</\\s\\p\\a\\n> <\\s\\p\\a\\n \\c\\l\\a\\s\\s=\"\\m\\o\\n\\t\\h\">M</\\s\\p\\a\\n> <\\s\\pa\\n \\c\\l\\a\\s\\s=\"\\y\\e\\a\\r\">y</\\s\\p\\a\\n>', null);
INSERT INTO `blog_settings` VALUES ('12', 'published_format_on_post_view', 'Published date/time format on post view page', 'e.g. \'d M Y\' see php.net/date', '<\\s\\p\\a\\n \\c\\l\\a\\s\\s=\"\\d\\a\\y\">d</\\s\\p\\a\\n> <\\s\\p\\a\\n \\c\\l\\a\\s\\s=\"\\m\\o\\n\\t\\h\">M</\\s\\p\\a\\n> <\\s\\p\\a\\n \\c\\l\\a\\s\\s=\"\\y\\e\\a\\r\">y</\\s\\p\\a\\n>', null);
INSERT INTO `blog_settings` VALUES ('13', 'og:site_name', 'Open Graph: Site Name', null, 'My New Blog', null);
INSERT INTO `blog_settings` VALUES ('14', 'fb_admins', 'Facebook Admins', null, null, null);
INSERT INTO `blog_settings` VALUES ('15', 'use_disqus', 'Use Disqus', '\'Yes\' or \'No\'', 'No', null);
INSERT INTO `blog_settings` VALUES ('16', 'disqus_shortname', 'Disqus Shortname', null, null, null);
INSERT INTO `blog_settings` VALUES ('17', 'disqus_developer', 'Disqus Developer Mode', '\'Yes\' or \'No\'', 'Yes', null);
INSERT INTO `blog_settings` VALUES ('18', 'show_share_links', 'Show the share buttons on blog posts?', '\'Yes\' or \'No\'', 'Yes', null);

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `tree` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE,
  KEY `all` (`parent_id`,`lft`,`rght`,`tree`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', null, '1', '6', 'Electronics', '', 'electronics', 'electronics', null, '2014-10-11 15:05:39', '1');
INSERT INTO `categories` VALUES ('2', '1', '2', '5', 'Computers', '', 'computers', 'electronics/computers', '2014-10-11 15:05:55', '2014-10-11 15:05:55', '1');
INSERT INTO `categories` VALUES ('3', '2', '3', '4', 'Laptops', '', 'laptops', 'electronics/computers/laptops', '2014-10-11 15:06:07', '2014-10-11 15:06:07', '1');

-- ----------------------------
-- Table structure for `contacts`
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `address3` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postcode` varchar(45) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contacts
-- ----------------------------

-- ----------------------------
-- Table structure for `currencies`
-- ----------------------------
DROP TABLE IF EXISTS `currencies`;
CREATE TABLE `currencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of currencies
-- ----------------------------

-- ----------------------------
-- Table structure for `enquiries`
-- ----------------------------
DROP TABLE IF EXISTS `enquiries`;
CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `arrival` date DEFAULT NULL,
  `duration_start` date DEFAULT NULL,
  `duration_end` date DEFAULT NULL,
  `comment` text,
  `read` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`listing_id`,`user_id`),
  KEY `fk_Enquiries_Users_idx` (`user_id`),
  CONSTRAINT `fk_Enquiries_Users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of enquiries
-- ----------------------------

-- ----------------------------
-- Table structure for `groups`
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `all` (`id`,`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'Administrators', '2014-05-09 09:02:00', '2014-07-10 09:21:09');
INSERT INTO `groups` VALUES ('2', 'Super Users', '2014-10-08 15:04:13', '2014-10-08 15:04:13');
INSERT INTO `groups` VALUES ('3', 'Users', '2014-10-08 15:06:07', '2014-10-08 15:06:07');

-- ----------------------------
-- Table structure for `listings`
-- ----------------------------
DROP TABLE IF EXISTS `listings`;
CREATE TABLE `listings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `listing_type_id` int(11) NOT NULL,
  `property_type_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `price_low` decimal(15,2) DEFAULT NULL,
  `price_high` decimal(15,2) DEFAULT NULL,
  `sleeps` tinyint(4) DEFAULT '0',
  `bedrooms` tinyint(4) DEFAULT '0',
  `is_featured` tinyint(4) DEFAULT '0',
  `featured_expiry` datetime DEFAULT '0000-00-00 00:00:00',
  `no_single_bedrooms` int(11) DEFAULT '0',
  `no_twin_bedrooms` int(11) DEFAULT '0',
  `no_double_bedrooms` int(11) DEFAULT '0',
  `no_bathrooms` int(11) DEFAULT '0',
  `no_ensuite_rooms` int(11) DEFAULT '0',
  `no_showers` int(11) DEFAULT '0',
  `no_baths` int(11) DEFAULT '0',
  `has_pool` tinyint(4) DEFAULT '0',
  `has_hob` tinyint(4) DEFAULT '0',
  `has_oven` tinyint(4) DEFAULT '0',
  `has_dishwasher` tinyint(4) DEFAULT '0',
  `has_washing_machine` tinyint(4) DEFAULT '0',
  `has_microwave` tinyint(4) DEFAULT '0',
  `has_fridge` tinyint(4) DEFAULT '0',
  `has_freezer` tinyint(4) DEFAULT '0',
  `has_dvd` tinyint(4) DEFAULT '0',
  `has_radio` tinyint(4) DEFAULT '0',
  `has_telephone` tinyint(4) DEFAULT '0',
  `has_ironing_board` tinyint(4) DEFAULT '0',
  `has_iron` tinyint(4) DEFAULT '0',
  `has_tv` tinyint(4) DEFAULT '0',
  `has_cable` tinyint(4) DEFAULT '0',
  `has_parking` tinyint(4) DEFAULT '0',
  `has_dryer` tinyint(4) DEFAULT '0',
  `has_internet` tinyint(4) DEFAULT '0',
  `has_aircon` tinyint(4) DEFAULT '0',
  `has_cot` tinyint(4) DEFAULT '0',
  `has_highchair` tinyint(4) DEFAULT '0',
  `has_safe` tinyint(4) DEFAULT '0',
  `notes_bedrooms` text,
  `notes_bathrooms` text,
  `notes_kitchen` text,
  `notes_utility_room` text,
  `notes_living_rooms` text,
  `notes_services` text,
  `notes_amenities_facilities` text,
  `notes_outside` text,
  `notes_surcharge` text,
  `notes_prices` text,
  `notes_changeover_day` text,
  `notes_booking` text,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `image_4` varchar(255) DEFAULT NULL,
  `image_5` varchar(255) DEFAULT NULL,
  `image_6` varchar(255) DEFAULT NULL,
  `image_7` varchar(255) DEFAULT NULL,
  `image_8` varchar(255) DEFAULT NULL,
  `image_9` varchar(255) DEFAULT NULL,
  `image_10` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`,`location_id`,`listing_type_id`,`property_type_id`,`contact_id`,`currency_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of listings
-- ----------------------------

-- ----------------------------
-- Table structure for `listing_types`
-- ----------------------------
DROP TABLE IF EXISTS `listing_types`;
CREATE TABLE `listing_types` (
  `id` int(11) NOT NULL,
  `listing_type` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of listing_types
-- ----------------------------

-- ----------------------------
-- Table structure for `pages`
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `layout` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('13', '', '2014-09-29 10:57:51', '2014-09-29 12:18:26', '1', '1', '2', 'About us', 'test', 'Veterans Council are committed to working in partnership with the Armed Forces Community, public, private and third sector stakeholders to develop initiatives that address the day to day challenges facing Regular Personnel, Reservist, Veterans and their Families who have given so much, such as the bereaved and the injured.', null, 'Veterans Council are committed to working in partnership with the Armed Forces Community, public, private and third sector stakeholders to develop initiatives that address the day to day challenges facing Regular Personnel, Reservist, Veterans and their Families who have given so much, such as the bereaved and the injured.');
INSERT INTO `pages` VALUES ('17', '', '2014-09-29 12:18:33', '2014-09-29 12:19:08', '1', '3', '4', 'test', 'testddfd', '', null, '');

-- ----------------------------
-- Table structure for `page_i18ns`
-- ----------------------------
DROP TABLE IF EXISTS `page_i18ns`;
CREATE TABLE `page_i18ns` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of page_i18ns
-- ----------------------------
INSERT INTO `page_i18ns` VALUES ('1', 'en_us', 'Page', '1', 'title', 'sd');
INSERT INTO `page_i18ns` VALUES ('2', 'en_us', 'Page', '1', 'meta_keyword', 'asd');
INSERT INTO `page_i18ns` VALUES ('3', 'en_us', 'Page', '1', 'meta_description', 'asdasd');
INSERT INTO `page_i18ns` VALUES ('4', 'en_us', 'Page', '1', 'content', 'dasdas');
INSERT INTO `page_i18ns` VALUES ('5', 'en_us', 'Page', '2', 'title', 'cfsdf');
INSERT INTO `page_i18ns` VALUES ('6', 'en_us', 'Page', '2', 'meta_description', 'sdfsdf');
INSERT INTO `page_i18ns` VALUES ('7', 'en_us', 'Page', '2', 'content', 'sdfsdf');
INSERT INTO `page_i18ns` VALUES ('8', 'en_us', 'Page', '2', 'meta_keyword', '');
INSERT INTO `page_i18ns` VALUES ('9', 'en_us', 'Page', '3', 'title', 'test');
INSERT INTO `page_i18ns` VALUES ('10', 'en_us', 'Page', '3', 'meta_description', 'test');
INSERT INTO `page_i18ns` VALUES ('11', 'en_us', 'Page', '3', 'content', 'test');
INSERT INTO `page_i18ns` VALUES ('12', 'en_us', 'Page', '3', 'meta_keyword', '');

-- ----------------------------
-- Table structure for `pricing_tariffs`
-- ----------------------------
DROP TABLE IF EXISTS `pricing_tariffs`;
CREATE TABLE `pricing_tariffs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_id` int(11) NOT NULL,
  `period_from` date DEFAULT NULL,
  `period_to` date DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `frequency` enum('Per week','Per night') DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`currency_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pricing_tariffs
-- ----------------------------

-- ----------------------------
-- Table structure for `property_types`
-- ----------------------------
DROP TABLE IF EXISTS `property_types`;
CREATE TABLE `property_types` (
  `id` int(11) NOT NULL,
  `property_type` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of property_types
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL DEFAULT '3',
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `address3` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirmation` varchar(45) DEFAULT NULL,
  `status` enum('Active','Inactive','Unconfirmed','Suspended') DEFAULT 'Unconfirmed',
  `born` date DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `marketing` tinyint(4) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `active` tinyint(4) DEFAULT '1',
  `primary_contact_name` varchar(255) DEFAULT NULL,
  `primary_contact_number` int(11) DEFAULT NULL,
  `primary_contact_notes` text,
  `secondary_contact_name` varchar(255) DEFAULT NULL,
  `secondary_contact_number` varchar(255) DEFAULT NULL,
  `secondary_contact_notes` text,
  `sms` varchar(45) DEFAULT NULL,
  `password_request` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`,`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'john@boxedred.com', 'John Carroll', null, null, null, null, null, null, '80fd83340fcb9a622c1c7833e4ef443861f6ce51', 'r5CPMMD9Cu', 'Active', null, null, null, null, null, '1', '127.0.0.1', '1', null, null, null, null, null, null, null, '2014-10-08 13:53:54', '2014-10-07 11:46:54', '2014-10-11 15:24:08', null);
INSERT INTO `users` VALUES ('2', '2', 'superuser@test.com', null, null, null, null, null, null, null, '6c3513ffddd350141bfdc3dfdcdaa6c3d33b2a77', 'fTmW0eiFC1', 'Unconfirmed', null, null, null, null, null, null, '127.0.0.1', '1', null, null, null, null, null, null, null, null, '2014-10-09 14:46:58', '2014-10-09 15:33:36', null);
INSERT INTO `users` VALUES ('113', '3', 'user@test.com', null, null, null, null, null, null, null, '6c3513ffddd350141bfdc3dfdcdaa6c3d33b2a77', null, 'Unconfirmed', null, null, null, null, null, null, null, '1', null, null, null, null, null, null, null, null, null, null, null);
