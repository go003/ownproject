
##Linux开启和关闭MySQL

	关闭 /usr/local/mysql/bin/mysqladmin -uroot -p shutdown

	开启 /usr/local/mysql/bin/mysqld_safe --user=mysql &

Centos操作如何设置IP地址 

	Linux操作系统一般是不安装图形化界面
	
	1. 通过setup命令设置IP
		$ setup
	2. 在出现的界面中，进行以下操作
		Network => Device => eth0 
	3. 重启网卡
		$ service network restart

## 网络命令

	1. 查询Linux本机网络信息
		ifconfig

	2. 设置临时IP地址,重启后失效
		ifconfig 网卡名 IP

		ifconfig eth0 192.168.17.88
	3. ping	测试网络连通性
		
		ping  -c  次数  ip		探测网络通畅

## Linux的基本命令
	1. ctrl + c		强制停止运行
	2. ctrl + l		清屏
	3. Tab          补全功能
	4.  |           管道符
	5. reboot		重启
	6. init 0 或	 shutdown  -h  now	关机
		提示：服务器一般不关机


## Linux与window操作系统不同

	1. Linux严格区分大小写
	2. Linux没有C，D盘,Linux所有文件、目录都在/  (根目录下)


## 常用命令
	命令的格式：
	命令 [选项] [参数]
### ls	list显示目录下内容

	ls -l	长格式显示,可简写为：ll

	ls -a	显示所有文件(包含隐藏文件)

	ls -al	

	ls -hl	文件大小显示为常见大小单位(k|M|G)

	ls -d	显示目录本身，而不是里面的子文件



### 目录操作命令

* cd	切换所在目录

		cd		回到登录用户家目录

		cd  -	进入上次操作目录

		cd  ..	进入上一级目录

* linux常见目录

		/			根目录
		/bin		命令保存目录（普通用户就可以读取的命令）
		/boot		启动目录，启动相关文件
		/dev		设备文件保存目录
		/etc		配置文件保存目录
		/home		普通用户的家目录
		/mnt		系统挂载目录
		/media		挂载目录
		/root		超级用户的家目录
		/tmp		临时目录
		/sbin		命令保存目录（超级用户才能使用的目录）
		/proc		直接写入内存		
		/usr		系统软件资源目录
		/var		系统相关文档内容
			/var/log/		系统日志位置 

* 创建目录

		mkdir 目录名
		mkdir -p	 /root/a/b/c/d	递归创建目录
		
* 删除

		rm  -rf  文件/目录
			-r  删除目录
			-f	强制

### 文件操作命令

* 创建空文件

		touch 文件名

* 查看文件内容

		cat 文件名
		more 文件名	分屏显示文件内容
			空格向下翻页		b 向上翻页	q 退出
		
		//看文件尾部
		tail -n 要显示的行数 文件名

		//看文件头部
		head -n 要显示的行数 文件名

### 文件和目录都能操作的命令u

* cp 复制

		cp 源文件 目标位置
			-r  复制目录			
			-a	所有（包括文件属性一起复制）

* mv 剪切或改名

		mv 源文件 目标位置

* 隐藏文件

		Linux隐藏文件、隐藏目录都是.开头

### 权限管理
	
* 权限位

		-rw-r--r--. 1 root root    0 2月  13 15:38 index.php

		权限位是十位
		第一位：	代表文件类型

			-	普通文件
			d	目录文件
			l	链接文件
		

		九位		属主权限u=user    属组权限g=group     其他人权限o=other

			r	读		4
			w	写		2
			x	执行		1

* 修改权限

	 	chmod 命令修改权限
		
		chmod u+x 要修改权限的文件或目录 //属主加上执行权限
		chmod u-x 要修改权限的文件或目录 //属主减去执行权限
		chmod u=rwx 要修改权限的文件或目录 //赋予属主rwx权限
		chmod 755 要修改权限的文件或目录 //属主rwx权限属组rw权限其他人rw权限


* 权限意义

		1）权限对文件的含义
			r：读取文件内容		  more 
			w：编辑、新增、修改文件内容	vim  
				但是不包含删除文件
			x：可执行		
							
		2）权限对目录的含义
			r：可以查询目录下文件名	ls
			w：具有修改目录结构的权限。如新建文件和目录，删除此目录下文件和目录，		重命名此目录下文件和目录，剪切 。touch  rm  mv  cp
			x：可以进入目录			cd


* 属主和属组命令

		chown
		
		useradd  user	添加用户cc
		passwd   user	设定用户密码	

		chown  用户名  文件名		改变文件属主

		chown  user  index.php		user必须存在

		chown  user:user  index.php	改变属主同时改变属组
					
						-R

### 帮助命令
		man  命令名
### 查看命令的常见选项
		命令  --help

### 查找命令

	1. whereis  命令名		
		 查找命令的命令，同时看到帮助文档位置
	     
	2.	find	搜索命令			
			
		按照文件名查找
		find  查找位置   -name  文件名
		find  /  -name  index.php		按照文件名查找
                 -iname			        按照文件名查找，不区分大小写
		
	3. grep  “字符串”  文件名		查找符合条件的字串行。
		
              -v		    反向选择
		      -i 		忽略大小写

			grep  -i  “root”  /root/install.log 
             grep  -v  “root”  /root/install.log 
				
### 管道符  |
	
	例： netstat -tlunp | grep 80  //查看80端口是否开启

### 压缩和解压缩

	rar压缩格式，Linux不支持，Linux与window都支持zip,但是Linux一般使用压缩格式是： gz   bz2
	压缩包一般以 .tar.gz	 .tar.bz2  结尾
	tar -t 压缩包名	//查看不解压

*	gz格式

		压缩
		tar  -zcvf  压缩文件/目录名  源文件
		tar  -zcvf   bbs.tar.gz  bbs
			 -z：识别.gz格式
			 -c：	压缩
			 -v：显示压缩过程
			 -f：指定压缩包名
		
		解压
		tar -zxvf  gz压缩包
		tar -zxvf  bbs.tar.gz
			-x：解压
		tar -zxvf root.tar.gz -C /tmp/	指定解压缩位置
							-C	解压路径
* bz2格式

		压缩
		tar  -jcvf  压缩文件/目录名  源文件
		tar  -jcvf   bbs.tar.bz2  bbs
			 -j：识别.bz2格式
			 -c：	压缩
			 -v：显示压缩过程
			 -f：指定压缩包名
		
		解压
		tar -jxvf  bz2压缩包
		tar -jxvf  bbs.tar.bz2
			-x：解压
		tar -jxvf root.tar.bz2 -C /tmp/	指定解压缩位置
								-C	解压路径

### 挂载命令

	mount 	挂载命令
	umount	卸载命令
	linux所有存储设备都必须挂载使用
			    
        光盘挂载
		mount    设备描述文件  挂载点（已经存在空目录）
		mount    /dev/cdrom  /mnt/cdrom

		光盘卸载
		umount  /dev/cdrom 
		umount  /mnt/cdrom 		重点：退出挂载目录，才能卸载


### vim编辑器的使用
	vim	 全屏幕纯文本编辑器


* vim  模式 
	
		vim  文件名
		
		命令---->输入    a  追加    i 插入   o  打开 
		命令---->末行   :w  保存	 :wq  保存退出  :q!  不保存退出   

* 操作
	
	Vim 中使用重新打开命令 :e ++enc=gb2312 ，其中 ++enc 是一个选项，可以指定使用的编码。打开后你会发现 Vim 按照你指定的形式打开了文件，但是文件变成了 readonly 状态，如果要修改，设置 :set noreadonly 就好
		
* 命令模式操作

		1. 光标移动
			h	左
			j	下
			k	上
			l	右	

			:n		移动到第几行
			gg		移动文件头
			G		移动到文件尾

		2. 删除字母
			x		删除单个字母
			nx		删除n个字母
		
		3. 删除整行	剪切		复制
			dd		删除单行
			ndd		删除多行
			yy		复制当期光标的行
			p		粘贴
			u		撤销
			r		替换一个字符
			dG		从光标所在行删除到文件尾
			ctrl + r	反撤销

			//删除1,18行之间的所有内容
				:1,18d
		
			//复制1,10之间的内容
				:1,10y

			//只想复制一行中一部分
				v  再移动光标选中内容，  y

			显示行号
				:set  nu	
				:set  nonu

			查找			
				:/查找内容	向下查找
			
				n	下一个
				N	上一个

****************************************************************

# Linux系统管理网络应用

## 软件包管理
	一、软件包分类
		
		源码包:   .tar.gz   .tar.bz2  
			
			特点：
				1. 软件还是源码
				2. 需要编译，编译时间长
				3. 自由定制，可以修改软件源码
 					
		二进制包：  .rpm  
			
			特点：
				1. 不需要编译
				2. 不能自由定制，很难去修改二进制
				3. 安装速度快，包依赖性强

    二、二进制包安装
		
		* rpm命令手动管理二进制包（挂载光盘）
			
			1. 包全名 = 包名-版本号-发布次数-适合linux系统-硬件平台.rpm
			2. 依赖性: 不会自动解决包依赖
			3. 安装
				rpm -ivh 包全名
					-i 安装	-v 显示详细信息	-h 显示进度
			4. 升级
				rpm	-Uvh 包全名
			5. 卸载
				rpm -e 包名
		
		* yum命令	二进制包自动化管理
			特点：自动解决包依赖
			yum  -y  install  软件包		 安装			
			yum  -y  update   软件包      升级
			yum  -y  remove   软件包		 卸载
				 -y  自动回答yes

		* 让本地yum源生效：
			
			1	cd  /etc/yum.repos.d/
				mv  CentOS-Base.repo  CentOS-Base.repo.bak

			2	vim  /etc/yum.repos.d/CentOS-Media.repo
				baseurl=file:///mnt/cdrom/	指定yum源位置
				gpgcheck=0					rpm验证不生效
				enabled=1					yum源文件生效

			3	挂载光盘作为yum源:
				mount /dev/sr0  /mnt/cdrom
       
		  	yum  -y  install  gcc (gcc是c语言编译器，不装gcc，源码包不能安装)

### 源码包安装的步骤
		
		远程传输工具传输apache到linux。
			httpd-2.2.29.tar.gz 

		1. 解压源码包

			tar -zxvf httpd-2.2.29.tar.gz

		2.  cd  解压目录

		3.  检查系统环境是否满足安装的条件，决定安装的路径

	     	./configure --prefix=安装路径				
			./configure --prefix=/usr/local/apache

		4. 编译
	       	make
	
		5. 安装
			make install

		启动
			/usr/local/apache/bin/apachectl  start 
		卸载   	
			先要停止apache运行,直接删除安装目录   

## 计划任务

问题： 1. 数据库数据需要经常备份吗？ 肯定需要！！

	   2. 什么时候备份？  用户访问量少的时候，一般都是凌晨备份。 

			目标： 时间到了，服务器自动备份。

创建计划任务：

	$ crontab -e

	

	计划任务语法：

		分 时  日  月  周   命令



	每个小时的第一分钟往/tmp/a.log输入一个a字符
			
		1  *  *   *   *		echo 'a' >> /tmp/a.log

	每一分钟往/tmp/a1.log输入一个p字符串

		*/1	 *  *  *  *				echo 'p' >> /tmp/a1.log

	每个月的第1,3,5天凌晨4点往/tmp/a1.log输入一个p字符串

		*  4  1,3,5  *  *				echo 'p' >> /tmp/a1.log


	1,2,3,4月的第28天的下午5点往/tmp/a1.log输入一个p字符串

		*  17  28  1-4  *  echo 'p' >> /tmp/a1.log

	


