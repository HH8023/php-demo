<?php 
/*
	默认情况下，形参&实参的数目是相等的，并且使用的时候一一对应
*/
function sum ($a, $b){
	echo $a+$b;
}
sum(2,3);
sum(2);//实参<形参，报错
echo '<hr>';

/*
	实参>形参的数目
	结论，只取对应形参数目的实参，其他多余的实参丢弃不管
*/
sum(1,2,3,4,5);//要2个，给5个，没报错，返回3，其余的实参，丢弃
echo '<hr>';

/*
	实参<形参的数目，默认会报错，说参数丢失，解决方法，使用默认值方式
	作用：此处sex使用了默认值，意味着，如果你传了sex，就用你传的，如果不传，就用默认的
	注意：使用默认值的形参，必须往后放！
*/
function getInfo ($name,$age,$sex='男'){
	echo '我的名字是：',$name,'我的年龄是：',$age,'我的性别是：',$sex,'<br>';
}
getInfo('张三','18','女');//sex是女，因为传了，所以用传的值
//getInfo('李四','20',);//sex是男，因为没传，所以用默认值
echo '<hr>';

/*
	实参数目不固定
	借助系统的3个函数
	func_num_args():返回实参的数目
	
	func_get_args():返回实参的列表，返回值是数组
	func_get_arg();返回某个实参
*/
function test() {
	$sum = func_num_args();
	echo '你传入的参数有' .$sum.'个。<br>';
}
test(1,2,3,4,5);
test('a','b','c');
test();
echo '<hr>';


























