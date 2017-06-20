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
<?php
echo "<br>循环机构for语句<br>";
echo "for(初始化；循环条件；递增项）{
	//执行任务
}<br>";
echo "      for语句中，“初始化”在循环开始前无条件求值一次，“循环条件”在每次循环开始前求值。如果值为true，则继续循环，执行循环体语句（执行任务）。如果为false，则终止循环。“递增”项在每次循环之后被求值（执行）。其常用于循环执行代码块值定的次数<br>";
//for语句写法
for($i = 1,$sum = 0;$i<=100;$i++){
	$sum = $sum +$i;
}
echo "for语句的运行结果：".$sum."<br><br>";
//while语句写法；
$i = 1;//从1开始累加
$sum = 0;//初始化和为0；
while($i<=100){
	$sum +=$i;
	$i++;
}
echo "while语句的运行结果".$sum."<br><br>";










?>



