<?php 
/*
	变量的检测&销毁
*/
//检测：isset(变量名);  检测变量是否设置，结果返回bool
$a = 1;
var_dump(isset($a));
echo '<br>';

var_dump(isset($b));
echo '<br>';

//检测变量是否为空  empty(变量名);检测变量是否为空，结果返回bool
var_dump(empty($a));
echo '<br>';
var_dump(empty($b));
echo '<br>';
$c = '';
var_dump(empty($c));
echo '<br>';

//变量的销毁：注意：对变量的销毁，其实就是断开变量名和内存之间的指向关系；
echo $a,'<br>';
unset($a);//销毁变量$a;
echo $a;//变量不存在








