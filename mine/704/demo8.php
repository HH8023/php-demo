<?php 
/*
	函数可以先调用，后声明
*/
//正常情况，先声明，后调用
function test(){
	echo 'this is a test';
}
test();
echo '<br>';

//先调用，后声明
say();
function say () {
	echo 'this is a test.';
}





