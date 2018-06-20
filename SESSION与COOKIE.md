# 会话控制

	session/cookie 就是会话控制

* 为什么需要会话控制

	因为HTTP协议是无状态协议，所以需要session与cookie区分用户

session与cookie区别

	1. 存放位置不同

		cookie是存放在客户端的

		session默认一般是存放在服务器的文件中的

	2. 安全性不同

		由于cookie是存放在客户端浏览器的，cookie可能被用户篡改，相对不安全。

		session是默认存放在服务器的文件中的，用户很难修改，相对安全。

	3. 存放数据大小不同

		cookie有大小限制，一般每个网站写入cookie大小是有限制的

		session理论上是无限制的

session与cookie联系（重点）

	正因为cookie与session之间有关系，才可以区分用户

	session产生的sessionid默认是通过保存在cookie中

	如果请求头中的cookie中有sessionid，session_start()就不会产生新的sessionid，只会根据cookie中的sessionid找到对应session文件的数据

	如果请求头中的cookie没有sessionid，session_start()就会重新生成一个sessionid，并且创建一个新的session文件，然后在响应回去的时候将sessionid写入到cookie中


* 如果浏览器禁用cookie，session还能用吗？怎么办？

	可以将数据放到session，但是无法读取出来

	怎么办对策:
				1. 提示用户开启cookie(常见做法)
				2. 将sessionid放到每一个URL中(不常见)

* 购物车数据如何长时间保存，而不是关闭浏览器就消失

	解决方法： 将存放到cookie中的那个sessionid对应的那个cookie的有效期设置长一些

* 如果搭建应用服务器集群，session使用会遇到什么问题？怎么办？

	session无法在不同应用服务器之间共享数据

	解决方案：将session保存到数据库、memcache、redis


* 如何将session数据保存在redis中

	修改php.ini

		session.save_handler = redis
		
		session.save_path = "tcp://127.0.0.1:6379"
		
		重启apache