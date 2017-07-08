<?php 
/*
	输出方式对比：
	echo 
	print()
	print_r()
	var_dump
*/
//print()：1、不是函数 2、始终返回1   3、只能输出标量，不能输出bool的false
var_dump(function_exists('print'));//false
//print(1,2,3)//不支持一次性输出多个字符串
echo print(2);//输出21   有这种考法
echo '<hr>';
print(false);
print(array(1,2,3));
echo '<hr>';

//print_r():1、是函数，2、返回bool，3、可以输出数组，4、不能输出bool的false
var_dump(function_exists('print_r'));//true
print_r(false);//没有输出
print_r([1,2,3]);
echo '<br>';
var_dump(print_r([1,2,3]));//Array([0]=>1 [1]=>2 [2]=>3)bool(true)
echo '<hr>';

//var_dump()  1、是函数
var_dump(function_exists('var_dump'));
