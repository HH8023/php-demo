<?php 
/*
	自增&自减运算符
	特点：增，减，一次值都是1
	$a++
	$a--
	--$a
	++$a
*/
//注意：如果是先计算，然后输出，本身前，后增，减没区别，结果都一样的
$a = 1;
$a++;
echo $a;
echo '<hr>';

$b = 1;
++$b;
echo $b;
echo '<hr>';

//注意：如果是直接输出，就不一样了
$c = 1;
//后自增的，先输出，后计算
echo $c++;//先输出c当前的值，然后让C+1
echo $c;
echo '<hr>';

$d = 1;
//前自增的，先计算，后输出
echo ++$d; //先计算，$d+1，然后再输出值2；
echo $d;
echo "<hr>";

//典型的面试题
$a = 5;
$b = 9;
//echo $a+++++$b;
echo $a++ + ++$b, "<hr>";
echo $a+ + + + +$b;





























