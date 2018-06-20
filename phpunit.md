# PHPUnit

## 断言

* assertArrayHasKey(mixed $key, array $array[, string $message = ''])

	当 $array 不包含 $key 时报告错误，错误讯息由 $message 指定。
	assertArrayNotHasKey() 是与之相反的断言，接受相同的参数。

* assertClassHasAttribute(string $attributeName, string $className[, string $message = ''])

	当 $className::attributeName 不存在时报告错误，错误讯息由 $message 指定。
	assertClassNotHasAttribute() 是与之相反的断言，接受相同的参数。

* assertArraySubset(array $subset, array $array[, bool $strict = '', string $message = ''])

	当 $array 不包含 $subset 时报告错误，错误讯息由 $message 指定。
	$strict 是一个标志，用于表明是否需要对数组中的对象进行全等判定。

* assertClassHasStaticAttribute(string $attributeName, string $className[, string $message = ''])

	当 $className::attributeName 不存在时报告错误，错误讯息由 $message 指定。
	assertClassNotHasStaticAttribute() 是与之相反的断言，接受相同的参数。

* assertContains(mixed $needle, Iterator|array $haystack[, string $message = ''])

	当 $needle 不是 $haystack的元素时报告错误，错误讯息由 $message 指定。
	assertNotContains() 是与之相反的断言，接受相同的参数。

* assertContains 第二种用法
	
	assertContains(string $needle, string $haystack[, string $message = '', boolean $ignoreCase = false])
	
	当 $needle 不是 $haystack 的子字符串时报告错误，错误讯息由 $message 指定。
	如果 $ignoreCase 为 true，测试将按大小写不敏感的方式进行。