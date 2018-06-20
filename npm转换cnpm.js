	
	/*
	模块:
		node --> npm 
		1. npm 是Node 默认的模块管理器，可以通过它下载和管理第三方模块
		2. npm 不需要独立安装，与 node 绑定在一起的
		3. 使用 npm 可以共享模块，进行上传，下载
	*/

	// 1. 查看版本号: npm -v 

	// 2.跟新到最新版本 -g 表示全局更新
	cnpm install npm@latest -g

	// 3.使用淘宝 NPM 镜像
		// 要注册
		npm install -g cnpm --registry=https://registry.npm.taobao.org

		//如果出错，修改npm源
		npm config set registry https://registry.npm.taobao.org
		//清除安装缓存并重新安装
		npm cache clean --force

		以后 cnpm 进行下载 ，替代了 npm 

		cnpm 用于下载模块， npm 用功能操作

	// 4. 使用 package.json
		1. 初始化新的JSON文件
			npm -y init 

			{
			  // 项目名称 
			  "name": "blog",
			  // 版本号
			  "version": "1.0.0",
			  // 项目描述
			  "description": "",
			  // 入口文件
			  "main": "demo.js",
			  // 执行的脚本: npm test
			  "scripts": {
			    "test": "echo \"Error: no test specified\" && exit 1"
			  },
			  // 你要搜索的关键字
			  "keywords": ['blog', 'xdlblog'],

			  // 作者
			  "author": {"name":"jiege1", "email": "110@qq.com"},
			 
			  // ISC 表格某个开源协议
			  "license": "ISC",

			  // 项目中下载的第三方模块，都会写在这里
			  "dependencies": {
			    "mysql": "^2.14.1",
			    "express": "^2.14.1",
			    "session": "^2.14.1",
			  }
			}
