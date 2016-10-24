<?php
require_once '../connect.php';
$id=$_GET['id'];
$query=mysql_query("select * from article where id=$id");
$data=mysql_fetch_assoc($query);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>修改文章</title>
<style type="text/css">
body{
	margin:0;
}
</style>
<link href="utf8-php/themes/default/css/ueditor.css" type="text/css"
	rel="stylesheet">
<script type="text/javascript"
	src="utf8-php/third-party/jquery-1.10.2.min.js"></script>
<script type="text/javascript" charset="utf-8"
	src="utf8-php/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8"
	src="utf8-php/ueditor.all.js"></script>
<script type="text/javascript" src="utf8-php/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
<tr>
<td height="89" colspan="2" bgcolor="#FFFF99"><strong>后台管理系统</strong></td>
</tr>
<tr>
<td width="156" height="287" align="left" valign="top" bgcolor="#FFFF99">
<p><a href="add.php">发布文章</a></p>
<p><a href="manage.php">管理文章</a></p>
<td width="837" valign="top" bgcolor="FFFFFF"><form id="form1" name="form1" method="post" action="modify.handle.php">
<input type="hidden" name="id" value="<?php echo $data['id']?>" />
<table width="779" border="0" cellpadding="8" cellspacing="1">
<tr>
<td colspan="2" align="center">修改文章</td>
</tr>
<tr>
<td width="119">标题</td>
<td width="625"><label for="title"></label>
<input type="text" name="title" id="title" value="<?php echo $data['title']?>"/></td>
</tr>
<tr>
						<td>
						<textarea name="content" id="myEditor"><?php echo $data['content']?></textarea>
						<script type="text/javascript"> 
    var editor = UE.getEditor('myEditor',{initialFrameWidth:600,initialFrameHeight:240});
</script>
</td>
</tr>
<td colspan="2" align="right"><input type="submit" name="buttom" id="buttom" value="提交"/></td>
</tr>
</table>
</form></td>
</tr>
</table>
</body>
</html>

