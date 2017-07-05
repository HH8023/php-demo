<?php 
/*
	递归函数：特点：自己调用自己的函数
	注意：必须满足某个条件才会自己条用自己，否则死循环
*/
function test($n) {
	echo $n, '&nbsp;&nbsp;';
	if ($n > 0) {
		test($n-1);
	}else {
		echo '<-->';
	}
	echo $n, '&nbsp;&nbsp;';
}
test(10);
/* 
	分解
1、 in:10 out:10	,test9,14行没执行
2、 in:9 out:9, test8, 14行没执行
3、 in:8 out:8, test7, 14行没执行
4、 in:7 out:7, test6, 14行没执行
5、 in:6 out:6, test5, 14行没执行
6、in:5 out:5, test4, 14行没执行
7、in:4 out:4, test3, 14行没执行
8、in:3 out:3, test2, 14行没执行
9、in:2 out:2, test1, 14行没执行
10、in:1 out:1, test0, 14行没执行
11、in:0 out:0, 不满足条件，输出<-->,0
12、test1，14行 1
13、 test2,14行 2
 */






