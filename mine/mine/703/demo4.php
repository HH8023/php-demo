<?php 
/*
	流程中断关键词
	break:
	continue:
*/
for ($i = 1;$i <= 9;$i++) {
	if ($i ==5) {
		//break 2;//结束循环
		break;
	}
	echo $i, '<br>';
}

//echo $i;
echo '<hr>';

//continue
for ($i = 1;$i <= 9;$i++) {
	if ($i == 5) {
		continue;//跳过当前|本次循环
	}
	echo $i, '<br>';
}

