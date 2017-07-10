<?php 
/*
	数组的定义方式
*/
//1、$arr = array();
$arr = array(1,2,3,4,5);
var_dump($arr);
echo '<br>';

echo $arr;//报错，注意：数组不能当成字符串输出，echo不能输出数组
echo '<br>';
print_r($arr);//可以输出，但是没有值的类型和键值对的数目
echo '<hr>';

//2、$arr = [];键可以人为指定
$arr = ['name'=>'张三','age'=>18,'sex'=>'女'];//注意：utf-8下，一个汉字3个字节
var_dump($arr);
echo '<br>';
$arr = null;

//3、$arr[] = '';//注意：键名不能重复，如果重复，后面的覆盖前面的
$arr[1] = 1;
$arr[true] = 2;
$arr['1'] = 3;
$arr[1.1] = 4;
var_dump($arr);
$arr = null;
echo '<br>';

//下面的数组是几个键值对
$arr[] = '1';
$arr[] = '2';
$arr[] = '3';
$arr[] = '4';
var_dump($arr);//4个，因为，键不指定的话是从0 开始，依次加1
echo '<br>';




