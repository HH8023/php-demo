<?php    

// 1、   trim(两边)   去除字符串首尾处的空白字符(或者其他字符)

// 2、   rtrim()  删除字符串末端的空白字符（或者其他字符）

echo '第1、2、3个字符串函数结果：','<br>';
// 3、   ltrim()  删除字符串开头的空白字符（或者其他字符）
$text = "\t\tThese are a few words:) ...  ";
$trimmed = trim($text);
$rtrimmed = rtrim($text);
$ltrimmed = ltrim($text);
var_dump($trimmed);
var_dump($rtrimmed);
var_dump($ltrimmed);
echo '<hr>';

echo '第4个字符串函数结果：','<br>';
// 4、 htmlspecialchars()   把一些预定义的字符转换为 HTML 实体
$str = 'I love "PHP".';
echo htmlspecialchars($str);
echo '<hr>';

echo '第5个字符串函数结果：','<br>';
// 5、   htmlspecialchars_decode()   把一些预定义的HTML实体转换为字符
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars_decode($str);
echo '<hr>';

echo '第6个字符串函数结果：','<br>';
// 6、   strip_tags()   从字符串中去除HTML和PHP标记
$text = '<p>text paragragh.</p><!--Comment--><a href="#fragment">Other text</a>';
echo $text;
echo '<br>';
echo strip_tags($text);
echo '<hr>';//两个打印出来的对比，后者打印没有a标签的链接

echo '第7个字符串函数结果：','<br>';
// 7、   pathinfo()   返回文件路径的信息
$path_parts = pathinfo('/www/htdocs/inc/lib.inc.php');
echo $path_parts['dirname'], "\n";//返回文件的路径
echo $path_parts['basename'], "\n";//返回文件名和后缀
echo $path_parts['extension'], "\n";//返回文件后缀
echo $path_parts['filename'], "\n";//返回文件名
echo '<hr>';

echo '第8个字符串函数结果：','<br>';
// 8、   dirname()   返回路基中的目录部分
echo dirname("c:/testweb/home.php"),'<br>';
echo dirname("/testweb/home.php");
echo '<hr>';

echo '第9个字符串函数结果：','<br>';
// 9、 str_pad()   使用另一个字符串填充字符串为指定长度
$input = "Alien";
echo str_pad($input,10,'-=');
echo '<hr>';

echo '第10个字符串函数结果：','<br>';
// 10、   str_repeat()   重复一个字符串
echo str_repeat('-=',10);
echo '<hr>';

echo '第11个字符串函数结果：','<br>';
// 11、   strrev()   反转字符串
echo strrev('Hello world');
echo '<hr>';

echo '第12个字符串函数结果：','<br>';
// 12、   str_shuffle()   随机打乱一个字符串
$str = 'abcdef';
$shuffled = str_shuffle($str);
echo $shuffled;
echo '<hr>';

echo '第13个字符串函数结果：','<br>';
// 13、   parse_str()   将字符串解析成多个变量
$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str);
echo $first;  
echo $arr[0];  
echo $arr[1]; 
echo '<hr>';

echo '第14个字符串函数结果：','<br>';
// 14、   parse_url()   解析URL，返回其组成部分
$url = 'http://username:password@hostname/path?arg=value#anchor';
print_r(parse_url($url));
echo '<hr>';

echo '第15个字符串函数结果：','<br>';
// 15、   chr()   返回相对应于ASCII所指定的单个字符
echo chr(61),"<br>";
echo chr(061),'<br>';
echo chr(0x61),'<br>';
echo '<hr>';

echo '第16个字符串函数结果：','<br>';
// 16、   ord()   但会字符串string第一个字符的ASCII码值
echo ord('S');
echo ord('Shanghai');
echo '<hr>';

echo '第17个字符串函数结果：','<br>';
// 17、   strtolower()   将字符串转化为小写
$str = 'ABCDEFG';
$str = strtolower($str);
echo $str;
echo '<hr>';

echo '第18个字符串函数结果：','<br>';
// 18、   strtoupper()   将字符串转化为大写
$str = 'abcdefg';
$str = strtoupper($str);
echo $str;
echo '<hr>';

echo '第19个字符串函数结果：','<br>';
// 19、   ucfirst()   将字符串的首字母转换为大写
$str = 'hello world';
echo ucfirst($str);
echo '<hr>';

echo '第20个字符串函数结果：','<br>';
// 20、   ucwords()   将字符串中每个单词的首字母转换为大写
$str = 'bob jack';
echo ucwords($str);
echo '<hr>';

echo '第21个字符串函数结果：','<br>';
// 21、   explode()   使用一个字符串分割另一个字符串
$name = 'bob jack alien';
$name = explode(' ',$name);
print_r($name);
echo '<hr>';

echo '第22个字符串函数结果：','<br>';
// 22、   inplode()   将一个一维数组的值转化为字符串
$arr = array('bob','jack','name');
echo implode(',',$arr);
echo '<hr>';

echo '第23个字符串函数结果：','<br>';
// 23、   str_replace()   子字符串替换（字符串替换）
$str = str_replace("ll", " nn", "good golly miss molly!", $count);
echo $count;
echo '<hr>';

echo '第24个字符串函数结果：','<br>';
// 24、   substr()   返回字符串的子串（截取字符串）
echo substr('abcdef',1),'<br>';
echo substr('asdfgh',1,3),'<br>';
echo substr('asdfgh',0,4),'<br>';
echo '<hr>';

echo '第25个字符串函数结果：','<br>';
// 25、   substr_replace()   替换字符串的子串（替换字符串中某串为另一个字符串）
$var = 'ABCDEFGH:/MNRPQR/';
echo "Original: $var <hr>\n";
echo substr_replace($var, 'bob', 0);
echo '<hr>';

echo '第26个字符串函数结果：','<br>';
// 26、   strstr()   查找字符串的首次出现，并返回字符串的剩余部分
$email = 'name@example.com';   
$domain = strstr($email,'@');
echo $domain;
echo '<hr>';

echo '第27个字符串函数结果：','<br>';
// 27、  strchr()    查找指定字符在字符串中的最后一次出现
echo strchr('Hello world','world');
echo '<hr>';

echo '第28个字符串函数结果：','<br>';
// 28、   strpos()   查找字符串在另一字符串中第一次出现的位置
echo strpos('You love php,I love php too!','php');
echo '<hr>';//返回索引

echo '第29个字符串函数结果：','<br>';
// 29、   strrpos()   查找字符串在另一字符串中最后一次出现的位置
echo strrpos('You love php,I love php too!','php');
echo '<hr>';

echo '第30个字符串函数结果：','<br>';
// 30、   strlen()   返回字符串的长度
echo strlen('beijing');
echo '<hr>';

echo '第31个字符串函数结果：','<br>';
// 31、   md5()   计算字符串的md5散列值（加密）
$str = 'beijing';
echo md5($str);
echo '<hr>';
