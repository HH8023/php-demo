<?php
/*
	其他类型（标准类型）转换为整型
*/
//浮点型（就是小数）；只取整数部分，小数部分直接舍弃。
$float = 1.234;
$float = 1.999;
var_dump($float);
echo '浮点转换为整型是：'.(int)$float."<br>";

//布尔型：true  false   true转换为1，false转换为0；
$bo = true;
echo "布尔的真转换为整型是：".(int)$bo ."<br>";
$bool = false;
echo "布尔的假转换为整型是：".(int)$bool."<br>";

//字符串 如果开头是数字，只取数字的整数部分；
$str = "123.456abc";
var_dump($str);
echo "开头是数字的字符串转换为整型是".(int)$str."<br>";
//如果不是数字开头，算0
$str = 'abc';
var_dump($str);
echo '开头不是数字的字符串转换为整型是：'.(int)$str."<br>";







