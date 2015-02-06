<?php 
	require_once('../connect.php');
	//把传递过来的信息入库
	$id = $_POST['id'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$dateline = time();
	$updatesql = "update article
		set title = '$title',author = '$author' ,
		description = '$description' , content = '$content',
		dateline = '$dateline' where id = '$id'";
	if (mysql_query($updatesql)) {
		echo "<script>alert('更新成功');window.location.href='article.modify.php'</script>";
	}else{
		echo "<script>alert('更新失败');window.location.href='article.modify.php'</script>";
	}

 ?>