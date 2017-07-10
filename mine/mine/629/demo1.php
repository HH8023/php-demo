<?php 
/*
	字符串的定义方式：
		heredoc:
		格式：
		<<<开始标记
		内容。。。
		结束标记
		注意：1、开始结束标记随意写，但是要一致
			  2、标记独占一行
			  3、结束标记前面什么都不能有，包括空格
*/
$st = '这是一个变量';
$str = <<<EOF
只要是石头，在哪里都\n\r不会发光.
$st
最后随便写点什么。
EOF;
echo $str;
echo "<br>";

//nowdoc格式
/*
	定义格式：和heredoc一样，不过是开始标记上加个单引号
*/
$str = <<<'E'
就随便写\n\r点没用的，
$st
不知道写什么。
E;
echo $str;




