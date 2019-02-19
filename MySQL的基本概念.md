
## 重点

	1. 数据库优化
	2. 数据库索引怎么用
	3. 什么时候索引会失效
	4.MySQL的四种事务隔离级别


## MySQL的四种事务隔离级别

三、MySQL事务隔离级别
	-----------------------------------------+
	事务隔离级别 +	脏读 +	不可重复读 +幻读 |
读未提交（read-uncommitted）	是	是	是	 |
不可重复读（read-committed）	否	是	是
可重复读（repeatable-read）	否	否	是
串行化（serializable）	否	否	否

## TRUNCATE [TABLE] tblname;
	该语句用于完全清空指定表，但是保留表结构，包括表中定义的Partition信息。从逻辑上说，该语句与用于删除所有行的DELETE FROM语句相同。执行TRUNCATE语句，必须具有表的删除和创建权限。它属于DDL语句。

	TRUNCATE TABLE语句与DELETE FROM语句有以下不同：

	删减操作会取消并重新创建表，这比一行一行的删除行要快很多。
	TRUNCATE TABLE语句执行结果显示影响行数始终显示为0行。
	使用TRUNCATE TABLE语句，表管理程序不记得最后被使用的AUTO_INCREMENT值，但是会从头开始计数。
	TRUNCATE语句不能在进行事务处理和表锁定的过程中进行，如果使用，将会报错。
	只要表定义文件是合法的，则可以使用TRUNCATE TABLE把表重新创建为一个空表，即使数据或索引文件已经被破坏。

## 分组
	分组概念： 将具有相同某个特点的东西放到一起。

## 分组语法：	group by 字段

	group by语法可以根据给定字段对查询结果进行分组统计，相同属性的数据为一个组；通常，在每组中通过聚合函数来可以计算组中最大，最小等。

	a. 分组使用于查询操作(DQL)

	b. 语法
		select 字段列表  from 表名  where子句 group by子句 having子句  order子句   limit子句

	c. group by 必须出现在where 之后， order by 之前。

	注意：
		除聚集计算语句外，SELECT语句中的每个列都必须在GROUP BY中给出

			//错误，由于name字段没有写到group by之后
           select count(id),name,sex from user group by sex;
           
           //正确写法
           select count(id),name,sex from user group by sex,name;

## 聚合函数

	1. max()  求最大某字段最大的值

		select max(字段) from 表名

	2. min() 求某字段最小值

		select min(字段) from 表名

	3. sum() 求某字段总和

		select sum(字段) from 表名

	4. avg() 返回某字段平均值

		select avg(字段) from 表名

	5. count() 返回某个字段的值的行数

		select count(字段) from 表名

		一般用以统计一个表中有多少条数据 
			select count(*) from 表名
		
	6. group_concat() 将分组的结果拼接成字符串
	
		select group_concat(字段1,字段2,...) from 表名

### having
	
	having字句是对分组(group by)的结果再进一步的处理（过滤）；having子句必须写在group by之后。
		
		select 字段 from 表名  where  where条件  group by 分组条件  having  having条件

		例：select dept,count(*) from staff  group by dept having count(*) > 2;


********************************************************************************


## 多表联查
	使用多表联查的场景，有些时候数据在不同的表中，这个时候我们就需要用到mysql中的多表联查。
	
## 多表联查概念
	 将两个或两个以上的表按某个条件连接起来，从而选取需要的数据。多表联查是同时查询两个或两个以上的表时使用的。

## 多表联查分类

	1. 内连接查询

		内连接查询使用关键字join 或 cross join 或 inner join，
		然后通过 on 连接表与表之间的条件

			注意： 内连接查询只能查询出两个表符合条件的数据
			语法:
				select 字段1,字段2,... 
				from 表名1 inner join 表名2 
				on 表1.id = 表2.uid

	2. 外连接查询

		a. 左外连接

			左外连接使用关键字left join,
			然后通过on连接表与表之间的条件

			注意：left join 会查询出left join左边的表所有的数据，即使右表没有匹配
			语法：
				SELECT 字段,字段1,... 
				FROM table_name1
				LEFT JOIN table_name2 
				ON table_name1.column_name=table_name2.column_name

		b. 右外连接

			右外连接使用关键字right join,
			然后通过on连接表与表之间的条件

			注意：  即使左表中没有匹配，也从右表返回所有的行
			语法:
				SELECT 字段,字段1,....
				FROM table_name1
				RIGHT JOIN table_name2 
				ON table_name1.column_name=table_name2.column_name

	3. 交叉连接(cross join):交叉连接用来产生笛卡尔集
	
		select 字段列表 from 表名1  cross join 表名2  on 表1.字段=表2.字段 where ...

### 多表联查总结

	1. 以后多表查询可以使用哪些

			a. 左连接
			b. 内连接
			c. 先查询一张表，然后遍历查询出来的表的数据，去查另外一张表


		以上多表查询方案最优的方案：

			最好的是c, 如果一个网站的并发数高，那么选择c方案。

			因为在高并发的场景下，多表查询会导致数据库压力大。


			在高并发网站中，多表查询是要被减少的，能不用就不用。 

			foreach : 应用层    php

			数据库层： 性能瓶颈往往都是出现在数据库上，而不是php上。  web网站中瓶颈就是数据库



************************************************************

# MySQL子查询

* 子查询定义

>  子查询就是把一个查询嵌套在另一个查询中。

> 子查询可以包含普通select可以包括任何子句，比如：distinct,group by, order by,limit,join等

* 注意

 1. 子查询先执行里面的SQL语句，再执行外面SQL语句。
 2. 子查询的效率比较低，一般建议使用join替换子查询
 3. 子查询时，MySQL需要为内层查询语句的查询结果建立一个临时表。然后外层查询语句再临时表中查询记录。查询完毕后，MySQL需要撤销这些临时表。因此，子查询的速度会受到一定的影响。如果查询的数据量比较大，这种影响就会随之增大。


* 使用子查询原则

 1. 一个子查询必须放在圆括号中
 2. 将子查询放在比较条件的右边，这样可以增加SQL可读性


## 子查询分类

	1. where 型子查询
		where型子查询把内层查询结果当作外层查询的比较条件

   	例如：

	 	SELECT * FROM user WHERE id  in (SELECT uid FROM user_detail );


	2. exists/not exists型子查询

  	EXISTS关键字表示存在。使用EXISTS关键字时，内层查询语句不返回查询的记录，而是返回一个真假值，如果内层查询语句查询到满足条件的记录，只要子查询中至少返回一个值，则EXISTS语句的值就为True。就返回true，否则返回false。当返回的值为true时，外层查询语句将进行查询，否则不进行查询


	3. 使用IN/NOT IN的子查询

		SELECT * FROM user WHERE id not in (SELECT uid FROM user_detail );

	4. 使用比较运算符的子查询 ( = >  <  >=  <=  !=   )

		SELECT * FROM user WHERE id  = (SELECT uid FROM user_detail limit 1 );


****************************************************************


## MySQL引擎
	
	数据表的数据最终还是要存放到硬盘

	MySQL数据库的数据一般是放在mysql的安装目录下的data目录下

## 表引擎区别

	1. MySQL常用表引擎有
		
		MyISAM | InnoDB

	2. MyISAM与InnoDB区别(面试题)

		a. 支持事务情况不同
			
			MyISAM不支持事务，InnoDB支持事务

		b. 锁机制不同

			MyISAM只支持表锁，InnoDB支持行锁、表锁

		c. 存储方式不同

			MyISAM默认会产生三个文件，扩展名为
				* .frm文件存放表结构
				* .MYD存放表的数据
				* .MYI存放表的索引
			
			InnoDB索引与数据都是放到一个文件中，.frm存放数据结构，InnoDB的数据、索引是放在ibdata1文件中

		d. 查询速度不同

			一般认为是MyISAM引擎查询速度快，但是在MySQL5.6之后，Innodb与MyISAM查询速度相差无几。

	 总结：一般认为MyISAM查询速度相对Innodb快，但在MySQL5.6之后常用的引擎是Innodb，原因是MyISAM引擎不被维护了，并且myisam不支持事务，而且只支持表锁，在一些高并发写场景容易发生锁冲突问题。

## 事务操作

* 事务概念

> *事务就是将多个操作看成一个整体，这个整体中所有操作都执行成功，事务才成功。只要整体中的任意一个操作失败，事务就失败。

> 事务(transaction):事务可以由一个或多个SQL语句组成，这写SQL语句是一个独立的单元，这个单元是一个整体是不可分割的。如果事务中的某一个语句执行失败，整个事务就会回滚到最初状态。因此，只有事务中所有语句都被执行成功，这个事务才会执行成功。


> 可以通过转账来理解事务，只有A成功转了，然后B成功收到了钱，才能算转账成功。当转成功，但是没有收到，应该将钱返回给A。


* 事务的ACID属性：

  事务必须有ACID属性
  
    原子性 Atomicity
    一致性 Consistency
    隔离性 Isolation  也叫孤立性
    持久性 Durability

    原子性: 原子型意味着意味着每个事务都必须被认为是一个不可分割的单元。整个事务中的所有操作，要么全部完成，要么全部不完成。

    例如：买卖。只有买与卖都成功，才成功。不能说只有买或者只有卖

    一致性： 事务必须始终保持系统处于一致的状态。

    例如：对于买卖双方，当买卖失败了，双方就都应该一致认为失败了，当买卖成功了，双方都一致认为买卖成功了。

    隔离性：每个事务对于数据库执行来说都是不可拆分的最小单元，所以每个事务都有着自己独立的副本，由数据库进行执行与操作。

    例如：A与B的买卖，C与D的买卖互不干扰。

    持久性：事务在运行成功之后，数据会持久保存到数据库上。

* 事务注意的问题

   	MySQL数据库MyISAM不支持事务，innodb才支持。
	
	事务注意的问题： 1、 事务对查询不起作用。 2、事务只对写(增删改)生效  3、 事务对表结构修改不生效

### mysql的事务处理语法

	//开启一个事务
	mysql> begin;

	//提交事务
	mysql> commit;

	//当有操作失败就回滚事务
	mysql> rollback;

	写到begin与commit 或  begin与rollback之间的sql语句就是一个事务。
	另外开启事务也可以使用  start    transaction;


## 锁机制

	1. 行锁

		发生时机：无论是增删改查都会产生行锁

		行锁：会将一行或者多行锁住

	2. 表锁

		发生时机： 无论是增删改查都会产生表锁。

		表锁： 锁住的是整张表

	无论是行锁、表锁。关注是影响范围。 

	3. 共享锁(读锁)

		发生时机： 当进行读操作时，产生的就是共享锁(读锁)。

		共享锁的特点： 1、不阻塞其他读  2、会阻塞其他写操作

	4. 排他锁(写锁)

		发生时机： 当进行写操作(增删改),产生的是排他锁(写锁)

		特点： 阻塞其他写、读


### 锁机制的理解

	表锁、行锁其实就是可以理解成影响范围。
	排他锁、共享锁其实就是可以理解成发生时机。

	具体一点：

		1.  我现在正在对MyISAM进行插入操作

			会产生排他锁，并且排他锁影响范围是整个表。

		2. 我现在正在对innodb进行插入操作

			 会产生排他锁，但是这个排他锁的影响范围是一行、或者某几行

		3. 我现在正在对innodb引擎的表进行查询操作

			会产生共享锁，共享锁影响范围是一行、多行

		4. 我现在正在对myisam引擎的表进行查询操作

			会产生共享锁，共享锁影响范围是整个表。

			意味着其他人可以一起读，但是不能改。


********************************************************************************

### 如何防止SQL注入(面试题)

	1. 使用预处理功能来操作数据库
	2. 过滤用户提交数据中的特殊的字符

# MySQL预处理

* 概念

 > 预处理的意思是先提交sql语句到mysql服务端，执行预编译，客户端执行sql语句时，只需上传输入参数即可，这点和存储过程有点相似。


* 预处理工作原理
    
    1. 预处理：创建 SQL 语句模板并发送到数据库。预留的值使用参数 "?" 标记 。例如：INSERT INTO MyGuests VALUES(?, ?, ?)

    2. 数据库解析，编译，对SQL语句模板执行查询优化，并保存起来

    3. 执行：最后，将应用绑定的值传递给参数（"?" 标记），数据库执行语句。应用可以多次执行语句，如果参数的值不一样。


* 预处理优点

  1. 预处理的执行效率相对于一般的sql执行操作，效率比较高,因为第二次执行只需要发送查询的参数，而不是整个语句 

  2. 预处理可以防止sql注入，因为预处理将sql语句与数据分开发送。

  
### 注意：

	1. 预处理功能是MySQL数据库本身就支持的。PDO只不过是调用了数据库的方法。要是MySQL不支持预处理，PDO就算有了预处理方法，也不能操作。

	2. 预处理只能针对值

	3. 字段、表名、SQL关键字都不能使用占位符

		占位符：
				//问号占位符
				?
				//冒号占位符 
				:id id是随便写


### MySQL的预处理语法

	  //新增一个预处理语句
	  prepare 预处理名称 from  'sql语句';
	
	  //执行预处理语句
	  execute 预处理名称 [ using @变量名 [, @变量名1 ] ...];
	
	  //删除预处理语句
	  drop prepare 预处理语句


****************************************************************************

## MySQL 权限

* 登录到mysql数据库：

	mysql -u用户名 -p[密码] -h你要登录的数据库服务器Ip

* MySQL权限表：

	mysql库里面user表

* 给MySQL授权

	//查询帮助手册
	mysql> ? grant@
	
	//MySQL授权语法
	mysql> grant 权限 on 库名.表名 to '新的用户名'@'IP' identified by '密码';

	//一个完整的例子, 新增一个jack用户，密码是123456,这个用户只能从192.168.17.1登录
	// *.* 可以操作所有的数据库，所有的表, lamp.* 只能操作lamp库下的所有表, all所有权限 
	mysql> grant all privileges on *.*  to 'jack'@'192.168.17.1' identified by '123456';
	mysql> GRANT ALL PRIVILEGES ON *.* TO 'myuser'@'%' IDENTIFIED BY 'mypassword' WITH GRANT OPTION
	
* 修改用户密码
	
	set password for '用户名'@'IP' = password(新密码);

* 删除用户

	drop user '用户名'@'IP'

* 查看用户的权限

	grants for '用户名'@'IP'


## 约束

	约束条件：对字段进行一些约束用的

	1. null、not null，插入值时没有在字段中插入一个值，默认为null。
   		指定not null必须在插入值时在该字段中插入一个值。如果不给插入一个值那么为”空“

    2.default 默认值在不插入该字段时默认插入的值。

* 整型的约束条件：

	1. zerofill表示0填充。一般和整型后面设定的宽度一起使用，如果数值长度小于指定的长度那么将会在前面补充相对应的0进行填充。

	2. unsigned（无符号）如果要在字段里面保存非负数，或者较大上限的值时可使用该约束条件，将从0开始，需要在字段类型后面紧跟着定义unsigned

	        mysql> create table t9(
	        -> id int unsigned not null,
	        -> name char(32)
	        -> );

	3. auto_increment，自增，在产生一个唯一的标识或顺序值的时候，可以利用这个约束条件。这个约束条件只能用于整数类型，值一般从1开始。每行加1，插入一个null到一个auto_increment列时，MySQL将插入一个比出现过的最大值+1的值。一个表中只能有一个auto_increment列，并且必须定义为primary key或unique才能够使用

	        mysql> create table t1(
	        -> id int unsigned auto_increment primary key,
	        -> name char(32)
	        -> );



## 索引

	索引概念：

		在关系型数据库中，索引是一种与表有关的数据库结构，索引可以使得对应表的查询速度更快。

		索引相当于书的目录，可以根据目录中的页码快速找到所需的内容

	索引的作用：加快查询速度

	索引缺点：1.占用磁盘空间	2.导致更新(增删改)数据速度变慢    3.索引是有成本的

	网站：看重查、还是看重写速度？
			
		一般网站强调读得快。 

### 索引分类

	1. 唯一索引：unique [key]
		
		a. 唯一索引意味着字段中的值不能有相同的值
    	b. 唯一的索引所在的列不能为空字符串
    	c. 唯一索引所在的列可以为null

	2. 主键索引：primary key
			
		和唯一索引类似，也是唯一的，一个表只能有一个主键
		主键不能为空
		

	3. 普通索引：index [key]

		最基本的索引，没有任何限制

	4. 全文索引：fulltext [key]

		全文索引是不支持中文，Innodb在MySQL5.6之前，不支持全文索引,在MySQL5.6之前，只有MyISAM才支持全文索引。

		在MySQL5.6(包含)之后Innodb支持全文索引

	5. 联合索引
		给多个字段添加同一个名字的索引。

* 如何创建索引

	1. 建表的时候创建索引

		create table user(
			id int auto_increment,
			password varchar(255) not null,

			name varchar(100) not null,

			//添加主键索引
			primary key(id),

			//添加普通索引 in_pass是索引名字，不指定索引名默认字段名就是索引名
			index in_pass(password),
			
			//添加唯一索引
			unique in_name(name)				
		)engine=innodb default charset=utf8;

	2. 表建好之后，如何通过修改表结构来操作索引

		alter table 表名  add 索引类型 索引名字 (字段);

	3. 查看一个表中有什么索引

		show index from 表名\G;

*删除索引

  	//删除普通索引与唯一索引与全文索引
  		
	alter table 表名  drop index 索引名
	
    //删除主键索引
  	
	alter table 表名 drop primary key;
	
	注意：如果主键的字段上面有自增（auto_increment）那么需要先将auto_increment去掉。然后再删除。

	alter table 表名 change 自增的列 [自增的列] 类型

	mysql> alter table t6 change id uid int primary key;


* 索引到底有没有使用上？如何知道一个索引是否被使用了？

	索引不是创建好之后，就会自动使用上。 要想使用上索引，就得会一些技巧。

* 如何看一条查询语句是否用上索引

	desc SQL语句;

	explain SQL语句;


	mysql> desc select * from account\G;
*************************** 1. row ***************************
           id: 1
  select_type: SIMPLE
        table: account
         type: ALL     //ALL 全表扫描
possible_keys: NULL    // 可能会使用上的索引
          key: NULL    // 实际上用上的索引
      key_len: NULL    // 索引的长度
          ref: NULL    
         rows: 13      //扫描行数
        Extra: 



* 如何写SQL语句才会用上索引

	1. 索引只会对查询生效
	
	2. 将有索引的字段写在where条件后，就可以使用上索引了


* 应该给哪些字段添加索引

	1. 不能给所有的字段添加索引
	
	2. 应该给经常在where条件后的字段添加索引
	
	3. 在order by/group by之后的字段应该添加索引


* 哪些字段不能添加索引(重点)

	1. 字段类型大的字段不能添加索引

	2. 不常作为where条件的字段不能添加索引


* 索引会失效

	1. like会导致索引失效, like "%aa"以%开头肯定会失效。
		
		sphinx不支持中文分词,coreseek基于sphinx开发的。coreseek支持中文分词
		更多全文搜索引擎看这里：

		https://www.zhihu.com/question/19583321

		中文分词：就是将一句话拆成多个词语

	2. 使用MySQL函数来修饰字段来导致索引失效

			select * from user where md5(id) = 1;


	3. select * from user where name = 123; 类型不对用不上索引