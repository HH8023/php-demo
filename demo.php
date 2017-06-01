<?php
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
echo "5、运算符：算术运算符、赋值运算符、比较运算符、三元运算符、逻辑运算符、字符串连接运算符、错误控制运算符。<br>";
$a = 1;
$b = 1;
$c = $a + $b;
echo $c;

echo "<br>------------------<br>";
echo "算术运算符，主要用于进行算术运算的。“+”、“-”、“*”、“/”、“%”，依次是加减乘除取余。<br>";
$english = 110;
$math = 119;
$biological = 80;//生物成绩
$physical = 90;//物理成绩
$sum = $english+$math+$biological+$physical;
$avg = $sum/4;
$x = $math-$english;
$x2 = $english*$english;
echo "总分：".$sum."<br>";
echo "平均分：".$avg."<br>";
echo "数学比英语高的分数：".$x."<br>";
echo "英语成绩的平方：".$x2."<br>";

echo "<br>------------------<br>";
echo "赋值运算符：有两种，1）、“=”：把右边表达式的值赋给左边的运算数。它将右边表达式值复制一份，交给左边的运算数。换言之，首先给左边的运算数申请了一块内存，然后把复制的值放到这个内存中。2）“&”：引用赋值，意味着两个变量都指向同一个数据，它将使两个变量共享一块内存，如果这个内存存储的数据变了，那么两个变量的值都会发生变化。<br>";
$a = "我在宿舍写php！";
$b = $a;
$c = &$a;
$a = "我每天都在宿舍写PHP！";
echo $b."<br>";
echo $c."<br>";

echo "<br>------------------<br>";
echo "比较运算符主要是用于进行比较运算的，例如：等于、全等、不等、大于、小于。<br>";
$x = 1;
$y = "1";
var_dump($x == $y);//等于
echo "<br>";
var_dump($x === $y);//全等
echo "<br>";
var_dump($x != $y);//不等于
echo "<br>";
var_dump($x <> $y);//不等于
echo "<br>";
var_dump($x !== $y);//不全等（value不同或者是类型不同）
echo "<br>";
var_dump($x < $y);//小于
echo "<br>";

$z = 5;
var_dump($x < $z);
echo "<br>";
var_dump($x > $z);
echo "<br>";
var_dump($x <= $z);
echo "<br>";
var_dump($x >= $z);
echo "<br>";
var_dump($x >= $y);
echo "<br>";
echo "<br>------------------<br>";
echo "三元运算符：（“？：”）三元运算符也是一个比较运算符，对于表达式（expr1)?(expr2):(expr3),如果expr1的值为true，则表达式的值为expr2，否则为expr3.<br>";
$fen = 78;//成绩
$jieguo = $fen >=60?"及格":"不及格";
echo "$jieguo";
echo "<br>------------------<br>";
echo "逻辑运算符：1）逻辑与：要求所有人都投票同意，才会通过某协议；2）逻辑或：只要求一个人投票同意就行；3）逻辑异或：只能有且只能有一个人投票同意；4）逻辑非：某个人要反对，但是通过逻辑非，使其反对无效；<br>逻辑与和逻辑或各有两种表示形式运算符，原因是他们运算的优先级不同。<br>";
$e = TRUE;//e同意
$f = TRUE;//f同意
$g = false;//不同意
$h = false;//不同意
echo ($e and $f)?"通过":"不通过";//逻辑与
echo "<br>";
echo ($e or $g)?"通过":"不通过";//逻辑或
echo "<br>";
echo ($e xor $g xor $h)?"通过":"不通过";//逻辑异或
echo "<br>";
echo !$g?"通过":"不通过";//逻辑非
echo "<br>";
echo $e && $h?"通过":"不通过";//逻辑与
echo "<br>";
echo $f ||$g ||$h?"通过":"不通过";//逻辑或

echo "<br>------------------<br>";
echo "字符串连接运算符：为了将两个字符串进行连接，PHP中提供的字符串连接运算符有：1）连接运算符（“.”）:它返回将右参数附加到左参数后面所得的字符串；2）连接赋值运算符（“.=”）：它将右边参数附加到左边的参数后。<br>";
//phpinfo();//获取系统的信息；
$zhang = "张先生";
$tip = $zhang."，欢迎学习PHP";

$bi = "东边日出西边雨";
$bi .="，道是无晴却有晴";

$sei = "东边日出西边雨";
$sei = $sei."，道是无晴却有晴";

echo $tip."<br>";
echo $bi."<br>";
echo $sei."<br>";
echo "<br>------------------<br>";
echo "错误控制运算符：PHP中提供一个错误控制运算符“@”，对于一些可能会在运行过程中出错的表达式时，我们不希望出错的时候给客户显示错误信息，这样对用户不友好，于是，可以将@放置在一个PHP表达式之前，该表达式可能产生的任何错误信息都被忽略掉；<br>  &nbsp&nbsp&nbsp&nbsp如果激活了track_error（这个玩意在php.ini中设置）特性，表达式所产生的任何错误信息都被存放在变量“php_errormsg”中，此变量在每次出错时都会被覆盖，所以如果想用它的话必须尽早检查。<br>&nbsp&nbsp&nbsp&nbsp需要注意的是：错误控制前缀@不会屏蔽解析错误的信息，不能把它放在后函数或类的定义之前，也不能用于条件结构例如if和for each等。<br>";
$conn = @mysql_connect("localhost","username","password");
echo "出错了，错误原因是：".$php_errormsg;

echo "<br>------------------<br>";
echo "PHP中算术运算符2：假设一个考场安排了一场考试，对考生从1开始，都进行了编号，那么怎么让服务器帮助我们计算考生在的位置呢，进而打印考场的考生对照表呢？<br>";
$maxLine = 4;//每排的人数
$num = 18;//学生编号
$line = ceil($num/$maxLine);
$row = $num%$maxLine?$num%$maxLine:$maxLine;
echo "编号<b>".$num."</b>的座位在第<b>".$line."</b>排第<b>".$row."</b>个位置";

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


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";


echo "<br>------------------<br>";

?>