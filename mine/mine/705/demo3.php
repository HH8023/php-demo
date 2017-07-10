<?php 
/*
	回调函数
*/
function filter ($fun) {
	for ($i = 0;$i <= 30;$i++) {
		if ($fun($i)) {
			continue;
		}
		echo $i, '<br>';
	}
}

function mo3 ($n) {
	return $n%3 ==0;
}
function mo5 ($m) {
	return $m%5 ==0;
}

/*
	$res = mo3(3);
	$res = mo3(5);
	var_dump($res);
	echo '<hr>';
	echo true;//1.自动转换为1
	echo false;//echo不能打印布尔的false，除了var_dump()没人能打印出bool的false
*/
$fun = 'mo3';
$fun = 'mo5';
filter($fun);

