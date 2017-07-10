<?php 
/*
	分支
	单向分支
	if (判断条件) {
		判断条件为真时，执行
	}
*/
if (true) {
	echo '为真输出';
}

if (-2 > 1) {
	echo '-2比1大';
}
echo '<hr>';

/*
	双向分支
	if (判断条件) {
		条件为真时执行；
	} else {
		条件为假时执行；
	}
*/
$age = 19;
if ($age > 18) { //false
	echo '太大了！';
} else {
	echo '正好';
}
echo '<hr>';

/*
	多向分支
	if (表达式1) {
		表达式1为真时执行；
	} else if (表达式2) {
		表达式2为真时执行；
	} else if (表达式N) {
		表达式N为真时执行；
	} else {
		最终为假时执行
	}
	注意：只要满足某个条件，直接执行对应的代码，执行完成后，退出
	
	注意:多向分支定义判断条件时，可以匹配的范围是逐步扩大，而不是缩小，
	这样更合理
*/
$fenShu = 90;
if($fenShu > 90) {
	echo '给你买你想要的<br>'; 
} else if ($fenShu > 80) {
	echo '给你买一部苹果手机';
} else if ($fenShu > 70) {
	echo '你要的玩具给你';
} else if ($fenShu > 60) {
	echo '给你买水果吃';
} else {
	echo '什么都不给你买';
}

//翻转
if ($fenShu > 60) {
	echo '给你买水果吃<br>';
} else if ($fenShu > 70) {
	echo '你要的玩具给你';
} else if ($fenShu > 80) {
	echo '给你买一部苹果手机';
} else if ($fenShu > 90) {
	echo '给你买你想要的';
} else {
	echo '什么都不给你买';
}

























