<?php 
/*
	foreach 遍历数组
	格式：
	foreach($arr as $k=>$v){
		循环体;
	}
	foreach ($arr as $v){
		循环体;
	}
*/
//foreach 遍历关联数组
$info =['name'=>'李四','age'=>18,'sanwei'=>'35c'];
foreach ($info as $k=>$v){
	echo $k,'的值是：',$v,'<br>';
}
//无需重置指针
foreach ($info as $v){
	echo $v,'<br>';
}
