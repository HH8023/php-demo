<?php 
/* 
	定义一个可以输出N行N列的函数，隔行换色
*/
function getTable ($n, $m) {
	$str = <<<EOF
	<!doctype html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>手动的10*10表格</title>
			<style>
				tr{
					height:30px;
				}
				td{
					width:30px;
				}
			</style>
		</head>
		<body>
			<table border="1">
EOF;
	echo $str;
	for ($i = 1;$i <= $n;$i++) {
		if ($i % 2 == 0) {
			echo '<tr bgcolor="#ccc">';
		} else {
			echo '<tr bgcolor="red">';
		}
			for ($j = 1;$j <= $m; $j++) {
				echo '<td>', ($i-1)*$m+$j, '</td>';
			}
		echo '</td>';	
	}
	$str = <<<EOF
			</table>
		</body>
	</html>
EOF;
	echo $str,'<hr>';
}
getTable(10,10);
getTable(5,10);
getTable(5,5);
