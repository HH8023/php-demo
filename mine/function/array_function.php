<?php    
//array function 
echo '第1--6是数组的键名和值','<br>';
echo '&nbsp;&nbsp;第1个array function：','<br>';
// 1、   array_values()   返回数组中所有的值
$array = array("size"=>"XL", "color"=>"gold");
print_r ( array_values ( $array ));
echo '<hr>';

echo '第2个array function：','<br>';
// 2、   array_keys()   返回数组中所有的键名
$array = array(0=>100, "color"=>"red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));
echo '<hr>';

echo '第3个array function：','<br>';
// 3、   array_flip()   交换数组中的键和值（如果有重复前面的会被后面的覆盖）
$trans = array("a"=>1, "b"=>1, "c"=>2);
$trans = array_flip($trans);
print_r($trans);
echo '<hr>';

echo '第4个array function：','<br>';
// 4、   in_array()   检查数组中是否存在某个值
$a = array('1.10',12.4,1.13);
if (in_array('12.4',$a,true)) {
    echo "'12.4' found with strict check\n";
}
if (in_array(1.13,$a,true)) {
   echo "1.13 found with strict check\n";
}//区分字符串和整型
echo '<hr>';

echo '第5个array function：','<br>';
// 5、   array_search()   在数组中搜索给定的值，如果成功则返回响应的键名
$array = array(0=>'blue',1=>'red',2=>'green',3=>'red');
$key = array_search('green',$array);  
var_dump($key);
echo '<hr>';

echo '第6个array function：','<br>';
// 6、   array_key_exists()   检查给定的键名或索引是否存在于数组中
$search_array = array('first'=>1,'second'=>4);
if (array_key_exists('first',$search_array)) {
    echo "The 'first' element is in the array";
}
echo '<hr>';

echo '第7--12是数组的内部指针','<br>';
echo '第7、8、9个array function：','<br>';
// 7、   current()   返回数组中的当前单元
// 8、   next()   将数组中的内部指针向前移动一位
// 9、   prev()   将数组的内部指针倒回一位
$transport = array('foot','bike','car','plane');
$mode = current($transport);
echo $mode,'<br>';
$mode = next($transport);
echo $mode,'<br>';
$mode = next($transport);
echo $mode,'<br>';
$mode = prev($transport);
echo $mode,'<br>';
echo '<hr>';

echo '第10、11个array function：','<br>';
// 10、   end()   将数组的内部指针指向最后一个单元
// 11、   reset()   将数组的内部指针指向第一个单元
$fruits = array('apple','banana','cranberry');
echo end($fruits),'<br>';
echo reset($fruits);
echo '<hr>';

echo '第12个array function：','<br>';
// 12、   key()   返回数组内部指针当前指向元素的键名
$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'banana');
echo key($array),'<br>';
echo end($array),'<br>';
echo key($array);
echo '<hr>';

echo '第13--15是数组的分段和填充','<br>';
echo '&nbsp;&nbsp;第13个array function：','<br>';
// 13、   array_slice()   从数组中取出一段
$input = array('a','b','c','d','e');
$output = array_slice($input,2);
$output = array_slice($input,-2,1);
$output = array_slice($input,0,3);
print_r(array_slice($input,2,-1));
print_r(array_slice($input,2,-1,true));
echo '<hr>';

echo '第14个array function：','<br>';
// 14、   array_splice()   把数组中的一部分去掉并用其他值取代
$a1=array(0=>'Dog',1=>'Cat',2=>'Horse',3=>'Bird');
$a2=array(0=>'Tiger',1=>'Lion');
array_splice($a1,0,2,$a2);
print_r($a1);
echo '<hr>';

echo '第15个array function：','<br>';
// 15、   array_pad()   用值将数组填补到指定长度
$input = array(12,10,9);
$result = array_pad($input,10,'a');
print_r($result);
echo '<hr>';

echo '第16--19数组与栈/队列';
echo '第16个array function：','<br>';
// 16、   array_push()   将一个或多个单元压入数组的末尾（入栈）
$stack = array("orange","banana");
array_push($stack,"apple","raspberry");
print_r($stack);
echo '<hr>';

echo '第17个array function：','<br>';
// 17、   array_pop()   将数组最后一个单元弹出（出栈）
$stack = array('orange','banana','apple','raspberry');
$fruit = array_pop($stack);
print_r($stack);
echo '<hr>';

echo '第18个array function：','<br>';
// 18、   array_shift()   将数组开头的单元移出数组
$stack = array('orange','banana','apple','raspberry');
$fruit = array_shift($stack);
print_r($stack);
echo '<hr>';

echo '第19个array function：','<br>';
// 19、   array_unshift()   在数组开头插入一个或多个单元
$queue = array('orange','banana');
array_unshift($queue,'apple','raspberry');
print_r($queue);
echo '<hr>';

echo '第20--27是数组排序:','<br>';
echo '&nbsp;第20个array function：','<br>';
// 20、   sort()   本函数对数组进行【排序，当本函数结束时数组单元将被从最低到最高重新安排，不保持索引关系
$fruits = array('lemon','orange','banana','apple');
sort($fruits);
print_r($fruits);
echo '<hr>';

echo '第21个array function：','<br>';
// 21、   rsort()   对数组逆向排序
$fruits = array('lemon','orange','banana','apple');
rsort($fruits);
print_r($fruits);
echo '<hr>';

echo '第22个array function：','<br>';
// 22、   asort()   对数组进行排序并保持索引关系
$fruits = array('d'=>'lemon','a'=>'orange','b'=>'banana','c'=>'apple');
asort($fruits);
print_r($fruits);
echo '<hr>';

echo '第23个array function：','<br>';
// 23、   arsort()   对数组进行逆向并保持索引关系
$fruits = array('d'=>'lemon','a'=>'orange','b'=>'banana','c'=>'apple');
arsort($fruits);
print_r($fruits);
echo '<hr>';

echo '第24个array function：','<br>';
// 24、   ksort()   对数组按照键名排序
$fruits = array('d'=>'lemon','a'=>'orange','b'=>'banana','c'=>'apple');
ksort($fruits);
print_r($fruits);
echo '<hr>';

echo '第25个array function：','<br>';
// 25、   krsort()   对数组按照键名逆向排序
$fruits = array('d'=>'lemon','a'=>'orange','b'=>'banana','c'=>'apple');
ksort($fruits);
print_r($fruits);
echo '<hr>';

echo '第26个array function：','<br>';
// 26、   natsort()   用’自然排序’算法对数组排序
$array1 = array('img12.png','img10.png','img2.png','img1.png');
natsort($array1);
print_r($array1);
echo '<hr>';

echo '第27个array function：','<br>';
// 27、   natcasesort()   用'自然排序'算法对数组进行不区分大小写字母的排序
$array1 = array('IMG0.png','img12.png','img10.png','img2.png','img1.png','IMG3.png');
natcasesort($array1);
print_r($array1);
echo '<hr>';

echo '第28个array function：','<br>';
// 28、   array_sum()   计算数组中所有值的和
$a = array(2,4,6,8);
echo 'sum(a)='.array_sum($a)."\n";
echo '<hr>';

echo '第29个array function：','<br>';
// 29、   array_merge()   合并一个或多个数组
$array1 = array('color'=>'red',2,4);
$array2 = array('a','b','color'=>'green','shape'=>'trapezoid',4);
$result = array_merge($array1,$array2);
print_r($result);
echo '<hr>';

echo '第30个array function：','<br>';
// 30、   array_diff()   计算数组的差集
$array1 = array('a'=>'green','red','blue','red');
$array2 = array('b'=>'green','yellow','red');
$result = array_diff($array1,$array2);
print_r($result);
echo '<hr>';

echo '第31个array function：','<br>';
// 31、   array_diff_assoc()   带索引检查计算数组的差集
$array1 = array('a'=>'green','b'=>'brown','c'=>'blue','red');
$array2 = array('a'=>'green','yellow','red');
$result = array_diff_assoc($array1,$array2);
print_r($result);
echo '<hr>';

echo '第32个array function：','<br>';
// 32、   array_intersect()   计算数字的交集
$array1 = array('a'=>'green','red','blue');
$array2 = array('b'=>'green','yellow','red');
$result = array_intersect($array1,$array2);
print_r($result);
echo '<hr>';

echo '第33个array function：','<br>';
// 33、   array_intersect_assoc()   带索引检查计算数组的交集
$array1 = array('a'=>'green','b'=>'brown','c'=>'blue','red');
$array2 = array('a'=>'green','b'=>'yellow','blue','red');
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);
echo '<hr>';

echo '第34个array function：','<br>';
// 34、   array_combine()   创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);
echo '<hr>';

echo '第35个array function：','<br>';
// 35、   array_unique()   移除数组中重复的值
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);
echo '<hr>';

echo '第36个array function：','<br>';
// 36、   shuffle()   将数组打乱
$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
echo '<hr>';

echo '第37个array function：','<br>';
// 37、   array_rand()   从数组中随机取出一个或多个单元
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]]. "\n";
echo $input[$rand_keys[1]]. "\n";
echo '<hr>';

echo '第38个array function：','<br>';
// 38、   compact()   建立一个数组，包括变量名和他们的值
$firstname = "Peter";
$lastname = "Griffin";
$age = "38";
$result = compact("firstname","lastname","age");
print_r($result);
echo '<hr>';

echo '第39个array function：','<br>';
// 39、   substr_count()   计算字串出现的次数
$str = 'this is nice.';
echo substr_count($str,'is');
echo '<hr>';
