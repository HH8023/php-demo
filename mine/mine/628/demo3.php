<?php
/*
	整型：
	进制
*/
//二进制 表示方法：0b..
$erjinzhi = 0b111;
/*
	计算规则：从右往左。
	1*2^0+1*2^1+1*2^2 = 1 + 2 + 4 = 7;
*/
echo $erjinzhi;
echo '<br>';

//八进制 表示方法：0...;
$bajinzhi = 077;
//计算：7*8^0 + 7*8^1 = 7 + 56 = 63;
echo $bajinzhi;
echo "<br>";

//十进制 直接写
$shijinzhi = 10001;
echo $shijinzhi;
echo "<br>";

//十六进制 表示方法：0x...;
$hex = 0xff;
//15*16^0 + 15*16^1 = 15 + 240 =255;
echo $hex;
