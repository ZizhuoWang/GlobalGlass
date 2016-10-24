<?php
require_once '../connect.php';
//把传递过来的信息入库,在入库之前对所有信息进行校验
if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
    echo "<script>alert('标题不能为空');window.location.href='add.php';</script>";
    
}else{
$id=$_POST['id'];
$title=$_POST['title'];
// $author=$_POST['author'];
// $description=$_POST['description'];
$content=$_POST['content'];
$dateline=time();
$updatesql="update article set title='$title',content='$content',dateline=$dateline where id=$id";
if(mysql_query($updatesql)){
    echo "<script>alert('修改成功');window.location.href='manage.php';</script>";
}else{
    echo "<script>alert('修改失败');window.location.href='manage.php';</script>";
}
}
?>