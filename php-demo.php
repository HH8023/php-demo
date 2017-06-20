<?php
echo "循环结构do...while语句的运用优势举例";
//while例子
$sum = 0;
$num = rand(1,6);//获取1到6的随机数，模拟掷骰子
$sum = $sum +$sum;//前进步长
while($num == 6){
	$num = rand(1,6);//获取1到6的随机数，模拟掷骰子
	$sum = $sum + $num;//前进步长
};
echo "while例子执行完毕，前进：".$sum."<br>";
//do...while例子；
$sum = 0;
do{
	$num = rand(1,6);//获取1到6的随机数，模拟掷骰子
	$sum = $sum +$num;//前进步长
}while($num ==6);
echo "do...while例子执行完毕，前进：".$sum."<br>";
?>