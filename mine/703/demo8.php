<?php 
/*
	输出一个10*10的表格
*/
$str =<<<EOF
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>手动的10*10的表格</title>
		<style>
			tr{
				height:50px;
			}
			td{
				width:50px;
			}
		</style>
	</head>
	<body>
		<table border="1">
EOF;
echo $str;
for ($i = 1; $i <= 10; $i++) {
	echo '<tr>';
		for ($j = 1;$j <= 10; $j++) {
			echo '<td>', ($i-1)*10+$j, '</td>';
		}
	echo '</tr>';
}
$str = <<<EOF
		</table>
	</body>
</html>
EOF;
echo $str;


