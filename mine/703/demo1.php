<?php 
/*
	循环
*/
//echo 1,2,3,4,5,6,7,8,9,10;
//while
$i = 1;//初始化赋值
while ($i < 10) {//判断条件
	echo $i,'<br>';
	$i++;//变化条件
}
//echo $i,'<hr>';
//die;//代码从此截断，后续代码不会执行
//do...while
$i = 1;
do{
	echo $i,'<br>';
	$i++;
}while ($i < 10);
echo '<hr>';

//初始条件都不满足
$i = 1;
while ($i < 0){
	echo $i;
	$i++;
}
echo '<hr>';

$i = 1;
do{
	echo $i;
	$i++;
}while ($i < 0);

$str = 'this is a test string';












