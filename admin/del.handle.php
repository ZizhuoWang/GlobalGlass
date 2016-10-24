<?php
require_once '../connect.php';
$id=$_GET['id'];
$deletesql="delete from article where id=$id";
if (mysql_query($deletesql)) {
  echo "<script>alert('删除成功');window.location.href='add.php';</script>";
}else{
    echo "<script>alert('删除失败');window.location.href='add.php';</script>";
}
?>
