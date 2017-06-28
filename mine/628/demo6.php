<?php
/*
	其他类型转换为浮点型；
*/
//整型：直接转换
$int = 123;
$int = -123;
var_dump($int);
echo "整形转换为浮点型：".(float)$int."<br>";

//布尔型：true转换为1；false转换为0；
$bo = true;
var_dump($bo);
echo "布尔型的true转换为浮点型是：".(float)$bo."<br>";
$bool = false;
var_dump($bool);
echo "布尔型的false转换为浮点型是：".(float)$bool."<br>";






