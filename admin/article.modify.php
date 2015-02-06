<?php 
	require_once('../connect.php');
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
	<form id="form1" name="form1" method="post" action="article.modify.handle.php">
		<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
		<p>
			<label for="title">标题</label>
			<input type="text" name="title" id="title" value="<?php echo $data['title'] ?>">
		</p>
		<p>
			<label for="author">作者</label>
			<input type="text" name="author" id="author" value="<?php echo $data['author'] ?>">
		</p>
		<p>
			<label for="description">简介</label>
			<textarea name="description" id="description" cols="30" rows="10"><?php echo $data['description'] ?></textarea>
		</p>
		<p>
			<label for="content">内容</label>
			<textarea name="content" id="content" cols="30" rows="10"><?php echo $data['content'] ?></textarea>
		</p>
		<p>
			<input type="submit" value="提交">
		</p>
	</form>
</body>
</html>