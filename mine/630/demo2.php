<?php
/*
	错误抑制运算符
	@
*/
//notice 级别的错误，管用
echo $a;
echo @$b;
echo '<hr>';

//warning级别的错误，  管用
var_dump();
@var_dump();

//error 级别的错误 不管用
@test();
