<?php 
//数字函数
//1、abs()  绝对值函数
echo $abs=abs(-2.5);
echo '<hr>';//2.5

//2、ceil()   进一法取整
echo ceil(3.221134);
echo '<hr>';//4

//3、floor()   舍去法取整
echo floor(2.465456);
echo '<hr>';//2

//4、fmod()   浮点数取余
$x = 23;
$y = 1.5;
$z = fmod($x,$y);
echo $z;
echo '<hr>';//0.5

//5、pow()  返回 数的n次方
echo pow(-2,3);
echo pow(2.3,2);
echo '<hr>';//-8   5.29

//6、round()   浮点数四舍五入
echo round(1.43578,3);
echo '<hr>';//1.436

//7、sqrt()   求平方
echo sqrt(25);
echo '<hr>';//5

//8、max()  求最大值
echo max(2,4,67,8,32);
echo '<hr>';//67

//9、min()   求最小值
echo min(2,4,67,22,1);
echo '<hr>';//1

//10、mt_rand()  更好的随机数
echo mt_rand(1,33);
echo '<hr>';//随机数

//11、 rand()   随机数
echo rand(1,33);
echo '<hr>';

//12、  pi()   获取圆周率值
echo pi();
echo '<hr>';//3.1415926535898

//13、 intval()  获取变量的整数值
echo intval(-3.5);
echo '<hr>';//-3

