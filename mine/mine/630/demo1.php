<?php 
/*
	比较运算符
	>   <   >=   <=   ==：等于   <>：不等于   !=：不等于   !==：不全等于   ===全等
*/
if (2 >= 1) {
	echo '2比1大';
} else {
	echo '2比1小';
}
echo '<br>';

//等于：判断依据：判断的是值，而不是类型
if (2 == '2abc') {
	echo '他们相等';
} else {
	echo '他们不相等';
}
echo '<br>';

//不相等 判断依据：只判断值，不判断类型
if (2 <> 2.345) {
	echo '不相等';
} else {
	echo '相等';
}
echo '<br>';

if (2 != '2') {
	echo 'NO';
} else {
	echo 'YES';
}
echo '<br>';

//===：全等；3个等号，判断依据：值，类型必须都一致，结果才是true
if (2 === '2') {
	echo 'YES';
} else {
	echo 'NO';
}
echo '<br>';

//!==:不全等，判断依据：值，类型都比较，只要有一样不等，结果就是true
if (3 !== '3') { //值一样，类型不一样，返回true
	echo 'YES';
} else {
	echo 'NO';
}
echo '<br>';

if (2 !== 3) { //值不一样，类型一样 返回true
	echo 'YES';
} else {
	echo "NO";
}
echo '<hr>';

if (2 !== 2) { //值和类型都一样，返回false
	echo 'YES';
} else {
	echo 'NO';
}
echo '<hr>';

//$a <=> $b 比较a和b的值，如果a>b，返回1;
//					     如果a==b，返回0;
//						 如果a<b，返回-1;
echo 1 <=> 20, '<hr>';
echo 20 <=> 3, '<hr>';
echo 10 <=> '10', '<br>';













