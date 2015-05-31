-- 书籍表

create table if not exists `cms_book` (
 `book_id` int(11) unsigned not null auto_increment,
 `name` varchar(100) not null default '' comment '书籍名称',
 `desc` varchar(500) not null default '' comment '书籍描述',
 `authors` varchar(100) not null default '' comment '作者，多个用,分开',
 `press` varchar(200) not null default '' comment '出版社',
 `press_date` int(11) not null default 0 comment '出版时间',
 `owner_recommend`  varchar(800) not null default '' comment '所有者推荐',
 `content_recommend`  varchar(800) not null default '' comment '内容推荐',
 `author_desc`  varchar(800) not null default '' comment '作者简介',
 `owner_id`  varchar(800) not null default '' comment '所有者',
 primary key(`book_id`)
)engine=myisam default charset=utf8;

-- 书籍和用户关系
create table if not exists `cms_user_book` (
 `ub_id` int(11) unsigned not null auto_increment,
 `user_id` int(11) not null default 0 comment '用户ID',
 `book_id` int(11) not null default 0 comment '书籍ID',
 `cdate` int(11) not null default 0 comment '创建时间',
 primary key(`ub_id`)
)engine=myisam default charset=utf8;