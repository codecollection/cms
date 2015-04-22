

create table if not exists `cms_configs`(
 `config_id` int(11) unsigned not null auto_increment comment '配置id',
 `title` varchar(100) not null default '' comment '配置项',
 `key` varchar(100) not null default '' comment '配置key',
 `value` varchar(500) not null default '' comment '配置值',
 `tag` varchar(50) not null default '' comment '配置标签(兼分组功能)',
 `form_type` varchar(100) not null default '' comment '表单类型',
 `comment` varchar(500) not null default '' comment '字段特殊说明',
 primary key (`config_id`)
)engine=myisam default charset=utf8 comment '配置表';

create table if not exists `cms_category` (
 `cate_id` int(11) unsigned not null auto_increment comment '类别id',
 `parent_id` int(11) not null default 0 comment '父类id',
 `cname` varchar(100) not null default '' comment '分类名称',
 `cname_py` varchar(100) not null default '' comment '分类字母别名',
 `cnick` varchar(100) not null default '' comment '分类别名',
 `ctitle` varchar(500) not null default '' comment 'SEO标题',
 `ckey` varchar(500) not null default '' comment 'SEO关键词',
 `cdesc` varchar(500) not null default '' comment 'SEO描述',
 `corder` int(11) not null default 100 comment '分类排序',
 `tpl_index` varchar(500) not null default '' comment  '封面模板',
 `tpl_listvar` varchar(500) not null default '' comment  '列表变量模板',
 `tpl_content` varchar(500) not null default '' comment  '内容页模板',
 `model_id` int(4) not null default 0 comment '绑定模型ID',
 `nav_show` int(1) not null default 0 comment '主导航显示，0=不显示，1=显示',
 `nav_show_wap` int(1) not null default 0 comment 'wap端主导航显示，0=不显示，1=显示',
 `clogo` varchar(200) not null default '' comment '分类LOGO图',
 `cintro` varchar(8000) not null default '' comment '分类简介',
 `go_url` varchar(200) not null default '' comment '跳转URL',
 `ad_id` int(11) not null default 0 comment '绑定广告id',
 `extern` text not null default '' comment '扩展数据，json格式',
 primary key (`cate_id`)
) engine=myisam default charset=utf8 comment '分类表';

create table if not exists `cms_cate_relation` (
 `relation_id` int(11) unsigned not null auto_increment comment '关系ID',
 `cate_id` int(11) not null default 0 comment '分类ID',
 `info_id` int(11) not null default 0 comment '文档ID',
 `id_visitors` int(11) not null default 0 comment '浏览量',
 `id_comments` int(11) not null default 0 comment '评论量',
 `id_order` int(11) not null default 100 comment '排序',
 `id_cdate` int(11) not null default 0 comment '创建时间',
 `id_publish_time` int(11) not null default 0 comment '发布时间',
 primary key (`relation_id`),
  index `cate_id` (`cate_id`),
  index `id_visitors` (`cate_id`,`id_visitors`),
  index `id_comments` (`cate_id`,`id_comments`),
  index `id_order` (`cate_id`,`id_order`) ,
  index `id_create_time` (`cate_id`,`id_cdate`) ,
  index `id_publish_time` (`cate_id`,`id_publish_time`) 
) engine=myisam default charset=utf8 comment '分类和信息关系表';

create table if not exists `cms_resource_list` (
 `id` int(11) unsigned not null auto_increment comment '资源',
 `resource_url` varchar(500) not null default '' comment '资源地址', 
 `width` int(11) not null default 0 comment '资源宽度',
 `height` int(11) not null default 0 comment '资源高度',
 `size` int(11) not null default 0 comment '资源大小',
 `oname` varchar(200) not null default '' comment '原文件名，不带后缀',
 primary key (`id`),
 index `resource_url` (`resource_url`)
) engine=myisam default charset=utf8 comment '资源表';

create table if not exists `cms_resource_info`(
 `res_info_id` int(11) unsigned not null auto_increment,
 `info_id` int(11) not null default 0 comment '信息ID',
 `model_id` int(11) not null default 0 comment '模型ID',
 `resource_id` int(11) not null default 0 comment '资源id',
 `cdate` int(11) not null default 0 comment '关联时间',
 primary key(`res_info_id`),
 index `res_info` (`info_id`,`resource_id`)
)engine=myisam default charset=utf8 comment '信息资源关系表';


create table if not exists `cms_recommend_area` (
 `area_id` int(11) unsigned not null auto_increment comment '推荐位ID',
 `title` varchar(100) not null default '' comment '位置标题',
 `url` varchar(100) not null default '' comment '跳转地址',
 `area_type` int(2) not null default 0 comment '位置类型：广告=0，推荐位=1，专题=2',
 `area_html` text not null  comment '广告HTML或者描述文本',
 `area_remarks` varchar(1000) not null default '' comment '备注',
 `area_order` int(11) not null default 100 comment '排序',
 `area_logo` varchar(200) not null default '' comment '位置LOGO图',
 `id_list` varchar(2000) not null default '' comment '文档ID列表，用逗号分割',
 primary key (`area_id`),
 index `area_type_order` (`area_type`,`area_order`)
) engine=myisam default charset=utf8 comment '推荐位置';

-- 广告位表
create table if not exists `cms_ad_area` (
 `area_id` int(11) unsigned not null auto_increment,
 `area_name` varchar(255) not null default '' comment '位置名称',
 `area_type` int(2) not null default 0 comment '广告位类型, 0=图片广告，1=代码广告',
 `remark` varchar(1000) not null default '' comment '位置标注',
 `cdate` int(11) not null default 0 comment '创建时间',
 primary key (`area_id`)
) engine=myisam default charset=utf8 auto_increment=100;

-- 广告列表
create table if not exists `cms_ad_list` (
 `ad_id` int(11) unsigned not null auto_increment,
 `area_id` int(11) not null default 0 comment '广告位',
 `show_type` int(11) not null default 0 comment '展现方式, 0=代码,1=文字,2=图片,3=flash',
 `ad_title` varchar(255) not null default '' comment '广告标题',
 `ad_words` varchar(255) not null default '' comment '文字',
 `ad_img` text not null default '' comment '图片URL',
 `ad_url` text not null default '' comment '广告URL',
 `ad_code` text not null default '' comment '广告代码',
 `start_date` int(11) not null default 0 comment '生效时间',
 `expire_date` int(11) not null default 0 comment '到期时间',
 `cdate` int(11) not null default 0 comment '创建时间',
 `ad_order` int(11) not null default 0 comment '广告排序',
 primary key (`ad_id`)
) engine=myisam default charset=utf8;

create table if not exists `cms_model` (
 `model_id` int(11) unsigned not null auto_increment comment '模型ID',
 `model_title` varchar(100) not null default '' not null comment '模型标题',
 `model_name` varchar(100) not null default '' not null comment '扩展模型表名',
 `cmodel_id` varchar(100) not null default 0 comment '模型子表的ID',
 `attr_content` text not null  comment '扩展属性，JSON格式数据[{"lable":"颜色","name":"color","type":"text/checkbox/radio/select/editor/date","value":["红色","蓝色"],”field_type”:”varchar(100)/ int(11) ”},...]',
 primary key (`model_id`)
) engine=myisam default charset=utf8 comment '扩展模型';

create table if not exists `cms_fields` (
 `field_id` int(11) unsigned not null auto_increment comment '字段ID',
 `title` varchar(50) not null default '' not null comment '字段文字(如：标题)',
 `field` varchar(50) not null default '' comment '字段名称（表的字段名，如：title）',
 `field_type` varchar(100) not null default '' not null comment '字段类型SQL,如：varchar(100)',
 `form_type` varchar(100) not null default '' not null comment '表单类型(input ,textarea等)',
 `form_value` varchar(1000) not null default '' not null comment '表单默认值，json格式(如:{0:红色,1:蓝色})',
 `field_remark` int(2) not null default 0 not null comment '表单的备注，比如不能为空等 0=无，1=不能为空 2=是数字 3=手机号 4=邮箱地址 5=身份证号 6=QQ号 7=银行卡号,可以自定义添加正则等',
 `forder` int(3) not null default 100 comment '字段显示排序',
 `linkage_type_id` int(11) not null default 0 comment '联动类型ID，（如果有，先处理这个）',
 `is_system` int(3) not null default 1 comment '是否为系统字段，0=系统字段 ，1=扩展字段',
 `field_tag` varchar(20) not null default '' comment '标签',
 primary key (`field_id`)
) engine=myisam default charset=utf8 comment '模型字段';

-- 模型字段关系表

create table if not exists `cms_model_fields`(
 `m_f_id` int(11) unsigned not null auto_increment comment 'id',
 `model_id` int(11) not null default 0 comment '模型Id',
 `field_id` int(11) not null default 0 comment '字段Id',
 primary key (`m_f_id`),
 index `m_f_rel` (`model_id`,`field_id`)
)engine=myisam default charset=utf8 comment '模型字段关系表';
-- 联动菜单类型
create table if not exists `cms_linkage_type` (
  `linkage_type_id` int(11) unsigned not null auto_increment,
  `linkage_type_name` varchar(100) not null default '' comment '名称',
  `linkage_type_order` int(11) not null default 0 comment  '排序',
  primary key (`linkage_type_id`)
) engine=myisam default charset=utf8 comment '联动类型菜单';

-- 联动菜单
create table if not exists `cms_linkage` (
  `linkage_id` int(11) unsigned not null auto_increment,
  `linkage_type_id` int(11) not null default 0 comment  '类型ID',
  `parent_id` int(11) not null default 0   comment  '父ID' ,
  `linkage_name` varchar(100) not null default '' comment '名称',
  `linkage_name_py` varchar(100)  not null default '' comment '别名',
  `linkage_deep` int(11) not null default 0 comment  '层级别',
  `linkage_remark` int(11) not null default 0 comment  '自定义标识',
  `linkage_attr` int(11) not null default 0 comment  '自定义属性，热门等',
  `linkage_order` int(11) not null default 0 comment  '排序',
  primary key (`linkage_id`)
) engine=myisam default charset=utf8 comment '联动类型';

create table if not exists `cms_flink_group` (
 `flink_group_id` int(11) unsigned not null auto_increment comment '友情ID',
 `flink_group_name` varchar(100) not null default '' comment '链接文字',
 `flink_group_img` varchar(500) not null default '' comment '链接图片',
 `flink_group_url` varchar(500) not null default '' comment '链接地址',
 `flink_order` int(11) default 100 comment'排序',
 primary key(`flink_group_id`)
)engine=myisam default charset=utf8 comment '友情链接组表';

create table if not exists `cms_flink` (
 `flink_id` int(11) unsigned not null auto_increment comment '友情ID',
 `flink_group_id` int(11) default 0 comment'友链组id',
 `flink_name` varchar(100) not null default '' comment '链接文字',
 `flink_img` varchar(500) not null default '' comment '链接图片',
 `flink_url` varchar(500) not null default '' comment '链接地址',
 `flink_is_site` int(2) default 0 comment '0=首页，1代表全站',
 `flink_order` int(11) default 100 comment'排序',
 primary key(`flink_id`)
)engine=myisam default charset=utf8 comment '友情链接表';

create table if not exists `cms_nlink`(
  `nlink_id` int(11) unsigned not null auto_increment comment '内链ID',
  `nlink_txt` varchar(100)  not null default '' comment '名称',
  `nlink_url` varchar(500)  not null default '' comment '网址',
  `cdate` int(11) not null default 0 comment '创建时间',
   primary key(`nlink_id`)
)engine=myisam default charset=utf8 comment '正文內链词表';

create table if not exists `cms_log_list` (
 `log_id` int(11) unsigned not null auto_increment,
 `aid` int(11) not null default 0 comment '操作者id',
 `aname`  varchar(100) not null default '' comment '操作者名称',
 `content` varchar(2000) not null default '' comment '操作内容',
 `cdate` int(11) not null default 0 comment '创建时间',
 `aip` varchar(24) not null default '' comment '操作者ip',
 primary key (`log_id`)
) engine=myisam default charset=utf8 comment '后台操作日志表';

create table if not exists `cms_comment` (
  `comment_id` int(11) unsigned not null auto_increment comment '评论id',
  `info_id` int(11) not null default 0 comment '信息ID	',
  `content` varchar(500) not null default '' comment '评论内容',
  `date_add` int(11) not null default 0 comment '发布时间',
  `uid` int(11) not null default 0 comment '用户id',
  `uname` varchar(500) not null default '' comment '昵称',
  `avator` varchar(100) not null default '' comment '头像',
  `ip` varchar(20) not null default 0 comment 'ip地址',
  `ip_addr` varchar(200) not null default '' comment '地理位置',
  `parent_id` int(11) not null default 0 comment '上级id',
  `is_check` int(1) not null default 1 comment '是否审核',
  `son` int(11) not null default 0 comment '子评论数',
  `good` int(11) not null default 0 comment '赞',
  `bad` int(11) not null default 0 comment '踩',
  `reply` varchar(1000) not null default '' comment '评论管理员回复',
  primary key  (`comment_id`),
  index (`info_id`)
) engine=myisam default charset=utf8 comment '评论表';

create table if not exists `cms_keyword` (
  `keyword_id` int(11) unsigned null null auto_increment,
  `keyword` varchar(200) not null default '' comment '搜索关键字',
  `qnum` int(11) unsigned not null default 0 comment '搜索次数',
  `qorder` int(11) unsigned not null default 100 comment '关键字排序',
  `qgroup` varchar(100) not null default '搜索词' comment '搜索关键字',
   primary key (`keyword_id`),
  index `qorder` (`qorder`),
  index `keyword` (`keyword`)
) engine=myisam default charset=utf8 comment '搜索关键字记录表';

/*管理组合并到用户组*/
create table if not exists `cms_admin_group` (
 `group_id` int(11) unsigned not null auto_increment,
 `g_name` varchar(100) not null default '' comment '组名称',
 `g_urank` varchar(5000) not null default '' comment '组权限',
 `g_remark` varchar(1000) not null default '' comment '备注',
 `g_state` int(11) not null default 0 comment '组状态（正常=0，停用=1）',
 `cdate` int(11) not null default 0 comment '创建时间',
 primary key (`group_id`)
) engine=myisam default charset=utf8 comment '用户组表';
/*管理员合并到用户列表*/
create table if not exists `cms_admin_list` (
 `admin_id` int(11) unsigned not null auto_increment,
 `aname` varchar(100) not null default '' comment '账号',
 `apass` varchar(100) not null default '' comment '密码',
 `aname_true` varchar(100) not null default '' comment '真实姓名',
 `aemail` varchar(100) not null default '' comment '邮箱',
 `aphone` varchar(100) not null default '' comment '手机',
 `aqq` varchar(100) not null default '' comment 'QQ',
 `group_id` int(11) not null default 0 comment '管理组ID',
 `alevel` varchar(1000) not null default '' comment '用户权限 数据结构 "A10","A11"',
 `astate` int(11) not null default 0 comment '用户状态（正常=0，停用=1）',
 `reg_date` int(11) not null default 0 comment '开通时间',
 `last_loginip` varchar(2) not null default '' comment '最后登录的IP',
 `last_logintime` int(11) not null default 0 comment '最后登录的时间',
 primary key (`admin_id`)
) engine=myisam default charset=utf8 comment '后台用户表';

create table if not exists `cms_user_group` (
 `group_id` int(11) unsigned not null auto_increment,
 `g_name` varchar(100) not null default '' comment '组名称',
 `g_urank` varchar(5000) not null default '' comment '组权限',
 `g_remark` varchar(1000) not null default '' comment '备注',
 `g_discount` float(4) not null default 0 comment '用户组默认折扣',
 `g_state` int(11) not null default 0 comment '组状态（正常=0，停用=1）',
 `cdate` int(11) not null default 0 comment '创建时间',
 `is_admin_g` tinyint(2) not null default 0 comment '0=前台用户组，1=后台用户组',
 primary key(`group_id`)
)engine=myisam default charset=utf8;

create table if not exists `cms_user_list` (
 `user_id` int(11) unsigned not null auto_increment,
 `uname` varchar(100) not null default '' comment '用户名',
 `group_id` int(11) not null default 0 comment '用户所在组id',
 `upass` varchar(100) not null default '' comment '密码',
 `uavatar` varchar(100) not null default '' comment '头像地址',
 `uemail` varchar(100) not null default '' comment '邮箱',
 `uemail_verify` int(1) not null default 0 comment '邮箱是否验证',
 `uqq` varchar(100) not null default '' comment 'QQ',
 `uqq_verify` int(1) not null default 0 comment 'QQ是否验证',
 `uphone` varchar(100) not null default '' comment '手机',
 `uphone_verify` int(1) not null default 0 comment '手机是否验证',
 `ustate` int(11) not null default 0 comment '用户状态（正常=0，停用=1）',
 `gender` int(2) not null default 0 comment '性别（女=1，男=0）',
 `birth_day` int(11) not null default 0 comment '出生年月日',
 `city` varchar(200) not null default '' comment '城市',
 `motto` varchar(500) not null default '' comment '个性签名',
 `reg_date` int(11) not null default 0 comment '注册日期',
 `reg_ip` varchar(100) not null default '' comment '注册IP地址',
 `upoint` int(10) not null default 0 comment '用户积分',
 `login_num` int(11) not null default 0 comment '登录次数',
 `last_login_date` int(11) not null default 0 comment '最后登录时间',
 `last_login_ip` varchar(100) not null default '' comment '最后登录IP地址',
 `qqid` varchar(100) not null default '' comment 'QQ绑定字段ID',
 `discount` float(5) not null default 0 comment '会员折扣',
 `rank` varchar(1000) not null default '' comment '用户权限 数据结构 "A10","A11"',
 `is_admin` tinyint(2) not null default 0 comment '0=前台用户组，1=后台用户组',
 primary key (`user_id`)
) engine=myisam default charset=utf8 comment '会员表';

-- 会员积分
create table if not exists `cms_user_points` (
 `points_id` int(11) unsigned not null auto_increment,
 `uid` int(11) not null default 0 comment '用户ID',
 `points` int(11) signed not null default 0 comment '积分数值，有符号整数，获取>0，消耗<0',
 `cdate` int(11) not null default 0 comment '积分产生时间',
 `points_reason` varchar(100) not null default '' comment '积分产生原因',
 primary key (`points_id`)
) engine=myisam default charset=utf8;

create table if not exists `cms_message` (
  `message_id` int(11) unsigned not null auto_increment,
  `is_check` int(2) not null default '0' comment '审核状态',
  `create_time` int(11) not null default '0' comment '创建时间',
  `nick_name` varchar(50) not null default '' comment '联系人',
  `phone` varchar(50) not null default '' comment '联系电话',
  `content` varchar(2000) not null default '' comment '留言内容',
  `qq` varchar(50) not null default '' comment '联系人QQ',
  `gender` varchar(6) not null default '' comment '联系性别',
  `reply` varchar(1000) not null default '' comment '管理员回复留言',
  primary key  (`message_id`)
) engine=myisam default charset=utf8 comment '留言表';

create table if not exists `cms_keyword_relation` (
  `relation_id` int(11) unsigned not null auto_increment,
  `keyword_id` int(2) not null default '0' comment '关键字表关联ID',
  `info_id` int(11) not null default '0' comment '资讯表ID',
  primary key  (`relation_id`),
  index `keyword_id`(`keyword_id`)
) engine=myisam default charset=utf8 comment '关键字关系表';


-- 会员支付充值记录表 
 create table if not exists `cms_user_pay`(
 `pay_id` int(11) not null auto_increment comment '自增id', 
 `trade_no` varchar(50) not null default '' comment '本站订单号 唯一',
 `order_id` int(11) not null default 0 comment '商品订单id',
 `coupons_id` int(11) not null default 0 comment '优惠券id', 
 `user_money` decimal(11,2) not null default 0 comment '会员余额', 
 `pay_trade_no` varchar(50) not null default '' comment '服务商的订单号',
 `uid` int(11) not null default 0 comment '用户id', 
 `sessionid` varchar(50) not null default '' comment '游客会话id', 
 `money` decimal(11,2) not null default 0 comment '充值金额', 
 `pay_time` int(11) not null default 0 comment '支付创建时间',
 `pay_time_complete` int(11) not null default 0 comment '支付成功时间',
 `pay_state` int(11) not null default 0 comment '支付状态（成功=1，失败=0）',
 `pay_type` int(11) not null default 0 comment '支付方式（支付宝=1，财付通=2,网银在线=3...）',
 `ip` varchar(50) not null default '' comment 'IP地址', 
 primary key (`pay_id`)
 ) engine=myisam default charset=utf8;


-- 订单商品表
create table if not exists `cms_order_goods` (
`order_goods_id` mediumint(8) unsigned not null auto_increment comment '订单商品信息自增id',
`order_id` mediumint(8) unsigned not null DEFAULT '0' comment '订单商品信息对应的详细信息id，取值order_info的order_id',
`goods_id` mediumint(8) unsigned not null DEFAULT '0' comment '商品的的id，取值表ecs_goods 的goods_id',
`goods_name` varchar(120) not null comment '商品的名称，取值表ecs_goods ',
`goods_img` varchar(120) not null comment '商品的缩略图',
`goods_sn` varchar(60) not null comment '商品的唯一货号，取值ecs_goods ',
`goods_number` smallint(5) unsigned not null DEFAULT '1' comment '商品的购买数量',
`market_price` decimal(10,2) not null DEFAULT '0.00' comment '商品的市场售价，取值ecs_goods ',
`goods_price` decimal(10,2) not null DEFAULT '0.00' comment '商品的本店售价，取值ecs_goods ',
`goods_attr` text not null comment '购买该商品时所选择的属性；',
`send_number` smallint(5) unsigned not null DEFAULT '0' comment '当不是实物时，是否已发货，0，否；1，是',
`is_real` tinyint(1) unsigned not null DEFAULT '0' comment '是否是实物，0，否；1，是；取值ecs_goods ',
`extension_code` varchar(30) not null comment '商品的扩展属性，比如像虚拟卡。取值ecs_goods ',
`parent_id` mediumint(8) unsigned not null DEFAULT '0' comment '父商品id，取值于ecs_cart的parent_id；如果有该值则是值多代表的物品的配件',
`is_gift` smallint(5) unsigned not null DEFAULT '0' comment '是否参加优惠活动，0，否；其他，取值于ecs_cart 的is_gift，跟其一样，是参加的优惠活动的id',
`gift_detail`  varchar(120) not null default '' comment '优惠说明',
primary KEY (`order_goods_id`)
)ENGINE=myisam default CHARSET=utf8  comment='订单的商品信息' auto_increment=1 ;


-- 订单记录表
create table if not exists `cms_user_order`(
  `user_order_id` int(11) not null auto_increment comment '订单id', 
  `trade_no` varchar(50) not null default '' comment '本站订单号 唯一',
  `uid` int(11) not null default 0 comment '用户id', 
  `sessionid` varchar(50) not null default '' comment '游客会话id', 
  `pay_type` int(11) not null default 0 comment '支付方式（支付宝=1，财付通=2,网银在线=3...）',
  `order_state` int(11) not null default 0 comment '订单状态(0=等待付款,1=已经付款，等待发货,2=已发货，等待确认收货,3=交易成功)', 
  `invoice_number` varchar(100) not null default '' comment '发货单号',
  `consignee` varchar(60) not null comment '收货人的姓名，用户页面填写，默认取值于表user_address',
  `address` varchar(255) not null comment '收货人的详细地址，用户页面填写，默认取值于表user_address',
  `mobile` varchar(60) not null comment '收货人的手机，用户页面填写，默认取值于表user_address',
  `tel` varchar(50) not null default '' comment '电话号码',
  `email` varchar(60) not null comment '收货人的手机，用户页面填写，默认取值于表user_address',
  `postscript` varchar(255) not null comment '订单附言，由用户提交订单前填写',
  `tohours` varchar(50) not null default '' comment '送到时间段（用户选择）',
  `shipping_id` tinyint(3) not null DEFAULT '0' comment '用户选择的配送方式id，取值表ecs_shipping',
  `shipping_name` varchar(120) not null comment '用户选择的配送方式的名称，取值表ecs_shipping',
  `shipping_fee` int(11) not null default 0  comment '配送费用',
  `is_gift` smallint(5) unsigned not null DEFAULT '0' comment '是否参加了优惠活动0=否，1=是',
  `gift_detail`  varchar(120) not null default '' comment '优惠说明',
  `order_cate` int(11) not null default 0 comment '订单分类,1=快点,2=金和楼,3=综合', 
  `order_money_count` decimal(11,2) not null default 0 comment '总计',
  `create_time` int(11) not null default 0 comment '订单创建时间',
  
  `pay_time_complete` int(11) not null default 0 comment '完成付款时间',
  primary key (`user_order_id`)
)engine=myisam default charset=utf8;

-- 收货地址表
create table if not exists `cms_recv_address`(
  `recv_address_id` int(11) not null auto_increment comment '地址id', 
  `uid` int(11) not null default 0 comment '用户id', 
  `recv_address` varchar(255) not null default '' comment '收货地址',
  `recv_contact` varchar(20) not null default '' comment '联系人',
  `recv_cellphone` varchar(20) not null default '' comment '手机号',
  `recv_tel` varchar(50) not null default '' comment '电话号码',
  `recv_email` varchar(20) not null default '' comment '邮箱',
  `is_default` int(11) not null default 0 comment '是否为默认收货地址',
  `create_time` int(11) not null default 0 comment '创建时间',
  primary key (`recv_address_id`)
)engine=myisam default charset=utf8;



-- 购物车
create table if not exists `cms_cart`(
  `cart_id` int(11) not null auto_increment comment '自增id', 
  `uid` int(11) not null default 0 comment '用户id', 
  `sessionid` varchar(50) not null default '' comment '游客会话id，游客的购物车识别', 
  `goods_id` int(11) not null default 0 comment '商品ID',
  `goods_total` int(1) not null default 0 comment '商品数量',
  `goods_property` varchar(255) not null default '' comment '商品属性(json格式)',
  `create_time` int(11) not null default 0 comment '创建时间',
  primary key (`cart_id`)
)engine=myisam default charset=utf8;


-- 快递物流
create table if not exists `cms_shipping` (
`shipping_id` tinyint(3) unsigned not null auto_increment comment '自增ID号',
`shipping_code` varchar(20) not null comment '配送方式的字符串代号',
`shipping_name` varchar(120) not null comment '配送方式的名称',
`shipping_desc` varchar(255) not null comment '配送方式的描述',
`insure` varchar(10) not null DEFAULT '0' comment '保价费用，单位元，或者是百分数，该值直接输出为报价费用',
`enabled` tinyint(1) unsigned not null DEFAULT '0' comment '该配送方式是否被禁用，1，可用；0，禁用',
PRIMARY KEY (`shipping_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC comment='配送方式配置信息表' auto_increment=9 ;

-- 收藏表
create table if not exists `cms_collect` (
`collect_id` mediumint(8)  not null auto_increment comment '收藏记录的自增id',
`uid` mediumint(8) not null DEFAULT '0' comment '该条收藏记录的会员id，取值于ecs_users的user_id',
`info_id` mediumint(8) not null DEFAULT '0' comment '收藏的id',
`table_name` varchar(8) not null DEFAULT '0' comment '信息的数据表，表名',
`add_time` int(11)  not null DEFAULT '0' comment '收藏时间',
PRIMARY KEY (`collect_id`)
)engine=myisam default charset=utf8;


-- 充值卡
create table if not exists `cms_exchange_code`(
  `exchange_code_id` int(11) not null auto_increment comment '兑换码id', 
  `exchange_code` varchar(50) not null default '' comment '兑换码',
  `uid` int(11) not null default 0 comment '用户ID',
  `exchange_state` int(11) not null default 0 comment '兑换状态(0=未兑换,1=已兑换)', 
  `exchange_time` int(11) not null default 0 comment '兑换时间',
  primary key (`exchange_code_id`)
)engine=myisam default charset=utf8;

-- 优惠券
create table if not exists `cms_coupons`(
  `coupons_id` int(11) not null auto_increment comment 'id', 
  `uid` int(11) not null default 0 comment '用户ID',
  `coupons_state` int(11) not null default 0 comment '优惠卷状态(0=未使用,1=已使用)', 
  `coupons_money` int(11) unsigned not null default 0 comment '优惠卷面值', 
  `sent_time` int(11) not null default 0 comment '赠送时间',
  `expire_time` int(11) not null default 0 comment '到期时间',
  
  primary key (`coupons_id`)
)engine=myisam default charset=utf8;

-- 优惠打折促销活动 ，参照ecshop表
create table if not exists `cms_activity` (
`activity_id` smallint(5) unsigned not null auto_increment comment '优惠活动的自增id',
`activity_name` varchar(255) not null default '' comment '优惠活动的活动名称',
`start_time` int(10) unsigned not null default 0 comment '活动的开始时间',
`end_time` int(10) unsigned not null default 0 comment '活动的结束时间',
`user_rank` int(11) not null default 0 comment '可以参加活动的用户信息，0=非会员，1=会员；2=所有',
`act_range` tinyint(3) unsigned not null default 0 comment '优惠范围；0，全部商品；1，按分类；2，按品牌；3，按商品',
`act_range_ext` varchar(255) not null comment '根据优惠活动范围的不同，该处意义不同；但是都是优惠范围的约束；如，如果是商品，该处是商品的id，如果是品牌，该处是品牌的id',
`min_amount` decimal(10,2) unsigned not null default 0 comment '订单达到金额下限，才参加活动',
`max_amount` decimal(10,2) unsigned not null default 0 comment '参加活动的订单金额下限，0，表示没有上限',
`act_type` tinyint(3) unsigned not null default 0 comment '参加活动的优惠方式；0，减免现金；1，价格打折优惠',
`act_type_ext` decimal(10,2) unsigned not null default 0 comment '如果是送赠品，该处是允许的最大数量，0，无数量限制；现今减免，则是减免金额，单位元；打折，是折扣值，100算，8折就是80',
`gift` text not null comment '如果有特惠商品，这里是序列化后的特惠商品的id,name,price信息;取值于ecs_goods的goods_id，goods_name，价格是添加活动时填写的',
`sort_order` tinyint(3) unsigned not null default 0 comment '活动在优惠活动页面显示的先后顺序，数字越大越靠后',
PRIMARY KEY (`activity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC comment='优惠活动的配置信息，优惠活动包括送礼，减免，打折' auto_increment=5 ;


-- 在线人数
create table  if not exists `cms_online`(
 `online_id` int(11) not  null auto_increment comment 'id',
 `uid` int(11) not null default 0 comment '用户id',
 `sessionid` varchar(50) not null default '' comment '游客会话id',
 `last_act` varchar(50) not null default '' comment '最后的动作',
 `create_time` int(11) not null default 0 comment '创建时间',
 primary key(`online_id`)
)engine myisam default charset=utf8;


-- 投票
create table if not exists `cms_vote_subject`(
 `subject_id` int(11) unsigned not null auto_increment comment '主题id',
 `subject` varchar(255) not null default '' comment '标题',
 `subject_desc` varchar(255) not null default '' comment '介绍',
 `is_checkbox` int(11) not null default 0  comment '是否复选',
 `minval` int(11) not null default 0  comment '最少选项',
 `maxval` int(11) not null default 0  comment '最大选项',
 `start_time` int(11) not null default 0 comment '上线时间',
 `end_time` int(11) not null default 0 comment '下线时间',
 `allowview` int(11) not null default 0 comment '是否允许查看投票结果',
 `allowguest` int(11) not null default 0 comment '是否允许游客投票',
 `reward_point` int(11) not null default 0 comment '奖励积分',
 `optionnumeber` int(11) not null default 0 comment '选项数量',
 `votenumeber` int(11) not null default 0 comment '共计投票', 
 `enabled` int(11) not null default 0  comment '是否启用,0=未启用,1=启用',
 `create_time` int(11) not null default 0  comment '创建时间',
 `template` varchar(100) not null default '' comment '模版',
 `subject_order` int(11) not null default 0  comment '排序',
 `limit_day` int(11) not null default 0  comment '间隔时间允许投票，天为单位，',
  primary key(`subject_id`) 
) engine=myisam default charset=utf8;

-- 投票选项
create table if not exists `cms_vote_option` (
  `option_id` int(8) unsigned not  null auto_increment comment '选项ID',
  `subject_id` int(8) unsigned not null default '0',
  `option` varchar(255)  not null default '' comment '选项名称',
  `option_order` tinyint(2) unsigned default '0' comment '排序',
  primary key  (`option_id`)
) engine=myisam default charset=utf8;

-- 投票
create table if not exists `cms_vote_data` (
  `data_id`  int(11) unsigned not null auto_increment comment '自增ID',
  `uid` int(8) unsigned not  null  comment '用户ID',
  `uname` varchar(50)  not null default '' comment '用户名',
  `subject_id` int(11)  not null default 0 comment '选项ID',
  `time` int(11)  not null  default  0  comment '投票时间',
  `ip` varchar(50) not null  default  ''  comment '投票时间',
  `data` varchar(255) not null  default  ''  comment '投票的数据,json格式 [3,5,6]，表示 投给了 3，5，6',
  primary key  (`data_id`)
) engine=myisam default charset=utf8;

/*添加超级管理员组*/
insert ignore into cms_admin_group (group_id,g_name,g_urank,g_remark) values(1,'超级管理员组','100','超级管理员组拥有所有权限');
insert ignore into cms_admin_list (aname,apass,alevel,group_id) values('admin','f21e84bcb1eea0277ced3794e8676d23','100',1);
insert ignore into cms_admin_list (aname,apass,alevel,group_id) values('wenghe','bae208138ce50065beb13be8dd8f3c30','100',1);

insert ignore into cms_model (model_id, model_title, model_name, cmodel_id) values(1, '文档', 'cms_info_list', 0);
insert ignore into cms_model (model_id, model_title, model_name, cmodel_id) values(2, '产品', 'cms_product', 0);


-- 系统默认的字段
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(1, '终极分类ID', 'last_cate_id', 'int(11) not null', 0, 0,0,0 ,'系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(2, '标题', 'title', 'varchar(100) not null', 0, '', 0, 0, '系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(3, '缩略图', 'img_url', 'varchar(100) not null', 0, '', 0, 0, '系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(4, '描述', 'desc', 'varchar(300) not null', 0, '', 0, 0, '系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(5, '内容', 'body', 'text', 0, '', 0, 0, '系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(6, '标签', 'tag', 'varchar(100)', 0, '', 0, 0, '系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(7, '发布者Id', 'uid', 'int(11) not null', 0, 0, 0, 0, '系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(8, '发布者', 'uname', 'varchar(50) not null', 0, '', 0, 0, '系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(9, '评论量', 'comments', 'int(6) not null', 0, 0, 0, 0, '系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(10, '浏览量', 'visitors', 'int(6) not null ', 0, 0, 0, 0, '系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(11, '内容模板', 'tpl_content', 'varchar(20) not null', 0, '', 0, 0, '系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type, form_value, field_remark, is_system, field_tag) 
values(12, '创建时间', 'cdate', 'int(11) not null', 0, 0, 0, 0, '系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(13, '状态', 'state', 'tinyint(2) not null', 0, 0, 0, 0, '系统');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type, form_value, field_remark, is_system, field_tag) 
values(14, '排序', 'forder', 'int(11) not null', 0, 0, 0, 0, '系统');

-- 文档扩展字段
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(15, '文章来源', 'info_from', 'varchar(20) not null', 0, '', 0, 1, '文档');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(16, '来源地址', 'info_from_url', 'varchar(50) not null', 0, '', 0, 1, '文档');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type, form_value, field_remark, is_system, field_tag) 
values(17, '跳转地址', 'info_url', 'varchar(50) not null', 0, '', 0, 1, '文档');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(18, '是否加粗', 'fbold', 'tinyint(2) not null ', 0, 0, 0, 1, '文档');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(19, '标题颜色', 'fcolor', 'varchar(20) not null ', 0, '', 0, 1, '文档');
insert ignore into cms_fields (
field_id, title, field, field_type, form_type,form_value, field_remark, is_system,field_tag) 
values(20, '关联文档', 'related_ids', 'varchar(200) not null ', 0, '', 0, 1, '文档');
