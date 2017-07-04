<?php 
/*
	流程控制的替代语法
	开始花括号替换为  ：
	结束花括号替换为  endxxx;
*/
if (true) :
	echo 123;
endif;
echo '<hr>';

for ($i = 0; $i < 9; $i++) :
	echo $i, '<br>';
endfor;
echo '<hr>';

if(true) {
	echo 1123;
}





