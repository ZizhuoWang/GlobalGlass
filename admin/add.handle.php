<?php
require_once '../connect.php';
//把传递过来的信息入库,在入库之前对所有信息进行校验
if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
    echo "<script>alert('标题不能为空');window.location.href='add.php';</script>";
    exit();    
}
$title=$_POST['title'];
// $author=$_POST['author'];
// $description=$_POST['description'];
$content=$_POST['content'];
$dateline=time();
$insertsql ="insert article(title,content,dateline) values('$title','$content',$dateline) ";
if(mysql_query($insertsql)){
    echo "<script>alert('发布成功');window.location.href='add.php';</script>";
}else{
    echo "<script>alert('发布失败');window.location.href='add.php';</script>";
}