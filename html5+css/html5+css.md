
#课程体系
    初级课程
        1. HTML + CSS  8天
            挤时间写一个首页
        2. PHP基础 
            php + masql 是开源、免费的  14天

        3. php的面向对象  6天
        4. 第一个项目  9天 + 2天审核
    
    高级课程
        Linux操作系统
        MySQL的高级特性
        memcache缓存（非关系类型数据库redis）
        JavaScript
            ajax + jQuery
        微信开发
        PHP框架
        二期项目   4人20天 


软件开发工程师（攻城狮）、程序猿、IT狗：钱多、话少、死得早（运动）；连早起都控制不了的人，如何控制你自己的人生？

#web的基础
## 软件的结构
    1. C/S结构
        C: client 客户端
        S: server 服务端

    2. B/S结构
        B: Browser 浏览器
        S: Server 服务端

## 网站的发展
    1.静态网站 web1.0 （1990~2000）
        特点：
            只能查看和阅读，用户无法参与
            想修改页面的内容，必须懂代码
    2. 动态网站 web2.0
        动态网站是以数据库为基础

## web开发的标准
    w3c(万维网联盟)
    维护或者制定web开发的标准
    代码的可读性、移植性
    符合开发规范的代码，更容易被搜索引擎爬取

## 动态网站开发所需要的web构件
    1.浏览器
        是B/S结构软件的客户端，用于向服务器发起请求，对服务器响应过来的进行一个解析；相当于一个翻译官

        浏览器的种类：
            1.IE内核的
                IE、360浏览器、世界之窗、遨游、qq浏览器...等
            2.非IE内核的
                chrome 谷歌
                Firefox 火狐
                opera   欧朋
                Safari  苹果
    2.HTML（超文本标记语言：HyperText Mark-up Language）
        超文本：超出了文本的范畴（图片、音频、视频...）
        将内容标记出来，让浏览器进行翻译

    3.CSS(层叠样式表：Cascading StyleSheet)
        HTML负责标记出内容，而CSS负责控制样式，就是给网页美容的

    4. JavaScript
        在网页中看到特效、和用户的一些交互，就是用JavaScript来实现的（js）
        JavaScript和Java没有半毛关系

    5.web服务器
        PHP通常配合Apache一起使用
        常用的服务器：Apache、Nginx、微软的IIS、Tomacat

    6.服务端的编程语言
        在服务端解析
        常用的编程语言：PHP、Java、C、C++、C#...

    7.数据库管理系统
        相当于放置数据的仓库
        PHP通常配合MySQL使用
        常见的数据库系统：mysql、Oracle、sqlite、Sql Server
##php环境
	1.LAMP/LNMP
	    L:Linux操作系统
	    A:Apache 服务器 / N:Nginx服务器
	    M:Mysql 数据库
	    P:PHP 编程语言
	2.WAMP：wampserver
	    W: Windows操作系统
	    A: Apache 服务器 
	    M: Mysql 数据库
	    P: PHP 编程语言


## URL 统一资源定位符 （Uniform Resource Location）
    http://www.baidu.com:80/dir/index.php?a=1&b=2#p

    http 超文本传输协议，是web请求的默认协议，通常不用输入
    www.baidu.com 域名
    :80     端口，默认端口为80，通常不用输入
    dir/index.php 文件在服务器上的地址
    ?a=1&b=2 从?开始，后面都是get传输的参数
        a=1    a是参数名，1是参数值
        & 用于多对参数之间的连接
    #p 锚点


## HTTP协议
    描述：  超文本传输协议，无状态协议。

    状态码：
        1.服务器拒绝访问 -- 403
        2.运行访问、访问成功 -- 200
        3.未找到网页 -- 404
    
    http的工作流程
        1. 建立连接
        2. 发送请求
        3. 服务器响应数据
        
    常见的协议：
        http    超文本传输协议
        https   带有安全套接的协议，就是http的安全版
        ftp     文件传输协议
        file    本地文件协议

----------

----------


#HTML
    1. 什么是html？
        超文本标记语言
    2. HTML的发展史
        1991年8月份 写出第一个html的网页，就只有20多标签 HTML1.0
        最早的官方标准是从HTML2.0开始的 IETF
        在IETF之后W3C(万维网联盟)成为了标准的制定与维护者。1999发布HTML 4.01
        在发布HTML4.01之后，w3c将html的工作组解散了，转而开发XHTML。在2000年发布了XHTML1.0
        程序猿和浏览器厂商不买账，几个浏览器厂商，自己成立一个组织去研究HTML5，在2004就发布了H5草案。
        2008年W3C第一次推出H5的草案
        2014年10月29号，正式发布H5的规范


###HTML的语法
	1. 文档声明和注释
		声明：<!doctype html>
		注释：<!-- 注释内容 -->
			注释的内容，浏览器不会显示到页面上。
			通常是给开发人员看的！注意：注释不能嵌套。

	2. 标签：是html文档的基本组成部分
		双标签
			<a>要标记的内容</a>
		单标签
			<img />

		所有标签，不区分大小写。建议全小写

	3. 属性
		<标签名 属性名="值"></标签名>
		<单标签 属性名="值" />

	4. 代码格式
		不管多少空格和换行，最终都只会解析成1个空格
		代码的嵌套层级和缩进，一定要严格符合规范

	5. html5的语法比较松散
		单标签的结束标记可以省略
		会尽可能的将代码作为对的来解析

    6.主体结构标签
		html 用于告知浏览器这是一个html的文档
		head 头部标签，用于定义文档的头部信息
		title 网页标题
		body  网页正文部分

###head头部中标签们
	1. title 用于定义网页标题
	2. meta 用于定义页面的描述信息
		属性：
			1. charset 用于设置网页字符集
				值：utf-8   gbk    gb2312
			2. content 定义与http-equiv或name属性相关的信息
			3. name 将content的值关联到一个名称
				值：
					author 定义网页的作者
					keywords 定义网站的关键字
					description 定义网站的描述
			4. http-equiv 将content的值关联到一个http的头部
				值：refresh 刷新或跳转页面，由content指定跳转时间
				
				刷新例：<meta http-equiv="refresh" content="2" />

				跳转例：<meta http-equiv="refresh" content="2;url=http://www.baidu.com" />

	3. link标签：用于加载外部文件
		1. 加载css文件
			<link href="style.css" rel="stylesheet" />
			rel:当加载css样式文件的时候，必须指定为stylesheet
		2. 加载小图标
			<link href="1.jpg" rel="icon" />
			rel:当加载小图标的时候，必须指定为icon

	4. script标签：用于写js代码

###文本标签
	双标签：
		h族 			标题标签
		h1~h6 		数字越大，字体越小
		p标签 		段落标签
		b标签 		粗体标签
		strong标签  表示重要，用粗体显示
		i标签 		斜体标签
		em标签  		标签强调，用斜体显示
		button 	按钮标签
		sub 	下标标签
		sup 	上标标签
		q		定义一个短的引用，会自动添加双引号
		del		定义删除文本，会在文字中间加上删除线
					属性：
						cite="引用的url"	
		bdo     可以改变默认文本的方向
                属性：
					dir="ltr|rtl"  ltr：left to right
		font 	字体标签
			属性：
				color 设置文本的颜色
				size  设置文本的大小，值是1~7，默认为3
	单标签：
		br  换行标签
		hr 	产生一个水平横线

		
###HTML中的颜色设置
	1. 颜色的英文单词
		red green blue yellow black white purple pink gray
	2. 十六进制的方式 0~9a~f
		#红 绿 蓝
		#ff 00 00

		#0000ff	全写
		#00f 	简写
			注意：当两个值相等时才能简写
		例：
			<font color="#0f0">文本的颜色</font>

###HTML里面的实体字符
	&lt; 小于号 <
	&gt; 大于号 >
	&nbsp;  空格
    &copy;  ©   版权标记
    &quot;  "   双引号
    &amp;   &   and符
    &curren;¤   通用货币符号
    &sect;  §   数学上表示分节符
    &times; ×   标准的乘法符号

###列表标签
	ul 无序列表
	li 定义列表项
	
	ol 有序列表
	li 定义列表项
	
	dl 定义列表
	dt 定义列表的标题 t:title
	dd 定义列表的描述 d:description
	
	pre 原样输出
###a 超链接标签
	属性：
		1.href 用于指定跳转地址
			1.值为空，相当于跳转到当前页
			2.要跳转网络地址，必须加协议

		2.target 用于指定打开方式
			_self 	默认值，在本页面打开
			_blank 	在新标签中打开
			_top 	在顶层窗口打开
			 frameset分帧其他框架的name值
		
			在新标签中打开例： <a href="http://www.baidu.com" target="_blank">在新标签中打开百度</a>
		3.锚点
###路径
		1.相对路径：从当前访问的目录出发
			./ 		当前目录
			../ 	表示上一级目录
			../../ 	上上级目录
			../../../../../ 点到盘符为止

		2.绝对路径：指的是完整的路径
			例：
				file://C:/wamp/www/1.jpg
				http://www.baidu.com

###img 图片标签
	属性：
		src 指定图片的路径
		alt 图片加载失败的时候显示的文字

		title 给图片加描述（这是全局属性，可以加到任何一个标签上）
		width/height 给图片设置宽高
		align 设置图片在本行的位置
			值：top/bottom/right/left

		usemap 	定义图片映射，和map标签的name值相对应

###map标签：定义图像映射
	属性：
		name 值与img标签的usemap属性的值相对应
###area标签：定义图像映射的区域
	属性：
		href 点击区域跳转的地址
		shape 定义区域的形状
			值：
				rect 矩形：两个点的坐标决定
				circle 圆形：由圆形和半径
				poly 多边形：N个点的坐标
		coords 定义坐标点
		target 打开方式

###audio 音频标签
	属性：
		src 指定要播放的音频地址
		controls 显示播放控件
		autoplay 自动播放
		loop 	循环播放
		muted 	默认静音
		
		双标签,标签里面的内容，在浏览器不支持该标签的时候显示

###video 视频标签
	属性：
		src 指定要播放的音频地址
		controls 显示播放控件
		autoplay 自动播放
		loop 	循环播放
		muted 	默认静音

		width/height 设置宽高
		poster 设置视频的封面

		双标签,标签里面的内容，在浏览器不支持该标签的时候显示

###source标签(单标签)
	
		定义音频或视频的媒介资源,会从资源列表中找出一个可以解析的资源使用。
		
		属性：
			src 定义资源的路径


----------

----------

##table标签： 定义一个表格
	属性：
		border 	设置表格的边框
		width 	设置表格的宽

		cellspacing 设置单元格之间的间距
		cellpadding 设置单元格文本与边框之间的距离

		bgcolor 	设置表格的背景颜色
		align 	设置表格的水平对齐位置
			值：left/center/right

    caption 定义表格的标题

  

#####tr 定义表格的行(有多少行，就有多少对tr标签)
	  属性：
		height 设置tr的高度
		align 	设置tr中的文本水平对齐位置
			值：left/center/right
		valign 	设置垂直对齐方式
			值： top/middle/bottom
		bgcolor 设置当前行的背景颜色
####th 	定义表头，会加粗并居中
####td 	定义普通单元格
	属性：
		width/height 设置td的宽高
		align 	设置td中的文本水平对齐位置
			值：left/center/right
		valign 	设置垂直对齐方式
			值： top/middle/bottom
		bgcolor 设置当前行的背景颜色

		
		colspan 规定单元格横跨的列数
		rowspan 规定单元格横跨的行数

##form 定义表单
	属性：
		action 定义表单提交地址
		method 定义表单的提交方式
			值：
				get 
					get提交的参数，能在地址栏看见和修改
				post
					通常用于提交一些隐私的数据，比如密码

####input 定义一个输入框
	属性：
		name 规定输入的名称，用于后台拿值
		type 规定输入框的类型
			值：
				text 默认值，定义普通文本框
				password 定义密码框
				radio 	定义单选框
				checkbox 定义多选框
				file 	定义文件上传域
				hidden 	定义隐藏域

				submit 	定义提交按钮
				reset	定义重置按钮
				image 	定义图片提交按钮
				button 	定义普通按钮
			h5新增type的值：
				email 规定只能输入邮箱地址
				number 规定只能输入数字
				url 	规定只能输入url地址
		
		value 指定输入框的值
				注意：定义单、多选框的值与定义其他的输入框有所不同。
		
		checked 规定radio和checkbox的默认选中（单属性）
		size 规定文本或密码输入框的长度
		disabled 禁用表单（单属性）

	h5新增属性：
		multiple 	将文件上传设置为多选的（h5）
		autofocus 	自动获取焦点(h5)
		required 	规定必须输入值才能提交(h5)
		以上3个都是单属性

		placeholder 用于提示用户（h5）
		autocomplete 关闭输入提示（h5）
			值：on|off
###button 定义一个按钮
		属性：
			type 规定按钮的类型
				值：
					submit 	默认值
					button 	普通按钮
					reset 	重置按钮
			form 将按钮绑定到某一个表单
				值必须和form标签的id值相对应
####label 将某个元素绑定到某个表单元素上
		属性：
			for 一定要和表单元素的id值相对应
		用法实例：
		常用：	<label><input type="radio" name="sex">女</label>

			<input id="nan" type="radio" name="sex">
			<label for="nan">男</label>
####textarea 定义一个大文本域
		属性：
			cols 规定文本域的列数
			rows 规定文本域的行数
			name 规定文本域的名称

####select 定义一个下拉框
		属性：
			name 规定下拉框的名称
			multiple 定义多选下拉框
####option 定义下拉框的选项
		属性：
			value 规定option真正的值，如果没指定，会拿到双标签中的内容
			selected 默认选中列表项

####fieldset 将表单中的内容进行分组
		legend  给分组取个标题
		属性：
			align 设置标题的水平位置
				值：left|center|right

----------

----------

##frameset 设置框架集，不能与body同在
	属性：
		rows 把页面分为几行
		cols 把页面分为几列
		frameborder 0/1 是否显示边框
		border 设置边框的大小

####frame 定义基本的框架，配合frameset使用
	属性：
		src 本框架要连接的页面
		name 定义本框架的名称
		noresize 设置不能调整大小（单属性）
		scrolling 设置是否显示滚动条
			值：no/auto 

####分帧的链接打开位置方式：
		a标签的target属性:其他框架frame的name值
					例：<a href="www.baidu.com" target="right">百度</a>


#CSS

	CSS的使用方式
	1. 内联样式（行内样式）
		在标签内加style属性，属性值是css代码
	2. 内部样式（通常定义在head头中）
		把css代码写在style标签对中
	3. 外部样式
		使用link标签加载外部css
		路径：可以是相对路径或绝对路径，也可以是网络地址
		例：
		<link rel="stylesheet" href="./style.css" />
		外部文件的后缀名通常叫css，但其他也可以
	4. 用@import导入外部文件
		@import './style.xxoo';
		注意：一定要放在style标签对中的第一行
####CSS的语法
	1. 由选择器和声明两个部分组成
		选择器：用于选中你要改变的html标签
		声明：
			1. 都被包含在{}中
			2. 每条声明都由属性和值组成，中间用:隔开，用;结尾
			3. 最后一条声明的;可以省略
		例：
			p{color:red;font-size:50px}
	2. CSS中的注释
		/**/
	3. CSS中的单位
		1. 长度单位
			px 像素，屏幕显示的最小单位
			em 倍数，相对于自己当前的字体大小进行翻倍
			%  百分比

			in 英寸
			pt 磅
			mm/cm  毫米/厘米

		2. 颜色单位
			1. 颜色的英文单词
				red|green|blue|black|white...
			2. 十六进制
				#abc
				#aabbcc
			3. rgb()
				rgb(红, 绿, 蓝);
				数字：  rgb(0~255, 0~255, 0~255);
					超出范围取最近的值：800 = 255
				百分制：rgb(0~100%, 0~100%, 0~100%);
			4. rgba()
				rgba(红, 绿, 蓝, 透明度);
				数字：rgba(0~255, 0~255, 0~255, 0~1);
####css的选择器
	通配符选择器
		*{margin:0;}
	标签选择器
		li{color:red;}
	class类选择器
		.xieyi{font-size:50px;}
	ID选择器
		#ID名

	注意：请保持ID的唯一性;标签选择器不区分大小写;class和id选择器严格区分大小写

	后代(包含)选择器
		ul b{color:#c0c;}
		中间用空格隔开

	组合选择器
		p,h2{font-size:50px;}
		中间用,逗号隔开，同时将p和h2标签的字体变大

	伪元素选择器
		:link 	访问前的样式
		:visited 访问后的样式
		:hover 	鼠标放上来的时候(常用)
		:active 鼠标按下还没放开的时候
	选择器的优先级
		ID选择器 > class类选择器 > 标签选择器

###css的属性
	字体属性
		font 	统一设置(不常用)
		font-size 	设置大小 
		font-family 设置文本字体文件 
		font-weight 设置粗细 
			值：
				100 ~ 900 的整百数
				600和600以上粗体，600以下正常
		font-style 	设置样式
			值：	
				italic 设置为斜体字
	背景属性

		background 统一设置，不区分参数顺序，不要求参数个数
		background-color
			设置背景颜色，值颜色单位
		background-image
			设置背景图片，值：url('路径')
		background-repeat
			设置平铺方式，值：
					no-repeat 不平铺
					repeat-x  x轴平铺
					repeat-y  y轴平铺
					repeat 	  xy一起平铺，默认值
					round 	  将图片拉伸为刚好合适平铺
	background-position
		设置背景图片的位置
			值：
				top | center | bottom
				left | center | right
			还可以直接给像素
				background-position:x轴 y轴;

				background-position:100px 50px;可以给负数
	文本属性
		
		text-indent 设置首行缩进
				值：2em

		text-transform 转换大小写
				值：
					lowercase 全小写
					uppercase 全大写
					capitalize 首字母大写

		word-spacing 设置词间距，靠空格区分一个词语

		*text-decoration 设置线
				值：	
					木有线 	none
					下划线  underline  
					上划线  overline
					删除线  line-through

		*text-align 设置文本或者行级元素的水平对齐方式
				值：
					left | center | right
	
		*vertical-align 设置文本的垂直对齐方式
				值：
					top | bottom | middle | 像素(100px)

		*line-height 设置行高。
			通常用于让一行文本垂直居中，将行高设置和标签的高度一致

	cursor 设置鼠标样式
		值：
		pointer	设置小手手的样式
		text 文本
		not-allowed 禁止
		wait 	等待
		move 	移动

	详情请参考:cursor.html

	list-style 设置列表的样式
		值： 
			none 木有点
	list-style-position
	list-style-style
	list-style-image:url()
	详情请参考:list-styl-type.html

##边框属性
		border 设置4边边框
		*border:统一设置
			例：
				border：1px solid red;
		border-width 	边框宽度
		border-color 	边框颜色
		border-style 	边框样式
			值
			solid 实线
			dotted 点线
			dashed 虚线
			none 没有边框
	详情请参考：border-style.html

		border-left
		border-right
		border-top
		border-bottom
	设置边框圆角
			border-radius:50%;

			border-top-left-radius:50%;
			border-top-right-radius:50%;
			border-bottom-rightradius:50%;

	转角度
		transform:rotate(-45deg);
	


###网页布局 （div + css）
	HTML网页：标准的文档流，从左到右，从上到下

	盒子模型
		定义：任何一个标签都可以抽象成一个盒子，每个盒子可以嵌套其他盒子
		组成：元素的内容（宽高）、内边距(补白)、边框、外边距(外补白)

		相关属性：
			width/height 	设置元素的宽高
			padding 	设置内边距
			border 		设置边框
			margin 		设置外边距

		元素的宽高：
			宽：内容 + 左右内边距 + 左右边框
			注意：没有外边距

	padding 设置内边距
		padding:上下左右;
		padding:上下 左右;
		padding:上 左右 下;
		padding:上 右 下 左;

	单独设置一条内边距
			padding-top
			padding-left
			padding-right
			padding-bottom

	margin 设置外边距
		margin:上下左右;
		margin:上下 左右;
		margin:上 左右 下;
		margin:上 右 下 左;

	单独设置一条外边距
			margin-top
			margin-right
			margin-bottom
			margin-left
	
####块级元素
	特点：
		1. 从左到右，独占一行
		2. 如果没有设置宽度，默认继承父标签的宽度
		3. 块级元素可以嵌套其他的标签，部分标签除外
			部分标签：
				p 不能嵌套其他的块级元素
				h1~h6

		ul>li、 table>tr>td某些标签需要使用指定的子元素
####行级元素
	特点：
		1. 多个行级元素在同一行显示
		2. 设置宽高无效(部分标签除外)
			部分标签：
				img|button|select|input|textarea|label
		3. 行级元素不能嵌套其他的块级元素
####块级和行级的互转
	display
		none 	隐藏元素，彻底的隐藏
		block 	显示为块级
		inline 	显示为行级
		inline-block 行内的块级元素
####float 设置浮动
		值：
			left 左浮动
			right 右浮动
			none 不浮动
	clear
		值：
			left 清除左浮动
			right 清除右浮动
			both  清除两边浮动（常用）

###浮动
	1. 最初是为了实现文字环绕效果
	2. 浮动具有破坏性和包裹性
		破坏性：通常表现为父元素的高度坍塌
		包裹性：通常表现为收缩
	3. 浮动的盒子会脱离文档流，脱离之后，后面的元素会无视它的存在

	减轻浮动破坏性的影响
		1. 清除浮动
			在后面插入一个block块状元素，并设置属性clear:both，通常用<div style="clear:both"></div>
		2. 让父元素BFC(Block Formatting Context)
			能够让元素产生BFC的属性：
				overflow:hidden|scroll(常用)
				float: left|right
				position:absolute|fixed
				zoom:1 (IE6/7)

###position定位
	1. 相对定位
		relative
		1. 相对定位不会脱离文档流
		2. 是相对于自己原来的位置进行定位
	2. 绝对定位
		absolute
		1. 会脱离文档流
		2. 是相对于离自己最近的定位过的祖宗元素进行定位，如果所有的祖宗都没有定位，则相对于浏览器进行定位
		3. 使用了绝对定位的元素，浮动无效
	3. 固定定位
		fixed
		1. 会脱离文档流
		2. 不会随着滚动条而滚动，固定在浏览器的某个位置

	4.z-index 设置元素的堆叠层级
		值是一个整数，数值越大，层级越高，可以有负值；默认值是auto，相当于z-index:0
		注意：必须要设置了position之后才能使用
	
	5.重要说明：
		相对、绝对、固定定位必须配合 top|bottom|left|right 属性，进行定位使用
	
		同时设置上和下时：top > bottom
		同时设置左和右时：left > right
	
####margin的奇葩特性
	margin的上下外边距会重叠，取最大的显示

	父元素的第一个子元素的上外边距margin-top，如果碰不到父元素有效的边框或者有效padding，会找自己父元素的麻烦，将自己的margin-top作用到父元素身上：
	解决：
		1. 给父元素加有效的边框或者padding
		2. 让父元素BFC
			overflow:hidden

####overflow属性：设置溢出处理方式
		值：
			visible 默认值，溢出显示
			hidden 	溢出隐藏
			scroll 	溢出显示滚动条
			auto	自动

##隐藏元素\水平居中\透明度
	display:none;
		彻底的隐藏

	visibility:hidden;
		隐藏元素，但是保留物理空间

	text-align
		控制行级元素或者文本水平位置
	margin:0 auto
		控制块级元素水平居中
	
	块级元素垂直居中只能通过绝对定位来实现
	
	透明度：0~1 0全透明看不见了；1不透明
		opacity:0.3;
	
###默认样式
	body 默认有8px的外边距
	p 上下有16px的外边距
	a 颜色、下划线
	h1~h6 加粗、外边距

	img在底版的IE默认有边框

	属性的继承
		字体文件、颜色、文本相关
		布局相关不能被继承
##css3的选择器	
	后代选择器
		ul li{color:red;}
	儿子选择器
			ul > li{color:red;}
	属性选择器	
			li里面包含title属性的
			li[title]{color:red;}	
	伪类选择器
		符合ul里第一个的li
		ul li:first-child{color:red;}
		符合ul里最后一个的li
		ul li:last-child{color:red;}
		除了.blue的所有li
			li:not(.blue){color:red;}
		单选框和多选框被选中的时候
			input:checked{color:red;}
		:focus{border:5px solid red;}
			获取焦点时

##css3的伪对象选择器
			p::first-letter{
				color:orange;
				font-size:30px;
			}

			p::after{
				content:'哦，是吗？';/*必须要有的属性*/
			}

			p::before{
				content:'鲁迅说：';
			}

###盒子阴影和文字阴影

	盒子阴影
					
		box-shadow:-10px 10px 5px 10px #000 inset;
		对应的属性：	水平阴影 垂直阴影[ 模糊值 外延值 颜色 inset]

	文本阴影：
				水平阴影 垂直阴影 模糊值 颜色
	text-shadow:3px 3px 3px blue;

###设置过渡
		all:表示所有属性
		transition:要参与过渡的属性 持续时间 动画类型 延迟执行时间
			transition：all 4s
		
		详细请参考手册

##动画
			动画名称 持续时间 动画类型 重复次数 反向运动
	animation:go 2s linear infinite alternate;
			}

	@keyframes go{
				50%{transform:translate(500px,200px);}
				100%{transform:translate(1000px,400px);}
	}
	详细请参考手册


#本文本只记录了一些html5 + css 的知识，想了解更对请去http://www.w3school.com.cn/了解更多。