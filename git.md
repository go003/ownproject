# Git 安装



- 在Liunx上安装Git
	
	1、通过一条命令
	 $ sudo apt-get install git
	
	 老版本liunx安装命令要改为
	 $ sudo apt-get install git-core
	
	2、源码安装

	 先从Git官网下载源码，然后解压，依次输入：
	 $ ./config
	 $ make
	 $ sudo make install

- 在Mac OS X上安装Git


- 在Windows上安装Git


## 创建版本库
	
* 第一步：选择一个合适的地方，创建一个空目录

		$ mkdir learngit
		$ cd learngit
		$ pwd
* 第二步：通过`git init`命令把目录变成Git可以管理的仓库 生成 .git 

		$ git init

* 克隆现有的仓库
	
	$ `git clone url [本地仓库名]`

* 检查当前文件状态
	$ `git status`

* 此命令比较的是工作目录中当前文件和暂存区域快照之间的差异
	$ `git diff`
查看已暂存的将要添加到下次提交里的内容
	$ `git diff --staged`
* 从暂存区域移除文件
	$ `git rm 文件名`
	$ `git rm --cached `   //git rm log/\*.log

`git log` 命令查看历史记录

	$ git log -p -2 显示最近两次提交
	$ git log --stat  简略的统计信息

`git push` 推送

`git pull` 拉取

`git branch dev` 创建dev分支

`git checkout dev` 切换到dev分支

 `git branch` 命令会列出所有分支，当前分支前面会标一个*号
 			-vv 

`git merge`命令用于合并指定分支到当前分支
	
	$ git checkout master
	$ git merge dev
	
`git checkout -b dev` 新建本地dev分支

`git branch -d dev` 删除dev分支

`git remote [-v]` 查看远程库的信息  
				
			-v 显示更详细的信息

* 把文件放到Git仓库
	
	1. 用命令`git add`告诉Git，把文件添加到仓库
		
		$ `git add filename`
		$ `git add .`
	2. 用命令`git commit`告诉Git，把文件提交到仓库
			
		$ git commit -m "在这个文件写了点东西" 

* 取消暂存的文件
	$ `git reset file`

* 撤消对文件的修改
	$ ` git checkout -- [file]`

	你需要知道 git checkout -- [file] 是一个危险的命令，这很重要。 你对那个文件做的任何修改都会消失 - 你只是拷贝了另一个文件来覆盖它。 除非你确实清楚不想要那个文件了，否则不要使用这个命令。


* 本地所有修改的。没有的提交的，都返回到原来的状态
	$ `git checkout .`

* 把所有没有提交的修改暂存到stash里面。
	$`git stash`
	可用git stash pop回复。

git reset --hard HASH #返回到某个节点，不保留修改。
git reset --soft HASH #返回到某个节点。保留修改

*把当前提交合并到当前分支
git checkout 分支名
git cherry-pick  历史id

git clean -df #返回到某个节点
git clean 参数
    -n 显示 将要 删除的 文件 和  目录
    -f 删除 文件
    -df 删除 文件 和 目录

删除远端分支
`git branch -r -d origin/远程分支名`


拉取远程分支并创建本地分支
`git checkout -b 本地分支名x origin/远程分支名x`

建立本地分支与远程分支的映射关系
git checkout 要建立关系的本地分支
git branch -u origin/远程分支名

 如果想把本地的某个分支test提交到远程仓库，并作为远程仓库的master分支，或者作为另外一个名叫test的分支，那么可以这么做。

$ git push origin test:master         // 提交本地test分支作为远程的master分支 //好像只写这一句，远程的github就会自动创建一个test分支
$ git push origin test:test              // 提交本地test分支作为远程的test分支



`git fetch`：相当于是从远程获取最新版本到本地，不会自动merge
    
	git fetch origin master
	git log -p master..origin/master
	git merge origin/master
	
	以上命令的含义：
   	首先从远程的origin的master主分支下载最新的版本到origin/master分支上
   	然后比较本地的master分支和origin/master分支的差别
   	最后进行合并

上述过程其实可以用以下更清晰的方式来进行：
	git fetch origin master:tmp
	git diff tmp 
	git merge tmp

    从远程获取最新的版本到本地的test分支上
   	之后再进行比较合并




 git log 的常用选项
------------------------------------------------------------
选项					|	说明
------------------------------------------------------------
-p 					按补丁格式显示每个更新之间的差异。
--stat 				|	显示每次更新的文件修改统计信息。
					|
--shortstat 		|	只显示 --stat 中最后的行数修改添加移除统计。

--name-only 			仅在提交信息后显示已修改的文件清单。

--name-status		|	显示新增、修改、删除的文件清单。

--abbrev-commit 		仅显示 SHA-1 的前几个字符，而非所有的 40 个字符。

--relative-date 		使用较短的相对时间显示（比如，“2 weeks ago”）。

--graph 				显示 ASCII 图形表示的分支合并历史。

--pretty 				使用其他格式显示历史提交信息。
						可用的选项包括oneline，short，full，fuller 和 format（后跟指定格式）。