<?php 
	require_once('connect.php');
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

<form action="article.search.php" method="get">
	<fieldset>
		<input type="text" id="s" name="key" value=""/>
		<input type="submit" id="x" value="Search"/>
	</fieldset>
</form>
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