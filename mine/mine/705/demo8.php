<?php 
/*
	数组的分类
	1、下标的格式
	    索引数组：下标从0开始，依次递增1
		关联数组：不是索引，就是关联
	2、数组的层级
		 一维数组
		 二维数组
		 多维数组
*/
/*
	一维数组
*/
$arr = array(1,2,3);
var_dump($arr);
echo '<br>';

//二维数组
echo '<pre>';
$arr = array(1,2,3,array(4,5,6));
var_dump($arr);
echo '<hr>';
echo '</pre>';

//多维数组
$arr = [
	1,2,3,
	[4,5,6,
		[7,8,9,
		]
	],
	[10,11,12]
];
echo '<pre>';
var_dump($arr);
echo '<hr>';
echo '</pre>';//键值对之间使用逗号隔开，不是分号
//$arr = [1;2;3];

$arr = [1,2,3=>3,9=>9,6,7,11=>11,15,17];
var_dump($arr);

//注意：1、下标如果没有指定，那么就是前面的最大的数加1
//2、下标如果有空缺，就空着，不会再找补回来












