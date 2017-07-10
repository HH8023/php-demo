<?php 
/*
	返回值 return
	特点：1、通常在函数内部，可以返回一些内容
	      2、return之后，函数体就执行完毕，函数体内return后面的代码就不执行了
		  注意：函数在执行的时候，会进入额外的独立的空间中，比如下副本
*/

function say () {
	//echo 123;
	return 345;
}
$a = say();//对于函数内，抛出的东西，需要接收，如何接？变量接
echo $a;
echo '<hr>';

/*
	既然return可以把函数内的东西抛出去，能不能把内部的局部变量抛出去呢？答案是可以的，这样就实现了：全局变量使用局部变量
*/
function test () {
	$inner = '这是函数内部的东西';//局部变量
	return $inner;//抛出
}
echo $inner;//全局变量，因为全局变量默认情况下不能调用局部变量
$out = test();//此时把函数内抛出的inner赋值给out，out是不是拿到了inner的值？
echo $out;











