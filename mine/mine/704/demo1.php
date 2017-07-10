<?php 
/*
	形参&实参
*/
function say ($name) {
	echo 'hello，',$name;
}
say('张三');//张三就是实参
say('李四');
echo '<hr>';

/*
	变量的范围：
	局部变量：函数内部定义的变量
	全局变量：函数外部的变量
*/
$b = 3;
function sayHello(){
	$a = 2;//局部变量
	echo $b;
}
echo $a;//注意：默认情况下，全局变量不能调用局部变量，
sayHello();//局部变量也不能调用全局变量



 







