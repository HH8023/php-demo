<?php 
/*
	函数内部同一时间，只能有一个return生效
*/
function test ($a) {
	if ($a) {
		return 'hello';
	} else {
		return 'nihao';
	}
}
$tt = test(1);
echo $tt;
$tt = test(0);
echo $tt;
echo '<hr>';

function info ($name,$sex,$age) {
	echo $name,$sex,$age, '<br>';
}
info(19,'男','zhangsan');





