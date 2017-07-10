<?php 
/*
	注意：哈数执行完成后，函数内部定义的局部变量会在退出空间的那一刻销毁
	静态变量
*/
//常规变量：函数退出，变量销毁
function test () {
	$a = 1;
	echo $a, '<br>';
	$a++;
}
test();//1
test();//1
test();//1
test();//1
echo '<br>';

//静态变量   函数退出，静态变量的值保留
function test1() {
	static $a = 1;
	echo $a, '<br>';
	$a++;
}
test1();//1
test1();//2
test1();//3
test1();//4







