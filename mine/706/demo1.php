<?php 
/*
	数组的使用
*/
//整体使用
$info = ['name'=>'张三', 'age'=>19, 'sex'=>'女'];
echo '$info的内容是：';
var_dump($info);
echo '<hr>';

//数组键值对的使用，$arr['键名']，如果键名是数字，那么可以不用引号。
echo '名字是：', $info['name'],'，年龄是:',$info['age'],'性别：',$info['sex'], '.';
$arr = array(1,2,3,4,5);
echo '<hr>';
//键是数字，可以不用引号
echo $arr[0],$arr[1],$arr[2];






