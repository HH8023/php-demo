<?php 
/*
	其他类型转换为字符串
*/
$int = 123;
var_dump($int);
echo '整型转换为字符串是：',(string)$int, '<br>';

//浮点型   直接转
$float = 1.234;
var_dump($float);
echo '浮点转换为字符串是：',(string)$float, '<br>';

//布尔型 true->1  false ->''空字符串
$bo = true;
var_dump($bo);
echo '布尔型的true转换为字符串是：',(string)$bo,'<br>';
$bool = false;
var_dump($bool);
echo '布尔型的false转换为字符串是：',(string)$bool,"<br>";
var_dump((string)$bool);



