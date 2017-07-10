<?php  
/*
	数组的遍历：while...case...list...
	明确的消息：PHP7.2开始，废弃了each
*/
var_dump(function_exists('each'));//true;
var_dump(function_exists('list'));//false
echo '<hr>';

/*
	list：把数组的值，按照先后顺序赋值给对应的变量
*/
$info= ['张三',20,'女']; 
list($name,$age,$sex) = $info;
echo $name,'---',$age,'---',$sex,'<br>';

$arr = [1,2,3];
list($a) =$arr;
echo $a,'<br>';
list($b) =$arr;
echo $b,'<br>';
echo '<br>';

/*
	each 返回当前指针所在位置的键值对，并且将指针下移动一位，后移一位
*/
/*
	each 索引数组
*/
$arr = [1,2,3,4];
var_dump(each($arr));
echo '<br>';
var_dump(each($arr));
echo '<br>';
var_dump(each($arr));
echo '<br>';
var_dump(each($arr));
echo '<br>';
var_dump(each($arr));
echo '<hr>';

/*
	each 关联数组
*/
$arr = ['name'=>'zhangsan','age'=>18,'sanwei'=>'36z'];
var_dump(each($arr));
echo '<br>';
var_dump(each($arr));
echo '<br>';
var_dump(each($arr));
echo '<br>';
var_dump(each($arr));
echo '<hr>';

/*
	组合方式遍历数组
*/
$arr = [1,2,3,4,5];
while(list($key,$value) = each($arr)){
	echo $key,'的值是：',$value,'<br>';
}
/*
	上面遍历过后，$arr的指针已经在数组外了，所以需要重置指针到数组开头。用reset(数组名)重置
*/
reset($arr);
while(list($k) = each($arr)){
	echo $k,'<br>';
}
echo '<hr>';

/*
	组合遍历关联数组
*/
$info = ['name'=>'zhangsan','age'=>19,'sex'=>'男'];
while(list($k,$v) =each($info)){
	echo $k,'的值是：',$v,'<br>';
}
