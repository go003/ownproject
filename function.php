<?php


/*
*判断字符串是否存在
* 第一个参数 输入字符串 $string
* 第二个参数 要判断的字符串 $needle
* @return 存在 true 不存在 false
*/
strexists(string $string, string $needle);

/*
填充字符串
string	必需。规定要填充的字符串。
length	必需。规定新的字符串长度。如果该值小于字符串的原始长度，则不进行任何操作。
pad_string	可选。规定供填充使用的字符串。默认是空白。
pad_type	可选。规定填充字符串的哪边。

pad_type 可能的值：
STR_PAD_BOTH - 填充字符串的两侧。如果不是偶数，则右侧获得额外的填充。
STR_PAD_LEFT - 填充字符串的左侧。
STR_PAD_RIGHT - 填充字符串的右侧。默认。
*/
str_pad(string,length,pad_string,pad_type)
