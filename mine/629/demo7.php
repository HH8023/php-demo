<?php 
/*
	常量的定义：使用define(‘常量名’，‘常量值’)；
	注意：1、常量名必须用引号引起来，因为是字符串
		  2、同名的常量不能重复定义，否则会出错
*/

define('PI','3.14159265');
echo PI;

define('PI','3');

//数字不能开头
define('2w','ww');
//echo 2w;//会出错

//思考：变量名区分不区分大小写？   区分
$A = 1;
echo $a;
$a = 2;
echo $a;
echo '<br>';

//思考：常量名区分不区分大小写？   区分
define('rose','she is a beautiful girl!');//常量rose
echo rose;
define('ROSE','哈哈');//常量ROSE
echo ROSE;
echo '<br>';

//常量的检测：defined('常量名');
var_dump(defined('rose'));//true
var_dump(defined(ROSE));//false 注意：常量名必须加引号，否则都是false
var_dump(defined('ROSE'));//true
echo '<br>';

//常量的销毁： 注意  常量是不能销毁的

