<?php 
/*
	逻辑运算符
	and   or   xor   !   &&   ||   
*/
//逻辑与 and:要求两侧都是true，结果才是true
if (2 > 1 and 3 > 2) { //2>1是true；3>2是true；true && true;结果就是true
	echo 'YES';
} else {
	echo 'NO';
}
echo '<hr>';

if (2 > 1 and 2 > 3) { //2>1 是true,2>3是false，true && false是false;
	echo 'YES';
} else {
	echo 'NO';
}
echo "<hr>";

//逻辑与  && ：计算规则和and一样
if ('' && 1) { //''是false,1是true，false && true 结果是false
	echo 'YES';
} else {
	echo 'NO';
}
echo "<hr>";

//逻辑或 or :规则：两侧只要有一个是true，结果就是true
if ('' or null) { //''是false，null是false,false or false结果是false
	echo 'YES';
} else {
	echo 'NO';
}
echo '<hr>';

if (0 or 1) { //0是false，1是true，false or true 结果是true
	echo 'yes';
} else {
	echo 'no';
}
echo '<hr>';

//逻辑异或 xor:规则：两侧必须不一样，一个为true，一个为false，结果才是true
//eg:两侧为真
if ('1' xor '2.345asd') { //1为true，'2.345asd'是true；true xor true 结果是false;
	echo 'yes';
} else {
	echo 'no';
}
echo '<hr>';

//eg:两侧为假
if ('' xor null) { //''是false,null是 false,false xor false 结果是false
	echo 'yes';
} else {
	echo 'no';
}
echo "<hr>";

//一真一假
if (true xor '') { //true是真，''是假，true xor false 结果为true
	echo 'yes';
} else {
	echo 'no';
}
echo '<hr>';

//!:逻辑非，逻辑取反，原来是true,变为false。原来是false，变为true；
if (!'') {// '' 是false， !''是true；
	echo 'yes';
} else {
	echo 'no';
}
echo '<hr>';

if (!true) { //!true 结果是false
	echo 'yes';
} else {
	echo 'no';
}




















