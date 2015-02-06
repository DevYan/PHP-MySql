<?php 
	require_once('connect.php');
	//读取旧信息
	$id = $_GET['id'];
	$query = mysql_query("select * from article where id='$id'");
	$data = mysql_fetch_assoc($query);
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
	</style>
</head>
<body>
	<h1 id="title"><?php echo $data['title'] ?></h1>
	<p><?php echo $data['content'] ?></p>
</body>
</html>