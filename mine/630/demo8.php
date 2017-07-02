<?php 
/*
	switch...case
*/
$day = 1;
/*
	结果：都有
	
	注意：使用switch...case 的时候，注意：每个语句块之后都需要加break，
	
	否则的话，只要满足某一个，后续的代码不会判断，全部执行
*/
//错误方式
switch ($day) {
	case 1:
		echo '星期一<br>';
	case 2:
		echo '星期二<br>';
	case 3:
		echo '星期三<br>';
	case 4:
		echo '星期四<br>';
	case 5:
		echo '星期五<br>';
	default :
		echo '加班中。。。';
}
echo '<hr>';
$day = 1;
//正确方式
switch ($day) {
	case 1:
		echo '星期一<br>';
		break;
	case 2:
		echo '星期二<br>';
		break;
	case 3:
		echo '星期三<br>';
		break;
	case 4:
		echo '星期四<br>';
		break;
	case 5:
		echo '星期五<br>';
		break;
	default :
		echo '加班中。。。';
}

//注意：switch ... case 只能匹配明确的值，而不能是范围
//$fenShu = 90;
//switch ($fenShu) {
//	case > 90:
//		echo '不错';
//		break;
//	case > 80:
//		echo '还行';
//		break;
//	case > 70:
//		echo '将就';
//		break;
//	case > 60:
//		echo '锤子';
//}







































