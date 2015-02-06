<?php 
	require_once('connect.php');
	$key = $_GET['key'];
	$sql = "select * from article where title like '$key%' order by dateline desc";
	$query = mysql_query($sql);
	if ($query&&mysql_num_rows($query)) {
		while ($row = mysql_fetch_assoc($query)) {
			$data[] = $row;
		}
	}else{
		$data = array();
	}
 ?>

 <div id="content">
 	<?php 
 		if (empty($data)) {
 			echo "当前没有文章，请在后台添加文章";
 		}else{
 			foreach ($data as $value) {
 	 ?>
	<h3><?php echo $value['title'] ?></h3>
	<span style="color:#eb5555"><?php echo $value['author'] ?></span>
	<p><?php echo $value['content'] ?></p>
	<a href="article.show.php?id=<?php echo $value['id'] ?>">查看详细</a>
 	 <?php 
  			}
 		}	 	

 	  ?>
 </div>