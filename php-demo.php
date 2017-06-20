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
echo "for(初始化；循环条件；递增项）{<br>
	//执行任务<br>
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

<?php
echo "<br>循环结构foreach循环语句<br>";
echo "在PHP中foreach循环语句，常用于遍历数组，一般有两种使用方式：不取下标；取下标。<br>";
echo "第一种：只取值，不取下标:<strong>（用as表示）</strong><br>
foreach（数组 as 值）{<br>
//执行的任务<br>
}<br>";
echo "第二种：<strong>同时取下标和值,（用as和=>表示）</strong><br>
foreach（数组 as 下标 => 值）{<br>
//执行的任务<br>
}<br>";
$students = array(
'1'=>'令狐冲',
'2'=>'林平之',
'3'=>'曲洋',
'4'=>'任盈盈',
'5'=>'向问天',
'6'=>'任我行',
'7'=>'冲虚',
'8'=>'方正',
'9'=>'岳不群',
'10'=>'宁中则',
);//10个学生的号码和姓名，用数组存储
//使用循环结构遍历数组，获取学号和姓名
foreach($students as $a){
	echo $a;//输出姓名
	echo "<br>";
}




?>



























