﻿<?php
define("PI",3.14);
$r = 3;
echo "面积为：".(PI*$r*$r)."<br>";
echo "周长为：".(2*PI*$r)."<br>";
echo "<br>------------------<br>";
echo "系统常量：系统常量是PHP已经定义好的常量，我们可以直接拿来使用，常见的常量有：1）__FILE__:php程序文件名；（它可以帮助我们获取当前文件在服务器的物理位置）；2）__LINE__：PHP程序文件行数（它可以告诉我们，当前代码在第几行）；3）PHP_VERSION：当前解析器的版本号（它可以告诉我们当前PHP解析器的版本号，我们可以提前知道我们的PHP代码是否可被该PHP解析器解析；4）PHP_OS:执行当前PHP版本的操作系统名称（它可以告诉我们服务器所用的操作系统名称，我们可以根据该操作系统优化我们的代码）<br>";
echo __FILE__;//两个下划线'_''_'
echo "<br>";
echo __LINE__;
echo "<br>";
echo PHP_VERSION;
echo "<br>";
echo PHP_OS;
echo "<br>";
echo "<br>------------------<br>";
echo "常量如何取值：2种方法,第一是使用常量名直接获取值；例如计算圆周率的面积（“*”是运算符，相当于乘号）；第二是使用constant()函数，它和直接使用常量名输出的效果是一样的，但是函数可以动态的输出不同的常量，在使用上要灵活、方便，如：mixed constant(string constant_name);--第一个参数constant_name是要获取常量的名称，也可以存储常量名的变量，如果成功则返回常量的值，失败则提示错误信息常量没有被定义。(注意：mixed表示函数返回值类型为多种不同的类型，string表示参数类型为字符串类型);<br>";
$p = "";//定义圆周率的两种取值；
define("PI1",3.14);
define("PI2",3.142);//定义值的精度；
$height = "中";//根据精度返回常量名，将常量变成了一个可变的常量;
if($height == "中"){
	$p = "PI1";
}else if($height =="低"){
	$p = "PI2";
}
$r = 1;
$area = constant($p)*$r*$r;
echo $area;
echo "<br>------------------<br>";
echo "如何判断常量是否被定义：如果常量被重复定义以后，PHP解析器会发出“Constant XXX already defined”的警告，提示我么该常量已经被定义过，那么在团队开发，或代码很大的情况下，我们怎样判断一个常量是否被定义呢？ defined()函数可以帮助我们判断一个常量是否已经定义，其语法格式为：bool defined(string constant_name)它只有参数constant_name，指的是要获取常量的名称，若存在则返回布尔类型true，否则返回false（注：bool表示函数返回值类型为布尔类型）<br>";
define("PIa",3.14);
$p = "PIa";
$is1 = defined($p);
$is2 = defined("PIb");
var_dump($is1);
var_dump($is2);
echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";

?>