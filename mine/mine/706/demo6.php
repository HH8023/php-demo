<?php 
/*
	手动移动指针遍历数组
	reset()  重置指针到开头
	current()  返回当前指针所在位置的值
	key()  放回当前指针所在位置的键
	next() 将指针下移一位，并返回下一位的值
	prev()  将指针上移一位，并返回上一位的值
	end()  将指针移到数组末尾，并返回末尾的值
	
*/
$arr = [1,2,3,4,5,6,7];
echo current($arr),'<br>';
echo key($arr),'<br>';

echo next($arr),'<br>';
echo key($arr),'<br>';

echo end($arr),'<br>';
echo key($arr),'<br>';

echo prev($arr),'<br>';
echo key($arr),'<br>';

reset($arr);
echo current($arr),'<br>';

/*
	注意:一旦移出数组，就不能移回来了
*/
echo end($arr);
var_dump(next($arr));
var_dump(prev($arr));
reset($arr);
echo current($arr),'<br>';










