<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>用户信息表</title>
		<style>
			table{
				margin:0 auto;
			}
			th{
				width:100px;
			}
			tr{
				height:30px;
				text-align:center;
			}
		</style>
	</head>
	<body>
		<table border="1">
			<tr>
				<th>编号</th>
				<th>用户名</th>
				<th>权限</th>
				<th>状态</th>
				<th>性别</th>
			</tr>
			<?php 
				require_once 'info.php';
				//var_dump($userInfo);
				foreach($userInfo as $k=>$v){
					if ($k%2 == 0){
						echo '<tr bfcolor="blue"';
					}else {
						echo '<tr bgcolor="$ccc"';
					}	
			?>	
				<td></td>
				<td><?= $k+1;?></td>
				<td><?= $v['name'];?></td>
				<td><?php echo $v['auth']?'管理员':'普通用户';?></td>
				<td>
					<?php 
					echo $v['status']?'禁用':'启用';?>
				</td>
				<td><?= $v['sex']?'男':'女';?></td>
			</tr>	
			<?php 	
				}
			?>	
		</table>	
	</body>
</html>