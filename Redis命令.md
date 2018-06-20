# redis-cli

# key 代表键		value 代表值

## 其他命令

	这些命令不属于任何类型，也就是说所有类型都可以不使用。

	1. 获得符合规则的键名列表

		keys pattern

        //patten也就是说可以写正则

		例如： keys *  可以查询当前数据库所有的键

   2. 判断一个键是否存在

		exists key

   3. 删除键

        del key [key ...]

   4. 获得键的数据类型

        type key

   5. 清空数据库中所有数据

        flushdb

   6. 切换数据库 redis共有16个数据库，库名是0-15

        //切换到1这个数据库
        select 1

		//切换到2这个数据库
        select 2	



## 字符串类型常用命令

	1. set key value
		
		将字符串值 value 关联到 key 。

		如果 key 已经持有其他值， SET 就覆写旧值，无视类型。

	2. get key

		返回key所关联的字符串值。

		如果 key 不存在那么返回特殊值 nil
	 
	3. mget key [key ...]

		一次获取多个key的值。

		如果给定的 key 里面，有某个 key 不存在，那么这个 key 返回特殊值 nil 。因此，该命令永不失败。

	4. mset key value [key value ...]

		同时设置一个或多个key-value（键值）对。

		如果某个给定 key 已经存在，那么 MSET 会用新值覆盖原来的旧值，如果这不是你所希望的效果，请考虑使用 MSETNX 命令：它只会在所有给定 key 都不存在的情况下进行设置操作。
	
	5. setnx key value
	
		将key的值设为value，当key存在设置失败；当key不存在设置成功。

	6. setex key seconds value

		将值 value 关联到 key ，并将 key 的生存时间设为 seconds (以秒为单位)。

		如果 key 已经存在， SETEX 命令将覆写旧值。

	7. strlen key

		返回key所储存的字符串值的长度。

		当 key 储存的不是字符串值时，返回一个错误
		
	8. append key value

		如果 key 已经存在并且是一个字符串， APPEND 命令将 value 追加到 key 原来的值的末尾。

		如果 key 不存在， APPEND 就简单地将给定 key 设为 value ，就像执行 SET key value 一样。

	9. incr key

		将key中储存的数字值加1

	10. incrby key increment

		将key所储存的值加上增量increment
		例 incrby key 8	//给key的值相加8

	11. decr key

		将key中储存的数字值减1

	12. decrby key increment

		将key所储存的值加上增量increment
		例 incrby key 8	//给key的值减去8

	13. getset key value

		将已存在key的值设为 value ，并返回 key 的旧值(old value)。

		当key不存在 或 key存在但不是字符串类型时，返回一个错误

	14. incrbyfloat key increment

		将key所储存的值加上浮点数增量increment

		如果 key 不存在，那么 INCRBYFLOAT 会先将 key 的值设为 0 ，再执行加法操作
		
	15. msetnx key value [key value ...]

		同时设置一个或多个 key-value（键值）对，当所有给定key都不存在时才生效

		即使只有一个给定 key 已存在， MSETNX 也会拒绝执行所有给定 key 的设置操作。

	16. psetex key milliseconds value

		这个命令和 SETEX 命令相似，但它以毫秒为单位设置 key 的生存时间，而不是像 SETEX 命令那样，以秒为单位




## Hash(哈希表)类型常用命令

	1. Redis的hash类型是一个string类型的field(字段、域)和value(值)的映射表。

	2. Hash特别适合用于存储对象(属性、属性值)。相对于将对象的每个属性存成单个string类(一个字段只能有一个值)。

	3. 将一个对象存储在Hash类型中会占用更少的内存，并且可以更方便地存取整个对象信息。


	//设置一个key，这个键有一个字段，这个字段对一个值
	* hset key 字段 value

		将哈希表key中的字段的值设为value。
		
		如果字段已经存在于哈希表中，旧值将被覆盖。


	//获取key某个字段的值
	* hget key 字段

		返回哈希表 key 中给定域 field 的值。


	//一次获取key的多个字段的值
	* hmget key 字段1 [字段2 ...]

		返回哈希表 key 中，一个或多个给定域的值。


	//设置key，同时设置一个或多个（字段-值）对
	* hmset key field value [field value ...]
	
		同时将多个 field-value (域-值)对设置到哈希表 key 中。

		此命令会覆盖哈希表中已存在的域。


	//设置key中字段field的值为value，当字段field不存在时设置成功，若field已经存在则无效。
	* hsetnx key field  value

		将哈希表 key 中的域 field 的值设置为 value ，当且仅当域 field 不存在。

		若域 field 已经存在，该操作无效。


	//一次性获取到key中所有的字段对应的值
	* hgetall key

		返回哈希表 key 中，所有的域和值。

	
	//一次性获取到key的所有字段
	* hkeys key

		返回哈希表 key 中的所有域


	//一次性获取到key的所有的字段的值
	* hvals key

		返回哈希表 key 中所有域的值。


	//将key的字段的数字值加上 增量
	* hincrby key 字段 increment(增量)

		为哈希表 key 中的域 field 的值加上增量 increment 。

		增量也可以为负数，相当于对给定域进行减法操作。

		如果 key 不存在，一个新的哈希表被创建并执行 HINCRBY 命令。

		如果域 field 不存在，那么在执行命令前，域的值被初始化为 0 。


	//将key的字段的数字值加上浮动数增量
	* hincrbyfloat key 字段 increment(增量)

		为哈希表 key 中的域 field 加上浮点数增量 increment 


	* hlen key

		返回哈希表 key 中域的数量。

	
	//返回key的字段对应值的字符串长度
	* hstrlen key 字段

		返回哈希表 key 中， 与给定域 field 相关联的值的字符串长度（string length）。

		如果给定的键或者域不存在， 那么命令返回 0 。


	* hdel key 字段1 [字段2 ...]

		删除哈希表 key 中的一个或多个指定域，不存在的域将被忽略


	//判断key中的字段是否存在
	* hexists key 字段

		查看哈希表 key 中，给定域 field 是否存在。

		返回值：
			如果哈希表含有给定域，返回 1 。
			如果哈希表不含有给定域，或 key 不存在，返回 0 。



## 集合(set)

集合的操作： 交集、并集、差集

集合元素特点： 
	将一个或多个 member（元素） 元素加入到集合 key 当中，已经存在于集合的 member 元素将被忽略。

	//给集合添加一个或多个元素
	sadd 集合名 元素1 [元素2 ...]

	//查看集合中所有的元素
	smembers 集合名

	//删除集合中的某个或对个元素
	srem 集合名 元素1 [元素2 ...]

	//求两个以上集合的交集
	sinter 集合名1 集合名2 [集合名3 ...]

	//求差集
	sdiff 集合名 [集合名1 ...]

	//求并集
	sunion 集合名 [集合名1 ...]

	//判断某个元素是否在集合中
	sismember 集合名 元素

## list类型

* 列表类型内部是使用双向链表实现的,所以列表两端添加元素是非常快的，获取越接近两端的元素速度就越快

* 通过列表特点特点可以模拟栈、队列

	lpush  在左边放元素

	lpop  在左边取元素

*栈
	lpush 与 lpop 结合使用就是栈

	rpush 与 rpop 结合使用也是栈


*队列

	lpush 与 rpop 结合使用就是队列

	rpush 与 lpop 结合使用也是队列



栈特点： 先进后出

	为什么栈是先进后出，因为栈只有一个出口。

队列特点： 先进先出




# 更多命令请参考： http://redisdoc.com/