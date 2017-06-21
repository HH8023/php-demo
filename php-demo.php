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
echo "<br>";
?>

<?php
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
);

foreach($students as $key =>$b){
	echo $key.".".$b;//输出学号：姓名；
	echo "<br>";
}
?>

<?php
echo "<br>结构嵌套之条件嵌套：<br>条件结构嵌套就像回家路上遇到的多个十字路口<br>";
$totalMoney = 0;//总工资
$basicMOney = 300;//基本工资
$sex = "男";
$noHouse = true;//是否有房
$houseMoney = 150;//住房补贴
$isPregnancy = true;//是否怀孕
$pregnancyMoney = 100;//怀孕补贴
if($sex == "男"){
	$totalMoney = $basicMOney +0;//男的没有奖金
	if($noHouse){
		$totalMoney = $totalMoney + $houseMoney;
	}
}else if($sex =="女"){
	$totalMoney = $basicMOney +$basicMOney;//女的有奖金
	if($isPregnancy){
		$totalMoney = $totalMoney + $pregnancyMoney;
	}
}
echo $totalMoney;
?>

<?php
echo "<br>循环结构嵌套:<br>就是类似于跑多个足球场，例如假设两个足球场，一个大足球场，一个小足球场，在打足球场跑一圈后，再到小足球场跑几圈，跑完几圈后，再到大足球场中继续跑，在遍历二维数组中很常用。<br>";
$students = array(
'1'=>array('令狐冲',"59"),
'2'=>array('林平之',"44"),
'3'=>array('曲洋',"89"),
'4'=>array('任盈盈',"92"),
'5'=>array('向问天',"93"),
'6'=>array('任我行',"87"),
'7'=>array('冲虚',"58"),
'8'=>array('方正',"74"),
'9'=>array('岳不群',"91"),
'10'=>array('宁中则',"90"),
);
foreach($students as $key=>$val){
	echo $key;
	echo ".";
	foreach($val as $v){
		echo $v;
	}
	echo "<br>";
}
?>
<?php
$students = array(
'2010'=>'令狐冲',
'2011'=>'林平之',
'2012'=>'曲洋',
'2013'=>'任盈盈',
'2014'=>'向问天',
'2015'=>'任我行',
'2016'=>'冲虚',
'2017'=>'方正',
'2018'=>'岳不群',
'2019'=>'宁中则',
);//学生的学号和姓名，用数组存储；
$query = '2014';//使用循环结构遍历数组，获取学号和姓名；
foreach($students as $key=>$v){
	if($key == $query){//使用条件结构，判断学号和姓名
		echo $v;//输出姓名；
		break;//结束循环
	}
};
?>




















