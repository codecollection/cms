-- 微信关注用户表
create table if not exists `weixin_user`(
 `user_id` int(11) unsigned not null auto_increment comment '自增id',
 `open_id` varchar(200) not null default '' comment '发送方帐号openid',
 `cdate` int(11) not null default 0 comment '创建时间',
 `status` tinyint(2) not null default 1 comment '是否关注或取消，1=关注，2=取消',
 primary key (`user_id`),
index `open_id` (`open_id`)
)engine=myisam default charset=utf8 comment '微信关注用户表';

-- 自动回复表
create table if not exists `weixin_reply`(
 `reply_id` int(11) unsigned not null auto_increment comment '自增id',
 `keyword` varchar(500) not null default '' comment '接受到的匹配信息',
 `type` tinyint(2) not null default 1 comment '回复类型，1=文本信息，2=图片信息，3=语音信息，4=视频信息，5=音乐信息，6=图文信息',
 `cdate` int(11) not null default 0 comment '创建时间',
 `content` text not null default "" comment '回复内容',
 `mediaId` varchar(200) not null default '' comment '图片，或者语音,视频的素材管理id',
 `title` varchar(1000) not null default '' comment '视频标题',
 `description` varchar(2000) not null default '' comment '视频描述',
 `lists` varchar(1000) not null default '' comment '图文信息列表 json格式：{{"info_id":1,"model_id":1},{"info_id":1,"model_id":1},{"info_id":1,"model_id":1}}',
 primary key (`reply_id`),
index `keyword` (`keyword`)
)engine=myisam default charset=utf8 comment '微信自动回复配置表';

