<?php 
	require_once('../connect.php');
	$sql = "select * from article order by dateline desc";
	$query = mysql_query($sql);
	if ($query&&mysql_num_rows($query)) {
		while ($row = mysql_fetch_assoc($query)) {
			$data[] = $row;
		}
	}else{
		$data = array();
	}

 ?>


 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<style>
 		body{
 			margin: 0;
 		}
 		table{
 			width: 800px;
 			margin: 0 auto;
 		}
 		h1{
 			text-align: center;
 		}
 		td{
 			text-align: center;
 		}
 	</style>
 </head>
 <body>
 	<h1>后台管理系统</h1>
 	<table>
 		<thead>
 			<tr>
 				<th>编号</th>
 				<th>标题</th>
 				<th>操作</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php 
 				if (!empty($data)) {
 					foreach ($data as $value) {
 					
 				

 			 ?>
 			<tr>
 				<td><?php echo $value['id'] ?></td>
 				<td><?php echo $value['title'] ?></td>
 				<td>
 					<a href="article.del.handle.php?id=<?php echo $value['id'] ?>">删除</a>
 					<a href="article.modify.php?id=<?php echo $value['id'] ?>">修改</a>
 				</td>
 			</tr>
 			<?php 
 					}
 				}
 			 ?>
 		</tbody>
 	</table>
 </body>
 </html>