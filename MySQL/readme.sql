 -- 连接数据库
	mysql -uroot -p -hlocalhost
		-u user 用户名(root)
		-p password 密码(默认没有密码)
		-P Port 端口 (3306|3307)
		-h host 服务器的地址(localhost|127.0.0.1)

	例：mysql -uroot -p123 -hlocalhost -P3306
	
-- 退出当前客户端
	\q | exit | quit

-- 基本操作
	\G 将结果立起来
	\c 取消当前行命令 ctrl+c

-- 库的相关操作
	-- 查看所有数据库
		show databases;

	-- 创建数据库
		create database `库名` default charset=utf8;
		create database `库名`;
		create database if not exists `库名`;

	-- 查看建库语句
		show create database `库名`;

	-- 删除数据库
		drop database `库名`;
		drop database if exists `库名`;

	-- 选择数据库
		use `库名`;


-- 表的相关操作
	-- 查看所有表
		show tables;

	-- 建表
		create table `表名`(
			id int, 
			username varchar(50)
		);

	-- 查看建表语句
		show create table `表名`;

	-- 查看表结构
		desc `表名`;

	-- 删除表
		drop table `表名`;



-- 数据的相关操作
	-- 添加数据
		insert into `lyb` values(5, '黎总', '全世界我最帅', 'f.gif', '123456789');

		insert into `stu`(username, phone, pwd) values('黎秘', 13123389437, 123);

	-- 查看数据
		select * from `lyb`;

	-- 修改数据
		update `表名` set 字段1='值1'[, 字段2='值2'] where 条件;

		例：
		update `lyb` set content='全世界我最丑' where id=5;

	-- 删除数据
		delete from `lyb` where id=1;


数据类型
	整型
		int 占4个字节
			有符号：正负20多亿
			无符号：0~40多亿  unsigned
		tinyint 占1个字节
			有符号：-128 ~ 127
			无符号：0~255

		smallint 占2个字节
		mediumint 占3个字节
		bigint 占8个字节

	浮点型
		float(6,2)
			表示共6位，有2位是小数
		decimal(10,2)
			表示共10位，有2位是小数

	字符串
		varchar(32)
			不定长
			abc 	3+1
		char(32)
			定长
			abc     32
			存密码：md5的密码固定为32
			手机号：固定位11位
			邮编：6位

		text 超大文本

	总结：
		int 4个字节  正负20多个亿或者0~40多个亿
		tinyint 1个字节 正负127左右 或者 0~255

		decimal(10,2) 最多10位，其中有两位小数：99999999.99

		char(32) 定长
		varchar(255) 不定长 length + 1


建表实例：
	create table t6(
    -> id int unsigned primary key auto_increment,
    -> name varchar(50) not null unique,
    -> age tinyint,
    -> sex tinyint not null default 0 comment '0:女 1:男 2:黎总'
    -> )engine=innodb default charset=utf8;



