<?php 
/*
	数组运算符：
	$a+$b    $a == $b   $a ===$b   $a!=$b  
	$a<>$b   $a !== $b 
*/
//$a+$b
$arr1 = [1,2,3,4,5];
$arr2 = [6,7,8,9,10,11=>11];
$res = $arr1 +$arr2;
var_dump($res);
echo '<hr>';

//$a == $b 判断 a,b是否相等
//值一致，键不一致，false
$arr1 = [1,2,3];
$arr2 = [3,2,1];
var_dump($arr1 == $arr2);
echo '<hr>';

//值，键都一致，只是顺序不同，true
$arr1 = [1,2,3];
$arr2 = [2=>3,1=>2,0=>1];
var_dump($arr1 == $arr2);
echo '<hr>';

//键一致，值不同 false
$arr1 = [1,2,3];
$arr2 = [1,2,33];
var_dump($arr1 == $arr2);
echo '<hr>';

//$a<>$b  不等
echo '一下是全等的判断<br>';
//$b true 的要求：1、键值一致，并且定义的顺序也是一致
//1、键，值，都一致    顺序不同
$arr1 = [1,2,3];
$arr2 = [2=>3,0=>1,1=>2];
var_dump($arr1 === $arr2);//false 注意顺序不一致也不行
echo '<hr>';

//2、键，值，顺序都一致，值的类型不一样
$arr1 = [1,2,3];
$arr2 = [1,2,'3'];
var_dump($arr1 === $arr2);
echo '<hr>';

//键，值，顺序，值的类型都一致，键的类型不一致
$arr1 = [1=>1];
$arr2 = [true =>1];
var_dump($arr1 === $arr2);



