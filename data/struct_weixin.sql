-- 微信关注用户表
create table if not exists `weixin_user`(
 `user_id` int(11) unsigned not null auto_increment comment '自增id',
 `open_id` varchar(100) not null default '' comment '发送方帐号openid',
 `cdate` int(11) not null default 0 comment '创建时间',
 `status` tinyint(2) not null default 1 comment '是否关注或取消，1=关注，2=取消',
 primary key (`user_id`),
index `open_id` (`open_id`)
)engine=myisam default charset=utf8 comment '微信关注用户表';

