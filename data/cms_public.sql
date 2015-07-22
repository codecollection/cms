-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-07-08 10:04:24
-- 服务器版本： 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms_public`
--

-- --------------------------------------------------------

--
-- 表的结构 `cms_activity`
--

CREATE TABLE IF NOT EXISTS `cms_activity` (
  `activity_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '优惠活动的自增id',
  `activity_name` varchar(255) NOT NULL DEFAULT '' COMMENT '优惠活动的活动名称',
  `start_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '活动的开始时间',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '活动的结束时间',
  `user_rank` int(11) NOT NULL DEFAULT '0' COMMENT '可以参加活动的用户信息，0=非会员，1=会员；2=所有',
  `act_range` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '优惠范围；0，全部商品；1，按分类；2，按品牌；3，按商品',
  `act_range_ext` varchar(255) NOT NULL COMMENT '根据优惠活动范围的不同，该处意义不同；但是都是优惠范围的约束；如，如果是商品，该处是商品的id，如果是品牌，该处是品牌的id',
  `min_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '订单达到金额下限，才参加活动',
  `max_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '参加活动的订单金额下限，0，表示没有上限',
  `act_type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '参加活动的优惠方式；0，减免现金；1，价格打折优惠',
  `act_type_ext` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '如果是送赠品，该处是允许的最大数量，0，无数量限制；现今减免，则是减免金额，单位元；打折，是折扣值，100算，8折就是80',
  `gift` text NOT NULL COMMENT '如果有特惠商品，这里是序列化后的特惠商品的id,name,price信息;取值于ecs_goods的goods_id，goods_name，价格是添加活动时填写的',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '活动在优惠活动页面显示的先后顺序，数字越大越靠后',
  PRIMARY KEY (`activity_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='优惠活动的配置信息，优惠活动包括送礼，减免，打折' AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_admin_group`
--

CREATE TABLE IF NOT EXISTS `cms_admin_group` (
  `group_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `g_name` varchar(100) NOT NULL DEFAULT '' COMMENT '组名称',
  `g_urank` varchar(5000) NOT NULL DEFAULT '' COMMENT '组权限',
  `g_remark` varchar(1000) NOT NULL DEFAULT '' COMMENT '备注',
  `g_state` int(11) NOT NULL DEFAULT '0' COMMENT '组状态（正常=0，停用=1）',
  `cdate` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户组表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cms_admin_group`
--

INSERT INTO `cms_admin_group` (`group_id`, `g_name`, `g_urank`, `g_remark`, `g_state`, `cdate`) VALUES
(1, '超级管理员组', '100', '超级管理员组拥有所有权限', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `cms_admin_list`
--

CREATE TABLE IF NOT EXISTS `cms_admin_list` (
  `admin_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aname` varchar(100) NOT NULL DEFAULT '' COMMENT '账号',
  `apass` varchar(100) NOT NULL DEFAULT '' COMMENT '密码',
  `aname_true` varchar(100) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `aemail` varchar(100) NOT NULL DEFAULT '' COMMENT '邮箱',
  `aphone` varchar(100) NOT NULL DEFAULT '' COMMENT '手机',
  `aqq` varchar(100) NOT NULL DEFAULT '' COMMENT 'QQ',
  `group_id` int(11) NOT NULL DEFAULT '0' COMMENT '管理组ID',
  `alevel` varchar(1000) NOT NULL DEFAULT '' COMMENT '用户权限 数据结构 "A10","A11"',
  `astate` int(11) NOT NULL DEFAULT '0' COMMENT '用户状态（正常=0，停用=1）',
  `reg_date` int(11) NOT NULL DEFAULT '0' COMMENT '开通时间',
  `last_loginip` varchar(20) NOT NULL DEFAULT '' COMMENT '最后登录的IP',
  `last_logintime` int(11) NOT NULL DEFAULT '0' COMMENT '最后登录的时间',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='后台用户表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `cms_admin_list`
--

INSERT INTO `cms_admin_list` (`admin_id`, `aname`, `apass`, `aname_true`, `aemail`, `aphone`, `aqq`, `group_id`, `alevel`, `astate`, `reg_date`, `last_loginip`, `last_logintime`) VALUES
(1, 'admin', 'f21e84bcb1eea0277ced3794e8676d23', '', '', '', '', 1, '100', 0, 0, '', 0),
(2, 'wenghe', 'bae208138ce50065beb13be8dd8f3c30', '', '', '', '', 1, '100', 0, 0, '127.0.0.1', 1436256578);

-- --------------------------------------------------------

--
-- 表的结构 `cms_ad_area`
--

CREATE TABLE IF NOT EXISTS `cms_ad_area` (
  `area_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `area_name` varchar(255) NOT NULL DEFAULT '' COMMENT '位置名称',
  `area_type` int(2) NOT NULL DEFAULT '0' COMMENT '广告位类型, 0=图片广告，1=代码广告',
  `remark` varchar(1000) NOT NULL DEFAULT '' COMMENT '位置标注',
  `identification` varchar(100) NOT NULL DEFAULT '' COMMENT '标识',
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_ad_list`
--

CREATE TABLE IF NOT EXISTS `cms_ad_list` (
  `ad_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `area_id` int(11) NOT NULL DEFAULT '0' COMMENT '广告位',
  `show_type` int(11) NOT NULL DEFAULT '0' COMMENT '展现方式, 0=代码,1=文字,2=图片,3=flash',
  `ad_title` varchar(255) NOT NULL DEFAULT '' COMMENT '广告标题',
  `ad_words` varchar(255) NOT NULL DEFAULT '' COMMENT '文字',
  `ad_img` text NOT NULL COMMENT '图片URL',
  `ad_url` text NOT NULL COMMENT '广告URL',
  `ad_code` text NOT NULL COMMENT '广告代码',
  `start_date` int(11) NOT NULL DEFAULT '0' COMMENT '生效时间',
  `expire_date` int(11) NOT NULL DEFAULT '0' COMMENT '到期时间',
  `cdate` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `ad_order` int(11) NOT NULL DEFAULT '0' COMMENT '广告排序',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_article`
--

CREATE TABLE IF NOT EXISTS `cms_article` (
  `cms_article_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `model_id` int(11) NOT NULL DEFAULT '0' COMMENT '模型ID',
  `last_cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '终极分类ID',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `img_url` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `desc` varchar(300) NOT NULL DEFAULT '' COMMENT '描述',
  `body` text COMMENT '内容',
  `tag` varchar(100) DEFAULT '' COMMENT '标签',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发布者Id',
  `uname` varchar(50) NOT NULL DEFAULT '' COMMENT '发布者',
  `comments` int(6) NOT NULL DEFAULT '0' COMMENT '评论量',
  `visitors` int(6) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `tpl_content` varchar(20) NOT NULL DEFAULT '' COMMENT '内容模板',
  `cdate` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `state` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `forder` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `like` int(11) NOT NULL DEFAULT '0' COMMENT '喜欢',
  `info_from_url` varchar(50) NOT NULL DEFAULT '' COMMENT '来源地址',
  `info_url` varchar(50) NOT NULL DEFAULT '' COMMENT '跳转地址',
  `fbold` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否加粗',
  `fcolor` varchar(20) NOT NULL DEFAULT '' COMMENT '标题颜色',
  `related_ids` varchar(200) NOT NULL DEFAULT '' COMMENT '关联文档',
  PRIMARY KEY (`cms_article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_cart`
--

CREATE TABLE IF NOT EXISTS `cms_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `sessionid` varchar(50) NOT NULL DEFAULT '' COMMENT '游客会话id，游客的购物车识别',
  `goods_id` int(11) NOT NULL DEFAULT '0' COMMENT '商品ID',
  `goods_total` int(1) NOT NULL DEFAULT '0' COMMENT '商品数量',
  `goods_property` varchar(255) NOT NULL DEFAULT '' COMMENT '商品属性(json格式)',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_category`
--

CREATE TABLE IF NOT EXISTS `cms_category` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '类别id',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父类id',
  `cname` varchar(100) NOT NULL DEFAULT '' COMMENT '分类名称',
  `cname_py` varchar(100) NOT NULL DEFAULT '' COMMENT '分类字母别名',
  `cnick` varchar(100) NOT NULL DEFAULT '' COMMENT '分类别名',
  `ctitle` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO标题',
  `ckey` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO关键词',
  `cdesc` varchar(500) NOT NULL DEFAULT '' COMMENT 'SEO描述',
  `corder` int(11) NOT NULL DEFAULT '100' COMMENT '分类排序',
  `tpl_index` varchar(500) NOT NULL DEFAULT '' COMMENT '封面模板',
  `tpl_list` varchar(500) NOT NULL DEFAULT '' COMMENT '列表变量模板',
  `tpl_content` varchar(500) NOT NULL DEFAULT '' COMMENT '内容页模板',
  `model_id` int(4) NOT NULL DEFAULT '0' COMMENT '绑定模型ID',
  `nav_show` int(1) NOT NULL DEFAULT '0' COMMENT '主导航显示，0=不显示，1=显示',
  `nav_show_wap` int(1) NOT NULL DEFAULT '0' COMMENT 'wap端主导航显示，0=不显示，1=显示',
  `clogo` varchar(200) NOT NULL DEFAULT '' COMMENT '分类LOGO图',
  `clogo_hover` varchar(200) NOT NULL DEFAULT '' COMMENT '分类替换图',
  `cintro` varchar(8000) NOT NULL DEFAULT '' COMMENT '分类简介',
  `go_url` varchar(200) NOT NULL DEFAULT '' COMMENT '跳转URL',
  `cdomain` varchar(50) NOT NULL DEFAULT '' COMMENT '绑定域名',
  `ad_id` int(11) NOT NULL DEFAULT '0' COMMENT '绑定广告id',
  `extern` text NOT NULL COMMENT '扩展数据，json格式',
  `tags` varchar(50) NOT NULL DEFAULT '' COMMENT '关联标签组ID,如：1,3,7',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='分类表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `cms_category`
--

INSERT INTO `cms_category` (`cate_id`, `parent_id`, `cname`, `cname_py`, `cnick`, `ctitle`, `ckey`, `cdesc`, `corder`, `tpl_index`, `tpl_list`, `tpl_content`, `model_id`, `nav_show`, `nav_show_wap`, `clogo`, `clogo_hover`, `cintro`, `go_url`, `cdomain`, `ad_id`, `extern`, `tags`) VALUES
(1, 0, '公众号', '', '', '', '', '', 0, '', '', '', 3, 1, 1, '', '', '', '', '', 0, '', ''),
(2, 0, '资讯', '', '', '', '', '', 0, '', '', '', 1, 1, 1, '', '', '', '', '', 0, '', ''),
(3, 2, '公众号资讯', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '', '', '', '', '', 0, '', ''),
(4, 2, '业内资讯', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '', '', '', '', '', 0, '', ''),
(5, 2, '推广技巧', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '', '', '', '', '', 0, '', ''),
(6, 2, '运维经验', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '', '', '', '', '', 0, '', ''),
(7, 0, '底部导航', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '', '', '', '', '', 0, '', ''),
(8, 7, '关于我们', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '', '', '', '', '', 0, '', ''),
(9, 7, '联系我们', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '', '', '', '', '', 0, '', ''),
(10, 7, '投资我们', '', '', '', '', '', 0, '', '', '', 1, 0, 0, '', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `cms_cate_relation`
--

CREATE TABLE IF NOT EXISTS `cms_cate_relation` (
  `relation_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '关系ID',
  `cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '分类ID',
  `info_id` int(11) NOT NULL DEFAULT '0' COMMENT '文档ID',
  `id_visitors` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `id_comments` int(11) NOT NULL DEFAULT '0' COMMENT '评论量',
  `id_order` int(11) NOT NULL DEFAULT '100' COMMENT '排序',
  `id_cdate` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `id_publish_time` int(11) NOT NULL DEFAULT '0' COMMENT '发布时间',
  PRIMARY KEY (`relation_id`),
  KEY `cate_id` (`cate_id`),
  KEY `id_visitors` (`cate_id`,`id_visitors`),
  KEY `id_comments` (`cate_id`,`id_comments`),
  KEY `id_order` (`cate_id`,`id_order`),
  KEY `id_create_time` (`cate_id`,`id_cdate`),
  KEY `id_publish_time` (`cate_id`,`id_publish_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='分类和信息关系表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_collect`
--

CREATE TABLE IF NOT EXISTS `cms_collect` (
  `collect_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '收藏记录的自增id',
  `uid` mediumint(8) NOT NULL DEFAULT '0' COMMENT '该条收藏记录的会员id，取值于ecs_users的user_id',
  `info_id` mediumint(8) NOT NULL DEFAULT '0' COMMENT '收藏的id',
  `table_name` varchar(8) NOT NULL DEFAULT '0' COMMENT '信息的数据表，表名',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '收藏时间',
  PRIMARY KEY (`collect_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_comment`
--

CREATE TABLE IF NOT EXISTS `cms_comment` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `info_id` int(11) NOT NULL DEFAULT '0' COMMENT '信息ID',
  `model_id` int(11) NOT NULL DEFAULT '0' COMMENT '模型ID',
  `content` varchar(500) NOT NULL DEFAULT '' COMMENT '评论内容',
  `cdate` int(11) NOT NULL DEFAULT '0' COMMENT '发布时间',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `uname` varchar(500) NOT NULL DEFAULT '' COMMENT '昵称',
  `avator` varchar(100) NOT NULL DEFAULT '' COMMENT '头像',
  `ip` varchar(20) NOT NULL DEFAULT '0' COMMENT 'ip地址',
  `ip_addr` varchar(200) NOT NULL DEFAULT '' COMMENT '地理位置',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '上级id',
  `is_check` int(1) NOT NULL DEFAULT '1' COMMENT '是否审核',
  `son` int(11) NOT NULL DEFAULT '0' COMMENT '子评论数',
  `good` int(11) NOT NULL DEFAULT '0' COMMENT '赞',
  `bad` int(11) NOT NULL DEFAULT '0' COMMENT '踩',
  `reply` varchar(1000) NOT NULL DEFAULT '' COMMENT '评论管理员回复',
  PRIMARY KEY (`comment_id`),
  KEY `info_id` (`info_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='评论表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_configs`
--

CREATE TABLE IF NOT EXISTS `cms_configs` (
  `config_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置id',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '配置项',
  `ckey` varchar(100) NOT NULL DEFAULT '' COMMENT '配置key',
  `cvalue` varchar(1000) NOT NULL DEFAULT '' COMMENT '配置值',
  `tag` varchar(50) NOT NULL DEFAULT '' COMMENT '配置标签(兼分组功能)',
  `field_type` varchar(100) NOT NULL DEFAULT '' COMMENT '表单类型',
  `comment` varchar(500) NOT NULL DEFAULT '' COMMENT '字段特殊说明',
  `is_system` tinyint(2) NOT NULL DEFAULT '1' COMMENT '是否是系统配置，0=系统，1=自定义',
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='配置表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `cms_configs`
--

INSERT INTO `cms_configs` (`config_id`, `title`, `ckey`, `cvalue`, `tag`, `field_type`, `comment`, `is_system`) VALUES
(1, '', 'site_name', '小肉粽', '系统', 'input', '', 0),
(2, '', 'seo_title', '', 'seo信息', 'input', '', 0),
(3, '', 'seo_keywords', '', 'seo信息', 'input', '', 0),
(4, '', 'seo_desc', '', 'seo信息', 'input', '', 0),
(5, 'ico图标', 'ico', '/logo.ico', '系统', 'upload', '', 0),
(6, '', 'company_name', '', '公司', 'input', '', 0),
(7, '', 'company_address', '', '公司', 'input', '', 0),
(8, '', 'company_email', 'cranefly2010#163.com(联系时把#换成@)', '公司', 'input', '', 0),
(9, '', 'company_contact', '', '公司', 'input', '', 0),
(10, '', 'company_qq', '', '公司', 'input', '', 0),
(11, '', 'company_qqg', '', '公司', 'input', '', 0),
(12, '公司电话', 'company_tel', '400 800 000', '公司', 'input', '', 1),
(13, '备案号', 'record', '沪ICP备14004976号', '系统', 'input', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `cms_coupons`
--

CREATE TABLE IF NOT EXISTS `cms_coupons` (
  `coupons_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `coupons_state` int(11) NOT NULL DEFAULT '0' COMMENT '优惠卷状态(0=未使用,1=已使用)',
  `coupons_money` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '优惠卷面值',
  `sent_time` int(11) NOT NULL DEFAULT '0' COMMENT '赠送时间',
  `expire_time` int(11) NOT NULL DEFAULT '0' COMMENT '到期时间',
  PRIMARY KEY (`coupons_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_exchange_code`
--

CREATE TABLE IF NOT EXISTS `cms_exchange_code` (
  `exchange_code_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '兑换码id',
  `exchange_code` varchar(50) NOT NULL DEFAULT '' COMMENT '兑换码',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `exchange_state` int(11) NOT NULL DEFAULT '0' COMMENT '兑换状态(0=未兑换,1=已兑换)',
  `exchange_time` int(11) NOT NULL DEFAULT '0' COMMENT '兑换时间',
  PRIMARY KEY (`exchange_code_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_fields`
--

CREATE TABLE IF NOT EXISTS `cms_fields` (
  `field_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '字段ID',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '字段文字(如：标题)',
  `field` varchar(50) NOT NULL DEFAULT '' COMMENT '字段名称（表的字段名，如：title）',
  `field_type` varchar(100) NOT NULL DEFAULT '' COMMENT '字段类型SQL,如：varchar(100)',
  `form_type` varchar(100) NOT NULL DEFAULT '' COMMENT '表单类型(input ,textarea等)',
  `dvalue` varchar(100) NOT NULL DEFAULT '' COMMENT '默认值',
  `form_value` varchar(1000) NOT NULL DEFAULT '' COMMENT '表单备选值，json格式(如:{0:红色,1:蓝色})',
  `field_remark` varchar(100) NOT NULL DEFAULT '0' COMMENT '表单的备注，比如不能为空等 0=无，1=不能为空 2=是数字 3=手机号 4=邮箱地址 5=身份证号 6=QQ号 7=银行卡号,可以自定义添加正则等',
  `forder` int(3) NOT NULL DEFAULT '100' COMMENT '字段显示排序',
  `linkage_type_id` int(11) NOT NULL DEFAULT '0' COMMENT '联动类型ID，（如果有，先处理这个）',
  `is_system` int(3) NOT NULL DEFAULT '1' COMMENT '是否为系统字段，0=系统字段 ，1=扩展字段',
  `field_tag` varchar(20) NOT NULL DEFAULT '' COMMENT '标签',
  PRIMARY KEY (`field_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='模型字段' AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `cms_fields`
--

INSERT INTO `cms_fields` (`field_id`, `title`, `field`, `field_type`, `form_type`, `dvalue`, `form_value`, `field_remark`, `forder`, `linkage_type_id`, `is_system`, `field_tag`) VALUES
(1, '终极分类ID', 'last_cate_id', 'int(11) not null', '0', '0', '0', '0', 100, 0, 0, '系统'),
(2, '标题', 'title', 'varchar(100) not null', '0', '', '', '0', 100, 0, 0, '系统'),
(3, '缩略图', 'img_url', 'varchar(100) not null', '0', '', '', '0', 100, 0, 0, '系统'),
(4, '描述', 'desc', 'varchar(300) not null', '0', '', '', '0', 100, 0, 0, '系统'),
(5, '内容', 'body', 'text', '0', '', '', '0', 100, 0, 0, '系统'),
(6, '标签', 'tag', 'varchar(100)', '0', '', '', '0', 100, 0, 0, '系统'),
(7, '发布者Id', 'uid', 'int(11) not null', '0', '0', '0', '0', 100, 0, 0, '系统'),
(8, '发布者', 'uname', 'varchar(50) not null', '0', '', '', '0', 100, 0, 0, '系统'),
(9, '评论量', 'comments', 'int(6) not null', '0', '0', '0', '0', 100, 0, 0, '系统'),
(10, '浏览量', 'visitors', 'int(6) not null ', '0', '0', '0', '0', 100, 0, 0, '系统'),
(11, '内容模板', 'tpl_content', 'varchar(20) not null', '0', '', '', '0', 100, 0, 0, '系统'),
(12, '创建时间', 'cdate', 'int(11) not null', '0', '0', '0', '0', 100, 0, 0, '系统'),
(13, '状态', 'state', 'tinyint(2) not null', '0', '0', '0', '0', 100, 0, 0, '系统'),
(14, '排序', 'forder', 'int(11) not null', '0', '0', '0', '0', 100, 0, 0, '系统'),
(15, '喜欢', 'like', 'int(11) not null', '0', '0', '0', '0', 100, 0, 0, '系统'),
(16, '来源地址', 'info_from_url', 'varchar(50) not null', '0', '', '', '0', 100, 0, 1, '文档'),
(17, '跳转地址', 'info_url', 'varchar(50) not null', '0', '', '', '0', 100, 0, 1, '文档'),
(18, '是否加粗', 'fbold', 'tinyint(2) not null ', '0', '0', '0', '0', 100, 0, 1, '文档'),
(19, '标题颜色', 'fcolor', 'varchar(20) not null ', '0', '', '', '0', 100, 0, 1, '文档'),
(20, '关联文档', 'related_ids', 'varchar(200) not null ', '0', '', '', '0', 100, 0, 1, '文档'),
(21, '产品编号', 'product_num', 'varchar(20) not null', '0', '', '', '0', 100, 0, 1, '产品'),
(22, '产品价格', 'product_price', 'varchar(20) not null', '0', '', '', '0', 100, 0, 1, '产品'),
(23, '生成地', 'product_address', 'varchar(50) not null', '0', '', '', '0', 100, 0, 1, '产品'),
(24, '公众号', 'num', 'varchar(20) not null ', 'input', '', '{}', '公众账号', 0, 0, 1, '公众号'),
(25, '图标', 'logo', 'varchar(40) not null ', 'upload', '', '{}', '公众账号图标', 0, 0, 1, '公众号'),
(26, '二维码', 'code_image', 'varchar(40) not null ', 'upload', '', '{}', '二维码', 0, 0, 1, '公众号'),
(27, '类型', 'type', 'tinyint(2) not null ', 'input', '0', '{{"1":"订阅号","2":"服务号","3":"企业号"}', '账号类型', 0, 0, 1, '公众号'),
(28, '类别', 'cate', 'varchar(20) not null ', 'input', '', '{}', '类别', 0, 0, 1, '公众号'),
(29, '推荐评分', 'recommend', 'int(11) not null ', 'input', '0', '{}', '推荐评分', 0, 0, 1, '公众号'),
(30, '简评', 'comment', 'varchar(400) not null ', 'textarea', '', '{}', '简评', 0, 0, 1, '公众号'),
(31, '热度', 'hot', 'int(11) not null ', 'input', '0', '{}', '热度', 0, 0, 1, '公众号'),
(32, '商家', 'owner', 'varchar(20) not null ', 'input', '', '{}', '商家', 0, 0, 1, '公众号'),
(33, '语言', 'language', 'varchar(20) not null ', 'input', '1', '{{"1":"汉语","2":"英语","3":"其他语言"}', '语言', 0, 0, 1, '公众号');

-- --------------------------------------------------------

--
-- 表的结构 `cms_flink`
--

CREATE TABLE IF NOT EXISTS `cms_flink` (
  `flink_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '友情ID',
  `flink_group_id` int(11) DEFAULT '0' COMMENT '友链组id',
  `flink_name` varchar(100) NOT NULL DEFAULT '' COMMENT '链接文字',
  `flink_img` varchar(500) NOT NULL DEFAULT '' COMMENT '链接图片',
  `flink_url` varchar(500) NOT NULL DEFAULT '' COMMENT '链接地址',
  `flink_is_site` int(2) DEFAULT '0' COMMENT '0=首页，1代表全站',
  `flink_order` int(11) DEFAULT '100' COMMENT '排序',
  PRIMARY KEY (`flink_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_flink_group`
--

CREATE TABLE IF NOT EXISTS `cms_flink_group` (
  `flink_group_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '友情ID',
  `flink_group_name` varchar(100) NOT NULL DEFAULT '' COMMENT '链接文字',
  `flink_group_img` varchar(500) NOT NULL DEFAULT '' COMMENT '链接图片',
  `flink_group_url` varchar(500) NOT NULL DEFAULT '' COMMENT '链接地址',
  `flink_order` int(11) DEFAULT '100' COMMENT '排序',
  PRIMARY KEY (`flink_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='友情链接组表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_info_list`
--

CREATE TABLE IF NOT EXISTS `cms_info_list` (
  `cms_info_list_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `last_cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '终极分类',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `img_url` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `desc` varchar(300) NOT NULL DEFAULT '' COMMENT '描述',
  `body` text COMMENT '内容',
  `tag` varchar(100) DEFAULT '' COMMENT '标签',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发布者Id',
  `uname` varchar(50) NOT NULL DEFAULT '' COMMENT '发布者',
  `comments` int(6) NOT NULL DEFAULT '0' COMMENT '评论量',
  `visitors` int(6) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `tpl_content` varchar(20) NOT NULL DEFAULT '' COMMENT '内容模板',
  `cdate` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `state` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `forder` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `city` varchar(10) NOT NULL DEFAULT '0' COMMENT '城市',
  PRIMARY KEY (`cms_info_list_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_keyword`
--

CREATE TABLE IF NOT EXISTS `cms_keyword` (
  `keyword_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `keyword` varchar(200) NOT NULL DEFAULT '' COMMENT '搜索关键字',
  `qnum` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '搜索次数',
  `qorder` int(11) unsigned NOT NULL DEFAULT '100' COMMENT '关键字排序',
  `qgroup` varchar(100) NOT NULL DEFAULT '搜索词' COMMENT '搜索关键字',
  PRIMARY KEY (`keyword_id`),
  KEY `qorder` (`qorder`),
  KEY `keyword` (`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='搜索关键字记录表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_keyword_relation`
--

CREATE TABLE IF NOT EXISTS `cms_keyword_relation` (
  `relation_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `keyword_id` int(2) NOT NULL DEFAULT '0' COMMENT '关键字表关联ID',
  `info_id` int(11) NOT NULL DEFAULT '0' COMMENT '资讯表ID',
  PRIMARY KEY (`relation_id`),
  KEY `keyword_id` (`keyword_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='关键字关系表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_linkage`
--

CREATE TABLE IF NOT EXISTS `cms_linkage` (
  `linkage_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `linkage_type_id` int(11) NOT NULL DEFAULT '0' COMMENT '类型ID',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父ID',
  `linkage_name` varchar(100) NOT NULL DEFAULT '' COMMENT '名称',
  `linkage_name_py` varchar(100) NOT NULL DEFAULT '' COMMENT '别名',
  `linkage_deep` int(11) NOT NULL DEFAULT '0' COMMENT '层级别',
  `linkage_remark` int(11) NOT NULL DEFAULT '0' COMMENT '自定义标识',
  `linkage_attr` int(11) NOT NULL DEFAULT '0' COMMENT '自定义属性，热门等',
  `linkage_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`linkage_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='联动类型' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_linkage_type`
--

CREATE TABLE IF NOT EXISTS `cms_linkage_type` (
  `linkage_type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `linkage_type_name` varchar(100) NOT NULL DEFAULT '' COMMENT '名称',
  `linkage_type_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`linkage_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='联动类型菜单' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_log_list`
--

CREATE TABLE IF NOT EXISTS `cms_log_list` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL DEFAULT '0' COMMENT '操作者id',
  `aname` varchar(100) NOT NULL DEFAULT '' COMMENT '操作者名称',
  `content` varchar(2000) NOT NULL DEFAULT '' COMMENT '操作内容',
  `cdate` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `aip` varchar(24) NOT NULL DEFAULT '' COMMENT '操作者ip',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='后台操作日志表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_message`
--

CREATE TABLE IF NOT EXISTS `cms_message` (
  `message_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `is_check` int(2) NOT NULL DEFAULT '0' COMMENT '审核状态',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `nick_name` varchar(50) NOT NULL DEFAULT '' COMMENT '联系人',
  `phone` varchar(50) NOT NULL DEFAULT '' COMMENT '联系电话',
  `content` varchar(2000) NOT NULL DEFAULT '' COMMENT '留言内容',
  `qq` varchar(50) NOT NULL DEFAULT '' COMMENT '联系人QQ',
  `gender` varchar(6) NOT NULL DEFAULT '' COMMENT '联系性别',
  `reply` varchar(1000) NOT NULL DEFAULT '' COMMENT '管理员回复留言',
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='留言表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_model`
--

CREATE TABLE IF NOT EXISTS `cms_model` (
  `model_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '模型ID',
  `model_title` varchar(100) NOT NULL DEFAULT '' COMMENT '模型标题',
  `model_name` varchar(100) NOT NULL DEFAULT '' COMMENT '模型表名',
  `model_type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '模型类型，独立模型没有默认系统字段 。 0 = 扩展模型，1=独立模型',
  `cmodel_id` varchar(100) NOT NULL DEFAULT '0' COMMENT '模型子表的ID',
  `attr_content` text NOT NULL COMMENT '扩展属性，JSON格式数据[{"lable":"颜色","name":"color","type":"text/checkbox/radio/select/editor/date","value":["红色","蓝色"],”field_type”:”varchar(100)/ int(11) ”},...]',
  PRIMARY KEY (`model_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='扩展模型' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `cms_model`
--

INSERT INTO `cms_model` (`model_id`, `model_title`, `model_name`, `model_type`, `cmodel_id`, `attr_content`) VALUES
(1, '文档', 'cms_info_list', 0, '0', ''),
(2, '产品', 'cms_product', 0, '0', ''),
(3, '公众号', 'cms_public', 1, '4', ''),
(4, '公众文章', 'cms_article', 0, '0', '');

-- --------------------------------------------------------

--
-- 表的结构 `cms_model_fields`
--

CREATE TABLE IF NOT EXISTS `cms_model_fields` (
  `m_f_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `model_id` int(11) NOT NULL DEFAULT '0' COMMENT '模型Id',
  `field_id` int(11) NOT NULL DEFAULT '0' COMMENT '字段Id',
  PRIMARY KEY (`m_f_id`),
  KEY `m_f_rel` (`model_id`,`field_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='模型字段关系表' AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `cms_model_fields`
--

INSERT INTO `cms_model_fields` (`m_f_id`, `model_id`, `field_id`) VALUES
(1, 1, 15),
(2, 1, 16),
(3, 1, 17),
(4, 1, 18),
(5, 1, 19),
(6, 1, 20),
(7, 2, 21),
(8, 2, 22),
(9, 2, 23),
(10, 3, 24),
(11, 3, 25),
(12, 3, 26),
(13, 3, 27),
(14, 3, 28),
(15, 3, 29),
(16, 3, 30),
(17, 3, 31),
(18, 3, 32),
(19, 3, 33),
(20, 4, 16),
(21, 4, 17),
(22, 4, 18),
(23, 4, 19),
(24, 4, 20);

-- --------------------------------------------------------

--
-- 表的结构 `cms_nlink`
--

CREATE TABLE IF NOT EXISTS `cms_nlink` (
  `nlink_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '内链ID',
  `nlink_txt` varchar(100) NOT NULL DEFAULT '' COMMENT '名称',
  `nlink_url` varchar(500) NOT NULL DEFAULT '' COMMENT '网址',
  `cdate` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`nlink_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='正文內链词表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_online`
--

CREATE TABLE IF NOT EXISTS `cms_online` (
  `online_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `sessionid` varchar(50) NOT NULL DEFAULT '' COMMENT '游客会话id',
  `last_act` varchar(50) NOT NULL DEFAULT '' COMMENT '最后的动作',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`online_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_order_goods`
--

CREATE TABLE IF NOT EXISTS `cms_order_goods` (
  `order_goods_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单商品信息自增id',
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '订单商品信息对应的详细信息id，取值order_info的order_id',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '商品的的id，取值表ecs_goods 的goods_id',
  `goods_name` varchar(120) NOT NULL COMMENT '商品的名称，取值表ecs_goods ',
  `goods_img` varchar(120) NOT NULL COMMENT '商品的缩略图',
  `goods_sn` varchar(60) NOT NULL COMMENT '商品的唯一货号，取值ecs_goods ',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT '商品的购买数量',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品的市场售价，取值ecs_goods ',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品的本店售价，取值ecs_goods ',
  `goods_attr` text NOT NULL COMMENT '购买该商品时所选择的属性；',
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '当不是实物时，是否已发货，0，否；1，是',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否是实物，0，否；1，是；取值ecs_goods ',
  `extension_code` varchar(30) NOT NULL COMMENT '商品的扩展属性，比如像虚拟卡。取值ecs_goods ',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '父商品id，取值于ecs_cart的parent_id；如果有该值则是值多代表的物品的配件',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '是否参加优惠活动，0，否；其他，取值于ecs_cart 的is_gift，跟其一样，是参加的优惠活动的id',
  `gift_detail` varchar(120) NOT NULL DEFAULT '' COMMENT '优惠说明',
  PRIMARY KEY (`order_goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='订单的商品信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_product`
--

CREATE TABLE IF NOT EXISTS `cms_product` (
  `cms_product_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `last_cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '终极分类',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `img_url` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `desc` varchar(300) NOT NULL DEFAULT '' COMMENT '描述',
  `body` text COMMENT '内容',
  `tag` varchar(100) DEFAULT '' COMMENT '标签',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发布者Id',
  `uname` varchar(50) NOT NULL DEFAULT '' COMMENT '发布者',
  `comments` int(6) NOT NULL DEFAULT '0' COMMENT '评论量',
  `visitors` int(6) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `tpl_content` varchar(20) NOT NULL DEFAULT '' COMMENT '内容模板',
  `cdate` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `state` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `forder` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `interest` varchar(20) NOT NULL DEFAULT '1' COMMENT '爱好',
  `city` varchar(10) NOT NULL DEFAULT '0' COMMENT '城市',
  `version` varchar(20) NOT NULL DEFAULT '' COMMENT '版本',
  `download` varchar(20) NOT NULL DEFAULT '' COMMENT '下载地址',
  PRIMARY KEY (`cms_product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_public`
--

CREATE TABLE IF NOT EXISTS `cms_public` (
  `cms_public_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `model_id` int(11) NOT NULL DEFAULT '0' COMMENT '模型ID',
  `last_cate_id` int(11) NOT NULL DEFAULT '0' COMMENT '终极分类ID',
  `num` varchar(20) NOT NULL DEFAULT '' COMMENT '公众号',
  `logo` varchar(40) NOT NULL DEFAULT '' COMMENT '图标',
  `code_image` varchar(40) NOT NULL DEFAULT '' COMMENT '二维码',
  `type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '类型',
  `cate` varchar(20) NOT NULL DEFAULT '' COMMENT '类别',
  `recommend` int(11) NOT NULL DEFAULT '0' COMMENT '推荐评分',
  `comment` varchar(400) NOT NULL DEFAULT '' COMMENT '简评',
  `hot` int(11) NOT NULL DEFAULT '0' COMMENT '热度',
  `owner` varchar(20) NOT NULL DEFAULT '' COMMENT '商家',
  `language` varchar(20) NOT NULL DEFAULT '1' COMMENT '语言',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `img_url` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `desc` varchar(300) NOT NULL DEFAULT '' COMMENT '描述',
  `body` text COMMENT '内容',
  `tag` varchar(100) DEFAULT '' COMMENT '标签',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '发布者Id',
  `uname` varchar(50) NOT NULL DEFAULT '' COMMENT '发布者',
  `comments` int(6) NOT NULL DEFAULT '0' COMMENT '评论量',
  `visitors` int(6) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `tpl_content` varchar(20) NOT NULL DEFAULT '' COMMENT '内容模板',
  `cdate` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `state` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `forder` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `like` int(11) NOT NULL DEFAULT '0' COMMENT '喜欢',
  PRIMARY KEY (`cms_public_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_recommend_area`
--

CREATE TABLE IF NOT EXISTS `cms_recommend_area` (
  `area_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '推荐位ID',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '位置标题',
  `url` varchar(100) NOT NULL DEFAULT '' COMMENT '跳转地址',
  `area_type` int(2) NOT NULL DEFAULT '0' COMMENT '位置类型：广告=0，推荐位=1，专题=2',
  `area_html` text NOT NULL COMMENT '广告HTML或者描述文本',
  `area_remarks` varchar(1000) NOT NULL DEFAULT '' COMMENT '备注',
  `area_order` int(11) NOT NULL DEFAULT '100' COMMENT '排序',
  `area_logo` varchar(200) NOT NULL DEFAULT '' COMMENT '位置LOGO图',
  `id_list` varchar(2000) NOT NULL DEFAULT '' COMMENT '文档ID列表，用逗号分割',
  `model_id` int(11) NOT NULL DEFAULT '0' COMMENT '模型ID',
  PRIMARY KEY (`area_id`),
  KEY `area_type_order` (`area_type`,`area_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='推荐位置' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_recv_address`
--

CREATE TABLE IF NOT EXISTS `cms_recv_address` (
  `recv_address_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '地址id',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `recv_address` varchar(255) NOT NULL DEFAULT '' COMMENT '收货地址',
  `recv_contact` varchar(20) NOT NULL DEFAULT '' COMMENT '联系人',
  `recv_cellphone` varchar(20) NOT NULL DEFAULT '' COMMENT '手机号',
  `recv_tel` varchar(50) NOT NULL DEFAULT '' COMMENT '电话号码',
  `recv_email` varchar(20) NOT NULL DEFAULT '' COMMENT '邮箱',
  `is_default` int(11) NOT NULL DEFAULT '0' COMMENT '是否为默认收货地址',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`recv_address_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_resource_info`
--

CREATE TABLE IF NOT EXISTS `cms_resource_info` (
  `res_info_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `info_id` int(11) NOT NULL DEFAULT '0' COMMENT '信息ID',
  `model_id` int(11) NOT NULL DEFAULT '0' COMMENT '模型ID',
  `resource_id` int(11) NOT NULL DEFAULT '0' COMMENT '资源id',
  `cdate` int(11) NOT NULL DEFAULT '0' COMMENT '关联时间',
  PRIMARY KEY (`res_info_id`),
  KEY `res_info` (`info_id`,`resource_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='信息资源关系表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_resource_list`
--

CREATE TABLE IF NOT EXISTS `cms_resource_list` (
  `resource_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '资源',
  `resource_url` varchar(500) NOT NULL DEFAULT '' COMMENT '资源地址',
  `width` int(11) NOT NULL DEFAULT '0' COMMENT '资源宽度',
  `height` int(11) NOT NULL DEFAULT '0' COMMENT '资源高度',
  `size` int(11) NOT NULL DEFAULT '0' COMMENT '资源大小',
  `oname` varchar(200) NOT NULL DEFAULT '' COMMENT '原文件名，不带后缀',
  PRIMARY KEY (`resource_id`),
  KEY `resource_url` (`resource_url`(333))
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='资源表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_shipping`
--

CREATE TABLE IF NOT EXISTS `cms_shipping` (
  `shipping_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID号',
  `shipping_code` varchar(20) NOT NULL COMMENT '配送方式的字符串代号',
  `shipping_name` varchar(120) NOT NULL COMMENT '配送方式的名称',
  `shipping_desc` varchar(255) NOT NULL COMMENT '配送方式的描述',
  `insure` varchar(10) NOT NULL DEFAULT '0' COMMENT '保价费用，单位元，或者是百分数，该值直接输出为报价费用',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '该配送方式是否被禁用，1，可用；0，禁用',
  PRIMARY KEY (`shipping_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='配送方式配置信息表' AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_tag`
--

CREATE TABLE IF NOT EXISTS `cms_tag` (
  `tag_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '标签ID',
  `group_id` int(11) DEFAULT '0' COMMENT '组id',
  `tag` varchar(100) NOT NULL DEFAULT '' COMMENT '标签',
  `tag_img` varchar(500) NOT NULL DEFAULT '' COMMENT 'logo图',
  `tag_order` int(11) DEFAULT '100' COMMENT '排序',
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='标签表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_tag_group`
--

CREATE TABLE IF NOT EXISTS `cms_tag_group` (
  `group_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '标签组id',
  `group_name` varchar(100) NOT NULL DEFAULT '' COMMENT '标签组名称',
  `group_url` varchar(100) NOT NULL DEFAULT '' COMMENT '链接地址',
  `remark` varchar(500) DEFAULT '' COMMENT '说明',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='标签组表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_user_group`
--

CREATE TABLE IF NOT EXISTS `cms_user_group` (
  `group_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `g_name` varchar(100) NOT NULL DEFAULT '' COMMENT '组名称',
  `g_urank` varchar(5000) NOT NULL DEFAULT '' COMMENT '组权限',
  `g_remark` varchar(1000) NOT NULL DEFAULT '' COMMENT '备注',
  `g_discount` float NOT NULL DEFAULT '0' COMMENT '用户组默认折扣',
  `g_state` int(11) NOT NULL DEFAULT '0' COMMENT '组状态（正常=0，停用=1）',
  `cdate` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `is_admin_g` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0=前台用户组，1=后台用户组',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_user_list`
--

CREATE TABLE IF NOT EXISTS `cms_user_list` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL DEFAULT '' COMMENT '用户名',
  `group_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户所在组id',
  `upass` varchar(100) NOT NULL DEFAULT '' COMMENT '密码',
  `uavatar` varchar(100) NOT NULL DEFAULT '' COMMENT '头像地址',
  `uemail` varchar(100) NOT NULL DEFAULT '' COMMENT '邮箱',
  `uemail_verify` int(1) NOT NULL DEFAULT '0' COMMENT '邮箱是否验证',
  `uqq` varchar(100) NOT NULL DEFAULT '' COMMENT 'QQ',
  `uqq_verify` int(1) NOT NULL DEFAULT '0' COMMENT 'QQ是否验证',
  `uphone` varchar(100) NOT NULL DEFAULT '' COMMENT '手机',
  `uphone_verify` int(1) NOT NULL DEFAULT '0' COMMENT '手机是否验证',
  `ustate` int(11) NOT NULL DEFAULT '0' COMMENT '用户状态（正常=0，停用=1）',
  `gender` int(2) NOT NULL DEFAULT '0' COMMENT '性别（女=1，男=0）',
  `birth_day` int(11) NOT NULL DEFAULT '0' COMMENT '出生年月日',
  `city` varchar(200) NOT NULL DEFAULT '' COMMENT '城市',
  `motto` varchar(500) NOT NULL DEFAULT '' COMMENT '个性签名',
  `reg_date` int(11) NOT NULL DEFAULT '0' COMMENT '注册日期',
  `reg_ip` varchar(100) NOT NULL DEFAULT '' COMMENT '注册IP地址',
  `upoint` int(10) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `login_num` int(11) NOT NULL DEFAULT '0' COMMENT '登录次数',
  `last_login_date` int(11) NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `last_login_ip` varchar(100) NOT NULL DEFAULT '' COMMENT '最后登录IP地址',
  `qqid` varchar(100) NOT NULL DEFAULT '' COMMENT 'QQ绑定字段ID',
  `discount` float NOT NULL DEFAULT '0' COMMENT '会员折扣',
  `rank` varchar(1000) NOT NULL DEFAULT '' COMMENT '用户权限 数据结构 "A10","A11"',
  `is_admin` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0=前台用户组，1=后台用户组',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='会员表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `cms_user_list`
--

INSERT INTO `cms_user_list` (`user_id`, `uname`, `group_id`, `upass`, `uavatar`, `uemail`, `uemail_verify`, `uqq`, `uqq_verify`, `uphone`, `uphone_verify`, `ustate`, `gender`, `birth_day`, `city`, `motto`, `reg_date`, `reg_ip`, `upoint`, `login_num`, `last_login_date`, `last_login_ip`, `qqid`, `discount`, `rank`, `is_admin`) VALUES
(1, 'wenghe', 0, '64dc043d85da6505a5121489a2a6bafe', '', '', 0, '', 0, '', 0, 0, 0, 0, '', '', 1436151431, '', 0, 0, 0, '', '', 0, '', 0),
(2, 'wenghe000', 0, '4c83522edbe754de195d71f1f6a23de5', '', '', 0, '', 0, '', 0, 0, 0, 0, '', '', 1436153073, '', 0, 0, 1436256894, '127.0.0.1', '', 0, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `cms_user_order`
--

CREATE TABLE IF NOT EXISTS `cms_user_order` (
  `user_order_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `trade_no` varchar(50) NOT NULL DEFAULT '' COMMENT '本站订单号 唯一',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `sessionid` varchar(50) NOT NULL DEFAULT '' COMMENT '游客会话id',
  `pay_type` int(11) NOT NULL DEFAULT '0' COMMENT '支付方式（支付宝=1，财付通=2,网银在线=3...）',
  `order_state` int(11) NOT NULL DEFAULT '0' COMMENT '订单状态(0=等待付款,1=已经付款，等待发货,2=已发货，等待确认收货,3=交易成功)',
  `invoice_number` varchar(100) NOT NULL DEFAULT '' COMMENT '发货单号',
  `consignee` varchar(60) NOT NULL COMMENT '收货人的姓名，用户页面填写，默认取值于表user_address',
  `address` varchar(255) NOT NULL COMMENT '收货人的详细地址，用户页面填写，默认取值于表user_address',
  `mobile` varchar(60) NOT NULL COMMENT '收货人的手机，用户页面填写，默认取值于表user_address',
  `tel` varchar(50) NOT NULL DEFAULT '' COMMENT '电话号码',
  `email` varchar(60) NOT NULL COMMENT '收货人的手机，用户页面填写，默认取值于表user_address',
  `postscript` varchar(255) NOT NULL COMMENT '订单附言，由用户提交订单前填写',
  `tohours` varchar(50) NOT NULL DEFAULT '' COMMENT '送到时间段（用户选择）',
  `shipping_id` tinyint(3) NOT NULL DEFAULT '0' COMMENT '用户选择的配送方式id，取值表ecs_shipping',
  `shipping_name` varchar(120) NOT NULL COMMENT '用户选择的配送方式的名称，取值表ecs_shipping',
  `shipping_fee` int(11) NOT NULL DEFAULT '0' COMMENT '配送费用',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '是否参加了优惠活动0=否，1=是',
  `gift_detail` varchar(120) NOT NULL DEFAULT '' COMMENT '优惠说明',
  `order_cate` int(11) NOT NULL DEFAULT '0' COMMENT '订单分类,1=快点,2=金和楼,3=综合',
  `order_money_count` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '总计',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '订单创建时间',
  `pay_time_complete` int(11) NOT NULL DEFAULT '0' COMMENT '完成付款时间',
  PRIMARY KEY (`user_order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_user_pay`
--

CREATE TABLE IF NOT EXISTS `cms_user_pay` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `trade_no` varchar(50) NOT NULL DEFAULT '' COMMENT '本站订单号 唯一',
  `order_id` int(11) NOT NULL DEFAULT '0' COMMENT '商品订单id',
  `coupons_id` int(11) NOT NULL DEFAULT '0' COMMENT '优惠券id',
  `user_money` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '会员余额',
  `pay_trade_no` varchar(50) NOT NULL DEFAULT '' COMMENT '服务商的订单号',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `sessionid` varchar(50) NOT NULL DEFAULT '' COMMENT '游客会话id',
  `money` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '充值金额',
  `pay_time` int(11) NOT NULL DEFAULT '0' COMMENT '支付创建时间',
  `pay_time_complete` int(11) NOT NULL DEFAULT '0' COMMENT '支付成功时间',
  `pay_state` int(11) NOT NULL DEFAULT '0' COMMENT '支付状态（成功=1，失败=0）',
  `pay_type` int(11) NOT NULL DEFAULT '0' COMMENT '支付方式（支付宝=1，财付通=2,网银在线=3...）',
  `ip` varchar(50) NOT NULL DEFAULT '' COMMENT 'IP地址',
  PRIMARY KEY (`pay_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_user_points`
--

CREATE TABLE IF NOT EXISTS `cms_user_points` (
  `points_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `points` int(11) NOT NULL DEFAULT '0' COMMENT '积分数值，有符号整数，获取>0，消耗<0',
  `cdate` int(11) NOT NULL DEFAULT '0' COMMENT '积分产生时间',
  `points_reason` varchar(100) NOT NULL DEFAULT '' COMMENT '积分产生原因',
  PRIMARY KEY (`points_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_vote_data`
--

CREATE TABLE IF NOT EXISTS `cms_vote_data` (
  `data_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `uid` int(8) unsigned NOT NULL COMMENT '用户ID',
  `uname` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `subject_id` int(11) NOT NULL DEFAULT '0' COMMENT '选项ID',
  `time` int(11) NOT NULL DEFAULT '0' COMMENT '投票时间',
  `ip` varchar(50) NOT NULL DEFAULT '' COMMENT '投票时间',
  `data` varchar(255) NOT NULL DEFAULT '' COMMENT '投票的数据,json格式 [3,5,6]，表示 投给了 3，5，6',
  PRIMARY KEY (`data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_vote_option`
--

CREATE TABLE IF NOT EXISTS `cms_vote_option` (
  `option_id` int(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '选项ID',
  `subject_id` int(8) unsigned NOT NULL DEFAULT '0',
  `option` varchar(255) NOT NULL DEFAULT '' COMMENT '选项名称',
  `option_order` tinyint(2) unsigned DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`option_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cms_vote_subject`
--

CREATE TABLE IF NOT EXISTS `cms_vote_subject` (
  `subject_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主题id',
  `subject` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `subject_desc` varchar(255) NOT NULL DEFAULT '' COMMENT '介绍',
  `is_checkbox` int(11) NOT NULL DEFAULT '0' COMMENT '是否复选',
  `minval` int(11) NOT NULL DEFAULT '0' COMMENT '最少选项',
  `maxval` int(11) NOT NULL DEFAULT '0' COMMENT '最大选项',
  `start_time` int(11) NOT NULL DEFAULT '0' COMMENT '上线时间',
  `end_time` int(11) NOT NULL DEFAULT '0' COMMENT '下线时间',
  `allowview` int(11) NOT NULL DEFAULT '0' COMMENT '是否允许查看投票结果',
  `allowguest` int(11) NOT NULL DEFAULT '0' COMMENT '是否允许游客投票',
  `reward_point` int(11) NOT NULL DEFAULT '0' COMMENT '奖励积分',
  `optionnumeber` int(11) NOT NULL DEFAULT '0' COMMENT '选项数量',
  `votenumeber` int(11) NOT NULL DEFAULT '0' COMMENT '共计投票',
  `enabled` int(11) NOT NULL DEFAULT '0' COMMENT '是否启用,0=未启用,1=启用',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `template` varchar(100) NOT NULL DEFAULT '' COMMENT '模版',
  `subject_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `limit_day` int(11) NOT NULL DEFAULT '0' COMMENT '间隔时间允许投票，天为单位，',
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
