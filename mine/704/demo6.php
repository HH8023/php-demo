<?php 
/*
	可变函数
	格式：$变量名()
*/
$hello = 'test';
function test () {
	echo 'this is test function!';
}
$hello();//就相当于test();
echo '<hr>';

function sum ($a, $b) {
	echo $a+$b;
}
$hello = 'sum';
$hello(2,4);






