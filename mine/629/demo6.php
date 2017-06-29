<?php 
/*
	可变变量：特点：有多个$符号;
	理论上说，可变变量的$可以有无限个
*/
$str = 'hello';
$hello = 'world';
$world = 'nihao';
$nihao = 'php';
echo $str,'<br>';
echo $hello,'<br>';
echo $$str,'<br>';
echo $$$$str;//php;




