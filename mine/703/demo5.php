<?php 
/*
	php引入外部文件的方式
	require：
	include:
*/
//require 'demo1.php';//相当于把demo1中的代码复制到当前页面
//include 'demo1.php';
//echo $str;

//require 'test.php';//报错：致命错误，后续代码不执行
//include 'test.php';//报错，警告，后续代码继续始终
//echo 123;

/*
	前方高能：
	require,include对路径的计算
*/
require './test/test.html';
//<!DOCTYPE html>
//<html>
//	<head>
//		<meta charset="utf-8">
//		<title>test</title>
//	</head>
//	<body>
//		<img src="test/2.jpg">
//	</body>
//</html>







