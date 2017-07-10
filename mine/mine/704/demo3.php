<?php 
/*
	全局调用局部的例子
*/
function test () {
	$a = 'this is a variable.';
	return $a;
}
echo $a;//没有
$a = test();//函数是怎么执行的？调用的那一刻，会进入函数定义的空间，回到第6行
echo $a;







