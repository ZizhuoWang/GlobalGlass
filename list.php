<?php 
	require_once('connect.php');
	$sql = "select * from article order by dateline desc limit 0,10";
	$query = mysql_query($sql);
	$r=mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM article"));
	$num=$r[0];
	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>文章发布系统</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#">文章列表<sup></sup></a></h1>
		<h2></h2>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="list.php">文章</a></li>
			<li><a href="about.php">关于我们</a></li>
			<li><a href="contact.php">联系我们</a></li>
		</ul>
	</div>
</div>
<!-- end header -->
</div>

<!-- start page -->
<div id="page">
	<!-- start content -->
	<div id="content">
	<?php
		if(empty($data)){	
			echo "当前没有文章，请管理员在后台添加文章";
		}else{
			foreach($data as $value){
	?>
		<div class="post">
			<h1 class="title"><?php echo $value['title']?><span style="color:#ccc;font-size:14px;"></span></h1>

			<div class="meta">
				<p class="links"><a href="show.php?id=<?php echo $value['id']?>" class="more">查看详细</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;</p>
			</div>
		</div>
	<?php
			}
		}
	?>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
<!-- 	<div id="sidebar"> -->
<!-- 		<ul> -->
<!-- 			<li id="search"> -->
<!-- 				<h2><b class="text1">Search</b></h2> -->
<!-- 				<form method="get" action="search.php"> -->
<!-- 					<fieldset> -->
<!-- 					<input type="text" id="s" name="key" value="" placeholder="title" /> -->
<!-- 					<input type="submit" id="x" value="Search" /> -->
<!-- 					</fieldset> -->
<!-- 				</form> -->
<!-- 			</li> -->
<!-- 		</ul> -->
<!-- 	</div> -->
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<div class="page-normal">
<span>1</span>
<?php for ($i=2;$i<=ceil($num/10.0);$i++) {    ?>
<a href="page.php?id=<?php echo $i?>"><?php echo $i?></a>
<?php }?>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	<p id="legal"></p>
</div>
<!-- end footer -->
</body>
</html>