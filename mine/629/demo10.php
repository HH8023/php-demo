<?php
/*
	字符串连接运算符：
	作用：连接字符串；
*/
$str = '只有能力强会被' . '当成纯技术人员，' . '而光会社交拍马屁的' . '又会被认为没有真才实学。';
echo $str;
//注意：使用echo输出的时候，可以使用逗号，也可以使用点，使用逗号效率略高；
echo '<br>';

//注意：还有一个变种
// .=   $a .= $b  就等于  $a = $a . $b;
$str1 = 'hello';
$str2 = ',world';
$str1 .= $str2;//$str1 = $str1 . $str2;
echo $str1; 