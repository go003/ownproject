Mysql有什么办法批量去掉某个字段字符中的空格？不仅是字符串前后的空格，还包含字符串中间的空格，答案是 replace，使用mysql自带的 replace 函数，另外还有个 trim 函数。
 
mysql replace 函数
 
语法：replace(object,search,replace)
 
意思：把object中出现search的全部替换为replace
 
案例：
	update `news` set `content`=replace(`content`,' ','');//清除news表中content字段中的空格  

	UPDATE `ims_yz_designer` set `datas`= REPLACE(`datas`, 'images.yunzshop.com', 'shop-yunshop-com.oss-cn-hangzhou.aliyuncs.com');