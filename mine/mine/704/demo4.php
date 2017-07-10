<?php 
/*
	局部变量默认不能调用全局变量
*/
$a = 1;
function test () {
	echo $a;
}
test();
echo '<hr>';
/*
	局部调用全局的方法：1、传值
					    2、使用global关键字
*/
$n = 1;
$m = 2;
/*
	1、可以通过传参的方式，局部使用全局变量
*/
function sum ($a,$b) {
	return $a + $b;
}
$sum = sum($n,$m);
echo $sum;;
echo '<hr>';

/*
	2、使用global关键字，让内部的变量和外部的变量做一个  引用 ！！
*/
$aa = 11;
function test1() {
	global $aa;
	$aa = 22;
	echo $aa;
}
test1();
echo '<hr>';
echo $aa;//22，全局的aa,为什么是22，而不是11？因为函数内做了全局的操作，并且修改了值
echo '<hr>';


$a = 1;
$b = $a;//直接赋值
$b = 3;
echo $a;//1
echo '<hr>';

$c = 1;
$d = &$c;//引用赋值
$d = 5;
echo $c;//5










