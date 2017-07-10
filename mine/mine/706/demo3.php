<?php 
/*
	数组的遍历
*/
//for的方式
/*
	for($i = 0;$i<10;$i++){
		echo $i,'<br>';
	}
*/
$arr = [1,2,3,4,5,6,7];
/*
	for($i = 0;$i < 数组长度;$i++){
		
	}
*/
//需要搞定数组的长度，可以使用函数count($arr);
echo count($arr);
$arr = [1,2,3];
echo count($arr);
echo '<hr>';
/*
	思考1、为什么从0开始，2、i为什么不能等于数组长度
	答案：1、键从0开始的，2、因为从0开始数的键值对
*/
for($i = 0;$i<count($arr);$i++){
	echo '第',$i+1,'个的值是：',$arr[$i],'<br>';
}
echo '<br>';

/*
	for遍历关联数组出错
*/
$arr = [1,2,3=>3];
for($i= 0;$i<count($arr);$i++){
	echo '值依次是：',$arr[$i],'<br>';
}






























