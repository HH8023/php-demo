<?php  
/*
	格式化输出字符串
	print()
	sprintf()
	常见的占位符
	%s:字符串
	%d:带浮点十进制
	%f:浮点数
	%%：%返回百分比符号
	%e:科学计数法
	%u：无符号十进制
*/
$name = 'bob';
$name = 'jack';
$age = 10;
$sex = '男';
$str = '他的名字是：%s,他的年龄是：%d，他的性别是：%s';
printf($str,$name,$age,$sex);//直接输出格式化后的结果
echo '<br>';

/*
	注意：1、占位符所在位置的值，最终会根据变量的值进行强制转换为对应的类型，涉及类型转换
*/
$str = '他的名字是：%d，他的性别是：%s，他的性别是：%f';
printf($str,$name,$age,$sex);
echo '<hr>';

$str = '哈哈%s';
$test = '1';
var_dump(printf($str,$test));//printf返回的是：格式化后的字符串的长度
echo '<hr>';

/*
	sprintf();格式化字符串，返回格式化后的字符串
*/
$str = '上午好，%s';//注意：这里是%（百分号）,不是美元符号$
$name = '王大锤';
echo sprintf($str,$name);//不是直接输出，需要打印
echo '<hr>';

/*
	科学计数法
	$e
	$int = 123456789;
	$int = 1.2345678e8;//1个e表示10，e8表示10的8次方
*/
echo 1.23456789e7,'<br>';

$int = 1234560000;
$str = '%e';
echo sprintf($str,$int);//转换过后，超过6位的小数会四舍五入
//1.23456789

